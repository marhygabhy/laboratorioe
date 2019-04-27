<?php

/* :user:edit.html.twig */
class __TwigTemplate_bf6e62e0ee3502362abcb11bf8e22b038891f452059390801e0a54d3724967bf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":user:edit.html.twig", 1);
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
        $__internal_887177afcb2995b298daad91a77bd07dd8bf55c14f225684d4fb18a4e1de2abe = $this->env->getExtension("native_profiler");
        $__internal_887177afcb2995b298daad91a77bd07dd8bf55c14f225684d4fb18a4e1de2abe->enter($__internal_887177afcb2995b298daad91a77bd07dd8bf55c14f225684d4fb18a4e1de2abe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":user:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_887177afcb2995b298daad91a77bd07dd8bf55c14f225684d4fb18a4e1de2abe->leave($__internal_887177afcb2995b298daad91a77bd07dd8bf55c14f225684d4fb18a4e1de2abe_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_333611dbbae6c8de5bf49aa44068b7d38c095dbac362cee67e1efa3d209ff6b7 = $this->env->getExtension("native_profiler");
        $__internal_333611dbbae6c8de5bf49aa44068b7d38c095dbac362cee67e1efa3d209ff6b7->enter($__internal_333611dbbae6c8de5bf49aa44068b7d38c095dbac362cee67e1efa3d209ff6b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        $this->displayParentBlock("body", $context, $blocks);
        echo "
        <div class=\"main container\">
            <div class=\"row well\">
                <div class=\"col-md-6\">
                    <div class=\"page-header\">
                        <h2>Editar Usuario</h2>
                    </div>
                    ";
        // line 11
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_start', array("attr" => array("novalidate" => "novalidate")));
        echo "
                    <fieldset>
                        <div class=\"form-group\">
                            ";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "username", array()), 'label');
        echo "
                            ";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "username", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Nombre de Usuario")));
        echo "
                            <span class=\"text-danger\">";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "username", array()), 'errors');
        echo "</span>

                        </div>
        
                        <div class=\"form-group\">
                            ";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "firstName", array()), 'label');
        echo "
                            ";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "firstName", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Tu nombre")));
        echo "
                            <span class=\"text-danger\">";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "firstName", array()), 'errors');
        echo "</span>
                        </div>
                
                        <div class=\"form-group\">
                            ";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "lastName", array()), 'label');
        echo "
                            ";
        // line 28
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "lastName", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Tu apellido")));
        echo "
                            <span class=\"text-danger\">";
        // line 29
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "lastName", array()), 'errors');
        echo "</span>
                        </div>
                
                        <div class=\"form-group\">
                            ";
        // line 33
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "email", array()), 'label');
        echo "
                            ";
        // line 34
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "email", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Tu correo")));
        echo "
                            <span class=\"text-danger\">";
        // line 35
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "email", array()), 'errors');
        echo "</span>
                        </div>
                
                        <div class=\"form-group\">
                            ";
        // line 39
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "password", array()), "first", array()), 'label');
        echo "
                            ";
        // line 40
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "password", array()), "first", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Tu clave")));
        echo "
                            <span class=\"text-danger\">";
        // line 41
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "password", array()), "first", array()), 'errors');
        echo "</span>
                        </div>

                        <div class=\"form-group\">
                            ";
        // line 45
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "password", array()), "second", array()), 'label');
        echo "
                            ";
        // line 46
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "password", array()), "second", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Repita su clave")));
        echo "
                            <span class=\"text-danger\">";
        // line 47
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "password", array()), "second", array()), 'errors');
        echo "</span>
                        </div>

                        <div class=\"form-group\">
                            ";
        // line 51
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "pais", array()), 'label');
        echo "
                            ";
        // line 52
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "pais", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                            <span class=\"text-danger\">";
        // line 53
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "pais", array()), 'errors');
        echo "</span>
                        </div>
                
                        <div class=\"form-group\">
                            ";
        // line 57
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "role", array()), 'label');
        echo "
                            ";
        // line 58
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "role", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                            <span class=\"text-danger\">";
        // line 59
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "role", array()), 'errors');
        echo "</span>
                        </div>
                
                        <div class=\"checkbox\">
                            <label>
                                ";
        // line 64
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "isActive", array()), 'widget');
        echo $this->env->getExtension('translator')->getTranslator()->trans("Activo", array(), "messages");
        // line 65
        echo "                                <span class=\"text-danger\">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "isActive", array()), 'errors');
        echo "</span>
                            </label>
                        </div>
                    </fieldset>    
                    <table>
                        <tr>
                            <th>             
                                <input type=\"submit\" value=\"Modificar\" class=\"btn btn-sm btn-primary\"/>                      
                            </th> 
                            <th>
                                ";
        // line 75
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_end');
        echo "
                                <a href=\"";
        // line 76
        echo $this->env->getExtension('routing')->getPath("user_index");
        echo "\" class=\"btn btn-sm btn-success\">Volver</a>
                            </th> 
                            <th>             
                                ";
        // line 79
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                                <input type=\"submit\" value=\"Eliminar\" class=\"btn btn-sm btn-danger btn-delete\">
                                ";
        // line 81
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
                            </th>  
                        <tr> 
                    </table>    
                </div>
            </div>
        </div>
";
        
        $__internal_333611dbbae6c8de5bf49aa44068b7d38c095dbac362cee67e1efa3d209ff6b7->leave($__internal_333611dbbae6c8de5bf49aa44068b7d38c095dbac362cee67e1efa3d209ff6b7_prof);

    }

    public function getTemplateName()
    {
        return ":user:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  210 => 81,  205 => 79,  199 => 76,  195 => 75,  181 => 65,  178 => 64,  170 => 59,  166 => 58,  162 => 57,  155 => 53,  151 => 52,  147 => 51,  140 => 47,  136 => 46,  132 => 45,  125 => 41,  121 => 40,  117 => 39,  110 => 35,  106 => 34,  102 => 33,  95 => 29,  91 => 28,  87 => 27,  80 => 23,  76 => 22,  72 => 21,  64 => 16,  60 => 15,  56 => 14,  50 => 11,  40 => 4,  34 => 3,  11 => 1,);
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
/*                         <h2>Editar Usuario</h2>*/
/*                     </div>*/
/*                     {{ form_start(edit_form, {'attr' : {'novalidate' : 'novalidate'}}) }}*/
/*                     <fieldset>*/
/*                         <div class="form-group">*/
/*                             {{ form_label(edit_form.username) }}*/
/*                             {{ form_widget(edit_form.username, {'attr' : {'class': 'form-control', 'placeholder': 'Nombre de Usuario'}}) }}*/
/*                             <span class="text-danger">{{ form_errors(edit_form.username) }}</span>*/
/* */
/*                         </div>*/
/*         */
/*                         <div class="form-group">*/
/*                             {{ form_label(edit_form.firstName) }}*/
/*                             {{ form_widget(edit_form.firstName, {'attr': {'class': 'form-control', 'placeholder' : 'Tu nombre'}}) }}*/
/*                             <span class="text-danger">{{ form_errors(edit_form.firstName) }}</span>*/
/*                         </div>*/
/*                 */
/*                         <div class="form-group">*/
/*                             {{ form_label(edit_form.lastName) }}*/
/*                             {{ form_widget(edit_form.lastName, {'attr': {'class': 'form-control', 'placeholder' : 'Tu apellido'}}) }}*/
/*                             <span class="text-danger">{{ form_errors(edit_form.lastName) }}</span>*/
/*                         </div>*/
/*                 */
/*                         <div class="form-group">*/
/*                             {{ form_label(edit_form.email) }}*/
/*                             {{ form_widget(edit_form.email, {'attr': {'class': 'form-control', 'placeholder' : 'Tu correo'}}) }}*/
/*                             <span class="text-danger">{{ form_errors(edit_form.email) }}</span>*/
/*                         </div>*/
/*                 */
/*                         <div class="form-group">*/
/*                             {{ form_label(edit_form.password.first) }}*/
/*                             {{ form_widget(edit_form.password.first, {'attr': {'class': 'form-control', 'placeholder' : 'Tu clave'}}) }}*/
/*                             <span class="text-danger">{{ form_errors(edit_form.password.first) }}</span>*/
/*                         </div>*/
/* */
/*                         <div class="form-group">*/
/*                             {{ form_label(edit_form.password.second) }}*/
/*                             {{ form_widget(edit_form.password.second, {'attr': {'class': 'form-control', 'placeholder' : 'Repita su clave'}}) }}*/
/*                             <span class="text-danger">{{ form_errors(edit_form.password.second) }}</span>*/
/*                         </div>*/
/* */
/*                         <div class="form-group">*/
/*                             {{ form_label(edit_form.pais) }}*/
/*                             {{ form_widget(edit_form.pais, {'attr': {'class': 'form-control'}}) }}*/
/*                             <span class="text-danger">{{ form_errors(edit_form.pais) }}</span>*/
/*                         </div>*/
/*                 */
/*                         <div class="form-group">*/
/*                             {{ form_label(edit_form.role) }}*/
/*                             {{ form_widget(edit_form.role, {'attr': {'class': 'form-control'}}) }}*/
/*                             <span class="text-danger">{{ form_errors(edit_form.role) }}</span>*/
/*                         </div>*/
/*                 */
/*                         <div class="checkbox">*/
/*                             <label>*/
/*                                 {{ form_widget(edit_form.isActive) }}{% trans %}Activo{% endtrans %}*/
/*                                 <span class="text-danger">{{ form_errors(edit_form.isActive) }}</span>*/
/*                             </label>*/
/*                         </div>*/
/*                     </fieldset>    */
/*                     <table>*/
/*                         <tr>*/
/*                             <th>             */
/*                                 <input type="submit" value="Modificar" class="btn btn-sm btn-primary"/>                      */
/*                             </th> */
/*                             <th>*/
/*                                 {{ form_end(edit_form) }}*/
/*                                 <a href="{{ path('user_index') }}" class="btn btn-sm btn-success">Volver</a>*/
/*                             </th> */
/*                             <th>             */
/*                                 {{ form_start(delete_form) }}*/
/*                                 <input type="submit" value="Eliminar" class="btn btn-sm btn-danger btn-delete">*/
/*                                 {{ form_end(delete_form) }}*/
/*                             </th>  */
/*                         <tr> */
/*                     </table>    */
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/* {% endblock %}*/
/* */
