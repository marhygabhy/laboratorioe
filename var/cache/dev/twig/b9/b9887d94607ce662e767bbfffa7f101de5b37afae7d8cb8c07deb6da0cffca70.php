<?php

/* :solicitud:show.html.twig */
class __TwigTemplate_bb4f417fe58fc4d529d723e2d2b0e07b7aea73990c50e62d809d7c0f202a5f50 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":solicitud:show.html.twig", 1);
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
        $__internal_a5f21eb72d915a632d172d6f16720b48929a1e12de5c0ebda1e8900e584ddff7 = $this->env->getExtension("native_profiler");
        $__internal_a5f21eb72d915a632d172d6f16720b48929a1e12de5c0ebda1e8900e584ddff7->enter($__internal_a5f21eb72d915a632d172d6f16720b48929a1e12de5c0ebda1e8900e584ddff7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":solicitud:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a5f21eb72d915a632d172d6f16720b48929a1e12de5c0ebda1e8900e584ddff7->leave($__internal_a5f21eb72d915a632d172d6f16720b48929a1e12de5c0ebda1e8900e584ddff7_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_abce9fb089e647b251766b62ccf055dd574b0dbf91599266ba51f390ce340eec = $this->env->getExtension("native_profiler");
        $__internal_abce9fb089e647b251766b62ccf055dd574b0dbf91599266ba51f390ce340eec->enter($__internal_abce9fb089e647b251766b62ccf055dd574b0dbf91599266ba51f390ce340eec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Ver Solicitud ";
        
        $__internal_abce9fb089e647b251766b62ccf055dd574b0dbf91599266ba51f390ce340eec->leave($__internal_abce9fb089e647b251766b62ccf055dd574b0dbf91599266ba51f390ce340eec_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_b3ead458e24943cd32c31a898aec2e714e53cf369568e07746bbfc3db5ce9680 = $this->env->getExtension("native_profiler");
        $__internal_b3ead458e24943cd32c31a898aec2e714e53cf369568e07746bbfc3db5ce9680->enter($__internal_b3ead458e24943cd32c31a898aec2e714e53cf369568e07746bbfc3db5ce9680_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<h3 align=\"center\"> Ver Solicitudes  </h3>
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
                    <th>Solicitud</th>
                    <th>Cliente</th>
                    <th>Libro</th>
                     </tr>
                    <tr>
                    <td>";
        // line 28
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["solicitud"]) ? $context["solicitud"] : $this->getContext($context, "solicitud")), "id", array()), "html", null, true);
        echo "</td>
                    <td>";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["solicitud"]) ? $context["solicitud"] : $this->getContext($context, "solicitud")), "cliente", array()), "html", null, true);
        echo "</td>
                    <td>";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["solicitud"]) ? $context["solicitud"] : $this->getContext($context, "solicitud")), "libro", array()), "html", null, true);
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
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("solicitud_edit", array("id" => $this->getAttribute((isset($context["solicitud"]) ? $context["solicitud"] : $this->getContext($context, "solicitud")), "id", array()))), "html", null, true);
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
        echo $this->env->getExtension('routing')->getPath("solicitud_index");
        echo "\"><input type=\"button\" class=\"btn btn-primary\" value=\"Volver\"></a>
</th>   
<tr> 
</table> 
";
        
        $__internal_b3ead458e24943cd32c31a898aec2e714e53cf369568e07746bbfc3db5ce9680->leave($__internal_b3ead458e24943cd32c31a898aec2e714e53cf369568e07746bbfc3db5ce9680_prof);

    }

    public function getTemplateName()
    {
        return ":solicitud:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  149 => 46,  143 => 43,  138 => 41,  132 => 38,  121 => 30,  117 => 29,  113 => 28,  100 => 17,  93 => 15,  84 => 13,  80 => 12,  77 => 11,  73 => 10,  70 => 9,  61 => 7,  57 => 6,  53 => 4,  47 => 3,  35 => 2,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* {% block title %} Ver Solicitud {% endblock %} */
/* {% block body %}*/
/* <h3 align="center"> Ver Solicitudes  </h3>*/
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
/*                     <th>Solicitud</th>*/
/*                     <th>Cliente</th>*/
/*                     <th>Libro</th>*/
/*                      </tr>*/
/*                     <tr>*/
/*                     <td>{{ solicitud.id }}</td>*/
/*                     <td>{{ solicitud.cliente }}</td>*/
/*                     <td>{{ solicitud.libro }}</td>*/
/*                 </tr>*/
/*         </tbody>*/
/*     </table>*/
/* </div>                    */
/* <table>*/
/* <tr>*/
/* <th>             */
/*     <a class="btn btn-success" href="{{ path('solicitud_edit', { 'id': solicitud.id }) }}"><i class="fa fa-edit m-right-xs"></i>Editar</a>                       */
/* </th> */
/* <th>*/
/*     {{ form_start(delete_form) }}*/
/*     <button type="submit" class="btn btn-danger"><i class="fa fa-trash"></i> Eliminar </button>*/
/*     {{ form_end(delete_form) }}*/
/* </th> */
/* <th>             */
/*     <a href="{{ path('solicitud_index') }}"><input type="button" class="btn btn-primary" value="Volver"></a>*/
/* </th>   */
/* <tr> */
/* </table> */
/* {% endblock %}*/
/* */
