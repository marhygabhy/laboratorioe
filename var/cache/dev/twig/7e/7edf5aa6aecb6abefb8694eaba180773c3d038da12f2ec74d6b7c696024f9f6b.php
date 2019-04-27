<?php

/* :pais:new.html.twig */
class __TwigTemplate_d560cdb1c80f09ee99a23f14692f948af27ff1a2adc6604a51dfeb6ddff9c55a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":pais:new.html.twig", 1);
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
        $__internal_668e8ba72234a4a2f9622f40191fa6868fe836297b5631dcb5aedb270acdce6d = $this->env->getExtension("native_profiler");
        $__internal_668e8ba72234a4a2f9622f40191fa6868fe836297b5631dcb5aedb270acdce6d->enter($__internal_668e8ba72234a4a2f9622f40191fa6868fe836297b5631dcb5aedb270acdce6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":pais:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_668e8ba72234a4a2f9622f40191fa6868fe836297b5631dcb5aedb270acdce6d->leave($__internal_668e8ba72234a4a2f9622f40191fa6868fe836297b5631dcb5aedb270acdce6d_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_a571d684c9018f3ca4498118d0f4d880ec0ccc2a89044c79af198606ef490269 = $this->env->getExtension("native_profiler");
        $__internal_a571d684c9018f3ca4498118d0f4d880ec0ccc2a89044c79af198606ef490269->enter($__internal_a571d684c9018f3ca4498118d0f4d880ec0ccc2a89044c79af198606ef490269_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Crear País ";
        
        $__internal_a571d684c9018f3ca4498118d0f4d880ec0ccc2a89044c79af198606ef490269->leave($__internal_a571d684c9018f3ca4498118d0f4d880ec0ccc2a89044c79af198606ef490269_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_a140e37765f3bd164d310df87922ddf1e22364e5ae675bf0db9608e46c2c1270 = $this->env->getExtension("native_profiler");
        $__internal_a140e37765f3bd164d310df87922ddf1e22364e5ae675bf0db9608e46c2c1270->enter($__internal_a140e37765f3bd164d310df87922ddf1e22364e5ae675bf0db9608e46c2c1270_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<h3 align=\"center\"> Crear País  </h3>
<hr />
";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("id" => "pais", "class" => "form-horizontal form-label-left")));
        echo " 
        ";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "

        <div class=\"form-group\">
            <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"descripcion\">";
        // line 10
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "descripcion", array()), 'label');
        echo " <span class=\"required\">*</span></label>
            <div class=\"col-md-6 col-sm-6 col-xs-12\">
                ";
        // line 12
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "descripcion", array()), 'errors');
        echo "                
                ";
        // line 13
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
        // line 22
        echo $this->env->getExtension('routing')->getPath("pais_index");
        echo "\"><input type=\"button\" class=\"btn btn-primary\" value=\"Volver\"></a>
</th>   
<tr> 
</table>
        ";
        // line 26
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "                           
    </div>
";
        
        $__internal_a140e37765f3bd164d310df87922ddf1e22364e5ae675bf0db9608e46c2c1270->leave($__internal_a140e37765f3bd164d310df87922ddf1e22364e5ae675bf0db9608e46c2c1270_prof);

    }

    public function getTemplateName()
    {
        return ":pais:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 26,  88 => 22,  76 => 13,  72 => 12,  67 => 10,  61 => 7,  57 => 6,  53 => 4,  47 => 3,  35 => 2,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* {% block title %} Crear País {% endblock %}*/
/* {% block body %}*/
/* <h3 align="center"> Crear País  </h3>*/
/* <hr />*/
/* {{ form_start(form, { 'attr': {'id':'pais','class': 'form-horizontal form-label-left'} }) }} */
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
/*     <a href="{{ path('pais_index') }}"><input type="button" class="btn btn-primary" value="Volver"></a>*/
/* </th>   */
/* <tr> */
/* </table>*/
/*         {{ form_end(form) }}                           */
/*     </div>*/
/* {% endblock %}*/
/* */
