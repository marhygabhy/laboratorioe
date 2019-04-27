<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_76b1fb2c5079db273d59f610969b850b36ccb5d8c94090b9417e213280ad1ee6 extends Twig_Template
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
        $__internal_962c6a273cd2e3f03fcb95ca7d2ace9101d58bcc6585bbc34a5cfd60acf46fdf = $this->env->getExtension("native_profiler");
        $__internal_962c6a273cd2e3f03fcb95ca7d2ace9101d58bcc6585bbc34a5cfd60acf46fdf->enter($__internal_962c6a273cd2e3f03fcb95ca7d2ace9101d58bcc6585bbc34a5cfd60acf46fdf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_962c6a273cd2e3f03fcb95ca7d2ace9101d58bcc6585bbc34a5cfd60acf46fdf->leave($__internal_962c6a273cd2e3f03fcb95ca7d2ace9101d58bcc6585bbc34a5cfd60acf46fdf_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!isset($render_rest) || $render_rest): ?>*/
/* <?php echo $view['form']->rest($form) ?>*/
/* <?php endif ?>*/
/* </form>*/
/* */
