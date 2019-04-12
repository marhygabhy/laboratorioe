<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_3067eb048841b143ac1fe3635a227f081885559cefd6d77e9ba22d39d19bb506 extends Twig_Template
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
        $__internal_2fa82f0570d8dfefc423061347d9b8877a9bfee47a9f6697396f045442c80cd6 = $this->env->getExtension("native_profiler");
        $__internal_2fa82f0570d8dfefc423061347d9b8877a9bfee47a9f6697396f045442c80cd6->enter($__internal_2fa82f0570d8dfefc423061347d9b8877a9bfee47a9f6697396f045442c80cd6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_2fa82f0570d8dfefc423061347d9b8877a9bfee47a9f6697396f045442c80cd6->leave($__internal_2fa82f0570d8dfefc423061347d9b8877a9bfee47a9f6697396f045442c80cd6_prof);

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
