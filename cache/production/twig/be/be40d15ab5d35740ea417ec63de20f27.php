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

/* @spaceace_ajaxchat/chat_body_font_colour_hold.html */
class __TwigTemplate_1c345376670ed1d78a7645ed510595d7 extends \Twig\Template
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
        echo "<div id=\"chat_colour_palette\" style=\"display: none;\">
\t<table width=\"50%\">
\t\t<div id=\"fc\">
\t\t</div>
\t\t<div class=\"select_color\">
\t\t\t";
        // line 6
        echo $this->extensions['phpbb\template\twig\extension']->lang("SELECT_COLOR");
        echo "
\t\t</div>
\t\t<tr>
\t\t\t<td valign=\"top\">
\t\t\t\t";
        // line 10
        $location = "chat_body_font_colour_hold_js.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("chat_body_font_colour_hold_js.html", "@spaceace_ajaxchat/chat_body_font_colour_hold.html", 10)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 11
        echo "\t\t\t</td>
\t\t</tr>
\t</table>
\t<div>";
        // line 14
        echo $this->extensions['phpbb\template\twig\extension']->lang("DELETE_CHAT_COOKIE_EXPLAIN");
        echo "</div>
\t<button type=\"button\" class=\"button\" name=\"";
        // line 15
        echo $this->extensions['phpbb\template\twig\extension']->lang("DELETE_CHAT_COOKIE");
        echo "\" title=\"";
        echo $this->extensions['phpbb\template\twig\extension']->lang("DELETE_CHAT_COOKIE");
        echo "\" onclick=\"deletecookie();\">";
        echo $this->extensions['phpbb\template\twig\extension']->lang("DELETE_CHAT_COOKIE");
        echo "</button>
</div>";
    }

    public function getTemplateName()
    {
        return "@spaceace_ajaxchat/chat_body_font_colour_hold.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 15,  68 => 14,  63 => 11,  51 => 10,  44 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@spaceace_ajaxchat/chat_body_font_colour_hold.html", "");
    }
}
