<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_1d26c4d62e9cb08e9b1d56b6cae1d51fbe7f6d06714b35bb4b2f834543bdd62d extends Twig_Template
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
        $__internal_2392030b8f650b542df4cac66c9455a235a0f79ad1ce7d431c9bfa53b04c172e = $this->env->getExtension("native_profiler");
        $__internal_2392030b8f650b542df4cac66c9455a235a0f79ad1ce7d431c9bfa53b04c172e->enter($__internal_2392030b8f650b542df4cac66c9455a235a0f79ad1ce7d431c9bfa53b04c172e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_2392030b8f650b542df4cac66c9455a235a0f79ad1ce7d431c9bfa53b04c172e->leave($__internal_2392030b8f650b542df4cac66c9455a235a0f79ad1ce7d431c9bfa53b04c172e_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
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
/* {{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}*/
/* */
