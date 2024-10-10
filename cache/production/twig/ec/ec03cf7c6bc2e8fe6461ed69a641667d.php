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

/* search_results.html */
class __TwigTemplate_234a858772902bceea2bc76d7a52a7c5 extends \Twig\Template
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
        $this->loadTemplate("overall_header.html", "search_results.html", 1)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 2
        echo "
";
        // line 3
        // line 4
        echo "
<h2 class=\"searchresults-title\">";
        // line 5
        if (($context["SEARCH_TITLE"] ?? null)) {
            echo ($context["SEARCH_TITLE"] ?? null);
        } else {
            echo ($context["SEARCH_MATCHES"] ?? null);
        }
        if (($context["SEARCH_WORDS"] ?? null)) {
            echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
            echo " <a href=\"";
            echo ($context["U_SEARCH_WORDS"] ?? null);
            echo "\">";
            echo ($context["SEARCH_WORDS"] ?? null);
            echo "</a>";
        }
        echo "</h2>
";
        // line 6
        if (($context["SEARCHED_QUERY"] ?? null)) {
            echo " <p>";
            echo $this->extensions['phpbb\template\twig\extension']->lang("SEARCHED_QUERY");
            echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
            echo " <strong>";
            echo ($context["SEARCHED_QUERY"] ?? null);
            echo "</strong></p>";
        }
        // line 7
        if (($context["IGNORED_WORDS"] ?? null)) {
            echo " <p>";
            echo $this->extensions['phpbb\template\twig\extension']->lang("IGNORED_TERMS");
            echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
            echo " <strong>";
            echo ($context["IGNORED_WORDS"] ?? null);
            echo "</strong></p>";
        }
        // line 8
        if (($context["PHRASE_SEARCH_DISABLED"] ?? null)) {
            echo " <p><strong>";
            echo $this->extensions['phpbb\template\twig\extension']->lang("PHRASE_SEARCH_DISABLED");
            echo "</strong></p>";
        }
        // line 9
        echo "
";
        // line 10
        if (($context["SEARCH_TOPIC"] ?? null)) {
            // line 11
            echo "\t<p class=\"return-link\">
\t\t<a class=\"arrow-";
            // line 12
            echo ($context["S_CONTENT_FLOW_BEGIN"] ?? null);
            echo "\" href=\"";
            echo ($context["U_SEARCH_TOPIC"] ?? null);
            echo "\">
\t\t\t<i class=\"icon fa-angle-";
            // line 13
            echo ($context["S_CONTENT_FLOW_BEGIN"] ?? null);
            echo " fa-fw icon-black\" aria-hidden=\"true\"></i><span>";
            echo $this->extensions['phpbb\template\twig\extension']->lang("RETURN_TO_TOPIC");
            echo "</span>
\t\t</a>
\t</p>
";
        } else {
            // line 17
            echo "\t<p class=\"advanced-search-link\">
\t\t<a class=\"arrow-";
            // line 18
            echo ($context["S_CONTENT_FLOW_BEGIN"] ?? null);
            echo "\" href=\"";
            echo ($context["U_SEARCH"] ?? null);
            echo "\" title=\"";
            echo $this->extensions['phpbb\template\twig\extension']->lang("SEARCH_ADV");
            echo "\">
\t\t\t<i class=\"icon fa-angle-";
            // line 19
            echo ($context["S_CONTENT_FLOW_BEGIN"] ?? null);
            echo " fa-fw icon-black\" aria-hidden=\"true\"></i><span>";
            echo $this->extensions['phpbb\template\twig\extension']->lang("GO_TO_SEARCH_ADV");
            echo "</span>
\t\t</a>
\t</p>
";
        }
        // line 23
        echo "
";
        // line 24
        // line 25
        echo "
";
        // line 26
        if ((((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "pagination", [], "any", false, false, false, 26)) || ($context["SEARCH_MATCHES"] ?? null)) || ($context["TOTAL_MATCHES"] ?? null)) || ($context["PAGE_NUMBER"] ?? null))) {
            // line 27
            echo "\t<div class=\"action-bar bar-top\">

\t";
            // line 29
            if ((($context["TOTAL_MATCHES"] ?? null) > 0)) {
                // line 30
                echo "\t\t<div class=\"search-box\" role=\"search\">
\t\t\t<form method=\"post\" action=\"";
                // line 31
                echo ($context["S_SEARCH_ACTION"] ?? null);
                echo "\">
\t\t\t<fieldset>
\t\t\t\t<input class=\"inputbox search tiny\" type=\"search\" name=\"add_keywords\" id=\"add_keywords\" value=\"\" placeholder=\"";
                // line 33
                echo $this->extensions['phpbb\template\twig\extension']->lang("SEARCH_IN_RESULTS");
                echo "\" />
\t\t\t\t<button class=\"button button-search\" type=\"submit\" title=\"";
                // line 34
                echo $this->extensions['phpbb\template\twig\extension']->lang("SEARCH");
                echo "\">
\t\t\t\t\t<i class=\"icon fa-search fa-fw\" aria-hidden=\"true\"></i><span class=\"sr-only\">";
                // line 35
                echo $this->extensions['phpbb\template\twig\extension']->lang("SEARCH");
                echo "</span>
\t\t\t\t</button>
\t\t\t\t<a href=\"";
                // line 37
                echo ($context["U_SEARCH"] ?? null);
                echo "\" class=\"button button-search-end\" title=\"";
                echo $this->extensions['phpbb\template\twig\extension']->lang("SEARCH_ADV");
                echo "\">
\t\t\t\t\t<i class=\"icon fa-cog fa-fw\" aria-hidden=\"true\"></i><span class=\"sr-only\">";
                // line 38
                echo $this->extensions['phpbb\template\twig\extension']->lang("SEARCH_ADV");
                echo "</span>
\t\t\t\t</a>
\t\t\t</fieldset>
\t\t\t</form>
\t\t</div>
\t";
            }
            // line 44
            echo "
\t\t";
            // line 45
            // line 46
            echo "
\t\t<div class=\"pagination\">
\t\t\t";
            // line 48
            if (($context["U_MARK_ALL_READ"] ?? null)) {
                echo "<a href=\"";
                echo ($context["U_MARK_ALL_READ"] ?? null);
                echo "\" class=\"mark-read\" accesskey=\"m\">";
                echo $this->extensions['phpbb\template\twig\extension']->lang("MARK_ALL_READ");
                echo "</a> &bull;";
            }
            // line 49
            echo "\t\t\t";
            echo ($context["SEARCH_MATCHES"] ?? null);
            echo "
\t\t\t";
            // line 50
            if (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "pagination", [], "any", false, false, false, 50))) {
                // line 51
                echo "\t\t\t\t";
                $location = "pagination.html";
                $namespace = false;
                if (strpos($location, '@') === 0) {
                    $namespace = substr($location, 1, strpos($location, '/') - 1);
                    $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                    $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
                }
                $this->loadTemplate("pagination.html", "search_results.html", 51)->display($context);
                if ($namespace) {
                    $this->env->setNamespaceLookUpOrder($previous_look_up_order);
                }
                // line 52
                echo "\t\t\t";
            } else {
                // line 53
                echo "\t\t\t\t &bull; ";
                echo ($context["PAGE_NUMBER"] ?? null);
                echo "
\t\t\t";
            }
            // line 55
            echo "\t\t</div>
\t</div>
";
        }
        // line 58
        echo "
";
        // line 59
        if (($context["S_SHOW_TOPICS"] ?? null)) {
            // line 60
            echo "
\t";
            // line 61
            if (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "searchresults", [], "any", false, false, false, 61))) {
                // line 62
                echo "\t<div class=\"forumbg\">

\t\t<div class=\"inner\">
\t\t<ul class=\"topiclist\">
\t\t\t<li class=\"header\">
\t\t\t\t<dl class=\"row-item\">
\t\t\t\t\t<dt><div class=\"list-inner\">";
                // line 68
                echo $this->extensions['phpbb\template\twig\extension']->lang("TOPICS");
                echo "</div></dt>
\t\t\t\t\t<dd class=\"posts\">";
                // line 69
                echo $this->extensions['phpbb\template\twig\extension']->lang("STATISTICS");
                echo "</dd>
\t\t\t\t\t<dd class=\"lastpost\"><span>";
                // line 70
                echo $this->extensions['phpbb\template\twig\extension']->lang("LAST_POST");
                echo "</span></dd>
\t\t\t\t\t";
                // line 71
                // line 72
                echo "\t\t\t\t</dl>
\t\t\t</li>
\t\t</ul>
\t\t<ul class=\"topiclist topics\">

\t\t";
                // line 77
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "searchresults", [], "any", false, false, false, 77));
                foreach ($context['_seq'] as $context["_key"] => $context["searchresults"]) {
                    // line 78
                    echo "\t\t\t";
                    // line 79
                    echo "\t\t\t<li class=\"row";
                    if ((twig_get_attribute($this->env, $this->source, $context["searchresults"], "S_ROW_COUNT", [], "any", false, false, false, 79) % 2 == 0)) {
                        echo " bg1";
                    } else {
                        echo " bg2";
                    }
                    echo "\">
\t\t\t\t<dl title=\"";
                    // line 80
                    echo twig_get_attribute($this->env, $this->source, $context["searchresults"], "TOPIC_FOLDER_IMG_ALT", [], "any", false, false, false, 80);
                    echo "\">
\t\t\t\t\t<dt class=\"icon ";
                    // line 81
                    echo twig_get_attribute($this->env, $this->source, $context["searchresults"], "TOPIC_IMG_STYLE", [], "any", false, false, false, 81);
                    echo "\">";
                    if (twig_get_attribute($this->env, $this->source, $context["searchresults"], "TOPIC_ICON_IMG", [], "any", false, false, false, 81)) {
                        echo "<img src=\"";
                        echo ($context["T_ICONS_PATH"] ?? null);
                        echo twig_get_attribute($this->env, $this->source, $context["searchresults"], "TOPIC_ICON_IMG", [], "any", false, false, false, 81);
                        echo "\" alt=\"\" title=\"\" />";
                    }
                    echo "</dt>
\t\t\t\t\t<dd>
\t\t\t\t\t\t";
                    // line 83
                    if ((twig_get_attribute($this->env, $this->source, $context["searchresults"], "S_UNREAD_TOPIC", [], "any", false, false, false, 83) &&  !($context["S_IS_BOT"] ?? null))) {
                        echo "<a href=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["searchresults"], "U_NEWEST_POST", [], "any", false, false, false, 83);
                        echo "\" class=\"row-item-link\"></a>";
                    }
                    // line 84
                    echo "\t\t\t\t\t\t<div class=\"list-inner\">

\t\t\t\t\t\t\t";
                    // line 86
                    // line 87
                    echo "\t\t\t\t\t\t\t";
                    if ((twig_get_attribute($this->env, $this->source, $context["searchresults"], "S_UNREAD_TOPIC", [], "any", false, false, false, 87) &&  !($context["S_IS_BOT"] ?? null))) {
                        // line 88
                        echo "\t\t\t\t\t\t\t\t<a class=\"unread\" href=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["searchresults"], "U_NEWEST_POST", [], "any", false, false, false, 88);
                        echo "\">
\t\t\t\t\t\t\t\t\t<i class=\"icon fa-file fa-fw icon-red icon-md\" aria-hidden=\"true\"></i><span class=\"sr-only\">";
                        // line 89
                        echo $this->extensions['phpbb\template\twig\extension']->lang("NEW_POST");
                        echo "</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t";
                    }
                    // line 92
                    echo "\t\t\t\t\t\t\t<a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["searchresults"], "U_VIEW_TOPIC", [], "any", false, false, false, 92);
                    echo "\" class=\"topictitle\">";
                    echo twig_get_attribute($this->env, $this->source, $context["searchresults"], "TOPIC_TITLE", [], "any", false, false, false, 92);
                    echo "</a>
\t\t\t\t\t\t\t";
                    // line 93
                    if ((twig_get_attribute($this->env, $this->source, $context["searchresults"], "S_TOPIC_UNAPPROVED", [], "any", false, false, false, 93) || twig_get_attribute($this->env, $this->source, $context["searchresults"], "S_POSTS_UNAPPROVED", [], "any", false, false, false, 93))) {
                        // line 94
                        echo "\t\t\t\t\t\t\t\t<a href=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["searchresults"], "U_MCP_QUEUE", [], "any", false, false, false, 94);
                        echo "\" title=\"";
                        echo $this->extensions['phpbb\template\twig\extension']->lang("TOPIC_UNAPPROVED");
                        echo "\">
\t\t\t\t\t\t\t\t\t<i class=\"icon fa-question fa-fw icon-blue\" aria-hidden=\"true\"></i><span class=\"sr-only\">";
                        // line 95
                        echo $this->extensions['phpbb\template\twig\extension']->lang("TOPIC_UNAPPROVED");
                        echo "</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t";
                    }
                    // line 98
                    echo "\t\t\t\t\t\t\t";
                    if (twig_get_attribute($this->env, $this->source, $context["searchresults"], "S_TOPIC_DELETED", [], "any", false, false, false, 98)) {
                        // line 99
                        echo "\t\t\t\t\t\t\t\t<a href=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["searchresults"], "U_MCP_QUEUE", [], "any", false, false, false, 99);
                        echo "\" title=\"";
                        echo $this->extensions['phpbb\template\twig\extension']->lang("TOPIC_DELETED");
                        echo "\">
\t\t\t\t\t\t\t\t\t<i class=\"icon fa-recycle fa-fw icon-green\" aria-hidden=\"true\"></i><span class=\"sr-only\">";
                        // line 100
                        echo $this->extensions['phpbb\template\twig\extension']->lang("TOPIC_DELETED");
                        echo "</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t";
                    }
                    // line 103
                    echo "\t\t\t\t\t\t\t";
                    if (twig_get_attribute($this->env, $this->source, $context["searchresults"], "S_TOPIC_REPORTED", [], "any", false, false, false, 103)) {
                        // line 104
                        echo "\t\t\t\t\t\t\t\t<a href=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["searchresults"], "U_MCP_REPORT", [], "any", false, false, false, 104);
                        echo "\" title=\"";
                        echo $this->extensions['phpbb\template\twig\extension']->lang("TOPIC_REPORTED");
                        echo "\">
\t\t\t\t\t\t\t\t\t<i class=\"icon fa-exclamation fa-fw icon-red\" aria-hidden=\"true\"></i><span class=\"sr-only\">";
                        // line 105
                        echo $this->extensions['phpbb\template\twig\extension']->lang("TOPIC_REPORTED");
                        echo "</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t";
                    }
                    // line 108
                    echo "\t\t\t\t\t\t\t<br />

\t\t\t\t\t\t\t";
                    // line 110
                    if ( !($context["S_IS_BOT"] ?? null)) {
                        // line 111
                        echo "\t\t\t\t\t\t\t\t<div class=\"responsive-show\" style=\"display: none;\">
\t\t\t\t\t\t\t\t\t";
                        // line 112
                        echo $this->extensions['phpbb\template\twig\extension']->lang("LAST_POST");
                        echo " ";
                        echo $this->extensions['phpbb\template\twig\extension']->lang("POST_BY_AUTHOR");
                        echo " ";
                        echo twig_get_attribute($this->env, $this->source, $context["searchresults"], "LAST_POST_AUTHOR_FULL", [], "any", false, false, false, 112);
                        echo " &laquo; <a href=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["searchresults"], "U_LAST_POST", [], "any", false, false, false, 112);
                        echo "\" title=\"";
                        echo $this->extensions['phpbb\template\twig\extension']->lang("GOTO_LAST_POST");
                        echo "\"><time datetime=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["searchresults"], "LAST_POST_TIME_RFC3339", [], "any", false, false, false, 112);
                        echo "\">";
                        echo twig_get_attribute($this->env, $this->source, $context["searchresults"], "LAST_POST_TIME", [], "any", false, false, false, 112);
                        echo "</time></a>
\t\t\t\t\t\t\t\t\t<br />";
                        // line 113
                        echo $this->extensions['phpbb\template\twig\extension']->lang("POSTED");
                        echo " ";
                        echo $this->extensions['phpbb\template\twig\extension']->lang("IN");
                        echo " <a href=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["searchresults"], "U_VIEW_FORUM", [], "any", false, false, false, 113);
                        echo "\">";
                        echo twig_get_attribute($this->env, $this->source, $context["searchresults"], "FORUM_TITLE", [], "any", false, false, false, 113);
                        echo "</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
                        // line 115
                        if (twig_get_attribute($this->env, $this->source, $context["searchresults"], "TOPIC_REPLIES", [], "any", false, false, false, 115)) {
                            echo "<span class=\"responsive-show left-box\" style=\"display: none;\">";
                            echo $this->extensions['phpbb\template\twig\extension']->lang("REPLIES");
                            echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
                            echo " <strong>";
                            echo twig_get_attribute($this->env, $this->source, $context["searchresults"], "TOPIC_REPLIES", [], "any", false, false, false, 115);
                            echo "</strong></span>";
                        }
                        // line 116
                        echo "\t\t\t\t\t\t\t";
                    }
                    // line 117
                    echo "
\t\t\t\t\t\t\t<div class=\"responsive-hide left-box\">
\t\t\t\t\t\t\t\t";
                    // line 119
                    if (twig_get_attribute($this->env, $this->source, $context["searchresults"], "S_HAS_POLL", [], "any", false, false, false, 119)) {
                        echo "<i class=\"icon fa-bar-chart fa-fw\" aria-hidden=\"true\"></i>";
                    }
                    // line 120
                    echo "\t\t\t\t\t\t\t\t";
                    // line 121
                    echo "\t\t\t\t\t\t\t\t";
                    if (twig_get_attribute($this->env, $this->source, $context["searchresults"], "ATTACH_ICON_IMG", [], "any", false, false, false, 121)) {
                        echo "<i class=\"icon fa-paperclip fa-fw\" aria-hidden=\"true\"></i>";
                    }
                    // line 122
                    echo "\t\t\t\t\t\t\t\t";
                    echo $this->extensions['phpbb\template\twig\extension']->lang("POST_BY_AUTHOR");
                    echo " ";
                    echo twig_get_attribute($this->env, $this->source, $context["searchresults"], "TOPIC_AUTHOR_FULL", [], "any", false, false, false, 122);
                    echo " &raquo; <time datetime=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["searchresults"], "FIRST_POST_TIME_RFC3339", [], "any", false, false, false, 122);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["searchresults"], "FIRST_POST_TIME", [], "any", false, false, false, 122);
                    echo "</time> &raquo; ";
                    echo $this->extensions['phpbb\template\twig\extension']->lang("IN");
                    echo " <a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["searchresults"], "U_VIEW_FORUM", [], "any", false, false, false, 122);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["searchresults"], "FORUM_TITLE", [], "any", false, false, false, 122);
                    echo "</a>
\t\t\t\t\t\t\t\t";
                    // line 123
                    echo "\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t";
                    // line 126
                    if (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["searchresults"], "pagination", [], "any", false, false, false, 126))) {
                        // line 127
                        echo "\t\t\t\t\t\t\t<div class=\"pagination\">
\t\t\t\t\t\t\t\t<span><i class=\"icon fa-clone fa-fw\" aria-hidden=\"true\"></i></span>
\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t";
                        // line 130
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["searchresults"], "pagination", [], "any", false, false, false, 130));
                        foreach ($context['_seq'] as $context["_key"] => $context["pagination"]) {
                            // line 131
                            echo "\t\t\t\t\t\t\t\t\t";
                            if (twig_get_attribute($this->env, $this->source, $context["pagination"], "S_IS_PREV", [], "any", false, false, false, 131)) {
                                // line 132
                                echo "\t\t\t\t\t\t\t\t\t";
                            } elseif (twig_get_attribute($this->env, $this->source, $context["pagination"], "S_IS_CURRENT", [], "any", false, false, false, 132)) {
                                echo "<li class=\"active\"><span>";
                                echo twig_get_attribute($this->env, $this->source, $context["pagination"], "PAGE_NUMBER", [], "any", false, false, false, 132);
                                echo "</span></li>
\t\t\t\t\t\t\t\t\t";
                            } elseif (twig_get_attribute($this->env, $this->source,                             // line 133
$context["pagination"], "S_IS_ELLIPSIS", [], "any", false, false, false, 133)) {
                                echo "<li class=\"ellipsis\"><span>";
                                echo $this->extensions['phpbb\template\twig\extension']->lang("ELLIPSIS");
                                echo "</span></li>
\t\t\t\t\t\t\t\t\t";
                            } elseif (twig_get_attribute($this->env, $this->source,                             // line 134
$context["pagination"], "S_IS_NEXT", [], "any", false, false, false, 134)) {
                                // line 135
                                echo "\t\t\t\t\t\t\t\t\t";
                            } else {
                                echo "<li><a class=\"button\" href=\"";
                                echo twig_get_attribute($this->env, $this->source, $context["pagination"], "PAGE_URL", [], "any", false, false, false, 135);
                                echo "\">";
                                echo twig_get_attribute($this->env, $this->source, $context["pagination"], "PAGE_NUMBER", [], "any", false, false, false, 135);
                                echo "</a></li>
\t\t\t\t\t\t\t\t\t";
                            }
                            // line 137
                            echo "\t\t\t\t\t\t\t\t";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pagination'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 138
                        echo "\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
                    }
                    // line 141
                    echo "\t\t\t\t\t\t\t";
                    echo "\t\t\t\t\t\t\t

\t\t\t\t\t\t\t";
                    // line 143
                    // line 144
                    echo "\t\t\t\t\t\t</div>
\t\t\t\t\t</dd>
\t\t\t\t\t<dd class=\"posts\">";
                    // line 146
                    echo twig_get_attribute($this->env, $this->source, $context["searchresults"], "TOPIC_REPLIES", [], "any", false, false, false, 146);
                    echo " <dfn>";
                    echo $this->extensions['phpbb\template\twig\extension']->lang("REPLIES");
                    echo "</dfn></dd>
\t\t\t\t\t<dd class=\"views\">";
                    // line 147
                    echo twig_get_attribute($this->env, $this->source, $context["searchresults"], "TOPIC_VIEWS", [], "any", false, false, false, 147);
                    echo " <dfn>";
                    echo $this->extensions['phpbb\template\twig\extension']->lang("VIEWS");
                    echo "</dfn></dd>
\t\t\t\t\t<dd class=\"lastpost\">
\t\t\t\t\t\t<span><dfn>";
                    // line 149
                    echo $this->extensions['phpbb\template\twig\extension']->lang("LAST_POST");
                    echo " </dfn>";
                    echo $this->extensions['phpbb\template\twig\extension']->lang("POST_BY_AUTHOR");
                    echo " ";
                    echo twig_get_attribute($this->env, $this->source, $context["searchresults"], "LAST_POST_AUTHOR_FULL", [], "any", false, false, false, 149);
                    // line 150
                    echo "\t\t\t\t\t\t\t";
                    if ( !($context["S_IS_BOT"] ?? null)) {
                        // line 151
                        echo "\t\t\t\t\t\t\t\t<a href=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["searchresults"], "U_LAST_POST", [], "any", false, false, false, 151);
                        echo "\" title=\"";
                        echo $this->extensions['phpbb\template\twig\extension']->lang("GOTO_LAST_POST");
                        echo "\">
\t\t\t\t\t\t\t\t\t<i class=\"icon fa-external-link-square fa-fw icon-lightgray icon-md\" aria-hidden=\"true\"></i><span class=\"sr-only\">";
                        // line 152
                        echo ($context["VIEW_LATEST_POST"] ?? null);
                        echo "</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t";
                    }
                    // line 155
                    echo "\t\t\t\t\t\t\t<br /><time datetime=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["searchresults"], "LAST_POST_TIME_RFC3339", [], "any", false, false, false, 155);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["searchresults"], "LAST_POST_TIME", [], "any", false, false, false, 155);
                    echo "</time>
\t\t\t\t\t\t</span>
\t\t\t\t\t</dd>
\t\t\t\t\t";
                    // line 158
                    echo "\t\t\t\t\t
\t\t\t\t</dl>
\t\t\t</li>
\t\t\t";
                    // line 161
                    // line 162
                    echo "\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['searchresults'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 163
                echo "\t\t</ul>

\t\t</div>
\t</div>
\t";
            } else {
                // line 168
                echo "\t\t<div class=\"panel\">
\t\t\t<div class=\"inner\">
\t\t\t<strong>";
                // line 170
                echo $this->extensions['phpbb\template\twig\extension']->lang("NO_SEARCH_RESULTS");
                echo "</strong>
\t\t\t</div>
\t\t</div>
\t";
            }
            // line 174
            echo "
";
        } else {
            // line 176
            echo "
\t";
            // line 177
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "searchresults", [], "any", false, false, false, 177));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["searchresults"]) {
                // line 178
                echo "\t\t";
                // line 179
                echo "\t\t<div class=\"search post ";
                if ((twig_get_attribute($this->env, $this->source, $context["searchresults"], "S_ROW_COUNT", [], "any", false, false, false, 179) % 2 != 0)) {
                    echo "bg1";
                } else {
                    echo "bg2";
                }
                if (twig_get_attribute($this->env, $this->source, $context["searchresults"], "S_POST_REPORTED", [], "any", false, false, false, 179)) {
                    echo " reported";
                }
                echo "\">
\t\t\t<div class=\"inner\">

\t";
                // line 182
                if (twig_get_attribute($this->env, $this->source, $context["searchresults"], "S_IGNORE_POST", [], "any", false, false, false, 182)) {
                    // line 183
                    echo "\t\t<div class=\"postbody\">
\t\t\t";
                    // line 184
                    // line 185
                    echo "\t\t\t";
                    echo twig_get_attribute($this->env, $this->source, $context["searchresults"], "L_IGNORE_POST", [], "any", false, false, false, 185);
                    echo "
\t\t</div>
\t";
                } else {
                    // line 188
                    echo "\t\t<dl class=\"postprofile\">
\t\t\t";
                    // line 189
                    // line 190
                    echo "\t\t\t
+\t\t\t<dt class=\"author\">";
                    // line 191
                    echo $this->extensions['phpbb\template\twig\extension']->lang("POST_BY_AUTHOR");
                    echo " ";
                    echo twig_get_attribute($this->env, $this->source, $context["searchresults"], "POST_AUTHOR_FULL", [], "any", false, false, false, 191);
                    echo "</dt>
\t\t\t<dd class=\"search-result-date\">";
                    // line 192
                    echo twig_get_attribute($this->env, $this->source, $context["searchresults"], "POST_DATE", [], "any", false, false, false, 192);
                    echo "</dd>
\t\t\t<dd>";
                    // line 193
                    echo $this->extensions['phpbb\template\twig\extension']->lang("FORUM");
                    echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
                    echo " <a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["searchresults"], "U_VIEW_FORUM", [], "any", false, false, false, 193);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["searchresults"], "FORUM_TITLE", [], "any", false, false, false, 193);
                    echo "</a></dd>
\t\t\t<dd>";
                    // line 194
                    echo $this->extensions['phpbb\template\twig\extension']->lang("TOPIC");
                    echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
                    echo " <a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["searchresults"], "U_VIEW_TOPIC", [], "any", false, false, false, 194);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["searchresults"], "TOPIC_TITLE", [], "any", false, false, false, 194);
                    echo "</a></dd>
\t\t\t<dd>";
                    // line 195
                    echo $this->extensions['phpbb\template\twig\extension']->lang("REPLIES");
                    echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
                    echo " <strong>";
                    echo twig_get_attribute($this->env, $this->source, $context["searchresults"], "TOPIC_REPLIES", [], "any", false, false, false, 195);
                    echo "</strong></dd>
\t\t\t<dd>";
                    // line 196
                    echo $this->extensions['phpbb\template\twig\extension']->lang("VIEWS");
                    echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
                    echo " <strong>";
                    echo twig_get_attribute($this->env, $this->source, $context["searchresults"], "TOPIC_VIEWS", [], "any", false, false, false, 196);
                    echo "</strong></dd>
\t\t\t";
                    // line 197
                    // line 198
                    echo "\t\t</dl>

\t\t<div class=\"postbody\">
\t\t\t<h3><a href=\"";
                    // line 201
                    echo twig_get_attribute($this->env, $this->source, $context["searchresults"], "U_VIEW_POST", [], "any", false, false, false, 201);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["searchresults"], "POST_SUBJECT", [], "any", false, false, false, 201);
                    echo "</a></h3>
\t\t\t<div class=\"content\">";
                    // line 202
                    echo twig_get_attribute($this->env, $this->source, $context["searchresults"], "MESSAGE", [], "any", false, false, false, 202);
                    echo "</div>

\t\t\t";
                    // line 204
                    if ( !twig_get_attribute($this->env, $this->source, $context["searchresults"], "S_IGNORE_POST", [], "any", false, false, false, 204)) {
                        // line 205
                        echo "\t\t\t\t<ul class=\"searchresults\">
\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"";
                        // line 207
                        echo twig_get_attribute($this->env, $this->source, $context["searchresults"], "U_VIEW_POST", [], "any", false, false, false, 207);
                        echo "\" class=\"arrow-";
                        echo ($context["S_CONTENT_FLOW_END"] ?? null);
                        echo "\">
\t\t\t\t\t\t\t<i class=\"icon fa-angle-";
                        // line 208
                        echo ($context["S_CONTENT_FLOW_END"] ?? null);
                        echo " fa-fw icon-black\" aria-hidden=\"true\"></i><span>";
                        echo $this->extensions['phpbb\template\twig\extension']->lang("JUMP_TO_POST");
                        echo "</span>
\t\t\t\t\t\t</a>
\t\t\t\t\t</li>
\t\t\t\t</ul>
\t\t\t";
                    }
                    // line 213
                    echo "\t\t</div>
\t";
                }
                // line 215
                echo "
\t\t\t</div>
\t\t</div>
\t\t";
                // line 218
                // line 219
                echo "\t";
                $context['_iterated'] = true;
            }
            if (!$context['_iterated']) {
                // line 220
                echo "\t\t<div class=\"panel\">
\t\t\t<div class=\"inner\">
\t\t\t<strong>";
                // line 222
                echo $this->extensions['phpbb\template\twig\extension']->lang("NO_SEARCH_RESULTS");
                echo "</strong>
\t\t\t</div>
\t\t</div>
\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['searchresults'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 227
        echo "
<div class=\"action-bar bottom\">
\t";
        // line 229
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "searchresults", [], "any", false, false, false, 229)) && (($context["S_SELECT_SORT_DAYS"] ?? null) || ($context["S_SELECT_SORT_KEY"] ?? null)))) {
            // line 230
            echo "\t<form method=\"post\" action=\"";
            echo ($context["S_SEARCH_ACTION"] ?? null);
            echo "\">
\t\t";
            // line 231
            $location = "display_options.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("display_options.html", "search_results.html", 231)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
            // line 232
            echo "\t</form>
\t";
        }
        // line 234
        echo "\t
\t<div class=\"pagination\">
\t\t";
        // line 236
        echo ($context["SEARCH_MATCHES"] ?? null);
        echo "
\t\t";
        // line 237
        if (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "pagination", [], "any", false, false, false, 237))) {
            // line 238
            echo "\t\t\t";
            $location = "pagination.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("pagination.html", "search_results.html", 238)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
            // line 239
            echo "\t\t";
        } else {
            // line 240
            echo "\t\t\t &bull; ";
            echo ($context["PAGE_NUMBER"] ?? null);
            echo "
\t\t";
        }
        // line 242
        echo "\t</div>
</div>\t

";
        // line 245
        // line 246
        $location = "jumpbox.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("jumpbox.html", "search_results.html", 246)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 247
        echo "
";
        // line 248
        $location = "overall_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("overall_footer.html", "search_results.html", 248)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
    }

    public function getTemplateName()
    {
        return "search_results.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  846 => 248,  843 => 247,  831 => 246,  830 => 245,  825 => 242,  819 => 240,  816 => 239,  803 => 238,  801 => 237,  797 => 236,  793 => 234,  789 => 232,  777 => 231,  772 => 230,  770 => 229,  766 => 227,  755 => 222,  751 => 220,  746 => 219,  745 => 218,  740 => 215,  736 => 213,  726 => 208,  720 => 207,  716 => 205,  714 => 204,  709 => 202,  703 => 201,  698 => 198,  697 => 197,  690 => 196,  683 => 195,  674 => 194,  665 => 193,  661 => 192,  655 => 191,  652 => 190,  651 => 189,  648 => 188,  641 => 185,  640 => 184,  637 => 183,  635 => 182,  621 => 179,  619 => 178,  614 => 177,  611 => 176,  607 => 174,  600 => 170,  596 => 168,  589 => 163,  583 => 162,  582 => 161,  577 => 158,  568 => 155,  562 => 152,  555 => 151,  552 => 150,  546 => 149,  539 => 147,  533 => 146,  529 => 144,  528 => 143,  523 => 141,  518 => 138,  512 => 137,  502 => 135,  500 => 134,  494 => 133,  487 => 132,  484 => 131,  480 => 130,  475 => 127,  473 => 126,  468 => 123,  451 => 122,  446 => 121,  444 => 120,  440 => 119,  436 => 117,  433 => 116,  424 => 115,  413 => 113,  397 => 112,  394 => 111,  392 => 110,  388 => 108,  382 => 105,  375 => 104,  372 => 103,  366 => 100,  359 => 99,  356 => 98,  350 => 95,  343 => 94,  341 => 93,  334 => 92,  328 => 89,  323 => 88,  320 => 87,  319 => 86,  315 => 84,  309 => 83,  297 => 81,  293 => 80,  284 => 79,  282 => 78,  278 => 77,  271 => 72,  270 => 71,  266 => 70,  262 => 69,  258 => 68,  250 => 62,  248 => 61,  245 => 60,  243 => 59,  240 => 58,  235 => 55,  229 => 53,  226 => 52,  213 => 51,  211 => 50,  206 => 49,  198 => 48,  194 => 46,  193 => 45,  190 => 44,  181 => 38,  175 => 37,  170 => 35,  166 => 34,  162 => 33,  157 => 31,  154 => 30,  152 => 29,  148 => 27,  146 => 26,  143 => 25,  142 => 24,  139 => 23,  130 => 19,  122 => 18,  119 => 17,  110 => 13,  104 => 12,  101 => 11,  99 => 10,  96 => 9,  90 => 8,  81 => 7,  72 => 6,  56 => 5,  53 => 4,  52 => 3,  49 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "search_results.html", "");
    }
}
