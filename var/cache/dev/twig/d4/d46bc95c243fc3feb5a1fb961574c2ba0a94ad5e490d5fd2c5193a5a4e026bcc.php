<?php

/* :pais:show.html.twig */
class __TwigTemplate_fb7b389e6e67fb5610d6aa1c4e06c125d329ab904e6c71af8c00f84681a023e0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":pais:show.html.twig", 1);
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
        $__internal_900d3e0fe8e17934ba0e911f16fe0d8ee4e18830eda7c4d6c55ec8137b2c8e2a = $this->env->getExtension("native_profiler");
        $__internal_900d3e0fe8e17934ba0e911f16fe0d8ee4e18830eda7c4d6c55ec8137b2c8e2a->enter($__internal_900d3e0fe8e17934ba0e911f16fe0d8ee4e18830eda7c4d6c55ec8137b2c8e2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":pais:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_900d3e0fe8e17934ba0e911f16fe0d8ee4e18830eda7c4d6c55ec8137b2c8e2a->leave($__internal_900d3e0fe8e17934ba0e911f16fe0d8ee4e18830eda7c4d6c55ec8137b2c8e2a_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_78c918fddfd80919b75b667a99dc3601fbfb324c2d4921e7e520e002cda5903d = $this->env->getExtension("native_profiler");
        $__internal_78c918fddfd80919b75b667a99dc3601fbfb324c2d4921e7e520e002cda5903d->enter($__internal_78c918fddfd80919b75b667a99dc3601fbfb324c2d4921e7e520e002cda5903d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Ver País ";
        
        $__internal_78c918fddfd80919b75b667a99dc3601fbfb324c2d4921e7e520e002cda5903d->leave($__internal_78c918fddfd80919b75b667a99dc3601fbfb324c2d4921e7e520e002cda5903d_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_9b78a942476b95d1c0bf26a850bdeb78213c8cf2842f5be0ab5d5f025381007c = $this->env->getExtension("native_profiler");
        $__internal_9b78a942476b95d1c0bf26a850bdeb78213c8cf2842f5be0ab5d5f025381007c->enter($__internal_9b78a942476b95d1c0bf26a850bdeb78213c8cf2842f5be0ab5d5f025381007c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<h3 align=\"center\"> Ver País  </h3>
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
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pais"]) ? $context["pais"] : $this->getContext($context, "pais")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Descripcion</th>
                <td>";
        // line 28
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pais"]) ? $context["pais"] : $this->getContext($context, "pais")), "descripcion", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>
</div>                    
<table>
<tr>
<th>             
    <a class=\"btn btn-success\" href=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("categoria_edit", array("id" => $this->getAttribute((isset($context["pais"]) ? $context["pais"] : $this->getContext($context, "pais")), "id", array()))), "html", null, true);
        echo "\"><i class=\"fa fa-edit m-right-xs\"></i>Editar</a>                       
</th> 
<th>
    ";
        // line 39
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
    <button type=\"submit\" class=\"btn btn-danger\"><i class=\"fa fa-trash\"></i> Eliminar </button>
    ";
        // line 41
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
</th> 
<th>             
    <a href=\"";
        // line 44
        echo $this->env->getExtension('routing')->getPath("pais_index");
        echo "\"><input type=\"button\" class=\"btn btn-primary\" value=\"Volver\"></a>
</th>   
<tr> 
</table> 
";
        
        $__internal_9b78a942476b95d1c0bf26a850bdeb78213c8cf2842f5be0ab5d5f025381007c->leave($__internal_9b78a942476b95d1c0bf26a850bdeb78213c8cf2842f5be0ab5d5f025381007c_prof);

    }

    public function getTemplateName()
    {
        return ":pais:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  144 => 44,  138 => 41,  133 => 39,  127 => 36,  116 => 28,  109 => 24,  100 => 17,  93 => 15,  84 => 13,  80 => 12,  77 => 11,  73 => 10,  70 => 9,  61 => 7,  57 => 6,  53 => 4,  47 => 3,  35 => 2,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* {% block title %} Ver País {% endblock %}*/
/* {% block body %}*/
/* <h3 align="center"> Ver País  </h3>*/
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
/*                 <td>{{ pais.id }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Descripcion</th>*/
/*                 <td>{{ pais.descripcion }}</td>*/
/*             </tr>*/
/*         </tbody>*/
/*     </table>*/
/* </div>                    */
/* <table>*/
/* <tr>*/
/* <th>             */
/*     <a class="btn btn-success" href="{{ path('categoria_edit', { 'id': pais.id }) }}"><i class="fa fa-edit m-right-xs"></i>Editar</a>                       */
/* </th> */
/* <th>*/
/*     {{ form_start(delete_form) }}*/
/*     <button type="submit" class="btn btn-danger"><i class="fa fa-trash"></i> Eliminar </button>*/
/*     {{ form_end(delete_form) }}*/
/* </th> */
/* <th>             */
/*     <a href="{{ path('pais_index') }}"><input type="button" class="btn btn-primary" value="Volver"></a>*/
/* </th>   */
/* <tr> */
/* </table> */
/* {% endblock %}*/
