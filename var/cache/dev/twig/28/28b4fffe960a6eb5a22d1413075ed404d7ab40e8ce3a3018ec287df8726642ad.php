<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_44048b35237a8fa719f46fb5631e871923f3f1afdd05732eec637da712aafbbe extends Twig_Template
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
        $__internal_ac7b92044dd66392a1d241437631b9c4ea3ac6ec4068a56f29fd5b773cf6ad50 = $this->env->getExtension("native_profiler");
        $__internal_ac7b92044dd66392a1d241437631b9c4ea3ac6ec4068a56f29fd5b773cf6ad50->enter($__internal_ac7b92044dd66392a1d241437631b9c4ea3ac6ec4068a56f29fd5b773cf6ad50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ac7b92044dd66392a1d241437631b9c4ea3ac6ec4068a56f29fd5b773cf6ad50->leave($__internal_ac7b92044dd66392a1d241437631b9c4ea3ac6ec4068a56f29fd5b773cf6ad50_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_846b7d22b6d94d757b779a6994a7158e0910f657756b9183d35a7e852b4225b4 = $this->env->getExtension("native_profiler");
        $__internal_846b7d22b6d94d757b779a6994a7158e0910f657756b9183d35a7e852b4225b4->enter($__internal_846b7d22b6d94d757b779a6994a7158e0910f657756b9183d35a7e852b4225b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_846b7d22b6d94d757b779a6994a7158e0910f657756b9183d35a7e852b4225b4->leave($__internal_846b7d22b6d94d757b779a6994a7158e0910f657756b9183d35a7e852b4225b4_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_8e091e1498c409604c4243713abe818813d8f50d73663d5c4a23aba986b3fe1a = $this->env->getExtension("native_profiler");
        $__internal_8e091e1498c409604c4243713abe818813d8f50d73663d5c4a23aba986b3fe1a->enter($__internal_8e091e1498c409604c4243713abe818813d8f50d73663d5c4a23aba986b3fe1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_8e091e1498c409604c4243713abe818813d8f50d73663d5c4a23aba986b3fe1a->leave($__internal_8e091e1498c409604c4243713abe818813d8f50d73663d5c4a23aba986b3fe1a_prof);

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
