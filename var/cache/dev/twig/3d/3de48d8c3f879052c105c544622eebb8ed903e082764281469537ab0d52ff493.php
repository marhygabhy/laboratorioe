<?php

/* :categoria:show.html.twig */
class __TwigTemplate_dab44909fdbe1c20f7442ed817e3677092130930576acb1f01350bf3656737b5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":categoria:show.html.twig", 1);
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
        $__internal_4e98e1d05538bf3768354505b11ea8cb44b07d2b4c850850ac1b15c646cb78ce = $this->env->getExtension("native_profiler");
        $__internal_4e98e1d05538bf3768354505b11ea8cb44b07d2b4c850850ac1b15c646cb78ce->enter($__internal_4e98e1d05538bf3768354505b11ea8cb44b07d2b4c850850ac1b15c646cb78ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":categoria:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4e98e1d05538bf3768354505b11ea8cb44b07d2b4c850850ac1b15c646cb78ce->leave($__internal_4e98e1d05538bf3768354505b11ea8cb44b07d2b4c850850ac1b15c646cb78ce_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_72daf0e373e95e552364593fa7a73faa359ae6bbe5934f240ae53b3a5196aa53 = $this->env->getExtension("native_profiler");
        $__internal_72daf0e373e95e552364593fa7a73faa359ae6bbe5934f240ae53b3a5196aa53->enter($__internal_72daf0e373e95e552364593fa7a73faa359ae6bbe5934f240ae53b3a5196aa53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Ver Usuario ";
        
        $__internal_72daf0e373e95e552364593fa7a73faa359ae6bbe5934f240ae53b3a5196aa53->leave($__internal_72daf0e373e95e552364593fa7a73faa359ae6bbe5934f240ae53b3a5196aa53_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_7192f0233adda86c53dc8cff0bb8c4708fa05716137282d4b85186e064566db4 = $this->env->getExtension("native_profiler");
        $__internal_7192f0233adda86c53dc8cff0bb8c4708fa05716137282d4b85186e064566db4->enter($__internal_7192f0233adda86c53dc8cff0bb8c4708fa05716137282d4b85186e064566db4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<h3 align=\"center\"> Ver Categorias  </h3>
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
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["categoria"]) ? $context["categoria"] : $this->getContext($context, "categoria")), "id", array()), "html", null, true);
        echo "</td>
                </tr>
                <tr>
                     <th>Descripcion</th>
                     <td>";
        // line 28
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["categoria"]) ? $context["categoria"] : $this->getContext($context, "categoria")), "descripcion", array()), "html", null, true);
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
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("categoria_edit", array("id" => $this->getAttribute((isset($context["categoria"]) ? $context["categoria"] : $this->getContext($context, "categoria")), "id", array()))), "html", null, true);
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
        echo $this->env->getExtension('routing')->getPath("categoria_index");
        echo "\"><input type=\"button\" class=\"btn btn-primary\" value=\"Volver\"></a>
</th>   
<tr> 
</table>    
  
";
        
        $__internal_7192f0233adda86c53dc8cff0bb8c4708fa05716137282d4b85186e064566db4->leave($__internal_7192f0233adda86c53dc8cff0bb8c4708fa05716137282d4b85186e064566db4_prof);

    }

    public function getTemplateName()
    {
        return ":categoria:show.html.twig";
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
/* {% block title %} Ver Usuario {% endblock %}*/
/* {% block body %}*/
/* <h3 align="center"> Ver Categorias  </h3>*/
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
/*                      <th>Id</th>*/
/*                      <td>{{ categoria.id }}</td>*/
/*                 </tr>*/
/*                 <tr>*/
/*                      <th>Descripcion</th>*/
/*                      <td>{{ categoria.descripcion }}</td>*/
/*                 </tr>*/
/*         </tbody>*/
/*     </table>*/
/* </div>      */
/* <table>*/
/* <tr>*/
/* <th>             */
/*     <a class="btn btn-success" href="{{ path('categoria_edit', { 'id': categoria.id }) }}"><i class="fa fa-edit m-right-xs"></i>Editar</a>                       */
/* </th> */
/* <th>*/
/*     {{ form_start(delete_form) }}*/
/*     <button type="submit" class="btn btn-danger"><i class="fa fa-trash"></i> Eliminar </button>*/
/*     {{ form_end(delete_form) }}*/
/* </th> */
/* <th>             */
/*     <a href="{{ path('categoria_index') }}"><input type="button" class="btn btn-primary" value="Volver"></a>*/
/* </th>   */
/* <tr> */
/* </table>    */
/*   */
/* {% endblock %}*/
/* */
