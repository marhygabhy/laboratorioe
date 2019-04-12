<?php

/* :default:resena.html.twig */
class __TwigTemplate_ef968c4e32d5cbd5d165093d3f2f6f291f6a9441833dcc0727c3e411d5cfea44 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":default:resena.html.twig", 1);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3154debb37deb60b94f700945a83686831cda539de502b851a3b3a4ddf85040a = $this->env->getExtension("native_profiler");
        $__internal_3154debb37deb60b94f700945a83686831cda539de502b851a3b3a4ddf85040a->enter($__internal_3154debb37deb60b94f700945a83686831cda539de502b851a3b3a4ddf85040a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:resena.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3154debb37deb60b94f700945a83686831cda539de502b851a3b3a4ddf85040a->leave($__internal_3154debb37deb60b94f700945a83686831cda539de502b851a3b3a4ddf85040a_prof);

    }

    public function getTemplateName()
    {
        return ":default:resena.html.twig";
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
