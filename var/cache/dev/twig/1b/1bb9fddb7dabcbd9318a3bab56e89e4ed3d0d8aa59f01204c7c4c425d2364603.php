<?php

/* :pais:index.html.twig */
class __TwigTemplate_12ebf88207f0ed4fbdee7a2a706c7f5e682b869d5160d40f65f40ebc8f6d8ec7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":pais:index.html.twig", 1);
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
        $__internal_9af63619a88a26aa05a264d9816a4a115bfb677187ea15f47cdd2c2e15240af2 = $this->env->getExtension("native_profiler");
        $__internal_9af63619a88a26aa05a264d9816a4a115bfb677187ea15f47cdd2c2e15240af2->enter($__internal_9af63619a88a26aa05a264d9816a4a115bfb677187ea15f47cdd2c2e15240af2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":pais:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9af63619a88a26aa05a264d9816a4a115bfb677187ea15f47cdd2c2e15240af2->leave($__internal_9af63619a88a26aa05a264d9816a4a115bfb677187ea15f47cdd2c2e15240af2_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_cf99781da22ba42b5033f9000fc50bda55321de265520a17d7ac9aaa953e870e = $this->env->getExtension("native_profiler");
        $__internal_cf99781da22ba42b5033f9000fc50bda55321de265520a17d7ac9aaa953e870e->enter($__internal_cf99781da22ba42b5033f9000fc50bda55321de265520a17d7ac9aaa953e870e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Lista de Paises ";
        
        $__internal_cf99781da22ba42b5033f9000fc50bda55321de265520a17d7ac9aaa953e870e->leave($__internal_cf99781da22ba42b5033f9000fc50bda55321de265520a17d7ac9aaa953e870e_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_b85854098354a0cd65ef1e04015dc2586ee85fd68c6c2979ca791406cf50fd3b = $this->env->getExtension("native_profiler");
        $__internal_b85854098354a0cd65ef1e04015dc2586ee85fd68c6c2979ca791406cf50fd3b->enter($__internal_b85854098354a0cd65ef1e04015dc2586ee85fd68c6c2979ca791406cf50fd3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<h3 align=\"center\"> Lista de Paises  </h3>
<hr />
    ";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashBag", array()), "get", array(0 => "success"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["msg"]) {
            // line 7
            echo "        <div class=\"alert alert-success\">
            ";
            // line 8
            echo twig_escape_filter($this->env, $context["msg"], "html", null, true);
            echo "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['msg'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 11
        echo "
    ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashBag", array()), "get", array(0 => "error"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["msgs"]) {
            // line 13
            echo "        <div class=\"alert alert-danger\">
            ";
            // line 14
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["msgs"]);
            foreach ($context['_seq'] as $context["_key"] => $context["msg"]) {
                // line 15
                echo "                <p>";
                echo twig_escape_filter($this->env, $context["msg"], "html", null, true);
                echo "</p>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['msg'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 17
            echo "        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['msgs'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "
    <table id=\"datatable-fixed-header\" class=\"table table-striped table-bordered\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Descripcion</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["pais"]);
        foreach ($context['_seq'] as $context["_key"] => $context["pais"]) {
            // line 30
            echo "            <tr>
                <td><a href=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("pais_show", array("id" => $this->getAttribute($context["pais"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["pais"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($context["pais"], "descripcion", array()), "html", null, true);
            echo "</td>
                <td>
                    <a href=\"";
            // line 34
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("pais_show", array("id" => $this->getAttribute($context["pais"], "id", array()))), "html", null, true);
            echo "\">
                       <button type=\"button\" class=\"btn btn-sm btn-warning\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"\" data-original-title=\"Ver\">  <i class=\"fa fa-eye\"></i>  </button>
                    </a>
                    <a href=\"";
            // line 37
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("pais_edit", array("id" => $this->getAttribute($context["pais"], "id", array()))), "html", null, true);
            echo "\">
                       <button type=\"button\" class=\"btn btn-sm btn-success\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"\" data-original-title=\"Editar\">  <i class=\"fa fa-pencil\"></i>  </button>
                    </a>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pais'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "        </tbody>
    </table>
<a href=\"";
        // line 45
        echo $this->env->getExtension('routing')->getPath("pais_new");
        echo "\"><input type=\"button\" class=\"btn btn-primary\" value=\"Crear  Pais\"></a>
";
        
        $__internal_b85854098354a0cd65ef1e04015dc2586ee85fd68c6c2979ca791406cf50fd3b->leave($__internal_b85854098354a0cd65ef1e04015dc2586ee85fd68c6c2979ca791406cf50fd3b_prof);

    }

    public function getTemplateName()
    {
        return ":pais:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  155 => 45,  151 => 43,  139 => 37,  133 => 34,  128 => 32,  122 => 31,  119 => 30,  115 => 29,  103 => 19,  96 => 17,  87 => 15,  83 => 14,  80 => 13,  76 => 12,  73 => 11,  64 => 8,  61 => 7,  57 => 6,  53 => 4,  47 => 3,  35 => 2,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* {% block title %} Lista de Paises {% endblock %}*/
/* {% block body %}*/
/* <h3 align="center"> Lista de Paises  </h3>*/
/* <hr />*/
/*     {% for msg in app.session.flashBag.get('success') %}*/
/*         <div class="alert alert-success">*/
/*             {{ msg }}*/
/*         </div>*/
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
/*     <table id="datatable-fixed-header" class="table table-striped table-bordered">*/
/*         <thead>*/
/*             <tr>*/
/*                 <th>Id</th>*/
/*                 <th>Descripcion</th>*/
/*                 <th>Acciones</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for pais in pais %}*/
/*             <tr>*/
/*                 <td><a href="{{ path('pais_show', { 'id': pais.id }) }}">{{ pais.id }}</a></td>*/
/*                 <td>{{ pais.descripcion }}</td>*/
/*                 <td>*/
/*                     <a href="{{ path('pais_show', { 'id': pais.id }) }}">*/
/*                        <button type="button" class="btn btn-sm btn-warning" data-toggle="tooltip" data-placement="top" title="" data-original-title="Ver">  <i class="fa fa-eye"></i>  </button>*/
/*                     </a>*/
/*                     <a href="{{ path('pais_edit', { 'id': pais.id }) }}">*/
/*                        <button type="button" class="btn btn-sm btn-success" data-toggle="tooltip" data-placement="top" title="" data-original-title="Editar">  <i class="fa fa-pencil"></i>  </button>*/
/*                     </a>*/
/*                 </td>*/
/*             </tr>*/
/*         {% endfor %}*/
/*         </tbody>*/
/*     </table>*/
/* <a href="{{ path('pais_new') }}"><input type="button" class="btn btn-primary" value="Crear  Pais"></a>*/
/* {% endblock %}*/
/* */
