<?php

/* :categoria:new.html.twig */
class __TwigTemplate_79f1bae0d537fa74e1700280ff30c4f47a44361b3b014c4e1a546c480236dbf0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":categoria:new.html.twig", 1);
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
        $__internal_2b5a05b51d229342e4836252bdee0eb1cea737396f2ce8b34b2428b5be6ccd92 = $this->env->getExtension("native_profiler");
        $__internal_2b5a05b51d229342e4836252bdee0eb1cea737396f2ce8b34b2428b5be6ccd92->enter($__internal_2b5a05b51d229342e4836252bdee0eb1cea737396f2ce8b34b2428b5be6ccd92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":categoria:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2b5a05b51d229342e4836252bdee0eb1cea737396f2ce8b34b2428b5be6ccd92->leave($__internal_2b5a05b51d229342e4836252bdee0eb1cea737396f2ce8b34b2428b5be6ccd92_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_ba4390ce48d9fa62a6fec615b397e25908bb2ff1697aec4ad259d32ed0843e1f = $this->env->getExtension("native_profiler");
        $__internal_ba4390ce48d9fa62a6fec615b397e25908bb2ff1697aec4ad259d32ed0843e1f->enter($__internal_ba4390ce48d9fa62a6fec615b397e25908bb2ff1697aec4ad259d32ed0843e1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Crear Usuario ";
        
        $__internal_ba4390ce48d9fa62a6fec615b397e25908bb2ff1697aec4ad259d32ed0843e1f->leave($__internal_ba4390ce48d9fa62a6fec615b397e25908bb2ff1697aec4ad259d32ed0843e1f_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_2ca9e2b5be097cbab37056a384458fe732eb5066de6e8c2b6452eb2d755408c8 = $this->env->getExtension("native_profiler");
        $__internal_2ca9e2b5be097cbab37056a384458fe732eb5066de6e8c2b6452eb2d755408c8->enter($__internal_2ca9e2b5be097cbab37056a384458fe732eb5066de6e8c2b6452eb2d755408c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<h3 align=\"center\"> Crear Categorias  </h3>
<hr />
    <div class=\"x_content\">
        <br />
        ";
        // line 8
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("id" => "categoria", "class" => "form-horizontal form-label-left")));
        echo " 
        ";
        // line 9
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "

        <div class=\"form-group\">
            <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"descripcion\">";
        // line 12
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "descripcion", array()), 'label');
        echo " <span class=\"required\">*</span></label>
            <div class=\"col-md-6 col-sm-6 col-xs-12\">
                ";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "descripcion", array()), 'errors');
        echo "                
                ";
        // line 15
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
        // line 24
        echo $this->env->getExtension('routing')->getPath("categoria_index");
        echo "\"><input type=\"button\" class=\"btn btn-primary\" value=\"Volver\"></a>
</th>   
<tr> 
</table> 
        ";
        // line 28
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "                           
    </div>

";
        
        $__internal_2ca9e2b5be097cbab37056a384458fe732eb5066de6e8c2b6452eb2d755408c8->leave($__internal_2ca9e2b5be097cbab37056a384458fe732eb5066de6e8c2b6452eb2d755408c8_prof);

    }

    public function getTemplateName()
    {
        return ":categoria:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  97 => 28,  90 => 24,  78 => 15,  74 => 14,  69 => 12,  63 => 9,  59 => 8,  53 => 4,  47 => 3,  35 => 2,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* {% block title %} Crear Usuario {% endblock %}*/
/* {% block body %}*/
/* <h3 align="center"> Crear Categorias  </h3>*/
/* <hr />*/
/*     <div class="x_content">*/
/*         <br />*/
/*         {{ form_start(form, { 'attr': {'id':'categoria','class': 'form-horizontal form-label-left'} }) }} */
/*         {{ form_errors(form) }}*/
/* */
/*         <div class="form-group">*/
/*             <label class="control-label col-md-3 col-sm-3 col-xs-12" for="descripcion">{{ form_label(form.descripcion) }} <span class="required">*</span></label>*/
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
/*     <a href="{{ path('categoria_index') }}"><input type="button" class="btn btn-primary" value="Volver"></a>*/
/* </th>   */
/* <tr> */
/* </table> */
/*         {{ form_end(form) }}                           */
/*     </div>*/
/* */
/* {% endblock %}*/
/* */
