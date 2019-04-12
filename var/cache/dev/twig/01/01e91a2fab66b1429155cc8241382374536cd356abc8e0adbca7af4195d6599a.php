<?php

/* :categoria:edit.html.twig */
class __TwigTemplate_dc96cd145def209114375cf3581b64bfd34c3692ebbcc95594cda024f97763f0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":categoria:edit.html.twig", 1);
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
        $__internal_5fc226305fdde44a17d2922d279b7f680c23bbc414e624118aadfcadb1b4f6d7 = $this->env->getExtension("native_profiler");
        $__internal_5fc226305fdde44a17d2922d279b7f680c23bbc414e624118aadfcadb1b4f6d7->enter($__internal_5fc226305fdde44a17d2922d279b7f680c23bbc414e624118aadfcadb1b4f6d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":categoria:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5fc226305fdde44a17d2922d279b7f680c23bbc414e624118aadfcadb1b4f6d7->leave($__internal_5fc226305fdde44a17d2922d279b7f680c23bbc414e624118aadfcadb1b4f6d7_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_37341a6d21421f6add933ddddf252301d8d39fc58c1561479c7a9f663c0e3a31 = $this->env->getExtension("native_profiler");
        $__internal_37341a6d21421f6add933ddddf252301d8d39fc58c1561479c7a9f663c0e3a31->enter($__internal_37341a6d21421f6add933ddddf252301d8d39fc58c1561479c7a9f663c0e3a31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Editar Usuario ";
        
        $__internal_37341a6d21421f6add933ddddf252301d8d39fc58c1561479c7a9f663c0e3a31->leave($__internal_37341a6d21421f6add933ddddf252301d8d39fc58c1561479c7a9f663c0e3a31_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_89fd444ebf36ec30c1bf5554889e004a3051d07410e700bbdb13ce396a7f4ee5 = $this->env->getExtension("native_profiler");
        $__internal_89fd444ebf36ec30c1bf5554889e004a3051d07410e700bbdb13ce396a7f4ee5->enter($__internal_89fd444ebf36ec30c1bf5554889e004a3051d07410e700bbdb13ce396a7f4ee5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<h3 align=\"center\"> Modificar Categorias  </h3>
<hr />
<div class=\"x_content\">
        <br />
        ";
        // line 8
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_start', array("attr" => array("id" => "categoria", "class" => "form-horizontal form-label-left")));
        echo " 
        ";
        // line 9
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'errors');
        echo "

        <div class=\"form-group\">
            <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"descripcion\">";
        // line 12
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "descripcion", array()), 'label');
        echo " <span class=\"required\">*</span></label>
            <div class=\"col-md-6 col-sm-6 col-xs-12\">
                ";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "descripcion", array()), 'errors');
        echo "                
                ";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "descripcion", array()), 'widget', array("attr" => array("class" => "form-control col-md-7 col-xs-12")));
        echo "                
            </div>
        </div>
    </div>
<table>
<tr>
<th>             
    <button type=\"submit\" class=\"btn btn-success\">Modificar</button>     
    ";
        // line 23
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_end');
        echo "                  
</th> 
<th>
    ";
        // line 26
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
    <button type=\"submit\" class=\"btn btn-danger\"><i class=\"fa fa-trash\"></i> Eliminar </button>
    ";
        // line 28
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
</th> 
<th>             
    <a href=\"";
        // line 31
        echo $this->env->getExtension('routing')->getPath("categoria_index");
        echo "\"><input type=\"button\" class=\"btn btn-primary\" value=\"Volver\"></a>
</th>   
<tr> 
</table>  
";
        
        $__internal_89fd444ebf36ec30c1bf5554889e004a3051d07410e700bbdb13ce396a7f4ee5->leave($__internal_89fd444ebf36ec30c1bf5554889e004a3051d07410e700bbdb13ce396a7f4ee5_prof);

    }

    public function getTemplateName()
    {
        return ":categoria:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 31,  100 => 28,  95 => 26,  89 => 23,  78 => 15,  74 => 14,  69 => 12,  63 => 9,  59 => 8,  53 => 4,  47 => 3,  35 => 2,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* {% block title %} Editar Usuario {% endblock %}*/
/* {% block body %}*/
/* <h3 align="center"> Modificar Categorias  </h3>*/
/* <hr />*/
/* <div class="x_content">*/
/*         <br />*/
/*         {{ form_start(edit_form, { 'attr': {'id':'categoria','class': 'form-horizontal form-label-left'} }) }} */
/*         {{ form_errors(edit_form) }}*/
/* */
/*         <div class="form-group">*/
/*             <label class="control-label col-md-3 col-sm-3 col-xs-12" for="descripcion">{{ form_label(edit_form.descripcion) }} <span class="required">*</span></label>*/
/*             <div class="col-md-6 col-sm-6 col-xs-12">*/
/*                 {{ form_errors(edit_form.descripcion) }}                */
/*                 {{form_widget(edit_form.descripcion,{ 'attr': {'class': 'form-control col-md-7 col-xs-12'} } ) }}                */
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* <table>*/
/* <tr>*/
/* <th>             */
/*     <button type="submit" class="btn btn-success">Modificar</button>     */
/*     {{ form_end(edit_form) }}                  */
/* </th> */
/* <th>*/
/*     {{ form_start(delete_form) }}*/
/*     <button type="submit" class="btn btn-danger"><i class="fa fa-trash"></i> Eliminar </button>*/
/*     {{ form_end(delete_form) }}*/
/* </th> */
/* <th>             */
/*     <a href="{{ path('categoria_index') }}"><input type="button" class="btn btn-primary" value="Volver"></a>*/
/* </th>   */
/* <tr> */
/* </table>  */
/* {% endblock %}*/
/* */
