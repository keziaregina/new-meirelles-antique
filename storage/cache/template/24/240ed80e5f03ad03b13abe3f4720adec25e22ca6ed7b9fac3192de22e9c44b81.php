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

/* Ceramic/template/extension/module/wd_megamenu.twig */
class __TwigTemplate_f9584bdf0f2b4031fd467115823a8e9f7517c30a46fbf3645937d0af066e6c30 extends \Twig\Template
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
        if (($context["warning"] ?? null)) {
        } else {
            // line 3
            echo "    ";
            if ((($context["menu_type"] ?? null) == "horizontal")) {
                // line 4
                echo "        <div class=\"main-category-list left-menu\">
        <div class=\"cat-menu\">
\t\t\t<div class=\"WD-panel-heading\">
\t\t\t\t";
                // line 8
                echo "\t\t\t\t";
                // line 9
                echo "                <!--<i class='material-icons close-icon'>close</i>-->
\t\t\t</div> 
\t\t\t<div class=\"wd-menu horizontal-menu wd-menu-bar\" id=\"wd-menu-";
                // line 11
                echo ($context["module_id"] ?? null);
                echo "\">
            ";
                // line 12
                if (($context["items"] ?? null)) {
                    // line 13
                    echo "                <ul class=\"ul-top-items\">
                    ";
                    // line 14
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
                    foreach ($context['_seq'] as $context["_key"] => $context["top_item"]) {
                        // line 15
                        echo "                        ";
                        if (twig_get_attribute($this->env, $this->source, $context["top_item"], "status", [], "any", false, false, false, 15)) {
                            // line 16
                            echo "                            <li class=\"li-top-item";
                            if ((twig_get_attribute($this->env, $this->source, $context["top_item"], "sub_menu_type", [], "any", false, false, false, 16) == "mega")) {
                                echo " mega-menu";
                            }
                            if (twig_get_attribute($this->env, $this->source, $context["top_item"], "has_child", [], "any", false, false, false, 16)) {
                                echo " wd-sub-menu";
                            }
                            if ((twig_get_attribute($this->env, $this->source, $context["top_item"], "sub_menu_type", [], "any", false, false, false, 16) == "flyout")) {
                                echo " flyout-menu";
                            }
                            echo "\">
                                ";
                            // line 17
                            if (twig_get_attribute($this->env, $this->source, $context["top_item"], "has_link", [], "any", false, false, false, 17)) {
                                // line 18
                                echo "                                    <a class=\"a-top-link\" href=\"";
                                echo twig_get_attribute($this->env, $this->source, $context["top_item"], "link", [], "any", false, false, false, 18);
                                echo "\">
                                        ";
                                // line 19
                                if (twig_get_attribute($this->env, $this->source, $context["top_item"], "icon", [], "any", false, false, false, 19)) {
                                    // line 20
                                    echo "                                            <img src=\"";
                                    echo twig_get_attribute($this->env, $this->source, $context["top_item"], "icon", [], "any", false, false, false, 20);
                                    echo "\" class=\"top-icon\"/>
                                        ";
                                }
                                // line 22
                                echo "                                        ";
                                if (twig_get_attribute($this->env, $this->source, $context["top_item"], "has_title", [], "any", false, false, false, 22)) {
                                    // line 23
                                    echo "                                            <span>";
                                    echo twig_get_attribute($this->env, $this->source, $context["top_item"], "title", [], "any", false, false, false, 23);
                                    echo "</span>
                                        ";
                                }
                                // line 25
                                echo "                                    </a>
                                ";
                            } else {
                                // line 27
                                echo "                                    <a class=\"a-top-link a-item\" href=\"javascript:void(0)\">
                                        ";
                                // line 28
                                if (twig_get_attribute($this->env, $this->source, $context["top_item"], "icon", [], "any", false, false, false, 28)) {
                                    // line 29
                                    echo "                                            <img src=\"";
                                    echo twig_get_attribute($this->env, $this->source, $context["top_item"], "icon", [], "any", false, false, false, 29);
                                    echo "\" class=\"top-icon\"/>
                                        ";
                                }
                                // line 31
                                echo "                                        ";
                                if (twig_get_attribute($this->env, $this->source, $context["top_item"], "has_title", [], "any", false, false, false, 31)) {
                                    // line 32
                                    echo "                                            <span>";
                                    echo twig_get_attribute($this->env, $this->source, $context["top_item"], "title", [], "any", false, false, false, 32);
                                    echo "</span>
                                        ";
                                }
                                // line 34
                                echo "                                    </a>
                                ";
                            }
                            // line 36
                            echo "                                ";
                            if (twig_get_attribute($this->env, $this->source, $context["top_item"], "has_child", [], "any", false, false, false, 36)) {
                                // line 37
                                echo "                                    <!-- Mega Menu -->
                                    ";
                                // line 38
                                if ((twig_get_attribute($this->env, $this->source, $context["top_item"], "sub_menu_type", [], "any", false, false, false, 38) == "mega")) {
                                    // line 39
                                    echo "                                        ";
                                    if ((twig_get_attribute($this->env, $this->source, $context["top_item"], "sub_menu_content_type", [], "any", false, false, false, 39) == "children")) {
                                        // line 40
                                        echo "                                        
                                            <div class=\"mega-menu-container product-thumb sub-menu-container ";
                                        // line 41
                                        if ((twig_get_attribute($this->env, $this->source, ($context["menu_setting"] ?? null), "mega_menu_width", [], "any", false, false, false, 41) == "100%")) {
                                            echo " full-width ";
                                        }
                                        echo "\">
                                                <div class=\"container\">
                                                ";
                                        // line 43
                                        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["top_item"], "sub_items", [], "any", false, false, false, 43)) > 0)) {
                                            // line 44
                                            echo "                                                    ";
                                            $context['_parent'] = $context;
                                            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["top_item"], "sub_items", [], "any", false, false, false, 44));
                                            foreach ($context['_seq'] as $context["_key"] => $context["sub_item2"]) {
                                                // line 45
                                                echo "                                                        ";
                                                if (twig_get_attribute($this->env, $this->source, $context["sub_item2"], "status", [], "any", false, false, false, 45)) {
                                                    // line 46
                                                    echo "                                                            <div class=\"";
                                                    if (twig_get_attribute($this->env, $this->source, $context["top_item"], "sub_menu_content_columns", [], "any", false, false, false, 46)) {
                                                        echo "col-sm-";
                                                        echo twig_get_attribute($this->env, $this->source, $context["top_item"], "sub_menu_content_columns", [], "any", false, false, false, 46);
                                                    }
                                                    echo " sub-item2-content\"
                                                                    ";
                                                    // line 47
                                                    if ((twig_get_attribute($this->env, $this->source, $context["top_item"], "sub_menu_content_columns", [], "any", false, false, false, 47) == false)) {
                                                        echo " style=\"width: 20%;\" data-cols=\"12/5\" ";
                                                    } else {
                                                        echo " data-cols=\"";
                                                        echo twig_get_attribute($this->env, $this->source, $context["top_item"], "sub_menu_content_columns", [], "any", false, false, false, 47);
                                                        echo "\" ";
                                                    }
                                                    echo " >
                                                                <a class=\"a-mega-second-link\" href=\"";
                                                    // line 48
                                                    echo twig_get_attribute($this->env, $this->source, $context["sub_item2"], "link", [], "any", false, false, false, 48);
                                                    echo "\"><h4><strong>";
                                                    echo twig_get_attribute($this->env, $this->source, $context["sub_item2"], "title", [], "any", false, false, false, 48);
                                                    echo "</strong></h4></a>
                                                                ";
                                                    // line 49
                                                    if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["sub_item2"], "sub_items", [], "any", false, false, false, 49)) > 0)) {
                                                        // line 50
                                                        echo "                                                                    <div class=\"sub_item3-content\">
                                                                        ";
                                                        // line 51
                                                        $context['_parent'] = $context;
                                                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["sub_item2"], "sub_items", [], "any", false, false, false, 51));
                                                        foreach ($context['_seq'] as $context["_key"] => $context["sub_item3"]) {
                                                            // line 52
                                                            echo "                                                                            ";
                                                            if (twig_get_attribute($this->env, $this->source, $context["sub_item3"], "status", [], "any", false, false, false, 52)) {
                                                                // line 53
                                                                echo "                                                                                <a class=\"a-mega-third-link\" href=\"";
                                                                echo twig_get_attribute($this->env, $this->source, $context["sub_item3"], "link", [], "any", false, false, false, 53);
                                                                echo "\"><h5>";
                                                                echo twig_get_attribute($this->env, $this->source, $context["sub_item3"], "title", [], "any", false, false, false, 53);
                                                                echo "</h5></a>
                                                                            ";
                                                            }
                                                            // line 55
                                                            echo "                                                                        ";
                                                        }
                                                        $_parent = $context['_parent'];
                                                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sub_item3'], $context['_parent'], $context['loop']);
                                                        $context = array_intersect_key($context, $_parent) + $_parent;
                                                        // line 56
                                                        echo "                                                                    </div>
                                                                ";
                                                    }
                                                    // line 58
                                                    echo "                                                            </div>
                                                        ";
                                                }
                                                // line 60
                                                echo "                                                    ";
                                            }
                                            $_parent = $context['_parent'];
                                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sub_item2'], $context['_parent'], $context['loop']);
                                            $context = array_intersect_key($context, $_parent) + $_parent;
                                            // line 61
                                            echo "                                                ";
                                        }
                                        // line 62
                                        echo "                                            </div>
                                             </div>
                                        ";
                                    }
                                    // line 65
                                    echo "
                                        ";
                                    // line 66
                                    if ((twig_get_attribute($this->env, $this->source, $context["top_item"], "sub_menu_content_type", [], "any", false, false, false, 66) == "category")) {
                                        // line 67
                                        echo "                                            ";
                                        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["top_item"], "sub_menu_content", [], "any", false, false, false, 67)) > 0)) {
                                            // line 68
                                            echo "                                                <div class=\"mega-menu-container product-thumb sub-menu-container ";
                                            if ((twig_get_attribute($this->env, $this->source, ($context["menu_setting"] ?? null), "mega_menu_width", [], "any", false, false, false, 68) == "100%")) {
                                                echo " full-width ";
                                            }
                                            echo "\">
                                                    ";
                                            // line 69
                                            $context['_parent'] = $context;
                                            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["top_item"], "sub_menu_content", [], "any", false, false, false, 69));
                                            foreach ($context['_seq'] as $context["type"] => $context["widgets"]) {
                                                // line 70
                                                echo "                                                        ";
                                                if (($context["type"] == "category")) {
                                                    // line 71
                                                    echo "                                                            ";
                                                    if ((twig_length_filter($this->env, $context["widgets"]) > 0)) {
                                                        // line 72
                                                        echo "                                                                ";
                                                        $context['_parent'] = $context;
                                                        $context['_seq'] = twig_ensure_traversable($context["widgets"]);
                                                        foreach ($context['_seq'] as $context["_key"] => $context["widget"]) {
                                                            // line 73
                                                            echo "                                                                    <div class=\"col-sm-";
                                                            echo twig_get_attribute($this->env, $this->source, $context["widget"], "cols", [], "any", false, false, false, 73);
                                                            echo " sub-item2-content\" data-cols=\"";
                                                            echo twig_get_attribute($this->env, $this->source, $context["widget"], "cols", [], "any", false, false, false, 73);
                                                            echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"sub-cate-img\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                                            // line 75
                                                            if (twig_get_attribute($this->env, $this->source, $context["widget"], "image", [], "any", false, false, false, 75)) {
                                                                // line 76
                                                                echo "                                                                            <img src=\"";
                                                                echo twig_get_attribute($this->env, $this->source, $context["widget"], "image", [], "any", false, false, false, 76);
                                                                echo "\" alt=\"";
                                                                echo twig_get_attribute($this->env, $this->source, $context["widget"], "title", [], "any", false, false, false, 76);
                                                                echo "\" class=\"mega-second-image\" />
                                                                        ";
                                                            }
                                                            // line 78
                                                            echo "                                                                        </div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"a-mega-second-link\" href=\"";
                                                            // line 79
                                                            echo twig_get_attribute($this->env, $this->source, $context["widget"], "link", [], "any", false, false, false, 79);
                                                            echo "\"><h4><strong>";
                                                            echo twig_get_attribute($this->env, $this->source, $context["widget"], "title", [], "any", false, false, false, 79);
                                                            echo "</strong></h4></a>
                                                                        ";
                                                            // line 80
                                                            if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["widget"], "children", [], "any", false, false, false, 80)) > 0)) {
                                                                // line 81
                                                                echo "                                                                            <div class=\"sub_item3-content\">
                                                                                ";
                                                                // line 82
                                                                $context['_parent'] = $context;
                                                                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["widget"], "children", [], "any", false, false, false, 82));
                                                                foreach ($context['_seq'] as $context["_key"] => $context["c_category"]) {
                                                                    // line 83
                                                                    echo "                                                                                    <a class=\"a-mega-third-link\" href=\"";
                                                                    echo twig_get_attribute($this->env, $this->source, $context["c_category"], "link", [], "any", false, false, false, 83);
                                                                    echo "\"><h5>";
                                                                    echo twig_get_attribute($this->env, $this->source, $context["c_category"], "title", [], "any", false, false, false, 83);
                                                                    echo "</h5></a>
                                                                                ";
                                                                }
                                                                $_parent = $context['_parent'];
                                                                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c_category'], $context['_parent'], $context['loop']);
                                                                $context = array_intersect_key($context, $_parent) + $_parent;
                                                                // line 85
                                                                echo "                                                                            </div>
                                                                        ";
                                                            }
                                                            // line 87
                                                            echo "                                                                       
                                                                    </div>
                                                                ";
                                                        }
                                                        $_parent = $context['_parent'];
                                                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['widget'], $context['_parent'], $context['loop']);
                                                        $context = array_intersect_key($context, $_parent) + $_parent;
                                                        // line 90
                                                        echo "                                                            ";
                                                    }
                                                    // line 91
                                                    echo "                                                        ";
                                                }
                                                // line 92
                                                echo "                                                    ";
                                            }
                                            $_parent = $context['_parent'];
                                            unset($context['_seq'], $context['_iterated'], $context['type'], $context['widgets'], $context['_parent'], $context['loop']);
                                            $context = array_intersect_key($context, $_parent) + $_parent;
                                            // line 93
                                            echo "                                                </div>
                                            ";
                                        }
                                        // line 95
                                        echo "                                        ";
                                    }
                                    // line 96
                                    echo "
                                        ";
                                    // line 97
                                    if ((twig_get_attribute($this->env, $this->source, $context["top_item"], "sub_menu_content_type", [], "any", false, false, false, 97) == "widget")) {
                                        // line 98
                                        echo "                                            ";
                                        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["top_item"], "sub_menu_content", [], "any", false, false, false, 98)) > 0)) {
                                            // line 99
                                            echo "                                                <div class=\"mega-menu-container product-thumb sub-menu-container ";
                                            if ((twig_get_attribute($this->env, $this->source, ($context["menu_setting"] ?? null), "mega_menu_width", [], "any", false, false, false, 99) == "100%")) {
                                                echo " full-width ";
                                            }
                                            echo "\">
                                                    <div class=\"container\">
                                                    ";
                                            // line 101
                                            $context['_parent'] = $context;
                                            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["top_item"], "sub_menu_content", [], "any", false, false, false, 101));
                                            foreach ($context['_seq'] as $context["type"] => $context["widgets"]) {
                                                // line 102
                                                echo "                                                        ";
                                                if (($context["type"] == "widget")) {
                                                    // line 103
                                                    echo "                                                            ";
                                                    if ((twig_length_filter($this->env, $context["widgets"]) > 0)) {
                                                        // line 104
                                                        echo "                                                                ";
                                                        $context['_parent'] = $context;
                                                        $context['_seq'] = twig_ensure_traversable($context["widgets"]);
                                                        foreach ($context['_seq'] as $context["_key"] => $context["widget"]) {
                                                            // line 105
                                                            echo "                                                                    ";
                                                            if ((twig_get_attribute($this->env, $this->source, $context["widget"], "type", [], "any", false, false, false, 105) == "category")) {
                                                                // line 106
                                                                echo "                                                                        <div class=\"col-sm-";
                                                                echo twig_get_attribute($this->env, $this->source, $context["widget"], "cols", [], "any", false, false, false, 106);
                                                                echo " sub-item2-content\" data-cols=\"";
                                                                echo twig_get_attribute($this->env, $this->source, $context["widget"], "cols", [], "any", false, false, false, 106);
                                                                echo "\">
                                                                            <div class=\"sub-cate-img\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                                                // line 108
                                                                if (twig_get_attribute($this->env, $this->source, $context["widget"], "image", [], "any", false, false, false, 108)) {
                                                                    // line 109
                                                                    echo "                                                                                <img src=\"";
                                                                    echo twig_get_attribute($this->env, $this->source, $context["widget"], "image", [], "any", false, false, false, 109);
                                                                    echo "\" alt=\"";
                                                                    echo twig_get_attribute($this->env, $this->source, $context["widget"], "title", [], "any", false, false, false, 109);
                                                                    echo "\" class=\"mega-second-image\" />
                                                                            ";
                                                                }
                                                                // line 111
                                                                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
                                                                            <a class=\"a-mega-second-link\" href=\"";
                                                                // line 112
                                                                echo twig_get_attribute($this->env, $this->source, $context["widget"], "link", [], "any", false, false, false, 112);
                                                                echo "\"><h4><strong>";
                                                                echo twig_get_attribute($this->env, $this->source, $context["widget"], "title", [], "any", false, false, false, 112);
                                                                echo "</strong></h4></a>
                                                                            ";
                                                                // line 113
                                                                if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["widget"], "children", [], "any", false, false, false, 113)) > 0)) {
                                                                    // line 114
                                                                    echo "                                                                                <div class=\"sub_item3-content\">
                                                                                    ";
                                                                    // line 115
                                                                    $context['_parent'] = $context;
                                                                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["widget"], "children", [], "any", false, false, false, 115));
                                                                    foreach ($context['_seq'] as $context["_key"] => $context["c_category"]) {
                                                                        // line 116
                                                                        echo "                                                                                        <a class=\"a-mega-third-link\" href=\"";
                                                                        echo twig_get_attribute($this->env, $this->source, $context["c_category"], "link", [], "any", false, false, false, 116);
                                                                        echo "\"><h5>";
                                                                        echo twig_get_attribute($this->env, $this->source, $context["c_category"], "title", [], "any", false, false, false, 116);
                                                                        echo "</h5></a>
                                                                                    ";
                                                                    }
                                                                    $_parent = $context['_parent'];
                                                                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c_category'], $context['_parent'], $context['loop']);
                                                                    $context = array_intersect_key($context, $_parent) + $_parent;
                                                                    // line 118
                                                                    echo "                                                                                </div>
                                                                            ";
                                                                }
                                                                // line 120
                                                                echo "                                                                        </div>
                                                                    ";
                                                            }
                                                            // line 122
                                                            echo "
                                                                    ";
                                                            // line 123
                                                            if ((twig_get_attribute($this->env, $this->source, $context["widget"], "type", [], "any", false, false, false, 123) == "product")) {
                                                                // line 124
                                                                echo "                                                                        <div class=\"col-sm-";
                                                                echo twig_get_attribute($this->env, $this->source, $context["widget"], "cols", [], "any", false, false, false, 124);
                                                                echo " sub-item2-content div-product\" data-cols=\"";
                                                                echo twig_get_attribute($this->env, $this->source, $context["widget"], "cols", [], "any", false, false, false, 124);
                                                                echo "\">
                                                                            ";
                                                                // line 125
                                                                if (twig_get_attribute($this->env, $this->source, $context["widget"], "image", [], "any", false, false, false, 125)) {
                                                                    // line 126
                                                                    echo "                                                                                <div class=\"product-img\">
                                                                                <a class=\"a-mega-second-link\" href=\"";
                                                                    // line 127
                                                                    echo twig_get_attribute($this->env, $this->source, $context["widget"], "link", [], "any", false, false, false, 127);
                                                                    echo "\">
                                                                                    <img src=\"";
                                                                    // line 128
                                                                    echo twig_get_attribute($this->env, $this->source, $context["widget"], "image", [], "any", false, false, false, 128);
                                                                    echo "\" alt=\"";
                                                                    echo twig_get_attribute($this->env, $this->source, $context["widget"], "title", [], "any", false, false, false, 128);
                                                                    echo "\" class=\"mega-second-image\" />
                                                                                </a>
                                                                                </div>
                                                                            ";
                                                                }
                                                                // line 132
                                                                echo "                                                                            <a class=\"a-mega-second-link detail\" href=\"";
                                                                echo twig_get_attribute($this->env, $this->source, $context["widget"], "link", [], "any", false, false, false, 132);
                                                                echo "\">
                                                                                <h4><strong>";
                                                                // line 133
                                                                echo twig_get_attribute($this->env, $this->source, $context["widget"], "title", [], "any", false, false, false, 133);
                                                                echo "</strong></h4>
                                                                                ";
                                                                // line 134
                                                                if (twig_get_attribute($this->env, $this->source, $context["widget"], "price", [], "any", false, false, false, 134)) {
                                                                    // line 135
                                                                    echo "                                                                                    <p class=\"price\">
                                                                                        ";
                                                                    // line 136
                                                                    if ( !twig_get_attribute($this->env, $this->source, $context["widget"], "special", [], "any", false, false, false, 136)) {
                                                                        // line 137
                                                                        echo "                                                                                            ";
                                                                        echo twig_get_attribute($this->env, $this->source, $context["widget"], "price", [], "any", false, false, false, 137);
                                                                        echo "
                                                                                        ";
                                                                    } else {
                                                                        // line 139
                                                                        echo "                                                                                            <span class=\"price-new\">";
                                                                        echo twig_get_attribute($this->env, $this->source, $context["widget"], "special", [], "any", false, false, false, 139);
                                                                        echo "</span> <span class=\"price-old\">";
                                                                        echo twig_get_attribute($this->env, $this->source, $context["widget"], "price", [], "any", false, false, false, 139);
                                                                        echo "</span>
                                                                                        ";
                                                                    }
                                                                    // line 141
                                                                    echo "                                                                                        ";
                                                                    if (twig_get_attribute($this->env, $this->source, $context["widget"], "tax", [], "any", false, false, false, 141)) {
                                                                        // line 142
                                                                        echo "                                                                                            <span class=\"price-tax\">";
                                                                        echo ($context["text_tax"] ?? null);
                                                                        echo " ";
                                                                        echo twig_get_attribute($this->env, $this->source, $context["widget"], "tax", [], "any", false, false, false, 142);
                                                                        echo "</span>
                                                                                        ";
                                                                    }
                                                                    // line 144
                                                                    echo "                                                                                    </p>
                                                                                ";
                                                                }
                                                                // line 145
                                                                echo " 
                                                                            </a>
                                                                        </div>
                                                                    ";
                                                            }
                                                            // line 149
                                                            echo "
                                                                    ";
                                                            // line 150
                                                            if ((twig_get_attribute($this->env, $this->source, $context["widget"], "type", [], "any", false, false, false, 150) == "html")) {
                                                                // line 151
                                                                echo "                                                                        <div class=\"col-sm-";
                                                                echo twig_get_attribute($this->env, $this->source, $context["widget"], "cols", [], "any", false, false, false, 151);
                                                                echo " sub-item2-content\" data-cols=\"";
                                                                echo twig_get_attribute($this->env, $this->source, $context["widget"], "cols", [], "any", false, false, false, 151);
                                                                echo "\">
                                                                            <h4><strong>";
                                                                // line 152
                                                                echo twig_get_attribute($this->env, $this->source, $context["widget"], "title", [], "any", false, false, false, 152);
                                                                echo "</strong></h4>
                                                                            ";
                                                                // line 153
                                                                echo twig_get_attribute($this->env, $this->source, $context["widget"], "content", [], "any", false, false, false, 153);
                                                                echo "
                                                                        </div>
                                                                    ";
                                                            }
                                                            // line 156
                                                            echo "
                                                                    ";
                                                            // line 157
                                                            if ((twig_get_attribute($this->env, $this->source, $context["widget"], "type", [], "any", false, false, false, 157) == "link")) {
                                                                // line 158
                                                                echo "                                                                        <div class=\"col-sm-";
                                                                echo twig_get_attribute($this->env, $this->source, $context["widget"], "cols", [], "any", false, false, false, 158);
                                                                echo " sub-item2-content\" data-cols=\"";
                                                                echo twig_get_attribute($this->env, $this->source, $context["widget"], "cols", [], "any", false, false, false, 158);
                                                                echo "\">
                                                                            <a class=\"a-mega-second-link a-widget-link\" href=\"";
                                                                // line 159
                                                                echo twig_get_attribute($this->env, $this->source, $context["widget"], "link", [], "any", false, false, false, 159);
                                                                echo "\"><h4><strong>";
                                                                echo twig_get_attribute($this->env, $this->source, $context["widget"], "title", [], "any", false, false, false, 159);
                                                                echo "</strong></h4></a>
                                                                        </div>
                                                                    ";
                                                            }
                                                            // line 162
                                                            echo "                                                                ";
                                                        }
                                                        $_parent = $context['_parent'];
                                                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['widget'], $context['_parent'], $context['loop']);
                                                        $context = array_intersect_key($context, $_parent) + $_parent;
                                                        // line 163
                                                        echo "                                                            ";
                                                    }
                                                    // line 164
                                                    echo "                                                        ";
                                                }
                                                // line 165
                                                echo "                                                    ";
                                            }
                                            $_parent = $context['_parent'];
                                            unset($context['_seq'], $context['_iterated'], $context['type'], $context['widgets'], $context['_parent'], $context['loop']);
                                            $context = array_intersect_key($context, $_parent) + $_parent;
                                            // line 166
                                            echo "                                                </div>
                                                </div>
                                            ";
                                        }
                                        // line 169
                                        echo "                                        ";
                                    }
                                    // line 170
                                    echo "                                    ";
                                }
                                // line 171
                                echo "
                                    <!-- Flyout Menu -->
                                    ";
                                // line 173
                                if ((twig_get_attribute($this->env, $this->source, $context["top_item"], "sub_menu_type", [], "any", false, false, false, 173) == "flyout")) {
                                    // line 174
                                    echo "                                        ";
                                    if ((twig_get_attribute($this->env, $this->source, $context["top_item"], "sub_menu_content_type", [], "any", false, false, false, 174) == "children")) {
                                        // line 175
                                        echo "                                            ";
                                        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["top_item"], "sub_items", [], "any", false, false, false, 175)) > 0)) {
                                            // line 176
                                            echo "                                                <div class=\"wd-sub-menu-container sub-menu-container\">
                                                    <ul class=\"ul-second-items\">
                                                        ";
                                            // line 178
                                            $context['_parent'] = $context;
                                            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["top_item"], "sub_items", [], "any", false, false, false, 178));
                                            foreach ($context['_seq'] as $context["_key"] => $context["sub_item2"]) {
                                                // line 179
                                                echo "                                                            ";
                                                if (twig_get_attribute($this->env, $this->source, $context["sub_item2"], "status", [], "any", false, false, false, 179)) {
                                                    // line 180
                                                    echo "                                                                <li class=\"li-second-items\">
                                                                    <a href=\"";
                                                    // line 181
                                                    echo twig_get_attribute($this->env, $this->source, $context["sub_item2"], "link", [], "any", false, false, false, 181);
                                                    echo "\" class=\"a-second-link a-item\">
                                                                        <span class=\"a-second-title\">";
                                                    // line 182
                                                    echo twig_get_attribute($this->env, $this->source, $context["sub_item2"], "title", [], "any", false, false, false, 182);
                                                    echo "</span>
                                                                        ";
                                                    // line 183
                                                    if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["sub_item2"], "sub_items", [], "any", false, false, false, 183)) > 0)) {
                                                        // line 184
                                                        echo "                                                                                <i class=\"material-icons chevron-right\">chevron_right</i>
                                                                        ";
                                                    }
                                                    // line 186
                                                    echo "                                                                    </a>
                                                                    ";
                                                    // line 187
                                                    if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["sub_item2"], "sub_items", [], "any", false, false, false, 187)) > 0)) {
                                                        // line 188
                                                        echo "                                                                        <div class=\"flyout-third-items\">
                                                                            <ul class=\"ul-third-items\">
                                                                                ";
                                                        // line 190
                                                        $context['_parent'] = $context;
                                                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["sub_item2"], "sub_items", [], "any", false, false, false, 190));
                                                        foreach ($context['_seq'] as $context["_key"] => $context["sub_item3"]) {
                                                            // line 191
                                                            echo "                                                                                    ";
                                                            if (twig_get_attribute($this->env, $this->source, $context["sub_item3"], "status", [], "any", false, false, false, 191)) {
                                                                // line 192
                                                                echo "                                                                                        <li class=\"li-third-items\">
                                                                                            <a href=\"";
                                                                // line 193
                                                                echo twig_get_attribute($this->env, $this->source, $context["sub_item3"], "link", [], "any", false, false, false, 193);
                                                                echo "\" class=\"a-third-link\"><span class=\"a-third-title\">";
                                                                echo twig_get_attribute($this->env, $this->source, $context["sub_item3"], "title", [], "any", false, false, false, 193);
                                                                echo "</span></a>
                                                                                        </li>
                                                                                    ";
                                                            }
                                                            // line 196
                                                            echo "                                                                                ";
                                                        }
                                                        $_parent = $context['_parent'];
                                                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sub_item3'], $context['_parent'], $context['loop']);
                                                        $context = array_intersect_key($context, $_parent) + $_parent;
                                                        // line 197
                                                        echo "                                                                            </ul>
                                                                        </div>
                                                                    ";
                                                    }
                                                    // line 200
                                                    echo "                                                                </li>
                                                            ";
                                                }
                                                // line 202
                                                echo "                                                        ";
                                            }
                                            $_parent = $context['_parent'];
                                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sub_item2'], $context['_parent'], $context['loop']);
                                            $context = array_intersect_key($context, $_parent) + $_parent;
                                            // line 203
                                            echo "                                                    </ul>
                                                </div>
                                            ";
                                        }
                                        // line 206
                                        echo "                                        ";
                                    }
                                    // line 207
                                    echo "
                                        ";
                                    // line 208
                                    if ((twig_get_attribute($this->env, $this->source, $context["top_item"], "sub_menu_content_type", [], "any", false, false, false, 208) == "category")) {
                                        // line 209
                                        echo "                                            ";
                                        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["top_item"], "sub_menu_content", [], "any", false, false, false, 209)) > 0)) {
                                            // line 210
                                            echo "                                                <div class=\"wd-sub-menu-container sub-menu-container\">
                                                    <ul class=\"ul-second-items\">
                                                        ";
                                            // line 212
                                            $context['_parent'] = $context;
                                            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["top_item"], "sub_menu_content", [], "any", false, false, false, 212));
                                            foreach ($context['_seq'] as $context["type"] => $context["widgets"]) {
                                                // line 213
                                                echo "                                                            ";
                                                if (($context["type"] == "category")) {
                                                    // line 214
                                                    echo "                                                                ";
                                                    if ((twig_length_filter($this->env, $context["widgets"]) > 0)) {
                                                        // line 215
                                                        echo "                                                                    ";
                                                        $context['_parent'] = $context;
                                                        $context['_seq'] = twig_ensure_traversable($context["widgets"]);
                                                        foreach ($context['_seq'] as $context["_key"] => $context["widget"]) {
                                                            // line 216
                                                            echo "                                                                        <li class=\"li-second-items\">
                                                                            <a href=\"";
                                                            // line 217
                                                            echo twig_get_attribute($this->env, $this->source, $context["widget"], "link", [], "any", false, false, false, 217);
                                                            echo "\" class=\"a-second-link a-item\">
                                                                                <span class=\"a-second-title\">";
                                                            // line 218
                                                            echo twig_get_attribute($this->env, $this->source, $context["widget"], "title", [], "any", false, false, false, 218);
                                                            echo "</span>
                                                                                ";
                                                            // line 219
                                                            if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["widget"], "children", [], "any", false, false, false, 219)) > 0)) {
                                                                // line 220
                                                                echo "                                                                                        <i class=\"material-icons chevron-right\">chevron_right</i>
                                                                                ";
                                                            }
                                                            // line 222
                                                            echo "                                                                            </a>
                                                                            ";
                                                            // line 223
                                                            if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["widget"], "children", [], "any", false, false, false, 223)) > 0)) {
                                                                // line 224
                                                                echo "                                                                                <div class=\"flyout-third-items\">
                                                                                    <ul class=\"ul-third-items\">
                                                                                        ";
                                                                // line 226
                                                                $context['_parent'] = $context;
                                                                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["widget"], "children", [], "any", false, false, false, 226));
                                                                foreach ($context['_seq'] as $context["_key"] => $context["c_category"]) {
                                                                    // line 227
                                                                    echo "                                                                                            <li class=\"li-third-items\">
                                                                                                <a href=\"";
                                                                    // line 228
                                                                    echo twig_get_attribute($this->env, $this->source, $context["c_category"], "link", [], "any", false, false, false, 228);
                                                                    echo "\" class=\"a-third-link\"><span class=\"a-third-title\">";
                                                                    echo twig_get_attribute($this->env, $this->source, $context["c_category"], "title", [], "any", false, false, false, 228);
                                                                    echo "</span></a>
                                                                                            </li>
                                                                                        ";
                                                                }
                                                                $_parent = $context['_parent'];
                                                                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c_category'], $context['_parent'], $context['loop']);
                                                                $context = array_intersect_key($context, $_parent) + $_parent;
                                                                // line 231
                                                                echo "                                                                                    </ul>
                                                                                </div>
                                                                            ";
                                                            }
                                                            // line 234
                                                            echo "                                                                        </li>
                                                                    ";
                                                        }
                                                        $_parent = $context['_parent'];
                                                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['widget'], $context['_parent'], $context['loop']);
                                                        $context = array_intersect_key($context, $_parent) + $_parent;
                                                        // line 236
                                                        echo "                                                                ";
                                                    }
                                                    // line 237
                                                    echo "                                                            ";
                                                }
                                                // line 238
                                                echo "                                                        ";
                                            }
                                            $_parent = $context['_parent'];
                                            unset($context['_seq'], $context['_iterated'], $context['type'], $context['widgets'], $context['_parent'], $context['loop']);
                                            $context = array_intersect_key($context, $_parent) + $_parent;
                                            // line 239
                                            echo "                                                    </ul>
                                                </div>
                                            ";
                                        }
                                        // line 242
                                        echo "                                        ";
                                    }
                                    // line 243
                                    echo "                                    ";
                                }
                                // line 244
                                echo "                                ";
                            }
                            // line 245
                            echo "                            </li>
                        ";
                        }
                        // line 247
                        echo "\t\t\t\t\t\t
                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['top_item'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 249
                    echo "\t\t\t\t\t
                </ul>
            ";
                }
                // line 252
                echo "        \t</div>
\t\t</div>
\t\t</div>
    ";
            }
            // line 256
            echo "
    ";
            // line 257
            $context["item_show"] = twig_get_attribute($this->env, $this->source, ($context["menu_setting"] ?? null), "item_show", [], "any", false, false, false, 257);
            // line 258
            echo "    ";
            if ((($context["menu_type"] ?? null) == "vertical")) {
                // line 259
                echo "        ";
                $context["count"] = 0;
                // line 260
                echo "        <div class=\"wd-menu vertical-menu\" id=\"wd-menu-";
                echo ($context["module_id"] ?? null);
                echo "\">
            ";
                // line 261
                if (($context["items"] ?? null)) {
                    // line 262
                    echo "                <div class=\"wd-menu-bar\">
                    <div class=\"left\"><i class=\"material-icons icon-menu\">menu</i> <span>";
                    // line 263
                    echo ($context["text_vertical_bar"] ?? null);
                    echo "</span></div>
                    <div class=\"right\"><i class=\"material-icons expand-more\">expand_more</i></div>
                </div>
                <ul class=\"ul-top-items\">
                    ";
                    // line 267
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
                    foreach ($context['_seq'] as $context["_key"] => $context["top_item"]) {
                        // line 268
                        echo "                        ";
                        if (twig_get_attribute($this->env, $this->source, $context["top_item"], "status", [], "any", false, false, false, 268)) {
                            // line 269
                            echo "                            ";
                            $context["count"] = (($context["count"] ?? null) + 1);
                            // line 270
                            echo "                            <li class=\"li-top-item ";
                            echo (((($context["count"] ?? null) > ($context["item_show"] ?? null))) ? ("over") : (""));
                            echo "\">
                                ";
                            // line 271
                            if (twig_get_attribute($this->env, $this->source, $context["top_item"], "has_link", [], "any", false, false, false, 271)) {
                                // line 272
                                echo "                                    <a class=\"a-top-link a-item\" href=\"";
                                echo twig_get_attribute($this->env, $this->source, $context["top_item"], "link", [], "any", false, false, false, 272);
                                echo "\">
                                        ";
                                // line 273
                                if (twig_get_attribute($this->env, $this->source, $context["top_item"], "icon", [], "any", false, false, false, 273)) {
                                    // line 274
                                    echo "                                            <img src=\"";
                                    echo twig_get_attribute($this->env, $this->source, $context["top_item"], "icon", [], "any", false, false, false, 274);
                                    echo "\" class=\"top-icon\"/>
                                        ";
                                }
                                // line 276
                                echo "                                        ";
                                if (twig_get_attribute($this->env, $this->source, $context["top_item"], "has_title", [], "any", false, false, false, 276)) {
                                    // line 277
                                    echo "                                            <span>";
                                    echo twig_get_attribute($this->env, $this->source, $context["top_item"], "title", [], "any", false, false, false, 277);
                                    echo "</span>
                                        ";
                                }
                                // line 279
                                echo "                                        
                                    </a>
                                ";
                            } else {
                                // line 282
                                echo "                                    <a class=\"a-top-link a-item\" href=\"javascript:void(0)\">
                                        ";
                                // line 283
                                if (twig_get_attribute($this->env, $this->source, $context["top_item"], "icon", [], "any", false, false, false, 283)) {
                                    // line 284
                                    echo "                                            <img src=\"";
                                    echo twig_get_attribute($this->env, $this->source, $context["top_item"], "icon", [], "any", false, false, false, 284);
                                    echo "\" class=\"top-icon\"/>
                                        ";
                                }
                                // line 286
                                echo "                                        ";
                                if (twig_get_attribute($this->env, $this->source, $context["top_item"], "has_title", [], "any", false, false, false, 286)) {
                                    // line 287
                                    echo "                                            <span>";
                                    echo twig_get_attribute($this->env, $this->source, $context["top_item"], "title", [], "any", false, false, false, 287);
                                    echo "</span>
                                        ";
                                }
                                // line 289
                                echo "                                    </a>
                                ";
                            }
                            // line 291
                            echo "                                ";
                            if (twig_get_attribute($this->env, $this->source, $context["top_item"], "has_child", [], "any", false, false, false, 291)) {
                                // line 292
                                echo "                                    <!-- Mega Menu -->
                                    ";
                                // line 293
                                if ((twig_get_attribute($this->env, $this->source, $context["top_item"], "sub_menu_type", [], "any", false, false, false, 293) == "mega")) {
                                    // line 294
                                    echo "                                        ";
                                    if ((twig_get_attribute($this->env, $this->source, $context["top_item"], "sub_menu_content_type", [], "any", false, false, false, 294) == "children")) {
                                        // line 295
                                        echo "                                       
                                            <div class=\"mega-menu-container product-thumb sub-menu-container ";
                                        // line 296
                                        if ((twig_get_attribute($this->env, $this->source, ($context["menu_setting"] ?? null), "mega_menu_width", [], "any", false, false, false, 296) == "100%")) {
                                            echo " full-width ";
                                        }
                                        echo "\">
                                                <div class=\"container\">
                                                ";
                                        // line 298
                                        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["top_item"], "sub_items", [], "any", false, false, false, 298)) > 0)) {
                                            // line 299
                                            echo "                                                    ";
                                            $context['_parent'] = $context;
                                            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["top_item"], "sub_items", [], "any", false, false, false, 299));
                                            foreach ($context['_seq'] as $context["_key"] => $context["sub_item2"]) {
                                                // line 300
                                                echo "                                                        ";
                                                if (twig_get_attribute($this->env, $this->source, $context["sub_item2"], "status", [], "any", false, false, false, 300)) {
                                                    // line 301
                                                    echo "                                                            <div class=\"";
                                                    if (twig_get_attribute($this->env, $this->source, $context["top_item"], "sub_menu_content_columns", [], "any", false, false, false, 301)) {
                                                        echo "col-sm-";
                                                        echo twig_get_attribute($this->env, $this->source, $context["top_item"], "sub_menu_content_columns", [], "any", false, false, false, 301);
                                                    }
                                                    echo " sub-item2-content\"
                                                                    ";
                                                    // line 302
                                                    if ((twig_get_attribute($this->env, $this->source, $context["top_item"], "sub_menu_content_columns", [], "any", false, false, false, 302) == false)) {
                                                        echo " style=\"width: 20%;\" data-cols=\"12/5\" ";
                                                    } else {
                                                        echo " data-cols=\"";
                                                        echo twig_get_attribute($this->env, $this->source, $context["top_item"], "sub_menu_content_columns", [], "any", false, false, false, 302);
                                                        echo "\" ";
                                                    }
                                                    echo " >
                                                                <a class=\"a-mega-second-link\" href=\"";
                                                    // line 303
                                                    echo twig_get_attribute($this->env, $this->source, $context["sub_item2"], "link", [], "any", false, false, false, 303);
                                                    echo "\"><h4><strong>";
                                                    echo twig_get_attribute($this->env, $this->source, $context["sub_item2"], "title", [], "any", false, false, false, 303);
                                                    echo "</strong></h4></a>
                                                                ";
                                                    // line 304
                                                    if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["sub_item2"], "sub_items", [], "any", false, false, false, 304)) > 0)) {
                                                        // line 305
                                                        echo "                                                                    <div class=\"sub_item3-content\">
                                                                        ";
                                                        // line 306
                                                        $context['_parent'] = $context;
                                                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["sub_item2"], "sub_items", [], "any", false, false, false, 306));
                                                        foreach ($context['_seq'] as $context["_key"] => $context["sub_item3"]) {
                                                            // line 307
                                                            echo "                                                                            ";
                                                            if (twig_get_attribute($this->env, $this->source, $context["sub_item3"], "status", [], "any", false, false, false, 307)) {
                                                                // line 308
                                                                echo "                                                                                <a class=\"a-mega-third-link\" href=\"";
                                                                echo twig_get_attribute($this->env, $this->source, $context["sub_item3"], "link", [], "any", false, false, false, 308);
                                                                echo "\"><h5>";
                                                                echo twig_get_attribute($this->env, $this->source, $context["sub_item3"], "title", [], "any", false, false, false, 308);
                                                                echo "</h5></a>
                                                                            ";
                                                            }
                                                            // line 310
                                                            echo "                                                                        ";
                                                        }
                                                        $_parent = $context['_parent'];
                                                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sub_item3'], $context['_parent'], $context['loop']);
                                                        $context = array_intersect_key($context, $_parent) + $_parent;
                                                        // line 311
                                                        echo "                                                                    </div>
                                                                ";
                                                    }
                                                    // line 313
                                                    echo "                                                            </div>
                                                        ";
                                                }
                                                // line 315
                                                echo "                                                    ";
                                            }
                                            $_parent = $context['_parent'];
                                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sub_item2'], $context['_parent'], $context['loop']);
                                            $context = array_intersect_key($context, $_parent) + $_parent;
                                            // line 316
                                            echo "                                                ";
                                        }
                                        // line 317
                                        echo "                                            </div>
                                        ";
                                    } else {
                                        // line 319
                                        echo "                                            ";
                                        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["top_item"], "sub_menu_content", [], "any", false, false, false, 319)) > 0)) {
                                            // line 320
                                            echo "                                                <div class=\"mega-menu-container product-thumb sub-menu-container ";
                                            if ((twig_get_attribute($this->env, $this->source, ($context["menu_setting"] ?? null), "mega_menu_width", [], "any", false, false, false, 320) == "100%")) {
                                                echo " full-width ";
                                            }
                                            echo "\">
                                                    ";
                                            // line 321
                                            $context['_parent'] = $context;
                                            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["top_item"], "sub_menu_content", [], "any", false, false, false, 321));
                                            foreach ($context['_seq'] as $context["type"] => $context["widgets"]) {
                                                // line 322
                                                echo "                                                        ";
                                                if (($context["type"] == "category")) {
                                                    // line 323
                                                    echo "                                                            ";
                                                    if ((twig_length_filter($this->env, $context["widgets"]) > 0)) {
                                                        // line 324
                                                        echo "                                                                ";
                                                        $context['_parent'] = $context;
                                                        $context['_seq'] = twig_ensure_traversable($context["widgets"]);
                                                        foreach ($context['_seq'] as $context["_key"] => $context["widget"]) {
                                                            // line 325
                                                            echo "                                                                    <div class=\"col-sm-";
                                                            echo twig_get_attribute($this->env, $this->source, $context["widget"], "cols", [], "any", false, false, false, 325);
                                                            echo " sub-item2-content\" data-cols=\"";
                                                            echo twig_get_attribute($this->env, $this->source, $context["widget"], "cols", [], "any", false, false, false, 325);
                                                            echo "\">
                                                                        <div class=\"sub-cate-img\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                                            // line 327
                                                            if (twig_get_attribute($this->env, $this->source, $context["widget"], "image", [], "any", false, false, false, 327)) {
                                                                // line 328
                                                                echo "                                                                            <img src=\"";
                                                                echo twig_get_attribute($this->env, $this->source, $context["widget"], "image", [], "any", false, false, false, 328);
                                                                echo "\" alt=\"";
                                                                echo twig_get_attribute($this->env, $this->source, $context["widget"], "title", [], "any", false, false, false, 328);
                                                                echo "\" class=\"mega-second-image\" />
                                                                        ";
                                                            }
                                                            // line 330
                                                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"a-mega-second-link\" href=\"";
                                                            // line 331
                                                            echo twig_get_attribute($this->env, $this->source, $context["widget"], "link", [], "any", false, false, false, 331);
                                                            echo "\"><h4><strong>";
                                                            echo twig_get_attribute($this->env, $this->source, $context["widget"], "title", [], "any", false, false, false, 331);
                                                            echo "</strong></h4></a>
                                                                        ";
                                                            // line 332
                                                            if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["widget"], "children", [], "any", false, false, false, 332)) > 0)) {
                                                                // line 333
                                                                echo "                                                                            <div class=\"sub_item3-content\">
                                                                                ";
                                                                // line 334
                                                                $context['_parent'] = $context;
                                                                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["widget"], "children", [], "any", false, false, false, 334));
                                                                foreach ($context['_seq'] as $context["_key"] => $context["c_category"]) {
                                                                    // line 335
                                                                    echo "                                                                                    <a class=\"a-mega-third-link\" href=\"";
                                                                    echo twig_get_attribute($this->env, $this->source, $context["c_category"], "link", [], "any", false, false, false, 335);
                                                                    echo "\"><h5>";
                                                                    echo twig_get_attribute($this->env, $this->source, $context["c_category"], "title", [], "any", false, false, false, 335);
                                                                    echo "</h5></a>
                                                                                ";
                                                                }
                                                                $_parent = $context['_parent'];
                                                                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c_category'], $context['_parent'], $context['loop']);
                                                                $context = array_intersect_key($context, $_parent) + $_parent;
                                                                // line 337
                                                                echo "                                                                            </div>
                                                                        ";
                                                            }
                                                            // line 339
                                                            echo "                                                                    </div>
                                                                ";
                                                        }
                                                        $_parent = $context['_parent'];
                                                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['widget'], $context['_parent'], $context['loop']);
                                                        $context = array_intersect_key($context, $_parent) + $_parent;
                                                        // line 341
                                                        echo "                                                            ";
                                                    }
                                                    // line 342
                                                    echo "                                                        ";
                                                }
                                                // line 343
                                                echo "
                                                        ";
                                                // line 344
                                                if (($context["type"] == "widget")) {
                                                    // line 345
                                                    echo "                                                            ";
                                                    if ((twig_length_filter($this->env, $context["widgets"]) > 0)) {
                                                        // line 346
                                                        echo "                                                                ";
                                                        $context['_parent'] = $context;
                                                        $context['_seq'] = twig_ensure_traversable($context["widgets"]);
                                                        foreach ($context['_seq'] as $context["_key"] => $context["widget"]) {
                                                            // line 347
                                                            echo "                                                                    ";
                                                            if ((twig_get_attribute($this->env, $this->source, $context["widget"], "type", [], "any", false, false, false, 347) == "category")) {
                                                                // line 348
                                                                echo "                                                                        <div class=\"col-sm-";
                                                                echo twig_get_attribute($this->env, $this->source, $context["widget"], "cols", [], "any", false, false, false, 348);
                                                                echo " sub-item2-content\" data-cols=\"";
                                                                echo twig_get_attribute($this->env, $this->source, $context["widget"], "cols", [], "any", false, false, false, 348);
                                                                echo "\">
                                                                            <div class=\"sub-cate-img\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                                                // line 350
                                                                if (twig_get_attribute($this->env, $this->source, $context["widget"], "image", [], "any", false, false, false, 350)) {
                                                                    // line 351
                                                                    echo "                                                                                <img src=\"";
                                                                    echo twig_get_attribute($this->env, $this->source, $context["widget"], "image", [], "any", false, false, false, 351);
                                                                    echo "\" alt=\"";
                                                                    echo twig_get_attribute($this->env, $this->source, $context["widget"], "title", [], "any", false, false, false, 351);
                                                                    echo "\" class=\"mega-second-image\" />
                                                                            ";
                                                                }
                                                                // line 353
                                                                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
                                                                            <a class=\"a-mega-second-link\" href=\"";
                                                                // line 354
                                                                echo twig_get_attribute($this->env, $this->source, $context["widget"], "link", [], "any", false, false, false, 354);
                                                                echo "\"><h4><strong>";
                                                                echo twig_get_attribute($this->env, $this->source, $context["widget"], "title", [], "any", false, false, false, 354);
                                                                echo "</strong></h4></a>
                                                                            ";
                                                                // line 355
                                                                if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["widget"], "children", [], "any", false, false, false, 355)) > 0)) {
                                                                    // line 356
                                                                    echo "                                                                                <div class=\"sub_item3-content\">
                                                                                    ";
                                                                    // line 357
                                                                    $context['_parent'] = $context;
                                                                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["widget"], "children", [], "any", false, false, false, 357));
                                                                    foreach ($context['_seq'] as $context["_key"] => $context["c_category"]) {
                                                                        // line 358
                                                                        echo "                                                                                        <a class=\"a-mega-third-link\" href=\"";
                                                                        echo twig_get_attribute($this->env, $this->source, $context["c_category"], "link", [], "any", false, false, false, 358);
                                                                        echo "\"><h5>";
                                                                        echo twig_get_attribute($this->env, $this->source, $context["c_category"], "title", [], "any", false, false, false, 358);
                                                                        echo "</h5></a>
                                                                                    ";
                                                                    }
                                                                    $_parent = $context['_parent'];
                                                                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c_category'], $context['_parent'], $context['loop']);
                                                                    $context = array_intersect_key($context, $_parent) + $_parent;
                                                                    // line 360
                                                                    echo "                                                                                </div>
                                                                            ";
                                                                }
                                                                // line 362
                                                                echo "                                                                        </div>
                                                                    ";
                                                            }
                                                            // line 364
                                                            echo "
                                                                    ";
                                                            // line 365
                                                            if ((twig_get_attribute($this->env, $this->source, $context["widget"], "type", [], "any", false, false, false, 365) == "product")) {
                                                                // line 366
                                                                echo "                                                                        <div class=\"col-sm-";
                                                                echo twig_get_attribute($this->env, $this->source, $context["widget"], "cols", [], "any", false, false, false, 366);
                                                                echo " sub-item2-content div-product\" data-cols=\"";
                                                                echo twig_get_attribute($this->env, $this->source, $context["widget"], "cols", [], "any", false, false, false, 366);
                                                                echo "\">
                                                                            ";
                                                                // line 367
                                                                if (twig_get_attribute($this->env, $this->source, $context["widget"], "image", [], "any", false, false, false, 367)) {
                                                                    // line 368
                                                                    echo "                                                                                <img src=\"";
                                                                    echo twig_get_attribute($this->env, $this->source, $context["widget"], "image", [], "any", false, false, false, 368);
                                                                    echo "\" alt=\"";
                                                                    echo twig_get_attribute($this->env, $this->source, $context["widget"], "title", [], "any", false, false, false, 368);
                                                                    echo "\" class=\"mega-second-image\" />
                                                                            ";
                                                                }
                                                                // line 370
                                                                echo "                                                                            <a class=\"a-mega-second-link\" href=\"";
                                                                echo twig_get_attribute($this->env, $this->source, $context["widget"], "link", [], "any", false, false, false, 370);
                                                                echo "\"><h4><strong>";
                                                                echo twig_get_attribute($this->env, $this->source, $context["widget"], "title", [], "any", false, false, false, 370);
                                                                echo "</strong></h4><div class=\"price\">";
                                                                echo twig_get_attribute($this->env, $this->source, $context["widget"], "price", [], "any", false, false, false, 370);
                                                                echo "</div></a>
                                                                        </div>
                                                                        
                                                                    ";
                                                            }
                                                            // line 374
                                                            echo "
                                                                    ";
                                                            // line 375
                                                            if ((twig_get_attribute($this->env, $this->source, $context["widget"], "type", [], "any", false, false, false, 375) == "html")) {
                                                                // line 376
                                                                echo "                                                                        <div class=\"col-sm-";
                                                                echo twig_get_attribute($this->env, $this->source, $context["widget"], "cols", [], "any", false, false, false, 376);
                                                                echo " sub-item2-content\" data-cols=\"";
                                                                echo twig_get_attribute($this->env, $this->source, $context["widget"], "cols", [], "any", false, false, false, 376);
                                                                echo "\">
                                                                            <h4><strong>";
                                                                // line 377
                                                                echo twig_get_attribute($this->env, $this->source, $context["widget"], "title", [], "any", false, false, false, 377);
                                                                echo "</strong></h4>
                                                                            ";
                                                                // line 378
                                                                echo twig_get_attribute($this->env, $this->source, $context["widget"], "content", [], "any", false, false, false, 378);
                                                                echo " 
                                                                        </div>
                                                                    ";
                                                            }
                                                            // line 381
                                                            echo "
                                                                    ";
                                                            // line 382
                                                            if ((twig_get_attribute($this->env, $this->source, $context["widget"], "type", [], "any", false, false, false, 382) == "link")) {
                                                                // line 383
                                                                echo "                                                                        <div class=\"col-sm-";
                                                                echo twig_get_attribute($this->env, $this->source, $context["widget"], "cols", [], "any", false, false, false, 383);
                                                                echo " sub-item2-content\" data-cols=\"";
                                                                echo twig_get_attribute($this->env, $this->source, $context["widget"], "cols", [], "any", false, false, false, 383);
                                                                echo "\">
                                                                            <a class=\"a-mega-second-link a-widget-link\" href=\"";
                                                                // line 384
                                                                echo twig_get_attribute($this->env, $this->source, $context["widget"], "link", [], "any", false, false, false, 384);
                                                                echo "\"><h4><strong>";
                                                                echo twig_get_attribute($this->env, $this->source, $context["widget"], "title", [], "any", false, false, false, 384);
                                                                echo "</strong></h4></a>
                                                                        </div>
                                                                    ";
                                                            }
                                                            // line 387
                                                            echo "                                                                ";
                                                        }
                                                        $_parent = $context['_parent'];
                                                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['widget'], $context['_parent'], $context['loop']);
                                                        $context = array_intersect_key($context, $_parent) + $_parent;
                                                        // line 388
                                                        echo "                                                            ";
                                                    }
                                                    // line 389
                                                    echo "                                                        ";
                                                }
                                                // line 390
                                                echo "                                                    ";
                                            }
                                            $_parent = $context['_parent'];
                                            unset($context['_seq'], $context['_iterated'], $context['type'], $context['widgets'], $context['_parent'], $context['loop']);
                                            $context = array_intersect_key($context, $_parent) + $_parent;
                                            // line 391
                                            echo "                                                </div>
                                            ";
                                        }
                                        // line 393
                                        echo "                                            </div>
                                        ";
                                    }
                                    // line 395
                                    echo "                                    ";
                                }
                                // line 396
                                echo "
                                    <!-- Flyout Menu -->
                                    ";
                                // line 398
                                if ((twig_get_attribute($this->env, $this->source, $context["top_item"], "sub_menu_type", [], "any", false, false, false, 398) == "flyout")) {
                                    // line 399
                                    echo "                                        ";
                                    if ((twig_get_attribute($this->env, $this->source, $context["top_item"], "sub_menu_content_type", [], "any", false, false, false, 399) == "children")) {
                                        // line 400
                                        echo "                                            ";
                                        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["top_item"], "sub_items", [], "any", false, false, false, 400)) > 0)) {
                                            // line 401
                                            echo "                                                <div class=\"wd-sub-menu-container sub-menu-container\">
                                                    <ul class=\"ul-second-items\">
                                                        ";
                                            // line 403
                                            $context['_parent'] = $context;
                                            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["top_item"], "sub_items", [], "any", false, false, false, 403));
                                            foreach ($context['_seq'] as $context["_key"] => $context["sub_item2"]) {
                                                // line 404
                                                echo "                                                            ";
                                                if (twig_get_attribute($this->env, $this->source, $context["sub_item2"], "status", [], "any", false, false, false, 404)) {
                                                    // line 405
                                                    echo "                                                                <li class=\"li-second-items\">
                                                                    <a href=\"";
                                                    // line 406
                                                    echo twig_get_attribute($this->env, $this->source, $context["sub_item2"], "link", [], "any", false, false, false, 406);
                                                    echo "\" class=\"a-second-link a-item\">
                                                                        <span class=\"a-second-title\">";
                                                    // line 407
                                                    echo twig_get_attribute($this->env, $this->source, $context["sub_item2"], "title", [], "any", false, false, false, 407);
                                                    echo "</span>
                                                                        ";
                                                    // line 408
                                                    if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["sub_item2"], "sub_items", [], "any", false, false, false, 408)) > 0)) {
                                                        // line 409
                                                        echo "                                                                            <i class=\"material-icons chevron-right\">chevron_right</i>
                                                                        ";
                                                    }
                                                    // line 411
                                                    echo "                                                                    </a>
                                                                    ";
                                                    // line 412
                                                    if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["sub_item2"], "sub_items", [], "any", false, false, false, 412)) > 0)) {
                                                        // line 413
                                                        echo "                                                                        <div class=\"flyout-third-items\">
                                                                            <ul class=\"ul-third-items\">
                                                                                ";
                                                        // line 415
                                                        $context['_parent'] = $context;
                                                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["sub_item2"], "sub_items", [], "any", false, false, false, 415));
                                                        foreach ($context['_seq'] as $context["_key"] => $context["sub_item3"]) {
                                                            // line 416
                                                            echo "                                                                                    ";
                                                            if (twig_get_attribute($this->env, $this->source, $context["sub_item3"], "status", [], "any", false, false, false, 416)) {
                                                                // line 417
                                                                echo "                                                                                        <li class=\"li-third-items\">
                                                                                            <a href=\"";
                                                                // line 418
                                                                echo twig_get_attribute($this->env, $this->source, $context["sub_item3"], "link", [], "any", false, false, false, 418);
                                                                echo "\" class=\"a-third-link\"><span class=\"a-third-title\">";
                                                                echo twig_get_attribute($this->env, $this->source, $context["sub_item3"], "title", [], "any", false, false, false, 418);
                                                                echo "</span></a>
                                                                                        </li>
                                                                                    ";
                                                            }
                                                            // line 421
                                                            echo "                                                                                ";
                                                        }
                                                        $_parent = $context['_parent'];
                                                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sub_item3'], $context['_parent'], $context['loop']);
                                                        $context = array_intersect_key($context, $_parent) + $_parent;
                                                        // line 422
                                                        echo "                                                                            </ul>
                                                                        </div>
                                                                    ";
                                                    }
                                                    // line 425
                                                    echo "                                                                </li>
                                                            ";
                                                }
                                                // line 427
                                                echo "                                                        ";
                                            }
                                            $_parent = $context['_parent'];
                                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sub_item2'], $context['_parent'], $context['loop']);
                                            $context = array_intersect_key($context, $_parent) + $_parent;
                                            // line 428
                                            echo "                                                    </ul>
                                                </div>
                                            ";
                                        }
                                        // line 431
                                        echo "                                        ";
                                    }
                                    // line 432
                                    echo "
                                        ";
                                    // line 433
                                    if ((twig_get_attribute($this->env, $this->source, $context["top_item"], "sub_menu_content_type", [], "any", false, false, false, 433) == "category")) {
                                        // line 434
                                        echo "                                            ";
                                        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["top_item"], "sub_menu_content", [], "any", false, false, false, 434)) > 0)) {
                                            // line 435
                                            echo "                                                <div class=\"wd-sub-menu-container sub-menu-container\">
                                                    <ul class=\"ul-second-items\">
                                                        ";
                                            // line 437
                                            $context['_parent'] = $context;
                                            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["top_item"], "sub_menu_content", [], "any", false, false, false, 437));
                                            foreach ($context['_seq'] as $context["type"] => $context["widgets"]) {
                                                // line 438
                                                echo "                                                            ";
                                                if (($context["type"] == "category")) {
                                                    // line 439
                                                    echo "                                                                ";
                                                    if ((twig_length_filter($this->env, $context["widgets"]) > 0)) {
                                                        // line 440
                                                        echo "                                                                    ";
                                                        $context['_parent'] = $context;
                                                        $context['_seq'] = twig_ensure_traversable($context["widgets"]);
                                                        foreach ($context['_seq'] as $context["_key"] => $context["widget"]) {
                                                            // line 441
                                                            echo "                                                                        <li class=\"li-second-items\">
                                                                            <a href=\"";
                                                            // line 442
                                                            echo twig_get_attribute($this->env, $this->source, $context["widget"], "link", [], "any", false, false, false, 442);
                                                            echo "\" class=\"a-second-link a-item\">
                                                                                <span class=\"a-second-title\">";
                                                            // line 443
                                                            echo twig_get_attribute($this->env, $this->source, $context["widget"], "title", [], "any", false, false, false, 443);
                                                            echo "</span>
                                                                                ";
                                                            // line 444
                                                            if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["widget"], "children", [], "any", false, false, false, 444)) > 0)) {
                                                                // line 445
                                                                echo "                                                                                    <i class=\"material-icons chevron-right\">chevron_right</i>
                                                                                ";
                                                            }
                                                            // line 447
                                                            echo "                                                                            </a>
                                                                            ";
                                                            // line 448
                                                            if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["widget"], "children", [], "any", false, false, false, 448)) > 0)) {
                                                                // line 449
                                                                echo "                                                                                <div class=\"flyout-third-items\">
                                                                                    <ul class=\"ul-third-items\">
                                                                                        ";
                                                                // line 451
                                                                $context['_parent'] = $context;
                                                                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["widget"], "children", [], "any", false, false, false, 451));
                                                                foreach ($context['_seq'] as $context["_key"] => $context["c_category"]) {
                                                                    // line 452
                                                                    echo "                                                                                            <li class=\"li-third-items\">
                                                                                                <a href=\"";
                                                                    // line 453
                                                                    echo twig_get_attribute($this->env, $this->source, $context["c_category"], "link", [], "any", false, false, false, 453);
                                                                    echo "\" class=\"a-third-link\"><span class=\"a-third-title\">";
                                                                    echo twig_get_attribute($this->env, $this->source, $context["c_category"], "title", [], "any", false, false, false, 453);
                                                                    echo "</span></a>
                                                                                            </li>
                                                                                        ";
                                                                }
                                                                $_parent = $context['_parent'];
                                                                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c_category'], $context['_parent'], $context['loop']);
                                                                $context = array_intersect_key($context, $_parent) + $_parent;
                                                                // line 456
                                                                echo "                                                                                    </ul>
                                                                                </div>
                                                                            ";
                                                            }
                                                            // line 459
                                                            echo "                                                                        </li>
                                                                    ";
                                                        }
                                                        $_parent = $context['_parent'];
                                                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['widget'], $context['_parent'], $context['loop']);
                                                        $context = array_intersect_key($context, $_parent) + $_parent;
                                                        // line 461
                                                        echo "                                                                ";
                                                    }
                                                    // line 462
                                                    echo "                                                            ";
                                                }
                                                // line 463
                                                echo "                                                        ";
                                            }
                                            $_parent = $context['_parent'];
                                            unset($context['_seq'], $context['_iterated'], $context['type'], $context['widgets'], $context['_parent'], $context['loop']);
                                            $context = array_intersect_key($context, $_parent) + $_parent;
                                            // line 464
                                            echo "                                                    </ul>
                                                </div>
                                            ";
                                        }
                                        // line 467
                                        echo "                                        ";
                                    }
                                    // line 468
                                    echo "                                    ";
                                }
                                // line 469
                                echo "                                ";
                            }
                            // line 470
                            echo "                            </li>
                        ";
                        }
                        // line 472
                        echo "                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['top_item'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 473
                    echo "\t\t\t\t
                    ";
                    // line 474
                    if ((($context["count"] ?? null) > ($context["item_show"] ?? null))) {
                        // line 475
                        echo "                        <li class=\"li-top-item li-over li-plus\">
                            <a href=\"javascript:void(0);\" class=\"a-top-link a-plus a-over\"><i class=\"material-icons add-icon\" aria-hidden=\"true\">add</i> <span>More Items</span></a>
                        </li>
                        <li class=\"li-top-item li-over li-minus over\">
                            <a href=\"javascript:void(0);\" class=\"a-top-link a-minus a-over\"><i class=\"material-icons remove-icon\">remove</i> <span>Close Items</span></a>
                        </li>
                    ";
                    }
                    // line 482
                    echo "\t\t\t\t\t
                </ul>
            ";
                }
                // line 485
                echo "        </div>
    ";
            }
            // line 487
            echo "
    
";
        }
    }

    public function getTemplateName()
    {
        return "Ceramic/template/extension/module/wd_megamenu.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1515 => 487,  1511 => 485,  1506 => 482,  1497 => 475,  1495 => 474,  1492 => 473,  1486 => 472,  1482 => 470,  1479 => 469,  1476 => 468,  1473 => 467,  1468 => 464,  1462 => 463,  1459 => 462,  1456 => 461,  1449 => 459,  1444 => 456,  1433 => 453,  1430 => 452,  1426 => 451,  1422 => 449,  1420 => 448,  1417 => 447,  1413 => 445,  1411 => 444,  1407 => 443,  1403 => 442,  1400 => 441,  1395 => 440,  1392 => 439,  1389 => 438,  1385 => 437,  1381 => 435,  1378 => 434,  1376 => 433,  1373 => 432,  1370 => 431,  1365 => 428,  1359 => 427,  1355 => 425,  1350 => 422,  1344 => 421,  1336 => 418,  1333 => 417,  1330 => 416,  1326 => 415,  1322 => 413,  1320 => 412,  1317 => 411,  1313 => 409,  1311 => 408,  1307 => 407,  1303 => 406,  1300 => 405,  1297 => 404,  1293 => 403,  1289 => 401,  1286 => 400,  1283 => 399,  1281 => 398,  1277 => 396,  1274 => 395,  1270 => 393,  1266 => 391,  1260 => 390,  1257 => 389,  1254 => 388,  1248 => 387,  1240 => 384,  1233 => 383,  1231 => 382,  1228 => 381,  1222 => 378,  1218 => 377,  1211 => 376,  1209 => 375,  1206 => 374,  1194 => 370,  1186 => 368,  1184 => 367,  1177 => 366,  1175 => 365,  1172 => 364,  1168 => 362,  1164 => 360,  1153 => 358,  1149 => 357,  1146 => 356,  1144 => 355,  1138 => 354,  1135 => 353,  1127 => 351,  1125 => 350,  1117 => 348,  1114 => 347,  1109 => 346,  1106 => 345,  1104 => 344,  1101 => 343,  1098 => 342,  1095 => 341,  1088 => 339,  1084 => 337,  1073 => 335,  1069 => 334,  1066 => 333,  1064 => 332,  1058 => 331,  1055 => 330,  1047 => 328,  1045 => 327,  1037 => 325,  1032 => 324,  1029 => 323,  1026 => 322,  1022 => 321,  1015 => 320,  1012 => 319,  1008 => 317,  1005 => 316,  999 => 315,  995 => 313,  991 => 311,  985 => 310,  977 => 308,  974 => 307,  970 => 306,  967 => 305,  965 => 304,  959 => 303,  949 => 302,  941 => 301,  938 => 300,  933 => 299,  931 => 298,  924 => 296,  921 => 295,  918 => 294,  916 => 293,  913 => 292,  910 => 291,  906 => 289,  900 => 287,  897 => 286,  891 => 284,  889 => 283,  886 => 282,  881 => 279,  875 => 277,  872 => 276,  866 => 274,  864 => 273,  859 => 272,  857 => 271,  852 => 270,  849 => 269,  846 => 268,  842 => 267,  835 => 263,  832 => 262,  830 => 261,  825 => 260,  822 => 259,  819 => 258,  817 => 257,  814 => 256,  808 => 252,  803 => 249,  796 => 247,  792 => 245,  789 => 244,  786 => 243,  783 => 242,  778 => 239,  772 => 238,  769 => 237,  766 => 236,  759 => 234,  754 => 231,  743 => 228,  740 => 227,  736 => 226,  732 => 224,  730 => 223,  727 => 222,  723 => 220,  721 => 219,  717 => 218,  713 => 217,  710 => 216,  705 => 215,  702 => 214,  699 => 213,  695 => 212,  691 => 210,  688 => 209,  686 => 208,  683 => 207,  680 => 206,  675 => 203,  669 => 202,  665 => 200,  660 => 197,  654 => 196,  646 => 193,  643 => 192,  640 => 191,  636 => 190,  632 => 188,  630 => 187,  627 => 186,  623 => 184,  621 => 183,  617 => 182,  613 => 181,  610 => 180,  607 => 179,  603 => 178,  599 => 176,  596 => 175,  593 => 174,  591 => 173,  587 => 171,  584 => 170,  581 => 169,  576 => 166,  570 => 165,  567 => 164,  564 => 163,  558 => 162,  550 => 159,  543 => 158,  541 => 157,  538 => 156,  532 => 153,  528 => 152,  521 => 151,  519 => 150,  516 => 149,  510 => 145,  506 => 144,  498 => 142,  495 => 141,  487 => 139,  481 => 137,  479 => 136,  476 => 135,  474 => 134,  470 => 133,  465 => 132,  456 => 128,  452 => 127,  449 => 126,  447 => 125,  440 => 124,  438 => 123,  435 => 122,  431 => 120,  427 => 118,  416 => 116,  412 => 115,  409 => 114,  407 => 113,  401 => 112,  398 => 111,  390 => 109,  388 => 108,  380 => 106,  377 => 105,  372 => 104,  369 => 103,  366 => 102,  362 => 101,  354 => 99,  351 => 98,  349 => 97,  346 => 96,  343 => 95,  339 => 93,  333 => 92,  330 => 91,  327 => 90,  319 => 87,  315 => 85,  304 => 83,  300 => 82,  297 => 81,  295 => 80,  289 => 79,  286 => 78,  278 => 76,  276 => 75,  268 => 73,  263 => 72,  260 => 71,  257 => 70,  253 => 69,  246 => 68,  243 => 67,  241 => 66,  238 => 65,  233 => 62,  230 => 61,  224 => 60,  220 => 58,  216 => 56,  210 => 55,  202 => 53,  199 => 52,  195 => 51,  192 => 50,  190 => 49,  184 => 48,  174 => 47,  166 => 46,  163 => 45,  158 => 44,  156 => 43,  149 => 41,  146 => 40,  143 => 39,  141 => 38,  138 => 37,  135 => 36,  131 => 34,  125 => 32,  122 => 31,  116 => 29,  114 => 28,  111 => 27,  107 => 25,  101 => 23,  98 => 22,  92 => 20,  90 => 19,  85 => 18,  83 => 17,  70 => 16,  67 => 15,  63 => 14,  60 => 13,  58 => 12,  54 => 11,  50 => 9,  48 => 8,  43 => 4,  40 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "Ceramic/template/extension/module/wd_megamenu.twig", "");
    }
}
