<?php

/* KnpPaginatorBundle:Pagination:materialize_pagination.html.twig */
class __TwigTemplate_610c82c1ede8b5b35aefc88ca869b23d9220f02b918f32ac44075c8dc6148568 extends Twig_Template
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
        $__internal_7be9ff208b94be8f05b2aeee822c68892610cbf1aee97741e62f0b2fd2d4261d = $this->env->getExtension("native_profiler");
        $__internal_7be9ff208b94be8f05b2aeee822c68892610cbf1aee97741e62f0b2fd2d4261d->enter($__internal_7be9ff208b94be8f05b2aeee822c68892610cbf1aee97741e62f0b2fd2d4261d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "KnpPaginatorBundle:Pagination:materialize_pagination.html.twig"));

        // line 13
        echo "
";
        // line 14
        if (((isset($context["pageCount"]) ? $context["pageCount"] : $this->getContext($context, "pageCount")) > 1)) {
            // line 15
            echo "    <ul class=\"pagination\">
        ";
            // line 16
            if ((array_key_exists("first", $context) && ((isset($context["current"]) ? $context["current"] : $this->getContext($context, "current")) != (isset($context["first"]) ? $context["first"] : $this->getContext($context, "first"))))) {
                // line 17
                echo "            <li class=\"waves-effect\">
                <a href=\"";
                // line 18
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath((isset($context["route"]) ? $context["route"] : $this->getContext($context, "route")), twig_array_merge((isset($context["query"]) ? $context["query"] : $this->getContext($context, "query")), array((isset($context["pageParameterName"]) ? $context["pageParameterName"] : $this->getContext($context, "pageParameterName")) => (isset($context["first"]) ? $context["first"] : $this->getContext($context, "first"))))), "html", null, true);
                echo "\">
                    <i class=\"material-icons\">first_page</i>
                </a>
            </li>
        ";
            } else {
                // line 23
                echo "            <li class=\"disabled\">
                <a href=\"#!\">
                    <i class=\"material-icons\">first_page</i>
                </a>
            </li>
        ";
            }
            // line 29
            echo "
        ";
            // line 30
            if (array_key_exists("previous", $context)) {
                // line 31
                echo "            <li class=\"waves-effect\">
                <a href=\"";
                // line 32
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath((isset($context["route"]) ? $context["route"] : $this->getContext($context, "route")), twig_array_merge((isset($context["query"]) ? $context["query"] : $this->getContext($context, "query")), array((isset($context["pageParameterName"]) ? $context["pageParameterName"] : $this->getContext($context, "pageParameterName")) => (isset($context["previous"]) ? $context["previous"] : $this->getContext($context, "previous"))))), "html", null, true);
                echo "\">
                    <i class=\"material-icons\">chevron_left</i>
                </a>
            </li>
        ";
            } else {
                // line 37
                echo "            <li class=\"disabled\">
                <a href=\"#!\">
                    <i class=\"material-icons\">chevron_left</i>
                </a>
            </li>
        ";
            }
            // line 43
            echo "
        ";
            // line 44
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["pagesInRange"]) ? $context["pagesInRange"] : $this->getContext($context, "pagesInRange")));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 45
                echo "            ";
                if (($context["page"] != (isset($context["current"]) ? $context["current"] : $this->getContext($context, "current")))) {
                    // line 46
                    echo "                <li class=\"waves-effect\">
                    <a href=\"";
                    // line 47
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath((isset($context["route"]) ? $context["route"] : $this->getContext($context, "route")), twig_array_merge((isset($context["query"]) ? $context["query"] : $this->getContext($context, "query")), array((isset($context["pageParameterName"]) ? $context["pageParameterName"] : $this->getContext($context, "pageParameterName")) => $context["page"]))), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $context["page"], "html", null, true);
                    echo "</a>
                </li>
            ";
                } else {
                    // line 50
                    echo "                <li class=\"active\">
                    <a href=\"#!\">";
                    // line 51
                    echo twig_escape_filter($this->env, $context["page"], "html", null, true);
                    echo "</a>
                </li>
            ";
                }
                // line 54
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 55
            echo "
        ";
            // line 56
            if (array_key_exists("next", $context)) {
                // line 57
                echo "            <li class=\"waves-effect\">
                <a href=\"";
                // line 58
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath((isset($context["route"]) ? $context["route"] : $this->getContext($context, "route")), twig_array_merge((isset($context["query"]) ? $context["query"] : $this->getContext($context, "query")), array((isset($context["pageParameterName"]) ? $context["pageParameterName"] : $this->getContext($context, "pageParameterName")) => (isset($context["next"]) ? $context["next"] : $this->getContext($context, "next"))))), "html", null, true);
                echo "\">
                    <i class=\"material-icons\">chevron_right</i>
                </a>
            </li>
        ";
            } else {
                // line 63
                echo "            <li class=\"disabled\">
                <a href=\"#!\">
                    <i class=\"material-icons\">chevron_right</i>
                </a>
            </li>
        ";
            }
            // line 69
            echo "
        ";
            // line 70
            if ((array_key_exists("last", $context) && ((isset($context["current"]) ? $context["current"] : $this->getContext($context, "current")) != (isset($context["last"]) ? $context["last"] : $this->getContext($context, "last"))))) {
                // line 71
                echo "            <li class=\"waves-effect\">
                <a href=\"";
                // line 72
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath((isset($context["route"]) ? $context["route"] : $this->getContext($context, "route")), twig_array_merge((isset($context["query"]) ? $context["query"] : $this->getContext($context, "query")), array((isset($context["pageParameterName"]) ? $context["pageParameterName"] : $this->getContext($context, "pageParameterName")) => (isset($context["last"]) ? $context["last"] : $this->getContext($context, "last"))))), "html", null, true);
                echo "\">
                    <i class=\"material-icons\">last_page</i>
                </a>
            </li>
        ";
            } else {
                // line 77
                echo "            <li class=\"disabled\">
                <a href=\"#!\">
                    <i class=\"material-icons\">last_page</i>
                </a>
            </li>
        ";
            }
            // line 83
            echo "    </ul>
";
        }
        
        $__internal_7be9ff208b94be8f05b2aeee822c68892610cbf1aee97741e62f0b2fd2d4261d->leave($__internal_7be9ff208b94be8f05b2aeee822c68892610cbf1aee97741e62f0b2fd2d4261d_prof);

    }

    public function getTemplateName()
    {
        return "KnpPaginatorBundle:Pagination:materialize_pagination.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  159 => 83,  151 => 77,  143 => 72,  140 => 71,  138 => 70,  135 => 69,  127 => 63,  119 => 58,  116 => 57,  114 => 56,  111 => 55,  105 => 54,  99 => 51,  96 => 50,  88 => 47,  85 => 46,  82 => 45,  78 => 44,  75 => 43,  67 => 37,  59 => 32,  56 => 31,  54 => 30,  51 => 29,  43 => 23,  35 => 18,  32 => 17,  30 => 16,  27 => 15,  25 => 14,  22 => 13,);
    }
}
/* {#*/
/* /***/
/*  * @file*/
/*  * Materialize pagination control implementation.*/
/*  **/
/*  * View that can be used with the pagination module*/
/*  * from the Materialize CSS*/
/*  * https://materializecss.com/pagination.html*/
/*  **/
/*  * @author Leonardo Bressan Motyczka <leomoty@gmail.com>*/
/*  *//* */
/* #}*/
/* */
/* {% if pageCount > 1 %}*/
/*     <ul class="pagination">*/
/*         {% if first is defined and current != first %}*/
/*             <li class="waves-effect">*/
/*                 <a href="{{ path(route, query|merge({(pageParameterName): first})) }}">*/
/*                     <i class="material-icons">first_page</i>*/
/*                 </a>*/
/*             </li>*/
/*         {% else %}*/
/*             <li class="disabled">*/
/*                 <a href="#!">*/
/*                     <i class="material-icons">first_page</i>*/
/*                 </a>*/
/*             </li>*/
/*         {% endif %}*/
/* */
/*         {% if previous is defined %}*/
/*             <li class="waves-effect">*/
/*                 <a href="{{ path(route, query|merge({(pageParameterName): previous})) }}">*/
/*                     <i class="material-icons">chevron_left</i>*/
/*                 </a>*/
/*             </li>*/
/*         {% else %}*/
/*             <li class="disabled">*/
/*                 <a href="#!">*/
/*                     <i class="material-icons">chevron_left</i>*/
/*                 </a>*/
/*             </li>*/
/*         {% endif %}*/
/* */
/*         {% for page in pagesInRange %}*/
/*             {% if page != current %}*/
/*                 <li class="waves-effect">*/
/*                     <a href="{{ path(route, query|merge({(pageParameterName): page})) }}">{{ page }}</a>*/
/*                 </li>*/
/*             {% else %}*/
/*                 <li class="active">*/
/*                     <a href="#!">{{ page }}</a>*/
/*                 </li>*/
/*             {% endif %}*/
/*         {% endfor %}*/
/* */
/*         {% if next is defined %}*/
/*             <li class="waves-effect">*/
/*                 <a href="{{ path(route, query|merge({(pageParameterName): next})) }}">*/
/*                     <i class="material-icons">chevron_right</i>*/
/*                 </a>*/
/*             </li>*/
/*         {% else %}*/
/*             <li class="disabled">*/
/*                 <a href="#!">*/
/*                     <i class="material-icons">chevron_right</i>*/
/*                 </a>*/
/*             </li>*/
/*         {% endif %}*/
/* */
/*         {% if last is defined and current != last %}*/
/*             <li class="waves-effect">*/
/*                 <a href="{{ path(route, query|merge({(pageParameterName): last})) }}">*/
/*                     <i class="material-icons">last_page</i>*/
/*                 </a>*/
/*             </li>*/
/*         {% else %}*/
/*             <li class="disabled">*/
/*                 <a href="#!">*/
/*                     <i class="material-icons">last_page</i>*/
/*                 </a>*/
/*             </li>*/
/*         {% endif %}*/
/*     </ul>*/
/* {% endif %}*/
/* */
