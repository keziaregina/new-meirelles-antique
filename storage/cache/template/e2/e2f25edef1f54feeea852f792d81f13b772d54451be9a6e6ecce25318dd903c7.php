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

/* Ceramic/template/account/login.twig */
class __TwigTemplate_bd803750418600f9165b1caaad0c630949810811f99073fba48f7291cf2d36a1 extends \Twig\Template
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
<div id=\"account-login\" class=\"container\">
  <ul class=\"breadcrumb\">
    ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 5
            echo "    <li><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 5);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 5);
            echo "</a></li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 7
        echo "  </ul>
  ";
        // line 8
        if (($context["success"] ?? null)) {
            // line 9
            echo "  <div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ";
            echo ($context["success"] ?? null);
            echo "</div>
  ";
        }
        // line 11
        echo "  ";
        if (($context["error_warning"] ?? null)) {
            // line 12
            echo "  <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo ($context["error_warning"] ?? null);
            echo "</div>
  ";
        }
        // line 14
        echo "  <div class=\"row\">";
        echo ($context["column_left"] ?? null);
        echo "
    ";
        // line 15
        if ((($context["column_left"] ?? null) && ($context["column_right"] ?? null))) {
            // line 16
            echo "    ";
            $context["class"] = "col-sm-6";
            // line 17
            echo "    ";
        } elseif ((($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
            // line 18
            echo "    ";
            $context["class"] = "col-sm-9";
            // line 19
            echo "    ";
        } else {
            // line 20
            echo "    ";
            $context["class"] = "col-sm-12";
            // line 21
            echo "    ";
        }
        // line 22
        echo "    <div id=\"content\" class=\"";
        echo ($context["class"] ?? null);
        echo "\">
      ";
        // line 23
        echo ($context["content_top"] ?? null);
        echo "
 <h1>";
        // line 24
        echo ($context["heading_title"] ?? null);
        echo "</h1>
      <div class=\"row\">
        <div class=\"col-sm-6\">
          <div class=\"well\">
            <h2>";
        // line 28
        echo ($context["text_new_customer"] ?? null);
        echo "</h2>
            <p><strong>";
        // line 29
        echo ($context["text_register"] ?? null);
        echo "</strong></p>
            <p>";
        // line 30
        echo ($context["text_register_account"] ?? null);
        echo "</p>
            <a href=\"";
        // line 31
        echo ($context["register"] ?? null);
        echo "\" class=\"btn btn-primary\">";
        echo ($context["button_continue"] ?? null);
        echo "</a></div>
        </div>
        <div class=\"col-sm-6\">
          <div class=\"well\">
            <h2>";
        // line 35
        echo ($context["text_returning_customer"] ?? null);
        echo "</h2>
            <p><strong>";
        // line 36
        echo ($context["text_i_am_returning_customer"] ?? null);
        echo "</strong></p>
            <form action=\"";
        // line 37
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\">
              <div class=\"form-group\">
                <label class=\"control-label\" for=\"input-email\">";
        // line 39
        echo ($context["entry_email"] ?? null);
        echo "</label>
                <input type=\"text\" name=\"email\" value=\"";
        // line 40
        echo ($context["email"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_email"] ?? null);
        echo "\" id=\"input-email\" class=\"form-control\" />
              </div>
              <div class=\"form-group\">
                <label class=\"control-label\" for=\"input-password\">";
        // line 43
        echo ($context["entry_password"] ?? null);
        echo "</label>
                <input type=\"password\" name=\"password\" value=\"";
        // line 44
        echo ($context["password"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_password"] ?? null);
        echo "\" id=\"input-password\" class=\"form-control\" />
                <a href=\"";
        // line 45
        echo ($context["forgotten"] ?? null);
        echo "\">";
        echo ($context["text_forgotten"] ?? null);
        echo "</a></div>
              <input type=\"submit\" value=\"";
        // line 46
        echo ($context["button_login"] ?? null);
        echo "\" class=\"btn btn-primary\" />
              ";
        // line 47
        if (($context["redirect"] ?? null)) {
            // line 48
            echo "              <input type=\"hidden\" name=\"redirect\" value=\"";
            echo ($context["redirect"] ?? null);
            echo "\" />
              ";
        }
        // line 50
        echo "            </form>
          </div>
        </div>
      </div>
      ";
        // line 54
        echo ($context["content_bottom"] ?? null);
        echo "</div>
    ";
        // line 55
        echo ($context["column_right"] ?? null);
        echo "</div>
</div>
";
        // line 57
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "Ceramic/template/account/login.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  208 => 57,  203 => 55,  199 => 54,  193 => 50,  187 => 48,  185 => 47,  181 => 46,  175 => 45,  169 => 44,  165 => 43,  157 => 40,  153 => 39,  148 => 37,  144 => 36,  140 => 35,  131 => 31,  127 => 30,  123 => 29,  119 => 28,  112 => 24,  108 => 23,  103 => 22,  100 => 21,  97 => 20,  94 => 19,  91 => 18,  88 => 17,  85 => 16,  83 => 15,  78 => 14,  72 => 12,  69 => 11,  63 => 9,  61 => 8,  58 => 7,  47 => 5,  43 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "Ceramic/template/account/login.twig", "");
    }
}
