<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_c28be04acc680275a0c9ac0b5ce016f22ee0de274f3218d0038a95b269c156c0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
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
        $__internal_96e7d6240dcc4cc6abe15391f463c7f86d5c6d41d4a9fd7050512d42ce6ffe4e = $this->env->getExtension("native_profiler");
        $__internal_96e7d6240dcc4cc6abe15391f463c7f86d5c6d41d4a9fd7050512d42ce6ffe4e->enter($__internal_96e7d6240dcc4cc6abe15391f463c7f86d5c6d41d4a9fd7050512d42ce6ffe4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_96e7d6240dcc4cc6abe15391f463c7f86d5c6d41d4a9fd7050512d42ce6ffe4e->leave($__internal_96e7d6240dcc4cc6abe15391f463c7f86d5c6d41d4a9fd7050512d42ce6ffe4e_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_a8464802fc3b36ca2a8e369ef5059dcabbc2fe5bacc9805d4dd330aa524701e9 = $this->env->getExtension("native_profiler");
        $__internal_a8464802fc3b36ca2a8e369ef5059dcabbc2fe5bacc9805d4dd330aa524701e9->enter($__internal_a8464802fc3b36ca2a8e369ef5059dcabbc2fe5bacc9805d4dd330aa524701e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_a8464802fc3b36ca2a8e369ef5059dcabbc2fe5bacc9805d4dd330aa524701e9->leave($__internal_a8464802fc3b36ca2a8e369ef5059dcabbc2fe5bacc9805d4dd330aa524701e9_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_b92f24af1f44b079a7272a2893b38b4f9e81e041f310ad3d2f2fe7882ce2c1ff = $this->env->getExtension("native_profiler");
        $__internal_b92f24af1f44b079a7272a2893b38b4f9e81e041f310ad3d2f2fe7882ce2c1ff->enter($__internal_b92f24af1f44b079a7272a2893b38b4f9e81e041f310ad3d2f2fe7882ce2c1ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_b92f24af1f44b079a7272a2893b38b4f9e81e041f310ad3d2f2fe7882ce2c1ff->leave($__internal_b92f24af1f44b079a7272a2893b38b4f9e81e041f310ad3d2f2fe7882ce2c1ff_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_2203c01ca965293956f0764fe9053ddc76ab09afd29ea2c1c61de02388d148a4 = $this->env->getExtension("native_profiler");
        $__internal_2203c01ca965293956f0764fe9053ddc76ab09afd29ea2c1c61de02388d148a4->enter($__internal_2203c01ca965293956f0764fe9053ddc76ab09afd29ea2c1c61de02388d148a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_2203c01ca965293956f0764fe9053ddc76ab09afd29ea2c1c61de02388d148a4->leave($__internal_2203c01ca965293956f0764fe9053ddc76ab09afd29ea2c1c61de02388d148a4_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
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
