<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_250074900959f1a526cb7cf5414f442ca647f3a154f3727fea9f3faa937a4a51 extends Twig_Template
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
        $__internal_135994aa9ef3a0f338cbfab8486454c3cccdcb6a541845cebc952f3cc90d1a1c = $this->env->getExtension("native_profiler");
        $__internal_135994aa9ef3a0f338cbfab8486454c3cccdcb6a541845cebc952f3cc90d1a1c->enter($__internal_135994aa9ef3a0f338cbfab8486454c3cccdcb6a541845cebc952f3cc90d1a1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_135994aa9ef3a0f338cbfab8486454c3cccdcb6a541845cebc952f3cc90d1a1c->leave($__internal_135994aa9ef3a0f338cbfab8486454c3cccdcb6a541845cebc952f3cc90d1a1c_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
