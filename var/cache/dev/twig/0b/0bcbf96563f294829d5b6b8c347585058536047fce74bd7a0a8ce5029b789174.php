<?php

/* libro/index.html.twig */
class __TwigTemplate_a13e035122020dc35da1e76843c188faa3c4e475d9f2a0fe33d0f6c178b00e1c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "libro/index.html.twig", 1);
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
        $__internal_c9f978dadf5ef832c86f8384257f79ede608cbef6981e80e123c225772b0e9f2 = $this->env->getExtension("native_profiler");
        $__internal_c9f978dadf5ef832c86f8384257f79ede608cbef6981e80e123c225772b0e9f2->enter($__internal_c9f978dadf5ef832c86f8384257f79ede608cbef6981e80e123c225772b0e9f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "libro/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c9f978dadf5ef832c86f8384257f79ede608cbef6981e80e123c225772b0e9f2->leave($__internal_c9f978dadf5ef832c86f8384257f79ede608cbef6981e80e123c225772b0e9f2_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_a7ebc56e542208a81cc0edd2e341fde3d31b08d9ef8bcb87bd8ed1c4674e7408 = $this->env->getExtension("native_profiler");
        $__internal_a7ebc56e542208a81cc0edd2e341fde3d31b08d9ef8bcb87bd8ed1c4674e7408->enter($__internal_a7ebc56e542208a81cc0edd2e341fde3d31b08d9ef8bcb87bd8ed1c4674e7408_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Lista de Libros ";
        
        $__internal_a7ebc56e542208a81cc0edd2e341fde3d31b08d9ef8bcb87bd8ed1c4674e7408->leave($__internal_a7ebc56e542208a81cc0edd2e341fde3d31b08d9ef8bcb87bd8ed1c4674e7408_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_f8aae3116fddca6889c15e8ea68b2d114fcf5d69e772ebad5f96d7e123ff586b = $this->env->getExtension("native_profiler");
        $__internal_f8aae3116fddca6889c15e8ea68b2d114fcf5d69e772ebad5f96d7e123ff586b->enter($__internal_f8aae3116fddca6889c15e8ea68b2d114fcf5d69e772ebad5f96d7e123ff586b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<h3 align=\"center\"> Lista de Libros  </h3>
<hr />
    ";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashBag", array()), "get", array(0 => "success"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["msg"]) {
            // line 7
            echo "        <div class=\"alert alert-success\">
            ";
            // line 8
            echo twig_escape_filter($this->env, $context["msg"], "html", null, true);
            echo "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['msg'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 11
        echo "
    ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashBag", array()), "get", array(0 => "error"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["msgs"]) {
            // line 13
            echo "        <div class=\"alert alert-danger\">
            ";
            // line 14
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["msgs"]);
            foreach ($context['_seq'] as $context["_key"] => $context["msg"]) {
                // line 15
                echo "                <p>";
                echo twig_escape_filter($this->env, $context["msg"], "html", null, true);
                echo "</p>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['msg'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 17
            echo "        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['msgs'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "
    <table id=\"datatable-fixed-header\" class=\"table table-striped table-bordered\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Codigo</th>
                <th>Titulo</th>
                <th>Subtitulo</th>
                <th>Autor</th>
                <th>Pagina</th>
                <th>Isbn</th>
                <th>Formato</th>
                <th>Descripción</th>
                <th>Imagen</th>
                <th>Coleccion</th>
                <th>Categoria</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 39
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["libros"]) ? $context["libros"] : $this->getContext($context, "libros")));
        foreach ($context['_seq'] as $context["_key"] => $context["libro"]) {
            // line 40
            echo "            <tr> 
                <td><a href=\"";
            // line 41
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("libro_show", array("id" => $this->getAttribute($context["libro"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["libro"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 42
            echo twig_escape_filter($this->env, $this->getAttribute($context["libro"], "codigo", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 43
            echo twig_escape_filter($this->env, $this->getAttribute($context["libro"], "titulo", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 44
            echo twig_escape_filter($this->env, $this->getAttribute($context["libro"], "subtitulo", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 45
            echo twig_escape_filter($this->env, $this->getAttribute($context["libro"], "autor", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 46
            echo twig_escape_filter($this->env, $this->getAttribute($context["libro"], "pagina", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 47
            echo twig_escape_filter($this->env, $this->getAttribute($context["libro"], "isbn", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 48
            echo twig_escape_filter($this->env, $this->getAttribute($context["libro"], "formato", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 49
            echo twig_escape_filter($this->env, $this->getAttribute($context["libro"], "descripcion", array()), "html", null, true);
            echo "</td>
                <td><a href=\"";
            // line 50
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl(("uploads/libros/" . $this->getAttribute($context["libro"], "ruta", array()))), "html", null, true);
            echo "\">Ver Libro</a></td>
                <td>";
            // line 51
            echo twig_escape_filter($this->env, $this->getAttribute($context["libro"], "coleccion", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 52
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["libro"], "coleccion", array()), "categoria", array()), "html", null, true);
            echo "</td>
               <td>
                    <a href=\"";
            // line 54
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("libro_show", array("id" => $this->getAttribute($context["libro"], "id", array()))), "html", null, true);
            echo "\">
                       <button type=\"button\" class=\"btn btn-sm btn-warning\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"\" data-original-title=\"Ver\">  <i class=\"fa fa-eye\"></i>  </button>
                    </a>
                    <a href=\"";
            // line 57
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("libro_edit", array("id" => $this->getAttribute($context["libro"], "id", array()))), "html", null, true);
            echo "\">
                       <button type=\"button\" class=\"btn btn-sm btn-success\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"\" data-original-title=\"Editar\">  <i class=\"fa fa-pencil\"></i>  </button>
                    </a>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['libro'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 63
        echo "        </tbody>
    </table>
<a href=\"";
        // line 65
        echo $this->env->getExtension('routing')->getPath("libro_new");
        echo "\"><input type=\"button\" class=\"btn btn-primary\" value=\"Crear Libro\"></a>
";
        
        $__internal_f8aae3116fddca6889c15e8ea68b2d114fcf5d69e772ebad5f96d7e123ff586b->leave($__internal_f8aae3116fddca6889c15e8ea68b2d114fcf5d69e772ebad5f96d7e123ff586b_prof);

    }

    public function getTemplateName()
    {
        return "libro/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  205 => 65,  201 => 63,  189 => 57,  183 => 54,  178 => 52,  174 => 51,  170 => 50,  166 => 49,  162 => 48,  158 => 47,  154 => 46,  150 => 45,  146 => 44,  142 => 43,  138 => 42,  132 => 41,  129 => 40,  125 => 39,  103 => 19,  96 => 17,  87 => 15,  83 => 14,  80 => 13,  76 => 12,  73 => 11,  64 => 8,  61 => 7,  57 => 6,  53 => 4,  47 => 3,  35 => 2,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* {% block title %} Lista de Libros {% endblock %}*/
/* {% block body %}*/
/* <h3 align="center"> Lista de Libros  </h3>*/
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
/* */
/*     <table id="datatable-fixed-header" class="table table-striped table-bordered">*/
/*         <thead>*/
/*             <tr>*/
/*                 <th>Id</th>*/
/*                 <th>Codigo</th>*/
/*                 <th>Titulo</th>*/
/*                 <th>Subtitulo</th>*/
/*                 <th>Autor</th>*/
/*                 <th>Pagina</th>*/
/*                 <th>Isbn</th>*/
/*                 <th>Formato</th>*/
/*                 <th>Descripción</th>*/
/*                 <th>Imagen</th>*/
/*                 <th>Coleccion</th>*/
/*                 <th>Categoria</th>*/
/*                 <th>Acciones</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for libro in libros %}*/
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
/*                 <td><a href="{{ asset('uploads/libros/' ~ libro.ruta) }}">Ver Libro</a></td>*/
/*                 <td>{{ libro.coleccion }}</td>*/
/*                 <td>{{ libro.coleccion.categoria }}</td>*/
/*                <td>*/
/*                     <a href="{{ path('libro_show', { 'id': libro.id }) }}">*/
/*                        <button type="button" class="btn btn-sm btn-warning" data-toggle="tooltip" data-placement="top" title="" data-original-title="Ver">  <i class="fa fa-eye"></i>  </button>*/
/*                     </a>*/
/*                     <a href="{{ path('libro_edit', { 'id': libro.id }) }}">*/
/*                        <button type="button" class="btn btn-sm btn-success" data-toggle="tooltip" data-placement="top" title="" data-original-title="Editar">  <i class="fa fa-pencil"></i>  </button>*/
/*                     </a>*/
/*                 </td>*/
/*             </tr>*/
/*         {% endfor %}*/
/*         </tbody>*/
/*     </table>*/
/* <a href="{{ path('libro_new') }}"><input type="button" class="btn btn-primary" value="Crear Libro"></a>*/
/* {% endblock %}*/
/* */
