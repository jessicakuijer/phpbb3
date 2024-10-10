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

/* @spaceace_ajaxchat/chat_body_buttons.html */
class __TwigTemplate_8586a6e2cf1c6ba50328aeb2eceed73d extends \Twig\Template
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
        if (($context["S_BBCODE_ALLOWED"] ?? null)) {
            // line 2
            echo "\t<div id=\"chat_bbcodes\" style=\"display: none;\">
\t\t";
            // line 3
            $location = "posting_buttons.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("posting_buttons.html", "@spaceace_ajaxchat/chat_body_buttons.html", 3)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
            // line 4
            echo "\t</div>
";
        }
        // line 6
        echo "<div id=\"chat_smilies\" style=\"display: none;\">
\t";
        // line 7
        if (($context["S_SMILIES_ALLOWED"] ?? null)) {
            // line 8
            echo "\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "smiley", [], "any", false, false, false, 8));
            foreach ($context['_seq'] as $context["_key"] => $context["smiley"]) {
                // line 9
                echo "\t\t\t<a href=\"#\" onclick=\"insert_text('";
                echo twig_get_attribute($this->env, $this->source, $context["smiley"], "A_SMILEY_CODE", [], "any", false, false, false, 9);
                echo "', true); return false;\"><img src=\"";
                echo twig_get_attribute($this->env, $this->source, $context["smiley"], "SMILEY_IMG", [], "any", false, false, false, 9);
                echo "\" width=\"";
                echo twig_get_attribute($this->env, $this->source, $context["smiley"], "SMILEY_WIDTH", [], "any", false, false, false, 9);
                echo "\" height=\"";
                echo twig_get_attribute($this->env, $this->source, $context["smiley"], "SMILEY_HEIGHT", [], "any", false, false, false, 9);
                echo "\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["smiley"], "SMILEY_CODE", [], "any", false, false, false, 9);
                echo "\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["smiley"], "SMILEY_DESC", [], "any", false, false, false, 9);
                echo "\" style=\"margin: 4px 2px 0\" /></a>
\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['smiley'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 11
            echo "\t\t";
            if ((($context["S_SHOW_SMILEY_LINK"] ?? null) && ($context["S_SMILIES_ALLOWED"] ?? null))) {
                // line 12
                echo "\t\t\t<br /><a href=\"";
                echo ($context["U_MORE_SMILIES"] ?? null);
                echo "\" onclick=\"popup('";
                echo ($context["BOARD_URL"] ?? null);
                echo "posting.php?mode=smilies', 400, 350, '_phpbbsmilies'); return false;\">";
                echo $this->extensions['phpbb\template\twig\extension']->lang("MORE_SMILIES");
                echo "</a>
\t\t";
            }
            // line 14
            echo "\t";
        }
        // line 15
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "@spaceace_ajaxchat/chat_body_buttons.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  103 => 15,  100 => 14,  90 => 12,  87 => 11,  68 => 9,  63 => 8,  61 => 7,  58 => 6,  54 => 4,  42 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@spaceace_ajaxchat/chat_body_buttons.html", "");
    }
}
