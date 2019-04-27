<?php

/* ::layout.thml.twig */
class __TwigTemplate_3fca7dbd616366c2bccc6e08d251bf2d39557108195f85fa291e0a7c8f75bc7c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_df8905cd359b030ce15b167f0818f5811ff6e318aefe06812b413dd4d2ccf8e5 = $this->env->getExtension("native_profiler");
        $__internal_df8905cd359b030ce15b167f0818f5811ff6e318aefe06812b413dd4d2ccf8e5->enter($__internal_df8905cd359b030ce15b167f0818f5811ff6e318aefe06812b413dd4d2ccf8e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::layout.thml.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 23
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 26
        $this->displayBlock('body', $context, $blocks);
        // line 29
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 35
        echo "    </body>
</html>";
        
        $__internal_df8905cd359b030ce15b167f0818f5811ff6e318aefe06812b413dd4d2ccf8e5->leave($__internal_df8905cd359b030ce15b167f0818f5811ff6e318aefe06812b413dd4d2ccf8e5_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_32455770e7857f2bdb5af3d2e27068fccb78591b51581dc9bd9381d2dcccc4df = $this->env->getExtension("native_profiler");
        $__internal_32455770e7857f2bdb5af3d2e27068fccb78591b51581dc9bd9381d2dcccc4df->enter($__internal_32455770e7857f2bdb5af3d2e27068fccb78591b51581dc9bd9381d2dcccc4df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Editorial Laboratorio Educativo";
        
        $__internal_32455770e7857f2bdb5af3d2e27068fccb78591b51581dc9bd9381d2dcccc4df->leave($__internal_32455770e7857f2bdb5af3d2e27068fccb78591b51581dc9bd9381d2dcccc4df_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_779588743188ab0a82db3c0b11f38eeb31088cd062872bfb3ee715740dae120e = $this->env->getExtension("native_profiler");
        $__internal_779588743188ab0a82db3c0b11f38eeb31088cd062872bfb3ee715740dae120e->enter($__internal_779588743188ab0a82db3c0b11f38eeb31088cd062872bfb3ee715740dae120e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "        <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/public/css/style.css"), "html", null, true);
        echo "\"/>
        <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/public/css/bootstrap.css"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/public/css/bootstrap.min.css"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/public/css/bootstrap-theme.css"), "html", null, true);
        echo "\" />       
        <link rel=\"stylesheet\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/public/css/bootstrap-theme.css.map"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/public/css/bootstrap-theme.min.css"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/public/css/bootstrap-theme.min.css.map"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/public/css/bootstrap.css.map"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/public/css/bootstrap.min.css.map"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/public/css/glyphicons-halflings-regular.eot"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/public/css/glyphicons-halflings-regular.ttf"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/public/css/glyphicons-halflings-regular.woff"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/public/css/glyphicons-halflings-regular.woff2"), "html", null, true);
        echo "\" />


        ";
        
        $__internal_779588743188ab0a82db3c0b11f38eeb31088cd062872bfb3ee715740dae120e->leave($__internal_779588743188ab0a82db3c0b11f38eeb31088cd062872bfb3ee715740dae120e_prof);

    }

    // line 26
    public function block_body($context, array $blocks = array())
    {
        $__internal_11f6abe28c92c87a9668c8616db4fe3386fd775b820bfbc002ead1cb6f2c7ee2 = $this->env->getExtension("native_profiler");
        $__internal_11f6abe28c92c87a9668c8616db4fe3386fd775b820bfbc002ead1cb6f2c7ee2->enter($__internal_11f6abe28c92c87a9668c8616db4fe3386fd775b820bfbc002ead1cb6f2c7ee2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 27
        echo "           ";
        echo twig_include($this->env, $context, "menu.html.twig");
        echo "         
        ";
        
        $__internal_11f6abe28c92c87a9668c8616db4fe3386fd775b820bfbc002ead1cb6f2c7ee2->leave($__internal_11f6abe28c92c87a9668c8616db4fe3386fd775b820bfbc002ead1cb6f2c7ee2_prof);

    }

    // line 29
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_33f81bce15ccb19485d48db838b028b52c3b0ee8a3866b4c694638e798313730 = $this->env->getExtension("native_profiler");
        $__internal_33f81bce15ccb19485d48db838b028b52c3b0ee8a3866b4c694638e798313730->enter($__internal_33f81bce15ccb19485d48db838b028b52c3b0ee8a3866b4c694638e798313730_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 30
        echo "        <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/public/js/bootstrap.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/public/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/public/js/jquery-3.4.0.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/public/js/npm.js"), "html", null, true);
        echo "\"></script>
        ";
        
        $__internal_33f81bce15ccb19485d48db838b028b52c3b0ee8a3866b4c694638e798313730->leave($__internal_33f81bce15ccb19485d48db838b028b52c3b0ee8a3866b4c694638e798313730_prof);

    }

    public function getTemplateName()
    {
        return "::layout.thml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  171 => 33,  167 => 32,  163 => 31,  158 => 30,  152 => 29,  142 => 27,  136 => 26,  125 => 19,  121 => 18,  117 => 17,  113 => 16,  109 => 15,  105 => 14,  101 => 13,  97 => 12,  93 => 11,  89 => 10,  85 => 9,  81 => 8,  76 => 7,  70 => 6,  58 => 5,  50 => 35,  47 => 29,  45 => 26,  38 => 23,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Editorial Laboratorio Educativo{% endblock %}</title>*/
/*         {% block stylesheets %}*/
/*         <link rel="stylesheet" href="{{ asset('bundles/public/css/style.css')}}"/>*/
/*         <link rel="stylesheet" href="{{ asset('bundles/public/css/bootstrap.css') }}" />*/
/*         <link rel="stylesheet" href="{{ asset('bundles/public/css/bootstrap.min.css') }}" />*/
/*         <link rel="stylesheet" href="{{ asset('bundles/public/css/bootstrap-theme.css') }}" />       */
/*         <link rel="stylesheet" href="{{ asset('bundles/public/css/bootstrap-theme.css.map') }}" />*/
/*         <link rel="stylesheet" href="{{ asset('bundles/public/css/bootstrap-theme.min.css') }}" />*/
/*         <link rel="stylesheet" href="{{ asset('bundles/public/css/bootstrap-theme.min.css.map') }}" />*/
/*         <link rel="stylesheet" href="{{ asset('bundles/public/css/bootstrap.css.map') }}" />*/
/*         <link rel="stylesheet" href="{{ asset('bundles/public/css/bootstrap.min.css.map') }}" />*/
/*         <link rel="stylesheet" href="{{ asset('bundles/public/css/glyphicons-halflings-regular.eot') }}" />*/
/*         <link rel="stylesheet" href="{{ asset('bundles/public/css/glyphicons-halflings-regular.ttf') }}" />*/
/*         <link rel="stylesheet" href="{{ asset('bundles/public/css/glyphicons-halflings-regular.woff') }}" />*/
/*         <link rel="stylesheet" href="{{ asset('bundles/public/css/glyphicons-halflings-regular.woff2') }}" />*/
/* */
/* */
/*         {% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}*/
/*            {{ include('menu.html.twig') }}         */
/*         {% endblock %}*/
/*         {% block javascripts %}*/
/*         <script src="{{ asset('bundles/public/js/bootstrap.js')}}"></script>*/
/*         <script src="{{ asset('bundles/public/js/bootstrap.min.js')}}"></script>*/
/*         <script src="{{ asset('bundles/public/js/jquery-3.4.0.min.js')}}"></script>*/
/*         <script src="{{ asset('bundles/public/js/npm.js')}}"></script>*/
/*         {% endblock %}*/
/*     </body>*/
/* </html>*/
