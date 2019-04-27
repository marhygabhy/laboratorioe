<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_e3aedabb19e8367c17af3310021fb07068c1d0a3d2e2185e516afebdca98f1e2 extends Twig_Template
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
        $__internal_9fb9a3cd0362c2a24ea72f8f383d3846bc52263d7262374f18f8232dae0c2536 = $this->env->getExtension("native_profiler");
        $__internal_9fb9a3cd0362c2a24ea72f8f383d3846bc52263d7262374f18f8232dae0c2536->enter($__internal_9fb9a3cd0362c2a24ea72f8f383d3846bc52263d7262374f18f8232dae0c2536_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

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
        
        $__internal_9fb9a3cd0362c2a24ea72f8f383d3846bc52263d7262374f18f8232dae0c2536->leave($__internal_9fb9a3cd0362c2a24ea72f8f383d3846bc52263d7262374f18f8232dae0c2536_prof);

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
