<?php

/* /home/amir/tmp/jobeet2.0/app/../src/vendor/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Exception/error.twig */
class __TwigTemplate_103415e677176279bc6f576b5681b923 extends Twig_Template
{
    public function display(array $context, array $blocks = array())
    {
        $context = array_merge($this->env->getGlobals(), $context);

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
    </head>
    <body>
        <h1>Oops! An Error Occurred</h1>
        <h2>The server returned a \"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context['status_code']) ? $context['status_code'] : null), "html");
        echo " ";
        echo twig_escape_filter($this->env, (isset($context['status_text']) ? $context['status_text'] : null), "html");
        echo "\".</h2>

        <div>
            Something is broken. Please e-mail us at [email] and let us know
            what you were doing when this error occurred. We will fix it as soon
            as possible. Sorry for any inconvenience caused.
        </div>
    </body>
</html>
";
    }

    public function getTemplateName()
    {
        return "/home/amir/tmp/jobeet2.0/app/../src/vendor/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Exception/error.twig";
    }
}
