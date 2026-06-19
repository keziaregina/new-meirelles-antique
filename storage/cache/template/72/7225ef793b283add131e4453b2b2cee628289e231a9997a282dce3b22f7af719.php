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

/* Ceramic/template/extension/module/blogger.twig */
class __TwigTemplate_b2fd894254da03241955ba49a9cdc7332043e035648ba41f4209ec676ffc4087 extends \Twig\Template
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
        echo "<div class=\"box webdigifyblog bottom-to-top hb-animate-element\">
<div class=\"container\">
\t";
        // line 3
        $context["sliderFor"] = 1;
        // line 4
        echo "\t";
        $context["blogCount"] = twig_length_filter($this->env, ($context["blogs"] ?? null));
        // line 5
        echo " <div class=\"box-heading\">";
        echo ($context["heading_title"] ?? null);
        echo "</div>


  <div class=\"box-content\">
    <div class=\"box-product ";
        // line 9
        if ((($context["blogCount"] ?? null) >= ($context["sliderFor"] ?? null))) {
            echo " owl-carousel blogcarousel ";
        } else {
            echo " productbox-grid";
        }
        echo "\" id=\"";
        if ((($context["blogCount"] ?? null) >= ($context["sliderFor"] ?? null))) {
            echo "blog-carousel";
        } else {
            echo " blog-grid";
        }
        echo "\">
    ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["blogs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["blog"]) {
            echo " 
    <div class=\"";
            // line 11
            if ((($context["blogCount"] ?? null) >= ($context["sliderFor"] ?? null))) {
                echo "blog-item";
            } else {
                echo " product-items";
            }
            echo "\">
\t<div class=\"product-block\">
     ";
            // line 13
            if (twig_get_attribute($this->env, $this->source, $context["blog"], "image", [], "any", false, false, false, 13)) {
                echo " 
\t  <div class=\"blog-left\">
\t  <div class=\"blog-image\">
\t  <img src=\"";
                // line 16
                echo twig_get_attribute($this->env, $this->source, $context["blog"], "image", [], "any", false, false, false, 16);
                echo "\" alt=\"";
                echo ($context["heading_title"] ?? null);
                echo "\" title=\"";
                echo ($context["heading_title"] ?? null);
                echo "\" class=\"img-thumbnail\" />
\t  <div class=\"post-image-hover\"> </div>
<p class=\"post_hover\"><a class=\"icon zoom\" title=\"Click to view Full Image \" href=\"";
                // line 18
                echo twig_get_attribute($this->env, $this->source, $context["blog"], "image", [], "any", false, false, false, 18);
                echo "\" data-lightbox=\"example-set\"><i class=\"fa fa-search-plus\"></i> </a><a class=\"icon readmore_link\" title=\"Click to view Read More \" href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["blog"], "href", [], "any", false, false, false, 18);
                echo "\"><i class=\"fa fa-link\"></i></a></p>


\t  </div>
\t   <div class=\"blog-right\"> 
\t   ";
                // line 26
                echo "\t   <div class=\"view-blog\">
\t\t  <h4><a href=\"";
                // line 27
                echo twig_get_attribute($this->env, $this->source, $context["blog"], "href", [], "any", false, false, false, 27);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["blog"], "title", [], "any", false, false, false, 27);
                echo "</a> </h4>
\t\t  <div class=\"blog-desc\"> ";
                // line 28
                echo twig_get_attribute($this->env, $this->source, $context["blog"], "description", [], "any", false, false, false, 28);
                echo "  </div> 
\t\t<div class=\"read-more\"> <a href=\"";
                // line 29
                echo twig_get_attribute($this->env, $this->source, $context["blog"], "href", [], "any", false, false, false, 29);
                echo "\"> <i class=\"fa fa-link\"></i> ";
                echo ($context["text_read_more"] ?? null);
                echo "</a> </div>
\t  </div>
     
\t </div>
\t  </div>
\t ";
            }
            // line 34
            echo " \t
\t 
    </div>
\t</div>
     ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['blog'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo " \t 
   
  </div>
  ";
        // line 44
        echo "\t<span class=\"blog_default_width\" style=\"display:none; visibility:hidden\"></span>
  </div>
 </div>
 </div>


<script type=\"text/javascript\">

\$(document).ready(function(){
\$('.blogcarousel').owlCarousel({
\t\titems: 3,
\t\tautoPlay: false,
\t\tsingleItem: false,
\t\tnavigation: true,
\t\tnavigationText: ['<i class=\"fa fa-chevron-left fa-5x\"></i>', '<i class=\"fa fa-chevron-right fa-5x\"></i>'],
\t\tpagination: true,
\t\titemsDesktop : [1199,2],
\t\titemsDesktopSmall:[991,2],
\t\titemsTablet :\t[575,1]
\t});
});\t
</script>";
    }

    public function getTemplateName()
    {
        return "Ceramic/template/extension/module/blogger.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  147 => 44,  142 => 38,  132 => 34,  121 => 29,  117 => 28,  111 => 27,  108 => 26,  98 => 18,  89 => 16,  83 => 13,  74 => 11,  68 => 10,  54 => 9,  46 => 5,  43 => 4,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "Ceramic/template/extension/module/blogger.twig", "");
    }
}
