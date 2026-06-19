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

/* Ceramic/template/extension/module/webdigifytabs.twig */
class __TwigTemplate_c42c54e82f8352d1cb7bfc8f754e9cd2e2a6aec5eedc3f9992500574c8effe3d extends \Twig\Template
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
        echo "<div class=\"hometab box bottom-to-top hb-animate-element\">
<div class=\"container\">
\t<div class=\"row\">
\t<div class=\"tab-head\">
\t<div class=\"hometab-heading box-heading\">";
        // line 5
        echo ($context["heading_title"] ?? null);
        echo "</div>
\t\t
<div id=\"tabs\" class=\"htabs\">
  <ul class='etabs'>
\t<li class='tab'>
\t\t";
        // line 10
        if (($context["latestproducts"] ?? null)) {
            // line 11
            echo "\t\t\t<a href=\"#tab-latest\">";
            echo ($context["tab_latest"] ?? null);
            echo "</a>
\t\t";
        }
        // line 13
        echo "\t</li>
\t<li class='tab'>
\t\t";
        // line 15
        if (($context["bestsellersproducts"] ?? null)) {
            // line 16
            echo "\t\t<a href=\"#tab-bestseller\">";
            echo ($context["tab_bestseller"] ?? null);
            echo "</a>
\t\t";
        }
        // line 18
        echo "\t</li>\t
\t<li class='tab'>
\t\t";
        // line 20
        if (($context["specialproducts"] ?? null)) {
            // line 21
            echo "\t\t\t<a href=\"#tab-special\">";
            echo ($context["tab_special"] ?? null);
            echo "</a>
\t\t";
        }
        // line 23
        echo "\t</li>
\t</ul>

 </div>
</div>
";
        // line 28
        if (($context["bestsellersproducts"] ?? null)) {
            // line 29
            echo " <div id=\"tab-bestseller\" class=\"tab-content\">
    \t  <div class=\"box\">
\t\t\t\t<div class=\"box-content\">
\t\t\t\t\t";
            // line 32
            $context["sliderFor"] = 4;
            // line 33
            echo "\t\t\t\t\t";
            $context["productCount"] = twig_length_filter($this->env, ($context["bestsellersproducts"] ?? null));
            // line 34
            echo "\t\t\t\t\t
\t\t\t\t\t";
            // line 35
            if ((($context["productCount"] ?? null) >= ($context["sliderFor"] ?? null))) {
                // line 36
                echo "\t\t\t\t\t\t<div class=\"customNavigation\">
\t\t\t\t\t\t\t<a class=\"fa prev fa-arrow-left\">&nbsp;</a>
\t\t\t\t\t\t\t<a class=\"fa next fa-arrow-right\">&nbsp;</a>
\t\t\t\t\t\t</div>\t
\t\t\t\t\t";
            }
            // line 41
            echo "\t\t\t\t\t<div class=\"box-product ";
            if ((($context["productCount"] ?? null) >= ($context["sliderFor"] ?? null))) {
                echo "product-carousel";
            } else {
                echo " productbox-grid";
            }
            echo "\" id=\"";
            if ((($context["productCount"] ?? null) >= ($context["sliderFor"] ?? null))) {
                echo "tabbestseller-carousel";
            } else {
                echo "tabbestseller-grid";
            }
            echo "\">
\t\t\t\t\t\t";
            // line 42
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["bestsellersproducts"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 43
                echo "\t\t\t\t\t\t\t<div class=\"";
                if ((($context["productCount"] ?? null) >= ($context["sliderFor"] ?? null))) {
                    echo "slider-item";
                } else {
                    echo "product-items";
                }
                echo "\">
\t\t\t\t\t\t\t\t<div class=\"product-block product-thumb transition\">
\t\t\t\t\t\t\t\t\t<div class=\"product-block-inner\">\t  \t
\t\t\t\t\t\t\t\t\t\t<div class=\"";
                // line 46
                if ((twig_get_attribute($this->env, $this->source, $context["product"], "qty", [], "any", false, false, false, 46) > 0)) {
                    echo "image";
                } else {
                    echo "image outstock";
                }
                echo "\">
\t\t\t\t\t\t\t\t\t\t\t";
                // line 47
                if (twig_get_attribute($this->env, $this->source, $context["product"], "thumb_swap", [], "any", false, false, false, 47)) {
                    // line 48
                    echo "      \t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 48);
                    echo "\">
      \t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
                    // line 49
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 49);
                    echo "\" title=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 49);
                    echo "\" alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 49);
                    echo "\" class=\"img-responsive reg-image\"/>
      \t\t\t\t\t\t\t\t\t\t\t\t<img class=\"img-responsive hover-image\" src=\"";
                    // line 50
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb_swap", [], "any", false, false, false, 50);
                    echo "\" title=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 50);
                    echo "\" alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 50);
                    echo "\"/>
      \t\t\t\t\t\t\t\t\t\t\t\t</a>
      \t\t\t\t\t\t\t\t\t\t\t\t";
                } else {
                    // line 53
                    echo "      \t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 53);
                    echo "\">
      \t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
                    // line 54
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 54);
                    echo "\" title=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 54);
                    echo "\" alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 54);
                    echo "\" class=\"img-responsive\"/></a>
      \t\t\t\t\t\t\t\t\t\t";
                }
                // line 56
                echo "\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t";
                // line 57
                if (twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 57)) {
                    // line 58
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"special-tag\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "percentsaving", [], "any", false, false, false, 58);
                    echo "%</span>
\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 60
                echo "\t\t\t\t\t\t\t\t\t\t\t";
                if ((twig_get_attribute($this->env, $this->source, $context["product"], "qty", [], "any", false, false, false, 60) == 0)) {
                    // line 61
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"stock_status\">";
                    echo ($context["text_outstock"] ?? null);
                    echo "</span>
\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 63
                echo "   \t
            \t            \t\t\t<div class=\"product_hover_block\" ";
                // line 64
                if ((twig_get_attribute($this->env, $this->source, $context["product"], "qty", [], "any", false, false, false, 64) < 1)) {
                    echo " style=\"visibility:hidden;\" ";
                }
                echo ">
\t\t\t\t\t\t\t\t\t\t\t<button class=\"compare_button\" type=\"button\"  title=\"";
                // line 65
                echo ($context["button_compare"] ?? null);
                echo " \" onclick=\"compare.add('";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 65);
                echo " ');\"></button>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"quickview-button\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"quickbox\"  title=\"";
                // line 67
                echo ($context["button_quickview"] ?? null);
                echo "\" href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "quick", [], "any", false, false, false, 67);
                echo "\"></a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<button class=\"wishlist\" type=\"button\"  title=\"";
                // line 69
                echo ($context["button_wishlist"] ?? null);
                echo " \" onclick=\"wishlist.add('";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 69);
                echo " ');\"></button>
\t\t\t\t\t\t\t\t\t\t</div>
            </div>


\t\t\t\t\t\t\t\t\t\t\t\t
\t\t<div class=\"product-details\">
\t\t\t<div class=\"caption\">
\t\t\t\t\t\t<h4><a href=\"";
                // line 77
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 77);
                echo " \">";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 77);
                echo " </a></h4>
\t\t\t\t";
                // line 79
                echo "\t\t\t\t
\t\t\t\t";
                // line 80
                if (twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 80)) {
                    // line 81
                    echo "\t\t\t\t<div class=\"rating\">
\t\t\t\t";
                    // line 82
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(range(1, 5));
                    foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                        // line 83
                        echo "\t\t\t\t";
                        if ((twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 83) < $context["i"])) {
                            // line 84
                            echo "\t\t\t\t<span class=\"fa fa-stack\"><i class=\"fa fa-star off fa-stack-2x\"></i></span>
\t\t\t\t";
                        } else {
                            // line 86
                            echo "\t\t\t\t<span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
\t\t\t\t";
                        }
                        // line 88
                        echo "\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 89
                    echo "\t\t\t\t&nbsp;<span style=\"cursor:pointer;\" class=\"total-review";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 89);
                    echo "\">(";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "review", [], "any", false, false, false, 89);
                    echo ")</span>
\t\t\t\t</div>
\t\t";
                }
                // line 91
                echo "        
\t\t\t\t";
                // line 92
                if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 92)) {
                    // line 93
                    echo "        \t\t\t<p class=\"price\">
       \t\t\t    ";
                    // line 94
                    if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 94)) {
                        // line 95
                        echo "          \t\t\t";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 95);
                        echo "
         \t\t\t";
                    } else {
                        // line 97
                        echo "         \t\t\t<span class=\"price-new\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 97);
                        echo "</span> <span class=\"price-old\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 97);
                        echo "</span>
\t\t\t        ";
                    }
                    // line 99
                    echo "  \t\t            ";
                    if (twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 99)) {
                        // line 100
                        echo "\t\t            <span class=\"price-tax\">";
                        echo ($context["text_tax"] ?? null);
                        echo " ";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 100);
                        echo "</span>
          \t\t\t";
                    }
                    // line 102
                    echo "\t\t\t        </p>
\t            ";
                }
                // line 104
                echo "\t\t\t\t <div class=\"action\">
\t\t\t\t\t\t";
                // line 105
                if ((twig_get_attribute($this->env, $this->source, $context["product"], "qty", [], "any", false, false, false, 105) > 0)) {
                    // line 106
                    echo "\t\t\t\t\t\t\t\t<button type=\"button\" class=\"cart_button\" onclick=\"cart.add('";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 106);
                    echo "');\" title=\"";
                    echo ($context["button_cart"] ?? null);
                    echo "\" >";
                    echo ($context["button_cart"] ?? null);
                    echo "</button>
\t\t\t\t\t\t\t\t";
                } else {
                    // line 108
                    echo "\t\t\t\t\t\t\t\t<button type=\"button\" class=\"cart_button out_of_stock\" title=\"";
                    echo ($context["text_outstock"] ?? null);
                    echo "\" >";
                    echo ($context["text_outstock"] ?? null);
                    echo "</button>
\t\t\t\t\t\t";
                }
                // line 110
                echo "\t\t\t\t</div>

\t\t\t</div>\t\t

\t  \t</div>\t\t\t\t
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 120
            echo "\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t </div>
\t\t <span class=\"tabbestseller_default_width\" style=\"display:none; visibility:hidden\"></span> 
 </div>
";
        }
        // line 126
        if (($context["latestproducts"] ?? null)) {
            // line 127
            echo "<div id=\"tab-latest\" class=\"tab-content\">
\t<div class=\"box\">
\t\t\t\t<div class=\"box-content\">

\t\t\t\t\t";
            // line 131
            $context["sliderFor"] = 5;
            // line 132
            echo "\t\t\t\t\t";
            $context["productCount"] = twig_length_filter($this->env, ($context["latestproducts"] ?? null));
            // line 133
            echo "\t\t\t\t\t
\t\t\t\t\t\t";
            // line 134
            if ((($context["productCount"] ?? null) >= ($context["sliderFor"] ?? null))) {
                // line 135
                echo "\t\t\t\t\t\t<div class=\"customNavigation\">
\t\t\t\t\t\t\t<a class=\"fa prev fa-arrow-left\">&nbsp;</a>
\t\t\t\t\t\t\t<a class=\"fa next fa-arrow-right\">&nbsp;</a>
\t\t\t\t\t\t</div>\t
\t\t\t\t\t";
            }
            // line 140
            echo "\t\t\t\t\t<div class=\"box-product ";
            if ((($context["productCount"] ?? null) >= ($context["sliderFor"] ?? null))) {
                echo "product-carousel";
            } else {
                echo " productbox-grid";
            }
            echo "\" id=\"";
            if ((($context["productCount"] ?? null) >= ($context["sliderFor"] ?? null))) {
                echo "tablatest-carousel";
            } else {
                echo "tablatest-grid";
            }
            echo "\">
\t\t\t\t\t";
            // line 141
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["latestproducts"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 142
                echo "\t\t\t\t\t\t\t<div class=\"";
                if ((($context["productCount"] ?? null) >= ($context["sliderFor"] ?? null))) {
                    echo "slider-item";
                } else {
                    echo "product-items";
                }
                echo "\">
\t\t\t\t\t\t\t\t<div class=\"product-block product-thumb transition\">
\t\t\t\t\t\t\t\t\t<div class=\"product-block-inner\">\t  \t
\t\t\t\t\t\t\t\t\t\t<div class=\"";
                // line 145
                if ((twig_get_attribute($this->env, $this->source, $context["product"], "qty", [], "any", false, false, false, 145) > 0)) {
                    echo "image";
                } else {
                    echo "image outstock";
                }
                echo "\">
\t\t\t\t\t\t\t\t\t\t\t";
                // line 146
                if (twig_get_attribute($this->env, $this->source, $context["product"], "thumb_swap", [], "any", false, false, false, 146)) {
                    // line 147
                    echo "      \t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 147);
                    echo "\">
      \t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
                    // line 148
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 148);
                    echo "\" title=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 148);
                    echo "\" alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 148);
                    echo "\" class=\"img-responsive reg-image\"/>
      \t\t\t\t\t\t\t\t\t\t\t\t<img class=\"img-responsive hover-image\" src=\"";
                    // line 149
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb_swap", [], "any", false, false, false, 149);
                    echo "\" title=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 149);
                    echo "\" alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 149);
                    echo "\"/>
      \t\t\t\t\t\t\t\t\t\t\t\t</a>
      \t\t\t\t\t\t\t\t\t\t\t\t";
                } else {
                    // line 152
                    echo "      \t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 152);
                    echo "\">
      \t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
                    // line 153
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 153);
                    echo "\" title=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 153);
                    echo "\" alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 153);
                    echo "\" class=\"img-responsive\"/></a>
      \t\t\t\t\t\t\t\t\t\t";
                }
                // line 155
                echo "\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t";
                // line 156
                if (twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 156)) {
                    // line 157
                    echo "\t\t\t\t\t\t\t\t\t\t\t<span class=\"special-tag\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "percentsaving", [], "any", false, false, false, 157);
                    echo "%</span>
\t\t\t\t\t\t\t\t\t\t";
                }
                // line 159
                echo "\t\t\t\t\t\t\t\t\t\t";
                if ((twig_get_attribute($this->env, $this->source, $context["product"], "qty", [], "any", false, false, false, 159) == 0)) {
                    // line 160
                    echo "\t\t\t\t\t\t\t            \t<span class=\"stock_status\">";
                    echo ($context["text_outstock"] ?? null);
                    echo "</span>
\t\t\t\t\t\t\t            ";
                }
                // line 162
                echo "   \t
\t\t\t\t\t\t\t\t\t\t<div class=\"product_hover_block\" ";
                // line 163
                if ((twig_get_attribute($this->env, $this->source, $context["product"], "qty", [], "any", false, false, false, 163) < 1)) {
                    echo " style=\"visibility:hidden;\" ";
                }
                echo ">
\t\t\t\t\t\t\t\t\t\t\t<button class=\"compare_button\" type=\"button\"  title=\"";
                // line 164
                echo ($context["button_compare"] ?? null);
                echo " \" onclick=\"compare.add('";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 164);
                echo " ');\"></button>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"quickview-button\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"quickbox\"  title=\"";
                // line 166
                echo ($context["button_quickview"] ?? null);
                echo "\" href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "quick", [], "any", false, false, false, 166);
                echo "\"></a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<button class=\"wishlist\" type=\"button\"  title=\"";
                // line 168
                echo ($context["button_wishlist"] ?? null);
                echo " \" onclick=\"wishlist.add('";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 168);
                echo " ');\"></button>
\t\t\t\t\t\t\t\t\t\t</div>
            </div>
       

\t\t<div class=\"product-details\">
\t\t\t<div class=\"caption\">
\t\t\t\t\t\t<h4><a href=\"";
                // line 175
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 175);
                echo " \">";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 175);
                echo " </a></h4>
\t\t\t\t";
                // line 177
                echo "\t\t\t\t
\t\t\t\t
\t\t\t\t";
                // line 179
                if (twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 179)) {
                    // line 180
                    echo "\t\t\t\t\t\t<div class=\"rating\">
\t\t\t\t\t\t";
                    // line 181
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(range(1, 5));
                    foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                        // line 182
                        echo "\t\t\t\t\t\t";
                        if ((twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 182) < $context["i"])) {
                            // line 183
                            echo "\t\t\t\t\t\t<span class=\"fa fa-stack\"><i class=\"fa fa-star off fa-stack-2x\"></i></span>
\t\t\t\t\t\t";
                        } else {
                            // line 185
                            echo "\t\t\t\t\t\t<span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
\t\t\t\t\t\t";
                        }
                        // line 187
                        echo "\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 188
                    echo "\t\t\t\t\t\t&nbsp;<span style=\"cursor:pointer;\" class=\"total-review";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 188);
                    echo "\">(";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "review", [], "any", false, false, false, 188);
                    echo ")</span>
\t\t\t\t\t\t</div>
\t\t\t\t";
                }
                // line 191
                echo "\t\t\t\t";
                if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 191)) {
                    // line 192
                    echo "        \t\t\t<p class=\"price\">
       \t\t\t    ";
                    // line 193
                    if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 193)) {
                        // line 194
                        echo "          \t\t\t";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 194);
                        echo "
         \t\t\t";
                    } else {
                        // line 196
                        echo "         \t\t\t<span class=\"price-new\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 196);
                        echo "</span> <span class=\"price-old\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 196);
                        echo "</span>
\t\t\t        ";
                    }
                    // line 198
                    echo "  \t\t            ";
                    if (twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 198)) {
                        // line 199
                        echo "\t\t            <span class=\"price-tax\">";
                        echo ($context["text_tax"] ?? null);
                        echo " ";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 199);
                        echo "</span>
          \t\t\t";
                    }
                    // line 201
                    echo "\t\t\t        </p>
\t\t\t\t";
                }
                // line 203
                echo "\t            \t
\t            \t \t\t\t\t\t<div class=\"action\">
\t\t\t\t\t\t\t            ";
                // line 205
                if ((twig_get_attribute($this->env, $this->source, $context["product"], "qty", [], "any", false, false, false, 205) > 0)) {
                    // line 206
                    echo "\t\t\t\t\t\t\t\t\t\t\t <button type=\"button\" class=\"cart_button\" onclick=\"cart.add('";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 206);
                    echo "');\" title=\"";
                    echo ($context["button_cart"] ?? null);
                    echo "\" >";
                    echo ($context["button_cart"] ?? null);
                    echo "</button>
\t\t\t\t\t\t\t\t\t\t\t ";
                } else {
                    // line 208
                    echo "\t\t\t\t\t\t\t\t\t\t\t <button type=\"button\" class=\"cart_button out_of_stock\" title=\"";
                    echo ($context["text_outstock"] ?? null);
                    echo "\" >";
                    echo ($context["text_outstock"] ?? null);
                    echo "</button>
\t\t\t\t\t\t\t\t\t\t";
                }
                // line 210
                echo "\t\t\t\t\t\t\t\t\t\t  </div>\t\t
\t\t\t\t\t\t\t\t\t\t</div>\t\t
\t\t\t\t\t\t\t\t\t</div>\t\t\t
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 218
            echo "\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t </div>
\t\t\t  <span class=\"tablatest_default_width\" style=\"display:none; visibility:hidden\"></span>
 </div>
";
        }
        // line 224
        echo "
";
        // line 225
        if (($context["specialproducts"] ?? null)) {
            // line 226
            echo " <div id=\"tab-special\" class=\"tab-content\">
    \t <div class=\"box\">
\t\t\t\t<div class=\"box-content\">
\t\t\t\t\t
\t\t\t\t\t";
            // line 230
            $context["sliderFor"] = 5;
            // line 231
            echo "\t\t\t\t\t";
            $context["productCount"] = twig_length_filter($this->env, ($context["specialproducts"] ?? null));
            // line 232
            echo "\t\t\t\t\t
\t\t\t\t\t";
            // line 233
            if ((($context["productCount"] ?? null) >= ($context["sliderFor"] ?? null))) {
                // line 234
                echo "\t\t\t\t\t\t<div class=\"customNavigation\">
\t\t\t\t\t\t\t<a class=\"fa prev fa-arrow-left\">&nbsp;</a>
\t\t\t\t\t\t\t<a class=\"fa next fa-arrow-right\">&nbsp;</a>
\t\t\t\t\t\t</div>\t
\t\t\t\t\t";
            }
            // line 239
            echo "\t\t\t\t\t
\t\t\t\t\t<div class=\"box-product ";
            // line 240
            if ((($context["productCount"] ?? null) >= ($context["sliderFor"] ?? null))) {
                echo "product-carousel";
            } else {
                echo " productbox-grid";
            }
            echo "\" id=\"";
            if ((($context["productCount"] ?? null) >= ($context["sliderFor"] ?? null))) {
                echo "tabspecial-carousel";
            } else {
                echo "tabspecial-grid";
            }
            echo "\">
\t\t\t\t\t";
            // line 241
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["specialproducts"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 242
                echo "\t\t\t\t\t\t\t<div class=\"";
                if ((($context["productCount"] ?? null) >= ($context["sliderFor"] ?? null))) {
                    echo "slider-item";
                } else {
                    echo "product-items";
                }
                echo "\">
\t\t\t\t\t\t\t\t<div class=\"product-block product-thumb transition\">
\t\t\t\t\t\t\t\t\t<div class=\"product-block-inner\">\t  \t
\t\t\t\t\t\t\t\t\t\t<div class=\"";
                // line 245
                if ((twig_get_attribute($this->env, $this->source, $context["product"], "qty", [], "any", false, false, false, 245) > 0)) {
                    echo "image";
                } else {
                    echo "image outstock";
                }
                echo "\">
\t\t\t\t\t\t\t\t\t\t\t";
                // line 246
                if (twig_get_attribute($this->env, $this->source, $context["product"], "thumb_swap", [], "any", false, false, false, 246)) {
                    // line 247
                    echo "\t\t\t\t\t\t\t\t\t\t\t  <a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 247);
                    echo "\">
\t\t\t\t\t\t\t\t\t\t\t  <img src=\"";
                    // line 248
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 248);
                    echo "\" title=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 248);
                    echo "\" alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 248);
                    echo "\" class=\"img-responsive reg-image\"/>
\t\t\t\t\t\t\t\t\t\t\t  <img class=\"img-responsive hover-image\" src=\"";
                    // line 249
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb_swap", [], "any", false, false, false, 249);
                    echo "\" title=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 249);
                    echo "\" alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 249);
                    echo "\"/>
\t\t\t\t\t\t\t\t\t\t\t  </a>
\t\t\t\t\t\t\t\t\t\t\t  ";
                } else {
                    // line 252
                    echo "\t\t\t\t\t\t\t\t\t\t\t  <a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 252);
                    echo "\">
\t\t\t\t\t\t\t\t\t\t\t  <img src=\"";
                    // line 253
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 253);
                    echo "\" title=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 253);
                    echo "\" alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 253);
                    echo "\" class=\"img-responsive\"/></a>
\t\t\t\t\t\t\t\t\t\t\t  ";
                }
                // line 255
                echo "\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t";
                // line 256
                if (twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 256)) {
                    // line 257
                    echo "\t\t\t\t\t\t\t\t\t\t\t<span class=\"special-tag\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "percentsaving", [], "any", false, false, false, 257);
                    echo "%</span>
\t\t\t\t\t\t\t\t\t\t";
                }
                // line 259
                echo "\t\t\t\t\t\t\t\t\t\t";
                if ((twig_get_attribute($this->env, $this->source, $context["product"], "qty", [], "any", false, false, false, 259) == 0)) {
                    // line 260
                    echo "\t\t\t\t\t\t\t            \t<span class=\"stock_status\">";
                    echo ($context["text_outstock"] ?? null);
                    echo "</span>
\t\t\t\t\t\t\t            ";
                }
                // line 262
                echo "\t\t\t\t\t\t\t\t\t\t<div class=\"product_hover_block\" ";
                if ((twig_get_attribute($this->env, $this->source, $context["product"], "qty", [], "any", false, false, false, 262) < 1)) {
                    echo " style=\"visibility:hidden;\" ";
                }
                echo ">
\t\t\t\t\t\t\t\t\t\t\t<button class=\"compare_button\" type=\"button\"  title=\"";
                // line 263
                echo ($context["button_compare"] ?? null);
                echo " \" onclick=\"compare.add('";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 263);
                echo " ');\"></button>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"quickview-button\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"quickbox\"  title=\"";
                // line 265
                echo ($context["button_quickview"] ?? null);
                echo "\" href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "quick", [], "any", false, false, false, 265);
                echo "\"></a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<button class=\"wishlist\" type=\"button\"  title=\"";
                // line 267
                echo ($context["button_wishlist"] ?? null);
                echo " \" onclick=\"wishlist.add('";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 267);
                echo " ');\"></button>
\t\t\t\t\t\t\t\t\t\t</div>
         </div>
       
\t
\t\t
      \t<div class=\"product-details\">
\t\t\t<div class=\"caption\">
\t\t\t\t\t\t<h4><a href=\"";
                // line 275
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 275);
                echo " \">";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 275);
                echo " </a></h4>
\t\t\t\t";
                // line 277
                echo "\t\t\t\t
\t            \t";
                // line 278
                if (twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 278)) {
                    // line 279
                    echo "\t\t\t\t\t\t\t<div class=\"rating\">
\t\t\t\t\t\t\t";
                    // line 280
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(range(1, 5));
                    foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                        // line 281
                        echo "\t\t\t\t\t\t\t";
                        if ((twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 281) < $context["i"])) {
                            // line 282
                            echo "\t\t\t\t\t\t\t<span class=\"fa fa-stack\"><i class=\"fa fa-star off fa-stack-2x\"></i></span>
\t\t\t\t\t\t\t";
                        } else {
                            // line 284
                            echo "\t\t\t\t\t\t\t<span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
\t\t\t\t\t\t\t";
                        }
                        // line 286
                        echo "\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 287
                    echo "\t\t\t\t\t\t\t&nbsp;<span style=\"cursor:pointer;\" class=\"total-review";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 287);
                    echo "\">(";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "review", [], "any", false, false, false, 287);
                    echo ")</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t";
                }
                // line 290
                echo "\t\t\t\t\t";
                if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 290)) {
                    // line 291
                    echo "\t\t\t\t\t\t<p class=\"price\">
\t\t\t\t\t\t   ";
                    // line 292
                    if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 292)) {
                        // line 293
                        echo "\t\t\t\t\t\t  ";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 293);
                        echo "
\t\t\t\t\t\t ";
                    } else {
                        // line 295
                        echo "\t\t\t\t\t\t <span class=\"price-new\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 295);
                        echo "</span> <span class=\"price-old\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 295);
                        echo "</span>
\t\t\t\t\t\t";
                    }
                    // line 297
                    echo "\t\t\t\t\t\t  ";
                    if (twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 297)) {
                        // line 298
                        echo "\t\t\t\t\t\t<span class=\"price-tax\">";
                        echo ($context["text_tax"] ?? null);
                        echo " ";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 298);
                        echo "</span>
\t\t\t\t\t\t  ";
                    }
                    // line 300
                    echo "\t\t\t\t\t\t</p>
\t\t\t\t\t";
                }
                // line 302
                echo "\t            \t<div class=\"action\">
\t\t\t\t\t\t\t";
                // line 303
                if ((twig_get_attribute($this->env, $this->source, $context["product"], "qty", [], "any", false, false, false, 303) > 0)) {
                    // line 304
                    echo "\t\t\t\t\t\t\t\t<button type=\"button\" class=\"cart_button\" onclick=\"cart.add('";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 304);
                    echo "');\" title=\"";
                    echo ($context["button_cart"] ?? null);
                    echo "\" >";
                    echo ($context["button_cart"] ?? null);
                    echo "</button>
\t\t\t\t\t\t\t\t";
                } else {
                    // line 306
                    echo "\t\t\t\t\t\t\t\t<button type=\"button\" class=\"cart_button out_of_stock\" title=\"";
                    echo ($context["text_outstock"] ?? null);
                    echo "\" >";
                    echo ($context["text_outstock"] ?? null);
                    echo "</button>
\t\t\t\t\t\t";
                }
                // line 308
                echo "\t\t\t\t\t\t\t</div>
\t\t\t</div>\t\t

\t  \t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 316
            echo "\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t </div>
\t\t <span class=\"tabspecial_default_width\" style=\"display:none; visibility:hidden\"></span> 
 </div>
";
        }
        // line 322
        echo "\t</div>
\t\t\t </div>
</div>
<script type=\"text/javascript\">
\$('#tabs a').tabs();
</script> ";
    }

    public function getTemplateName()
    {
        return "Ceramic/template/extension/module/webdigifytabs.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  946 => 322,  938 => 316,  925 => 308,  917 => 306,  907 => 304,  905 => 303,  902 => 302,  898 => 300,  890 => 298,  887 => 297,  879 => 295,  873 => 293,  871 => 292,  868 => 291,  865 => 290,  856 => 287,  850 => 286,  846 => 284,  842 => 282,  839 => 281,  835 => 280,  832 => 279,  830 => 278,  827 => 277,  821 => 275,  808 => 267,  801 => 265,  794 => 263,  787 => 262,  781 => 260,  778 => 259,  772 => 257,  770 => 256,  767 => 255,  758 => 253,  753 => 252,  743 => 249,  735 => 248,  730 => 247,  728 => 246,  720 => 245,  709 => 242,  705 => 241,  691 => 240,  688 => 239,  681 => 234,  679 => 233,  676 => 232,  673 => 231,  671 => 230,  665 => 226,  663 => 225,  660 => 224,  652 => 218,  639 => 210,  631 => 208,  621 => 206,  619 => 205,  615 => 203,  611 => 201,  603 => 199,  600 => 198,  592 => 196,  586 => 194,  584 => 193,  581 => 192,  578 => 191,  569 => 188,  563 => 187,  559 => 185,  555 => 183,  552 => 182,  548 => 181,  545 => 180,  543 => 179,  539 => 177,  533 => 175,  521 => 168,  514 => 166,  507 => 164,  501 => 163,  498 => 162,  492 => 160,  489 => 159,  483 => 157,  481 => 156,  478 => 155,  469 => 153,  464 => 152,  454 => 149,  446 => 148,  441 => 147,  439 => 146,  431 => 145,  420 => 142,  416 => 141,  401 => 140,  394 => 135,  392 => 134,  389 => 133,  386 => 132,  384 => 131,  378 => 127,  376 => 126,  368 => 120,  353 => 110,  345 => 108,  335 => 106,  333 => 105,  330 => 104,  326 => 102,  318 => 100,  315 => 99,  307 => 97,  301 => 95,  299 => 94,  296 => 93,  294 => 92,  291 => 91,  282 => 89,  276 => 88,  272 => 86,  268 => 84,  265 => 83,  261 => 82,  258 => 81,  256 => 80,  253 => 79,  247 => 77,  234 => 69,  227 => 67,  220 => 65,  214 => 64,  211 => 63,  205 => 61,  202 => 60,  196 => 58,  194 => 57,  191 => 56,  182 => 54,  177 => 53,  167 => 50,  159 => 49,  154 => 48,  152 => 47,  144 => 46,  133 => 43,  129 => 42,  114 => 41,  107 => 36,  105 => 35,  102 => 34,  99 => 33,  97 => 32,  92 => 29,  90 => 28,  83 => 23,  77 => 21,  75 => 20,  71 => 18,  65 => 16,  63 => 15,  59 => 13,  53 => 11,  51 => 10,  43 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "Ceramic/template/extension/module/webdigifytabs.twig", "");
    }
}
