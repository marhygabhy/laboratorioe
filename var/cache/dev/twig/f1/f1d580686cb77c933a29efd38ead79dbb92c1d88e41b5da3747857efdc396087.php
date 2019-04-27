<?php

/* :default:novedades.html.twig */
class __TwigTemplate_9319e8bf2b4f42cd201c99b66396b6f5c582cb4af5283730aa6036c5104a99ce extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":default:novedades.html.twig", 1);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0f87847c60eba6c1bfa128df06810c09c0b17a89412098ca68b15e1ab04c939c = $this->env->getExtension("native_profiler");
        $__internal_0f87847c60eba6c1bfa128df06810c09c0b17a89412098ca68b15e1ab04c939c->enter($__internal_0f87847c60eba6c1bfa128df06810c09c0b17a89412098ca68b15e1ab04c939c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:novedades.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0f87847c60eba6c1bfa128df06810c09c0b17a89412098ca68b15e1ab04c939c->leave($__internal_0f87847c60eba6c1bfa128df06810c09c0b17a89412098ca68b15e1ab04c939c_prof);

    }

    public function getTemplateName()
    {
        return ":default:novedades.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
