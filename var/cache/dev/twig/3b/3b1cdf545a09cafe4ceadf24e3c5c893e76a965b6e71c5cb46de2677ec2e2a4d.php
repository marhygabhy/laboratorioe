<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_84320ea9de0c0877cfdd9660d2f13dd824ed0fc8dac00e84b6a5ab869f6cfa30 extends Twig_Template
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
        $__internal_94ee5103919da5b2397b5af76d95a95370a25e3c06a0c2bed8e72c5eb8a5f3b8 = $this->env->getExtension("native_profiler");
        $__internal_94ee5103919da5b2397b5af76d95a95370a25e3c06a0c2bed8e72c5eb8a5f3b8->enter($__internal_94ee5103919da5b2397b5af76d95a95370a25e3c06a0c2bed8e72c5eb8a5f3b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

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
        
        $__internal_94ee5103919da5b2397b5af76d95a95370a25e3c06a0c2bed8e72c5eb8a5f3b8->leave($__internal_94ee5103919da5b2397b5af76d95a95370a25e3c06a0c2bed8e72c5eb8a5f3b8_prof);

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
