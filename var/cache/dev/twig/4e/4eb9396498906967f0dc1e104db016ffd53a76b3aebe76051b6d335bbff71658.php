<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_d08514bb15c1d51c643541ef4146bebac5ebddd5faa2594b7109300a3ea8a79f extends Twig_Template
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
        $__internal_ebe82b3fc5f81ebb94ac935a3dc6087cea8048b4fca173b86eb25fec66490e7f = $this->env->getExtension("native_profiler");
        $__internal_ebe82b3fc5f81ebb94ac935a3dc6087cea8048b4fca173b86eb25fec66490e7f->enter($__internal_ebe82b3fc5f81ebb94ac935a3dc6087cea8048b4fca173b86eb25fec66490e7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_ebe82b3fc5f81ebb94ac935a3dc6087cea8048b4fca173b86eb25fec66490e7f->leave($__internal_ebe82b3fc5f81ebb94ac935a3dc6087cea8048b4fca173b86eb25fec66490e7f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child) : ?>*/
/*     <?php echo $view['form']->row($child) ?>*/
/* <?php endforeach; ?>*/
/* */
