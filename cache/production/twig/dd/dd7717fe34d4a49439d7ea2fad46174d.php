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

/* @spaceace_ajaxchat/chat_body_whois.html */
class __TwigTemplate_b38bdbf0cc94b4ff10f83ba2e3bce982 extends \Twig\Template
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
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "whoisrow", [], "any", false, false, false, 1));
        foreach ($context['_seq'] as $context["_key"] => $context["whoisrow"]) {
            // line 2
            echo "\t<div class=\"whois_status";
            if ((( !($context["S_AJAX_CHAT_ONLINELIST"] ?? null) || (($context["CHAT_PAGE"] ?? null) == "archive")) ||  !($context["S_WHOIS_CHATTING"] ?? null))) {
                echo " whois_online_off";
            }
            echo "\">
\t\t<img src=\"";
            // line 3
            echo ($context["BOARD_URL"] ?? null);
            echo "ext/spaceace/ajaxchat/styles/all/theme/images/";
            echo twig_get_attribute($this->env, $this->source, $context["whoisrow"], "USER_STATUS", [], "any", false, false, false, 3);
            echo ".png\" class=\"status_img\" alt=\"";
            echo twig_get_attribute($this->env, $this->source, $context["whoisrow"], "USER_STATUS", [], "any", false, false, false, 3);
            echo "\" />&nbsp;";
            echo twig_get_attribute($this->env, $this->source, $context["whoisrow"], "USERNAME_FULL", [], "any", false, false, false, 3);
            echo "&nbsp;
\t</div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['whoisrow'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "@spaceace_ajaxchat/chat_body_whois.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 3,  41 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@spaceace_ajaxchat/chat_body_whois.html", "");
    }
}
