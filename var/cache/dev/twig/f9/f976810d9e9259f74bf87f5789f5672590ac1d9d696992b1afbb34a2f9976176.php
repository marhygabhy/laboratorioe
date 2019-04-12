<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_354f1840ab0c3d2ecdc37a30666e57e77b6a791c2da23461d5d03a8146928681 extends Twig_Template
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
        $__internal_eb3634e2087c74ac994787ec0a32e589c2b395e87cfb6462d6c618b0515cb3c0 = $this->env->getExtension("native_profiler");
        $__internal_eb3634e2087c74ac994787ec0a32e589c2b395e87cfb6462d6c618b0515cb3c0->enter($__internal_eb3634e2087c74ac994787ec0a32e589c2b395e87cfb6462d6c618b0515cb3c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_eb3634e2087c74ac994787ec0a32e589c2b395e87cfb6462d6c618b0515cb3c0->leave($__internal_eb3634e2087c74ac994787ec0a32e589c2b395e87cfb6462d6c618b0515cb3c0_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child): ?>*/
/*     <?php if (!$child->isRendered()): ?>*/
/*         <?php echo $view['form']->row($child) ?>*/
/*     <?php endif; ?>*/
/* <?php endforeach; ?>*/
/* */
