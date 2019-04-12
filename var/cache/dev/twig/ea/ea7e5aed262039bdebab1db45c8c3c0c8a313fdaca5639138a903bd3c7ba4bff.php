<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_ef7cc4c9c5ad6c5ae5c737f7da5d073b5dd67bd1202fca69c3e5ef0371346b3d extends Twig_Template
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
        $__internal_c976413a4d89dd29139344319405185501827dfed0376d3aae2ea7ed1d330476 = $this->env->getExtension("native_profiler");
        $__internal_c976413a4d89dd29139344319405185501827dfed0376d3aae2ea7ed1d330476->enter($__internal_c976413a4d89dd29139344319405185501827dfed0376d3aae2ea7ed1d330476_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_c976413a4d89dd29139344319405185501827dfed0376d3aae2ea7ed1d330476->leave($__internal_c976413a4d89dd29139344319405185501827dfed0376d3aae2ea7ed1d330476_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
