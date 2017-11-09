<?php

/* FOSUserBundle:Resetting:check_email.html.twig */
class __TwigTemplate_6d7a18a72b3cc617cca8184f0147dae61630c1588bbd6e14f01b68b2adfce8c7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Resetting:check_email.html.twig", 1);
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
        $__internal_93d846c96a043c34885a49f03231c29988b1e0ed8e7490fd5e6357b0ca6957da = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_93d846c96a043c34885a49f03231c29988b1e0ed8e7490fd5e6357b0ca6957da->enter($__internal_93d846c96a043c34885a49f03231c29988b1e0ed8e7490fd5e6357b0ca6957da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:check_email.html.twig"));

        $__internal_397bf7b655a490fc007680d5abc6305f3aa17da90f307f0a89fe16446d44959d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_397bf7b655a490fc007680d5abc6305f3aa17da90f307f0a89fe16446d44959d->enter($__internal_397bf7b655a490fc007680d5abc6305f3aa17da90f307f0a89fe16446d44959d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_93d846c96a043c34885a49f03231c29988b1e0ed8e7490fd5e6357b0ca6957da->leave($__internal_93d846c96a043c34885a49f03231c29988b1e0ed8e7490fd5e6357b0ca6957da_prof);

        
        $__internal_397bf7b655a490fc007680d5abc6305f3aa17da90f307f0a89fe16446d44959d->leave($__internal_397bf7b655a490fc007680d5abc6305f3aa17da90f307f0a89fe16446d44959d_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_932718ca1204618d3127a32c0a6df7f91c09703294dd84932084ce38e3c65a99 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_932718ca1204618d3127a32c0a6df7f91c09703294dd84932084ce38e3c65a99->enter($__internal_932718ca1204618d3127a32c0a6df7f91c09703294dd84932084ce38e3c65a99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_40764fa706b62436e71d544ad26741ec7c3cd4eb2875315266d98da4346e11fd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_40764fa706b62436e71d544ad26741ec7c3cd4eb2875315266d98da4346e11fd->enter($__internal_40764fa706b62436e71d544ad26741ec7c3cd4eb2875315266d98da4346e11fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo nl2br(twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.check_email", array("%tokenLifetime%" => ($context["tokenLifetime"] ?? $this->getContext($context, "tokenLifetime"))), "FOSUserBundle"), "html", null, true));
        echo "
</p>
";
        
        $__internal_40764fa706b62436e71d544ad26741ec7c3cd4eb2875315266d98da4346e11fd->leave($__internal_40764fa706b62436e71d544ad26741ec7c3cd4eb2875315266d98da4346e11fd_prof);

        
        $__internal_932718ca1204618d3127a32c0a6df7f91c09703294dd84932084ce38e3c65a99->leave($__internal_932718ca1204618d3127a32c0a6df7f91c09703294dd84932084ce38e3c65a99_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:check_email.html.twig";
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
", "FOSUserBundle:Resetting:check_email.html.twig", "C:\\Users\\11500384\\Documents\\GitHub\\Web-Mobile-Project\\WP3\\app/Resources/FOSUserBundle/views/Resetting/check_email.html.twig");
    }
}
