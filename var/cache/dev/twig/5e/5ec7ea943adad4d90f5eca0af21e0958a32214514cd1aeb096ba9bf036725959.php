<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_9a00607bda05d8dbbd4a13745d76996c6adecdb20344ebbb27cf4f031d8626fa extends Twig_Template
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
        $__internal_79b7c198947d975325689250a4662065cf4e240c737d44ce6cc909675d98ddc4 = $this->env->getExtension("native_profiler");
        $__internal_79b7c198947d975325689250a4662065cf4e240c737d44ce6cc909675d98ddc4->enter($__internal_79b7c198947d975325689250a4662065cf4e240c737d44ce6cc909675d98ddc4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_79b7c198947d975325689250a4662065cf4e240c737d44ce6cc909675d98ddc4->leave($__internal_79b7c198947d975325689250a4662065cf4e240c737d44ce6cc909675d98ddc4_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="checkbox"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     <?php if (strlen($value) > 0): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?>*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
