<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_5ebc13a7d1bd26f84cc529abc29188d2c41c31142e11da36b01936cb8e378c36 extends Twig_Template
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
        $__internal_bfaa068451a1789424f14cfe0b8fddc6c3392780cc650d4958fa5f0be7ce212b = $this->env->getExtension("native_profiler");
        $__internal_bfaa068451a1789424f14cfe0b8fddc6c3392780cc650d4958fa5f0be7ce212b->enter($__internal_bfaa068451a1789424f14cfe0b8fddc6c3392780cc650d4958fa5f0be7ce212b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_bfaa068451a1789424f14cfe0b8fddc6c3392780cc650d4958fa5f0be7ce212b->leave($__internal_bfaa068451a1789424f14cfe0b8fddc6c3392780cc650d4958fa5f0be7ce212b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child): ?>*/
/*     <?php if (!$child->isRendered()): ?>*/
/*         <?php echo $view['form']->row($child) ?>*/
/*     <?php endif; ?>*/
/* <?php endforeach; ?>*/
/* */
