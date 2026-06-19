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

/* Ceramic/template/extension/module/account.twig */
class __TwigTemplate_1f5095b11f397ea795e0135caf9a564b4a0c0a4966b56c664209ae9208b19f39 extends \Twig\Template
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
 <div class=\"list-group\">
  ";
        // line 4
        if ( !($context["logged"] ?? null)) {
            echo " 
  <a href=\"";
            // line 5
            echo ($context["login"] ?? null);
            echo "\" class=\"list-group-item\">";
            echo ($context["text_login"] ?? null);
            echo " </a> <a href=\"";
            echo ($context["register"] ?? null);
            echo "\" class=\"list-group-item\">";
            echo ($context["text_register"] ?? null);
            echo "</a> <a href=\"";
            echo ($context["forgotten"] ?? null);
            echo "\" class=\"list-group-item\">";
            echo ($context["text_forgotten"] ?? null);
            echo " </a>
  ";
        }
        // line 6
        echo " 
 <a href=\"";
        // line 7
        echo ($context["account"] ?? null);
        echo " \" class=\"list-group-item\">";
        echo ($context["text_account"] ?? null);
        echo " </a>
  ";
        // line 8
        if (($context["logged"] ?? null)) {
            echo " 
  <a href=\"";
            // line 9
            echo ($context["edit"] ?? null);
            echo " \" class=\"list-group-item\">";
            echo ($context["text_edit"] ?? null);
            echo "</a> <a href=\"";
            echo ($context["password"] ?? null);
            echo "\" class=\"list-group-item\">";
            echo ($context["text_password"] ?? null);
            echo "</a>
  ";
        }
        // line 10
        echo " 
  <a href=\"";
        // line 11
        echo ($context["address"] ?? null);
        echo "\" class=\"list-group-item\">";
        echo ($context["text_address"] ?? null);
        echo "</a> <a href=\"";
        echo ($context["wishlist"] ?? null);
        echo " \" class=\"list-group-item\">";
        echo ($context["text_wishlist"] ?? null);
        echo " </a> <a href=\"";
        echo ($context["order"] ?? null);
        echo " \" class=\"list-group-item\">";
        echo ($context["text_order"] ?? null);
        echo " </a> <a href=\"";
        echo ($context["download"] ?? null);
        echo "\" class=\"list-group-item\">";
        echo ($context["text_download"] ?? null);
        echo " </a><a href=\"";
        echo ($context["recurring"] ?? null);
        echo "\" class=\"list-group-item\">";
        echo ($context["text_recurring"] ?? null);
        echo " </a> <a href=\"";
        echo ($context["reward"] ?? null);
        echo " \" class=\"list-group-item\">";
        echo ($context["text_reward"] ?? null);
        echo " </a> <a href=\"";
        echo ($context["return"] ?? null);
        echo "\" class=\"list-group-item\">";
        echo ($context["text_return"] ?? null);
        echo " </a> <a href=\"";
        echo ($context["transaction"] ?? null);
        echo "\" class=\"list-group-item\">";
        echo ($context["text_transaction"] ?? null);
        echo " </a> <a href=\"";
        echo ($context["newsletter"] ?? null);
        echo "\" class=\"list-group-item\">";
        echo ($context["text_newsletter"] ?? null);
        echo " </a>
  ";
        // line 12
        if (($context["logged"] ?? null)) {
            echo " 
  <a href=\"";
            // line 13
            echo ($context["logout"] ?? null);
            echo "\" class=\"list-group-item\">";
            echo ($context["text_logout"] ?? null);
            echo " </a>
  ";
        }
        // line 14
        echo " 
</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "Ceramic/template/extension/module/account.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  140 => 14,  133 => 13,  129 => 12,  91 => 11,  88 => 10,  77 => 9,  73 => 8,  67 => 7,  64 => 6,  49 => 5,  45 => 4,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "Ceramic/template/extension/module/account.twig", "");
    }
}
