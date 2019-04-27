<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_847880a8db12708462a8cfe679b9a4eae3eb968a48d2a4bbd86793eb7fa33c4d extends Twig_Template
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
        $__internal_d345f56f1b156a7c5ca02d49da885d7e1cc8df1b908b49c54fbac2645aa102d8 = $this->env->getExtension("native_profiler");
        $__internal_d345f56f1b156a7c5ca02d49da885d7e1cc8df1b908b49c54fbac2645aa102d8->enter($__internal_d345f56f1b156a7c5ca02d49da885d7e1cc8df1b908b49c54fbac2645aa102d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_d345f56f1b156a7c5ca02d49da885d7e1cc8df1b908b49c54fbac2645aa102d8->leave($__internal_d345f56f1b156a7c5ca02d49da885d7e1cc8df1b908b49c54fbac2645aa102d8_prof);

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
