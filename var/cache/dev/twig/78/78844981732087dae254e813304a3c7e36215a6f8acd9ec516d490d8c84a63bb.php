<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_b85bc78c12b5d0f2a626d284351d67da0be7146ec00e46b5cf299a8cff33c78d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_56b99ca060a66f30feaab6c85602a0a9898af8a0ab0c1560f50bf05c22ea971e = $this->env->getExtension("native_profiler");
        $__internal_56b99ca060a66f30feaab6c85602a0a9898af8a0ab0c1560f50bf05c22ea971e->enter($__internal_56b99ca060a66f30feaab6c85602a0a9898af8a0ab0c1560f50bf05c22ea971e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_56b99ca060a66f30feaab6c85602a0a9898af8a0ab0c1560f50bf05c22ea971e->leave($__internal_56b99ca060a66f30feaab6c85602a0a9898af8a0ab0c1560f50bf05c22ea971e_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_eb9086fc9b69f6bc0dae5e8d38df07afa153c8b9cb2ff48c756d763f03f09d38 = $this->env->getExtension("native_profiler");
        $__internal_eb9086fc9b69f6bc0dae5e8d38df07afa153c8b9cb2ff48c756d763f03f09d38->enter($__internal_eb9086fc9b69f6bc0dae5e8d38df07afa153c8b9cb2ff48c756d763f03f09d38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_eb9086fc9b69f6bc0dae5e8d38df07afa153c8b9cb2ff48c756d763f03f09d38->leave($__internal_eb9086fc9b69f6bc0dae5e8d38df07afa153c8b9cb2ff48c756d763f03f09d38_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }
}
/* {% block panel '' %}*/
/* */
