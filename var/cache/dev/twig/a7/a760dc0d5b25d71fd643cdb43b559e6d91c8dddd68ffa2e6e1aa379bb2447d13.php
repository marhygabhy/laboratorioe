<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_f47df960b496cd11f2040aaa5b7ef513db701e2d34b1cde49b4752e1e748fef8 extends Twig_Template
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
        $__internal_f86bb8c00ea62c5bc6fbb371f2b7f7406e1b2e170063d28169e51764f898d5fc = $this->env->getExtension("native_profiler");
        $__internal_f86bb8c00ea62c5bc6fbb371f2b7f7406e1b2e170063d28169e51764f898d5fc->enter($__internal_f86bb8c00ea62c5bc6fbb371f2b7f7406e1b2e170063d28169e51764f898d5fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_f86bb8c00ea62c5bc6fbb371f2b7f7406e1b2e170063d28169e51764f898d5fc->leave($__internal_f86bb8c00ea62c5bc6fbb371f2b7f7406e1b2e170063d28169e51764f898d5fc_prof);

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
