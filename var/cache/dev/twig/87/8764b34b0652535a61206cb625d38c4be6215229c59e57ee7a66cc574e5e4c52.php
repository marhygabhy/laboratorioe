<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_d39d86989a9be5a30c92d4c6768b5b673cb15b57476b8f22f4ed8deec4ccc1cd extends Twig_Template
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
        $__internal_18edf0e6bc87ee91eef9008d8090d5eb8f7a352941fa2ba55847b5f57f0feb36 = $this->env->getExtension("native_profiler");
        $__internal_18edf0e6bc87ee91eef9008d8090d5eb8f7a352941fa2ba55847b5f57f0feb36->enter($__internal_18edf0e6bc87ee91eef9008d8090d5eb8f7a352941fa2ba55847b5f57f0feb36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_18edf0e6bc87ee91eef9008d8090d5eb8f7a352941fa2ba55847b5f57f0feb36->leave($__internal_18edf0e6bc87ee91eef9008d8090d5eb8f7a352941fa2ba55847b5f57f0feb36_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {{ status_code }} {{ status_text }}*/
/* */
/* *//* */
/* */
