<?php

/* @FOSUser/Resetting/check_email.html.twig */
class __TwigTemplate_135c1c453fa0c3797435c4b23ed2c6cf8ffefa7ea099f036364ca2f9afe3388d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Resetting/check_email.html.twig", 1);
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
        $__internal_27ae2d73478e6854ec6477c7fded16301ac9dc2822d797f81c4346fc5ef4d357 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_27ae2d73478e6854ec6477c7fded16301ac9dc2822d797f81c4346fc5ef4d357->enter($__internal_27ae2d73478e6854ec6477c7fded16301ac9dc2822d797f81c4346fc5ef4d357_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/check_email.html.twig"));

        $__internal_9aac4a802f9d7c4c8a50cc04bdd5ba7efbc11100597ad35a73fc4bebf5c460c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9aac4a802f9d7c4c8a50cc04bdd5ba7efbc11100597ad35a73fc4bebf5c460c9->enter($__internal_9aac4a802f9d7c4c8a50cc04bdd5ba7efbc11100597ad35a73fc4bebf5c460c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_27ae2d73478e6854ec6477c7fded16301ac9dc2822d797f81c4346fc5ef4d357->leave($__internal_27ae2d73478e6854ec6477c7fded16301ac9dc2822d797f81c4346fc5ef4d357_prof);

        
        $__internal_9aac4a802f9d7c4c8a50cc04bdd5ba7efbc11100597ad35a73fc4bebf5c460c9->leave($__internal_9aac4a802f9d7c4c8a50cc04bdd5ba7efbc11100597ad35a73fc4bebf5c460c9_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_79e829f3e9352d1b91f7b09f20221fb9ae88051151728fbc60de0e076e349ab4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_79e829f3e9352d1b91f7b09f20221fb9ae88051151728fbc60de0e076e349ab4->enter($__internal_79e829f3e9352d1b91f7b09f20221fb9ae88051151728fbc60de0e076e349ab4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_0c32402d9fb6ddac34155df3d75b82c187c71b69ea23e9b4db5e43c4c69eeb99 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0c32402d9fb6ddac34155df3d75b82c187c71b69ea23e9b4db5e43c4c69eeb99->enter($__internal_0c32402d9fb6ddac34155df3d75b82c187c71b69ea23e9b4db5e43c4c69eeb99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo nl2br(twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.check_email", array("%tokenLifetime%" => ($context["tokenLifetime"] ?? $this->getContext($context, "tokenLifetime"))), "FOSUserBundle"), "html", null, true));
        echo "
</p>
";
        
        $__internal_0c32402d9fb6ddac34155df3d75b82c187c71b69ea23e9b4db5e43c4c69eeb99->leave($__internal_0c32402d9fb6ddac34155df3d75b82c187c71b69ea23e9b4db5e43c4c69eeb99_prof);

        
        $__internal_79e829f3e9352d1b91f7b09f20221fb9ae88051151728fbc60de0e076e349ab4->leave($__internal_79e829f3e9352d1b91f7b09f20221fb9ae88051151728fbc60de0e076e349ab4_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/check_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 7,  49 => 6,  40 => 5,  11 => 1,);
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
<p>
{{ 'resetting.check_email'|trans({'%tokenLifetime%': tokenLifetime})|nl2br }}
</p>
{% endblock %}
", "@FOSUser/Resetting/check_email.html.twig", "C:\\Users\\11500384\\Documents\\GitHub\\Web-Mobile-Project\\WP3\\app\\Resources\\FOSUserBundle\\views\\Resetting\\check_email.html.twig");
    }
}
