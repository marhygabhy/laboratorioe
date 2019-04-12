<?php

/* :usuario:edit.html.twig */
class __TwigTemplate_cf62c691cd947e0b0f8684d9dc44353a3d87dada6a5b27365ae3570c417220a8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":usuario:edit.html.twig", 1);
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
        $__internal_2d043a5d92a3ac1fe197830862c17d0d22266255c4c3abfa28b5216917c1c434 = $this->env->getExtension("native_profiler");
        $__internal_2d043a5d92a3ac1fe197830862c17d0d22266255c4c3abfa28b5216917c1c434->enter($__internal_2d043a5d92a3ac1fe197830862c17d0d22266255c4c3abfa28b5216917c1c434_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":usuario:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2d043a5d92a3ac1fe197830862c17d0d22266255c4c3abfa28b5216917c1c434->leave($__internal_2d043a5d92a3ac1fe197830862c17d0d22266255c4c3abfa28b5216917c1c434_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_895cc35ecf1eae5a9c8be36d3d2197fe19f4fbcaa8a9e97b4d1f031f71005ae1 = $this->env->getExtension("native_profiler");
        $__internal_895cc35ecf1eae5a9c8be36d3d2197fe19f4fbcaa8a9e97b4d1f031f71005ae1->enter($__internal_895cc35ecf1eae5a9c8be36d3d2197fe19f4fbcaa8a9e97b4d1f031f71005ae1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Editar Usuario ";
        
        $__internal_895cc35ecf1eae5a9c8be36d3d2197fe19f4fbcaa8a9e97b4d1f031f71005ae1->leave($__internal_895cc35ecf1eae5a9c8be36d3d2197fe19f4fbcaa8a9e97b4d1f031f71005ae1_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_663369d9bc6fcc63ae63c5469e96189f7dd3ef29c43a13bbad542a01a111db96 = $this->env->getExtension("native_profiler");
        $__internal_663369d9bc6fcc63ae63c5469e96189f7dd3ef29c43a13bbad542a01a111db96->enter($__internal_663369d9bc6fcc63ae63c5469e96189f7dd3ef29c43a13bbad542a01a111db96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<h3 align=\"center\"> Editar Usuario  </h3>
<hr />
    <div class=\"x_content\">
        <br />
        ";
        // line 8
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_start', array("attr" => array("id" => "usuario", "class" => "form-horizontal form-label-left")));
        echo " 
        ";
        // line 9
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'errors');
        echo "

        <div class=\"form-group\">
            <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"nombre\">";
        // line 12
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "nombre", array()), 'label');
        echo " <span class=\"required\">*</span></label>
            <div class=\"col-md-6 col-sm-6 col-xs-12\">
                ";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "nombre", array()), 'errors');
        echo "                
                ";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "nombre", array()), 'widget', array("attr" => array("class" => "form-control col-md-7 col-xs-12")));
        echo "                
            </div>
        </div>

        <div class=\"form-group\">
            <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"apellido\">";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "apellido", array()), 'label');
        echo " <span class=\"required\">*</span></label>
            <div class=\"col-md-6 col-sm-6 col-xs-12\">
                ";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "apellido", array()), 'errors');
        echo "                
                ";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "apellido", array()), 'widget', array("attr" => array("class" => "form-control col-md-7 col-xs-12")));
        echo "                
            </div>
        </div>

        <div class=\"form-group\">
            <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"correo\">";
        // line 28
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "correo", array()), 'label');
        echo " <span class=\"required\">*</span></label>
            <div class=\"col-md-6 col-sm-6 col-xs-12\">
                ";
        // line 30
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "correo", array()), 'errors');
        echo "                
                ";
        // line 31
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "correo", array()), 'widget', array("attr" => array("class" => "form-control col-md-7 col-xs-12")));
        echo "                
            </div>
        </div>

        <div class=\"form-group\">
            <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"usuario\">";
        // line 36
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'label');
        echo "</label>
            <div class=\"col-md-6 col-sm-6 col-xs-12\">
                ";
        // line 38
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "usuario", array()), 'errors');
        echo "                
                ";
        // line 39
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "usuario", array()), 'widget', array("attr" => array("class" => "form-control col-md-7 col-xs-12")));
        echo "                
            </div>
        </div>

        <div class=\"form-group\">
            <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"clave\">";
        // line 44
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "clave", array()), 'label');
        echo " <span class=\"required\">*</span></label>
            <div class=\"col-md-6 col-sm-6 col-xs-12\">
                ";
        // line 46
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "clave", array()), 'errors');
        echo "                
                ";
        // line 47
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "clave", array()), 'widget', array("attr" => array("class" => "form-control col-md-7 col-xs-12")));
        echo "                
            </div>
        </div>
<table>
<tr>
<th>             
    <button type=\"submit\" class=\"btn btn-success\">Modificar</button>     
    ";
        // line 54
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_end');
        echo "                  
</th> 
<th>
    ";
        // line 57
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
    <button type=\"submit\" class=\"btn btn-danger\"><i class=\"fa fa-trash\"></i> Eliminar </button>
    ";
        // line 59
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
</th> 
<th>             
    <a href=\"";
        // line 62
        echo $this->env->getExtension('routing')->getPath("usuario_index");
        echo "\"><input type=\"button\" class=\"btn btn-primary\" value=\"Volver\"></a>
</th>   
<tr> 
</table>
        ";
        // line 66
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_end');
        echo "                           
    </div>¡
";
        
        $__internal_663369d9bc6fcc63ae63c5469e96189f7dd3ef29c43a13bbad542a01a111db96->leave($__internal_663369d9bc6fcc63ae63c5469e96189f7dd3ef29c43a13bbad542a01a111db96_prof);

    }

    public function getTemplateName()
    {
        return ":usuario:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  180 => 66,  173 => 62,  167 => 59,  162 => 57,  156 => 54,  146 => 47,  142 => 46,  137 => 44,  129 => 39,  125 => 38,  120 => 36,  112 => 31,  108 => 30,  103 => 28,  95 => 23,  91 => 22,  86 => 20,  78 => 15,  74 => 14,  69 => 12,  63 => 9,  59 => 8,  53 => 4,  47 => 3,  35 => 2,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* {% block title %} Editar Usuario {% endblock %} */
/* {% block body %}*/
/* <h3 align="center"> Editar Usuario  </h3>*/
/* <hr />*/
/*     <div class="x_content">*/
/*         <br />*/
/*         {{ form_start(edit_form, { 'attr': {'id':'usuario','class': 'form-horizontal form-label-left'} }) }} */
/*         {{ form_errors(edit_form) }}*/
/* */
/*         <div class="form-group">*/
/*             <label class="control-label col-md-3 col-sm-3 col-xs-12" for="nombre">{{ form_label(edit_form.nombre) }} <span class="required">*</span></label>*/
/*             <div class="col-md-6 col-sm-6 col-xs-12">*/
/*                 {{ form_errors(edit_form.nombre) }}                */
/*                 {{form_widget(edit_form.nombre,{ 'attr': {'class': 'form-control col-md-7 col-xs-12'} } ) }}                */
/*             </div>*/
/*         </div>*/
/* */
/*         <div class="form-group">*/
/*             <label class="control-label col-md-3 col-sm-3 col-xs-12" for="apellido">{{ form_label(edit_form.apellido) }} <span class="required">*</span></label>*/
/*             <div class="col-md-6 col-sm-6 col-xs-12">*/
/*                 {{ form_errors(edit_form.apellido) }}                */
/*                 {{form_widget(edit_form.apellido,{ 'attr': {'class': 'form-control col-md-7 col-xs-12'} } ) }}                */
/*             </div>*/
/*         </div>*/
/* */
/*         <div class="form-group">*/
/*             <label class="control-label col-md-3 col-sm-3 col-xs-12" for="correo">{{ form_label(edit_form.correo) }} <span class="required">*</span></label>*/
/*             <div class="col-md-6 col-sm-6 col-xs-12">*/
/*                 {{ form_errors(edit_form.correo) }}                */
/*                 {{form_widget(edit_form.correo,{ 'attr': {'class': 'form-control col-md-7 col-xs-12'} } ) }}                */
/*             </div>*/
/*         </div>*/
/* */
/*         <div class="form-group">*/
/*             <label class="control-label col-md-3 col-sm-3 col-xs-12" for="usuario">{{ form_label(edit_form) }}</label>*/
/*             <div class="col-md-6 col-sm-6 col-xs-12">*/
/*                 {{ form_errors(edit_form.usuario) }}                */
/*                 {{form_widget(edit_form.usuario,{ 'attr': {'class': 'form-control col-md-7 col-xs-12'} } ) }}                */
/*             </div>*/
/*         </div>*/
/* */
/*         <div class="form-group">*/
/*             <label class="control-label col-md-3 col-sm-3 col-xs-12" for="clave">{{ form_label(edit_form.clave) }} <span class="required">*</span></label>*/
/*             <div class="col-md-6 col-sm-6 col-xs-12">*/
/*                 {{ form_errors(edit_form.clave) }}                */
/*                 {{form_widget(edit_form.clave,{ 'attr': {'class': 'form-control col-md-7 col-xs-12'} } ) }}                */
/*             </div>*/
/*         </div>*/
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
/*     <a href="{{ path('usuario_index') }}"><input type="button" class="btn btn-primary" value="Volver"></a>*/
/* </th>   */
/* <tr> */
/* </table>*/
/*         {{ form_end(edit_form) }}                           */
/*     </div>¡*/
/* {% endblock %}*/
/* */
