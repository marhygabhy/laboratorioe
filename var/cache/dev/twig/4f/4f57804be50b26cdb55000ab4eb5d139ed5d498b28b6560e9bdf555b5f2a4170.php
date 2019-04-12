<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_8b8f561a7f7ae17c470605b0378a7bf0c7e5937a5db9ba075b8ab40f314407e3 extends Twig_Template
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
        $__internal_298c1a62e77bb7eefe706bdca1f958bbf4db56eca038f9769ff4caf37f0b861c = $this->env->getExtension("native_profiler");
        $__internal_298c1a62e77bb7eefe706bdca1f958bbf4db56eca038f9769ff4caf37f0b861c->enter($__internal_298c1a62e77bb7eefe706bdca1f958bbf4db56eca038f9769ff4caf37f0b861c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_298c1a62e77bb7eefe706bdca1f958bbf4db56eca038f9769ff4caf37f0b861c->leave($__internal_298c1a62e77bb7eefe706bdca1f958bbf4db56eca038f9769ff4caf37f0b861c_prof);

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
