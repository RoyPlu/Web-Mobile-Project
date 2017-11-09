<?php

/* FOSUserBundle:Resetting:email.txt.twig */
class __TwigTemplate_6e155d1bc5b31ffd99695883b50e75a1ff256bd74f087dd6cf9c4cf88e6c1398 extends Twig_Template
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
        $__internal_f84f24bcde5e608073c41f85941e4c55d3a9682edba6cbbb3eeb410126c788c9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f84f24bcde5e608073c41f85941e4c55d3a9682edba6cbbb3eeb410126c788c9->enter($__internal_f84f24bcde5e608073c41f85941e4c55d3a9682edba6cbbb3eeb410126c788c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        $__internal_3c7c375fc356c8bb522bea16471c500ef2e74ed3b848ff8cf835dc1651c6c0d7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c7c375fc356c8bb522bea16471c500ef2e74ed3b848ff8cf835dc1651c6c0d7->enter($__internal_3c7c375fc356c8bb522bea16471c500ef2e74ed3b848ff8cf835dc1651c6c0d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_f84f24bcde5e608073c41f85941e4c55d3a9682edba6cbbb3eeb410126c788c9->leave($__internal_f84f24bcde5e608073c41f85941e4c55d3a9682edba6cbbb3eeb410126c788c9_prof);

        
        $__internal_3c7c375fc356c8bb522bea16471c500ef2e74ed3b848ff8cf835dc1651c6c0d7->leave($__internal_3c7c375fc356c8bb522bea16471c500ef2e74ed3b848ff8cf835dc1651c6c0d7_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_f371ce13eef86f0dbb5b533b02e9aa5e4a2df9a02c256f5468a5a717188fcc65 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f371ce13eef86f0dbb5b533b02e9aa5e4a2df9a02c256f5468a5a717188fcc65->enter($__internal_f371ce13eef86f0dbb5b533b02e9aa5e4a2df9a02c256f5468a5a717188fcc65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_30957991e4a0dfce861566f6b461f2cc1b566917a382dedcb1ff1b4211a6f598 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_30957991e4a0dfce861566f6b461f2cc1b566917a382dedcb1ff1b4211a6f598->enter($__internal_30957991e4a0dfce861566f6b461f2cc1b566917a382dedcb1ff1b4211a6f598_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.subject", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        
        $__internal_30957991e4a0dfce861566f6b461f2cc1b566917a382dedcb1ff1b4211a6f598->leave($__internal_30957991e4a0dfce861566f6b461f2cc1b566917a382dedcb1ff1b4211a6f598_prof);

        
        $__internal_f371ce13eef86f0dbb5b533b02e9aa5e4a2df9a02c256f5468a5a717188fcc65->leave($__internal_f371ce13eef86f0dbb5b533b02e9aa5e4a2df9a02c256f5468a5a717188fcc65_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_7eb67862a800768c8775ee6817d2c51c6743d051526e8ae6962866339b4f53d2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7eb67862a800768c8775ee6817d2c51c6743d051526e8ae6962866339b4f53d2->enter($__internal_7eb67862a800768c8775ee6817d2c51c6743d051526e8ae6962866339b4f53d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_949a59b1fbbb45b41fc0abac570dc2ebe995adcdb6b4936ff3dd962f7c1f161e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_949a59b1fbbb45b41fc0abac570dc2ebe995adcdb6b4936ff3dd962f7c1f161e->enter($__internal_949a59b1fbbb45b41fc0abac570dc2ebe995adcdb6b4936ff3dd962f7c1f161e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.message", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => ($context["confirmationUrl"] ?? $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_949a59b1fbbb45b41fc0abac570dc2ebe995adcdb6b4936ff3dd962f7c1f161e->leave($__internal_949a59b1fbbb45b41fc0abac570dc2ebe995adcdb6b4936ff3dd962f7c1f161e_prof);

        
        $__internal_7eb67862a800768c8775ee6817d2c51c6743d051526e8ae6962866339b4f53d2->leave($__internal_7eb67862a800768c8775ee6817d2c51c6743d051526e8ae6962866339b4f53d2_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_b0eac31acb81a2cac02c60cff3cc5918b94a71ddcec4ba9dabc1d20179a38b12 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b0eac31acb81a2cac02c60cff3cc5918b94a71ddcec4ba9dabc1d20179a38b12->enter($__internal_b0eac31acb81a2cac02c60cff3cc5918b94a71ddcec4ba9dabc1d20179a38b12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_74d72619aa63eca716cc4be21ff77bd49c74a3025830a001ac076cfd58426f26 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_74d72619aa63eca716cc4be21ff77bd49c74a3025830a001ac076cfd58426f26->enter($__internal_74d72619aa63eca716cc4be21ff77bd49c74a3025830a001ac076cfd58426f26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_74d72619aa63eca716cc4be21ff77bd49c74a3025830a001ac076cfd58426f26->leave($__internal_74d72619aa63eca716cc4be21ff77bd49c74a3025830a001ac076cfd58426f26_prof);

        
        $__internal_b0eac31acb81a2cac02c60cff3cc5918b94a71ddcec4ba9dabc1d20179a38b12->leave($__internal_b0eac31acb81a2cac02c60cff3cc5918b94a71ddcec4ba9dabc1d20179a38b12_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:email.txt.twig";
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
", "FOSUserBundle:Resetting:email.txt.twig", "C:\\Users\\11500384\\Documents\\GitHub\\Web-Mobile-Project\\WP3\\app/Resources/FOSUserBundle/views/Resetting/email.txt.twig");
    }
}
