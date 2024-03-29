<?php

/* WebProfilerBundle:Collector:timer.twig */
class __TwigTemplate_2591f5b08baae9610a29cb0e6397608d extends Twig_Template
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
        echo "<img style=\"margin: 0 7px 0 10px; vertical-align: middle; height: 24px\" width=\"24\" height=\"24\" alt=\"Timers\" src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAYAAABzenr0AAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAA6BJREFUeNrkV19IU1EY38bUIaFGCpsMJyJt4DZ1DMk1UINYELEVA8FFOX0xZVRP+WCU9OSDOnFjrJjTh8SXyN725qI/TyEjFCFFJ4T2YKjDif/t98W9tNa9d3cZ+tCBj/Odc7/fd373O+d897vS4+NjyVk2meSMm5xrUiqVisFOpY2bMgG4oi3lnEwhMD4+zusvHcZl1NLSIkhAnon10dHR6W+BSALSlChIT4VAa2trDTobhHrl6OgoO0/n4RskBnmF+QVm/hy6QQiN+zjfItMZGBkZkbS1tSmhPqqtrW20Wq3KioqKosLCQkUqZnNzc2dxcXEjEol8nZ+ff48pv1qtruvs7Ayurq5uDQ8Pe7FWX9YE0KylpaW9IGHSaDRFYsK6vLy8MTExsaDVagscDsdFmpubm/vS39+vzZaA1WKxBJqbm3V5eXnsdsUhk5A3aTA7xAEp57mCnzs6OqqzOQNKLD7ocrn0NDg4OEiA2BOoXtagq6vrZy7w+/2UA6KQh5AHWKwXtgWsHbbgsUql8mV1BsrKykIej+cOvTlsaPEG5pBx5YL0W1ADzFuWRDAYfDk7O3ubay2+VFzpdDpvydH29vaSuAkNh4eHMYhEpMQIQ1ga22y268zNEUfAaDR6ELIihJ32rgd9jPQsJcZgJeQL23lPdB4wm803iPnu7u53bIH3BInOCx898HFBp9NdFR2BkpISFTFPJBIRvjfs7u6+lKLX8dmxPsinaAL5+fkKisDS0lKUb5+xTc9Z3WAwvOCzY32QT9FbQIzZNMzq6c1utxvYZ0g2Rj47IR8ZCRBzIbCYlsmHjA9EggSiF7hqV3j03yTVh+gIJJPJdZzc80ql8poA+ymB6uhXOmV84Dasi44AjN8RY4A1AwMDToEoNDHC+Zyw5IP0/f39KdEEFArFIIHQK+rr658ODQ1V8iwSZeSPZ4QhLPmgcW5u7jPRBHw+XxRp9CMBq6qqtPgchzBXKTYVky1hCEtj8oW5WLZluQth25LJZHLkcgvSaSgQCDgzLU42ZEsYwpIP8sVb1wnVA+3t7fR9f006HB3MzMzEp6enP2FIFc+HNNhlqh9MJpNZr9eX5+TksAf8ZigUmvzrstztdjtgM8Z+Wre3t3dWVlbWUPWspWJQLRUj7MVsxmM+4XfD4fDkSctyclANcBh9Ix0q1IRqEoEilooTNzDxf1UVx5k/H/qm3yciHKVXnFl4jOlFNel//3N65gR+CDAAEVUmgT66oXEAAAAASUVORK5CYII=\" />
";
        // line 5
        echo twig_escape_filter($this->env, sprintf("%.0f", ($this->getAttribute($this->getContext($context, 'collector', '5'), "time", array(), "any") * 1000)), "html");
        echo " ms
";
    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:timer.twig";
    }
}
