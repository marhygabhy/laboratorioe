<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_33ec9be430d1f873c2f2b14f4c758a2a46f2b0e841c1462a0b4229afe2fe4ff0 extends Twig_Template
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
        $__internal_ad35e123831b9158b57ea4c2cae3fee7862a1e431d778879b268d03b5bd89887 = $this->env->getExtension("native_profiler");
        $__internal_ad35e123831b9158b57ea4c2cae3fee7862a1e431d778879b268d03b5bd89887->enter($__internal_ad35e123831b9158b57ea4c2cae3fee7862a1e431d778879b268d03b5bd89887_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_ad35e123831b9158b57ea4c2cae3fee7862a1e431d778879b268d03b5bd89887->leave($__internal_ad35e123831b9158b57ea4c2cae3fee7862a1e431d778879b268d03b5bd89887_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="radio"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     value="<?php echo $view->escape($value) ?>"*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
