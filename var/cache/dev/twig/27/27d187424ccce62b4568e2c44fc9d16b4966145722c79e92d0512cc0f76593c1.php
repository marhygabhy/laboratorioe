<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_f7f4fd900e8325f3af1df4e1391e9b8a7552f470103164666c544b4fba10a552 extends Twig_Template
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
        $__internal_52499dcdc08976dafc73f9ab27f20ce02f97ffc6f1f7bae82b3bbeb14c354db1 = $this->env->getExtension("native_profiler");
        $__internal_52499dcdc08976dafc73f9ab27f20ce02f97ffc6f1f7bae82b3bbeb14c354db1->enter($__internal_52499dcdc08976dafc73f9ab27f20ce02f97ffc6f1f7bae82b3bbeb14c354db1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_52499dcdc08976dafc73f9ab27f20ce02f97ffc6f1f7bae82b3bbeb14c354db1->leave($__internal_52499dcdc08976dafc73f9ab27f20ce02f97ffc6f1f7bae82b3bbeb14c354db1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/* <?php foreach ($form as $child): ?>*/
/*     <?php echo $view['form']->widget($child) ?>*/
/*     <?php echo $view['form']->label($child, null, array('translation_domain' => $choice_translation_domain)) ?>*/
/* <?php endforeach ?>*/
/* </div>*/
/* */
