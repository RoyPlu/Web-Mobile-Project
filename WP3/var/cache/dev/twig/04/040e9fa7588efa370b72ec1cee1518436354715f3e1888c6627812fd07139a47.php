<?php

/* FOSUserBundle:Registration:confirmed.html.twig */
class __TwigTemplate_bb265317411a8fd2c12a67ef6dc926c0141e10aa32b3f8dec095dbcdd2fa4f60 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Registration:confirmed.html.twig", 1);
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
        $__internal_bc686b7540b6a10e5d44376487b0f9bce20aa162c4a0c577b39cc8b73b2017d5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bc686b7540b6a10e5d44376487b0f9bce20aa162c4a0c577b39cc8b73b2017d5->enter($__internal_bc686b7540b6a10e5d44376487b0f9bce20aa162c4a0c577b39cc8b73b2017d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:confirmed.html.twig"));

        $__internal_3eec84c48ba294799f151299d60e82016c482d95c4061c429fa817d449f5ba89 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3eec84c48ba294799f151299d60e82016c482d95c4061c429fa817d449f5ba89->enter($__internal_3eec84c48ba294799f151299d60e82016c482d95c4061c429fa817d449f5ba89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bc686b7540b6a10e5d44376487b0f9bce20aa162c4a0c577b39cc8b73b2017d5->leave($__internal_bc686b7540b6a10e5d44376487b0f9bce20aa162c4a0c577b39cc8b73b2017d5_prof);

        
        $__internal_3eec84c48ba294799f151299d60e82016c482d95c4061c429fa817d449f5ba89->leave($__internal_3eec84c48ba294799f151299d60e82016c482d95c4061c429fa817d449f5ba89_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_7a49abf912750c0d06c16e6d06966dd1358acdb1e7c78c1d1184f345d8e8cf16 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7a49abf912750c0d06c16e6d06966dd1358acdb1e7c78c1d1184f345d8e8cf16->enter($__internal_7a49abf912750c0d06c16e6d06966dd1358acdb1e7c78c1d1184f345d8e8cf16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_1e00ca33c98dc1e45e9beb4141e4c336f62307c6177f1f19b0a05a319f3c9280 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1e00ca33c98dc1e45e9beb4141e4c336f62307c6177f1f19b0a05a319f3c9280->enter($__internal_1e00ca33c98dc1e45e9beb4141e4c336f62307c6177f1f19b0a05a319f3c9280_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.confirmed", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
    ";
        // line 7
        if (($context["targetUrl"] ?? $this->getContext($context, "targetUrl"))) {
            // line 8
            echo "    <p><a href=\"";
            echo twig_escape_filter($this->env, ($context["targetUrl"] ?? $this->getContext($context, "targetUrl")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.back", array(), "FOSUserBundle"), "html", null, true);
            echo "</a></p>
    ";
        }
        
        $__internal_1e00ca33c98dc1e45e9beb4141e4c336f62307c6177f1f19b0a05a319f3c9280->leave($__internal_1e00ca33c98dc1e45e9beb4141e4c336f62307c6177f1f19b0a05a319f3c9280_prof);

        
        $__internal_7a49abf912750c0d06c16e6d06966dd1358acdb1e7c78c1d1184f345d8e8cf16->leave($__internal_7a49abf912750c0d06c16e6d06966dd1358acdb1e7c78c1d1184f345d8e8cf16_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:confirmed.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 8,  54 => 7,  49 => 6,  40 => 5,  11 => 1,);
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
    <p>{{ 'registration.confirmed'|trans({'%username%': user.username}) }}</p>
    {% if targetUrl %}
    <p><a href=\"{{ targetUrl }}\">{{ 'registration.back'|trans }}</a></p>
    {% endif %}
{% endblock fos_user_content %}
", "FOSUserBundle:Registration:confirmed.html.twig", "C:\\Users\\11500384\\Documents\\GitHub\\Web-Mobile-Project\\WP3\\app/Resources/FOSUserBundle/views/Registration/confirmed.html.twig");
    }
}
