<?php

/* :solicitud:show.html.twig */
class __TwigTemplate_55ce328fd69b5deda4d13c5226c60a154b667000caf87e3847c505d7c2350b88 extends Twig_Template
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
        $__internal_29fb259a456eb490a029dd869dd1f80f814d60cfe0f2d90248203d051557cfb1 = $this->env->getExtension("native_profiler");
        $__internal_29fb259a456eb490a029dd869dd1f80f814d60cfe0f2d90248203d051557cfb1->enter($__internal_29fb259a456eb490a029dd869dd1f80f814d60cfe0f2d90248203d051557cfb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":solicitud:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_29fb259a456eb490a029dd869dd1f80f814d60cfe0f2d90248203d051557cfb1->leave($__internal_29fb259a456eb490a029dd869dd1f80f814d60cfe0f2d90248203d051557cfb1_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_063bcbeee43788f98c87148268c67064b101bfbba76d46241108b3c6fd0d180c = $this->env->getExtension("native_profiler");
        $__internal_063bcbeee43788f98c87148268c67064b101bfbba76d46241108b3c6fd0d180c->enter($__internal_063bcbeee43788f98c87148268c67064b101bfbba76d46241108b3c6fd0d180c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Ver Solicitud ";
        
        $__internal_063bcbeee43788f98c87148268c67064b101bfbba76d46241108b3c6fd0d180c->leave($__internal_063bcbeee43788f98c87148268c67064b101bfbba76d46241108b3c6fd0d180c_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_881ebe2cf8b07d864b66570e7d2b4b21c1c40856d5b1f4e6ce3d9fd7d891111d = $this->env->getExtension("native_profiler");
        $__internal_881ebe2cf8b07d864b66570e7d2b4b21c1c40856d5b1f4e6ce3d9fd7d891111d->enter($__internal_881ebe2cf8b07d864b66570e7d2b4b21c1c40856d5b1f4e6ce3d9fd7d891111d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        echo "<h3 align=\"center\"> Ver Solicitudes  </h3>
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
                    <th>Solicitud</th>
                    <th>Cliente</th>
                    <th>Libro</th>
                     </tr>
                    <tr>
                    <td>";
        // line 33
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["solicitud"]) ? $context["solicitud"] : $this->getContext($context, "solicitud")), "id", array()), "html", null, true);
        echo "</td>
                    <td>";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["solicitud"]) ? $context["solicitud"] : $this->getContext($context, "solicitud")), "cliente", array()), "html", null, true);
        echo "</td>
                </tr>
        </tbody>
    </table>
</div>                    
<table>
<tr>
<th>             
    <a class=\"btn btn-success\" href=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("solicitud_edit", array("id" => $this->getAttribute((isset($context["solicitud"]) ? $context["solicitud"] : $this->getContext($context, "solicitud")), "id", array()))), "html", null, true);
        echo "\"><i class=\"fa fa-edit m-right-xs\"></i>Editar</a>                       
</th> 
<th>
    ";
        // line 45
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
    <button type=\"submit\" class=\"btn btn-danger\"><i class=\"fa fa-trash\"></i> Eliminar </button>
    ";
        // line 47
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
</th> 
<th>             
    <a href=\"";
        // line 50
        echo $this->env->getExtension('routing')->getPath("solicitud_index");
        echo "\"><input type=\"button\" class=\"btn btn-primary\" value=\"Volver\"></a>
</th>   
<tr> 
</table> 
";
        
        $__internal_881ebe2cf8b07d864b66570e7d2b4b21c1c40856d5b1f4e6ce3d9fd7d891111d->leave($__internal_881ebe2cf8b07d864b66570e7d2b4b21c1c40856d5b1f4e6ce3d9fd7d891111d_prof);

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
        return array (  161 => 50,  155 => 47,  150 => 45,  144 => 42,  133 => 34,  129 => 33,  116 => 22,  109 => 20,  100 => 18,  96 => 17,  93 => 16,  89 => 15,  86 => 14,  77 => 12,  73 => 11,  69 => 9,  60 => 6,  57 => 5,  53 => 4,  47 => 3,  35 => 2,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* {% block title %} Ver Solicitud {% endblock %} */
/* {% block body %}*/
/* {% for flashMessage in app.session.flashbag.get('mensaje') %}*/
/* <div class="alert alert-success" role="alert">*/
/*     <div class="container"> {{ flashMessage }} </div>*/
/* </div>*/
/* {% endfor %}*/
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
