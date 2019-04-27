<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_cdec11d0c8f99cb7600990608987d0fd1a2e44fcb7540898ed41e12568e7335d extends Twig_Template
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
        $__internal_5a514cea243eddb3fc964276dbcc55a4936ec9254dbd4432b4eb2f937fecdeaa = $this->env->getExtension("native_profiler");
        $__internal_5a514cea243eddb3fc964276dbcc55a4936ec9254dbd4432b4eb2f937fecdeaa->enter($__internal_5a514cea243eddb3fc964276dbcc55a4936ec9254dbd4432b4eb2f937fecdeaa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_5a514cea243eddb3fc964276dbcc55a4936ec9254dbd4432b4eb2f937fecdeaa->leave($__internal_5a514cea243eddb3fc964276dbcc55a4936ec9254dbd4432b4eb2f937fecdeaa_prof);

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
