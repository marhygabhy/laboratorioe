<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_f0af10b793a0fa49e7c2422ee6d7f0da2de5a075686c4c480696dde8a340adf2 extends Twig_Template
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
        $__internal_8abce1dfedd3f0261e15f334e2a690b6656b2f4c8e857d6623fd825d2e690da1 = $this->env->getExtension("native_profiler");
        $__internal_8abce1dfedd3f0261e15f334e2a690b6656b2f4c8e857d6623fd825d2e690da1->enter($__internal_8abce1dfedd3f0261e15f334e2a690b6656b2f4c8e857d6623fd825d2e690da1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_8abce1dfedd3f0261e15f334e2a690b6656b2f4c8e857d6623fd825d2e690da1->leave($__internal_8abce1dfedd3f0261e15f334e2a690b6656b2f4c8e857d6623fd825d2e690da1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <textarea <?php echo $view['form']->block($form, 'widget_attributes') ?>><?php echo $view->escape($value) ?></textarea>*/
/* */
