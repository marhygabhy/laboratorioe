<?php

/* solicitud/new.html.twig */
class __TwigTemplate_9cd7da89bb75e3616012f9353311500a9f5d38785e0028fb7b857aaced06d8a4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "solicitud/new.html.twig", 1);
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
        $__internal_a3cf1d91a25df946f424de77a7d7e3cf817c41f0986d517ec929752bbe6f190a = $this->env->getExtension("native_profiler");
        $__internal_a3cf1d91a25df946f424de77a7d7e3cf817c41f0986d517ec929752bbe6f190a->enter($__internal_a3cf1d91a25df946f424de77a7d7e3cf817c41f0986d517ec929752bbe6f190a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "solicitud/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a3cf1d91a25df946f424de77a7d7e3cf817c41f0986d517ec929752bbe6f190a->leave($__internal_a3cf1d91a25df946f424de77a7d7e3cf817c41f0986d517ec929752bbe6f190a_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_cb047c401e703f113e24eb58336635fc45145c85bfda26d8fba0ad2b5eb211d1 = $this->env->getExtension("native_profiler");
        $__internal_cb047c401e703f113e24eb58336635fc45145c85bfda26d8fba0ad2b5eb211d1->enter($__internal_cb047c401e703f113e24eb58336635fc45145c85bfda26d8fba0ad2b5eb211d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Crear Solicitud ";
        
        $__internal_cb047c401e703f113e24eb58336635fc45145c85bfda26d8fba0ad2b5eb211d1->leave($__internal_cb047c401e703f113e24eb58336635fc45145c85bfda26d8fba0ad2b5eb211d1_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_2a462d3116a61bae8196aa50b2246a8ac6a13f66108859f1ad3e870048598fc3 = $this->env->getExtension("native_profiler");
        $__internal_2a462d3116a61bae8196aa50b2246a8ac6a13f66108859f1ad3e870048598fc3->enter($__internal_2a462d3116a61bae8196aa50b2246a8ac6a13f66108859f1ad3e870048598fc3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<h3 align=\"center\"> Crear Solicitud  </h3>
<hr />
";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("id" => "solicitud", "class" => "form-horizontal form-label-left")));
        echo " 
        ";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "

        <div class=\"form-group\">
            <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"cliente\">";
        // line 10
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "cliente", array()), 'label');
        echo " <span class=\"required\">*</span></label>
            <div class=\"col-md-6 col-sm-6 col-xs-12\">
                ";
        // line 12
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "cliente", array()), 'errors');
        echo "                
                ";
        // line 13
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "cliente", array()), 'widget', array("attr" => array("class" => "form-control col-md-7 col-xs-12")));
        echo "                
            </div>
        </div>
        <div class=\"form-group\">
            <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"libro\">";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "libro", array()), 'label');
        echo " <span class=\"required\">*</span></label>
                ";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "libro", array()), 'errors');
        echo "                
                ";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "libro", array()), 'widget');
        echo "
        </div>
<table>
<tr>
<th>             
    <button type=\"submit\" class=\"btn btn-success\">Registrar</button>
</th> 
<th>             
    <a href=\"";
        // line 27
        echo $this->env->getExtension('routing')->getPath("solicitud_index");
        echo "\"><input type=\"button\" class=\"btn btn-primary\" value=\"Volver\"></a>
</th>   
<tr> 
</table> 
        ";
        // line 31
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "                           
    </div>
";
        
        $__internal_2a462d3116a61bae8196aa50b2246a8ac6a13f66108859f1ad3e870048598fc3->leave($__internal_2a462d3116a61bae8196aa50b2246a8ac6a13f66108859f1ad3e870048598fc3_prof);

    }

    public function getTemplateName()
    {
        return "solicitud/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  109 => 31,  102 => 27,  91 => 19,  87 => 18,  83 => 17,  76 => 13,  72 => 12,  67 => 10,  61 => 7,  57 => 6,  53 => 4,  47 => 3,  35 => 2,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* {% block title %} Crear Solicitud {% endblock %}*/
/* {% block body %}*/
/* <h3 align="center"> Crear Solicitud  </h3>*/
/* <hr />*/
/* {{ form_start(form, { 'attr': {'id':'solicitud','class': 'form-horizontal form-label-left'} }) }} */
/*         {{ form_errors(form) }}*/
/* */
/*         <div class="form-group">*/
/*             <label class="control-label col-md-3 col-sm-3 col-xs-12" for="cliente">{{ form_label(form.cliente) }} <span class="required">*</span></label>*/
/*             <div class="col-md-6 col-sm-6 col-xs-12">*/
/*                 {{ form_errors(form.cliente) }}                */
/*                 {{form_widget(form.cliente,{ 'attr': {'class': 'form-control col-md-7 col-xs-12'} } ) }}                */
/*             </div>*/
/*         </div>*/
/*         <div class="form-group">*/
/*             <label class="control-label col-md-3 col-sm-3 col-xs-12" for="libro">{{ form_label(form.libro) }} <span class="required">*</span></label>*/
/*                 {{ form_errors(form.libro) }}                */
/*                 {{form_widget(form.libro) }}*/
/*         </div>*/
/* <table>*/
/* <tr>*/
/* <th>             */
/*     <button type="submit" class="btn btn-success">Registrar</button>*/
/* </th> */
/* <th>             */
/*     <a href="{{ path('solicitud_index') }}"><input type="button" class="btn btn-primary" value="Volver"></a>*/
/* </th>   */
/* <tr> */
/* </table> */
/*         {{ form_end(form) }}                           */
/*     </div>*/
/* {% endblock %}*/
/* */
