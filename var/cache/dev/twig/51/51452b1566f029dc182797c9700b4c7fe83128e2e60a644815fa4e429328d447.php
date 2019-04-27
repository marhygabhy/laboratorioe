<?php

/* :pais:index.html.twig */
class __TwigTemplate_0582f5ddb90ebd78d6bcb828b0a84cf16bdc980ffecdec3a0f38f576781a34d3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":pais:index.html.twig", 1);
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
        $__internal_5e5357262776a9f523284f26a2a17e2f07a541eee1eab7dcaa13d3ebbb0bc491 = $this->env->getExtension("native_profiler");
        $__internal_5e5357262776a9f523284f26a2a17e2f07a541eee1eab7dcaa13d3ebbb0bc491->enter($__internal_5e5357262776a9f523284f26a2a17e2f07a541eee1eab7dcaa13d3ebbb0bc491_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":pais:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5e5357262776a9f523284f26a2a17e2f07a541eee1eab7dcaa13d3ebbb0bc491->leave($__internal_5e5357262776a9f523284f26a2a17e2f07a541eee1eab7dcaa13d3ebbb0bc491_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_270aa13b89c3af74a7a6dae2e6c22a47ee90e299aefa09a92677eda767d91154 = $this->env->getExtension("native_profiler");
        $__internal_270aa13b89c3af74a7a6dae2e6c22a47ee90e299aefa09a92677eda767d91154->enter($__internal_270aa13b89c3af74a7a6dae2e6c22a47ee90e299aefa09a92677eda767d91154_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Lista de Paises ";
        
        $__internal_270aa13b89c3af74a7a6dae2e6c22a47ee90e299aefa09a92677eda767d91154->leave($__internal_270aa13b89c3af74a7a6dae2e6c22a47ee90e299aefa09a92677eda767d91154_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_aeda1f56261024e780501a2872c691ce66a20c59543f7789305cb0026cb77d09 = $this->env->getExtension("native_profiler");
        $__internal_aeda1f56261024e780501a2872c691ce66a20c59543f7789305cb0026cb77d09->enter($__internal_aeda1f56261024e780501a2872c691ce66a20c59543f7789305cb0026cb77d09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        echo "<h3 align=\"center\"> Lista de Paises  </h3>
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
        echo $this->env->getExtension('knp_pagination')->sortable($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), $this->env->getExtension('translator')->trans("Descripcion"), "u.descripcion");
        echo "</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 34
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
        foreach ($context['_seq'] as $context["_key"] => $context["pais"]) {
            // line 35
            echo "            <tr>
                <td><a href=\"";
            // line 36
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("pais_show", array("id" => $this->getAttribute($context["pais"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["pais"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute($context["pais"], "descripcion", array()), "html", null, true);
            echo "</td>
                <td>
                    <a href=\"";
            // line 39
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("pais_show", array("id" => $this->getAttribute($context["pais"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-sm btn-info\">Ver</a>
                    <a href=\"";
            // line 40
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("pais_edit", array("id" => $this->getAttribute($context["pais"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-sm btn-success\">Editar</a>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pais'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        echo "        </tbody>
    </table>
<a href=\"";
        // line 46
        echo $this->env->getExtension('routing')->getPath("pais_new");
        echo "\"><input type=\"button\" class=\"btn btn-primary\" value=\"Crear  Pais\"></a>
";
        // line 48
        echo "            <div class=\"navigation\">
                ";
        // line 49
        echo $this->env->getExtension('knp_pagination')->render($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
        echo "
            </div>
";
        
        $__internal_aeda1f56261024e780501a2872c691ce66a20c59543f7789305cb0026cb77d09->leave($__internal_aeda1f56261024e780501a2872c691ce66a20c59543f7789305cb0026cb77d09_prof);

    }

    public function getTemplateName()
    {
        return ":pais:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  182 => 49,  179 => 48,  175 => 46,  171 => 44,  161 => 40,  157 => 39,  152 => 37,  146 => 36,  143 => 35,  139 => 34,  131 => 29,  127 => 28,  119 => 24,  112 => 22,  103 => 20,  99 => 19,  96 => 18,  92 => 17,  89 => 16,  80 => 13,  77 => 12,  73 => 11,  69 => 9,  60 => 6,  57 => 5,  53 => 4,  47 => 3,  35 => 2,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* {% block title %} Lista de Paises {% endblock %}*/
/* {% block body %}*/
/* {% for flashMessage in app.session.flashbag.get('mensaje') %}*/
/*         <div class="alert alert-success" role="alert">*/
/*             <div class="container"> {{ flashMessage }} </div>*/
/*         </div>*/
/*     {% endfor %}*/
/* <h3 align="center"> Lista de Paises  </h3>*/
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
/*                 <th>{{ knp_pagination_sortable(pagination, 'Descripcion'|trans,'u.descripcion') }}</th>*/
/*                 <th>Acciones</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for pais in pagination %}*/
/*             <tr>*/
/*                 <td><a href="{{ path('pais_show', { 'id': pais.id }) }}">{{ pais.id }}</a></td>*/
/*                 <td>{{ pais.descripcion }}</td>*/
/*                 <td>*/
/*                     <a href="{{ path('pais_show', { 'id': pais.id }) }}" class="btn btn-sm btn-info">Ver</a>*/
/*                     <a href="{{ path('pais_edit', { 'id': pais.id }) }}" class="btn btn-sm btn-success">Editar</a>*/
/*                 </td>*/
/*             </tr>*/
/*         {% endfor %}*/
/*         </tbody>*/
/*     </table>*/
/* <a href="{{ path('pais_new') }}"><input type="button" class="btn btn-primary" value="Crear  Pais"></a>*/
/* {# navegador de paginas#}*/
/*             <div class="navigation">*/
/*                 {{ knp_pagination_render(pagination) }}*/
/*             </div>*/
/* {% endblock %}*/
/* */
