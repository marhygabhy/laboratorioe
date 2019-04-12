<?php

/* :coleccion:show.html.twig */
class __TwigTemplate_4c68e582c73f30ac18c712ba0ea280d8e18db6d154789fdb21c1f0aa82b53e1c extends Twig_Template
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
        $__internal_3d9e31651c2c1c60a0d958d3bb3506d13569b047f939aa652b0b923034b75822 = $this->env->getExtension("native_profiler");
        $__internal_3d9e31651c2c1c60a0d958d3bb3506d13569b047f939aa652b0b923034b75822->enter($__internal_3d9e31651c2c1c60a0d958d3bb3506d13569b047f939aa652b0b923034b75822_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":coleccion:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3d9e31651c2c1c60a0d958d3bb3506d13569b047f939aa652b0b923034b75822->leave($__internal_3d9e31651c2c1c60a0d958d3bb3506d13569b047f939aa652b0b923034b75822_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_cf1a0387583cb3e3190b91d8ef28cbc722d68eafe6ea0fbe631a11905f3a2f57 = $this->env->getExtension("native_profiler");
        $__internal_cf1a0387583cb3e3190b91d8ef28cbc722d68eafe6ea0fbe631a11905f3a2f57->enter($__internal_cf1a0387583cb3e3190b91d8ef28cbc722d68eafe6ea0fbe631a11905f3a2f57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Ver Colección ";
        
        $__internal_cf1a0387583cb3e3190b91d8ef28cbc722d68eafe6ea0fbe631a11905f3a2f57->leave($__internal_cf1a0387583cb3e3190b91d8ef28cbc722d68eafe6ea0fbe631a11905f3a2f57_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_7359ac36abdcd6dab2f2606615b21216ec4a4d32ab4305af2d686f16188f8a73 = $this->env->getExtension("native_profiler");
        $__internal_7359ac36abdcd6dab2f2606615b21216ec4a4d32ab4305af2d686f16188f8a73->enter($__internal_7359ac36abdcd6dab2f2606615b21216ec4a4d32ab4305af2d686f16188f8a73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashBag", array()), "get", array(0 => "success"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["msg"]) {
            // line 5
            echo "        <div class=\"alert alert-success\"> ";
            echo twig_escape_filter($this->env, $context["msg"], "html", null, true);
            echo " </div>       
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['msg'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 7
        echo "
    ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashBag", array()), "get", array(0 => "error"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["msgs"]) {
            // line 9
            echo "        <div class=\"alert alert-danger\">
            ";
            // line 10
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["msgs"]);
            foreach ($context['_seq'] as $context["_key"] => $context["msg"]) {
                // line 11
                echo "                <p>";
                echo twig_escape_filter($this->env, $context["msg"], "html", null, true);
                echo "</p>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['msg'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 13
            echo "        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['msgs'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "
    <!-- page content -->
    <div class=\"x_content\">                   
        <table class=\"table table-striped\">
            <tbody>
                <tr>
                <th>Id</th>
                <td>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["coleccion"]) ? $context["coleccion"] : $this->getContext($context, "coleccion")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Descripcion</th>
                <td>";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["coleccion"]) ? $context["coleccion"] : $this->getContext($context, "coleccion")), "descripcion", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Categoria</th>
                <td>";
        // line 30
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
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("categoria_edit", array("id" => $this->getAttribute((isset($context["coleccion"]) ? $context["coleccion"] : $this->getContext($context, "coleccion")), "id", array()))), "html", null, true);
        echo "\"><i class=\"fa fa-edit m-right-xs\"></i>Editar</a>                       
</th> 
<th>
    ";
        // line 41
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
    <button type=\"submit\" class=\"btn btn-danger\"><i class=\"fa fa-trash\"></i> Eliminar </button>
    ";
        // line 43
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
</th> 
<th>             
    <a href=\"";
        // line 46
        echo $this->env->getExtension('routing')->getPath("coleccion_index");
        echo "\"><input type=\"button\" class=\"btn btn-primary\" value=\"Volver\"></a>
</th>   
<tr> 
</table>  
";
        
        $__internal_7359ac36abdcd6dab2f2606615b21216ec4a4d32ab4305af2d686f16188f8a73->leave($__internal_7359ac36abdcd6dab2f2606615b21216ec4a4d32ab4305af2d686f16188f8a73_prof);

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
        return array (  148 => 46,  142 => 43,  137 => 41,  131 => 38,  120 => 30,  113 => 26,  106 => 22,  97 => 15,  90 => 13,  81 => 11,  77 => 10,  74 => 9,  70 => 8,  67 => 7,  58 => 5,  53 => 4,  47 => 3,  35 => 2,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* {% block title %} Ver Colección {% endblock %} */
/* {% block body %}*/
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
