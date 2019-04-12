<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_84de94f3d80b00ebd9bdac0ca1cc2f0d46f829fa868dbfafddbffc8143acf710 extends Twig_Template
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
        $__internal_b4b5f3257800f2a51dd2da077be8b48b9542da7389ffaba5dd0cb59a2837b74d = $this->env->getExtension("native_profiler");
        $__internal_b4b5f3257800f2a51dd2da077be8b48b9542da7389ffaba5dd0cb59a2837b74d->enter($__internal_b4b5f3257800f2a51dd2da077be8b48b9542da7389ffaba5dd0cb59a2837b74d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_b4b5f3257800f2a51dd2da077be8b48b9542da7389ffaba5dd0cb59a2837b74d->leave($__internal_b4b5f3257800f2a51dd2da077be8b48b9542da7389ffaba5dd0cb59a2837b74d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr>*/
/*     <td>*/
/*         <?php echo $view['form']->label($form) ?>*/
/*     </td>*/
/*     <td>*/
/*         <?php echo $view['form']->errors($form) ?>*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */
