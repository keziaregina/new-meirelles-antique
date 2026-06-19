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

/* extension/module/wd_megamenu/form.twig */
class __TwigTemplate_042bb3e6474b13ba99ce55d3cf4b5c5874f15f7752201b6e5777c7670d9c97bc extends \Twig\Template
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
                <button type=\"submit\" form=\"form-menu\" data-toggle=\"tooltip\" title=\"";
        // line 6
        echo ($context["button_save"] ?? null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-save\"></i></button>
                <a href=\"";
        // line 7
        echo ($context["cancel"] ?? null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo ($context["button_cancel"] ?? null);
        echo "\" class=\"btn btn-default\"><i class=\"fa fa-reply\"></i></a></div>
            <h1>";
        // line 8
        echo ($context["heading_title"] ?? null);
        echo "</h1>
            <ul class=\"breadcrumb\">
                ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 11
            echo "                    <li><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 11);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 11);
            echo "</a></li>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "            </ul>
        </div>
    </div>
    <div class=\"container-fluid\">
        ";
        // line 17
        if (($context["error_warning"] ?? null)) {
            // line 18
            echo "        <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo ($context["error_warning"] ?? null);
            echo "
            <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
        </div>
        ";
        }
        // line 22
        echo "        <div class=\"panel panel-default\">
            <div class=\"panel-heading\">
                <h3 class=\"panel-title\"><i class=\"fa fa-pencil\"></i> ";
        // line 24
        echo ($context["text_form"] ?? null);
        echo "</h3>
            </div>
            <div class=\"panel-body\">
                <form action=\"";
        // line 27
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-menu\" class=\"form-horizontal\">
                    <div class=\"col-md-3 frm-left\">
                        <div class=\"form-group\">
                            <label class=\"col-sm-12\" for=\"input-menu-name\">";
        // line 30
        echo ($context["entry_menu_name"] ?? null);
        echo "</label>
                            <div class=\"col-sm-12\">
                                <input id=\"input-menu-name\" type=\"text\" name=\"name\" class=\"form-control\" value=\"";
        // line 32
        echo ($context["name"] ?? null);
        echo "\" />
                                ";
        // line 33
        if (($context["error_name"] ?? null)) {
            // line 34
            echo "                                    <div class=\"text-danger\">";
            echo ($context["error_name"] ?? null);
            echo "</div>
                                ";
        }
        // line 36
        echo "                            </div>
                        </div>
                        <div class=\"form-group\">
                            <label class=\"col-sm-12\" for=\"input-menu-status\">";
        // line 39
        echo ($context["entry_status"] ?? null);
        echo "</label>
                            <div class=\"col-sm-12\">
                                <select name=\"status\" id=\"input-menu-status\" class=\"form-control\">
                                    ";
        // line 42
        if (($context["status"] ?? null)) {
            // line 43
            echo "                                        <option value=\"1\" selected=\"selected\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                                        <option value=\"0\">";
            // line 44
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                                    ";
        } else {
            // line 46
            echo "                                        <option value=\"1\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                                        <option value=\"0\" selected=\"selected\">";
            // line 47
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                                    ";
        }
        // line 49
        echo "                                </select>
                            </div>
                        </div>
                        <div class=\"form-group\">
                            <label class=\"col-sm-12\" for=\"input-menu-type\">";
        // line 53
        echo ($context["entry_menu_type"] ?? null);
        echo "</label>
                            <div class=\"col-sm-12\">
                                <select name=\"menu_type\" id=\"input-menu-type\" class=\"form-control\">
                                    <option value=\"horizontal\" ";
        // line 56
        if ((($context["menu_type"] ?? null) == "horizontal")) {
            echo " selected=\"selected\" ";
        }
        echo ">";
        echo ($context["text_horizontal"] ?? null);
        echo "</option>
                                    <option value=\"vertical\" ";
        // line 57
        if ((($context["menu_type"] ?? null) == "vertical")) {
            echo " selected=\"selected\" ";
        }
        echo ">";
        echo ($context["text_vertical"] ?? null);
        echo "</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-md-9 frm-right\">
                        <div class=\"form-group\">
                            <div class=\"col-sm-6 col-text\"><h4>";
        // line 64
        echo ($context["text_menu_item_settings"] ?? null);
        echo "</h4></div>
                            <div class=\"col-sm-6 control-label col-btn\">
                                <button type=\"button\" class=\"btn btn-widget\" onclick=\"wd_megamenu.appendTopItemNewForm('";
        // line 66
        echo ($context["top_items_form_url"] ?? null);
        echo "')\"><i class=\"fa fa-plus\"></i> ";
        echo ($context["text_add_top_item"] ?? null);
        echo "</button>
                                <button type=\"button\" class=\"btn btn-widget btn-delete\" onclick=\"wd_megamenu.deleteCheckItems()\"><i class=\"fa fa-trash\"></i> ";
        // line 67
        echo ($context["text_delete_items"] ?? null);
        echo "</button>
                            </div>
                        </div>
                        <div class=\"form-group\">
                            <div class=\"menu_item_container\">
                                ";
        // line 72
        if (($context["top_items"] ?? null)) {
            // line 73
            echo "                                <div class=\"top_item_container top_sortable\">
                                    ";
            // line 74
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["top_items"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["top_item"]) {
                // line 75
                echo "                                    <div class=\"top_item_content\">
                                        <div class=\"top_item item row\">
                                            <div class=\"del-name col-sm-6\">
                                                <div class=\"del-action\">
                                                    <input type=\"checkbox\" class=\"ck-del top-ck-del\" value=\"";
                // line 79
                echo twig_get_attribute($this->env, $this->source, $context["top_item"], "menu_item_id", [], "any", false, false, false, 79);
                echo "\" />
                                                </div>
                                                <i class=\"fa fa-ellipsis-v\" aria-hidden=\"true\"></i>
                                                <div class=\"name\">
                                                    <span>";
                // line 83
                echo twig_get_attribute($this->env, $this->source, $context["top_item"], "name", [], "any", false, false, false, 83);
                echo "</span>
                                                </div>
                                            </div>
                                            <div class=\"action col-sm-6\">
                                                <a href=\"javascript:void(0)\" onclick=\"wd_megamenu.appendTopItemNewForm('";
                // line 87
                echo twig_get_attribute($this->env, $this->source, $context["top_item"], "url", [], "any", false, false, false, 87);
                echo "')\" class=\"a-config\"><i class=\"fa fa-cogs\"></i></a>
                                                <a href=\"javascript:void(0)\" onclick=\"wd_megamenu.deleteMenuItem('";
                // line 88
                echo twig_get_attribute($this->env, $this->source, $context["top_item"], "del_url", [], "any", false, false, false, 88);
                echo "')\" class=\"a-delete\"><i class=\"fa fa-trash\"></i></a>
                                                <a href=\"javascript:void(0)\" onclick=\"wd_megamenu.appendAddSubItemForm('";
                // line 89
                echo twig_get_attribute($this->env, $this->source, $context["top_item"], "menu_item_id", [], "any", false, false, false, 89);
                echo "', '2')\" class=\"a-config\"><i class=\"fa fa-plus\"></i> ";
                echo ($context["text_add_sub_item"] ?? null);
                echo "</a>
                                            </div>
                                        </div>
                                        ";
                // line 92
                if (twig_get_attribute($this->env, $this->source, $context["top_item"], "sub_items", [], "any", false, false, false, 92)) {
                    // line 93
                    echo "                                        <div class=\"second_item_container second_sortable\">
                                            ";
                    // line 94
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["top_item"], "sub_items", [], "any", false, false, false, 94));
                    foreach ($context['_seq'] as $context["_key"] => $context["sub_item"]) {
                        // line 95
                        echo "                                            <div class=\"second_item_content\">
                                                <div class=\"second_item item row\">
                                                    <div class=\"del-name col-sm-6\">
                                                        <div class=\"del-action\">
                                                            <input type=\"checkbox\" class=\"ck-del sub-ck-del\" value=\"";
                        // line 99
                        echo twig_get_attribute($this->env, $this->source, $context["sub_item"], "item_id", [], "any", false, false, false, 99);
                        echo "\" />
                                                        </div>
                                                        <i class=\"fa fa-ellipsis-v\" aria-hidden=\"true\"></i>
                                                        <div class=\"name\">
                                                            <span>";
                        // line 103
                        echo twig_get_attribute($this->env, $this->source, $context["sub_item"], "name", [], "any", false, false, false, 103);
                        echo "</span>
                                                        </div>
                                                    </div>
                                                    <div class=\"action col-sm-6\">
                                                        <a href=\"javascript:void(0)\" onclick=\"wd_megamenu.appendEditSubItemForm('";
                        // line 107
                        echo twig_get_attribute($this->env, $this->source, $context["sub_item"], "item_id", [], "any", false, false, false, 107);
                        echo "')\" class=\"a-config\"><i class=\"fa fa-cogs\"></i></a>
                                                        <a href=\"javascript:void(0)\" onclick=\"wd_megamenu.deleteMenuItem('";
                        // line 108
                        echo twig_get_attribute($this->env, $this->source, $context["sub_item"], "del_url", [], "any", false, false, false, 108);
                        echo "')\" class=\"a-delete\"><i class=\"fa fa-trash\"></i></a>
                                                        <a href=\"javascript:void(0)\" onclick=\"wd_megamenu.appendAddSubItemForm('";
                        // line 109
                        echo twig_get_attribute($this->env, $this->source, $context["sub_item"], "item_id", [], "any", false, false, false, 109);
                        echo "', '3')\" class=\"a-config\"><i class=\"fa fa-plus\"></i> ";
                        echo ($context["text_add_sub_item"] ?? null);
                        echo "</a>
                                                    </div>
                                                </div>
                                                ";
                        // line 112
                        if (twig_get_attribute($this->env, $this->source, $context["sub_item"], "sub_items", [], "any", false, false, false, 112)) {
                            // line 113
                            echo "                                                <div class=\"third_item_container third_sortable\">
                                                    ";
                            // line 114
                            $context['_parent'] = $context;
                            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["sub_item"], "sub_items", [], "any", false, false, false, 114));
                            foreach ($context['_seq'] as $context["_key"] => $context["s_item"]) {
                                // line 115
                                echo "                                                    <div class=\"third_item_content\">
                                                        <div class=\"third_item item row\">
                                                            <div class=\"del-name col-sm-6\">
                                                                <div class=\"del-action\">
                                                                    <input type=\"checkbox\" class=\"ck-del sub-ck-del\" value=\"";
                                // line 119
                                echo twig_get_attribute($this->env, $this->source, $context["s_item"], "item_id", [], "any", false, false, false, 119);
                                echo "\" />
                                                                </div>
                                                                <i class=\"fa fa-ellipsis-v\" aria-hidden=\"true\"></i>
                                                                <div class=\"name\">
                                                                    <span>";
                                // line 123
                                echo twig_get_attribute($this->env, $this->source, $context["s_item"], "name", [], "any", false, false, false, 123);
                                echo "</span>
                                                                </div>
                                                            </div>
                                                            <div class=\"action col-sm-6\">
                                                                <a href=\"javascript:void(0)\" onclick=\"wd_megamenu.appendEditSubItemForm('";
                                // line 127
                                echo twig_get_attribute($this->env, $this->source, $context["s_item"], "item_id", [], "any", false, false, false, 127);
                                echo "')\" class=\"a-config\"><i class=\"fa fa-cogs\"></i></a>
                                                                <a href=\"javascript:void(0)\" onclick=\"wd_megamenu.deleteMenuItem('";
                                // line 128
                                echo twig_get_attribute($this->env, $this->source, $context["s_item"], "del_url", [], "any", false, false, false, 128);
                                echo "')\" class=\"a-delete\"><i class=\"fa fa-trash\"></i></a>
                                                            </div>
                                                        </div>
                                                        <input type=\"hidden\" class=\"sub-item-position3\" name=\"sub_item_position3[";
                                // line 131
                                echo twig_get_attribute($this->env, $this->source, $context["s_item"], "item_id", [], "any", false, false, false, 131);
                                echo "]\" value=\"";
                                echo twig_get_attribute($this->env, $this->source, $context["s_item"], "position", [], "any", false, false, false, 131);
                                echo "\" />
                                                    </div>
                                                    ";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['s_item'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 134
                            echo "                                                </div>
                                                ";
                        }
                        // line 136
                        echo "                                                <input type=\"hidden\" class=\"sub-item-position2\" name=\"sub_item_position2[";
                        echo twig_get_attribute($this->env, $this->source, $context["sub_item"], "item_id", [], "any", false, false, false, 136);
                        echo "]\" value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["sub_item"], "position", [], "any", false, false, false, 136);
                        echo "\" />
                                            </div>
                                            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sub_item'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 139
                    echo "                                        </div>
                                        ";
                }
                // line 141
                echo "                                        <input type=\"hidden\" class=\"top-item-position\" name=\"top_item_position[";
                echo twig_get_attribute($this->env, $this->source, $context["top_item"], "menu_item_id", [], "any", false, false, false, 141);
                echo "]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["top_item"], "position", [], "any", false, false, false, 141);
                echo "\" />
                                    </div>
                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['top_item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 144
            echo "                                </div>
                                ";
        } else {
            // line 146
            echo "                                    <p class=\"text-center\">";
            echo ($context["text_no_items"] ?? null);
            echo "</p>
                                ";
        }
        // line 148
        echo "                            </div>
                        </div>
                    </div>
                </form>
                <input type=\"hidden\" id=\"sub-item-form-url\" value=\"";
        // line 152
        echo ($context["sub_item_add_form_url"] ?? null);
        echo "\" />
                <input type=\"hidden\" id=\"sub-item-edit-form-url\" value=\"";
        // line 153
        echo ($context["sub_item_edit_form_url"] ?? null);
        echo "\" />
                <input type=\"hidden\" id=\"get-top-item-url\" value=\"";
        // line 154
        echo ($context["get_top_items_url"] ?? null);
        echo "\" />
                <input type=\"hidden\" id=\"multiple-del-url\" value=\"";
        // line 155
        echo ($context["multiple_del_url"] ?? null);
        echo "\" />
                <input type=\"hidden\" id=\"input-add-sub-item\" value=\"";
        // line 156
        echo ($context["text_add_sub_item"] ?? null);
        echo "\" />
                <input type=\"hidden\" id=\"text-show-image\" value=\"";
        // line 157
        echo ($context["text_show_image"] ?? null);
        echo "\" />
                <input type=\"hidden\" id=\"text-show-child\" value=\"";
        // line 158
        echo ($context["text_show_child"] ?? null);
        echo "\" />
                <input type=\"hidden\" id=\"text-success-item\" value=\"";
        // line 159
        echo ($context["text_success_item"] ?? null);
        echo "\" />
                <input type=\"hidden\" id=\"text-choose-category\" value=\"";
        // line 160
        echo ($context["text_choose_category"] ?? null);
        echo "\" />
                <input type=\"hidden\" id=\"text-choose-product\" value=\"";
        // line 161
        echo ($context["text_choose_product"] ?? null);
        echo "\" />
                <input type=\"hidden\" id=\"text-user-token\" value=\"";
        // line 162
        echo ($context["user_token"] ?? null);
        echo "\" />
                <input type=\"hidden\" id=\"text-title\" value=\"";
        // line 163
        echo ($context["text_title"] ?? null);
        echo "\" />
                <input type=\"hidden\" id=\"text-link\" value=\"";
        // line 164
        echo ($context["text_link"] ?? null);
        echo "\" />
                <input type=\"hidden\" id=\"text-html\" value=\"";
        // line 165
        echo ($context["text_html"] ?? null);
        echo "\" />
                <input type=\"hidden\" id=\"text-hide-title\" value=\"";
        // line 166
        echo ($context["text_hide_title"] ?? null);
        echo "\" />
                <input type=\"hidden\" id=\"text-confirm-delete\" value=\"";
        // line 167
        echo ($context["text_confirm_delete"] ?? null);
        echo "\" />
                <input type=\"hidden\" id=\"text-confirm-multiple-delete\" value=\"";
        // line 168
        echo ($context["text_confirm_multiple_delete"] ?? null);
        echo "\" />
                <input type=\"hidden\" id=\"text-choose-delete\" value=\"";
        // line 169
        echo ($context["text_choose_delete_items"] ?? null);
        echo "\" />
                <input type=\"hidden\" id=\"text-no-items\" value=\"";
        // line 170
        echo ($context["text_no_items"] ?? null);
        echo "\" />
                <input type=\"hidden\" id=\"text-no-children-items\" value=\"";
        // line 171
        echo ($context["text_no_children_items"] ?? null);
        echo "\" />
                <div id=\"form-container-bg\"></div>
                <div id=\"form-ajax-loader\"><img src=\"";
        // line 173
        echo ($context["loader_image"] ?? null);
        echo "\" class=\"ajax-loader-img\" /></div>
                <div id=\"form-container\"></div>
            </div>
        </div>
    </div>
</div>
";
        // line 179
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "extension/module/wd_megamenu/form.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  489 => 179,  480 => 173,  475 => 171,  471 => 170,  467 => 169,  463 => 168,  459 => 167,  455 => 166,  451 => 165,  447 => 164,  443 => 163,  439 => 162,  435 => 161,  431 => 160,  427 => 159,  423 => 158,  419 => 157,  415 => 156,  411 => 155,  407 => 154,  403 => 153,  399 => 152,  393 => 148,  387 => 146,  383 => 144,  371 => 141,  367 => 139,  355 => 136,  351 => 134,  340 => 131,  334 => 128,  330 => 127,  323 => 123,  316 => 119,  310 => 115,  306 => 114,  303 => 113,  301 => 112,  293 => 109,  289 => 108,  285 => 107,  278 => 103,  271 => 99,  265 => 95,  261 => 94,  258 => 93,  256 => 92,  248 => 89,  244 => 88,  240 => 87,  233 => 83,  226 => 79,  220 => 75,  216 => 74,  213 => 73,  211 => 72,  203 => 67,  197 => 66,  192 => 64,  178 => 57,  170 => 56,  164 => 53,  158 => 49,  153 => 47,  148 => 46,  143 => 44,  138 => 43,  136 => 42,  130 => 39,  125 => 36,  119 => 34,  117 => 33,  113 => 32,  108 => 30,  102 => 27,  96 => 24,  92 => 22,  84 => 18,  82 => 17,  76 => 13,  65 => 11,  61 => 10,  56 => 8,  50 => 7,  46 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "extension/module/wd_megamenu/form.twig", "");
    }
}
