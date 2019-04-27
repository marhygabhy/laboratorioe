<?php

/* KnpPaginatorBundle:Pagination:sortable_link.html.twig */
class __TwigTemplate_64bd321bcc3ad786ab1136bae35f37846a00ccc2d6993355ffe801b9ae8c1f6f extends Twig_Template
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
        $__internal_a973f5b46142657fee9e0cffadd5fa4c3ff1c5b4ed2e67f5a0042ad40a07e3b5 = $this->env->getExtension("native_profiler");
        $__internal_a973f5b46142657fee9e0cffadd5fa4c3ff1c5b4ed2e67f5a0042ad40a07e3b5->enter($__internal_a973f5b46142657fee9e0cffadd5fa4c3ff1c5b4ed2e67f5a0042ad40a07e3b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "KnpPaginatorBundle:Pagination:sortable_link.html.twig"));

        // line 1
        echo "<a";
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
        echo ">";
        echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : $this->getContext($context, "title")), "html", null, true);
        echo "</a>
";
        
        $__internal_a973f5b46142657fee9e0cffadd5fa4c3ff1c5b4ed2e67f5a0042ad40a07e3b5->leave($__internal_a973f5b46142657fee9e0cffadd5fa4c3ff1c5b4ed2e67f5a0042ad40a07e3b5_prof);

    }

    public function getTemplateName()
    {
        return "KnpPaginatorBundle:Pagination:sortable_link.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <a{% for attr, value in options %} {{ attr }}="{{ value }}"{% endfor %}>{{ title }}</a>*/
/* */
