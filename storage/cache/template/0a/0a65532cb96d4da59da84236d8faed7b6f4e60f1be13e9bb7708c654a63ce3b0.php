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

/* Ceramic/template/common/cart.twig */
class __TwigTemplate_45796a99880805ab6cfe4bff5f0f76ce0ce5660a9f18b8e864339a4b79209ef6 extends \Twig\Template
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
        echo "<div id=\"cart\" class=\"btn-group btn-block\">
  <button type=\"button\" data-toggle=\"dropdown\" data-loading-text=\"";
        // line 2
        echo ($context["text_loading"] ?? null);
        echo "\" class=\"btn btn-inverse btn-block btn-lg dropdown-toggle\">
    <div class=\"cart_detail\">
\t<div class=\"cart_image\"><i class=\"material-icons-outlined shopping-cart\"></i></div>
  
    <span id=\"cart-total\"><span class=\"cart_heading\">";
        // line 6
        echo ($context["cart_heading"] ?? null);
        echo "</span>";
        echo ($context["text_items"] ?? null);
        echo "</span>
  
  
\t</div>
  </button>
    ";
        // line 11
        echo " 
  <ul class=\"dropdown-menu pull-right cart-menu\">
    ";
        // line 13
        if ((($context["products"] ?? null) || ($context["vouchers"] ?? null))) {
            // line 14
            echo "    <li>
      <table class=\"table table-striped\">
        ";
            // line 16
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 17
                echo "        <tr>
          <td class=\"text-center\">";
                // line 18
                if (twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 18)) {
                    echo " <a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 18);
                    echo "\"><img src=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 18);
                    echo "\" alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 18);
                    echo "\" title=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 18);
                    echo "\" class=\"img-thumbnail\" /></a> ";
                }
                echo "</td>
          <td class=\"text-left\"><a href=\"";
                // line 19
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 19);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 19);
                echo "</a> ";
                if (twig_get_attribute($this->env, $this->source, $context["product"], "option", [], "any", false, false, false, 19)) {
                    // line 20
                    echo "            ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["product"], "option", [], "any", false, false, false, 20));
                    foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                        echo " <br />
            - <small>";
                        // line 21
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 21);
                        echo " ";
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 21);
                        echo "</small> ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 22
                    echo "            ";
                }
                // line 23
                echo "            ";
                if (twig_get_attribute($this->env, $this->source, $context["product"], "recurring", [], "any", false, false, false, 23)) {
                    echo " <br />
            - <small>";
                    // line 24
                    echo ($context["text_recurring"] ?? null);
                    echo " ";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "recurring", [], "any", false, false, false, 24);
                    echo "</small> ";
                }
                echo "</td>
          <td class=\"text-right\">x ";
                // line 25
                echo twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 25);
                echo "</td>
          <td class=\"text-right\">";
                // line 26
                echo twig_get_attribute($this->env, $this->source, $context["product"], "total", [], "any", false, false, false, 26);
                echo "</td>
          <td class=\"text-center\"><button type=\"button\" onclick=\"cart.remove('";
                // line 27
                echo twig_get_attribute($this->env, $this->source, $context["product"], "cart_id", [], "any", false, false, false, 27);
                echo "');\" title=\"";
                echo ($context["button_remove"] ?? null);
                echo "\" class=\"btn btn-danger btn-xs\"><i class=\"fa fa-times\"></i></button></td>
        </tr>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 30
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["vouchers"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["voucher"]) {
                // line 31
                echo "        <tr>
          <td class=\"text-center\"></td>
          <td class=\"text-left\">";
                // line 33
                echo twig_get_attribute($this->env, $this->source, $context["voucher"], "description", [], "any", false, false, false, 33);
                echo "</td>
          <td class=\"text-right\">x&nbsp;1</td>
          <td class=\"text-right\">";
                // line 35
                echo twig_get_attribute($this->env, $this->source, $context["voucher"], "amount", [], "any", false, false, false, 35);
                echo "</td>
          <td class=\"text-center text-danger\"><button type=\"button\" onclick=\"voucher.remove('";
                // line 36
                echo twig_get_attribute($this->env, $this->source, $context["voucher"], "key", [], "any", false, false, false, 36);
                echo "');\" title=\"";
                echo ($context["button_remove"] ?? null);
                echo "\" class=\"btn btn-danger btn-xs\"><i class=\"fa fa-times\"></i></button></td>
        </tr>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['voucher'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 39
            echo "      </table>
    </li>
    <li>
      <div>
        <table class=\"table table-bordered\">
          ";
            // line 44
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["totals"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["total"]) {
                // line 45
                echo "          <tr>
            <td class=\"text-right\"><strong>";
                // line 46
                echo twig_get_attribute($this->env, $this->source, $context["total"], "title", [], "any", false, false, false, 46);
                echo "</strong></td>
            <td class=\"text-right\">";
                // line 47
                echo twig_get_attribute($this->env, $this->source, $context["total"], "text", [], "any", false, false, false, 47);
                echo "</td>
          </tr>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['total'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 50
            echo "        </table>
        <p class=\"text-right button-container\">
          <a href=\"";
            // line 52
            echo ($context["cart"] ?? null);
            echo "\"><strong>";
            echo " ";
            echo ($context["text_cart"] ?? null);
            echo "</strong></a>&nbsp;&nbsp;&nbsp;<a href=\"";
            echo ($context["checkout"] ?? null);
            echo "\"><strong>";
            echo " ";
            echo ($context["text_checkout"] ?? null);
            echo "</strong></a></p>
      </div>
    </li>
    ";
        } else {
            // line 56
            echo "    <li>
      <p class=\"text-center\">";
            // line 57
            echo ($context["text_empty_cart"] ?? null);
            echo "</p>
    </li>
    ";
        }
        // line 60
        echo "  </ul>
</div>
";
    }

    public function getTemplateName()
    {
        return "Ceramic/template/common/cart.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  229 => 60,  223 => 57,  220 => 56,  205 => 52,  201 => 50,  192 => 47,  188 => 46,  185 => 45,  181 => 44,  174 => 39,  163 => 36,  159 => 35,  154 => 33,  150 => 31,  145 => 30,  134 => 27,  130 => 26,  126 => 25,  118 => 24,  113 => 23,  110 => 22,  101 => 21,  94 => 20,  88 => 19,  74 => 18,  71 => 17,  67 => 16,  63 => 14,  61 => 13,  57 => 11,  47 => 6,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "Ceramic/template/common/cart.twig", "");
    }
}
