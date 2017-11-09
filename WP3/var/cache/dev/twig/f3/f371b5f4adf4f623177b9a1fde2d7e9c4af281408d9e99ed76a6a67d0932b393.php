<?php

/* WebProfilerBundle:Profiler:info.html.twig */
class __TwigTemplate_20948cb9484db7b38d80e546e5c25086f5658fbfdceb1e18ad23cb316712d950 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Profiler:info.html.twig", 1);
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
        $__internal_6e22488dd4e91fead6d28f1514c4ddcd082bacbb3308fa31c626bf3740a3c447 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6e22488dd4e91fead6d28f1514c4ddcd082bacbb3308fa31c626bf3740a3c447->enter($__internal_6e22488dd4e91fead6d28f1514c4ddcd082bacbb3308fa31c626bf3740a3c447_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        $__internal_67fb3d3e78524ef7d65d66d9c35121c8610656023502b4b4af0763b912406874 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_67fb3d3e78524ef7d65d66d9c35121c8610656023502b4b4af0763b912406874->enter($__internal_67fb3d3e78524ef7d65d66d9c35121c8610656023502b4b4af0763b912406874_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        // line 3
        $context["messages"] = array("no_token" => array("status" => "error", "title" => (((((        // line 6
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 7
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6e22488dd4e91fead6d28f1514c4ddcd082bacbb3308fa31c626bf3740a3c447->leave($__internal_6e22488dd4e91fead6d28f1514c4ddcd082bacbb3308fa31c626bf3740a3c447_prof);

        
        $__internal_67fb3d3e78524ef7d65d66d9c35121c8610656023502b4b4af0763b912406874->leave($__internal_67fb3d3e78524ef7d65d66d9c35121c8610656023502b4b4af0763b912406874_prof);

    }

    // line 11
    public function block_summary($context, array $blocks = array())
    {
        $__internal_f117f043e3bb4546a8cd3408478775c1a4beb1a785b04b3662c9715350173a9a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f117f043e3bb4546a8cd3408478775c1a4beb1a785b04b3662c9715350173a9a->enter($__internal_f117f043e3bb4546a8cd3408478775c1a4beb1a785b04b3662c9715350173a9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_1ef3c329252c2286c259419a66f0e65d0d517c23a074a377eda0906b49a59b97 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ef3c329252c2286c259419a66f0e65d0d517c23a074a377eda0906b49a59b97->enter($__internal_1ef3c329252c2286c259419a66f0e65d0d517c23a074a377eda0906b49a59b97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

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
        
        $__internal_1ef3c329252c2286c259419a66f0e65d0d517c23a074a377eda0906b49a59b97->leave($__internal_1ef3c329252c2286c259419a66f0e65d0d517c23a074a377eda0906b49a59b97_prof);

        
        $__internal_f117f043e3bb4546a8cd3408478775c1a4beb1a785b04b3662c9715350173a9a->leave($__internal_f117f043e3bb4546a8cd3408478775c1a4beb1a785b04b3662c9715350173a9a_prof);

    }

    // line 19
    public function block_panel($context, array $blocks = array())
    {
        $__internal_25d7f771ed1aaf9bcc73b77c244eac18cb5b98d2d28d4fb5566acf0659c60fb8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_25d7f771ed1aaf9bcc73b77c244eac18cb5b98d2d28d4fb5566acf0659c60fb8->enter($__internal_25d7f771ed1aaf9bcc73b77c244eac18cb5b98d2d28d4fb5566acf0659c60fb8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_83ada1aebe339a2304829b862904968ea724eb7d8625766908662522fedb8070 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_83ada1aebe339a2304829b862904968ea724eb7d8625766908662522fedb8070->enter($__internal_83ada1aebe339a2304829b862904968ea724eb7d8625766908662522fedb8070_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 20
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_83ada1aebe339a2304829b862904968ea724eb7d8625766908662522fedb8070->leave($__internal_83ada1aebe339a2304829b862904968ea724eb7d8625766908662522fedb8070_prof);

        
        $__internal_25d7f771ed1aaf9bcc73b77c244eac18cb5b98d2d28d4fb5566acf0659c60fb8->leave($__internal_25d7f771ed1aaf9bcc73b77c244eac18cb5b98d2d28d4fb5566acf0659c60fb8_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:info.html.twig";
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
", "WebProfilerBundle:Profiler:info.html.twig", "C:\\Users\\11500384\\Documents\\GitHub\\Web-Mobile-Project\\WP3\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/info.html.twig");
    }
}
