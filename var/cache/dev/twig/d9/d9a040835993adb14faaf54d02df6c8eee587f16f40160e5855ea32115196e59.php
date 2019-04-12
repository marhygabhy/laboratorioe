<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_4a816b42034cdf569e970a99f797aad6d37e9c3e8a29e1b3d5cdef2a2f879779 extends Twig_Template
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
        $__internal_b50dd946e9d94177d38d84f4eb0f10a12e166d33b8c1467d56866cd78e683cfe = $this->env->getExtension("native_profiler");
        $__internal_b50dd946e9d94177d38d84f4eb0f10a12e166d33b8c1467d56866cd78e683cfe->enter($__internal_b50dd946e9d94177d38d84f4eb0f10a12e166d33b8c1467d56866cd78e683cfe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_b50dd946e9d94177d38d84f4eb0f10a12e166d33b8c1467d56866cd78e683cfe->leave($__internal_b50dd946e9d94177d38d84f4eb0f10a12e166d33b8c1467d56866cd78e683cfe_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($widget == 'single_text'): ?>*/
/*     <?php echo $view['form']->block($form, 'form_widget_simple'); ?>*/
/* <?php else: ?>*/
/*     <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*         <?php echo $view['form']->widget($form['date']).' '.$view['form']->widget($form['time']) ?>*/
/*     </div>*/
/* <?php endif ?>*/
/* */
