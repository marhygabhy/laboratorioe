<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_897312d1532589334cebe649717a7f1c66c55776c83cef055dcbbffb03553bad extends Twig_Template
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
        $__internal_11de878ac62dc4970c6ef2e6427eb9773a87bc673ceedd0545ca457cdd245f62 = $this->env->getExtension("native_profiler");
        $__internal_11de878ac62dc4970c6ef2e6427eb9773a87bc673ceedd0545ca457cdd245f62->enter($__internal_11de878ac62dc4970c6ef2e6427eb9773a87bc673ceedd0545ca457cdd245f62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_11de878ac62dc4970c6ef2e6427eb9773a87bc673ceedd0545ca457cdd245f62->leave($__internal_11de878ac62dc4970c6ef2e6427eb9773a87bc673ceedd0545ca457cdd245f62_prof);

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
