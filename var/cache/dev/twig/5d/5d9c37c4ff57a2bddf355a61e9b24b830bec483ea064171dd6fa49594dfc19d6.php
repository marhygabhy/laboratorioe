<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_51a3aa8da69b1404af1b2f245b93522b6397b3fe0c9fc7cbed2e6947089bc8e0 extends Twig_Template
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
        $__internal_ec6de2d8f58596b80d8f248f4f530708bfab8c02eefdb13958c9a4705677c15e = $this->env->getExtension("native_profiler");
        $__internal_ec6de2d8f58596b80d8f248f4f530708bfab8c02eefdb13958c9a4705677c15e->enter($__internal_ec6de2d8f58596b80d8f248f4f530708bfab8c02eefdb13958c9a4705677c15e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_ec6de2d8f58596b80d8f248f4f530708bfab8c02eefdb13958c9a4705677c15e->leave($__internal_ec6de2d8f58596b80d8f248f4f530708bfab8c02eefdb13958c9a4705677c15e_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
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
