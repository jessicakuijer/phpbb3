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

/* memberlist_view.html */
class __TwigTemplate_3c4f8ce025d7c50adc26ee7887c1567c extends \Twig\Template
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
        $location = "overall_header.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("overall_header.html", "memberlist_view.html", 1)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 2
        echo "
<h2 class=\"memberlist-title\">";
        // line 3
        echo ($context["PAGE_TITLE"] ?? null);
        echo "</h2>

";
        // line 5
        // line 6
        echo "
<form method=\"post\" action=\"";
        // line 7
        echo ($context["S_PROFILE_ACTION"] ?? null);
        echo "\" id=\"viewprofile\">
<div class=\"panel bg1";
        // line 8
        if (($context["S_ONLINE"] ?? null)) {
            echo " online";
        }
        echo "\">
\t<div class=\"inner\">

\t";
        // line 11
        if ((($context["S_ONLINE"] ?? null) &&  !($context["AVATAR_IMG"] ?? null))) {
            // line 12
            echo "\t\t<div class=\"inventea-online\"><i class=\"fa fa-power-off\"></i> ";
            echo $this->extensions['phpbb\template\twig\extension']->lang("ONLINE");
            echo "</div>
\t";
        }
        // line 14
        echo "
\t";
        // line 15
        if (($context["AVATAR_IMG"] ?? null)) {
            // line 16
            echo "\t\t<dl class=\"left-box\">
\t\t\t<dt class=\"profile-avatar\">
\t\t\t\t";
            // line 18
            if (($context["S_ONLINE"] ?? null)) {
                // line 19
                echo "\t\t\t\t\t<div style=\"text-align: center;\">
\t\t\t\t\t\t<div class=\"inventea-online\" style=\"margin-bottom: 6px;\"><i class=\"fa fa-power-off\"></i> ";
                // line 20
                echo $this->extensions['phpbb\template\twig\extension']->lang("ONLINE");
                echo "</div>
\t\t\t\t\t</div>
\t\t\t\t";
            }
            // line 23
            echo "
\t\t\t\t";
            // line 24
            echo ($context["AVATAR_IMG"] ?? null);
            echo "
\t\t\t</dt>
\t\t\t";
            // line 26
            // line 27
            echo "\t\t\t";
            if (($context["RANK_TITLE"] ?? null)) {
                echo "<dd style=\"text-align: center;\">";
                echo ($context["RANK_TITLE"] ?? null);
                echo "</dd>";
            }
            // line 28
            echo "\t\t\t";
            if (($context["RANK_IMG"] ?? null)) {
                echo "<dd style=\"text-align: center;\">";
                echo ($context["RANK_IMG"] ?? null);
                echo "</dd>";
            }
            // line 29
            echo "\t\t\t";
            // line 30
            echo "\t\t</dl>
\t";
        }
        // line 32
        echo "
\t<dl class=\"left-box details profile-details\">
\t\t<dt>";
        // line 34
        echo $this->extensions['phpbb\template\twig\extension']->lang("USERNAME");
        echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
        echo "</dt>
\t\t<dd>
\t\t\t";
        // line 36
        if (($context["USER_COLOR"] ?? null)) {
            echo "<span style=\"color: ";
            echo ($context["USER_COLOR"] ?? null);
            echo "; font-weight: bold;\">";
        } else {
            echo "<span>";
        }
        echo ($context["USERNAME"] ?? null);
        echo "</span>";
        // line 37
        echo "\t\t\t";
        if (($context["U_EDIT_SELF"] ?? null)) {
            echo " [ <a href=\"";
            echo ($context["U_EDIT_SELF"] ?? null);
            echo "\">";
            echo $this->extensions['phpbb\template\twig\extension']->lang("EDIT_PROFILE");
            echo "</a> ]";
        }
        // line 38
        echo "\t\t\t";
        if (($context["U_USER_ADMIN"] ?? null)) {
            echo " [ <a href=\"";
            echo ($context["U_USER_ADMIN"] ?? null);
            echo "\">";
            echo $this->extensions['phpbb\template\twig\extension']->lang("USER_ADMIN");
            echo "</a> ]";
        }
        // line 39
        echo "\t\t\t";
        if (($context["U_USER_BAN"] ?? null)) {
            echo " [ <a href=\"";
            echo ($context["U_USER_BAN"] ?? null);
            echo "\">";
            echo $this->extensions['phpbb\template\twig\extension']->lang("USER_BAN");
            echo "</a> ]";
        }
        // line 40
        echo "\t\t\t";
        if (($context["U_SWITCH_PERMISSIONS"] ?? null)) {
            echo " [ <a href=\"";
            echo ($context["U_SWITCH_PERMISSIONS"] ?? null);
            echo "\">";
            echo $this->extensions['phpbb\template\twig\extension']->lang("USE_PERMISSIONS");
            echo "</a> ]";
        }
        // line 41
        echo "\t\t</dd>
\t\t";
        // line 42
        if ( !($context["AVATAR_IMG"] ?? null)) {
            // line 43
            echo "\t\t\t";
            // line 44
            echo "\t\t\t";
            if (($context["RANK_TITLE"] ?? null)) {
                echo "<dt>";
                echo $this->extensions['phpbb\template\twig\extension']->lang("RANK");
                echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
                echo "</dt> <dd>";
                echo ($context["RANK_TITLE"] ?? null);
                echo "</dd>";
            }
            // line 45
            echo "\t\t\t";
            if (($context["RANK_IMG"] ?? null)) {
                echo "<dt>";
                if (($context["RANK_TITLE"] ?? null)) {
                    echo "&nbsp;";
                } else {
                    echo $this->extensions['phpbb\template\twig\extension']->lang("RANK");
                    echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
                }
                echo "</dt> <dd>";
                echo ($context["RANK_IMG"] ?? null);
                echo "</dd>";
            }
            // line 46
            echo "\t\t\t";
            // line 47
            echo "\t\t";
        }
        // line 48
        echo "\t\t";
        if (($context["S_USER_INACTIVE"] ?? null)) {
            echo "<dt>";
            echo $this->extensions['phpbb\template\twig\extension']->lang("USER_IS_INACTIVE");
            echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
            echo "</dt> <dd>";
            echo ($context["USER_INACTIVE_REASON"] ?? null);
            echo "</dd>";
        }
        // line 49
        echo "\t\t";
        if ((($context["AGE"] ?? null) !== "")) {
            echo "<dt>";
            echo $this->extensions['phpbb\template\twig\extension']->lang("AGE");
            echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
            echo "</dt> <dd>";
            echo ($context["AGE"] ?? null);
            echo "</dd>";
        }
        // line 50
        echo "\t\t";
        if (($context["S_GROUP_OPTIONS"] ?? null)) {
            echo "<dt>";
            echo $this->extensions['phpbb\template\twig\extension']->lang("USERGROUPS");
            echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
            echo "</dt> <dd><select name=\"g\">";
            echo ($context["S_GROUP_OPTIONS"] ?? null);
            echo "</select> <input type=\"submit\" name=\"submit\" value=\"";
            echo $this->extensions['phpbb\template\twig\extension']->lang("GO");
            echo "\" class=\"button2\" /></dd>";
        }
        // line 51
        echo "\t\t";
        // line 52
        echo "\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "custom_fields", [], "any", false, false, false, 52));
        foreach ($context['_seq'] as $context["_key"] => $context["custom_fields"]) {
            // line 53
            echo "\t\t\t";
            if ( !twig_get_attribute($this->env, $this->source, $context["custom_fields"], "S_PROFILE_CONTACT", [], "any", false, false, false, 53)) {
                // line 54
                echo "\t\t\t\t<dt>";
                echo twig_get_attribute($this->env, $this->source, $context["custom_fields"], "PROFILE_FIELD_NAME", [], "any", false, false, false, 54);
                echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
                echo "</dt> <dd>";
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
        echo "\t\t";
        // line 59
        echo "\t\t";
        if ((($context["S_USER_LOGGED_IN"] ?? null) && ($context["S_ZEBRA"] ?? null))) {
            // line 60
            echo "\t\t\t";
            if (($context["U_REMOVE_FRIEND"] ?? null)) {
                // line 61
                echo "\t\t\t\t<dt>&nbsp;</dt> <dd class=\"zebra\"><a href=\"";
                echo ($context["U_REMOVE_FRIEND"] ?? null);
                echo "\" data-ajax=\"zebra\"><strong>";
                echo $this->extensions['phpbb\template\twig\extension']->lang("REMOVE_FRIEND");
                echo "</strong></a></dd>
\t\t\t";
            } elseif (            // line 62
($context["U_REMOVE_FOE"] ?? null)) {
                // line 63
                echo "\t\t\t\t<dt>&nbsp;</dt> <dd class=\"zebra\"><a href=\"";
                echo ($context["U_REMOVE_FOE"] ?? null);
                echo "\" data-ajax=\"zebra\"><strong>";
                echo $this->extensions['phpbb\template\twig\extension']->lang("REMOVE_FOE");
                echo "</strong></a></dd>
\t\t\t";
            } else {
                // line 65
                echo "\t\t\t\t";
                if (($context["U_ADD_FRIEND"] ?? null)) {
                    // line 66
                    echo "\t\t\t\t\t<dt>&nbsp;</dt> <dd class=\"zebra\"><a href=\"";
                    echo ($context["U_ADD_FRIEND"] ?? null);
                    echo "\" data-ajax=\"zebra\"><strong>";
                    echo $this->extensions['phpbb\template\twig\extension']->lang("ADD_FRIEND");
                    echo "</strong></a></dd>
\t\t\t\t";
                }
                // line 68
                echo "\t\t\t\t";
                if (($context["U_ADD_FOE"] ?? null)) {
                    // line 69
                    echo "\t\t\t\t\t<dt>&nbsp;</dt> <dd class=\"zebra\"><a href=\"";
                    echo ($context["U_ADD_FOE"] ?? null);
                    echo "\" data-ajax=\"zebra\"><strong>";
                    echo $this->extensions['phpbb\template\twig\extension']->lang("ADD_FOE");
                    echo "</strong></a></dd>
\t\t\t\t";
                }
                // line 71
                echo "\t\t\t";
            }
            // line 72
            echo "\t\t";
        }
        // line 73
        echo "\t\t";
        // line 74
        echo "\t</dl>

\t</div>
</div>

";
        // line 79
        // line 80
        echo "<div class=\"panel bg2\">
\t<div class=\"inner\">

\t<div class=\"column1\">
\t\t<h3>";
        // line 84
        echo $this->extensions['phpbb\template\twig\extension']->lang("CONTACT_USER");
        echo "</h3>

\t\t<dl class=\"details\">
\t\t";
        // line 87
        if (($context["U_EMAIL"] ?? null)) {
            echo "<dt>";
            echo $this->extensions['phpbb\template\twig\extension']->lang("EMAIL_ADDRESS");
            echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
            echo "</dt> <dd><a href=\"";
            echo ($context["U_EMAIL"] ?? null);
            echo "\">";
            echo $this->extensions['phpbb\template\twig\extension']->lang("SEND_EMAIL_USER");
            echo "</a></dd>";
        }
        // line 88
        echo "\t\t";
        if (($context["U_PM"] ?? null)) {
            echo "<dt>";
            echo $this->extensions['phpbb\template\twig\extension']->lang("PM");
            echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
            echo "</dt> <dd><a href=\"";
            echo ($context["U_PM"] ?? null);
            echo "\">";
            echo $this->extensions['phpbb\template\twig\extension']->lang("SEND_PRIVATE_MESSAGE");
            echo "</a></dd>";
        }
        // line 89
        echo "\t\t";
        if ((($context["U_JABBER"] ?? null) && ($context["S_JABBER_ENABLED"] ?? null))) {
            echo "<dt>";
            echo $this->extensions['phpbb\template\twig\extension']->lang("JABBER");
            echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
            echo "</dt> <dd><a href=\"";
            echo ($context["U_JABBER"] ?? null);
            echo "\" onclick=\"popup(this.href, 750, 320); return false;\">";
            echo $this->extensions['phpbb\template\twig\extension']->lang("SEND_JABBER_MESSAGE");
            echo "</a></dd>";
        } elseif (($context["USER_JABBER"] ?? null)) {
            echo "<dt>";
            echo $this->extensions['phpbb\template\twig\extension']->lang("JABBER");
            echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
            echo "</dt> <dd>";
            echo ($context["USER_JABBER"] ?? null);
            echo "</dd>";
        }
        // line 90
        echo "\t\t";
        // line 91
        echo "\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "custom_fields", [], "any", false, false, false, 91));
        foreach ($context['_seq'] as $context["_key"] => $context["custom_fields"]) {
            // line 92
            echo "\t\t\t";
            if (twig_get_attribute($this->env, $this->source, $context["custom_fields"], "S_PROFILE_CONTACT", [], "any", false, false, false, 92)) {
                // line 93
                echo "\t\t\t\t<dt>";
                echo twig_get_attribute($this->env, $this->source, $context["custom_fields"], "PROFILE_FIELD_NAME", [], "any", false, false, false, 93);
                echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
                echo "</dt>
\t\t\t\t";
                // line 94
                if (twig_get_attribute($this->env, $this->source, $context["custom_fields"], "PROFILE_FIELD_CONTACT", [], "any", false, false, false, 94)) {
                    // line 95
                    echo "\t\t\t\t\t<dd><a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_fields"], "PROFILE_FIELD_CONTACT", [], "any", false, false, false, 95);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_fields"], "PROFILE_FIELD_DESC", [], "any", false, false, false, 95);
                    echo "</a></dd>
\t\t\t\t";
                } else {
                    // line 97
                    echo "\t\t\t\t\t<dd>";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_fields"], "PROFILE_FIELD_VALUE", [], "any", false, false, false, 97);
                    echo "</dd>
\t\t\t\t";
                }
                // line 99
                echo "\t\t\t";
            }
            // line 100
            echo "\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_fields'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 101
        echo "\t\t";
        // line 102
        echo "\t\t";
        if (($context["S_PROFILE_FIELD1"] ?? null)) {
            // line 103
            echo "\t\t\t<!-- NOTE: Use a construct like this to include admin defined profile fields. Replace FIELD1 with the name of your field. -->
\t\t\t<dt>";
            // line 104
            echo ($context["PROFILE_FIELD1_NAME"] ?? null);
            echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
            echo "</dt> <dd>";
            echo ($context["PROFILE_FIELD1_VALUE"] ?? null);
            echo "</dd>
\t\t";
        }
        // line 106
        echo "\t\t</dl>
\t</div>

\t<div class=\"column2\">
\t\t<h3>";
        // line 110
        echo $this->extensions['phpbb\template\twig\extension']->lang("USER_FORUM");
        echo "</h3>
\t\t<dl class=\"details\">
\t\t\t";
        // line 112
        // line 113
        echo "\t\t\t<dt>";
        echo $this->extensions['phpbb\template\twig\extension']->lang("JOINED");
        echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
        echo "</dt> <dd>";
        echo ($context["JOINED"] ?? null);
        echo "</dd>
\t\t\t<dt>";
        // line 114
        echo $this->extensions['phpbb\template\twig\extension']->lang("LAST_ACTIVE");
        echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
        echo "</dt> <dd>";
        echo ($context["LAST_ACTIVE"] ?? null);
        echo "</dd>
\t\t\t";
        // line 115
        if (($context["S_WARNINGS"] ?? null)) {
            // line 116
            echo "\t\t\t<dt>";
            echo $this->extensions['phpbb\template\twig\extension']->lang("WARNINGS");
            echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
            echo " </dt>
\t\t\t<dd><strong>";
            // line 117
            echo ($context["WARNINGS"] ?? null);
            echo "</strong>";
            if ((($context["U_NOTES"] ?? null) || ($context["U_WARN"] ?? null))) {
                echo " [ ";
                if (($context["U_NOTES"] ?? null)) {
                    echo "<a href=\"";
                    echo ($context["U_NOTES"] ?? null);
                    echo "\">";
                    echo $this->extensions['phpbb\template\twig\extension']->lang("VIEW_NOTES");
                    echo "</a>";
                }
                echo " ";
                if (($context["U_WARN"] ?? null)) {
                    if (($context["U_NOTES"] ?? null)) {
                        echo " | ";
                    }
                    echo "<a href=\"";
                    echo ($context["U_WARN"] ?? null);
                    echo "\">";
                    echo $this->extensions['phpbb\template\twig\extension']->lang("WARN_USER");
                    echo "</a>";
                }
                echo " ]";
            }
            echo "</dd>
\t\t\t";
        }
        // line 119
        echo "\t\t\t<dt>";
        echo $this->extensions['phpbb\template\twig\extension']->lang("TOTAL_POSTS");
        echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
        echo "</dt>
\t\t\t\t<dd>";
        // line 120
        echo ($context["POSTS"] ?? null);
        echo " ";
        if (($context["S_DISPLAY_SEARCH"] ?? null)) {
            echo "| <strong><a href=\"";
            echo ($context["U_SEARCH_USER"] ?? null);
            echo "\">";
            echo $this->extensions['phpbb\template\twig\extension']->lang("SEARCH_USER_POSTS");
            echo "</a></strong>";
        }
        // line 121
        echo "\t\t\t\t\t";
        if (($context["POSTS_PCT"] ?? null)) {
            echo "<br />(";
            echo ($context["POSTS_PCT"] ?? null);
            echo " / ";
            echo ($context["POSTS_DAY"] ?? null);
            echo ")";
        }
        // line 122
        echo "\t\t\t\t\t";
        if ((($context["POSTS_IN_QUEUE"] ?? null) && ($context["U_MCP_QUEUE"] ?? null))) {
            echo "<br />(<a href=\"";
            echo ($context["U_MCP_QUEUE"] ?? null);
            echo "\">";
            echo $this->extensions['phpbb\template\twig\extension']->lang("POSTS_IN_QUEUE");
            echo "</a>)";
        } elseif (($context["POSTS_IN_QUEUE"] ?? null)) {
            echo "<br />(";
            echo $this->extensions['phpbb\template\twig\extension']->lang("POSTS_IN_QUEUE");
            echo ")";
        }
        // line 123
        echo "\t\t\t\t</dd>
\t\t\t";
        // line 124
        if ((($context["S_SHOW_ACTIVITY"] ?? null) && ($context["POSTS"] ?? null))) {
            // line 125
            echo "\t\t\t\t<dt>";
            echo $this->extensions['phpbb\template\twig\extension']->lang("ACTIVE_IN_FORUM");
            echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
            echo "</dt> <dd>";
            if ((($context["ACTIVE_FORUM"] ?? null) != "")) {
                echo "<strong><a href=\"";
                echo ($context["U_ACTIVE_FORUM"] ?? null);
                echo "\">";
                echo ($context["ACTIVE_FORUM"] ?? null);
                echo "</a></strong><br />(";
                echo ($context["ACTIVE_FORUM_POSTS"] ?? null);
                echo " / ";
                echo ($context["ACTIVE_FORUM_PCT"] ?? null);
                echo ")";
            } else {
                echo " - ";
            }
            echo "</dd>
\t\t\t\t<dt>";
            // line 126
            echo $this->extensions['phpbb\template\twig\extension']->lang("ACTIVE_IN_TOPIC");
            echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
            echo "</dt> <dd>";
            if ((($context["ACTIVE_TOPIC"] ?? null) != "")) {
                echo "<strong><a href=\"";
                echo ($context["U_ACTIVE_TOPIC"] ?? null);
                echo "\">";
                echo ($context["ACTIVE_TOPIC"] ?? null);
                echo "</a></strong><br />(";
                echo ($context["ACTIVE_TOPIC_POSTS"] ?? null);
                echo " / ";
                echo ($context["ACTIVE_TOPIC_PCT"] ?? null);
                echo ")";
            } else {
                echo " - ";
            }
            echo "</dd>
\t\t\t";
        }
        // line 128
        echo "\t\t\t";
        // line 129
        echo "\t\t</dl>
\t</div>

\t</div>
</div>
";
        // line 134
        // line 135
        echo "
";
        // line 136
        if (($context["SIGNATURE"] ?? null)) {
            // line 137
            echo "<div class=\"panel bg1\">
\t<div class=\"inner\">

\t\t<h3>";
            // line 140
            echo $this->extensions['phpbb\template\twig\extension']->lang("SIGNATURE");
            echo "</h3>

\t\t<div class=\"postbody\"><div class=\"signature standalone\">";
            // line 142
            echo ($context["SIGNATURE"] ?? null);
            echo "</div></div>

\t</div>
</div>
";
        }
        // line 147
        echo "
</form>

";
        // line 150
        // line 151
        echo "
";
        // line 152
        $location = "jumpbox.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("jumpbox.html", "memberlist_view.html", 152)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 153
        echo "
";
        // line 154
        $location = "overall_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("overall_footer.html", "memberlist_view.html", 154)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
    }

    public function getTemplateName()
    {
        return "memberlist_view.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  658 => 154,  655 => 153,  643 => 152,  640 => 151,  639 => 150,  634 => 147,  626 => 142,  621 => 140,  616 => 137,  614 => 136,  611 => 135,  610 => 134,  603 => 129,  601 => 128,  581 => 126,  561 => 125,  559 => 124,  556 => 123,  543 => 122,  534 => 121,  524 => 120,  518 => 119,  490 => 117,  484 => 116,  482 => 115,  475 => 114,  467 => 113,  466 => 112,  461 => 110,  455 => 106,  447 => 104,  444 => 103,  441 => 102,  439 => 101,  433 => 100,  430 => 99,  424 => 97,  416 => 95,  414 => 94,  408 => 93,  405 => 92,  400 => 91,  398 => 90,  379 => 89,  367 => 88,  356 => 87,  350 => 84,  344 => 80,  343 => 79,  336 => 74,  334 => 73,  331 => 72,  328 => 71,  320 => 69,  317 => 68,  309 => 66,  306 => 65,  298 => 63,  296 => 62,  289 => 61,  286 => 60,  283 => 59,  281 => 58,  279 => 57,  273 => 56,  264 => 54,  261 => 53,  256 => 52,  254 => 51,  242 => 50,  232 => 49,  222 => 48,  219 => 47,  217 => 46,  203 => 45,  193 => 44,  191 => 43,  189 => 42,  186 => 41,  177 => 40,  168 => 39,  159 => 38,  150 => 37,  140 => 36,  134 => 34,  130 => 32,  126 => 30,  124 => 29,  117 => 28,  110 => 27,  109 => 26,  104 => 24,  101 => 23,  95 => 20,  92 => 19,  90 => 18,  86 => 16,  84 => 15,  81 => 14,  75 => 12,  73 => 11,  65 => 8,  61 => 7,  58 => 6,  57 => 5,  52 => 3,  49 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "memberlist_view.html", "");
    }
}
