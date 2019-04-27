<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_e4358466b38aeebd4f52ad3d565b9236e3b4734b87b36d7c763b2c609d70930c extends Twig_Template
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
        $__internal_e65344dc62a7f0b9c07e134dc6cbe9f656750b8410bf4088c54380687ae9e696 = $this->env->getExtension("native_profiler");
        $__internal_e65344dc62a7f0b9c07e134dc6cbe9f656750b8410bf4088c54380687ae9e696->enter($__internal_e65344dc62a7f0b9c07e134dc6cbe9f656750b8410bf4088c54380687ae9e696_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_e65344dc62a7f0b9c07e134dc6cbe9f656750b8410bf4088c54380687ae9e696->leave($__internal_e65344dc62a7f0b9c07e134dc6cbe9f656750b8410bf4088c54380687ae9e696_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!$label) { $label = isset($label_format)*/
/*     ? strtr($label_format, array('%name%' => $name, '%id%' => $id))*/
/*     : $view['form']->humanize($name); } ?>*/
/* <button type="<?php echo isset($type) ? $view->escape($type) : 'button' ?>" <?php echo $view['form']->block($form, 'button_attributes') ?>><?php echo $view->escape(false !== $translation_domain ? $view['translator']->trans($label, array(), $translation_domain) : $label) ?></button>*/
/* */
