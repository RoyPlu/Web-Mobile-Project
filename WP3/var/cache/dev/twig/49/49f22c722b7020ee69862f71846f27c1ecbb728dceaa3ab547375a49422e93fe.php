<?php

/* @FOSUser/Security/login.html.twig */
class __TwigTemplate_9b79312096ba452c876ded3b2707c337e6059b3169b24f5127a196a120ce3b9a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Security/login.html.twig", 1);
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
        $__internal_b29508135603c5aaf763be0016bdaf056335be8a5f7d28d9c9171773eac283cb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b29508135603c5aaf763be0016bdaf056335be8a5f7d28d9c9171773eac283cb->enter($__internal_b29508135603c5aaf763be0016bdaf056335be8a5f7d28d9c9171773eac283cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $__internal_f5092843c845dbf34e455de1de6d320450cb6b86d056f3c72017516a422130bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f5092843c845dbf34e455de1de6d320450cb6b86d056f3c72017516a422130bd->enter($__internal_f5092843c845dbf34e455de1de6d320450cb6b86d056f3c72017516a422130bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b29508135603c5aaf763be0016bdaf056335be8a5f7d28d9c9171773eac283cb->leave($__internal_b29508135603c5aaf763be0016bdaf056335be8a5f7d28d9c9171773eac283cb_prof);

        
        $__internal_f5092843c845dbf34e455de1de6d320450cb6b86d056f3c72017516a422130bd->leave($__internal_f5092843c845dbf34e455de1de6d320450cb6b86d056f3c72017516a422130bd_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_c0b21f938baaf0f42ccd71f490a3657e4cc42c287e7b6aaa77cae0062ef76dcd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c0b21f938baaf0f42ccd71f490a3657e4cc42c287e7b6aaa77cae0062ef76dcd->enter($__internal_c0b21f938baaf0f42ccd71f490a3657e4cc42c287e7b6aaa77cae0062ef76dcd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_ad268ba0344b45ec1b76db7ab7bc6a09f8174b37c800ed18086ce3b894e82cad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad268ba0344b45ec1b76db7ab7bc6a09f8174b37c800ed18086ce3b894e82cad->enter($__internal_ad268ba0344b45ec1b76db7ab7bc6a09f8174b37c800ed18086ce3b894e82cad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "@FOSUser/Security/login_content.html.twig");
        echo "
";
        
        $__internal_ad268ba0344b45ec1b76db7ab7bc6a09f8174b37c800ed18086ce3b894e82cad->leave($__internal_ad268ba0344b45ec1b76db7ab7bc6a09f8174b37c800ed18086ce3b894e82cad_prof);

        
        $__internal_c0b21f938baaf0f42ccd71f490a3657e4cc42c287e7b6aaa77cae0062ef76dcd->leave($__internal_c0b21f938baaf0f42ccd71f490a3657e4cc42c287e7b6aaa77cae0062ef76dcd_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Security/login.html.twig";
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
    {{ include('@FOSUser/Security/login_content.html.twig') }}
{% endblock fos_user_content %}
", "@FOSUser/Security/login.html.twig", "C:\\Users\\11500384\\Documents\\GitHub\\Web-Mobile-Project\\WP3\\app\\Resources\\FOSUserBundle\\views\\Security\\login.html.twig");
    }
}
