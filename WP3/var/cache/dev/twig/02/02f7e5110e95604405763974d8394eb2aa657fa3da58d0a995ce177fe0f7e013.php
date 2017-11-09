<?php

/* FOSUserBundle:Profile:edit.html.twig */
class __TwigTemplate_f6d99cf43a85e51607d2ca60a70139726632fd3bec665818d9c3a3e7698cb628 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Profile:edit.html.twig", 1);
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
        $__internal_f5a0ecef32c5143835036d41cd3660fefc9628d33779a0de38dccc4d02ec52c6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f5a0ecef32c5143835036d41cd3660fefc9628d33779a0de38dccc4d02ec52c6->enter($__internal_f5a0ecef32c5143835036d41cd3660fefc9628d33779a0de38dccc4d02ec52c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $__internal_5a81469260d31bdcee5f9869fb68c7ead578466b3788c347f6847bdcc1ece79e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5a81469260d31bdcee5f9869fb68c7ead578466b3788c347f6847bdcc1ece79e->enter($__internal_5a81469260d31bdcee5f9869fb68c7ead578466b3788c347f6847bdcc1ece79e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f5a0ecef32c5143835036d41cd3660fefc9628d33779a0de38dccc4d02ec52c6->leave($__internal_f5a0ecef32c5143835036d41cd3660fefc9628d33779a0de38dccc4d02ec52c6_prof);

        
        $__internal_5a81469260d31bdcee5f9869fb68c7ead578466b3788c347f6847bdcc1ece79e->leave($__internal_5a81469260d31bdcee5f9869fb68c7ead578466b3788c347f6847bdcc1ece79e_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_ed2504195fe40a7aca409a3f3ea0fb6e79bc1ee96380fc1cf9a703e48ea5c78a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ed2504195fe40a7aca409a3f3ea0fb6e79bc1ee96380fc1cf9a703e48ea5c78a->enter($__internal_ed2504195fe40a7aca409a3f3ea0fb6e79bc1ee96380fc1cf9a703e48ea5c78a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_03881926a973cb0cbe011c0a5a24c0acda3fa4c575f599001e70e28897359e44 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_03881926a973cb0cbe011c0a5a24c0acda3fa4c575f599001e70e28897359e44->enter($__internal_03881926a973cb0cbe011c0a5a24c0acda3fa4c575f599001e70e28897359e44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 4)->display($context);
        
        $__internal_03881926a973cb0cbe011c0a5a24c0acda3fa4c575f599001e70e28897359e44->leave($__internal_03881926a973cb0cbe011c0a5a24c0acda3fa4c575f599001e70e28897359e44_prof);

        
        $__internal_ed2504195fe40a7aca409a3f3ea0fb6e79bc1ee96380fc1cf9a703e48ea5c78a->leave($__internal_ed2504195fe40a7aca409a3f3ea0fb6e79bc1ee96380fc1cf9a703e48ea5c78a_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:edit.html.twig";
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
{% include \"@FOSUser/Profile/edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Profile:edit.html.twig", "C:\\Users\\11500384\\Documents\\GitHub\\Web-Mobile-Project\\WP3\\app/Resources/FOSUserBundle/views/Profile/edit.html.twig");
    }
}
