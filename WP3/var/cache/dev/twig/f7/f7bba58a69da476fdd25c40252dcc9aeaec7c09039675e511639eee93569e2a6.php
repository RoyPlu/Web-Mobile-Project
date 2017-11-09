<?php

/* @FOSUser/Group/list.html.twig */
class __TwigTemplate_c790d04f080fc39b0f182a35cc0cf7419854cdc5a8541105be46994ae7834876 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Group/list.html.twig", 1);
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
        $__internal_08f6523c37c2d3648415f847b48c194838e60744052359d673f0053565519e4d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_08f6523c37c2d3648415f847b48c194838e60744052359d673f0053565519e4d->enter($__internal_08f6523c37c2d3648415f847b48c194838e60744052359d673f0053565519e4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/list.html.twig"));

        $__internal_964a39e980acf16d32244b2331962937b515cdf971fb695fd1c286b20a4597eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_964a39e980acf16d32244b2331962937b515cdf971fb695fd1c286b20a4597eb->enter($__internal_964a39e980acf16d32244b2331962937b515cdf971fb695fd1c286b20a4597eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_08f6523c37c2d3648415f847b48c194838e60744052359d673f0053565519e4d->leave($__internal_08f6523c37c2d3648415f847b48c194838e60744052359d673f0053565519e4d_prof);

        
        $__internal_964a39e980acf16d32244b2331962937b515cdf971fb695fd1c286b20a4597eb->leave($__internal_964a39e980acf16d32244b2331962937b515cdf971fb695fd1c286b20a4597eb_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_5034a5b3f10f1283fac18a29a30a31bc4b13e5a0a83a65a6d7b22d7bbc612120 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5034a5b3f10f1283fac18a29a30a31bc4b13e5a0a83a65a6d7b22d7bbc612120->enter($__internal_5034a5b3f10f1283fac18a29a30a31bc4b13e5a0a83a65a6d7b22d7bbc612120_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_9648011f9490dd5786941262f690bec3267da671bdb0dd936c4bc8e949841e57 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9648011f9490dd5786941262f690bec3267da671bdb0dd936c4bc8e949841e57->enter($__internal_9648011f9490dd5786941262f690bec3267da671bdb0dd936c4bc8e949841e57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/list_content.html.twig", "@FOSUser/Group/list.html.twig", 4)->display($context);
        
        $__internal_9648011f9490dd5786941262f690bec3267da671bdb0dd936c4bc8e949841e57->leave($__internal_9648011f9490dd5786941262f690bec3267da671bdb0dd936c4bc8e949841e57_prof);

        
        $__internal_5034a5b3f10f1283fac18a29a30a31bc4b13e5a0a83a65a6d7b22d7bbc612120->leave($__internal_5034a5b3f10f1283fac18a29a30a31bc4b13e5a0a83a65a6d7b22d7bbc612120_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/list.html.twig";
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
{% include \"@FOSUser/Group/list_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Group/list.html.twig", "C:\\Users\\11500384\\Documents\\GitHub\\Web-Mobile-Project\\WP3\\app\\Resources\\FOSUserBundle\\views\\Group\\list.html.twig");
    }
}
