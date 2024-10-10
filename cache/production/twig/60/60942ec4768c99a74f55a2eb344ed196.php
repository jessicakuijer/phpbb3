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

/* overall_footer.html */
class __TwigTemplate_da42c4572bc8be30f5526a983f1e2d6f extends \Twig\Template
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
        echo "\t\t";
        $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
        $this->env->setNamespaceLookUpOrder(array('spaceace_ajaxchat', '__main__'));
        $this->env->loadTemplate('@spaceace_ajaxchat/event/overall_footer_content_after.html')->display($context);
        $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        // line 2
        echo "\t\t";
        // line 3
        echo "\t</div>
</div>

";
        // line 6
        if ( !($context["S_IS_BOT"] ?? null)) {
            echo ($context["RUN_CRON_TASK"] ?? null);
        }
        // line 7
        echo "
<div class=\"inventea-footer-wrapper\">
\t<div id=\"page-footer\" class=\"inventea-footer page-footer\" role=\"contentinfo\">\t
\t
\t\t";
        // line 11
        $location = "inventea_widgets.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("inventea_widgets.html", "overall_footer.html", 11)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 12
        echo "\t\t
\t\t<div class=\"inventea-breadcrumbs-container\">
\t\t\t<ul class=\"linklist inventea-breadcrumbs\">
\t\t\t\t";
        // line 15
        $context["MICRODATA"] = "itemtype=\"https://schema.org/ListItem\" itemprop=\"itemListElement\" itemscope";
        // line 16
        echo "\t\t\t\t";
        $context["navlink_position"] = 1;
        // line 17
        echo "\t\t\t\t";
        // line 18
        echo "
\t\t\t\t<li class=\"inventea-breadcrumbs\" itemscope itemtype=\"https://schema.org/BreadcrumbList\">

\t\t\t\t";
        // line 21
        if (($context["U_SITE_HOME"] ?? null)) {
            // line 22
            echo "\t\t\t\t\t<span class=\"crumb\" ";
            echo ($context["MICRODATA"] ?? null);
            echo "><a itemprop=\"item\" href=\"";
            echo ($context["U_SITE_HOME"] ?? null);
            echo "\" data-navbar-reference=\"home\"><i class=\"icon fa-home fa-fw\" aria-hidden=\"true\"></i><span itemprop=\"name\">";
            echo ($context["L_SITE_HOME"] ?? null);
            echo "</span></a><meta itemprop=\"position\" content=\"";
            echo ($context["navlink_position"] ?? null);
            $context["navlink_position"] = (($context["navlink_position"] ?? null) + 1);
            echo "\" /></span>
\t\t\t\t";
        }
        // line 24
        echo "
\t\t\t\t";
        // line 25
        // line 26
        echo "\t\t\t\t\t<span class=\"crumb\" ";
        echo ($context["MICRODATA"] ?? null);
        echo "><a itemprop=\"item\" href=\"";
        echo ($context["U_INDEX"] ?? null);
        echo "\" accesskey=\"h\" data-navbar-reference=\"index\">";
        if ( !($context["U_SITE_HOME"] ?? null)) {
            echo "<i class=\"icon fa-home fa-fw\"></i>";
        }
        echo "<span itemprop=\"name\">";
        echo ($context["L_INDEX"] ?? null);
        echo "</span></a><meta itemprop=\"position\" content=\"";
        echo ($context["navlink_position"] ?? null);
        $context["navlink_position"] = (($context["navlink_position"] ?? null) + 1);
        echo "\" /></span>

\t\t\t\t";
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["navlinks"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["navlink"]) {
            // line 29
            echo "\t\t\t\t\t";
            $context["NAVLINK_NAME"] = ((twig_get_attribute($this->env, $this->source, $context["navlink"], "BREADCRUMB_NAME", [], "any", true, true, false, 29)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["navlink"], "BREADCRUMB_NAME", [], "any", false, false, false, 29), twig_get_attribute($this->env, $this->source, $context["navlink"], "FORUM_NAME", [], "any", false, false, false, 29))) : (twig_get_attribute($this->env, $this->source, $context["navlink"], "FORUM_NAME", [], "any", false, false, false, 29)));
            // line 30
            echo "\t\t\t\t\t";
            $context["NAVLINK_LINK"] = ((twig_get_attribute($this->env, $this->source, $context["navlink"], "U_BREADCRUMB", [], "any", true, true, false, 30)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["navlink"], "U_BREADCRUMB", [], "any", false, false, false, 30), twig_get_attribute($this->env, $this->source, $context["navlink"], "U_VIEW_FORUM", [], "any", false, false, false, 30))) : (twig_get_attribute($this->env, $this->source, $context["navlink"], "U_VIEW_FORUM", [], "any", false, false, false, 30)));
            // line 31
            echo "
\t\t\t\t\t";
            // line 32
            // line 33
            echo "\t\t\t\t\t<span class=\"crumb\" ";
            echo ($context["MICRODATA"] ?? null);
            if (twig_get_attribute($this->env, $this->source, $context["navlink"], "MICRODATA", [], "any", false, false, false, 33)) {
                echo " ";
                echo twig_get_attribute($this->env, $this->source, $context["navlink"], "MICRODATA", [], "any", false, false, false, 33);
            }
            echo "><a itemprop=\"item\" href=\"";
            echo ($context["NAVLINK_LINK"] ?? null);
            echo "\"><span itemprop=\"name\">";
            echo ($context["NAVLINK_NAME"] ?? null);
            echo "</span></a><meta itemprop=\"position\" content=\"";
            echo ($context["navlink_position"] ?? null);
            $context["navlink_position"] = (($context["navlink_position"] ?? null) + 1);
            echo "\" /></span>
\t\t\t\t\t";
            // line 34
            // line 35
            echo "\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['navlink'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "
\t\t\t\t";
        // line 37
        // line 38
        echo "\t\t\t\t</li>
\t\t\t</ul>
\t\t</div>

\t\t<footer class=\"inventea-credits\" role=\"contentinfo\">
\t\t\t";
        // line 43
        // line 44
        echo "\t\t<p class=\"footer-row\">
\t\t\t<span class=\"footer-copyright\">";
        // line 45
        echo ($context["CREDIT_LINE"] ?? null);
        echo "
\t\t\t<br />Style we_clearblue created by <a href=\"https://inventea.com/\" title=\"phpBB styles, HTML5 &amp; CSS3 templates\">INVENTEA</a> & <a href=\"https://nextgen.gt\"  title=\"phpBB styles\">nextgen</a>
\t\t\t</span>
\t\t</p>
\t\t";
        // line 49
        if (($context["TRANSLATION_INFO"] ?? null)) {
            // line 50
            echo "\t\t<p class=\"footer-row\">
\t\t\t<span class=\"footer-copyright\">";
            // line 51
            echo ($context["TRANSLATION_INFO"] ?? null);
            echo "</span>
\t\t</p>
\t\t";
        }
        // line 54
        echo "\t\t";
        // line 55
        echo "\t\t<p class=\"footer-row\" role=\"menu\">
\t\t\t<a class=\"footer-link\" href=\"";
        // line 56
        echo ($context["U_PRIVACY"] ?? null);
        echo "\" title=\"";
        echo $this->extensions['phpbb\template\twig\extension']->lang("PRIVACY_LINK");
        echo "\" role=\"menuitem\">
\t\t\t\t<span class=\"footer-link-text\">";
        // line 57
        echo $this->extensions['phpbb\template\twig\extension']->lang("PRIVACY_LINK");
        echo "</span>
\t\t\t</a>
\t\t\t|
\t\t\t<a class=\"footer-link\" href=\"";
        // line 60
        echo ($context["U_TERMS_USE"] ?? null);
        echo "\" title=\"";
        echo $this->extensions['phpbb\template\twig\extension']->lang("TERMS_LINK");
        echo "\" role=\"menuitem\">
\t\t\t\t<span class=\"footer-link-text\">";
        // line 61
        echo $this->extensions['phpbb\template\twig\extension']->lang("TERMS_LINK");
        echo "</span>
\t\t\t</a>
\t\t</p>
\t\t";
        // line 64
        if (($context["DEBUG_OUTPUT"] ?? null)) {
            // line 65
            echo "\t\t<p class=\"footer-row\">
\t\t\t<span class=\"footer-info\">";
            // line 66
            echo ($context["DEBUG_OUTPUT"] ?? null);
            echo "</span>
\t\t</p>
\t\t";
        }
        // line 69
        echo "\t\t</footer>
\t</div>
</div>

\t<div id=\"darkenwrapper\" class=\"darkenwrapper\" data-ajax-error-title=\"";
        // line 73
        echo $this->extensions['phpbb\template\twig\extension']->lang("AJAX_ERROR_TITLE");
        echo "\" data-ajax-error-text=\"";
        echo $this->extensions['phpbb\template\twig\extension']->lang("AJAX_ERROR_TEXT");
        echo "\" data-ajax-error-text-abort=\"";
        echo $this->extensions['phpbb\template\twig\extension']->lang("AJAX_ERROR_TEXT_ABORT");
        echo "\" data-ajax-error-text-timeout=\"";
        echo $this->extensions['phpbb\template\twig\extension']->lang("AJAX_ERROR_TEXT_TIMEOUT");
        echo "\" data-ajax-error-text-parsererror=\"";
        echo $this->extensions['phpbb\template\twig\extension']->lang("AJAX_ERROR_TEXT_PARSERERROR");
        echo "\">
\t\t<div id=\"darken\" class=\"darken\">&nbsp;</div>
\t</div>

<div id=\"phpbb_alert\" class=\"phpbb_alert\" data-l-err=\"";
        // line 77
        echo $this->extensions['phpbb\template\twig\extension']->lang("ERROR");
        echo "\" data-l-timeout-processing-req=\"";
        echo $this->extensions['phpbb\template\twig\extension']->lang("TIMEOUT_PROCESSING_REQ");
        echo "\">
\t\t<a href=\"#\" class=\"alert_close\">
\t\t\t<i class=\"icon fa-times-circle fa-fw\" aria-hidden=\"true\"></i>
\t\t</a>
\t<h3 class=\"alert_title\">&nbsp;</h3><p class=\"alert_text\"></p>
</div>
<div id=\"phpbb_confirm\" class=\"phpbb_alert\">
\t\t<a href=\"#\" class=\"alert_close\">
\t\t\t<i class=\"icon fa-times-circle fa-fw\" aria-hidden=\"true\"></i>
\t\t</a>
\t<div class=\"alert_text\"></div>
</div>

<script src=\"";
        // line 90
        echo ($context["T_JQUERY_LINK"] ?? null);
        echo "\"></script>
";
        // line 91
        if (($context["S_ALLOW_CDN"] ?? null)) {
            echo "<script>window.jQuery || document.write('\\x3Cscript src=\"";
            echo ($context["T_ASSETS_PATH"] ?? null);
            echo "/javascript/jquery-3.6.0.min.js?assets_version=";
            echo ($context["T_ASSETS_VERSION"] ?? null);
            echo "\">\\x3C/script>');</script>";
        }
        // line 92
        echo "<script src=\"";
        echo ($context["T_ASSETS_PATH"] ?? null);
        echo "/javascript/core.js?assets_version=";
        echo ($context["T_ASSETS_VERSION"] ?? null);
        echo "\"></script>
";
        // line 93
        $asset_file = "forum_fn.js";
        $asset = new \phpbb\template\asset($asset_file, $this->env->get_path_helper(), $this->env->get_filesystem());
        if (substr($asset_file, 0, 2) !== './' && $asset->is_relative()) {
            $asset_path = $asset->get_path();            $local_file = $this->env->get_phpbb_root_path() . $asset_path;
            if (!file_exists($local_file)) {
                $local_file = $this->env->findTemplate($asset_path);
                $asset->set_path($local_file, true);
            }
        }
        
        if ($asset->is_relative()) {
            $asset->add_assets_version($this->env->get_phpbb_config()['assets_version']);
        }
        $this->env->get_assets_bag()->add_script($asset);        // line 94
        $asset_file = "ajax.js";
        $asset = new \phpbb\template\asset($asset_file, $this->env->get_path_helper(), $this->env->get_filesystem());
        if (substr($asset_file, 0, 2) !== './' && $asset->is_relative()) {
            $asset_path = $asset->get_path();            $local_file = $this->env->get_phpbb_root_path() . $asset_path;
            if (!file_exists($local_file)) {
                $local_file = $this->env->findTemplate($asset_path);
                $asset->set_path($local_file, true);
            }
        }
        
        if ($asset->is_relative()) {
            $asset->add_assets_version($this->env->get_phpbb_config()['assets_version']);
        }
        $this->env->get_assets_bag()->add_script($asset);        // line 95
        echo "
";
        // line 96
        if (($context["S_ALLOW_CDN"] ?? null)) {
            // line 97
            echo "\t<script>
\t\t(function(\$){
\t\t\tvar \$fa_cdn = \$('head').find('link[rel=\"stylesheet\"]').first(),
\t\t\t\t\$span = \$('<span class=\"fa\" style=\"display:none\"></span>').appendTo('body');
\t\t\tif (\$span.css('fontFamily') !== 'FontAwesome' ) {
\t\t\t\t\$fa_cdn.after('<link href=\"";
            // line 102
            echo ($context["T_ASSETS_PATH"] ?? null);
            echo "/css/font-awesome.min.css\" rel=\"stylesheet\">');
\t\t\t\t\$fa_cdn.remove();
\t\t\t}
\t\t\t\$span.remove();
\t\t})(jQuery);
\t</script>
";
        }
        // line 109
        echo "
";
        // line 110
        if (($context["S_COOKIE_NOTICE"] ?? null)) {
            // line 111
            echo "\t<script src=\"";
            echo ($context["T_ASSETS_PATH"] ?? null);
            echo "/cookieconsent/cookieconsent.min.js?assets_version=";
            echo ($context["T_ASSETS_VERSION"] ?? null);
            echo "\"></script>
\t<script>
\t\tif (typeof window.cookieconsent === \"object\") {
\t\twindow.addEventListener(\"load\", function(){
\t\t\twindow.cookieconsent.initialise({
\t\t\t\t\"palette\": {
\t\t\t\t\t\"popup\": {
\t\t\t\t\t\t\"background\": \"#0F538A\"
\t\t\t\t\t},
\t\t\t\t\t\"button\": {
\t\t\t\t\t\t\"background\": \"#E5E5E5\"
\t\t\t\t\t}
\t\t\t\t},
\t\t\t\t\"theme\": \"classic\",
\t\t\t\t\"content\": {
\t\t\t\t\t\"message\": \"";
            // line 126
            echo twig_escape_filter($this->env, $this->extensions['phpbb\template\twig\extension']->lang("COOKIE_CONSENT_MSG"), "js");
            echo "\",
\t\t\t\t\t\"dismiss\": \"";
            // line 127
            echo twig_escape_filter($this->env, $this->extensions['phpbb\template\twig\extension']->lang("COOKIE_CONSENT_OK"), "js");
            echo "\",
\t\t\t\t\t\"link\": \"";
            // line 128
            echo twig_escape_filter($this->env, $this->extensions['phpbb\template\twig\extension']->lang("COOKIE_CONSENT_INFO"), "js");
            echo "\"
\t\t\t\t\t\"href\": \"";
            // line 129
            echo ($context["UA_PRIVACY"] ?? null);
            echo "\"
\t\t\t\t\t}
\t\t\t\t});
\t\t\t});\t\t\t\t\t
\t\t\t\t}
\t</script>
";
        }
        // line 136
        echo "
";
        // line 137
        $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
        $this->env->setNamespaceLookUpOrder(array('phpbb_viglink', '__main__'));
        $this->env->loadTemplate('@phpbb_viglink/event/overall_footer_after.html')->display($context);
        $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        // line 138
        echo "
";
        // line 139
        if (($context["S_PLUPLOAD"] ?? null)) {
            $location = "plupload.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("plupload.html", "overall_footer.html", 139)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
        }
        // line 140
        echo twig_get_attribute($this->env, $this->source, ($context["definition"] ?? null), "SCRIPTS", [], "any", false, false, false, 140);
        echo "

";
        // line 142
        // line 143
        echo "
</body>
</html>
";
    }

    public function getTemplateName()
    {
        return "overall_footer.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  422 => 143,  421 => 142,  416 => 140,  402 => 139,  399 => 138,  394 => 137,  391 => 136,  381 => 129,  377 => 128,  373 => 127,  369 => 126,  348 => 111,  346 => 110,  343 => 109,  333 => 102,  326 => 97,  324 => 96,  321 => 95,  307 => 94,  293 => 93,  286 => 92,  278 => 91,  274 => 90,  256 => 77,  241 => 73,  235 => 69,  229 => 66,  226 => 65,  224 => 64,  218 => 61,  212 => 60,  206 => 57,  200 => 56,  197 => 55,  195 => 54,  189 => 51,  186 => 50,  184 => 49,  177 => 45,  174 => 44,  173 => 43,  166 => 38,  165 => 37,  162 => 36,  156 => 35,  155 => 34,  139 => 33,  138 => 32,  135 => 31,  132 => 30,  129 => 29,  125 => 28,  108 => 26,  107 => 25,  104 => 24,  91 => 22,  89 => 21,  84 => 18,  82 => 17,  79 => 16,  77 => 15,  72 => 12,  60 => 11,  54 => 7,  50 => 6,  45 => 3,  43 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "overall_footer.html", "");
    }
}
