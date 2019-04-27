<?php

/* EditorialBundle:Default:index.html.twig */
class __TwigTemplate_3391b0c8f35c4f2f7c8e9528fa6a3b1eb740993755ff68148241e029fcc8665f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'title' => array($this, 'block_title'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4b28342bca921a94b989b88a55cf836526ed44130d002f913da35e4796330577 = $this->env->getExtension("native_profiler");
        $__internal_4b28342bca921a94b989b88a55cf836526ed44130d002f913da35e4796330577->enter($__internal_4b28342bca921a94b989b88a55cf836526ed44130d002f913da35e4796330577_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EditorialBundle:Default:index.html.twig"));

        // line 1
        $this->displayBlock('body', $context, $blocks);
        // line 293
        $this->displayBlock('javascripts', $context, $blocks);
        
        $__internal_4b28342bca921a94b989b88a55cf836526ed44130d002f913da35e4796330577->leave($__internal_4b28342bca921a94b989b88a55cf836526ed44130d002f913da35e4796330577_prof);

    }

    // line 1
    public function block_body($context, array $blocks = array())
    {
        $__internal_7aea15e71c617af5a199be6b197a6fc49d142956accaf4e78dd87bccd93eb25d = $this->env->getExtension("native_profiler");
        $__internal_7aea15e71c617af5a199be6b197a6fc49d142956accaf4e78dd87bccd93eb25d->enter($__internal_7aea15e71c617af5a199be6b197a6fc49d142956accaf4e78dd87bccd93eb25d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 2
        echo "
<head>
";
        // line 4
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 20
        echo "</head>
<body>
<div class=\"super_container\">
\t
\t<!-- Header -->

\t<header class=\"header\">
\t\t<div class=\"header_inner d-flex flex-row align-items-center justify-content-start\">
\t\t\t<div class=\"logo\"><a href=\"";
        // line 28
        echo $this->env->getExtension('routing')->getPath("index");
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/public/images/Editorial/Logotipos/banner.png"), "html", null, true);
        echo "\" width=\"150\" style=\"display:block;margin:auto;\"></a></div>
\t\t\t<nav class=\"main_nav\">
\t\t\t</nav>
\t\t\t<div class=\"header_content ml-auto\">
\t\t\t\t<div class=\"shopping\">
\t\t\t\t\t<a href=\"checkout.html\">
\t\t\t\t\t\t<div class=\"avatar\">
\t\t\t\t\t\t\t<nav class=\"main_nav\">
\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t<li><a href=\"";
        // line 37
        echo $this->env->getExtension('routing')->getPath("user_new");
        echo "\">Registro</a></li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</nav>
\t\t\t\t\t\t</div>
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"burger_container d-flex flex-column align-items-center justify-content-around menu_mm\"><div></div><div></div><div></div></div>
\t\t</div>
\t</header>

\t<!-- Menu -->

\t<div class=\"menu d-flex flex-column align-items-end justify-content-start text-right menu_mm trans_400\">
\t\t<div class=\"menu_close_container\"><div class=\"menu_close\"><div></div><div></div></div></div>
\t\t<div class=\"logo\"><a href=\"";
        // line 53
        echo $this->env->getExtension('routing')->getPath("index");
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/public/images/Editorial/Logotipos/banner.png"), "html", null, true);
        echo "\" width=\"250\" style=\"display:block;margin:auto;\"></a></div>
\t\t<nav class=\"menu_nav\">
\t\t\t<ul class=\"menu_mm\">
\t\t\t\t<li class=\"menu_mm\"><a href=\"";
        // line 56
        echo $this->env->getExtension('routing')->getPath("login");
        echo "\">Iniciar Sesión</a></li>
\t\t\t\t<li class=\"menu_mm\"><a href=\"";
        // line 57
        echo $this->env->getExtension('routing')->getPath("user_new");
        echo "\">Registrar</a></li>
\t\t\t</ul>
\t\t</nav>
\t</div>

\t<!-- Home -->

\t<div class=\"home\">
\t\t
\t\t<!-- Home Slider -->

\t\t<div class=\"home_slider_container\">
\t\t\t<div class=\"owl-carousel owl-theme home_slider\">
\t\t\t\t
\t\t\t\t<!-- Home Slider Item -->
\t\t\t\t<div class=\"owl-item\">
\t\t\t\t\t<div class=\"home_slider_background\" style=\"background-image:url(";
        // line 73
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/public/images/Editorial/Logotipos/banner2.png)"), "html", null, true);
        echo "\"></div>
\t\t\t\t</div>

\t\t\t\t<!-- Home Slider Item -->
\t\t\t\t<div class=\"owl-item\">
\t\t\t\t\t<div class=\"home_slider_background\" style=\"background-image:url(";
        // line 78
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/public/images/Editorial/Logotipos/banner2.png)"), "html", null, true);
        echo "\"></div>
\t\t\t\t</div>

\t\t\t\t<!-- Home Slider Item -->
\t\t\t\t<div class=\"owl-item\">
\t\t\t\t\t<div class=\"home_slider_background\" style=\"background-image:url(";
        // line 83
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/public/images/Editorial/Logotipos/banner2.png)"), "html", null, true);
        echo "\"></div>
\t\t\t\t</div>

\t\t\t</div>
\t\t\t
\t\t\t<!-- Home Slider Nav -->

\t\t\t<div class=\"home_slider_next d-flex flex-column align-items-center justify-content-center\"><img src=\"";
        // line 90
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/public/images/arrow_r.png"), "html", null, true);
        echo "\" alt=\"\"></div>

\t\t\t<!-- Home Slider Dots -->

\t\t\t<div class=\"home_slider_dots_container\">
\t\t\t\t<div class=\"container\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t\t<div class=\"home_slider_dots\">
\t\t\t\t\t\t\t\t<ul id=\"home_slider_custom_dots\" class=\"home_slider_custom_dots\">
\t\t\t\t\t\t\t\t\t<li class=\"home_slider_custom_dot active\">01.<div></div></li>
\t\t\t\t\t\t\t\t\t<li class=\"home_slider_custom_dot\">02.<div></div></li>
\t\t\t\t\t\t\t\t\t<li class=\"home_slider_custom_dot\">03.<div></div></li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>\t\t
\t\t\t</div>
\t\t</div>
\t</div>

\t<!-- Promo -->

\t<div class=\"promo\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col\">
\t\t\t\t\t<div class=\"section_title_container text-center\">
\t\t\t\t\t\t<div class=\"section_subtitle\">Editorial Laboratorio Educativo</div>
\t\t\t\t\t\t<div class=\"section_title\">Categorias</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"row promo_container\">

\t\t\t\t<!-- Promo Item -->
\t\t\t\t<div class=\"col-lg-4 promo_col\">
\t\t\t\t\t<div class=\"promo_item\">
\t\t\t\t\t\t<div class=\"promo_image\">
\t\t\t\t\t\t\t<img src=\"";
        // line 130
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/public/images/Editorial/libros/Educacion/Educacion y pedagogia.png"), "html", null, true);
        echo "\" alt=\"\">
\t\t\t\t\t\t\t
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!--<div class=\"promo_link\"><a href=\"#\">Visualizar</a></div>-->
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<!-- Promo Item -->
\t\t\t\t<div class=\"col-lg-4 promo_col\">
\t\t\t\t\t<div class=\"promo_item\">
\t\t\t\t\t\t<div class=\"promo_image\">
\t\t\t\t\t\t\t<img src=\"";
        // line 141
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/public/images/Editorial/Logotipos/2.png"), "html", null, true);
        echo "\" alt=\"\">
\t\t\t\t\t\t\t
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!--<div class=\"promo_link\"><a href=\"#\">Visualizar</a></div>-->
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<!-- Promo Item -->
\t\t\t\t<div class=\"col-lg-4 promo_col\">
\t\t\t\t\t<div class=\"promo_item\">
\t\t\t\t\t\t<div class=\"promo_image\">
\t\t\t\t\t\t\t<img src=\"";
        // line 152
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/public/images/Editorial/libros/Juvenil/juvenilinfantil.png"), "html", null, true);
        echo "\" alt=\"\">
\t\t\t\t\t\t\t
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!--<div class=\"promo_link\"><a href=\"#\">Visualizar</a></div>-->
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t</div>
\t\t</div>
\t</div>

\t<!-- Gallery -->

\t<div class=\"gallery\">
\t\t<div class=\"gallery_image\" style=\"background-image:url(";
        // line 166
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/public/images/Editorial/Logotipos/Logo ELE completo.eps)"), "html", null, true);
        echo "\"></div>
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col\">
\t\t\t\t\t<div class=\"gallery_title text-center\">
\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t<li><a href=\"#\">#Nos-Otros</a></li>
\t\t\t\t\t\t\t<li><a href=\"#\">#Quintaesencia</a></li>
\t\t\t\t\t\t\t<li><a href=\"#\">#Proa</a></li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t\t<!--<div class=\"button gallery_button\"><a href=\"#\">Contactar</a></div>-->
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>\t
\t\t<div class=\"gallery_slider_container\">
\t\t\t
\t\t\t<!-- Gallery Slider -->
\t\t\t<div class=\"owl-carousel owl-theme gallery_slider\">
\t\t\t\t
\t\t\t\t<!-- Gallery Item -->
\t\t\t\t<div class=\"owl-item gallery_item\">
\t\t\t\t\t<a class=\"colorbox\" href=\"";
        // line 188
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/public/images/Editorial/varios/America latina.png"), "html", null, true);
        echo "\">
\t\t\t\t\t\t<img src=\"";
        // line 189
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/public/images/Editorial/varios/America latina.png"), "html", null, true);
        echo "\" alt=\"\">
\t\t\t\t\t</a>
\t\t\t\t</div>

\t\t\t\t<!-- Gallery Item -->
\t\t\t\t<div class=\"owl-item gallery_item\">
\t\t\t\t\t<a class=\"colorbox\" href=\"";
        // line 195
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/public/images/Editorial/varios/La alternativa pedagogica.png"), "html", null, true);
        echo "\">
\t\t\t\t\t\t<img src=\"";
        // line 196
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/public/images/Editorial/varios/La alternativa pedagogica.png"), "html", null, true);
        echo "\" alt=\"\">
\t\t\t\t\t</a>
\t\t\t\t</div>

\t\t\t\t<!-- Gallery Item -->
\t\t\t\t<div class=\"owl-item gallery_item\">
\t\t\t\t\t<a class=\"colorbox\" href=\"";
        // line 202
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/public/images/Editorial/varios/Democracia y escuela.png"), "html", null, true);
        echo "\">
\t\t\t\t\t\t<img src=\"";
        // line 203
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/public/images/Editorial/varios/Democracia y escuela.png"), "html", null, true);
        echo "\" alt=\"\">
\t\t\t\t\t</a>
\t\t\t\t</div>

\t\t\t\t<!-- Gallery Item -->
\t\t\t\t<div class=\"owl-item gallery_item\">
\t\t\t\t\t<a class=\"colorbox\" href=\"";
        // line 209
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/public/images/Editorial/varios/Educacion y sociologia.png"), "html", null, true);
        echo "\">
\t\t\t\t\t\t<img src=\"";
        // line 210
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/public/images/Editorial/varios/Educacion y sociologia.png"), "html", null, true);
        echo "\" alt=\"\">
\t\t\t\t\t</a>
\t\t\t\t</div>

\t\t\t\t<!-- Gallery Item -->
\t\t\t\t<div class=\"owl-item gallery_item\">
\t\t\t\t\t<a class=\"colorbox\" href=\"";
        // line 216
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/public/images/Editorial/varios/Las batallas del agua.png"), "html", null, true);
        echo "\">
\t\t\t\t\t\t<img src=\"";
        // line 217
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/public/images/Editorial/varios/Las batallas del agua.png"), "html", null, true);
        echo "\" alt=\"\">
\t\t\t\t\t</a>
\t\t\t\t</div>

\t\t\t\t<!-- Gallery Item -->
\t\t\t\t<div class=\"owl-item gallery_item\">
\t\t\t\t\t<a class=\"colorbox\" href=\"";
        // line 223
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/public/images/Editorial/varios/Ensayos de pedagogia critica.png"), "html", null, true);
        echo "\">
\t\t\t\t\t\t<img src=\"";
        // line 224
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/public/images/Editorial/varios/Ensayos de pedagogia critica.png"), "html", null, true);
        echo "\" alt=\"\">
\t\t\t\t\t</a>
\t\t\t\t</div>

\t\t\t</div>
\t\t</div>\t
\t</div>

\t<!-- Google Map -->
\t\t
\t<div class=\"map\">
\t\t<div id=\"google_map\" class=\"google_map\">
\t\t\t<div class=\"map_container\">
\t\t\t\t<div id=\"map-canvas\"></div>
\t\t\t</div>
\t\t</div>
\t</div>

\t<!-- Contact Text -->

\t<div class=\"contact_text\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">

\t\t\t\t<!-- Contact Info -->
\t\t\t\t<div class=\"col-lg-5\">

\t\t\t\t\t<div class=\"contact_info\">
\t\t\t\t\t\t<div class=\"contact_title\">Información de contacto</div>
\t\t\t\t\t\t<div class=\"contact_info_content\">
\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<div class=\"contact_info_icon\"><img src=\"";
        // line 256
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/public/images/contact_info_1.png"), "html", null, true);
        echo "\" alt=\"\"></div>
\t\t\t\t\t\t\t\t\t<div class=\"contact_info_text\"> Av. Ppal. El Bosque Edif. Pichincha, piso 6. of. 63</div>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<div class=\"contact_info_icon\"><img src=\"";
        // line 260
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/public/images/contact_info_2.png"), "html", null, true);
        echo "\" alt=\"\"></div>
\t\t\t\t\t\t\t\t\t<div class=\"contact_info_text\">labeducativo@gmail.com</div>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<div class=\"contact_info_icon\"><img src=\"";
        // line 264
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/public/images/contact_info_3.png"), "html", null, true);
        echo "\" alt=\"\"></div>
\t\t\t\t\t\t\t\t\t<div class=\"contact_info_text\">(+58 212) 952 61 50 - 952 65 30</div>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
\t<!-- Footer -->

\t<footer class=\"footer\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col text-center\">
\t\t\t\t\t<div class=\"footer_social\">
\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t<li><a href=\"";
        // line 282
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("https://twitter.com/labeducativo?lang=es"), "html", null, true);
        echo "\"><i class=\"fa fa-twitter\" aria-hidden=\"true\"></i></a></li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"copyright\"><p>Editorial Laboraorio Educativo | Todos los derechos Reservados<p></div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</footer>
</div>
</body>
";
        
        $__internal_7aea15e71c617af5a199be6b197a6fc49d142956accaf4e78dd87bccd93eb25d->leave($__internal_7aea15e71c617af5a199be6b197a6fc49d142956accaf4e78dd87bccd93eb25d_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_5da53c3f59882c780bc37757e4298a09a8ed424541ffea25db6cf59e7c9422a4 = $this->env->getExtension("native_profiler");
        $__internal_5da53c3f59882c780bc37757e4298a09a8ed424541ffea25db6cf59e7c9422a4->enter($__internal_5da53c3f59882c780bc37757e4298a09a8ed424541ffea25db6cf59e7c9422a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 5
        echo "<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/public/styles/bootstrap4/bootstrap.min.css"), "html", null, true);
        echo "\">
<link href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/public/plugins/font-awesome-4.7.0/css/font-awesome.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/public/plugins/OwlCarousel2-2.2.1/owl.carousel.css"), "html", null, true);
        echo "\">
<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/public/plugins/OwlCarousel2-2.2.1/owl.theme.default.css"), "html", null, true);
        echo "\">
<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/public/plugins/OwlCarousel2-2.2.1/animate.css"), "html", null, true);
        echo "\">
<link href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/public/plugins/colorbox/colorbox.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/public/styles/main_styles.css"), "html", null, true);
        echo "\">
<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/public/styles/responsive.css"), "html", null, true);
        echo "\">
<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/public/styles/bootstrap4/bootstrap.min.css"), "html", null, true);
        echo "\">
<link href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/public/plugins/font-awesome-4.7.0/css/font-awesome.min.css\" rel=\"stylesheet\" type=\"text/css"), "html", null, true);
        echo "\">
<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/public/styles/contact.css"), "html", null, true);
        echo "\">
<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/public/styles/contact_responsive.css"), "html", null, true);
        echo "\">
<link rel=\"shortcut icon\" type=\"image/x-icon\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/public/images/Editorial/Logotipos/ELE.png"), "html", null, true);
        echo "\">
<title>";
        // line 18
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
";
        
        $__internal_5da53c3f59882c780bc37757e4298a09a8ed424541ffea25db6cf59e7c9422a4->leave($__internal_5da53c3f59882c780bc37757e4298a09a8ed424541ffea25db6cf59e7c9422a4_prof);

    }

    public function block_title($context, array $blocks = array())
    {
        $__internal_95049c7d97fa758c5ea19d2923e8e4480f79a2c31140390a60626e2f7db1aabc = $this->env->getExtension("native_profiler");
        $__internal_95049c7d97fa758c5ea19d2923e8e4480f79a2c31140390a60626e2f7db1aabc->enter($__internal_95049c7d97fa758c5ea19d2923e8e4480f79a2c31140390a60626e2f7db1aabc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Editorial Laboratorio Educativo ";
        
        $__internal_95049c7d97fa758c5ea19d2923e8e4480f79a2c31140390a60626e2f7db1aabc->leave($__internal_95049c7d97fa758c5ea19d2923e8e4480f79a2c31140390a60626e2f7db1aabc_prof);

    }

    // line 293
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_203ddab670ccafba41dbb4a7d224518ae796d0e853514a2e934b91d1c601f757 = $this->env->getExtension("native_profiler");
        $__internal_203ddab670ccafba41dbb4a7d224518ae796d0e853514a2e934b91d1c601f757->enter($__internal_203ddab670ccafba41dbb4a7d224518ae796d0e853514a2e934b91d1c601f757_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 294
        echo "<script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/public/js/jquery-3.2.1.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 295
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/public/styles/bootstrap4/popper.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 296
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/public/styles/bootstrap4/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 297
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/public/plugins/OwlCarousel2-2.2.1/owl.carousel.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 298
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/public/plugins/easing/easing.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 299
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/public/plugins/parallax-js-master/parallax.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 300
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/public/plugins/colorbox/jquery.colorbox-min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 301
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/public/js/custom.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 302
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("https://maps.googleapis.com/maps/api/js?v=3.exp"), "html", null, true);
        echo "\"></script>
<script>
\tfunction initialize() {
\t  var myLatlng = new google.maps.LatLng(10.491942021478748, -66.86825394630432); //coordenadas de ubicación
\t  var mapOptions = {
\t  zoom: 15, //zoom de tu mapa
\t  center: myLatlng, //centrar tu mapa
\t  scrollwheel: false, //si colocas true en vez de false el usuario podrá hacer scroll dentro del mapa
\t  draggable: true, //esta opción es la manito que aparece y es usado para desplazarse en el mapa
\t  mapTypeId: google.maps.MapTypeId.ROADMAP
\t  };
\t  var map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);
\t  var contentString = '<img src=\"";
        // line 314
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/public/images/Editorial/Logotipos/ELE.png"), "html", null, true);
        echo "\" width=\"50px\" style=\"display:block;margin:auto;\"><p>Av. Ppal. de El Bosque - Edif. Pichincha, piso 6.  of. 63</p>';//imagen y dirección
\t  var infowindow = new google.maps.InfoWindow({content: contentString});
\t  var marker = new google.maps.Marker({
\t  position: myLatlng,
\t  animation:google.maps.Animation.DROP,
\t  icon: 'icono-mapa.png', //icono de mapa
\t  map: map
\t  });
\t  infowindow.open(map,marker);
\t  google.maps.event.addListener(marker, 'click', function() {
\t  infowindow.open(map,marker);
\t  });
\t}
\tgoogle.maps.event.addDomListener(window, 'load', initialize);
\t</script>
";
        
        $__internal_203ddab670ccafba41dbb4a7d224518ae796d0e853514a2e934b91d1c601f757->leave($__internal_203ddab670ccafba41dbb4a7d224518ae796d0e853514a2e934b91d1c601f757_prof);

    }

    public function getTemplateName()
    {
        return "EditorialBundle:Default:index.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  550 => 314,  535 => 302,  531 => 301,  527 => 300,  523 => 299,  519 => 298,  515 => 297,  511 => 296,  507 => 295,  502 => 294,  496 => 293,  476 => 18,  472 => 17,  468 => 16,  464 => 15,  460 => 14,  456 => 13,  452 => 12,  448 => 11,  444 => 10,  440 => 9,  436 => 8,  432 => 7,  428 => 6,  423 => 5,  417 => 4,  399 => 282,  378 => 264,  371 => 260,  364 => 256,  329 => 224,  325 => 223,  316 => 217,  312 => 216,  303 => 210,  299 => 209,  290 => 203,  286 => 202,  277 => 196,  273 => 195,  264 => 189,  260 => 188,  235 => 166,  218 => 152,  204 => 141,  190 => 130,  147 => 90,  137 => 83,  129 => 78,  121 => 73,  102 => 57,  98 => 56,  90 => 53,  71 => 37,  57 => 28,  47 => 20,  45 => 4,  41 => 2,  35 => 1,  28 => 293,  26 => 1,);
    }
}
/* {% block body %}*/
/* */
/* <head>*/
/* {% block stylesheets %}*/
/* <link rel="stylesheet" type="text/css" href="{{ asset('bundles/public/styles/bootstrap4/bootstrap.min.css')}}">*/
/* <link href="{{ asset('bundles/public/plugins/font-awesome-4.7.0/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">*/
/* <link rel="stylesheet" type="text/css" href="{{ asset('bundles/public/plugins/OwlCarousel2-2.2.1/owl.carousel.css')}}">*/
/* <link rel="stylesheet" type="text/css" href="{{ asset('bundles/public/plugins/OwlCarousel2-2.2.1/owl.theme.default.css')}}">*/
/* <link rel="stylesheet" type="text/css" href="{{ asset('bundles/public/plugins/OwlCarousel2-2.2.1/animate.css')}}">*/
/* <link href="{{ asset('bundles/public/plugins/colorbox/colorbox.css')}}" rel="stylesheet" type="text/css">*/
/* <link rel="stylesheet" type="text/css" href="{{ asset('bundles/public/styles/main_styles.css')}}">*/
/* <link rel="stylesheet" type="text/css" href="{{ asset('bundles/public/styles/responsive.css')}}">*/
/* <link rel="stylesheet" type="text/css" href="{{ asset('bundles/public/styles/bootstrap4/bootstrap.min.css')}}">*/
/* <link href="{{ asset('bundles/public/plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css')}}">*/
/* <link rel="stylesheet" type="text/css" href="{{ asset('bundles/public/styles/contact.css')}}">*/
/* <link rel="stylesheet" type="text/css" href="{{ asset('bundles/public/styles/contact_responsive.css')}}">*/
/* <link rel="shortcut icon" type="image/x-icon" href="{{ asset('bundles/public/images/Editorial/Logotipos/ELE.png')}}">*/
/* <title>{% block title %} Editorial Laboratorio Educativo {% endblock %}</title>*/
/* {% endblock %}*/
/* </head>*/
/* <body>*/
/* <div class="super_container">*/
/* 	*/
/* 	<!-- Header -->*/
/* */
/* 	<header class="header">*/
/* 		<div class="header_inner d-flex flex-row align-items-center justify-content-start">*/
/* 			<div class="logo"><a href="{{ path('index') }}"><img src="{{ asset('bundles/public/images/Editorial/Logotipos/banner.png')}}" width="150" style="display:block;margin:auto;"></a></div>*/
/* 			<nav class="main_nav">*/
/* 			</nav>*/
/* 			<div class="header_content ml-auto">*/
/* 				<div class="shopping">*/
/* 					<a href="checkout.html">*/
/* 						<div class="avatar">*/
/* 							<nav class="main_nav">*/
/* 								<ul>*/
/* 									<li><a href="{{ path('user_new') }}">Registro</a></li>*/
/* 								</ul>*/
/* 							</nav>*/
/* 						</div>*/
/* 					</a>*/
/* 				</div>*/
/* 			</div>*/
/* */
/* 			<div class="burger_container d-flex flex-column align-items-center justify-content-around menu_mm"><div></div><div></div><div></div></div>*/
/* 		</div>*/
/* 	</header>*/
/* */
/* 	<!-- Menu -->*/
/* */
/* 	<div class="menu d-flex flex-column align-items-end justify-content-start text-right menu_mm trans_400">*/
/* 		<div class="menu_close_container"><div class="menu_close"><div></div><div></div></div></div>*/
/* 		<div class="logo"><a href="{{ path('index') }}"><img src="{{ asset('bundles/public/images/Editorial/Logotipos/banner.png')}}" width="250" style="display:block;margin:auto;"></a></div>*/
/* 		<nav class="menu_nav">*/
/* 			<ul class="menu_mm">*/
/* 				<li class="menu_mm"><a href="{{ path('login') }}">Iniciar Sesión</a></li>*/
/* 				<li class="menu_mm"><a href="{{ path('user_new') }}">Registrar</a></li>*/
/* 			</ul>*/
/* 		</nav>*/
/* 	</div>*/
/* */
/* 	<!-- Home -->*/
/* */
/* 	<div class="home">*/
/* 		*/
/* 		<!-- Home Slider -->*/
/* */
/* 		<div class="home_slider_container">*/
/* 			<div class="owl-carousel owl-theme home_slider">*/
/* 				*/
/* 				<!-- Home Slider Item -->*/
/* 				<div class="owl-item">*/
/* 					<div class="home_slider_background" style="background-image:url({{ asset('bundles/public/images/Editorial/Logotipos/banner2.png)')}}"></div>*/
/* 				</div>*/
/* */
/* 				<!-- Home Slider Item -->*/
/* 				<div class="owl-item">*/
/* 					<div class="home_slider_background" style="background-image:url({{ asset('bundles/public/images/Editorial/Logotipos/banner2.png)')}}"></div>*/
/* 				</div>*/
/* */
/* 				<!-- Home Slider Item -->*/
/* 				<div class="owl-item">*/
/* 					<div class="home_slider_background" style="background-image:url({{ asset('bundles/public/images/Editorial/Logotipos/banner2.png)')}}"></div>*/
/* 				</div>*/
/* */
/* 			</div>*/
/* 			*/
/* 			<!-- Home Slider Nav -->*/
/* */
/* 			<div class="home_slider_next d-flex flex-column align-items-center justify-content-center"><img src="{{ asset('bundles/public/images/arrow_r.png')}}" alt=""></div>*/
/* */
/* 			<!-- Home Slider Dots -->*/
/* */
/* 			<div class="home_slider_dots_container">*/
/* 				<div class="container">*/
/* 					<div class="row">*/
/* 						<div class="col">*/
/* 							<div class="home_slider_dots">*/
/* 								<ul id="home_slider_custom_dots" class="home_slider_custom_dots">*/
/* 									<li class="home_slider_custom_dot active">01.<div></div></li>*/
/* 									<li class="home_slider_custom_dot">02.<div></div></li>*/
/* 									<li class="home_slider_custom_dot">03.<div></div></li>*/
/* 								</ul>*/
/* 							</div>*/
/* 						</div>*/
/* 					</div>*/
/* 				</div>		*/
/* 			</div>*/
/* 		</div>*/
/* 	</div>*/
/* */
/* 	<!-- Promo -->*/
/* */
/* 	<div class="promo">*/
/* 		<div class="container">*/
/* 			<div class="row">*/
/* 				<div class="col">*/
/* 					<div class="section_title_container text-center">*/
/* 						<div class="section_subtitle">Editorial Laboratorio Educativo</div>*/
/* 						<div class="section_title">Categorias</div>*/
/* 					</div>*/
/* 				</div>*/
/* 			</div>*/
/* 			<div class="row promo_container">*/
/* */
/* 				<!-- Promo Item -->*/
/* 				<div class="col-lg-4 promo_col">*/
/* 					<div class="promo_item">*/
/* 						<div class="promo_image">*/
/* 							<img src="{{ asset('bundles/public/images/Editorial/libros/Educacion/Educacion y pedagogia.png')}}" alt="">*/
/* 							*/
/* 						</div>*/
/* 						<!--<div class="promo_link"><a href="#">Visualizar</a></div>-->*/
/* 					</div>*/
/* 				</div>*/
/* */
/* 				<!-- Promo Item -->*/
/* 				<div class="col-lg-4 promo_col">*/
/* 					<div class="promo_item">*/
/* 						<div class="promo_image">*/
/* 							<img src="{{ asset('bundles/public/images/Editorial/Logotipos/2.png')}}" alt="">*/
/* 							*/
/* 						</div>*/
/* 						<!--<div class="promo_link"><a href="#">Visualizar</a></div>-->*/
/* 					</div>*/
/* 				</div>*/
/* */
/* 				<!-- Promo Item -->*/
/* 				<div class="col-lg-4 promo_col">*/
/* 					<div class="promo_item">*/
/* 						<div class="promo_image">*/
/* 							<img src="{{ asset('bundles/public/images/Editorial/libros/Juvenil/juvenilinfantil.png')}}" alt="">*/
/* 							*/
/* 						</div>*/
/* 						<!--<div class="promo_link"><a href="#">Visualizar</a></div>-->*/
/* 					</div>*/
/* 				</div>*/
/* */
/* 			</div>*/
/* 		</div>*/
/* 	</div>*/
/* */
/* 	<!-- Gallery -->*/
/* */
/* 	<div class="gallery">*/
/* 		<div class="gallery_image" style="background-image:url({{ asset('bundles/public/images/Editorial/Logotipos/Logo ELE completo.eps)')}}"></div>*/
/* 		<div class="container">*/
/* 			<div class="row">*/
/* 				<div class="col">*/
/* 					<div class="gallery_title text-center">*/
/* 						<ul>*/
/* 							<li><a href="#">#Nos-Otros</a></li>*/
/* 							<li><a href="#">#Quintaesencia</a></li>*/
/* 							<li><a href="#">#Proa</a></li>*/
/* 						</ul>*/
/* 					</div>*/
/* 					<!--<div class="button gallery_button"><a href="#">Contactar</a></div>-->*/
/* 				</div>*/
/* 			</div>*/
/* 		</div>	*/
/* 		<div class="gallery_slider_container">*/
/* 			*/
/* 			<!-- Gallery Slider -->*/
/* 			<div class="owl-carousel owl-theme gallery_slider">*/
/* 				*/
/* 				<!-- Gallery Item -->*/
/* 				<div class="owl-item gallery_item">*/
/* 					<a class="colorbox" href="{{ asset('bundles/public/images/Editorial/varios/America latina.png')}}">*/
/* 						<img src="{{ asset('bundles/public/images/Editorial/varios/America latina.png')}}" alt="">*/
/* 					</a>*/
/* 				</div>*/
/* */
/* 				<!-- Gallery Item -->*/
/* 				<div class="owl-item gallery_item">*/
/* 					<a class="colorbox" href="{{ asset('bundles/public/images/Editorial/varios/La alternativa pedagogica.png')}}">*/
/* 						<img src="{{ asset('bundles/public/images/Editorial/varios/La alternativa pedagogica.png')}}" alt="">*/
/* 					</a>*/
/* 				</div>*/
/* */
/* 				<!-- Gallery Item -->*/
/* 				<div class="owl-item gallery_item">*/
/* 					<a class="colorbox" href="{{ asset('bundles/public/images/Editorial/varios/Democracia y escuela.png')}}">*/
/* 						<img src="{{ asset('bundles/public/images/Editorial/varios/Democracia y escuela.png')}}" alt="">*/
/* 					</a>*/
/* 				</div>*/
/* */
/* 				<!-- Gallery Item -->*/
/* 				<div class="owl-item gallery_item">*/
/* 					<a class="colorbox" href="{{ asset('bundles/public/images/Editorial/varios/Educacion y sociologia.png')}}">*/
/* 						<img src="{{ asset('bundles/public/images/Editorial/varios/Educacion y sociologia.png')}}" alt="">*/
/* 					</a>*/
/* 				</div>*/
/* */
/* 				<!-- Gallery Item -->*/
/* 				<div class="owl-item gallery_item">*/
/* 					<a class="colorbox" href="{{ asset('bundles/public/images/Editorial/varios/Las batallas del agua.png')}}">*/
/* 						<img src="{{ asset('bundles/public/images/Editorial/varios/Las batallas del agua.png')}}" alt="">*/
/* 					</a>*/
/* 				</div>*/
/* */
/* 				<!-- Gallery Item -->*/
/* 				<div class="owl-item gallery_item">*/
/* 					<a class="colorbox" href="{{ asset('bundles/public/images/Editorial/varios/Ensayos de pedagogia critica.png')}}">*/
/* 						<img src="{{ asset('bundles/public/images/Editorial/varios/Ensayos de pedagogia critica.png')}}" alt="">*/
/* 					</a>*/
/* 				</div>*/
/* */
/* 			</div>*/
/* 		</div>	*/
/* 	</div>*/
/* */
/* 	<!-- Google Map -->*/
/* 		*/
/* 	<div class="map">*/
/* 		<div id="google_map" class="google_map">*/
/* 			<div class="map_container">*/
/* 				<div id="map-canvas"></div>*/
/* 			</div>*/
/* 		</div>*/
/* 	</div>*/
/* */
/* 	<!-- Contact Text -->*/
/* */
/* 	<div class="contact_text">*/
/* 		<div class="container">*/
/* 			<div class="row">*/
/* */
/* 				<!-- Contact Info -->*/
/* 				<div class="col-lg-5">*/
/* */
/* 					<div class="contact_info">*/
/* 						<div class="contact_title">Información de contacto</div>*/
/* 						<div class="contact_info_content">*/
/* 							<ul>*/
/* 								<li>*/
/* 									<div class="contact_info_icon"><img src="{{ asset('bundles/public/images/contact_info_1.png')}}" alt=""></div>*/
/* 									<div class="contact_info_text"> Av. Ppal. El Bosque Edif. Pichincha, piso 6. of. 63</div>*/
/* 								</li>*/
/* 								<li>*/
/* 									<div class="contact_info_icon"><img src="{{ asset('bundles/public/images/contact_info_2.png')}}" alt=""></div>*/
/* 									<div class="contact_info_text">labeducativo@gmail.com</div>*/
/* 								</li>*/
/* 								<li>*/
/* 									<div class="contact_info_icon"><img src="{{ asset('bundles/public/images/contact_info_3.png')}}" alt=""></div>*/
/* 									<div class="contact_info_text">(+58 212) 952 61 50 - 952 65 30</div>*/
/* 								</li>*/
/* 							</ul>*/
/* 						</div>*/
/* 					</div>*/
/* 				</div>*/
/* 			</div>*/
/* 		</div>*/
/* 	</div>*/
/* 	<!-- Footer -->*/
/* */
/* 	<footer class="footer">*/
/* 		<div class="container">*/
/* 			<div class="row">*/
/* 				<div class="col text-center">*/
/* 					<div class="footer_social">*/
/* 						<ul>*/
/* 							<li><a href="{{ asset('https://twitter.com/labeducativo?lang=es')}}"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>*/
/* 						</ul>*/
/* 					</div>*/
/* 					<div class="copyright"><p>Editorial Laboraorio Educativo | Todos los derechos Reservados<p></div>*/
/* 				</div>*/
/* 			</div>*/
/* 		</div>*/
/* 	</footer>*/
/* </div>*/
/* </body>*/
/* {% endblock %}*/
/* {% block javascripts %}*/
/* <script src="{{ asset('bundles/public/js/jquery-3.2.1.min.js')}}"></script>*/
/* <script src="{{ asset('bundles/public/styles/bootstrap4/popper.js')}}"></script>*/
/* <script src="{{ asset('bundles/public/styles/bootstrap4/bootstrap.min.js')}}"></script>*/
/* <script src="{{ asset('bundles/public/plugins/OwlCarousel2-2.2.1/owl.carousel.js')}}"></script>*/
/* <script src="{{ asset('bundles/public/plugins/easing/easing.js')}}"></script>*/
/* <script src="{{ asset('bundles/public/plugins/parallax-js-master/parallax.min.js')}}"></script>*/
/* <script src="{{ asset('bundles/public/plugins/colorbox/jquery.colorbox-min.js')}}"></script>*/
/* <script src="{{ asset('bundles/public/js/custom.js')}}"></script>*/
/* <script src="{{ asset('https://maps.googleapis.com/maps/api/js?v=3.exp')}}"></script>*/
/* <script>*/
/* 	function initialize() {*/
/* 	  var myLatlng = new google.maps.LatLng(10.491942021478748, -66.86825394630432); //coordenadas de ubicación*/
/* 	  var mapOptions = {*/
/* 	  zoom: 15, //zoom de tu mapa*/
/* 	  center: myLatlng, //centrar tu mapa*/
/* 	  scrollwheel: false, //si colocas true en vez de false el usuario podrá hacer scroll dentro del mapa*/
/* 	  draggable: true, //esta opción es la manito que aparece y es usado para desplazarse en el mapa*/
/* 	  mapTypeId: google.maps.MapTypeId.ROADMAP*/
/* 	  };*/
/* 	  var map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);*/
/* 	  var contentString = '<img src="{{ asset('bundles/public/images/Editorial/Logotipos/ELE.png')}}" width="50px" style="display:block;margin:auto;"><p>Av. Ppal. de El Bosque - Edif. Pichincha, piso 6.  of. 63</p>';//imagen y dirección*/
/* 	  var infowindow = new google.maps.InfoWindow({content: contentString});*/
/* 	  var marker = new google.maps.Marker({*/
/* 	  position: myLatlng,*/
/* 	  animation:google.maps.Animation.DROP,*/
/* 	  icon: 'icono-mapa.png', //icono de mapa*/
/* 	  map: map*/
/* 	  });*/
/* 	  infowindow.open(map,marker);*/
/* 	  google.maps.event.addListener(marker, 'click', function() {*/
/* 	  infowindow.open(map,marker);*/
/* 	  });*/
/* 	}*/
/* 	google.maps.event.addDomListener(window, 'load', initialize);*/
/* 	</script>*/
/* {% endblock %}*/
