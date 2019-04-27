<?php

/* :coleccion:show.html.twig */
class __TwigTemplate_d7c5be182d7b2f5b3bc7e30f8e1a18f4c41b7ffe8203204afa68715aa053dd0b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":coleccion:show.html.twig", 1);
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
        $__internal_51d20a3648de7f3ae34db82c6ac57f24fc7a7595617e8c64e27a108d24d892c6 = $this->env->getExtension("native_profiler");
        $__internal_51d20a3648de7f3ae34db82c6ac57f24fc7a7595617e8c64e27a108d24d892c6->enter($__internal_51d20a3648de7f3ae34db82c6ac57f24fc7a7595617e8c64e27a108d24d892c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":coleccion:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_51d20a3648de7f3ae34db82c6ac57f24fc7a7595617e8c64e27a108d24d892c6->leave($__internal_51d20a3648de7f3ae34db82c6ac57f24fc7a7595617e8c64e27a108d24d892c6_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_95e8ae988b6f660c0ee93ff186e2cc81ec568b6bfb649fd0b034e988041dc6fe = $this->env->getExtension("native_profiler");
        $__internal_95e8ae988b6f660c0ee93ff186e2cc81ec568b6bfb649fd0b034e988041dc6fe->enter($__internal_95e8ae988b6f660c0ee93ff186e2cc81ec568b6bfb649fd0b034e988041dc6fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Ver Colección ";
        
        $__internal_95e8ae988b6f660c0ee93ff186e2cc81ec568b6bfb649fd0b034e988041dc6fe->leave($__internal_95e8ae988b6f660c0ee93ff186e2cc81ec568b6bfb649fd0b034e988041dc6fe_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_7ff5f3bd6ec8e3184afc80dcb4bb41f6bb2314113043cdd39d008e1711099d6d = $this->env->getExtension("native_profiler");
        $__internal_7ff5f3bd6ec8e3184afc80dcb4bb41f6bb2314113043cdd39d008e1711099d6d->enter($__internal_7ff5f3bd6ec8e3184afc80dcb4bb41f6bb2314113043cdd39d008e1711099d6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "mensaje"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 5
            echo "<div class=\"alert alert-success\" role=\"alert\">
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
        echo "<h3 align=\"center\"> Ver Colecciones  </h3>
<hr />
    ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashBag", array()), "get", array(0 => "success"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["msg"]) {
            // line 12
            echo "        <div class=\"alert alert-success\"> ";
            echo twig_escape_filter($this->env, $context["msg"], "html", null, true);
            echo " </div>       
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['msg'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "
    ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashBag", array()), "get", array(0 => "error"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["msgs"]) {
            // line 16
            echo "        <div class=\"alert alert-danger\">
            ";
            // line 17
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["msgs"]);
            foreach ($context['_seq'] as $context["_key"] => $context["msg"]) {
                // line 18
                echo "                <p>";
                echo twig_escape_filter($this->env, $context["msg"], "html", null, true);
                echo "</p>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['msg'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 20
            echo "        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['msgs'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "
    <!-- page content -->
    <div class=\"x_content\">                   
        <table class=\"table table-striped\">
            <tbody>
                <tr>
                <th>Id</th>
                <td>";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["coleccion"]) ? $context["coleccion"] : $this->getContext($context, "coleccion")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Descripcion</th>
                <td>";
        // line 33
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["coleccion"]) ? $context["coleccion"] : $this->getContext($context, "coleccion")), "descripcion", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Categoria</th>
                <td>";
        // line 37
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["coleccion"]) ? $context["coleccion"] : $this->getContext($context, "coleccion")), "categoria", array()), "descripcion", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>
</div>                    
<table>
<tr>
<th>             
    <a class=\"btn btn-success\" href=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("categoria_edit", array("id" => $this->getAttribute((isset($context["coleccion"]) ? $context["coleccion"] : $this->getContext($context, "coleccion")), "id", array()))), "html", null, true);
        echo "\"><i class=\"fa fa-edit m-right-xs\"></i>Editar</a>                       
</th> 
<th>
    ";
        // line 48
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
    <button type=\"submit\" class=\"btn btn-danger\"><i class=\"fa fa-trash\"></i> Eliminar </button>
    ";
        // line 50
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
</th> 
<th>             
    <a href=\"";
        // line 53
        echo $this->env->getExtension('routing')->getPath("coleccion_index");
        echo "\"><input type=\"button\" class=\"btn btn-primary\" value=\"Volver\"></a>
</th>   
<tr> 
</table>  
";
        
        $__internal_7ff5f3bd6ec8e3184afc80dcb4bb41f6bb2314113043cdd39d008e1711099d6d->leave($__internal_7ff5f3bd6ec8e3184afc80dcb4bb41f6bb2314113043cdd39d008e1711099d6d_prof);

    }

    public function getTemplateName()
    {
        return ":coleccion:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  167 => 53,  161 => 50,  156 => 48,  150 => 45,  139 => 37,  132 => 33,  125 => 29,  116 => 22,  109 => 20,  100 => 18,  96 => 17,  93 => 16,  89 => 15,  86 => 14,  77 => 12,  73 => 11,  69 => 9,  60 => 6,  57 => 5,  53 => 4,  47 => 3,  35 => 2,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* {% block title %} Ver Colección {% endblock %} */
/* {% block body %}*/
/* {% for flashMessage in app.session.flashbag.get('mensaje') %}*/
/* <div class="alert alert-success" role="alert">*/
/*     <div class="container"> {{ flashMessage }} </div>*/
/* </div>*/
/* {% endfor %}*/
/* <h3 align="center"> Ver Colecciones  </h3>*/
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
/*                 <td>{{ coleccion.id }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Descripcion</th>*/
/*                 <td>{{ coleccion.descripcion }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Categoria</th>*/
/*                 <td>{{ coleccion.categoria.descripcion }}</td>*/
/*             </tr>*/
/*         </tbody>*/
/*     </table>*/
/* </div>                    */
/* <table>*/
/* <tr>*/
/* <th>             */
/*     <a class="btn btn-success" href="{{ path('categoria_edit', { 'id': coleccion.id }) }}"><i class="fa fa-edit m-right-xs"></i>Editar</a>                       */
/* </th> */
/* <th>*/
/*     {{ form_start(delete_form) }}*/
/*     <button type="submit" class="btn btn-danger"><i class="fa fa-trash"></i> Eliminar </button>*/
/*     {{ form_end(delete_form) }}*/
/* </th> */
/* <th>             */
/*     <a href="{{ path('coleccion_index') }}"><input type="button" class="btn btn-primary" value="Volver"></a>*/
/* </th>   */
/* <tr> */
/* </table>  */
/* {% endblock %}*/
/* */
