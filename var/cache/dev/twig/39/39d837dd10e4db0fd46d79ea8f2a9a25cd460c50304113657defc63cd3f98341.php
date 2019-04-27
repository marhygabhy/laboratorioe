<?php

/* :coleccion:new.html.twig */
class __TwigTemplate_8b90f2a86f0dcf71e2c8ab057cdd6245287989002e04521848a1ae43258eb51a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":coleccion:new.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3db996be334b68c9420a1d97c1668c4327246535c63b3522996c5d5c5508d9e3 = $this->env->getExtension("native_profiler");
        $__internal_3db996be334b68c9420a1d97c1668c4327246535c63b3522996c5d5c5508d9e3->enter($__internal_3db996be334b68c9420a1d97c1668c4327246535c63b3522996c5d5c5508d9e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":coleccion:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3db996be334b68c9420a1d97c1668c4327246535c63b3522996c5d5c5508d9e3->leave($__internal_3db996be334b68c9420a1d97c1668c4327246535c63b3522996c5d5c5508d9e3_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_ac57de4756766adfb231cc6bef2de71dd39f3b5801983bfe559d2940b11ba506 = $this->env->getExtension("native_profiler");
        $__internal_ac57de4756766adfb231cc6bef2de71dd39f3b5801983bfe559d2940b11ba506->enter($__internal_ac57de4756766adfb231cc6bef2de71dd39f3b5801983bfe559d2940b11ba506_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Crear Colección ";
        
        $__internal_ac57de4756766adfb231cc6bef2de71dd39f3b5801983bfe559d2940b11ba506->leave($__internal_ac57de4756766adfb231cc6bef2de71dd39f3b5801983bfe559d2940b11ba506_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_953f22dd72c21668ea25d4f38dd4beda962cc877595571e6d3f312af33cb4448 = $this->env->getExtension("native_profiler");
        $__internal_953f22dd72c21668ea25d4f38dd4beda962cc877595571e6d3f312af33cb4448->enter($__internal_953f22dd72c21668ea25d4f38dd4beda962cc877595571e6d3f312af33cb4448_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<h3 align=\"center\"> Crear Colección  </h3>
<hr />
";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("id" => "coleccion", "class" => "form-horizontal form-label-left")));
        echo " 
        ";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "

        <div class=\"form-group\">
            <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"categoria\">";
        // line 10
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "categoria", array()), 'label');
        echo " <span class=\"required\">*</span></label>
            <div class=\"col-md-6 col-sm-6 col-xs-12\">
                ";
        // line 12
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "categoria", array()), 'errors');
        echo "                
                ";
        // line 13
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "categoria", array()), 'widget', array("attr" => array("class" => "form-control col-md-7 col-xs-12")));
        echo "                
            </div>
        </div>
        <div class=\"form-group\">
            <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"libro\">";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "descripcion", array()), 'label');
        echo " <span class=\"required\">*</span></label>
            <div class=\"col-md-6 col-sm-6 col-xs-12\">
                ";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "descripcion", array()), 'errors');
        echo "                
                ";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "descripcion", array()), 'widget', array("attr" => array("class" => "form-control col-md-7 col-xs-12")));
        echo "                
            </div>
        </div>
<table>
<tr>
<th>             
    <button type=\"submit\" class=\"btn btn-success\">Registrar</button>
</th> 
<th>             
    <a href=\"";
        // line 29
        echo $this->env->getExtension('routing')->getPath("coleccion_index");
        echo "\"><input type=\"button\" class=\"btn btn-primary\" value=\"Volver\"></a>
</th>   
<tr> 
</table> 
        ";
        // line 33
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "                           
    </div>
";
        
        $__internal_953f22dd72c21668ea25d4f38dd4beda962cc877595571e6d3f312af33cb4448->leave($__internal_953f22dd72c21668ea25d4f38dd4beda962cc877595571e6d3f312af33cb4448_prof);

    }

    public function getTemplateName()
    {
        return ":coleccion:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  111 => 33,  104 => 29,  92 => 20,  88 => 19,  83 => 17,  76 => 13,  72 => 12,  67 => 10,  61 => 7,  57 => 6,  53 => 4,  47 => 3,  35 => 2,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* {% block title %} Crear Colección {% endblock %}*/
/* {% block body %}*/
/* <h3 align="center"> Crear Colección  </h3>*/
/* <hr />*/
/* {{ form_start(form, { 'attr': {'id':'coleccion','class': 'form-horizontal form-label-left'} }) }} */
/*         {{ form_errors(form) }}*/
/* */
/*         <div class="form-group">*/
/*             <label class="control-label col-md-3 col-sm-3 col-xs-12" for="categoria">{{ form_label(form.categoria) }} <span class="required">*</span></label>*/
/*             <div class="col-md-6 col-sm-6 col-xs-12">*/
/*                 {{ form_errors(form.categoria) }}                */
/*                 {{form_widget(form.categoria,{ 'attr': {'class': 'form-control col-md-7 col-xs-12'} } ) }}                */
/*             </div>*/
/*         </div>*/
/*         <div class="form-group">*/
/*             <label class="control-label col-md-3 col-sm-3 col-xs-12" for="libro">{{ form_label(form.descripcion) }} <span class="required">*</span></label>*/
/*             <div class="col-md-6 col-sm-6 col-xs-12">*/
/*                 {{ form_errors(form.descripcion) }}                */
/*                 {{form_widget(form.descripcion,{ 'attr': {'class': 'form-control col-md-7 col-xs-12'} } ) }}                */
/*             </div>*/
/*         </div>*/
/* <table>*/
/* <tr>*/
/* <th>             */
/*     <button type="submit" class="btn btn-success">Registrar</button>*/
/* </th> */
/* <th>             */
/*     <a href="{{ path('coleccion_index') }}"><input type="button" class="btn btn-primary" value="Volver"></a>*/
/* </th>   */
/* <tr> */
/* </table> */
/*         {{ form_end(form) }}                           */
/*     </div>*/
/* {% endblock %}*/
/* */
