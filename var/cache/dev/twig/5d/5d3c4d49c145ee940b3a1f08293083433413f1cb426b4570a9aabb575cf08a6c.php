<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_f6ca086bfca26a17b0c7add6b30080a6f0e222ae3b025b45cf67c5b843ee354a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
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
        $__internal_a3f131e8a6636ef156896a8a599cfd76ed9df4ab2dbdad4f9c3b6fd420ef0cd6 = $this->env->getExtension("native_profiler");
        $__internal_a3f131e8a6636ef156896a8a599cfd76ed9df4ab2dbdad4f9c3b6fd420ef0cd6->enter($__internal_a3f131e8a6636ef156896a8a599cfd76ed9df4ab2dbdad4f9c3b6fd420ef0cd6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a3f131e8a6636ef156896a8a599cfd76ed9df4ab2dbdad4f9c3b6fd420ef0cd6->leave($__internal_a3f131e8a6636ef156896a8a599cfd76ed9df4ab2dbdad4f9c3b6fd420ef0cd6_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_69d57349cfa49eb40e8f67de926631bc831a7758759b77f4759500f2a1ddd433 = $this->env->getExtension("native_profiler");
        $__internal_69d57349cfa49eb40e8f67de926631bc831a7758759b77f4759500f2a1ddd433->enter($__internal_69d57349cfa49eb40e8f67de926631bc831a7758759b77f4759500f2a1ddd433_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_69d57349cfa49eb40e8f67de926631bc831a7758759b77f4759500f2a1ddd433->leave($__internal_69d57349cfa49eb40e8f67de926631bc831a7758759b77f4759500f2a1ddd433_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_fb5a37dcfd934b3a0796b2d7cbb98fee5664109e87a24d9d05149689c499b0b4 = $this->env->getExtension("native_profiler");
        $__internal_fb5a37dcfd934b3a0796b2d7cbb98fee5664109e87a24d9d05149689c499b0b4->enter($__internal_fb5a37dcfd934b3a0796b2d7cbb98fee5664109e87a24d9d05149689c499b0b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_fb5a37dcfd934b3a0796b2d7cbb98fee5664109e87a24d9d05149689c499b0b4->leave($__internal_fb5a37dcfd934b3a0796b2d7cbb98fee5664109e87a24d9d05149689c499b0b4_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_c82e544c7506d74a19f7c47aa2522b36b6ea130fa4e16cdc65bc6f98b3f7f96f = $this->env->getExtension("native_profiler");
        $__internal_c82e544c7506d74a19f7c47aa2522b36b6ea130fa4e16cdc65bc6f98b3f7f96f->enter($__internal_c82e544c7506d74a19f7c47aa2522b36b6ea130fa4e16cdc65bc6f98b3f7f96f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_c82e544c7506d74a19f7c47aa2522b36b6ea130fa4e16cdc65bc6f98b3f7f96f->leave($__internal_c82e544c7506d74a19f7c47aa2522b36b6ea130fa4e16cdc65bc6f98b3f7f96f_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
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
