<?php

/* @FOSUser/Profile/edit.html.twig */
class __TwigTemplate_daafd4447b0af69dd49af826a1df87ab58285f0ba4ce8e969da84776b60f503a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Profile/edit.html.twig", 1);
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
        $__internal_70dea264b0c66c90ce11c63b46f84c7c3ad95fb5083a62d7cea38dbad660061c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_70dea264b0c66c90ce11c63b46f84c7c3ad95fb5083a62d7cea38dbad660061c->enter($__internal_70dea264b0c66c90ce11c63b46f84c7c3ad95fb5083a62d7cea38dbad660061c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/edit.html.twig"));

        $__internal_7d7280cec98b99304d662d44073c34713a595a0820a27f2cdebe3db74c24c0a6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7d7280cec98b99304d662d44073c34713a595a0820a27f2cdebe3db74c24c0a6->enter($__internal_7d7280cec98b99304d662d44073c34713a595a0820a27f2cdebe3db74c24c0a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_70dea264b0c66c90ce11c63b46f84c7c3ad95fb5083a62d7cea38dbad660061c->leave($__internal_70dea264b0c66c90ce11c63b46f84c7c3ad95fb5083a62d7cea38dbad660061c_prof);

        
        $__internal_7d7280cec98b99304d662d44073c34713a595a0820a27f2cdebe3db74c24c0a6->leave($__internal_7d7280cec98b99304d662d44073c34713a595a0820a27f2cdebe3db74c24c0a6_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_1a30e8fc57f5b0687d58a5791626265c4548327e900e0c94f630243e46f6c09f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1a30e8fc57f5b0687d58a5791626265c4548327e900e0c94f630243e46f6c09f->enter($__internal_1a30e8fc57f5b0687d58a5791626265c4548327e900e0c94f630243e46f6c09f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_6e7ece69807c010b13769a6d14db22ed90ec05569ec1e5d40d65d85307ea6d06 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e7ece69807c010b13769a6d14db22ed90ec05569ec1e5d40d65d85307ea6d06->enter($__internal_6e7ece69807c010b13769a6d14db22ed90ec05569ec1e5d40d65d85307ea6d06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/edit_content.html.twig", "@FOSUser/Profile/edit.html.twig", 4)->display($context);
        
        $__internal_6e7ece69807c010b13769a6d14db22ed90ec05569ec1e5d40d65d85307ea6d06->leave($__internal_6e7ece69807c010b13769a6d14db22ed90ec05569ec1e5d40d65d85307ea6d06_prof);

        
        $__internal_1a30e8fc57f5b0687d58a5791626265c4548327e900e0c94f630243e46f6c09f->leave($__internal_1a30e8fc57f5b0687d58a5791626265c4548327e900e0c94f630243e46f6c09f_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/edit.html.twig";
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
{% include \"@FOSUser/Profile/edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Profile/edit.html.twig", "C:\\Users\\11500384\\Documents\\GitHub\\Web-Mobile-Project\\WP3\\app\\Resources\\FOSUserBundle\\views\\Profile\\edit.html.twig");
    }
}
