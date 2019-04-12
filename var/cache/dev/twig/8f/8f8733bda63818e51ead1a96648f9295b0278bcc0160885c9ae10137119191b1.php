<?php

/* :usuario:index.html.twig */
class __TwigTemplate_2dde47de5b6714fdf69dc7036fc53753ee412d7c7b3b84d878051f27996cf739 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":usuario:index.html.twig", 1);
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
        $__internal_7884a8872cf8a0b24a55f81a80b4ed23850e375a8ff0cb69bf6932123d271610 = $this->env->getExtension("native_profiler");
        $__internal_7884a8872cf8a0b24a55f81a80b4ed23850e375a8ff0cb69bf6932123d271610->enter($__internal_7884a8872cf8a0b24a55f81a80b4ed23850e375a8ff0cb69bf6932123d271610_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":usuario:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7884a8872cf8a0b24a55f81a80b4ed23850e375a8ff0cb69bf6932123d271610->leave($__internal_7884a8872cf8a0b24a55f81a80b4ed23850e375a8ff0cb69bf6932123d271610_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_804ef44d566f47933724acf3e90bfb955ce1e04f9e6c8449d03e55ca44e6afbd = $this->env->getExtension("native_profiler");
        $__internal_804ef44d566f47933724acf3e90bfb955ce1e04f9e6c8449d03e55ca44e6afbd->enter($__internal_804ef44d566f47933724acf3e90bfb955ce1e04f9e6c8449d03e55ca44e6afbd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Lista de Usuario ";
        
        $__internal_804ef44d566f47933724acf3e90bfb955ce1e04f9e6c8449d03e55ca44e6afbd->leave($__internal_804ef44d566f47933724acf3e90bfb955ce1e04f9e6c8449d03e55ca44e6afbd_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_07fea0c6175d6c8bd9919b5a126ed78d66fbafbd1a51817d62b4e45819e81653 = $this->env->getExtension("native_profiler");
        $__internal_07fea0c6175d6c8bd9919b5a126ed78d66fbafbd1a51817d62b4e45819e81653->enter($__internal_07fea0c6175d6c8bd9919b5a126ed78d66fbafbd1a51817d62b4e45819e81653_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<h3 align=\"center\"> Lista de Usuarios  </h3>
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
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Correo</th>
                <th>Usuario</th>
                <th>Clave</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["usuarios"]) ? $context["usuarios"] : $this->getContext($context, "usuarios")));
        foreach ($context['_seq'] as $context["_key"] => $context["usuario"]) {
            // line 34
            echo "            <tr>
                <td><a href=\"";
            // line 35
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("usuario_show", array("id" => $this->getAttribute($context["usuario"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["usuario"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute($context["usuario"], "nombre", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute($context["usuario"], "apellido", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute($context["usuario"], "correo", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute($context["usuario"], "usuario", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 40
            echo twig_escape_filter($this->env, $this->getAttribute($context["usuario"], "clave", array()), "html", null, true);
            echo "</td>
          <td>
                    <a href=\"";
            // line 42
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("usuario_show", array("id" => $this->getAttribute($context["usuario"], "id", array()))), "html", null, true);
            echo "\">
                       <button type=\"button\" class=\"btn btn-sm btn-warning\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"\" data-original-title=\"Ver\">  <i class=\"fa fa-eye\"></i>  </button>
                    </a>
                    <a href=\"";
            // line 45
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("usuario_edit", array("id" => $this->getAttribute($context["usuario"], "id", array()))), "html", null, true);
            echo "\">
                       <button type=\"button\" class=\"btn btn-sm btn-success\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"\" data-original-title=\"Editar\">  <i class=\"fa fa-pencil\"></i>  </button>
                    </a>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['usuario'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        echo "        </tbody>
    </table>
<a href=\"";
        // line 53
        echo $this->env->getExtension('routing')->getPath("usuario_new");
        echo "\"><input type=\"button\" class=\"btn btn-primary\" value=\"Crear  Usuario\"></a>
";
        
        $__internal_07fea0c6175d6c8bd9919b5a126ed78d66fbafbd1a51817d62b4e45819e81653->leave($__internal_07fea0c6175d6c8bd9919b5a126ed78d66fbafbd1a51817d62b4e45819e81653_prof);

    }

    public function getTemplateName()
    {
        return ":usuario:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  175 => 53,  171 => 51,  159 => 45,  153 => 42,  148 => 40,  144 => 39,  140 => 38,  136 => 37,  132 => 36,  126 => 35,  123 => 34,  119 => 33,  103 => 19,  96 => 17,  87 => 15,  83 => 14,  80 => 13,  76 => 12,  73 => 11,  64 => 8,  61 => 7,  57 => 6,  53 => 4,  47 => 3,  35 => 2,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* {% block title %} Lista de Usuario {% endblock %}*/
/* {% block body %}*/
/* <h3 align="center"> Lista de Usuarios  </h3>*/
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
/*                 <th>Nombre</th>*/
/*                 <th>Apellido</th>*/
/*                 <th>Correo</th>*/
/*                 <th>Usuario</th>*/
/*                 <th>Clave</th>*/
/*                 <th>Acciones</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for usuario in usuarios %}*/
/*             <tr>*/
/*                 <td><a href="{{ path('usuario_show', { 'id': usuario.id }) }}">{{ usuario.id }}</a></td>*/
/*                 <td>{{ usuario.nombre }}</td>*/
/*                 <td>{{ usuario.apellido }}</td>*/
/*                 <td>{{ usuario.correo }}</td>*/
/*                 <td>{{ usuario.usuario }}</td>*/
/*                 <td>{{ usuario.clave }}</td>*/
/*           <td>*/
/*                     <a href="{{ path('usuario_show', { 'id': usuario.id }) }}">*/
/*                        <button type="button" class="btn btn-sm btn-warning" data-toggle="tooltip" data-placement="top" title="" data-original-title="Ver">  <i class="fa fa-eye"></i>  </button>*/
/*                     </a>*/
/*                     <a href="{{ path('usuario_edit', { 'id': usuario.id }) }}">*/
/*                        <button type="button" class="btn btn-sm btn-success" data-toggle="tooltip" data-placement="top" title="" data-original-title="Editar">  <i class="fa fa-pencil"></i>  </button>*/
/*                     </a>*/
/*                 </td>*/
/*             </tr>*/
/*         {% endfor %}*/
/*         </tbody>*/
/*     </table>*/
/* <a href="{{ path('usuario_new') }}"><input type="button" class="btn btn-primary" value="Crear  Usuario"></a>*/
/* {% endblock %}*/
/* */
