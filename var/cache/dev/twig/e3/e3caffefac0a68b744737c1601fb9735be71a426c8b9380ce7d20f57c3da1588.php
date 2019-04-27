<?php

/* :user:new.html.twig */
class __TwigTemplate_2a75b83d8646656bfc0fa09ac96fdab649921adde67ccb9bd4cc3077b64de650 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":user:new.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_837d40ad619df98f949b34040ed346c33ef5b4318c4c0b67d67f2f9fb8a71550 = $this->env->getExtension("native_profiler");
        $__internal_837d40ad619df98f949b34040ed346c33ef5b4318c4c0b67d67f2f9fb8a71550->enter($__internal_837d40ad619df98f949b34040ed346c33ef5b4318c4c0b67d67f2f9fb8a71550_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":user:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_837d40ad619df98f949b34040ed346c33ef5b4318c4c0b67d67f2f9fb8a71550->leave($__internal_837d40ad619df98f949b34040ed346c33ef5b4318c4c0b67d67f2f9fb8a71550_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_531e7f703e336ce8af24c951facaa8fc02c1777d3e1e5685de193c87afa87a2e = $this->env->getExtension("native_profiler");
        $__internal_531e7f703e336ce8af24c951facaa8fc02c1777d3e1e5685de193c87afa87a2e->enter($__internal_531e7f703e336ce8af24c951facaa8fc02c1777d3e1e5685de193c87afa87a2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        $this->displayParentBlock("body", $context, $blocks);
        echo "
        <div class=\"main container\">
            <div class=\"row well\">
                <div class=\"col-md-6\">
                    <div class=\"page-header\">
                        <h2 align=\"center\">Crear Usuario</h2>
                    </div>
                    ";
        // line 11
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("novalidate" => "novalidate", "role" => "form")));
        echo "
                    <fieldset>
                        <div class=\"form-group\">
                            ";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username", array()), 'label');
        echo "
                            ";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Nombre de Usuario")));
        echo "
                            <span class=\"text-danger\">";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username", array()), 'errors');
        echo "</span>

                        </div>
        
                        <div class=\"form-group\">
                            ";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "firstName", array()), 'label');
        echo "
                            ";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "firstName", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Tu nombre")));
        echo "
                            <span class=\"text-danger\">";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "firstName", array()), 'errors');
        echo "</span>
                        </div>
                
                        <div class=\"form-group\">
                            ";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "lastName", array()), 'label');
        echo "
                            ";
        // line 28
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "lastName", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Tu apellido")));
        echo "
                            <span class=\"text-danger\">";
        // line 29
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "lastName", array()), 'errors');
        echo "</span>
                        </div>
                
                        <div class=\"form-group\">
                            ";
        // line 33
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'label');
        echo "
                            ";
        // line 34
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Tu correo")));
        echo "
                            <span class=\"text-danger\">";
        // line 35
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'errors');
        echo "</span>
                        </div>

                        <div class=\"form-group\">
                            ";
        // line 39
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "password", array()), "first", array()), 'label');
        echo "
                            ";
        // line 40
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "password", array()), "first", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Tu clave")));
        echo "
                            <span class=\"text-danger\">";
        // line 41
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "password", array()), "first", array()), 'errors');
        echo "</span>
                        </div>

                        <div class=\"form-group\">
                            ";
        // line 45
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "password", array()), "second", array()), 'label');
        echo "
                            ";
        // line 46
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "password", array()), "second", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Repita su clave")));
        echo "
                            <span class=\"text-danger\">";
        // line 47
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "password", array()), "second", array()), 'errors');
        echo "</span>
                        </div>

                        <div class=\"form-group\">
                            ";
        // line 51
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "pais", array()), 'label');
        echo "
                            ";
        // line 52
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "pais", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                            <span class=\"text-danger\">";
        // line 53
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "pais", array()), 'errors');
        echo "</span>
                        </div>
                        <input type=\"hidden\" name=\"role\" value=\"";
        // line 55
        echo "ROLE_USER";
        echo "\">
                        <input type=\"hidden\" name=\"is_active\" value=\"";
        // line 56
        echo "1";
        echo "\">
                
                    </fieldset>
                    <table>
                        <tr>
                            <th>             
                                <input type=\"submit\" value=\"Crear\" class=\"btn btn-sm btn-primary\"/>                      
                            </th> 
                            <th>
                                ";
        // line 65
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
                                <a href=\"";
        // line 66
        echo $this->env->getExtension('routing')->getPath("index");
        echo "\" class=\"btn btn-sm btn-success\">Volver</a>
                            </th> 
                        <tr> 
                    </table>       
                </div>
            </div>
        </div>
";
        
        $__internal_531e7f703e336ce8af24c951facaa8fc02c1777d3e1e5685de193c87afa87a2e->leave($__internal_531e7f703e336ce8af24c951facaa8fc02c1777d3e1e5685de193c87afa87a2e_prof);

    }

    public function getTemplateName()
    {
        return ":user:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  180 => 66,  176 => 65,  164 => 56,  160 => 55,  155 => 53,  151 => 52,  147 => 51,  140 => 47,  136 => 46,  132 => 45,  125 => 41,  121 => 40,  117 => 39,  110 => 35,  106 => 34,  102 => 33,  95 => 29,  91 => 28,  87 => 27,  80 => 23,  76 => 22,  72 => 21,  64 => 16,  60 => 15,  56 => 14,  50 => 11,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/* {{ parent() }}*/
/*         <div class="main container">*/
/*             <div class="row well">*/
/*                 <div class="col-md-6">*/
/*                     <div class="page-header">*/
/*                         <h2 align="center">Crear Usuario</h2>*/
/*                     </div>*/
/*                     {{ form_start(form, {'attr' : {'novalidate' : 'novalidate', 'role' : 'form'}}) }}*/
/*                     <fieldset>*/
/*                         <div class="form-group">*/
/*                             {{ form_label(form.username) }}*/
/*                             {{ form_widget(form.username, {'attr' : {'class': 'form-control', 'placeholder': 'Nombre de Usuario'}}) }}*/
/*                             <span class="text-danger">{{ form_errors(form.username) }}</span>*/
/* */
/*                         </div>*/
/*         */
/*                         <div class="form-group">*/
/*                             {{ form_label(form.firstName) }}*/
/*                             {{ form_widget(form.firstName, {'attr': {'class': 'form-control', 'placeholder' : 'Tu nombre'}}) }}*/
/*                             <span class="text-danger">{{ form_errors(form.firstName) }}</span>*/
/*                         </div>*/
/*                 */
/*                         <div class="form-group">*/
/*                             {{ form_label(form.lastName) }}*/
/*                             {{ form_widget(form.lastName, {'attr': {'class': 'form-control', 'placeholder' : 'Tu apellido'}}) }}*/
/*                             <span class="text-danger">{{ form_errors(form.lastName) }}</span>*/
/*                         </div>*/
/*                 */
/*                         <div class="form-group">*/
/*                             {{ form_label(form.email) }}*/
/*                             {{ form_widget(form.email, {'attr': {'class': 'form-control', 'placeholder' : 'Tu correo'}}) }}*/
/*                             <span class="text-danger">{{ form_errors(form.email) }}</span>*/
/*                         </div>*/
/* */
/*                         <div class="form-group">*/
/*                             {{ form_label(form.password.first) }}*/
/*                             {{ form_widget(form.password.first, {'attr': {'class': 'form-control', 'placeholder' : 'Tu clave'}}) }}*/
/*                             <span class="text-danger">{{ form_errors(form.password.first) }}</span>*/
/*                         </div>*/
/* */
/*                         <div class="form-group">*/
/*                             {{ form_label(form.password.second) }}*/
/*                             {{ form_widget(form.password.second, {'attr': {'class': 'form-control', 'placeholder' : 'Repita su clave'}}) }}*/
/*                             <span class="text-danger">{{ form_errors(form.password.second) }}</span>*/
/*                         </div>*/
/* */
/*                         <div class="form-group">*/
/*                             {{ form_label(form.pais) }}*/
/*                             {{ form_widget(form.pais, {'attr': {'class': 'form-control'}}) }}*/
/*                             <span class="text-danger">{{ form_errors(form.pais) }}</span>*/
/*                         </div>*/
/*                         <input type="hidden" name="role" value="{{'ROLE_USER'}}">*/
/*                         <input type="hidden" name="is_active" value="{{'1'}}">*/
/*                 */
/*                     </fieldset>*/
/*                     <table>*/
/*                         <tr>*/
/*                             <th>             */
/*                                 <input type="submit" value="Crear" class="btn btn-sm btn-primary"/>                      */
/*                             </th> */
/*                             <th>*/
/*                                 {{ form_end(form) }}*/
/*                                 <a href="{{ path('index') }}" class="btn btn-sm btn-success">Volver</a>*/
/*                             </th> */
/*                         <tr> */
/*                     </table>       */
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/* {% endblock %}*/
/* */
