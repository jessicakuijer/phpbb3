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

/* forumlist_body.html */
class __TwigTemplate_1fdb9a324e0b082b31ecf9ac708e6131 extends \Twig\Template
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
        echo "
";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "forumrow", [], "any", false, false, false, 2));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["forumrow"]) {
            // line 3
            echo "\t";
            if (((twig_get_attribute($this->env, $this->source, $context["forumrow"], "S_IS_CAT", [], "any", false, false, false, 3) &&  !twig_get_attribute($this->env, $this->source, $context["forumrow"], "S_FIRST_ROW", [], "any", false, false, false, 3)) || twig_get_attribute($this->env, $this->source, $context["forumrow"], "S_NO_CAT", [], "any", false, false, false, 3))) {
                // line 4
                echo "\t\t\t</ul>

\t\t\t</div>
\t\t</div>
\t";
            }
            // line 9
            echo "
\t";
            // line 10
            // line 11
            echo "\t";
            if (((twig_get_attribute($this->env, $this->source, $context["forumrow"], "S_IS_CAT", [], "any", false, false, false, 11) || twig_get_attribute($this->env, $this->source, $context["forumrow"], "S_FIRST_ROW", [], "any", false, false, false, 11)) || twig_get_attribute($this->env, $this->source, $context["forumrow"], "S_NO_CAT", [], "any", false, false, false, 11))) {
                // line 12
                echo "\t\t<div class=\"forabg\">
\t\t\t<div class=\"inner\">
\t\t\t<ul class=\"topiclist\">
\t\t\t\t<li class=\"header\">
\t\t\t\t\t";
                // line 16
                // line 17
                echo "\t\t\t\t\t<dl class=\"row-item\">
\t\t\t\t\t\t<dt><div class=\"list-inner\">";
                // line 18
                if (twig_get_attribute($this->env, $this->source, $context["forumrow"], "S_IS_CAT", [], "any", false, false, false, 18)) {
                    echo "<a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["forumrow"], "U_VIEWFORUM", [], "any", false, false, false, 18);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["forumrow"], "FORUM_NAME", [], "any", false, false, false, 18);
                    echo "</a>";
                } else {
                    echo $this->extensions['phpbb\template\twig\extension']->lang("FORUM");
                }
                echo "</div></dt>
\t\t\t\t\t\t<dd class=\"topics\">";
                // line 19
                echo $this->extensions['phpbb\template\twig\extension']->lang("STATISTICS");
                echo "</dd>
\t\t\t\t\t\t<dd class=\"lastpost\"><span>";
                // line 20
                echo $this->extensions['phpbb\template\twig\extension']->lang("LAST_POST");
                echo "</span></dd>
\t\t\t\t\t</dl>
\t\t\t\t\t";
                // line 22
                // line 23
                echo "\t\t\t\t</li>
\t\t\t</ul>
\t\t\t<ul class=\"topiclist forums\">
\t";
            }
            // line 27
            echo "\t";
            // line 28
            echo "
\t";
            // line 29
            if ( !twig_get_attribute($this->env, $this->source, $context["forumrow"], "S_IS_CAT", [], "any", false, false, false, 29)) {
                // line 30
                echo "\t\t";
                // line 31
                echo "\t\t<li class=\"row\">
\t\t\t";
                // line 32
                // line 33
                echo "\t\t\t<dl title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["forumrow"], "FORUM_FOLDER_IMG_ALT", [], "any", false, false, false, 33);
                echo "\">
\t\t\t\t<dt class=\"row-item ";
                // line 34
                echo twig_get_attribute($this->env, $this->source, $context["forumrow"], "FORUM_IMG_STYLE", [], "any", false, false, false, 34);
                echo "\"></dt>
\t\t\t\t<dd>
\t\t\t\t\t";
                // line 36
                if (twig_get_attribute($this->env, $this->source, $context["forumrow"], "S_UNREAD_FORUM", [], "any", false, false, false, 36)) {
                    echo "<a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["forumrow"], "U_VIEWFORUM", [], "any", false, false, false, 36);
                    echo "\" class=\"row-item-link\"></a>";
                }
                // line 37
                echo "\t\t\t\t\t<div class=\"list-inner\">
\t\t\t\t\t\t";
                // line 38
                if ((($context["S_ENABLE_FEEDS"] ?? null) && twig_get_attribute($this->env, $this->source, $context["forumrow"], "S_FEED_ENABLED", [], "any", false, false, false, 38))) {
                    // line 39
                    echo "\t\t\t\t\t\t\t<!--
\t\t\t\t\t\t\t\t<a class=\"feed-icon-forum\" title=\"";
                    // line 40
                    echo $this->extensions['phpbb\template\twig\extension']->lang("FEED");
                    echo " - ";
                    echo twig_get_attribute($this->env, $this->source, $context["forumrow"], "FORUM_NAME", [], "any", false, false, false, 40);
                    echo "\" href=\"";
                    echo ($context["U_FEED"] ?? null);
                    echo "?f=";
                    echo twig_get_attribute($this->env, $this->source, $context["forumrow"], "FORUM_ID", [], "any", false, false, false, 40);
                    echo "\">
\t\t\t\t\t\t\t\t\t<i class=\"icon fa-rss-square fa-fw icon-orange\" aria-hidden=\"true\"></i><span class=\"sr-only\">";
                    // line 41
                    echo $this->extensions['phpbb\template\twig\extension']->lang("FEED");
                    echo " - ";
                    echo twig_get_attribute($this->env, $this->source, $context["forumrow"], "FORUM_NAME", [], "any", false, false, false, 41);
                    echo "</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t-->
\t\t\t\t\t\t";
                }
                // line 45
                echo "
\t\t\t\t\t\t";
                // line 46
                if (twig_get_attribute($this->env, $this->source, $context["forumrow"], "FORUM_IMAGE", [], "any", false, false, false, 46)) {
                    // line 47
                    echo "\t\t\t\t\t\t\t";
                    // line 48
                    echo "\t\t\t\t\t\t\t<span class=\"forum-image\">";
                    echo twig_get_attribute($this->env, $this->source, $context["forumrow"], "FORUM_IMAGE", [], "any", false, false, false, 48);
                    echo "</span>
\t\t\t\t\t\t\t";
                    // line 49
                    // line 50
                    echo "\t\t\t\t\t\t";
                }
                // line 51
                echo "\t\t\t\t\t\t<a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["forumrow"], "U_VIEWFORUM", [], "any", false, false, false, 51);
                echo "\" class=\"forumtitle\">";
                echo twig_get_attribute($this->env, $this->source, $context["forumrow"], "FORUM_NAME", [], "any", false, false, false, 51);
                echo "</a>
\t\t\t\t\t\t";
                // line 52
                if (twig_get_attribute($this->env, $this->source, $context["forumrow"], "FORUM_DESC", [], "any", false, false, false, 52)) {
                    echo "<br />";
                    echo twig_get_attribute($this->env, $this->source, $context["forumrow"], "FORUM_DESC", [], "any", false, false, false, 52);
                }
                // line 53
                echo "\t\t\t\t\t\t";
                if (twig_get_attribute($this->env, $this->source, $context["forumrow"], "MODERATORS", [], "any", false, false, false, 53)) {
                    // line 54
                    echo "\t\t\t\t\t\t\t<br /><strong>";
                    echo twig_get_attribute($this->env, $this->source, $context["forumrow"], "L_MODERATOR_STR", [], "any", false, false, false, 54);
                    echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
                    echo "</strong> ";
                    echo twig_get_attribute($this->env, $this->source, $context["forumrow"], "MODERATORS", [], "any", false, false, false, 54);
                    echo "
\t\t\t\t\t\t";
                }
                // line 56
                echo "\t\t\t\t\t\t";
                if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["forumrow"], "subforum", [], "any", false, false, false, 56)) && twig_get_attribute($this->env, $this->source, $context["forumrow"], "S_LIST_SUBFORUMS", [], "any", false, false, false, 56))) {
                    // line 57
                    echo "\t\t\t\t\t\t\t";
                    // line 58
                    echo "\t\t\t\t\t\t\t<br /><strong>";
                    echo twig_get_attribute($this->env, $this->source, $context["forumrow"], "L_SUBFORUM_STR", [], "any", false, false, false, 58);
                    echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
                    echo "</strong>
\t\t\t\t\t\t\t";
                    // line 59
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["forumrow"], "subforum", [], "any", false, false, false, 59));
                    foreach ($context['_seq'] as $context["_key"] => $context["subforum"]) {
                        // line 60
                        echo "\t\t\t\t\t\t\t\t";
                        echo "<a href=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["subforum"], "U_SUBFORUM", [], "any", false, false, false, 60);
                        echo "\" class=\"subforum";
                        if (twig_get_attribute($this->env, $this->source, $context["subforum"], "S_UNREAD", [], "any", false, false, false, 60)) {
                            echo " unread";
                        } else {
                            echo " read";
                        }
                        echo "\" title=\"";
                        if (twig_get_attribute($this->env, $this->source, $context["subforum"], "S_UNREAD", [], "any", false, false, false, 60)) {
                            echo $this->extensions['phpbb\template\twig\extension']->lang("UNREAD_POSTS");
                        } else {
                            echo $this->extensions['phpbb\template\twig\extension']->lang("NO_UNREAD_POSTS");
                        }
                        echo "\">
\t\t\t\t\t\t\t\t\t<i class=\"icon ";
                        // line 61
                        if (twig_get_attribute($this->env, $this->source, $context["subforum"], "IS_LINK", [], "any", false, false, false, 61)) {
                            echo "fa-external-link";
                        } else {
                            echo "fa-file-o";
                        }
                        echo " fa-fw ";
                        if (twig_get_attribute($this->env, $this->source, $context["subforum"], "S_UNREAD", [], "any", false, false, false, 61)) {
                            echo " icon-red";
                        } else {
                            echo " icon-blue";
                        }
                        echo " icon-md\" aria-hidden=\"true\"></i>";
                        echo twig_get_attribute($this->env, $this->source, $context["subforum"], "SUBFORUM_NAME", [], "any", false, false, false, 61);
                        echo "</a>";
                        if ( !twig_get_attribute($this->env, $this->source, $context["subforum"], "S_LAST_ROW", [], "any", false, false, false, 61)) {
                            echo $this->extensions['phpbb\template\twig\extension']->lang("COMMA_SEPARATOR");
                        }
                        // line 62
                        echo "\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subforum'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 63
                    echo "\t\t\t\t\t\t\t";
                    // line 64
                    echo "\t\t\t\t\t\t";
                }
                // line 65
                echo "
\t\t\t\t\t\t";
                // line 66
                if ( !($context["S_IS_BOT"] ?? null)) {
                    // line 67
                    echo "\t\t\t\t\t\t<div class=\"responsive-show\" style=\"display: none;\">
\t\t\t\t\t\t\t";
                    // line 68
                    if (twig_get_attribute($this->env, $this->source, $context["forumrow"], "CLICKS", [], "any", false, false, false, 68)) {
                        // line 69
                        echo "\t\t\t\t\t\t\t\t";
                        echo $this->extensions['phpbb\template\twig\extension']->lang("REDIRECTS");
                        echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
                        echo " <strong>";
                        echo twig_get_attribute($this->env, $this->source, $context["forumrow"], "CLICKS", [], "any", false, false, false, 69);
                        echo "</strong>
\t\t\t\t\t\t\t";
                    } elseif (( !twig_get_attribute($this->env, $this->source,                     // line 70
$context["forumrow"], "S_IS_LINK", [], "any", false, false, false, 70) && twig_get_attribute($this->env, $this->source, $context["forumrow"], "TOPICS", [], "any", false, false, false, 70))) {
                        // line 71
                        echo "\t\t\t\t\t\t\t\t";
                        echo $this->extensions['phpbb\template\twig\extension']->lang("TOPICS");
                        echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
                        echo " <strong>";
                        echo twig_get_attribute($this->env, $this->source, $context["forumrow"], "TOPICS", [], "any", false, false, false, 71);
                        echo "</strong>
\t\t\t\t\t\t\t";
                    }
                    // line 73
                    echo "\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
                }
                // line 75
                echo "\t\t\t\t\t</div>
\t\t\t\t</dd>
\t\t\t\t";
                // line 77
                if (twig_get_attribute($this->env, $this->source, $context["forumrow"], "CLICKS", [], "any", false, false, false, 77)) {
                    // line 78
                    echo "\t\t\t\t\t<dd class=\"redirect\"><span>";
                    echo $this->extensions['phpbb\template\twig\extension']->lang("REDIRECTS");
                    echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
                    echo " <strong>";
                    echo twig_get_attribute($this->env, $this->source, $context["forumrow"], "CLICKS", [], "any", false, false, false, 78);
                    echo "</strong></span></dd>
\t\t\t\t";
                } elseif ( !twig_get_attribute($this->env, $this->source,                 // line 79
$context["forumrow"], "S_IS_LINK", [], "any", false, false, false, 79)) {
                    // line 80
                    echo "\t\t\t\t\t<dd class=\"topics\">
\t\t\t\t\t\t";
                    // line 81
                    echo $this->extensions['phpbb\template\twig\extension']->lang("TOPICS");
                    echo ": <strong>";
                    echo twig_get_attribute($this->env, $this->source, $context["forumrow"], "TOPICS", [], "any", false, false, false, 81);
                    echo "</strong><br />
\t\t\t\t\t\t";
                    // line 82
                    echo $this->extensions['phpbb\template\twig\extension']->lang("POSTS");
                    echo ": <strong>";
                    echo twig_get_attribute($this->env, $this->source, $context["forumrow"], "POSTS", [], "any", false, false, false, 82);
                    echo "</strong>
\t\t\t\t\t</dd>
\t\t\t\t\t<dd class=\"lastpost\">
\t\t\t\t\t\t<span>
\t\t\t\t\t\t\t";
                    // line 86
                    if (twig_get_attribute($this->env, $this->source, $context["forumrow"], "U_UNAPPROVED_TOPICS", [], "any", false, false, false, 86)) {
                        // line 87
                        echo "\t\t\t\t\t\t\t\t<a href=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["forumrow"], "U_UNAPPROVED_TOPICS", [], "any", false, false, false, 87);
                        echo "\" title=\"";
                        echo $this->extensions['phpbb\template\twig\extension']->lang("TOPICS_UNAPPROVED");
                        echo "\">
\t\t\t\t\t\t\t\t\t<i class=\"icon fa-question fa-fw icon-blue\" aria-hidden=\"true\"></i><span class=\"sr-only\">";
                        // line 88
                        echo $this->extensions['phpbb\template\twig\extension']->lang("TOPICS_UNAPPROVED");
                        echo "</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t";
                    } elseif (twig_get_attribute($this->env, $this->source,                     // line 90
$context["forumrow"], "U_UNAPPROVED_POSTS", [], "any", false, false, false, 90)) {
                        // line 91
                        echo "\t\t\t\t\t\t\t\t<a href=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["forumrow"], "U_UNAPPROVED_POSTS", [], "any", false, false, false, 91);
                        echo "\" title=\"";
                        echo $this->extensions['phpbb\template\twig\extension']->lang("POSTS_UNAPPROVED_FORUM");
                        echo "\">
\t\t\t\t\t\t\t\t\t<i class=\"icon fa-question fa-fw icon-blue\" aria-hidden=\"true\"></i><span class=\"sr-only\">";
                        // line 92
                        echo $this->extensions['phpbb\template\twig\extension']->lang("POSTS_UNAPPROVED_FORUM");
                        echo "</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t";
                    }
                    // line 95
                    echo "\t\t\t\t\t\t\t";
                    if (twig_get_attribute($this->env, $this->source, $context["forumrow"], "LAST_POST_TIME", [], "any", false, false, false, 95)) {
                        // line 96
                        echo "\t\t\t\t\t\t\t\t<dfn>";
                        echo $this->extensions['phpbb\template\twig\extension']->lang("LAST_POST");
                        echo "</dfn>
\t\t\t\t\t\t\t\t";
                        // line 97
                        if (twig_get_attribute($this->env, $this->source, $context["forumrow"], "S_DISPLAY_SUBJECT", [], "any", false, false, false, 97)) {
                            // line 98
                            echo "\t\t\t\t\t\t\t\t\t";
                            // line 99
                            echo "\t\t\t\t\t\t\t\t\t<a href=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["forumrow"], "U_LAST_POST", [], "any", false, false, false, 99);
                            echo "\" title=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["forumrow"], "LAST_POST_SUBJECT", [], "any", false, false, false, 99);
                            echo "\" class=\"lastsubject\">";
                            echo twig_get_attribute($this->env, $this->source, $context["forumrow"], "LAST_POST_SUBJECT_TRUNCATED", [], "any", false, false, false, 99);
                            echo "</a> <br />
\t\t\t\t\t\t\t\t";
                        }
                        // line 101
                        echo "\t\t\t\t\t\t\t\t\t";
                        echo $this->extensions['phpbb\template\twig\extension']->lang("POST_BY_AUTHOR");
                        echo " ";
                        echo twig_get_attribute($this->env, $this->source, $context["forumrow"], "LAST_POSTER_FULL", [], "any", false, false, false, 101);
                        // line 102
                        echo "\t\t\t\t\t\t\t\t";
                        if ( !($context["S_IS_BOT"] ?? null)) {
                            // line 103
                            echo "\t\t\t\t\t\t\t\t\t<a href=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["forumrow"], "U_LAST_POST", [], "any", false, false, false, 103);
                            echo "\" title=\"";
                            echo $this->extensions['phpbb\template\twig\extension']->lang("VIEW_LATEST_POST");
                            echo "\">
\t\t\t\t\t\t\t\t\t\t<i class=\"icon fa-external-link-square fa-fw icon-lightgray icon-md\" aria-hidden=\"true\"></i><span class=\"sr-only\">";
                            // line 104
                            echo $this->extensions['phpbb\template\twig\extension']->lang("VIEW_LATEST_POST");
                            echo "</span>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t";
                        }
                        // line 107
                        echo "\t\t\t\t\t\t\t\t<br /><time datetime=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["forumrow"], "LAST_POST_TIME_RFC3339", [], "any", false, false, false, 107);
                        echo "\">";
                        echo twig_get_attribute($this->env, $this->source, $context["forumrow"], "LAST_POST_TIME", [], "any", false, false, false, 107);
                        echo "</time>
\t\t\t\t\t\t\t";
                    } else {
                        // line 109
                        echo "\t\t\t\t\t\t\t";
                        if (twig_get_attribute($this->env, $this->source, $context["forumrow"], "U_UNAPPROVED_TOPICS", [], "any", false, false, false, 109)) {
                            // line 110
                            echo "\t\t\t\t\t\t\t\t";
                            echo $this->extensions['phpbb\template\twig\extension']->lang("TOPIC_UNAPPROVED_FORUM", twig_get_attribute($this->env, $this->source, $context["forumrow"], "TOPICS", [], "any", false, false, false, 110));
                            echo "
\t\t\t\t\t\t\t";
                        } else {
                            // line 112
                            echo "\t\t\t\t\t\t\t\t";
                            echo $this->extensions['phpbb\template\twig\extension']->lang("NO_POSTS");
                            echo "
\t\t\t\t\t\t\t";
                        }
                        // line 114
                        echo "\t\t\t\t\t\t\t";
                    }
                    // line 115
                    echo "\t\t\t\t\t\t</span>
\t\t\t\t\t</dd>
\t\t\t\t";
                }
                // line 118
                echo "\t\t\t</dl>
\t\t\t";
                // line 119
                // line 120
                echo "\t\t</li>
\t\t";
                // line 121
                // line 122
                echo "\t";
            }
            // line 123
            echo "
\t";
            // line 124
            if (twig_get_attribute($this->env, $this->source, $context["forumrow"], "S_LAST_ROW", [], "any", false, false, false, 124)) {
                // line 125
                echo "\t\t\t</ul>

\t\t\t</div>
\t\t</div>
\t";
                // line 129
                // line 130
                echo "\t";
            }
            // line 131
            echo "
";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 133
            echo "\t<div class=\"panel\">
\t\t<div class=\"inner\">
\t\t<strong>";
            // line 135
            echo $this->extensions['phpbb\template\twig\extension']->lang("NO_FORUMS");
            echo "</strong>
\t\t</div>
\t</div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['forumrow'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "forumlist_body.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  464 => 135,  460 => 133,  454 => 131,  451 => 130,  450 => 129,  444 => 125,  442 => 124,  439 => 123,  436 => 122,  435 => 121,  432 => 120,  431 => 119,  428 => 118,  423 => 115,  420 => 114,  414 => 112,  408 => 110,  405 => 109,  397 => 107,  391 => 104,  384 => 103,  381 => 102,  376 => 101,  366 => 99,  364 => 98,  362 => 97,  357 => 96,  354 => 95,  348 => 92,  341 => 91,  339 => 90,  334 => 88,  327 => 87,  325 => 86,  316 => 82,  310 => 81,  307 => 80,  305 => 79,  297 => 78,  295 => 77,  291 => 75,  287 => 73,  278 => 71,  276 => 70,  268 => 69,  266 => 68,  263 => 67,  261 => 66,  258 => 65,  255 => 64,  253 => 63,  247 => 62,  229 => 61,  211 => 60,  207 => 59,  201 => 58,  199 => 57,  196 => 56,  187 => 54,  184 => 53,  179 => 52,  172 => 51,  169 => 50,  168 => 49,  163 => 48,  161 => 47,  159 => 46,  156 => 45,  147 => 41,  137 => 40,  134 => 39,  132 => 38,  129 => 37,  123 => 36,  118 => 34,  113 => 33,  112 => 32,  109 => 31,  107 => 30,  105 => 29,  102 => 28,  100 => 27,  94 => 23,  93 => 22,  88 => 20,  84 => 19,  72 => 18,  69 => 17,  68 => 16,  62 => 12,  59 => 11,  58 => 10,  55 => 9,  48 => 4,  45 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "forumlist_body.html", "");
    }
}
