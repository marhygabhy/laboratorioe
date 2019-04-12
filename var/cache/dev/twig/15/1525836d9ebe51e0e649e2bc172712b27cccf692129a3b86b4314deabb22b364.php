<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_d9bee9685fa6d520414ab94db0102ca37acbe71dba1d807e173b19197e9e129a extends Twig_Template
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
        $__internal_e5dedf613e8aca868e648931dd93738ce4bf5746ee616fe1fdeafaf84b5031f6 = $this->env->getExtension("native_profiler");
        $__internal_e5dedf613e8aca868e648931dd93738ce4bf5746ee616fe1fdeafaf84b5031f6->enter($__internal_e5dedf613e8aca868e648931dd93738ce4bf5746ee616fe1fdeafaf84b5031f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_e5dedf613e8aca868e648931dd93738ce4bf5746ee616fe1fdeafaf84b5031f6->leave($__internal_e5dedf613e8aca868e648931dd93738ce4bf5746ee616fe1fdeafaf84b5031f6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </div>*/
/* */
