<?php

/* cliente/new.html.twig */
class __TwigTemplate_c8f43eef3ee3d090ed49e4d5f04bdb9d7a8ab4d5cca92bd6e27d7c86ee3a777c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<html>
    <head>
    ";
        // line 3
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 15
        echo "    </head>
    ";
        // line 16
        $this->displayBlock('body', $context, $blocks);
        // line 82
        echo "</html>";
    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 4
        echo "    <!-- Bootstrap -->
    <link href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/public/vendors/bootstrap/dist/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <!-- Font Awesome -->
    <link href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/public/vendors/font-awesome/css/font-awesome.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <!-- NProgress -->
    <link href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/public/vendors/nprogress/nprogress.css\" rel=\"stylesheet"), "html", null, true);
        echo "\">
    <!-- Animate.css -->
    <link href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/public/vendors/animate.css/animate.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <!-- Custom Theme Style -->
    <link href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/public/build/css/custom.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"> 
    ";
    }

    // line 16
    public function block_body($context, array $blocks = array())
    {
        // line 17
        echo "        <body>
            <br />
            <h1 align=\"center\"><img src=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/public/images/icono.png"), "html", null, true);
        echo "\" width=\"20px\" heigth=\"20px\" ></i> Editorial Laboratorio Educativo</h1>
            <div class=\"login_wrapper\">
                <div class=\"animate form login_form\">
                    <section class=\"login_content\">
                            <h1> Registro de Clientes  </h1>
                            ";
        // line 24
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_start', array("attr" => array("id" => "cliente", "class" => "form-horizontal form-label-left")));
        echo " 
                            ";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'errors');
        echo "
        
                            <div class=\"form-group\">
                                <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"nombre\">";
        // line 28
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "nombre", array()), 'label');
        echo " <span class=\"required\">*</span></label>
                                <div class=\"col-md-6 col-sm-6 col-xs-12\">
                                    ";
        // line 30
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "nombre", array()), 'errors');
        echo "                
                                    ";
        // line 31
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "nombre", array()), 'widget', array("attr" => array("class" => "form-control col-md-7 col-xs-12")));
        echo "                
                                </div>
                            </div>
                            <div class=\"form-group\">
                                <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"apellido\">";
        // line 35
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "apellido", array()), 'label');
        echo " <span class=\"required\">*</span></label>
                                <div class=\"col-md-6 col-sm-6 col-xs-12\">
                                    ";
        // line 37
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "apellido", array()), 'errors');
        echo "                
                                    ";
        // line 38
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "apellido", array()), 'widget', array("attr" => array("class" => "form-control col-md-7 col-xs-12")));
        echo "                
                                </div>
                            </div>
                            <div class=\"form-group\">
                                <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"correo\">";
        // line 42
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "correo", array()), 'label');
        echo " <span class=\"required\">*</span></label>
                                <div class=\"col-md-6 col-sm-6 col-xs-12\">
                                    ";
        // line 44
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "correo", array()), 'errors');
        echo "                
                                    ";
        // line 45
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "correo", array()), 'widget', array("attr" => array("class" => "form-control col-md-7 col-xs-12")));
        echo "                
                                </div>
                            </div>
                            <div class=\"form-group\">
                                <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"usuario\">";
        // line 49
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "usuario", array()), 'label');
        echo " <span class=\"required\">*</span></label>
                                <div class=\"col-md-6 col-sm-6 col-xs-12\">
                                    ";
        // line 51
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "usuario", array()), 'errors');
        echo "                
                                    ";
        // line 52
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "usuario", array()), 'widget', array("attr" => array("class" => "form-control col-md-7 col-xs-12")));
        echo "                
                                </div>
                            </div>
                            <div class=\"form-group\">
                                <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"clave\">";
        // line 56
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "clave", array()), 'label');
        echo " <span class=\"required\">*</span></label>
                                <div class=\"col-md-6 col-sm-6 col-xs-12\">
                                    ";
        // line 58
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "clave", array()), 'errors');
        echo "                
                                    ";
        // line 59
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "clave", array()), 'widget', array("attr" => array("class" => "form-control col-md-7 col-xs-12")));
        echo "                
                                </div>
                            </div>
                            <div class=\"form-group\">
                                <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"pais\">";
        // line 63
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "pais", array()), 'label');
        echo " <span class=\"required\">*</span></label>
                                <div class=\"col-md-6 col-sm-6 col-xs-12\">
                                    ";
        // line 65
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "pais", array()), 'errors');
        echo "                
                                    ";
        // line 66
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "pais", array()), 'widget', array("attr" => array("class" => "form-control col-md-7 col-xs-12")));
        echo "                
                                </div>
                            </div>
                            <div class=\"separator\">
                                <a class=\"btn btn-default submit\" href=\"";
        // line 70
        echo $this->env->getExtension('routing')->getPath("portada");
        echo "\">Ingresar</a>
                            </div>
                            ";
        // line 72
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_end');
        echo "
                            <div class=\"separator\">
                                <a href=\"";
        // line 74
        echo $this->env->getExtension('routing')->getPath("cliente_new");
        echo "\" class=\"to_register\"> Crear Cuenta </a>
                            </div>
                        <p>Todos los derechos reservados</p>
                    </section>
                </div>
            </div>
        </body>
    ";
    }

    public function getTemplateName()
    {
        return "cliente/new.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  199 => 74,  194 => 72,  189 => 70,  182 => 66,  178 => 65,  173 => 63,  166 => 59,  162 => 58,  157 => 56,  150 => 52,  146 => 51,  141 => 49,  134 => 45,  130 => 44,  125 => 42,  118 => 38,  114 => 37,  109 => 35,  102 => 31,  98 => 30,  93 => 28,  87 => 25,  83 => 24,  75 => 19,  71 => 17,  68 => 16,  62 => 13,  57 => 11,  52 => 9,  47 => 7,  42 => 5,  39 => 4,  36 => 3,  32 => 82,  30 => 16,  27 => 15,  25 => 3,  21 => 1,);
    }
}
/* <html>*/
/*     <head>*/
/*     {% block stylesheets %}*/
/*     <!-- Bootstrap -->*/
/*     <link href="{{ asset('bundles/public/vendors/bootstrap/dist/css/bootstrap.min.css')}}" rel="stylesheet">*/
/*     <!-- Font Awesome -->*/
/*     <link href="{{ asset('bundles/public/vendors/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">*/
/*     <!-- NProgress -->*/
/*     <link href="{{ asset('bundles/public/vendors/nprogress/nprogress.css" rel="stylesheet')}}">*/
/*     <!-- Animate.css -->*/
/*     <link href="{{ asset('bundles/public/vendors/animate.css/animate.min.css')}}" rel="stylesheet">*/
/*     <!-- Custom Theme Style -->*/
/*     <link href="{{ asset('bundles/public/build/css/custom.min.css')}}" rel="stylesheet"> */
/*     {% endblock %}*/
/*     </head>*/
/*     {% block body %}*/
/*         <body>*/
/*             <br />*/
/*             <h1 align="center"><img src="{{ asset('bundles/public/images/icono.png')}}" width="20px" heigth="20px" ></i> Editorial Laboratorio Educativo</h1>*/
/*             <div class="login_wrapper">*/
/*                 <div class="animate form login_form">*/
/*                     <section class="login_content">*/
/*                             <h1> Registro de Clientes  </h1>*/
/*                             {{ form_start(form, { 'attr': {'id':'cliente','class': 'form-horizontal form-label-left'} }) }} */
/*                             {{ form_errors(form) }}*/
/*         */
/*                             <div class="form-group">*/
/*                                 <label class="control-label col-md-3 col-sm-3 col-xs-12" for="nombre">{{ form_label(form.nombre) }} <span class="required">*</span></label>*/
/*                                 <div class="col-md-6 col-sm-6 col-xs-12">*/
/*                                     {{ form_errors(form.nombre) }}                */
/*                                     {{form_widget(form.nombre,{ 'attr': {'class': 'form-control col-md-7 col-xs-12'} } ) }}                */
/*                                 </div>*/
/*                             </div>*/
/*                             <div class="form-group">*/
/*                                 <label class="control-label col-md-3 col-sm-3 col-xs-12" for="apellido">{{ form_label(form.apellido) }} <span class="required">*</span></label>*/
/*                                 <div class="col-md-6 col-sm-6 col-xs-12">*/
/*                                     {{ form_errors(form.apellido) }}                */
/*                                     {{form_widget(form.apellido,{ 'attr': {'class': 'form-control col-md-7 col-xs-12'} } ) }}                */
/*                                 </div>*/
/*                             </div>*/
/*                             <div class="form-group">*/
/*                                 <label class="control-label col-md-3 col-sm-3 col-xs-12" for="correo">{{ form_label(form.correo) }} <span class="required">*</span></label>*/
/*                                 <div class="col-md-6 col-sm-6 col-xs-12">*/
/*                                     {{ form_errors(form.correo) }}                */
/*                                     {{form_widget(form.correo,{ 'attr': {'class': 'form-control col-md-7 col-xs-12'} } ) }}                */
/*                                 </div>*/
/*                             </div>*/
/*                             <div class="form-group">*/
/*                                 <label class="control-label col-md-3 col-sm-3 col-xs-12" for="usuario">{{ form_label(form.usuario) }} <span class="required">*</span></label>*/
/*                                 <div class="col-md-6 col-sm-6 col-xs-12">*/
/*                                     {{ form_errors(form.usuario) }}                */
/*                                     {{form_widget(form.usuario,{ 'attr': {'class': 'form-control col-md-7 col-xs-12'} } ) }}                */
/*                                 </div>*/
/*                             </div>*/
/*                             <div class="form-group">*/
/*                                 <label class="control-label col-md-3 col-sm-3 col-xs-12" for="clave">{{ form_label(form.clave) }} <span class="required">*</span></label>*/
/*                                 <div class="col-md-6 col-sm-6 col-xs-12">*/
/*                                     {{ form_errors(form.clave) }}                */
/*                                     {{form_widget(form.clave,{ 'attr': {'class': 'form-control col-md-7 col-xs-12'} } ) }}                */
/*                                 </div>*/
/*                             </div>*/
/*                             <div class="form-group">*/
/*                                 <label class="control-label col-md-3 col-sm-3 col-xs-12" for="pais">{{ form_label(form.pais) }} <span class="required">*</span></label>*/
/*                                 <div class="col-md-6 col-sm-6 col-xs-12">*/
/*                                     {{ form_errors(form.pais) }}                */
/*                                     {{form_widget(form.pais,{ 'attr': {'class': 'form-control col-md-7 col-xs-12'} } ) }}                */
/*                                 </div>*/
/*                             </div>*/
/*                             <div class="separator">*/
/*                                 <a class="btn btn-default submit" href="{{ path('portada') }}">Ingresar</a>*/
/*                             </div>*/
/*                             {{ form_end(form) }}*/
/*                             <div class="separator">*/
/*                                 <a href="{{ path('cliente_new') }}" class="to_register"> Crear Cuenta </a>*/
/*                             </div>*/
/*                         <p>Todos los derechos reservados</p>*/
/*                     </section>*/
/*                 </div>*/
/*             </div>*/
/*         </body>*/
/*     {% endblock %}*/
/* </html>*/
