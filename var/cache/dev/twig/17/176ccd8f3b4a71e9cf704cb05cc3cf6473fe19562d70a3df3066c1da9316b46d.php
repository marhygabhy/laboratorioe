<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_789cb714232cfceccd816e701bce00b51c1f671709a17ab699ee6b3600bdc69c extends Twig_Template
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
        $__internal_245d396d0141b28c773925db6cbabca99897fb6635199ff6b608240d86a47f1f = $this->env->getExtension("native_profiler");
        $__internal_245d396d0141b28c773925db6cbabca99897fb6635199ff6b608240d86a47f1f->enter($__internal_245d396d0141b28c773925db6cbabca99897fb6635199ff6b608240d86a47f1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_245d396d0141b28c773925db6cbabca99897fb6635199ff6b608240d86a47f1f->leave($__internal_245d396d0141b28c773925db6cbabca99897fb6635199ff6b608240d86a47f1f_prof);

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
