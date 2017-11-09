<?php

/* @WebProfiler/Profiler/open.html.twig */
class __TwigTemplate_45bea2313c538a2004e5fe6b6234a045a6da19e7e482b2aaa3ab21d8affe724a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "@WebProfiler/Profiler/open.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_da51e80d530d342e0a58aa5a7d96dc6b57c0c3e9c8781dd9398a20bb4908beda = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_da51e80d530d342e0a58aa5a7d96dc6b57c0c3e9c8781dd9398a20bb4908beda->enter($__internal_da51e80d530d342e0a58aa5a7d96dc6b57c0c3e9c8781dd9398a20bb4908beda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $__internal_fbdd9f2cfa8f64a6a3512d0258d1c61927387c4f1b13f3bf8d436d8495bea921 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fbdd9f2cfa8f64a6a3512d0258d1c61927387c4f1b13f3bf8d436d8495bea921->enter($__internal_fbdd9f2cfa8f64a6a3512d0258d1c61927387c4f1b13f3bf8d436d8495bea921_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_da51e80d530d342e0a58aa5a7d96dc6b57c0c3e9c8781dd9398a20bb4908beda->leave($__internal_da51e80d530d342e0a58aa5a7d96dc6b57c0c3e9c8781dd9398a20bb4908beda_prof);

        
        $__internal_fbdd9f2cfa8f64a6a3512d0258d1c61927387c4f1b13f3bf8d436d8495bea921->leave($__internal_fbdd9f2cfa8f64a6a3512d0258d1c61927387c4f1b13f3bf8d436d8495bea921_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_90719d246077fc4d586f1b5ae1a388564a721d38832b68b5cfe87305ea1022a9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_90719d246077fc4d586f1b5ae1a388564a721d38832b68b5cfe87305ea1022a9->enter($__internal_90719d246077fc4d586f1b5ae1a388564a721d38832b68b5cfe87305ea1022a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_f701329e204f9a6d4492f5e068f2cb067096b6ee12551862c1f0150bd0d2120b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f701329e204f9a6d4492f5e068f2cb067096b6ee12551862c1f0150bd0d2120b->enter($__internal_f701329e204f9a6d4492f5e068f2cb067096b6ee12551862c1f0150bd0d2120b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_f701329e204f9a6d4492f5e068f2cb067096b6ee12551862c1f0150bd0d2120b->leave($__internal_f701329e204f9a6d4492f5e068f2cb067096b6ee12551862c1f0150bd0d2120b_prof);

        
        $__internal_90719d246077fc4d586f1b5ae1a388564a721d38832b68b5cfe87305ea1022a9->leave($__internal_90719d246077fc4d586f1b5ae1a388564a721d38832b68b5cfe87305ea1022a9_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_9af17d90292fe8ead91ae0ecfbfa6aabebe553f7a6167e3ae872f579ef14782f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9af17d90292fe8ead91ae0ecfbfa6aabebe553f7a6167e3ae872f579ef14782f->enter($__internal_9af17d90292fe8ead91ae0ecfbfa6aabebe553f7a6167e3ae872f579ef14782f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ec4b8f6955eb1cc5f290be38f59a796be7a86dd900a62672830bbdb2fb0b1cdb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ec4b8f6955eb1cc5f290be38f59a796be7a86dd900a62672830bbdb2fb0b1cdb->enter($__internal_ec4b8f6955eb1cc5f290be38f59a796be7a86dd900a62672830bbdb2fb0b1cdb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<div class=\"header\">
    <h1>";
        // line 11
        echo twig_escape_filter($this->env, ($context["file"] ?? $this->getContext($context, "file")), "html", null, true);
        echo " <small>line ";
        echo twig_escape_filter($this->env, ($context["line"] ?? $this->getContext($context, "line")), "html", null, true);
        echo "</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/";
        // line 12
        echo twig_escape_filter($this->env, twig_constant("Symfony\\Component\\HttpKernel\\Kernel::VERSION"), "html", null, true);
        echo "/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->fileExcerpt(($context["filename"] ?? $this->getContext($context, "filename")), ($context["line"] ?? $this->getContext($context, "line")),  -1);
        echo "
</div>
";
        
        $__internal_ec4b8f6955eb1cc5f290be38f59a796be7a86dd900a62672830bbdb2fb0b1cdb->leave($__internal_ec4b8f6955eb1cc5f290be38f59a796be7a86dd900a62672830bbdb2fb0b1cdb_prof);

        
        $__internal_9af17d90292fe8ead91ae0ecfbfa6aabebe553f7a6167e3ae872f579ef14782f->leave($__internal_9af17d90292fe8ead91ae0ecfbfa6aabebe553f7a6167e3ae872f579ef14782f_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/open.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 15,  84 => 12,  78 => 11,  75 => 10,  66 => 9,  53 => 5,  50 => 4,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/base.html.twig' %}

{% block head %}
    <style>
        {{ include('@WebProfiler/Profiler/open.css.twig') }}
    </style>
{% endblock %}

{% block body %}
<div class=\"header\">
    <h1>{{ file }} <small>line {{ line }}</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/{{ constant('Symfony\\\\Component\\\\HttpKernel\\\\Kernel::VERSION') }}/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    {{ filename|file_excerpt(line, -1) }}
</div>
{% endblock %}
", "@WebProfiler/Profiler/open.html.twig", "C:\\Users\\11500384\\Documents\\GitHub\\Web-Mobile-Project\\WP3\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\open.html.twig");
    }
}
