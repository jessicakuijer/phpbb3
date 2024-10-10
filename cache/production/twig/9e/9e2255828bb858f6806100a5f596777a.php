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

/* @spaceace_ajaxchat/event/navbar_header_quick_links_after.html */
class __TwigTemplate_4ed232488f1e1e2371b33fcd2688c65e extends \Twig\Template
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
        if (((($context["S_CHAT_ENABLED"] ?? null) && ($context["S_CHAT_QUICK_LINK"] ?? null)) && (($context["CHAT_PAGE"] ?? null) != "chat"))) {
            // line 2
            echo "\t";
            if (($context["S_AJAXCHAT_VIEW"] ?? null)) {
                // line 3
                echo "\t\t";
                if (($context["IS_PHPBB31"] ?? null)) {
                    // line 4
                    echo "\t\t\t<li class=\"list chat-icon\"><a href=\"";
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
        return "@spaceace_ajaxchat/event/navbar_header_quick_links_after.html";
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
        return new Source("", "@spaceace_ajaxchat/event/navbar_header_quick_links_after.html", "");
    }
}
