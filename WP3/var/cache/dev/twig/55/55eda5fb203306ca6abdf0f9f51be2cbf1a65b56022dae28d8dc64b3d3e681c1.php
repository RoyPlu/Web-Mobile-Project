<?php

/* @FOSUser/Resetting/email.txt.twig */
class __TwigTemplate_42f45682f041a1b3548876e4af73d4e61586ee9ca241234e7daf0e391764854d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'subject' => array($this, 'block_subject'),
            'body_text' => array($this, 'block_body_text'),
            'body_html' => array($this, 'block_body_html'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4aff4ef25e52ebdcf200e07035ad50ee9890dde9f90969477cd7e8fb1cda740d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4aff4ef25e52ebdcf200e07035ad50ee9890dde9f90969477cd7e8fb1cda740d->enter($__internal_4aff4ef25e52ebdcf200e07035ad50ee9890dde9f90969477cd7e8fb1cda740d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/email.txt.twig"));

        $__internal_61c1e5207f12a7694be8a95715611a85028dde075d0582d69dff718577ddc08d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_61c1e5207f12a7694be8a95715611a85028dde075d0582d69dff718577ddc08d->enter($__internal_61c1e5207f12a7694be8a95715611a85028dde075d0582d69dff718577ddc08d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_4aff4ef25e52ebdcf200e07035ad50ee9890dde9f90969477cd7e8fb1cda740d->leave($__internal_4aff4ef25e52ebdcf200e07035ad50ee9890dde9f90969477cd7e8fb1cda740d_prof);

        
        $__internal_61c1e5207f12a7694be8a95715611a85028dde075d0582d69dff718577ddc08d->leave($__internal_61c1e5207f12a7694be8a95715611a85028dde075d0582d69dff718577ddc08d_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_befed7f08fa04c3c67f2f7bd4d2a5054d700a268faec3a7c4f20f5b6531d3b4c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_befed7f08fa04c3c67f2f7bd4d2a5054d700a268faec3a7c4f20f5b6531d3b4c->enter($__internal_befed7f08fa04c3c67f2f7bd4d2a5054d700a268faec3a7c4f20f5b6531d3b4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_a31c68379abca1ad3e68c809cf94f2614e25781e337df0e415a36003606fe324 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a31c68379abca1ad3e68c809cf94f2614e25781e337df0e415a36003606fe324->enter($__internal_a31c68379abca1ad3e68c809cf94f2614e25781e337df0e415a36003606fe324_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.subject", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        
        $__internal_a31c68379abca1ad3e68c809cf94f2614e25781e337df0e415a36003606fe324->leave($__internal_a31c68379abca1ad3e68c809cf94f2614e25781e337df0e415a36003606fe324_prof);

        
        $__internal_befed7f08fa04c3c67f2f7bd4d2a5054d700a268faec3a7c4f20f5b6531d3b4c->leave($__internal_befed7f08fa04c3c67f2f7bd4d2a5054d700a268faec3a7c4f20f5b6531d3b4c_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_0299989dc2710439873797fa21b60b9c2317a09963923d12846ff2859b949e39 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0299989dc2710439873797fa21b60b9c2317a09963923d12846ff2859b949e39->enter($__internal_0299989dc2710439873797fa21b60b9c2317a09963923d12846ff2859b949e39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_73800e62e2067f966e6b25179cf01ce5637b29cfaa88620ac47e609883b7b5fd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_73800e62e2067f966e6b25179cf01ce5637b29cfaa88620ac47e609883b7b5fd->enter($__internal_73800e62e2067f966e6b25179cf01ce5637b29cfaa88620ac47e609883b7b5fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.message", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => ($context["confirmationUrl"] ?? $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_73800e62e2067f966e6b25179cf01ce5637b29cfaa88620ac47e609883b7b5fd->leave($__internal_73800e62e2067f966e6b25179cf01ce5637b29cfaa88620ac47e609883b7b5fd_prof);

        
        $__internal_0299989dc2710439873797fa21b60b9c2317a09963923d12846ff2859b949e39->leave($__internal_0299989dc2710439873797fa21b60b9c2317a09963923d12846ff2859b949e39_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_d103f134b064759b7998e0e3046c16097e67521a5666ab76420562d6cba30dfd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d103f134b064759b7998e0e3046c16097e67521a5666ab76420562d6cba30dfd->enter($__internal_d103f134b064759b7998e0e3046c16097e67521a5666ab76420562d6cba30dfd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_44b21aaa1bc7d4f5c83e6142c5a0f896017663a985430bf76b4886727940d824 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_44b21aaa1bc7d4f5c83e6142c5a0f896017663a985430bf76b4886727940d824->enter($__internal_44b21aaa1bc7d4f5c83e6142c5a0f896017663a985430bf76b4886727940d824_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_44b21aaa1bc7d4f5c83e6142c5a0f896017663a985430bf76b4886727940d824->leave($__internal_44b21aaa1bc7d4f5c83e6142c5a0f896017663a985430bf76b4886727940d824_prof);

        
        $__internal_d103f134b064759b7998e0e3046c16097e67521a5666ab76420562d6cba30dfd->leave($__internal_d103f134b064759b7998e0e3046c16097e67521a5666ab76420562d6cba30dfd_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  85 => 13,  73 => 10,  64 => 8,  54 => 4,  45 => 2,  35 => 13,  33 => 8,  30 => 7,  28 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}
{% block subject %}
{%- autoescape false -%}
{{ 'resetting.email.subject'|trans({'%username%': user.username}) }}
{%- endautoescape -%}
{% endblock %}

{% block body_text %}
{% autoescape false %}
{{ 'resetting.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{% endautoescape %}
{% endblock %}
{% block body_html %}{% endblock %}
", "@FOSUser/Resetting/email.txt.twig", "C:\\Users\\11500384\\Documents\\GitHub\\Web-Mobile-Project\\WP3\\app\\Resources\\FOSUserBundle\\views\\Resetting\\email.txt.twig");
    }
}
