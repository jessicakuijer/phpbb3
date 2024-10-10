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

/* chatrow_message_icons.html */
class __TwigTemplate_616387df1cadb3f9fa132800c5c9d0f0 extends \Twig\Template
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
        echo "<span class=\"pull-right top-pad\">
\t";
        // line 2
        // line 3
        echo "\t";
        if (($context["S_BBCODE_ALLOWED"] ?? null)) {
            // line 4
            echo "\t\t<a href=\"javascript:void(0)\" onClick=\"chatquote('";
            echo twig_get_attribute($this->env, $this->source, ($context["chatrow"] ?? null), "MESSAGE_ID", [], "any", false, false, false, 4);
            echo "')\" title=\"";
            echo $this->extensions['phpbb\template\twig\extension']->lang("CHAT_QUOTE");
            echo "\"><i class=\"fa fa-quote-left fa-fw\"></i></a>
\t";
        }
        // line 6
        echo "\t";
        if (twig_get_attribute($this->env, $this->source, ($context["chatrow"] ?? null), "S_AJAXCHAT_EDIT", [], "any", false, false, false, 6)) {
            // line 7
            echo "\t\t<a href=\"javascript:void(0)\" onClick=\"popup('";
            echo twig_get_attribute($this->env, $this->source, ($context["chatrow"] ?? null), "U_EDIT", [], "any", false, false, false, 7);
            echo "', 600, 250)\" title=\"";
            echo $this->extensions['phpbb\template\twig\extension']->lang("CHAT_EDIT");
            echo "\" ><i class=\"fa fa-pencil-square-o fa-fw\"></i></a>
\t";
        }
        // line 9
        echo "\t";
        if ((($context["M_AJAXCHAT_DELETE"] ?? null) || ($context["U_ACP"] ?? null))) {
            // line 10
            echo "\t\t<a href=\"javascript:void(0)\" title=\"";
            echo $this->extensions['phpbb\template\twig\extension']->lang("DELETE_CHAT_MESSAGE");
            echo "\" onClick=\"delete_post('";
            echo twig_get_attribute($this->env, $this->source, ($context["chatrow"] ?? null), "MESSAGE_ID", [], "any", false, false, false, 10);
            echo "')\"><i class=\"fa fa-trash-o fa-fw\"></i></a>
\t";
        }
        // line 12
        echo "\t";
        // line 13
        echo "</span>
";
    }

    public function getTemplateName()
    {
        return "chatrow_message_icons.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 13,  74 => 12,  66 => 10,  63 => 9,  55 => 7,  52 => 6,  44 => 4,  41 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "chatrow_message_icons.html", "");
    }
}
