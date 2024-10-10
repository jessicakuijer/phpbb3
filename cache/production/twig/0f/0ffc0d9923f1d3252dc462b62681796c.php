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

/* @spaceace_ajaxchat/chat_body_script_vars.html */
class __TwigTemplate_6ae010b3eff5942916588a93d9369288 extends \Twig\Template
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
\t\tvar post_time = ";
        // line 5
        echo ($context["LAST_POST"] ?? null);
        echo ";
\t\tvar read_interval = (";
        // line 6
        echo ($context["REFRESH_TIME"] ?? null);
        echo " * 1000);
\t\tvar chat_empty = '";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['phpbb\template\twig\extension']->lang("EMPTY"), "js");
        echo "';
\t\tvar ie_no_ajax = '";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['phpbb\template\twig\extension']->lang("IE_NO_AJAX"), "js");
        echo "';
\t\tvar cookie_name = '";
        // line 9
        echo ($context["AJAX_CHAT_COOKIE_NAME"] ?? null);
        echo "';
\t\tvar upgrade_browser = '";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['phpbb\template\twig\extension']->lang("UPGRADE_BROWSER"), "js");
        echo "';
\t\tvar query_url\t= '";
        // line 11
        echo ($context["FILENAME"] ?? null);
        echo "';
\t\tvar chat_error_del = '";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['phpbb\template\twig\extension']->lang("NO_DEL_PERMISSION"), "js");
        echo "';
\t\tvar chat_error_post = '";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['phpbb\template\twig\extension']->lang("NO_POST_IN_CHAT"), "js");
        echo "';
\t\tvar chat_error_view = '";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['phpbb\template\twig\extension']->lang("NO_VIEW_PERMISSION"), "js");
        echo "';
\t\tvar chat_username_title = '";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['phpbb\template\twig\extension']->lang("RESPOND"), "js");
        echo "';
\t\t";
        // line 16
        if (($context["S_POPUP"] ?? null)) {
            // line 17
            echo "\t\t\tvar query_url = '";
            echo ($context["FILENAME"] ?? null);
            echo "/popup';
\t\t";
        } elseif (        // line 18
($context["S_ARCHIVE"] ?? null)) {
            // line 19
            echo "\t\t\tvar query_url = '";
            echo ($context["FILENAME"] ?? null);
            echo "/archive';
\t\t";
        }
        // line 21
        echo "\t\tvar chatbbcodetrue = ";
        if (($context["S_AJAXCHAT_BBCODE"] ?? null)) {
            echo "true";
        } else {
            echo "false";
        }
        echo ";
\t\tvar chatmessagedown = ";
        // line 22
        if (($context["S_AJAX_CHAT_MESSAGES_DOWN"] ?? null)) {
            echo "false";
        } else {
            echo "true";
        }
        echo ";
\t//]]>
</script>";
    }

    public function getTemplateName()
    {
        return "@spaceace_ajaxchat/chat_body_script_vars.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 22,  108 => 21,  102 => 19,  100 => 18,  95 => 17,  93 => 16,  89 => 15,  85 => 14,  81 => 13,  77 => 12,  73 => 11,  69 => 10,  65 => 9,  61 => 8,  57 => 7,  53 => 6,  49 => 5,  45 => 4,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@spaceace_ajaxchat/chat_body_script_vars.html", "");
    }
}
