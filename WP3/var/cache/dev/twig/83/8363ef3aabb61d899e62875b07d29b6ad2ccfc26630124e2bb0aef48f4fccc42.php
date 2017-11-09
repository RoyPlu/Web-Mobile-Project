<?php

/* FOSUserBundle:Resetting:reset.html.twig */
class __TwigTemplate_59b2e1ef89fffcbd5f5b4d4188dee1c778ba91666940435acc4716ebecae6b1e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 1);
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
        $__internal_014df8c81756abab6b1fb87dc337eb51a7517d5de21909c71a7029748dab7ff8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_014df8c81756abab6b1fb87dc337eb51a7517d5de21909c71a7029748dab7ff8->enter($__internal_014df8c81756abab6b1fb87dc337eb51a7517d5de21909c71a7029748dab7ff8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $__internal_d179ec9f246f0dad5b6106aa456390c7ca4551d8cce13c83d56beedf6a480759 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d179ec9f246f0dad5b6106aa456390c7ca4551d8cce13c83d56beedf6a480759->enter($__internal_d179ec9f246f0dad5b6106aa456390c7ca4551d8cce13c83d56beedf6a480759_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_014df8c81756abab6b1fb87dc337eb51a7517d5de21909c71a7029748dab7ff8->leave($__internal_014df8c81756abab6b1fb87dc337eb51a7517d5de21909c71a7029748dab7ff8_prof);

        
        $__internal_d179ec9f246f0dad5b6106aa456390c7ca4551d8cce13c83d56beedf6a480759->leave($__internal_d179ec9f246f0dad5b6106aa456390c7ca4551d8cce13c83d56beedf6a480759_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_d74ddef1939f7dbcc9e7f08b0b254edaff5d5b8ac8aac9d411254bbb0a44fef7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d74ddef1939f7dbcc9e7f08b0b254edaff5d5b8ac8aac9d411254bbb0a44fef7->enter($__internal_d74ddef1939f7dbcc9e7f08b0b254edaff5d5b8ac8aac9d411254bbb0a44fef7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_d90bbc1df862aa9cbd5281b24daf79c5d2c7a345c64661bf819baea5725ff639 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d90bbc1df862aa9cbd5281b24daf79c5d2c7a345c64661bf819baea5725ff639->enter($__internal_d90bbc1df862aa9cbd5281b24daf79c5d2c7a345c64661bf819baea5725ff639_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/reset_content.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 4)->display($context);
        
        $__internal_d90bbc1df862aa9cbd5281b24daf79c5d2c7a345c64661bf819baea5725ff639->leave($__internal_d90bbc1df862aa9cbd5281b24daf79c5d2c7a345c64661bf819baea5725ff639_prof);

        
        $__internal_d74ddef1939f7dbcc9e7f08b0b254edaff5d5b8ac8aac9d411254bbb0a44fef7->leave($__internal_d74ddef1939f7dbcc9e7f08b0b254edaff5d5b8ac8aac9d411254bbb0a44fef7_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:reset.html.twig";
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
{% include \"@FOSUser/Resetting/reset_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Resetting:reset.html.twig", "C:\\Users\\11500384\\Documents\\GitHub\\Web-Mobile-Project\\WP3\\app/Resources/FOSUserBundle/views/Resetting/reset.html.twig");
    }
}
