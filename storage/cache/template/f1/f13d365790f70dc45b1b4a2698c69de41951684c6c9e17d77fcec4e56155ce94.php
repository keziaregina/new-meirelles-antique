<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* extension/module/wd_megamenu/top_item_form.twig */
class __TwigTemplate_ca17cf2bf8f0e910fc7615e00e8adbce0690525a3df0f519ec0e64e0fd36d065 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<a class=\"a-close\" onclick=\"wd_megamenu.closeForm()\"><i class=\"fa fa-close\" aria-hidden=\"true\"></i></a>
<input type=\"hidden\" id=\"input-append-categories-link\" value=\"";
        // line 2
        echo ($context["append_categories_link"] ?? null);
        echo "\" />
<div class=\"frm-container\">
    <div class=\"frm-heading\">
        <h4 class=\"frm-title\">";
        // line 5
        echo ($context["text_item_form"] ?? null);
        echo "</h4>
    </div>
    <div class=\"frm-body\">
        <div class=\"frm-button\">
            <button type=\"button\" class=\"btn btn-primary btn-submit\" onclick=\"wd_megamenu.submitTopItemForm(";
        // line 9
        echo ($context["menu_id"] ?? null);
        echo ")\" title=\"";
        echo ($context["button_save"] ?? null);
        echo "\"><i class=\"fa fa-save\"></i> Save</button>
        </div>
        <div class=\"col-md-2 frm-left\">
            <ul class=\"frm-list\">
                <li class=\"active\"><a href=\"#tab-general\" data-toggle=\"tab\">";
        // line 13
        echo ($context["text_general_setting"] ?? null);
        echo "</a></li>
                <li><a href=\"#tab-content\" data-toggle=\"tab\">";
        // line 14
        echo ($context["text_content_setting"] ?? null);
        echo "</a></li>
            </ul>
        </div>
        <div class=\"col-md-10 frm-right\">
            ";
        // line 18
        if (($context["error_warning"] ?? null)) {
            // line 19
            echo "            <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo ($context["error_warning"] ?? null);
            echo "
                <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
            </div>
            ";
        }
        // line 23
        echo "            <form action=\"";
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-menu-item\" class=\"form-horizontal\">
                <div class=\"tab-content\">
                    <!-- General Settings -->
                    <div id=\"tab-general\" class=\"tab-pane active\">
                        <div class=\"frm-group\">
                            <label class=\"frm-label col-sm-2\" for=\"input-item-name\">";
        // line 28
        echo ($context["entry_item_name"] ?? null);
        echo "</label>
                            <div class=\"col-sm-6\">
                                <input type=\"text\" id=\"input-item-name\" class=\"form-control\" value=\"";
        // line 30
        echo ($context["name"] ?? null);
        echo "\" name=\"name\" />
                                ";
        // line 31
        if (($context["error_name"] ?? null)) {
            // line 32
            echo "                                    <div class=\"text-danger\">";
            echo ($context["error_name"] ?? null);
            echo "</div>
                                ";
        }
        // line 34
        echo "                            </div>
                        </div>
                        <div class=\"frm-group\">
                            <label class=\"frm-label col-sm-2\" for=\"input-status\">";
        // line 37
        echo ($context["entry_status"] ?? null);
        echo "</label>
                            <div class=\"col-sm-4\">
                                <select name=\"status\" id=\"input-status\" class=\"form-control\">
                                    ";
        // line 40
        if (($context["status"] ?? null)) {
            // line 41
            echo "                                        <option value=\"1\" selected=\"selected\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                                        <option value=\"0\">";
            // line 42
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                                    ";
        } else {
            // line 44
            echo "                                        <option value=\"1\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                                        <option value=\"0\" selected=\"selected\">";
            // line 45
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                                    ";
        }
        // line 47
        echo "                                </select>
                            </div>
                        </div>
                        <div class=\"frm-group\">
                            <label class=\"frm-label col-sm-2\" for=\"input-title\">";
        // line 51
        echo ($context["entry_title"] ?? null);
        echo "</label>
                            <div class=\"col-sm-6\">
                                ";
        // line 53
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 54
            echo "                                <div class=\"input-group\">
                                    <span class=\"input-group-addon\"><img src=\"language/";
            // line 55
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 55);
            echo "/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 55);
            echo ".png\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 55);
            echo "\" /> ";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 55);
            echo "</span>
                                    <input type=\"text\" name=\"title[";
            // line 56
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 56);
            echo "]\" value=\"";
            echo (((($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = ($context["title"] ?? null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 56)] ?? null) : null)) ? ((($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = ($context["title"] ?? null)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 56)] ?? null) : null)) : (""));
            echo "\" placeholder=\"\" id=\"input-title";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 56);
            echo "\" class=\"form-control\" />
                                </div>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 59
        echo "                            </div>
                            <div class=\"col-sm-1\"></div>
                            <div class=\"col-sm-3\">
                                <div class=\"checkbox\">
                                    <input type=\"checkbox\" name=\"disable_title\" value=\"";
        // line 63
        echo ($context["disable_title"] ?? null);
        echo "\" ";
        if (($context["disable_title"] ?? null)) {
            echo " checked=\"checked\" ";
        }
        echo " /> ";
        echo ($context["text_hide_title"] ?? null);
        echo "
                                </div>
                            </div>
                        </div>
                        <div class=\"frm-group\">
                            <label class=\"frm-label col-sm-2\" for=\"input-link\">";
        // line 68
        echo ($context["entry_link"] ?? null);
        echo "</label>
                            <div class=\"col-sm-6\">
                                <input type=\"text\" id=\"input-link\" name=\"link\" value=\"";
        // line 70
        echo ($context["link"] ?? null);
        echo "\" class=\"form-control\" />
                                <div class=\"frm-info\">
                                    <i class=\"fa fa-info-circle\" aria-hidden=\"true\"></i> <span>";
        // line 72
        echo ($context["text_link_info"] ?? null);
        echo "</span>
                                </div>
                            </div>
                            <div class=\"col-sm-1\"></div>
                            <div class=\"col-sm-3\">
                                <div class=\"checkbox\">
                                    <input type=\"checkbox\" name=\"disable_link\" value=\"";
        // line 78
        echo ($context["disable_link"] ?? null);
        echo "\" ";
        if (($context["disable_link"] ?? null)) {
            echo " checked=\"checked\" ";
        }
        echo " /> ";
        echo ($context["text_disable_link"] ?? null);
        echo "
                                </div>
                            </div>
                        </div>
                        <div class=\"frm-group\">
                            <label class=\"frm-label col-sm-2\" for=\"input-sub-menu-type\">";
        // line 83
        echo ($context["entry_sub_menu_type"] ?? null);
        echo "</label>
                            <div class=\"col-sm-4\">
                                <select name=\"sub_menu_type\" id=\"input-sub-menu-type\" class=\"form-control\">
                                    <option value=\"mega\"    ";
        // line 86
        if ((($context["sub_menu_type"] ?? null) == "mega")) {
            echo "    selected=\"selected\" ";
        }
        echo ">";
        echo ($context["text_megamenu"] ?? null);
        echo "</option>
                                    <option value=\"flyout\"  ";
        // line 87
        if ((($context["sub_menu_type"] ?? null) == "flyout")) {
            echo "  selected=\"selected\" ";
        }
        echo ">";
        echo ($context["text_flyoutmenu"] ?? null);
        echo "</option>
                                </select>
                            </div>
                        </div>
                        <div class=\"frm-group\">
                            <label class=\"frm-label col-sm-2\" for=\"input-position\">";
        // line 92
        echo ($context["entry_position"] ?? null);
        echo "</label>
                            <div class=\"col-sm-4\">
                                <input type=\"text\" id=\"input-position\" name=\"position\" value=\"";
        // line 94
        echo ($context["position"] ?? null);
        echo "\" class=\"form-control\" />
                            </div>
                        </div>
                        
                        <!--<div class=\"frm-group\">
                            <label class=\"frm-label col-sm-2\" for=\"input-icon\">";
        // line 99
        echo ($context["entry_icon"] ?? null);
        echo "</label>
                            <div class=\"col-sm-6\">
                                <a href=\"\" id=\"thumb-image\" data-toggle=\"image\" class=\"img-thumbnail\"><img src=\"";
        // line 101
        echo ($context["thumb"] ?? null);
        echo "\" alt=\"\" title=\"\" data-placeholder=\"";
        echo ($context["placeholder"] ?? null);
        echo "\" /></a>
                                <input type=\"hidden\" name=\"icon\" value=\"";
        // line 102
        echo ($context["icon"] ?? null);
        echo "\" id=\"input-image\" />
                            </div>
                        </div>-->
                    </div>

                    <!-- Content Settings -->
                    <div id=\"tab-content\" class=\"tab-pane\">
                        <div class=\"frm-info\">
                            <i class=\"fa fa-info-circle\" aria-hidden=\"true\"></i> <span>";
        // line 110
        echo ($context["text_megamenu_info"] ?? null);
        echo "</span>
                        </div>
                        <div class=\"frm-group\">
                            <label class=\"frm-label col-sm-2\" for=\"input-sub-menu-content-type\">";
        // line 113
        echo ($context["entry_sub_menu_content_type"] ?? null);
        echo "</label>
                            <div class=\"col-sm-4\">
                                <select name=\"sub_menu_content_type\" id=\"input-sub-menu-content-type\" class=\"form-control\">
                                    <option value=\"widget\"   ";
        // line 116
        if ((($context["sub_menu_content_type"] ?? null) == "widget")) {
            echo "    selected=\"selected\" ";
        }
        echo ">";
        echo ($context["text_widget"] ?? null);
        echo "</option>
                                    <option value=\"category\" ";
        // line 117
        if ((($context["sub_menu_content_type"] ?? null) == "category")) {
            echo "  selected=\"selected\" ";
        }
        echo ">";
        echo ($context["text_category"] ?? null);
        echo "</option>
                                    <option value=\"children\" ";
        // line 118
        if ((($context["sub_menu_content_type"] ?? null) == "children")) {
            echo "  selected=\"selected\" ";
        }
        echo ">";
        echo ($context["text_children"] ?? null);
        echo "</option>
                                </select>
                            </div>
                            <div class=\"col-sm-6\">
                                <div class=\"frm-info\">
                                    <i class=\"fa fa-info-circle\" aria-hidden=\"true\"></i> <span>";
        // line 123
        echo ($context["text_sub_menu_info"] ?? null);
        echo "</span>
                                </div>
                            </div>
                        </div>
                        <div class=\"frm-group frm-group-content frm-group-category\">
                            <label class=\"frm-label col-sm-2\" for=\"input-sub-menu-category\">";
        // line 128
        echo ($context["text_choose_top_category"] ?? null);
        echo "</label>
                            <div class=\"col-sm-4 frm-group-category\">
                                <select name=\"category_id\" id=\"input-sub-menu-category\" class=\"form-control\">
                                    ";
        // line 131
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 132
            echo "                                        <option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["category"], "category_id", [], "any", false, false, false, 132);
            echo "\" ";
            if ((($context["category_id"] ?? null) == twig_get_attribute($this->env, $this->source, $context["category"], "category_id", [], "any", false, false, false, 132))) {
                echo " selected=\"selected\" ";
            }
            echo ">";
            echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 132);
            echo "</option>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 134
        echo "                                </select>
                            </div>
                            <div class=\"col-sm-2 frm-group-category\">
                                <button type=\"button\" class=\"btn btn-primary btn-widget\" onclick=\"wd_megamenu.addCategoryWidget()\"><i class=\"fa fa-plus\"></i> ";
        // line 137
        echo ($context["text_add_widget"] ?? null);
        echo "</button>
                                <img class=\"frm-loader-img\" src=\"";
        // line 138
        echo ($context["loader_image"] ?? null);
        echo "\" alt=\"loader_image\" />
                            </div>
                        </div>
                        <div class=\"frm-group frm-group-content frm-group-widget\">
                            <label class=\"frm-label col-sm-2\">";
        // line 142
        echo ($context["entry_megamenu_editor"] ?? null);
        echo "</label>
                            <div class=\"col-sm-4\">
                                <select id=\"widget-type\" class=\"form-control\">
                                    <option value=\"category\">";
        // line 145
        echo ($context["text_category"] ?? null);
        echo "</option>
                                    <option value=\"product\">";
        // line 146
        echo ($context["text_product"] ?? null);
        echo "</option>
                                    <option value=\"html\">";
        // line 147
        echo ($context["text_html"] ?? null);
        echo "</option>
                                    <<option value=\"link\">";
        // line 148
        echo ($context["text_link"] ?? null);
        echo "</option>
                                </select>
                            </div>
                            <div class=\"col-sm-4\">
                                <select id=\"widget-cols\" class=\"form-control\">
                                    <option value=\"2\">";
        // line 153
        echo ((1 . " ") . ($context["text_column"] ?? null));
        echo "</option>
                                    <option value=\"4\">";
        // line 154
        echo ((2 . " ") . ($context["text_columns"] ?? null));
        echo "</option>
                                    <option value=\"6\">";
        // line 155
        echo ((3 . " ") . ($context["text_columns"] ?? null));
        echo "</option>
                                    <option value=\"8\">";
        // line 156
        echo ((4 . " ") . ($context["text_columns"] ?? null));
        echo "</option>
                                    <option value=\"10\">";
        // line 157
        echo ((5 . " ") . ($context["text_columns"] ?? null));
        echo "</option>
                                    <option value=\"12\">";
        // line 158
        echo ((6 . " ") . ($context["text_columns"] ?? null));
        echo "</option>
                                </select>
                            </div>
                            <div class=\"col-sm-2\">
                                <button type=\"button\" class=\"btn btn-primary btn-widget\" onclick=\"wd_megamenu.addWidget()\"><i class=\"fa fa-plus\"></i> ";
        // line 162
        echo ($context["text_add_widget"] ?? null);
        echo "</button>
                                <img class=\"frm-loader-img\" src=\"";
        // line 163
        echo ($context["loader_image"] ?? null);
        echo "\" alt=\"loader_image\" />
                            </div>
                        </div>

                        <div class=\"frm-group frm-group-content frm-group-children\">
                            <label class=\"frm-label col-sm-2\" for=\"input-cols\">";
        // line 168
        echo ($context["entry_number_cols"] ?? null);
        echo "</label>
                            <div class=\"col-sm-4\">
                                <select id=\"input-cols\" name=\"sub_menu_content_columns\" class=\"form-control\">
                                    <option value=\"1\" ";
        // line 171
        if ((($context["sub_menu_content_columns"] ?? null) == 1)) {
            echo " selected=\"selected\" ";
        }
        echo ">";
        echo ((1 . " ") . ($context["text_column"] ?? null));
        echo "</option>
                                    <option value=\"2\" ";
        // line 172
        if ((($context["sub_menu_content_columns"] ?? null) == 2)) {
            echo " selected=\"selected\" ";
        }
        echo ">";
        echo ((2 . " ") . ($context["text_columns"] ?? null));
        echo "</option>
                                    <option value=\"3\" ";
        // line 173
        if ((($context["sub_menu_content_columns"] ?? null) == 3)) {
            echo " selected=\"selected\" ";
        }
        echo ">";
        echo ((3 . " ") . ($context["text_columns"] ?? null));
        echo "</option>
                                    <option value=\"4\" ";
        // line 174
        if ((($context["sub_menu_content_columns"] ?? null) == 4)) {
            echo " selected=\"selected\" ";
        }
        echo ">";
        echo ((4 . " ") . ($context["text_columns"] ?? null));
        echo "</option>
                                    <option value=\"5\" ";
        // line 175
        if ((($context["sub_menu_content_columns"] ?? null) == 5)) {
            echo " selected=\"selected\" ";
        }
        echo ">";
        echo ((5 . " ") . ($context["text_columns"] ?? null));
        echo "</option>
                                    <option value=\"6\" ";
        // line 176
        if ((($context["sub_menu_content_columns"] ?? null) == 6)) {
            echo " selected=\"selected\" ";
        }
        echo ">";
        echo ((6 . " ") . ($context["text_columns"] ?? null));
        echo "</option>
                                </select>
                            </div>
                        </div>
                        <!-- Widget Type Container -->
                        <div class=\"widget-container widget-sortable\" id=\"widget-type-widget-container\">
                            ";
        // line 182
        if (($context["widget"] ?? null)) {
            // line 183
            echo "                                ";
            if (twig_get_attribute($this->env, $this->source, ($context["widget"] ?? null), "widget", [], "any", false, false, false, 183)) {
                // line 184
                echo "                                    ";
                $context["i"] = 0;
                // line 185
                echo "                                    ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["widget"] ?? null), "widget", [], "any", false, false, false, 185));
                foreach ($context['_seq'] as $context["_key"] => $context["w"]) {
                    // line 186
                    echo "                                        <div class=\"widget-block col-sm-";
                    echo twig_get_attribute($this->env, $this->source, $context["w"], "cols", [], "any", false, false, false, 186);
                    echo "\">
                                            <div class=\"widget-content\">
                                                <div class=\"widget-resize-action\">
                                                    <a class=\"a-resize-minus a-left\" onclick=\"wd_megamenu.decreaseColumn(\$(this))\"><i class=\"fa fa-chevron-left\" aria-hidden=\"true\"></i></a>
                                                    <a class=\"a-resize-plus a-left\" onclick=\"wd_megamenu.increaseColumn(\$(this))\"><i class=\"fa fa-chevron-right\" aria-hidden=\"true\"></i></a>
                                                    <a class=\"a-delete a-right\" onclick=\"wd_megamenu.deleteWidget(\$(this))\"><i class=\"fa fa-times-circle\" aria-hidden=\"true\"></i></a>
                                                    <a class=\"a-config a-right\" onclick=\"wd_megamenu.showWidgetConfiguration(\$(this))\"><i class=\"fa fa-cogs\" aria-hidden=\"true\"></i></a>
                                                </div>
                                                <div class=\"widget-name-container\">
                                                    ";
                    // line 195
                    if (((twig_get_attribute($this->env, $this->source, $context["w"], "type", [], "any", false, false, false, 195) == "category") || (twig_get_attribute($this->env, $this->source, $context["w"], "type", [], "any", false, false, false, 195) == "product"))) {
                        // line 196
                        echo "                                                        <i class=\"fa fa-star\" aria-hidden=\"true\"></i><span class=\"name\">";
                        echo ((twig_get_attribute($this->env, $this->source, $context["w"], "name", [], "any", false, false, false, 196)) ? (twig_get_attribute($this->env, $this->source, $context["w"], "name", [], "any", false, false, false, 196)) : ("..."));
                        echo "</span>
                                                    ";
                    }
                    // line 198
                    echo "
                                                    ";
                    // line 199
                    if (((twig_get_attribute($this->env, $this->source, $context["w"], "type", [], "any", false, false, false, 199) == "html") || (twig_get_attribute($this->env, $this->source, $context["w"], "type", [], "any", false, false, false, 199) == "link"))) {
                        // line 200
                        echo "                                                        <i class=\"fa fa-star\" aria-hidden=\"true\"></i><span class=\"name\">";
                        echo (((($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = twig_get_attribute($this->env, $this->source, $context["w"], "name", [], "any", false, false, false, 200)) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b[($context["lang_id"] ?? null)] ?? null) : null)) ? ((($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = twig_get_attribute($this->env, $this->source, $context["w"], "name", [], "any", false, false, false, 200)) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002[($context["lang_id"] ?? null)] ?? null) : null)) : ("..."));
                        echo "</span>
                                                    ";
                    }
                    // line 202
                    echo "                                                </div>
                                            </div>

                                            ";
                    // line 205
                    if ((twig_get_attribute($this->env, $this->source, $context["w"], "type", [], "any", false, false, false, 205) == "category")) {
                        // line 206
                        echo "                                                <div class=\"widget-configuration\">
                                                    <div class=\"option\"><input type=\"text\" class=\"w-category\" placeholder=\"";
                        // line 207
                        echo ($context["text_choose_category"] ?? null);
                        echo "\" /></div>
                                                    <div class=\"option\"><input type=\"checkbox\" class=\"show-image\" ";
                        // line 208
                        if ((twig_get_attribute($this->env, $this->source, $context["w"], "show_image", [], "any", false, false, false, 208) == 1)) {
                            echo " checked=\"checked\" ";
                        }
                        echo " /> ";
                        echo ($context["text_show_image"] ?? null);
                        echo "</div>
                                                    <div class=\"option\"><input type=\"checkbox\" class=\"show-child\" ";
                        // line 209
                        if ((twig_get_attribute($this->env, $this->source, $context["w"], "show_child", [], "any", false, false, false, 209) == 1)) {
                            echo " checked=\"checked\" ";
                        }
                        echo " /> ";
                        echo ($context["text_show_child"] ?? null);
                        echo "</div>
                                                </div>
                                                <input type=\"hidden\" class=\"widget-name\" value=\"";
                        // line 211
                        echo twig_get_attribute($this->env, $this->source, $context["w"], "name", [], "any", false, false, false, 211);
                        echo "\" name=\"widget[widget][";
                        echo ($context["i"] ?? null);
                        echo "][name]\" />
                                                <input type=\"hidden\" class=\"widget-category-id\" value=\"";
                        // line 212
                        echo twig_get_attribute($this->env, $this->source, $context["w"], "category_id", [], "any", false, false, false, 212);
                        echo "\" name=\"widget[widget][";
                        echo ($context["i"] ?? null);
                        echo "][category_id]\" />
                                                <input type=\"hidden\" class=\"widget-show-image\" value=\"";
                        // line 213
                        echo twig_get_attribute($this->env, $this->source, $context["w"], "show_image", [], "any", false, false, false, 213);
                        echo "\" name=\"widget[widget][";
                        echo ($context["i"] ?? null);
                        echo "][show_image]\" />
                                                <input type=\"hidden\" class=\"widget-show-child\" value=\"";
                        // line 214
                        echo twig_get_attribute($this->env, $this->source, $context["w"], "show_child", [], "any", false, false, false, 214);
                        echo "\" name=\"widget[widget][";
                        echo ($context["i"] ?? null);
                        echo "][show_child]\" />
                                            ";
                    }
                    // line 216
                    echo "
                                            ";
                    // line 217
                    if ((twig_get_attribute($this->env, $this->source, $context["w"], "type", [], "any", false, false, false, 217) == "product")) {
                        // line 218
                        echo "                                                <div class=\"widget-configuration\">
                                                    <div class=\"option\"><input type=\"text\" class=\"w-product\" placeholder=\"";
                        // line 219
                        echo ($context["text_choose_product"] ?? null);
                        echo "\" /></div>
                                                    <div class=\"option\"><input type=\"checkbox\" class=\"show-image\" ";
                        // line 220
                        if ((twig_get_attribute($this->env, $this->source, $context["w"], "show_image", [], "any", false, false, false, 220) == 1)) {
                            echo " checked=\"checked\" ";
                        }
                        echo " /> ";
                        echo ($context["text_show_image"] ?? null);
                        echo "</div>
                                                </div>
                                                <input type=\"hidden\" class=\"widget-name\" value=\"";
                        // line 222
                        echo twig_get_attribute($this->env, $this->source, $context["w"], "name", [], "any", false, false, false, 222);
                        echo "\" name=\"widget[widget][";
                        echo ($context["i"] ?? null);
                        echo "][name]\" />
                                                <input type=\"hidden\" class=\"widget-product-id\" value=\"";
                        // line 223
                        echo twig_get_attribute($this->env, $this->source, $context["w"], "product_id", [], "any", false, false, false, 223);
                        echo "\" name=\"widget[widget][";
                        echo ($context["i"] ?? null);
                        echo "][product_id]\" />
                                                <input type=\"hidden\" class=\"widget-show-image\" value=\"";
                        // line 224
                        echo twig_get_attribute($this->env, $this->source, $context["w"], "show_image", [], "any", false, false, false, 224);
                        echo "\" name=\"widget[widget][";
                        echo ($context["i"] ?? null);
                        echo "][show_image]\" />
                                            ";
                    }
                    // line 226
                    echo "
                                            ";
                    // line 227
                    if ((twig_get_attribute($this->env, $this->source, $context["w"], "type", [], "any", false, false, false, 227) == "html")) {
                        // line 228
                        echo "                                                <div class=\"widget-configuration\">
                                                    <ul class=\"nav nav-tabs ul-widget-lang\" id=\"ul-widget-html-";
                        // line 229
                        echo ($context["i"] ?? null);
                        echo "\">
                                                        ";
                        // line 230
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
                        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                            // line 231
                            echo "                                                            <li><a href=\"#widget-html-language";
                            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 231);
                            echo "-";
                            echo ($context["i"] ?? null);
                            echo "\" data-toggle=\"tab\"><img src=\"language/";
                            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 231);
                            echo "/";
                            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 231);
                            echo ".png\" title=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 231);
                            echo "\" /> ";
                            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 231);
                            echo "</a></li>
                                                        ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 233
                        echo "                                                    </ul>
                                                    <div class=\"tab-content\" id=\"tab-widget-html-";
                        // line 234
                        echo ($context["i"] ?? null);
                        echo "\">
                                                        ";
                        // line 235
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
                        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                            // line 236
                            echo "                                                            <div class=\"tab-pane\" id=\"widget-html-language";
                            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 236);
                            echo "-";
                            echo ($context["i"] ?? null);
                            echo "\">
                                                                <div class=\"option\"><input type=\"text\" name=\"widget[widget][";
                            // line 237
                            echo ($context["i"] ?? null);
                            echo "][name][";
                            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 237);
                            echo "]\" value=\"";
                            echo (($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 = twig_get_attribute($this->env, $this->source, $context["w"], "name", [], "any", false, false, false, 237)) && is_array($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4) || $__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 instanceof ArrayAccess ? ($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 237)] ?? null) : null);
                            echo "\" placeholder=\"";
                            echo ($context["text_title"] ?? null);
                            echo "\" /></div>
                                                                <div class=\"option\">
                                                                    <textarea data-toggle=\"summernote\" rows=\"10\" class=\"w-html-content\" name=\"widget[widget][";
                            // line 239
                            echo ($context["i"] ?? null);
                            echo "][content][";
                            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 239);
                            echo "]\" placeholder=\"";
                            echo ($context["text_html"] ?? null);
                            echo "\">";
                            echo (($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 = twig_get_attribute($this->env, $this->source, $context["w"], "content", [], "any", false, false, false, 239)) && is_array($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666) || $__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 instanceof ArrayAccess ? ($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 239)] ?? null) : null);
                            echo "</textarea>
                                                                </div>
                                                            </div>
                                                        ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 243
                        echo "                                                    </div>
                                                    <div class=\"option\"><input type=\"checkbox\" class=\"show-title\" ";
                        // line 244
                        if ((twig_get_attribute($this->env, $this->source, $context["w"], "show_title", [], "any", false, false, false, 244) == 0)) {
                            echo " checked=\"checked\" ";
                        }
                        echo " /> ";
                        echo ($context["text_hide_title"] ?? null);
                        echo "</div>
                                                </div>
                                                <input type=\"hidden\" class=\"widget-show-title\" value=\"";
                        // line 246
                        echo ((twig_get_attribute($this->env, $this->source, $context["w"], "show_title", [], "any", false, false, false, 246)) ? (twig_get_attribute($this->env, $this->source, $context["w"], "show_title", [], "any", false, false, false, 246)) : (0));
                        echo "\" name=\"widget[widget][";
                        echo ($context["i"] ?? null);
                        echo "][show_title]\" />
                                            ";
                    }
                    // line 248
                    echo "
                                            ";
                    // line 249
                    if ((twig_get_attribute($this->env, $this->source, $context["w"], "type", [], "any", false, false, false, 249) == "link")) {
                        // line 250
                        echo "                                                <div class=\"widget-configuration\">
                                                    <ul class=\"nav nav-tabs ul-widget-lang\" id=\"ul-widget-link-";
                        // line 251
                        echo ($context["i"] ?? null);
                        echo "\">
                                                        ";
                        // line 252
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
                        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                            // line 253
                            echo "                                                            <li><a href=\"#widget-link-language";
                            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 253);
                            echo "-";
                            echo ($context["i"] ?? null);
                            echo "\" data-toggle=\"tab\"><img src=\"language/";
                            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 253);
                            echo "/";
                            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 253);
                            echo ".png\" title=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 253);
                            echo "\" /> ";
                            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 253);
                            echo "</a></li>
                                                        ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 255
                        echo "                                                    </ul>
                                                    <div class=\"tab-content\" id=\"tab-widget-link-";
                        // line 256
                        echo ($context["i"] ?? null);
                        echo "\">
                                                        ";
                        // line 257
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
                        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                            // line 258
                            echo "                                                            <div class=\"tab-pane\" id=\"widget-link-language";
                            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 258);
                            echo "-";
                            echo ($context["i"] ?? null);
                            echo "\">
                                                                <div class=\"option\"><input type=\"text\" name=\"widget[widget][";
                            // line 259
                            echo ($context["i"] ?? null);
                            echo "][name][";
                            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 259);
                            echo "]\" value=\"";
                            echo (($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e = twig_get_attribute($this->env, $this->source, $context["w"], "name", [], "any", false, false, false, 259)) && is_array($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e) || $__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e instanceof ArrayAccess ? ($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 259)] ?? null) : null);
                            echo "\" placeholder=\"";
                            echo ($context["text_title"] ?? null);
                            echo "\" /></div>
                                                            </div>
                                                        ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 262
                        echo "                                                    </div>
                                                    <div class=\"option\"><input type=\"text\" name=\"widget[widget][";
                        // line 263
                        echo ($context["i"] ?? null);
                        echo "][link]\" value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["w"], "link", [], "any", false, false, false, 263);
                        echo "\" placeholder=\"";
                        echo ($context["text_link"] ?? null);
                        echo "\" /></div>
                                                </div>
                                            ";
                    }
                    // line 266
                    echo "
                                            <input type=\"hidden\" class=\"widget-type\" value=\"";
                    // line 267
                    echo twig_get_attribute($this->env, $this->source, $context["w"], "type", [], "any", false, false, false, 267);
                    echo "\" name=\"widget[widget][";
                    echo ($context["i"] ?? null);
                    echo "][type]\" />
                                            <input type=\"hidden\" class=\"widget-cols\" value=\"";
                    // line 268
                    echo twig_get_attribute($this->env, $this->source, $context["w"], "cols", [], "any", false, false, false, 268);
                    echo "\" name=\"widget[widget][";
                    echo ($context["i"] ?? null);
                    echo "][cols]\" />
                                            <input type=\"hidden\" class=\"widget-position\" value=\"";
                    // line 269
                    echo twig_get_attribute($this->env, $this->source, $context["w"], "position", [], "any", false, false, false, 269);
                    echo "\" name=\"widget[widget][";
                    echo ($context["i"] ?? null);
                    echo "][position]\" />
                                        </div>
                                        ";
                    // line 271
                    $context["i"] = (($context["i"] ?? null) + 1);
                    // line 272
                    echo "                                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['w'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 273
                echo "                                ";
            } else {
                // line 274
                echo "                                    <p class=\"p-widget-items\">";
                echo ($context["text_no_children_items"] ?? null);
                echo "</p>
                                ";
            }
            // line 276
            echo "                            ";
        } else {
            // line 277
            echo "                                <p class=\"p-widget-items\">";
            echo ($context["text_no_children_items"] ?? null);
            echo "</p>
                            ";
        }
        // line 279
        echo "                        </div>

                        <!-- Category Type Container -->
                        <div class=\"widget-container widget-sortable\" id=\"widget-type-category-container\">
                            ";
        // line 283
        if (($context["widget"] ?? null)) {
            // line 284
            echo "                                ";
            if (twig_get_attribute($this->env, $this->source, ($context["widget"] ?? null), "category", [], "any", false, false, false, 284)) {
                // line 285
                echo "                                    ";
                $context["i"] = 0;
                // line 286
                echo "                                    ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["widget"] ?? null), "category", [], "any", false, false, false, 286));
                foreach ($context['_seq'] as $context["_key"] => $context["w"]) {
                    // line 287
                    echo "                                        <div class=\"widget-block col-sm-";
                    echo twig_get_attribute($this->env, $this->source, $context["w"], "cols", [], "any", false, false, false, 287);
                    echo "\">
                                            <div class=\"widget-content\">
                                                <div class=\"widget-resize-action\">
                                                    <a class=\"a-resize-minus a-left\" onclick=\"wd_megamenu.decreaseColumn(\$(this))\"><i class=\"fa fa-chevron-left\" aria-hidden=\"true\"></i></a>
                                                    <a class=\"a-resize-plus a-left\" onclick=\"wd_megamenu.increaseColumn(\$(this))\"><i class=\"fa fa-chevron-right\" aria-hidden=\"true\"></i></a>
                                                    <a class=\"a-delete a-right\" onclick=\"wd_megamenu.deleteWidget(\$(this))\"><i class=\"fa fa-times-circle\" aria-hidden=\"true\"></i></a>
                                                    <a class=\"a-config a-right\" onclick=\"wd_megamenu.showWidgetConfiguration(\$(this))\"><i class=\"fa fa-cogs\" aria-hidden=\"true\"></i></a>
                                                </div>
                                                <div class=\"widget-name-container\">
                                                    <i class=\"fa fa-star\" aria-hidden=\"true\"></i><span class=\"name\">";
                    // line 296
                    echo ((twig_get_attribute($this->env, $this->source, $context["w"], "name", [], "any", false, false, false, 296)) ? (twig_get_attribute($this->env, $this->source, $context["w"], "name", [], "any", false, false, false, 296)) : ("..."));
                    echo "</span>
                                                </div>
                                            </div>

                                            <div class=\"widget-configuration\">
                                                <div class=\"option\"><input type=\"text\" class=\"w-category\" placeholder=\"";
                    // line 301
                    echo ($context["text_choose_category"] ?? null);
                    echo "\" /></div>
                                                <div class=\"option\"><input type=\"checkbox\" class=\"show-image\" ";
                    // line 302
                    if ((twig_get_attribute($this->env, $this->source, $context["w"], "show_image", [], "any", false, false, false, 302) == 1)) {
                        echo " checked=\"checked\" ";
                    }
                    echo " /> ";
                    echo ($context["text_show_image"] ?? null);
                    echo "</div>
                                                <div class=\"option\"><input type=\"checkbox\" class=\"show-child\" ";
                    // line 303
                    if ((twig_get_attribute($this->env, $this->source, $context["w"], "show_child", [], "any", false, false, false, 303) == 1)) {
                        echo " checked=\"checked\" ";
                    }
                    echo " /> ";
                    echo ($context["text_show_child"] ?? null);
                    echo "</div>
                                            </div>

                                            <input type=\"hidden\" class=\"widget-name\" value=\"";
                    // line 306
                    echo twig_get_attribute($this->env, $this->source, $context["w"], "name", [], "any", false, false, false, 306);
                    echo "\" name=\"widget[category][";
                    echo ($context["i"] ?? null);
                    echo "][name]\" />
                                            <input type=\"hidden\" class=\"widget-type\" value=\"";
                    // line 307
                    echo twig_get_attribute($this->env, $this->source, $context["w"], "type", [], "any", false, false, false, 307);
                    echo "\" name=\"widget[category][";
                    echo ($context["i"] ?? null);
                    echo "][type]\" />
                                            <input type=\"hidden\" class=\"widget-cols\" value=\"";
                    // line 308
                    echo twig_get_attribute($this->env, $this->source, $context["w"], "cols", [], "any", false, false, false, 308);
                    echo "\" name=\"widget[category][";
                    echo ($context["i"] ?? null);
                    echo "][cols]\" />
                                            <input type=\"hidden\" class=\"widget-position\" value=\"";
                    // line 309
                    echo twig_get_attribute($this->env, $this->source, $context["w"], "position", [], "any", false, false, false, 309);
                    echo "\" name=\"widget[category][";
                    echo ($context["i"] ?? null);
                    echo "][position]\" />
                                            <input type=\"hidden\" class=\"widget-category-id\" value=\"";
                    // line 310
                    echo twig_get_attribute($this->env, $this->source, $context["w"], "category_id", [], "any", false, false, false, 310);
                    echo "\" name=\"widget[category][";
                    echo ($context["i"] ?? null);
                    echo "][category_id]\" />
                                            <input type=\"hidden\" class=\"widget-show-image\" value=\"";
                    // line 311
                    echo twig_get_attribute($this->env, $this->source, $context["w"], "show_image", [], "any", false, false, false, 311);
                    echo "\" name=\"widget[category][";
                    echo ($context["i"] ?? null);
                    echo "][show_image]\" />
                                            <input type=\"hidden\" class=\"widget-show-child\" value=\"";
                    // line 312
                    echo twig_get_attribute($this->env, $this->source, $context["w"], "show_child", [], "any", false, false, false, 312);
                    echo "\" name=\"widget[category][";
                    echo ($context["i"] ?? null);
                    echo "][show_child]\" />
                                        </div>
                                        ";
                    // line 314
                    $context["i"] = (($context["i"] ?? null) + 1);
                    // line 315
                    echo "                                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['w'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 316
                echo "                                ";
            } else {
                // line 317
                echo "                                    <p class=\"p-widget-items\">";
                echo ($context["text_no_children_items"] ?? null);
                echo "</p>
                                ";
            }
            // line 319
            echo "                            ";
        } else {
            // line 320
            echo "                                <p class=\"p-widget-items\">";
            echo ($context["text_no_children_items"] ?? null);
            echo "</p>
                            ";
        }
        // line 322
        echo "                        </div>

                        <input type=\"hidden\" name=\"category_id\" id=\"input-category-id\" value=\"";
        // line 324
        echo ($context["category_id"] ?? null);
        echo "\" />
                        <input type=\"hidden\" name=\"has_child\" id=\"input-has-child\" value=\"";
        // line 325
        echo ($context["has_child"] ?? null);
        echo "\" />
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<script type=\"text/javascript\" src=\"view/javascript/summernote/summernote.js\"></script>
<link href=\"view/javascript/summernote/summernote.css\" rel=\"stylesheet\" />
<script type=\"text/javascript\" src=\"view/javascript/summernote/summernote-image-attributes.js\"></script>
<script type=\"text/javascript\">
    wd_megamenu.initSortMenuItem();
    wd_megamenu.chooseCategory();
    wd_megamenu.chooseProduct();
    wd_megamenu.checkBoxClick();
    wd_megamenu.initSummerNote();
</script>

<script type=\"text/javascript\">
    var sub_menu_content_type_selection = \$('#input-sub-menu-content-type');
    var sub_menu_content_type = sub_menu_content_type_selection.val();

    \$('.widget-container').hide();
    \$('#widget-type-'+ sub_menu_content_type +'-container').show();

    \$('.frm-group-content').hide();
    \$('.frm-group-' + sub_menu_content_type).show();

    sub_menu_content_type_selection.change(function () {
        var sub_menu_content_type = \$(this).val();

        \$('.frm-group-content').hide();
        \$('.frm-group-' + sub_menu_content_type).show();

        \$('.widget-container').hide();
        \$('#widget-type-'+ sub_menu_content_type +'-container').show();
    });

    \$('.ul-widget-lang').each(function () {
        \$(this).find('a:first').tab('show');
    });
</script>";
    }

    public function getTemplateName()
    {
        return "extension/module/wd_megamenu/top_item_form.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1018 => 325,  1014 => 324,  1010 => 322,  1004 => 320,  1001 => 319,  995 => 317,  992 => 316,  986 => 315,  984 => 314,  977 => 312,  971 => 311,  965 => 310,  959 => 309,  953 => 308,  947 => 307,  941 => 306,  931 => 303,  923 => 302,  919 => 301,  911 => 296,  898 => 287,  893 => 286,  890 => 285,  887 => 284,  885 => 283,  879 => 279,  873 => 277,  870 => 276,  864 => 274,  861 => 273,  855 => 272,  853 => 271,  846 => 269,  840 => 268,  834 => 267,  831 => 266,  821 => 263,  818 => 262,  803 => 259,  796 => 258,  792 => 257,  788 => 256,  785 => 255,  766 => 253,  762 => 252,  758 => 251,  755 => 250,  753 => 249,  750 => 248,  743 => 246,  734 => 244,  731 => 243,  715 => 239,  704 => 237,  697 => 236,  693 => 235,  689 => 234,  686 => 233,  667 => 231,  663 => 230,  659 => 229,  656 => 228,  654 => 227,  651 => 226,  644 => 224,  638 => 223,  632 => 222,  623 => 220,  619 => 219,  616 => 218,  614 => 217,  611 => 216,  604 => 214,  598 => 213,  592 => 212,  586 => 211,  577 => 209,  569 => 208,  565 => 207,  562 => 206,  560 => 205,  555 => 202,  549 => 200,  547 => 199,  544 => 198,  538 => 196,  536 => 195,  523 => 186,  518 => 185,  515 => 184,  512 => 183,  510 => 182,  497 => 176,  489 => 175,  481 => 174,  473 => 173,  465 => 172,  457 => 171,  451 => 168,  443 => 163,  439 => 162,  432 => 158,  428 => 157,  424 => 156,  420 => 155,  416 => 154,  412 => 153,  404 => 148,  400 => 147,  396 => 146,  392 => 145,  386 => 142,  379 => 138,  375 => 137,  370 => 134,  355 => 132,  351 => 131,  345 => 128,  337 => 123,  325 => 118,  317 => 117,  309 => 116,  303 => 113,  297 => 110,  286 => 102,  280 => 101,  275 => 99,  267 => 94,  262 => 92,  250 => 87,  242 => 86,  236 => 83,  222 => 78,  213 => 72,  208 => 70,  203 => 68,  189 => 63,  183 => 59,  170 => 56,  160 => 55,  157 => 54,  153 => 53,  148 => 51,  142 => 47,  137 => 45,  132 => 44,  127 => 42,  122 => 41,  120 => 40,  114 => 37,  109 => 34,  103 => 32,  101 => 31,  97 => 30,  92 => 28,  83 => 23,  75 => 19,  73 => 18,  66 => 14,  62 => 13,  53 => 9,  46 => 5,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "extension/module/wd_megamenu/top_item_form.twig", "");
    }
}
