<?php

/* @FOSUser/Registration/register_content.html.twig */
class __TwigTemplate_1c895e53e4151d26d4bd5fc5d117a790ea1763f7ed63c445e62c9050be2f21f1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_38db5b8023943efdd77c17fc050fbe7b0bb20dad8ff3c3a4217966ccfbbfcfe4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_38db5b8023943efdd77c17fc050fbe7b0bb20dad8ff3c3a4217966ccfbbfcfe4->enter($__internal_38db5b8023943efdd77c17fc050fbe7b0bb20dad8ff3c3a4217966ccfbbfcfe4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register_content.html.twig"));

        $__internal_6ad613c3cde15ce7dbf70276cf38d5fed619f0c4a1a828502c067eba81724396 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ad613c3cde15ce7dbf70276cf38d5fed619f0c4a1a828502c067eba81724396->enter($__internal_6ad613c3cde15ce7dbf70276cf38d5fed619f0c4a1a828502c067eba81724396_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register_content.html.twig"));

        // line 2
        echo "
";
        // line 3
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start', array("method" => "post", "action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_registration_register"), "attr" => array("class" => "fos_user_registration_register")));
        echo "
    ";
        // line 4
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
<div>
    <input type=\"submit\" value=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
</div>
";
        // line 8
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
";
        
        $__internal_38db5b8023943efdd77c17fc050fbe7b0bb20dad8ff3c3a4217966ccfbbfcfe4->leave($__internal_38db5b8023943efdd77c17fc050fbe7b0bb20dad8ff3c3a4217966ccfbbfcfe4_prof);

        
        $__internal_6ad613c3cde15ce7dbf70276cf38d5fed619f0c4a1a828502c067eba81724396->leave($__internal_6ad613c3cde15ce7dbf70276cf38d5fed619f0c4a1a828502c067eba81724396_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/register_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 8,  37 => 6,  32 => 4,  28 => 3,  25 => 2,);
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

{{ form_start(form, {'method': 'post', 'action': path('fos_user_registration_register'), 'attr': {'class': 'fos_user_registration_register'}}) }}
    {{ form_widget(form) }}
<div>
    <input type=\"submit\" value=\"{{ 'registration.submit'|trans }}\" />
</div>
{{ form_end(form) }}
", "@FOSUser/Registration/register_content.html.twig", "C:\\Users\\11500384\\Documents\\GitHub\\Web-Mobile-Project\\WP3\\app\\Resources\\FOSUserBundle\\views\\Registration\\register_content.html.twig");
    }
}
