<?php

/* FOSUserBundle:ChangePassword:change_password.html.twig */
class __TwigTemplate_76b8c8d0b4b174bd16a2965bb42a59e196380238281183862680149be75f885c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:ChangePassword:change_password.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2c02df8ea4c57568fd88ba6e8d4b6e4e3c39ef59cf9749d1a979d5c22e7f2573 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2c02df8ea4c57568fd88ba6e8d4b6e4e3c39ef59cf9749d1a979d5c22e7f2573->enter($__internal_2c02df8ea4c57568fd88ba6e8d4b6e4e3c39ef59cf9749d1a979d5c22e7f2573_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:change_password.html.twig"));

        $__internal_b6c744c97ed4289706c57921fc5c1f5444f757b25c6cab741373332b36209a14 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b6c744c97ed4289706c57921fc5c1f5444f757b25c6cab741373332b36209a14->enter($__internal_b6c744c97ed4289706c57921fc5c1f5444f757b25c6cab741373332b36209a14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:change_password.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2c02df8ea4c57568fd88ba6e8d4b6e4e3c39ef59cf9749d1a979d5c22e7f2573->leave($__internal_2c02df8ea4c57568fd88ba6e8d4b6e4e3c39ef59cf9749d1a979d5c22e7f2573_prof);

        
        $__internal_b6c744c97ed4289706c57921fc5c1f5444f757b25c6cab741373332b36209a14->leave($__internal_b6c744c97ed4289706c57921fc5c1f5444f757b25c6cab741373332b36209a14_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_90087dcf0a8383f717ade257e509afb32d177e4a573db3d9125f5c5f12dfb2d2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_90087dcf0a8383f717ade257e509afb32d177e4a573db3d9125f5c5f12dfb2d2->enter($__internal_90087dcf0a8383f717ade257e509afb32d177e4a573db3d9125f5c5f12dfb2d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_829706baec759d3e6773a05175ae2b38669363bc5b2625ae4b32d55f034944ea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_829706baec759d3e6773a05175ae2b38669363bc5b2625ae4b32d55f034944ea->enter($__internal_829706baec759d3e6773a05175ae2b38669363bc5b2625ae4b32d55f034944ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/ChangePassword/change_password_content.html.twig", "FOSUserBundle:ChangePassword:change_password.html.twig", 4)->display($context);
        
        $__internal_829706baec759d3e6773a05175ae2b38669363bc5b2625ae4b32d55f034944ea->leave($__internal_829706baec759d3e6773a05175ae2b38669363bc5b2625ae4b32d55f034944ea_prof);

        
        $__internal_90087dcf0a8383f717ade257e509afb32d177e4a573db3d9125f5c5f12dfb2d2->leave($__internal_90087dcf0a8383f717ade257e509afb32d177e4a573db3d9125f5c5f12dfb2d2_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:ChangePassword:change_password.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% block fos_user_content %}
{% include \"@FOSUser/ChangePassword/change_password_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:ChangePassword:change_password.html.twig", "C:\\Users\\11500384\\Documents\\GitHub\\Web-Mobile-Project\\WP3\\app/Resources/FOSUserBundle/views/ChangePassword/change_password.html.twig");
    }
}
