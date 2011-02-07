<?php

/* /home/amir/tmp/jobeet2.0/app/../src/Application/FrontendBundle/Resources/views/Frontend/search.twig */
class __TwigTemplate_dd986b61bb469b41c3ee7adf15ef17e6 extends Twig_Template
{
    protected $parent;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'view_css' => array($this, 'block_view_css'),
            'body' => array($this, 'block_body'),
        );
    }

    public function getParent(array $context)
    {
        if (null === $this->parent) {
            $this->parent = $this->env->loadTemplate("FrontendBundle::layout.twig");
        }

        return $this->parent;
    }

    public function display(array $context, array $blocks = array())
    {
        $context = array_merge($this->env->getGlobals(), $context);

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_view_css($context, array $blocks = array())
    {
        // line 4
        echo "  <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('templating')->getAssetUrl("css/jobs.css"), "html");
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
";
    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        // line 8
        echo "<div id=\"jobs\">
  <table class=\"jobs\">    
  ";
        // line 10
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, 'jobs', '10'));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context['_key'] => $context['job']) {
            echo "                
          <tr class=\"";
            // line 11
            if (twig_test_odd($this->getAttribute($this->getContext($context, 'loop', '11'), "index", array(), "any"))) {
                echo "odd";
            } else {
                echo "even";
            }
            echo "\">
            <td class=\"location\">
              ";
            // line 13
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, 'job', '13'), "getLocation", array(), "method"), "html");
            echo "
            </td>
            <td class=\"position\">
              <a href=\"";
            // line 16
            echo twig_escape_filter($this->env, $this->env->getExtension('templating')->getPath("showjob", array("company" => $this->getAttribute($this->getContext($context, 'job', '16'), "getCompanySlug", array(), "method"), "location" => $this->getAttribute($this->getContext($context, 'job', '16'), "getLocationSlug", array(), "method"), "id" => $this->getAttribute($this->getContext($context, 'job', '16'), "getId", array(), "method"), "position" => $this->getAttribute($this->getContext($context, 'job', '16'), "getPositionSlug", array(), "method"))), "html");
            echo "\">
              ";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, 'job', '17'), "getPosition", array(), "method"), "html");
            echo "
              </a>
            </td>
            <td class=\"company\">
              ";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, 'job', '21'), "getCompany", array(), "method"), "html");
            echo "
            </td>
            <td class=\"category\">
              ";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, 'job', '24'), "getCategory", array(), "method"), "getName", array(), "method"), "html");
            echo "
            </td>
          </tr>        
  ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['job'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 28
        echo "   </table>  
</div>
";
    }

    public function getTemplateName()
    {
        return "/home/amir/tmp/jobeet2.0/app/../src/Application/FrontendBundle/Resources/views/Frontend/search.twig";
    }
}
