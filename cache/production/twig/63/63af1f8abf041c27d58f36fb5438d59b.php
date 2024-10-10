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

/* navbar_header.html */
class __TwigTemplate_3f21f094e713f8a27b7fa9852acfd673 extends \Twig\Template
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
        echo "<nav role=\"navigation\">
\t<ul class=\"linklist bulletin inventea-forum-menu\" role=\"menubar\">
\t\t";
        // line 3
        // line 4
        echo "
\t\t";
        // line 5
        if (($context["U_SITE_HOME"] ?? null)) {
            echo "<li data-skip-responsive=\"true\"><a href=\"";
            echo ($context["U_SITE_HOME"] ?? null);
            echo "\" title=\"";
            echo $this->extensions['phpbb\template\twig\extension']->lang("SITE_HOME");
            echo "\" role=\"menuitem\">";
            echo $this->extensions['phpbb\template\twig\extension']->lang("SITE_HOME");
            echo "</a></li>";
        }
        // line 6
        echo "\t\t<li data-skip-responsive=\"true\"><a href=\"";
        echo ($context["U_INDEX"] ?? null);
        echo "\" title=\"";
        echo $this->extensions['phpbb\template\twig\extension']->lang("INDEX");
        echo "\" role=\"menuitem\">";
        echo $this->extensions['phpbb\template\twig\extension']->lang("INDEX");
        echo "</a></li>
\t\t<li><a href=\"";
        // line 7
        echo ($context["U_FAQ"] ?? null);
        echo "\" rel=\"help\" title=\"";
        echo $this->extensions['phpbb\template\twig\extension']->lang("FAQ_EXPLAIN");
        echo "\" role=\"menuitem\">";
        echo $this->extensions['phpbb\template\twig\extension']->lang("FAQ");
        echo "</a></li>
\t\t";
        // line 8
        if (($context["S_DISPLAY_SEARCH"] ?? null)) {
            echo "<li data-skip-responsive=\"true\"><a href=\"";
            echo ($context["U_SEARCH"] ?? null);
            echo "\" role=\"menuitem\">";
            echo $this->extensions['phpbb\template\twig\extension']->lang("SEARCH");
            echo "</a></li>";
        }
        // line 9
        echo "
\t\t";
        // line 10
        if ( !($context["S_IS_BOT"] ?? null)) {
            // line 11
            echo "\t\t\t";
            if (($context["S_DISPLAY_MEMBERLIST"] ?? null)) {
                echo "<li><a href=\"";
                echo ($context["U_MEMBERLIST"] ?? null);
                echo "\" role=\"menuitem\">";
                echo $this->extensions['phpbb\template\twig\extension']->lang("MEMBERLIST");
                echo "</a></li>";
            }
            // line 12
            echo "\t\t\t";
            if (($context["U_TEAM"] ?? null)) {
                echo "<li><a href=\"";
                echo ($context["U_TEAM"] ?? null);
                echo "\" role=\"menuitem\">";
                echo $this->extensions['phpbb\template\twig\extension']->lang("THE_TEAM");
                echo "</a></li>";
            }
            // line 13
            echo "\t\t";
        }
        // line 14
        echo "
\t\t";
        // line 15
        if (($context["S_DISPLAY_SEARCH"] ?? null)) {
            // line 16
            echo "\t\t\t<li data-skip-responsive=\"true\"><a href=\"";
            echo ($context["U_SEARCH_UNANSWERED"] ?? null);
            echo "\" role=\"menuitem\">";
            echo $this->extensions['phpbb\template\twig\extension']->lang("SEARCH_UNANSWERED");
            echo "</a></li>
\t\t\t<li data-skip-responsive=\"true\"><a href=\"";
            // line 17
            echo ($context["U_SEARCH_ACTIVE_TOPICS"] ?? null);
            echo "\" role=\"menuitem\">";
            echo $this->extensions['phpbb\template\twig\extension']->lang("SEARCH_ACTIVE_TOPICS");
            echo "</a></li>
\t\t";
        }
        // line 19
        echo "
\t\t";
        // line 20
        if (($context["U_MCP"] ?? null)) {
            echo "<li><a href=\"";
            echo ($context["U_MCP"] ?? null);
            echo "\" title=\"";
            echo $this->extensions['phpbb\template\twig\extension']->lang("MCP");
            echo "\" role=\"menuitem\">";
            echo $this->extensions['phpbb\template\twig\extension']->lang("MCP_SHORT");
            echo "</a></li>";
        }
        // line 21
        echo "\t\t";
        if (($context["U_ACP"] ?? null)) {
            echo "<li><a href=\"";
            echo ($context["U_ACP"] ?? null);
            echo "\" title=\"";
            echo $this->extensions['phpbb\template\twig\extension']->lang("ACP");
            echo "\" role=\"menuitem\">";
            echo $this->extensions['phpbb\template\twig\extension']->lang("ACP_SHORT");
            echo "</a></li>";
        }
        // line 22
        echo "
\t\t";
        // line 23
        $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
        $this->env->setNamespaceLookUpOrder(array('spaceace_ajaxchat', '__main__'));
        $this->env->loadTemplate('@spaceace_ajaxchat/event/overall_header_navigation_append.html')->display($context);
        $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        // line 24
        echo "\t</ul>
</nav>
";
    }

    public function getTemplateName()
    {
        return "navbar_header.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  157 => 24,  152 => 23,  149 => 22,  138 => 21,  128 => 20,  125 => 19,  118 => 17,  111 => 16,  109 => 15,  106 => 14,  103 => 13,  94 => 12,  85 => 11,  83 => 10,  80 => 9,  72 => 8,  64 => 7,  55 => 6,  45 => 5,  42 => 4,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "navbar_header.html", "");
    }
}
