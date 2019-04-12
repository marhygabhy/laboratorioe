<?php

/* libro/show.html.twig */
class __TwigTemplate_a405ca8f3f3caa6729d176ab48f8c7fda47239bd2ce3a8c66f1fdd103c46f618 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "libro/show.html.twig", 1);
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
        $__internal_2de77a03e7ffc343c07ecdf632d824c1b352092f16144f54cb02e1cdef900c35 = $this->env->getExtension("native_profiler");
        $__internal_2de77a03e7ffc343c07ecdf632d824c1b352092f16144f54cb02e1cdef900c35->enter($__internal_2de77a03e7ffc343c07ecdf632d824c1b352092f16144f54cb02e1cdef900c35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "libro/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2de77a03e7ffc343c07ecdf632d824c1b352092f16144f54cb02e1cdef900c35->leave($__internal_2de77a03e7ffc343c07ecdf632d824c1b352092f16144f54cb02e1cdef900c35_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_26db5cb16cc64fe529aee351e0cc31ea8f7089efc53a55dd8245cb2dcb1b2892 = $this->env->getExtension("native_profiler");
        $__internal_26db5cb16cc64fe529aee351e0cc31ea8f7089efc53a55dd8245cb2dcb1b2892->enter($__internal_26db5cb16cc64fe529aee351e0cc31ea8f7089efc53a55dd8245cb2dcb1b2892_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Ver Libros";
        
        $__internal_26db5cb16cc64fe529aee351e0cc31ea8f7089efc53a55dd8245cb2dcb1b2892->leave($__internal_26db5cb16cc64fe529aee351e0cc31ea8f7089efc53a55dd8245cb2dcb1b2892_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_c26729135bf91acd3a15b1be38d04d2b4cae290bb525592821b68403ba904c5e = $this->env->getExtension("native_profiler");
        $__internal_c26729135bf91acd3a15b1be38d04d2b4cae290bb525592821b68403ba904c5e->enter($__internal_c26729135bf91acd3a15b1be38d04d2b4cae290bb525592821b68403ba904c5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashBag", array()), "get", array(0 => "success"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["msg"]) {
            // line 5
            echo "        <div class=\"alert alert-success\"> ";
            echo twig_escape_filter($this->env, $context["msg"], "html", null, true);
            echo " </div>       
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['msg'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 7
        echo "
    ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashBag", array()), "get", array(0 => "error"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["msgs"]) {
            // line 9
            echo "        <div class=\"alert alert-danger\">
            ";
            // line 10
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["msgs"]);
            foreach ($context['_seq'] as $context["_key"] => $context["msg"]) {
                // line 11
                echo "                <p>";
                echo twig_escape_filter($this->env, $context["msg"], "html", null, true);
                echo "</p>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['msg'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 13
            echo "        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['msgs'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "
    <!-- page content -->
    <div class=\"x_content\">                   
        <table class=\"table table-striped\">
            <tbody>
                <tr>
                <th>Id</th>
                <td>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["libro"]) ? $context["libro"] : $this->getContext($context, "libro")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Codigo</th>
                <td>";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["libro"]) ? $context["libro"] : $this->getContext($context, "libro")), "codigo", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Titulo</th>
                <td>";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["libro"]) ? $context["libro"] : $this->getContext($context, "libro")), "titulo", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Subtitulo</th>
                <td>";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["libro"]) ? $context["libro"] : $this->getContext($context, "libro")), "subtitulo", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Autor</th>
                <td>";
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["libro"]) ? $context["libro"] : $this->getContext($context, "libro")), "autor", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Pagina</th>
                <td>";
        // line 42
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["libro"]) ? $context["libro"] : $this->getContext($context, "libro")), "pagina", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Isbn</th>
                <td>";
        // line 46
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["libro"]) ? $context["libro"] : $this->getContext($context, "libro")), "isbn", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Formato</th>
                <td>";
        // line 50
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["libro"]) ? $context["libro"] : $this->getContext($context, "libro")), "formato", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Descripcion</th>
                <td>";
        // line 54
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["libro"]) ? $context["libro"] : $this->getContext($context, "libro")), "descripcion", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Imagen</th>
                <td><a href=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl(("uploads/libros/" . $this->getAttribute((isset($context["libro"]) ? $context["libro"] : $this->getContext($context, "libro")), "ruta", array()))), "html", null, true);
        echo "\">Ver Libro</a></td>
            </tr>
            <tr>
                <th>Colección</th>
                <td>";
        // line 62
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["libro"]) ? $context["libro"] : $this->getContext($context, "libro")), "coleccion", array()), "html", null, true);
        echo "</td>
            </tr>
             <tr>
                <th>Categoria</th>
                <td>";
        // line 66
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["libro"]) ? $context["libro"] : $this->getContext($context, "libro")), "coleccion", array()), "categoria", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>
</div>                    
<table>
<tr>
<th>             
    <a class=\"btn btn-success\" href=\"";
        // line 74
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("libro_edit", array("id" => $this->getAttribute((isset($context["libro"]) ? $context["libro"] : $this->getContext($context, "libro")), "id", array()))), "html", null, true);
        echo "\"><i class=\"fa fa-edit m-right-xs\"></i>Editar</a>                       
</th> 
<th>
    ";
        // line 77
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
    <button type=\"submit\" class=\"btn btn-danger\"><i class=\"fa fa-trash\"></i> Eliminar </button>
    ";
        // line 79
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
</th> 
<th>             
    <a href=\"";
        // line 82
        echo $this->env->getExtension('routing')->getPath("libro_index");
        echo "\"><input type=\"button\" class=\"btn btn-primary\" value=\"Volver\"></a>
</th>   
<tr> 
</table> 
";
        
        $__internal_c26729135bf91acd3a15b1be38d04d2b4cae290bb525592821b68403ba904c5e->leave($__internal_c26729135bf91acd3a15b1be38d04d2b4cae290bb525592821b68403ba904c5e_prof);

    }

    public function getTemplateName()
    {
        return "libro/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  211 => 82,  205 => 79,  200 => 77,  194 => 74,  183 => 66,  176 => 62,  169 => 58,  162 => 54,  155 => 50,  148 => 46,  141 => 42,  134 => 38,  127 => 34,  120 => 30,  113 => 26,  106 => 22,  97 => 15,  90 => 13,  81 => 11,  77 => 10,  74 => 9,  70 => 8,  67 => 7,  58 => 5,  53 => 4,  47 => 3,  35 => 2,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* {% block title %} Ver Libros{% endblock %} */
/* {% block body %}*/
/*     {% for msg in app.session.flashBag.get('success') %}*/
/*         <div class="alert alert-success"> {{ msg }} </div>       */
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
/*     <!-- page content -->*/
/*     <div class="x_content">                   */
/*         <table class="table table-striped">*/
/*             <tbody>*/
/*                 <tr>*/
/*                 <th>Id</th>*/
/*                 <td>{{ libro.id }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Codigo</th>*/
/*                 <td>{{ libro.codigo }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Titulo</th>*/
/*                 <td>{{ libro.titulo }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Subtitulo</th>*/
/*                 <td>{{ libro.subtitulo }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Autor</th>*/
/*                 <td>{{ libro.autor }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Pagina</th>*/
/*                 <td>{{ libro.pagina }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Isbn</th>*/
/*                 <td>{{ libro.isbn }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Formato</th>*/
/*                 <td>{{ libro.formato }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Descripcion</th>*/
/*                 <td>{{ libro.descripcion }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Imagen</th>*/
/*                 <td><a href="{{ asset('uploads/libros/' ~ libro.ruta) }}">Ver Libro</a></td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Colección</th>*/
/*                 <td>{{ libro.coleccion }}</td>*/
/*             </tr>*/
/*              <tr>*/
/*                 <th>Categoria</th>*/
/*                 <td>{{ libro.coleccion.categoria }}</td>*/
/*             </tr>*/
/*         </tbody>*/
/*     </table>*/
/* </div>                    */
/* <table>*/
/* <tr>*/
/* <th>             */
/*     <a class="btn btn-success" href="{{ path('libro_edit', { 'id': libro.id }) }}"><i class="fa fa-edit m-right-xs"></i>Editar</a>                       */
/* </th> */
/* <th>*/
/*     {{ form_start(delete_form) }}*/
/*     <button type="submit" class="btn btn-danger"><i class="fa fa-trash"></i> Eliminar </button>*/
/*     {{ form_end(delete_form) }}*/
/* </th> */
/* <th>             */
/*     <a href="{{ path('libro_index') }}"><input type="button" class="btn btn-primary" value="Volver"></a>*/
/* </th>   */
/* <tr> */
/* </table> */
/* {% endblock %}*/
