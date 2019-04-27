<?php

/* EditorialBundle:Default:portada.html.twig */
class __TwigTemplate_1160c9d671980d35fa2a15a1e206dda17673098004963b1764adfa58745586ea extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "EditorialBundle:Default:portada.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b9e7c5d46c61e45ba200efebd04d28bd51371056ec531f93527483da29f07012 = $this->env->getExtension("native_profiler");
        $__internal_b9e7c5d46c61e45ba200efebd04d28bd51371056ec531f93527483da29f07012->enter($__internal_b9e7c5d46c61e45ba200efebd04d28bd51371056ec531f93527483da29f07012_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EditorialBundle:Default:portada.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b9e7c5d46c61e45ba200efebd04d28bd51371056ec531f93527483da29f07012->leave($__internal_b9e7c5d46c61e45ba200efebd04d28bd51371056ec531f93527483da29f07012_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_c3f6e15501440d83de0bfbbe5d6e6df6df34f8b8767f9b9c5c1aa774a3d19dff = $this->env->getExtension("native_profiler");
        $__internal_c3f6e15501440d83de0bfbbe5d6e6df6df34f8b8767f9b9c5c1aa774a3d19dff->enter($__internal_c3f6e15501440d83de0bfbbe5d6e6df6df34f8b8767f9b9c5c1aa774a3d19dff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "<h1 align=\"center\"><strong>Editorial Laboratorio Educativo</strong></h1>
<!--<img src=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/public/images/Editorial/Logotipos/12.png"), "html", null, true);
        echo "\" alt=\"\">-->
<img src=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/public/images/Editorial/Logotipos/portada.png"), "html", null, true);
        echo "\">
";
        
        $__internal_c3f6e15501440d83de0bfbbe5d6e6df6df34f8b8767f9b9c5c1aa774a3d19dff->leave($__internal_c3f6e15501440d83de0bfbbe5d6e6df6df34f8b8767f9b9c5c1aa774a3d19dff_prof);

    }

    public function getTemplateName()
    {
        return "EditorialBundle:Default:portada.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 5,  43 => 4,  40 => 3,  34 => 2,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* {% block body %}*/
/* <h1 align="center"><strong>Editorial Laboratorio Educativo</strong></h1>*/
/* <!--<img src="{{ asset('bundles/public/images/Editorial/Logotipos/12.png')}}" alt="">-->*/
/* <img src="{{ asset('bundles/public/images/Editorial/Logotipos/portada.png')}}">*/
/* {% endblock %}*/
