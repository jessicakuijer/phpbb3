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

/* chat_body_readadd.html */
class __TwigTemplate_2e500b3dde021b04a8857914b9306f31 extends \Twig\Template
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
        if ((($context["S_READ"] ?? null) || ($context["S_ADD"] ?? null))) {
            // line 2
            echo "\t";
            $location = "chat_body_chatrow.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("chat_body_chatrow.html", "chat_body_readadd.html", 2)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
            // line 3
            echo "\t--!--";
            echo ($context["LAST_ID"] ?? null);
            echo "--!--
\t";
            // line 4
            if (($context["S_AJAX_CHAT_SOUND"] ?? null)) {
                // line 5
                echo "\t\t";
                if (($context["SOUND_ENABLED"] ?? null)) {
                    // line 6
                    echo "\t\t\t<audio id=\"ajax_chat_sound\" class=\"hidden chat_sound\" src=\"";
                    echo ($context["BOARD_URL"] ?? null);
                    echo "ext/spaceace/ajaxchat/styles/all/theme/sounds/";
                    echo ($context["SOUND_FILE"] ?? null);
                    echo ".mp3\" autoplay ></audio>
\t\t";
                }
                // line 8
                echo "\t";
            }
            // line 9
            echo "\t";
            if (($context["S_WHOISONLINE"] ?? null)) {
                // line 10
                echo "\t\t";
                $location = "chat_body_whois.html";
                $namespace = false;
                if (strpos($location, '@') === 0) {
                    $namespace = substr($location, 1, strpos($location, '/') - 1);
                    $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                    $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
                }
                $this->loadTemplate("chat_body_whois.html", "chat_body_readadd.html", 10)->display($context);
                if ($namespace) {
                    $this->env->setNamespaceLookUpOrder($previous_look_up_order);
                }
                // line 11
                echo "\t";
            }
            // line 12
            echo "\t--!--";
            echo ($context["LAST_TIME"] ?? null);
            echo "--!--";
            echo ($context["REFRESH_TIME"] ?? null);
            echo "--!--";
            echo ($context["LAST_POST"] ?? null);
            echo "
";
        }
    }

    public function getTemplateName()
    {
        return "chat_body_readadd.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 12,  89 => 11,  76 => 10,  73 => 9,  70 => 8,  62 => 6,  59 => 5,  57 => 4,  52 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "chat_body_readadd.html", "");
    }
}
