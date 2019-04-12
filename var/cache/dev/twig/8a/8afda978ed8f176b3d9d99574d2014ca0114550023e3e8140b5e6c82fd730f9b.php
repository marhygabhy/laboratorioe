<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_d813039dcd20a194d206432b2bdbcc83377329359d06b599c6872b4567ecb790 extends Twig_Template
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
        $__internal_2581e682b9e7762fa3be6f31504c6e9bd4e64e7f3202c6f4de18eea16e74d5ec = $this->env->getExtension("native_profiler");
        $__internal_2581e682b9e7762fa3be6f31504c6e9bd4e64e7f3202c6f4de18eea16e74d5ec->enter($__internal_2581e682b9e7762fa3be6f31504c6e9bd4e64e7f3202c6f4de18eea16e74d5ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

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
        
        $__internal_2581e682b9e7762fa3be6f31504c6e9bd4e64e7f3202c6f4de18eea16e74d5ec->leave($__internal_2581e682b9e7762fa3be6f31504c6e9bd4e64e7f3202c6f4de18eea16e74d5ec_prof);

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
