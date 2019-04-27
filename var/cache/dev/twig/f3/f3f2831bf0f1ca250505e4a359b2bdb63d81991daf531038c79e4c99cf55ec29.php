<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_ba564a61b04b84bb04f0cfac9ac72bbd7ec07fec543d6e14000a8fc2c178dbb0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1b31a30b24b84cd59db1ac2c0a074384429c44a09963505c389dcb5686e723da = $this->env->getExtension("native_profiler");
        $__internal_1b31a30b24b84cd59db1ac2c0a074384429c44a09963505c389dcb5686e723da->enter($__internal_1b31a30b24b84cd59db1ac2c0a074384429c44a09963505c389dcb5686e723da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1b31a30b24b84cd59db1ac2c0a074384429c44a09963505c389dcb5686e723da->leave($__internal_1b31a30b24b84cd59db1ac2c0a074384429c44a09963505c389dcb5686e723da_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_632f6156ee6c317393e7349120c23617acd8d5c7504c97077b6cfb8c4ddb4390 = $this->env->getExtension("native_profiler");
        $__internal_632f6156ee6c317393e7349120c23617acd8d5c7504c97077b6cfb8c4ddb4390->enter($__internal_632f6156ee6c317393e7349120c23617acd8d5c7504c97077b6cfb8c4ddb4390_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_632f6156ee6c317393e7349120c23617acd8d5c7504c97077b6cfb8c4ddb4390->leave($__internal_632f6156ee6c317393e7349120c23617acd8d5c7504c97077b6cfb8c4ddb4390_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_458daf146d57f82a964f167cc33fcfa31b7b7a78a5e3a1b18ce1bcd556a97651 = $this->env->getExtension("native_profiler");
        $__internal_458daf146d57f82a964f167cc33fcfa31b7b7a78a5e3a1b18ce1bcd556a97651->enter($__internal_458daf146d57f82a964f167cc33fcfa31b7b7a78a5e3a1b18ce1bcd556a97651_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_458daf146d57f82a964f167cc33fcfa31b7b7a78a5e3a1b18ce1bcd556a97651->leave($__internal_458daf146d57f82a964f167cc33fcfa31b7b7a78a5e3a1b18ce1bcd556a97651_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block title 'Redirection Intercepted' %}*/
/* */
/* {% block body %}*/
/*     <div class="sf-reset">*/
/*         <div class="block-exception">*/
/*             <h1>This request redirects to <a href="{{ location }}">{{ location }}</a>.</h1>*/
/* */
/*             <p>*/
/*                 <small>*/
/*                     The redirect was intercepted by the web debug toolbar to help debugging.*/
/*                     For more information, see the "intercept-redirects" option of the Profiler.*/
/*                 </small>*/
/*             </p>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
