<?php

/* TwigBundle:Exception:error.txt.twig */
class __TwigTemplate_e68bf9798342952ed05ab89838f773ac40dffa92342c440fe6bcf991e3c77607 extends Twig_Template
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
        $__internal_4ea3fec31416b2db279269c3963ec671b7cb467efaa3cf66576a6258eed88a04 = $this->env->getExtension("native_profiler");
        $__internal_4ea3fec31416b2db279269c3963ec671b7cb467efaa3cf66576a6258eed88a04->enter($__internal_4ea3fec31416b2db279269c3963ec671b7cb467efaa3cf66576a6258eed88a04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code"));
        echo " ";
        echo (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_4ea3fec31416b2db279269c3963ec671b7cb467efaa3cf66576a6258eed88a04->leave($__internal_4ea3fec31416b2db279269c3963ec671b7cb467efaa3cf66576a6258eed88a04_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 4,  22 => 1,);
    }
}
/* Oops! An Error Occurred*/
/* =======================*/
/* */
/* The server returned a "{{ status_code }} {{ status_text }}".*/
/* */
/* Something is broken. Please let us know what you were doing when this error occurred.*/
/* We will fix it as soon as possible. Sorry for any inconvenience caused.*/
/* */
