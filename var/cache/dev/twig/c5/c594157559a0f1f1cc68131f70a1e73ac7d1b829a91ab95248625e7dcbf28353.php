<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_6b09c9db7bec17f323d3684a37c2774e4a3599b399acb8f1ab322382128d226c extends Twig_Template
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
        $__internal_e69dd47359c0ffee115b979ff57e29c97879f24ae0e40393ea3481b366751ed0 = $this->env->getExtension("native_profiler");
        $__internal_e69dd47359c0ffee115b979ff57e29c97879f24ae0e40393ea3481b366751ed0->enter($__internal_e69dd47359c0ffee115b979ff57e29c97879f24ae0e40393ea3481b366751ed0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_e69dd47359c0ffee115b979ff57e29c97879f24ae0e40393ea3481b366751ed0->leave($__internal_e69dd47359c0ffee115b979ff57e29c97879f24ae0e40393ea3481b366751ed0_prof);

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
