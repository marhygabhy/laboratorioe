<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_b844ce86b07fb0c3fbcec069673f83a176efe2645f4c64748b217e32f4f9e3d7 extends Twig_Template
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
        $__internal_abe34836a4dc787edbf1d5f144d44834452b1c914c2d17d93995cabf0af7cf5c = $this->env->getExtension("native_profiler");
        $__internal_abe34836a4dc787edbf1d5f144d44834452b1c914c2d17d93995cabf0af7cf5c->enter($__internal_abe34836a4dc787edbf1d5f144d44834452b1c914c2d17d93995cabf0af7cf5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_abe34836a4dc787edbf1d5f144d44834452b1c914c2d17d93995cabf0af7cf5c->leave($__internal_abe34836a4dc787edbf1d5f144d44834452b1c914c2d17d93995cabf0af7cf5c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="<?php echo isset($type) ? $view->escape($type) : 'text' ?>" <?php echo $view['form']->block($form, 'widget_attributes') ?><?php if (!empty($value) || is_numeric($value)): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?> />*/
/* */
