<?php

/* WebProfilerBundle:Collector:config.twig */
class __TwigTemplate_328058ddc2c9183dc2878eb11401588c extends Twig_Template
{
    protected $parent;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
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
    public function block_toolbar($context, array $blocks = array())
    {
        // line 4
        echo "<img style=\"margin: 0 5px 0 10px; vertical-align: middle\" width=\"59\" height=\"17\" alt=\"Symfony\" src=\"data:image/png;base64,R0lGODlhOwARAMQdAIZ1X9rVz0owD/Lx78K6r2JML3pnT+bj37asn6qej1Y+H+jk4JKDb0oxEJOEcId2YGJMMPTy8KufkLetoJ+RgNvW0M7Iv56Rf25aP8/JwG5aQP///z4jAP///wAAAAAAACH5BAEAAB0ALAAAAAA7ABEAAAX/YLc8WmmeaKqu7OosYsPNdG3fuCDgfM81C4dvyAsEiEgORZNMGjaI5rBEEzAugBmWBshiOICtAbu7QL+Ky8UwExQw6i8HTqPPqJzCYMMPCDYWNBYWBRsHfIaIgWYbWIiAHAF7iAkcZjSXd0wchwQYCBZ/gTODHAQbngEbARincBsYGAMDAK2NAKsGBodpG5i+mjMGewg7HJCki7AcT18YG1e+DBtZMweBjTO4r780eHmqAQXHoxylZs7Lz2q+6IIDxxczz6/GmRzfBQKnAxgWG+MiKUuXjh0zVDMKEYg3DxYueRwSAMO3SSKBfwMEPBtA4NDAOeoaZQp3alk2kBgEVJDk421TgX+AAu5SZClkwUwCEPA5wIYhSg4KYO5pieRZFClIrcELNkTAHgVJkUqEyOGBBCRdoiItUInGhAgQtIpNoqGD2Qxo06pdy7at27dvK5gNAQA7\" />
";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, 'collector', '5'), "symfonyversion", array(), "any"), "html");
        echo "

<img style=\"margin: 0 5px 0 10px; vertical-align: middle\" width=\"32\" height=\"17\" alt=\"PHP\" src=\"data:image/png;base64,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\" />
";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, 'collector', '8'), "phpversion", array(), "any"), "html");
        echo "<span style=\"margin: 0; padding: 0; color: #aaa\">|</span><span style=\"color: ";
        echo ($this->getAttribute($this->getContext($context, 'collector', '8'), "hasxdebug", array(), "any")) ? ("#3a3") : ("#a33");
        echo "\">xdebug</span><span style=\"margin: 0; padding: 0; color: #aaa\">|</span><span style=\"color: ";
        echo ($this->getAttribute($this->getContext($context, 'collector', '8'), "hasaccelerator", array(), "any")) ? ("#3a3") : ("#a33");
        echo "\">accel</span>

<img style=\"margin: 0 5px 0 10px; vertical-align: middle; height: 24px\" width=\"24\" height=\"24\" alt=\"Environment\" src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAYAAABzenr0AAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAXtJREFUeNpi/P//P8NAAsZRB6A7gJGRMQFIxdPIvoVA+xYgC7Cgq4iPj693d3dXoIXtO3fuBJm7AG8ILF26lKZxEh0dzYg3BP79+0fXNDD4HPD371+MhAqlsUUNuXIkOWDAQ4C+Dvjz5w8KPzc3F1wmTJ48mT4F0cSJE8ECN27c2IBNg4aGRgAlaSA/P5+RqBBQUVG5gM0BQPkAYnxWUlICDrmenh7yoqCiosIBRHd0dDhC+fuhfLwG3r59GxxyycnJYIdev34dzFdVVQ0gKgpaW1v/U5jVGnC4DSxeXV3NSLVcUF9fDw7mxsZGZDEHqJgjlL8fXQ3eEKirqyMYAvfu3cOaQJWUlAgm0KamJkaSsiE2ICcnR1ECpdgB3d3d4GAuLS11hPL3Q/mUlwNFRUWUJkK8cn19fdRLhHQpiqdNmwZO6VlZWRiayZUjKQSsra0bcIUMuXJ400BqaipNm2SzZ88e5GlgMLQJQWVmPY3saxztmo06AB0ABBgA4G/dmZ3TlQ8AAAAASUVORK5CYII=\" />
";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, 'collector', '11'), "appname", array(), "any"), "html");
        echo "<span style=\"margin: 0; padding: 0; color: #aaa\">|</span>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, 'collector', '11'), "env", array(), "any"), "html");
        echo "<span style=\"margin: 0; padding: 0; color: #aaa\">|</span>";
        echo ($this->getAttribute($this->getContext($context, 'collector', '11'), "debug", array(), "any")) ? ("debug") : ("no-debug");
        echo "<span style=\"margin: 0; padding: 0; color: #aaa\">|</span>";
        if ($this->getAttribute($this->getContext($context, 'collector', '11'), "url", array(), "any")) {
            echo "<a style=\"color: #000\" href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, 'collector', '11'), "url", array(), "any"), "html");
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, 'collector', '11'), "token", array(), "any"), "html");
            echo "</a>";
        } else {
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, 'collector', '11'), "token", array(), "any"), "html");
        }
    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:config.twig";
    }
}
