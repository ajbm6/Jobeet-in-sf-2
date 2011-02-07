<?php

/* /home/amir/tmp/jobeet2.0/app/../src/vendor/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Exception/logs.twig */
class __TwigTemplate_1d4b9b851d4c7d2ac8beee875c821373 extends Twig_Template
{
    public function display(array $context, array $blocks = array())
    {
        $context = array_merge($this->env->getGlobals(), $context);

        // line 1
        echo "<ol>
    ";
        // line 2
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, 'logs', '2'));
        foreach ($context['_seq'] as $context['_key'] => $context['log']) {
            // line 3
            echo "        <li";
            if (("ERR" == $this->getAttribute($this->getContext($context, 'log', '3'), "priorityName", array(), "any"))) {
                echo " class=\"error\"";
            }
            echo ">
            ";
            // line 4
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, 'log', '4'), "priorityName", array(), "any"), "html");
            echo "
            ";
            // line 5
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, 'log', '5'), "message", array(), "any"), "html");
            echo "
        </li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['log'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 8
        echo "</ol>
";
    }

    public function getTemplateName()
    {
        return "/home/amir/tmp/jobeet2.0/app/../src/vendor/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Exception/logs.twig";
    }
}
