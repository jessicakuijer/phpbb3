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

/* @spaceace_ajaxchat/event/viewtopic_topic_title_after.html */
class __TwigTemplate_9a4a5f63de5fe7140de7386bbfd55b5f extends \Twig\Template
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
            if ((($context["S_AJAX_CHAT_VIEWTOPIC_OVERRIDE"] ?? null) || ($context["S_AJAX_CHAT_VIEWTOPIC"] ?? null))) {
                // line 3
                echo "\t\t";
                if ((($context["S_AJAX_CHAT_POSITION"] ?? null) &&  !($context["S_AJAX_CHAT_POSITION_OVERRIDE"] ?? null))) {
                    // line 4
                    echo "\t\t\t";
                    $location = "chat_body.html";
                    $namespace = false;
                    if (strpos($location, '@') === 0) {
                        $namespace = substr($location, 1, strpos($location, '/') - 1);
                        $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                        $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
                    }
                    $this->loadTemplate("chat_body.html", "@spaceace_ajaxchat/event/viewtopic_topic_title_after.html", 4)->display($context);
                    if ($namespace) {
                        $this->env->setNamespaceLookUpOrder($previous_look_up_order);
                    }
                    // line 5
                    echo "\t\t\t<br />
\t\t";
                } elseif ((                // line 6
($context["S_AJAX_CHAT_ACP_POSITION"] ?? null) && ($context["S_AJAX_CHAT_POSITION_OVERRIDE"] ?? null))) {
                    // line 7
                    echo "\t\t\t";
                    $location = "chat_body.html";
                    $namespace = false;
                    if (strpos($location, '@') === 0) {
                        $namespace = substr($location, 1, strpos($location, '/') - 1);
                        $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                        $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
                    }
                    $this->loadTemplate("chat_body.html", "@spaceace_ajaxchat/event/viewtopic_topic_title_after.html", 7)->display($context);
                    if ($namespace) {
                        $this->env->setNamespaceLookUpOrder($previous_look_up_order);
                    }
                    // line 8
                    echo "\t\t\t<br />
\t\t";
                }
                // line 10
                echo "\t";
            }
        }
    }

    public function getTemplateName()
    {
        return "@spaceace_ajaxchat/event/viewtopic_topic_title_after.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 10,  76 => 8,  63 => 7,  61 => 6,  58 => 5,  45 => 4,  42 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@spaceace_ajaxchat/event/viewtopic_topic_title_after.html", "");
    }
}
