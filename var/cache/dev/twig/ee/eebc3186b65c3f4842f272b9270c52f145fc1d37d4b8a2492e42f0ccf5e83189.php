<?php

/* @Framework/Form/choice_attributes.html.php */
class __TwigTemplate_1fd7c7372817ade4a7ba4dffd234bbd8118ab0f32fc7fb51ecbef926ff190cdf extends Twig_Template
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
        $__internal_15d5564dd6ce03291ea4dfa8a524d9e72554ead9f771c749ddecbcc938eaac0b = $this->env->getExtension("native_profiler");
        $__internal_15d5564dd6ce03291ea4dfa8a524d9e72554ead9f771c749ddecbcc938eaac0b->enter($__internal_15d5564dd6ce03291ea4dfa8a524d9e72554ead9f771c749ddecbcc938eaac0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"
<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
";
        
        $__internal_15d5564dd6ce03291ea4dfa8a524d9e72554ead9f771c749ddecbcc938eaac0b->leave($__internal_15d5564dd6ce03291ea4dfa8a524d9e72554ead9f771c749ddecbcc938eaac0b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* id="<?php echo $view->escape($id) ?>" name="<?php echo $view->escape($full_name) ?>"*/
/* <?php if ($disabled): ?>disabled="disabled" <?php endif ?>*/
/* <?php foreach ($choice_attr as $k => $v): ?>*/
/* <?php if ($v === true): ?>*/
/* <?php printf('%s="%s" ', $view->escape($k), $view->escape($k)) ?>*/
/* <?php elseif ($v !== false): ?>*/
/* <?php printf('%s="%s" ', $view->escape($k), $view->escape($v)) ?>*/
/* <?php endif ?>*/
/* <?php endforeach ?>*/
/* */
