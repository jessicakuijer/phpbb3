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

/* @spaceace_ajaxchat/event/overall_header_navigation_append.html */
class __TwigTemplate_9e70b2928f5739166f3f7094b26ccf28 extends \Twig\Template
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
        if (((($context["S_CHAT_ENABLED"] ?? null) && ($context["S_CHAT_NAV_LINK"] ?? null)) && (($context["CHAT_PAGE"] ?? null) != "chat"))) {
            // line 2
            echo "\t";
            if (($context["S_AJAXCHAT_VIEW"] ?? null)) {
                // line 3
                echo "\t\t";
                if (($context["IS_PHPBB31"] ?? null)) {
                    // line 4
                    echo "\t\t\t<li class=\"small-icon data-last-responsive chat-icon-link\"><a href=\"";
                    echo ($context["U_CHAT"] ?? null);
                    echo "\" title=\"";
                    echo $this->extensions['phpbb\template\twig\extension']->lang("CHAT_EXPLAIN");
                    echo "\" role=\"menuitem\">";
                    echo $this->extensions['phpbb\template\twig\extension']->lang("CHAT_EXPLAIN");
                    echo "</a></li>
\t\t";
                } elseif (                // line 5
($context["IS_PHPBB32"] ?? null)) {
                    // line 6
                    echo "\t\t\t<li><a href=\"";
                    echo ($context["U_CHAT"] ?? null);
                    echo "\" title=\"";
                    echo $this->extensions['phpbb\template\twig\extension']->lang("CHAT_EXPLAIN");
                    echo "\" role=\"menuitem\"><i class=\"icon fa-comments fa-fw\" aria-hidden=\"true\"></i>";
                    echo $this->extensions['phpbb\template\twig\extension']->lang("CHAT_EXPLAIN");
                    echo "</a></li>
\t\t";
                }
                // line 8
                echo "\t";
            }
        }
    }

    public function getTemplateName()
    {
        return "@spaceace_ajaxchat/event/overall_header_navigation_append.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 8,  56 => 6,  54 => 5,  45 => 4,  42 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@spaceace_ajaxchat/event/overall_header_navigation_append.html", "");
    }
}
