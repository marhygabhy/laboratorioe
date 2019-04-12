<?php

/* base.html.twig */
class __TwigTemplate_544fb80eab2e9d8ef5d77d4d46240192717e48b823dc58bf0244c6ff6592dbbf extends Twig_Template
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
        $__internal_e3b82ea8075575c727be9e1f4b1f6879dde129b0ec8a5f1ef5fef8bfb6a56c81 = $this->env->getExtension("native_profiler");
        $__internal_e3b82ea8075575c727be9e1f4b1f6879dde129b0ec8a5f1ef5fef8bfb6a56c81->enter($__internal_e3b82ea8075575c727be9e1f4b1f6879dde129b0ec8a5f1ef5fef8bfb6a56c81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        // line 144
        echo "
      ";
        // line 145
        $this->displayBlock('container', $context, $blocks);
        // line 172
        echo "
        ";
        // line 173
        $this->displayBlock('javascripts', $context, $blocks);
        // line 214
        echo "    </body>
</html>  
";
        
        $__internal_e3b82ea8075575c727be9e1f4b1f6879dde129b0ec8a5f1ef5fef8bfb6a56c81->leave($__internal_e3b82ea8075575c727be9e1f4b1f6879dde129b0ec8a5f1ef5fef8bfb6a56c81_prof);

    }

    // line 10
    public function block_title($context, array $blocks = array())
    {
        $__internal_c3f8320d2e47a0fdac1eb7ce38cfefdf092990a01a73b4a2de2ec86c260f49e1 = $this->env->getExtension("native_profiler");
        $__internal_c3f8320d2e47a0fdac1eb7ce38cfefdf092990a01a73b4a2de2ec86c260f49e1->enter($__internal_c3f8320d2e47a0fdac1eb7ce38cfefdf092990a01a73b4a2de2ec86c260f49e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Editorial Laboratorio Educativo";
        
        $__internal_c3f8320d2e47a0fdac1eb7ce38cfefdf092990a01a73b4a2de2ec86c260f49e1->leave($__internal_c3f8320d2e47a0fdac1eb7ce38cfefdf092990a01a73b4a2de2ec86c260f49e1_prof);

    }

    // line 12
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_613867f58235c26fdeb307522229b31ab3aaeab46795a7087234d7193f711b47 = $this->env->getExtension("native_profiler");
        $__internal_613867f58235c26fdeb307522229b31ab3aaeab46795a7087234d7193f711b47->enter($__internal_613867f58235c26fdeb307522229b31ab3aaeab46795a7087234d7193f711b47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/public/build/css/custom.min.css"), "html", null, true);
        echo "\">
        ";
        
        $__internal_613867f58235c26fdeb307522229b31ab3aaeab46795a7087234d7193f711b47->leave($__internal_613867f58235c26fdeb307522229b31ab3aaeab46795a7087234d7193f711b47_prof);

    }

    // line 36
    public function block_content($context, array $blocks = array())
    {
        $__internal_fd9709d7d6751743f27c54b558a0e328906524abcd47c4f1be52fb53b8459b51 = $this->env->getExtension("native_profiler");
        $__internal_fd9709d7d6751743f27c54b558a0e328906524abcd47c4f1be52fb53b8459b51->enter($__internal_fd9709d7d6751743f27c54b558a0e328906524abcd47c4f1be52fb53b8459b51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 37
        echo "    <div class=\"container body\">
      <div class=\"main_container\">
        <div class=\"col-md-3 left_col\">
          <div class=\"left_col scroll-view\">
            <div class=\"navbar nav_title\" style=\"border: 0;\">
              <a href=\"";
        // line 42
        echo $this->env->getExtension('routing')->getPath("index");
        echo "\" class=\"site_title\"><img src=\"";
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
                <span>Bienvenido</span>
                <h2>Usuario</h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id=\"sidebar-menu\" class=\"main_menu_side hidden-print main_menu\">
              <div class=\"menu_section\">
              <hr />
               <a href=\"";
        // line 65
        echo $this->env->getExtension('routing')->getPath("index");
        echo "\"><h3> Inicio </h3></a>
                <ul class=\"nav side-menu\">
                  <li><a href=\"";
        // line 67
        echo $this->env->getExtension('routing')->getPath("resena");
        echo "\"><i class=\"fa fa-edit\"></i> Reseña <span class=\"fa fa-chevron-down\"></span></a>
                  </li>
                  <li><a href=\"";
        // line 69
        echo $this->env->getExtension('routing')->getPath("novedades");
        echo "\"><i class=\"fa fa-desktop\"></i> Novedades <span class=\"fa fa-chevron-down\"></span></a>
                  </li>
                </ul>
              </div>
              <hr />
              <div class=\"menu_section\">
                <a href=\"";
        // line 75
        echo $this->env->getExtension('routing')->getPath("categoria_index");
        echo "\"><h3> Categorias </h3></a>                
                <ul class=\"nav side-menu\">
                  <li><a><i class=\"fa fa-bug\"></i> Actualidad <span class=\"fa fa-chevron-down\"></span></a>
                    <ul class=\"nav child_menu\">
                      <li><a href=\"#\">Nos[otros]</a></li>
                      <li><a href=\"#\">Quintaesencia</a></li>
                    </ul>
                  </li>
                  <li><a><i class=\"fa fa-windows\"></i> Infantil y Juvenil <span class=\"fa fa-chevron-down\"></span></a>
                    <ul class=\"nav child_menu\">
                      <li><a href=\"#\">Biblioteca de trabajo</a></li>
                      <li><a href=\"#\">El tren de Siveria</a></li>
                    </ul>
                  </li>
                  <li><a><i class=\"fa fa-sitemap\"></i> Educación y Pedagogía <span class=\"fa fa-chevron-down\"></span></a>
                    <ul class=\"nav child_menu\">
                        <li><a href=\"#\">Cuadernos de Educación</a></li>
                        <li><a href=\"#\">Cuadernos de Pedagogía</a></li>
                        <li><a href=\"#\">Proa</a></li>
                        <li><a href=\"#\">Leer y Escribir</a></li>
                        <li><a href=\"#\">Biblioteca de Educación de Adultos</a></li>
                        <li><a href=\"#\">Científicos Matemáticos</a></li>
                        <li><a href=\"#\">Claves para la Innovación Educativa</a></li>
                    </ul>
                  </li>     
                </ul>
              </div>
            <div class=\"menu_section\">
              <hr />
               <a href=\"";
        // line 104
        echo $this->env->getExtension('routing')->getPath("coleccion_index");
        echo "\"><h3> Colecciones </h3></a>
              </div>
            </div>
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
            <div class=\"sidebar-footer hidden-small\">
              <a data-toggle=\"tooltip\" data-placement=\"top\" title=\"Salir\" href=\"login.html\">
                <span class=\"glyphicon glyphicon-off\" aria-hidden=\"true\"></span>
              </a>
            </div>
            <!-- /menu footer buttons -->
          </div>
        </div>

        <!-- top navigation -->
        <div class=\"top_nav\">
          <div class=\"nav_menu\">
            <nav>
              <div class=\"nav toggle\">
                <a id=\"menu_toggle\"><i class=\"fa fa-bars\"></i></a>
              </div>

              <ul class=\"nav navbar-nav navbar-right\">
                <li class=\"\">
                  <a href=\"javascript:;\" class=\"user-profile dropdown-toggle\" data-toggle=\"dropdown\" aria-expanded=\"false\">
                    <img src=\"";
        // line 130
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/public/images/icono.png"), "html", null, true);
        echo "\" alt=\"\">Usuario
                    <span class=\" fa fa-angle-down\"></span>
                  </a>
                  <ul class=\"dropdown-menu dropdown-usermenu pull-right\">
                    <li><a href=\"javascript:;\"> Perfil</a></li>
                    <li><a href=\"";
        // line 135
        echo $this->env->getExtension('routing')->getPath("login");
        echo "\"><i class=\"fa fa-sign-out pull-right\"></i> Salir</a></li>
                  </ul>
                </li>
              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->
        ";
        
        $__internal_fd9709d7d6751743f27c54b558a0e328906524abcd47c4f1be52fb53b8459b51->leave($__internal_fd9709d7d6751743f27c54b558a0e328906524abcd47c4f1be52fb53b8459b51_prof);

    }

    // line 145
    public function block_container($context, array $blocks = array())
    {
        $__internal_d226a45881110935d5c46315310a1c65ac34a4696de7c05ebb0d2b704a3e5c5a = $this->env->getExtension("native_profiler");
        $__internal_d226a45881110935d5c46315310a1c65ac34a4696de7c05ebb0d2b704a3e5c5a->enter($__internal_d226a45881110935d5c46315310a1c65ac34a4696de7c05ebb0d2b704a3e5c5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "container"));

        // line 146
        echo "            <!-- page content -->
        <div class=\"right_col\" role=\"main\">
          <!-- top tiles -->
          <div class=\"row tile_count\">

                ";
        // line 151
        $this->displayBlock('_body', $context, $blocks);
        // line 154
        echo "

                ";
        // line 156
        $this->displayBlock('body', $context, $blocks);
        // line 158
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
        
        $__internal_d226a45881110935d5c46315310a1c65ac34a4696de7c05ebb0d2b704a3e5c5a->leave($__internal_d226a45881110935d5c46315310a1c65ac34a4696de7c05ebb0d2b704a3e5c5a_prof);

    }

    // line 151
    public function block__body($context, array $blocks = array())
    {
        $__internal_627b4269f194da537fa7bf12f1ec5c2a36f8eb29a685b01a8402e5891ea8b63a = $this->env->getExtension("native_profiler");
        $__internal_627b4269f194da537fa7bf12f1ec5c2a36f8eb29a685b01a8402e5891ea8b63a->enter($__internal_627b4269f194da537fa7bf12f1ec5c2a36f8eb29a685b01a8402e5891ea8b63a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "_body"));

        // line 152
        echo "
                ";
        
        $__internal_627b4269f194da537fa7bf12f1ec5c2a36f8eb29a685b01a8402e5891ea8b63a->leave($__internal_627b4269f194da537fa7bf12f1ec5c2a36f8eb29a685b01a8402e5891ea8b63a_prof);

    }

    // line 156
    public function block_body($context, array $blocks = array())
    {
        $__internal_2853b6eaf4c2cfbb9639d615b28503e4caf282f460334b6725ce7cab0e207473 = $this->env->getExtension("native_profiler");
        $__internal_2853b6eaf4c2cfbb9639d615b28503e4caf282f460334b6725ce7cab0e207473->enter($__internal_2853b6eaf4c2cfbb9639d615b28503e4caf282f460334b6725ce7cab0e207473_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 157
        echo "
                ";
        
        $__internal_2853b6eaf4c2cfbb9639d615b28503e4caf282f460334b6725ce7cab0e207473->leave($__internal_2853b6eaf4c2cfbb9639d615b28503e4caf282f460334b6725ce7cab0e207473_prof);

    }

    // line 173
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_388d005bfeeeed3c0d0853c0f25f98bc0dd6fac58f1ac6a3cc748c47214565fb = $this->env->getExtension("native_profiler");
        $__internal_388d005bfeeeed3c0d0853c0f25f98bc0dd6fac58f1ac6a3cc748c47214565fb->enter($__internal_388d005bfeeeed3c0d0853c0f25f98bc0dd6fac58f1ac6a3cc748c47214565fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 174
        echo "            <!-- jQuery -->
            <script src=\"";
        // line 175
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/public/vendors/jquery/dist/jquery.min.js"), "html", null, true);
        echo "\"></script>
            <!-- Bootstrap -->
            <script src=\"";
        // line 177
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/public/vendors/bootstrap/dist/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
            <!-- FastClick -->
            <script src=\"";
        // line 179
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/public/vendors/fastclick/lib/fastclick.js"), "html", null, true);
        echo "\"></script>
            <!-- NProgress -->
            <script src=\"";
        // line 181
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/public/vendors/nprogress/nprogress.js"), "html", null, true);
        echo "\"></script>
            <!-- Chart.js -->
            <script src=\"";
        // line 183
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/public/vendors/Chart.js/dist/Chart.min.js"), "html", null, true);
        echo "\"></script>
            <!-- gauge.js -->     
            <script src=\"";
        // line 185
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/public/vendors/gauge.js/dist/gauge.min.js"), "html", null, true);
        echo "\"></script>
            <!-- bootstrap-progressbar -->
            <script src=\"";
        // line 187
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/public/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"), "html", null, true);
        echo "\"></script> 
            <!-- iCheck -->   
            <script src=\"";
        // line 189
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/public/vendors/iCheck/icheck.min.js"), "html", null, true);
        echo "\"></script>
            <!-- Skycons -->
            <script src=\"";
        // line 191
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/public/vendors/skycons/skycons.js"), "html", null, true);
        echo "\"></script>
            <!-- Flot -->
            <script src=\"";
        // line 193
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/public/vendors/Flot/jquery.flot.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 194
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/public/vendors/Flot/jquery.flot.pie.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 195
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/public/vendors/Flot/jquery.flot.time.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 196
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/public/vendors/Flot/jquery.flot.stack.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 197
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/public/vendors/Flot/jquery.flot.resize.js"), "html", null, true);
        echo "\"></script>
            <!-- Flot plugins -->
            <script src=\"";
        // line 199
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/public/vendors/flot.orderbars/js/jquery.flot.orderBars.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 200
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/public/vendors/flot-spline/js/jquery.flot.spline.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 201
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/public/vendors/flot.curvedlines/curvedLines.js"), "html", null, true);
        echo "\"></script>
            <!-- DateJS -->
            <script src=\"";
        // line 203
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/public/vendors/DateJS/build/date.js"), "html", null, true);
        echo "\"></script>
            <!-- JQVMap -->
            <script src=\"";
        // line 205
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/public/vendors/jqvmap/dist/jquery.vmap.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 206
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/public/vendors/jqvmap/dist/maps/jquery.vmap.world.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 207
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/public/vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"), "html", null, true);
        echo "\"></script>
            <!-- bootstrap-daterangepicker -->
            <script src=\"";
        // line 209
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/public/vendors/moment/min/moment.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 210
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/public/vendors/bootstrap-daterangepicker/daterangepicker.js"), "html", null, true);
        echo "\"></script>
            <!-- Custom Theme Scripts -->
            <script src=\"";
        // line 212
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/public/build/js/custom.min.js"), "html", null, true);
        echo "\"></script>
        ";
        
        $__internal_388d005bfeeeed3c0d0853c0f25f98bc0dd6fac58f1ac6a3cc748c47214565fb->leave($__internal_388d005bfeeeed3c0d0853c0f25f98bc0dd6fac58f1ac6a3cc748c47214565fb_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  476 => 212,  471 => 210,  467 => 209,  462 => 207,  458 => 206,  454 => 205,  449 => 203,  444 => 201,  440 => 200,  436 => 199,  431 => 197,  427 => 196,  423 => 195,  419 => 194,  415 => 193,  410 => 191,  405 => 189,  400 => 187,  395 => 185,  390 => 183,  385 => 181,  380 => 179,  375 => 177,  370 => 175,  367 => 174,  361 => 173,  353 => 157,  347 => 156,  339 => 152,  333 => 151,  313 => 158,  311 => 156,  307 => 154,  305 => 151,  298 => 146,  292 => 145,  276 => 135,  268 => 130,  239 => 104,  207 => 75,  198 => 69,  193 => 67,  188 => 65,  170 => 50,  157 => 42,  150 => 37,  144 => 36,  135 => 30,  130 => 28,  125 => 26,  120 => 24,  115 => 22,  110 => 20,  105 => 18,  100 => 16,  95 => 14,  92 => 13,  86 => 12,  74 => 10,  65 => 214,  63 => 173,  60 => 172,  58 => 145,  55 => 144,  53 => 36,  47 => 32,  45 => 12,  40 => 10,  29 => 1,);
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
/*             <link rel="stylesheet" href="{{ asset('bundles/public/build/css/custom.min.css')}}">*/
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
/*               <a href="{{ path('index') }}" class="site_title"><img src="{{ asset('bundles/public/images/icono.png')}}" width="20px" heigth="20px" ><span> Lab. Educativo</span></a>*/
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
/*                 <span>Bienvenido</span>*/
/*                 <h2>Usuario</h2>*/
/*               </div>*/
/*             </div>*/
/*             <!-- /menu profile quick info -->*/
/* */
/*             <br />*/
/* */
/*             <!-- sidebar menu -->*/
/*             <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">*/
/*               <div class="menu_section">*/
/*               <hr />*/
/*                <a href="{{ path('index') }}"><h3> Inicio </h3></a>*/
/*                 <ul class="nav side-menu">*/
/*                   <li><a href="{{ path('resena') }}"><i class="fa fa-edit"></i> Reseña <span class="fa fa-chevron-down"></span></a>*/
/*                   </li>*/
/*                   <li><a href="{{ path('novedades') }}"><i class="fa fa-desktop"></i> Novedades <span class="fa fa-chevron-down"></span></a>*/
/*                   </li>*/
/*                 </ul>*/
/*               </div>*/
/*               <hr />*/
/*               <div class="menu_section">*/
/*                 <a href="{{ path('categoria_index') }}"><h3> Categorias </h3></a>                */
/*                 <ul class="nav side-menu">*/
/*                   <li><a><i class="fa fa-bug"></i> Actualidad <span class="fa fa-chevron-down"></span></a>*/
/*                     <ul class="nav child_menu">*/
/*                       <li><a href="#">Nos[otros]</a></li>*/
/*                       <li><a href="#">Quintaesencia</a></li>*/
/*                     </ul>*/
/*                   </li>*/
/*                   <li><a><i class="fa fa-windows"></i> Infantil y Juvenil <span class="fa fa-chevron-down"></span></a>*/
/*                     <ul class="nav child_menu">*/
/*                       <li><a href="#">Biblioteca de trabajo</a></li>*/
/*                       <li><a href="#">El tren de Siveria</a></li>*/
/*                     </ul>*/
/*                   </li>*/
/*                   <li><a><i class="fa fa-sitemap"></i> Educación y Pedagogía <span class="fa fa-chevron-down"></span></a>*/
/*                     <ul class="nav child_menu">*/
/*                         <li><a href="#">Cuadernos de Educación</a></li>*/
/*                         <li><a href="#">Cuadernos de Pedagogía</a></li>*/
/*                         <li><a href="#">Proa</a></li>*/
/*                         <li><a href="#">Leer y Escribir</a></li>*/
/*                         <li><a href="#">Biblioteca de Educación de Adultos</a></li>*/
/*                         <li><a href="#">Científicos Matemáticos</a></li>*/
/*                         <li><a href="#">Claves para la Innovación Educativa</a></li>*/
/*                     </ul>*/
/*                   </li>     */
/*                 </ul>*/
/*               </div>*/
/*             <div class="menu_section">*/
/*               <hr />*/
/*                <a href="{{ path('coleccion_index') }}"><h3> Colecciones </h3></a>*/
/*               </div>*/
/*             </div>*/
/*             <!-- /sidebar menu -->*/
/* */
/*             <!-- /menu footer buttons -->*/
/*             <div class="sidebar-footer hidden-small">*/
/*               <a data-toggle="tooltip" data-placement="top" title="Salir" href="login.html">*/
/*                 <span class="glyphicon glyphicon-off" aria-hidden="true"></span>*/
/*               </a>*/
/*             </div>*/
/*             <!-- /menu footer buttons -->*/
/*           </div>*/
/*         </div>*/
/* */
/*         <!-- top navigation -->*/
/*         <div class="top_nav">*/
/*           <div class="nav_menu">*/
/*             <nav>*/
/*               <div class="nav toggle">*/
/*                 <a id="menu_toggle"><i class="fa fa-bars"></i></a>*/
/*               </div>*/
/* */
/*               <ul class="nav navbar-nav navbar-right">*/
/*                 <li class="">*/
/*                   <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">*/
/*                     <img src="{{ asset('bundles/public/images/icono.png')}}" alt="">Usuario*/
/*                     <span class=" fa fa-angle-down"></span>*/
/*                   </a>*/
/*                   <ul class="dropdown-menu dropdown-usermenu pull-right">*/
/*                     <li><a href="javascript:;"> Perfil</a></li>*/
/*                     <li><a href="{{ path('login') }}"><i class="fa fa-sign-out pull-right"></i> Salir</a></li>*/
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
/* */
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
