<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_38f805284c7e09d739a1b8eb7464340155c6826235b3f002627403f97c2ed859 extends Twig_Template
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
        $__internal_489323726cead42b8d064fc2bbcad5ab97156766a69af8332df3309e737f7650 = $this->env->getExtension("native_profiler");
        $__internal_489323726cead42b8d064fc2bbcad5ab97156766a69af8332df3309e737f7650->enter($__internal_489323726cead42b8d064fc2bbcad5ab97156766a69af8332df3309e737f7650_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_489323726cead42b8d064fc2bbcad5ab97156766a69af8332df3309e737f7650->leave($__internal_489323726cead42b8d064fc2bbcad5ab97156766a69af8332df3309e737f7650_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php echo str_replace('{{ widget }}', $view['form']->block($form, 'form_widget_simple'), $money_pattern) ?>*/
/* */
