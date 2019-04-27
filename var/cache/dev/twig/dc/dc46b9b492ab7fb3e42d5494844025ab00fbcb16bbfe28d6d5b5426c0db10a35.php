<?php

/* KnpPaginatorBundle:Pagination:semantic_ui_pagination.html.twig */
class __TwigTemplate_7781909cad10f2bdac3ded33b3b46b13b8a3512643f90fd661c76e897d011190 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ae70ee0d0f14a4390a4be1d8f783eb976857bdc89ac9b8c9612cd8728c609238 = $this->env->getExtension("native_profiler");
        $__internal_ae70ee0d0f14a4390a4be1d8f783eb976857bdc89ac9b8c9612cd8728c609238->enter($__internal_ae70ee0d0f14a4390a4be1d8f783eb976857bdc89ac9b8c9612cd8728c609238_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "KnpPaginatorBundle:Pagination:semantic_ui_pagination.html.twig"));

        // line 13
        echo "
<div class=\"ui pagination menu\">
    ";
        // line 15
        if ((array_key_exists("first", $context) && ((isset($context["current"]) ? $context["current"] : $this->getContext($context, "current")) != (isset($context["first"]) ? $context["first"] : $this->getContext($context, "first"))))) {
            // line 16
            echo "        <a class=\"icon item\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath((isset($context["route"]) ? $context["route"] : $this->getContext($context, "route")), twig_array_merge((isset($context["query"]) ? $context["query"] : $this->getContext($context, "query")), array((isset($context["pageParameterName"]) ? $context["pageParameterName"] : $this->getContext($context, "pageParameterName")) => (isset($context["first"]) ? $context["first"] : $this->getContext($context, "first"))))), "html", null, true);
            echo "\">
            <i class=\"angle double left icon\"></i>
        </a>
    ";
        }
        // line 20
        echo "
    ";
        // line 21
        if (array_key_exists("previous", $context)) {
            // line 22
            echo "        <a class=\"item icon\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath((isset($context["route"]) ? $context["route"] : $this->getContext($context, "route")), twig_array_merge((isset($context["query"]) ? $context["query"] : $this->getContext($context, "query")), array((isset($context["pageParameterName"]) ? $context["pageParameterName"] : $this->getContext($context, "pageParameterName")) => (isset($context["previous"]) ? $context["previous"] : $this->getContext($context, "previous"))))), "html", null, true);
            echo "\">
            <i class=\"angle left icon\"></i>
        </a>
    ";
        }
        // line 26
        echo "
    ";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pagesInRange"]) ? $context["pagesInRange"] : $this->getContext($context, "pagesInRange")));
        foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
            // line 28
            echo "        ";
            if (($context["page"] != (isset($context["current"]) ? $context["current"] : $this->getContext($context, "current")))) {
                // line 29
                echo "            <a class=\"item\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath((isset($context["route"]) ? $context["route"] : $this->getContext($context, "route")), twig_array_merge((isset($context["query"]) ? $context["query"] : $this->getContext($context, "query")), array((isset($context["pageParameterName"]) ? $context["pageParameterName"] : $this->getContext($context, "pageParameterName")) => $context["page"]))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $context["page"], "html", null, true);
                echo "</a>
        ";
            } else {
                // line 31
                echo "            <span class=\"active item\">";
                echo twig_escape_filter($this->env, $context["page"], "html", null, true);
                echo "</span>
        ";
            }
            // line 33
            echo "
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "
    ";
        // line 36
        if (array_key_exists("next", $context)) {
            // line 37
            echo "        <a class=\"icon item\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath((isset($context["route"]) ? $context["route"] : $this->getContext($context, "route")), twig_array_merge((isset($context["query"]) ? $context["query"] : $this->getContext($context, "query")), array((isset($context["pageParameterName"]) ? $context["pageParameterName"] : $this->getContext($context, "pageParameterName")) => (isset($context["next"]) ? $context["next"] : $this->getContext($context, "next"))))), "html", null, true);
            echo "\">
            <i class=\"angle right icon\"></i>
        </a>
    ";
        }
        // line 41
        echo "
    ";
        // line 42
        if ((array_key_exists("last", $context) && ((isset($context["current"]) ? $context["current"] : $this->getContext($context, "current")) != (isset($context["last"]) ? $context["last"] : $this->getContext($context, "last"))))) {
            // line 43
            echo "        <a class=\"icon item\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath((isset($context["route"]) ? $context["route"] : $this->getContext($context, "route")), twig_array_merge((isset($context["query"]) ? $context["query"] : $this->getContext($context, "query")), array((isset($context["pageParameterName"]) ? $context["pageParameterName"] : $this->getContext($context, "pageParameterName")) => (isset($context["last"]) ? $context["last"] : $this->getContext($context, "last"))))), "html", null, true);
            echo "\">
            <i class=\"angle right double icon\"></i>
        </a>
    ";
        }
        // line 47
        echo "</div>
";
        
        $__internal_ae70ee0d0f14a4390a4be1d8f783eb976857bdc89ac9b8c9612cd8728c609238->leave($__internal_ae70ee0d0f14a4390a4be1d8f783eb976857bdc89ac9b8c9612cd8728c609238_prof);

    }

    public function getTemplateName()
    {
        return "KnpPaginatorBundle:Pagination:semantic_ui_pagination.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 47,  98 => 43,  96 => 42,  93 => 41,  85 => 37,  83 => 36,  80 => 35,  73 => 33,  67 => 31,  59 => 29,  56 => 28,  52 => 27,  49 => 26,  41 => 22,  39 => 21,  36 => 20,  28 => 16,  26 => 15,  22 => 13,);
    }
}
/* {#*/
/* /***/
/*  * @file*/
/*  * Semantic UI Sliding pagination control implementation.*/
/*  **/
/*  * View that can be used with the pagination module*/
/*  * from the Semantic UI CSS Toolkit*/
/*  * http://semantic-ui.com/collections/menu.html#pagination*/
/*  **/
/*  * @author Valerian Dorcy <valerian.dorcy@gmail.com>*/
/*  *//* */
/* #}*/
/* */
/* <div class="ui pagination menu">*/
/*     {% if first is defined and current != first %}*/
/*         <a class="icon item" href="{{ path(route, query|merge({(pageParameterName): first})) }}">*/
/*             <i class="angle double left icon"></i>*/
/*         </a>*/
/*     {% endif %}*/
/* */
/*     {% if previous is defined %}*/
/*         <a class="item icon" href="{{ path(route, query|merge({(pageParameterName): previous})) }}">*/
/*             <i class="angle left icon"></i>*/
/*         </a>*/
/*     {% endif %}*/
/* */
/*     {% for page in pagesInRange %}*/
/*         {% if page != current %}*/
/*             <a class="item" href="{{ path(route, query|merge({(pageParameterName): page})) }}">{{ page }}</a>*/
/*         {% else %}*/
/*             <span class="active item">{{ page }}</span>*/
/*         {% endif %}*/
/* */
/*     {% endfor %}*/
/* */
/*     {% if next is defined %}*/
/*         <a class="icon item" href="{{ path(route, query|merge({(pageParameterName): next})) }}">*/
/*             <i class="angle right icon"></i>*/
/*         </a>*/
/*     {% endif %}*/
/* */
/*     {% if last is defined and current != last %}*/
/*         <a class="icon item" href="{{ path(route, query|merge({(pageParameterName): last})) }}">*/
/*             <i class="angle right double icon"></i>*/
/*         </a>*/
/*     {% endif %}*/
/* </div>*/
/* */
