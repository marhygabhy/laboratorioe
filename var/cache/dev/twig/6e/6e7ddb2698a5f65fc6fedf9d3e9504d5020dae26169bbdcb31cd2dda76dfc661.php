<?php

/* :coleccion:index.html.twig */
class __TwigTemplate_4dbd52d3013b0d84f52d9b733749236486b941cbbf8396e7fb22315c1ef9458a extends Twig_Template
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
        $__internal_84552e2480906df4ae594f7f4fbcdc67e0d79c819fe7404e3aa017336d3b2567 = $this->env->getExtension("native_profiler");
        $__internal_84552e2480906df4ae594f7f4fbcdc67e0d79c819fe7404e3aa017336d3b2567->enter($__internal_84552e2480906df4ae594f7f4fbcdc67e0d79c819fe7404e3aa017336d3b2567_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":coleccion:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_84552e2480906df4ae594f7f4fbcdc67e0d79c819fe7404e3aa017336d3b2567->leave($__internal_84552e2480906df4ae594f7f4fbcdc67e0d79c819fe7404e3aa017336d3b2567_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_09bdee0b3ff16c16e6541ea389d7a72e6898ebff7155f33cd3cb037a10242488 = $this->env->getExtension("native_profiler");
        $__internal_09bdee0b3ff16c16e6541ea389d7a72e6898ebff7155f33cd3cb037a10242488->enter($__internal_09bdee0b3ff16c16e6541ea389d7a72e6898ebff7155f33cd3cb037a10242488_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Lista de Colecciones ";
        
        $__internal_09bdee0b3ff16c16e6541ea389d7a72e6898ebff7155f33cd3cb037a10242488->leave($__internal_09bdee0b3ff16c16e6541ea389d7a72e6898ebff7155f33cd3cb037a10242488_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_1fe94101209a96998b570fcf32d50ff9f41a6a1566b21a3f1011a2e360d77979 = $this->env->getExtension("native_profiler");
        $__internal_1fe94101209a96998b570fcf32d50ff9f41a6a1566b21a3f1011a2e360d77979->enter($__internal_1fe94101209a96998b570fcf32d50ff9f41a6a1566b21a3f1011a2e360d77979_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<h3 align=\"center\"> Lista de Colecciones  </h3>
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
            <tr>
                <th>Id</th>
                <th>Categoria</th>
                <th>Colección</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["colecciones"]) ? $context["colecciones"] : $this->getContext($context, "colecciones")));
        foreach ($context['_seq'] as $context["_key"] => $context["coleccion"]) {
            // line 32
            echo "            <tr>
                <td><a href=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("coleccion_show", array("id" => $this->getAttribute($context["coleccion"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["coleccion"], "id", array()), "html", null, true);
            echo "</a></td>
                 <td>";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["coleccion"], "categoria", array()), "descripcion", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($context["coleccion"], "descripcion", array()), "html", null, true);
            echo "</td>
               <td>
                    <a href=\"";
            // line 37
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("coleccion_show", array("id" => $this->getAttribute($context["coleccion"], "id", array()))), "html", null, true);
            echo "\">
                       <button type=\"button\" class=\"btn btn-sm btn-warning\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"\" data-original-title=\"Ver\">  <i class=\"fa fa-eye\"></i>  </button>
                    </a>
                    <a href=\"";
            // line 40
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("coleccion_edit", array("id" => $this->getAttribute($context["coleccion"], "id", array()))), "html", null, true);
            echo "\">
                       <button type=\"button\" class=\"btn btn-sm btn-success\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"\" data-original-title=\"Editar\">  <i class=\"fa fa-pencil\"></i>  </button>
                    </a>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['coleccion'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo "        </tbody>
    </table>
<a href=\"";
        // line 48
        echo $this->env->getExtension('routing')->getPath("coleccion_new");
        echo "\"><input type=\"button\" class=\"btn btn-primary\" value=\"Crear Colección\"></a>
";
        
        $__internal_1fe94101209a96998b570fcf32d50ff9f41a6a1566b21a3f1011a2e360d77979->leave($__internal_1fe94101209a96998b570fcf32d50ff9f41a6a1566b21a3f1011a2e360d77979_prof);

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
        return array (  161 => 48,  157 => 46,  145 => 40,  139 => 37,  134 => 35,  130 => 34,  124 => 33,  121 => 32,  117 => 31,  103 => 19,  96 => 17,  87 => 15,  83 => 14,  80 => 13,  76 => 12,  73 => 11,  64 => 8,  61 => 7,  57 => 6,  53 => 4,  47 => 3,  35 => 2,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* {% block title %} Lista de Colecciones {% endblock %}*/
/* {% block body %}*/
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
/* */
/*     <table id="datatable-fixed-header" class="table table-striped table-bordered">*/
/*         <thead>*/
/*             <tr>*/
/*             <tr>*/
/*                 <th>Id</th>*/
/*                 <th>Categoria</th>*/
/*                 <th>Colección</th>*/
/*                 <th>Acciones</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for coleccion in colecciones %}*/
/*             <tr>*/
/*                 <td><a href="{{ path('coleccion_show', { 'id': coleccion.id }) }}">{{ coleccion.id }}</a></td>*/
/*                  <td>{{ coleccion.categoria.descripcion }}</td>*/
/*                 <td>{{ coleccion.descripcion }}</td>*/
/*                <td>*/
/*                     <a href="{{ path('coleccion_show', { 'id': coleccion.id }) }}">*/
/*                        <button type="button" class="btn btn-sm btn-warning" data-toggle="tooltip" data-placement="top" title="" data-original-title="Ver">  <i class="fa fa-eye"></i>  </button>*/
/*                     </a>*/
/*                     <a href="{{ path('coleccion_edit', { 'id': coleccion.id }) }}">*/
/*                        <button type="button" class="btn btn-sm btn-success" data-toggle="tooltip" data-placement="top" title="" data-original-title="Editar">  <i class="fa fa-pencil"></i>  </button>*/
/*                     </a>*/
/*                 </td>*/
/*             </tr>*/
/*         {% endfor %}*/
/*         </tbody>*/
/*     </table>*/
/* <a href="{{ path('coleccion_new') }}"><input type="button" class="btn btn-primary" value="Crear Colección"></a>*/
/* {% endblock %}*/
/* */
