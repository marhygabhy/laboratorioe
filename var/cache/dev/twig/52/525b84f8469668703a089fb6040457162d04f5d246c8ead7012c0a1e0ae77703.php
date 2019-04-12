<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_23a2d72388ff0f324f325f95186e5c3f0fcacf8361a8ceb5d70824fe7d4d5422 extends Twig_Template
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
        $__internal_3e14862d6af16a7a971f6e5680fb32ac8e00e8be6bb14d640535a24e0858cb8a = $this->env->getExtension("native_profiler");
        $__internal_3e14862d6af16a7a971f6e5680fb32ac8e00e8be6bb14d640535a24e0858cb8a->enter($__internal_3e14862d6af16a7a971f6e5680fb32ac8e00e8be6bb14d640535a24e0858cb8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
";
        
        $__internal_3e14862d6af16a7a971f6e5680fb32ac8e00e8be6bb14d640535a24e0858cb8a->leave($__internal_3e14862d6af16a7a971f6e5680fb32ac8e00e8be6bb14d640535a24e0858cb8a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <table <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <tr>*/
/*         <td colspan="2">*/
/*             <?php echo $view['form']->errors($form) ?>*/
/*         </td>*/
/*     </tr>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </table>*/
/* */
