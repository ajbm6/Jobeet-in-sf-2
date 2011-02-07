<?php

/* /home/amir/tmp/jobeet2.0/app/../src/Application/FrontendBundle/Resources/views/Job/show.twig */
class __TwigTemplate_86cd62f1eec9d14e6d5e0e7951b025f4 extends Twig_Template
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
        echo twig_escape_filter($this->env, $this->env->getExtension('templating')->getAssetUrl("css/job.css"), "html");
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
";
    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        // line 8
        echo "<div id=\"job\">
  <h1>";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['job']) ? $context['job'] : null), "getCompany", array(), "method"), "html");
        echo "</h1>
  <h2>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['job']) ? $context['job'] : null), "getLocation", array(), "method"), "html");
        echo "</h2>
  <h3>
    ";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['job']) ? $context['job'] : null), "getPosition", array(), "method"), "html");
        echo "
    <small> - ";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['job']) ? $context['job'] : null), "getType", array(), "method"), "html");
        echo "</small>
  </h3>
 
  ";
        // line 16
        if ($this->getAttribute((isset($context['job']) ? $context['job'] : null), "getLogo", array(), "method")) {
            // line 17
            echo "    <div class=\"logo\">
      <a href=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context['job']) ? $context['job'] : null), "getUrl", array(), "method"), "html");
            echo "\">
        <img src=\"/uploads/jobs/";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context['job']) ? $context['job'] : null), "getLogo", array(), "method"), "html");
            echo "\"
          alt=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context['job']) ? $context['job'] : null), "getCompany", array(), "method"), "html");
            echo " logo\" />
      </a>
    </div>
  ";
        }
        // line 24
        echo " 
  <div class=\"description\">
    ";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['job']) ? $context['job'] : null), "getDescription", array(), "method"), "html");
        echo "
  </div>
 
  <h4>How to apply?</h4>
 
  <p class=\"how_to_apply\">";
        // line 31
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['job']) ? $context['job'] : null), "getHowToApply", array(), "method"), "html");
        echo "</p>
 
  <div class=\"meta\">
    <small>posted on ";
        // line 34
        echo twig_escape_filter($this->env, twig_date_format_filter($this->getAttribute((isset($context['job']) ? $context['job'] : null), "getCreatedAt", array(), "method"), "m/d/Y"), "html");
        echo "</small>
  </div>
 
  <div style=\"padding: 20px 0\">
    <a href=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('templating')->getPath("editjob", array("id" => $this->getAttribute((isset($context['job']) ? $context['job'] : null), "getId", array(), "method"))), "html");
        echo "\">
      Edit
    </a>
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "/home/amir/tmp/jobeet2.0/app/../src/Application/FrontendBundle/Resources/views/Job/show.twig";
    }
}
