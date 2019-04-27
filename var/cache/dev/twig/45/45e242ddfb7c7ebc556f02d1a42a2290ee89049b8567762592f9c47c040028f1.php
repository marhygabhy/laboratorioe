<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_ce0295a4da6d63dda6b2729f6afa594bd289d952c72e1dd627885e13ff33edcc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9dff878889ea28d2e24b7001d8ada49c18a340c9b557857d3fb1968996337b31 = $this->env->getExtension("native_profiler");
        $__internal_9dff878889ea28d2e24b7001d8ada49c18a340c9b557857d3fb1968996337b31->enter($__internal_9dff878889ea28d2e24b7001d8ada49c18a340c9b557857d3fb1968996337b31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_9dff878889ea28d2e24b7001d8ada49c18a340c9b557857d3fb1968996337b31->leave($__internal_9dff878889ea28d2e24b7001d8ada49c18a340c9b557857d3fb1968996337b31_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}*/
/* */
