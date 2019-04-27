<?php

/* :solicitud:new.html.twig */
class __TwigTemplate_a0beb7a70b398fc275ced43f5897558f3b4b492cc2ae2d30d6c762bcd9a7528f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":solicitud:new.html.twig", 1);
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
        $__internal_3c381c26002f7ab37f43218e6d11674a692abff657283a8b4858b47b821fdff3 = $this->env->getExtension("native_profiler");
        $__internal_3c381c26002f7ab37f43218e6d11674a692abff657283a8b4858b47b821fdff3->enter($__internal_3c381c26002f7ab37f43218e6d11674a692abff657283a8b4858b47b821fdff3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":solicitud:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3c381c26002f7ab37f43218e6d11674a692abff657283a8b4858b47b821fdff3->leave($__internal_3c381c26002f7ab37f43218e6d11674a692abff657283a8b4858b47b821fdff3_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_60fa10f51ba274812a388f95774f3f88093b62c723e446ce1bbd25da00b8dfd1 = $this->env->getExtension("native_profiler");
        $__internal_60fa10f51ba274812a388f95774f3f88093b62c723e446ce1bbd25da00b8dfd1->enter($__internal_60fa10f51ba274812a388f95774f3f88093b62c723e446ce1bbd25da00b8dfd1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Crear Solicitud ";
        
        $__internal_60fa10f51ba274812a388f95774f3f88093b62c723e446ce1bbd25da00b8dfd1->leave($__internal_60fa10f51ba274812a388f95774f3f88093b62c723e446ce1bbd25da00b8dfd1_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_18856be1bfb678bc7eb90b7013d879747a3d7cd31fb3467e325d22571422451b = $this->env->getExtension("native_profiler");
        $__internal_18856be1bfb678bc7eb90b7013d879747a3d7cd31fb3467e325d22571422451b->enter($__internal_18856be1bfb678bc7eb90b7013d879747a3d7cd31fb3467e325d22571422451b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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

        
        <input type=\"hidden\" name=\"role\" value=\"";
        // line 10
        echo "app.user.username";
        echo "\">
        <div class=\"form-group\">
            <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"libro\">";
        // line 12
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "libro", array()), 'label');
        echo " <span class=\"required\"></span></label>
                ";
        // line 13
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "libro", array()), 'errors');
        echo "                
                ";
        // line 14
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
        // line 22
        echo $this->env->getExtension('routing')->getPath("solicitud_index");
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
        
        $__internal_18856be1bfb678bc7eb90b7013d879747a3d7cd31fb3467e325d22571422451b->leave($__internal_18856be1bfb678bc7eb90b7013d879747a3d7cd31fb3467e325d22571422451b_prof);

    }

    public function getTemplateName()
    {
        return ":solicitud:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 26,  91 => 22,  80 => 14,  76 => 13,  72 => 12,  67 => 10,  61 => 7,  57 => 6,  53 => 4,  47 => 3,  35 => 2,  11 => 1,);
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
/*         */
/*         <input type="hidden" name="role" value="{{'app.user.username'}}">*/
/*         <div class="form-group">*/
/*             <label class="control-label col-md-3 col-sm-3 col-xs-12" for="libro">{{ form_label(form.libro) }} <span class="required"></span></label>*/
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
