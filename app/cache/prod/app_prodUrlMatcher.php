<?php

/**
 * app_prodUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class app_prodUrlMatcher extends Symfony\Component\Routing\Matcher\UrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(array $context = array(), array $defaults = array())
    {
        $this->context = $context;
        $this->defaults = $defaults;
    }

    public function match($url)
    {
        $url = $this->normalizeUrl($url);

        if ($url === '/') {
            return array_merge($this->mergeDefaults(array(), array (  '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\DefaultController::indexAction',)), array('_route' => 'homepage'));
        }

        if (0 === strpos($url, '/frontend') && preg_match('#^/frontend(?:/(?P<locale>[^/\.]+?))?$#x', $url, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Application\\FrontendBundle\\Controller\\FrontendController::indexAction',  'locale' => 'en',)), array('_route' => 'frontend'));
        }

        if (0 === strpos($url, '/frontend/job/show') && preg_match('#^/frontend/job/show/(?P<company>[^/\.]+?)/(?P<location>[^/\.]+?)/(?P<id>\d+)/(?P<position>[^/\.]+?)(?:/(?P<locale>[^/\.]+?))?$#x', $url, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Application\\FrontendBundle\\Controller\\JobController::showAction',  'locale' => 'en',)), array('_route' => 'showjob'));
        }

        if (0 === strpos($url, '/frontend/job/edit') && preg_match('#^/frontend/job/edit/(?P<id>[^/\.]+?)(?:/(?P<locale>[^/\.]+?))?$#x', $url, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Application\\FrontendBundle\\Controller\\JobController::editAction',  'locale' => 'en',)), array('_route' => 'editjob'));
        }

        if (0 === strpos($url, '/frontend/job/new') && preg_match('#^/frontend/job/new(?:/(?P<locale>[^/\.]+?))?$#x', $url, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Application\\FrontendBundle\\Controller\\JobController::newAction',  'locale' => 'en',)), array('_route' => 'newjob'));
        }

        if ($url === '/frontend/search') {
            return array_merge($this->mergeDefaults(array(), array (  '_controller' => 'Application\\FrontendBundle\\Controller\\FrontendController::searchAction',)), array('_route' => 'searchjobs'));
        }

        if (0 === strpos($url, '/frontend/category') && preg_match('#^/frontend/category/(?P<id>\d+)/(?P<slug>[^/\.]+?)(?:/(?P<page>[^/\.]+?) (?:/(?P<locale>[^/\.]+?) )?)?$#x', $url, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Application\\FrontendBundle\\Controller\\CategoryController::showAction',  'page' => 1,  'locale' => 'en',)), array('_route' => 'showcategory'));
        }

        if ($url === '/admin/') {
            return array_merge($this->mergeDefaults(array(), array (  '_controller' => 'Application\\AdminBundle\\Controller\\DefaultController::indexAction',)), array('_route' => 'backend'));
        }

        if ($url === '/login') {
            return array_merge($this->mergeDefaults(array(), array (  '_controller' => 'Application\\SecurityBundle\\Controller\\AuthController::loginAction',)), array('_route' => 'login'));
        }

        if ($url === '/login') {
            return array_merge($this->mergeDefaults(array(), array (  '_controller' => 'Application\\SecurityBundle\\Controller\\AuthController::loginAction',)), array('_route' => '_security_login'));
        }

        if ($url === '/check_login') {
            return array_merge($this->mergeDefaults(array(), array (  '_controller' => 'Application\\SecurityBundle\\Controller\\AuthController::loginAction',)), array('_route' => '_security_check'));
        }

        return false;
    }
}
