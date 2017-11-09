<?php

/* @FOSUser/Registration/email.txt.twig */
class __TwigTemplate_809d4957bd0f32be72851c0dd63f49407d3d32faf2a08fa08a628857f75d9f3f extends Twig_Template
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
        $__internal_02809fb9ebd9b711fe2b4bdd425795197119f1583ed8849e42937e0ae97336e2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_02809fb9ebd9b711fe2b4bdd425795197119f1583ed8849e42937e0ae97336e2->enter($__internal_02809fb9ebd9b711fe2b4bdd425795197119f1583ed8849e42937e0ae97336e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/email.txt.twig"));

        $__internal_af5c680281da3b8b4c96944d5ee84d584d8bc1024b00d4ce5efa754687808987 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_af5c680281da3b8b4c96944d5ee84d584d8bc1024b00d4ce5efa754687808987->enter($__internal_af5c680281da3b8b4c96944d5ee84d584d8bc1024b00d4ce5efa754687808987_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_02809fb9ebd9b711fe2b4bdd425795197119f1583ed8849e42937e0ae97336e2->leave($__internal_02809fb9ebd9b711fe2b4bdd425795197119f1583ed8849e42937e0ae97336e2_prof);

        
        $__internal_af5c680281da3b8b4c96944d5ee84d584d8bc1024b00d4ce5efa754687808987->leave($__internal_af5c680281da3b8b4c96944d5ee84d584d8bc1024b00d4ce5efa754687808987_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_c19bf1f66018f7bdc83c2606054694a8e60f87f3b1716cf8b740f23154650f22 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c19bf1f66018f7bdc83c2606054694a8e60f87f3b1716cf8b740f23154650f22->enter($__internal_c19bf1f66018f7bdc83c2606054694a8e60f87f3b1716cf8b740f23154650f22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_138414b34518403f3599280aa06f00f03ea85d0eae9f8cf388c9c8f29e4148de = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_138414b34518403f3599280aa06f00f03ea85d0eae9f8cf388c9c8f29e4148de->enter($__internal_138414b34518403f3599280aa06f00f03ea85d0eae9f8cf388c9c8f29e4148de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.subject", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => ($context["confirmationUrl"] ?? $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        
        $__internal_138414b34518403f3599280aa06f00f03ea85d0eae9f8cf388c9c8f29e4148de->leave($__internal_138414b34518403f3599280aa06f00f03ea85d0eae9f8cf388c9c8f29e4148de_prof);

        
        $__internal_c19bf1f66018f7bdc83c2606054694a8e60f87f3b1716cf8b740f23154650f22->leave($__internal_c19bf1f66018f7bdc83c2606054694a8e60f87f3b1716cf8b740f23154650f22_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_de2cd2373ef995f171dff3a353858a774c77cd1c7c8c167f7c36353cc8988922 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_de2cd2373ef995f171dff3a353858a774c77cd1c7c8c167f7c36353cc8988922->enter($__internal_de2cd2373ef995f171dff3a353858a774c77cd1c7c8c167f7c36353cc8988922_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_a09edc76096dc5c03b563bb17b576ddef3410598ae019e34671822ce5c635d0c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a09edc76096dc5c03b563bb17b576ddef3410598ae019e34671822ce5c635d0c->enter($__internal_a09edc76096dc5c03b563bb17b576ddef3410598ae019e34671822ce5c635d0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.message", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => ($context["confirmationUrl"] ?? $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_a09edc76096dc5c03b563bb17b576ddef3410598ae019e34671822ce5c635d0c->leave($__internal_a09edc76096dc5c03b563bb17b576ddef3410598ae019e34671822ce5c635d0c_prof);

        
        $__internal_de2cd2373ef995f171dff3a353858a774c77cd1c7c8c167f7c36353cc8988922->leave($__internal_de2cd2373ef995f171dff3a353858a774c77cd1c7c8c167f7c36353cc8988922_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_03b5c5e331bfbced5455093532d1da349fab5fa1889bdd64814090c4d2f9b1fe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_03b5c5e331bfbced5455093532d1da349fab5fa1889bdd64814090c4d2f9b1fe->enter($__internal_03b5c5e331bfbced5455093532d1da349fab5fa1889bdd64814090c4d2f9b1fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_5ec51caad23da5da1fa4fa7230b6b07ae585d568a444af3fd964897a0dac38ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5ec51caad23da5da1fa4fa7230b6b07ae585d568a444af3fd964897a0dac38ab->enter($__internal_5ec51caad23da5da1fa4fa7230b6b07ae585d568a444af3fd964897a0dac38ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_5ec51caad23da5da1fa4fa7230b6b07ae585d568a444af3fd964897a0dac38ab->leave($__internal_5ec51caad23da5da1fa4fa7230b6b07ae585d568a444af3fd964897a0dac38ab_prof);

        
        $__internal_03b5c5e331bfbced5455093532d1da349fab5fa1889bdd64814090c4d2f9b1fe->leave($__internal_03b5c5e331bfbced5455093532d1da349fab5fa1889bdd64814090c4d2f9b1fe_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/email.txt.twig";
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
{{ 'registration.email.subject'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{%- endautoescape -%}
{% endblock %}

{% block body_text %}
{% autoescape false %}
{{ 'registration.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{% endautoescape %}
{% endblock %}
{% block body_html %}{% endblock %}
", "@FOSUser/Registration/email.txt.twig", "C:\\Users\\11500384\\Documents\\GitHub\\Web-Mobile-Project\\WP3\\app\\Resources\\FOSUserBundle\\views\\Registration\\email.txt.twig");
    }
}
