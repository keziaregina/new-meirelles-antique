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

/* Ceramic/template/product/category.twig */
class __TwigTemplate_1384baebbb120de3b3d8273b9a468738888b4de2f27af2a88467f01724a43c60 extends \Twig\Template
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
        echo ($context["header"] ?? null);
        echo "
<div id=\"product-special\" class=\"container\">
  <div class=\"row\">";
        // line 3
        echo ($context["column_left"] ?? null);
        echo "
    ";
        // line 4
        if ((($context["column_left"] ?? null) && ($context["column_right"] ?? null))) {
            // line 5
            echo "    ";
            $context["class"] = "col-sm-6";
            // line 6
            echo "    ";
        } elseif ((($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
            // line 7
            echo "    ";
            $context["class"] = "col-sm-9";
            // line 8
            echo "    ";
        } else {
            // line 9
            echo "    ";
            $context["class"] = "col-sm-12";
            // line 10
            echo "    ";
        }
        // line 11
        echo "    <div id=\"content\" class=\"";
        echo ($context["class"] ?? null);
        echo "\">
      <ul class=\"breadcrumb\">
    ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 14
            echo "    <li><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 14);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 14);
            echo "</a></li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "  </ul>
      ";
        // line 17
        echo ($context["content_top"] ?? null);
        echo "
     
\t     
      ";
        // line 20
        if ((($context["thumb"] ?? null) || ($context["description"] ?? null))) {
            echo " 
      <div class=\"row category_thumb\">
          ";
            // line 22
            if (($context["thumb"] ?? null)) {
                // line 23
                echo "          <div class=\"col-sm-3 category_img\"><img src=\"";
                echo ($context["thumb"] ?? null);
                echo "\" alt=\"";
                echo ($context["heading_title"] ?? null);
                echo "\" title=\"";
                echo ($context["heading_title"] ?? null);
                echo "\" class=\"img-thumbnail\" /></div>
          ";
            }
            // line 25
            echo "
          <div class=\"col-sm-9\">
            <h2 class=\"page-title\">";
            // line 27
            echo ($context["heading_title"] ?? null);
            echo "</h2>
            ";
            // line 28
            if (($context["description"] ?? null)) {
                // line 29
                echo "            <div class=\"category_description\">";
                echo ($context["description"] ?? null);
                echo "</div>
            ";
            }
            // line 31
            echo "              ";
            if (($context["categories"] ?? null)) {
                // line 32
                echo "          <h3 class=\"refine-search\">";
                echo ($context["text_refine"] ?? null);
                echo "</h3>
          <div class=\"category_list\">
          <ul>
            ";
                // line 35
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                    // line 36
                    echo "                <div class=\"category-item\">
                ";
                    // line 37
                    if (twig_get_attribute($this->env, $this->source, $context["category"], "img", [], "any", false, false, false, 37)) {
                        // line 38
                        echo "                  <div class=\"category_img\"><a href=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 38);
                        echo "\"><img src=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["category"], "img", [], "any", false, false, false, 38);
                        echo "\" data-rel=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["category"], "img", [], "any", false, false, false, 38);
                        echo "\" alt=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 38);
                        echo "\" title=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 38);
                        echo "\" class=\"img-thumbnail\"  /></a></div>
                  ";
                    }
                    // line 40
                    echo "                
                <a href=\"";
                    // line 41
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 41);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 41);
                    echo "</a>
                </div>   
              ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 44
                echo "            </ul>
          </div>
      ";
            }
            // line 47
            echo "          </div>
      </div>
      ";
        }
        // line 50
        echo "
      ";
        // line 51
        if (($context["products"] ?? null)) {
            // line 52
            echo "      <div class=\"category_filter\">
        <div class=\"col-md-4 btn-list-grid\">
          <div class=\"btn-group\">
             <button type=\"button\" id=\"grid-view\" class=\"btn btn-default grid\"  title=\"";
            // line 55
            echo ($context["button_grid"] ?? null);
            echo "\"><i class=\"fa fa-th\"></i></button>
            <button type=\"button\" id=\"list-view\" class=\"btn btn-default list\" title=\"";
            // line 56
            echo ($context["button_list"] ?? null);
            echo "\"><i class=\"fa fa-th-list\"></i></button>
           
          </div>
        </div>
    <div class=\"compare-total\"><a href=\"";
            // line 60
            echo ($context["compare"] ?? null);
            echo "\" id=\"compare-total\">";
            echo ($context["text_compare"] ?? null);
            echo "</a></div>
    <div class=\"pagination-right\">
     <div class=\"sort-by-wrapper\">
      <div class=\"col-md-2 text-right sort-by\">
        <label class=\"control-label\" for=\"input-sort\">";
            // line 64
            echo ($context["text_sort"] ?? null);
            echo "</label>
      </div>
      <div class=\"col-md-3 text-right sort\">
        <select id=\"input-sort\" class=\"form-control\" onchange=\"location = this.value;\">
        ";
            // line 68
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["sorts"]);
            foreach ($context['_seq'] as $context["_key"] => $context["sorts"]) {
                echo " 
        ";
                // line 69
                if ((twig_get_attribute($this->env, $this->source, $context["sorts"], "value", [], "any", false, false, false, 69) == sprintf("%s-%s", ($context["sort"] ?? null), ($context["order"] ?? null)))) {
                    // line 70
                    echo "        <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["sorts"], "href", [], "any", false, false, false, 70);
                    echo " \" selected=\"selected\">";
                    echo twig_get_attribute($this->env, $this->source, $context["sorts"], "text", [], "any", false, false, false, 70);
                    echo "</option>
        ";
                } else {
                    // line 72
                    echo "        <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["sorts"], "href", [], "any", false, false, false, 72);
                    echo " \">";
                    echo twig_get_attribute($this->env, $this->source, $context["sorts"], "text", [], "any", false, false, false, 72);
                    echo " </option>
         ";
                }
                // line 74
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sorts'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 75
            echo "        </select>
      </div>
     </div>
     <div class=\"show-wrapper\">
      <div class=\"col-md-1 text-right show\">
        <label class=\"control-label\" for=\"input-limit\">";
            // line 80
            echo ($context["text_limit"] ?? null);
            echo "</label>
      </div>
      <div class=\"col-md-2 text-right limit\">
        <select id=\"input-limit\" class=\"form-control\" onchange=\"location = this.value;\">
        ";
            // line 84
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["limits"]);
            foreach ($context['_seq'] as $context["_key"] => $context["limits"]) {
                // line 85
                echo "        ";
                if ((twig_get_attribute($this->env, $this->source, $context["limits"], "value", [], "any", false, false, false, 85) == ($context["limit"] ?? null))) {
                    // line 86
                    echo "        <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["limits"], "href", [], "any", false, false, false, 86);
                    echo " \" selected=\"selected\">";
                    echo twig_get_attribute($this->env, $this->source, $context["limits"], "text", [], "any", false, false, false, 86);
                    echo "</option>
        ";
                } else {
                    // line 88
                    echo "        <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["limits"], "href", [], "any", false, false, false, 88);
                    echo " \">";
                    echo twig_get_attribute($this->env, $this->source, $context["limits"], "text", [], "any", false, false, false, 88);
                    echo " </option>
        ";
                }
                // line 90
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['limits'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 91
            echo "        </select>
      </div>
    </div>
      </div>
    </div>
    <div class=\"row cat_prod\">
        ";
            // line 97
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 98
                echo "        <div class=\"product-layout product-list col-xs-12\">
          <div class=\"product-block product-thumb\">
         <div class=\"product-block-inner\">
      <div class=\"image ";
                // line 101
                if ((twig_get_attribute($this->env, $this->source, $context["product"], "qty", [], "any", false, false, false, 101) == 0)) {
                    echo "outstock";
                }
                echo "\">
        ";
                // line 102
                if (twig_get_attribute($this->env, $this->source, $context["product"], "thumb_swap", [], "any", false, false, false, 102)) {
                    // line 103
                    echo "      <a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 103);
                    echo "\">
      <img src=\"";
                    // line 104
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 104);
                    echo "\" title=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 104);
                    echo "\" alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 104);
                    echo "\" class=\"img-responsive reg-image\"/>
      <div class=\"image_content\"><img class=\"img-responsive hover-image\" src=\"";
                    // line 105
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb_swap", [], "any", false, false, false, 105);
                    echo "\" title=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 105);
                    echo "\" alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 105);
                    echo "\"/></div>
      </a>
      ";
                } else {
                    // line 108
                    echo "      <a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 108);
                    echo "\">
      <img src=\"";
                    // line 109
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 109);
                    echo "\" title=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 109);
                    echo "\" alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 109);
                    echo "\" class=\"img-responsive\"/></a>
      ";
                }
                // line 111
                echo "      
      ";
                // line 112
                if (twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 112)) {
                    // line 113
                    echo "        <span class=\"special-tag\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "percentsaving", [], "any", false, false, false, 113);
                    echo "%</span>
      ";
                }
                // line 115
                echo "      ";
                if ((twig_get_attribute($this->env, $this->source, $context["product"], "qty", [], "any", false, false, false, 115) == 0)) {
                    // line 116
                    echo "      <span class=\"stock_status\">";
                    echo ($context["text_outstock"] ?? null);
                    echo "</span>
    ";
                }
                // line 117
                echo "     
       \t
              <div class=\"product_hover_block\">
                <button class=\"compare_button\" type=\"button\"  title=\"";
                // line 120
                echo ($context["button_compare"] ?? null);
                echo " \" onclick=\"compare.add('";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 120);
                echo " ');\"></button>
                
                  <div class=\"quickview-button\">
                  <a class=\"quickbox\"  title=\"";
                // line 123
                echo ($context["button_quickview"] ?? null);
                echo "\" href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "quick", [], "any", false, false, false, 123);
                echo "\"></a>
                </div>
                <button class=\"wishlist\" type=\"button\"  title=\"";
                // line 125
                echo ($context["button_wishlist"] ?? null);
                echo " \" onclick=\"wishlist.add('";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 125);
                echo " ');\"></button>
              </div>
          </div>
            <div class=\"product-details\">
              <div class=\"caption\">
               ";
                // line 131
                echo "               <h4><a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 131);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 131);
                echo "</a></h4> 
\t
             <p class=\"description\">";
                // line 133
                echo twig_get_attribute($this->env, $this->source, $context["product"], "description", [], "any", false, false, false, 133);
                echo "</p>
              ";
                // line 134
                if (twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 134)) {
                    // line 135
                    echo "              <div class=\"rating\">
                ";
                    // line 136
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(range(1, 5));
                    foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                        // line 137
                        echo "                  ";
                        if ((twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 137) < $context["i"])) {
                            // line 138
                            echo "                   <span class=\"fa fa-stack\"><i class=\"fa fa-star off fa-stack-2x\"></i></span>
                      ";
                        } else {
                            // line 140
                            echo "                   <span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
                   ";
                        }
                        // line 142
                        echo "                   ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 143
                    echo "                    &nbsp;<span style=\"cursor:pointer;\" class=\"total-review";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 143);
                    echo "\">(";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "review", [], "any", false, false, false, 143);
                    echo ")</span>
                   </div>
               ";
                }
                // line 146
                echo "\t\t\t       ";
                if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 146)) {
                    // line 147
                    echo "              <p class=\"price\">
                ";
                    // line 148
                    if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 148)) {
                        // line 149
                        echo "                ";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 149);
                        echo "
              ";
                    } else {
                        // line 151
                        echo "              <span class=\"price-new\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 151);
                        echo "</span> <span class=\"price-old\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 151);
                        echo "</span>
              ";
                    }
                    // line 153
                    echo "              </p>
              ";
                }
                // line 155
                echo "              \t
              <div class=\"action\">
                  ";
                // line 157
                if ((twig_get_attribute($this->env, $this->source, $context["product"], "qty", [], "any", false, false, false, 157) > 0)) {
                    // line 158
                    echo "                 <button type=\"button\" class=\"cart_button\" onclick=\"cart.add('";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 158);
                    echo "');\" title=\"";
                    echo ($context["button_cart"] ?? null);
                    echo "\" >";
                    echo ($context["button_cart"] ?? null);
                    echo "</button>
                 ";
                } else {
                    // line 160
                    echo "                     <button type=\"button\" class=\"cart_button out_of_stock\" title=\"";
                    echo ($context["text_outstock"] ?? null);
                    echo "\" >";
                    echo ($context["text_outstock"] ?? null);
                    echo "</button>
                 ";
                }
                // line 162
                echo "            </div>

                  
          <div class=\"product_hover_block\">     
            
                
                <button class=\"compare_button\" type=\"button\"  title=\"";
                // line 168
                echo ($context["button_compare"] ?? null);
                echo " \" onclick=\"compare.add('";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 168);
                echo " ');\"></button>
                <div class=\"quickview-button\">
                  <a class=\"quickbox\"  title=\"";
                // line 170
                echo ($context["button_quickview"] ?? null);
                echo "\" href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "quick", [], "any", false, false, false, 170);
                echo "\"></a>
                </div>
                <button class=\"wishlist\" type=\"button\"  title=\"";
                // line 172
                echo ($context["button_wishlist"] ?? null);
                echo " \" onclick=\"wishlist.add('";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 172);
                echo " ');\"></button>
              </div>
            </div>
           
            </div>
      </div>
          </div>
        </div>
        <script> 
            \$('.total-review";
                // line 181
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 181);
                echo "').on('click', function() { 
             var t='";
                // line 182
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 182);
                echo "'; 
            const parseResult = new DOMParser().parseFromString(t, \"text/html\");
            const parsedUrl = parseResult.documentElement.textContent;
            window.location.href = parsedUrl + '&review';
            return false;
          });
      </script>
  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 189
            echo "</div>
      <div class=\"pagination-wrapper\">
        <div class=\"col-sm-6 text-right page-result\">";
            // line 191
            echo ($context["results"] ?? null);
            echo "</div>  
      <div class=\"col-sm-6 text-left page-link\">";
            // line 192
            echo ($context["pagination"] ?? null);
            echo "</div>
      
     </div>     
      ";
        } else {
            // line 196
            echo "      <p>";
            echo ($context["text_empty"] ?? null);
            echo "</p>
      <div class=\"buttons\">
        <div class=\"pull-right\"><a href=\"";
            // line 198
            echo ($context["continue"] ?? null);
            echo "\" class=\"btn btn-primary\">";
            echo ($context["button_continue"] ?? null);
            echo "</a></div>
      </div>
      ";
        }
        // line 201
        echo "      ";
        echo ($context["content_bottom"] ?? null);
        echo "</div>
      ";
        // line 202
        echo ($context["column_right"] ?? null);
        echo "</div>
</div>
</div>
</div>
";
        // line 206
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "Ceramic/template/product/category.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  600 => 206,  593 => 202,  588 => 201,  580 => 198,  574 => 196,  567 => 192,  563 => 191,  559 => 189,  545 => 182,  541 => 181,  527 => 172,  520 => 170,  513 => 168,  505 => 162,  497 => 160,  487 => 158,  485 => 157,  481 => 155,  477 => 153,  469 => 151,  463 => 149,  461 => 148,  458 => 147,  455 => 146,  446 => 143,  440 => 142,  436 => 140,  432 => 138,  429 => 137,  425 => 136,  422 => 135,  420 => 134,  416 => 133,  408 => 131,  398 => 125,  391 => 123,  383 => 120,  378 => 117,  372 => 116,  369 => 115,  363 => 113,  361 => 112,  358 => 111,  349 => 109,  344 => 108,  334 => 105,  326 => 104,  321 => 103,  319 => 102,  313 => 101,  308 => 98,  304 => 97,  296 => 91,  290 => 90,  282 => 88,  274 => 86,  271 => 85,  267 => 84,  260 => 80,  253 => 75,  247 => 74,  239 => 72,  231 => 70,  229 => 69,  223 => 68,  216 => 64,  207 => 60,  200 => 56,  196 => 55,  191 => 52,  189 => 51,  186 => 50,  181 => 47,  176 => 44,  165 => 41,  162 => 40,  148 => 38,  146 => 37,  143 => 36,  139 => 35,  132 => 32,  129 => 31,  123 => 29,  121 => 28,  117 => 27,  113 => 25,  103 => 23,  101 => 22,  96 => 20,  90 => 17,  87 => 16,  76 => 14,  72 => 13,  66 => 11,  63 => 10,  60 => 9,  57 => 8,  54 => 7,  51 => 6,  48 => 5,  46 => 4,  42 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "Ceramic/template/product/category.twig", "");
    }
}
