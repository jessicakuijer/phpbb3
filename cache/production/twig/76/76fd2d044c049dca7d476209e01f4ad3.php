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

/* ucp_ajax_chat.html */
class __TwigTemplate_540d5a63af751c95ba0fcb01e8b24c59 extends \Twig\Template
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
        $location = "ucp_header.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("ucp_header.html", "ucp_ajax_chat.html", 1)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 2
        echo "
<form id=\"ucp\" method=\"post\" action=\"";
        // line 3
        echo ($context["S_UCP_ACTION"] ?? null);
        echo "\"";
        echo ($context["S_FORM_ENCTYPE"] ?? null);
        echo ">
";
        // line 4
        if (($context["S_AJAXCHAT_VIEW"] ?? null)) {
            // line 5
            echo "<h2>";
            echo $this->extensions['phpbb\template\twig\extension']->lang("USER_AJAXCHAT_SETTINGS");
            echo "</h2>

<div class=\"panel\">
\t<div class=\"inner\">

\t<fieldset>
\t";
            // line 11
            if (($context["ERROR"] ?? null)) {
                echo "<p class=\"error\">";
                echo ($context["ERROR"] ?? null);
                echo "</p>";
            }
            // line 12
            echo "
\t<dl>
\t\t<dt><label for=\"ajax_chat_view0\">";
            // line 14
            echo $this->extensions['phpbb\template\twig\extension']->lang("USER_AJAX_CHAT_VIEW");
            echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
            echo "</label></dt>
\t\t<dd>
\t\t\t<label for=\"ajax_chat_view1\"><input type=\"radio\" name=\"ajax_chat_view\" id=\"view_chat1\" value=\"1\"";
            // line 16
            if (($context["S_AJAX_CHAT_VIEW"] ?? null)) {
                echo " checked=\"checked\"";
            }
            echo " /> ";
            echo $this->extensions['phpbb\template\twig\extension']->lang("YES");
            echo "</label> 
\t\t\t<label for=\"ajax_chat_view0\"><input type=\"radio\" name=\"ajax_chat_view\" id=\"view_chat0\" value=\"0\"";
            // line 17
            if ( !($context["S_AJAX_CHAT_VIEW"] ?? null)) {
                echo " checked=\"checked\"";
            }
            echo " /> ";
            echo $this->extensions['phpbb\template\twig\extension']->lang("NO");
            echo "</label>
\t\t</dd>
\t</dl>
\t";
            // line 20
            if ( !($context["S_AJAX_CHAT_POSITION_OVERRIDE"] ?? null)) {
                // line 21
                echo "\t\t<dl>
\t\t\t<dt><label for=\"ajax_chat_position0\">";
                // line 22
                echo $this->extensions['phpbb\template\twig\extension']->lang("USER_AJAX_CHAT_POSITION");
                echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
                echo "</label></dt>
\t\t\t<dd>
\t\t\t\t<label for=\"ajax_chat_position1\"><input type=\"radio\" name=\"ajax_chat_position\" id=\"ajax_chat_position1\" value=\"1\"";
                // line 24
                if (($context["S_AJAX_CHAT_POSITION"] ?? null)) {
                    echo " checked=\"checked\"";
                }
                echo " /> ";
                echo $this->extensions['phpbb\template\twig\extension']->lang("CHAT_TOP");
                echo "</label> 
\t\t\t\t<label for=\"ajax_chat_position0\"><input type=\"radio\" name=\"ajax_chat_position\" id=\"ajax_chat_position0\" value=\"0\"";
                // line 25
                if ( !($context["S_AJAX_CHAT_POSITION"] ?? null)) {
                    echo " checked=\"checked\"";
                }
                echo " /> ";
                echo $this->extensions['phpbb\template\twig\extension']->lang("CHAT_BOTTOM");
                echo "</label>
\t\t\t</dd>
\t\t</dl>
\t";
            }
            // line 29
            echo "\t<dl>
\t\t<dt><label for=\"ajax_chat_messages_down0\">";
            // line 30
            echo $this->extensions['phpbb\template\twig\extension']->lang("AJAX_CHAT_MESSAGES_DOWN");
            echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
            echo "</label></dt>
\t\t<dd>
\t\t\t<label for=\"ajax_chat_messages_down1\"><input type=\"radio\" name=\"ajax_chat_messages_down\" id=\"ajax_chat_messages_down1\" value=\"1\"";
            // line 32
            if (($context["S_AJAX_CHAT_MESSAGES_DOWN"] ?? null)) {
                echo " checked=\"checked\"";
            }
            echo " /> ";
            echo $this->extensions['phpbb\template\twig\extension']->lang("CHAT_TOP");
            echo "</label> 
\t\t\t<label for=\"ajax_chat_messages_down0\"><input type=\"radio\" name=\"ajax_chat_messages_down\" id=\"ajax_chat_messages_down0\" value=\"0\"";
            // line 33
            if ( !($context["S_AJAX_CHAT_MESSAGES_DOWN"] ?? null)) {
                echo " checked=\"checked\"";
            }
            echo " /> ";
            echo $this->extensions['phpbb\template\twig\extension']->lang("CHAT_BOTTOM");
            echo "</label>
\t\t</dd>
\t</dl>
\t";
            // line 36
            if ( !($context["S_AJAX_CHAT_VIEWFORUM_OVERRIDE"] ?? null)) {
                // line 37
                echo "\t\t<dl>
\t\t\t<dt><label for=\"ajax_chat_viewforum0\">";
                // line 38
                echo $this->extensions['phpbb\template\twig\extension']->lang("USER_AJAX_CHAT_VIEWFORUM");
                echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
                echo "</label></dt>
\t\t\t<dd>
\t\t\t\t<label for=\"ajax_chat_viewforum1\"><input type=\"radio\" name=\"ajax_chat_viewforum\" id=\"ajax_chat_viewforum1\" value=\"1\"";
                // line 40
                if (($context["S_AJAX_CHAT_VIEWFORUM"] ?? null)) {
                    echo " checked=\"checked\"";
                }
                echo " /> ";
                echo $this->extensions['phpbb\template\twig\extension']->lang("YES");
                echo "</label> 
\t\t\t\t<label for=\"ajax_chat_viewforum0\"><input type=\"radio\" name=\"ajax_chat_viewforum\" id=\"ajax_chat_viewforum0\" value=\"0\"";
                // line 41
                if ( !($context["S_AJAX_CHAT_VIEWFORUM"] ?? null)) {
                    echo " checked=\"checked\"";
                }
                echo " /> ";
                echo $this->extensions['phpbb\template\twig\extension']->lang("NO");
                echo "</label>
\t\t\t</dd>
\t\t</dl>
\t";
            }
            // line 45
            echo "\t";
            if ( !($context["S_AJAX_CHAT_VIEWTOPIC_OVERRIDE"] ?? null)) {
                // line 46
                echo "\t\t<dl>
\t\t\t<dt><label for=\"ajax_chat_viewtopic0\">";
                // line 47
                echo $this->extensions['phpbb\template\twig\extension']->lang("USER_AJAX_CHAT_VIEWTOPIC");
                echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
                echo "</label></dt>
\t\t\t<dd>
\t\t\t\t<label for=\"ajax_chat_ajax_chat_viewtopic1\"><input type=\"radio\" name=\"ajax_chat_viewtopic\" id=\"ajax_chat_viewtopic1\" value=\"1\"";
                // line 49
                if (($context["S_AJAX_CHAT_VIEWTOPIC"] ?? null)) {
                    echo " checked=\"checked\"";
                }
                echo " /> ";
                echo $this->extensions['phpbb\template\twig\extension']->lang("YES");
                echo "</label> 
\t\t\t\t<label for=\"ajax_chat_ajax_chat_viewtopic0\"><input type=\"radio\" name=\"ajax_chat_viewtopic\" id=\"ajax_chat_viewtopic0\" value=\"0\"";
                // line 50
                if ( !($context["S_AJAX_CHAT_VIEWTOPIC"] ?? null)) {
                    echo " checked=\"checked\"";
                }
                echo " /> ";
                echo $this->extensions['phpbb\template\twig\extension']->lang("NO");
                echo "</label>
\t\t\t</dd>
\t\t</dl>
\t";
            }
            // line 54
            echo "\t<dl>
\t\t<dt><label for=\"ajax_chat_avatars0\">";
            // line 55
            echo $this->extensions['phpbb\template\twig\extension']->lang("USER_AJAX_CHAT_AVATARS");
            echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
            echo "</label></dt>
\t\t<dd>
\t\t\t<label for=\"ajax_chat_avatars1\"><input type=\"radio\" name=\"ajax_chat_avatars\" id=\"ajax_chat_avatars1\" value=\"1\"";
            // line 57
            if (($context["S_AJAX_CHAT_AVATARS"] ?? null)) {
                echo " checked=\"checked\"";
            }
            echo " /> ";
            echo $this->extensions['phpbb\template\twig\extension']->lang("YES");
            echo "</label> 
\t\t\t<label for=\"ajax_chat_avatars0\"><input type=\"radio\" name=\"ajax_chat_avatars\" id=\"ajax_chat_avatars0\" value=\"0\"";
            // line 58
            if ( !($context["S_AJAX_CHAT_AVATARS"] ?? null)) {
                echo " checked=\"checked\"";
            }
            echo " /> ";
            echo $this->extensions['phpbb\template\twig\extension']->lang("NO");
            echo "</label>
\t\t</dd>
\t</dl>
\t<dl>
\t\t<dt><label for=\"ajax_chat_avatar_hover0\">";
            // line 62
            echo $this->extensions['phpbb\template\twig\extension']->lang("USER_AJAX_CHAT_AVATAR_HOVER");
            echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
            echo "</label></dt>
\t\t<dd>
\t\t\t<label for=\"ajax_chat_avatar_hover1\"><input type=\"radio\" name=\"ajax_chat_avatar_hover\" id=\"ajax_chat_avatar_hover1\" value=\"1\"";
            // line 64
            if (($context["S_AJAX_CHAT_AVATAR_HOVER"] ?? null)) {
                echo " checked=\"checked\"";
            }
            echo " /> ";
            echo $this->extensions['phpbb\template\twig\extension']->lang("YES");
            echo "</label> 
\t\t\t<label for=\"ajax_chat_avatar_hover0\"><input type=\"radio\" name=\"ajax_chat_avatar_hover\" id=\"ajax_chat_avatar_hover0\" value=\"0\"";
            // line 65
            if ( !($context["S_AJAX_CHAT_AVATAR_HOVER"] ?? null)) {
                echo " checked=\"checked\"";
            }
            echo " /> ";
            echo $this->extensions['phpbb\template\twig\extension']->lang("NO");
            echo "</label>
\t\t</dd>
\t</dl>
\t<dl>
\t\t<dt><label for=\"ajax_chat_sound0\">";
            // line 69
            echo $this->extensions['phpbb\template\twig\extension']->lang("USER_AJAX_CHAT_SOUND");
            echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
            echo "</label></dt>
\t\t<dd>
\t\t\t<label for=\"ajax_chat_sound1\"><input type=\"radio\" name=\"ajax_chat_sound\" id=\"ajax_chat_sound1\" value=\"1\"";
            // line 71
            if (($context["S_AJAX_CHAT_SOUND"] ?? null)) {
                echo " checked=\"checked\"";
            }
            echo " /> ";
            echo $this->extensions['phpbb\template\twig\extension']->lang("YES");
            echo "</label> 
\t\t\t<label for=\"ajax_chat_sound0\"><input type=\"radio\" name=\"ajax_chat_sound\" id=\"ajax_chat_sound0\" value=\"0\"";
            // line 72
            if ( !($context["S_AJAX_CHAT_SOUND"] ?? null)) {
                echo " checked=\"checked\"";
            }
            echo " /> ";
            echo $this->extensions['phpbb\template\twig\extension']->lang("NO");
            echo "</label>
\t\t</dd>
\t</dl>
\t<dl>
\t\t<dt><label for=\"ajax_chat_onlinelist0\">";
            // line 76
            echo $this->extensions['phpbb\template\twig\extension']->lang("USER_AJAX_CHAT_ONLINELIST");
            echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
            echo "</label></dt>
\t\t<dd>
\t\t\t<label for=\"ajax_chat_onlinelist1\"><input type=\"radio\" name=\"ajax_chat_onlinelist\" id=\"ajax_chat_onlinelist1\" value=\"1\"";
            // line 78
            if (($context["S_AJAX_CHAT_ONLINELIST"] ?? null)) {
                echo " checked=\"checked\"";
            }
            echo " /> ";
            echo $this->extensions['phpbb\template\twig\extension']->lang("YES");
            echo "</label> 
\t\t\t<label for=\"ajax_chat_onlinelist0\"><input type=\"radio\" name=\"ajax_chat_onlinelist\" id=\"ajax_chat_onlinelist0\" value=\"0\"";
            // line 79
            if ( !($context["S_AJAX_CHAT_ONLINELIST"] ?? null)) {
                echo " checked=\"checked\"";
            }
            echo " /> ";
            echo $this->extensions['phpbb\template\twig\extension']->lang("NO");
            echo "</label>
\t\t</dd>
\t</dl>
\t<dl>
\t\t<dt><label for=\"ajax_chat_autocomplete0\">";
            // line 83
            echo $this->extensions['phpbb\template\twig\extension']->lang("USER_AJAX_CHAT_AUTOCOMPLETE");
            echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
            echo "</label></dt>
\t\t<dd>
\t\t\t<label for=\"ajax_chat_autocomplete1\"><input type=\"radio\" name=\"ajax_chat_autocomplete\" id=\"ajax_chat_autocomplete1\" value=\"1\"";
            // line 85
            if (($context["S_AJAX_CHAT_AUTOCOMPLETE"] ?? null)) {
                echo " checked=\"checked\"";
            }
            echo " /> ";
            echo $this->extensions['phpbb\template\twig\extension']->lang("YES");
            echo "</label> 
\t\t\t<label for=\"ajax_chat_autocomplete0\"><input type=\"radio\" name=\"ajax_chat_autocomplete\" id=\"ajax_chat_autocomplete0\" value=\"0\"";
            // line 86
            if ( !($context["S_AJAX_CHAT_AUTOCOMPLETE"] ?? null)) {
                echo " checked=\"checked\"";
            }
            echo " /> ";
            echo $this->extensions['phpbb\template\twig\extension']->lang("NO");
            echo "</label>
\t\t</dd>
\t</dl>

\t</fieldset>

\t</div>
</div>

\t<fieldset class=\"submit-buttons\">
\t\t";
            // line 96
            echo ($context["S_HIDDEN_FIELDS"] ?? null);
            echo "<input type=\"reset\" value=\"";
            echo $this->extensions['phpbb\template\twig\extension']->lang("RESET");
            echo "\" name=\"reset\" class=\"button2\" />&nbsp;
\t\t<input type=\"submit\" name=\"submit\" value=\"";
            // line 97
            echo $this->extensions['phpbb\template\twig\extension']->lang("SUBMIT");
            echo "\" class=\"button1\" />
\t\t";
            // line 98
            echo ($context["S_FORM_TOKEN"] ?? null);
            echo "
\t</fieldset>
";
        } else {
            // line 101
            echo "\t<h2>";
            echo $this->extensions['phpbb\template\twig\extension']->lang("USER_AJAXCHAT_SETTINGS");
            echo "</h2>

\t<div class=\"panel\">
\t\t<div class=\"inner\">
\t\t\t";
            // line 105
            echo $this->extensions['phpbb\template\twig\extension']->lang("NO_VIEW_CHAT");
            echo "
\t\t</div>
\t</div>
";
        }
        // line 109
        echo "</form>

";
        // line 111
        $location = "ucp_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("ucp_footer.html", "ucp_ajax_chat.html", 111)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
    }

    public function getTemplateName()
    {
        return "ucp_ajax_chat.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  391 => 111,  387 => 109,  380 => 105,  372 => 101,  366 => 98,  362 => 97,  356 => 96,  339 => 86,  331 => 85,  325 => 83,  314 => 79,  306 => 78,  300 => 76,  289 => 72,  281 => 71,  275 => 69,  264 => 65,  256 => 64,  250 => 62,  239 => 58,  231 => 57,  225 => 55,  222 => 54,  211 => 50,  203 => 49,  197 => 47,  194 => 46,  191 => 45,  180 => 41,  172 => 40,  166 => 38,  163 => 37,  161 => 36,  151 => 33,  143 => 32,  137 => 30,  134 => 29,  123 => 25,  115 => 24,  109 => 22,  106 => 21,  104 => 20,  94 => 17,  86 => 16,  80 => 14,  76 => 12,  70 => 11,  60 => 5,  58 => 4,  52 => 3,  49 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "ucp_ajax_chat.html", "");
    }
}
