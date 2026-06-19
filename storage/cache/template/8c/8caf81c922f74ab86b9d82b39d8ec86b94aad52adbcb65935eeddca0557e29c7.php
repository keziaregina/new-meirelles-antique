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

/* Ceramic/template/extension/module/information.twig */
class __TwigTemplate_5154806516913f6f473b5a8421a9700cea24f7b3d949225c4d06c5c7e9a4f4ae extends \Twig\Template
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
        echo "<div class=\"box\">
  \t<div class=\"box-heading\">";
        // line 2
        echo ($context["heading_title"] ?? null);
        echo "</div>
\t<div class=\"list-group\">
\t\t\t";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["informations"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["information"]) {
            // line 5
            echo "\t\t\t\t\t<a class=\"list-group-item\" href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["information"], "href", [], "any", false, false, false, 5);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["information"], "title", [], "any", false, false, false, 5);
            echo " </a>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['information'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 7
        echo "\t\t\t<a class=\"list-group-item\" href=\"";
        echo ($context["contact"] ?? null);
        echo "\">";
        echo ($context["text_contact"] ?? null);
        echo " </a>
\t\t\t<a class=\"list-group-item\" href=\"";
        // line 8
        echo ($context["sitemap"] ?? null);
        echo "\">";
        echo ($context["text_sitemap"] ?? null);
        echo " </a>
\t</div>
</div>";
    }

    public function getTemplateName()
    {
        return "Ceramic/template/extension/module/information.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 8,  60 => 7,  49 => 5,  45 => 4,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "Ceramic/template/extension/module/information.twig", "");
    }
}
