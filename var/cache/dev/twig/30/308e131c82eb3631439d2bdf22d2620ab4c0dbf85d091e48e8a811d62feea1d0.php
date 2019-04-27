<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_7753f65ffedffa565d39136ca627a98ffc7c5a1d830928521efff9919795e74a extends Twig_Template
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
        $__internal_94475c3a7669c9dc691c0a83cae878512a8c8e35851daac4b01705a2abe3ad41 = $this->env->getExtension("native_profiler");
        $__internal_94475c3a7669c9dc691c0a83cae878512a8c8e35851daac4b01705a2abe3ad41->enter($__internal_94475c3a7669c9dc691c0a83cae878512a8c8e35851daac4b01705a2abe3ad41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_94475c3a7669c9dc691c0a83cae878512a8c8e35851daac4b01705a2abe3ad41->leave($__internal_94475c3a7669c9dc691c0a83cae878512a8c8e35851daac4b01705a2abe3ad41_prof);

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
