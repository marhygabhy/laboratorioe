<?php

/* :libro:index.html.twig */
class __TwigTemplate_72cf8169d793bcaefb67e74323cb56449c8c719b9cce4bd38cebfb59b11d93ea extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":libro:index.html.twig", 1);
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
        $__internal_d22bf4e00bd724d53d1a48603f65a490506122c7bddd632deb3911bb47598156 = $this->env->getExtension("native_profiler");
        $__internal_d22bf4e00bd724d53d1a48603f65a490506122c7bddd632deb3911bb47598156->enter($__internal_d22bf4e00bd724d53d1a48603f65a490506122c7bddd632deb3911bb47598156_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":libro:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d22bf4e00bd724d53d1a48603f65a490506122c7bddd632deb3911bb47598156->leave($__internal_d22bf4e00bd724d53d1a48603f65a490506122c7bddd632deb3911bb47598156_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_72f2cb899810085ee27b194f7b5ed03d2debb56d3bad632c2aa9183e2299ab42 = $this->env->getExtension("native_profiler");
        $__internal_72f2cb899810085ee27b194f7b5ed03d2debb56d3bad632c2aa9183e2299ab42->enter($__internal_72f2cb899810085ee27b194f7b5ed03d2debb56d3bad632c2aa9183e2299ab42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Libros ";
        
        $__internal_72f2cb899810085ee27b194f7b5ed03d2debb56d3bad632c2aa9183e2299ab42->leave($__internal_72f2cb899810085ee27b194f7b5ed03d2debb56d3bad632c2aa9183e2299ab42_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_6502a5e1633259aff59d5540c654a417497f80cf56aa8b40d9f950140b334219 = $this->env->getExtension("native_profiler");
        $__internal_6502a5e1633259aff59d5540c654a417497f80cf56aa8b40d9f950140b334219->enter($__internal_6502a5e1633259aff59d5540c654a417497f80cf56aa8b40d9f950140b334219_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        echo " 
";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "mensaje"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 5
            echo "        <div class=\"alert alert-success\" role=\"alert\">
            <div class=\"container\"> ";
            // line 6
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo " </div>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 9
        echo "<h3 align=\"center\"> Libros  </h3>
<hr />
    ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashBag", array()), "get", array(0 => "success"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["msg"]) {
            // line 12
            echo "        <div class=\"alert alert-success\">
            ";
            // line 13
            echo twig_escape_filter($this->env, $context["msg"], "html", null, true);
            echo "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['msg'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "
    ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashBag", array()), "get", array(0 => "error"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["msgs"]) {
            // line 18
            echo "        <div class=\"alert alert-danger\">
            ";
            // line 19
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["msgs"]);
            foreach ($context['_seq'] as $context["_key"] => $context["msg"]) {
                // line 20
                echo "                <p>";
                echo twig_escape_filter($this->env, $context["msg"], "html", null, true);
                echo "</p>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['msg'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 22
            echo "        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['msgs'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "    Total registros: ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "getTotalItemCount", array()), "html", null, true);
        echo "
    <table id=\"datatable-fixed-header\" class=\"table table-striped table-bordered\">
        <thead>
            <tr>
                <th>";
        // line 28
        echo $this->env->getExtension('knp_pagination')->sortable($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), $this->env->getExtension('translator')->trans("Id"), "u.id");
        echo "</th>
                <th>";
        // line 29
        echo $this->env->getExtension('knp_pagination')->sortable($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), $this->env->getExtension('translator')->trans("Codigo"), "u.codigo");
        echo "</th>
                <th>";
        // line 30
        echo $this->env->getExtension('knp_pagination')->sortable($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), $this->env->getExtension('translator')->trans("Titulo"), "u.titulo");
        echo "</th>
                <th>";
        // line 31
        echo $this->env->getExtension('knp_pagination')->sortable($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), $this->env->getExtension('translator')->trans("Subtitulo"), "u.subtitulo");
        echo "</th>
                <th>";
        // line 32
        echo $this->env->getExtension('knp_pagination')->sortable($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), $this->env->getExtension('translator')->trans("Autor"), "u.autor");
        echo "</th>
                <th>";
        // line 33
        echo $this->env->getExtension('knp_pagination')->sortable($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), $this->env->getExtension('translator')->trans("Paginas"), "u.pagina");
        echo "</th>
                <th>";
        // line 34
        echo $this->env->getExtension('knp_pagination')->sortable($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), $this->env->getExtension('translator')->trans("Isbn"), "u.isbn");
        echo "</th>
                <th>";
        // line 35
        echo $this->env->getExtension('knp_pagination')->sortable($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), $this->env->getExtension('translator')->trans("Formato"), "u.formato");
        echo "</th>
                <th>";
        // line 36
        echo $this->env->getExtension('knp_pagination')->sortable($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), $this->env->getExtension('translator')->trans("Descripción"), "u.descripcion");
        echo "</th>
                <th>";
        // line 37
        echo $this->env->getExtension('knp_pagination')->sortable($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), $this->env->getExtension('translator')->trans("Imagen"), "u.ruta");
        echo "</th>
                <th>";
        // line 38
        echo $this->env->getExtension('knp_pagination')->sortable($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), $this->env->getExtension('translator')->trans("Coleccion"), "u.coleccion");
        echo "</th>
                <th>";
        // line 39
        echo $this->env->getExtension('knp_pagination')->sortable($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), $this->env->getExtension('translator')->trans("Categoria"), "u.coleccion.categoria");
        echo "</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 44
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
        foreach ($context['_seq'] as $context["_key"] => $context["libro"]) {
            // line 45
            echo "            <tr> 
                <td><a href=\"";
            // line 46
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("libro_show", array("id" => $this->getAttribute($context["libro"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["libro"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 47
            echo twig_escape_filter($this->env, $this->getAttribute($context["libro"], "codigo", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 48
            echo twig_escape_filter($this->env, $this->getAttribute($context["libro"], "titulo", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 49
            echo twig_escape_filter($this->env, $this->getAttribute($context["libro"], "subtitulo", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 50
            echo twig_escape_filter($this->env, $this->getAttribute($context["libro"], "autor", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 51
            echo twig_escape_filter($this->env, $this->getAttribute($context["libro"], "pagina", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 52
            echo twig_escape_filter($this->env, $this->getAttribute($context["libro"], "isbn", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 53
            echo twig_escape_filter($this->env, $this->getAttribute($context["libro"], "formato", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 54
            echo twig_escape_filter($this->env, $this->getAttribute($context["libro"], "descripcion", array()), "html", null, true);
            echo "</td>
                <td><a href=\"";
            // line 55
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl(("uploads/libros" . $this->getAttribute($context["libro"], "ruta", array()))), "html", null, true);
            echo "\">Ver Libro</a></td>
                <td>";
            // line 56
            echo twig_escape_filter($this->env, $this->getAttribute($context["libro"], "coleccion", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 57
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["libro"], "coleccion", array()), "categoria", array()), "html", null, true);
            echo "</td>
               <td>
                    <a href=\"";
            // line 59
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("libro_show", array("id" => $this->getAttribute($context["libro"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-sm btn-info\">Ver</a>
                    <a href=\"";
            // line 60
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("libro_edit", array("id" => $this->getAttribute($context["libro"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-sm btn-success\">Editar</a>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['libro'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 64
        echo "        </tbody>
    </table>
<a href=\"";
        // line 66
        echo $this->env->getExtension('routing')->getPath("libro_new");
        echo "\"><input type=\"button\" class=\"btn btn-primary\" value=\"Crear Libro\"></a>
";
        // line 68
        echo "            <div class=\"navigation\">
                ";
        // line 69
        echo $this->env->getExtension('knp_pagination')->render($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
        echo "
            </div>
";
        
        $__internal_6502a5e1633259aff59d5540c654a417497f80cf56aa8b40d9f950140b334219->leave($__internal_6502a5e1633259aff59d5540c654a417497f80cf56aa8b40d9f950140b334219_prof);

    }

    public function getTemplateName()
    {
        return ":libro:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  264 => 69,  261 => 68,  257 => 66,  253 => 64,  243 => 60,  239 => 59,  234 => 57,  230 => 56,  226 => 55,  222 => 54,  218 => 53,  214 => 52,  210 => 51,  206 => 50,  202 => 49,  198 => 48,  194 => 47,  188 => 46,  185 => 45,  181 => 44,  173 => 39,  169 => 38,  165 => 37,  161 => 36,  157 => 35,  153 => 34,  149 => 33,  145 => 32,  141 => 31,  137 => 30,  133 => 29,  129 => 28,  121 => 24,  114 => 22,  105 => 20,  101 => 19,  98 => 18,  94 => 17,  91 => 16,  82 => 13,  79 => 12,  75 => 11,  71 => 9,  62 => 6,  59 => 5,  55 => 4,  47 => 3,  35 => 2,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* {% block title %}Libros {% endblock %}*/
/* {% block body %} */
/* {% for flashMessage in app.session.flashbag.get('mensaje') %}*/
/*         <div class="alert alert-success" role="alert">*/
/*             <div class="container"> {{ flashMessage }} </div>*/
/*         </div>*/
/*     {% endfor %}*/
/* <h3 align="center"> Libros  </h3>*/
/* <hr />*/
/*     {% for msg in app.session.flashBag.get('success') %}*/
/*         <div class="alert alert-success">*/
/*             {{ msg }}*/
/*         </div>*/
/*     {% endfor %}*/
/* */
/*     {% for msgs in app.session.flashBag.get('error') %}*/
/*         <div class="alert alert-danger">*/
/*             {% for msg in msgs %}*/
/*                 <p>{{ msg }}</p>*/
/*             {% endfor %}*/
/*         </div>*/
/*     {% endfor %}*/
/*     Total registros: {{ pagination.getTotalItemCount }}*/
/*     <table id="datatable-fixed-header" class="table table-striped table-bordered">*/
/*         <thead>*/
/*             <tr>*/
/*                 <th>{{ knp_pagination_sortable(pagination, 'Id'|trans,'u.id') }}</th>*/
/*                 <th>{{ knp_pagination_sortable(pagination, 'Codigo'|trans,'u.codigo') }}</th>*/
/*                 <th>{{ knp_pagination_sortable(pagination, 'Titulo'|trans,'u.titulo') }}</th>*/
/*                 <th>{{ knp_pagination_sortable(pagination, 'Subtitulo'|trans,'u.subtitulo') }}</th>*/
/*                 <th>{{ knp_pagination_sortable(pagination, 'Autor'|trans,'u.autor') }}</th>*/
/*                 <th>{{ knp_pagination_sortable(pagination, 'Paginas'|trans,'u.pagina') }}</th>*/
/*                 <th>{{ knp_pagination_sortable(pagination, 'Isbn'|trans,'u.isbn') }}</th>*/
/*                 <th>{{ knp_pagination_sortable(pagination, 'Formato'|trans,'u.formato') }}</th>*/
/*                 <th>{{ knp_pagination_sortable(pagination, 'Descripción'|trans,'u.descripcion') }}</th>*/
/*                 <th>{{ knp_pagination_sortable(pagination, 'Imagen'|trans,'u.ruta') }}</th>*/
/*                 <th>{{ knp_pagination_sortable(pagination, 'Coleccion'|trans,'u.coleccion') }}</th>*/
/*                 <th>{{ knp_pagination_sortable(pagination, 'Categoria'|trans,'u.coleccion.categoria') }}</th>*/
/*                 <th>Acciones</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for libro in pagination %}*/
/*             <tr> */
/*                 <td><a href="{{ path('libro_show', { 'id': libro.id }) }}">{{ libro.id }}</a></td>*/
/*                 <td>{{ libro.codigo }}</td>*/
/*                 <td>{{ libro.titulo }}</td>*/
/*                 <td>{{ libro.subtitulo }}</td>*/
/*                 <td>{{ libro.autor }}</td>*/
/*                 <td>{{ libro.pagina }}</td>*/
/*                 <td>{{ libro.isbn }}</td>*/
/*                 <td>{{ libro.formato }}</td>*/
/*                 <td>{{ libro.descripcion }}</td>*/
/*                 <td><a href="{{ asset('uploads/libros' ~ libro.ruta) }}">Ver Libro</a></td>*/
/*                 <td>{{ libro.coleccion }}</td>*/
/*                 <td>{{ libro.coleccion.categoria }}</td>*/
/*                <td>*/
/*                     <a href="{{ path('libro_show', { 'id': libro.id }) }}" class="btn btn-sm btn-info">Ver</a>*/
/*                     <a href="{{ path('libro_edit', { 'id': libro.id }) }}" class="btn btn-sm btn-success">Editar</a>*/
/*                 </td>*/
/*             </tr>*/
/*         {% endfor %}*/
/*         </tbody>*/
/*     </table>*/
/* <a href="{{ path('libro_new') }}"><input type="button" class="btn btn-primary" value="Crear Libro"></a>*/
/* {# navegador de paginas#}*/
/*             <div class="navigation">*/
/*                 {{ knp_pagination_render(pagination) }}*/
/*             </div>*/
/* {% endblock %}*/
/* */
