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

/* @spaceace_ajaxchat/event/index_body_forumlist_body_after.html */
class __TwigTemplate_b47c04142a2f18492b233c12e005cf39 extends \Twig\Template
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
            if (( !($context["S_AJAX_CHAT_POSITION"] ?? null) &&  !($context["S_AJAX_CHAT_POSITION_OVERRIDE"] ?? null))) {
                // line 3
                echo "\t\t";
                if ( !($context["S_USER_LOGGED_IN"] ?? null)) {
                    // line 4
                    echo "\t\t\t<br />
\t\t";
                }
                // line 6
                echo "\t\t";
                $location = "chat_body.html";
                $namespace = false;
                if (strpos($location, '@') === 0) {
                    $namespace = substr($location, 1, strpos($location, '/') - 1);
                    $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                    $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
                }
                $this->loadTemplate("chat_body.html", "@spaceace_ajaxchat/event/index_body_forumlist_body_after.html", 6)->display($context);
                if ($namespace) {
                    $this->env->setNamespaceLookUpOrder($previous_look_up_order);
                }
                // line 7
                echo "\t";
            } elseif (( !($context["S_AJAX_CHAT_ACP_POSITION"] ?? null) && ($context["S_AJAX_CHAT_POSITION_OVERRIDE"] ?? null))) {
                // line 8
                echo "\t\t";
                if ( !($context["S_USER_LOGGED_IN"] ?? null)) {
                    // line 9
                    echo "\t\t\t<br />
\t\t";
                }
                // line 11
                echo "\t\t";
                $location = "chat_body.html";
                $namespace = false;
                if (strpos($location, '@') === 0) {
                    $namespace = substr($location, 1, strpos($location, '/') - 1);
                    $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                    $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
                }
                $this->loadTemplate("chat_body.html", "@spaceace_ajaxchat/event/index_body_forumlist_body_after.html", 11)->display($context);
                if ($namespace) {
                    $this->env->setNamespaceLookUpOrder($previous_look_up_order);
                }
                // line 12
                echo "\t";
            }
        }
    }

    public function getTemplateName()
    {
        return "@spaceace_ajaxchat/event/index_body_forumlist_body_after.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 12,  72 => 11,  68 => 9,  65 => 8,  62 => 7,  49 => 6,  45 => 4,  42 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@spaceace_ajaxchat/event/index_body_forumlist_body_after.html", "");
    }
}
