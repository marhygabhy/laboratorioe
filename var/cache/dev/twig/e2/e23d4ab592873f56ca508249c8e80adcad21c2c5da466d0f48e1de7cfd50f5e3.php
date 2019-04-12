<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_6b6902c41836dd2983f023441f038d1cfabc7ddda64d0ddd5ec79ac53eb18650 extends Twig_Template
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
        $__internal_a21ecea03d8b5051120ce474a6f58a34fc5e9ba3c7ffdf540775a28692fcd3a7 = $this->env->getExtension("native_profiler");
        $__internal_a21ecea03d8b5051120ce474a6f58a34fc5e9ba3c7ffdf540775a28692fcd3a7->enter($__internal_a21ecea03d8b5051120ce474a6f58a34fc5e9ba3c7ffdf540775a28692fcd3a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_a21ecea03d8b5051120ce474a6f58a34fc5e9ba3c7ffdf540775a28692fcd3a7->leave($__internal_a21ecea03d8b5051120ce474a6f58a34fc5e9ba3c7ffdf540775a28692fcd3a7_prof);

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
