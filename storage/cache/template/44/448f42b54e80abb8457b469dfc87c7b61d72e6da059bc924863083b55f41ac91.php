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

/* Ceramic/template/extension/module/special.twig */
class __TwigTemplate_cdf05a90bab8e0bfe9561dd75feb88b7f76b7df0af6ab0cd70e6b63130f054d0 extends \Twig\Template
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
        echo "\t<div class=\"box special bottom-to-top hb-animate-element\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
  <div class=\"box-heading\">";
        // line 4
        echo ($context["heading_title"] ?? null);
        echo "</div>

  <div class=\"box-content\">
\t\t";
        // line 7
        $context["sliderFor"] = 5;
        // line 8
        echo "\t\t";
        $context["productCount"] = twig_length_filter($this->env, ($context["products"] ?? null));
        // line 9
        echo "\t";
        if ((($context["productCount"] ?? null) >= ($context["sliderFor"] ?? null))) {
            // line 10
            echo "\t\t<div class=\"customNavigation\">
\t\t\t<a class=\"fa prev wdspecial_prev fa-arrow-left\">&nbsp;</a>
\t\t\t<a class=\"fa next wdspecial_next fa-arrow-right\">&nbsp;</a>
\t\t</div>\t
\t";
        }
        // line 15
        echo "\t
\t<div class=\"box-product ";
        // line 16
        if ((($context["productCount"] ?? null) >= ($context["sliderFor"] ?? null))) {
            echo "owl-carousel specialcarousel";
        } else {
            echo " productbox-grid";
        }
        echo "\" id=\"";
        if ((($context["productCount"] ?? null) >= ($context["sliderFor"] ?? null))) {
            echo "special-carousel";
        } else {
            echo "special-grid";
        }
        echo "\">
  ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 18
            echo "  <div class=\"";
            if ((($context["productCount"] ?? null) >= ($context["sliderFor"] ?? null))) {
                echo "slider-item";
            } else {
                echo "product-items";
            }
            echo "\">
    <div class=\"product-block product-thumb transition\">
\t  <div class=\"product-block-inner\">\t  \t
\t\t<div class=\"image\">
\t\t\t";
            // line 22
            if (twig_get_attribute($this->env, $this->source, $context["product"], "thumb_swap", [], "any", false, false, false, 22)) {
                // line 23
                echo "\t\t\t\t\t<a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 23);
                echo "\">
\t\t\t\t\t<img src=\"";
                // line 24
                echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 24);
                echo "\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 24);
                echo "\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 24);
                echo "\" class=\"img-responsive reg-image\"/>
\t\t\t\t\t<div class=\"image_content\">
\t\t\t\t\t<img class=\"img-responsive hover-image\" src=\"";
                // line 26
                echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb_swap", [], "any", false, false, false, 26);
                echo "\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 26);
                echo "\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 26);
                echo "\"/>
\t\t\t\t\t</div>
\t\t\t\t\t</a>
\t\t\t\t\t";
            } else {
                // line 30
                echo "\t\t\t\t\t<a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 30);
                echo "\">
\t\t\t\t\t<img src=\"";
                // line 31
                echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 31);
                echo "\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 31);
                echo "\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 31);
                echo "\" class=\"img-responsive\"/></a>
\t\t\t";
            }
            // line 33
            echo "\t\t\t
\t\t\t";
            // line 34
            if (twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 34)) {
                // line 35
                echo "\t\t\t<span class=\"special-tag\">";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "percentsaving", [], "any", false, false, false, 35);
                echo "%</span>
\t\t";
            }
            // line 37
            echo "\t\t<div class=\"countdown\">
\t\t\t\t\t";
            // line 38
            if (twig_get_attribute($this->env, $this->source, $context["product"], "specialTime", [], "any", false, false, false, 38)) {
                // line 39
                echo "\t\t\t\t\t <div class=\"count-down clock\">
\t\t\t\t\t<div data-countdown=\"";
                // line 40
                echo twig_get_attribute($this->env, $this->source, $context["product"], "specialTime", [], "any", false, false, false, 40);
                echo "\" class=\"countbox hastime\"></div>
\t\t\t\t\t</div>\t
\t\t\t\t\t";
            }
            // line 43
            echo "\t\t\t\t</div>\t
\t\t
\t\t  <div class=\"product_hover_block\">
\t\t\t\t<button class=\"compare_button\" type=\"button\"  title=\"";
            // line 46
            echo ($context["button_compare"] ?? null);
            echo " \" onclick=\"compare.add('";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 46);
            echo " ');\"></button>
\t\t\t\t<div class=\"quickview-button\">
\t\t\t\t<a class=\"quickbox\"  title=\"";
            // line 48
            echo ($context["button_quickview"] ?? null);
            echo "\" href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "quick", [], "any", false, false, false, 48);
            echo "\"></a>
\t\t\t\t</div>
\t\t\t<button class=\"wishlist\" type=\"button\"  title=\"";
            // line 50
            echo ($context["button_wishlist"] ?? null);
            echo " \" onclick=\"wishlist.add('";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 50);
            echo " ');\"></button>
\t\t\t</div>
\t\t</div>
      \t<div class=\"product-details\">
\t\t\t<div class=\"caption\">
\t\t\t\t\t
\t\t\t\t
\t\t\t\t<h4><a href=\"";
            // line 57
            echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 57);
            echo " \">";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 57);
            echo " </a></h4>
\t\t\t\t
\t\t\t\t  ";
            // line 60
            echo "\t\t\t\t\t<div class=\"rating\">
\t\t\t\t\t\t";
            // line 61
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, 5));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 62
                echo "\t\t\t\t\t\t";
                if ((twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 62) < $context["i"])) {
                    // line 63
                    echo "\t\t\t\t\t\t<span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
\t\t\t\t\t\t";
                } else {
                    // line 65
                    echo "\t\t\t\t\t\t<span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
\t\t\t\t\t\t";
                }
                // line 67
                echo "\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 68
            echo "\t\t\t\t\t\t &nbsp;<span style=\"cursor:pointer;\" class=\"total-review";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 68);
            echo "\">(";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "review", [], "any", false, false, false, 68);
            echo ")</span>
\t\t\t\t\t</div>
\t\t\t\t";
            // line 71
            echo "\t\t\t\t";
            if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 71)) {
                // line 72
                echo "        \t\t\t<p class=\"price\">
       \t\t\t    ";
                // line 73
                if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 73)) {
                    // line 74
                    echo "          \t\t\t";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 74);
                    echo "
         \t\t\t";
                } else {
                    // line 76
                    echo "         \t\t\t<span class=\"price-new\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 76);
                    echo "</span> <span class=\"price-old\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 76);
                    echo "</span>
\t\t\t        ";
                }
                // line 78
                echo "  \t\t            ";
                if (twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 78)) {
                    // line 79
                    echo "\t\t            <span class=\"price-tax\">";
                    echo ($context["text_tax"] ?? null);
                    echo " ";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 79);
                    echo "</span>
          \t\t\t";
                }
                // line 81
                echo "\t\t\t        </p>
\t\t\t\t";
            }
            // line 83
            echo "\t\t\t\t";
            // line 84
            echo "\t\t\t</div>\t\t
 \t  
\t\t\t<div class=\"action\">
\t\t\t\t";
            // line 87
            if ((twig_get_attribute($this->env, $this->source, $context["product"], "qty", [], "any", false, false, false, 87) > 0)) {
                // line 88
                echo "\t\t\t\t\t<button type=\"button\" class=\"cart_button\" onclick=\"cart.add('";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 88);
                echo "');\" title=\"";
                echo ($context["button_cart"] ?? null);
                echo "\" >";
                echo ($context["button_cart"] ?? null);
                echo "</button>
\t\t\t\t";
            } else {
                // line 90
                echo "\t\t\t\t\t<button type=\"button\" class=\"cart_button out_of_stock\" title=\"";
                echo ($context["text_outstock"] ?? null);
                echo "\" >";
                echo ($context["text_outstock"] ?? null);
                echo "</button>
\t\t\t\t";
            }
            // line 92
            echo "\t\t  </div> 
\t\t\t\t
\t\t\t\t";
            // line 94
            if ((($context["stock_qty"] ?? null) == "true")) {
                // line 95
                echo "\t\t\t\t<span class=\"stock_msg\" style=\"color:#228B22;\">";
                echo ($context["text_productavail"] ?? null);
                echo " : ";
                echo ($context["qty_stock"] ?? null);
                echo "</span>
\t\t\t";
            }
            // line 97
            echo "\t\t\t\t
\t\t\t\t
\t  \t</div>
  \t</div>
\t</div>
</div>
  
 ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 105
        echo "</div>
  </div>
</div>
</div>
</div>
<span class=\"special_default_width\" style=\"display:none; visibility:hidden\"></span>

<script type=\"text/javascript\"><!--

\$(document).ready(function(){
\t\$('.specialcarousel').owlCarousel({
\t\titems: 4,
\t\tsingleItem: false,
\t\tnavigation: false,
\t\tpagination: false,
\t\titemsDesktop : [1499,4],
\t\titemsDesktopSmall :\t[1199,3],
\t\titemsTablet :\t[650,2],
\t\titemsTabletSmall :\t[650,2],
\t\titemsMobile :\t[319,1]
\t});
\t// Custom Navigation Events
\t\$(\".wdspecial_next\").click(function(){
\t\t\$('.specialcarousel').trigger('owl.next');
\t})
\t\$(\".wdspecial_prev\").click(function(){
\t\t\$('.specialcarousel').trigger('owl.prev');
\t});\t
});\t
--></script>
";
    }

    public function getTemplateName()
    {
        return "Ceramic/template/extension/module/special.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  323 => 105,  310 => 97,  302 => 95,  300 => 94,  296 => 92,  288 => 90,  278 => 88,  276 => 87,  271 => 84,  269 => 83,  265 => 81,  257 => 79,  254 => 78,  246 => 76,  240 => 74,  238 => 73,  235 => 72,  232 => 71,  224 => 68,  218 => 67,  214 => 65,  210 => 63,  207 => 62,  203 => 61,  200 => 60,  193 => 57,  181 => 50,  174 => 48,  167 => 46,  162 => 43,  156 => 40,  153 => 39,  151 => 38,  148 => 37,  142 => 35,  140 => 34,  137 => 33,  128 => 31,  123 => 30,  112 => 26,  103 => 24,  98 => 23,  96 => 22,  84 => 18,  80 => 17,  66 => 16,  63 => 15,  56 => 10,  53 => 9,  50 => 8,  48 => 7,  42 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "Ceramic/template/extension/module/special.twig", "");
    }
}
