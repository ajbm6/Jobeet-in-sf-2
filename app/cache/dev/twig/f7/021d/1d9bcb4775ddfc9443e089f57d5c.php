<?php

/* WebProfilerBundle:Collector:exception.twig */
class __TwigTemplate_f7021d9bcb4775ddfc9443e089f57d5c extends Twig_Template
{
    protected $parent;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    public function getParent(array $context)
    {
        if (null === $this->parent) {
            $this->parent = $this->env->loadTemplate("WebProfilerBundle:Profiler:layout.twig");
        }

        return $this->parent;
    }

    public function display(array $context, array $blocks = array())
    {
        $context = array_merge($this->env->getGlobals(), $context);

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('templating')->getAssetUrl("bundles/framework/css/exception.css"), "html");
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"screen\" />
";
    }

    // line 7
    public function block_menu($context, array $blocks = array())
    {
        // line 8
        if ($this->getAttribute($this->getContext($context, 'collector', '8'), "hasexception", array(), "any")) {
            // line 9
            echo "    <span class=\"count\">1</span>
";
        }
        // line 11
        echo "<img style=\"margin: 0 5px 0 0; vertical-align: middle; width: 32px\" width=\"32\" height=\"32\" alt=\"Exception\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('templating')->getAssetUrl("bundles/webprofiler/images/exception.png"), "html");
        echo "\" />
Exception
";
    }

    // line 15
    public function block_panel($context, array $blocks = array())
    {
        // line 16
        echo "    <h2>Exception</h2>

    ";
        // line 18
        if ((!$this->getAttribute($this->getContext($context, 'collector', '18'), "hasexception", array(), "any"))) {
            // line 19
            echo "        <em>No exception was thrown and uncaught during the request.</em>
    ";
        } else {
            // line 21
            echo "        ";
            echo $this->env->getExtension('templating')->getContainer()->get('templating.helper.actions')->render("WebProfilerBundle:Exception:show", array("exception" => $this->getAttribute($this->getContext($context, 'collector', '21'), "exception", array(), "any"), "format" => "html"), array());
            // line 22
            echo "    ";
        }
    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.twig";
    }
}
