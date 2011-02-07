<?php

/* WebProfilerBundle:Profiler:layout.twig */
class __TwigTemplate_69d93ba886aff5ff3c7d3c1352676ea9 extends Twig_Template
{
    protected $parent;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
            'body' => array($this, 'block_body'),
        );
    }

    public function getParent(array $context)
    {
        if (null === $this->parent) {
            $this->parent = $this->env->loadTemplate("WebProfilerBundle:Profiler:base.twig");
        }

        return $this->parent;
    }

    public function display(array $context, array $blocks = array())
    {
        $context = array_merge($this->env->getGlobals(), $context);

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 36
    public function block_panel($context, array $blocks = array())
    {
        echo "";
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "    <div class=\"header\">
        <h1>
            <img alt=\"\" src=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('templating')->getAssetUrl("bundles/webprofiler/images/profiler.png"), "html");
        echo "\" />
            Symfony Profiler
        </h1>
        <div>
            <em>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, 'profiler', '10'), "url", array(), "any"), "html");
        echo "</em> by <em>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, 'profiler', '10'), "ip", array(), "any"), "html");
        echo "</em> at <em>";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->getAttribute($this->getContext($context, 'profiler', '10'), "time", array(), "any"), "r"), "html");
        echo "</em>
        </div>
    </div>

    ";
        // line 14
        echo $this->env->getExtension('templating')->getContainer()->get('templating.helper.actions')->render("WebProfilerBundle:Profiler:toolbar", array("token" => $this->getContext($context, 'token', '14'), "position" => "normal"), array());
        // line 15
        echo "
    <table>
        <tr><td class=\"menu\">
            <ul>
                ";
        // line 19
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, 'templates', '19'));
        foreach ($context['_seq'] as $context['name'] => $context['template']) {
            // line 20
            echo "                    ";
            ob_start();
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, 'template', '20'), "renderBlock", array("menu", array("collector" => $this->getAttribute($this->getContext($context, 'profiler', '20'), "get", array($this->getContext($context, 'name', '20'), ), "method")), ), "method"), "html");
            $context['menu'] = ob_get_clean();
            // line 21
            echo "                    ";
            if ($this->getContext($context, 'menu', '21')) {
                // line 22
                echo "                        <li
                            ";
                // line 23
                if (($this->getContext($context, 'name', '23') == $this->getContext($context, 'panel', '23'))) {
                    echo "class=\"selected\"";
                }
                // line 24
                echo "                        >
                            <a href=\"";
                // line 25
                echo twig_escape_filter($this->env, $this->env->getExtension('templating')->getPath("_profiler_panel", array("token" => $this->getContext($context, 'token', '25'), "panel" => $this->getContext($context, 'name', '25'))), "html");
                echo "\">";
                echo $this->getContext($context, 'menu', '25');
                echo "</a>
                        </li>
                    ";
            }
            // line 28
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['name'], $context['template'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 29
        echo "            </ul>

            ";
        // line 31
        echo $this->env->getExtension('templating')->getContainer()->get('templating.helper.actions')->render("WebProfilerBundle:Profiler:searchBar", array("token" => $this->getContext($context, 'token', '31')), array());
        // line 32
        echo "
            ";
        // line 33
        $template = "WebProfilerBundle:Profiler:admin.twig";
        if ($template instanceof Twig_Template) {
            $template->display(array("token" => $this->getContext($context, 'token', '33')));
        } else {
            echo $this->env->getExtension('templating')->getTemplating()->render($template, array("token" => $this->getContext($context, 'token', '33')));
        }
        // line 34
        echo "        </td><td class=\"main\">
            <div class=\"content\">
                ";
        // line 36
        $this->displayBlock('panel', $context, $blocks);
        // line 37
        echo "            </div>
        </td></tr>
    </table>
";
    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:layout.twig";
    }
}
