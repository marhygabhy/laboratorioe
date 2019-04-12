<?php

/* cliente/index.html.twig */
class __TwigTemplate_c8eccfe806156aa35be5dbd7152248fc489addbb7df7fe9e8fec12a491a6c06a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "cliente/index.html.twig", 1);
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
        $__internal_1d498da7cc2acc4652f8bd5a0f1f5529f6de294e458370799be43f0cabd0eee6 = $this->env->getExtension("native_profiler");
        $__internal_1d498da7cc2acc4652f8bd5a0f1f5529f6de294e458370799be43f0cabd0eee6->enter($__internal_1d498da7cc2acc4652f8bd5a0f1f5529f6de294e458370799be43f0cabd0eee6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "cliente/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1d498da7cc2acc4652f8bd5a0f1f5529f6de294e458370799be43f0cabd0eee6->leave($__internal_1d498da7cc2acc4652f8bd5a0f1f5529f6de294e458370799be43f0cabd0eee6_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_4fd9434ac059433e21fda97239fe8290bcef2ebf9edfa69c727331e8e7596a32 = $this->env->getExtension("native_profiler");
        $__internal_4fd9434ac059433e21fda97239fe8290bcef2ebf9edfa69c727331e8e7596a32->enter($__internal_4fd9434ac059433e21fda97239fe8290bcef2ebf9edfa69c727331e8e7596a32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Lista de Clientes ";
        
        $__internal_4fd9434ac059433e21fda97239fe8290bcef2ebf9edfa69c727331e8e7596a32->leave($__internal_4fd9434ac059433e21fda97239fe8290bcef2ebf9edfa69c727331e8e7596a32_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_e9bb2e7b86938e3fe51c5b63685c8e3ac8067d0bd0ee60fc3ca61d446bf85d5b = $this->env->getExtension("native_profiler");
        $__internal_e9bb2e7b86938e3fe51c5b63685c8e3ac8067d0bd0ee60fc3ca61d446bf85d5b->enter($__internal_e9bb2e7b86938e3fe51c5b63685c8e3ac8067d0bd0ee60fc3ca61d446bf85d5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<h3 align=\"center\"> Lista de Clientes  </h3>
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
        $context['_seq'] = twig_ensure_traversable((isset($context["clientes"]) ? $context["clientes"] : $this->getContext($context, "clientes")));
        foreach ($context['_seq'] as $context["_key"] => $context["cliente"]) {
            // line 34
            echo "            <tr>
                <td><a href=\"";
            // line 35
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("cliente_show", array("id" => $this->getAttribute($context["cliente"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["cliente"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute($context["cliente"], "nombre", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute($context["cliente"], "apellido", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute($context["cliente"], "correo", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute($context["cliente"], "usuario", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 40
            echo twig_escape_filter($this->env, $this->getAttribute($context["cliente"], "clave", array()), "html", null, true);
            echo "</td>
                <td>
                    <a href=\"";
            // line 42
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("cliente_show", array("id" => $this->getAttribute($context["cliente"], "id", array()))), "html", null, true);
            echo "\">
                       <button type=\"button\" class=\"btn btn-sm btn-warning\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"\" data-original-title=\"Ver\">  <i class=\"fa fa-eye\"></i>  </button>
                    </a>
                    <a href=\"";
            // line 45
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("cliente_edit", array("id" => $this->getAttribute($context["cliente"], "id", array()))), "html", null, true);
            echo "\">
                       <button type=\"button\" class=\"btn btn-sm btn-success\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"\" data-original-title=\"Editar\">  <i class=\"fa fa-pencil\"></i>  </button>
                    </a>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cliente'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        echo "        </tbody>
    </table>
<a href=\"";
        // line 53
        echo $this->env->getExtension('routing')->getPath("cliente_new");
        echo "\"><input type=\"button\" class=\"btn btn-primary\" value=\"Crear Cliente\"></a>
";
        
        $__internal_e9bb2e7b86938e3fe51c5b63685c8e3ac8067d0bd0ee60fc3ca61d446bf85d5b->leave($__internal_e9bb2e7b86938e3fe51c5b63685c8e3ac8067d0bd0ee60fc3ca61d446bf85d5b_prof);

    }

    public function getTemplateName()
    {
        return "cliente/index.html.twig";
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
/* {% block title %} Lista de Clientes {% endblock %}*/
/* {% block body %}*/
/* <h3 align="center"> Lista de Clientes  </h3>*/
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
/*         {% for cliente in clientes %}*/
/*             <tr>*/
/*                 <td><a href="{{ path('cliente_show', { 'id': cliente.id }) }}">{{ cliente.id }}</a></td>*/
/*                 <td>{{ cliente.nombre }}</td>*/
/*                 <td>{{ cliente.apellido }}</td>*/
/*                 <td>{{ cliente.correo }}</td>*/
/*                 <td>{{ cliente.usuario }}</td>*/
/*                 <td>{{ cliente.clave }}</td>*/
/*                 <td>*/
/*                     <a href="{{ path('cliente_show', { 'id': cliente.id }) }}">*/
/*                        <button type="button" class="btn btn-sm btn-warning" data-toggle="tooltip" data-placement="top" title="" data-original-title="Ver">  <i class="fa fa-eye"></i>  </button>*/
/*                     </a>*/
/*                     <a href="{{ path('cliente_edit', { 'id': cliente.id }) }}">*/
/*                        <button type="button" class="btn btn-sm btn-success" data-toggle="tooltip" data-placement="top" title="" data-original-title="Editar">  <i class="fa fa-pencil"></i>  </button>*/
/*                     </a>*/
/*                 </td>*/
/*             </tr>*/
/*         {% endfor %}*/
/*         </tbody>*/
/*     </table>*/
/* <a href="{{ path('cliente_new') }}"><input type="button" class="btn btn-primary" value="Crear Cliente"></a>*/
/* {% endblock %}*/
