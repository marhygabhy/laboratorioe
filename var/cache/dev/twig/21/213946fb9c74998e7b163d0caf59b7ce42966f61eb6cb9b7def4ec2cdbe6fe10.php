<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_197608d024edc513a638960b99938111e956a3a8109722d83d2022b84a08eef6 extends Twig_Template
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
        $__internal_90bb2393fc834c41d3df4f2ed81b45435e24b53c5f3d9d2e8afef941d9b4ee89 = $this->env->getExtension("native_profiler");
        $__internal_90bb2393fc834c41d3df4f2ed81b45435e24b53c5f3d9d2e8afef941d9b4ee89->enter($__internal_90bb2393fc834c41d3df4f2ed81b45435e24b53c5f3d9d2e8afef941d9b4ee89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

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
        
        $__internal_90bb2393fc834c41d3df4f2ed81b45435e24b53c5f3d9d2e8afef941d9b4ee89->leave($__internal_90bb2393fc834c41d3df4f2ed81b45435e24b53c5f3d9d2e8afef941d9b4ee89_prof);

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
