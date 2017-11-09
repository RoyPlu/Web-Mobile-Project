<?php

/* @WebProfiler/Profiler/info.html.twig */
class __TwigTemplate_89c2c37e811f517fe402f6e7ce33e4f2f12b3d88378b40055913e8aa1ebba8d6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Profiler/info.html.twig", 1);
        $this->blocks = array(
            'summary' => array($this, 'block_summary'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b2df857fe82151ffced17ec06f3b9c5d97afdfa1ec9ae3b18daa8136e63e6d18 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b2df857fe82151ffced17ec06f3b9c5d97afdfa1ec9ae3b18daa8136e63e6d18->enter($__internal_b2df857fe82151ffced17ec06f3b9c5d97afdfa1ec9ae3b18daa8136e63e6d18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        $__internal_ffc371f4d80c06f37d8e67d9238eaf05ae98c48877c5b13dce7ea03ac958f936 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ffc371f4d80c06f37d8e67d9238eaf05ae98c48877c5b13dce7ea03ac958f936->enter($__internal_ffc371f4d80c06f37d8e67d9238eaf05ae98c48877c5b13dce7ea03ac958f936_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        // line 3
        $context["messages"] = array("no_token" => array("status" => "error", "title" => (((((        // line 6
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 7
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b2df857fe82151ffced17ec06f3b9c5d97afdfa1ec9ae3b18daa8136e63e6d18->leave($__internal_b2df857fe82151ffced17ec06f3b9c5d97afdfa1ec9ae3b18daa8136e63e6d18_prof);

        
        $__internal_ffc371f4d80c06f37d8e67d9238eaf05ae98c48877c5b13dce7ea03ac958f936->leave($__internal_ffc371f4d80c06f37d8e67d9238eaf05ae98c48877c5b13dce7ea03ac958f936_prof);

    }

    // line 11
    public function block_summary($context, array $blocks = array())
    {
        $__internal_f0480543009bc0c67bd069946490014d8cfc732b89b4994f101255b529b40371 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f0480543009bc0c67bd069946490014d8cfc732b89b4994f101255b529b40371->enter($__internal_f0480543009bc0c67bd069946490014d8cfc732b89b4994f101255b529b40371_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_d9f2ad17ceee32f69e89453c5b49b11549508c86a80c91cfddfd999d4d92c87a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d9f2ad17ceee32f69e89453c5b49b11549508c86a80c91cfddfd999d4d92c87a->enter($__internal_d9f2ad17ceee32f69e89453c5b49b11549508c86a80c91cfddfd999d4d92c87a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        // line 12
        echo "    <div class=\"status status-";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "status", array()), "html", null, true);
        echo "\">
        <div class=\"container\">
            <h2>";
        // line 14
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "status", array())), "html", null, true);
        echo "</h2>
        </div>
    </div>
";
        
        $__internal_d9f2ad17ceee32f69e89453c5b49b11549508c86a80c91cfddfd999d4d92c87a->leave($__internal_d9f2ad17ceee32f69e89453c5b49b11549508c86a80c91cfddfd999d4d92c87a_prof);

        
        $__internal_f0480543009bc0c67bd069946490014d8cfc732b89b4994f101255b529b40371->leave($__internal_f0480543009bc0c67bd069946490014d8cfc732b89b4994f101255b529b40371_prof);

    }

    // line 19
    public function block_panel($context, array $blocks = array())
    {
        $__internal_2924587bda85d9e72dc8babe779db36a921fed6c219dded66f89024655757e42 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2924587bda85d9e72dc8babe779db36a921fed6c219dded66f89024655757e42->enter($__internal_2924587bda85d9e72dc8babe779db36a921fed6c219dded66f89024655757e42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_87ad6e6c7fd7bae46686e818df22698dde344fba1dc186153e50a62ad867b33d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_87ad6e6c7fd7bae46686e818df22698dde344fba1dc186153e50a62ad867b33d->enter($__internal_87ad6e6c7fd7bae46686e818df22698dde344fba1dc186153e50a62ad867b33d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 20
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_87ad6e6c7fd7bae46686e818df22698dde344fba1dc186153e50a62ad867b33d->leave($__internal_87ad6e6c7fd7bae46686e818df22698dde344fba1dc186153e50a62ad867b33d_prof);

        
        $__internal_2924587bda85d9e72dc8babe779db36a921fed6c219dded66f89024655757e42->leave($__internal_2924587bda85d9e72dc8babe779db36a921fed6c219dded66f89024655757e42_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 21,  84 => 20,  75 => 19,  61 => 14,  55 => 12,  46 => 11,  36 => 1,  34 => 7,  33 => 6,  32 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% set messages = {
    'no_token' : {
        status:  'error',
        title:   (token|default('') == 'latest') ? 'There are no profiles' : 'Token not found',
        message: (token|default('') == 'latest') ? 'No profiles found in the database.' : 'Token \"' ~ token|default('') ~ '\" was not found in the database.'
    }
} %}

{% block summary %}
    <div class=\"status status-{{ messages[about].status }}\">
        <div class=\"container\">
            <h2>{{ messages[about].status|title }}</h2>
        </div>
    </div>
{% endblock %}

{% block panel %}
    <h2>{{ messages[about].title }}</h2>
    <p>{{ messages[about].message }}</p>
{% endblock %}
", "@WebProfiler/Profiler/info.html.twig", "C:\\Users\\11500384\\Documents\\GitHub\\Web-Mobile-Project\\WP3\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\info.html.twig");
    }
}
