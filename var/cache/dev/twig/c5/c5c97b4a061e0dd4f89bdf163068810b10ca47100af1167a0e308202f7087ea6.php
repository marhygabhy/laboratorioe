<?php

/* :solicitud:edit.html.twig */
class __TwigTemplate_7f28cdbf4b4af8da83f347a9e1abd5ce7356679291bc256cb047e138133b0109 extends Twig_Template
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
        $__internal_1403c1d16e7758ec7a4897265fd9aeb51d02ec1658cf8816e0436e05e84e0eaa = $this->env->getExtension("native_profiler");
        $__internal_1403c1d16e7758ec7a4897265fd9aeb51d02ec1658cf8816e0436e05e84e0eaa->enter($__internal_1403c1d16e7758ec7a4897265fd9aeb51d02ec1658cf8816e0436e05e84e0eaa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":solicitud:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1403c1d16e7758ec7a4897265fd9aeb51d02ec1658cf8816e0436e05e84e0eaa->leave($__internal_1403c1d16e7758ec7a4897265fd9aeb51d02ec1658cf8816e0436e05e84e0eaa_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_29a8dae12f664db17f8130becb1575a9f78b5b77384350b3cc0f5e8d7c8feefc = $this->env->getExtension("native_profiler");
        $__internal_29a8dae12f664db17f8130becb1575a9f78b5b77384350b3cc0f5e8d7c8feefc->enter($__internal_29a8dae12f664db17f8130becb1575a9f78b5b77384350b3cc0f5e8d7c8feefc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Editar Solicitud ";
        
        $__internal_29a8dae12f664db17f8130becb1575a9f78b5b77384350b3cc0f5e8d7c8feefc->leave($__internal_29a8dae12f664db17f8130becb1575a9f78b5b77384350b3cc0f5e8d7c8feefc_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_a43d800f326e6c5a7922de2151885108dd4f5c133191f1b4264f2133aa04a196 = $this->env->getExtension("native_profiler");
        $__internal_a43d800f326e6c5a7922de2151885108dd4f5c133191f1b4264f2133aa04a196->enter($__internal_a43d800f326e6c5a7922de2151885108dd4f5c133191f1b4264f2133aa04a196_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        echo " <span class=\"required\">*</span></label>
            <div class=\"col-md-6 col-sm-6 col-xs-12\">
                ";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "libro", array()), 'errors');
        echo "                
                ";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "libro", array()), 'widget', array("attr" => array("class" => "form-control col-md-7 col-xs-12")));
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
        
        $__internal_a43d800f326e6c5a7922de2151885108dd4f5c133191f1b4264f2133aa04a196->leave($__internal_a43d800f326e6c5a7922de2151885108dd4f5c133191f1b4264f2133aa04a196_prof);

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
/*             <label class="control-label col-md-3 col-sm-3 col-xs-12" for="libro">{{ form_label(edit_form.libro) }} <span class="required">*</span></label>*/
/*             <div class="col-md-6 col-sm-6 col-xs-12">*/
/*                 {{ form_errors(edit_form.libro) }}                */
/*                 {{form_widget(edit_form.libro,{ 'attr': {'class': 'form-control col-md-7 col-xs-12'} } ) }}                */
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
/* */
