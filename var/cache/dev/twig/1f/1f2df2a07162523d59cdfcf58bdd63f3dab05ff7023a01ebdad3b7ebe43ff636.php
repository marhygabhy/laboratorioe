<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_dfa977be3be0b3338ed586b4aaeb8f9d4dd05d7debc74f7a14dc214da530a004 extends Twig_Template
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
        $__internal_b53a4d0a390939da4418952d91ee24413f4da4e2fad44004c0de570a71abc244 = $this->env->getExtension("native_profiler");
        $__internal_b53a4d0a390939da4418952d91ee24413f4da4e2fad44004c0de570a71abc244->enter($__internal_b53a4d0a390939da4418952d91ee24413f4da4e2fad44004c0de570a71abc244_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_b53a4d0a390939da4418952d91ee24413f4da4e2fad44004c0de570a71abc244->leave($__internal_b53a4d0a390939da4418952d91ee24413f4da4e2fad44004c0de570a71abc244_prof);

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
