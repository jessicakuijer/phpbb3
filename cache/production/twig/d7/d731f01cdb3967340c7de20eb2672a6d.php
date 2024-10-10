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

/* @spaceace_ajaxchat/chat_body_chatrow.html */
class __TwigTemplate_f7c0e2b4c6bbb0924bcf9792cb31bd86 extends \Twig\Template
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
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "chatrow", [], "any", false, false, false, 1));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["chatrow"]) {
            // line 2
            echo "\t<div id=\"p";
            echo twig_get_attribute($this->env, $this->source, $context["chatrow"], "MESSAGE_ID", [], "any", false, false, false, 2);
            echo "\" class=\"chatpost ";
            if ( !($context["S_AJAX_CHAT_CHATROW_FULL"] ?? null)) {
                echo "original ";
            }
            echo "bg";
            echo twig_get_attribute($this->env, $this->source, $context["chatrow"], "CLASS", [], "any", false, false, false, 2);
            if ( !($context["S_AJAX_CHAT_MESSAGES_DOWN"] ?? null)) {
                echo " chat-messages-down";
            }
            echo "\">
\t\t<div class=\"chat-postbody\">
\t\t\t<div class=\"";
            // line 4
            if (($context["S_AJAX_CHAT_AVATARS"] ?? null)) {
                echo "chat-postprofile";
            } else {
                echo "chat-postprofile-no-avatar";
            }
            echo "\" id=\"profile";
            echo twig_get_attribute($this->env, $this->source, $context["chatrow"], "MESSAGE_ID", [], "any", false, false, false, 4);
            echo "\">
\t\t\t\t<div ";
            // line 5
            if (($context["S_AJAX_CHAT_AVATARS"] ?? null)) {
                echo "class=\"chat-avatars\"";
            }
            echo ">
\t\t\t\t\t";
            // line 6
            if (($context["S_AJAX_CHAT_AVATARS"] ?? null)) {
                // line 7
                echo "\t\t\t\t\t\t";
                if (twig_get_attribute($this->env, $this->source, $context["chatrow"], "USER_AVATAR", [], "any", false, false, false, 7)) {
                    // line 8
                    echo "\t\t\t\t\t\t\t";
                    if (($context["S_AJAX_CHAT_AVATAR_HOVER"] ?? null)) {
                        // line 9
                        echo "\t\t\t\t\t\t\t\t<span>";
                        echo twig_get_attribute($this->env, $this->source, $context["chatrow"], "USER_AVATAR", [], "any", false, false, false, 9);
                        echo "</span>
\t\t\t\t\t\t\t";
                    }
                    // line 11
                    echo "\t\t\t\t\t\t\t\t";
                    echo twig_get_attribute($this->env, $this->source, $context["chatrow"], "USER_AVATAR_THUMB", [], "any", false, false, false, 11);
                    echo "
\t\t\t\t\t\t";
                } else {
                    // line 13
                    echo "\t\t\t\t\t\t\t";
                    if (($context["S_AJAX_CHAT_AVATAR_HOVER"] ?? null)) {
                        // line 14
                        echo "\t\t\t\t\t\t\t\t<span>
\t\t\t\t\t\t\t\t\t<img src=\"";
                        // line 15
                        echo ($context["STYLE_PATH"] ?? null);
                        echo "/theme/images/no_avatar.gif\" height=\"128\" alt=\"\" />
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t";
                    }
                    // line 18
                    echo "\t\t\t\t\t\t\t<img src=\"";
                    echo ($context["STYLE_PATH"] ?? null);
                    echo "/theme/images/no_avatar.gif\" height=\"20\" alt=\"\" />
\t\t\t\t\t\t";
                }
                // line 20
                echo "\t\t\t\t\t";
            }
            // line 21
            echo "\t\t\t\t</div>
\t\t\t\t<div class=\"chat-usernames\">
\t\t\t\t\t";
            // line 23
            if ((( !($context["S_IS_BOT"] ?? null) && ($context["S_USER_LOGGED_IN"] ?? null)) && (($context["CHAT_PAGE"] ?? null) != "archive"))) {
                // line 24
                echo "\t\t\t\t\t\t";
                if (twig_get_attribute($this->env, $this->source, $context["chatrow"], "USER_COLOR", [], "any", false, false, false, 24)) {
                    // line 25
                    echo "\t\t\t\t\t\t\t<a href=\"#\" style=\"color: #";
                    echo twig_get_attribute($this->env, $this->source, $context["chatrow"], "USER_COLOR", [], "any", false, false, false, 25);
                    echo "\" onclick=\"insert_text('[color=#";
                    echo twig_get_attribute($this->env, $this->source, $context["chatrow"], "USER_COLOR", [], "any", false, false, false, 25);
                    echo "][b]&#64;";
                    echo twig_get_attribute($this->env, $this->source, $context["chatrow"], "USERNAME_A", [], "any", false, false, false, 25);
                    echo "[/b][/color],&nbsp;', true);return false;\" title=\"";
                    echo $this->extensions['phpbb\template\twig\extension']->lang("RESPOND");
                    echo "\">&#64;</a>
\t\t\t\t\t\t";
                } else {
                    // line 27
                    echo "\t\t\t\t\t\t\t<a href=\"#\" onclick=\"insert_text('[b]&#64;";
                    echo twig_get_attribute($this->env, $this->source, $context["chatrow"], "USERNAME_A", [], "any", false, false, false, 27);
                    echo "[/b],&nbsp;', true);return false;\" title=\"";
                    echo $this->extensions['phpbb\template\twig\extension']->lang("RESPOND");
                    echo "\">&#64;</a>
\t\t\t\t\t\t";
                }
                // line 29
                echo "\t\t\t\t\t";
            } else {
                // line 30
                echo "\t\t\t\t\t\t&#64;
\t\t\t\t\t";
            }
            // line 32
            echo "\t\t\t\t\t";
            echo twig_get_attribute($this->env, $this->source, $context["chatrow"], "USERNAME_FULL", [], "any", false, false, false, 32);
            echo "&nbsp;<b class=\"chat-time\">&laquo;&nbsp;";
            echo twig_get_attribute($this->env, $this->source, $context["chatrow"], "TIME", [], "any", false, false, false, 32);
            echo "&nbsp;&raquo;</b>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t";
            // line 35
            echo ($context["SMILIES_PATH"] ?? null);
            echo "
\t\t\t<div class=\"message\">
\t\t\t\t";
            // line 37
            $location = "chatrow_message_icons.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("chatrow_message_icons.html", "@spaceace_ajaxchat/chat_body_chatrow.html", 37)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
            // line 38
            echo "\t\t\t\t";
            echo twig_get_attribute($this->env, $this->source, $context["chatrow"], "MESSAGE", [], "any", false, false, false, 38);
            echo "
\t\t\t</div>
\t\t</div>
\t</div>
";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['chatrow'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "@spaceace_ajaxchat/chat_body_chatrow.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  188 => 38,  176 => 37,  171 => 35,  162 => 32,  158 => 30,  155 => 29,  147 => 27,  135 => 25,  132 => 24,  130 => 23,  126 => 21,  123 => 20,  117 => 18,  111 => 15,  108 => 14,  105 => 13,  99 => 11,  93 => 9,  90 => 8,  87 => 7,  85 => 6,  79 => 5,  69 => 4,  54 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@spaceace_ajaxchat/chat_body_chatrow.html", "");
    }
}
