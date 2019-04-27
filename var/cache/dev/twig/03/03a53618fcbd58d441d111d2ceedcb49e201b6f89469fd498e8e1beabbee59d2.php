<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_9e406fd3f8be900893329cdbfe27424caa08c7cf0f58db2d4057c0bcbf089759 extends Twig_Template
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
        $__internal_68c3fed86b1a7bd2f945999ced77691f7f382087fe27ccfd5bbf74b56a9ce3c7 = $this->env->getExtension("native_profiler");
        $__internal_68c3fed86b1a7bd2f945999ced77691f7f382087fe27ccfd5bbf74b56a9ce3c7->enter($__internal_68c3fed86b1a7bd2f945999ced77691f7f382087fe27ccfd5bbf74b56a9ce3c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_68c3fed86b1a7bd2f945999ced77691f7f382087fe27ccfd5bbf74b56a9ce3c7->leave($__internal_68c3fed86b1a7bd2f945999ced77691f7f382087fe27ccfd5bbf74b56a9ce3c7_prof);

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
