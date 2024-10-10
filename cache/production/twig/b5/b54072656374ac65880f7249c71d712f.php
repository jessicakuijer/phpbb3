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

/* ucp_notifications.html */
class __TwigTemplate_68423a9e95d5d6b1535077997640301f extends \Twig\Template
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
        $location = "ucp_header.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("ucp_header.html", "ucp_notifications.html", 1)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 2
        echo "
";
        // line 3
        // line 4
        echo "
<form id=\"ucp\" method=\"post\" action=\"";
        // line 5
        echo ($context["S_UCP_ACTION"] ?? null);
        echo "\"";
        echo ($context["S_FORM_ENCTYPE"] ?? null);
        echo ">

<h2>";
        // line 7
        echo ($context["TITLE"] ?? null);
        echo "</h2>

";
        // line 9
        // line 10
        echo "
<div class=\"panel\">
\t<div class=\"inner\">

\t\t<p>";
        // line 14
        echo ($context["TITLE_EXPLAIN"] ?? null);
        echo "</p>

\t\t";
        // line 16
        if ((($context["MODE"] ?? null) == "notification_options")) {
            // line 17
            echo "\t\t\t<table class=\"table1\">
\t\t\t\t<thead>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<th>";
            // line 20
            echo $this->extensions['phpbb\template\twig\extension']->lang("NOTIFICATION_TYPE");
            echo "</th>
\t\t\t\t\t\t";
            // line 21
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "notification_methods", [], "any", false, false, false, 21));
            foreach ($context['_seq'] as $context["_key"] => $context["notification_methods"]) {
                // line 22
                echo "\t\t\t\t\t\t\t<th class=\"mark\">";
                echo twig_get_attribute($this->env, $this->source, $context["notification_methods"], "NAME", [], "any", false, false, false, 22);
                echo "</th>
\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['notification_methods'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 24
            echo "\t\t\t\t\t</tr>
\t\t\t\t</thead>
\t\t\t\t<tbody>
\t\t\t\t";
            // line 27
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "notification_types", [], "any", false, false, false, 27));
            foreach ($context['_seq'] as $context["_key"] => $context["notification_types"]) {
                // line 28
                echo "\t\t\t\t\t";
                if (twig_get_attribute($this->env, $this->source, $context["notification_types"], "GROUP_NAME", [], "any", false, false, false, 28)) {
                    // line 29
                    echo "\t\t\t\t\t\t<tr class=\"bg3\">
\t\t\t\t\t\t\t<td colspan=\"";
                    // line 30
                    echo ($context["NOTIFICATION_TYPES_COLS"] ?? null);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["notification_types"], "GROUP_NAME", [], "any", false, false, false, 30);
                    echo "</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t";
                } else {
                    // line 33
                    echo "\t\t\t\t\t\t<tr class=\"";
                    if ((twig_get_attribute($this->env, $this->source, $context["notification_types"], "S_ROW_COUNT", [], "any", false, false, false, 33) % 2 != 0)) {
                        echo "bg1";
                    } else {
                        echo "bg2";
                    }
                    echo "\">
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t";
                    // line 35
                    echo twig_get_attribute($this->env, $this->source, $context["notification_types"], "NAME", [], "any", false, false, false, 35);
                    echo "
\t\t\t\t\t\t\t\t";
                    // line 36
                    if (twig_get_attribute($this->env, $this->source, $context["notification_types"], "EXPLAIN", [], "any", false, false, false, 36)) {
                        echo "<br />&nbsp; &nbsp;";
                        echo twig_get_attribute($this->env, $this->source, $context["notification_types"], "EXPLAIN", [], "any", false, false, false, 36);
                    }
                    // line 37
                    echo "\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t";
                    // line 38
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["notification_types"], "notification_methods", [], "any", false, false, false, 38));
                    foreach ($context['_seq'] as $context["_key"] => $context["notification_methods"]) {
                        // line 39
                        echo "\t\t\t\t\t\t\t\t<td class=\"mark\"><input type=\"checkbox\" name=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["notification_types"], "TYPE", [], "any", false, false, false, 39);
                        echo "_";
                        echo twig_get_attribute($this->env, $this->source, $context["notification_methods"], "METHOD", [], "any", false, false, false, 39);
                        echo "\"";
                        if (twig_get_attribute($this->env, $this->source, $context["notification_methods"], "SUBSCRIBED", [], "any", false, false, false, 39)) {
                            echo " checked=\"checked\"";
                        }
                        if ( !twig_get_attribute($this->env, $this->source, $context["notification_methods"], "AVAILABLE", [], "any", false, false, false, 39)) {
                            echo " disabled=\"disabled\"";
                        }
                        echo " /></td>
\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['notification_methods'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 41
                    echo "\t\t\t\t\t\t</tr>
\t\t\t\t\t";
                }
                // line 43
                echo "\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['notification_types'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 44
            echo "\t\t\t\t</tbody>
\t\t\t</table>
\t\t";
        } else {
            // line 47
            echo "\t\t\t";
            if (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "notification_list", [], "any", false, false, false, 47))) {
                // line 48
                echo "\t\t\t\t<div class=\"action-bar bar-top\">
\t\t\t\t\t<div class=\"pagination\">
\t\t\t\t\t\t";
                // line 50
                if (($context["U_MARK_ALL"] ?? null)) {
                    echo "<a href=\"";
                    echo ($context["U_MARK_ALL"] ?? null);
                    echo "\" class=\"mark\">";
                    echo $this->extensions['phpbb\template\twig\extension']->lang("NOTIFICATIONS_MARK_ALL_READ");
                    echo "</a> &bull; ";
                }
                // line 51
                echo "\t\t\t\t\t\t";
                echo $this->extensions['phpbb\template\twig\extension']->lang("NOTIFICATIONS");
                echo " [<strong>";
                echo ($context["TOTAL_COUNT"] ?? null);
                echo "</strong>]
\t\t\t\t\t\t";
                // line 52
                if (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "pagination", [], "any", false, false, false, 52))) {
                    // line 53
                    echo "\t\t\t\t\t\t\t";
                    $location = "pagination.html";
                    $namespace = false;
                    if (strpos($location, '@') === 0) {
                        $namespace = substr($location, 1, strpos($location, '/') - 1);
                        $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                        $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
                    }
                    $this->loadTemplate("pagination.html", "ucp_notifications.html", 53)->display($context);
                    if ($namespace) {
                        $this->env->setNamespaceLookUpOrder($previous_look_up_order);
                    }
                    // line 54
                    echo "\t\t\t\t\t\t";
                } else {
                    // line 55
                    echo "\t\t\t\t\t\t\t &bull; ";
                    echo ($context["PAGE_NUMBER"] ?? null);
                    echo "
\t\t\t\t\t\t";
                }
                // line 57
                echo "\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t<div class=\"notification_list\">
\t\t\t\t<ul class=\"topiclist two-columns\">
\t\t\t\t\t<li class=\"header\">
\t\t\t\t\t\t<dl>
\t\t\t\t\t\t\t<dt><div class=\"list-inner\">";
                // line 64
                echo $this->extensions['phpbb\template\twig\extension']->lang("NOTIFICATIONS");
                echo "</div></dt>
\t\t\t\t\t\t\t<dd class=\"mark\">";
                // line 65
                echo $this->extensions['phpbb\template\twig\extension']->lang("MARK_READ");
                echo "</dd>
\t\t\t\t\t\t</dl>
\t\t\t\t\t</li>
\t\t\t\t</ul>
\t\t\t\t<ul class=\"topiclist cplist two-columns\">
\t\t\t\t\t";
                // line 70
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "notification_list", [], "any", false, false, false, 70));
                foreach ($context['_seq'] as $context["_key"] => $context["notification_list"]) {
                    // line 71
                    echo "\t\t\t\t\t\t<li class=\"row";
                    if (twig_get_attribute($this->env, $this->source, $context["notification_list"], "UNREAD", [], "any", false, false, false, 71)) {
                        echo " bg3";
                    } else {
                        if ((twig_get_attribute($this->env, $this->source, $context["notification_list"], "S_ROW_COUNT", [], "any", false, false, false, 71) % 2 != 0)) {
                            echo " bg1";
                        } else {
                            echo " bg2";
                        }
                    }
                    if (twig_get_attribute($this->env, $this->source, $context["notification_list"], "STYLING", [], "any", false, false, false, 71)) {
                        echo " ";
                        echo twig_get_attribute($this->env, $this->source, $context["notification_list"], "STYLING", [], "any", false, false, false, 71);
                    }
                    echo "\">
\t\t\t\t\t\t\t<dl>
\t\t\t\t\t\t\t\t<dt>
\t\t\t\t\t\t\t\t\t<div class=\"list-inner\">
\t\t\t\t\t\t\t\t\t\t";
                    // line 75
                    if (twig_get_attribute($this->env, $this->source, $context["notification_list"], "AVATAR", [], "any", false, false, false, 75)) {
                        echo twig_get_attribute($this->env, $this->source, $context["notification_list"], "AVATAR", [], "any", false, false, false, 75);
                    } else {
                        echo "<img src=\"";
                        echo ($context["T_THEME_PATH"] ?? null);
                        echo "/images/no_avatar.gif\" alt=\"\" />";
                    }
                    // line 76
                    echo "\t\t\t\t\t\t\t\t\t\t<div class=\"notifications\">
\t\t\t\t\t\t\t\t\t\t\t";
                    // line 77
                    if (twig_get_attribute($this->env, $this->source, $context["notification_list"], "URL", [], "any", false, false, false, 77)) {
                        echo "<a href=\"";
                        if (twig_get_attribute($this->env, $this->source, $context["notification_list"], "UNREAD", [], "any", false, false, false, 77)) {
                            echo twig_get_attribute($this->env, $this->source, $context["notification_list"], "U_MARK_READ", [], "any", false, false, false, 77);
                        } else {
                            echo twig_get_attribute($this->env, $this->source, $context["notification_list"], "URL", [], "any", false, false, false, 77);
                        }
                        echo "\">";
                    }
                    // line 78
                    echo "\t\t\t\t\t\t\t\t\t\t\t<p class=\"notifications_title\">";
                    echo twig_get_attribute($this->env, $this->source, $context["notification_list"], "FORMATTED_TITLE", [], "any", false, false, false, 78);
                    if (twig_get_attribute($this->env, $this->source, $context["notification_list"], "REFERENCE", [], "any", false, false, false, 78)) {
                        echo " ";
                        echo twig_get_attribute($this->env, $this->source, $context["notification_list"], "REFERENCE", [], "any", false, false, false, 78);
                    }
                    echo "</p>
\t\t\t\t\t\t\t\t\t\t\t";
                    // line 79
                    if (twig_get_attribute($this->env, $this->source, $context["notification_list"], "URL", [], "any", false, false, false, 79)) {
                        echo "</a>";
                    }
                    // line 80
                    echo "\t\t\t\t\t\t\t\t\t\t\t";
                    if (twig_get_attribute($this->env, $this->source, $context["notification_list"], "FORUM", [], "any", false, false, false, 80)) {
                        echo "<p class=\"notifications_forum\">";
                        echo twig_get_attribute($this->env, $this->source, $context["notification_list"], "FORUM", [], "any", false, false, false, 80);
                        echo "</p>";
                    }
                    // line 81
                    echo "\t\t\t\t\t\t\t\t\t\t\t";
                    if (twig_get_attribute($this->env, $this->source, $context["notification_list"], "REASON", [], "any", false, false, false, 81)) {
                        echo "<p class=\"notifications_reason\">";
                        echo twig_get_attribute($this->env, $this->source, $context["notification_list"], "REASON", [], "any", false, false, false, 81);
                        echo "</p>";
                    }
                    // line 82
                    echo "\t\t\t\t\t\t\t\t\t\t\t<p class=\"notifications_time\">";
                    echo twig_get_attribute($this->env, $this->source, $context["notification_list"], "TIME", [], "any", false, false, false, 82);
                    echo "</p>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</dt>

\t\t\t\t\t\t\t\t<dd class=\"mark\">&nbsp;<input type=\"checkbox\" name=\"mark[]\" value=\"";
                    // line 87
                    echo twig_get_attribute($this->env, $this->source, $context["notification_list"], "NOTIFICATION_ID", [], "any", false, false, false, 87);
                    echo "\"";
                    if ( !twig_get_attribute($this->env, $this->source, $context["notification_list"], "UNREAD", [], "any", false, false, false, 87)) {
                        echo " disabled=\"disabled\"";
                    }
                    echo " /> <dfn>";
                    echo $this->extensions['phpbb\template\twig\extension']->lang("MARK_READ");
                    echo "</dfn>&nbsp;</dd>
\t\t\t\t\t\t\t</dl>
\t\t\t\t\t\t</li>
\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['notification_list'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 91
                echo "\t\t\t\t</ul>
\t\t\t</div>

\t\t\t<div class=\"action-bar bar-bottom\">
\t\t\t\t<div class=\"pagination\">
\t\t\t\t\t";
                // line 96
                echo $this->extensions['phpbb\template\twig\extension']->lang("NOTIFICATIONS");
                echo " [<strong>";
                echo ($context["TOTAL_COUNT"] ?? null);
                echo "</strong>]
\t\t\t\t\t";
                // line 97
                if (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "pagination", [], "any", false, false, false, 97))) {
                    // line 98
                    echo "\t\t\t\t\t\t";
                    $location = "pagination.html";
                    $namespace = false;
                    if (strpos($location, '@') === 0) {
                        $namespace = substr($location, 1, strpos($location, '/') - 1);
                        $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                        $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
                    }
                    $this->loadTemplate("pagination.html", "ucp_notifications.html", 98)->display($context);
                    if ($namespace) {
                        $this->env->setNamespaceLookUpOrder($previous_look_up_order);
                    }
                    // line 99
                    echo "\t\t\t\t\t";
                } else {
                    // line 100
                    echo "\t\t\t\t\t\t  &bull; ";
                    echo ($context["PAGE_NUMBER"] ?? null);
                    echo "
\t\t\t\t\t";
                }
                // line 102
                echo "\t\t\t\t</div>
\t\t\t</div>

\t\t\t";
            } else {
                // line 106
                echo "\t\t\t\t<p><strong>";
                echo $this->extensions['phpbb\template\twig\extension']->lang("NO_NOTIFICATIONS");
                echo "</strong></p>
\t\t\t";
            }
            // line 108
            echo "
\t\t";
        }
        // line 110
        echo "\t</div>
</div>

";
        // line 113
        // line 114
        echo "
";
        // line 115
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "notification_types", [], "any", false, false, false, 115)) || twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "notification_list", [], "any", false, false, false, 115)))) {
            // line 116
            echo "<fieldset class=\"display-actions\">
\t<input type=\"hidden\" name=\"form_time\" value=\"";
            // line 117
            echo ($context["FORM_TIME"] ?? null);
            echo "\" />
\t";
            // line 118
            echo ($context["S_HIDDEN_FIELDS"] ?? null);
            echo "
\t<input type=\"submit\" name=\"submit\" value=\"";
            // line 119
            if ((($context["MODE"] ?? null) == "notification_options")) {
                echo $this->extensions['phpbb\template\twig\extension']->lang("SUBMIT");
            } else {
                echo $this->extensions['phpbb\template\twig\extension']->lang("MARK_READ");
            }
            echo "\" class=\"button1\" />
\t<div><a href=\"#\" onclick=\"\$('#ucp input:checkbox').prop('checked', true); return false;\">";
            // line 120
            echo $this->extensions['phpbb\template\twig\extension']->lang("MARK_ALL");
            echo "</a> &bull; <a href=\"#\" onclick=\"\$('#ucp input:checkbox').prop('checked', false); return false;\">";
            echo $this->extensions['phpbb\template\twig\extension']->lang("UNMARK_ALL");
            echo "</a></div>
\t";
            // line 121
            echo ($context["S_FORM_TOKEN"] ?? null);
            echo "
</fieldset>
";
        }
        // line 124
        echo "
</form>

";
        // line 127
        // line 128
        echo "
";
        // line 129
        $location = "ucp_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("ucp_footer.html", "ucp_notifications.html", 129)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
    }

    public function getTemplateName()
    {
        return "ucp_notifications.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  454 => 129,  451 => 128,  450 => 127,  445 => 124,  439 => 121,  433 => 120,  425 => 119,  421 => 118,  417 => 117,  414 => 116,  412 => 115,  409 => 114,  408 => 113,  403 => 110,  399 => 108,  393 => 106,  387 => 102,  381 => 100,  378 => 99,  365 => 98,  363 => 97,  357 => 96,  350 => 91,  334 => 87,  325 => 82,  318 => 81,  311 => 80,  307 => 79,  298 => 78,  288 => 77,  285 => 76,  277 => 75,  257 => 71,  253 => 70,  245 => 65,  241 => 64,  232 => 57,  226 => 55,  223 => 54,  210 => 53,  208 => 52,  201 => 51,  193 => 50,  189 => 48,  186 => 47,  181 => 44,  175 => 43,  171 => 41,  153 => 39,  149 => 38,  146 => 37,  141 => 36,  137 => 35,  127 => 33,  119 => 30,  116 => 29,  113 => 28,  109 => 27,  104 => 24,  95 => 22,  91 => 21,  87 => 20,  82 => 17,  80 => 16,  75 => 14,  69 => 10,  68 => 9,  63 => 7,  56 => 5,  53 => 4,  52 => 3,  49 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "ucp_notifications.html", "");
    }
}
