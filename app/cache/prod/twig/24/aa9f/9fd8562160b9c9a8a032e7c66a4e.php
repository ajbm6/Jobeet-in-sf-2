<?php

/* /home/amir/tmp/jobeet2.0/app/../src/Application/FrontendBundle/Resources/views/Frontend/index.twig */
class __TwigTemplate_24aa9fd8562160b9c9a8a032e7c66a4e extends Twig_Template
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
  ";
        // line 9
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context['categories']) ? $context['categories'] : null));
        foreach ($context['_seq'] as $context['_key'] => $context['category']) {
            // line 10
            echo "    <div class=\"category_";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context['category']) ? $context['category'] : null), "getName", array(), "method"), "html");
            echo "\">
      <div class=\"category\">
        <div class=\"feed\">
          <a href=\"\">Feed</a>
        </div>
        <h1>
            <a href=\"";
            // line 16
            echo twig_escape_filter($this->env, $this->env->getExtension('templating')->getPath("showcategory", array("id" => $this->getAttribute((isset($context['category']) ? $context['category'] : null), "getId", array(), "method"), "slug" => $this->getAttribute((isset($context['category']) ? $context['category'] : null), "getSlug", array(), "method"))), "html");
            echo "\">
            ";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context['category']) ? $context['category'] : null), "getName", array(), "method"), "html");
            echo "
            </a>
        </h1>
      </div>
 
      <table class=\"jobs\">
        ";
            // line 23
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context['category']) ? $context['category'] : null), "getActiveJobs", array(), "method"));
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
                // line 24
                if (twig_test_odd($this->getAttribute((isset($context['loop']) ? $context['loop'] : null), "index", array(), "any"))) {
                    echo "odd";
                } else {
                    echo "even";
                }
                echo "\">
            <td class=\"location\">
              ";
                // line 26
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context['job']) ? $context['job'] : null), "getLocation", array(), "method"), "html");
                echo "
            </td>
            <td class=\"position\">
              <a href=\"";
                // line 29
                echo twig_escape_filter($this->env, $this->env->getExtension('templating')->getPath("showjob", array("company" => $this->getAttribute((isset($context['job']) ? $context['job'] : null), "getCompanySlug", array(), "method"), "location" => $this->getAttribute((isset($context['job']) ? $context['job'] : null), "getLocationSlug", array(), "method"), "id" => $this->getAttribute((isset($context['job']) ? $context['job'] : null), "getId", array(), "method"), "position" => $this->getAttribute((isset($context['job']) ? $context['job'] : null), "getPositionSlug", array(), "method"))), "html");
                echo "\">
              ";
                // line 30
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context['job']) ? $context['job'] : null), "getPosition", array(), "method"), "html");
                echo "
              </a>
            </td>
            <td class=\"company\">
              ";
                // line 34
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context['job']) ? $context['job'] : null), "getCompany", array(), "method"), "html");
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
            // line 38
            echo "      </table>
      
      ";
            // line 40
            if (($this->getAttribute((isset($context['category']) ? $context['category'] : null), "getActiveJobsCount", array(), "method") > (isset($context['jobs_per_category']) ? $context['jobs_per_category'] : null))) {
                // line 41
                echo "      <div class=\"more_jobs\">
          and <a href=\"";
                // line 42
                echo twig_escape_filter($this->env, $this->env->getExtension('templating')->getPath("showcategory", array("id" => $this->getAttribute((isset($context['category']) ? $context['category'] : null), "getId", array(), "method"), "slug" => $this->getAttribute((isset($context['category']) ? $context['category'] : null), "getSlug", array(), "method"))), "html");
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context['category']) ? $context['category'] : null), "getActiveJobsCount", array(), "method"), "html");
                echo "</a>
          more...
      </div>
      ";
            }
            // line 46
            echo "
    </div>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 49
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "/home/amir/tmp/jobeet2.0/app/../src/Application/FrontendBundle/Resources/views/Frontend/index.twig";
    }
}
