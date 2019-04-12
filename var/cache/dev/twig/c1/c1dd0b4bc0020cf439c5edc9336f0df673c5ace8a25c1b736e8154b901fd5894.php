<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_24265624e5408a46f32d768a92d29d7f08c274998b1b2bce623308448b327eaa extends Twig_Template
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
        $__internal_476a4c50ba2f74b9e460d881f2dfafeff01f018a6f77ebae07bc5507a7439703 = $this->env->getExtension("native_profiler");
        $__internal_476a4c50ba2f74b9e460d881f2dfafeff01f018a6f77ebae07bc5507a7439703->enter($__internal_476a4c50ba2f74b9e460d881f2dfafeff01f018a6f77ebae07bc5507a7439703_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_476a4c50ba2f74b9e460d881f2dfafeff01f018a6f77ebae07bc5507a7439703->leave($__internal_476a4c50ba2f74b9e460d881f2dfafeff01f018a6f77ebae07bc5507a7439703_prof);

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
