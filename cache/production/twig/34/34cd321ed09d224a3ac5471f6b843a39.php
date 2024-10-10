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

/* inventea_widgets.html */
class __TwigTemplate_11d638f3ae80f84a1de72c9b41afd478 extends \Twig\Template
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
        echo "\t\t<div class=\"inventea-widgets-wrapper\">
\t\t\t";
        // line 2
        if (($context["S_ENABLE_FEEDS"] ?? null)) {
            // line 3
            echo "\t\t\t\t<div class=\"inventea-widget inventea-list-widget\">
\t\t\t\t\t<h4 class=\"inventea-widget-title\">";
            // line 4
            echo $this->extensions['phpbb\template\twig\extension']->lang("FEED");
            echo "</h4>

\t\t\t\t\t<ul class=\"inventea-widget-links\">
\t\t\t\t\t\t";
            // line 7
            if (($context["S_ENABLE_FEEDS_OVERALL"] ?? null)) {
                echo "<li class=\"inventea-widget-links-item\"><i class=\"icon fa fa-rss fa-fw\"></i><a href=\"";
                echo $this->extensions['phpbb\template\twig\extension\routing']->getPath("phpbb_feed_index");
                echo "\" title=\"";
                echo $this->extensions['phpbb\template\twig\extension']->lang("FEED");
                echo " - ";
                echo ($context["SITENAME"] ?? null);
                echo "\">";
                echo ($context["SITENAME"] ?? null);
                echo "</a></li>";
            }
            // line 8
            echo "\t\t\t\t\t\t";
            if (($context["S_ENABLE_FEEDS_NEWS"] ?? null)) {
                echo "<li class=\"inventea-widget-links-item\"><i class=\"icon fa fa-rss fa-fw\"></i><a href=\"";
                echo $this->extensions['phpbb\template\twig\extension\routing']->getPath("phpbb_feed_news");
                echo "\" title=\"";
                echo $this->extensions['phpbb\template\twig\extension']->lang("FEED");
                echo " - ";
                echo $this->extensions['phpbb\template\twig\extension']->lang("FEED_NEWS");
                echo "\">";
                echo $this->extensions['phpbb\template\twig\extension']->lang("FEED_NEWS");
                echo "</a></li>";
            }
            // line 9
            echo "\t\t\t\t\t\t";
            if (($context["S_ENABLE_FEEDS_FORUMS"] ?? null)) {
                echo "<li class=\"inventea-widget-links-item\"><i class=\"icon fa fa-rss fa-fw\"></i><a href=\"";
                echo $this->extensions['phpbb\template\twig\extension\routing']->getPath("phpbb_feed_forums");
                echo "\" title=\"";
                echo $this->extensions['phpbb\template\twig\extension']->lang("FEED");
                echo " - ";
                echo $this->extensions['phpbb\template\twig\extension']->lang("ALL_FORUMS");
                echo "\">";
                echo $this->extensions['phpbb\template\twig\extension']->lang("ALL_FORUMS");
                echo "</a></li>";
            }
            // line 10
            echo "\t\t\t\t\t\t";
            if (($context["S_ENABLE_FEEDS_TOPICS"] ?? null)) {
                echo "<li class=\"inventea-widget-links-item\"><i class=\"icon fa fa-rss fa-fw\"></i><a href=\"";
                echo $this->extensions['phpbb\template\twig\extension\routing']->getPath("phpbb_feed_topics");
                echo "\" title=\"";
                echo $this->extensions['phpbb\template\twig\extension']->lang("FEED");
                echo " - ";
                echo $this->extensions['phpbb\template\twig\extension']->lang("FEED_TOPICS_NEW");
                echo "\">";
                echo $this->extensions['phpbb\template\twig\extension']->lang("FEED_TOPICS_NEW");
                echo "</a></li>";
            }
            // line 11
            echo "\t\t\t\t\t\t";
            if (($context["S_ENABLE_FEEDS_TOPICS_ACTIVE"] ?? null)) {
                echo "<li class=\"inventea-widget-links-item\"><i class=\"icon fa fa-rss fa-fw\"></i><a href=\"";
                echo $this->extensions['phpbb\template\twig\extension\routing']->getPath("phpbb_feed_topics_active");
                echo "\" title=\"";
                echo $this->extensions['phpbb\template\twig\extension']->lang("FEED");
                echo " - ";
                echo $this->extensions['phpbb\template\twig\extension']->lang("FEED_TOPICS_ACTIVE");
                echo "\">";
                echo $this->extensions['phpbb\template\twig\extension']->lang("FEED_TOPICS_ACTIVE");
                echo "</a></li>";
            }
            // line 12
            echo "\t\t\t\t\t\t";
            if ((($context["S_ENABLE_FEEDS_FORUM"] ?? null) && ($context["S_FORUM_ID"] ?? null))) {
                echo "<li class=\"inventea-widget-links-item\"><i class=\"icon fa fa-rss fa-fw\"></i><a href=\"";
                echo $this->extensions['phpbb\template\twig\extension\routing']->getPath("phpbb_feed_forum", ["forum_id" => ($context["S_FORUM_ID"] ?? null)]);
                echo "\" title=\"";
                echo $this->extensions['phpbb\template\twig\extension']->lang("FEED");
                echo " - ";
                echo $this->extensions['phpbb\template\twig\extension']->lang("FORUM");
                echo " - ";
                echo ($context["FORUM_NAME"] ?? null);
                echo "\">";
                echo $this->extensions['phpbb\template\twig\extension']->lang("FORUM");
                echo " - ";
                echo ($context["FORUM_NAME"] ?? null);
                echo "</a></li>";
            }
            // line 13
            echo "\t\t\t\t\t\t";
            if ((($context["S_ENABLE_FEEDS_TOPIC"] ?? null) && ($context["S_TOPIC_ID"] ?? null))) {
                echo "<li class=\"inventea-widget-links-item\"><i class=\"icon fa fa-rss fa-fw\"></i><a href=\"";
                echo $this->extensions['phpbb\template\twig\extension\routing']->getPath("phpbb_feed_topic", ["topic_id" => ($context["S_TOPIC_ID"] ?? null)]);
                echo "\" title=\"";
                echo $this->extensions['phpbb\template\twig\extension']->lang("FEED");
                echo " - ";
                echo $this->extensions['phpbb\template\twig\extension']->lang("TOPIC");
                echo " - ";
                echo ($context["TOPIC_TITLE"] ?? null);
                echo "\">";
                echo $this->extensions['phpbb\template\twig\extension']->lang("TOPIC");
                echo " - ";
                echo ($context["TOPIC_TITLE"] ?? null);
                echo "</a></li>";
            }
            // line 14
            echo "\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t";
        }
        // line 17
        echo "
\t\t\t<div class=\"inventea-widget inventea-list-widget\">
\t\t\t\t<h4 class=\"inventea-widget-title\">";
        // line 19
        echo $this->extensions['phpbb\template\twig\extension']->lang("GOTO_PAGE");
        echo "</h4>

\t\t\t\t<ul class=\"inventea-widget-links\">
\t\t\t\t\t";
        // line 22
        if ((($context["U_WATCH_FORUM_LINK"] ?? null) &&  !($context["S_IS_BOT"] ?? null))) {
            echo "<li class=\"inventea-widget-links-item\"><i class=\"icon fa fa-star fa-fw\"></i><a href=\"";
            echo ($context["U_WATCH_FORUM_LINK"] ?? null);
            echo "\" title=\"";
            echo ($context["S_WATCH_FORUM_TITLE"] ?? null);
            echo "\" data-ajax=\"toggle_link\" data-toggle-text=\"";
            echo ($context["S_WATCH_FORUM_TOGGLE"] ?? null);
            echo "\" data-toggle-url=\"";
            echo ($context["U_WATCH_FORUM_TOGGLE"] ?? null);
            echo "\">";
            echo ($context["S_WATCH_FORUM_TITLE"] ?? null);
            echo "</a></li>";
        }
        // line 23
        echo "\t\t\t\t\t";
        if (($context["S_DISPLAY_SEARCH"] ?? null)) {
            echo "<li class=\"inventea-widget-links-item\"><i class=\"icon fa fa-search fa-fw\"></i><a href=\"";
            echo ($context["U_SEARCH"] ?? null);
            echo "\" title=\"";
            echo $this->extensions['phpbb\template\twig\extension']->lang("SEARCH");
            echo "\">";
            echo $this->extensions['phpbb\template\twig\extension']->lang("SEARCH_ADV");
            echo "</a></li>";
        }
        // line 24
        echo "\t\t\t\t\t";
        if (($context["S_REGISTERED_USER"] ?? null)) {
            echo "<li class=\"inventea-widget-links-item\"><i class=\"icon fa fa-user fa-fw\"></i><a href=\"";
            echo ($context["U_PROFILE"] ?? null);
            echo "\" title=\"";
            echo $this->extensions['phpbb\template\twig\extension']->lang("PROFILE");
            echo "\">";
            echo $this->extensions['phpbb\template\twig\extension']->lang("PROFILE");
            echo "</a></li>";
        }
        // line 25
        echo "\t\t\t\t\t";
        if (($context["U_MCP"] ?? null)) {
            echo "<li class=\"inventea-widget-links-item\"><i class=\"icon fa fa-tachometer fa-fw\"></i><a href=\"";
            echo ($context["U_MCP"] ?? null);
            echo "\" title=\"";
            echo $this->extensions['phpbb\template\twig\extension']->lang("MCP");
            echo "\">";
            echo $this->extensions['phpbb\template\twig\extension']->lang("MCP");
            echo "</a></li>";
        }
        // line 26
        echo "\t\t\t\t\t";
        if (($context["U_ACP"] ?? null)) {
            echo "<li class=\"inventea-widget-links-item\"><i class=\"icon fa fa-cog fa-fw\"></i><a class=\"footer-link text-strong\" href=\"";
            echo ($context["U_ACP"] ?? null);
            echo "\">";
            echo $this->extensions['phpbb\template\twig\extension']->lang("ACP");
            echo "</a></li>";
        }
        // line 27
        echo "\t\t\t\t\t";
        if (($context["U_CONTACT_US"] ?? null)) {
            echo "<li class=\"inventea-widget-links-item\"><i class=\"icon fa fa-envelope fa-fw\"></i><a href=\"";
            echo ($context["U_CONTACT_US"] ?? null);
            echo "\">";
            echo $this->extensions['phpbb\template\twig\extension']->lang("CONTACT_US");
            echo "</a></li>";
        }
        // line 28
        echo "\t\t\t\t\t";
        if ( !($context["S_IS_BOT"] ?? null)) {
            echo "<li class=\"inventea-widget-links-item\"><i class=\"icon fa fa-trash fa-fw\"></i><a href=\"";
            echo ($context["U_DELETE_COOKIES"] ?? null);
            echo "\" data-ajax=\"true\" data-refresh=\"true\">";
            echo $this->extensions['phpbb\template\twig\extension']->lang("DELETE_COOKIES");
            echo "</a></li>";
        }
        // line 29
        echo "\t\t\t\t\t<li class=\"inventea-widget-links-item\"><i class=\"icon fa fa-clock-o fa-fw\"></i>";
        echo ($context["S_TIMEZONE"] ?? null);
        echo "</li>
\t\t\t\t</ul>
\t\t\t</div>

\t\t\t<!--
\t\t\tShort description about your website or project. If you don't like to display
\t\t\tthis widget, just remove the whole <div> (lines 46-63) or comment it.
\t\t\tFeel free to modify the social buttons below. For more icons visit:
\t\t\thttp://fortawesome.github.io/Font-Awesome/icons/#brand
\t\t\t-->
\t\t\t<div class=\"inventea-widget inventea-text-widget\">
\t\t\t\t<h4 class=\"inventea-widget-title\">About us</h4>

\t\t\t\t<p>Welcome to the official Gemma Hayes forum. This is a place where you can discuss all things Gemma Hayes, music, and more.
\t\t\t\tDon't be shy, come and join the conversation!
\t\t\t\tFind out more about Gemma Hayes on her official website, Twitter, Facebook, and Instagram. Links below.</p>

\t\t\t\t<ul class=\"inventea-social-icons\">
\t\t\t\t\t<li class=\"inventea-social-icons-item\"><a href=\"https://gemmahayes.com\"><i class=\"fa fa-globe\"></i></a></li>
\t\t\t\t\t<li class=\"inventea-social-icons-item\"><a href=\"https://twitter.com/Gemma_Hayes\"><i class=\"fa fa-twitter\"></i></a></li>
\t\t\t\t\t<li class=\"inventea-social-icons-item\"><a href=\"https://www.facebook.com/gemmahayesmusic\"><i class=\"fa fa-facebook\"></i></a></li>
\t\t\t\t\t<li class=\"inventea-social-icons-item\"><a href=\"https://www.instagram.com/gemmahayesofficial/\"><i class=\"fa fa-instagram\"></i></a></li>
\t\t\t\t</ul>
\t\t\t</div>
\t\t</div>";
    }

    public function getTemplateName()
    {
        return "inventea_widgets.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  238 => 29,  229 => 28,  220 => 27,  211 => 26,  200 => 25,  189 => 24,  178 => 23,  164 => 22,  158 => 19,  154 => 17,  149 => 14,  132 => 13,  115 => 12,  102 => 11,  89 => 10,  76 => 9,  63 => 8,  51 => 7,  45 => 4,  42 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "inventea_widgets.html", "");
    }
}
