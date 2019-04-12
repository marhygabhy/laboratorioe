<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_a7c13d361227f444b72715230c77e3f573fab4feca5c212fe5d1bdb9d6b7168a extends Twig_Template
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
        $__internal_9bd670bda9584233e4fded63dbbe53a3dbdfd21b8a6bd9c592d0591414a365fa = $this->env->getExtension("native_profiler");
        $__internal_9bd670bda9584233e4fded63dbbe53a3dbdfd21b8a6bd9c592d0591414a365fa->enter($__internal_9bd670bda9584233e4fded63dbbe53a3dbdfd21b8a6bd9c592d0591414a365fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_9bd670bda9584233e4fded63dbbe53a3dbdfd21b8a6bd9c592d0591414a365fa->leave($__internal_9bd670bda9584233e4fded63dbbe53a3dbdfd21b8a6bd9c592d0591414a365fa_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div>*/
/*     <?php echo $view['form']->label($form) ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php echo $view['form']->widget($form) ?>*/
/* </div>*/
/* */
