<?php

/* :user:index.html.twig */
class __TwigTemplate_3caf014266e6b5b4d36c323c740c89d88c61bf571ef3ec162c82b811e407ba31 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":user:index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8b3e284e8d6028a1361bba9c34327cf3c0ccedaaff619c2f82b1ba325e049735 = $this->env->getExtension("native_profiler");
        $__internal_8b3e284e8d6028a1361bba9c34327cf3c0ccedaaff619c2f82b1ba325e049735->enter($__internal_8b3e284e8d6028a1361bba9c34327cf3c0ccedaaff619c2f82b1ba325e049735_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":user:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8b3e284e8d6028a1361bba9c34327cf3c0ccedaaff619c2f82b1ba325e049735->leave($__internal_8b3e284e8d6028a1361bba9c34327cf3c0ccedaaff619c2f82b1ba325e049735_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_3387b26c68cd955239689b999e12fbad1d80a74f6bafdb3b1854248cae4f2038 = $this->env->getExtension("native_profiler");
        $__internal_3387b26c68cd955239689b999e12fbad1d80a74f6bafdb3b1854248cae4f2038->enter($__internal_3387b26c68cd955239689b999e12fbad1d80a74f6bafdb3b1854248cae4f2038_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    ";
        $this->displayParentBlock("body", $context, $blocks);
        echo "
    ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "mensaje"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 6
            echo "        <div class=\"alert alert-success\" role=\"alert\">
            <div class=\"container\"> ";
            // line 7
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo " </div>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 10
        echo "    <div class=\"container\">
        <div class=\"col-md-12\">
            <div class=\"page-header margin-none\">
                <h2 align=\"center\"> Usuarios  </h2>
            </div>
            <div class=\"table-responsive\">
                Total registros: ";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "getTotalItemCount", array()), "html", null, true);
        echo "
                <table id=\"datatable-fixed-header\" class=\"table table-striped table-hover\">
                    <thead>
                        <tr>
                            <th>";
        // line 20
        echo $this->env->getExtension('knp_pagination')->sortable($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), $this->env->getExtension('translator')->trans("Usuario"), "u.username");
        echo "</th>
                            <th>";
        // line 21
        echo $this->env->getExtension('knp_pagination')->sortable($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), $this->env->getExtension('translator')->trans("Nombre"), "u.firstName");
        echo "</th>
                            <th>";
        // line 22
        echo $this->env->getExtension('knp_pagination')->sortable($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), $this->env->getExtension('translator')->trans("Apellido"), "u.lastName");
        echo "</th>
                            <th>";
        // line 23
        echo $this->env->getExtension('knp_pagination')->sortable($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), $this->env->getExtension('translator')->trans("Correo"), "u.email");
        echo "</th>
                            <th>";
        // line 24
        echo $this->env->getExtension('knp_pagination')->sortable($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), $this->env->getExtension('translator')->trans("Rol"), "u.role");
        echo "</th>
                            <th>";
        // line 25
        echo $this->env->getExtension('knp_pagination')->sortable($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), $this->env->getExtension('translator')->trans("Pais"), "u.pais");
        echo "</th>
                            <th>";
        // line 26
        echo $this->env->getExtension('knp_pagination')->sortable($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), $this->env->getExtension('translator')->trans("Fecha de Creado"), "u.createdAt");
        echo "</th>
                            <th>";
        // line 27
        echo $this->env->getExtension('knp_pagination')->sortable($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), $this->env->getExtension('translator')->trans("Fecha de Modificado"), "u.updatedAt");
        echo "</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                    ";
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 33
            echo "                        <tr>
                            <td><a href=\"";
            // line 34
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_show", array("id" => $this->getAttribute($context["user"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "username", array()), "html", null, true);
            echo "</a></td>
                            <td>";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "firstName", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "lastName", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "email", array()), "html", null, true);
            echo "</td>
                            <td>
                                ";
            // line 39
            if (($this->getAttribute($context["user"], "role", array()) == "ROLE_ADMIN")) {
                // line 40
                echo "                                <strong>Administrador</strong>
                                ";
            } elseif (($this->getAttribute(            // line 41
$context["user"], "role", array()) == "ROLE_USER")) {
                // line 42
                echo "                                <strong>Usuario</strong>
                                ";
            }
            // line 44
            echo "                            </td>
                            <td>";
            // line 45
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "pais", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 46
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["user"], "createdAt", array()), "d-m-Y"), "html", null, true);
            echo "</td>
                            <td>";
            // line 47
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["user"], "updatedAt", array()), "d-m-Y"), "html", null, true);
            echo "</td>
                            <td class=\"actions\">
                                <a href=\"";
            // line 49
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_show", array("id" => $this->getAttribute($context["user"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-sm btn-info\">Ver</a>
                                <!--<a href=\"";
            // line 50
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_edit", array("id" => $this->getAttribute($context["user"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-sm btn-primary\">Editar</a>
                                <a href=\"\" class=\"btn btn-sm btn-danger btn-delete\">Eliminar</a>-->
                            </td>
                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 55
        echo "                    </tbody>
                </table>
                <a class=\"btn btn-sm btn-success\" href=\"";
        // line 57
        echo $this->env->getExtension('routing')->getPath("user_new");
        echo "\">Crear Usuario</a>
            </div>
            ";
        // line 60
        echo "            <div class=\"navigation\">
                ";
        // line 61
        echo $this->env->getExtension('knp_pagination')->render($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
        echo "
            </div>
        </div>
    </div>
";
        
        $__internal_3387b26c68cd955239689b999e12fbad1d80a74f6bafdb3b1854248cae4f2038->leave($__internal_3387b26c68cd955239689b999e12fbad1d80a74f6bafdb3b1854248cae4f2038_prof);

    }

    public function getTemplateName()
    {
        return ":user:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  192 => 61,  189 => 60,  184 => 57,  180 => 55,  169 => 50,  165 => 49,  160 => 47,  156 => 46,  152 => 45,  149 => 44,  145 => 42,  143 => 41,  140 => 40,  138 => 39,  133 => 37,  129 => 36,  125 => 35,  119 => 34,  116 => 33,  112 => 32,  104 => 27,  100 => 26,  96 => 25,  92 => 24,  88 => 23,  84 => 22,  80 => 21,  76 => 20,  69 => 16,  61 => 10,  52 => 7,  49 => 6,  45 => 5,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     {{ parent() }}*/
/*     {% for flashMessage in app.session.flashbag.get('mensaje') %}*/
/*         <div class="alert alert-success" role="alert">*/
/*             <div class="container"> {{ flashMessage }} </div>*/
/*         </div>*/
/*     {% endfor %}*/
/*     <div class="container">*/
/*         <div class="col-md-12">*/
/*             <div class="page-header margin-none">*/
/*                 <h2 align="center"> Usuarios  </h2>*/
/*             </div>*/
/*             <div class="table-responsive">*/
/*                 Total registros: {{ pagination.getTotalItemCount }}*/
/*                 <table id="datatable-fixed-header" class="table table-striped table-hover">*/
/*                     <thead>*/
/*                         <tr>*/
/*                             <th>{{ knp_pagination_sortable(pagination, 'Usuario'|trans,'u.username') }}</th>*/
/*                             <th>{{ knp_pagination_sortable(pagination, 'Nombre'|trans,'u.firstName') }}</th>*/
/*                             <th>{{ knp_pagination_sortable(pagination, 'Apellido'|trans,'u.lastName') }}</th>*/
/*                             <th>{{ knp_pagination_sortable(pagination, 'Correo'|trans,'u.email') }}</th>*/
/*                             <th>{{ knp_pagination_sortable(pagination, 'Rol'|trans,'u.role') }}</th>*/
/*                             <th>{{ knp_pagination_sortable(pagination, 'Pais'|trans,'u.pais') }}</th>*/
/*                             <th>{{ knp_pagination_sortable(pagination, 'Fecha de Creado'|trans,'u.createdAt') }}</th>*/
/*                             <th>{{ knp_pagination_sortable(pagination, 'Fecha de Modificado'|trans,'u.updatedAt') }}</th>*/
/*                             <th>Acciones</th>*/
/*                         </tr>*/
/*                     </thead>*/
/*                     <tbody>*/
/*                     {% for user in pagination %}*/
/*                         <tr>*/
/*                             <td><a href="{{ path('user_show', { 'id': user.id }) }}">{{ user.username }}</a></td>*/
/*                             <td>{{ user.firstName }}</td>*/
/*                             <td>{{ user.lastName }}</td>*/
/*                             <td>{{ user.email }}</td>*/
/*                             <td>*/
/*                                 {% if user.role == 'ROLE_ADMIN' %}*/
/*                                 <strong>Administrador</strong>*/
/*                                 {% elseif user.role == 'ROLE_USER' %}*/
/*                                 <strong>Usuario</strong>*/
/*                                 {% endif %}*/
/*                             </td>*/
/*                             <td>{{ user.pais}}</td>*/
/*                             <td>{{ user.createdAt | date('d-m-Y')}}</td>*/
/*                             <td>{{ user.updatedAt | date('d-m-Y')}}</td>*/
/*                             <td class="actions">*/
/*                                 <a href="{{ path('user_show', { 'id': user.id }) }}" class="btn btn-sm btn-info">Ver</a>*/
/*                                 <!--<a href="{{ path('user_edit', { 'id': user.id }) }}" class="btn btn-sm btn-primary">Editar</a>*/
/*                                 <a href="" class="btn btn-sm btn-danger btn-delete">Eliminar</a>-->*/
/*                             </td>*/
/*                         </tr>*/
/*                     {% endfor %}*/
/*                     </tbody>*/
/*                 </table>*/
/*                 <a class="btn btn-sm btn-success" href="{{ path('user_new') }}">Crear Usuario</a>*/
/*             </div>*/
/*             {# navegador de paginas#}*/
/*             <div class="navigation">*/
/*                 {{ knp_pagination_render(pagination) }}*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
