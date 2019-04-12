<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_ecbad26cf618833e1bfc15a7ccec072b7af9f04d57d79003cdd7a6ec5ca8f9d6 extends Twig_Template
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
        $__internal_7ade16fd5ccbeb1c33d1f58a53f4867c40dd685f04d046bdb3d19ff670609fee = $this->env->getExtension("native_profiler");
        $__internal_7ade16fd5ccbeb1c33d1f58a53f4867c40dd685f04d046bdb3d19ff670609fee->enter($__internal_7ade16fd5ccbeb1c33d1f58a53f4867c40dd685f04d046bdb3d19ff670609fee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_7ade16fd5ccbeb1c33d1f58a53f4867c40dd685f04d046bdb3d19ff670609fee->leave($__internal_7ade16fd5ccbeb1c33d1f58a53f4867c40dd685f04d046bdb3d19ff670609fee_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
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
