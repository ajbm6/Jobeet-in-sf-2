<?php

/* WebProfilerBundle:Collector:events.twig */
class __TwigTemplate_03fa03eaaeabe134e41c647cb3ebafc1 extends Twig_Template
{
    protected $parent;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
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
    public function block_menu($context, array $blocks = array())
    {
        // line 4
        echo "<img style=\"margin: 0 5px 0 0; vertical-align: middle; width: 32px\" width=\"32\" height=\"32\" alt=\"Events\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('templating')->getAssetUrl("bundles/webprofiler/images/events.png"), "html");
        echo "\" />
Events
";
    }

    // line 8
    public function block_panel($context, array $blocks = array())
    {
        // line 9
        echo "    <h2>Called Events</h2>

    <table>
        <tr>
            <th>Event</th>
            <th>Caller</th>
            <th>Listener</th>
        </tr>
        ";
        // line 17
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, 'collector', '17'), "calledevents", array(), "any"));
        foreach ($context['_seq'] as $context['_key'] => $context['event']) {
            // line 18
            echo "            <tr>
                <td><code>";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, 'event', '19'), "event", array(), "any"), "html");
            echo "</code></td>
                <td><code>";
            // line 20
            echo $this->env->getExtension('templating')->abbrClass($this->getAttribute($this->getContext($context, 'event', '20'), "caller", array(), "any"));
            echo "</code></td>
                <td><code>";
            // line 21
            echo $this->env->getExtension('templating')->abbrMethod($this->getAttribute($this->getContext($context, 'event', '21'), "listener", array(), "any"));
            echo "()</code></td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['event'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 24
        echo "    </table>

    ";
        // line 26
        if ($this->getAttribute($this->getContext($context, 'collector', '26'), "notcalledevents", array(), "any")) {
            // line 27
            echo "        <h2>Not Called Events</h2>

        <table>
            <tr>
                <th>Event</th>
                <th>Listener</th>
            </tr>
            ";
            // line 34
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, 'collector', '34'), "notcalledevents", array(), "any"));
            foreach ($context['_seq'] as $context['_key'] => $context['event']) {
                // line 35
                echo "                <tr>
                    <td><code>";
                // line 36
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, 'event', '36'), "event", array(), "any"), "html");
                echo "</code></td>
                    <td><code>";
                // line 37
                echo $this->env->getExtension('templating')->abbrMethod($this->getAttribute($this->getContext($context, 'event', '37'), "listener", array(), "any"));
                echo "()</code></td>
                </tr>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['event'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 40
            echo "        </table>
    ";
        }
    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:events.twig";
    }
}
