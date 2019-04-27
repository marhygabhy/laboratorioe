<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_0be77e6be60e0a747aba6a5932ac3bb4c7532879c683d026eb973f0b7fab2cf3 extends Twig_Template
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
        $__internal_b90ce94337237b5661e7d8b3b9a3e109f5da919815d36783fba0bec13a57503c = $this->env->getExtension("native_profiler");
        $__internal_b90ce94337237b5661e7d8b3b9a3e109f5da919815d36783fba0bec13a57503c->enter($__internal_b90ce94337237b5661e7d8b3b9a3e109f5da919815d36783fba0bec13a57503c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_b90ce94337237b5661e7d8b3b9a3e109f5da919815d36783fba0bec13a57503c->leave($__internal_b90ce94337237b5661e7d8b3b9a3e109f5da919815d36783fba0bec13a57503c_prof);

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
