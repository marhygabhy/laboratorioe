<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_391d00568f578fa226e5a45d81f4589e3a34504933ab3cc7c1f517beb26cd178 extends Twig_Template
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
        $__internal_563bb688b05bcf2f999d7071a302e10e79a5a9958794fdc2dd35ff571f8fce4f = $this->env->getExtension("native_profiler");
        $__internal_563bb688b05bcf2f999d7071a302e10e79a5a9958794fdc2dd35ff571f8fce4f->enter($__internal_563bb688b05bcf2f999d7071a302e10e79a5a9958794fdc2dd35ff571f8fce4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_563bb688b05bcf2f999d7071a302e10e79a5a9958794fdc2dd35ff571f8fce4f->leave($__internal_563bb688b05bcf2f999d7071a302e10e79a5a9958794fdc2dd35ff571f8fce4f_prof);

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
