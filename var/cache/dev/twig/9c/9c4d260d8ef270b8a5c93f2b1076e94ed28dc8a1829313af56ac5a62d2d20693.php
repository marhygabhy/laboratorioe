<?php

/* KnpPaginatorBundle:Pagination:twitter_bootstrap_v3_sortable_link.html.twig */
class __TwigTemplate_524216a13d9f5b52de6c3f3975cbea05d473bc938c49e3dc2440c3bf511ed8ea extends Twig_Template
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
        $__internal_b87b015db6891367c55de7b7f6b1582dcfbe08eab69cd6513c55727d00f52822 = $this->env->getExtension("native_profiler");
        $__internal_b87b015db6891367c55de7b7f6b1582dcfbe08eab69cd6513c55727d00f52822->enter($__internal_b87b015db6891367c55de7b7f6b1582dcfbe08eab69cd6513c55727d00f52822_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "KnpPaginatorBundle:Pagination:twitter_bootstrap_v3_sortable_link.html.twig"));

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
        echo " style=\"color: #000;\">
    <span class=\"pull-right\">
        ";
        // line 12
        if ((isset($context["sorted"]) ? $context["sorted"] : $this->getContext($context, "sorted"))) {
            // line 13
            echo "            ";
            if (((isset($context["direction"]) ? $context["direction"] : $this->getContext($context, "direction")) == "desc")) {
                // line 14
                echo "                <i class=\"glyphicon glyphicon-sort-by-attributes-alt\"></i>
            ";
            } else {
                // line 16
                echo "                <i class=\"glyphicon glyphicon-sort-by-attributes\"></i>
            ";
            }
            // line 18
            echo "        ";
        } else {
            // line 19
            echo "            <i class=\"glyphicon glyphicon-sort\" style=\"color: #d2d6de;\"></i>
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
        
        $__internal_b87b015db6891367c55de7b7f6b1582dcfbe08eab69cd6513c55727d00f52822->leave($__internal_b87b015db6891367c55de7b7f6b1582dcfbe08eab69cd6513c55727d00f52822_prof);

    }

    public function getTemplateName()
    {
        return "KnpPaginatorBundle:Pagination:twitter_bootstrap_v3_sortable_link.html.twig";
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
/*  * Twitter Bootstrap v3 Sorting control implementation.*/
/*  **/
/*  * @author Afolabi Olayinka <folabiolayinka@gmail.com>*/
/*  *//* */
/* #}*/
/* */
/* <a{% for attr, value  in options %} {{ attr }}="{{ value }}"{% endfor %} style="color: #000;">*/
/*     <span class="pull-right">*/
/*         {% if sorted %}*/
/*             {% if direction == 'desc' %}*/
/*                 <i class="glyphicon glyphicon-sort-by-attributes-alt"></i>*/
/*             {% else %}*/
/*                 <i class="glyphicon glyphicon-sort-by-attributes"></i>*/
/*             {% endif %}*/
/*         {% else %}*/
/*             <i class="glyphicon glyphicon-sort" style="color: #d2d6de;"></i>*/
/*         {% endif %}*/
/*     </span>*/
/*     {{ title }}*/
/* </a>*/
/* */
