<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_2eb216c39fad1ccd892551a044b9f07469d3579690cad47cd74d15dc31a6bc89 extends Twig_Template
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
        $__internal_85c4207bfd968118df21f7cc1c4effa5ba395ff57e48a18f18cae65733f929d5 = $this->env->getExtension("native_profiler");
        $__internal_85c4207bfd968118df21f7cc1c4effa5ba395ff57e48a18f18cae65733f929d5->enter($__internal_85c4207bfd968118df21f7cc1c4effa5ba395ff57e48a18f18cae65733f929d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_85c4207bfd968118df21f7cc1c4effa5ba395ff57e48a18f18cae65733f929d5->leave($__internal_85c4207bfd968118df21f7cc1c4effa5ba395ff57e48a18f18cae65733f929d5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (count($errors) > 0): ?>*/
/*     <ul>*/
/*         <?php foreach ($errors as $error): ?>*/
/*             <li><?php echo $error->getMessage() ?></li>*/
/*         <?php endforeach; ?>*/
/*     </ul>*/
/* <?php endif ?>*/
/* */
