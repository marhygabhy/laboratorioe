<?php

/* solicitud/solicitud */
class __TwigTemplate_30f1096bc29dd94a73ec14073947c5d152801adea07bec4ca371503460f76a74 extends Twig_Template
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
        $__internal_04e588705a16c8c22e03a0834670f6ce4b111c9b25b20edcc33b37f4ff1c8661 = $this->env->getExtension("native_profiler");
        $__internal_04e588705a16c8c22e03a0834670f6ce4b111c9b25b20edcc33b37f4ff1c8661->enter($__internal_04e588705a16c8c22e03a0834670f6ce4b111c9b25b20edcc33b37f4ff1c8661_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "solicitud/solicitud"));

        // line 1
        echo "<tr>
                <td><a href=\"";
        // line 2
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("solicitud_show", array("id" => $this->getAttribute((isset($context["solicitud"]) ? $context["solicitud"] : $this->getContext($context, "solicitud")), "id", array()))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["solicitud"]) ? $context["solicitud"] : $this->getContext($context, "solicitud")), "id", array()), "html", null, true);
        echo "</a></td>
                <td>
                    <a href=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("solicitud_show", array("id" => $this->getAttribute((isset($context["solicitud"]) ? $context["solicitud"] : $this->getContext($context, "solicitud")), "id", array()))), "html", null, true);
        echo "\">
                       <button type=\"button\" class=\"btn btn-sm btn-warning\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"\" data-original-title=\"Ver\">  <i class=\"fa fa-eye\"></i>  </button>
                    </a>
                    <a href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("solicitud_edit", array("id" => $this->getAttribute((isset($context["solicitud"]) ? $context["solicitud"] : $this->getContext($context, "solicitud")), "id", array()))), "html", null, true);
        echo "\">
                       <button type=\"button\" class=\"btn btn-sm btn-success\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"\" data-original-title=\"Editar\">  <i class=\"fa fa-pencil\"></i>  </button>
                    </a>
                </td>
            </tr>";
        
        $__internal_04e588705a16c8c22e03a0834670f6ce4b111c9b25b20edcc33b37f4ff1c8661->leave($__internal_04e588705a16c8c22e03a0834670f6ce4b111c9b25b20edcc33b37f4ff1c8661_prof);

    }

    public function getTemplateName()
    {
        return "solicitud/solicitud";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 7,  32 => 4,  25 => 2,  22 => 1,);
    }
}
/* <tr>*/
/*                 <td><a href="{{ path('solicitud_show', { 'id': solicitud.id }) }}">{{ solicitud.id }}</a></td>*/
/*                 <td>*/
/*                     <a href="{{ path('solicitud_show', { 'id': solicitud.id }) }}">*/
/*                        <button type="button" class="btn btn-sm btn-warning" data-toggle="tooltip" data-placement="top" title="" data-original-title="Ver">  <i class="fa fa-eye"></i>  </button>*/
/*                     </a>*/
/*                     <a href="{{ path('solicitud_edit', { 'id': solicitud.id }) }}">*/
/*                        <button type="button" class="btn btn-sm btn-success" data-toggle="tooltip" data-placement="top" title="" data-original-title="Editar">  <i class="fa fa-pencil"></i>  </button>*/
/*                     </a>*/
/*                 </td>*/
/*             </tr>*/
