<?php

/* base.html.twig */
class __TwigTemplate_d2b6634c8ff64e84b442a3f7081062b174995b46e14a250d7b3829df3a2a5bd0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'content' => array($this, 'block_content'),
            'container' => array($this, 'block_container'),
            '_body' => array($this, 'block__body'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e7772fb1eaa299eada15ba636d2ba093d35bd131d664d067ea5411ed282f9db8 = $this->env->getExtension("native_profiler");
        $__internal_e7772fb1eaa299eada15ba636d2ba093d35bd131d664d067ea5411ed282f9db8->enter($__internal_e7772fb1eaa299eada15ba636d2ba093d35bd131d664d067ea5411ed282f9db8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"es\">
    <head>
    <!-- Meta, title, CSS, favicons, etc. -->
        <meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">


        <title>";
        // line 10
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

        ";
        // line 12
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 32
        echo "
    </head>

    <body class=\"nav-md\">
        ";
        // line 36
        $this->displayBlock('content', $context, $blocks);
        // line 174
        echo "
      ";
        // line 175
        $this->displayBlock('container', $context, $blocks);
        // line 202
        echo "
        ";
        // line 203
        $this->displayBlock('javascripts', $context, $blocks);
        // line 244
        echo "    </body>
</html>  
";
        
        $__internal_e7772fb1eaa299eada15ba636d2ba093d35bd131d664d067ea5411ed282f9db8->leave($__internal_e7772fb1eaa299eada15ba636d2ba093d35bd131d664d067ea5411ed282f9db8_prof);

    }

    // line 10
    public function block_title($context, array $blocks = array())
    {
        $__internal_7ccad54ebf5293e4370f29755fc6ff69be59523b00f2d8aa7ff5dbc50adf0029 = $this->env->getExtension("native_profiler");
        $__internal_7ccad54ebf5293e4370f29755fc6ff69be59523b00f2d8aa7ff5dbc50adf0029->enter($__internal_7ccad54ebf5293e4370f29755fc6ff69be59523b00f2d8aa7ff5dbc50adf0029_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Editorial Laboratorio Educativo";
        
        $__internal_7ccad54ebf5293e4370f29755fc6ff69be59523b00f2d8aa7ff5dbc50adf0029->leave($__internal_7ccad54ebf5293e4370f29755fc6ff69be59523b00f2d8aa7ff5dbc50adf0029_prof);

    }

    // line 12
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_59969daebaa48d03c65e530379e9f1ffa8a8d9ef48108fa17f34f7db426ddf89 = $this->env->getExtension("native_profiler");
        $__internal_59969daebaa48d03c65e530379e9f1ffa8a8d9ef48108fa17f34f7db426ddf89->enter($__internal_59969daebaa48d03c65e530379e9f1ffa8a8d9ef48108fa17f34f7db426ddf89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 13
        echo "            <!-- Bootstrap -->
            <link rel=\"stylesheet\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/public/vendors/bootstrap/dist/css/bootstrap.min.css"), "html", null, true);
        echo "\"/>
            <!-- Font Awesome -->
            <link rel=\"stylesheet\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/public/vendors/font-agentelellawesome/css/font-awesome.min.css"), "html", null, true);
        echo "\"/>
            <!-- Imagen de icono -->
            <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/public/images/icono.png"), "html", null, true);
        echo "\" />
            <!-- NProgress -->
            <link rel=\"stylesheet\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/public/vendors/nprogress/nprogress.css"), "html", null, true);
        echo "\"/>
            <!-- iCheck -->
            <link rel=\"stylesheet\" href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/public/vendors/iCheck/skins/flat/green.css"), "html", null, true);
        echo "\"/>
            <!-- bootstrap-progressbar -->
            <link rel=\"stylesheet\" href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/public/vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css"), "html", null, true);
        echo "\">
             <!-- JQVMap -->
            <link rel=\"stylesheet\" href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/public/vendors/jqvmap/dist/jqvmap.min.css"), "html", null, true);
        echo "\">
            <!-- bootstrap-daterangepicker -->
            <link rel=\"stylesheet\" href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/public/vendors/bootstrap-daterangepicker/daterangepicker.css"), "html", null, true);
        echo "\">
            <!-- Custom Theme Style -->
            <link rel=\"stylesheet\" href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/public/build/css/costomrojo.css"), "html", null, true);
        echo "\">
        ";
        
        $__internal_59969daebaa48d03c65e530379e9f1ffa8a8d9ef48108fa17f34f7db426ddf89->leave($__internal_59969daebaa48d03c65e530379e9f1ffa8a8d9ef48108fa17f34f7db426ddf89_prof);

    }

    // line 36
    public function block_content($context, array $blocks = array())
    {
        $__internal_ffdf89ce942c7be7d9922136cfa0dd4799e9b4453dc341b3e4dadc7dfd70fb83 = $this->env->getExtension("native_profiler");
        $__internal_ffdf89ce942c7be7d9922136cfa0dd4799e9b4453dc341b3e4dadc7dfd70fb83->enter($__internal_ffdf89ce942c7be7d9922136cfa0dd4799e9b4453dc341b3e4dadc7dfd70fb83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 37
        echo "    <div class=\"container body\">
      <div class=\"main_container\">
        <div class=\"col-md-3 left_col\">
          <div class=\"left_col scroll-view\">
            <div class=\"navbar nav_title\" style=\"border: 0;\">
              <a href=\"\" class=\"site_title\"><img src=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/public/images/icono.png"), "html", null, true);
        echo "\" width=\"20px\" heigth=\"20px\" ><span> Lab. Educativo</span></a>
            </div>

            <div class=\"clearfix\"></div>

            <!-- menu profile quick info -->
            <div class=\"profile clearfix\">
              <div class=\"profile_pic\">
                <img src=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/public/images/icono.png"), "html", null, true);
        echo "\" alt=\"...\" class=\"img-circle profile_img\">
              </div>
              <div class=\"profile_info\">
                  ";
        // line 53
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 54
            echo "                  <p>Bienvenido</p>
                      ";
            // line 55
            if ($this->env->getExtension('security')->isGranted("ROLE_USER")) {
                // line 56
                echo "                      <p>Cliente: ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
                echo "</p>
                      ";
            } elseif ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
                // line 58
                echo "                    <p>Administrador</p>
                      ";
            }
            // line 60
            echo "                  ";
        }
        // line 61
        echo "              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id=\"sidebar-menu\" class=\"main_menu_side hidden-print main_menu\">
                ";
        // line 69
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 70
            echo "              <div class=\"menu_section\">
              <hr />
               <a href=\"";
            // line 72
            echo $this->env->getExtension('routing')->getPath("portada");
            echo "\"><h3> Inicio </h3></a>
              </div>
              ";
        }
        // line 75
        echo "              <hr />
              <div class=\"menu_section\">
                  ";
        // line 77
        if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
            // line 78
            echo "                <a><h3> Configuración </h3></a>
                ";
        }
        // line 79
        echo "                
                <ul class=\"nav side-menu\">
                    ";
        // line 81
        if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
            // line 82
            echo "                  <li><a><i class=\"fa fa-bug\"></i> Categorias <span class=\"fa fa-chevron-down\"></span></a>
                    <ul class=\"nav child_menu\">
                      <li><a href=\"";
            // line 84
            echo $this->env->getExtension('routing')->getPath("categoria_index");
            echo "\">Ver Categorias</a></li>
                      <li><a href=\"";
            // line 85
            echo $this->env->getExtension('routing')->getPath("categoria_new");
            echo "\">Crear Categoria</a></li>
                    </ul>
                  </li>
                  <li><a><i class=\"fa fa-windows\"></i> Colecciones <span class=\"fa fa-chevron-down\"></span></a>
                    <ul class=\"nav child_menu\">
                      <li><a href=\"";
            // line 90
            echo $this->env->getExtension('routing')->getPath("coleccion_index");
            echo "\">Ver Colecciones</a></li>
                      <li><a href=\"";
            // line 91
            echo $this->env->getExtension('routing')->getPath("coleccion_new");
            echo "\">Crear Coleccion</a></li>
                    </ul>
                  </li>
                  ";
        }
        // line 95
        echo "                  ";
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 96
            echo "                  <li><a><i class=\"fa fa-sitemap\"></i> Libros <span class=\"fa fa-chevron-down\"></span></a>
                    <ul class=\"nav child_menu\">
                        ";
            // line 98
            if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
                // line 99
                echo "                      <li><a href=\"";
                echo $this->env->getExtension('routing')->getPath("libro_index");
                echo "\">Ver Libros</a></li>
                      <li><a href=\"";
                // line 100
                echo $this->env->getExtension('routing')->getPath("libro_new");
                echo "\">Agregar Libros</a></li>
                      ";
            }
            // line 102
            echo "                      ";
        }
        // line 103
        echo "                      ";
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 104
            echo "                      <li><a href=\"";
            echo $this->env->getExtension('routing')->getPath("solicitud_new");
            echo "\">Solicitar Libros</a></li>
                      ";
        }
        // line 106
        echo "                    </ul>
                  </li> 
                  ";
        // line 108
        if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
            // line 109
            echo "                  <li><a><i class=\"fa fa-bug\"></i> Solicitudes <span class=\"fa fa-chevron-down\"></span></a>
                    <ul class=\"nav child_menu\">
                      <li><a href=\"";
            // line 111
            echo $this->env->getExtension('routing')->getPath("solicitud_index");
            echo "\">Ver Solicitudes</a></li>
                      <li><a href=\"";
            // line 112
            echo $this->env->getExtension('routing')->getPath("solicitud_new");
            echo "\">Agregar Solicitudes</a></li>
                    </ul>
                  </li>
                  
                  <li><a><i class=\"fa fa-bug\"></i> Paises <span class=\"fa fa-chevron-down\"></span></a>
                    <ul class=\"nav child_menu\">
                      <li><a href=\"";
            // line 118
            echo $this->env->getExtension('routing')->getPath("pais_index");
            echo "\">Ver Paises</a></li>
                      <li><a href=\"";
            // line 119
            echo $this->env->getExtension('routing')->getPath("pais_new");
            echo "\">Agregar Paises</a></li>
                    </ul>
                  </li>
                  <li><a><i class=\"fa fa-bug\"></i> Usuarios <span class=\"fa fa-chevron-down\"></span></a>
                    <ul class=\"nav child_menu\">
                      <li><a href=\"";
            // line 124
            echo $this->env->getExtension('routing')->getPath("user_index");
            echo "\">Ver Usuarios</a></li>
                      <li><a href=\"";
            // line 125
            echo $this->env->getExtension('routing')->getPath("user_new");
            echo "\">Crear Usuarios</a></li>
                      ";
        }
        // line 127
        echo "                    </ul>
                  </li>    
                </ul>
              </div>
            </div>
            <!-- /sidebar menu -->

            <!-- /menu footer buttons 
            <div class=\"sidebar-footer hidden-small\">
              <a data-toggle=\"tooltip\" data-placement=\"top\" title=\"Salir\" href=\"";
        // line 136
        echo $this->env->getExtension('routing')->getPath("logout");
        echo "\">
                <span class=\"glyphicon glyphicon-off\" aria-hidden=\"true\"></span>
              </a>
            </div>
             /menu footer buttons -->
          </div>
        </div>

        <!-- top navigation -->
        <div class=\"top_nav\">
          <div class=\"nav_menu\">
            <nav>
              <div class=\"nav toggle\">
                <a id=\"menu_toggle\"><i class=\"fa fa-bars\">|||</i></a>
              </div>
              ";
        // line 151
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 152
            echo "              <ul class=\"nav navbar-nav navbar-right\">
                <li class=\"\">
                  <a href=\"javascript:;\" class=\"user-profile dropdown-toggle\" data-toggle=\"dropdown\" aria-expanded=\"false\">
                    <img src=\"";
            // line 155
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/public/images/icono.png"), "html", null, true);
            echo "\" alt=\"\">
                        ";
            // line 156
            if ($this->env->getExtension('security')->isGranted("ROLE_USER")) {
                // line 157
                echo "                        <span>";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
                echo "</span>
                        ";
            } elseif ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
                // line 159
                echo "                        <span>";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "firstName", array()), "html", null, true);
                echo "</span>
                        ";
            }
            // line 161
            echo "                    <span class=\" fa fa-angle-down\"></span>
                  </a>
                  <ul class=\"dropdown-menu dropdown-usermenu pull-right\">
                    <li><a href=\"";
            // line 164
            echo $this->env->getExtension('routing')->getPath("logout");
            echo "\"><i class=\"fa fa-sign-out pull-right\"></i> Salir</a></li>
                    ";
        }
        // line 166
        echo "                  </ul>
                </li>
              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->
        ";
        
        $__internal_ffdf89ce942c7be7d9922136cfa0dd4799e9b4453dc341b3e4dadc7dfd70fb83->leave($__internal_ffdf89ce942c7be7d9922136cfa0dd4799e9b4453dc341b3e4dadc7dfd70fb83_prof);

    }

    // line 175
    public function block_container($context, array $blocks = array())
    {
        $__internal_9b14ec9790d31bdb518c916c5c7ca2965faac685b1b3f552cd006bb77aaef715 = $this->env->getExtension("native_profiler");
        $__internal_9b14ec9790d31bdb518c916c5c7ca2965faac685b1b3f552cd006bb77aaef715->enter($__internal_9b14ec9790d31bdb518c916c5c7ca2965faac685b1b3f552cd006bb77aaef715_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "container"));

        // line 176
        echo "            <!-- page content -->
        <div class=\"right_col\" role=\"main\">
          <!-- top tiles -->
          <div class=\"row tile_count\">

                ";
        // line 181
        $this->displayBlock('_body', $context, $blocks);
        // line 184
        echo "

                ";
        // line 186
        $this->displayBlock('body', $context, $blocks);
        // line 188
        echo "                       
          </div>
        </div>
        <!-- /page content -->

        <!-- footer content -->
        <footer>
          <div class=\"pull-right\">
            Editorial Laboraorio Educativo | Todos los derechos Reservados
          </div>
          <div class=\"clearfix\"></div>
        </footer>
        <!-- /footer content -->
        ";
        
        $__internal_9b14ec9790d31bdb518c916c5c7ca2965faac685b1b3f552cd006bb77aaef715->leave($__internal_9b14ec9790d31bdb518c916c5c7ca2965faac685b1b3f552cd006bb77aaef715_prof);

    }

    // line 181
    public function block__body($context, array $blocks = array())
    {
        $__internal_32bb83524141bbc38b04d77a0acc601db553d7187255b333227356ffd4b3aacd = $this->env->getExtension("native_profiler");
        $__internal_32bb83524141bbc38b04d77a0acc601db553d7187255b333227356ffd4b3aacd->enter($__internal_32bb83524141bbc38b04d77a0acc601db553d7187255b333227356ffd4b3aacd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "_body"));

        // line 182
        echo "
                ";
        
        $__internal_32bb83524141bbc38b04d77a0acc601db553d7187255b333227356ffd4b3aacd->leave($__internal_32bb83524141bbc38b04d77a0acc601db553d7187255b333227356ffd4b3aacd_prof);

    }

    // line 186
    public function block_body($context, array $blocks = array())
    {
        $__internal_6dbbbf489b8d48b2203656f1b9c9a8b56ea3bfc14fba43982e259003b7b1d3df = $this->env->getExtension("native_profiler");
        $__internal_6dbbbf489b8d48b2203656f1b9c9a8b56ea3bfc14fba43982e259003b7b1d3df->enter($__internal_6dbbbf489b8d48b2203656f1b9c9a8b56ea3bfc14fba43982e259003b7b1d3df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 187
        echo "                
                ";
        
        $__internal_6dbbbf489b8d48b2203656f1b9c9a8b56ea3bfc14fba43982e259003b7b1d3df->leave($__internal_6dbbbf489b8d48b2203656f1b9c9a8b56ea3bfc14fba43982e259003b7b1d3df_prof);

    }

    // line 203
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_dba2cd316c72665b606021cd6306aef6b92675e467c15a2ae9d3d18c97e2f0ea = $this->env->getExtension("native_profiler");
        $__internal_dba2cd316c72665b606021cd6306aef6b92675e467c15a2ae9d3d18c97e2f0ea->enter($__internal_dba2cd316c72665b606021cd6306aef6b92675e467c15a2ae9d3d18c97e2f0ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 204
        echo "            <!-- jQuery -->
            <script src=\"";
        // line 205
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/public/vendors/jquery/dist/jquery.min.js"), "html", null, true);
        echo "\"></script>
            <!-- Bootstrap -->
            <script src=\"";
        // line 207
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/public/vendors/bootstrap/dist/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
            <!-- FastClick -->
            <script src=\"";
        // line 209
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/public/vendors/fastclick/lib/fastclick.js"), "html", null, true);
        echo "\"></script>
            <!-- NProgress -->
            <script src=\"";
        // line 211
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/public/vendors/nprogress/nprogress.js"), "html", null, true);
        echo "\"></script>
            <!-- Chart.js -->
            <script src=\"";
        // line 213
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/public/vendors/Chart.js/dist/Chart.min.js"), "html", null, true);
        echo "\"></script>
            <!-- gauge.js -->     
            <script src=\"";
        // line 215
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/public/vendors/gauge.js/dist/gauge.min.js"), "html", null, true);
        echo "\"></script>
            <!-- bootstrap-progressbar -->
            <script src=\"";
        // line 217
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/public/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"), "html", null, true);
        echo "\"></script> 
            <!-- iCheck -->   
            <script src=\"";
        // line 219
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/public/vendors/iCheck/icheck.min.js"), "html", null, true);
        echo "\"></script>
            <!-- Skycons -->
            <script src=\"";
        // line 221
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/public/vendors/skycons/skycons.js"), "html", null, true);
        echo "\"></script>
            <!-- Flot -->
            <script src=\"";
        // line 223
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/public/vendors/Flot/jquery.flot.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 224
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/public/vendors/Flot/jquery.flot.pie.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 225
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/public/vendors/Flot/jquery.flot.time.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 226
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/public/vendors/Flot/jquery.flot.stack.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 227
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/public/vendors/Flot/jquery.flot.resize.js"), "html", null, true);
        echo "\"></script>
            <!-- Flot plugins -->
            <script src=\"";
        // line 229
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/public/vendors/flot.orderbars/js/jquery.flot.orderBars.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 230
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/public/vendors/flot-spline/js/jquery.flot.spline.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 231
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/public/vendors/flot.curvedlines/curvedLines.js"), "html", null, true);
        echo "\"></script>
            <!-- DateJS -->
            <script src=\"";
        // line 233
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/public/vendors/DateJS/build/date.js"), "html", null, true);
        echo "\"></script>
            <!-- JQVMap -->
            <script src=\"";
        // line 235
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/public/vendors/jqvmap/dist/jquery.vmap.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 236
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/public/vendors/jqvmap/dist/maps/jquery.vmap.world.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 237
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/public/vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"), "html", null, true);
        echo "\"></script>
            <!-- bootstrap-daterangepicker -->
            <script src=\"";
        // line 239
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/public/vendors/moment/min/moment.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 240
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/public/vendors/bootstrap-daterangepicker/daterangepicker.js"), "html", null, true);
        echo "\"></script>
            <!-- Custom Theme Scripts -->
            <script src=\"";
        // line 242
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/public/build/js/custom.min.js"), "html", null, true);
        echo "\"></script>
        ";
        
        $__internal_dba2cd316c72665b606021cd6306aef6b92675e467c15a2ae9d3d18c97e2f0ea->leave($__internal_dba2cd316c72665b606021cd6306aef6b92675e467c15a2ae9d3d18c97e2f0ea_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  596 => 242,  591 => 240,  587 => 239,  582 => 237,  578 => 236,  574 => 235,  569 => 233,  564 => 231,  560 => 230,  556 => 229,  551 => 227,  547 => 226,  543 => 225,  539 => 224,  535 => 223,  530 => 221,  525 => 219,  520 => 217,  515 => 215,  510 => 213,  505 => 211,  500 => 209,  495 => 207,  490 => 205,  487 => 204,  481 => 203,  473 => 187,  467 => 186,  459 => 182,  453 => 181,  433 => 188,  431 => 186,  427 => 184,  425 => 181,  418 => 176,  412 => 175,  398 => 166,  393 => 164,  388 => 161,  382 => 159,  376 => 157,  374 => 156,  370 => 155,  365 => 152,  363 => 151,  345 => 136,  334 => 127,  329 => 125,  325 => 124,  317 => 119,  313 => 118,  304 => 112,  300 => 111,  296 => 109,  294 => 108,  290 => 106,  284 => 104,  281 => 103,  278 => 102,  273 => 100,  268 => 99,  266 => 98,  262 => 96,  259 => 95,  252 => 91,  248 => 90,  240 => 85,  236 => 84,  232 => 82,  230 => 81,  226 => 79,  222 => 78,  220 => 77,  216 => 75,  210 => 72,  206 => 70,  204 => 69,  194 => 61,  191 => 60,  187 => 58,  181 => 56,  179 => 55,  176 => 54,  174 => 53,  168 => 50,  157 => 42,  150 => 37,  144 => 36,  135 => 30,  130 => 28,  125 => 26,  120 => 24,  115 => 22,  110 => 20,  105 => 18,  100 => 16,  95 => 14,  92 => 13,  86 => 12,  74 => 10,  65 => 244,  63 => 203,  60 => 202,  58 => 175,  55 => 174,  53 => 36,  47 => 32,  45 => 12,  40 => 10,  29 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html lang="es">*/
/*     <head>*/
/*     <!-- Meta, title, CSS, favicons, etc. -->*/
/*         <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">*/
/*         <meta name="viewport" content="width=device-width, initial-scale=1.0">*/
/*         <meta http-equiv="X-UA-Compatible" content="IE=edge">*/
/* */
/* */
/*         <title>{% block title %}Editorial Laboratorio Educativo{% endblock %}</title>*/
/* */
/*         {% block stylesheets %}*/
/*             <!-- Bootstrap -->*/
/*             <link rel="stylesheet" href="{{ asset('bundles/public/vendors/bootstrap/dist/css/bootstrap.min.css')}}"/>*/
/*             <!-- Font Awesome -->*/
/*             <link rel="stylesheet" href="{{asset('bundles/public/vendors/font-agentelellawesome/css/font-awesome.min.css')}}"/>*/
/*             <!-- Imagen de icono -->*/
/*             <link rel="icon" type="image/x-icon" href="{{ asset('bundles/public/images/icono.png') }}" />*/
/*             <!-- NProgress -->*/
/*             <link rel="stylesheet" href="{{ asset('bundles/public/vendors/nprogress/nprogress.css')}}"/>*/
/*             <!-- iCheck -->*/
/*             <link rel="stylesheet" href="{{ asset('bundles/public/vendors/iCheck/skins/flat/green.css')}}"/>*/
/*             <!-- bootstrap-progressbar -->*/
/*             <link rel="stylesheet" href="{{ asset('bundles/public/vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css')}}">*/
/*              <!-- JQVMap -->*/
/*             <link rel="stylesheet" href="{{ asset('bundles/public/vendors/jqvmap/dist/jqvmap.min.css')}}">*/
/*             <!-- bootstrap-daterangepicker -->*/
/*             <link rel="stylesheet" href="{{ asset('bundles/public/vendors/bootstrap-daterangepicker/daterangepicker.css')}}">*/
/*             <!-- Custom Theme Style -->*/
/*             <link rel="stylesheet" href="{{ asset('bundles/public/build/css/costomrojo.css')}}">*/
/*         {% endblock %}*/
/* */
/*     </head>*/
/* */
/*     <body class="nav-md">*/
/*         {% block content %}*/
/*     <div class="container body">*/
/*       <div class="main_container">*/
/*         <div class="col-md-3 left_col">*/
/*           <div class="left_col scroll-view">*/
/*             <div class="navbar nav_title" style="border: 0;">*/
/*               <a href="" class="site_title"><img src="{{ asset('bundles/public/images/icono.png')}}" width="20px" heigth="20px" ><span> Lab. Educativo</span></a>*/
/*             </div>*/
/* */
/*             <div class="clearfix"></div>*/
/* */
/*             <!-- menu profile quick info -->*/
/*             <div class="profile clearfix">*/
/*               <div class="profile_pic">*/
/*                 <img src="{{ asset('bundles/public/images/icono.png')}}" alt="..." class="img-circle profile_img">*/
/*               </div>*/
/*               <div class="profile_info">*/
/*                   {% if is_granted('IS_AUTHENTICATED_FULLY') %}*/
/*                   <p>Bienvenido</p>*/
/*                       {% if is_granted('ROLE_USER')%}*/
/*                       <p>Cliente: {{ app.user.username }}</p>*/
/*                       {% elseif is_granted('ROLE_ADMIN')%}*/
/*                     <p>Administrador</p>*/
/*                       {% endif %}*/
/*                   {% endif %}*/
/*               </div>*/
/*             </div>*/
/*             <!-- /menu profile quick info -->*/
/* */
/*             <br />*/
/* */
/*             <!-- sidebar menu -->*/
/*             <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">*/
/*                 {% if is_granted('IS_AUTHENTICATED_FULLY') %}*/
/*               <div class="menu_section">*/
/*               <hr />*/
/*                <a href="{{ path('portada') }}"><h3> Inicio </h3></a>*/
/*               </div>*/
/*               {% endif %}*/
/*               <hr />*/
/*               <div class="menu_section">*/
/*                   {% if is_granted('ROLE_ADMIN') %}*/
/*                 <a><h3> Configuración </h3></a>*/
/*                 {% endif %}                */
/*                 <ul class="nav side-menu">*/
/*                     {% if is_granted('ROLE_ADMIN') %}*/
/*                   <li><a><i class="fa fa-bug"></i> Categorias <span class="fa fa-chevron-down"></span></a>*/
/*                     <ul class="nav child_menu">*/
/*                       <li><a href="{{ path('categoria_index') }}">Ver Categorias</a></li>*/
/*                       <li><a href="{{ path('categoria_new') }}">Crear Categoria</a></li>*/
/*                     </ul>*/
/*                   </li>*/
/*                   <li><a><i class="fa fa-windows"></i> Colecciones <span class="fa fa-chevron-down"></span></a>*/
/*                     <ul class="nav child_menu">*/
/*                       <li><a href="{{ path('coleccion_index') }}">Ver Colecciones</a></li>*/
/*                       <li><a href="{{ path('coleccion_new') }}">Crear Coleccion</a></li>*/
/*                     </ul>*/
/*                   </li>*/
/*                   {% endif %}*/
/*                   {% if is_granted('IS_AUTHENTICATED_FULLY') %}*/
/*                   <li><a><i class="fa fa-sitemap"></i> Libros <span class="fa fa-chevron-down"></span></a>*/
/*                     <ul class="nav child_menu">*/
/*                         {% if is_granted('ROLE_ADMIN') %}*/
/*                       <li><a href="{{ path('libro_index') }}">Ver Libros</a></li>*/
/*                       <li><a href="{{ path('libro_new') }}">Agregar Libros</a></li>*/
/*                       {% endif %}*/
/*                       {% endif %}*/
/*                       {% if is_granted('IS_AUTHENTICATED_FULLY') %}*/
/*                       <li><a href="{{ path('solicitud_new') }}">Solicitar Libros</a></li>*/
/*                       {% endif %}*/
/*                     </ul>*/
/*                   </li> */
/*                   {% if is_granted('ROLE_ADMIN') %}*/
/*                   <li><a><i class="fa fa-bug"></i> Solicitudes <span class="fa fa-chevron-down"></span></a>*/
/*                     <ul class="nav child_menu">*/
/*                       <li><a href="{{ path('solicitud_index') }}">Ver Solicitudes</a></li>*/
/*                       <li><a href="{{ path('solicitud_new') }}">Agregar Solicitudes</a></li>*/
/*                     </ul>*/
/*                   </li>*/
/*                   */
/*                   <li><a><i class="fa fa-bug"></i> Paises <span class="fa fa-chevron-down"></span></a>*/
/*                     <ul class="nav child_menu">*/
/*                       <li><a href="{{ path('pais_index') }}">Ver Paises</a></li>*/
/*                       <li><a href="{{ path('pais_new') }}">Agregar Paises</a></li>*/
/*                     </ul>*/
/*                   </li>*/
/*                   <li><a><i class="fa fa-bug"></i> Usuarios <span class="fa fa-chevron-down"></span></a>*/
/*                     <ul class="nav child_menu">*/
/*                       <li><a href="{{ path('user_index') }}">Ver Usuarios</a></li>*/
/*                       <li><a href="{{ path('user_new') }}">Crear Usuarios</a></li>*/
/*                       {% endif %}*/
/*                     </ul>*/
/*                   </li>    */
/*                 </ul>*/
/*               </div>*/
/*             </div>*/
/*             <!-- /sidebar menu -->*/
/* */
/*             <!-- /menu footer buttons */
/*             <div class="sidebar-footer hidden-small">*/
/*               <a data-toggle="tooltip" data-placement="top" title="Salir" href="{{ path('logout') }}">*/
/*                 <span class="glyphicon glyphicon-off" aria-hidden="true"></span>*/
/*               </a>*/
/*             </div>*/
/*              /menu footer buttons -->*/
/*           </div>*/
/*         </div>*/
/* */
/*         <!-- top navigation -->*/
/*         <div class="top_nav">*/
/*           <div class="nav_menu">*/
/*             <nav>*/
/*               <div class="nav toggle">*/
/*                 <a id="menu_toggle"><i class="fa fa-bars">|||</i></a>*/
/*               </div>*/
/*               {% if is_granted('IS_AUTHENTICATED_FULLY') %}*/
/*               <ul class="nav navbar-nav navbar-right">*/
/*                 <li class="">*/
/*                   <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">*/
/*                     <img src="{{ asset('bundles/public/images/icono.png')}}" alt="">*/
/*                         {% if is_granted('ROLE_USER')%}*/
/*                         <span>{{ app.user.username }}</span>*/
/*                         {% elseif is_granted('ROLE_ADMIN')%}*/
/*                         <span>{{ app.user.firstName}}</span>*/
/*                         {% endif %}*/
/*                     <span class=" fa fa-angle-down"></span>*/
/*                   </a>*/
/*                   <ul class="dropdown-menu dropdown-usermenu pull-right">*/
/*                     <li><a href="{{ path('logout') }}"><i class="fa fa-sign-out pull-right"></i> Salir</a></li>*/
/*                     {% endif %}*/
/*                   </ul>*/
/*                 </li>*/
/*               </ul>*/
/*             </nav>*/
/*           </div>*/
/*         </div>*/
/*         <!-- /top navigation -->*/
/*         {% endblock %}*/
/* */
/*       {% block container %}*/
/*             <!-- page content -->*/
/*         <div class="right_col" role="main">*/
/*           <!-- top tiles -->*/
/*           <div class="row tile_count">*/
/* */
/*                 {% block _body %}*/
/* */
/*                 {% endblock %}*/
/* */
/* */
/*                 {% block body %}*/
/*                 */
/*                 {% endblock %}                       */
/*           </div>*/
/*         </div>*/
/*         <!-- /page content -->*/
/* */
/*         <!-- footer content -->*/
/*         <footer>*/
/*           <div class="pull-right">*/
/*             Editorial Laboraorio Educativo | Todos los derechos Reservados*/
/*           </div>*/
/*           <div class="clearfix"></div>*/
/*         </footer>*/
/*         <!-- /footer content -->*/
/*         {% endblock %}*/
/* */
/*         {% block javascripts %}*/
/*             <!-- jQuery -->*/
/*             <script src="{{ asset('bundles/public/vendors/jquery/dist/jquery.min.js')}}"></script>*/
/*             <!-- Bootstrap -->*/
/*             <script src="{{ asset('bundles/public/vendors/bootstrap/dist/js/bootstrap.min.js')}}"></script>*/
/*             <!-- FastClick -->*/
/*             <script src="{{ asset('bundles/public/vendors/fastclick/lib/fastclick.js')}}"></script>*/
/*             <!-- NProgress -->*/
/*             <script src="{{ asset('bundles/public/vendors/nprogress/nprogress.js')}}"></script>*/
/*             <!-- Chart.js -->*/
/*             <script src="{{ asset('bundles/public/vendors/Chart.js/dist/Chart.min.js')}}"></script>*/
/*             <!-- gauge.js -->     */
/*             <script src="{{ asset('bundles/public/vendors/gauge.js/dist/gauge.min.js')}}"></script>*/
/*             <!-- bootstrap-progressbar -->*/
/*             <script src="{{ asset('bundles/public/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js')}}"></script> */
/*             <!-- iCheck -->   */
/*             <script src="{{ asset('bundles/public/vendors/iCheck/icheck.min.js')}}"></script>*/
/*             <!-- Skycons -->*/
/*             <script src="{{ asset('bundles/public/vendors/skycons/skycons.js')}}"></script>*/
/*             <!-- Flot -->*/
/*             <script src="{{ asset('bundles/public/vendors/Flot/jquery.flot.js')}}"></script>*/
/*             <script src="{{ asset('bundles/public/vendors/Flot/jquery.flot.pie.js')}}"></script>*/
/*             <script src="{{ asset('bundles/public/vendors/Flot/jquery.flot.time.js')}}"></script>*/
/*             <script src="{{ asset('bundles/public/vendors/Flot/jquery.flot.stack.js')}}"></script>*/
/*             <script src="{{ asset('bundles/public/vendors/Flot/jquery.flot.resize.js')}}"></script>*/
/*             <!-- Flot plugins -->*/
/*             <script src="{{ asset('bundles/public/vendors/flot.orderbars/js/jquery.flot.orderBars.js')}}"></script>*/
/*             <script src="{{ asset('bundles/public/vendors/flot-spline/js/jquery.flot.spline.min.js')}}"></script>*/
/*             <script src="{{ asset('bundles/public/vendors/flot.curvedlines/curvedLines.js')}}"></script>*/
/*             <!-- DateJS -->*/
/*             <script src="{{ asset('bundles/public/vendors/DateJS/build/date.js')}}"></script>*/
/*             <!-- JQVMap -->*/
/*             <script src="{{ asset('bundles/public/vendors/jqvmap/dist/jquery.vmap.js')}}"></script>*/
/*             <script src="{{ asset('bundles/public/vendors/jqvmap/dist/maps/jquery.vmap.world.js')}}"></script>*/
/*             <script src="{{ asset('bundles/public/vendors/jqvmap/examples/js/jquery.vmap.sampledata.js')}}"></script>*/
/*             <!-- bootstrap-daterangepicker -->*/
/*             <script src="{{ asset('bundles/public/vendors/moment/min/moment.min.js')}}"></script>*/
/*             <script src="{{ asset('bundles/public/vendors/bootstrap-daterangepicker/daterangepicker.js')}}"></script>*/
/*             <!-- Custom Theme Scripts -->*/
/*             <script src="{{ asset('bundles/public/build/js/custom.min.js')}}"></script>*/
/*         {% endblock %}*/
/*     </body>*/
/* </html>  */
/* */
