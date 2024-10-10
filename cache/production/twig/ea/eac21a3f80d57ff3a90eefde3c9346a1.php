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

/* posting_pm_header.html */
class __TwigTemplate_b0e39c706a29286b908bf81aa5f4dfb8 extends \Twig\Template
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
        echo "<fieldset class=\"fields1\">
\t";
        // line 2
        if ( !($context["S_SHOW_DRAFTS"] ?? null)) {
            // line 3
            echo "
\t\t";
            // line 4
            if (($context["S_GROUP_OPTIONS"] ?? null)) {
                // line 5
                echo "\t\t\t<div class=\"column2\">
\t\t\t\t<label for=\"group_list\"><strong>";
                // line 6
                echo $this->extensions['phpbb\template\twig\extension']->lang("TO_ADD_GROUPS");
                echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
                echo "</strong></label><br />
\t\t\t\t<select name=\"group_list[]\" id=\"group_list\" multiple=\"multiple\" size=\"3\" class=\"inputbox\">";
                // line 7
                echo ($context["S_GROUP_OPTIONS"] ?? null);
                echo "</select><br />
\t\t\t</div>
\t\t";
            }
            // line 10
            echo "\t\t";
            if (($context["S_ALLOW_MASS_PM"] ?? null)) {
                // line 11
                echo "\t\t<div class=\"column1\">
\t\t\t";
                // line 12
                if ( !($context["S_EDIT_POST"] ?? null)) {
                    // line 13
                    echo "\t\t\t<dl class=\"pmlist\">
\t\t\t\t<dt><label><strong>";
                    // line 14
                    echo $this->extensions['phpbb\template\twig\extension']->lang("TO_ADD_MASS");
                    echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
                    echo "</strong><textarea id=\"username_list\" name=\"username_list\" class=\"inputbox\" cols=\"50\" rows=\"2\" tabindex=\"1\"></textarea></label></dt>
\t\t\t\t<dd class=\"recipients\">
\t\t\t\t<input type=\"submit\" name=\"add_to\" value=\"";
                    // line 16
                    echo $this->extensions['phpbb\template\twig\extension']->lang("ADD");
                    echo "\" class=\"button2\" tabindex=\"1\" />
\t\t\t\t<input type=\"submit\" name=\"add_bcc\" value=\"";
                    // line 17
                    echo $this->extensions['phpbb\template\twig\extension']->lang("ADD_BCC");
                    echo "\" class=\"button2\" tabindex=\"1\" />
\t\t\t\t";
                    // line 18
                    // line 19
                    echo "\t\t\t\t<span><a href=\"";
                    echo ($context["U_FIND_USERNAME"] ?? null);
                    echo "\" onclick=\"find_username(this.href); return false;\">";
                    echo $this->extensions['phpbb\template\twig\extension']->lang("FIND_USERNAME");
                    echo "</a></span>
\t\t\t\t";
                    // line 20
                    // line 21
                    echo "\t\t\t\t</dd>
\t\t\t</dl>
\t\t\t";
                }
                // line 24
                echo "\t\t</div>
\t\t";
                // line 25
                if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "to_recipient", [], "any", false, false, false, 25)) || twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "bcc_recipient", [], "any", false, false, false, 25)))) {
                    echo "<hr />";
                }
                // line 26
                echo "\t\t<div class=\"column1\">
\t\t\t";
                // line 27
                if (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "to_recipient", [], "any", false, false, false, 27))) {
                    // line 28
                    echo "\t\t\t\t<dl>
\t\t\t\t\t<dt><label>";
                    // line 29
                    echo $this->extensions['phpbb\template\twig\extension']->lang("TO_MASS");
                    echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
                    echo "</label></dt>
\t\t\t\t\t<dd class=\"recipients\">
\t\t\t\t\t<ul class=\"recipients\">
\t\t\t\t\t\t";
                    // line 32
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "to_recipient", [], "any", false, false, false, 32));
                    foreach ($context['_seq'] as $context["_key"] => $context["to_recipient"]) {
                        // line 33
                        echo "\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t";
                        // line 34
                        if ( !($context["S_EDIT_POST"] ?? null)) {
                            // line 35
                            echo "\t\t\t\t\t\t\t\t<button type=\"submit\" name=\"remove_";
                            echo twig_get_attribute($this->env, $this->source, $context["to_recipient"], "TYPE", [], "any", false, false, false, 35);
                            echo "[";
                            echo twig_get_attribute($this->env, $this->source, $context["to_recipient"], "UG_ID", [], "any", false, false, false, 35);
                            echo "]\">
\t\t\t\t\t\t\t\t\t<i class=\"icon fa-times icon-red\" aria-hidden=\"true\"></i><span class=\"sr-only\">";
                            // line 36
                            echo $this->extensions['phpbb\template\twig\extension']->lang("REMOVE");
                            echo "</span>
\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t";
                        }
                        // line 39
                        echo "\t\t\t\t\t\t\t";
                        if (twig_get_attribute($this->env, $this->source, $context["to_recipient"], "IS_GROUP", [], "any", false, false, false, 39)) {
                            echo "<a href=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["to_recipient"], "U_VIEW", [], "any", false, false, false, 39);
                            echo "\" style=\"color: ";
                            echo twig_get_attribute($this->env, $this->source, $context["to_recipient"], "COLOUR", [], "any", false, false, false, 39);
                            echo "\"><strong>";
                            echo twig_get_attribute($this->env, $this->source, $context["to_recipient"], "NAME", [], "any", false, false, false, 39);
                            echo "</strong></a>";
                        } else {
                            echo twig_get_attribute($this->env, $this->source, $context["to_recipient"], "NAME_FULL", [], "any", false, false, false, 39);
                        }
                        // line 40
                        echo "\t\t\t\t\t\t</li>
\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['to_recipient'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 42
                    echo "\t\t\t\t\t</ul>
\t\t\t\t\t</dd>
\t\t\t\t</dl>
\t\t\t";
                }
                // line 46
                echo "\t\t</div>
\t\t\t";
                // line 47
                if (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "bcc_recipient", [], "any", false, false, false, 47))) {
                    // line 48
                    echo "\t\t\t<div class=\"column2\">
\t\t\t\t<dl>
\t\t\t\t\t<dt><label>";
                    // line 50
                    echo $this->extensions['phpbb\template\twig\extension']->lang("BCC");
                    echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
                    echo "</label></dt>
\t\t\t\t\t<dd class=\"recipients\">
\t\t\t\t\t<ul class=\"recipients\">
\t\t\t\t\t\t";
                    // line 53
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "bcc_recipient", [], "any", false, false, false, 53));
                    foreach ($context['_seq'] as $context["_key"] => $context["bcc_recipient"]) {
                        // line 54
                        echo "\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t";
                        // line 55
                        if ( !($context["S_EDIT_POST"] ?? null)) {
                            // line 56
                            echo "\t\t\t\t\t\t\t\t<button type=\"submit\" name=\"remove_";
                            echo twig_get_attribute($this->env, $this->source, $context["bcc_recipient"], "TYPE", [], "any", false, false, false, 56);
                            echo "[";
                            echo twig_get_attribute($this->env, $this->source, $context["bcc_recipient"], "UG_ID", [], "any", false, false, false, 56);
                            echo "]\">
\t\t\t\t\t\t\t\t\t<i class=\"icon fa-times icon-red\" aria-hidden=\"true\"></i><span class=\"sr-only\">";
                            // line 57
                            echo $this->extensions['phpbb\template\twig\extension']->lang("REMOVE");
                            echo "</span>
\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t";
                        }
                        // line 60
                        echo "\t\t\t\t\t\t\t";
                        if (twig_get_attribute($this->env, $this->source, $context["bcc_recipient"], "IS_GROUP", [], "any", false, false, false, 60)) {
                            echo "<a href=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["bcc_recipient"], "U_VIEW", [], "any", false, false, false, 60);
                            echo "\" style=\"color: ";
                            echo twig_get_attribute($this->env, $this->source, $context["bcc_recipient"], "COLOUR", [], "any", false, false, false, 60);
                            echo "\"><strong>";
                            echo twig_get_attribute($this->env, $this->source, $context["bcc_recipient"], "NAME", [], "any", false, false, false, 60);
                            echo "</strong></a>";
                        } else {
                            echo twig_get_attribute($this->env, $this->source, $context["bcc_recipient"], "NAME_FULL", [], "any", false, false, false, 60);
                        }
                        // line 61
                        echo "\t\t\t\t\t\t</li>
\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['bcc_recipient'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 63
                    echo "\t\t\t\t\t</ul>
\t\t\t\t\t</dd>
\t\t\t\t</dl>
\t\t\t</div>
\t\t\t";
                }
                // line 68
                echo "\t\t";
            } else {
                // line 69
                echo "\t\t<div class=\"column1\">
\t\t\t<dl>
\t\t\t\t<dt><label for=\"username_list\">";
                // line 71
                echo $this->extensions['phpbb\template\twig\extension']->lang("TO_ADD");
                echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
                echo "</label>";
                if ( !($context["S_EDIT_POST"] ?? null)) {
                    echo "<br /><span><a href=\"";
                    echo ($context["U_FIND_USERNAME"] ?? null);
                    echo "\" onclick=\"find_username(this.href); return false\">";
                    echo $this->extensions['phpbb\template\twig\extension']->lang("FIND_USERNAME");
                    echo "</a></span>";
                }
                echo "</dt>
\t\t\t\t";
                // line 72
                if ( !($context["S_EDIT_POST"] ?? null)) {
                    // line 73
                    echo "\t\t\t\t<dd><input class=\"inputbox\" type=\"text\" name=\"username_list\" id=\"username_list\" size=\"20\" value=\"\" /> <input type=\"submit\" name=\"add_to\" value=\"";
                    echo $this->extensions['phpbb\template\twig\extension']->lang("ADD");
                    echo "\" class=\"button2\" /></dd>
\t\t\t\t";
                }
                // line 75
                echo "\t\t\t\t";
                if (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "to_recipient", [], "any", false, false, false, 75))) {
                    // line 76
                    echo "\t\t\t\t\t<dd class=\"recipients\">
\t\t\t\t\t\t<ul class=\"recipients\">
\t\t\t\t\t\t\t";
                    // line 78
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "to_recipient", [], "any", false, false, false, 78));
                    foreach ($context['_seq'] as $context["_key"] => $context["to_recipient"]) {
                        // line 79
                        echo "\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t";
                        // line 80
                        if ( !($context["S_EDIT_POST"] ?? null)) {
                            // line 81
                            echo "\t\t\t\t\t\t\t\t\t<button type=\"submit\" name=\"remove_";
                            echo twig_get_attribute($this->env, $this->source, $context["to_recipient"], "TYPE", [], "any", false, false, false, 81);
                            echo "[";
                            echo twig_get_attribute($this->env, $this->source, $context["to_recipient"], "UG_ID", [], "any", false, false, false, 81);
                            echo "]\">
\t\t\t\t\t\t\t\t\t\t<i class=\"icon fa-times icon-red\" aria-hidden=\"true\"></i><span class=\"sr-only\">";
                            // line 82
                            echo $this->extensions['phpbb\template\twig\extension']->lang("REMOVE");
                            echo "</span>
\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t";
                        }
                        // line 85
                        echo "\t\t\t\t\t\t\t\t";
                        if (twig_get_attribute($this->env, $this->source, $context["to_recipient"], "IS_GROUP", [], "any", false, false, false, 85)) {
                            echo "<a href=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["to_recipient"], "U_VIEW", [], "any", false, false, false, 85);
                            echo "\"><strong>";
                            echo twig_get_attribute($this->env, $this->source, $context["to_recipient"], "NAME", [], "any", false, false, false, 85);
                            echo "</strong></a>";
                        } else {
                            echo twig_get_attribute($this->env, $this->source, $context["to_recipient"], "NAME_FULL", [], "any", false, false, false, 85);
                        }
                        // line 86
                        echo "\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['to_recipient'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 88
                    echo "\t\t\t\t\t\t</ul>
\t\t\t\t\t</dd>
\t\t\t\t";
                }
                // line 91
                echo "\t\t\t</dl>
\t\t</div>
\t\t";
            }
            // line 94
            echo "
\t";
        }
        // line 96
        echo "\t</fieldset>
";
    }

    public function getTemplateName()
    {
        return "posting_pm_header.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  324 => 96,  320 => 94,  315 => 91,  310 => 88,  303 => 86,  292 => 85,  286 => 82,  279 => 81,  277 => 80,  274 => 79,  270 => 78,  266 => 76,  263 => 75,  257 => 73,  255 => 72,  242 => 71,  238 => 69,  235 => 68,  228 => 63,  221 => 61,  208 => 60,  202 => 57,  195 => 56,  193 => 55,  190 => 54,  186 => 53,  179 => 50,  175 => 48,  173 => 47,  170 => 46,  164 => 42,  157 => 40,  144 => 39,  138 => 36,  131 => 35,  129 => 34,  126 => 33,  122 => 32,  115 => 29,  112 => 28,  110 => 27,  107 => 26,  103 => 25,  100 => 24,  95 => 21,  94 => 20,  87 => 19,  86 => 18,  82 => 17,  78 => 16,  72 => 14,  69 => 13,  67 => 12,  64 => 11,  61 => 10,  55 => 7,  50 => 6,  47 => 5,  45 => 4,  42 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "posting_pm_header.html", "");
    }
}
