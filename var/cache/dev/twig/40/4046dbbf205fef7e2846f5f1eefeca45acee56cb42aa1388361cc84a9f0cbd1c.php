<?php

/* :pais:edit.html.twig */
class __TwigTemplate_ba3b8d82912d1e069fb6168cf559a615d57ae09a0182cf0c04d98c9892d17442 extends Twig_Template
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
        $__internal_9fa3f2dc38e6660d8a8ba73d581294ce889d09cfe5b5fb91aff90b20ad9e9df8 = $this->env->getExtension("native_profiler");
        $__internal_9fa3f2dc38e6660d8a8ba73d581294ce889d09cfe5b5fb91aff90b20ad9e9df8->enter($__internal_9fa3f2dc38e6660d8a8ba73d581294ce889d09cfe5b5fb91aff90b20ad9e9df8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":pais:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9fa3f2dc38e6660d8a8ba73d581294ce889d09cfe5b5fb91aff90b20ad9e9df8->leave($__internal_9fa3f2dc38e6660d8a8ba73d581294ce889d09cfe5b5fb91aff90b20ad9e9df8_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_d4dac0fef2e1e9f19c62cb7c0498f0e8f58f3aa380fd6245fe8962b1759ccfae = $this->env->getExtension("native_profiler");
        $__internal_d4dac0fef2e1e9f19c62cb7c0498f0e8f58f3aa380fd6245fe8962b1759ccfae->enter($__internal_d4dac0fef2e1e9f19c62cb7c0498f0e8f58f3aa380fd6245fe8962b1759ccfae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Editar País ";
        
        $__internal_d4dac0fef2e1e9f19c62cb7c0498f0e8f58f3aa380fd6245fe8962b1759ccfae->leave($__internal_d4dac0fef2e1e9f19c62cb7c0498f0e8f58f3aa380fd6245fe8962b1759ccfae_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_b39074ed02b7b88e88d655de92902e5665d6e5f2e37b9f51b1dc500ac6f3a255 = $this->env->getExtension("native_profiler");
        $__internal_b39074ed02b7b88e88d655de92902e5665d6e5f2e37b9f51b1dc500ac6f3a255->enter($__internal_b39074ed02b7b88e88d655de92902e5665d6e5f2e37b9f51b1dc500ac6f3a255_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_b39074ed02b7b88e88d655de92902e5665d6e5f2e37b9f51b1dc500ac6f3a255->leave($__internal_b39074ed02b7b88e88d655de92902e5665d6e5f2e37b9f51b1dc500ac6f3a255_prof);

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
