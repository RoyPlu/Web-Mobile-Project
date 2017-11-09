<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_2c2562aafbf423cf92dd05a723922ac850693e9aeefb7f8c8c8a3165e59a8d1e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "FOSUserBundle:Registration:register.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'title' => array($this, 'block_title'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a024e24d36f404de084cc18863cc003600fd4693abe18b9cd61ddc8f2f3759fa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a024e24d36f404de084cc18863cc003600fd4693abe18b9cd61ddc8f2f3759fa->enter($__internal_a024e24d36f404de084cc18863cc003600fd4693abe18b9cd61ddc8f2f3759fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $__internal_206da734675362be6f815d547e6a5eddb54e4db941d6a1575dc69ac0c9d1f150 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_206da734675362be6f815d547e6a5eddb54e4db941d6a1575dc69ac0c9d1f150->enter($__internal_206da734675362be6f815d547e6a5eddb54e4db941d6a1575dc69ac0c9d1f150_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a024e24d36f404de084cc18863cc003600fd4693abe18b9cd61ddc8f2f3759fa->leave($__internal_a024e24d36f404de084cc18863cc003600fd4693abe18b9cd61ddc8f2f3759fa_prof);

        
        $__internal_206da734675362be6f815d547e6a5eddb54e4db941d6a1575dc69ac0c9d1f150->leave($__internal_206da734675362be6f815d547e6a5eddb54e4db941d6a1575dc69ac0c9d1f150_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_fa46551b809bf4d4dc211f4e70c66f72802c0ebca76b92ad803a7b7ee50e18c4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fa46551b809bf4d4dc211f4e70c66f72802c0ebca76b92ad803a7b7ee50e18c4->enter($__internal_fa46551b809bf4d4dc211f4e70c66f72802c0ebca76b92ad803a7b7ee50e18c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_493d857755b4f487d8b3afc6f2b8a08afbfdbd839a3544bb81b49dd735814a2e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_493d857755b4f487d8b3afc6f2b8a08afbfdbd839a3544bb81b49dd735814a2e->enter($__internal_493d857755b4f487d8b3afc6f2b8a08afbfdbd839a3544bb81b49dd735814a2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        $this->displayBlock('title', $context, $blocks);
        // line 5
        $this->displayBlock('fos_user_content', $context, $blocks);
        
        $__internal_493d857755b4f487d8b3afc6f2b8a08afbfdbd839a3544bb81b49dd735814a2e->leave($__internal_493d857755b4f487d8b3afc6f2b8a08afbfdbd839a3544bb81b49dd735814a2e_prof);

        
        $__internal_fa46551b809bf4d4dc211f4e70c66f72802c0ebca76b92ad803a7b7ee50e18c4->leave($__internal_fa46551b809bf4d4dc211f4e70c66f72802c0ebca76b92ad803a7b7ee50e18c4_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_57ce9d158b3b1b940f0c642e672fbf72c9559665931be84146ea02620560b4e1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_57ce9d158b3b1b940f0c642e672fbf72c9559665931be84146ea02620560b4e1->enter($__internal_57ce9d158b3b1b940f0c642e672fbf72c9559665931be84146ea02620560b4e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_8462db5b6ed9969f5ff2d8f77d94ecf57d651f2e438f82960fe82535b6f1f306 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8462db5b6ed9969f5ff2d8f77d94ecf57d651f2e438f82960fe82535b6f1f306->enter($__internal_8462db5b6ed9969f5ff2d8f77d94ecf57d651f2e438f82960fe82535b6f1f306_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Register";
        
        $__internal_8462db5b6ed9969f5ff2d8f77d94ecf57d651f2e438f82960fe82535b6f1f306->leave($__internal_8462db5b6ed9969f5ff2d8f77d94ecf57d651f2e438f82960fe82535b6f1f306_prof);

        
        $__internal_57ce9d158b3b1b940f0c642e672fbf72c9559665931be84146ea02620560b4e1->leave($__internal_57ce9d158b3b1b940f0c642e672fbf72c9559665931be84146ea02620560b4e1_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_1a5c12b034854f73509436e9547c1fc9c4249db75034c83a850e58f067aea0bf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1a5c12b034854f73509436e9547c1fc9c4249db75034c83a850e58f067aea0bf->enter($__internal_1a5c12b034854f73509436e9547c1fc9c4249db75034c83a850e58f067aea0bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_8e651201a68aab22f8342bbd14f6746a1c70b93459b7a7eb52cd82001cb1b7c0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8e651201a68aab22f8342bbd14f6746a1c70b93459b7a7eb52cd82001cb1b7c0->enter($__internal_8e651201a68aab22f8342bbd14f6746a1c70b93459b7a7eb52cd82001cb1b7c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    ";
        $this->loadTemplate("@FOSUser/Registration/register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 6)->display($context);
        
        $__internal_8e651201a68aab22f8342bbd14f6746a1c70b93459b7a7eb52cd82001cb1b7c0->leave($__internal_8e651201a68aab22f8342bbd14f6746a1c70b93459b7a7eb52cd82001cb1b7c0_prof);

        
        $__internal_1a5c12b034854f73509436e9547c1fc9c4249db75034c83a850e58f067aea0bf->leave($__internal_1a5c12b034854f73509436e9547c1fc9c4249db75034c83a850e58f067aea0bf_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 6,  81 => 5,  63 => 4,  53 => 5,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
{% block title %}Register{% endblock %}
{% block fos_user_content %}
    {% include \"@FOSUser/Registration/register_content.html.twig\" %}
{% endblock fos_user_content %}
{%  endblock %}
", "FOSUserBundle:Registration:register.html.twig", "C:\\Users\\11500384\\Documents\\GitHub\\Web-Mobile-Project\\WP3\\app/Resources/FOSUserBundle/views/Registration/register.html.twig");
    }
}
