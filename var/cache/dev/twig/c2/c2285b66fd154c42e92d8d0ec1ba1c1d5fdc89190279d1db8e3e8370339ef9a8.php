<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_b8aa7653d80fdc1f3718b822d4181d8cc43d7e71f1d86d68845749f5b69481d9 extends Twig_Template
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
        $__internal_a53eb5ee43cad22a345509c8cbac3300cf31fb900c10bb64a742b88018237521 = $this->env->getExtension("native_profiler");
        $__internal_a53eb5ee43cad22a345509c8cbac3300cf31fb900c10bb64a742b88018237521->enter($__internal_a53eb5ee43cad22a345509c8cbac3300cf31fb900c10bb64a742b88018237521_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_a53eb5ee43cad22a345509c8cbac3300cf31fb900c10bb64a742b88018237521->leave($__internal_a53eb5ee43cad22a345509c8cbac3300cf31fb900c10bb64a742b88018237521_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($expanded): ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_expanded') ?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_collapsed') ?>*/
/* <?php endif ?>*/
/* */
