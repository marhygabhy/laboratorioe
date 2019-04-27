<?php

/* :libro:show.html.twig */
class __TwigTemplate_2892d7c55e49cc1ca4a61d773fe1c024b6769049f83971d3786f259d1257b588 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":libro:show.html.twig", 1);
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
        $__internal_1441b66be853c76995e1b3d3f82195eb30bd5efaa8705b57d261be2e29bd0956 = $this->env->getExtension("native_profiler");
        $__internal_1441b66be853c76995e1b3d3f82195eb30bd5efaa8705b57d261be2e29bd0956->enter($__internal_1441b66be853c76995e1b3d3f82195eb30bd5efaa8705b57d261be2e29bd0956_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":libro:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1441b66be853c76995e1b3d3f82195eb30bd5efaa8705b57d261be2e29bd0956->leave($__internal_1441b66be853c76995e1b3d3f82195eb30bd5efaa8705b57d261be2e29bd0956_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_03c699e20d14e28185ccad94065c036e81366338ebeb8caabd483185b2a357b8 = $this->env->getExtension("native_profiler");
        $__internal_03c699e20d14e28185ccad94065c036e81366338ebeb8caabd483185b2a357b8->enter($__internal_03c699e20d14e28185ccad94065c036e81366338ebeb8caabd483185b2a357b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Ver Libros";
        
        $__internal_03c699e20d14e28185ccad94065c036e81366338ebeb8caabd483185b2a357b8->leave($__internal_03c699e20d14e28185ccad94065c036e81366338ebeb8caabd483185b2a357b8_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_5a8b34909bb270d7456112300bf678898ac364d53ccb00306f319ed3f138704b = $this->env->getExtension("native_profiler");
        $__internal_5a8b34909bb270d7456112300bf678898ac364d53ccb00306f319ed3f138704b->enter($__internal_5a8b34909bb270d7456112300bf678898ac364d53ccb00306f319ed3f138704b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "mensaje"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 5
            echo "<div class=\"alert alert-success\" role=\"alert\">
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
        echo "<h3 align=\"center\"> Ver Libro  </h3>
<hr />
    ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashBag", array()), "get", array(0 => "success"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["msg"]) {
            // line 12
            echo "        <div class=\"alert alert-success\"> ";
            echo twig_escape_filter($this->env, $context["msg"], "html", null, true);
            echo " </div>       
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['msg'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "
    ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashBag", array()), "get", array(0 => "error"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["msgs"]) {
            // line 16
            echo "        <div class=\"alert alert-danger\">
            ";
            // line 17
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["msgs"]);
            foreach ($context['_seq'] as $context["_key"] => $context["msg"]) {
                // line 18
                echo "                <p>";
                echo twig_escape_filter($this->env, $context["msg"], "html", null, true);
                echo "</p>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['msg'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 20
            echo "        </div> 
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['msgs'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "
    <!-- page content -->
    <div class=\"x_content\">                   
        <table class=\"table table-striped\">
            <tbody>
                <tr>
                <th>Id</th>
                <td>";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["libro"]) ? $context["libro"] : $this->getContext($context, "libro")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Codigo</th>
                <td>";
        // line 33
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["libro"]) ? $context["libro"] : $this->getContext($context, "libro")), "codigo", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Titulo</th>
                <td>";
        // line 37
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["libro"]) ? $context["libro"] : $this->getContext($context, "libro")), "titulo", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Subtitulo</th>
                <td>";
        // line 41
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["libro"]) ? $context["libro"] : $this->getContext($context, "libro")), "subtitulo", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Autor</th>
                <td>";
        // line 45
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["libro"]) ? $context["libro"] : $this->getContext($context, "libro")), "autor", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Pagina</th>
                <td>";
        // line 49
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["libro"]) ? $context["libro"] : $this->getContext($context, "libro")), "pagina", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Isbn</th>
                <td>";
        // line 53
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["libro"]) ? $context["libro"] : $this->getContext($context, "libro")), "isbn", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Formato</th>
                <td>";
        // line 57
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["libro"]) ? $context["libro"] : $this->getContext($context, "libro")), "formato", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Descripcion</th>
                <td>";
        // line 61
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["libro"]) ? $context["libro"] : $this->getContext($context, "libro")), "descripcion", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Imagen</th>
                <td><a href=\"";
        // line 65
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl(("uploads/libros" . $this->getAttribute((isset($context["libro"]) ? $context["libro"] : $this->getContext($context, "libro")), "ruta", array()))), "html", null, true);
        echo "\">Ver Libro</a></td>
            </tr>
            <tr>
                <th>Colección</th>
                <td>";
        // line 69
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["libro"]) ? $context["libro"] : $this->getContext($context, "libro")), "coleccion", array()), "html", null, true);
        echo "</td>
            </tr>
             <tr>
                <th>Categoria</th>
                <td>";
        // line 73
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
        // line 81
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("libro_edit", array("id" => $this->getAttribute((isset($context["libro"]) ? $context["libro"] : $this->getContext($context, "libro")), "id", array()))), "html", null, true);
        echo "\"><i class=\"fa fa-edit m-right-xs\"></i>Editar</a>                       
</th> 
<th>
    ";
        // line 84
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
    <button type=\"submit\" class=\"btn btn-danger\"><i class=\"fa fa-trash\"></i> Eliminar </button>
    ";
        // line 86
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
</th> 
<th>             
    <a href=\"";
        // line 89
        echo $this->env->getExtension('routing')->getPath("libro_index");
        echo "\"><input type=\"button\" class=\"btn btn-primary\" value=\"Volver\"></a>
</th>   
<tr> 
</table> 
";
        
        $__internal_5a8b34909bb270d7456112300bf678898ac364d53ccb00306f319ed3f138704b->leave($__internal_5a8b34909bb270d7456112300bf678898ac364d53ccb00306f319ed3f138704b_prof);

    }

    public function getTemplateName()
    {
        return ":libro:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  230 => 89,  224 => 86,  219 => 84,  213 => 81,  202 => 73,  195 => 69,  188 => 65,  181 => 61,  174 => 57,  167 => 53,  160 => 49,  153 => 45,  146 => 41,  139 => 37,  132 => 33,  125 => 29,  116 => 22,  109 => 20,  100 => 18,  96 => 17,  93 => 16,  89 => 15,  86 => 14,  77 => 12,  73 => 11,  69 => 9,  60 => 6,  57 => 5,  53 => 4,  47 => 3,  35 => 2,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* {% block title %} Ver Libros{% endblock %} */
/* {% block body %}*/
/* {% for flashMessage in app.session.flashbag.get('mensaje') %}*/
/* <div class="alert alert-success" role="alert">*/
/*     <div class="container"> {{ flashMessage }} </div>*/
/* </div>*/
/* {% endfor %}*/
/* <h3 align="center"> Ver Libro  </h3>*/
/* <hr />*/
/*     {% for msg in app.session.flashBag.get('success') %}*/
/*         <div class="alert alert-success"> {{ msg }} </div>       */
/*     {% endfor %}*/
/* */
/*     {% for msgs in app.session.flashBag.get('error') %}*/
/*         <div class="alert alert-danger">*/
/*             {% for msg in msgs %}*/
/*                 <p>{{ msg }}</p>*/
/*             {% endfor %}*/
/*         </div> */
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
/*                 <td><a href="{{ asset('uploads/libros' ~ libro.ruta) }}">Ver Libro</a></td>*/
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
