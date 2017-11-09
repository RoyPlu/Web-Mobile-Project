<?php

/* default/edit.technician.html.twig */
class __TwigTemplate_75f5fc1fa53df022bc0f195930ec0151eb50015ebbeb63ea40de357185d8c23d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("::base.html.twig", "default/edit.technician.html.twig", 3);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_bdd252fd5817d95a340d87f593ce6d04312ba69b23fbe80a65cf1a940a37e488 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bdd252fd5817d95a340d87f593ce6d04312ba69b23fbe80a65cf1a940a37e488->enter($__internal_bdd252fd5817d95a340d87f593ce6d04312ba69b23fbe80a65cf1a940a37e488_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/edit.technician.html.twig"));

        $__internal_a4e0c6f240b93f53cf7ff125ff397a135e653032169af6c37091fbe05ead066d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a4e0c6f240b93f53cf7ff125ff397a135e653032169af6c37091fbe05ead066d->enter($__internal_a4e0c6f240b93f53cf7ff125ff397a135e653032169af6c37091fbe05ead066d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/edit.technician.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bdd252fd5817d95a340d87f593ce6d04312ba69b23fbe80a65cf1a940a37e488->leave($__internal_bdd252fd5817d95a340d87f593ce6d04312ba69b23fbe80a65cf1a940a37e488_prof);

        
        $__internal_a4e0c6f240b93f53cf7ff125ff397a135e653032169af6c37091fbe05ead066d->leave($__internal_a4e0c6f240b93f53cf7ff125ff397a135e653032169af6c37091fbe05ead066d_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_c91f0665b8580d6c57e8a781710ebb20129c8060e4ca8f7b236d27c91eae2f0c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c91f0665b8580d6c57e8a781710ebb20129c8060e4ca8f7b236d27c91eae2f0c->enter($__internal_c91f0665b8580d6c57e8a781710ebb20129c8060e4ca8f7b236d27c91eae2f0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_e2c94b889c44728688ba075b6d0f25dc12ed02d2b02276ccde16542cff6edc67 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e2c94b889c44728688ba075b6d0f25dc12ed02d2b02276ccde16542cff6edc67->enter($__internal_e2c94b889c44728688ba075b6d0f25dc12ed02d2b02276ccde16542cff6edc67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "locations";
        
        $__internal_e2c94b889c44728688ba075b6d0f25dc12ed02d2b02276ccde16542cff6edc67->leave($__internal_e2c94b889c44728688ba075b6d0f25dc12ed02d2b02276ccde16542cff6edc67_prof);

        
        $__internal_c91f0665b8580d6c57e8a781710ebb20129c8060e4ca8f7b236d27c91eae2f0c->leave($__internal_c91f0665b8580d6c57e8a781710ebb20129c8060e4ca8f7b236d27c91eae2f0c_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_c3221715fc8e1235d9a0bdeeecf8c3367d0a2f30bda038f6787e7b06a1c5f009 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c3221715fc8e1235d9a0bdeeecf8c3367d0a2f30bda038f6787e7b06a1c5f009->enter($__internal_c3221715fc8e1235d9a0bdeeecf8c3367d0a2f30bda038f6787e7b06a1c5f009_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_2ac8d42cdeb5db054d24325fe0820bd3b83889481e1916433722d58e5a170608 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ac8d42cdeb5db054d24325fe0820bd3b83889481e1916433722d58e5a170608->enter($__internal_2ac8d42cdeb5db054d24325fe0820bd3b83889481e1916433722d58e5a170608_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <form action=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("");
        echo "\" method=\"post\">

        <label for=\"username\">";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.username"), "html", null, true);
        echo "</label>
        <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 9
        echo twig_escape_filter($this->env, ($context["last_username"] ?? $this->getContext($context, "last_username")), "html", null, true);
        echo "\" required=\"required\" />

        <label for=\"password\">";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.password"), "html", null, true);
        echo "</label>
        <input type=\"password\" id=\"password\" name=\"_password\" required=\"required\" />

        <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" />
        <label for=\"remember_me\">";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.remember_me"), "html", null, true);
        echo "</label>

        <input type=\"submit\" id=\"_submit\" name=\"_submit\" value=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.submit"), "html", null, true);
        echo "\" />
    </form>


";
        
        $__internal_2ac8d42cdeb5db054d24325fe0820bd3b83889481e1916433722d58e5a170608->leave($__internal_2ac8d42cdeb5db054d24325fe0820bd3b83889481e1916433722d58e5a170608_prof);

        
        $__internal_c3221715fc8e1235d9a0bdeeecf8c3367d0a2f30bda038f6787e7b06a1c5f009->leave($__internal_c3221715fc8e1235d9a0bdeeecf8c3367d0a2f30bda038f6787e7b06a1c5f009_prof);

    }

    public function getTemplateName()
    {
        return "default/edit.technician.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 17,  90 => 15,  83 => 11,  78 => 9,  74 => 8,  68 => 6,  59 => 5,  41 => 4,  11 => 3,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("

{% extends \"::base.html.twig\" %}
{% block title %}locations{% endblock %}
{% block body %}
    <form action=\"{{ path(\"\") }}\" method=\"post\">

        <label for=\"username\">{{ 'security.login.username'|trans }}</label>
        <input type=\"text\" id=\"username\" name=\"_username\" value=\"{{ last_username }}\" required=\"required\" />

        <label for=\"password\">{{ 'security.login.password'|trans }}</label>
        <input type=\"password\" id=\"password\" name=\"_password\" required=\"required\" />

        <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" />
        <label for=\"remember_me\">{{ 'security.login.remember_me'|trans }}</label>

        <input type=\"submit\" id=\"_submit\" name=\"_submit\" value=\"{{ 'security.login.submit'|trans }}\" />
    </form>


{% endblock %}", "default/edit.technician.html.twig", "C:\\Users\\11500384\\Documents\\GitHub\\Web-Mobile-Project\\WP3\\app\\Resources\\views\\default\\edit.technician.html.twig");
    }
}
