<?php
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\TaggedContainerInterface;
use Symfony\Component\DependencyInjection\Container;
use Symfony\Component\DependencyInjection\Reference;
use Symfony\Component\DependencyInjection\Parameter;
use Symfony\Component\DependencyInjection\ParameterBag\FrozenParameterBag;
class appProdProjectContainer extends Container implements TaggedContainerInterface {
    public function __construct() {
        parent::__construct(new FrozenParameterBag($this->getDefaultParameters())); }
    protected function getEventDispatcherService() {
        $a = $this->get('zend.logger');
        $b = $this->get('security.access_map');
        $c = $this->get('security.context');
        $d = $this->get('security.authentication.provider.dao.security.matcher.mape22ddcb3c57f9062bd9c1ff9820baac5.1');
        $e = new \Symfony\Component\HttpFoundation\RequestMatcher();
        $e->matchPath('/admin/.*');
        $f = new \Symfony\Component\HttpKernel\Security\FirewallMap();
        $f->add($e, array(0 => new \Symfony\Component\HttpKernel\Security\Firewall\ChannelListener($b, new \Symfony\Component\HttpKernel\Security\EntryPoint\RetryAuthenticationEntryPoint(), $a), 1 => new \Symfony\Component\HttpKernel\Security\Firewall\ContextListener($c, array(0 => $this->get('security.authentication.provider.default')), $a), 2 => new \Symfony\Component\HttpKernel\Security\Firewall\UsernamePasswordFormAuthenticationListener($c, $d, array('check_path' => '/login_check', 'login_path' => '/login', 'use_forward' => false, 'always_use_default_target_path' => false, 'default_target_path' => '/', 'target_path_parameter' => '_target_path', 'use_referer' => false, 'failure_path' => NULL, 'failure_forward' => false), $a), 3 => new \Symfony\Component\HttpKernel\Security\Firewall\AccessListener($c, $this->get('security.access.decision_manager'), $b, new \Symfony\Component\Security\Authentication\AuthenticationProviderManager(array(0 => $d)), $a)), new \Symfony\Component\HttpKernel\Security\Firewall\ExceptionListener($c, $this->get('security.authentication.trust_resolver'), new \Symfony\Component\HttpKernel\Security\EntryPoint\FormAuthenticationEntryPoint('/login', false), NULL, $a));
        $this->services['event_dispatcher'] = $instance = new \Symfony\Bundle\FrameworkBundle\EventDispatcher();
        $instance->registerKernelListeners(array(0 => array(0 => new \Symfony\Bundle\FrameworkBundle\RequestListener($this, $this->get('router'), $a), 1 => new \Symfony\Component\HttpKernel\Cache\EsiListener(new \Symfony\Component\HttpKernel\Cache\Esi()), 2 => new \Symfony\Component\HttpKernel\ResponseListener()), 128 => array(0 => new \Symfony\Component\HttpKernel\Debug\ExceptionListener('Symfony\\Bundle\\FrameworkBundle\\Controller\\ExceptionController::exceptionAction', $a), 1 => new \Symfony\Component\HttpKernel\Security\Firewall($f))));
        return $instance; }
    protected function getHttpKernelService() {
        return $this->services['http_kernel'] = new \Symfony\Component\HttpKernel\HttpKernel($this->get('event_dispatcher'), $this->get('controller_resolver')); }
    protected function getRequestService() {
        return $this->get('http_kernel')->getRequest(); }
    protected function getResponseService() {
        $instance = new \Symfony\Component\HttpFoundation\Response();
        $instance->setCharset('UTF-8');
        return $instance; }
    protected function getRouting_Loader_RealService() {
        $a = new \Symfony\Component\Routing\Loader\LoaderResolver();
        $a->addLoader(new \Symfony\Component\Routing\Loader\XmlFileLoader(array('Application' => '/home/amir/tmp/jobeet2.0/app/../src/Application', 'Bundle' => '/home/amir/tmp/jobeet2.0/app/../src/Bundle', 'Symfony\\Bundle' => '/home/amir/tmp/jobeet2.0/app/../src/vendor/symfony/src/Symfony/Bundle')));
        $a->addLoader(new \Symfony\Component\Routing\Loader\YamlFileLoader(array('Application' => '/home/amir/tmp/jobeet2.0/app/../src/Application', 'Bundle' => '/home/amir/tmp/jobeet2.0/app/../src/Bundle', 'Symfony\\Bundle' => '/home/amir/tmp/jobeet2.0/app/../src/vendor/symfony/src/Symfony/Bundle')));
        $a->addLoader(new \Symfony\Component\Routing\Loader\PhpFileLoader(array('Application' => '/home/amir/tmp/jobeet2.0/app/../src/Application', 'Bundle' => '/home/amir/tmp/jobeet2.0/app/../src/Bundle', 'Symfony\\Bundle' => '/home/amir/tmp/jobeet2.0/app/../src/vendor/symfony/src/Symfony/Bundle')));
        return $this->services['routing.loader.real'] = new \Symfony\Bundle\FrameworkBundle\Routing\DelegatingLoader($this->get('controller_name_converter'), $this->get('zend.logger'), $a); }
    protected function getRouterService() {
        return $this->services['router'] = new \Symfony\Component\Routing\Router(new \Symfony\Bundle\FrameworkBundle\Routing\LazyLoader($this, 'routing.loader.real'), '/home/amir/tmp/jobeet2.0/app/config/routing.yml', array('cache_dir' => '/home/amir/tmp/jobeet2.0/app/cache/prod', 'debug' => false, 'generator_class' => 'Symfony\\Component\\Routing\\Generator\\UrlGenerator', 'generator_base_class' => 'Symfony\\Component\\Routing\\Generator\\UrlGenerator', 'generator_dumper_class' => 'Symfony\\Component\\Routing\\Generator\\Dumper\\PhpGeneratorDumper', 'generator_cache_class' => 'app_prodUrlGenerator', 'matcher_class' => 'Symfony\\Component\\Routing\\Matcher\\UrlMatcher', 'matcher_base_class' => 'Symfony\\Component\\Routing\\Matcher\\UrlMatcher', 'matcher_dumper_class' => 'Symfony\\Component\\Routing\\Matcher\\Dumper\\PhpMatcherDumper', 'matcher_cache_class' => 'app_prodUrlMatcher')); }
    protected function getValidatorService() {
        return $this->services['validator'] = new \Symfony\Component\Validator\Validator(new \Symfony\Component\Validator\Mapping\ClassMetadataFactory(new \Symfony\Component\Validator\Mapping\Loader\LoaderChain(array(0 => new \Symfony\Component\Validator\Mapping\Loader\AnnotationLoader(array('validation' => 'Symfony\\Component\\Validator\\Constraints\\')), 1 => new \Symfony\Component\Validator\Mapping\Loader\StaticMethodLoader('loadValidatorMetadata'), 2 => new \Symfony\Component\Validator\Mapping\Loader\XmlFilesLoader(array(0 => '/home/amir/tmp/jobeet2.0/src/vendor/symfony/src/Symfony/Bundle/FrameworkBundle/DependencyInjection/../../../Component/Form/Resources/config/validation.xml')), 3 => new \Symfony\Component\Validator\Mapping\Loader\YamlFilesLoader(array(0 => '/home/amir/tmp/jobeet2.0/src/Application/JobeetBundle/Resources/config/validation.yml'))))), new \Symfony\Bundle\FrameworkBundle\Validator\ConstraintValidatorFactory($this)); }
    protected function getTemplating_Helper_SlotsService() {
        return $this->services['templating.helper.slots'] = new \Symfony\Component\Templating\Helper\SlotsHelper(); }
    protected function getTemplating_Helper_AssetsService() {
        return $this->services['templating.helper.assets'] = new \Symfony\Bundle\FrameworkBundle\Templating\Helper\AssetsHelper($this->get('http_kernel')->getRequest(), array(), NULL); }
    protected function getTemplating_Helper_RequestService() {
        return $this->services['templating.helper.request'] = new \Symfony\Bundle\FrameworkBundle\Templating\Helper\RequestHelper($this->get('http_kernel')->getRequest()); }
    protected function getTemplating_Helper_SessionService() {
        return $this->services['templating.helper.session'] = new \Symfony\Bundle\FrameworkBundle\Templating\Helper\SessionHelper($this->get('http_kernel')->getRequest()); }
    protected function getTemplating_Helper_RouterService() {
        return $this->services['templating.helper.router'] = new \Symfony\Bundle\FrameworkBundle\Templating\Helper\RouterHelper($this->get('router')); }
    protected function getTemplating_Helper_ActionsService() {
        return $this->services['templating.helper.actions'] = new \Symfony\Bundle\FrameworkBundle\Templating\Helper\ActionsHelper($this->get('controller_resolver')); }
    protected function getTemplating_Helper_CodeService() {
        return $this->services['templating.helper.code'] = new \Symfony\Bundle\FrameworkBundle\Templating\Helper\CodeHelper(NULL, '/home/amir/tmp/jobeet2.0/app'); }
    protected function getTemplating_Helper_TranslatorService() {
        return $this->services['templating.helper.translator'] = new \Symfony\Bundle\FrameworkBundle\Templating\Helper\TranslatorHelper($this->get('translator')); }
    protected function getTemplating_Helper_SecurityService() {
        return $this->services['templating.helper.security'] = new \Symfony\Bundle\FrameworkBundle\Templating\Helper\SecurityHelper($this->get('security.context')); }
    protected function getTemplating_Helper_FormService() {
        return $this->services['templating.helper.form'] = new \Symfony\Bundle\FrameworkBundle\Templating\Helper\FormHelper($this->get('templating.engine')); }
    protected function getSessionService() {
        $this->services['session'] = $instance = new \Symfony\Component\HttpFoundation\Session($this->get('session.storage.native'), array('default_locale' => 'en'));
        $instance->start();
        return $instance; }
    protected function getTranslator_RealService() {
        $this->services['translator.real'] = $instance = new \Symfony\Bundle\FrameworkBundle\Translation\Translator($this, $this->get('translator.selector'), array('cache_dir' => '/home/amir/tmp/jobeet2.0/app/cache/prod/translations', 'debug' => false), $this->get('session'));
        $instance->setFallbackLocale('en');
        return $instance; }
    protected function getTranslatorService() {
        $this->services['translator'] = $instance = new \Symfony\Bundle\FrameworkBundle\Translation\Translator($this, $this->get('translator.selector'), array('cache_dir' => '/home/amir/tmp/jobeet2.0/app/cache/prod/translations', 'debug' => false), $this->get('session'));
        $instance->setFallbackLocale('en');
        return $instance; }
    protected function getTranslation_Loader_PhpService() {
        return $this->services['translation.loader.php'] = new \Symfony\Component\Translation\Loader\PhpFileLoader(); }
    protected function getTranslation_Loader_YmlService() {
        return $this->services['translation.loader.yml'] = new \Symfony\Component\Translation\Loader\YamlFileLoader(); }
    protected function getTranslation_Loader_XliffService() {
        return $this->services['translation.loader.xliff'] = new \Symfony\Component\Translation\Loader\XliffFileLoader(); }
    protected function getTwigService() {
        $this->services['twig'] = $instance = new \Twig_Environment($this->get('twig.loader'), array('charset' => 'UTF-8', 'debug' => false, 'cache' => '/home/amir/tmp/jobeet2.0/app/cache/prod/twig', 'strict_variables' => false));
        $instance->addExtension(new \Symfony\Bundle\TwigBundle\Extension\TransExtension($this->get('translator')));
        $instance->addExtension(new \Symfony\Bundle\TwigBundle\Extension\TemplatingExtension($this));
        $instance->addExtension(new \Symfony\Bundle\TwigBundle\Extension\FormExtension(array(0 => 'TwigBundle::form.twig')));
        $instance->addExtension(new \Symfony\Bundle\TwigBundle\Extension\SecurityExtension($this->get('security.context')));
        return $instance; }
    protected function getTwig_LoaderService() {
        $this->services['twig.loader'] = $instance = new \Symfony\Bundle\TwigBundle\Loader\Loader();
        $instance->setEngine($this->get('templating.engine'));
        return $instance; }
    protected function getTwig_RendererService() {
        $this->services['twig.renderer'] = $instance = new \Symfony\Bundle\TwigBundle\Renderer\Renderer($this->get('twig'));
        $instance->setEngine($this->get('templating.engine'));
        return $instance; }
    protected function getLuceneSearchService() {
        return $this->services['lucene_search'] = new \Bundle\SearchBundle\Lucene\LuceneSearch('/home/amir/tmp/jobeet2.0/app/cache/prod/lucene/sonic-index', 'Zend\\Search\\Lucene\\Analysis\\Analyzer\\Common\\TextNum\\CaseInsensitive'); }
    protected function getJobeet_CategoryServiceService() {
        $this->services['jobeet.category_service'] = $instance = new \Application\JobeetBundle\Entity\Service\JobeetCategoryService();
        $instance->setEntityManager($this->get('doctrine.orm.default_entity_manager'));
        return $instance; }
    protected function getDoctrine_DataCollectorService() {
        return $this->services['doctrine.data_collector'] = new \Symfony\Bundle\DoctrineBundle\DataCollector\DoctrineDataCollector($this->get('doctrine.dbal.logger')); }
    protected function getDoctrine_Dbal_DefaultConnection_EventManagerService() {
        $this->services['doctrine.dbal.default_connection.event_manager'] = $instance = new \Symfony\Bundle\DoctrineAbstractBundle\Event\EventManager();
        $instance->loadTaggedEventListeners($this);
        $instance->loadTaggedEventListeners($this, 'doctrine.dbal.default_event_listener');
        $instance->loadTaggedEventSubscribers($this);
        $instance->loadTaggedEventSubscribers($this, 'doctrine.dbal.default_event_subscriber');
        return $instance; }
    protected function getDoctrine_Orm_DefaultYmlMetadataDriverService() {
        return $this->services['doctrine.orm.default_yml_metadata_driver'] = new \Doctrine\ORM\Mapping\Driver\YamlDriver(array(0 => '/home/amir/tmp/jobeet2.0/src/Application/SecurityBundle/Resources/config/doctrine/metadata/orm', 1 => '/home/amir/tmp/jobeet2.0/src/Application/JobeetBundle/Resources/config/doctrine/metadata/orm')); }
    protected function getDoctrine_Orm_DefaultMetadataDriverService() {
        $a = $this->get('doctrine.orm.default_yml_metadata_driver');
        $this->services['doctrine.orm.default_metadata_driver'] = $instance = new \Doctrine\ORM\Mapping\Driver\DriverChain();
        $instance->addDriver($a, 'Application\\SecurityBundle\\Entity');
        $instance->addDriver($a, 'Application\\JobeetBundle\\Entity');
        return $instance; }
    protected function getDoctrine_Orm_DefaultEntityManagerService() {
        $a = new \Doctrine\ORM\Configuration();
        $a->setEntityNamespaces(array('SecurityBundle' => 'Application\\SecurityBundle\\Entity', 'JobeetBundle' => 'Application\\JobeetBundle\\Entity'));
        $a->setMetadataCacheImpl(new \Doctrine\Common\Cache\ArrayCache());
        $a->setQueryCacheImpl(new \Doctrine\Common\Cache\ArrayCache());
        $a->setResultCacheImpl(new \Doctrine\Common\Cache\ArrayCache());
        $a->setMetadataDriverImpl($this->get('doctrine.orm.default_metadata_driver'));
        $a->setProxyDir('/home/amir/tmp/jobeet2.0/app/cache/prod/doctrine/orm/Proxies');
        $a->setProxyNamespace('Proxies');
        $a->setAutoGenerateProxyClasses(true);
        $a->setClassMetadataFactoryName('Doctrine\\ORM\\Mapping\\ClassMetadataFactory');
        return $this->services['doctrine.orm.default_entity_manager'] = call_user_func(array('Doctrine\\ORM\\EntityManager', 'create'), $this->get('doctrine.dbal.default_connection'), $a); }
    protected function getSearch_LuceneService() {
        return $this->services['search.lucene'] = new \Bundle\SearchBundle\Lucene\LuceneSearch('/home/amir/tmp/jobeet2.0/app/cache/prod/lucene/sonic-index', 'Zend\\Search\\Lucene\\Analysis\\Analyzer\\Common\\TextNum\\CaseInsensitive'); }
    protected function getSecurity_ContextService() {
        return $this->services['security.context'] = new \Symfony\Component\Security\SecurityContext($this->get('security.access.decision_manager')); }
    protected function getZend_LoggerService() {
        $a = $this->get('zend.logger.filter');
        $b = new \Zend\Log\Writer\Stream('/home/amir/tmp/jobeet2.0/app/logs/prod.log');
        $b->addFilter($a);
        $b->setFormatter(new \Zend\Log\Formatter\Simple('%timestamp% %priorityName%: %message%
'));
        $c = new \Symfony\Bundle\ZendBundle\Logger\DebugLogger();
        $c->addFilter($a);
        $this->services['zend.logger'] = $instance = new \Symfony\Bundle\ZendBundle\Logger\Logger();
        $instance->addWriter($b);
        $instance->addWriter($c);
        return $instance; }
    protected function getTemplating_LoaderService() {
        return $this->get('templating.loader.filesystem'); }
    protected function getTemplatingService() {
        return $this->get('templating.engine'); }
    protected function getSession_StorageService() {
        return $this->get('session.storage.native'); }
    protected function getDatabaseConnectionService() {
        return $this->get('doctrine.dbal.default_connection'); }
    protected function getDoctrine_Dbal_EventManagerService() {
        return $this->get('doctrine.dbal.default_connection.event_manager'); }
    protected function getSecurity_User_EntityManagerService() {
        return $this->get('doctrine.orm.default_entity_manager'); }
    protected function getDoctrine_Orm_EntityManagerService() {
        return $this->get('doctrine.orm.default_entity_manager'); }
    protected function getDoctrine_Orm_DefaultEntityManager_EventManagerService() {
        return $this->get('doctrine.dbal.default_connection.event_manager'); }
    protected function getLuceneService() {
        return $this->get('lucene.config'); }
    protected function getLoggerService() {
        return $this->get('zend.logger'); }
    protected function getControllerNameConverterService() {
        return $this->services['controller_name_converter'] = new \Symfony\Bundle\FrameworkBundle\Controller\ControllerNameConverter($this->get('kernel'), $this->get('zend.logger')); }
    protected function getControllerResolverService() {
        return $this->services['controller_resolver'] = new \Symfony\Bundle\FrameworkBundle\Controller\ControllerResolver($this, $this->get('controller_name_converter'), $this->get('zend.logger')); }
    protected function getTemplating_EngineService() {
        $this->services['templating.engine'] = $instance = new \Symfony\Bundle\FrameworkBundle\Templating\Engine($this, $this->get('templating.loader.filesystem'), array('twig' => $this->get('twig.renderer')));
        $instance->setCharset('UTF-8');
        $instance->setHelpers(array('slots' => 'templating.helper.slots', 'assets' => 'templating.helper.assets', 'request' => 'templating.helper.request', 'session' => 'templating.helper.session', 'router' => 'templating.helper.router', 'actions' => 'templating.helper.actions', 'code' => 'templating.helper.code', 'translator' => 'templating.helper.translator', 'security' => 'templating.helper.security', 'form' => 'templating.helper.form'));
        return $instance; }
    protected function getTemplating_Loader_FilesystemService() {
        return $this->services['templating.loader.filesystem'] = new \Symfony\Component\Templating\Loader\FilesystemLoader(array(0 => '/home/amir/tmp/jobeet2.0/app/views/%bundle%/%controller%/%name%%format%.%renderer%', 1 => '/home/amir/tmp/jobeet2.0/app/../src/Application/%bundle%/Resources/views/%controller%/%name%%format%.%renderer%', 2 => '/home/amir/tmp/jobeet2.0/app/../src/Bundle/%bundle%/Resources/views/%controller%/%name%%format%.%renderer%', 3 => '/home/amir/tmp/jobeet2.0/app/../src/vendor/symfony/src/Symfony/Bundle/%bundle%/Resources/views/%controller%/%name%%format%.%renderer%')); }
    protected function getSession_Storage_NativeService() {
        return $this->services['session.storage.native'] = new \Symfony\Component\HttpFoundation\SessionStorage\NativeSessionStorage(array('lifetime' => 3600)); }
    protected function getTranslator_SelectorService() {
        return $this->services['translator.selector'] = new \Symfony\Component\Translation\MessageSelector(); }
    protected function getDoctrine_Dbal_LoggerService() {
        return $this->services['doctrine.dbal.logger'] = new \Symfony\Bundle\DoctrineBundle\Logger\DbalLogger($this->get('zend.logger')); }
    protected function getDoctrine_Dbal_DefaultConnectionService() {
        $a = new \Doctrine\DBAL\Configuration();
        $a->setSqlLogger($this->get('doctrine.dbal.logger'));
        return $this->services['doctrine.dbal.default_connection'] = call_user_func(array('Doctrine\\DBAL\\DriverManager', 'getConnection'), array('driverClass' => 'Doctrine\\DBAL\\Driver\\PDOMySql\\Driver', 'driverOptions' => array(), 'dbname' => 'jobeet2', 'host' => 'localhost', 'user' => 'root', 'password' => 'root'), $a, $this->get('doctrine.dbal.default_connection.event_manager')); }
    protected function getSecurity_Authentication_TrustResolverService() {
        return $this->services['security.authentication.trust_resolver'] = new \Symfony\Component\Security\Authentication\AuthenticationTrustResolver('Symfony\\Component\\Security\\Authentication\\Token\\AnonymousToken', 'Symfony\\Component\\Security\\Authentication\\Token\\RememberMeToken'); }
    protected function getSecurity_Access_DecisionManagerService() {
        return $this->services['security.access.decision_manager'] = new \Symfony\Component\Security\Authorization\AccessDecisionManager(array(0 => new \Symfony\Component\Security\Authorization\Voter\AuthenticatedVoter($this->get('security.authentication.trust_resolver')), 1 => new \Symfony\Component\Security\Authorization\Voter\RoleHierarchyVoter(new \Symfony\Component\Security\Role\RoleHierarchy(array()))), 'affirmative', false, true); }
    protected function getSecurity_AccessMapService() {
        return $this->services['security.access_map'] = new \Symfony\Component\HttpKernel\Security\AccessMap(); }
    protected function getSecurity_Authentication_Provider_DefaultService() {
        return $this->services['security.authentication.provider.default'] = new \Symfony\Bundle\DoctrineBundle\Security\EntityUserProvider($this->get('doctrine.orm.default_entity_manager'), 'SecurityBundle:User', 'username'); }
    protected function getSecurity_Authentication_Provider_Dao_Security_Matcher_Mape22ddcb3c57f9062bd9c1ff9820baac5_1Service() {
        return $this->services['security.authentication.provider.dao.security.matcher.mape22ddcb3c57f9062bd9c1ff9820baac5.1'] = new \Symfony\Component\Security\Authentication\Provider\DaoAuthenticationProvider($this->get('security.authentication.provider.default'), new \Symfony\Component\Security\User\AccountChecker(), new \Symfony\Component\Security\Encoder\MessageDigestPasswordEncoder('md5')); }
    protected function getZend_Logger_FilterService() {
        return $this->services['zend.logger.filter'] = new \Zend\Log\Filter\Priority(7); }
    public function findTaggedServiceIds($name) {
        static $tags = array(
            'templating.helper' => array(
                'templating.helper.slots' => array(
                    0 => array(
                        'alias' => 'slots',
                    ),
                ),
                'templating.helper.assets' => array(
                    0 => array(
                        'alias' => 'assets',
                    ),
                ),
                'templating.helper.request' => array(
                    0 => array(
                        'alias' => 'request',
                    ),
                ),
                'templating.helper.session' => array(
                    0 => array(
                        'alias' => 'session',
                    ),
                ),
                'templating.helper.router' => array(
                    0 => array(
                        'alias' => 'router',
                    ),
                ),
                'templating.helper.actions' => array(
                    0 => array(
                        'alias' => 'actions',
                    ),
                ),
                'templating.helper.code' => array(
                    0 => array(
                        'alias' => 'code',
                    ),
                ),
                'templating.helper.translator' => array(
                    0 => array(
                        'alias' => 'translator',
                    ),
                ),
                'templating.helper.security' => array(
                    0 => array(
                        'alias' => 'security',
                    ),
                ),
                'templating.helper.form' => array(
                    0 => array(
                        'alias' => 'form',
                    ),
                ),
            ),
            'translation.loader' => array(
                'translation.loader.php' => array(
                    0 => array(
                        'alias' => 'php',
                    ),
                ),
                'translation.loader.yml' => array(
                    0 => array(
                        'alias' => 'yml',
                    ),
                ),
                'translation.loader.xliff' => array(
                    0 => array(
                        'alias' => 'xliff',
                    ),
                ),
            ),
            'templating.renderer' => array(
                'twig.renderer' => array(
                    0 => array(
                        'alias' => 'twig',
                    ),
                ),
            ),
            'data_collector' => array(
                'doctrine.data_collector' => array(
                    0 => array(
                        'template' => 'DoctrineBundle:Collector:db',
                    ),
                ),
            ),
            'doctrine.orm.entity_manager' => array(
                'doctrine.orm.default_entity_manager' => array(
                    0 => array(
                    ),
                ),
            ),
        );
        return isset($tags[$name]) ? $tags[$name] : array(); }
    protected function getDefaultParameters() {
        return array(
            'kernel.root_dir' => '/home/amir/tmp/jobeet2.0/app',
            'kernel.environment' => 'prod',
            'kernel.debug' => false,
            'kernel.name' => 'app',
            'kernel.cache_dir' => '/home/amir/tmp/jobeet2.0/app/cache/prod',
            'kernel.logs_dir' => '/home/amir/tmp/jobeet2.0/app/logs',
            'kernel.bundle_dirs' => array(
                'Application' => '/home/amir/tmp/jobeet2.0/app/../src/Application',
                'Bundle' => '/home/amir/tmp/jobeet2.0/app/../src/Bundle',
                'Symfony\\Bundle' => '/home/amir/tmp/jobeet2.0/app/../src/vendor/symfony/src/Symfony/Bundle',
            ),
            'kernel.bundles' => array(
                0 => 'Symfony\\Bundle\\FrameworkBundle\\FrameworkBundle',
                1 => 'Symfony\\Bundle\\TwigBundle\\TwigBundle',
                2 => 'Symfony\\Bundle\\ZendBundle\\ZendBundle',
                3 => 'Symfony\\Bundle\\SwiftmailerBundle\\SwiftmailerBundle',
                4 => 'Symfony\\Bundle\\DoctrineBundle\\DoctrineBundle',
                5 => 'Bundle\\SearchBundle\\SearchBundle',
                6 => 'Application\\JobeetBundle\\JobeetBundle',
                7 => 'Application\\FrontendBundle\\FrontendBundle',
                8 => 'Application\\AdminBundle\\AdminBundle',
                9 => 'Application\\SecurityBundle\\SecurityBundle',
            ),
            'kernel.charset' => 'UTF-8',
            'request_listener.class' => 'Symfony\\Bundle\\FrameworkBundle\\RequestListener',
            'controller_resolver.class' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\ControllerResolver',
            'controller_name_converter.class' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\ControllerNameConverter',
            'response_listener.class' => 'Symfony\\Component\\HttpKernel\\ResponseListener',
            'exception_listener.class' => 'Symfony\\Component\\HttpKernel\\Debug\\ExceptionListener',
            'exception_listener.controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\ExceptionController::exceptionAction',
            'esi.class' => 'Symfony\\Component\\HttpKernel\\Cache\\Esi',
            'esi_listener.class' => 'Symfony\\Component\\HttpKernel\\Cache\\EsiListener',
            'csrf_secret' => 'xxxxxxxxxx',
            'event_dispatcher.class' => 'Symfony\\Bundle\\FrameworkBundle\\EventDispatcher',
            'http_kernel.class' => 'Symfony\\Component\\HttpKernel\\HttpKernel',
            'response.class' => 'Symfony\\Component\\HttpFoundation\\Response',
            'error_handler.class' => 'Symfony\\Component\\HttpKernel\\Debug\\ErrorHandler',
            'error_handler.level' => NULL,
            'router.class' => 'Symfony\\Component\\Routing\\Router',
            'routing.loader.class' => 'Symfony\\Bundle\\FrameworkBundle\\Routing\\DelegatingLoader',
            'routing.resolver.class' => 'Symfony\\Component\\Routing\\Loader\\LoaderResolver',
            'routing.loader.xml.class' => 'Symfony\\Component\\Routing\\Loader\\XmlFileLoader',
            'routing.loader.yml.class' => 'Symfony\\Component\\Routing\\Loader\\YamlFileLoader',
            'routing.loader.php.class' => 'Symfony\\Component\\Routing\\Loader\\PhpFileLoader',
            'router.options.generator_class' => 'Symfony\\Component\\Routing\\Generator\\UrlGenerator',
            'router.options.generator_base_class' => 'Symfony\\Component\\Routing\\Generator\\UrlGenerator',
            'router.options.generator_dumper_class' => 'Symfony\\Component\\Routing\\Generator\\Dumper\\PhpGeneratorDumper',
            'router.options.matcher_class' => 'Symfony\\Component\\Routing\\Matcher\\UrlMatcher',
            'router.options.matcher_base_class' => 'Symfony\\Component\\Routing\\Matcher\\UrlMatcher',
            'router.options.matcher_dumper_class' => 'Symfony\\Component\\Routing\\Matcher\\Dumper\\PhpMatcherDumper',
            'routing.resource' => '/home/amir/tmp/jobeet2.0/app/config/routing.yml',
            'kernel.compiled_classes' => array(
                0 => 'Symfony\\Component\\Routing\\RouterInterface',
                1 => 'Symfony\\Component\\Routing\\Router',
                2 => 'Symfony\\Component\\Routing\\Matcher\\UrlMatcherInterface',
                3 => 'Symfony\\Component\\Routing\\Matcher\\UrlMatcher',
                4 => 'Symfony\\Component\\Routing\\Generator\\UrlGeneratorInterface',
                5 => 'Symfony\\Component\\Routing\\Generator\\UrlGenerator',
                6 => 'Symfony\\Component\\Routing\\Loader\\LoaderInterface',
                7 => 'Symfony\\Bundle\\FrameworkBundle\\Routing\\LazyLoader',
                8 => 'Symfony\\Component\\Templating\\Loader\\LoaderInterface',
                9 => 'Symfony\\Component\\Templating\\Loader\\Loader',
                10 => 'Symfony\\Component\\Templating\\Loader\\FilesystemLoader',
                11 => 'Symfony\\Component\\Templating\\Engine',
                12 => 'Symfony\\Component\\Templating\\Renderer\\RendererInterface',
                13 => 'Symfony\\Component\\Templating\\Renderer\\Renderer',
                14 => 'Symfony\\Component\\Templating\\Renderer\\PhpRenderer',
                15 => 'Symfony\\Component\\Templating\\Storage\\Storage',
                16 => 'Symfony\\Component\\Templating\\Storage\\FileStorage',
                17 => 'Symfony\\Bundle\\FrameworkBundle\\Templating\\Engine',
                18 => 'Symfony\\Component\\Templating\\Helper\\Helper',
                19 => 'Symfony\\Component\\Templating\\Helper\\SlotsHelper',
                20 => 'Symfony\\Bundle\\FrameworkBundle\\Templating\\Helper\\ActionsHelper',
                21 => 'Symfony\\Bundle\\FrameworkBundle\\Templating\\Helper\\RouterHelper',
                22 => 'Symfony\\Bundle\\FrameworkBundle\\Templating\\Helper\\RouterHelper',
                23 => 'Symfony\\Component\\HttpFoundation\\Session',
                24 => 'Symfony\\Component\\HttpFoundation\\SessionStorage\\SessionStorageInterface',
                25 => 'Symfony\\Component\\HttpFoundation\\ParameterBag',
                26 => 'Symfony\\Component\\HttpFoundation\\HeaderBag',
                27 => 'Symfony\\Component\\HttpFoundation\\Request',
                28 => 'Symfony\\Component\\HttpFoundation\\Response',
                29 => 'Symfony\\Component\\HttpFoundation\\ResponseHeaderBag',
                30 => 'Symfony\\Component\\HttpKernel\\HttpKernel',
                31 => 'Symfony\\Component\\HttpKernel\\ResponseListener',
                32 => 'Symfony\\Component\\HttpKernel\\Controller\\ControllerResolver',
                33 => 'Symfony\\Component\\HttpKernel\\Controller\\ControllerResolverInterface',
                34 => 'Symfony\\Bundle\\FrameworkBundle\\RequestListener',
                35 => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\ControllerNameConverter',
                36 => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\ControllerResolver',
                37 => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\Controller',
                38 => 'Symfony\\Component\\EventDispatcher\\Event',
                39 => 'Symfony\\Component\\EventDispatcher\\EventDispatcher',
                40 => 'Symfony\\Bundle\\FrameworkBundle\\EventDispatcher',
                41 => 'Symfony\\Component\\Form\\FormConfiguration',
            ),
            'validator.class' => 'Symfony\\Component\\Validator\\Validator',
            'validator.mapping.class_metadata_factory.class' => 'Symfony\\Component\\Validator\\Mapping\\ClassMetadataFactory',
            'validator.mapping.loader.loader_chain.class' => 'Symfony\\Component\\Validator\\Mapping\\Loader\\LoaderChain',
            'validator.mapping.loader.static_method_loader.class' => 'Symfony\\Component\\Validator\\Mapping\\Loader\\StaticMethodLoader',
            'validator.mapping.loader.annotation_loader.class' => 'Symfony\\Component\\Validator\\Mapping\\Loader\\AnnotationLoader',
            'validator.mapping.loader.xml_file_loader.class' => 'Symfony\\Component\\Validator\\Mapping\\Loader\\XmlFileLoader',
            'validator.mapping.loader.yaml_file_loader.class' => 'Symfony\\Component\\Validator\\Mapping\\Loader\\YamlFileLoader',
            'validator.mapping.loader.xml_files_loader.class' => 'Symfony\\Component\\Validator\\Mapping\\Loader\\XmlFilesLoader',
            'validator.mapping.loader.yaml_files_loader.class' => 'Symfony\\Component\\Validator\\Mapping\\Loader\\YamlFilesLoader',
            'validator.mapping.loader.static_method_loader.method_name' => 'loadValidatorMetadata',
            'validator.validator_factory.class' => 'Symfony\\Bundle\\FrameworkBundle\\Validator\\ConstraintValidatorFactory',
            'validator.annotations.namespaces' => array(
                'validation' => 'Symfony\\Component\\Validator\\Constraints\\',
            ),
            'templating.engine.class' => 'Symfony\\Bundle\\FrameworkBundle\\Templating\\Engine',
            'templating.loader.filesystem.class' => 'Symfony\\Component\\Templating\\Loader\\FilesystemLoader',
            'templating.loader.cache.class' => 'Symfony\\Component\\Templating\\Loader\\CacheLoader',
            'templating.loader.chain.class' => 'Symfony\\Component\\Templating\\Loader\\ChainLoader',
            'templating.helper.slots.class' => 'Symfony\\Component\\Templating\\Helper\\SlotsHelper',
            'templating.helper.assets.class' => 'Symfony\\Bundle\\FrameworkBundle\\Templating\\Helper\\AssetsHelper',
            'templating.helper.actions.class' => 'Symfony\\Bundle\\FrameworkBundle\\Templating\\Helper\\ActionsHelper',
            'templating.helper.router.class' => 'Symfony\\Bundle\\FrameworkBundle\\Templating\\Helper\\RouterHelper',
            'templating.helper.request.class' => 'Symfony\\Bundle\\FrameworkBundle\\Templating\\Helper\\RequestHelper',
            'templating.helper.session.class' => 'Symfony\\Bundle\\FrameworkBundle\\Templating\\Helper\\SessionHelper',
            'templating.helper.code.class' => 'Symfony\\Bundle\\FrameworkBundle\\Templating\\Helper\\CodeHelper',
            'templating.helper.translator.class' => 'Symfony\\Bundle\\FrameworkBundle\\Templating\\Helper\\TranslatorHelper',
            'templating.helper.security.class' => 'Symfony\\Bundle\\FrameworkBundle\\Templating\\Helper\\SecurityHelper',
            'templating.helper.form.class' => 'Symfony\\Bundle\\FrameworkBundle\\Templating\\Helper\\FormHelper',
            'templating.assets.version' => NULL,
            'templating.assets.base_urls' => array(
            ),
            'debug.file_link_format' => NULL,
            'templating.loader.filesystem.path' => array(
                0 => '/home/amir/tmp/jobeet2.0/app/views/%bundle%/%controller%/%name%%format%.%renderer%',
                1 => '/home/amir/tmp/jobeet2.0/app/../src/Application/%bundle%/Resources/views/%controller%/%name%%format%.%renderer%',
                2 => '/home/amir/tmp/jobeet2.0/app/../src/Bundle/%bundle%/Resources/views/%controller%/%name%%format%.%renderer%',
                3 => '/home/amir/tmp/jobeet2.0/app/../src/vendor/symfony/src/Symfony/Bundle/%bundle%/Resources/views/%controller%/%name%%format%.%renderer%',
            ),
            'templating.loader.cache.path' => NULL,
            'session.class' => 'Symfony\\Component\\HttpFoundation\\Session',
            'session.default_locale' => 'en',
            'session.storage.native.class' => 'Symfony\\Component\\HttpFoundation\\SessionStorage\\NativeSessionStorage',
            'session.storage.native.options' => array(
                'lifetime' => 3600,
            ),
            'session.storage.pdo.class' => 'Symfony\\Component\\HttpFoundation\\SessionStorage\\PdoSessionStorage',
            'session.storage.pdo.options' => array(
            ),
            'session.storage.array.class' => 'Symfony\\Component\\HttpFoundation\\SessionStorage\\ArraySessionStorage',
            'session.storage.array.options' => array(
            ),
            'translator.class' => 'Symfony\\Bundle\\FrameworkBundle\\Translation\\Translator',
            'translator.identity.class' => 'Symfony\\Component\\Translation\\IdentityTranslator',
            'translator.selector.class' => 'Symfony\\Component\\Translation\\MessageSelector',
            'translation.loader.php.class' => 'Symfony\\Component\\Translation\\Loader\\PhpFileLoader',
            'translation.loader.yml.class' => 'Symfony\\Component\\Translation\\Loader\\YamlFileLoader',
            'translation.loader.xliff.class' => 'Symfony\\Component\\Translation\\Loader\\XliffFileLoader',
            'translator.fallback_locale' => 'en',
            'translation.resources' => array(
                0 => array(
                    0 => 'xliff',
                    1 => '/home/amir/tmp/jobeet2.0/src/vendor/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/translations/validators.fr.xliff',
                    2 => 'fr',
                    3 => 'validators',
                ),
            ),
            'twig.class' => 'Twig_Environment',
            'twig.options' => array(
                'charset' => 'UTF-8',
                'debug' => false,
                'cache' => '/home/amir/tmp/jobeet2.0/app/cache/prod/twig',
                'strict_variables' => false,
            ),
            'twig.loader.class' => 'Symfony\\Bundle\\TwigBundle\\Loader\\Loader',
            'twig.renderer.class' => 'Symfony\\Bundle\\TwigBundle\\Renderer\\Renderer',
            'twig.form.resources' => array(
                0 => 'TwigBundle::form.twig',
            ),
            'frontend.active_days' => 20,
            'frontend.jobs_per_page' => 10,
            'frontend.logos_dir' => 'uploads/jobs',
            'frontend.jobs_per_category' => 5,
            'frontend.max_jobs_per_category' => 10,
            'jobeet.category_service.class' => 'Application\\JobeetBundle\\Entity\\Service\\JobeetCategoryService',
            'doctrine.dbal.default_connection' => 'default',
            'doctrine.dbal.connection_class' => 'Doctrine\\DBAL\\Connection',
            'doctrine.dbal.logger.debug_class' => 'Doctrine\\DBAL\\Logging\\DebugStack',
            'doctrine.dbal.logger_class' => 'Symfony\\Bundle\\DoctrineBundle\\Logger\\DbalLogger',
            'doctrine.data_collector.class' => 'Symfony\\Bundle\\DoctrineBundle\\DataCollector\\DoctrineDataCollector',
            'doctrine.dbal.event_manager_class' => 'Symfony\\Bundle\\DoctrineAbstractBundle\\Event\\EventManager',
            'doctrine.orm.default_entity_manager' => 'default',
            'doctrine.orm.metadata_cache_driver' => 'array',
            'doctrine.orm.query_cache_driver' => 'array',
            'doctrine.orm.result_cache_driver' => 'array',
            'doctrine.orm.configuration_class' => 'Doctrine\\ORM\\Configuration',
            'doctrine.orm.entity_manager_class' => 'Doctrine\\ORM\\EntityManager',
            'doctrine.orm.proxy_namespace' => 'Proxies',
            'doctrine.orm.proxy_dir' => '/home/amir/tmp/jobeet2.0/app/cache/prod/doctrine/orm/Proxies',
            'doctrine.orm.auto_generate_proxy_classes' => true,
            'doctrine.orm.cache.array_class' => 'Doctrine\\Common\\Cache\\ArrayCache',
            'doctrine.orm.cache.apc_class' => 'Doctrine\\Common\\Cache\\ApcCache',
            'doctrine.orm.cache.memcache_class' => 'Doctrine\\Common\\Cache\\MemcacheCache',
            'doctrine.orm.cache.memcache_host' => 'localhost',
            'doctrine.orm.cache.memcache_port' => 11211,
            'doctrine.orm.cache.memcache_instance_class' => 'Memcache',
            'doctrine.orm.cache.xcache_class' => 'Doctrine\\Common\\Cache\\XcacheCache',
            'doctrine.orm.metadata.driver_chain_class' => 'Doctrine\\ORM\\Mapping\\Driver\\DriverChain',
            'doctrine.orm.metadata.annotation_class' => 'Doctrine\\ORM\\Mapping\\Driver\\AnnotationDriver',
            'doctrine.orm.metadata.annotation_reader_class' => 'Doctrine\\Common\\Annotations\\AnnotationReader',
            'doctrine.orm.metadata.annotation_default_namespace' => 'Doctrine\\ORM\\Mapping\\',
            'doctrine.orm.metadata.xml_class' => 'Doctrine\\ORM\\Mapping\\Driver\\XmlDriver',
            'doctrine.orm.metadata.yml_class' => 'Doctrine\\ORM\\Mapping\\Driver\\YamlDriver',
            'doctrine.orm.metadata.php_class' => 'Doctrine\\ORM\\Mapping\\Driver\\PHPDriver',
            'doctrine.orm.metadata.staticphp_class' => 'Doctrine\\ORM\\Mapping\\Driver\\StaticPHPDriver',
            'doctrine.orm.class_metadata_factory_name' => 'Doctrine\\ORM\\Mapping\\ClassMetadataFactory',
            'security.user.provider.entity.class' => 'Symfony\\Bundle\\DoctrineBundle\\Security\\EntityUserProvider',
            'security.acl.collection_cache.class' => 'Symfony\\Bundle\\DoctrineBundle\\Security\\AclCollectionCache',
            'lucene.lucene.search' => 'Bundle\\SearchBundle\\Lucene\\LuceneSearch',
            'lucene.index.path' => '/home/amir/tmp/jobeet2.0/app/cache/prod/lucene/sonic-index',
            'lucene.analyzer' => 'Zend\\Search\\Lucene\\Analysis\\Analyzer\\Common\\TextNum\\CaseInsensitive',
            'security.context.class' => 'Symfony\\Component\\Security\\SecurityContext',
            'security.account_checker.class' => 'Symfony\\Component\\Security\\User\\AccountChecker',
            'security.access_denied.url' => NULL,
            'security.encoder.digest.class' => 'Symfony\\Component\\Security\\Encoder\\MessageDigestPasswordEncoder',
            'security.encoder.plain.class' => 'Symfony\\Component\\Security\\Encoder\\PlaintextPasswordEncoder',
            'security.user.provider.in_memory.class' => 'Symfony\\Component\\Security\\User\\InMemoryUserProvider',
            'security.authentication.trust_resolver.class' => 'Symfony\\Component\\Security\\Authentication\\AuthenticationTrustResolver',
            'security.authentication.trust_resolver.anonymous_class' => 'Symfony\\Component\\Security\\Authentication\\Token\\AnonymousToken',
            'security.authentication.trust_resolver.rememberme_class' => 'Symfony\\Component\\Security\\Authentication\\Token\\RememberMeToken',
            'security.authentication.provider.dao.class' => 'Symfony\\Component\\Security\\Authentication\\Provider\\DaoAuthenticationProvider',
            'security.authentication.provider.pre_authenticated.class' => 'Symfony\\Component\\Security\\Authentication\\Provider\\PreAuthenticatedAuthenticationProvider',
            'security.authentication.manager.class' => 'Symfony\\Component\\Security\\Authentication\\AuthenticationProviderManager',
            'security.authentication.retry_entry_point.class' => 'Symfony\\Component\\HttpKernel\\Security\\EntryPoint\\RetryAuthenticationEntryPoint',
            'security.authentication.form_entry_point.class' => 'Symfony\\Component\\HttpKernel\\Security\\EntryPoint\\FormAuthenticationEntryPoint',
            'security.authentication.form.login_path' => '/login',
            'security.authentication.form.use_forward' => false,
            'security.authentication.listener.form.class' => 'Symfony\\Component\\HttpKernel\\Security\\Firewall\\UsernamePasswordFormAuthenticationListener',
            'security.authentication.basic_entry_point.class' => 'Symfony\\Component\\HttpKernel\\Security\\EntryPoint\\BasicAuthenticationEntryPoint',
            'security.authentication.basic_entry_point.realm' => 'Symfony2',
            'security.authentication.digest_entry_point.class' => 'Symfony\\Component\\HttpKernel\\Security\\EntryPoint\\DigestAuthenticationEntryPoint',
            'security.authentication.digest_entry_point.realm' => 'Symfony2',
            'security.authentication.digest_entry_point.key' => 'SomethingUnique',
            'security.authentication.listener.x509.class' => 'Symfony\\Component\\HttpKernel\\Security\\Firewall\\X509AuthenticationListener',
            'security.authentication.x509.user' => 'SSL_CLIENT_S_DN_Email',
            'security.authentication.x509.credentials' => 'SSL_CLIENT_S_DN',
            'security.authentication.listener.basic.class' => 'Symfony\\Component\\HttpKernel\\Security\\Firewall\\BasicAuthenticationListener',
            'security.authentication.listener.digest.class' => 'Symfony\\Component\\HttpKernel\\Security\\Firewall\\DigestAuthenticationListener',
            'security.authentication.listener.anonymous.class' => 'Symfony\\Component\\HttpKernel\\Security\\Firewall\\AnonymousAuthenticationListener',
            'security.anonymous.key' => 'SomeRandomValue',
            'security.channel_listener.class' => 'Symfony\\Component\\HttpKernel\\Security\\Firewall\\ChannelListener',
            'security.logout_listener.class' => 'Symfony\\Component\\HttpKernel\\Security\\Firewall\\LogoutListener',
            'security.logout.path' => '/logout',
            'security.logout.target_path' => '/',
            'security.logout.handler.session.class' => 'Symfony\\Component\\HttpKernel\\Security\\Logout\\SessionLogoutHandler',
            'security.logout.handler.cookie_clearing.class' => 'Symfony\\Component\\HttpKernel\\Security\\Logout\\CookieClearingLogoutHandler',
            'security.authentication.switchuser_listener.class' => 'Symfony\\Component\\HttpKernel\\Security\\Firewall\\SwitchUserListener',
            'security.authentication.switchuser.role' => 'ROLE_ALLOWED_TO_SWITCH',
            'security.authentication.switchuser.parameter' => '_switch_user',
            'security.access.decision_manager.class' => 'Symfony\\Component\\Security\\Authorization\\AccessDecisionManager',
            'security.access.decision_manager.strategy' => 'affirmative',
            'security.access.decision_manager.allow_if_all_abstain' => false,
            'security.access.decision_manager.allow_if_equal_granted_denied' => true,
            'security.access.simple_role_voter.class' => 'Symfony\\Component\\Security\\Authorization\\Voter\\RoleVoter',
            'security.access.authenticated_voter.class' => 'Symfony\\Component\\Security\\Authorization\\Voter\\AuthenticatedVoter',
            'security.access.role_hierarchy_voter.class' => 'Symfony\\Component\\Security\\Authorization\\Voter\\RoleHierarchyVoter',
            'security.access_listener.class' => 'Symfony\\Component\\HttpKernel\\Security\\Firewall\\AccessListener',
            'security.access_map.class' => 'Symfony\\Component\\HttpKernel\\Security\\AccessMap',
            'security.exception_listener.class' => 'Symfony\\Component\\HttpKernel\\Security\\Firewall\\ExceptionListener',
            'security.context_listener.class' => 'Symfony\\Component\\HttpKernel\\Security\\Firewall\\ContextListener',
            'security.firewall.class' => 'Symfony\\Component\\HttpKernel\\Security\\Firewall',
            'security.firewall.map.class' => 'Symfony\\Component\\HttpKernel\\Security\\FirewallMap',
            'security.matcher.class' => 'Symfony\\Component\\HttpFoundation\\RequestMatcher',
            'security.role_hierarchy.class' => 'Symfony\\Component\\Security\\Role\\RoleHierarchy',
            'security.authentication.form.options' => array(
                'check_path' => '/login_check',
                'login_path' => '/login',
                'use_forward' => false,
                'always_use_default_target_path' => false,
                'default_target_path' => '/',
                'target_path_parameter' => '_target_path',
                'use_referer' => false,
                'failure_path' => NULL,
                'failure_forward' => false,
            ),
            'security.role_hierarchy.roles' => array(
            ),
            'zend.logger.class' => 'Symfony\\Bundle\\ZendBundle\\Logger\\Logger',
            'zend.logger.priority' => 7,
            'zend.logger.log_errors' => true,
            'zend.logger.writer.debug.class' => 'Symfony\\Bundle\\ZendBundle\\Logger\\DebugLogger',
            'zend.logger.writer.filesystem.class' => 'Zend\\Log\\Writer\\Stream',
            'zend.formatter.filesystem.class' => 'Zend\\Log\\Formatter\\Simple',
            'zend.formatter.filesystem.format' => '%timestamp% %priorityName%: %message%
',
            'zend.logger.path' => '/home/amir/tmp/jobeet2.0/app/logs/prod.log',
        ); } }
