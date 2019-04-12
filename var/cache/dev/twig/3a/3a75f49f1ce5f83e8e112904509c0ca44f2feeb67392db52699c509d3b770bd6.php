<?php

/* EditorialBundle:Default:login.html.twig */
class __TwigTemplate_e1e670ff151f72e08efa6d84d53a5a0fc6fa4c2aa51296936ebd1818723bb8cb extends Twig_Template
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
        $__internal_676c825d25e6e875056952a2a124db1e43f167d0d6bf35ca1270aad9a23edde7 = $this->env->getExtension("native_profiler");
        $__internal_676c825d25e6e875056952a2a124db1e43f167d0d6bf35ca1270aad9a23edde7->enter($__internal_676c825d25e6e875056952a2a124db1e43f167d0d6bf35ca1270aad9a23edde7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EditorialBundle:Default:login.html.twig"));

        // line 1
        $this->displayBlock('body', $context, $blocks);
        // line 101
        echo " 
";
        
        $__internal_676c825d25e6e875056952a2a124db1e43f167d0d6bf35ca1270aad9a23edde7->leave($__internal_676c825d25e6e875056952a2a124db1e43f167d0d6bf35ca1270aad9a23edde7_prof);

    }

    // line 1
    public function block_body($context, array $blocks = array())
    {
        $__internal_ee776c9e8644f40ca453e47019081b96f1ec381bddde35d60ef4575ef506bea1 = $this->env->getExtension("native_profiler");
        $__internal_ee776c9e8644f40ca453e47019081b96f1ec381bddde35d60ef4575ef506bea1->enter($__internal_ee776c9e8644f40ca453e47019081b96f1ec381bddde35d60ef4575ef506bea1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 2
        echo "<head>
";
        // line 3
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 16
        echo "  </head>
  <body class=\"login\">
    <div>
      <a class=\"hiddenanchor\" id=\"signup\"></a>
      <a class=\"hiddenanchor\" id=\"signin\"></a>

      <div class=\"login_wrapper\">
        <div class=\"animate form login_form\">
          <section class=\"login_content\">
            <form>
              <h1>Login Form</h1>
              <div>
                <input type=\"text\" class=\"form-control\" placeholder=\"Username\" required=\"\" />
              </div>
              <div>
                <input type=\"password\" class=\"form-control\" placeholder=\"Password\" required=\"\" />
              </div>
              <div>
                <a class=\"btn btn-default submit\" href=\"index.html\">Log in</a> 
                <a class=\"reset_pass\" href=\"#\">Lost your password?</a>
              </div>

              <div class=\"clearfix\"></div>

              <div class=\"separator\">
                <p class=\"change_link\">New to site?
                  <a href=\"#signup\" class=\"to_register\"> Crear Cuenta </a>
                </p>

                <div class=\"clearfix\"></div>
                <br />

                <div>
                  <h1><i class=\"fa fa-paw\"></i> Gentelella Alela!</h1>
                  <p>©2016 All Rights Reserved. Gentelella Alela! is a Bootstrap 3 template. Privacy and Terms</p>
                </div>
              </div>
            </form>
          </section>
        </div>

        <div id=\"register\" class=\"animate form registration_form\">
          <section class=\"login_content\">
            <form>
              <h1>Crear Cuenta</h1>
              <div>
                <input type=\"text\" name=\"nombre\" class=\"form-control\" placeholder=\"Nombre\" required=\"\" />
              </div>
              <div>
                <input type=\"text\" name=\"apellido\" class=\"form-control\" placeholder=\"Apellido\" required=\"\" />
              </div>
              <div>
                <input type=\"text\" name=\"correo\" class=\"form-control\" placeholder=\"Correo\" required=\"\" />
              </div>
              <div>
                <input type=\"text\" name=\"usuario\" class=\"form-control\" placeholder=\"Usuario\" required=\"\" />
              </div>
              <div>
                <input type=\"Password\" name=\"clave\" class=\"form-control\" placeholder=\"Clave\" required=\"\" />
              </div>
              <div>
                <a class=\"btn btn-default submit\" href=\"index.html\">Registrar</a>
              </div>

              <div class=\"clearfix\"></div>

              <div class=\"separator\">
                <p class=\"change_link\">Already a member ?
                  <a href=\"#signin\" class=\"to_register\"> Log in </a>
                </p>

                <div class=\"clearfix\"></div>
                <br />

                <div>
                  <h1><i class=\"fa fa-paw\"></i> Gentelella Alela!</h1>
                  <p>©2016 All Rights Reserved. Gentelella Alela! is a Bootstrap 3 template. Privacy and Terms</p>
                </div>
              </div>
            </form>
          </section>
        </div>
      </div>
    </div>
  </body>
 ";
        
        $__internal_ee776c9e8644f40ca453e47019081b96f1ec381bddde35d60ef4575ef506bea1->leave($__internal_ee776c9e8644f40ca453e47019081b96f1ec381bddde35d60ef4575ef506bea1_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_8f9d740f07965a21e7784a25274c1fcf680337871ac0f22edbd6168dedc3f97b = $this->env->getExtension("native_profiler");
        $__internal_8f9d740f07965a21e7784a25274c1fcf680337871ac0f22edbd6168dedc3f97b->enter($__internal_8f9d740f07965a21e7784a25274c1fcf680337871ac0f22edbd6168dedc3f97b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
    ";
        
        $__internal_8f9d740f07965a21e7784a25274c1fcf680337871ac0f22edbd6168dedc3f97b->leave($__internal_8f9d740f07965a21e7784a25274c1fcf680337871ac0f22edbd6168dedc3f97b_prof);

    }

    public function getTemplateName()
    {
        return "EditorialBundle:Default:login.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  167 => 14,  161 => 11,  156 => 9,  151 => 7,  146 => 5,  143 => 4,  137 => 3,  45 => 16,  43 => 3,  40 => 2,  34 => 1,  26 => 101,  24 => 1,);
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
/*     {% endblock %}*/
/*   </head>*/
/*   <body class="login">*/
/*     <div>*/
/*       <a class="hiddenanchor" id="signup"></a>*/
/*       <a class="hiddenanchor" id="signin"></a>*/
/* */
/*       <div class="login_wrapper">*/
/*         <div class="animate form login_form">*/
/*           <section class="login_content">*/
/*             <form>*/
/*               <h1>Login Form</h1>*/
/*               <div>*/
/*                 <input type="text" class="form-control" placeholder="Username" required="" />*/
/*               </div>*/
/*               <div>*/
/*                 <input type="password" class="form-control" placeholder="Password" required="" />*/
/*               </div>*/
/*               <div>*/
/*                 <a class="btn btn-default submit" href="index.html">Log in</a> */
/*                 <a class="reset_pass" href="#">Lost your password?</a>*/
/*               </div>*/
/* */
/*               <div class="clearfix"></div>*/
/* */
/*               <div class="separator">*/
/*                 <p class="change_link">New to site?*/
/*                   <a href="#signup" class="to_register"> Crear Cuenta </a>*/
/*                 </p>*/
/* */
/*                 <div class="clearfix"></div>*/
/*                 <br />*/
/* */
/*                 <div>*/
/*                   <h1><i class="fa fa-paw"></i> Gentelella Alela!</h1>*/
/*                   <p>©2016 All Rights Reserved. Gentelella Alela! is a Bootstrap 3 template. Privacy and Terms</p>*/
/*                 </div>*/
/*               </div>*/
/*             </form>*/
/*           </section>*/
/*         </div>*/
/* */
/*         <div id="register" class="animate form registration_form">*/
/*           <section class="login_content">*/
/*             <form>*/
/*               <h1>Crear Cuenta</h1>*/
/*               <div>*/
/*                 <input type="text" name="nombre" class="form-control" placeholder="Nombre" required="" />*/
/*               </div>*/
/*               <div>*/
/*                 <input type="text" name="apellido" class="form-control" placeholder="Apellido" required="" />*/
/*               </div>*/
/*               <div>*/
/*                 <input type="text" name="correo" class="form-control" placeholder="Correo" required="" />*/
/*               </div>*/
/*               <div>*/
/*                 <input type="text" name="usuario" class="form-control" placeholder="Usuario" required="" />*/
/*               </div>*/
/*               <div>*/
/*                 <input type="Password" name="clave" class="form-control" placeholder="Clave" required="" />*/
/*               </div>*/
/*               <div>*/
/*                 <a class="btn btn-default submit" href="index.html">Registrar</a>*/
/*               </div>*/
/* */
/*               <div class="clearfix"></div>*/
/* */
/*               <div class="separator">*/
/*                 <p class="change_link">Already a member ?*/
/*                   <a href="#signin" class="to_register"> Log in </a>*/
/*                 </p>*/
/* */
/*                 <div class="clearfix"></div>*/
/*                 <br />*/
/* */
/*                 <div>*/
/*                   <h1><i class="fa fa-paw"></i> Gentelella Alela!</h1>*/
/*                   <p>©2016 All Rights Reserved. Gentelella Alela! is a Bootstrap 3 template. Privacy and Terms</p>*/
/*                 </div>*/
/*               </div>*/
/*             </form>*/
/*           </section>*/
/*         </div>*/
/*       </div>*/
/*     </div>*/
/*   </body>*/
/*  {% endblock %} */
/* */
