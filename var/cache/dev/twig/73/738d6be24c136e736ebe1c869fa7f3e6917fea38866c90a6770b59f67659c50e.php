<?php

/* WebProfilerBundle:Collector:exception.html.twig */
class __TwigTemplate_3bd90a7f7ae4ed2d0a00a66f8aaf050c11427d923e1eec6823fa9f6805981892 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_c45e5da09f46639fdb3ac329bd381c2b045f55c576e9db9857d4f5b9c9e30181 = $this->env->getExtension("native_profiler");
        $__internal_c45e5da09f46639fdb3ac329bd381c2b045f55c576e9db9857d4f5b9c9e30181->enter($__internal_c45e5da09f46639fdb3ac329bd381c2b045f55c576e9db9857d4f5b9c9e30181_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c45e5da09f46639fdb3ac329bd381c2b045f55c576e9db9857d4f5b9c9e30181->leave($__internal_c45e5da09f46639fdb3ac329bd381c2b045f55c576e9db9857d4f5b9c9e30181_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_47df01e88d174fe894cd3ba1abe6d95c5cbdc769a48b43636693474e83ba7b02 = $this->env->getExtension("native_profiler");
        $__internal_47df01e88d174fe894cd3ba1abe6d95c5cbdc769a48b43636693474e83ba7b02->enter($__internal_47df01e88d174fe894cd3ba1abe6d95c5cbdc769a48b43636693474e83ba7b02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_47df01e88d174fe894cd3ba1abe6d95c5cbdc769a48b43636693474e83ba7b02->leave($__internal_47df01e88d174fe894cd3ba1abe6d95c5cbdc769a48b43636693474e83ba7b02_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_1b2f840330f9af24c23023f5da95667030698c9818a8172c5200b7fb885386b1 = $this->env->getExtension("native_profiler");
        $__internal_1b2f840330f9af24c23023f5da95667030698c9818a8172c5200b7fb885386b1->enter($__internal_1b2f840330f9af24c23023f5da95667030698c9818a8172c5200b7fb885386b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_1b2f840330f9af24c23023f5da95667030698c9818a8172c5200b7fb885386b1->leave($__internal_1b2f840330f9af24c23023f5da95667030698c9818a8172c5200b7fb885386b1_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_4e64bdfa983dae056235c0ff35021ae578474814f039775e94a1432dcc220666 = $this->env->getExtension("native_profiler");
        $__internal_4e64bdfa983dae056235c0ff35021ae578474814f039775e94a1432dcc220666->enter($__internal_4e64bdfa983dae056235c0ff35021ae578474814f039775e94a1432dcc220666_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_4e64bdfa983dae056235c0ff35021ae578474814f039775e94a1432dcc220666->leave($__internal_4e64bdfa983dae056235c0ff35021ae578474814f039775e94a1432dcc220666_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 33,  114 => 32,  108 => 28,  106 => 27,  102 => 25,  96 => 24,  88 => 21,  82 => 17,  80 => 16,  75 => 14,  70 => 13,  64 => 12,  54 => 9,  48 => 6,  45 => 5,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     {% if collector.hasexception %}*/
/*         <style>*/
/*             {{ render(path('_profiler_exception_css', { token: token })) }}*/
/*         </style>*/
/*     {% endif %}*/
/*     {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block menu %}*/
/*     <span class="label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}">*/
/*         <span class="icon">{{ include('@WebProfiler/Icon/exception.svg') }}</span>*/
/*         <strong>Exception</strong>*/
/*         {% if collector.hasexception %}*/
/*             <span class="count">*/
/*                 <span>1</span>*/
/*             </span>*/
/*         {% endif %}*/
/*     </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     <h2>Exceptions</h2>*/
/* */
/*     {% if not collector.hasexception %}*/
/*         <div class="empty">*/
/*             <p>No exception was thrown and caught during the request.</p>*/
/*         </div>*/
/*     {% else %}*/
/*         <div class="sf-reset">*/
/*             {{ render(path('_profiler_exception', { token: token })) }}*/
/*         </div>*/
/*     {% endif %}*/
/* {% endblock %}*/
/* */
