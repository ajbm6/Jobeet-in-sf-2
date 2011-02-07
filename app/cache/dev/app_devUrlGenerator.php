<?php

/**
 * app_devUrlGenerator
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class app_devUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    static protected $declaredRouteNames = array(
       'homepage' => true,
       'frontend' => true,
       'showjob' => true,
       'editjob' => true,
       'newjob' => true,
       'searchjobs' => true,
       'showcategory' => true,
       'backend' => true,
       'login' => true,
       '_security_login' => true,
       '_security_check' => true,
       '_profiler_search' => true,
       '_profiler_purge' => true,
       '_profiler_import' => true,
       '_profiler_export' => true,
       '_profiler_search_results' => true,
       '_profiler' => true,
       '_profiler_panel' => true,
    );

    /**
     * Constructor.
     */
    public function __construct(array $context = array(), array $defaults = array())
    {
        $this->context = $context;
        $this->defaults = $defaults;
    }

    public function generate($name, array $parameters, $absolute = false)
    {
        if (!isset(self::$declaredRouteNames[$name])) {
            throw new \InvalidArgumentException(sprintf('Route "%s" does not exist.', $name));
        }

        $escapedName = str_replace('.', '__', $name);

        list($variables, $defaults, $requirements, $tokens) = $this->{'get'.$escapedName.'RouteInfo'}();

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $absolute);
    }

    protected function gethomepageRouteInfo()
    {
        return array(array (), array_merge($this->defaults, array (  '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\DefaultController::indexAction',)), array (), array (  0 =>   array (    0 => 'text',    1 => '/',    2 => '',    3 => NULL,  ),));
    }

    protected function getfrontendRouteInfo()
    {
        return array(array (  'locale' => ':locale',), array_merge($this->defaults, array (  '_controller' => 'Application\\FrontendBundle\\Controller\\FrontendController::indexAction',  'locale' => 'en',)), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => ':locale',    3 => 'locale',  ),  1 =>   array (    0 => 'text',    1 => '/',    2 => 'frontend',    3 => NULL,  ),));
    }

    protected function getshowjobRouteInfo()
    {
        return array(array (  'company' => ':company',  'location' => ':location',  'id' => ':id',  'position' => ':position',  'locale' => ':locale',), array_merge($this->defaults, array (  '_controller' => 'Application\\FrontendBundle\\Controller\\JobController::showAction',  'locale' => 'en',)), array (  'id' => '\\d+',), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => ':locale',    3 => 'locale',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => ':position',    3 => 'position',  ),  2 =>   array (    0 => 'variable',    1 => '/',    2 => ':id',    3 => 'id',  ),  3 =>   array (    0 => 'variable',    1 => '/',    2 => ':location',    3 => 'location',  ),  4 =>   array (    0 => 'variable',    1 => '/',    2 => ':company',    3 => 'company',  ),  5 =>   array (    0 => 'text',    1 => '/',    2 => 'show',    3 => NULL,  ),  6 =>   array (    0 => 'text',    1 => '/',    2 => 'job',    3 => NULL,  ),  7 =>   array (    0 => 'text',    1 => '/',    2 => 'frontend',    3 => NULL,  ),));
    }

    protected function geteditjobRouteInfo()
    {
        return array(array (  'id' => ':id',  'locale' => ':locale',), array_merge($this->defaults, array (  '_controller' => 'Application\\FrontendBundle\\Controller\\JobController::editAction',  'locale' => 'en',)), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => ':locale',    3 => 'locale',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => ':id',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/',    2 => 'edit',    3 => NULL,  ),  3 =>   array (    0 => 'text',    1 => '/',    2 => 'job',    3 => NULL,  ),  4 =>   array (    0 => 'text',    1 => '/',    2 => 'frontend',    3 => NULL,  ),));
    }

    protected function getnewjobRouteInfo()
    {
        return array(array (  'locale' => ':locale',), array_merge($this->defaults, array (  '_controller' => 'Application\\FrontendBundle\\Controller\\JobController::newAction',  'locale' => 'en',)), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => ':locale',    3 => 'locale',  ),  1 =>   array (    0 => 'text',    1 => '/',    2 => 'new',    3 => NULL,  ),  2 =>   array (    0 => 'text',    1 => '/',    2 => 'job',    3 => NULL,  ),  3 =>   array (    0 => 'text',    1 => '/',    2 => 'frontend',    3 => NULL,  ),));
    }

    protected function getsearchjobsRouteInfo()
    {
        return array(array (), array_merge($this->defaults, array (  '_controller' => 'Application\\FrontendBundle\\Controller\\FrontendController::searchAction',)), array (), array (  0 =>   array (    0 => 'text',    1 => '/',    2 => '',    3 => NULL,  ),  1 =>   array (    0 => 'text',    1 => '/',    2 => 'search',    3 => NULL,  ),  2 =>   array (    0 => 'text',    1 => '/',    2 => 'frontend',    3 => NULL,  ),));
    }

    protected function getshowcategoryRouteInfo()
    {
        return array(array (  'id' => ':id',  'slug' => ':slug',  'page' => ':page',  'locale' => ':locale',), array_merge($this->defaults, array (  '_controller' => 'Application\\FrontendBundle\\Controller\\CategoryController::showAction',  'page' => 1,  'locale' => 'en',)), array (  'id' => '\\d+',), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => ':locale',    3 => 'locale',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => ':page',    3 => 'page',  ),  2 =>   array (    0 => 'variable',    1 => '/',    2 => ':slug',    3 => 'slug',  ),  3 =>   array (    0 => 'variable',    1 => '/',    2 => ':id',    3 => 'id',  ),  4 =>   array (    0 => 'text',    1 => '/',    2 => 'category',    3 => NULL,  ),  5 =>   array (    0 => 'text',    1 => '/',    2 => 'frontend',    3 => NULL,  ),));
    }

    protected function getbackendRouteInfo()
    {
        return array(array (), array_merge($this->defaults, array (  '_controller' => 'Application\\AdminBundle\\Controller\\DefaultController::indexAction',)), array (), array (  0 =>   array (    0 => 'text',    1 => '/',    2 => '',    3 => NULL,  ),  1 =>   array (    0 => 'text',    1 => '/',    2 => 'admin',    3 => NULL,  ),));
    }

    protected function getloginRouteInfo()
    {
        return array(array (), array_merge($this->defaults, array (  '_controller' => 'Application\\SecurityBundle\\Controller\\AuthController::loginAction',)), array (), array (  0 =>   array (    0 => 'text',    1 => '/',    2 => 'login',    3 => NULL,  ),));
    }

    protected function get_security_loginRouteInfo()
    {
        return array(array (), array_merge($this->defaults, array (  '_controller' => 'Application\\SecurityBundle\\Controller\\AuthController::loginAction',)), array (), array (  0 =>   array (    0 => 'text',    1 => '/',    2 => 'login',    3 => NULL,  ),));
    }

    protected function get_security_checkRouteInfo()
    {
        return array(array (), array_merge($this->defaults, array (  '_controller' => 'Application\\SecurityBundle\\Controller\\AuthController::loginAction',)), array (), array (  0 =>   array (    0 => 'text',    1 => '/',    2 => 'check_login',    3 => NULL,  ),));
    }

    protected function get_profiler_searchRouteInfo()
    {
        return array(array (), array_merge($this->defaults, array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::searchAction',)), array (), array (  0 =>   array (    0 => 'text',    1 => '/',    2 => 'search',    3 => NULL,  ),  1 =>   array (    0 => 'text',    1 => '/',    2 => '_profiler',    3 => NULL,  ),));
    }

    protected function get_profiler_purgeRouteInfo()
    {
        return array(array (), array_merge($this->defaults, array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::purgeAction',)), array (), array (  0 =>   array (    0 => 'text',    1 => '/',    2 => 'purge',    3 => NULL,  ),  1 =>   array (    0 => 'text',    1 => '/',    2 => '_profiler',    3 => NULL,  ),));
    }

    protected function get_profiler_importRouteInfo()
    {
        return array(array (), array_merge($this->defaults, array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::importAction',)), array (), array (  0 =>   array (    0 => 'text',    1 => '/',    2 => 'import',    3 => NULL,  ),  1 =>   array (    0 => 'text',    1 => '/',    2 => '_profiler',    3 => NULL,  ),));
    }

    protected function get_profiler_exportRouteInfo()
    {
        return array(array (  'token' => ':token',), array_merge($this->defaults, array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::exportAction',)), array (), array (  0 =>   array (    0 => 'text',    1 => '.',    2 => 'txt',    3 => NULL,  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => ':token',    3 => 'token',  ),  2 =>   array (    0 => 'text',    1 => '/',    2 => 'export',    3 => NULL,  ),  3 =>   array (    0 => 'text',    1 => '/',    2 => '_profiler',    3 => NULL,  ),));
    }

    protected function get_profiler_search_resultsRouteInfo()
    {
        return array(array (  'token' => ':token',), array_merge($this->defaults, array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::searchResultsAction',)), array (), array (  0 =>   array (    0 => 'text',    1 => '/',    2 => 'results',    3 => NULL,  ),  1 =>   array (    0 => 'text',    1 => '/',    2 => 'search',    3 => NULL,  ),  2 =>   array (    0 => 'variable',    1 => '/',    2 => ':token',    3 => 'token',  ),  3 =>   array (    0 => 'text',    1 => '/',    2 => '_profiler',    3 => NULL,  ),));
    }

    protected function get_profilerRouteInfo()
    {
        return array(array (  'token' => ':token',), array_merge($this->defaults, array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::panelAction',)), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => ':token',    3 => 'token',  ),  1 =>   array (    0 => 'text',    1 => '/',    2 => '_profiler',    3 => NULL,  ),));
    }

    protected function get_profiler_panelRouteInfo()
    {
        return array(array (  'token' => ':token',  'panel' => ':panel',), array_merge($this->defaults, array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::panelAction',)), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => ':panel',    3 => 'panel',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => ':token',    3 => 'token',  ),  2 =>   array (    0 => 'text',    1 => '/',    2 => '_profiler',    3 => NULL,  ),));
    }
}
