<?php

/* libro/new.html.twig */
class __TwigTemplate_f9ee86fc3fcf5f16f37d8513a61272acddd88cf34bbf2aae443eaa8054420005 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "libro/new.html.twig", 1);
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
        $__internal_476745768f590d134d47577a05bf4b9541bfcd108ebab7f2ac54313f27199e3e = $this->env->getExtension("native_profiler");
        $__internal_476745768f590d134d47577a05bf4b9541bfcd108ebab7f2ac54313f27199e3e->enter($__internal_476745768f590d134d47577a05bf4b9541bfcd108ebab7f2ac54313f27199e3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "libro/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_476745768f590d134d47577a05bf4b9541bfcd108ebab7f2ac54313f27199e3e->leave($__internal_476745768f590d134d47577a05bf4b9541bfcd108ebab7f2ac54313f27199e3e_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_b4334016b6fe6510c40e143fb166a1e1d7411a4b1f786396828eda8f6bda737a = $this->env->getExtension("native_profiler");
        $__internal_b4334016b6fe6510c40e143fb166a1e1d7411a4b1f786396828eda8f6bda737a->enter($__internal_b4334016b6fe6510c40e143fb166a1e1d7411a4b1f786396828eda8f6bda737a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Crear Libro ";
        
        $__internal_b4334016b6fe6510c40e143fb166a1e1d7411a4b1f786396828eda8f6bda737a->leave($__internal_b4334016b6fe6510c40e143fb166a1e1d7411a4b1f786396828eda8f6bda737a_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_dbe168554d7b7b0e04c2225d0f953fa076a02a6d3ae34468f52bdf5a70afbf28 = $this->env->getExtension("native_profiler");
        $__internal_dbe168554d7b7b0e04c2225d0f953fa076a02a6d3ae34468f52bdf5a70afbf28->enter($__internal_dbe168554d7b7b0e04c2225d0f953fa076a02a6d3ae34468f52bdf5a70afbf28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<h3 align=\"center\"> Crear Libro  </h3>
<hr />
";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("id" => "libro", "class" => "form-horizontal form-label-left")));
        echo " 
        ";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "

        <div class=\"form-group\">
            <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"codigo\">";
        // line 10
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "codigo", array()), 'label');
        echo " <span class=\"required\">*</span></label>
            <div class=\"col-md-6 col-sm-6 col-xs-12\">
                ";
        // line 12
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "codigo", array()), 'errors');
        echo "                
                ";
        // line 13
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "codigo", array()), 'widget', array("attr" => array("class" => "form-control col-md-7 col-xs-12")));
        echo "                
            </div>
        </div>
        <div class=\"form-group\">
            <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"titulo\">";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "titulo", array()), 'label');
        echo " <span class=\"required\">*</span></label>
            <div class=\"col-md-6 col-sm-6 col-xs-12\">
                ";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "titulo", array()), 'errors');
        echo "                
                ";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "titulo", array()), 'widget', array("attr" => array("class" => "form-control col-md-7 col-xs-12")));
        echo "                
            </div>
        </div>
        <div class=\"form-group\">
            <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"subtitulo\">";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "subtitulo", array()), 'label');
        echo " </label>
            <div class=\"col-md-6 col-sm-6 col-xs-12\">
                ";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "subtitulo", array()), 'errors');
        echo "                
                ";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "subtitulo", array()), 'widget', array("attr" => array("class" => "form-control col-md-7 col-xs-12")));
        echo "                
            </div>
        </div>
        <div class=\"form-group\">
            <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"autor\">";
        // line 31
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "autor", array()), 'label');
        echo " <span class=\"required\">*</span></label>
            <div class=\"col-md-6 col-sm-6 col-xs-12\">
                ";
        // line 33
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "autor", array()), 'errors');
        echo "                
                ";
        // line 34
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "autor", array()), 'widget', array("attr" => array("class" => "form-control col-md-7 col-xs-12")));
        echo "                
            </div>
        </div>
        <div class=\"form-group\">
            <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"pagina\">";
        // line 38
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "pagina", array()), 'label');
        echo " <span class=\"required\">*</span></label>
            <div class=\"col-md-6 col-sm-6 col-xs-12\">
                ";
        // line 40
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "pagina", array()), 'errors');
        echo "                
                ";
        // line 41
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "pagina", array()), 'widget', array("attr" => array("class" => "form-control col-md-7 col-xs-12")));
        echo "                
            </div>
        </div>
        <div class=\"form-group\">
            <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"isbn\">";
        // line 45
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "isbn", array()), 'label');
        echo " <span class=\"required\">*</span></label>
            <div class=\"col-md-6 col-sm-6 col-xs-12\">
                ";
        // line 47
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "isbn", array()), 'errors');
        echo "                
                ";
        // line 48
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "isbn", array()), 'widget', array("attr" => array("class" => "form-control col-md-7 col-xs-12")));
        echo "                
            </div>
        </div>
        <div class=\"form-group\">
            <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"formato\">";
        // line 52
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "formato", array()), 'label');
        echo " <span class=\"required\">*</span></label>
            <div class=\"col-md-6 col-sm-6 col-xs-12\">
                ";
        // line 54
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "formato", array()), 'errors');
        echo "                
                ";
        // line 55
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "formato", array()), 'widget', array("attr" => array("class" => "form-control col-md-7 col-xs-12")));
        echo "                
            </div>
        </div>
        <div class=\"form-group\">
            <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"descripcion\">";
        // line 59
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "descripcion", array()), 'label');
        echo " <span class=\"required\">*</span></label>
            <div class=\"col-md-6 col-sm-6 col-xs-12\">
                ";
        // line 61
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "descripcion", array()), 'errors');
        echo "                
                ";
        // line 62
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "descripcion", array()), 'widget', array("attr" => array("class" => "form-control col-md-7 col-xs-12")));
        echo "                
            </div>
        </div>
        <div class=\"form-group\">
            <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"ruta\">";
        // line 66
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "ruta", array()), 'label');
        echo " <span class=\"required\">*</span></label>
            <div class=\"col-md-6 col-sm-6 col-xs-12\">
                ";
        // line 68
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "ruta", array()), 'errors');
        echo "                
                ";
        // line 69
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "ruta", array()), 'widget');
        echo "                
            </div>
        </div>
        <div class=\"form-group\">
            <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"coleccion\">";
        // line 73
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "coleccion", array()), 'label');
        echo " <span class=\"required\">*</span></label>
            <div class=\"col-md-6 col-sm-6 col-xs-12\">
                ";
        // line 75
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "coleccion", array()), 'errors');
        echo "                
                ";
        // line 76
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "coleccion", array()), 'widget', array("attr" => array("class" => "form-control col-md-7 col-xs-12")));
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
        // line 85
        echo $this->env->getExtension('routing')->getPath("libro_index");
        echo "\"><input type=\"button\" class=\"btn btn-primary\" value=\"Volver\"></a>
</th>   
<tr> 
</table> 
        ";
        // line 89
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "                           
    </div>
";
        
        $__internal_dbe168554d7b7b0e04c2225d0f953fa076a02a6d3ae34468f52bdf5a70afbf28->leave($__internal_dbe168554d7b7b0e04c2225d0f953fa076a02a6d3ae34468f52bdf5a70afbf28_prof);

    }

    public function getTemplateName()
    {
        return "libro/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  239 => 89,  232 => 85,  220 => 76,  216 => 75,  211 => 73,  204 => 69,  200 => 68,  195 => 66,  188 => 62,  184 => 61,  179 => 59,  172 => 55,  168 => 54,  163 => 52,  156 => 48,  152 => 47,  147 => 45,  140 => 41,  136 => 40,  131 => 38,  124 => 34,  120 => 33,  115 => 31,  108 => 27,  104 => 26,  99 => 24,  92 => 20,  88 => 19,  83 => 17,  76 => 13,  72 => 12,  67 => 10,  61 => 7,  57 => 6,  53 => 4,  47 => 3,  35 => 2,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* {% block title %} Crear Libro {% endblock %}*/
/* {% block body %}*/
/* <h3 align="center"> Crear Libro  </h3>*/
/* <hr />*/
/* {{ form_start(form, { 'attr': {'id':'libro','class': 'form-horizontal form-label-left'} }) }} */
/*         {{ form_errors(form) }}*/
/* */
/*         <div class="form-group">*/
/*             <label class="control-label col-md-3 col-sm-3 col-xs-12" for="codigo">{{ form_label(form.codigo) }} <span class="required">*</span></label>*/
/*             <div class="col-md-6 col-sm-6 col-xs-12">*/
/*                 {{ form_errors(form.codigo) }}                */
/*                 {{form_widget(form.codigo,{ 'attr': {'class': 'form-control col-md-7 col-xs-12'} } ) }}                */
/*             </div>*/
/*         </div>*/
/*         <div class="form-group">*/
/*             <label class="control-label col-md-3 col-sm-3 col-xs-12" for="titulo">{{ form_label(form.titulo) }} <span class="required">*</span></label>*/
/*             <div class="col-md-6 col-sm-6 col-xs-12">*/
/*                 {{ form_errors(form.titulo) }}                */
/*                 {{form_widget(form.titulo,{ 'attr': {'class': 'form-control col-md-7 col-xs-12'} } ) }}                */
/*             </div>*/
/*         </div>*/
/*         <div class="form-group">*/
/*             <label class="control-label col-md-3 col-sm-3 col-xs-12" for="subtitulo">{{ form_label(form.subtitulo) }} </label>*/
/*             <div class="col-md-6 col-sm-6 col-xs-12">*/
/*                 {{ form_errors(form.subtitulo) }}                */
/*                 {{form_widget(form.subtitulo,{ 'attr': {'class': 'form-control col-md-7 col-xs-12'} } ) }}                */
/*             </div>*/
/*         </div>*/
/*         <div class="form-group">*/
/*             <label class="control-label col-md-3 col-sm-3 col-xs-12" for="autor">{{ form_label(form.autor) }} <span class="required">*</span></label>*/
/*             <div class="col-md-6 col-sm-6 col-xs-12">*/
/*                 {{ form_errors(form.autor) }}                */
/*                 {{form_widget(form.autor,{ 'attr': {'class': 'form-control col-md-7 col-xs-12'} } ) }}                */
/*             </div>*/
/*         </div>*/
/*         <div class="form-group">*/
/*             <label class="control-label col-md-3 col-sm-3 col-xs-12" for="pagina">{{ form_label(form.pagina) }} <span class="required">*</span></label>*/
/*             <div class="col-md-6 col-sm-6 col-xs-12">*/
/*                 {{ form_errors(form.pagina) }}                */
/*                 {{form_widget(form.pagina,{ 'attr': {'class': 'form-control col-md-7 col-xs-12'} } ) }}                */
/*             </div>*/
/*         </div>*/
/*         <div class="form-group">*/
/*             <label class="control-label col-md-3 col-sm-3 col-xs-12" for="isbn">{{ form_label(form.isbn) }} <span class="required">*</span></label>*/
/*             <div class="col-md-6 col-sm-6 col-xs-12">*/
/*                 {{ form_errors(form.isbn) }}                */
/*                 {{form_widget(form.isbn,{ 'attr': {'class': 'form-control col-md-7 col-xs-12'} } ) }}                */
/*             </div>*/
/*         </div>*/
/*         <div class="form-group">*/
/*             <label class="control-label col-md-3 col-sm-3 col-xs-12" for="formato">{{ form_label(form.formato) }} <span class="required">*</span></label>*/
/*             <div class="col-md-6 col-sm-6 col-xs-12">*/
/*                 {{ form_errors(form.formato) }}                */
/*                 {{form_widget(form.formato,{ 'attr': {'class': 'form-control col-md-7 col-xs-12'} } ) }}                */
/*             </div>*/
/*         </div>*/
/*         <div class="form-group">*/
/*             <label class="control-label col-md-3 col-sm-3 col-xs-12" for="descripcion">{{ form_label(form.descripcion) }} <span class="required">*</span></label>*/
/*             <div class="col-md-6 col-sm-6 col-xs-12">*/
/*                 {{ form_errors(form.descripcion) }}                */
/*                 {{form_widget(form.descripcion,{ 'attr': {'class': 'form-control col-md-7 col-xs-12'} } ) }}                */
/*             </div>*/
/*         </div>*/
/*         <div class="form-group">*/
/*             <label class="control-label col-md-3 col-sm-3 col-xs-12" for="ruta">{{ form_label(form.ruta) }} <span class="required">*</span></label>*/
/*             <div class="col-md-6 col-sm-6 col-xs-12">*/
/*                 {{ form_errors(form.ruta) }}                */
/*                 {{ form_widget(form.ruta) }}                */
/*             </div>*/
/*         </div>*/
/*         <div class="form-group">*/
/*             <label class="control-label col-md-3 col-sm-3 col-xs-12" for="coleccion">{{ form_label(form.coleccion) }} <span class="required">*</span></label>*/
/*             <div class="col-md-6 col-sm-6 col-xs-12">*/
/*                 {{ form_errors(form.coleccion) }}                */
/*                 {{form_widget(form.coleccion,{ 'attr': {'class': 'form-control col-md-7 col-xs-12'} } ) }}                */
/*             </div>*/
/*         </div>*/
/* <table>*/
/* <tr>*/
/* <th>             */
/*     <button type="submit" class="btn btn-success">Registrar</button>*/
/* </th> */
/* <th>             */
/*     <a href="{{ path('libro_index') }}"><input type="button" class="btn btn-primary" value="Volver"></a>*/
/* </th>   */
/* <tr> */
/* </table> */
/*         {{ form_end(form) }}                           */
/*     </div>*/
/* {% endblock %}*/
/* */
