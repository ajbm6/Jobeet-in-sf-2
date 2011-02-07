<?php

/**
 * app_prodUrlGenerator
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class app_prodUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
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
        return array(array (), array_merge($this->defaults, array (  '_controller' => 'Application\\FrontendBundle\\Controller\\FrontendController::searchAction',)), array (), array (  0 =>   array (    0 => 'text',    1 => '/',    2 => 'search',    3 => NULL,  ),  1 =>   array (    0 => 'text',    1 => '/',    2 => 'frontend',    3 => NULL,  ),));
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
}
