<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_53991325fc494a77690c26599711c544c36a0fa56034ebb9a70996342dfb8dcc extends Twig_Template
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
        $__internal_ec5a6b4c15048e8b76f400f3944a29cd257c5fb3c6b03f0d013dfd15015574b0 = $this->env->getExtension("native_profiler");
        $__internal_ec5a6b4c15048e8b76f400f3944a29cd257c5fb3c6b03f0d013dfd15015574b0->enter($__internal_ec5a6b4c15048e8b76f400f3944a29cd257c5fb3c6b03f0d013dfd15015574b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_ec5a6b4c15048e8b76f400f3944a29cd257c5fb3c6b03f0d013dfd15015574b0->leave($__internal_ec5a6b4c15048e8b76f400f3944a29cd257c5fb3c6b03f0d013dfd15015574b0_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (isset($prototype)): ?>*/
/*     <?php $attr['data-prototype'] = $view->escape($view['form']->row($prototype)) ?>*/
/* <?php endif ?>*/
/* <?php echo $view['form']->widget($form, array('attr' => $attr)) ?>*/
/* */
