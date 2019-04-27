<?php

/* :solicitud:index.html.twig */
class __TwigTemplate_3cb297e57c363c1a1cc337767388df1aac04fb94585c13614abb8c7c302cae47 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":solicitud:index.html.twig", 1);
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
        $__internal_6f47856a3ee001c900631e43c6945bfcbcbb88edcf2435865c9217470e51d912 = $this->env->getExtension("native_profiler");
        $__internal_6f47856a3ee001c900631e43c6945bfcbcbb88edcf2435865c9217470e51d912->enter($__internal_6f47856a3ee001c900631e43c6945bfcbcbb88edcf2435865c9217470e51d912_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":solicitud:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47856a3ee001c900631e43c6945bfcbcbb88edcf2435865c9217470e51d912->leave($__internal_6f47856a3ee001c900631e43c6945bfcbcbb88edcf2435865c9217470e51d912_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_a2eaeead40df9323668bfef9f776300eabc77f64655df9749de4a4b5197aed0a = $this->env->getExtension("native_profiler");
        $__internal_a2eaeead40df9323668bfef9f776300eabc77f64655df9749de4a4b5197aed0a->enter($__internal_a2eaeead40df9323668bfef9f776300eabc77f64655df9749de4a4b5197aed0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Lista de Solicitudes ";
        
        $__internal_a2eaeead40df9323668bfef9f776300eabc77f64655df9749de4a4b5197aed0a->leave($__internal_a2eaeead40df9323668bfef9f776300eabc77f64655df9749de4a4b5197aed0a_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_fe279159486229c36ee0184d231924e6ffd2640aff561a7263d3870cf10a5c65 = $this->env->getExtension("native_profiler");
        $__internal_fe279159486229c36ee0184d231924e6ffd2640aff561a7263d3870cf10a5c65->enter($__internal_fe279159486229c36ee0184d231924e6ffd2640aff561a7263d3870cf10a5c65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        echo "<h3 align=\"center\"> Lista de Solicitudes  </h3>
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
        echo $this->env->getExtension('knp_pagination')->sortable($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), $this->env->getExtension('translator')->trans("Solicitud"), "u.id");
        echo "</th>
                <th>";
        // line 29
        echo $this->env->getExtension('knp_pagination')->sortable($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), $this->env->getExtension('translator')->trans("Cliente"), "u.cliente");
        echo "</th>
                <th>Libro</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 35
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
        foreach ($context['_seq'] as $context["_key"] => $context["solicitud"]) {
            // line 36
            echo "        <tr>
                <td><a href=\"";
            // line 37
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("solicitud_show", array("id" => $this->getAttribute($context["solicitud"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["solicitud"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute($context["solicitud"], "cliente", array()), "html", null, true);
            echo "</td>
                <td></td>
               <td>
                    <a href=\"";
            // line 41
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("solicitud_show", array("id" => $this->getAttribute($context["solicitud"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-sm btn-info\">Ver</a>
                    <a href=\"";
            // line 42
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("solicitud_edit", array("id" => $this->getAttribute($context["solicitud"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-sm btn-success\">Editar</a>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['solicitud'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo "        </tbody>
    </table>
<a href=\"";
        // line 48
        echo $this->env->getExtension('routing')->getPath("solicitud_new");
        echo "\"><input type=\"button\" class=\"btn btn-primary\" value=\"Crear Solicitud\"></a>
";
        // line 50
        echo "            <div class=\"navigation\">
                ";
        // line 51
        echo $this->env->getExtension('knp_pagination')->render($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
        echo "
            </div>
";
        
        $__internal_fe279159486229c36ee0184d231924e6ffd2640aff561a7263d3870cf10a5c65->leave($__internal_fe279159486229c36ee0184d231924e6ffd2640aff561a7263d3870cf10a5c65_prof);

    }

    public function getTemplateName()
    {
        return ":solicitud:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  186 => 51,  183 => 50,  179 => 48,  175 => 46,  165 => 42,  161 => 41,  155 => 38,  149 => 37,  146 => 36,  142 => 35,  133 => 29,  129 => 28,  121 => 24,  114 => 22,  105 => 20,  101 => 19,  98 => 18,  94 => 17,  91 => 16,  82 => 13,  79 => 12,  75 => 11,  71 => 9,  62 => 6,  59 => 5,  55 => 4,  47 => 3,  35 => 2,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* {% block title %} Lista de Solicitudes {% endblock %}*/
/* {% block body %} */
/* {% for flashMessage in app.session.flashbag.get('mensaje') %}*/
/*         <div class="alert alert-success" role="alert">*/
/*             <div class="container"> {{ flashMessage }} </div>*/
/*         </div>*/
/*     {% endfor %}*/
/* <h3 align="center"> Lista de Solicitudes  </h3>*/
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
/*                 <th>{{ knp_pagination_sortable(pagination, 'Solicitud'|trans,'u.id') }}</th>*/
/*                 <th>{{ knp_pagination_sortable(pagination, 'Cliente'|trans,'u.cliente') }}</th>*/
/*                 <th>Libro</th>*/
/*                 <th>Acciones</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for solicitud in pagination %}*/
/*         <tr>*/
/*                 <td><a href="{{ path('solicitud_show', { 'id': solicitud.id }) }}">{{ solicitud.id }}</a></td>*/
/*                 <td>{{ solicitud.cliente }}</td>*/
/*                 <td></td>*/
/*                <td>*/
/*                     <a href="{{ path('solicitud_show', { 'id': solicitud.id }) }}" class="btn btn-sm btn-info">Ver</a>*/
/*                     <a href="{{ path('solicitud_edit', { 'id': solicitud.id }) }}" class="btn btn-sm btn-success">Editar</a>*/
/*                 </td>*/
/*             </tr>*/
/*         {% endfor %}*/
/*         </tbody>*/
/*     </table>*/
/* <a href="{{ path('solicitud_new') }}"><input type="button" class="btn btn-primary" value="Crear Solicitud"></a>*/
/* {# navegador de paginas#}*/
/*             <div class="navigation">*/
/*                 {{ knp_pagination_render(pagination) }}*/
/*             </div>*/
/* {% endblock %}*/
