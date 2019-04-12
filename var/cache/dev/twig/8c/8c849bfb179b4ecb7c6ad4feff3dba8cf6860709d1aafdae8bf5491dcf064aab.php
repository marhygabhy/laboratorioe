<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_8cbb0e3023cb9450f6c050ba87dde95703dc26161b1f8adab55bf0fd3b7042fe extends Twig_Template
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
        $__internal_84729c26f3d34ccd79f4fc596813d58d170157016e319effc511109887dd9bfc = $this->env->getExtension("native_profiler");
        $__internal_84729c26f3d34ccd79f4fc596813d58d170157016e319effc511109887dd9bfc->enter($__internal_84729c26f3d34ccd79f4fc596813d58d170157016e319effc511109887dd9bfc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_84729c26f3d34ccd79f4fc596813d58d170157016e319effc511109887dd9bfc->leave($__internal_84729c26f3d34ccd79f4fc596813d58d170157016e319effc511109887dd9bfc_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
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
/* {{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}*/
/* */
