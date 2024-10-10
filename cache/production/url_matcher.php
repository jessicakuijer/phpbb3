<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class phpbb_url_matcher extends Symfony\Component\Routing\Matcher\UrlMatcher
{
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($rawPathinfo)
    {
        $allow = [];
        $pathinfo = rawurldecode($rawPathinfo);
        $trimmedPathinfo = rtrim($pathinfo, '/');
        $context = $this->context;
        $request = $this->request ?: $this->createRequest($pathinfo);
        $requestMethod = $canonicalMethod = $context->getMethod();

        if ('HEAD' === $requestMethod) {
            $canonicalMethod = 'GET';
        }

        // phpbb_cron_run
        if (0 === strpos($pathinfo, '/cron') && preg_match('#^/cron/(?P<cron_type>[^/]++)$#sD', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, ['_route' => 'phpbb_cron_run']), array (  '_controller' => 'cron.controller:handle',));
        }

        if (0 === strpos($pathinfo, '/chat')) {
            // spaceace_ajaxchat_popup
            if (0 === strpos($pathinfo, '/chat/popup') && preg_match('#^/chat/popup(?P<tslash>/?)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'spaceace_ajaxchat_popup']), array (  '_controller' => 'spaceace.ajaxchat.chat.controller:defaultAction',  'page' => 'popup',));
            }

            // spaceace_ajaxchat_archive
            if (0 === strpos($pathinfo, '/chat/archive') && preg_match('#^/chat/archive(?P<tslash>/?)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'spaceace_ajaxchat_archive']), array (  '_controller' => 'spaceace.ajaxchat.chat.controller:defaultAction',  'page' => 'archive',));
            }

            // spaceace_ajaxchat_add
            if (0 === strpos($pathinfo, '/chat/add') && preg_match('#^/chat/add(?P<tslash>/?)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'spaceace_ajaxchat_add']), array (  '_controller' => 'spaceace.ajaxchat.chat.controller:addAction',));
            }

            // spaceace_ajaxchat_edit
            if (0 === strpos($pathinfo, '/chat/edit') && preg_match('#^/chat/edit/(?P<chat_id>[^/]+)(?P<tslash>/?)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'spaceace_ajaxchat_edit']), array (  '_controller' => 'spaceace.ajaxchat.chat.controller:editAction',));
            }

            // spaceace_ajaxchat_read
            if (0 === strpos($pathinfo, '/chat/read') && preg_match('#^/chat/read(?P<tslash>/?)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'spaceace_ajaxchat_read']), array (  '_controller' => 'spaceace.ajaxchat.chat.controller:readAction',));
            }

            // spaceace_ajaxchat_delete
            if (0 === strpos($pathinfo, '/chat/delete') && preg_match('#^/chat/delete(?P<tslash>/?)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'spaceace_ajaxchat_delete']), array (  '_controller' => 'spaceace.ajaxchat.chat.controller:delAction',));
            }

            // spaceace_ajaxchat_quote
            if (0 === strpos($pathinfo, '/chat/quotemessage') && preg_match('#^/chat/quotemessage(?P<tslash>/?)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'spaceace_ajaxchat_quote']), array (  '_controller' => 'spaceace.ajaxchat.chat.controller:chat_quote',));
            }

            // spaceace_ajaxchat_chat
            if (preg_match('#^/chat(?P<tslash>/?)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'spaceace_ajaxchat_chat']), array (  '_controller' => 'spaceace.ajaxchat.chat.controller:defaultAction',  'page' => 'chat',));
            }

        }

        elseif (0 === strpos($pathinfo, '/feed')) {
            if (0 === strpos($pathinfo, '/feed/forum')) {
                // phpbb_feed_forums
                if ('/feed/forums' === $pathinfo) {
                    return array (  '_controller' => 'phpbb.feed.controller:forums',  '_route' => 'phpbb_feed_forums',);
                }

                // phpbb_feed_forum
                if (preg_match('#^/feed/forum/(?P<forum_id>\\d+)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'phpbb_feed_forum']), array (  '_controller' => 'phpbb.feed.controller:forum',));
                }

            }

            // phpbb_feed_news
            if ('/feed/news' === $pathinfo) {
                return array (  '_controller' => 'phpbb.feed.controller:news',  '_route' => 'phpbb_feed_news',);
            }

            if (0 === strpos($pathinfo, '/feed/topics')) {
                // phpbb_feed_topics
                if ('/feed/topics' === $pathinfo) {
                    return array (  '_controller' => 'phpbb.feed.controller:topics',  '_route' => 'phpbb_feed_topics',);
                }

                // phpbb_feed_topics_active
                if ('/feed/topics_active' === $pathinfo) {
                    return array (  '_controller' => 'phpbb.feed.controller:topics_active',  '_route' => 'phpbb_feed_topics_active',);
                }

                // phpbb_feed_topics_new
                if ('/feed/topics_new' === $pathinfo) {
                    return array (  '_controller' => 'phpbb.feed.controller:topics_new',  '_route' => 'phpbb_feed_topics_new',);
                }

            }

            // phpbb_feed_topic
            if (0 === strpos($pathinfo, '/feed/topic') && preg_match('#^/feed/topic/(?P<topic_id>\\d+)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'phpbb_feed_topic']), array (  '_controller' => 'phpbb.feed.controller:topic',));
            }

            // phpbb_feed_overall
            if (preg_match('#^/feed/(?P<mode>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'phpbb_feed_overall']), array (  '_controller' => 'phpbb.feed.controller:overall',));
            }

            // phpbb_feed_index
            if ('/feed' === $pathinfo) {
                return array (  '_controller' => 'phpbb.feed.controller:overall',  '_route' => 'phpbb_feed_index',);
            }

        }

        // phpbb_help_bbcode_controller
        if ('/help/bbcode' === $pathinfo) {
            return array (  '_controller' => 'phpbb.help.controller.bbcode:handle',  '_route' => 'phpbb_help_bbcode_controller',);
        }

        // phpbb_help_faq_controller
        if ('/help/faq' === $pathinfo) {
            return array (  '_controller' => 'phpbb.help.controller.faq:handle',  '_route' => 'phpbb_help_faq_controller',);
        }

        // phpbb_report_pm_controller
        if (0 === strpos($pathinfo, '/pm') && preg_match('#^/pm/(?P<id>\\d+)/report$#sD', $pathinfo, $matches)) {
            $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'phpbb_report_pm_controller']), array (  '_controller' => 'phpbb.report.controller:handle',  'mode' => 'pm',));
            if (!in_array($canonicalMethod, ['GET', 'POST'])) {
                $allow = array_merge($allow, ['GET', 'POST']);
                goto not_phpbb_report_pm_controller;
            }

            return $ret;
        }
        not_phpbb_report_pm_controller:

        // phpbb_report_post_controller
        if (0 === strpos($pathinfo, '/post') && preg_match('#^/post/(?P<id>\\d+)/report$#sD', $pathinfo, $matches)) {
            $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'phpbb_report_post_controller']), array (  '_controller' => 'phpbb.report.controller:handle',  'mode' => 'post',));
            if (!in_array($canonicalMethod, ['GET', 'POST'])) {
                $allow = array_merge($allow, ['GET', 'POST']);
                goto not_phpbb_report_post_controller;
            }

            return $ret;
        }
        not_phpbb_report_post_controller:

        if (0 === strpos($pathinfo, '/user')) {
            // phpbb_ucp_delete_cookies_controller
            if ('/user/delete_cookies' === $pathinfo) {
                return array (  '_controller' => 'phpbb.ucp.controller.delete_cookies:handle',  '_route' => 'phpbb_ucp_delete_cookies_controller',);
            }

            // phpbb_ucp_reset_password_controller
            if ('/user/reset_password' === $pathinfo) {
                return array (  '_controller' => 'phpbb.ucp.controller.reset_password:reset',  '_route' => 'phpbb_ucp_reset_password_controller',);
            }

            // phpbb_ucp_forgot_password_controller
            if ('/user/forgot_password' === $pathinfo) {
                return array (  '_controller' => 'phpbb.ucp.controller.reset_password:request',  '_route' => 'phpbb_ucp_forgot_password_controller',);
            }

        }

        if ('/' === $pathinfo && !$allow) {
            throw new Symfony\Component\Routing\Exception\NoConfigurationException();
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
