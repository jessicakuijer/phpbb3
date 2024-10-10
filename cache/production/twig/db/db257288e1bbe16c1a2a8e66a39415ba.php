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

/* @spaceace_ajaxchat/chat_body_input_full.html */
class __TwigTemplate_74f70a14d695e67305b8b8cb27e6a9f3 extends \Twig\Template
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
        echo "<ul class=\"chat topiclist forums\">
\t<li class=\"row\">
\t\t<dl class=\"row-item\">
\t\t\t<dt class=\"chatform\">
\t\t\t\t";
        // line 5
        if ( !($context["S_IS_BOT"] ?? null)) {
            // line 6
            echo "\t\t\t\t\t";
            if (($context["S_AJAXCHAT_POST"] ?? null)) {
                // line 7
                echo "\t\t\t\t\t\t<form name=\"postform\" id=\"chat-text\" method=\"post\" action=\"javascript:void(0);\" onsubmit=\"handle_send('add', this)\">
\t\t\t\t\t\t\t<fieldset>
\t\t\t\t\t\t\t\t";
                // line 9
                echo ($context["S_FORM_TOKEN"] ?? null);
                echo "
\t\t\t\t\t\t\t\t";
                // line 10
                $location = "chat_body_font_colour_hold.html";
                $namespace = false;
                if (strpos($location, '@') === 0) {
                    $namespace = substr($location, 1, strpos($location, '/') - 1);
                    $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                    $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
                }
                $this->loadTemplate("chat_body_font_colour_hold.html", "@spaceace_ajaxchat/chat_body_input_full.html", 10)->display($context);
                if ($namespace) {
                    $this->env->setNamespaceLookUpOrder($previous_look_up_order);
                }
                // line 11
                echo "\t\t\t\t\t\t\t\t<input type=\"text\" tabindex=\"1\" name=\"message\" id=\"message\" class=\"inputbox chatinput\"";
                if ( !($context["S_AJAX_CHAT_AUTOCOMPLETE"] ?? null)) {
                    echo " autocomplete=\"off\"";
                }
                echo " />
\t\t\t\t\t\t\t\t<br />
\t\t\t\t\t\t\t\t";
                // line 13
                // line 14
                echo "\t\t\t\t\t\t\t\t<input type=\"submit\" class=\"button\" value=\"";
                echo $this->extensions['phpbb\template\twig\extension']->lang("SUBMIT");
                echo "\" title=\"";
                echo $this->extensions['phpbb\template\twig\extension']->lang("CHAT_SUBMIT_MESSAGE");
                echo "\" name=\"submit\" tabindex=\"6\" accesskey=\"s\" />
\t\t\t\t\t\t\t\t";
                // line 15
                if (($context["S_AJAXCHAT_BBCODE"] ?? null)) {
                    // line 16
                    echo "\t\t\t\t\t\t\t\t\t";
                    // line 17
                    echo "\t\t\t\t\t\t\t\t\t<input type=\"button\" class=\"button\" id=\"bbcodes\" value=\"";
                    echo $this->extensions['phpbb\template\twig\extension']->lang("BBCODES");
                    echo "\" />
\t\t\t\t\t\t\t\t\t";
                    // line 18
                    // line 19
                    echo "\t\t\t\t\t\t\t\t";
                }
                // line 20
                echo "\t\t\t\t\t\t\t\t";
                if (($context["S_SMILIES_ALLOWED"] ?? null)) {
                    // line 21
                    echo "\t\t\t\t\t\t\t\t\t";
                    // line 22
                    echo "\t\t\t\t\t\t\t\t\t<input type=\"button\" class=\"button\" name=\"smilies\" id=\"smilies\" value=\"";
                    echo $this->extensions['phpbb\template\twig\extension']->lang("SMILIES");
                    echo "\" />
\t\t\t\t\t\t\t\t\t";
                    // line 23
                    // line 24
                    echo "\t\t\t\t\t\t\t\t";
                }
                // line 25
                echo "\t\t\t\t\t\t\t\t";
                // line 26
                echo "\t\t\t\t\t\t\t\t<input type=\"button\" class=\"button\" onclick=\"popup('";
                echo ($context["FILENAME"] ?? null);
                echo "/archive', 1000, 565); return false;\" value=\"";
                echo $this->extensions['phpbb\template\twig\extension']->lang("CHAT_ARCHIVE");
                echo "\" title=\"";
                echo $this->extensions['phpbb\template\twig\extension']->lang("CHAT_ARCHIVE_EXPLAIN");
                echo "\" />
\t\t\t\t\t\t\t\t";
                // line 27
                if ((($context["CHAT_PAGE"] ?? null) != "popup")) {
                    // line 28
                    echo "\t\t\t\t\t\t\t\t\t<input type=\"button\" class=\"button\" onclick=\"popup('";
                    echo ($context["FILENAME"] ?? null);
                    echo "/popup', 1000, 665); return false;\" value=\"";
                    echo $this->extensions['phpbb\template\twig\extension']->lang("CHAT_POPUP");
                    echo "\" title=\"";
                    echo $this->extensions['phpbb\template\twig\extension']->lang("CHAT_POPUP_EXPLAIN");
                    echo "\" />
\t\t\t\t\t\t\t\t";
                }
                // line 30
                echo "\t\t\t\t\t\t\t\t";
                if (($context["S_AJAXCHAT_BBCODE"] ?? null)) {
                    // line 31
                    echo "\t\t\t\t\t\t\t\t\t<input type=\"button\" class=\"button\" name=\"chat_bbpalette\" id=\"chat_bbpalette\" value=\"";
                    echo $this->extensions['phpbb\template\twig\extension']->lang("CHAT_FONT_COLOR");
                    echo "\" />
\t\t\t\t\t\t\t\t";
                }
                // line 33
                echo "\t\t\t\t\t\t\t\t";
                // line 34
                echo "\t\t\t\t\t\t\t</fieldset>
\t\t\t\t\t\t";
                // line 35
                $location = "chat_body_buttons.html";
                $namespace = false;
                if (strpos($location, '@') === 0) {
                    $namespace = substr($location, 1, strpos($location, '/') - 1);
                    $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                    $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
                }
                $this->loadTemplate("chat_body_buttons.html", "@spaceace_ajaxchat/chat_body_input_full.html", 35)->display($context);
                if ($namespace) {
                    $this->env->setNamespaceLookUpOrder($previous_look_up_order);
                }
                // line 36
                echo "\t\t\t\t\t\t</form>
\t\t\t\t\t";
            } else {
                // line 38
                echo "\t\t\t\t\t\t";
                echo $this->extensions['phpbb\template\twig\extension']->lang("NO_POST_IN_CHAT");
                echo "
\t\t\t\t\t";
            }
            // line 40
            echo "\t\t\t\t";
        } else {
            // line 41
            echo "\t\t\t\t\t<div class=\"input_message\">";
            echo $this->extensions['phpbb\template\twig\extension']->lang("GUEST_MESSAGE");
            echo "</div>
\t\t\t\t";
        }
        // line 43
        echo "\t\t\t</dt>
\t\t\t<dd>
\t\t\t</dd>
\t\t</dl>
\t</li>
</ul>";
    }

    public function getTemplateName()
    {
        return "@spaceace_ajaxchat/chat_body_input_full.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  179 => 43,  173 => 41,  170 => 40,  164 => 38,  160 => 36,  148 => 35,  145 => 34,  143 => 33,  137 => 31,  134 => 30,  124 => 28,  122 => 27,  113 => 26,  111 => 25,  108 => 24,  107 => 23,  102 => 22,  100 => 21,  97 => 20,  94 => 19,  93 => 18,  88 => 17,  86 => 16,  84 => 15,  77 => 14,  76 => 13,  68 => 11,  56 => 10,  52 => 9,  48 => 7,  45 => 6,  43 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@spaceace_ajaxchat/chat_body_input_full.html", "");
    }
}
