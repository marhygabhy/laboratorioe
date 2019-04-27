<?php

/* :categoria:edit.html.twig */
class __TwigTemplate_640e928fc10e87600acc61ec7b35b3cdf5f8bebe09ba69f15545f39c64f0af2b extends Twig_Template
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
        $__internal_9671082e98ba8b1f05ac2661f71431281adadea94cb7cdbabc7983992ac2c839 = $this->env->getExtension("native_profiler");
        $__internal_9671082e98ba8b1f05ac2661f71431281adadea94cb7cdbabc7983992ac2c839->enter($__internal_9671082e98ba8b1f05ac2661f71431281adadea94cb7cdbabc7983992ac2c839_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":categoria:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9671082e98ba8b1f05ac2661f71431281adadea94cb7cdbabc7983992ac2c839->leave($__internal_9671082e98ba8b1f05ac2661f71431281adadea94cb7cdbabc7983992ac2c839_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_f87f45869c4f10ab4d103fa7532ff767424e404f179bad5d2f6fd1214ed1da23 = $this->env->getExtension("native_profiler");
        $__internal_f87f45869c4f10ab4d103fa7532ff767424e404f179bad5d2f6fd1214ed1da23->enter($__internal_f87f45869c4f10ab4d103fa7532ff767424e404f179bad5d2f6fd1214ed1da23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Editar Usuario ";
        
        $__internal_f87f45869c4f10ab4d103fa7532ff767424e404f179bad5d2f6fd1214ed1da23->leave($__internal_f87f45869c4f10ab4d103fa7532ff767424e404f179bad5d2f6fd1214ed1da23_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_c4ed818839af7b4f5ca8fbe208e376477cd99c79a0b7746cdd2dd491bca8969e = $this->env->getExtension("native_profiler");
        $__internal_c4ed818839af7b4f5ca8fbe208e376477cd99c79a0b7746cdd2dd491bca8969e->enter($__internal_c4ed818839af7b4f5ca8fbe208e376477cd99c79a0b7746cdd2dd491bca8969e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_c4ed818839af7b4f5ca8fbe208e376477cd99c79a0b7746cdd2dd491bca8969e->leave($__internal_c4ed818839af7b4f5ca8fbe208e376477cd99c79a0b7746cdd2dd491bca8969e_prof);

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
