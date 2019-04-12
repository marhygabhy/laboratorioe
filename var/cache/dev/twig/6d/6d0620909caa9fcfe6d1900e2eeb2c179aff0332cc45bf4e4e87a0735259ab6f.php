<?php

/* :categoria:index.html.twig */
class __TwigTemplate_f1d10a6fcc068e471e7e6b1bbbd278f2681104b9ea7ce15069cb4e1efb4b7ea9 extends Twig_Template
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
        $__internal_1d4d1ab46feac549b4ab66e3769c4d5d69c00370decff5c294b0e5ec86c0c8c5 = $this->env->getExtension("native_profiler");
        $__internal_1d4d1ab46feac549b4ab66e3769c4d5d69c00370decff5c294b0e5ec86c0c8c5->enter($__internal_1d4d1ab46feac549b4ab66e3769c4d5d69c00370decff5c294b0e5ec86c0c8c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":categoria:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1d4d1ab46feac549b4ab66e3769c4d5d69c00370decff5c294b0e5ec86c0c8c5->leave($__internal_1d4d1ab46feac549b4ab66e3769c4d5d69c00370decff5c294b0e5ec86c0c8c5_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_1c72864bb65877055ee0ca233858bb8caeae20427be8b6091211a2941c2bd82b = $this->env->getExtension("native_profiler");
        $__internal_1c72864bb65877055ee0ca233858bb8caeae20427be8b6091211a2941c2bd82b->enter($__internal_1c72864bb65877055ee0ca233858bb8caeae20427be8b6091211a2941c2bd82b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Lista de Usuarios ";
        
        $__internal_1c72864bb65877055ee0ca233858bb8caeae20427be8b6091211a2941c2bd82b->leave($__internal_1c72864bb65877055ee0ca233858bb8caeae20427be8b6091211a2941c2bd82b_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_6226ee5472f853cf94edeae818c9b323e41c99f36b839cab83419f1be72e7a88 = $this->env->getExtension("native_profiler");
        $__internal_6226ee5472f853cf94edeae818c9b323e41c99f36b839cab83419f1be72e7a88->enter($__internal_6226ee5472f853cf94edeae818c9b323e41c99f36b839cab83419f1be72e7a88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<h3 align=\"center\"> Lista de Categorias  </h3>
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
        echo "    <table id=\"datatable-fixed-header\" class=\"table table-striped table-bordered\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Descripcion</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            ";
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categorias"]) ? $context["categorias"] : $this->getContext($context, "categorias")));
        foreach ($context['_seq'] as $context["_key"] => $context["categoria"]) {
            // line 29
            echo "                <tr>  
                    <td><a href=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("categoria_show", array("id" => $this->getAttribute($context["categoria"], "id", array()))), "html", null, true);
            echo "\">
                            ";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($context["categoria"], "id", array()), "html", null, true);
            echo "</a></td>
                    <td>";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($context["categoria"], "descripcion", array()), "html", null, true);
            echo "</td>
                    <td>
                        <a href=\"";
            // line 34
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("categoria_show", array("id" => $this->getAttribute($context["categoria"], "id", array()))), "html", null, true);
            echo "\">
                            <button type=\"button\" class=\"btn btn-sm btn-warning\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Ver\" data-original-title=\"Ver\">  <i class=\"fa fa-eye\"></i>  </button>
                        </a>
                        <a href=\"";
            // line 37
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("categoria_edit", array("id" => $this->getAttribute($context["categoria"], "id", array()))), "html", null, true);
            echo "\">
                            <button type=\"button\" class=\"btn btn-sm btn-success\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Editar\" data-original-title=\"Editar\">  <i class=\"fa fa-pencil\"></i>  </button>
                        </a>
                    </td>                                    
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['categoria'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "        </tbody>
    </table>
<a href=\"";
        // line 45
        echo $this->env->getExtension('routing')->getPath("categoria_new");
        echo "\"><input type=\"button\" class=\"btn btn-primary\" value=\"Crear  Categoria\"></a>
";
        
        $__internal_6226ee5472f853cf94edeae818c9b323e41c99f36b839cab83419f1be72e7a88->leave($__internal_6226ee5472f853cf94edeae818c9b323e41c99f36b839cab83419f1be72e7a88_prof);

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
        return array (  156 => 45,  152 => 43,  140 => 37,  134 => 34,  129 => 32,  125 => 31,  121 => 30,  118 => 29,  114 => 28,  103 => 19,  96 => 17,  87 => 15,  83 => 14,  80 => 13,  76 => 12,  73 => 11,  64 => 8,  61 => 7,  57 => 6,  53 => 4,  47 => 3,  35 => 2,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* {% block title %} Lista de Usuarios {% endblock %}*/
/* {% block body %}*/
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
/*     <table id="datatable-fixed-header" class="table table-striped table-bordered">*/
/*         <thead>*/
/*             <tr>*/
/*                 <th>Id</th>*/
/*                 <th>Descripcion</th>*/
/*                 <th>Acciones</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*             {% for categoria in categorias %}*/
/*                 <tr>  */
/*                     <td><a href="{{ path('categoria_show', { 'id': categoria.id }) }}">*/
/*                             {{ categoria.id }}</a></td>*/
/*                     <td>{{ categoria.descripcion }}</td>*/
/*                     <td>*/
/*                         <a href="{{ path('categoria_show', { 'id': categoria.id }) }}">*/
/*                             <button type="button" class="btn btn-sm btn-warning" data-toggle="tooltip" data-placement="top" title="Ver" data-original-title="Ver">  <i class="fa fa-eye"></i>  </button>*/
/*                         </a>*/
/*                         <a href="{{ path('categoria_edit', { 'id': categoria.id }) }}">*/
/*                             <button type="button" class="btn btn-sm btn-success" data-toggle="tooltip" data-placement="top" title="Editar" data-original-title="Editar">  <i class="fa fa-pencil"></i>  </button>*/
/*                         </a>*/
/*                     </td>                                    */
/*                 </tr>*/
/*             {% endfor %}*/
/*         </tbody>*/
/*     </table>*/
/* <a href="{{ path('categoria_new') }}"><input type="button" class="btn btn-primary" value="Crear  Categoria"></a>*/
/* {% endblock %}*/
/* */
