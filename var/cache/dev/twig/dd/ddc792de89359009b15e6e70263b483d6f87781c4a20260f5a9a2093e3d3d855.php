<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_8ade1debcaed6639ca004141d99fa1b4883c66f2cc3456778ae44c4f5a47ec93 extends Twig_Template
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
        $__internal_f1ab4b52f07fef765b4ef3ccecdef8996bd72c475f27f23d2621b0ac2579d862 = $this->env->getExtension("native_profiler");
        $__internal_f1ab4b52f07fef765b4ef3ccecdef8996bd72c475f27f23d2621b0ac2579d862->enter($__internal_f1ab4b52f07fef765b4ef3ccecdef8996bd72c475f27f23d2621b0ac2579d862_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_f1ab4b52f07fef765b4ef3ccecdef8996bd72c475f27f23d2621b0ac2579d862->leave($__internal_f1ab4b52f07fef765b4ef3ccecdef8996bd72c475f27f23d2621b0ac2579d862_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_efe2e0f8983656f3f3a6de3b2a1903293e12934735d593ce12135d1d7a01b70d = $this->env->getExtension("native_profiler");
        $__internal_efe2e0f8983656f3f3a6de3b2a1903293e12934735d593ce12135d1d7a01b70d->enter($__internal_efe2e0f8983656f3f3a6de3b2a1903293e12934735d593ce12135d1d7a01b70d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_efe2e0f8983656f3f3a6de3b2a1903293e12934735d593ce12135d1d7a01b70d->leave($__internal_efe2e0f8983656f3f3a6de3b2a1903293e12934735d593ce12135d1d7a01b70d_prof);

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
