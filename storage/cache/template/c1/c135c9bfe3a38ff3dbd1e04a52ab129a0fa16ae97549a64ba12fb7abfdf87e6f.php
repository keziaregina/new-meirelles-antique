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

/* Ceramic/template/extension/module/banner.twig */
class __TwigTemplate_e80c329efbb13429d8ecad445177f3d7b0bb639cdb248b09650035bc8aea6bde extends \Twig\Template
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
        echo "\t";
        $context["sliderForbanner"] = 1;
        // line 2
        echo "\t";
        $context["bannercount"] = twig_length_filter($this->env, ($context["banners"] ?? null));
        // line 3
        echo "<div class=\"swiper-viewport\">
  <div id=\"";
        // line 4
        if ((($context["bannercount"] ?? null) > ($context["sliderForbanner"] ?? null))) {
            echo "banner";
            echo ($context["module"] ?? null);
        } else {
            echo "banner";
        }
        echo "\" class=\"swiper-container ";
        if ((($context["bannercount"] ?? null) > ($context["sliderForbanner"] ?? null))) {
            echo "bannercarousel";
        } else {
            echo "single-banner";
        }
        echo "\">
    <div class=\"swiper-wrapper\">
\t";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["banners"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["banner"]) {
            // line 7
            echo "      <div class=\"swiper-slide\">";
            if (twig_get_attribute($this->env, $this->source, $context["banner"], "link", [], "any", false, false, false, 7)) {
                echo "<a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["banner"], "link", [], "any", false, false, false, 7);
                echo "\"><img src=\"";
                echo twig_get_attribute($this->env, $this->source, $context["banner"], "image", [], "any", false, false, false, 7);
                echo "\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["banner"], "title", [], "any", false, false, false, 7);
                echo "\" class=\"img-responsive\" /></a>";
            } else {
                echo "<img src=\"";
                echo twig_get_attribute($this->env, $this->source, $context["banner"], "image", [], "any", false, false, false, 7);
                echo "\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["banner"], "title", [], "any", false, false, false, 7);
                echo "\" class=\"img-responsive\" />";
            }
            echo "</div>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['banner'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo "</div>
\t  <!-- If we need pagination -->
    <div class=\"swiper-pagination\"></div>
  </div>
</div>
<script type=\"text/javascript\"><!--
\$('#banner";
        // line 14
        echo ($context["module"] ?? null);
        echo "').swiper({
\t autoplay: 4000,
    pagination: '.swiper-pagination',  // If we need pagination
    autoplayDisableOnInteraction: false
});
--></script> ";
    }

    public function getTemplateName()
    {
        return "Ceramic/template/extension/module/banner.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  97 => 14,  89 => 8,  66 => 7,  62 => 6,  46 => 4,  43 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "Ceramic/template/extension/module/banner.twig", "");
    }
}
