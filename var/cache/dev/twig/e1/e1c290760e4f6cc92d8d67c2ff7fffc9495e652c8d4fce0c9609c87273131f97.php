<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_22cc48a6b5d20c3cb1f101a8e678c155e4ec77a8229c29c0ba5ca8f1ec5abf89 extends Twig_Template
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
        $__internal_c657e9426b3a3a40fad7391ca609dd5a9ce6f673be1a668ec4027e2c2c1307e3 = $this->env->getExtension("native_profiler");
        $__internal_c657e9426b3a3a40fad7391ca609dd5a9ce6f673be1a668ec4027e2c2c1307e3->enter($__internal_c657e9426b3a3a40fad7391ca609dd5a9ce6f673be1a668ec4027e2c2c1307e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_c657e9426b3a3a40fad7391ca609dd5a9ce6f673be1a668ec4027e2c2c1307e3->leave($__internal_c657e9426b3a3a40fad7391ca609dd5a9ce6f673be1a668ec4027e2c2c1307e3_prof);

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
