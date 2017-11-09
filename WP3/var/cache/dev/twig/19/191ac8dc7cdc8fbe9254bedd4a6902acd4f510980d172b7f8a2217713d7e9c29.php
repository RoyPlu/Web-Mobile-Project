<?php

/* FOSUserBundle:Registration:check_email.html.twig */
class __TwigTemplate_db99e19ac4f3d5a1374080ad890ae5e1df4149202583ca516fce37bd19703416 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Registration:check_email.html.twig", 1);
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
        $__internal_16ffbcbb4605ec33066a439c837553b06c7bb120b381f57b41dd6a8621fb3456 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_16ffbcbb4605ec33066a439c837553b06c7bb120b381f57b41dd6a8621fb3456->enter($__internal_16ffbcbb4605ec33066a439c837553b06c7bb120b381f57b41dd6a8621fb3456_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:check_email.html.twig"));

        $__internal_8d593326413f8f6c5414aeda4d547326b63f5d26e665ce2cafef2d6e30585d1f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d593326413f8f6c5414aeda4d547326b63f5d26e665ce2cafef2d6e30585d1f->enter($__internal_8d593326413f8f6c5414aeda4d547326b63f5d26e665ce2cafef2d6e30585d1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_16ffbcbb4605ec33066a439c837553b06c7bb120b381f57b41dd6a8621fb3456->leave($__internal_16ffbcbb4605ec33066a439c837553b06c7bb120b381f57b41dd6a8621fb3456_prof);

        
        $__internal_8d593326413f8f6c5414aeda4d547326b63f5d26e665ce2cafef2d6e30585d1f->leave($__internal_8d593326413f8f6c5414aeda4d547326b63f5d26e665ce2cafef2d6e30585d1f_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_b31ae6ff314e6a0c512a67eabb702896d6cc168bc99e4aac0a8a352bb1aab38b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b31ae6ff314e6a0c512a67eabb702896d6cc168bc99e4aac0a8a352bb1aab38b->enter($__internal_b31ae6ff314e6a0c512a67eabb702896d6cc168bc99e4aac0a8a352bb1aab38b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_24f4275fd3e710fcd8108ffb7d8c00244ac1382846f41b31f7fabcb298c030b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_24f4275fd3e710fcd8108ffb7d8c00244ac1382846f41b31f7fabcb298c030b4->enter($__internal_24f4275fd3e710fcd8108ffb7d8c00244ac1382846f41b31f7fabcb298c030b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.check_email", array("%email%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_24f4275fd3e710fcd8108ffb7d8c00244ac1382846f41b31f7fabcb298c030b4->leave($__internal_24f4275fd3e710fcd8108ffb7d8c00244ac1382846f41b31f7fabcb298c030b4_prof);

        
        $__internal_b31ae6ff314e6a0c512a67eabb702896d6cc168bc99e4aac0a8a352bb1aab38b->leave($__internal_b31ae6ff314e6a0c512a67eabb702896d6cc168bc99e4aac0a8a352bb1aab38b_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:check_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 6,  40 => 5,  11 => 1,);
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

{% trans_default_domain 'FOSUserBundle' %}

{% block fos_user_content %}
    <p>{{ 'registration.check_email'|trans({'%email%': user.email}) }}</p>
{% endblock fos_user_content %}
", "FOSUserBundle:Registration:check_email.html.twig", "C:\\Users\\11500384\\Documents\\GitHub\\Web-Mobile-Project\\WP3\\app/Resources/FOSUserBundle/views/Registration/check_email.html.twig");
    }
}
