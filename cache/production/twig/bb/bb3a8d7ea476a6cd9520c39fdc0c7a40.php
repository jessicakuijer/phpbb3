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

/* ucp_pm_viewmessage.html */
class __TwigTemplate_a564262f32de9c218264f7c90a2826e2 extends \Twig\Template
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
        $this->loadTemplate("ucp_header.html", "ucp_pm_viewmessage.html", 1)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 2
        echo "
";
        // line 3
        $location = "ucp_pm_message_header.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("ucp_pm_message_header.html", "ucp_pm_viewmessage.html", 3)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 4
        echo "
\t</div>
</div>


";
        // line 9
        if ((($context["S_DISPLAY_HISTORY"] ?? null) && (($context["U_VIEW_PREVIOUS_HISTORY"] ?? null) || ($context["U_VIEW_NEXT_HISTORY"] ?? null)))) {
            // line 10
            echo "\t<fieldset class=\"display-options clearfix\">
\t\t";
            // line 11
            if (($context["U_VIEW_PREVIOUS_HISTORY"] ?? null)) {
                // line 12
                echo "\t\t\t<a href=\"";
                echo ($context["U_VIEW_PREVIOUS_HISTORY"] ?? null);
                echo "\" class=\"left-box arrow-";
                echo ($context["S_CONTENT_FLOW_BEGIN"] ?? null);
                echo "\">
\t\t\t\t<i class=\"icon fa-angle-";
                // line 13
                echo ($context["S_CONTENT_FLOW_BEGIN"] ?? null);
                echo " fa-fw icon-black\" aria-hidden=\"true\"></i><span>";
                echo $this->extensions['phpbb\template\twig\extension']->lang("VIEW_PREVIOUS_HISTORY");
                echo "</span>
\t\t\t</a>
\t\t";
            }
            // line 16
            echo "\t\t";
            if (($context["U_VIEW_NEXT_HISTORY"] ?? null)) {
                // line 17
                echo "\t\t\t<a href=\"";
                echo ($context["U_VIEW_NEXT_HISTORY"] ?? null);
                echo "\" class=\"right-box arrow-";
                echo ($context["S_CONTENT_FLOW_END"] ?? null);
                echo "\">
\t\t\t\t<i class=\"icon fa-angle-";
                // line 18
                echo ($context["S_CONTENT_FLOW_END"] ?? null);
                echo " fa-fw icon-black\" aria-hidden=\"true\"></i><span>";
                echo $this->extensions['phpbb\template\twig\extension']->lang("VIEW_NEXT_HISTORY");
                echo "</span>
\t\t\t</a>
\t\t";
            }
            // line 21
            echo "\t</fieldset>
";
        }
        // line 23
        echo "

<div id=\"post-";
        // line 25
        echo ($context["MESSAGE_ID"] ?? null);
        echo "\" class=\"post pm has-profile";
        if ((($context["S_POST_UNAPPROVED"] ?? null) || ($context["S_POST_REPORTED"] ?? null))) {
            echo " reported";
        }
        if (($context["S_ONLINE"] ?? null)) {
            echo " online";
        }
        echo "\">
<div class=\"inner\">

\t<dl class=\"postprofile\" id=\"profile";
        // line 28
        echo ($context["MESSAGE_ID"] ?? null);
        echo "\">
\t\t<dt class=\"";
        // line 29
        if ((($context["RANK_TITLE"] ?? null) || ($context["RANK_IMG"] ?? null))) {
            echo "has-profile-rank";
        } else {
            echo "no-profile-rank";
        }
        echo " ";
        if (($context["AUTHOR_AVATAR"] ?? null)) {
            echo "has-avatar";
        } else {
            echo "no-avatar";
        }
        echo "\">
\t\t\t";
        // line 30
        if (($context["S_ONLINE"] ?? null)) {
            // line 31
            echo "\t\t\t\t<div class=\"inventea-online\"><i class=\"fa fa-power-off\"></i> ";
            echo $this->extensions['phpbb\template\twig\extension']->lang("ONLINE");
            echo "</div>
\t\t\t";
        }
        // line 33
        echo "
\t\t\t<div class=\"avatar-container\">
\t\t\t\t";
        // line 35
        // line 36
        echo "\t\t\t\t";
        if (($context["AUTHOR_AVATAR"] ?? null)) {
            echo "<a href=\"";
            echo ($context["U_MESSAGE_AUTHOR"] ?? null);
            echo "\" class=\"avatar\">";
            echo ($context["AUTHOR_AVATAR"] ?? null);
            echo "</a>";
        }
        // line 37
        echo "\t\t\t\t";
        // line 38
        echo "\t\t\t</div>
\t\t\t";
        // line 39
        // line 40
        echo "\t\t\t";
        echo ($context["MESSAGE_AUTHOR_FULL"] ?? null);
        echo "
\t\t\t";
        // line 41
        // line 42
        echo "\t\t</dt>

\t\t";
        // line 44
        // line 45
        echo "\t\t";
        if ((($context["RANK_TITLE"] ?? null) || ($context["RANK_IMG"] ?? null))) {
            echo "<dd class=\"profile-rank\">";
            echo ($context["RANK_TITLE"] ?? null);
            if ((($context["RANK_TITLE"] ?? null) && ($context["RANK_IMG"] ?? null))) {
                echo "<br />";
            }
            echo ($context["RANK_IMG"] ?? null);
            echo "</dd>";
        }
        // line 46
        echo "\t\t";
        // line 47
        echo "
\t\t<dd class=\"profile-posts\"><strong>";
        // line 48
        echo $this->extensions['phpbb\template\twig\extension']->lang("POSTS");
        echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
        echo "</strong> ";
        if ((($context["U_AUTHOR_POSTS"] ?? null) != "")) {
            echo "<a href=\"";
            echo ($context["U_AUTHOR_POSTS"] ?? null);
            echo "\">";
            echo ($context["AUTHOR_POSTS"] ?? null);
            echo "</a>";
        } else {
            echo ($context["AUTHOR_POSTS"] ?? null);
        }
        echo "</dd>
\t\t";
        // line 49
        if (($context["AUTHOR_JOINED"] ?? null)) {
            echo "<dd class=\"profile-joined\"><strong>";
            echo $this->extensions['phpbb\template\twig\extension']->lang("JOINED");
            echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
            echo "</strong> ";
            echo ($context["AUTHOR_JOINED"] ?? null);
            echo "</dd>";
        }
        // line 50
        echo "
\t\t";
        // line 51
        // line 52
        echo "\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "custom_fields", [], "any", false, false, false, 52));
        foreach ($context['_seq'] as $context["_key"] => $context["custom_fields"]) {
            // line 53
            echo "\t\t\t";
            if ( !twig_get_attribute($this->env, $this->source, $context["custom_fields"], "S_PROFILE_CONTACT", [], "any", false, false, false, 53)) {
                // line 54
                echo "\t\t\t\t<dd class=\"profile-custom-field profile-";
                echo twig_get_attribute($this->env, $this->source, $context["custom_fields"], "PROFILE_FIELD_IDENT", [], "any", false, false, false, 54);
                echo "\"><strong>";
                echo twig_get_attribute($this->env, $this->source, $context["custom_fields"], "PROFILE_FIELD_NAME", [], "any", false, false, false, 54);
                echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
                echo "</strong> ";
                echo twig_get_attribute($this->env, $this->source, $context["custom_fields"], "PROFILE_FIELD_VALUE", [], "any", false, false, false, 54);
                echo "</dd>
\t\t\t";
            }
            // line 56
            echo "\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_fields'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 57
        echo "\t\t";
        // line 58
        echo "
\t\t";
        // line 59
        // line 60
        echo "\t\t";
        if (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "contact", [], "any", false, false, false, 60))) {
            // line 61
            echo "\t\t\t<dd class=\"profile-contact\">
\t\t\t\t<strong>";
            // line 62
            echo $this->extensions['phpbb\template\twig\extension']->lang("CONTACT");
            echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
            echo "</strong>
\t\t\t\t<div class=\"dropdown-container dropdown-left\">
\t\t\t\t\t<a href=\"#\" class=\"dropdown-trigger\"  title=\"";
            // line 64
            echo ($context["CONTACT_USER"] ?? null);
            echo "\"><i class=\"icon fa-commenting-o fa-fw icon-lg\" aria-hidden=\"true\"></i><span class=\"sr-only\">";
            echo ($context["CONTACT_USER"] ?? null);
            echo "</span></a>
\t\t\t\t\t<div class=\"dropdown\">
\t\t\t\t\t\t<div class=\"pointer\"><div class=\"pointer-inner\"></div></div>
\t\t\t\t\t\t<div class=\"dropdown-contents contact-icons\">
\t\t\t\t\t\t\t";
            // line 68
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "contact", [], "any", false, false, false, 68));
            foreach ($context['_seq'] as $context["_key"] => $context["contact"]) {
                // line 69
                echo "\t\t\t\t\t\t\t\t";
                $context["REMAINDER"] = (twig_get_attribute($this->env, $this->source, $context["contact"], "S_ROW_COUNT", [], "any", false, false, false, 69) % 4);
                // line 70
                echo "\t\t\t\t\t\t\t\t";
                $value = ((($context["REMAINDER"] ?? null) == 3) || (twig_get_attribute($this->env, $this->source, $context["contact"], "S_LAST_ROW", [], "any", false, false, false, 70) && (twig_get_attribute($this->env, $this->source, $context["contact"], "S_NUM_ROWS", [], "any", false, false, false, 70) < 4)));
                $context['definition']->set('S_LAST_CELL', $value);
                // line 71
                echo "\t\t\t\t\t\t\t\t";
                if ((($context["REMAINDER"] ?? null) == 0)) {
                    // line 72
                    echo "\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t";
                }
                // line 74
                echo "\t\t\t\t\t\t\t\t\t<a href=\"";
                if (twig_get_attribute($this->env, $this->source, $context["contact"], "U_CONTACT", [], "any", false, false, false, 74)) {
                    echo twig_get_attribute($this->env, $this->source, $context["contact"], "U_CONTACT", [], "any", false, false, false, 74);
                } else {
                    echo twig_get_attribute($this->env, $this->source, $context["contact"], "U_PROFILE_AUTHOR", [], "any", false, false, false, 74);
                }
                echo "\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["contact"], "NAME", [], "any", false, false, false, 74);
                echo "\"";
                if (twig_get_attribute($this->env, $this->source, ($context["definition"] ?? null), "S_LAST_CELL", [], "any", false, false, false, 74)) {
                    echo " class=\"last-cell\"";
                }
                if ((twig_get_attribute($this->env, $this->source, $context["contact"], "ID", [], "any", false, false, false, 74) == "jabber")) {
                    echo " onclick=\"popup(this.href, 750, 320); return false;\"";
                }
                echo ">
\t\t\t\t\t\t\t\t\t\t<span class=\"contact-icon ";
                // line 75
                echo twig_get_attribute($this->env, $this->source, $context["contact"], "ID", [], "any", false, false, false, 75);
                echo "-icon\">";
                echo twig_get_attribute($this->env, $this->source, $context["contact"], "NAME", [], "any", false, false, false, 75);
                echo "</span>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t";
                // line 77
                if (((($context["REMAINDER"] ?? null) == 3) || twig_get_attribute($this->env, $this->source, $context["contact"], "S_LAST_ROW", [], "any", false, false, false, 77))) {
                    // line 78
                    echo "\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
                }
                // line 80
                echo "\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['contact'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 81
            echo "\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</dd>
\t\t";
        }
        // line 86
        echo "\t\t";
        // line 87
        echo "\t</dl>

\t<div class=\"postbody\">
\t\t<h3 class=\"first\">";
        // line 90
        echo ($context["SUBJECT"] ?? null);
        echo "</h3>

\t\t";
        // line 92
        $value = (((($context["U_EDIT"] ?? null) || ($context["U_DELETE"] ?? null)) || ($context["U_REPORT"] ?? null)) || ($context["U_QUOTE"] ?? null));
        $context['definition']->set('SHOW_PM_POST_BUTTONS', $value);
        // line 93
        echo "\t\t";
        // line 94
        echo "\t\t";
        if (twig_get_attribute($this->env, $this->source, ($context["definition"] ?? null), "SHOW_PM_POST_BUTTONS", [], "any", false, false, false, 94)) {
            // line 95
            echo "\t\t<ul class=\"post-buttons\">
\t\t\t";
            // line 96
            // line 97
            echo "\t\t\t";
            if (($context["U_EDIT"] ?? null)) {
                // line 98
                echo "\t\t\t\t<li>
\t\t\t\t\t<a href=\"";
                // line 99
                echo ($context["U_EDIT"] ?? null);
                echo "\" title=\"";
                echo $this->extensions['phpbb\template\twig\extension']->lang("POST_EDIT_PM");
                echo "\" class=\"button button-icon-only\">
\t\t\t\t\t\t<i class=\"icon fa-pencil fa-fw\" aria-hidden=\"true\"></i><span class=\"sr-only\">";
                // line 100
                echo $this->extensions['phpbb\template\twig\extension']->lang("BUTTON_EDIT");
                echo "</span>
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t";
            }
            // line 104
            echo "\t\t\t";
            if (($context["U_DELETE"] ?? null)) {
                // line 105
                echo "\t\t\t\t<li>
\t\t\t\t\t<a href=\"";
                // line 106
                echo ($context["U_DELETE"] ?? null);
                echo "\" title=\"";
                echo $this->extensions['phpbb\template\twig\extension']->lang("DELETE_MESSAGE");
                echo "\" class=\"button button-icon-only\">
\t\t\t\t\t\t<i class=\"icon fa-times fa-fw\" aria-hidden=\"true\"></i><span class=\"sr-only\">";
                // line 107
                echo $this->extensions['phpbb\template\twig\extension']->lang("BUTTON_DELETE");
                echo "</span>
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t";
            }
            // line 111
            echo "\t\t\t";
            if (($context["U_REPORT"] ?? null)) {
                // line 112
                echo "\t\t\t\t<li>
\t\t\t\t\t<a href=\"";
                // line 113
                echo ($context["U_REPORT"] ?? null);
                echo "\" title=\"";
                echo $this->extensions['phpbb\template\twig\extension']->lang("REPORT_PM");
                echo "\" class=\"button button-icon-only\">
\t\t\t\t\t\t<i class=\"icon fa-exclamation fa-fw\" aria-hidden=\"true\"></i><span class=\"sr-only\">";
                // line 114
                echo $this->extensions['phpbb\template\twig\extension']->lang("BUTTON_REPORT");
                echo "</span>
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t";
            }
            // line 118
            echo "\t\t\t";
            if (($context["U_QUOTE"] ?? null)) {
                // line 119
                echo "\t\t\t\t<li>
\t\t\t\t\t<a href=\"";
                // line 120
                echo ($context["U_QUOTE"] ?? null);
                echo "\" title=\"";
                echo $this->extensions['phpbb\template\twig\extension']->lang("POST_QUOTE_PM");
                echo "\" class=\"button button-icon-only\">
\t\t\t\t\t\t<i class=\"icon fa-quote-left fa-fw\" aria-hidden=\"true\"></i><span class=\"sr-only\">";
                // line 121
                echo $this->extensions['phpbb\template\twig\extension']->lang("BUTTON_QUOTE");
                echo "</span>
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t";
            }
            // line 125
            echo "\t\t\t";
            // line 126
            echo "\t\t</ul>
\t\t";
        }
        // line 128
        echo "\t\t";
        // line 129
        echo "
\t\t<p class=\"author\">
\t\t\t<strong>";
        // line 131
        echo $this->extensions['phpbb\template\twig\extension']->lang("SENT_AT");
        echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
        echo "</strong> ";
        echo ($context["SENT_DATE"] ?? null);
        echo "
\t\t\t<br /><strong>";
        // line 132
        echo $this->extensions['phpbb\template\twig\extension']->lang("PM_FROM");
        echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
        echo "</strong> ";
        echo ($context["MESSAGE_AUTHOR_FULL"] ?? null);
        echo "
\t\t\t";
        // line 133
        if (($context["S_TO_RECIPIENT"] ?? null)) {
            echo "<br /><strong>";
            echo $this->extensions['phpbb\template\twig\extension']->lang("TO");
            echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
            echo "</strong> ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "to_recipient", [], "any", false, false, false, 133));
            foreach ($context['_seq'] as $context["_key"] => $context["to_recipient"]) {
                if (twig_get_attribute($this->env, $this->source, $context["to_recipient"], "NAME_FULL", [], "any", false, false, false, 133)) {
                    echo twig_get_attribute($this->env, $this->source, $context["to_recipient"], "NAME_FULL", [], "any", false, false, false, 133);
                } else {
                    echo "<a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["to_recipient"], "U_VIEW", [], "any", false, false, false, 133);
                    echo "\"";
                    if (twig_get_attribute($this->env, $this->source, $context["to_recipient"], "COLOUR", [], "any", false, false, false, 133)) {
                        echo " style=\"color:";
                        echo twig_get_attribute($this->env, $this->source, $context["to_recipient"], "COLOUR", [], "any", false, false, false, 133);
                        echo ";\"";
                    }
                    echo "><strong>";
                    echo twig_get_attribute($this->env, $this->source, $context["to_recipient"], "NAME", [], "any", false, false, false, 133);
                    echo "</strong></a>";
                }
                echo "&nbsp;";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['to_recipient'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 134
        echo "\t\t\t";
        if (($context["S_BCC_RECIPIENT"] ?? null)) {
            echo "<br /><strong>";
            echo $this->extensions['phpbb\template\twig\extension']->lang("BCC");
            echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
            echo "</strong> ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "bcc_recipient", [], "any", false, false, false, 134));
            foreach ($context['_seq'] as $context["_key"] => $context["bcc_recipient"]) {
                if (twig_get_attribute($this->env, $this->source, $context["bcc_recipient"], "NAME_FULL", [], "any", false, false, false, 134)) {
                    echo twig_get_attribute($this->env, $this->source, $context["bcc_recipient"], "NAME_FULL", [], "any", false, false, false, 134);
                } else {
                    echo "<a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["bcc_recipient"], "U_VIEW", [], "any", false, false, false, 134);
                    echo "\"";
                    if (twig_get_attribute($this->env, $this->source, $context["bcc_recipient"], "COLOUR", [], "any", false, false, false, 134)) {
                        echo " style=\"color:";
                        echo twig_get_attribute($this->env, $this->source, $context["bcc_recipient"], "COLOUR", [], "any", false, false, false, 134);
                        echo ";\"";
                    }
                    echo "><strong>";
                    echo twig_get_attribute($this->env, $this->source, $context["bcc_recipient"], "NAME", [], "any", false, false, false, 134);
                    echo "</strong></a>";
                }
                echo "&nbsp;";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['bcc_recipient'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 135
        echo "\t\t</p>


\t\t<div class=\"content\">";
        // line 138
        echo ($context["MESSAGE"] ?? null);
        echo "</div>

\t\t";
        // line 140
        if (($context["S_HAS_ATTACHMENTS"] ?? null)) {
            // line 141
            echo "\t\t\t<dl class=\"attachbox\">
\t\t\t\t<dt>
\t\t\t\t\t";
            // line 143
            echo $this->extensions['phpbb\template\twig\extension']->lang("ATTACHMENTS");
            echo "
\t\t\t\t</dt>
\t\t\t\t";
            // line 145
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "attachment", [], "any", false, false, false, 145));
            foreach ($context['_seq'] as $context["_key"] => $context["attachment"]) {
                // line 146
                echo "\t\t\t\t\t<dd>";
                echo twig_get_attribute($this->env, $this->source, $context["attachment"], "DISPLAY_ATTACHMENT", [], "any", false, false, false, 146);
                echo "</dd>
\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attachment'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 148
            echo "\t\t\t</dl>
\t\t";
        }
        // line 150
        echo "
\t\t";
        // line 151
        if (($context["S_DISPLAY_NOTICE"] ?? null)) {
            // line 152
            echo "\t\t\t<div class=\"post-notice error\">";
            echo $this->extensions['phpbb\template\twig\extension']->lang("DOWNLOAD_NOTICE");
            echo "</div>
\t\t";
        }
        // line 154
        echo "
\t\t";
        // line 155
        if ((($context["EDITED_MESSAGE"] ?? null) || ($context["EDIT_REASON"] ?? null))) {
            // line 156
            echo "\t\t<div class=\"notice\">";
            echo ($context["EDITED_MESSAGE"] ?? null);
            echo "
\t\t\t";
            // line 157
            if (($context["EDIT_REASON"] ?? null)) {
                echo "<br /><strong>";
                echo $this->extensions['phpbb\template\twig\extension']->lang("REASON");
                echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
                echo "</strong> <em>";
                echo ($context["EDIT_REASON"] ?? null);
                echo "</em>";
            }
            // line 158
            echo "\t\t</div>
\t\t";
        }
        // line 160
        echo "
\t\t";
        // line 161
        if (($context["SIGNATURE"] ?? null)) {
            // line 162
            echo "\t\t\t<div id=\"sig";
            echo ($context["MESSAGE_ID"] ?? null);
            echo "\" class=\"signature\">";
            echo ($context["SIGNATURE"] ?? null);
            echo "</div>
\t\t";
        }
        // line 164
        echo "\t</div>

\t<div class=\"back2top\">
\t\t<a href=\"#top\" class=\"top\" title=\"";
        // line 167
        echo $this->extensions['phpbb\template\twig\extension']->lang("BACK_TO_TOP");
        echo "\">
\t\t\t<i class=\"icon fa-chevron-circle-up fa-fw icon-gray\" aria-hidden=\"true\"></i>
\t\t\t<span class=\"sr-only\">";
        // line 169
        echo $this->extensions['phpbb\template\twig\extension']->lang("BACK_TO_TOP");
        echo "</span>
\t\t</a>
\t</div>

\t</div>
</div>

";
        // line 176
        // line 177
        if (($context["S_VIEW_MESSAGE"] ?? null)) {
            // line 178
            echo "<fieldset class=\"display-options\">

\t";
            // line 180
            if (($context["S_MARK_OPTIONS"] ?? null)) {
                echo "<label for=\"mark_option\"><select name=\"mark_option\" id=\"mark_option\">";
                echo ($context["S_MARK_OPTIONS"] ?? null);
                echo "</select></label>&nbsp;<input class=\"button2\" type=\"submit\" name=\"submit_mark\" value=\"";
                echo $this->extensions['phpbb\template\twig\extension']->lang("GO");
                echo "\" />";
            }
            // line 181
            echo "\t";
            if (($context["U_PREVIOUS_PM"] ?? null)) {
                // line 182
                echo "\t\t<a href=\"";
                echo ($context["U_PREVIOUS_PM"] ?? null);
                echo "\" class=\"left-box arrow-";
                echo ($context["S_CONTENT_FLOW_BEGIN"] ?? null);
                echo "\">
\t\t\t<i class=\"icon fa-angle-";
                // line 183
                echo ($context["S_CONTENT_FLOW_BEGIN"] ?? null);
                echo " fa-fw icon-black\" aria-hidden=\"true\"></i><span>";
                echo $this->extensions['phpbb\template\twig\extension']->lang("VIEW_PREVIOUS_PM");
                echo "</span>
\t\t</a>
\t";
            }
            // line 186
            echo "\t";
            if (($context["U_NEXT_PM"] ?? null)) {
                // line 187
                echo "\t\t<a href=\"";
                echo ($context["U_NEXT_PM"] ?? null);
                echo "\" class=\"right-box arrow-";
                echo ($context["S_CONTENT_FLOW_END"] ?? null);
                echo "\">
\t\t\t<i class=\"icon fa-angle-";
                // line 188
                echo ($context["S_CONTENT_FLOW_END"] ?? null);
                echo " fa-fw icon-black\" aria-hidden=\"true\"></i><span>";
                echo $this->extensions['phpbb\template\twig\extension']->lang("VIEW_NEXT_PM");
                echo "</span>
\t\t</a>
\t";
            }
            // line 191
            echo "\t";
            if (( !($context["S_UNREAD"] ?? null) &&  !($context["S_SPECIAL_FOLDER"] ?? null))) {
                echo "<label for=\"dest_folder\">";
                if (($context["S_VIEW_MESSAGE"] ?? null)) {
                    echo $this->extensions['phpbb\template\twig\extension']->lang("MOVE_TO_FOLDER");
                    echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
                    echo " ";
                } else {
                    echo $this->extensions['phpbb\template\twig\extension']->lang("MOVE_MARKED_TO_FOLDER");
                }
                echo " <select name=\"dest_folder\" id=\"dest_folder\">";
                echo ($context["S_TO_FOLDER_OPTIONS"] ?? null);
                echo "</select></label> <input class=\"button2\" type=\"submit\" name=\"move_pm\" value=\"";
                echo $this->extensions['phpbb\template\twig\extension']->lang("GO");
                echo "\" />";
            }
            // line 192
            echo "\t<input type=\"hidden\" name=\"marked_msg_id[]\" value=\"";
            echo ($context["MSG_ID"] ?? null);
            echo "\" />
\t<input type=\"hidden\" name=\"cur_folder_id\" value=\"";
            // line 193
            echo ($context["CUR_FOLDER_ID"] ?? null);
            echo "\" />
\t<input type=\"hidden\" name=\"p\" value=\"";
            // line 194
            echo ($context["MSG_ID"] ?? null);
            echo "\" />
</fieldset>
";
        }
        // line 197
        echo "
";
        // line 198
        $location = "ucp_pm_message_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("ucp_pm_message_footer.html", "ucp_pm_viewmessage.html", 198)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 199
        echo "
";
        // line 200
        if (($context["S_DISPLAY_HISTORY"] ?? null)) {
            $location = "ucp_pm_history.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("ucp_pm_history.html", "ucp_pm_viewmessage.html", 200)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
        }
        // line 201
        echo "
";
        // line 202
        $location = "ucp_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("ucp_footer.html", "ucp_pm_viewmessage.html", 202)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
    }

    public function getTemplateName()
    {
        return "ucp_pm_viewmessage.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  757 => 202,  754 => 201,  740 => 200,  737 => 199,  725 => 198,  722 => 197,  716 => 194,  712 => 193,  707 => 192,  690 => 191,  682 => 188,  675 => 187,  672 => 186,  664 => 183,  657 => 182,  654 => 181,  646 => 180,  642 => 178,  640 => 177,  639 => 176,  629 => 169,  624 => 167,  619 => 164,  611 => 162,  609 => 161,  606 => 160,  602 => 158,  593 => 157,  588 => 156,  586 => 155,  583 => 154,  577 => 152,  575 => 151,  572 => 150,  568 => 148,  559 => 146,  555 => 145,  550 => 143,  546 => 141,  544 => 140,  539 => 138,  534 => 135,  503 => 134,  473 => 133,  466 => 132,  459 => 131,  455 => 129,  453 => 128,  449 => 126,  447 => 125,  440 => 121,  434 => 120,  431 => 119,  428 => 118,  421 => 114,  415 => 113,  412 => 112,  409 => 111,  402 => 107,  396 => 106,  393 => 105,  390 => 104,  383 => 100,  377 => 99,  374 => 98,  371 => 97,  370 => 96,  367 => 95,  364 => 94,  362 => 93,  359 => 92,  354 => 90,  349 => 87,  347 => 86,  340 => 81,  334 => 80,  330 => 78,  328 => 77,  321 => 75,  303 => 74,  299 => 72,  296 => 71,  292 => 70,  289 => 69,  285 => 68,  276 => 64,  270 => 62,  267 => 61,  264 => 60,  263 => 59,  260 => 58,  258 => 57,  252 => 56,  241 => 54,  238 => 53,  233 => 52,  232 => 51,  229 => 50,  220 => 49,  205 => 48,  202 => 47,  200 => 46,  189 => 45,  188 => 44,  184 => 42,  183 => 41,  178 => 40,  177 => 39,  174 => 38,  172 => 37,  163 => 36,  162 => 35,  158 => 33,  152 => 31,  150 => 30,  136 => 29,  132 => 28,  119 => 25,  115 => 23,  111 => 21,  103 => 18,  96 => 17,  93 => 16,  85 => 13,  78 => 12,  76 => 11,  73 => 10,  71 => 9,  64 => 4,  52 => 3,  49 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "ucp_pm_viewmessage.html", "");
    }
}
