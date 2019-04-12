<?php

/* solicitud/index.html.twig */
class __TwigTemplate_8e728bc189abf586d51a39457bc796dd389a9e798a9bc2ac217f99a68e252c20 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "solicitud/index.html.twig", 1);
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
        $__internal_d2c8df9d0a493ad3e331c57d759191adb12ea8b2fb141803c03b2cda32dbe403 = $this->env->getExtension("native_profiler");
        $__internal_d2c8df9d0a493ad3e331c57d759191adb12ea8b2fb141803c03b2cda32dbe403->enter($__internal_d2c8df9d0a493ad3e331c57d759191adb12ea8b2fb141803c03b2cda32dbe403_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "solicitud/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d2c8df9d0a493ad3e331c57d759191adb12ea8b2fb141803c03b2cda32dbe403->leave($__internal_d2c8df9d0a493ad3e331c57d759191adb12ea8b2fb141803c03b2cda32dbe403_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_f8fe16552028d87108125cbbfc5e8e5465a86488fb40f26e76c97c8392f52e57 = $this->env->getExtension("native_profiler");
        $__internal_f8fe16552028d87108125cbbfc5e8e5465a86488fb40f26e76c97c8392f52e57->enter($__internal_f8fe16552028d87108125cbbfc5e8e5465a86488fb40f26e76c97c8392f52e57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Lista de Solicitudes ";
        
        $__internal_f8fe16552028d87108125cbbfc5e8e5465a86488fb40f26e76c97c8392f52e57->leave($__internal_f8fe16552028d87108125cbbfc5e8e5465a86488fb40f26e76c97c8392f52e57_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_39ad15700d60a7303bf8fe5f97795eaa3d1a4540796b0bf61af74aa1a61381f9 = $this->env->getExtension("native_profiler");
        $__internal_39ad15700d60a7303bf8fe5f97795eaa3d1a4540796b0bf61af74aa1a61381f9->enter($__internal_39ad15700d60a7303bf8fe5f97795eaa3d1a4540796b0bf61af74aa1a61381f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<h3 align=\"center\"> Lista de Solicitudes  </h3>
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
                <th>Solicitud</th>
                <th>Cliente</th>
                <th>Libro</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 30
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["solicitudes"]) ? $context["solicitudes"] : $this->getContext($context, "solicitudes")));
        foreach ($context['_seq'] as $context["_key"] => $context["solicitud"]) {
            // line 31
            echo "        <tr>
                <td><a href=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("solicitud_show", array("id" => $this->getAttribute($context["solicitud"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["solicitud"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($context["solicitud"], "cliente", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($context["solicitud"], "libro", array()), "html", null, true);
            echo "</td>
               <td>
                    <a href=\"";
            // line 36
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("solicitud_show", array("id" => $this->getAttribute($context["solicitud"], "id", array()))), "html", null, true);
            echo "\">
                       <button type=\"button\" class=\"btn btn-sm btn-warning\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"\" data-original-title=\"Ver\">  <i class=\"fa fa-eye\"></i>  </button>
                    </a>
                    <a href=\"";
            // line 39
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("solicitud_edit", array("id" => $this->getAttribute($context["solicitud"], "id", array()))), "html", null, true);
            echo "\">
                       <button type=\"button\" class=\"btn btn-sm btn-success\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"\" data-original-title=\"Editar\">  <i class=\"fa fa-pencil\"></i>  </button>
                    </a>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['solicitud'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        echo "        </tbody>
    </table>
<a href=\"";
        // line 47
        echo $this->env->getExtension('routing')->getPath("solicitud_new");
        echo "\"><input type=\"button\" class=\"btn btn-primary\" value=\"Crear Solicitud\"></a>
";
        
        $__internal_39ad15700d60a7303bf8fe5f97795eaa3d1a4540796b0bf61af74aa1a61381f9->leave($__internal_39ad15700d60a7303bf8fe5f97795eaa3d1a4540796b0bf61af74aa1a61381f9_prof);

    }

    public function getTemplateName()
    {
        return "solicitud/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  160 => 47,  156 => 45,  144 => 39,  138 => 36,  133 => 34,  129 => 33,  123 => 32,  120 => 31,  116 => 30,  103 => 19,  96 => 17,  87 => 15,  83 => 14,  80 => 13,  76 => 12,  73 => 11,  64 => 8,  61 => 7,  57 => 6,  53 => 4,  47 => 3,  35 => 2,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* {% block title %} Lista de Solicitudes {% endblock %}*/
/* {% block body %}*/
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
/* */
/*     <table id="datatable-fixed-header" class="table table-striped table-bordered">*/
/*         <thead>*/
/*             <tr>*/
/*                 <th>Solicitud</th>*/
/*                 <th>Cliente</th>*/
/*                 <th>Libro</th>*/
/*                 <th>Acciones</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for solicitud in solicitudes %}*/
/*         <tr>*/
/*                 <td><a href="{{ path('solicitud_show', { 'id': solicitud.id }) }}">{{ solicitud.id }}</a></td>*/
/*                 <td>{{ solicitud.cliente }}</td>*/
/*                 <td>{{ solicitud.libro }}</td>*/
/*                <td>*/
/*                     <a href="{{ path('solicitud_show', { 'id': solicitud.id }) }}">*/
/*                        <button type="button" class="btn btn-sm btn-warning" data-toggle="tooltip" data-placement="top" title="" data-original-title="Ver">  <i class="fa fa-eye"></i>  </button>*/
/*                     </a>*/
/*                     <a href="{{ path('solicitud_edit', { 'id': solicitud.id }) }}">*/
/*                        <button type="button" class="btn btn-sm btn-success" data-toggle="tooltip" data-placement="top" title="" data-original-title="Editar">  <i class="fa fa-pencil"></i>  </button>*/
/*                     </a>*/
/*                 </td>*/
/*             </tr>*/
/*         {% endfor %}*/
/*         </tbody>*/
/*     </table>*/
/* <a href="{{ path('solicitud_new') }}"><input type="button" class="btn btn-primary" value="Crear Solicitud"></a>*/
/* {% endblock %}*/
