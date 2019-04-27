<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_7fe14a0afb758421381a9c86668f520b47bd13d5104ca4d40e7324c9f8c0823c extends Twig_Template
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
        $__internal_908adb357d5fe1a1b3d15be915d9c9fa062d933c18034a83147981efd876ec6d = $this->env->getExtension("native_profiler");
        $__internal_908adb357d5fe1a1b3d15be915d9c9fa062d933c18034a83147981efd876ec6d->enter($__internal_908adb357d5fe1a1b3d15be915d9c9fa062d933c18034a83147981efd876ec6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_908adb357d5fe1a1b3d15be915d9c9fa062d933c18034a83147981efd876ec6d->leave($__internal_908adb357d5fe1a1b3d15be915d9c9fa062d933c18034a83147981efd876ec6d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
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
/* <?php echo str_replace('{{ widget }}', $view['form']->block($form, 'form_widget_simple'), $money_pattern) ?>*/
/* */
