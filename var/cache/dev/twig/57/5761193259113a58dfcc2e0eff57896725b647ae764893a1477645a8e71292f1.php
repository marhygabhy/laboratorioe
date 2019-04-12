<?php

/* :cliente:show.html.twig */
class __TwigTemplate_45b863650c6a190b9e7973d18c244acb742ab4f2777ee3acdbb249e1751486dc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":cliente:show.html.twig", 1);
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
        $__internal_f40013b2f8d76ba9a4dc20fcc18870a8228052e641017d9cc154a677c2a148f0 = $this->env->getExtension("native_profiler");
        $__internal_f40013b2f8d76ba9a4dc20fcc18870a8228052e641017d9cc154a677c2a148f0->enter($__internal_f40013b2f8d76ba9a4dc20fcc18870a8228052e641017d9cc154a677c2a148f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":cliente:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f40013b2f8d76ba9a4dc20fcc18870a8228052e641017d9cc154a677c2a148f0->leave($__internal_f40013b2f8d76ba9a4dc20fcc18870a8228052e641017d9cc154a677c2a148f0_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_7637f2d80588945a3485efdefbf54b525178839ea7985d1cec49e9ca53824dd5 = $this->env->getExtension("native_profiler");
        $__internal_7637f2d80588945a3485efdefbf54b525178839ea7985d1cec49e9ca53824dd5->enter($__internal_7637f2d80588945a3485efdefbf54b525178839ea7985d1cec49e9ca53824dd5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Ver Cliente ";
        
        $__internal_7637f2d80588945a3485efdefbf54b525178839ea7985d1cec49e9ca53824dd5->leave($__internal_7637f2d80588945a3485efdefbf54b525178839ea7985d1cec49e9ca53824dd5_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_b46ffab9b0d955b94b2c75c70acc28df821c08a4e006ea155bc3f9188158a027 = $this->env->getExtension("native_profiler");
        $__internal_b46ffab9b0d955b94b2c75c70acc28df821c08a4e006ea155bc3f9188158a027->enter($__internal_b46ffab9b0d955b94b2c75c70acc28df821c08a4e006ea155bc3f9188158a027_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<h3 align=\"center\"> Ver Cliente  </h3>
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
        echo "<!-- page content -->
    <div class=\"x_content\">                   
        <table class=\"table table-striped\">
            <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cliente"]) ? $context["cliente"] : $this->getContext($context, "cliente")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Nombre</th>
                <td>";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cliente"]) ? $context["cliente"] : $this->getContext($context, "cliente")), "nombre", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Apellido</th>
                <td>";
        // line 31
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cliente"]) ? $context["cliente"] : $this->getContext($context, "cliente")), "apellido", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Correo</th>
                <td>";
        // line 35
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cliente"]) ? $context["cliente"] : $this->getContext($context, "cliente")), "correo", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Usuario</th>
                <td>";
        // line 39
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cliente"]) ? $context["cliente"] : $this->getContext($context, "cliente")), "usuario", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Clave</th>
                <td>";
        // line 43
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cliente"]) ? $context["cliente"] : $this->getContext($context, "cliente")), "clave", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Pais</th>
                <td>";
        // line 47
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["cliente"]) ? $context["cliente"] : $this->getContext($context, "cliente")), "pais", array()), "descripcion", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>
</div>      
<table>
<tr>
<th>             
    <a class=\"btn btn-success\" href=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("cliente_edit", array("id" => $this->getAttribute((isset($context["cliente"]) ? $context["cliente"] : $this->getContext($context, "cliente")), "id", array()))), "html", null, true);
        echo "\"><i class=\"fa fa-edit m-right-xs\"></i>Editar</a>                       
</th> 
<th>
    ";
        // line 58
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
    <button type=\"submit\" class=\"btn btn-danger\"><i class=\"fa fa-trash\"></i> Eliminar </button>
    ";
        // line 60
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
</th> 
<th>             
    <a href=\"";
        // line 63
        echo $this->env->getExtension('routing')->getPath("cliente_index");
        echo "\"><input type=\"button\" class=\"btn btn-primary\" value=\"Volver\"></a>
</th>   
<tr> 
</table>    
";
        
        $__internal_b46ffab9b0d955b94b2c75c70acc28df821c08a4e006ea155bc3f9188158a027->leave($__internal_b46ffab9b0d955b94b2c75c70acc28df821c08a4e006ea155bc3f9188158a027_prof);

    }

    public function getTemplateName()
    {
        return ":cliente:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  178 => 63,  172 => 60,  167 => 58,  161 => 55,  150 => 47,  143 => 43,  136 => 39,  129 => 35,  122 => 31,  115 => 27,  108 => 23,  100 => 17,  93 => 15,  84 => 13,  80 => 12,  77 => 11,  73 => 10,  70 => 9,  61 => 7,  57 => 6,  53 => 4,  47 => 3,  35 => 2,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* {% block title %} Ver Cliente {% endblock %}*/
/* {% block body %}*/
/* <h3 align="center"> Ver Cliente  </h3>*/
/* <hr />*/
/* {% for msg in app.session.flashBag.get('success') %}*/
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
/* <!-- page content -->*/
/*     <div class="x_content">                   */
/*         <table class="table table-striped">*/
/*             <tbody>*/
/*             <tr>*/
/*                 <th>Id</th>*/
/*                 <td>{{ cliente.id }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Nombre</th>*/
/*                 <td>{{ cliente.nombre }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Apellido</th>*/
/*                 <td>{{ cliente.apellido }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Correo</th>*/
/*                 <td>{{ cliente.correo }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Usuario</th>*/
/*                 <td>{{ cliente.usuario }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Clave</th>*/
/*                 <td>{{ cliente.clave }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Pais</th>*/
/*                 <td>{{ cliente.pais.descripcion }}</td>*/
/*             </tr>*/
/*         </tbody>*/
/*     </table>*/
/* </div>      */
/* <table>*/
/* <tr>*/
/* <th>             */
/*     <a class="btn btn-success" href="{{ path('cliente_edit', { 'id': cliente.id }) }}"><i class="fa fa-edit m-right-xs"></i>Editar</a>                       */
/* </th> */
/* <th>*/
/*     {{ form_start(delete_form) }}*/
/*     <button type="submit" class="btn btn-danger"><i class="fa fa-trash"></i> Eliminar </button>*/
/*     {{ form_end(delete_form) }}*/
/* </th> */
/* <th>             */
/*     <a href="{{ path('cliente_index') }}"><input type="button" class="btn btn-primary" value="Volver"></a>*/
/* </th>   */
/* <tr> */
/* </table>    */
/* {% endblock %}*/
