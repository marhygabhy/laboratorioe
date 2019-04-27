<?php

/* :default:resena.html.twig */
class __TwigTemplate_c17061cd2c12261d06a04f7060d44666d16110b0fe70fce4e68442814bb75fd2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":default:resena.html.twig", 1);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0a17b633d67986ecf716e7be2a7793cc2a479b8d6b7fca10d98b8ff2551c048c = $this->env->getExtension("native_profiler");
        $__internal_0a17b633d67986ecf716e7be2a7793cc2a479b8d6b7fca10d98b8ff2551c048c->enter($__internal_0a17b633d67986ecf716e7be2a7793cc2a479b8d6b7fca10d98b8ff2551c048c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:resena.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0a17b633d67986ecf716e7be2a7793cc2a479b8d6b7fca10d98b8ff2551c048c->leave($__internal_0a17b633d67986ecf716e7be2a7793cc2a479b8d6b7fca10d98b8ff2551c048c_prof);

    }

    public function getTemplateName()
    {
        return ":default:resena.html.twig";
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
