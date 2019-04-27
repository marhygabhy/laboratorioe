<?php

/* EditorialBundle:Default:login.html.twig */
class __TwigTemplate_fa04b187c5504d120467f1cb1ed3434f241818b65a4f18637e079a3dbdd2592a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'stylesheets' => array($this, 'block_stylesheets'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_162972ad13952c79d6464b090cf475b61da1f07a639f36312f3ecbb502a3fc55 = $this->env->getExtension("native_profiler");
        $__internal_162972ad13952c79d6464b090cf475b61da1f07a639f36312f3ecbb502a3fc55->enter($__internal_162972ad13952c79d6464b090cf475b61da1f07a639f36312f3ecbb502a3fc55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EditorialBundle:Default:login.html.twig"));

        // line 1
        $this->displayBlock('body', $context, $blocks);
        // line 67
        echo " 
";
        
        $__internal_162972ad13952c79d6464b090cf475b61da1f07a639f36312f3ecbb502a3fc55->leave($__internal_162972ad13952c79d6464b090cf475b61da1f07a639f36312f3ecbb502a3fc55_prof);

    }

    // line 1
    public function block_body($context, array $blocks = array())
    {
        $__internal_2fae5b822804c5e34b7803d2df2954bc9a965aca1c6f19f4e0f565c70da72292 = $this->env->getExtension("native_profiler");
        $__internal_2fae5b822804c5e34b7803d2df2954bc9a965aca1c6f19f4e0f565c70da72292->enter($__internal_2fae5b822804c5e34b7803d2df2954bc9a965aca1c6f19f4e0f565c70da72292_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 2
        echo "<head>
";
        // line 3
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 18
        echo "  </head>
  <body class=\"login\">
    <div>
      <a class=\"hiddenanchor\" id=\"signup\"></a>
      <a class=\"hiddenanchor\" id=\"signin\"></a>
      <img src=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/public/images/Editorial/Logotipos/banner.png"), "html", null, true);
        echo "\" width=\"400\" height=\"150\" style=\"display:block;margin:auto;\"><hr />
      <div class=\"login_wrapper\">
        <div class=\"animate form login_form\">
              <section class=\"login_content\">
                  <h1>Inicio de sesión</h1>
            <form action=\"";
        // line 28
        echo $this->env->getExtension('routing')->getPath("login");
        echo "\" method=\"post\">
              <div>
                <input type=\"text\" id=\"username\" name=\"_username\"  value=\"";
        // line 30
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" class=\"form-control\" placeholder=\"Usuario\" required autofocus />
              </div>
              <div>
                <input type=\"password\" name=\"_password\" id=\"password\" class=\"form-control\" placeholder=\"Contraseña\" required/>
              </div>
              <input type=\"hidden\" name=\"_target_path\" value=\"portada\"/>
              <div>
                <button type=\"submit\" class=\"btn btn-default submit\">Ingresar</button> 
              </div>
              ";
        // line 39
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 40
            echo "              <div class\"text-danger\">
                <p>
                  <strong>
                    ";
            // line 43
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageKey", array()), $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageData", array()), "security"), "html", null, true);
            echo "
                  </strong>
                </p>
              </div>
              ";
        }
        // line 48
        echo "            </form>
            <div class=\"clearfix\"></div>

            <div class=\"separator\">
                <a href=\"";
        // line 52
        echo $this->env->getExtension('routing')->getPath("user_new");
        echo "\" class=\"to_register\"> Crear Cuenta </a><br>
                <a class=\"to_register\" href=\"#\">¿Olvidó su contraseña?</a>
            </div>

              <div class=\"clearfix\"></div>
              <br />

              <div>
                <p>Todos los derechos reservados</p>
              </div>
          </section>
        </div>
      </div>
    </div>
  </body>
 ";
        
        $__internal_2fae5b822804c5e34b7803d2df2954bc9a965aca1c6f19f4e0f565c70da72292->leave($__internal_2fae5b822804c5e34b7803d2df2954bc9a965aca1c6f19f4e0f565c70da72292_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_9fe5a0cc47c4a5b8da4d895f917481b5e905dbc371b52221921e6dc310f58574 = $this->env->getExtension("native_profiler");
        $__internal_9fe5a0cc47c4a5b8da4d895f917481b5e905dbc371b52221921e6dc310f58574->enter($__internal_9fe5a0cc47c4a5b8da4d895f917481b5e905dbc371b52221921e6dc310f58574_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/public/build/css/custom.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"> 
    <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/public/images/icono.png"), "html", null, true);
        echo "\" />
    <title>Editorial Laboratorio Educativo</title>
    ";
        
        $__internal_9fe5a0cc47c4a5b8da4d895f917481b5e905dbc371b52221921e6dc310f58574->leave($__internal_9fe5a0cc47c4a5b8da4d895f917481b5e905dbc371b52221921e6dc310f58574_prof);

    }

    public function getTemplateName()
    {
        return "EditorialBundle:Default:login.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  155 => 15,  151 => 14,  145 => 11,  140 => 9,  135 => 7,  130 => 5,  127 => 4,  121 => 3,  98 => 52,  92 => 48,  84 => 43,  79 => 40,  77 => 39,  65 => 30,  60 => 28,  52 => 23,  45 => 18,  43 => 3,  40 => 2,  34 => 1,  26 => 67,  24 => 1,);
    }
}
/* {% block body %}*/
/* <head>*/
/* {% block stylesheets %}*/
/*     <!-- Bootstrap -->*/
/*     <link href="{{ asset('bundles/public/vendors/bootstrap/dist/css/bootstrap.min.css')}}" rel="stylesheet">*/
/*     <!-- Font Awesome -->*/
/*     <link href="{{ asset('bundles/public/vendors/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">*/
/*     <!-- NProgress -->*/
/*     <link href="{{ asset('bundles/public/vendors/nprogress/nprogress.css" rel="stylesheet')}}">*/
/*     <!-- Animate.css -->*/
/*     <link href="{{ asset('bundles/public/vendors/animate.css/animate.min.css')}}" rel="stylesheet">*/
/* */
/*     <!-- Custom Theme Style -->*/
/*     <link href="{{ asset('bundles/public/build/css/custom.min.css')}}" rel="stylesheet"> */
/*     <link rel="icon" type="image/x-icon" href="{{ asset('bundles/public/images/icono.png') }}" />*/
/*     <title>Editorial Laboratorio Educativo</title>*/
/*     {% endblock %}*/
/*   </head>*/
/*   <body class="login">*/
/*     <div>*/
/*       <a class="hiddenanchor" id="signup"></a>*/
/*       <a class="hiddenanchor" id="signin"></a>*/
/*       <img src="{{ asset('bundles/public/images/Editorial/Logotipos/banner.png')}}" width="400" height="150" style="display:block;margin:auto;"><hr />*/
/*       <div class="login_wrapper">*/
/*         <div class="animate form login_form">*/
/*               <section class="login_content">*/
/*                   <h1>Inicio de sesión</h1>*/
/*             <form action="{{ path('login') }}" method="post">*/
/*               <div>*/
/*                 <input type="text" id="username" name="_username"  value="{{ last_username }}" class="form-control" placeholder="Usuario" required autofocus />*/
/*               </div>*/
/*               <div>*/
/*                 <input type="password" name="_password" id="password" class="form-control" placeholder="Contraseña" required/>*/
/*               </div>*/
/*               <input type="hidden" name="_target_path" value="portada"/>*/
/*               <div>*/
/*                 <button type="submit" class="btn btn-default submit">Ingresar</button> */
/*               </div>*/
/*               {% if error %}*/
/*               <div class"text-danger">*/
/*                 <p>*/
/*                   <strong>*/
/*                     {{ error.messageKey|trans(error.messageData, 'security')}}*/
/*                   </strong>*/
/*                 </p>*/
/*               </div>*/
/*               {% endif %}*/
/*             </form>*/
/*             <div class="clearfix"></div>*/
/* */
/*             <div class="separator">*/
/*                 <a href="{{ path('user_new') }}" class="to_register"> Crear Cuenta </a><br>*/
/*                 <a class="to_register" href="#">¿Olvidó su contraseña?</a>*/
/*             </div>*/
/* */
/*               <div class="clearfix"></div>*/
/*               <br />*/
/* */
/*               <div>*/
/*                 <p>Todos los derechos reservados</p>*/
/*               </div>*/
/*           </section>*/
/*         </div>*/
/*       </div>*/
/*     </div>*/
/*   </body>*/
/*  {% endblock %} */
/* */
