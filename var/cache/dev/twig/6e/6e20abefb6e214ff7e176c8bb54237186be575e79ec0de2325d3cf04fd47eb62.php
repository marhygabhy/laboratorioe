<?php

/* :pais:edit.html.twig */
class __TwigTemplate_1347b76831bff76197c2b3c9f968bd31f5dfeedadc1af7ea7dc08f032e645049 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":pais:edit.html.twig", 1);
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
        $__internal_5bfda154aa958dfcaa7587bc240a285136843f977f5271d219e91103a765ac32 = $this->env->getExtension("native_profiler");
        $__internal_5bfda154aa958dfcaa7587bc240a285136843f977f5271d219e91103a765ac32->enter($__internal_5bfda154aa958dfcaa7587bc240a285136843f977f5271d219e91103a765ac32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":pais:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5bfda154aa958dfcaa7587bc240a285136843f977f5271d219e91103a765ac32->leave($__internal_5bfda154aa958dfcaa7587bc240a285136843f977f5271d219e91103a765ac32_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_93eb2eb380b232dcb6f37ffd028376e1c7484989bd625ca2d51834a64f55d29e = $this->env->getExtension("native_profiler");
        $__internal_93eb2eb380b232dcb6f37ffd028376e1c7484989bd625ca2d51834a64f55d29e->enter($__internal_93eb2eb380b232dcb6f37ffd028376e1c7484989bd625ca2d51834a64f55d29e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Editar País ";
        
        $__internal_93eb2eb380b232dcb6f37ffd028376e1c7484989bd625ca2d51834a64f55d29e->leave($__internal_93eb2eb380b232dcb6f37ffd028376e1c7484989bd625ca2d51834a64f55d29e_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_7e2da4b8914e21398303ba649f46f6bd4fcdd85bcc7b5147396fb517f38bd073 = $this->env->getExtension("native_profiler");
        $__internal_7e2da4b8914e21398303ba649f46f6bd4fcdd85bcc7b5147396fb517f38bd073->enter($__internal_7e2da4b8914e21398303ba649f46f6bd4fcdd85bcc7b5147396fb517f38bd073_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<h3 align=\"center\"> Editar País  </h3>
<hr />
    <div class=\"x_content\">
        <br />
        ";
        // line 8
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_start', array("attr" => array("id" => "pais", "class" => "form-horizontal form-label-left")));
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
        echo $this->env->getExtension('routing')->getPath("pais_index");
        echo "\"><input type=\"button\" class=\"btn btn-primary\" value=\"Volver\"></a>
</th>   
<tr> 
</table> 

";
        
        $__internal_7e2da4b8914e21398303ba649f46f6bd4fcdd85bcc7b5147396fb517f38bd073->leave($__internal_7e2da4b8914e21398303ba649f46f6bd4fcdd85bcc7b5147396fb517f38bd073_prof);

    }

    public function getTemplateName()
    {
        return ":pais:edit.html.twig";
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
/* {% block title %} Editar País {% endblock %}*/
/* {% block body %}*/
/* <h3 align="center"> Editar País  </h3>*/
/* <hr />*/
/*     <div class="x_content">*/
/*         <br />*/
/*         {{ form_start(edit_form, { 'attr': {'id':'pais','class': 'form-horizontal form-label-left'} }) }} */
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
/*     <a href="{{ path('pais_index') }}"><input type="button" class="btn btn-primary" value="Volver"></a>*/
/* </th>   */
/* <tr> */
/* </table> */
/* */
/* {% endblock %}*/
/* */
