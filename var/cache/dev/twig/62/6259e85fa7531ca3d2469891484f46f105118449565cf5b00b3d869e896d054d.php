<?php

/* :categoria:index.html.twig */
class __TwigTemplate_31bdcc1e956eac9629422c2f757d8dec43ca3041048b8de1440793d59a899f74 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":categoria:index.html.twig", 1);
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
        $__internal_cc2204c4181383a6ae07eff242bc9c88ed428358b92917abfaf1d1fdf6a335cf = $this->env->getExtension("native_profiler");
        $__internal_cc2204c4181383a6ae07eff242bc9c88ed428358b92917abfaf1d1fdf6a335cf->enter($__internal_cc2204c4181383a6ae07eff242bc9c88ed428358b92917abfaf1d1fdf6a335cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":categoria:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cc2204c4181383a6ae07eff242bc9c88ed428358b92917abfaf1d1fdf6a335cf->leave($__internal_cc2204c4181383a6ae07eff242bc9c88ed428358b92917abfaf1d1fdf6a335cf_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_382a9cd758abd868036968fda91a0776f7cb8ff0e62fd22832ec5db76825fd55 = $this->env->getExtension("native_profiler");
        $__internal_382a9cd758abd868036968fda91a0776f7cb8ff0e62fd22832ec5db76825fd55->enter($__internal_382a9cd758abd868036968fda91a0776f7cb8ff0e62fd22832ec5db76825fd55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Lista de Usuarios ";
        
        $__internal_382a9cd758abd868036968fda91a0776f7cb8ff0e62fd22832ec5db76825fd55->leave($__internal_382a9cd758abd868036968fda91a0776f7cb8ff0e62fd22832ec5db76825fd55_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_d1478bba28829e75b9a4553ba1cbfd6fb64f8a526b27897aca6b4e47ebe35a15 = $this->env->getExtension("native_profiler");
        $__internal_d1478bba28829e75b9a4553ba1cbfd6fb64f8a526b27897aca6b4e47ebe35a15->enter($__internal_d1478bba28829e75b9a4553ba1cbfd6fb64f8a526b27897aca6b4e47ebe35a15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        echo "<h3 align=\"center\"> Lista de Categorias  </h3>
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
        foreach ($context['_seq'] as $context["_key"] => $context["categoria"]) {
            // line 35
            echo "                <tr>  
                    <td><a href=\"";
            // line 36
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("categoria_show", array("id" => $this->getAttribute($context["categoria"], "id", array()))), "html", null, true);
            echo "\">
                            ";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute($context["categoria"], "id", array()), "html", null, true);
            echo "</a></td>
                    <td>";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute($context["categoria"], "descripcion", array()), "html", null, true);
            echo "</td>
                    <td>
                        <a href=\"";
            // line 40
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("categoria_show", array("id" => $this->getAttribute($context["categoria"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-sm btn-info\">Ver</a>
                        <a href=\"";
            // line 41
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("categoria_edit", array("id" => $this->getAttribute($context["categoria"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-sm btn-success\">Editar</a>
                    </td>                                    
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['categoria'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        echo "        </tbody>
    </table>
<a href=\"";
        // line 47
        echo $this->env->getExtension('routing')->getPath("categoria_new");
        echo "\"><input type=\"button\" class=\"btn btn-primary\" value=\"Crear  Categoria\"></a>
";
        // line 49
        echo "            <div class=\"navigation\">
                ";
        // line 50
        echo $this->env->getExtension('knp_pagination')->render($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
        echo "
            </div>
";
        
        $__internal_d1478bba28829e75b9a4553ba1cbfd6fb64f8a526b27897aca6b4e47ebe35a15->leave($__internal_d1478bba28829e75b9a4553ba1cbfd6fb64f8a526b27897aca6b4e47ebe35a15_prof);

    }

    public function getTemplateName()
    {
        return ":categoria:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  184 => 50,  181 => 49,  177 => 47,  173 => 45,  163 => 41,  159 => 40,  154 => 38,  150 => 37,  146 => 36,  143 => 35,  139 => 34,  131 => 29,  127 => 28,  119 => 24,  112 => 22,  103 => 20,  99 => 19,  96 => 18,  92 => 17,  89 => 16,  80 => 13,  77 => 12,  73 => 11,  69 => 9,  60 => 6,  57 => 5,  53 => 4,  47 => 3,  35 => 2,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* {% block title %} Lista de Usuarios {% endblock %}*/
/* {% block body %}*/
/* {% for flashMessage in app.session.flashbag.get('mensaje') %}*/
/*         <div class="alert alert-success" role="alert">*/
/*             <div class="container"> {{ flashMessage }} </div>*/
/*         </div>*/
/*     {% endfor %}*/
/* <h3 align="center"> Lista de Categorias  </h3>*/
/* <hr />*/
/* {% for msg in app.session.flashBag.get('success') %}*/
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
/*             {% for categoria in pagination %}*/
/*                 <tr>  */
/*                     <td><a href="{{ path('categoria_show', { 'id': categoria.id }) }}">*/
/*                             {{ categoria.id }}</a></td>*/
/*                     <td>{{ categoria.descripcion }}</td>*/
/*                     <td>*/
/*                         <a href="{{ path('categoria_show', { 'id': categoria.id }) }}" class="btn btn-sm btn-info">Ver</a>*/
/*                         <a href="{{ path('categoria_edit', { 'id': categoria.id }) }}" class="btn btn-sm btn-success">Editar</a>*/
/*                     </td>                                    */
/*                 </tr>*/
/*             {% endfor %}*/
/*         </tbody>*/
/*     </table>*/
/* <a href="{{ path('categoria_new') }}"><input type="button" class="btn btn-primary" value="Crear  Categoria"></a>*/
/* {# navegador de paginas#}*/
/*             <div class="navigation">*/
/*                 {{ knp_pagination_render(pagination) }}*/
/*             </div>*/
/* {% endblock %}*/
/* */
