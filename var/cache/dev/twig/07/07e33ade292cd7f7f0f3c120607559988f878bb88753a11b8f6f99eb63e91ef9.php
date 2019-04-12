<?php

/* :default:novedades.html.twig */
class __TwigTemplate_c16bb0980933af973663381eee2ad980af7854c78a62c8126d1f540a65f5105e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":default:novedades.html.twig", 1);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d5212156d9cb8834bed3b91ab273fa5bc6ecf329ceabbaea8c0854a55b0b8572 = $this->env->getExtension("native_profiler");
        $__internal_d5212156d9cb8834bed3b91ab273fa5bc6ecf329ceabbaea8c0854a55b0b8572->enter($__internal_d5212156d9cb8834bed3b91ab273fa5bc6ecf329ceabbaea8c0854a55b0b8572_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:novedades.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d5212156d9cb8834bed3b91ab273fa5bc6ecf329ceabbaea8c0854a55b0b8572->leave($__internal_d5212156d9cb8834bed3b91ab273fa5bc6ecf329ceabbaea8c0854a55b0b8572_prof);

    }

    public function getTemplateName()
    {
        return ":default:novedades.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
