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

/* extension/module/wd_megamenu/list.twig */
class __TwigTemplate_a0d06261c019a2ff5bc3fa9f81736c762409b0df415282c8f56eb84eac6f586f extends \Twig\Template
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
        echo ($context["column_left"] ?? null);
        echo "
<div id=\"content\">
    <div class=\"page-header\">
        <div class=\"container-fluid\">
            <div class=\"pull-right\">
                <a href=\"";
        // line 6
        echo ($context["add"] ?? null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo ($context["button_add"] ?? null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-plus\"></i></a>
                <button type=\"button\" form=\"form-menu\" formaction=\"";
        // line 7
        echo ($context["delete"] ?? null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo ($context["button_delete"] ?? null);
        echo "\" class=\"btn btn-danger\" onclick=\"confirm('";
        echo ($context["text_confirm"] ?? null);
        echo "') ? \$('#form-menu').submit() : false;\"><i class=\"fa fa-trash-o\"></i></button>
            </div>
            <h1>";
        // line 9
        echo ($context["heading_title"] ?? null);
        echo "</h1>
            <ul class=\"breadcrumb\">
                ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 12
            echo "                    <li><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 12);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 12);
            echo "</a></li>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "            </ul>
        </div>
    </div>
    <div class=\"container-fluid\">
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
        echo "        ";
        if (($context["success"] ?? null)) {
            // line 24
            echo "            <div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ";
            echo ($context["success"] ?? null);
            echo "
                <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
            </div>
        ";
        }
        // line 28
        echo "        <div class=\"panel panel-default\">
            <div class=\"panel-heading\">
                <h3 class=\"panel-title\"><i class=\"fa fa-list\"></i> ";
        // line 30
        echo ($context["text_list"] ?? null);
        echo "</h3>
            </div>
            <div class=\"panel-body\">
                <form action=\"";
        // line 33
        echo ($context["delete"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-menu\">
                    <div class=\"table-responsive\">
                        <table class=\"table table-bordered table-hover\">
                            <thead>
                                <tr>
                                    <td style=\"width: 1px;\" class=\"text-center\"><input type=\"checkbox\" onclick=\"\$('input[name*=\\'selected\\']').prop('checked', this.checked);\" /></td>
                                    <td class=\"text-left\">";
        // line 39
        echo ($context["column_name"] ?? null);
        echo "</td>
                                    <td class=\"text-left\">";
        // line 40
        echo ($context["column_status"] ?? null);
        echo "</td>
                                    <td class=\"text-right\">";
        // line 41
        echo ($context["column_action"] ?? null);
        echo "</td>
                                </tr>
                            </thead>
                            <tbody>
                            ";
        // line 45
        if (($context["menu_list"] ?? null)) {
            // line 46
            echo "                                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["menu_list"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["menu"]) {
                // line 47
                echo "                                <tr>
                                    <td class=\"text-center\">
                                        ";
                // line 49
                if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["menu"], "menu_id", [], "any", false, false, false, 49), ($context["selected"] ?? null))) {
                    // line 50
                    echo "                                            <input type=\"checkbox\" name=\"selected[]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["menu"], "menu_id", [], "any", false, false, false, 50);
                    echo "\" checked=\"checked\" />
                                        ";
                } else {
                    // line 52
                    echo "                                            <input type=\"checkbox\" name=\"selected[]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["menu"], "menu_id", [], "any", false, false, false, 52);
                    echo "\" />
                                        ";
                }
                // line 54
                echo "                                    </td>
                                    <td class=\"text-left\">";
                // line 55
                echo twig_get_attribute($this->env, $this->source, $context["menu"], "name", [], "any", false, false, false, 55);
                echo "</td>
                                    <td class=\"text-left\">";
                // line 56
                echo twig_get_attribute($this->env, $this->source, $context["menu"], "status", [], "any", false, false, false, 56);
                echo "</td>
                                    <td class=\"text-right\"><a href=\"";
                // line 57
                echo twig_get_attribute($this->env, $this->source, $context["menu"], "url", [], "any", false, false, false, 57);
                echo "\" data-toggle=\"tooltip\" title=\"";
                echo ($context["button_edit"] ?? null);
                echo "\" class=\"btn btn-primary\"><i class=\"fa fa-pencil\"></i></a></td>
                                </tr>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['menu'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 60
            echo "                            ";
        } else {
            // line 61
            echo "                                <tr>
                                    <td class=\"text-center\" colspan=\"8\">";
            // line 62
            echo ($context["text_no_results"] ?? null);
            echo "</td>
                                </tr>
                            ";
        }
        // line 65
        echo "                            </tbody>
                        </table>
                    </div>
                </form>
                <div class=\"row\">
                    <div class=\"col-sm-6 text-left\">";
        // line 70
        echo ($context["pagination"] ?? null);
        echo "</div>
                    <div class=\"col-sm-6 text-right\">";
        // line 71
        echo ($context["results"] ?? null);
        echo "</div>
                </div>
            </div>
        </div>
    </div>
</div>
";
        // line 77
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "extension/module/wd_megamenu/list.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  221 => 77,  212 => 71,  208 => 70,  201 => 65,  195 => 62,  192 => 61,  189 => 60,  178 => 57,  174 => 56,  170 => 55,  167 => 54,  161 => 52,  155 => 50,  153 => 49,  149 => 47,  144 => 46,  142 => 45,  135 => 41,  131 => 40,  127 => 39,  118 => 33,  112 => 30,  108 => 28,  100 => 24,  97 => 23,  89 => 19,  87 => 18,  81 => 14,  70 => 12,  66 => 11,  61 => 9,  52 => 7,  46 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "extension/module/wd_megamenu/list.twig", "");
    }
}
