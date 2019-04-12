<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_0e908cf6f214bb684ce23593560425b2b8e878659ada52757483e95dcda60613 extends Twig_Template
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
        $__internal_0162891c4453ff773001bbf446e8d513bfdbc4582da00f4c772ccf5c3836a1d9 = $this->env->getExtension("native_profiler");
        $__internal_0162891c4453ff773001bbf446e8d513bfdbc4582da00f4c772ccf5c3836a1d9->enter($__internal_0162891c4453ff773001bbf446e8d513bfdbc4582da00f4c772ccf5c3836a1d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_0162891c4453ff773001bbf446e8d513bfdbc4582da00f4c772ccf5c3836a1d9->leave($__internal_0162891c4453ff773001bbf446e8d513bfdbc4582da00f4c772ccf5c3836a1d9_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
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
