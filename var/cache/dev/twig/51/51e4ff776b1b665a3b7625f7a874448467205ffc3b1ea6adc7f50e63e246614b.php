<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_070f1477b848d9b584499a82b9af5250e44747cb1042f6c561513e959ca6b1af extends Twig_Template
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
        $__internal_d64cb4908eebcaf44a39d4ebfa388dee03343d6839df8f3a19117f16d3aaaee9 = $this->env->getExtension("native_profiler");
        $__internal_d64cb4908eebcaf44a39d4ebfa388dee03343d6839df8f3a19117f16d3aaaee9->enter($__internal_d64cb4908eebcaf44a39d4ebfa388dee03343d6839df8f3a19117f16d3aaaee9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_d64cb4908eebcaf44a39d4ebfa388dee03343d6839df8f3a19117f16d3aaaee9->leave($__internal_d64cb4908eebcaf44a39d4ebfa388dee03343d6839df8f3a19117f16d3aaaee9_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
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
/* {{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}*/
/* */
