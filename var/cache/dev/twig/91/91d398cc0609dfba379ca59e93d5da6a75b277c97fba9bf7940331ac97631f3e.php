<?php

/* :coleccion:edit.html.twig */
class __TwigTemplate_f2f93cabb5c7aa523d9771afe645fdfe2a437ec5ee7d0bef6d7afc8ddd2cdf71 extends Twig_Template
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
        $__internal_e6b02b046b612b81328c64e1b0c1fb15dfc53218555790a790699754ef501a0a = $this->env->getExtension("native_profiler");
        $__internal_e6b02b046b612b81328c64e1b0c1fb15dfc53218555790a790699754ef501a0a->enter($__internal_e6b02b046b612b81328c64e1b0c1fb15dfc53218555790a790699754ef501a0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":coleccion:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e6b02b046b612b81328c64e1b0c1fb15dfc53218555790a790699754ef501a0a->leave($__internal_e6b02b046b612b81328c64e1b0c1fb15dfc53218555790a790699754ef501a0a_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_ca441dfac8640d8b5aae150d4c39328daf953920704303a8b979f85483e9bc4e = $this->env->getExtension("native_profiler");
        $__internal_ca441dfac8640d8b5aae150d4c39328daf953920704303a8b979f85483e9bc4e->enter($__internal_ca441dfac8640d8b5aae150d4c39328daf953920704303a8b979f85483e9bc4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Editar Colección ";
        
        $__internal_ca441dfac8640d8b5aae150d4c39328daf953920704303a8b979f85483e9bc4e->leave($__internal_ca441dfac8640d8b5aae150d4c39328daf953920704303a8b979f85483e9bc4e_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_aa4851d115b87e9ecca5006cdcc54d17564f454be040f916110bbd292d810f00 = $this->env->getExtension("native_profiler");
        $__internal_aa4851d115b87e9ecca5006cdcc54d17564f454be040f916110bbd292d810f00->enter($__internal_aa4851d115b87e9ecca5006cdcc54d17564f454be040f916110bbd292d810f00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "    <div class=\"x_content\">
        <br />
        ";
        // line 7
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_start', array("attr" => array("id" => "coleccion", "class" => "form-horizontal form-label-left")));
        echo " 
        ";
        // line 8
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'errors');
        echo "

        <div class=\"form-group\">
            <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"descripcion\">";
        // line 11
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "descripcion", array()), 'label');
        echo " <span class=\"required\">*</span></label>
            <div class=\"col-md-6 col-sm-6 col-xs-12\">
                ";
        // line 13
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "descripcion", array()), 'errors');
        echo "                
                ";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "descripcion", array()), 'widget', array("attr" => array("class" => "form-control col-md-7 col-xs-12")));
        echo "                
            </div>
        </div>

        <div class=\"form-group\">
            <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"libro\">";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "categoria", array()), 'label');
        echo " <span class=\"required\">*</span></label>
            <div class=\"col-md-6 col-sm-6 col-xs-12\">
                ";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "categoria", array()), 'errors');
        echo "                
                ";
        // line 22
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
        // line 30
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_end');
        echo "                  
</th> 
<th>
    ";
        // line 33
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
    <button type=\"submit\" class=\"btn btn-danger\"><i class=\"fa fa-trash\"></i> Eliminar </button>
    ";
        // line 35
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
</th> 
<th>             
    <a href=\"";
        // line 38
        echo $this->env->getExtension('routing')->getPath("coleccion_index");
        echo "\"><input type=\"button\" class=\"btn btn-primary\" value=\"Volver\"></a>
</th>   
<tr> 
</table>   
";
        
        $__internal_aa4851d115b87e9ecca5006cdcc54d17564f454be040f916110bbd292d810f00->leave($__internal_aa4851d115b87e9ecca5006cdcc54d17564f454be040f916110bbd292d810f00_prof);

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
        return array (  121 => 38,  115 => 35,  110 => 33,  104 => 30,  93 => 22,  89 => 21,  84 => 19,  76 => 14,  72 => 13,  67 => 11,  61 => 8,  57 => 7,  53 => 5,  47 => 4,  35 => 2,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* {% block title %} Editar Colección {% endblock %} */
/* */
/* {% block body %}*/
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
