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

/* @spaceace_ajaxchat/event/overall_footer_content_after.html */
class __TwigTemplate_4a6646ee233b8c6a4bdeb5c14b385da4 extends \Twig\Template
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
        if (($context["S_AJAX_CHAT_VIEW"] ?? null)) {
            // line 2
            echo "\t";
            if ((($context["SCRIPT_NAME"] ?? null) == "viewforum")) {
                // line 3
                echo "\t\t";
                if ((($context["S_AJAX_CHAT_VIEWFORUM_OVERRIDE"] ?? null) || (($context["S_AJAX_CHAT_VIEWFORUM"] ?? null) && twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "topicrow", [], "any", false, false, false, 3))))) {
                    // line 4
                    echo "\t\t\t";
                    if (( !($context["S_AJAX_CHAT_POSITION"] ?? null) &&  !($context["S_AJAX_CHAT_POSITION_OVERRIDE"] ?? null))) {
                        // line 5
                        echo "\t\t\t\t";
                        if ( !($context["S_USER_LOGGED_IN"] ?? null)) {
                            // line 6
                            echo "\t\t\t\t\t<br />
\t\t\t\t";
                        }
                        // line 8
                        echo "\t\t\t\t";
                        $location = "chat_body.html";
                        $namespace = false;
                        if (strpos($location, '@') === 0) {
                            $namespace = substr($location, 1, strpos($location, '/') - 1);
                            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
                        }
                        $this->loadTemplate("chat_body.html", "@spaceace_ajaxchat/event/overall_footer_content_after.html", 8)->display($context);
                        if ($namespace) {
                            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
                        }
                        // line 9
                        echo "\t\t\t";
                    } elseif (( !($context["S_AJAX_CHAT_ACP_POSITION"] ?? null) && ($context["S_AJAX_CHAT_POSITION_OVERRIDE"] ?? null))) {
                        // line 10
                        echo "\t\t\t\t";
                        if ( !($context["S_USER_LOGGED_IN"] ?? null)) {
                            // line 11
                            echo "\t\t\t\t\t<br />
\t\t\t\t";
                        }
                        // line 13
                        echo "\t\t\t\t";
                        $location = "chat_body.html";
                        $namespace = false;
                        if (strpos($location, '@') === 0) {
                            $namespace = substr($location, 1, strpos($location, '/') - 1);
                            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
                        }
                        $this->loadTemplate("chat_body.html", "@spaceace_ajaxchat/event/overall_footer_content_after.html", 13)->display($context);
                        if ($namespace) {
                            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
                        }
                        // line 14
                        echo "\t\t\t";
                    }
                    // line 15
                    echo "\t\t";
                }
                // line 16
                echo "\t";
            }
            // line 17
            echo "\t";
            if ((($context["SCRIPT_NAME"] ?? null) == "viewtopic")) {
                // line 18
                echo "\t\t";
                if ((($context["S_AJAX_CHAT_VIEWTOPIC_OVERRIDE"] ?? null) || ($context["S_AJAX_CHAT_VIEWTOPIC"] ?? null))) {
                    // line 19
                    echo "\t\t\t";
                    if (( !($context["S_AJAX_CHAT_POSITION"] ?? null) &&  !($context["S_AJAX_CHAT_POSITION_OVERRIDE"] ?? null))) {
                        // line 20
                        echo "\t\t\t\t";
                        if ( !($context["S_USER_LOGGED_IN"] ?? null)) {
                            // line 21
                            echo "\t\t\t\t\t<br />
\t\t\t\t";
                        }
                        // line 23
                        echo "\t\t\t\t";
                        $location = "chat_body.html";
                        $namespace = false;
                        if (strpos($location, '@') === 0) {
                            $namespace = substr($location, 1, strpos($location, '/') - 1);
                            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
                        }
                        $this->loadTemplate("chat_body.html", "@spaceace_ajaxchat/event/overall_footer_content_after.html", 23)->display($context);
                        if ($namespace) {
                            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
                        }
                        // line 24
                        echo "\t\t\t";
                    } elseif (( !($context["S_AJAX_CHAT_ACP_POSITION"] ?? null) && ($context["S_AJAX_CHAT_POSITION_OVERRIDE"] ?? null))) {
                        // line 25
                        echo "\t\t\t\t";
                        if ( !($context["S_USER_LOGGED_IN"] ?? null)) {
                            // line 26
                            echo "\t\t\t\t\t<br />
\t\t\t\t";
                        }
                        // line 28
                        echo "\t\t\t\t";
                        $location = "chat_body.html";
                        $namespace = false;
                        if (strpos($location, '@') === 0) {
                            $namespace = substr($location, 1, strpos($location, '/') - 1);
                            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
                        }
                        $this->loadTemplate("chat_body.html", "@spaceace_ajaxchat/event/overall_footer_content_after.html", 28)->display($context);
                        if ($namespace) {
                            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
                        }
                        // line 29
                        echo "\t\t\t";
                    }
                    // line 30
                    echo "\t\t";
                }
                // line 31
                echo "\t";
            }
        }
    }

    public function getTemplateName()
    {
        return "@spaceace_ajaxchat/event/overall_footer_content_after.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  158 => 31,  155 => 30,  152 => 29,  139 => 28,  135 => 26,  132 => 25,  129 => 24,  116 => 23,  112 => 21,  109 => 20,  106 => 19,  103 => 18,  100 => 17,  97 => 16,  94 => 15,  91 => 14,  78 => 13,  74 => 11,  71 => 10,  68 => 9,  55 => 8,  51 => 6,  48 => 5,  45 => 4,  42 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@spaceace_ajaxchat/event/overall_footer_content_after.html", "");
    }
}
