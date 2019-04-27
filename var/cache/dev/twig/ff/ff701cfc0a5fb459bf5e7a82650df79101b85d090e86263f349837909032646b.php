<?php

/* ::menu.html.twig */
class __TwigTemplate_c0450c2c2c482f5a47f2426c895ebac1ec0ad28f4ac61094de9ffb71bd1c8178 extends Twig_Template
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
        $__internal_83ae3986c2617c41395ef68bfd9730dfc121594792db3dcc31a62259280c2256 = $this->env->getExtension("native_profiler");
        $__internal_83ae3986c2617c41395ef68bfd9730dfc121594792db3dcc31a62259280c2256->enter($__internal_83ae3986c2617c41395ef68bfd9730dfc121594792db3dcc31a62259280c2256_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::menu.html.twig"));

        // line 1
        echo "<img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/public/images/Editorial/Logotipos/portada.png"), "html", null, true);
        echo "\">";
        
        $__internal_83ae3986c2617c41395ef68bfd9730dfc121594792db3dcc31a62259280c2256->leave($__internal_83ae3986c2617c41395ef68bfd9730dfc121594792db3dcc31a62259280c2256_prof);

    }

    public function getTemplateName()
    {
        return "::menu.html.twig";
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
/* <img src="{{ asset('bundles/public/images/Editorial/Logotipos/portada.png')}}">*/
