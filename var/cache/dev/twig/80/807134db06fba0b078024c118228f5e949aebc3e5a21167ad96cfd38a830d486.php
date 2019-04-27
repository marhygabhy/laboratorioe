<?php

/* :solicitud:edit.html.twig */
class __TwigTemplate_25ce0c4a761f63a31852649c8f3bb4163d609b5875a922638a2c81eb28ba21dc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":solicitud:edit.html.twig", 1);
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
        $__internal_8835738b75148e71899b030ea9c28f1134c6e72ea5164786884b993e6cf5f398 = $this->env->getExtension("native_profiler");
        $__internal_8835738b75148e71899b030ea9c28f1134c6e72ea5164786884b993e6cf5f398->enter($__internal_8835738b75148e71899b030ea9c28f1134c6e72ea5164786884b993e6cf5f398_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":solicitud:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8835738b75148e71899b030ea9c28f1134c6e72ea5164786884b993e6cf5f398->leave($__internal_8835738b75148e71899b030ea9c28f1134c6e72ea5164786884b993e6cf5f398_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_52b297645252abf626df085dd16243b5afb0929daf95fa987cfdb196d276dd43 = $this->env->getExtension("native_profiler");
        $__internal_52b297645252abf626df085dd16243b5afb0929daf95fa987cfdb196d276dd43->enter($__internal_52b297645252abf626df085dd16243b5afb0929daf95fa987cfdb196d276dd43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Editar Solicitud ";
        
        $__internal_52b297645252abf626df085dd16243b5afb0929daf95fa987cfdb196d276dd43->leave($__internal_52b297645252abf626df085dd16243b5afb0929daf95fa987cfdb196d276dd43_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_34ed75477eb20707cc4a0750fce8c57838dfa67dd2b09b922db2240b025bc134 = $this->env->getExtension("native_profiler");
        $__internal_34ed75477eb20707cc4a0750fce8c57838dfa67dd2b09b922db2240b025bc134->enter($__internal_34ed75477eb20707cc4a0750fce8c57838dfa67dd2b09b922db2240b025bc134_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<h3 align=\"center\"> Modificar Solicitud  </h3>
<hr />
    <div class=\"x_content\">
        <br />
        ";
        // line 8
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_start', array("attr" => array("id" => "solicitud", "class" => "form-horizontal form-label-left")));
        echo " 
        ";
        // line 9
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'errors');
        echo "

        <div class=\"form-group\">
            <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"cliente\">";
        // line 12
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "cliente", array()), 'label');
        echo " <span class=\"required\">*</span></label>
            <div class=\"col-md-6 col-sm-6 col-xs-12\">
                ";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "cliente", array()), 'errors');
        echo "                
                ";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "cliente", array()), 'widget', array("attr" => array("class" => "form-control col-md-7 col-xs-12")));
        echo "                
            </div>
        </div>

        <div class=\"form-group\">
            <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"libro\">";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "libro", array()), 'label');
        echo "</label>
            <div class=\"col-md-6 col-sm-6 col-xs-12\">
                ";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "libro", array()), 'errors');
        echo "                
                ";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "libro", array()), 'widget');
        echo "                
            </div>
        </div>
    </div>
<table>
<tr>
<th>             
    <button type=\"submit\" class=\"btn btn-success\">Modificar</button>     
    ";
        // line 31
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_end');
        echo "                  
</th> 
<th>
    ";
        // line 34
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
    <button type=\"submit\" class=\"btn btn-danger\"><i class=\"fa fa-trash\"></i> Eliminar </button>
    ";
        // line 36
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
</th> 
<th>             
    <a href=\"";
        // line 39
        echo $this->env->getExtension('routing')->getPath("solicitud_index");
        echo "\"><input type=\"button\" class=\"btn btn-primary\" value=\"Volver\"></a>
</th>   
<tr> 
</table> 
";
        
        $__internal_34ed75477eb20707cc4a0750fce8c57838dfa67dd2b09b922db2240b025bc134->leave($__internal_34ed75477eb20707cc4a0750fce8c57838dfa67dd2b09b922db2240b025bc134_prof);

    }

    public function getTemplateName()
    {
        return ":solicitud:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  123 => 39,  117 => 36,  112 => 34,  106 => 31,  95 => 23,  91 => 22,  86 => 20,  78 => 15,  74 => 14,  69 => 12,  63 => 9,  59 => 8,  53 => 4,  47 => 3,  35 => 2,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* {% block title %} Editar Solicitud {% endblock %} */
/* {% block body %}*/
/* <h3 align="center"> Modificar Solicitud  </h3>*/
/* <hr />*/
/*     <div class="x_content">*/
/*         <br />*/
/*         {{ form_start(edit_form, { 'attr': {'id':'solicitud','class': 'form-horizontal form-label-left'} }) }} */
/*         {{ form_errors(edit_form) }}*/
/* */
/*         <div class="form-group">*/
/*             <label class="control-label col-md-3 col-sm-3 col-xs-12" for="cliente">{{ form_label(edit_form.cliente) }} <span class="required">*</span></label>*/
/*             <div class="col-md-6 col-sm-6 col-xs-12">*/
/*                 {{ form_errors(edit_form.cliente) }}                */
/*                 {{form_widget(edit_form.cliente,{ 'attr': {'class': 'form-control col-md-7 col-xs-12'} } ) }}                */
/*             </div>*/
/*         </div>*/
/* */
/*         <div class="form-group">*/
/*             <label class="control-label col-md-3 col-sm-3 col-xs-12" for="libro">{{ form_label(edit_form.libro) }}</label>*/
/*             <div class="col-md-6 col-sm-6 col-xs-12">*/
/*                 {{ form_errors(edit_form.libro) }}                */
/*                 {{form_widget(edit_form.libro) }}                */
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
/*     <a href="{{ path('solicitud_index') }}"><input type="button" class="btn btn-primary" value="Volver"></a>*/
/* </th>   */
/* <tr> */
/* </table> */
/* {% endblock %}*/
