<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_f8f6936adca7142b08ab44319c9aa8a039d9cb9a310d2ca0a1ab05e42732db06 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_aaa4eb74d6d5ac8477cb346495f422b068309ec497ea52ad164540dd55ece7f8 = $this->env->getExtension("native_profiler");
        $__internal_aaa4eb74d6d5ac8477cb346495f422b068309ec497ea52ad164540dd55ece7f8->enter($__internal_aaa4eb74d6d5ac8477cb346495f422b068309ec497ea52ad164540dd55ece7f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_aaa4eb74d6d5ac8477cb346495f422b068309ec497ea52ad164540dd55ece7f8->leave($__internal_aaa4eb74d6d5ac8477cb346495f422b068309ec497ea52ad164540dd55ece7f8_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_58df489231930bb51373e464b9a9ec482f8ca81475af1c16eea39dad207dd2a4 = $this->env->getExtension("native_profiler");
        $__internal_58df489231930bb51373e464b9a9ec482f8ca81475af1c16eea39dad207dd2a4->enter($__internal_58df489231930bb51373e464b9a9ec482f8ca81475af1c16eea39dad207dd2a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_58df489231930bb51373e464b9a9ec482f8ca81475af1c16eea39dad207dd2a4->leave($__internal_58df489231930bb51373e464b9a9ec482f8ca81475af1c16eea39dad207dd2a4_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_275bb92bd09675497edf14cc33caaf8af080a89c4f0759c534f1e0591aefe521 = $this->env->getExtension("native_profiler");
        $__internal_275bb92bd09675497edf14cc33caaf8af080a89c4f0759c534f1e0591aefe521->enter($__internal_275bb92bd09675497edf14cc33caaf8af080a89c4f0759c534f1e0591aefe521_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_275bb92bd09675497edf14cc33caaf8af080a89c4f0759c534f1e0591aefe521->leave($__internal_275bb92bd09675497edf14cc33caaf8af080a89c4f0759c534f1e0591aefe521_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_4d97d3859a5cd104f998193b8cde388efa681b6046911018465621d39595209b = $this->env->getExtension("native_profiler");
        $__internal_4d97d3859a5cd104f998193b8cde388efa681b6046911018465621d39595209b->enter($__internal_4d97d3859a5cd104f998193b8cde388efa681b6046911018465621d39595209b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_4d97d3859a5cd104f998193b8cde388efa681b6046911018465621d39595209b->leave($__internal_4d97d3859a5cd104f998193b8cde388efa681b6046911018465621d39595209b_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
