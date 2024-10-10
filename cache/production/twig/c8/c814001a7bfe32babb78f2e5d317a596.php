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

/* @spaceace_ajaxchat/chat_body_font_colour_hold_js.html */
class __TwigTemplate_d4f88a94e77e01c201b269cb506a7fcf extends \Twig\Template
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
        echo "\t\t\t\t<script type=\"text/javascript\">
\t\t\t\t\t// <![CDATA[
\t\t\t\t\tfunction colorPalette(dir, width, height)
\t\t\t\t\t{
\t\t\t\t\t\tvar r = 0, g = 0, b = 0;
\t\t\t\t\t\tvar numberList = new Array(6);
\t\t\t\t\t\tvar color = '';

\t\t\t\t\t\t\tnumberList[0] = '00';
\t\t\t\t\t\t\tnumberList[1] = '40';
\t\t\t\t\t\t\tnumberList[2] = '80';
\t\t\t\t\t\t\tnumberList[3] = 'BF';
\t\t\t\t\t\t\tnumberList[4] = 'FF';

\t\t\t\t\t\tdocument.writeln('<table cellspacing=\"1\" cellpadding=\"0\" border=\"0\">');

\t\t\t\t\t\tfor (r = 0; r < 5; r++)
\t\t\t\t\t\t{
\t\t\t\t\t\t\tif (dir == 'h')
\t\t\t\t\t\t\t{
\t\t\t\t\t\t\t\tdocument.writeln('<tr>');
\t\t\t\t\t\t\t}

\t\t\t\t\t\t\tfor (g = 0; g < 5; g++)
\t\t\t\t\t\t\t{
\t\t\t\t\t\t\t\tif (dir == 'v')
\t\t\t\t\t\t\t\t{
\t\t\t\t\t\t\t\t\tdocument.writeln('<tr>');
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\tfor (b = 0; b < 5; b++)
\t\t\t\t\t\t\t\t{
\t\t\t\t\t\t\t\t\tcolor = String(numberList[r]) + String(numberList[g]) + String(numberList[b]);
\t\t\t\t\t\t\t\t\tdocument.write('<td bgcolor=\"#' + color + '\" style=\"width: ' + width + 'px; height: ' + height + 'px;\">');
\t\t\t\t\t\t\t\t\tdocument.write('<div onmouseover=\"this.style.cursor=\\'pointer\\'\" onmousedown=\"setCookie(\\'' + cookie_name + '\\', \\'[color2=#' + color + ']\\',\\'1000\\'); blkopen = \\'[color2=#' + color + ']\\'; hilite(\\'#' + color + ' \\'); blkclose = \\'[/color2]\\'; return false;\"><img src=\"";
        // line 34
        echo ($context["BOARD_URL"] ?? null);
        echo "images/spacer.gif\" width=\"' + width + '\" height=\"' + height + '\" alt=\"#' + color + '\" title=\"#' + color + '\" /></div>');
\t\t\t\t\t\t\t\t\tdocument.writeln('</td>');
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\tif (dir == 'v')
\t\t\t\t\t\t\t\t{
\t\t\t\t\t\t\t\t\tdocument.writeln('</tr>');
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t}
\t\t\t\t\t\t\tif (dir == 'h')
\t\t\t\t\t\t\t{
\t\t\t\t\t\t\t\tdocument.writeln('</tr>');
\t\t\t\t\t\t\t}
\t\t\t\t\t\t}
\t\t\t\t\t\tdocument.writeln('</table>');
\t\t\t\t\t}
\t\t\t\t\tcolorPalette('h', 15, 10);
\t\t\t\t\tfunction hilite(value)
\t\t\t\t\t{
\t\t\t\t\t\tvar cur_color = value;
\t\t\t\t\t\tdocument.getElementById(\"fc\").style.backgroundColor = cur_color;
\t\t\t\t\t}
\t\t\t\t\t// ]]>
\t\t\t\t</script>";
    }

    public function getTemplateName()
    {
        return "@spaceace_ajaxchat/chat_body_font_colour_hold_js.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 34,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@spaceace_ajaxchat/chat_body_font_colour_hold_js.html", "");
    }
}
