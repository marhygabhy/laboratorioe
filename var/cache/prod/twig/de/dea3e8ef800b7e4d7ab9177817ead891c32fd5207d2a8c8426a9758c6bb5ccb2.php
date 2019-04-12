<?php

/* base.html.twig */
class __TwigTemplate_bd1d3d6ecd2368d343b407e496c906c43a73482a43f0e8fbebc73eb15d8586e8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            '_body' => array($this, 'block__body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
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
        $this->displayBlock('_body', $context, $blocks);
        // line 301
        echo "
        ";
        // line 302
        $this->displayBlock('javascripts', $context, $blocks);
        // line 343
        echo "    </body>
</html>
";
    }

    // line 10
    public function block_title($context, array $blocks = array())
    {
        echo "Editorial Laboratorio Educativo";
    }

    // line 12
    public function block_stylesheets($context, array $blocks = array())
    {
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
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/public/imagenes/ubv_mini.png"), "html", null, true);
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
        echo "\">ç
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
    }

    // line 36
    public function block__body($context, array $blocks = array())
    {
        // line 37
        echo "          <div class=\"container body\">
      <div class=\"main_container\">
        <div class=\"col-md-3 left_col\">
          <div class=\"left_col scroll-view\">
            <div class=\"navbar nav_title\" style=\"border: 0;\">
              <a href=\"index.html\" class=\"site_title\"><span>Editorial</span></a>
            </div>

            <div class=\"clearfix\"></div>

            <!-- menu profile quick info -->
            <div class=\"profile clearfix\">
              <div class=\"profile_pic\">
                <img src=\"bundles/public/images/img.jpg\" alt=\"...\" class=\"img-circle profile_img\">
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
                <h3>General</h3>
                <ul class=\"nav side-menu\">
                  <li><a><i class=\"fa fa-home\"></i> Home <span class=\"fa fa-chevron-down\"></span></a>
                    <ul class=\"nav child_menu\">
                      <li><a href=\"index.html\">Dashboard</a></li>
                      <li><a href=\"index2.html\">Dashboard2</a></li>
                      <li><a href=\"index3.html\">Dashboard3</a></li>
                    </ul>
                  </li>
                  <li><a><i class=\"fa fa-edit\"></i> Forms <span class=\"fa fa-chevron-down\"></span></a>
                    <ul class=\"nav child_menu\">
                      <li><a href=\"form.html\">General Form</a></li>
                      <li><a href=\"form_advanced.html\">Advanced Components</a></li>
                      <li><a href=\"form_validation.html\">Form Validation</a></li>
                      <li><a href=\"form_wizards.html\">Form Wizard</a></li>
                      <li><a href=\"form_upload.html\">Form Upload</a></li>
                      <li><a href=\"form_buttons.html\">Form Buttons</a></li>
                    </ul>
                  </li>
                  <li><a><i class=\"fa fa-desktop\"></i> UI Elements <span class=\"fa fa-chevron-down\"></span></a>
                    <ul class=\"nav child_menu\">
                      <li><a href=\"general_elements.html\">General Elements</a></li>
                      <li><a href=\"media_gallery.html\">Media Gallery</a></li>
                      <li><a href=\"typography.html\">Typography</a></li>
                      <li><a href=\"icons.html\">Icons</a></li>
                      <li><a href=\"glyphicons.html\">Glyphicons</a></li>
                      <li><a href=\"widgets.html\">Widgets</a></li>
                      <li><a href=\"invoice.html\">Invoice</a></li>
                      <li><a href=\"inbox.html\">Inbox</a></li>
                      <li><a href=\"calendar.html\">Calendar</a></li>
                    </ul>
                  </li>
                  <li><a><i class=\"fa fa-table\"></i> Tables <span class=\"fa fa-chevron-down\"></span></a>
                    <ul class=\"nav child_menu\">
                      <li><a href=\"tables.html\">Tables</a></li>
                      <li><a href=\"tables_dynamic.html\">Table Dynamic</a></li>
                    </ul>
                  </li>
                  <li><a><i class=\"fa fa-bar-chart-o\"></i> Data Presentation <span class=\"fa fa-chevron-down\"></span></a>
                    <ul class=\"nav child_menu\">
                      <li><a href=\"chartjs.html\">Chart JS</a></li>
                      <li><a href=\"chartjs2.html\">Chart JS2</a></li>
                      <li><a href=\"morisjs.html\">Moris JS</a></li>
                      <li><a href=\"echarts.html\">ECharts</a></li>
                      <li><a href=\"other_charts.html\">Other Charts</a></li>
                    </ul>
                  </li>
                  <li><a><i class=\"fa fa-clone\"></i>Layouts <span class=\"fa fa-chevron-down\"></span></a>
                    <ul class=\"nav child_menu\">
                      <li><a href=\"fixed_sidebar.html\">Fixed Sidebar</a></li>
                      <li><a href=\"fixed_footer.html\">Fixed Footer</a></li>
                    </ul>
                  </li>
                </ul>
              </div>
              <div class=\"menu_section\">
                <h3>Live On</h3>
                <ul class=\"nav side-menu\">
                  <li><a><i class=\"fa fa-bug\"></i> Additional Pages <span class=\"fa fa-chevron-down\"></span></a>
                    <ul class=\"nav child_menu\">
                      <li><a href=\"e_commerce.html\">E-commerce</a></li>
                      <li><a href=\"projects.html\">Projects</a></li>
                      <li><a href=\"project_detail.html\">Project Detail</a></li>
                      <li><a href=\"contacts.html\">Contacts</a></li>
                      <li><a href=\"profile.html\">Profile</a></li>
                    </ul>
                  </li>
                  <li><a><i class=\"fa fa-windows\"></i> Extras <span class=\"fa fa-chevron-down\"></span></a>
                    <ul class=\"nav child_menu\">
                      <li><a href=\"page_403.html\">403 Error</a></li>
                      <li><a href=\"page_404.html\">404 Error</a></li>
                      <li><a href=\"page_500.html\">500 Error</a></li>
                      <li><a href=\"plain_page.html\">Plain Page</a></li>
                      <li><a href=\"login.html\">Login Page</a></li>
                      <li><a href=\"pricing_tables.html\">Pricing Tables</a></li>
                    </ul>
                  </li>
                  <li><a><i class=\"fa fa-sitemap\"></i> Multilevel Menu <span class=\"fa fa-chevron-down\"></span></a>
                    <ul class=\"nav child_menu\">
                        <li><a href=\"#level1_1\">Level One</a>
                        <li><a>Level One<span class=\"fa fa-chevron-down\"></span></a>
                          <ul class=\"nav child_menu\">
                            <li class=\"sub_menu\"><a href=\"level2.html\">Level Two</a>
                            </li>
                            <li><a href=\"#level2_1\">Level Two</a>
                            </li>
                            <li><a href=\"#level2_2\">Level Two</a>
                            </li>
                          </ul>
                        </li>
                        <li><a href=\"#level1_2\">Level One</a>
                        </li>
                    </ul>
                  </li>                  
                  <li><a href=\"javascript:void(0)\"><i class=\"fa fa-laptop\"></i> Landing Page <span class=\"label label-success pull-right\">Coming Soon</span></a></li>
                </ul>
              </div>

            </div>
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
            <div class=\"sidebar-footer hidden-small\">
              <a data-toggle=\"tooltip\" data-placement=\"top\" title=\"Settings\">
                <span class=\"glyphicon glyphicon-cog\" aria-hidden=\"true\"></span>
              </a>
              <a data-toggle=\"tooltip\" data-placement=\"top\" title=\"FullScreen\">
                <span class=\"glyphicon glyphicon-fullscreen\" aria-hidden=\"true\"></span>
              </a>
              <a data-toggle=\"tooltip\" data-placement=\"top\" title=\"Lock\">
                <span class=\"glyphicon glyphicon-eye-close\" aria-hidden=\"true\"></span>
              </a>
              <a data-toggle=\"tooltip\" data-placement=\"top\" title=\"Logout\" href=\"login.html\">
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
                    <img src=\"images/img.jpg\" alt=\"\">John Doe
                    <span class=\" fa fa-angle-down\"></span>
                  </a>
                  <ul class=\"dropdown-menu dropdown-usermenu pull-right\">
                    <li><a href=\"javascript:;\"> Profile</a></li>
                    <li>
                      <a href=\"javascript:;\">
                        <span class=\"badge bg-red pull-right\">50%</span>
                        <span>Settings</span>
                      </a>
                    </li>
                    <li><a href=\"javascript:;\">Help</a></li>
                    <li><a href=\"login.html\"><i class=\"fa fa-sign-out pull-right\"></i> Log Out</a></li>
                  </ul>
                </li>

                <li role=\"presentation\" class=\"dropdown\">
                  <a href=\"javascript:;\" class=\"dropdown-toggle info-number\" data-toggle=\"dropdown\" aria-expanded=\"false\">
                    <i class=\"fa fa-envelope-o\"></i>
                    <span class=\"badge bg-green\">6</span>
                  </a>
                  <ul id=\"menu1\" class=\"dropdown-menu list-unstyled msg_list\" role=\"menu\">
                    <li>
                      <a>
                        <span class=\"image\"><img src=\"images/img.jpg\" alt=\"Profile Image\" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class=\"time\">3 mins ago</span>
                        </span>
                        <span class=\"message\">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <a>
                        <span class=\"image\"><img src=\"images/img.jpg\" alt=\"Profile Image\" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class=\"time\">3 mins ago</span>
                        </span>
                        <span class=\"message\">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <a>
                        <span class=\"image\"><img src=\"images/img.jpg\" alt=\"Profile Image\" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class=\"time\">3 mins ago</span>
                        </span>
                        <span class=\"message\">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <a>
                        <span class=\"image\"><img src=\"images/img.jpg\" alt=\"Profile Image\" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class=\"time\">3 mins ago</span>
                        </span>
                        <span class=\"message\">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <div class=\"text-center\">
                        <a>
                          <strong>See All Alerts</strong>
                          <i class=\"fa fa-angle-right\"></i>
                        </a>
                      </div>
                    </li>
                  </ul>
                </li>
              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->

        <!-- page content -->
        <div class=\"right_col\" role=\"main\">
          <!-- top tiles -->
          <div class=\"row tile_count\">
            
          </div>
        </div>
        <!-- /page content -->

        <!-- footer content -->
        <footer>
          <div class=\"pull-right\">
            Gentelella - Bootstrap Admin Template by <a href=\"https://colorlib.com\">Colorlib</a>
          </div>
          <div class=\"clearfix\"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>
        ";
    }

    // line 302
    public function block_javascripts($context, array $blocks = array())
    {
        // line 303
        echo "            <!-- jQuery -->
            <script src=\"";
        // line 304
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/public/vendors/jquery/dist/jquery.min.js"), "html", null, true);
        echo "\"></script>
            <!-- Bootstrap -->
            <script src=\"";
        // line 306
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/public/vendors/bootstrap/dist/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
            <!-- FastClick -->
            <script src=\"";
        // line 308
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/public/vendors/fastclick/lib/fastclick.js"), "html", null, true);
        echo "\"></script>
            <!-- NProgress -->
            <script src=\"";
        // line 310
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/public/vendors/nprogress/nprogress.js"), "html", null, true);
        echo "\"></script>
            <!-- Chart.js -->
            <script src=\"";
        // line 312
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/public/vendors/Chart.js/dist/Chart.min.js"), "html", null, true);
        echo "\"></script>
            <!-- gauge.js -->     
            <script src=\"";
        // line 314
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/public/vendors/gauge.js/dist/gauge.min.js"), "html", null, true);
        echo "\"></script>
            <!-- bootstrap-progressbar -->
            <script src=\"";
        // line 316
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/public/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"), "html", null, true);
        echo "\"></script> 
            <!-- iCheck -->   
            <script src=\"";
        // line 318
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/public/vendors/iCheck/icheck.min.js"), "html", null, true);
        echo "\"></script>
            <!-- Skycons -->
            <script src=\"";
        // line 320
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/public/vendors/skycons/skycons.js"), "html", null, true);
        echo "\"></script>
            <!-- Flot -->
            <script src=\"";
        // line 322
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/public/vendors/Flot/jquery.flot.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 323
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/public/vendors/Flot/jquery.flot.pie.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 324
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/public/vendors/Flot/jquery.flot.time.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 325
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/public/vendors/Flot/jquery.flot.stack.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 326
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/public/vendors/Flot/jquery.flot.resize.js"), "html", null, true);
        echo "\"></script>
            <!-- Flot plugins -->
            <script src=\"";
        // line 328
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/public/vendors/flot.orderbars/js/jquery.flot.orderBars.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 329
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/public/vendors/flot-spline/js/jquery.flot.spline.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 330
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/public/vendors/flot.curvedlines/curvedLines.js"), "html", null, true);
        echo "\"></script>
            <!-- DateJS -->
            <script src=\"";
        // line 332
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/public/vendors/DateJS/build/date.js"), "html", null, true);
        echo "\"></script>
            <!-- JQVMap -->
            <script src=\"";
        // line 334
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/public/vendors/jqvmap/dist/jquery.vmap.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 335
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/public/vendors/jqvmap/dist/maps/jquery.vmap.world.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 336
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/public/vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"), "html", null, true);
        echo "\"></script>
            <!-- bootstrap-daterangepicker -->
            <script src=\"";
        // line 338
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/public/vendors/moment/min/moment.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 339
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/public/vendors/bootstrap-daterangepicker/daterangepicker.js"), "html", null, true);
        echo "\"></script>
            <!-- Custom Theme Scripts -->
            <script src=\"";
        // line 341
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/public/build/js/custom.min.js"), "html", null, true);
        echo "\"></script>
        ";
    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  500 => 341,  495 => 339,  491 => 338,  486 => 336,  482 => 335,  478 => 334,  473 => 332,  468 => 330,  464 => 329,  460 => 328,  455 => 326,  451 => 325,  447 => 324,  443 => 323,  439 => 322,  434 => 320,  429 => 318,  424 => 316,  419 => 314,  414 => 312,  409 => 310,  404 => 308,  399 => 306,  394 => 304,  391 => 303,  388 => 302,  121 => 37,  118 => 36,  112 => 30,  107 => 28,  102 => 26,  97 => 24,  92 => 22,  87 => 20,  82 => 18,  77 => 16,  72 => 14,  69 => 13,  66 => 12,  60 => 10,  54 => 343,  52 => 302,  49 => 301,  47 => 36,  41 => 32,  39 => 12,  34 => 10,  23 => 1,);
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
/*             <link rel="icon" type="image/x-icon" href="{{ asset('bundles/public/imagenes/ubv_mini.png') }}" />*/
/*             <!-- NProgress -->*/
/*             <link rel="stylesheet" href="{{ asset('bundles/public/vendors/nprogress/nprogress.css')}}"/>*/
/*             <!-- iCheck -->*/
/*             <link rel="stylesheet" href="{{ asset('bundles/public/vendors/iCheck/skins/flat/green.css')}}"/>*/
/*             <!-- bootstrap-progressbar -->*/
/*             <link rel="stylesheet" href="{{ asset('bundles/public/vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css')}}">ç*/
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
/*         {% block _body %}*/
/*           <div class="container body">*/
/*       <div class="main_container">*/
/*         <div class="col-md-3 left_col">*/
/*           <div class="left_col scroll-view">*/
/*             <div class="navbar nav_title" style="border: 0;">*/
/*               <a href="index.html" class="site_title"><span>Editorial</span></a>*/
/*             </div>*/
/* */
/*             <div class="clearfix"></div>*/
/* */
/*             <!-- menu profile quick info -->*/
/*             <div class="profile clearfix">*/
/*               <div class="profile_pic">*/
/*                 <img src="bundles/public/images/img.jpg" alt="..." class="img-circle profile_img">*/
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
/*                 <h3>General</h3>*/
/*                 <ul class="nav side-menu">*/
/*                   <li><a><i class="fa fa-home"></i> Home <span class="fa fa-chevron-down"></span></a>*/
/*                     <ul class="nav child_menu">*/
/*                       <li><a href="index.html">Dashboard</a></li>*/
/*                       <li><a href="index2.html">Dashboard2</a></li>*/
/*                       <li><a href="index3.html">Dashboard3</a></li>*/
/*                     </ul>*/
/*                   </li>*/
/*                   <li><a><i class="fa fa-edit"></i> Forms <span class="fa fa-chevron-down"></span></a>*/
/*                     <ul class="nav child_menu">*/
/*                       <li><a href="form.html">General Form</a></li>*/
/*                       <li><a href="form_advanced.html">Advanced Components</a></li>*/
/*                       <li><a href="form_validation.html">Form Validation</a></li>*/
/*                       <li><a href="form_wizards.html">Form Wizard</a></li>*/
/*                       <li><a href="form_upload.html">Form Upload</a></li>*/
/*                       <li><a href="form_buttons.html">Form Buttons</a></li>*/
/*                     </ul>*/
/*                   </li>*/
/*                   <li><a><i class="fa fa-desktop"></i> UI Elements <span class="fa fa-chevron-down"></span></a>*/
/*                     <ul class="nav child_menu">*/
/*                       <li><a href="general_elements.html">General Elements</a></li>*/
/*                       <li><a href="media_gallery.html">Media Gallery</a></li>*/
/*                       <li><a href="typography.html">Typography</a></li>*/
/*                       <li><a href="icons.html">Icons</a></li>*/
/*                       <li><a href="glyphicons.html">Glyphicons</a></li>*/
/*                       <li><a href="widgets.html">Widgets</a></li>*/
/*                       <li><a href="invoice.html">Invoice</a></li>*/
/*                       <li><a href="inbox.html">Inbox</a></li>*/
/*                       <li><a href="calendar.html">Calendar</a></li>*/
/*                     </ul>*/
/*                   </li>*/
/*                   <li><a><i class="fa fa-table"></i> Tables <span class="fa fa-chevron-down"></span></a>*/
/*                     <ul class="nav child_menu">*/
/*                       <li><a href="tables.html">Tables</a></li>*/
/*                       <li><a href="tables_dynamic.html">Table Dynamic</a></li>*/
/*                     </ul>*/
/*                   </li>*/
/*                   <li><a><i class="fa fa-bar-chart-o"></i> Data Presentation <span class="fa fa-chevron-down"></span></a>*/
/*                     <ul class="nav child_menu">*/
/*                       <li><a href="chartjs.html">Chart JS</a></li>*/
/*                       <li><a href="chartjs2.html">Chart JS2</a></li>*/
/*                       <li><a href="morisjs.html">Moris JS</a></li>*/
/*                       <li><a href="echarts.html">ECharts</a></li>*/
/*                       <li><a href="other_charts.html">Other Charts</a></li>*/
/*                     </ul>*/
/*                   </li>*/
/*                   <li><a><i class="fa fa-clone"></i>Layouts <span class="fa fa-chevron-down"></span></a>*/
/*                     <ul class="nav child_menu">*/
/*                       <li><a href="fixed_sidebar.html">Fixed Sidebar</a></li>*/
/*                       <li><a href="fixed_footer.html">Fixed Footer</a></li>*/
/*                     </ul>*/
/*                   </li>*/
/*                 </ul>*/
/*               </div>*/
/*               <div class="menu_section">*/
/*                 <h3>Live On</h3>*/
/*                 <ul class="nav side-menu">*/
/*                   <li><a><i class="fa fa-bug"></i> Additional Pages <span class="fa fa-chevron-down"></span></a>*/
/*                     <ul class="nav child_menu">*/
/*                       <li><a href="e_commerce.html">E-commerce</a></li>*/
/*                       <li><a href="projects.html">Projects</a></li>*/
/*                       <li><a href="project_detail.html">Project Detail</a></li>*/
/*                       <li><a href="contacts.html">Contacts</a></li>*/
/*                       <li><a href="profile.html">Profile</a></li>*/
/*                     </ul>*/
/*                   </li>*/
/*                   <li><a><i class="fa fa-windows"></i> Extras <span class="fa fa-chevron-down"></span></a>*/
/*                     <ul class="nav child_menu">*/
/*                       <li><a href="page_403.html">403 Error</a></li>*/
/*                       <li><a href="page_404.html">404 Error</a></li>*/
/*                       <li><a href="page_500.html">500 Error</a></li>*/
/*                       <li><a href="plain_page.html">Plain Page</a></li>*/
/*                       <li><a href="login.html">Login Page</a></li>*/
/*                       <li><a href="pricing_tables.html">Pricing Tables</a></li>*/
/*                     </ul>*/
/*                   </li>*/
/*                   <li><a><i class="fa fa-sitemap"></i> Multilevel Menu <span class="fa fa-chevron-down"></span></a>*/
/*                     <ul class="nav child_menu">*/
/*                         <li><a href="#level1_1">Level One</a>*/
/*                         <li><a>Level One<span class="fa fa-chevron-down"></span></a>*/
/*                           <ul class="nav child_menu">*/
/*                             <li class="sub_menu"><a href="level2.html">Level Two</a>*/
/*                             </li>*/
/*                             <li><a href="#level2_1">Level Two</a>*/
/*                             </li>*/
/*                             <li><a href="#level2_2">Level Two</a>*/
/*                             </li>*/
/*                           </ul>*/
/*                         </li>*/
/*                         <li><a href="#level1_2">Level One</a>*/
/*                         </li>*/
/*                     </ul>*/
/*                   </li>                  */
/*                   <li><a href="javascript:void(0)"><i class="fa fa-laptop"></i> Landing Page <span class="label label-success pull-right">Coming Soon</span></a></li>*/
/*                 </ul>*/
/*               </div>*/
/* */
/*             </div>*/
/*             <!-- /sidebar menu -->*/
/* */
/*             <!-- /menu footer buttons -->*/
/*             <div class="sidebar-footer hidden-small">*/
/*               <a data-toggle="tooltip" data-placement="top" title="Settings">*/
/*                 <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>*/
/*               </a>*/
/*               <a data-toggle="tooltip" data-placement="top" title="FullScreen">*/
/*                 <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>*/
/*               </a>*/
/*               <a data-toggle="tooltip" data-placement="top" title="Lock">*/
/*                 <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>*/
/*               </a>*/
/*               <a data-toggle="tooltip" data-placement="top" title="Logout" href="login.html">*/
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
/*                     <img src="images/img.jpg" alt="">John Doe*/
/*                     <span class=" fa fa-angle-down"></span>*/
/*                   </a>*/
/*                   <ul class="dropdown-menu dropdown-usermenu pull-right">*/
/*                     <li><a href="javascript:;"> Profile</a></li>*/
/*                     <li>*/
/*                       <a href="javascript:;">*/
/*                         <span class="badge bg-red pull-right">50%</span>*/
/*                         <span>Settings</span>*/
/*                       </a>*/
/*                     </li>*/
/*                     <li><a href="javascript:;">Help</a></li>*/
/*                     <li><a href="login.html"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>*/
/*                   </ul>*/
/*                 </li>*/
/* */
/*                 <li role="presentation" class="dropdown">*/
/*                   <a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown" aria-expanded="false">*/
/*                     <i class="fa fa-envelope-o"></i>*/
/*                     <span class="badge bg-green">6</span>*/
/*                   </a>*/
/*                   <ul id="menu1" class="dropdown-menu list-unstyled msg_list" role="menu">*/
/*                     <li>*/
/*                       <a>*/
/*                         <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>*/
/*                         <span>*/
/*                           <span>John Smith</span>*/
/*                           <span class="time">3 mins ago</span>*/
/*                         </span>*/
/*                         <span class="message">*/
/*                           Film festivals used to be do-or-die moments for movie makers. They were where...*/
/*                         </span>*/
/*                       </a>*/
/*                     </li>*/
/*                     <li>*/
/*                       <a>*/
/*                         <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>*/
/*                         <span>*/
/*                           <span>John Smith</span>*/
/*                           <span class="time">3 mins ago</span>*/
/*                         </span>*/
/*                         <span class="message">*/
/*                           Film festivals used to be do-or-die moments for movie makers. They were where...*/
/*                         </span>*/
/*                       </a>*/
/*                     </li>*/
/*                     <li>*/
/*                       <a>*/
/*                         <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>*/
/*                         <span>*/
/*                           <span>John Smith</span>*/
/*                           <span class="time">3 mins ago</span>*/
/*                         </span>*/
/*                         <span class="message">*/
/*                           Film festivals used to be do-or-die moments for movie makers. They were where...*/
/*                         </span>*/
/*                       </a>*/
/*                     </li>*/
/*                     <li>*/
/*                       <a>*/
/*                         <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>*/
/*                         <span>*/
/*                           <span>John Smith</span>*/
/*                           <span class="time">3 mins ago</span>*/
/*                         </span>*/
/*                         <span class="message">*/
/*                           Film festivals used to be do-or-die moments for movie makers. They were where...*/
/*                         </span>*/
/*                       </a>*/
/*                     </li>*/
/*                     <li>*/
/*                       <div class="text-center">*/
/*                         <a>*/
/*                           <strong>See All Alerts</strong>*/
/*                           <i class="fa fa-angle-right"></i>*/
/*                         </a>*/
/*                       </div>*/
/*                     </li>*/
/*                   </ul>*/
/*                 </li>*/
/*               </ul>*/
/*             </nav>*/
/*           </div>*/
/*         </div>*/
/*         <!-- /top navigation -->*/
/* */
/*         <!-- page content -->*/
/*         <div class="right_col" role="main">*/
/*           <!-- top tiles -->*/
/*           <div class="row tile_count">*/
/*             */
/*           </div>*/
/*         </div>*/
/*         <!-- /page content -->*/
/* */
/*         <!-- footer content -->*/
/*         <footer>*/
/*           <div class="pull-right">*/
/*             Gentelella - Bootstrap Admin Template by <a href="https://colorlib.com">Colorlib</a>*/
/*           </div>*/
/*           <div class="clearfix"></div>*/
/*         </footer>*/
/*         <!-- /footer content -->*/
/*       </div>*/
/*     </div>*/
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
/* </html>*/
/* */
