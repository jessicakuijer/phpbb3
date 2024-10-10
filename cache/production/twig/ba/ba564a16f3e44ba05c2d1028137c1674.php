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

/* navbar_responsive_header.html */
class __TwigTemplate_7ed4bda3ac0c84d4a83d8d3c047475c4 extends \Twig\Template
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
        echo "<div class=\"dropdown-container hidden inventea-mobile-dropdown-menu\">
    <a href=\"#\" class=\"dropdown-trigger inventea-toggle\"><i class=\"fa fa-bars\"></i></a>
\t\t<div class=\"dropdown hidden\">
\t\t\t<div class=\"pointer\"><div class=\"pointer-inner\"></div></div>
\t\t\t\t<ul class=\"dropdown-contents\" role=\"menubar\">
\t\t\t\t
\t\t\t\t";
        // line 7
        if (($context["U_SITE_HOME"] ?? null)) {
            // line 8
            echo "\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"";
            // line 9
            echo ($context["U_SITE_HOME"] ?? null);
            echo "\" role=\"menuitem\">
\t\t\t\t\t\t\t<i class=\"icon fa fa-fw fa-home\" aria-hidden=\"true\"></i><span>";
            // line 10
            echo $this->extensions['phpbb\template\twig\extension']->lang("SITE_HOME");
            echo "</span>
\t\t\t\t\t\t</a>
\t\t\t\t\t</li>
\t\t\t\t";
        }
        // line 14
        echo "\t\t\t\t
\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"";
        // line 16
        echo ($context["U_INDEX"] ?? null);
        echo "\" role=\"menuitem\">
\t\t\t\t\t\t\t<i class=\"icon fa fa-fw ";
        // line 17
        if (($context["U_SITE_HOME"] ?? null)) {
            echo "fa-globe";
        } else {
            echo "fa-home";
        }
        echo "\" aria-hidden=\"true\"></i><span>";
        echo $this->extensions['phpbb\template\twig\extension']->lang("INDEX");
        echo "</span>
\t\t\t\t\t\t</a>
\t\t\t\t\t</li>

\t\t\t\t";
        // line 21
        // line 22
        echo "
\t\t\t\t\t<li ";
        // line 23
        if ( !($context["S_USER_LOGGED_IN"] ?? null)) {
            echo "data-skip-responsive=\"true\"";
        } else {
            echo "data-last-responsive=\"true\"";
        }
        echo ">
\t\t\t\t\t\t<a href=\"";
        // line 24
        echo ($context["U_FAQ"] ?? null);
        echo "\" rel=\"help\" title=\"";
        echo $this->extensions['phpbb\template\twig\extension']->lang("FAQ_EXPLAIN");
        echo "\" role=\"menuitem\">
\t\t\t\t\t\t\t<i class=\"icon fa-question-circle fa-fw\" aria-hidden=\"true\"></i><span>";
        // line 25
        echo $this->extensions['phpbb\template\twig\extension']->lang("FAQ");
        echo "</span>
\t\t\t\t\t\t</a>
\t\t\t\t\t</li>

\t\t\t\t";
        // line 29
        // line 30
        echo "
\t\t\t\t";
        // line 31
        if (($context["S_DISPLAY_SEARCH"] ?? null)) {
            // line 32
            echo "\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"";
            // line 33
            echo ($context["U_SEARCH"] ?? null);
            echo "\" role=\"menuitem\">
\t\t\t\t\t\t\t<i class=\"icon fa-search fa-fw\" aria-hidden=\"true\"></i><span>";
            // line 34
            echo $this->extensions['phpbb\template\twig\extension']->lang("SEARCH");
            echo "</span>
\t\t\t\t\t\t</a>
\t\t\t\t\t</li>
\t\t\t\t";
            // line 37
            if (($context["S_REGISTERED_USER"] ?? null)) {
                // line 38
                echo "\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"";
                // line 39
                echo ($context["U_SEARCH_SELF"] ?? null);
                echo "\" role=\"menuitem\">
\t\t\t\t\t\t\t<i class=\"icon fa-file-o fa-fw icon-gray\" aria-hidden=\"true\"></i><span>";
                // line 40
                echo $this->extensions['phpbb\template\twig\extension']->lang("SEARCH_SELF");
                echo "</span>
\t\t\t\t\t</a>
\t\t\t\t\t</li>
\t\t\t\t";
            }
            // line 44
            echo "\t\t\t\t
\t\t\t\t";
            // line 45
            if (($context["S_USER_LOGGED_IN"] ?? null)) {
                // line 46
                echo "\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"";
                // line 47
                echo ($context["U_SEARCH_NEW"] ?? null);
                echo "\" role=\"menuitem\">
\t\t\t\t\t\t\t<i class=\"icon fa-file-o fa-fw icon-red\" aria-hidden=\"true\"></i><span>";
                // line 48
                echo $this->extensions['phpbb\template\twig\extension']->lang("SEARCH_NEW");
                echo "</span>
\t\t\t\t\t\t</a>
\t\t\t\t\t</li>
\t\t\t\t";
            }
            // line 52
            echo " 
\t\t\t\t";
            // line 53
            if (($context["S_LOAD_UNREADS"] ?? null)) {
                // line 54
                echo "\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"";
                // line 55
                echo ($context["U_SEARCH_UNREAD"] ?? null);
                echo "\" role=\"menuitem\">
\t\t\t\t\t\t\t<i class=\"icon fa-file-o fa-fw icon-red\" aria-hidden=\"true\"></i><span>";
                // line 56
                echo $this->extensions['phpbb\template\twig\extension']->lang("SEARCH_UNREAD");
                echo "</span>
\t\t\t\t\t</a>
\t\t\t\t\t</li>
\t\t\t\t";
            }
            // line 60
            echo "\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"";
            // line 61
            echo ($context["U_SEARCH_UNANSWERED"] ?? null);
            echo "\" role=\"menuitem\">
\t\t\t\t\t\t\t<i class=\"icon fa-file-o fa-fw icon-gray\" aria-hidden=\"true\"></i><span>";
            // line 62
            echo $this->extensions['phpbb\template\twig\extension']->lang("SEARCH_UNANSWERED");
            echo "</span>
\t\t\t\t\t\t</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"";
            // line 66
            echo ($context["U_SEARCH_ACTIVE_TOPICS"] ?? null);
            echo "\" role=\"menuitem\">
\t\t\t\t\t\t\t<i class=\"icon fa-file-o fa-fw icon-blue\" aria-hidden=\"true\"></i><span>";
            // line 67
            echo $this->extensions['phpbb\template\twig\extension']->lang("SEARCH_ACTIVE_TOPICS");
            echo "</span>
\t\t\t\t\t\t</a>
\t\t\t\t\t</li>
\t\t\t\t";
        }
        // line 71
        echo "
\t\t\t\t";
        // line 72
        $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
        $this->env->setNamespaceLookUpOrder(array('spaceace_ajaxchat', '__main__'));
        $this->env->loadTemplate('@spaceace_ajaxchat/event/navbar_header_quick_links_after.html')->display($context);
        $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        // line 73
        echo "
\t\t\t\t";
        // line 74
        if (( !($context["S_IS_BOT"] ?? null) && (($context["S_DISPLAY_MEMBERLIST"] ?? null) || ($context["U_TEAM"] ?? null)))) {
            // line 75
            echo "\t\t\t\t";
            if (($context["S_DISPLAY_MEMBERLIST"] ?? null)) {
                // line 76
                echo "\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"";
                // line 77
                echo ($context["U_MEMBERLIST"] ?? null);
                echo "\" role=\"menuitem\">
\t\t\t\t\t\t\t<i class=\"icon fa-group fa-fw\" aria-hidden=\"true\"></i><span>";
                // line 78
                echo $this->extensions['phpbb\template\twig\extension']->lang("MEMBERLIST");
                echo "</span>
\t\t\t\t\t\t</a>
\t\t\t\t\t</li>
\t\t\t\t";
            }
            // line 82
            echo "\t\t\t\t";
            if (($context["U_TEAM"] ?? null)) {
                // line 83
                echo "\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"";
                // line 84
                echo ($context["U_TEAM"] ?? null);
                echo "\" role=\"menuitem\">
\t\t\t\t\t\t\t<i class=\"icon fa-shield fa-fw\" aria-hidden=\"true\"></i><span>";
                // line 85
                echo $this->extensions['phpbb\template\twig\extension']->lang("THE_TEAM");
                echo "</span>
\t\t\t\t\t\t</a>
\t\t\t\t\t</li>
\t\t\t\t";
            }
            // line 89
            echo "\t\t\t\t";
        }
        // line 90
        echo "\t
\t\t\t\t";
        // line 91
        if (($context["U_ACP"] ?? null)) {
            // line 92
            echo "\t\t\t\t\t<li data-last-responsive=\"true\">
\t\t\t\t\t\t<a href=\"";
            // line 93
            echo ($context["U_ACP"] ?? null);
            echo "\" title=\"";
            echo $this->extensions['phpbb\template\twig\extension']->lang("ACP");
            echo "\" role=\"menuitem\">
\t\t\t\t\t\t\t<i class=\"icon fa-cogs fa-fw\" aria-hidden=\"true\"></i><span>";
            // line 94
            echo $this->extensions['phpbb\template\twig\extension']->lang("ACP_SHORT");
            echo "</span>
\t\t\t\t\t\t</a>
\t\t\t\t\t</li>
\t\t\t\t";
        }
        // line 98
        echo "\t\t\t\t";
        if (($context["U_MCP"] ?? null)) {
            // line 99
            echo "\t\t\t\t\t<li data-last-responsive=\"true\">
\t\t\t\t\t\t<a href=\"";
            // line 100
            echo ($context["U_MCP"] ?? null);
            echo "\" title=\"";
            echo $this->extensions['phpbb\template\twig\extension']->lang("MCP");
            echo "\" role=\"menuitem\">
\t\t\t\t\t\t\t<i class=\"icon fa-gavel fa-fw\" aria-hidden=\"true\"></i><span>";
            // line 101
            echo $this->extensions['phpbb\template\twig\extension']->lang("MCP_SHORT");
            echo "</span>
\t\t\t\t\t\t</a>
\t\t\t\t\t</li>
\t\t\t\t";
        }
        // line 105
        echo "
\t\t\t\t";
        // line 106
        $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
        $this->env->setNamespaceLookUpOrder(array('spaceace_ajaxchat', '__main__'));
        $this->env->loadTemplate('@spaceace_ajaxchat/event/overall_header_navigation_append.html')->display($context);
        $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        // line 107
        echo "\t\t\t
        </ul>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "navbar_responsive_header.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  303 => 107,  298 => 106,  295 => 105,  288 => 101,  282 => 100,  279 => 99,  276 => 98,  269 => 94,  263 => 93,  260 => 92,  258 => 91,  255 => 90,  252 => 89,  245 => 85,  241 => 84,  238 => 83,  235 => 82,  228 => 78,  224 => 77,  221 => 76,  218 => 75,  216 => 74,  213 => 73,  208 => 72,  205 => 71,  198 => 67,  194 => 66,  187 => 62,  183 => 61,  180 => 60,  173 => 56,  169 => 55,  166 => 54,  164 => 53,  161 => 52,  154 => 48,  150 => 47,  147 => 46,  145 => 45,  142 => 44,  135 => 40,  131 => 39,  128 => 38,  126 => 37,  120 => 34,  116 => 33,  113 => 32,  111 => 31,  108 => 30,  107 => 29,  100 => 25,  94 => 24,  86 => 23,  83 => 22,  82 => 21,  69 => 17,  65 => 16,  61 => 14,  54 => 10,  50 => 9,  47 => 8,  45 => 7,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "navbar_responsive_header.html", "");
    }
}
