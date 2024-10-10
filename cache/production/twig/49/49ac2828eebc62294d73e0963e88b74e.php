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

/* chat_edit_script_vars.html */
class __TwigTemplate_399c6098cc18c03c8d233070681f20e5 extends \Twig\Template
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
        echo "<script type=\"text/javascript\">
\t// <![CDATA[
\t\tvar last_time = ";
        // line 3
        echo ($context["TIME"] ?? null);
        echo ";
\t\tvar last_id = ";
        // line 4
        echo ($context["LAST_ID"] ?? null);
        echo ";
\t\tvar read_interval = (";
        // line 5
        echo ($context["REFRESH_TIME"] ?? null);
        echo " * 1000);
\t\tvar cookie_name = '";
        // line 6
        echo ($context["AJAX_CHAT_COOKIE_NAME"] ?? null);
        echo "';
\t\tvar query_url\t= '";
        // line 7
        echo ($context["FILENAME"] ?? null);
        echo "';
\t\tvar chat_username_title = '";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['phpbb\template\twig\extension']->lang("RESPOND"), "js");
        echo "';
\t\tvar chatbbcodetrue = ";
        // line 9
        if (($context["S_AJAXCHAT_BBCODE"] ?? null)) {
            echo "true";
        } else {
            echo "false";
        }
        echo ";
\t\tvar chatmessagedown = ";
        // line 10
        if (($context["S_AJAX_CHAT_MESSAGES_DOWN"] ?? null)) {
            echo "false";
        } else {
            echo "true";
        }
        echo ";
\t\tvar chat_username_title = '";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['phpbb\template\twig\extension']->lang("RESPOND"), "js");
        echo "';
\t//]]>
</script>";
    }

    public function getTemplateName()
    {
        return "chat_edit_script_vars.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 11,  73 => 10,  65 => 9,  61 => 8,  57 => 7,  53 => 6,  49 => 5,  45 => 4,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "chat_edit_script_vars.html", "");
    }
}
