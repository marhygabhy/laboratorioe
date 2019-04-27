<?php

/* KnpPaginatorBundle:Pagination:font_awesome_sortable_link.html.twig */
class __TwigTemplate_1413bcc4664cc9e497cc34e71d3c777089a689dffd44ab4cb539e8fcd42415d9 extends Twig_Template
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
        $__internal_d49c4d37bb2e11316ad92f013a02674bccea3992ed4a7db672d9a923978fd7f2 = $this->env->getExtension("native_profiler");
        $__internal_d49c4d37bb2e11316ad92f013a02674bccea3992ed4a7db672d9a923978fd7f2->enter($__internal_d49c4d37bb2e11316ad92f013a02674bccea3992ed4a7db672d9a923978fd7f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "KnpPaginatorBundle:Pagination:font_awesome_sortable_link.html.twig"));

        // line 9
        echo "
<a";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")));
        foreach ($context['_seq'] as $context["attr"] => $context["value"]) {
            echo " ";
            echo twig_escape_filter($this->env, $context["attr"], "html", null, true);
            echo "=\"";
            echo twig_escape_filter($this->env, $context["value"], "html", null, true);
            echo "\"";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attr'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo ">
    <span class=\"float-right\">
        ";
        // line 12
        if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "sort"), "method") == (isset($context["key"]) ? $context["key"] : $this->getContext($context, "key")))) {
            // line 13
            echo "            ";
            if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "direction"), "method") == "desc")) {
                // line 14
                echo "                <i class=\"fa fa-sort-down\"></i>
            ";
            } else {
                // line 16
                echo "                <i class=\"fa fa-sort-up\"></i>
            ";
            }
            // line 18
            echo "        ";
        } else {
            // line 19
            echo "            <i class=\"fa fa-sort\"></i>
        ";
        }
        // line 21
        echo "    </span>
    ";
        // line 22
        echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : $this->getContext($context, "title")), "html", null, true);
        echo "
</a>
";
        
        $__internal_d49c4d37bb2e11316ad92f013a02674bccea3992ed4a7db672d9a923978fd7f2->leave($__internal_d49c4d37bb2e11316ad92f013a02674bccea3992ed4a7db672d9a923978fd7f2_prof);

    }

    public function getTemplateName()
    {
        return "KnpPaginatorBundle:Pagination:font_awesome_sortable_link.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 22,  61 => 21,  57 => 19,  54 => 18,  50 => 16,  46 => 14,  43 => 13,  41 => 12,  25 => 10,  22 => 9,);
    }
}
/* {#*/
/* /***/
/*  * @file*/
/*  * Font Awesome Sorting control implementation.*/
/*  **/
/*  * @author Rodrigo Régis Palmeira <regisbsb@gmail.com>*/
/*  *//* */
/* #}*/
/* */
/* <a{% for attr, value  in options %} {{ attr }}="{{ value }}"{% endfor %}>*/
/*     <span class="float-right">*/
/*         {% if app.request.get('sort') == key %}*/
/*             {% if app.request.get('direction') == 'desc' %}*/
/*                 <i class="fa fa-sort-down"></i>*/
/*             {% else %}*/
/*                 <i class="fa fa-sort-up"></i>*/
/*             {% endif %}*/
/*         {% else %}*/
/*             <i class="fa fa-sort"></i>*/
/*         {% endif %}*/
/*     </span>*/
/*     {{ title }}*/
/* </a>*/
/* */
