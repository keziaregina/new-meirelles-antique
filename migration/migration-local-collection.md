# Migration: Local Collection Feature

## Forward Migration

### 1. Add columns to `oc_collection_location`

```sql
ALTER TABLE `oc_collection_location`
ADD COLUMN `address_1` VARCHAR(255) NULL AFTER `name`,
ADD COLUMN `address_2` VARCHAR(255) NULL AFTER `address_1`,
ADD COLUMN `city` VARCHAR(128) NULL AFTER `address_2`,
ADD COLUMN `zone_id` INT(11) NULL AFTER `city`,
ADD COLUMN `country_id` INT(11) NULL AFTER `zone_id`,
ADD COLUMN `postcode` VARCHAR(10) NULL AFTER `country_id`,
ADD COLUMN `phone` VARCHAR(32) NULL AFTER `postcode`,
ADD COLUMN `latitude` DECIMAL(10,8) NULL AFTER `phone`,
ADD COLUMN `longitude` DECIMAL(11,8) NULL AFTER `latitude`,
ADD COLUMN `sort_order` INT(11) DEFAULT 0 AFTER `longitude`,
ADD COLUMN `status` TINYINT(1) DEFAULT 1 AFTER `sort_order`;
```

### 2. Update existing data (adjust IDs & store data to match your database)

```sql
UPDATE `oc_collection_location` SET
  `address_1` = 'Rua XV de Novembro, 123',
  `address_2` = 'Centro',
  `city` = 'Joinville',
  `zone_id` = 600,
  `country_id` = 30,
  `postcode` = '89201-000',
  `phone` = '(47) 3025-1234',
  `sort_order` = 1,
  `status` = 1
WHERE `collection_location_id` = 1;

UPDATE `oc_collection_location` SET
  `address_1` = 'Av. Getúlio Vargas, 456',
  `address_2` = 'Boa Vista',
  `city` = 'Joinville',
  `zone_id` = 600,
  `country_id` = 30,
  `postcode` = '89202-000',
  `phone` = '(47) 3025-5678',
  `sort_order` = 2,
  `status` = 1
WHERE `collection_location_id` = 2;
```

> Note: `zone_id` = 600 (Santa Catarina), `country_id` = 30 (Brazil) — adjust to match your database.

### 3. Add columns to `oc_order`

```sql
ALTER TABLE `oc_order` 
ADD COLUMN `collection_location_id` INT(11) NULL AFTER `shipping_address_format`,
ADD COLUMN `pickup_datetime` VARCHAR(100) NULL AFTER `collection_location_id`;
```

---

## Rollback Migration

> Run this to restore the database to its state before the update.

### 1. Drop columns from `oc_order`

```sql
ALTER TABLE `oc_order`
DROP COLUMN `collection_location_id`,
DROP COLUMN `pickup_datetime`;
```

### 2. Reset data in `oc_collection_location`

```sql
UPDATE `oc_collection_location` SET
  `address_1` = NULL,
  `address_2` = NULL,
  `city` = NULL,
  `zone_id` = NULL,
  `country_id` = NULL,
  `postcode` = NULL,
  `phone` = NULL,
  `latitude` = NULL,
  `longitude` = NULL,
  `sort_order` = 0,
  `status` = 1;
```

### 3. Drop columns from `oc_collection_location`

```sql
ALTER TABLE `oc_collection_location`
DROP COLUMN `address_1`,
DROP COLUMN `address_2`,
DROP COLUMN `city`,
DROP COLUMN `zone_id`,
DROP COLUMN `country_id`,
DROP COLUMN `postcode`,
DROP COLUMN `phone`,
DROP COLUMN `latitude`,
DROP COLUMN `longitude`,
DROP COLUMN `sort_order`,
DROP COLUMN `status`;
```
