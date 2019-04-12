<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_e538b5357ae01633fac6198630629d10c846d90b07542715e7ad50ab878965cd extends Twig_Template
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
        $__internal_ee940153f385000362a7c4bfaac2d40973dc65f8340f6a1688fff5027f9087df = $this->env->getExtension("native_profiler");
        $__internal_ee940153f385000362a7c4bfaac2d40973dc65f8340f6a1688fff5027f9087df->enter($__internal_ee940153f385000362a7c4bfaac2d40973dc65f8340f6a1688fff5027f9087df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_ee940153f385000362a7c4bfaac2d40973dc65f8340f6a1688fff5027f9087df->leave($__internal_ee940153f385000362a7c4bfaac2d40973dc65f8340f6a1688fff5027f9087df_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($compound): ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_compound')?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_simple')?>*/
/* <?php endif ?>*/
/* */
