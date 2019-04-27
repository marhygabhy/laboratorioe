<?php

/* KnpPaginatorBundle:Pagination:bulma_pagination.html.twig */
class __TwigTemplate_33733a9ed8c9fdb30e4daa03a19c6bbec0330e8a2f0159ef62edf6ab8258d32b extends Twig_Template
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
        $__internal_787ee47da3cb6a514847a6d8a52dd8ff4432892afc1768c03c4da32b577584d3 = $this->env->getExtension("native_profiler");
        $__internal_787ee47da3cb6a514847a6d8a52dd8ff4432892afc1768c03c4da32b577584d3->enter($__internal_787ee47da3cb6a514847a6d8a52dd8ff4432892afc1768c03c4da32b577584d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "KnpPaginatorBundle:Pagination:bulma_pagination.html.twig"));

        // line 2
        echo "
";
        // line 3
        $context["position"] = ((array_key_exists("position", $context)) ? (_twig_default_filter((isset($context["position"]) ? $context["position"] : $this->getContext($context, "position")), "left")) : ("left"));
        // line 4
        $context["rounded"] = ((array_key_exists("rounded", $context)) ? (_twig_default_filter((isset($context["rounded"]) ? $context["rounded"] : $this->getContext($context, "rounded")), false)) : (false));
        // line 5
        $context["size"] = ((array_key_exists("size", $context)) ? (_twig_default_filter((isset($context["size"]) ? $context["size"] : $this->getContext($context, "size")), null)) : (null));
        // line 6
        echo "
";
        // line 7
        $context["classes"] = array(0 => "pagination");
        // line 8
        echo "
";
        // line 9
        if (((isset($context["position"]) ? $context["position"] : $this->getContext($context, "position")) != "left")) {
            $context["classes"] = twig_array_merge((isset($context["classes"]) ? $context["classes"] : $this->getContext($context, "classes")), array(0 => ("is-" . (isset($context["position"]) ? $context["position"] : $this->getContext($context, "position")))));
        }
        // line 10
        if ((isset($context["rounded"]) ? $context["rounded"] : $this->getContext($context, "rounded"))) {
            $context["classes"] = twig_array_merge((isset($context["classes"]) ? $context["classes"] : $this->getContext($context, "classes")), array(0 => "is-rounded"));
        }
        // line 11
        if (((isset($context["size"]) ? $context["size"] : $this->getContext($context, "size")) != null)) {
            $context["classes"] = twig_array_merge((isset($context["classes"]) ? $context["classes"] : $this->getContext($context, "classes")), array(0 => ("is-" . (isset($context["size"]) ? $context["size"] : $this->getContext($context, "size")))));
        }
        // line 12
        echo "
";
        // line 13
        if (((isset($context["pageCount"]) ? $context["pageCount"] : $this->getContext($context, "pageCount")) > 1)) {
            // line 14
            echo "    <nav class=\"";
            echo twig_escape_filter($this->env, twig_join_filter((isset($context["classes"]) ? $context["classes"] : $this->getContext($context, "classes")), " "), "html", null, true);
            echo "\" role=\"navigation\" aria-label=\"pagination\">
        ";
            // line 15
            if (array_key_exists("previous", $context)) {
                // line 16
                echo "            <a class=\"pagination-previous\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath((isset($context["route"]) ? $context["route"] : $this->getContext($context, "route")), twig_array_merge((isset($context["query"]) ? $context["query"] : $this->getContext($context, "query")), array((isset($context["pageParameterName"]) ? $context["pageParameterName"] : $this->getContext($context, "pageParameterName")) => (isset($context["previous"]) ? $context["previous"] : $this->getContext($context, "previous"))))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label_previous", array(), "KnpPaginatorBundle"), "html", null, true);
                echo "</a>
        ";
            } else {
                // line 18
                echo "            <a class=\"pagination-previous\" disabled>";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label_previous", array(), "KnpPaginatorBundle"), "html", null, true);
                echo "</a>
        ";
            }
            // line 20
            echo "
        ";
            // line 21
            if (array_key_exists("next", $context)) {
                // line 22
                echo "            <a class=\"pagination-next\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath((isset($context["route"]) ? $context["route"] : $this->getContext($context, "route")), twig_array_merge((isset($context["query"]) ? $context["query"] : $this->getContext($context, "query")), array((isset($context["pageParameterName"]) ? $context["pageParameterName"] : $this->getContext($context, "pageParameterName")) => (isset($context["next"]) ? $context["next"] : $this->getContext($context, "next"))))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label_next", array(), "KnpPaginatorBundle"), "html", null, true);
                echo "</a>
        ";
            } else {
                // line 24
                echo "            <a class=\"pagination-next\" disabled>";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label_next", array(), "KnpPaginatorBundle"), "html", null, true);
                echo "</a>
        ";
            }
            // line 26
            echo "
        <ul class=\"pagination-list\">
            <li>
                ";
            // line 29
            if (((isset($context["current"]) ? $context["current"] : $this->getContext($context, "current")) == (isset($context["first"]) ? $context["first"] : $this->getContext($context, "first")))) {
                // line 30
                echo "                    <a class=\"pagination-link is-current\" aria-label=\"Page ";
                echo twig_escape_filter($this->env, (isset($context["current"]) ? $context["current"] : $this->getContext($context, "current")), "html", null, true);
                echo "\" aria-current=\"page\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath((isset($context["route"]) ? $context["route"] : $this->getContext($context, "route")), twig_array_merge((isset($context["query"]) ? $context["query"] : $this->getContext($context, "query")), array((isset($context["pageParameterName"]) ? $context["pageParameterName"] : $this->getContext($context, "pageParameterName")) => (isset($context["first"]) ? $context["first"] : $this->getContext($context, "first"))))), "html", null, true);
                echo "\">1</a>
                ";
            } else {
                // line 32
                echo "                    <a class=\"pagination-link\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath((isset($context["route"]) ? $context["route"] : $this->getContext($context, "route")), twig_array_merge((isset($context["query"]) ? $context["query"] : $this->getContext($context, "query")), array((isset($context["pageParameterName"]) ? $context["pageParameterName"] : $this->getContext($context, "pageParameterName")) => (isset($context["first"]) ? $context["first"] : $this->getContext($context, "first"))))), "html", null, true);
                echo "\">1</a>
                ";
            }
            // line 34
            echo "            </li>

            ";
            // line 36
            if ((($this->getAttribute((isset($context["pagesInRange"]) ? $context["pagesInRange"] : $this->getContext($context, "pagesInRange")), 0, array(), "array") - (isset($context["first"]) ? $context["first"] : $this->getContext($context, "first"))) >= 2)) {
                // line 37
                echo "                <li>
                    <span class=\"pagination-ellipsis\">&hellip;</span>
                </li>
            ";
            }
            // line 41
            echo "
            ";
            // line 42
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["pagesInRange"]) ? $context["pagesInRange"] : $this->getContext($context, "pagesInRange")));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 43
                echo "                ";
                if ((((isset($context["first"]) ? $context["first"] : $this->getContext($context, "first")) != $context["page"]) && ($context["page"] != (isset($context["last"]) ? $context["last"] : $this->getContext($context, "last"))))) {
                    // line 44
                    echo "                    <li>
                        ";
                    // line 45
                    if (($context["page"] == (isset($context["current"]) ? $context["current"] : $this->getContext($context, "current")))) {
                        // line 46
                        echo "                            <a class=\"pagination-link is-current\" aria-label=\"Page ";
                        echo twig_escape_filter($this->env, (isset($context["current"]) ? $context["current"] : $this->getContext($context, "current")), "html", null, true);
                        echo "\" aria-current=\"page\" href=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath((isset($context["route"]) ? $context["route"] : $this->getContext($context, "route")), twig_array_merge((isset($context["query"]) ? $context["query"] : $this->getContext($context, "query")), array((isset($context["pageParameterName"]) ? $context["pageParameterName"] : $this->getContext($context, "pageParameterName")) => $context["page"]))), "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, $context["page"], "html", null, true);
                        echo "</a>
                        ";
                    } else {
                        // line 48
                        echo "                            <a class=\"pagination-link\" aria-label=\"Goto page ";
                        echo twig_escape_filter($this->env, $context["page"], "html", null, true);
                        echo "\" href=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath((isset($context["route"]) ? $context["route"] : $this->getContext($context, "route")), twig_array_merge((isset($context["query"]) ? $context["query"] : $this->getContext($context, "query")), array((isset($context["pageParameterName"]) ? $context["pageParameterName"] : $this->getContext($context, "pageParameterName")) => $context["page"]))), "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, $context["page"], "html", null, true);
                        echo "</a>
                        ";
                    }
                    // line 50
                    echo "                    </li>
                ";
                }
                // line 52
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 53
            echo "
            ";
            // line 54
            if ((((isset($context["last"]) ? $context["last"] : $this->getContext($context, "last")) - $this->getAttribute((isset($context["pagesInRange"]) ? $context["pagesInRange"] : $this->getContext($context, "pagesInRange")), (twig_length_filter($this->env, (isset($context["pagesInRange"]) ? $context["pagesInRange"] : $this->getContext($context, "pagesInRange"))) - 1), array(), "array")) >= 2)) {
                // line 55
                echo "                <li>
                    <span class=\"pagination-ellipsis\">&hellip;</span>
                </li>
            ";
            }
            // line 59
            echo "
            <li>
                ";
            // line 61
            if (((isset($context["current"]) ? $context["current"] : $this->getContext($context, "current")) == (isset($context["last"]) ? $context["last"] : $this->getContext($context, "last")))) {
                // line 62
                echo "                    <a class=\"pagination-link is-current\" aria-label=\"Page ";
                echo twig_escape_filter($this->env, (isset($context["current"]) ? $context["current"] : $this->getContext($context, "current")), "html", null, true);
                echo "\" aria-current=\"page\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath((isset($context["route"]) ? $context["route"] : $this->getContext($context, "route")), twig_array_merge((isset($context["query"]) ? $context["query"] : $this->getContext($context, "query")), array((isset($context["pageParameterName"]) ? $context["pageParameterName"] : $this->getContext($context, "pageParameterName")) => (isset($context["last"]) ? $context["last"] : $this->getContext($context, "last"))))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, (isset($context["last"]) ? $context["last"] : $this->getContext($context, "last")), "html", null, true);
                echo "</a>
                ";
            } else {
                // line 64
                echo "                    <a class=\"pagination-link\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath((isset($context["route"]) ? $context["route"] : $this->getContext($context, "route")), twig_array_merge((isset($context["query"]) ? $context["query"] : $this->getContext($context, "query")), array((isset($context["pageParameterName"]) ? $context["pageParameterName"] : $this->getContext($context, "pageParameterName")) => (isset($context["last"]) ? $context["last"] : $this->getContext($context, "last"))))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, (isset($context["last"]) ? $context["last"] : $this->getContext($context, "last")), "html", null, true);
                echo "</a>
                ";
            }
            // line 66
            echo "            </li>
        </ul>
    </nav>
";
        }
        
        $__internal_787ee47da3cb6a514847a6d8a52dd8ff4432892afc1768c03c4da32b577584d3->leave($__internal_787ee47da3cb6a514847a6d8a52dd8ff4432892afc1768c03c4da32b577584d3_prof);

    }

    public function getTemplateName()
    {
        return "KnpPaginatorBundle:Pagination:bulma_pagination.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  209 => 66,  201 => 64,  191 => 62,  189 => 61,  185 => 59,  179 => 55,  177 => 54,  174 => 53,  168 => 52,  164 => 50,  154 => 48,  144 => 46,  142 => 45,  139 => 44,  136 => 43,  132 => 42,  129 => 41,  123 => 37,  121 => 36,  117 => 34,  111 => 32,  103 => 30,  101 => 29,  96 => 26,  90 => 24,  82 => 22,  80 => 21,  77 => 20,  71 => 18,  63 => 16,  61 => 15,  56 => 14,  54 => 13,  51 => 12,  47 => 11,  43 => 10,  39 => 9,  36 => 8,  34 => 7,  31 => 6,  29 => 5,  27 => 4,  25 => 3,  22 => 2,);
    }
}
/* {# bulma Sliding pagination control implementation #}*/
/* */
/* {% set position = position|default('left') %}*/
/* {% set rounded = rounded|default(false) %}*/
/* {% set size = size|default(null) %}*/
/* */
/* {% set classes = ['pagination'] %}*/
/* */
/* {% if position != 'left' %}{% set classes = classes|merge(['is-' ~ position]) %}{% endif %}*/
/* {% if rounded %}{% set classes = classes|merge(['is-rounded']) %}{% endif %}*/
/* {% if size != null %}{% set classes = classes|merge(['is-' ~ size]) %}{% endif %}*/
/* */
/* {% if pageCount > 1 %}*/
/*     <nav class="{{ classes|join(' ') }}" role="navigation" aria-label="pagination">*/
/*         {% if previous is defined %}*/
/*             <a class="pagination-previous" href="{{ path(route, query|merge({(pageParameterName): previous})) }}">{{ 'label_previous'|trans({}, 'KnpPaginatorBundle') }}</a>*/
/*         {% else %}*/
/*             <a class="pagination-previous" disabled>{{ 'label_previous'|trans({}, 'KnpPaginatorBundle') }}</a>*/
/*         {% endif %}*/
/* */
/*         {% if next is defined %}*/
/*             <a class="pagination-next" href="{{ path(route, query|merge({(pageParameterName): next})) }}">{{ 'label_next'|trans({}, 'KnpPaginatorBundle') }}</a>*/
/*         {% else %}*/
/*             <a class="pagination-next" disabled>{{ 'label_next'|trans({}, 'KnpPaginatorBundle') }}</a>*/
/*         {% endif %}*/
/* */
/*         <ul class="pagination-list">*/
/*             <li>*/
/*                 {% if current == first %}*/
/*                     <a class="pagination-link is-current" aria-label="Page {{ current }}" aria-current="page" href="{{ path(route, query|merge({(pageParameterName): first})) }}">1</a>*/
/*                 {% else %}*/
/*                     <a class="pagination-link" href="{{ path(route, query|merge({(pageParameterName): first})) }}">1</a>*/
/*                 {% endif %}*/
/*             </li>*/
/* */
/*             {% if pagesInRange[0] - first >= 2 %}*/
/*                 <li>*/
/*                     <span class="pagination-ellipsis">&hellip;</span>*/
/*                 </li>*/
/*             {% endif %}*/
/* */
/*             {% for page in pagesInRange %}*/
/*                 {% if first != page and page != last %}*/
/*                     <li>*/
/*                         {% if page == current %}*/
/*                             <a class="pagination-link is-current" aria-label="Page {{ current }}" aria-current="page" href="{{ path(route, query|merge({(pageParameterName): page})) }}">{{ page }}</a>*/
/*                         {% else %}*/
/*                             <a class="pagination-link" aria-label="Goto page {{ page }}" href="{{ path(route, query|merge({(pageParameterName): page})) }}">{{ page }}</a>*/
/*                         {% endif %}*/
/*                     </li>*/
/*                 {% endif %}*/
/*             {% endfor %}*/
/* */
/*             {% if last - pagesInRange[pagesInRange|length - 1] >= 2 %}*/
/*                 <li>*/
/*                     <span class="pagination-ellipsis">&hellip;</span>*/
/*                 </li>*/
/*             {% endif %}*/
/* */
/*             <li>*/
/*                 {% if current == last %}*/
/*                     <a class="pagination-link is-current" aria-label="Page {{ current }}" aria-current="page" href="{{ path(route, query|merge({(pageParameterName): last})) }}">{{ last }}</a>*/
/*                 {% else %}*/
/*                     <a class="pagination-link" href="{{ path(route, query|merge({(pageParameterName): last})) }}">{{ last }}</a>*/
/*                 {% endif %}*/
/*             </li>*/
/*         </ul>*/
/*     </nav>*/
/* {% endif %}*/
/* */
