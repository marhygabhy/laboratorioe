<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_0f2a31af309c915c8d1719bf575a2d2358cc8d3858d91a5997494bf23156912a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b5d03ae324c9ca3754c162ee461c8a13ea360440390f0a54a5ae638c6d44a482 = $this->env->getExtension("native_profiler");
        $__internal_b5d03ae324c9ca3754c162ee461c8a13ea360440390f0a54a5ae638c6d44a482->enter($__internal_b5d03ae324c9ca3754c162ee461c8a13ea360440390f0a54a5ae638c6d44a482_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b5d03ae324c9ca3754c162ee461c8a13ea360440390f0a54a5ae638c6d44a482->leave($__internal_b5d03ae324c9ca3754c162ee461c8a13ea360440390f0a54a5ae638c6d44a482_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_07640b67aada057247dca5220e7ca88729ce0de27cc497ffb8a96f9de14e54fd = $this->env->getExtension("native_profiler");
        $__internal_07640b67aada057247dca5220e7ca88729ce0de27cc497ffb8a96f9de14e54fd->enter($__internal_07640b67aada057247dca5220e7ca88729ce0de27cc497ffb8a96f9de14e54fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_07640b67aada057247dca5220e7ca88729ce0de27cc497ffb8a96f9de14e54fd->leave($__internal_07640b67aada057247dca5220e7ca88729ce0de27cc497ffb8a96f9de14e54fd_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_b75ec30820b117f3ef40814a77f4281116e178a51cdaad587b1bd611e9af5bf7 = $this->env->getExtension("native_profiler");
        $__internal_b75ec30820b117f3ef40814a77f4281116e178a51cdaad587b1bd611e9af5bf7->enter($__internal_b75ec30820b117f3ef40814a77f4281116e178a51cdaad587b1bd611e9af5bf7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_b75ec30820b117f3ef40814a77f4281116e178a51cdaad587b1bd611e9af5bf7->leave($__internal_b75ec30820b117f3ef40814a77f4281116e178a51cdaad587b1bd611e9af5bf7_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_9125d8779f35673bd6e7c47845a5f69eeb33d2d0ecbf49b0e2a7288dd37b45eb = $this->env->getExtension("native_profiler");
        $__internal_9125d8779f35673bd6e7c47845a5f69eeb33d2d0ecbf49b0e2a7288dd37b45eb->enter($__internal_9125d8779f35673bd6e7c47845a5f69eeb33d2d0ecbf49b0e2a7288dd37b45eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_9125d8779f35673bd6e7c47845a5f69eeb33d2d0ecbf49b0e2a7288dd37b45eb->leave($__internal_9125d8779f35673bd6e7c47845a5f69eeb33d2d0ecbf49b0e2a7288dd37b45eb_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
