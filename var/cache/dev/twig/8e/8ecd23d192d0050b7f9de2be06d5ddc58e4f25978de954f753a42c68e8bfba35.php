<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_a336aba3cdccf97d462ff3a8dbbba61f1895db099c49059eac8faa504a677de0 extends Twig_Template
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
        $__internal_2852f14bfbc93b217e47ad3cd36a34ea5245064bcb21f9eb136dafdfaeac7945 = $this->env->getExtension("native_profiler");
        $__internal_2852f14bfbc93b217e47ad3cd36a34ea5245064bcb21f9eb136dafdfaeac7945->enter($__internal_2852f14bfbc93b217e47ad3cd36a34ea5245064bcb21f9eb136dafdfaeac7945_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_2852f14bfbc93b217e47ad3cd36a34ea5245064bcb21f9eb136dafdfaeac7945->leave($__internal_2852f14bfbc93b217e47ad3cd36a34ea5245064bcb21f9eb136dafdfaeac7945_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr style="display: none">*/
/*     <td colspan="2">*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */
