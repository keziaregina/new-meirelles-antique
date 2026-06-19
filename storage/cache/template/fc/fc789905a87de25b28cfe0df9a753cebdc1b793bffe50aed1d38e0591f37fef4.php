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

/* Ceramic/template/extension/module/filter.twig */
class __TwigTemplate_7c7f3a8c73de46d9b24233bf649efad7fb1b2beb5b49b894b777b4d2873bdea0 extends \Twig\Template
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
  <div class=\"box-heading\">";
        // line 2
        echo ($context["heading_title"] ?? null);
        echo "</div>
  <div class=\"list-group \"> ";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["filter_groups"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["filter_group"]) {
            echo " <a class=\"list-group-item heading\">";
            echo twig_get_attribute($this->env, $this->source, $context["filter_group"], "name", [], "any", false, false, false, 3);
            echo "</a>

    <div class=\"list-group-item  \">
      <div id=\"filter-group";
            // line 6
            echo twig_get_attribute($this->env, $this->source, $context["filter_group"], "filter_group_id", [], "any", false, false, false, 6);
            echo "\">";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["filter_group"], "filter", [], "any", false, false, false, 6));
            foreach ($context['_seq'] as $context["_key"] => $context["filter"]) {
                // line 7
                echo "        <div class=\"checkbox\">
          <label>";
                // line 8
                if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["filter"], "filter_id", [], "any", false, false, false, 8), ($context["filter_category"] ?? null))) {
                    // line 9
                    echo "            <input type=\"checkbox\" name=\"filter[]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["filter"], "filter_id", [], "any", false, false, false, 9);
                    echo "\" checked=\"checked\" />
            ";
                    // line 10
                    echo twig_get_attribute($this->env, $this->source, $context["filter"], "name", [], "any", false, false, false, 10);
                    echo "
            ";
                } else {
                    // line 12
                    echo "            <input type=\"checkbox\" name=\"filter[]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["filter"], "filter_id", [], "any", false, false, false, 12);
                    echo "\" />
            ";
                    // line 13
                    echo twig_get_attribute($this->env, $this->source, $context["filter"], "name", [], "any", false, false, false, 13);
                    echo "
            ";
                }
                // line 14
                echo "</label>
        </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['filter'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 16
            echo "</div>
    </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['filter_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "\t<div class=\"panel-footer text-right\">
    <button type=\"button\" id=\"button-filter\" class=\"btn btn-primary\">";
        // line 20
        echo ($context["button_filter"] ?? null);
        echo "</button>
  </div>
\t</div>
</div>
<script type=\"text/javascript\"><!--
\$('#button-filter').on('click', function() {
\tfilter = [];

\t\$('input[name^=\\'filter\\']:checked').each(function(element) {
\t\tfilter.push(this.value);
\t});

\tlocation = '";
        // line 32
        echo ($context["action"] ?? null);
        echo "&filter=' + filter.join(',');
});
//--></script> 
<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Transitional//EN\" \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd\">
<html xmlns=\"http://www.w3.org/1999/xhtml\">
<head>
<meta http-equiv=\"Content-Type\" content=\"text/html; charset=iso-8859-1\" />
<title>Untitled Document</title>
</head>

<body>
</body>
</html>
";
    }

    public function getTemplateName()
    {
        return "Ceramic/template/extension/module/filter.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 32,  104 => 20,  101 => 19,  93 => 16,  85 => 14,  80 => 13,  75 => 12,  70 => 10,  65 => 9,  63 => 8,  60 => 7,  54 => 6,  44 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "Ceramic/template/extension/module/filter.twig", "");
    }
}
