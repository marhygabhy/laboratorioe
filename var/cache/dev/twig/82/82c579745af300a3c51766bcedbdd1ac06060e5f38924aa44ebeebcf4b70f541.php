<?php

/* :user:show.html.twig */
class __TwigTemplate_45e4de8ed06dd781a100f006aa79230dee97d8f2561e245862160a2d49957ee1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":user:show.html.twig", 1);
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
        $__internal_e77d0116861d951bf31794ad8a5d9deec3c9169278689837c3fd3974e8c3a697 = $this->env->getExtension("native_profiler");
        $__internal_e77d0116861d951bf31794ad8a5d9deec3c9169278689837c3fd3974e8c3a697->enter($__internal_e77d0116861d951bf31794ad8a5d9deec3c9169278689837c3fd3974e8c3a697_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":user:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e77d0116861d951bf31794ad8a5d9deec3c9169278689837c3fd3974e8c3a697->leave($__internal_e77d0116861d951bf31794ad8a5d9deec3c9169278689837c3fd3974e8c3a697_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_541d51ac0d5be5a548cf67db5868012459531c35fd6268e23594999439961c0d = $this->env->getExtension("native_profiler");
        $__internal_541d51ac0d5be5a548cf67db5868012459531c35fd6268e23594999439961c0d->enter($__internal_541d51ac0d5be5a548cf67db5868012459531c35fd6268e23594999439961c0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
                <h2 class=\"padding-none\">";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "firstName", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "lastName", array()), "html", null, true);
        echo " </h2>
            </div>
            <div class=\"table-responsive\">
                <table class=\"table table-striped table-hover\">
                    <thead>
                        <tr>
                            <th>Usuario</th>
                            <th>";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "html", null, true);
        echo "</th>
                        </tr>
                        <tr>
                            <th>Nombre</th>
                            <th>";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "firstName", array()), "html", null, true);
        echo "</th>
                        </tr>
                        <tr>
                            <th>Apellido</th>
                            <th>";
        // line 28
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "lastName", array()), "html", null, true);
        echo "</th>
                        </tr>
                        <tr>
                            <th>Correo</th>
                            <th>";
        // line 32
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array()), "html", null, true);
        echo "</th>
                        </tr>
                        <tr>
                            <th>Pais</th>
                            <td>";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "pais", array()), "descripcion", array()), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <th>Rol</th>
                            <th>
                                ";
        // line 41
        if (($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "role", array()) == "ROLE_ADMIN")) {
            // line 42
            echo "                                <strong>Administrador</strong>
                                ";
        } elseif (($this->getAttribute(        // line 43
(isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "role", array()) == "ROLE_USER")) {
            // line 44
            echo "                                <strong>Usuario</strong>
                                ";
        }
        // line 46
        echo "                            </th>
                        </tr>
                        <tr>
                            <th>Activo</th>
                            <th>";
        // line 50
        if ($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "isActive", array())) {
            echo "Si";
        } else {
            echo "No";
        }
        echo "</th>
                        </tr>
                        <tr>
                            <th>Fecha de Creado</th>
                            <th>";
        // line 54
        if ($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "createdAt", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "createdAt", array()), "Y-m-d H:i:s"), "html", null, true);
        }
        echo "</th>
                        </tr>
                        <tr>
                            <th>Fecha de Modificado</th>
                            <th>";
        // line 58
        if ($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "updatedAt", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "updatedAt", array()), "Y-m-d H:i:s"), "html", null, true);
        }
        echo "</th>
                        </tr>
                    </thead>
                    <tbody>
                        <table>
                            <tr>
                                <th>             
                                    <a href=\"";
        // line 65
        echo $this->env->getExtension('routing')->getPath("user_index");
        echo "\" class=\"btn btn-sm btn-info\">Volver</a>                       
                                </th> 
                                <th>
                                    <a href=\"";
        // line 68
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_edit", array("id" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-sm btn-primary\">Editar</a>
                                </th> 
                                <th>             
                                    ";
        // line 71
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                                    <input type=\"submit\" value=\"Eliminar\" class=\"btn btn-sm btn-danger btn-delete\">
                                    ";
        // line 73
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
                                </th>   
                            <tr> 
                        </table>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
";
        
        $__internal_541d51ac0d5be5a548cf67db5868012459531c35fd6268e23594999439961c0d->leave($__internal_541d51ac0d5be5a548cf67db5868012459531c35fd6268e23594999439961c0d_prof);

    }

    public function getTemplateName()
    {
        return ":user:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  180 => 73,  175 => 71,  169 => 68,  163 => 65,  151 => 58,  142 => 54,  131 => 50,  125 => 46,  121 => 44,  119 => 43,  116 => 42,  114 => 41,  106 => 36,  99 => 32,  92 => 28,  85 => 24,  78 => 20,  66 => 13,  61 => 10,  52 => 7,  49 => 6,  45 => 5,  40 => 4,  34 => 3,  11 => 1,);
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
/*                 <h2 class="padding-none">{{ user.firstName }} {{ user.lastName }} </h2>*/
/*             </div>*/
/*             <div class="table-responsive">*/
/*                 <table class="table table-striped table-hover">*/
/*                     <thead>*/
/*                         <tr>*/
/*                             <th>Usuario</th>*/
/*                             <th>{{ user.username }}</th>*/
/*                         </tr>*/
/*                         <tr>*/
/*                             <th>Nombre</th>*/
/*                             <th>{{ user.firstName }}</th>*/
/*                         </tr>*/
/*                         <tr>*/
/*                             <th>Apellido</th>*/
/*                             <th>{{ user.lastName }}</th>*/
/*                         </tr>*/
/*                         <tr>*/
/*                             <th>Correo</th>*/
/*                             <th>{{ user.email }}</th>*/
/*                         </tr>*/
/*                         <tr>*/
/*                             <th>Pais</th>*/
/*                             <td>{{ user.pais.descripcion }}</td>*/
/*                         </tr>*/
/*                         <tr>*/
/*                             <th>Rol</th>*/
/*                             <th>*/
/*                                 {% if user.role == 'ROLE_ADMIN' %}*/
/*                                 <strong>Administrador</strong>*/
/*                                 {% elseif user.role == 'ROLE_USER' %}*/
/*                                 <strong>Usuario</strong>*/
/*                                 {% endif %}*/
/*                             </th>*/
/*                         </tr>*/
/*                         <tr>*/
/*                             <th>Activo</th>*/
/*                             <th>{% if user.isActive %}Si{% else %}No{% endif %}</th>*/
/*                         </tr>*/
/*                         <tr>*/
/*                             <th>Fecha de Creado</th>*/
/*                             <th>{% if user.createdAt %}{{ user.createdAt|date('Y-m-d H:i:s') }}{% endif %}</th>*/
/*                         </tr>*/
/*                         <tr>*/
/*                             <th>Fecha de Modificado</th>*/
/*                             <th>{% if user.updatedAt %}{{ user.updatedAt|date('Y-m-d H:i:s') }}{% endif %}</th>*/
/*                         </tr>*/
/*                     </thead>*/
/*                     <tbody>*/
/*                         <table>*/
/*                             <tr>*/
/*                                 <th>             */
/*                                     <a href="{{ path('user_index') }}" class="btn btn-sm btn-info">Volver</a>                       */
/*                                 </th> */
/*                                 <th>*/
/*                                     <a href="{{ path('user_edit', { 'id': user.id }) }}" class="btn btn-sm btn-primary">Editar</a>*/
/*                                 </th> */
/*                                 <th>             */
/*                                     {{ form_start(delete_form) }}*/
/*                                     <input type="submit" value="Eliminar" class="btn btn-sm btn-danger btn-delete">*/
/*                                     {{ form_end(delete_form) }}*/
/*                                 </th>   */
/*                             <tr> */
/*                         </table>*/
/*                     </tbody>*/
/*                 </table>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
