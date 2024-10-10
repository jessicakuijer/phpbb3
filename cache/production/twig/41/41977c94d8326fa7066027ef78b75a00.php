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

/* overall_header.html */
class __TwigTemplate_8dbf2636a698cf854dce40ec874b8f14 extends \Twig\Template
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
        echo "<!DOCTYPE html>
<html dir=\"";
        // line 2
        echo ($context["S_CONTENT_DIRECTION"] ?? null);
        echo "\" lang=\"";
        echo ($context["S_USER_LANG"] ?? null);
        echo "\">
<head>
<meta charset=\"utf-8\" />
<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\" />
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\" />
";
        // line 7
        echo ($context["META"] ?? null);
        echo "
<title>";
        // line 8
        if (($context["UNREAD_NOTIFICATIONS_COUNT"] ?? null)) {
            echo "(";
            echo ($context["UNREAD_NOTIFICATIONS_COUNT"] ?? null);
            echo ") ";
        }
        if (( !($context["S_VIEWTOPIC"] ?? null) &&  !($context["S_VIEWFORUM"] ?? null))) {
            echo ($context["SITENAME"] ?? null);
            echo " - ";
        }
        if (($context["S_IN_MCP"] ?? null)) {
            echo $this->extensions['phpbb\template\twig\extension']->lang("MCP");
            echo " - ";
        } elseif (($context["S_IN_UCP"] ?? null)) {
            echo $this->extensions['phpbb\template\twig\extension']->lang("UCP");
            echo " - ";
        }
        echo ($context["PAGE_TITLE"] ?? null);
        if ((($context["S_VIEWTOPIC"] ?? null) || ($context["S_VIEWFORUM"] ?? null))) {
            echo " - ";
            echo ($context["SITENAME"] ?? null);
        }
        echo "</title>

";
        // line 10
        if (($context["S_ENABLE_FEEDS"] ?? null)) {
            // line 11
            echo "\t";
            if (($context["S_ENABLE_FEEDS_OVERALL"] ?? null)) {
                echo "<link rel=\"alternate\" type=\"application/atom+xml\" title=\"";
                echo $this->extensions['phpbb\template\twig\extension']->lang("FEED");
                echo " - ";
                echo ($context["SITENAME"] ?? null);
                echo "\" href=\"";
                echo $this->extensions['phpbb\template\twig\extension\routing']->getPath("phpbb_feed_index");
                echo "\">";
            }
            // line 12
            echo "\t";
            if (($context["S_ENABLE_FEEDS_NEWS"] ?? null)) {
                echo "<link rel=\"alternate\" type=\"application/atom+xml\" title=\"";
                echo $this->extensions['phpbb\template\twig\extension']->lang("FEED");
                echo " - ";
                echo $this->extensions['phpbb\template\twig\extension']->lang("FEED_NEWS");
                echo "\" href=\"";
                echo $this->extensions['phpbb\template\twig\extension\routing']->getPath("phpbb_feed_news");
                echo "\">";
            }
            // line 13
            echo "\t";
            if (($context["S_ENABLE_FEEDS_FORUMS"] ?? null)) {
                echo "<link rel=\"alternate\" type=\"application/atom+xml\" title=\"";
                echo $this->extensions['phpbb\template\twig\extension']->lang("FEED");
                echo " - ";
                echo $this->extensions['phpbb\template\twig\extension']->lang("ALL_FORUMS");
                echo "\" href=\"";
                echo $this->extensions['phpbb\template\twig\extension\routing']->getPath("phpbb_feed_forums");
                echo "\">";
            }
            // line 14
            echo "\t";
            if (($context["S_ENABLE_FEEDS_TOPICS"] ?? null)) {
                echo "<link rel=\"alternate\" type=\"application/atom+xml\" title=\"";
                echo $this->extensions['phpbb\template\twig\extension']->lang("FEED");
                echo " - ";
                echo $this->extensions['phpbb\template\twig\extension']->lang("FEED_TOPICS_NEW");
                echo "\" href=\"";
                echo $this->extensions['phpbb\template\twig\extension\routing']->getPath("phpbb_feed_topics");
                echo "\">";
            }
            // line 15
            echo "\t";
            if (($context["S_ENABLE_FEEDS_TOPICS_ACTIVE"] ?? null)) {
                echo "<link rel=\"alternate\" type=\"application/atom+xml\" title=\"";
                echo $this->extensions['phpbb\template\twig\extension']->lang("FEED");
                echo " - ";
                echo $this->extensions['phpbb\template\twig\extension']->lang("FEED_TOPICS_ACTIVE");
                echo "\" href=\"";
                echo $this->extensions['phpbb\template\twig\extension\routing']->getPath("phpbb_feed_topics_active");
                echo "\">";
            }
            // line 16
            echo "\t";
            if ((($context["S_ENABLE_FEEDS_FORUM"] ?? null) && ($context["S_FORUM_ID"] ?? null))) {
                echo "<link rel=\"alternate\" type=\"application/atom+xml\" title=\"";
                echo $this->extensions['phpbb\template\twig\extension']->lang("FEED");
                echo " - ";
                echo $this->extensions['phpbb\template\twig\extension']->lang("FORUM");
                echo " - ";
                echo ($context["FORUM_NAME"] ?? null);
                echo "\" href=\"";
                echo $this->extensions['phpbb\template\twig\extension\routing']->getPath("phpbb_feed_forum", ["forum_id" => ($context["S_FORUM_ID"] ?? null)]);
                echo "\">";
            }
            // line 17
            echo "\t";
            if ((($context["S_ENABLE_FEEDS_TOPIC"] ?? null) && ($context["S_TOPIC_ID"] ?? null))) {
                echo "<link rel=\"alternate\" type=\"application/atom+xml\" title=\"";
                echo $this->extensions['phpbb\template\twig\extension']->lang("FEED");
                echo " - ";
                echo $this->extensions['phpbb\template\twig\extension']->lang("TOPIC");
                echo " - ";
                echo ($context["TOPIC_TITLE"] ?? null);
                echo "\" href=\"";
                echo $this->extensions['phpbb\template\twig\extension\routing']->getPath("phpbb_feed_topic", ["topic_id" => ($context["S_TOPIC_ID"] ?? null)]);
                echo "\">";
            }
            // line 18
            echo "\t";
        }
        // line 20
        echo "
";
        // line 21
        if (($context["U_CANONICAL"] ?? null)) {
            // line 22
            echo "\t<link rel=\"canonical\" href=\"";
            echo ($context["U_CANONICAL"] ?? null);
            echo "\">
";
        }
        // line 24
        echo "
<!--
\tphpBB style name: we_clearblue
\tBased on style:   prosilver (this is the default phpBB3 style)
\tOriginal author:  Tom Beddard ( http://www.subBlue.com/ )
\tModified by:      Melvin García ( http://www.melvingarcia.com/ )
-->

";
        // line 32
        if (($context["S_ALLOW_CDN"] ?? null)) {
            // line 33
            echo "<script>
\tWebFontConfig = {
\t\tgoogle: {
\t\t\tfamilies: ['Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese']
\t\t}
\t};

\t(function(d) {
\t\tvar wf = d.createElement('script'), s = d.scripts[0];
\t\twf.src = 'https://cdn.jsdelivr.net/npm/webfontloader@1.6.28/webfontloader.min.js';
\t\twf.async = true;
\t\ts.parentNode.insertBefore(wf, s);
\t})(document);
</script>
";
        }
        // line 48
        echo "
<link href=\"";
        // line 49
        echo ($context["ROOT_PATH"] ?? null);
        echo "styles/prosilver/theme/stylesheet.css?assets_version=";
        echo ($context["T_ASSETS_VERSION"] ?? null);
        echo "\" rel=\"stylesheet\">
<link href=\"";
        // line 50
        echo ($context["T_FONT_AWESOME_LINK"] ?? null);
        echo "\" rel=\"stylesheet\">
<link href=\"";
        // line 51
        echo ($context["T_STYLESHEET_LINK"] ?? null);
        echo "\" rel=\"stylesheet\">
<link href=\"";
        // line 52
        echo ($context["ROOT_PATH"] ?? null);
        echo "styles/prosilver/theme/responsive.css?assets_version=";
        echo ($context["T_ASSETS_VERSION"] ?? null);
        echo "\" rel=\"stylesheet\">
<link href=\"";
        // line 53
        echo ($context["T_THEME_PATH"] ?? null);
        echo "/responsive.css?assets_version=";
        echo ($context["T_ASSETS_VERSION"] ?? null);
        echo "\" rel=\"stylesheet\">

";
        // line 55
        if (($context["S_COOKIE_NOTICE"] ?? null)) {
            // line 56
            echo "\t<link href=\"";
            echo ($context["T_ASSETS_PATH"] ?? null);
            echo "/cookieconsent/cookieconsent.min.css?assets_version=";
            echo ($context["T_ASSETS_VERSION"] ?? null);
            echo "\" rel=\"stylesheet\">
";
        }
        // line 58
        echo "
";
        // line 59
        if ((($context["S_CONTENT_DIRECTION"] ?? null) == "rtl")) {
            // line 60
            echo "\t<link href=\"";
            echo ($context["ROOT_PATH"] ?? null);
            echo "styles/prosilver/theme/bidi.css?assets_version=";
            echo ($context["T_ASSETS_VERSION"] ?? null);
            echo "\" rel=\"stylesheet\">
";
        }
        // line 62
        echo "
";
        // line 63
        if (($context["S_PLUPLOAD"] ?? null)) {
            // line 64
            echo "\t<link href=\"";
            echo ($context["ROOT_PATH"] ?? null);
            echo "styles/prosilver/theme/plupload.css?assets_version=";
            echo ($context["T_ASSETS_VERSION"] ?? null);
            echo "\" rel=\"stylesheet\">
";
        }
        // line 66
        echo "
<!--[if lte IE 9]>
\t<link href=\"";
        // line 68
        echo ($context["ROOT_PATH"] ?? null);
        echo "styles/prosilver/theme/tweaks.css?assets_version=";
        echo ($context["T_ASSETS_VERSION"] ?? null);
        echo "\" rel=\"stylesheet\">
<![endif]-->

";
        // line 71
        $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
        $this->env->setNamespaceLookUpOrder(array('spaceace_ajaxchat', '__main__'));
        $this->env->loadTemplate('@spaceace_ajaxchat/event/overall_header_head_append.html')->display($context);
        $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        // line 72
        echo "
";
        // line 73
        echo twig_get_attribute($this->env, $this->source, ($context["definition"] ?? null), "STYLESHEETS", [], "any", false, false, false, 73);
        echo "

";
        // line 75
        // line 76
        echo "
<!--[if lt IE 9]>
\t<script type=\"text/javascript\" src=\"";
        // line 78
        echo ($context["T_TEMPLATE_PATH"] ?? null);
        echo "/html5shiv.min.js\"></script>
<![endif]-->

</head>
<body id=\"phpbb\" class=\"nojs notouch section-";
        // line 82
        echo ($context["SCRIPT_NAME"] ?? null);
        echo " ";
        echo ($context["S_CONTENT_DIRECTION"] ?? null);
        echo " ";
        echo ($context["BODY_CLASS"] ?? null);
        if (($context["S_USER_LOGGED_IN"] ?? null)) {
            echo " logged-in";
        } else {
            echo " logged-out";
        }
        echo "\">

";
        // line 84
        // line 85
        echo "
<div id=\"wrap\" class=\"wrap\">
\t<a id=\"top\" class=\"top-anchor\" accesskey=\"t\"></a>

\t<div class=\"inventea-wrapper\">
\t\t<nav class=\"inventea-user-bar\">
\t\t\t";
        // line 91
        $location = "navbar_responsive_header.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("navbar_responsive_header.html", "overall_header.html", 91)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 92
        echo "
\t\t\t";
        // line 93
        // line 94
        echo "
\t\t\t<ul class=\"linklist bulletin inventea-user-menu\" role=\"menubar\">
\t\t\t\t";
        // line 96
        // line 97
        echo "
\t\t\t\t";
        // line 98
        if (($context["S_REGISTERED_USER"] ?? null)) {
            // line 99
            echo "\t\t\t\t\t";
            // line 100
            echo "\t\t\t\t\t<li id=\"username_logged_in\" class=\"rightside ";
            if (($context["CURRENT_USER_AVATAR"] ?? null)) {
                echo " no-bulletin";
            }
            echo "\" data-skip-responsive=\"true\">
\t\t\t\t\t\t";
            // line 101
            // line 102
            echo "\t\t\t\t\t\t<div class=\"header-profile dropdown-container\">
\t\t\t\t\t\t\t\t<a href=\"";
            // line 103
            echo ($context["U_PROFILE"] ?? null);
            echo "\" class=\"header-avatar dropdown-trigger\">";
            if (($context["CURRENT_USER_AVATAR"] ?? null)) {
                echo ($context["CURRENT_USER_AVATAR"] ?? null);
                echo " ";
            }
            echo " ";
            echo ($context["CURRENT_USERNAME_SIMPLE"] ?? null);
            echo "</a>
\t\t\t\t\t\t\t\t<div class=\"dropdown\">
\t\t\t\t\t\t\t\t<div class=\"pointer\"><div class=\"pointer-inner\"></div></div>
\t\t\t\t\t\t\t\t<ul class=\"dropdown-contents\" role=\"menu\">
\t\t\t\t\t\t\t\t";
            // line 107
            if (($context["U_RESTORE_PERMISSIONS"] ?? null)) {
                // line 108
                echo "\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"";
                // line 109
                echo ($context["U_RESTORE_PERMISSIONS"] ?? null);
                echo "\">
\t\t\t\t\t\t\t\t\t\t<i class=\"icon fa-refresh fa-fw\" aria-hidden=\"true\"></i><span>";
                // line 110
                echo $this->extensions['phpbb\template\twig\extension']->lang("RESTORE_PERMISSIONS");
                echo "</span>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t";
            }
            // line 114
            echo "
\t\t\t\t\t\t\t\t";
            // line 115
            // line 116
            echo "
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 118
            echo ($context["U_PROFILE"] ?? null);
            echo "\" title=\"";
            echo $this->extensions['phpbb\template\twig\extension']->lang("PROFILE");
            echo "\" role=\"menuitem\">
\t\t\t\t\t\t\t\t\t\t<i class=\"icon fa-sliders fa-fw\" aria-hidden=\"true\"></i><span>";
            // line 119
            echo $this->extensions['phpbb\template\twig\extension']->lang("PROFILE");
            echo "</span>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 123
            echo ($context["U_USER_PROFILE"] ?? null);
            echo "\" title=\"";
            echo $this->extensions['phpbb\template\twig\extension']->lang("READ_PROFILE");
            echo "\" role=\"menuitem\">
\t\t\t\t\t\t\t\t\t\t<i class=\"icon fa-user fa-fw\" aria-hidden=\"true\"></i><span>";
            // line 124
            echo $this->extensions['phpbb\template\twig\extension']->lang("READ_PROFILE");
            echo "</span>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t";
            // line 128
            // line 129
            echo "
\t\t\t\t\t\t\t\t\t<li class=\"separator\"></li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 132
            echo ($context["U_LOGIN_LOGOUT"] ?? null);
            echo "\" title=\"";
            echo $this->extensions['phpbb\template\twig\extension']->lang("LOGIN_LOGOUT");
            echo "\" accesskey=\"x\" role=\"menuitem\">
\t\t\t\t\t\t\t\t\t\t<i class=\"icon fa-power-off fa-fw\" aria-hidden=\"true\"></i><span>";
            // line 133
            echo $this->extensions['phpbb\template\twig\extension']->lang("LOGIN_LOGOUT");
            echo "</span>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
            // line 139
            // line 140
            echo "\t\t\t\t\t</li>
\t\t\t\t\t";
            // line 141
            if (($context["S_DISPLAY_PM"] ?? null)) {
                // line 142
                echo "\t\t\t\t\t\t<li class=\"small-icon icon-pm rightside\" data-skip-responsive=\"true\">
\t\t\t\t\t\t\t<a href=\"";
                // line 143
                echo ($context["U_PRIVATEMSGS"] ?? null);
                echo "\" role=\"menuitem\" id=\"private_message_text\">
\t\t\t\t\t\t\t\t<span>";
                // line 144
                echo $this->extensions['phpbb\template\twig\extension']->lang("PRIVATE_MESSAGES");
                echo " </span><strong class=\"badge";
                if ( !($context["PRIVATE_MESSAGE_COUNT"] ?? null)) {
                    echo " hidden";
                }
                echo "\">";
                echo ($context["PRIVATE_MESSAGE_COUNT"] ?? null);
                echo "</strong>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t";
            }
            // line 148
            echo "
\t\t\t\t\t";
            // line 149
            if (($context["S_NOTIFICATIONS_DISPLAY"] ?? null)) {
                // line 150
                echo "\t\t\t\t\t\t<li class=\"small-icon icon-notification dropdown-container dropdown-";
                echo ($context["S_CONTENT_FLOW_END"] ?? null);
                echo " rightside\" data-skip-responsive=\"true\">
\t\t\t\t\t\t\t<a href=\"";
                // line 151
                echo ($context["U_VIEW_ALL_NOTIFICATIONS"] ?? null);
                echo "\" id=\"notification_list_button\" class=\"dropdown-trigger\">
\t\t\t\t\t\t\t\t<span>";
                // line 152
                echo $this->extensions['phpbb\template\twig\extension']->lang("NOTIFICATIONS");
                echo " </span><strong class=\"badge";
                if ( !($context["NOTIFICATIONS_COUNT"] ?? null)) {
                    echo " hidden";
                }
                echo "\">";
                echo ($context["NOTIFICATIONS_COUNT"] ?? null);
                echo "</strong>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t";
                // line 154
                $location = "notification_dropdown.html";
                $namespace = false;
                if (strpos($location, '@') === 0) {
                    $namespace = substr($location, 1, strpos($location, '/') - 1);
                    $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                    $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
                }
                $this->loadTemplate("notification_dropdown.html", "overall_header.html", 154)->display($context);
                if ($namespace) {
                    $this->env->setNamespaceLookUpOrder($previous_look_up_order);
                }
                // line 155
                echo "\t\t\t\t\t\t</li>
\t\t\t\t\t";
            }
            // line 157
            echo "\t\t\t\t\t";
            // line 158
            echo "\t\t\t\t";
        } elseif ( !($context["S_IS_BOT"] ?? null)) {
            // line 159
            echo "\t\t\t\t\t<li class=\"small-icon icon-logout rightside\" data-skip-responsive=\"true\"><a href=\"";
            echo ($context["U_LOGIN_LOGOUT"] ?? null);
            echo "\" title=\"";
            echo $this->extensions['phpbb\template\twig\extension']->lang("LOGIN_LOGOUT");
            echo "\" accesskey=\"x\" role=\"menuitem\">";
            echo $this->extensions['phpbb\template\twig\extension']->lang("LOGIN_LOGOUT");
            echo "</a></li>
\t\t\t\t\t";
            // line 160
            if ((($context["S_REGISTER_ENABLED"] ?? null) &&  !(($context["S_SHOW_COPPA"] ?? null) || ($context["S_REGISTRATION"] ?? null)))) {
                // line 161
                echo "\t\t\t\t\t\t<li class=\"small-icon icon-register rightside\" data-skip-responsive=\"true\"><a href=\"";
                echo ($context["U_REGISTER"] ?? null);
                echo "\" role=\"menuitem\">";
                echo $this->extensions['phpbb\template\twig\extension']->lang("REGISTER");
                echo "</a></li>
\t\t\t\t\t";
            }
            // line 163
            echo "\t\t\t\t\t";
            // line 164
            echo "\t\t\t\t";
        }
        // line 165
        echo "
\t\t\t\t";
        // line 166
        if (($context["S_DISPLAY_SEARCH"] ?? null)) {
            // line 167
            echo "\t\t\t\t\t";
            if (($context["S_USER_LOGGED_IN"] ?? null)) {
                echo "<li class=\"small-icon rightside responsive-hide\" data-skip-responsive=\"true\"><a href=\"";
                echo ($context["U_SEARCH_NEW"] ?? null);
                echo "\" role=\"menuitem\">";
                echo $this->extensions['phpbb\template\twig\extension']->lang("SEARCH_NEW");
                echo "</a></li>";
            }
            // line 168
            echo "\t\t\t\t\t";
            if (($context["S_LOAD_UNREADS"] ?? null)) {
                echo "<li class=\"small-icon rightside responsive-hide\" data-skip-responsive=\"true\"><a href=\"";
                echo ($context["U_SEARCH_UNREAD"] ?? null);
                echo "\" role=\"menuitem\">";
                echo $this->extensions['phpbb\template\twig\extension']->lang("SEARCH_UNREAD");
                echo "</a></li>";
            }
            // line 169
            echo "\t\t\t\t\t";
            if (($context["S_REGISTERED_USER"] ?? null)) {
                echo "<li class=\"small-icon rightside responsive-hide\" data-skip-responsive=\"true\"><a href=\"";
                echo ($context["U_SEARCH_SELF"] ?? null);
                echo "\" role=\"menuitem\">";
                echo $this->extensions['phpbb\template\twig\extension']->lang("SEARCH_SELF");
                echo "</a></li>";
            }
            // line 170
            echo "\t\t\t\t";
        }
        // line 171
        echo "
\t\t\t\t";
        // line 172
        $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
        $this->env->setNamespaceLookUpOrder(array('spaceace_ajaxchat', '__main__'));
        $this->env->loadTemplate('@spaceace_ajaxchat/event/navbar_header_quick_links_after.html')->display($context);
        $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        // line 173
        echo "
\t\t\t</ul>
\t\t\t";
        // line 175
        // line 176
        echo "\t\t</nav>
\t</div>

\t<header class=\"inventea-header\">
\t\t<div class=\"inventea-dashboard\" role=\"banner\">
\t\t";
        // line 181
        echo "\t\t
\t\t\t<div class=\"inventea-sitename\">
\t\t\t\t<h1><a href=\"";
        // line 183
        if (($context["U_SITE_HOME"] ?? null)) {
            echo ($context["U_SITE_HOME"] ?? null);
        } else {
            echo ($context["U_INDEX"] ?? null);
        }
        echo "\" title=\"";
        if (($context["U_SITE_HOME"] ?? null)) {
            echo $this->extensions['phpbb\template\twig\extension']->lang("SITE_HOME");
        } else {
            echo $this->extensions['phpbb\template\twig\extension']->lang("INDEX");
        }
        echo "\">";
        echo ($context["SITENAME"] ?? null);
        echo "</a></h1>
\t\t\t\t<span>";
        // line 184
        echo ($context["SITE_DESCRIPTION"] ?? null);
        echo "</span>
\t\t\t</div>
\t\t";
        // line 186
        // line 187
        echo "\t\t</div>
\t</header>

\t<div class=\"inventea-wrapper\">
\t\t<div class=\"inventea-forum-bar\">
\t\t\t";
        // line 192
        $location = "navbar_header.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("navbar_header.html", "overall_header.html", 192)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 193
        echo "\t\t</div>

\t\t<div class=\"inventea-content page-body\" role=\"main\">
\t\t\t";
        // line 196
        // line 197
        echo "
\t\t\t<ul id=\"nav-breadcrumbs\" class=\"nav-breadcrumbs linklist navlinks\" role=\"menubar\">
\t\t\t\t";
        // line 199
        $context["MICRODATA"] = "itemtype=\"https://schema.org/ListItem\" itemprop=\"itemListElement\" itemscope";
        // line 200
        echo "\t\t\t\t";
        $context["navlink_position"] = 1;
        // line 201
        echo "\t\t\t\t";
        // line 202
        echo "
\t\t\t\t<li class=\"inventea-breadcrumbs\" itemscope itemtype=\"https://schema.org/BreadcrumbList\">

\t\t\t\t";
        // line 205
        if (($context["U_SITE_HOME"] ?? null)) {
            // line 206
            echo "\t\t\t\t\t<span class=\"crumb\" ";
            echo ($context["MICRODATA"] ?? null);
            echo "><a itemprop=\"item\" href=\"";
            echo ($context["U_SITE_HOME"] ?? null);
            echo "\" data-navbar-reference=\"home\"><i class=\"icon fa-home fa-fw\" aria-hidden=\"true\"></i><span itemprop=\"name\">";
            echo ($context["L_SITE_HOME"] ?? null);
            echo "</span></a><meta itemprop=\"position\" content=\"";
            echo ($context["navlink_position"] ?? null);
            $context["navlink_position"] = (($context["navlink_position"] ?? null) + 1);
            echo "\" /></span>
\t\t\t\t";
        }
        // line 208
        echo "
\t\t\t\t";
        // line 209
        // line 210
        echo "\t\t\t\t\t<span class=\"crumb\" ";
        echo ($context["MICRODATA"] ?? null);
        echo "><a itemprop=\"item\" href=\"";
        echo ($context["U_INDEX"] ?? null);
        echo "\" accesskey=\"h\" data-navbar-reference=\"index\">";
        if ( !($context["U_SITE_HOME"] ?? null)) {
            echo "<i class=\"icon fa-home fa-fw\"></i>";
        }
        echo "<span itemprop=\"name\">";
        echo ($context["L_INDEX"] ?? null);
        echo "</span></a><meta itemprop=\"position\" content=\"";
        echo ($context["navlink_position"] ?? null);
        $context["navlink_position"] = (($context["navlink_position"] ?? null) + 1);
        echo "\" /></span>

\t\t\t\t";
        // line 212
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["navlinks"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["navlink"]) {
            // line 213
            echo "\t\t\t\t\t";
            $context["NAVLINK_NAME"] = ((twig_get_attribute($this->env, $this->source, $context["navlink"], "BREADCRUMB_NAME", [], "any", true, true, false, 213)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["navlink"], "BREADCRUMB_NAME", [], "any", false, false, false, 213), twig_get_attribute($this->env, $this->source, $context["navlink"], "FORUM_NAME", [], "any", false, false, false, 213))) : (twig_get_attribute($this->env, $this->source, $context["navlink"], "FORUM_NAME", [], "any", false, false, false, 213)));
            // line 214
            echo "\t\t\t\t\t";
            $context["NAVLINK_LINK"] = ((twig_get_attribute($this->env, $this->source, $context["navlink"], "U_BREADCRUMB", [], "any", true, true, false, 214)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["navlink"], "U_BREADCRUMB", [], "any", false, false, false, 214), twig_get_attribute($this->env, $this->source, $context["navlink"], "U_VIEW_FORUM", [], "any", false, false, false, 214))) : (twig_get_attribute($this->env, $this->source, $context["navlink"], "U_VIEW_FORUM", [], "any", false, false, false, 214)));
            // line 215
            echo "
\t\t\t\t\t";
            // line 216
            // line 217
            echo "\t\t\t\t\t<span class=\"crumb\" ";
            echo ($context["MICRODATA"] ?? null);
            if (twig_get_attribute($this->env, $this->source, $context["navlink"], "MICRODATA", [], "any", false, false, false, 217)) {
                echo " ";
                echo twig_get_attribute($this->env, $this->source, $context["navlink"], "MICRODATA", [], "any", false, false, false, 217);
            }
            echo "><a itemprop=\"item\" href=\"";
            echo ($context["NAVLINK_LINK"] ?? null);
            echo "\"><span itemprop=\"name\">";
            echo ($context["NAVLINK_NAME"] ?? null);
            echo "</span></a><meta itemprop=\"position\" content=\"";
            echo ($context["navlink_position"] ?? null);
            $context["navlink_position"] = (($context["navlink_position"] ?? null) + 1);
            echo "\" /></span>
\t\t\t\t\t";
            // line 218
            // line 219
            echo "\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['navlink'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 220
        echo "
\t\t\t\t";
        // line 221
        // line 222
        echo "\t\t\t\t</li>
\t\t\t</ul>

\t\t\t";
        // line 225
        if (((($context["S_BOARD_DISABLED"] ?? null) && ($context["S_USER_LOGGED_IN"] ?? null)) && (($context["U_MCP"] ?? null) || ($context["U_ACP"] ?? null)))) {
            // line 226
            echo "\t\t\t\t<div id=\"information\" class=\"rules\">
\t\t\t\t\t<div class=\"inner\">
\t\t\t\t\t\t<strong>";
            // line 228
            echo $this->extensions['phpbb\template\twig\extension']->lang("INFORMATION");
            echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
            echo "</strong> ";
            echo $this->extensions['phpbb\template\twig\extension']->lang("BOARD_DISABLED");
            echo "
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t";
        }
        // line 232
        echo "
\t\t\t";
        // line 233
    }

    public function getTemplateName()
    {
        return "overall_header.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  774 => 233,  771 => 232,  761 => 228,  757 => 226,  755 => 225,  750 => 222,  749 => 221,  746 => 220,  740 => 219,  739 => 218,  723 => 217,  722 => 216,  719 => 215,  716 => 214,  713 => 213,  709 => 212,  692 => 210,  691 => 209,  688 => 208,  675 => 206,  673 => 205,  668 => 202,  666 => 201,  663 => 200,  661 => 199,  657 => 197,  656 => 196,  651 => 193,  639 => 192,  632 => 187,  631 => 186,  626 => 184,  610 => 183,  606 => 181,  599 => 176,  598 => 175,  594 => 173,  589 => 172,  586 => 171,  583 => 170,  574 => 169,  565 => 168,  556 => 167,  554 => 166,  551 => 165,  548 => 164,  546 => 163,  538 => 161,  536 => 160,  527 => 159,  524 => 158,  522 => 157,  518 => 155,  506 => 154,  495 => 152,  491 => 151,  486 => 150,  484 => 149,  481 => 148,  468 => 144,  464 => 143,  461 => 142,  459 => 141,  456 => 140,  455 => 139,  446 => 133,  440 => 132,  435 => 129,  434 => 128,  427 => 124,  421 => 123,  414 => 119,  408 => 118,  404 => 116,  403 => 115,  400 => 114,  393 => 110,  389 => 109,  386 => 108,  384 => 107,  370 => 103,  367 => 102,  366 => 101,  359 => 100,  357 => 99,  355 => 98,  352 => 97,  351 => 96,  347 => 94,  346 => 93,  343 => 92,  331 => 91,  323 => 85,  322 => 84,  308 => 82,  301 => 78,  297 => 76,  296 => 75,  291 => 73,  288 => 72,  283 => 71,  275 => 68,  271 => 66,  263 => 64,  261 => 63,  258 => 62,  250 => 60,  248 => 59,  245 => 58,  237 => 56,  235 => 55,  228 => 53,  222 => 52,  218 => 51,  214 => 50,  208 => 49,  205 => 48,  188 => 33,  186 => 32,  176 => 24,  170 => 22,  168 => 21,  165 => 20,  162 => 18,  149 => 17,  136 => 16,  125 => 15,  114 => 14,  103 => 13,  92 => 12,  81 => 11,  79 => 10,  54 => 8,  50 => 7,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "overall_header.html", "");
    }
}
