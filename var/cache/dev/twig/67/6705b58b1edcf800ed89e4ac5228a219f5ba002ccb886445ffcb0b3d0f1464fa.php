<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_b68b28fe4ba60917df891573c1c2b616bdc4278bbe5adce4432a148361d1c915 extends Twig_Template
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
        $__internal_87014626250ac8fc1743c18ab798e5de1167c0668837806104901aede18bd4d1 = $this->env->getExtension("native_profiler");
        $__internal_87014626250ac8fc1743c18ab798e5de1167c0668837806104901aede18bd4d1->enter($__internal_87014626250ac8fc1743c18ab798e5de1167c0668837806104901aede18bd4d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_87014626250ac8fc1743c18ab798e5de1167c0668837806104901aede18bd4d1->leave($__internal_87014626250ac8fc1743c18ab798e5de1167c0668837806104901aede18bd4d1_prof);

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
