<?php

/* :coleccion:edit.html.twig */
class __TwigTemplate_70050649bfe39c501989ec6c6b30494f9f0bfc4e61a765689fa46b0b24ce8cf1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":coleccion:edit.html.twig", 1);
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
        $__internal_8e0ec3e72077d69a5326300eae1fdc9ffa98515f9a4bc68c2874e8be65ded167 = $this->env->getExtension("native_profiler");
        $__internal_8e0ec3e72077d69a5326300eae1fdc9ffa98515f9a4bc68c2874e8be65ded167->enter($__internal_8e0ec3e72077d69a5326300eae1fdc9ffa98515f9a4bc68c2874e8be65ded167_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":coleccion:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8e0ec3e72077d69a5326300eae1fdc9ffa98515f9a4bc68c2874e8be65ded167->leave($__internal_8e0ec3e72077d69a5326300eae1fdc9ffa98515f9a4bc68c2874e8be65ded167_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_734075002476a025676156d9c91338692aa5a9b575d2f3342a3b9f9055782835 = $this->env->getExtension("native_profiler");
        $__internal_734075002476a025676156d9c91338692aa5a9b575d2f3342a3b9f9055782835->enter($__internal_734075002476a025676156d9c91338692aa5a9b575d2f3342a3b9f9055782835_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Editar Colección ";
        
        $__internal_734075002476a025676156d9c91338692aa5a9b575d2f3342a3b9f9055782835->leave($__internal_734075002476a025676156d9c91338692aa5a9b575d2f3342a3b9f9055782835_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_dcfb7b26e353f28c1a417c8437cc14d23266ba7221dcba6bdb9d4eebea02ff86 = $this->env->getExtension("native_profiler");
        $__internal_dcfb7b26e353f28c1a417c8437cc14d23266ba7221dcba6bdb9d4eebea02ff86->enter($__internal_dcfb7b26e353f28c1a417c8437cc14d23266ba7221dcba6bdb9d4eebea02ff86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "<h3 align=\"center\"> Editar Colecciones  </h3>
<hr />
    <div class=\"x_content\">
        <br />
        ";
        // line 9
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_start', array("attr" => array("id" => "coleccion", "class" => "form-horizontal form-label-left")));
        echo " 
        ";
        // line 10
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'errors');
        echo "

        <div class=\"form-group\">
            <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"descripcion\">";
        // line 13
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "descripcion", array()), 'label');
        echo " <span class=\"required\">*</span></label>
            <div class=\"col-md-6 col-sm-6 col-xs-12\">
                ";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "descripcion", array()), 'errors');
        echo "                
                ";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "descripcion", array()), 'widget', array("attr" => array("class" => "form-control col-md-7 col-xs-12")));
        echo "                
            </div>
        </div>

        <div class=\"form-group\">
            <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"libro\">";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "categoria", array()), 'label');
        echo " <span class=\"required\">*</span></label>
            <div class=\"col-md-6 col-sm-6 col-xs-12\">
                ";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "categoria", array()), 'errors');
        echo "                
                ";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "categoria", array()), 'widget', array("attr" => array("class" => "form-control col-md-7 col-xs-12")));
        echo "                
            </div>
        </div>                      
    </div>
<table>
<tr>
<th>             
    <button type=\"submit\" class=\"btn btn-success\">Modificar</button>     
    ";
        // line 32
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_end');
        echo "                  
</th> 
<th>
    ";
        // line 35
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
    <button type=\"submit\" class=\"btn btn-danger\"><i class=\"fa fa-trash\"></i> Eliminar </button>
    ";
        // line 37
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
</th> 
<th>             
    <a href=\"";
        // line 40
        echo $this->env->getExtension('routing')->getPath("coleccion_index");
        echo "\"><input type=\"button\" class=\"btn btn-primary\" value=\"Volver\"></a>
</th>   
<tr> 
</table>   
";
        
        $__internal_dcfb7b26e353f28c1a417c8437cc14d23266ba7221dcba6bdb9d4eebea02ff86->leave($__internal_dcfb7b26e353f28c1a417c8437cc14d23266ba7221dcba6bdb9d4eebea02ff86_prof);

    }

    public function getTemplateName()
    {
        return ":coleccion:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  123 => 40,  117 => 37,  112 => 35,  106 => 32,  95 => 24,  91 => 23,  86 => 21,  78 => 16,  74 => 15,  69 => 13,  63 => 10,  59 => 9,  53 => 5,  47 => 4,  35 => 2,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* {% block title %} Editar Colección {% endblock %} */
/* */
/* {% block body %}*/
/* <h3 align="center"> Editar Colecciones  </h3>*/
/* <hr />*/
/*     <div class="x_content">*/
/*         <br />*/
/*         {{ form_start(edit_form, { 'attr': {'id':'coleccion','class': 'form-horizontal form-label-left'} }) }} */
/*         {{ form_errors(edit_form) }}*/
/* */
/*         <div class="form-group">*/
/*             <label class="control-label col-md-3 col-sm-3 col-xs-12" for="descripcion">{{ form_label(edit_form.descripcion) }} <span class="required">*</span></label>*/
/*             <div class="col-md-6 col-sm-6 col-xs-12">*/
/*                 {{ form_errors(edit_form.descripcion) }}                */
/*                 {{form_widget(edit_form.descripcion,{ 'attr': {'class': 'form-control col-md-7 col-xs-12'} } ) }}                */
/*             </div>*/
/*         </div>*/
/* */
/*         <div class="form-group">*/
/*             <label class="control-label col-md-3 col-sm-3 col-xs-12" for="libro">{{ form_label(edit_form.categoria) }} <span class="required">*</span></label>*/
/*             <div class="col-md-6 col-sm-6 col-xs-12">*/
/*                 {{ form_errors(edit_form.categoria) }}                */
/*                 {{form_widget(edit_form.categoria,{ 'attr': {'class': 'form-control col-md-7 col-xs-12'} } ) }}                */
/*             </div>*/
/*         </div>                      */
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
/*     <a href="{{ path('coleccion_index') }}"><input type="button" class="btn btn-primary" value="Volver"></a>*/
/* </th>   */
/* <tr> */
/* </table>   */
/* {% endblock %}*/
/* */
