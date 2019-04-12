<?php

/* :usuario:show.html.twig */
class __TwigTemplate_82874ef70aede7dbd1849b2ea9746dadf5ddd45797f7765e46928161106abd93 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":usuario:show.html.twig", 1);
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
        $__internal_f25578a878cb7a6ab6023bd8629c5dfdb1ac0a7643b3ce1a3716920e6fa3ed94 = $this->env->getExtension("native_profiler");
        $__internal_f25578a878cb7a6ab6023bd8629c5dfdb1ac0a7643b3ce1a3716920e6fa3ed94->enter($__internal_f25578a878cb7a6ab6023bd8629c5dfdb1ac0a7643b3ce1a3716920e6fa3ed94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":usuario:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f25578a878cb7a6ab6023bd8629c5dfdb1ac0a7643b3ce1a3716920e6fa3ed94->leave($__internal_f25578a878cb7a6ab6023bd8629c5dfdb1ac0a7643b3ce1a3716920e6fa3ed94_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_7b0edac353e85a2fab51d2b6f457a2a645820a1d8115e20cc1c8fb80912e50fe = $this->env->getExtension("native_profiler");
        $__internal_7b0edac353e85a2fab51d2b6f457a2a645820a1d8115e20cc1c8fb80912e50fe->enter($__internal_7b0edac353e85a2fab51d2b6f457a2a645820a1d8115e20cc1c8fb80912e50fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Ver Usuario ";
        
        $__internal_7b0edac353e85a2fab51d2b6f457a2a645820a1d8115e20cc1c8fb80912e50fe->leave($__internal_7b0edac353e85a2fab51d2b6f457a2a645820a1d8115e20cc1c8fb80912e50fe_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_8f065733d43db33be0dfaaf754b2173e8f9fc6c39ec838a8434ac7e4989e2b96 = $this->env->getExtension("native_profiler");
        $__internal_8f065733d43db33be0dfaaf754b2173e8f9fc6c39ec838a8434ac7e4989e2b96->enter($__internal_8f065733d43db33be0dfaaf754b2173e8f9fc6c39ec838a8434ac7e4989e2b96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<h3 align=\"center\"> Ver Usuario  </h3>
<hr />
    ";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashBag", array()), "get", array(0 => "success"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["msg"]) {
            // line 7
            echo "        <div class=\"alert alert-success\"> ";
            echo twig_escape_filter($this->env, $context["msg"], "html", null, true);
            echo " </div>       
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['msg'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 9
        echo "
    ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashBag", array()), "get", array(0 => "error"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["msgs"]) {
            // line 11
            echo "        <div class=\"alert alert-danger\">
            ";
            // line 12
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["msgs"]);
            foreach ($context['_seq'] as $context["_key"] => $context["msg"]) {
                // line 13
                echo "                <p>";
                echo twig_escape_filter($this->env, $context["msg"], "html", null, true);
                echo "</p>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['msg'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 15
            echo "        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['msgs'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "
    <!-- page content -->
    <div class=\"x_content\">                   
        <table class=\"table table-striped\">
            <tbody>
                <tr>
                <th>Id</th>
                <td>";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : $this->getContext($context, "usuario")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Nombre</th>
                <td>";
        // line 28
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : $this->getContext($context, "usuario")), "nombre", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Apellido</th>
                <td>";
        // line 32
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : $this->getContext($context, "usuario")), "apellido", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Correo</th>
                <td>";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : $this->getContext($context, "usuario")), "correo", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Usuario</th>
                <td>";
        // line 40
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : $this->getContext($context, "usuario")), "usuario", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Clave</th>
                <td>";
        // line 44
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : $this->getContext($context, "usuario")), "clave", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>
</div>                    
<table>
<tr>
<th>             
    <a class=\"btn btn-success\" href=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("usuario_edit", array("id" => $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : $this->getContext($context, "usuario")), "id", array()))), "html", null, true);
        echo "\"><i class=\"fa fa-edit m-right-xs\"></i>Editar</a>                       
</th> 
<th>
    ";
        // line 55
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
    <button type=\"submit\" class=\"btn btn-danger\"><i class=\"fa fa-trash\"></i> Eliminar </button>
    ";
        // line 57
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
</th> 
<th>             
    <a href=\"";
        // line 60
        echo $this->env->getExtension('routing')->getPath("usuario_index");
        echo "\"><input type=\"button\" class=\"btn btn-primary\" value=\"Volver\"></a>
</th>   
<tr> 
</table> 
";
        
        $__internal_8f065733d43db33be0dfaaf754b2173e8f9fc6c39ec838a8434ac7e4989e2b96->leave($__internal_8f065733d43db33be0dfaaf754b2173e8f9fc6c39ec838a8434ac7e4989e2b96_prof);

    }

    public function getTemplateName()
    {
        return ":usuario:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  172 => 60,  166 => 57,  161 => 55,  155 => 52,  144 => 44,  137 => 40,  130 => 36,  123 => 32,  116 => 28,  109 => 24,  100 => 17,  93 => 15,  84 => 13,  80 => 12,  77 => 11,  73 => 10,  70 => 9,  61 => 7,  57 => 6,  53 => 4,  47 => 3,  35 => 2,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* {% block title %} Ver Usuario {% endblock %} */
/* {% block body %}*/
/* <h3 align="center"> Ver Usuario  </h3>*/
/* <hr />*/
/*     {% for msg in app.session.flashBag.get('success') %}*/
/*         <div class="alert alert-success"> {{ msg }} </div>       */
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
/*     <!-- page content -->*/
/*     <div class="x_content">                   */
/*         <table class="table table-striped">*/
/*             <tbody>*/
/*                 <tr>*/
/*                 <th>Id</th>*/
/*                 <td>{{ usuario.id }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Nombre</th>*/
/*                 <td>{{ usuario.nombre }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Apellido</th>*/
/*                 <td>{{ usuario.apellido }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Correo</th>*/
/*                 <td>{{ usuario.correo }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Usuario</th>*/
/*                 <td>{{ usuario.usuario }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Clave</th>*/
/*                 <td>{{ usuario.clave }}</td>*/
/*             </tr>*/
/*         </tbody>*/
/*     </table>*/
/* </div>                    */
/* <table>*/
/* <tr>*/
/* <th>             */
/*     <a class="btn btn-success" href="{{ path('usuario_edit', { 'id': usuario.id }) }}"><i class="fa fa-edit m-right-xs"></i>Editar</a>                       */
/* </th> */
/* <th>*/
/*     {{ form_start(delete_form) }}*/
/*     <button type="submit" class="btn btn-danger"><i class="fa fa-trash"></i> Eliminar </button>*/
/*     {{ form_end(delete_form) }}*/
/* </th> */
/* <th>             */
/*     <a href="{{ path('usuario_index') }}"><input type="button" class="btn btn-primary" value="Volver"></a>*/
/* </th>   */
/* <tr> */
/* </table> */
/* {% endblock %}*/
