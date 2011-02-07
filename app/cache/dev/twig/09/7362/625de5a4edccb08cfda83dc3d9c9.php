<?php

/* ::layout.twig */
class __TwigTemplate_0973625de5a4edccb08cfda83dc3d9c9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'view_javascript' => array($this, 'block_view_javascript'),
            'view_css' => array($this, 'block_view_css'),
            'body' => array($this, 'block_body'),
        );
    }

    public function display(array $context, array $blocks = array())
    {
        $context = array_merge($this->env->getGlobals(), $context);

        // line 1
        echo "<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Transitional//EN\"
 \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd\">
<html xmlns=\"http://www.w3.org/1999/xhtml\" xml:lang=\"en\" lang=\"en\">
  <head>
    <title>
      ";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo "\t
    </title>
    <link rel=\"shortcut icon\" href=\"/favicon.ico\" />
    
    <!-- Generic JS and CSS files -->
    <script type=\"text/javascript\" src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('templating')->getAssetUrl("js/search.js"), "html");
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('templating')->getAssetUrl("js/jquery.js"), "html");
        echo "\"></script>    
    <link href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('templating')->getAssetUrl("css/main.css"), "html");
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
    
    <!-- View-specific JS and CSS -->
    ";
        // line 16
        $this->displayBlock('view_javascript', $context, $blocks);
        // line 17
        echo "    ";
        $this->displayBlock('view_css', $context, $blocks);
        // line 18
        echo "  </head>
  
  <body>
    <div id=\"container\">
      <div id=\"header\">
        <div class=\"content\">
          <h1>
            <a href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('templating')->getPath("frontend"), "html");
        echo "\">
              <img src=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('templating')->getAssetUrl("images/logo.jpg"), "html");
        echo "\" alt=\"Jobeet Job Board\" />
            </a>
          </h1>
 
          <div id=\"sub_header\">
            <div class=\"post\">
              <h2>Ask for people</h2>
              <div>
                <a href=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('templating')->getPath("newjob"), "html");
        echo "\">Post a Job</a>
              </div>
            </div>
 
            <div class=\"search\">
              <h2>Ask for a job</h2>
              <form action=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('templating')->getPath("searchjobs"), "html");
        echo "\" method=\"get\">
                <input type=\"text\" name=\"keywords\" id=\"search_keywords\" />
                <input type=\"submit\" value=\"search\" />
                <img id=\"loader\" src=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('templating')->getAssetUrl("images/loader.gif"), "html");
        echo "\" style=\"vertical-align: middle; display: none\" />
                <div class=\"help\">
                  Enter some keywords (city, country, position, ...)
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
 
      <div id=\"content\">
          ";
        // line 54
        if ($this->getAttribute($this->getContext($context, 'session', '54'), "hasFlash", array("notice", ), "method")) {
            // line 55
            echo "          <div class=\"flash_notice\">
            ";
            // line 56
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, 'session', '56'), "getFlash", array("notice", ), "method"), "html");
            echo "
          </div>
          ";
        }
        // line 59
        echo " 
          ";
        // line 60
        if ($this->getAttribute($this->getContext($context, 'session', '60'), "hasFlash", array("error", ), "method")) {
            // line 61
            echo "            <div class=\"flash_error\">
              ";
            // line 62
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, 'session', '62'), "getFlash", array("error", ), "method"), "html");
            echo "
            </div>
          ";
        }
        // line 65
        echo "        
        <!--<div id=\"job_history\">
          Recent viewed jobs:
          
        </div>-->
 
        <div class=\"content\">
          ";
        // line 72
        $this->displayBlock('body', $context, $blocks);
        // line 73
        echo "        </div>
      </div>
 
      <div id=\"footer\">
        <div class=\"content\">
          <span class=\"symfony\">
            <img src=\"/images/jobeet-mini.png\" />
            powered by <a href=\"http://www.symfony-project.org/\">
            <img src=\"/images/symfony.gif\" alt=\"symfony framework\" />
            </a>
          </span>
          <ul>
            <li><a href=\"\">About Jobeet</a></li>
            <li class=\"feed\">
              
            </li>
            <li><a href=\"\">Jobeet API</a></li>
            <li class=\"last\">
              
            </li>
          </ul>
          
          
        </div>
      </div>
    </div>
  </body>
</html>
";
    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        echo "Jobeet - Your best job board";
    }

    // line 16
    public function block_view_javascript($context, array $blocks = array())
    {
    }

    // line 17
    public function block_view_css($context, array $blocks = array())
    {
    }

    // line 72
    public function block_body($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "::layout.twig";
    }
}
