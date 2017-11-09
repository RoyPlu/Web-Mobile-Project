<?php

/* default/edit.technician.html.twig */
class __TwigTemplate_51876b4c00dd24706a630137a7e0eb4c60403a40542731069f699f24d2229925 extends Twig_Template
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
        $__internal_de744ebb437e23ca3f3e7e2b824c26f91d17ce4c99f1fe7b13a4c8762f98ac30 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_de744ebb437e23ca3f3e7e2b824c26f91d17ce4c99f1fe7b13a4c8762f98ac30->enter($__internal_de744ebb437e23ca3f3e7e2b824c26f91d17ce4c99f1fe7b13a4c8762f98ac30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/edit.technician.html.twig"));

        $__internal_143c1e529e8c85735c61c4f95eb7c2f0a14bc6076f0bbdb1720282b765b3667b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_143c1e529e8c85735c61c4f95eb7c2f0a14bc6076f0bbdb1720282b765b3667b->enter($__internal_143c1e529e8c85735c61c4f95eb7c2f0a14bc6076f0bbdb1720282b765b3667b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/edit.technician.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_de744ebb437e23ca3f3e7e2b824c26f91d17ce4c99f1fe7b13a4c8762f98ac30->leave($__internal_de744ebb437e23ca3f3e7e2b824c26f91d17ce4c99f1fe7b13a4c8762f98ac30_prof);

        
        $__internal_143c1e529e8c85735c61c4f95eb7c2f0a14bc6076f0bbdb1720282b765b3667b->leave($__internal_143c1e529e8c85735c61c4f95eb7c2f0a14bc6076f0bbdb1720282b765b3667b_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_d59c692214558be2df77f081dfcc9d9eb86926e18d867a8adcd05e6547edaede = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d59c692214558be2df77f081dfcc9d9eb86926e18d867a8adcd05e6547edaede->enter($__internal_d59c692214558be2df77f081dfcc9d9eb86926e18d867a8adcd05e6547edaede_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_92f7a26796771bd2647ed967d793c3f6c68a50bcb97528f06f0051bf69c014d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_92f7a26796771bd2647ed967d793c3f6c68a50bcb97528f06f0051bf69c014d3->enter($__internal_92f7a26796771bd2647ed967d793c3f6c68a50bcb97528f06f0051bf69c014d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "locations";
        
        $__internal_92f7a26796771bd2647ed967d793c3f6c68a50bcb97528f06f0051bf69c014d3->leave($__internal_92f7a26796771bd2647ed967d793c3f6c68a50bcb97528f06f0051bf69c014d3_prof);

        
        $__internal_d59c692214558be2df77f081dfcc9d9eb86926e18d867a8adcd05e6547edaede->leave($__internal_d59c692214558be2df77f081dfcc9d9eb86926e18d867a8adcd05e6547edaede_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_aeadffce32b33fc3cc800934af43813e55021254fed4f639725cc15a717beef8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aeadffce32b33fc3cc800934af43813e55021254fed4f639725cc15a717beef8->enter($__internal_aeadffce32b33fc3cc800934af43813e55021254fed4f639725cc15a717beef8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_6ca856108cef85f87e2488e4c87783fd6ae644c9dd3724119750b8e53fa60b40 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ca856108cef85f87e2488e4c87783fd6ae644c9dd3724119750b8e53fa60b40->enter($__internal_6ca856108cef85f87e2488e4c87783fd6ae644c9dd3724119750b8e53fa60b40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <form action=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_submit_technician");
        echo "\" method=\"post\">

        <input type=\"hidden\" name=\"techId\" value=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute(($context["technician"] ?? $this->getContext($context, "technician")), "id", array()), "html", null, true);
        echo "\" />
        <label for=\"username\">";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("username"), "html", null, true);
        echo "</label>
        <input type=\"text\" id=\"username\" name=\"_username\" value=\"\" required=\"required\" />

        <label for=\"password\">";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("password"), "html", null, true);
        echo "</label>
        <input type=\"password\" id=\"password\" name=\"_password\" required=\"required\" />

        <input type=\"submit\" id=\"_submit\" name=\"_submit\" value=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Update"), "html", null, true);
        echo "\" />
    </form>


";
        
        $__internal_6ca856108cef85f87e2488e4c87783fd6ae644c9dd3724119750b8e53fa60b40->leave($__internal_6ca856108cef85f87e2488e4c87783fd6ae644c9dd3724119750b8e53fa60b40_prof);

        
        $__internal_aeadffce32b33fc3cc800934af43813e55021254fed4f639725cc15a717beef8->leave($__internal_aeadffce32b33fc3cc800934af43813e55021254fed4f639725cc15a717beef8_prof);

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
        return array (  90 => 15,  84 => 12,  78 => 9,  74 => 8,  68 => 6,  59 => 5,  41 => 4,  11 => 3,);
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
    <form action=\"{{ path('admin_submit_technician') }}\" method=\"post\">

        <input type=\"hidden\" name=\"techId\" value=\"{{ technician.id }}\" />
        <label for=\"username\">{{ 'username'|trans }}</label>
        <input type=\"text\" id=\"username\" name=\"_username\" value=\"\" required=\"required\" />

        <label for=\"password\">{{ 'password'|trans }}</label>
        <input type=\"password\" id=\"password\" name=\"_password\" required=\"required\" />

        <input type=\"submit\" id=\"_submit\" name=\"_submit\" value=\"{{ 'Update'|trans }}\" />
    </form>


{% endblock %}", "default/edit.technician.html.twig", "C:\\Users\\11500384\\Documents\\GitHub\\Web-Mobile-Project\\WP3\\app\\Resources\\views\\default\\edit.technician.html.twig");
    }
}
