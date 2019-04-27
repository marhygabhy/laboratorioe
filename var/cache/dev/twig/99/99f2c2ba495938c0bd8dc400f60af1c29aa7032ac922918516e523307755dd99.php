<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_30b848ecc5509ac910a52c9a2c49f10e882a81848f0fb5637f7dee6cd111da33 extends Twig_Template
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
        $__internal_bda8c8ff3f07f06cefa7547a6911e7bf43836f25e605890f7b54637458364347 = $this->env->getExtension("native_profiler");
        $__internal_bda8c8ff3f07f06cefa7547a6911e7bf43836f25e605890f7b54637458364347->enter($__internal_bda8c8ff3f07f06cefa7547a6911e7bf43836f25e605890f7b54637458364347_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_bda8c8ff3f07f06cefa7547a6911e7bf43836f25e605890f7b54637458364347->leave($__internal_bda8c8ff3f07f06cefa7547a6911e7bf43836f25e605890f7b54637458364347_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="<?php echo isset($type) ? $view->escape($type) : 'text' ?>" <?php echo $view['form']->block($form, 'widget_attributes') ?><?php if (!empty($value) || is_numeric($value)): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?> />*/
/* */
