<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_7bcb0ca493e1ff53fc9f52c18cfb6b02194baebf6da0f10f8ff3cd179749fe90 extends Twig_Template
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
        $__internal_f0b31932661d9e9a6c97a3b47d8f9b8dc7fe851b8e4586d09340812256edd6d1 = $this->env->getExtension("native_profiler");
        $__internal_f0b31932661d9e9a6c97a3b47d8f9b8dc7fe851b8e4586d09340812256edd6d1->enter($__internal_f0b31932661d9e9a6c97a3b47d8f9b8dc7fe851b8e4586d09340812256edd6d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_f0b31932661d9e9a6c97a3b47d8f9b8dc7fe851b8e4586d09340812256edd6d1->leave($__internal_f0b31932661d9e9a6c97a3b47d8f9b8dc7fe851b8e4586d09340812256edd6d1_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 3,  22 => 1,);
    }
}
/* <?xml version="1.0" encoding="{{ _charset }}" ?>*/
/* */
/* <error code="{{ status_code }}" message="{{ status_text }}" />*/
/* */
