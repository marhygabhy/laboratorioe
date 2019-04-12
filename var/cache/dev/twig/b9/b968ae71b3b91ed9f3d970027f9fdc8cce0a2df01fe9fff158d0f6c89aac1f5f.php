<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_8c19d01b5860f16c7a3ef6aed4ff4b13f224ff776ea01323b6599bc1c0585344 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_f4fc869e29dd80b1c63b2d802d3b4eacd89ba2ddce251ec28005719a17efdaa6 = $this->env->getExtension("native_profiler");
        $__internal_f4fc869e29dd80b1c63b2d802d3b4eacd89ba2ddce251ec28005719a17efdaa6->enter($__internal_f4fc869e29dd80b1c63b2d802d3b4eacd89ba2ddce251ec28005719a17efdaa6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f4fc869e29dd80b1c63b2d802d3b4eacd89ba2ddce251ec28005719a17efdaa6->leave($__internal_f4fc869e29dd80b1c63b2d802d3b4eacd89ba2ddce251ec28005719a17efdaa6_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_7cc252cb6c03600cef60c9e6d292f7ad4dc72c234cd04937c99536c5053877dc = $this->env->getExtension("native_profiler");
        $__internal_7cc252cb6c03600cef60c9e6d292f7ad4dc72c234cd04937c99536c5053877dc->enter($__internal_7cc252cb6c03600cef60c9e6d292f7ad4dc72c234cd04937c99536c5053877dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_7cc252cb6c03600cef60c9e6d292f7ad4dc72c234cd04937c99536c5053877dc->leave($__internal_7cc252cb6c03600cef60c9e6d292f7ad4dc72c234cd04937c99536c5053877dc_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_e559f626f7aeb1e44fa66c1e397f94ff803a00b7ed4ca7f975d44f488b310830 = $this->env->getExtension("native_profiler");
        $__internal_e559f626f7aeb1e44fa66c1e397f94ff803a00b7ed4ca7f975d44f488b310830->enter($__internal_e559f626f7aeb1e44fa66c1e397f94ff803a00b7ed4ca7f975d44f488b310830_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_e559f626f7aeb1e44fa66c1e397f94ff803a00b7ed4ca7f975d44f488b310830->leave($__internal_e559f626f7aeb1e44fa66c1e397f94ff803a00b7ed4ca7f975d44f488b310830_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_9bc183735905a9c1b7dc4a09d69969aa3580bfdd173696adba12eda439dd39dd = $this->env->getExtension("native_profiler");
        $__internal_9bc183735905a9c1b7dc4a09d69969aa3580bfdd173696adba12eda439dd39dd->enter($__internal_9bc183735905a9c1b7dc4a09d69969aa3580bfdd173696adba12eda439dd39dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_9bc183735905a9c1b7dc4a09d69969aa3580bfdd173696adba12eda439dd39dd->leave($__internal_9bc183735905a9c1b7dc4a09d69969aa3580bfdd173696adba12eda439dd39dd_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
