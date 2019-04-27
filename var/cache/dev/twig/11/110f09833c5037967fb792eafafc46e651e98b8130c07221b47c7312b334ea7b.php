<?php

/* :coleccion:index.html.twig */
class __TwigTemplate_748ab37b78497b18dcaacd0a8a9f101ea940f6d2716ccc0e12b63bd840481605 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":coleccion:index.html.twig", 1);
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
        $__internal_c11557e04ab57b7ef2ed76f0bbbc0cfee5ba3263ade01c332b7dd634d14a238d = $this->env->getExtension("native_profiler");
        $__internal_c11557e04ab57b7ef2ed76f0bbbc0cfee5ba3263ade01c332b7dd634d14a238d->enter($__internal_c11557e04ab57b7ef2ed76f0bbbc0cfee5ba3263ade01c332b7dd634d14a238d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":coleccion:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c11557e04ab57b7ef2ed76f0bbbc0cfee5ba3263ade01c332b7dd634d14a238d->leave($__internal_c11557e04ab57b7ef2ed76f0bbbc0cfee5ba3263ade01c332b7dd634d14a238d_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_f6c44f6a79433f0c7541705450c2e38e9169fa87f5e1af91a004549c6830a76d = $this->env->getExtension("native_profiler");
        $__internal_f6c44f6a79433f0c7541705450c2e38e9169fa87f5e1af91a004549c6830a76d->enter($__internal_f6c44f6a79433f0c7541705450c2e38e9169fa87f5e1af91a004549c6830a76d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Lista de Colecciones ";
        
        $__internal_f6c44f6a79433f0c7541705450c2e38e9169fa87f5e1af91a004549c6830a76d->leave($__internal_f6c44f6a79433f0c7541705450c2e38e9169fa87f5e1af91a004549c6830a76d_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_cea2f52bb8ceb2be5209c981f3665368051c3468fbfea382c1f460f091499052 = $this->env->getExtension("native_profiler");
        $__internal_cea2f52bb8ceb2be5209c981f3665368051c3468fbfea382c1f460f091499052->enter($__internal_cea2f52bb8ceb2be5209c981f3665368051c3468fbfea382c1f460f091499052_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        echo "<h3 align=\"center\"> Lista de Colecciones  </h3>
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
            <tr>
                <th>";
        // line 29
        echo $this->env->getExtension('knp_pagination')->sortable($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), $this->env->getExtension('translator')->trans("Id"), "u.id");
        echo "</th>
                <th>";
        // line 30
        echo $this->env->getExtension('knp_pagination')->sortable($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), $this->env->getExtension('translator')->trans("Categoria"), "u.categoria");
        echo "</th>
                <th>";
        // line 31
        echo $this->env->getExtension('knp_pagination')->sortable($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), $this->env->getExtension('translator')->trans("Colecciones"), "u.colecciones");
        echo "</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 36
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
        foreach ($context['_seq'] as $context["_key"] => $context["coleccion"]) {
            echo " 
            <tr>
                <td><a href=\"";
            // line 38
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("coleccion_show", array("id" => $this->getAttribute($context["coleccion"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["coleccion"], "id", array()), "html", null, true);
            echo "</a></td>
                 <td>";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["coleccion"], "categoria", array()), "descripcion", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 40
            echo twig_escape_filter($this->env, $this->getAttribute($context["coleccion"], "descripcion", array()), "html", null, true);
            echo "</td>
               <td>
                    <a href=\"";
            // line 42
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("coleccion_show", array("id" => $this->getAttribute($context["coleccion"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-sm btn-info\">Ver</a>
                    <a href=\"";
            // line 43
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("coleccion_edit", array("id" => $this->getAttribute($context["coleccion"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-sm btn-success\">Editar</a>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['coleccion'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo "        </tbody>
    </table>
<a href=\"";
        // line 49
        echo $this->env->getExtension('routing')->getPath("coleccion_new");
        echo "\"><input type=\"button\" class=\"btn btn-primary\" value=\"Crear Colección\"></a>
";
        // line 51
        echo "            <div class=\"navigation\">
                ";
        // line 52
        echo $this->env->getExtension('knp_pagination')->render($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
        echo "
            </div>
";
        
        $__internal_cea2f52bb8ceb2be5209c981f3665368051c3468fbfea382c1f460f091499052->leave($__internal_cea2f52bb8ceb2be5209c981f3665368051c3468fbfea382c1f460f091499052_prof);

    }

    public function getTemplateName()
    {
        return ":coleccion:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  191 => 52,  188 => 51,  184 => 49,  180 => 47,  170 => 43,  166 => 42,  161 => 40,  157 => 39,  151 => 38,  144 => 36,  136 => 31,  132 => 30,  128 => 29,  119 => 24,  112 => 22,  103 => 20,  99 => 19,  96 => 18,  92 => 17,  89 => 16,  80 => 13,  77 => 12,  73 => 11,  69 => 9,  60 => 6,  57 => 5,  53 => 4,  47 => 3,  35 => 2,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* {% block title %} Lista de Colecciones {% endblock %}*/
/* {% block body %}*/
/* {% for flashMessage in app.session.flashbag.get('mensaje') %}*/
/*         <div class="alert alert-success" role="alert">*/
/*             <div class="container"> {{ flashMessage }} </div>*/
/*         </div>*/
/*     {% endfor %}*/
/* <h3 align="center"> Lista de Colecciones  </h3>*/
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
/*             <tr>*/
/*                 <th>{{ knp_pagination_sortable(pagination, 'Id'|trans,'u.id') }}</th>*/
/*                 <th>{{ knp_pagination_sortable(pagination, 'Categoria'|trans,'u.categoria') }}</th>*/
/*                 <th>{{ knp_pagination_sortable(pagination, 'Colecciones'|trans,'u.colecciones') }}</th>*/
/*                 <th>Acciones</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for coleccion in pagination %} */
/*             <tr>*/
/*                 <td><a href="{{ path('coleccion_show', { 'id': coleccion.id }) }}">{{ coleccion.id }}</a></td>*/
/*                  <td>{{ coleccion.categoria.descripcion }}</td>*/
/*                 <td>{{ coleccion.descripcion }}</td>*/
/*                <td>*/
/*                     <a href="{{ path('coleccion_show', { 'id': coleccion.id }) }}" class="btn btn-sm btn-info">Ver</a>*/
/*                     <a href="{{ path('coleccion_edit', { 'id': coleccion.id }) }}" class="btn btn-sm btn-success">Editar</a>*/
/*                 </td>*/
/*             </tr>*/
/*         {% endfor %}*/
/*         </tbody>*/
/*     </table>*/
/* <a href="{{ path('coleccion_new') }}"><input type="button" class="btn btn-primary" value="Crear Colección"></a>*/
/* {# navegador de paginas#}*/
/*             <div class="navigation">*/
/*                 {{ knp_pagination_render(pagination) }}*/
/*             </div>*/
/* {% endblock %}*/
/* */
