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

/* @spaceace_ajaxchat/chat_body.html */
class __TwigTemplate_cf2503c3f4c24269f0b167371138a92a extends \Twig\Template
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
        if (($context["S_CHAT_ENABLED"] ?? null)) {
            // line 2
            echo "\t";
            if (($context["S_AJAXCHAT_VIEW"] ?? null)) {
                // line 3
                echo "\t\t";
                if (($context["S_GET_CHAT"] ?? null)) {
                    // line 4
                    echo "\t\t\t";
                    $location = "chat_body_readadd.html";
                    $namespace = false;
                    if (strpos($location, '@') === 0) {
                        $namespace = substr($location, 1, strpos($location, '/') - 1);
                        $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                        $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
                    }
                    $this->loadTemplate("chat_body_readadd.html", "@spaceace_ajaxchat/chat_body.html", 4)->display($context);
                    if ($namespace) {
                        $this->env->setNamespaceLookUpOrder($previous_look_up_order);
                    }
                    // line 5
                    echo "\t\t";
                } else {
                    // line 6
                    echo "\t\t\t";
                    if ((($context["CHAT_PAGE"] ?? null) == "chat")) {
                        // line 7
                        echo "\t\t\t\t";
                        $location = "overall_header.html";
                        $namespace = false;
                        if (strpos($location, '@') === 0) {
                            $namespace = substr($location, 1, strpos($location, '/') - 1);
                            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
                        }
                        $this->loadTemplate("overall_header.html", "@spaceace_ajaxchat/chat_body.html", 7)->display($context);
                        if ($namespace) {
                            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
                        }
                        // line 8
                        echo "\t\t\t";
                    }
                    // line 9
                    echo "\t\t\t";
                    if (((($context["CHAT_PAGE"] ?? null) == "popup") || (($context["CHAT_PAGE"] ?? null) == "archive"))) {
                        // line 10
                        echo "\t\t\t\t";
                        $location = "simple_header.html";
                        $namespace = false;
                        if (strpos($location, '@') === 0) {
                            $namespace = substr($location, 1, strpos($location, '/') - 1);
                            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
                        }
                        $this->loadTemplate("simple_header.html", "@spaceace_ajaxchat/chat_body.html", 10)->display($context);
                        if ($namespace) {
                            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
                        }
                        // line 11
                        echo "\t\t\t\t<div>
\t\t\t";
                    }
                    // line 13
                    echo "\t\t\t";
                    $location = "chat_body_script_vars.html";
                    $namespace = false;
                    if (strpos($location, '@') === 0) {
                        $namespace = substr($location, 1, strpos($location, '/') - 1);
                        $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                        $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
                    }
                    $this->loadTemplate("chat_body_script_vars.html", "@spaceace_ajaxchat/chat_body.html", 13)->display($context);
                    if ($namespace) {
                        $this->env->setNamespaceLookUpOrder($previous_look_up_order);
                    }
                    // line 14
                    echo "\t\t\t";
                    $asset_file = "@spaceace_ajaxchat/js/ajax_chat.js";
                    $asset = new \phpbb\template\asset($asset_file, $this->env->get_path_helper(), $this->env->get_filesystem());
                    if (substr($asset_file, 0, 2) !== './' && $asset->is_relative()) {
                        $asset_path = $asset->get_path();                        $local_file = $this->env->get_phpbb_root_path() . $asset_path;
                        if (!file_exists($local_file)) {
                            $local_file = $this->env->findTemplate($asset_path);
                            $asset->set_path($local_file, true);
                        }
                    }
                    
                    if ($asset->is_relative()) {
                        $asset->add_assets_version($this->env->get_phpbb_config()['assets_version']);
                    }
                    $this->env->get_assets_bag()->add_script($asset);                    // line 15
                    echo "\t\t\t";
                    // line 16
                    echo "\t\t\t<div id=\"ajaxchat\">
\t\t\t\t<div class=\"forabg\">
\t\t\t\t\t<div class=\"inner\">
\t\t\t\t\t\t<ul class=\"topiclist\">
\t\t\t\t\t\t\t<li class=\"header\">
\t\t\t\t\t\t\t\t<dl class=\"row-item\">
\t\t\t\t\t\t\t\t\t<dt><div class=\"chat-header-link\">";
                    // line 22
                    if ((($context["SCRIPT_NAME"] ?? null) == "index")) {
                        echo "<a href=\"";
                        echo ($context["U_CHAT"] ?? null);
                        echo "\">";
                        echo $this->extensions['phpbb\template\twig\extension']->lang("CHAT_EXPLAIN");
                        echo "</a>";
                    } else {
                        echo $this->extensions['phpbb\template\twig\extension']->lang("CHAT_EXPLAIN");
                    }
                    echo "</div></dt>
\t\t\t\t\t\t\t\t\t<dd></dd>
\t\t\t\t\t\t\t\t</dl>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t\t";
                    // line 27
                    if ((($context["CHAT_PAGE"] ?? null) != "archive")) {
                        // line 28
                        echo "\t\t\t\t\t\t\t";
                        if (($context["S_AJAX_CHAT_MESSAGES_DOWN"] ?? null)) {
                            // line 29
                            echo "\t\t\t\t\t\t\t\t";
                            $location = "chat_body_input.html";
                            $namespace = false;
                            if (strpos($location, '@') === 0) {
                                $namespace = substr($location, 1, strpos($location, '/') - 1);
                                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
                            }
                            $this->loadTemplate("chat_body_input.html", "@spaceace_ajaxchat/chat_body.html", 29)->display($context);
                            if ($namespace) {
                                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
                            }
                            // line 30
                            echo "\t\t\t\t\t\t\t";
                        }
                        // line 31
                        echo "\t\t\t\t\t\t";
                    }
                    // line 32
                    echo "\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t\t";
                    // line 34
                    if ((($context["CHAT_RULES"] ?? null) && (($context["CHAT_PAGE"] ?? null) != "archive"))) {
                        // line 35
                        echo "\t\t\t\t\t\t";
                        $location = "chat_body_chat_rules.html";
                        $namespace = false;
                        if (strpos($location, '@') === 0) {
                            $namespace = substr($location, 1, strpos($location, '/') - 1);
                            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
                        }
                        $this->loadTemplate("chat_body_chat_rules.html", "@spaceace_ajaxchat/chat_body.html", 35)->display($context);
                        if ($namespace) {
                            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
                        }
                        // line 36
                        echo "\t\t\t\t\t";
                    }
                    // line 37
                    echo "\t\t\t\t<div>
\t\t\t\t\t<div class=\"shout-body";
                    // line 38
                    if (($context["S_WHOIS_CHATTING"] ?? null)) {
                        if ((($context["S_AJAX_CHAT_ONLINELIST"] ?? null) && (($context["CHAT_PAGE"] ?? null) != "archive"))) {
                            echo " shouts";
                        }
                    }
                    if ((( !($context["S_AJAX_CHAT_ONLINELIST"] ?? null) || (($context["CHAT_PAGE"] ?? null) == "archive")) ||  !($context["S_WHOIS_CHATTING"] ?? null))) {
                        echo " chat_online_off";
                    }
                    if ((($context["SCRIPT_NAME"] ?? null) != "index")) {
                        if (((($context["S_CHAT"] ?? null) || ($context["S_POPUP"] ?? null)) || (($context["CHAT_PAGE"] ?? null) == "archive"))) {
                            echo " main";
                        }
                    }
                    echo "\">
\t\t\t\t\t\t<div id=\"chat\" ";
                    // line 39
                    if ( !($context["S_AJAX_CHAT_MESSAGES_DOWN"] ?? null)) {
                        echo "class=\"chat-messages-down\"";
                    }
                    echo " >
\t\t\t\t\t\t\t";
                    // line 40
                    $location = "chat_body_chatrow.html";
                    $namespace = false;
                    if (strpos($location, '@') === 0) {
                        $namespace = substr($location, 1, strpos($location, '/') - 1);
                        $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                        $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
                    }
                    $this->loadTemplate("chat_body_chatrow.html", "@spaceace_ajaxchat/chat_body.html", 40)->display($context);
                    if ($namespace) {
                        $this->env->setNamespaceLookUpOrder($previous_look_up_order);
                    }
                    // line 41
                    echo "\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t";
                    // line 43
                    if (($context["S_WHOISONLINE"] ?? null)) {
                        // line 44
                        echo "\t\t\t\t\t\t<div class=\"whois";
                        if ((($context["SCRIPT_NAME"] ?? null) != "index")) {
                            if ((($context["S_CHAT"] ?? null) || ($context["S_POPUP"] ?? null))) {
                                echo " main";
                            }
                        }
                        if ((( !($context["S_AJAX_CHAT_ONLINELIST"] ?? null) || (($context["CHAT_PAGE"] ?? null) == "archive")) ||  !($context["S_WHOIS_CHATTING"] ?? null))) {
                            echo " whois_online_off";
                        }
                        echo "\">
\t\t\t\t\t\t\t<h3>
\t\t\t\t\t\t\t\t";
                        // line 46
                        echo $this->extensions['phpbb\template\twig\extension']->lang("WHOIS_CHATTING");
                        echo "
\t\t\t\t\t\t\t</h3>
\t\t\t\t\t\t\t<div id=\"whois_online\">
\t\t\t\t\t\t\t\t";
                        // line 49
                        $location = "chat_body_whois.html";
                        $namespace = false;
                        if (strpos($location, '@') === 0) {
                            $namespace = substr($location, 1, strpos($location, '/') - 1);
                            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
                        }
                        $this->loadTemplate("chat_body_whois.html", "@spaceace_ajaxchat/chat_body.html", 49)->display($context);
                        if ($namespace) {
                            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
                        }
                        // line 50
                        echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t";
                    }
                    // line 53
                    echo "\t\t\t\t</div>
\t\t\t\t<div class=\"chatnavbar navbar\">
\t\t\t\t\t";
                    // line 55
                    if ((($context["CHAT_PAGE"] ?? null) != "archive")) {
                        // line 56
                        echo "\t\t\t\t\t\t";
                        if ( !($context["S_AJAX_CHAT_MESSAGES_DOWN"] ?? null)) {
                            // line 57
                            echo "\t\t\t\t\t\t\t";
                            $location = "chat_body_input.html";
                            $namespace = false;
                            if (strpos($location, '@') === 0) {
                                $namespace = substr($location, 1, strpos($location, '/') - 1);
                                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
                            }
                            $this->loadTemplate("chat_body_input.html", "@spaceace_ajaxchat/chat_body.html", 57)->display($context);
                            if ($namespace) {
                                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
                            }
                            // line 58
                            echo "\t\t\t\t\t\t";
                        }
                        // line 59
                        echo "\t\t\t\t\t";
                    }
                    // line 60
                    echo "\t\t\t\t\t<div class=\"chatform\">
\t\t\t\t\t\t<span class=\"list chat-icon details\">";
                    // line 61
                    echo $this->extensions['phpbb\template\twig\extension']->lang("DETAILS");
                    echo "</span>
\t\t\t\t\t\t<img src=\"";
                    // line 62
                    echo ($context["BOARD_URL"] ?? null);
                    echo "ext/spaceace/ajaxchat/styles/all/theme/images/check_indicator.gif\" id=\"check_indicator\" alt=\"check_indicator\" title=\"";
                    echo $this->extensions['phpbb\template\twig\extension']->lang("AJAX_CHAT_VERSION");
                    echo "\" />
\t\t\t\t\t\t<img src=\"";
                    // line 63
                    echo ($context["BOARD_URL"] ?? null);
                    echo "ext/spaceace/ajaxchat/styles/all/theme/images/act_indicator.gif\" id=\"act_indicator\" alt=\"act_indicator\" title=\"";
                    echo $this->extensions['phpbb\template\twig\extension']->lang("AJAX_CHAT_VERSION");
                    echo "\" />
\t\t\t\t\t\t<strong>&nbsp;";
                    // line 64
                    echo $this->extensions['phpbb\template\twig\extension']->lang("UPDATES");
                    echo "&nbsp;<span id=\"update_seconds\">";
                    echo ($context["REFRESH_TIME"] ?? null);
                    echo "</span>&nbsp;";
                    echo $this->extensions['phpbb\template\twig\extension']->lang("UNIT");
                    echo "</strong>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t";
                    // line 68
                    // line 69
                    echo "\t\t\t";
                    if ((($context["CHAT_PAGE"] ?? null) == "chat")) {
                        // line 70
                        echo "\t\t\t\t";
                        $location = "overall_footer.html";
                        $namespace = false;
                        if (strpos($location, '@') === 0) {
                            $namespace = substr($location, 1, strpos($location, '/') - 1);
                            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
                        }
                        $this->loadTemplate("overall_footer.html", "@spaceace_ajaxchat/chat_body.html", 70)->display($context);
                        if ($namespace) {
                            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
                        }
                        // line 71
                        echo "\t\t\t";
                    }
                    // line 72
                    echo "\t\t\t";
                    if (((($context["CHAT_PAGE"] ?? null) == "popup") || (($context["CHAT_PAGE"] ?? null) == "archive"))) {
                        // line 73
                        echo "\t\t\t\t</div>
\t\t\t\t";
                        // line 74
                        $location = "simple_footer.html";
                        $namespace = false;
                        if (strpos($location, '@') === 0) {
                            $namespace = substr($location, 1, strpos($location, '/') - 1);
                            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
                        }
                        $this->loadTemplate("simple_footer.html", "@spaceace_ajaxchat/chat_body.html", 74)->display($context);
                        if ($namespace) {
                            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
                        }
                        // line 75
                        echo "\t\t\t";
                    }
                    // line 76
                    echo "\t\t";
                }
                // line 77
                echo "\t";
            }
        }
    }

    public function getTemplateName()
    {
        return "@spaceace_ajaxchat/chat_body.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  381 => 77,  378 => 76,  375 => 75,  363 => 74,  360 => 73,  357 => 72,  354 => 71,  341 => 70,  338 => 69,  337 => 68,  326 => 64,  320 => 63,  314 => 62,  310 => 61,  307 => 60,  304 => 59,  301 => 58,  288 => 57,  285 => 56,  283 => 55,  279 => 53,  274 => 50,  262 => 49,  256 => 46,  243 => 44,  241 => 43,  237 => 41,  225 => 40,  219 => 39,  203 => 38,  200 => 37,  197 => 36,  184 => 35,  182 => 34,  178 => 32,  175 => 31,  172 => 30,  159 => 29,  156 => 28,  154 => 27,  138 => 22,  130 => 16,  128 => 15,  113 => 14,  100 => 13,  96 => 11,  83 => 10,  80 => 9,  77 => 8,  64 => 7,  61 => 6,  58 => 5,  45 => 4,  42 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@spaceace_ajaxchat/chat_body.html", "");
    }
}
