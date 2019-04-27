<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_01f0b7f0523e3eccf24fe556d93e07806820f5819fa85fbd78235099a4c44352 extends Twig_Template
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
        $__internal_298c00c23aec6a88feb0b901c19cf5116c0ea2a0798b6eb7516e547d9fbe687b = $this->env->getExtension("native_profiler");
        $__internal_298c00c23aec6a88feb0b901c19cf5116c0ea2a0798b6eb7516e547d9fbe687b->enter($__internal_298c00c23aec6a88feb0b901c19cf5116c0ea2a0798b6eb7516e547d9fbe687b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_298c00c23aec6a88feb0b901c19cf5116c0ea2a0798b6eb7516e547d9fbe687b->leave($__internal_298c00c23aec6a88feb0b901c19cf5116c0ea2a0798b6eb7516e547d9fbe687b_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}*/
/* *//* */
/* */
