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
        $__internal_184664f42c13e277aa8a47208886a89dbd067a767b56f218fdcbbbf256323a1c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_184664f42c13e277aa8a47208886a89dbd067a767b56f218fdcbbbf256323a1c->enter($__internal_184664f42c13e277aa8a47208886a89dbd067a767b56f218fdcbbbf256323a1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $__internal_ea2061eccda5f65e2a5694af0a7045f90241bdc6c7b083e2d10bd56394b08f89 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ea2061eccda5f65e2a5694af0a7045f90241bdc6c7b083e2d10bd56394b08f89->enter($__internal_ea2061eccda5f65e2a5694af0a7045f90241bdc6c7b083e2d10bd56394b08f89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_184664f42c13e277aa8a47208886a89dbd067a767b56f218fdcbbbf256323a1c->leave($__internal_184664f42c13e277aa8a47208886a89dbd067a767b56f218fdcbbbf256323a1c_prof);

        
        $__internal_ea2061eccda5f65e2a5694af0a7045f90241bdc6c7b083e2d10bd56394b08f89->leave($__internal_ea2061eccda5f65e2a5694af0a7045f90241bdc6c7b083e2d10bd56394b08f89_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_e7c80eba6532fbb66d3f8c4e0e3c16991b1ea12541d57477919d3b8f3620b84e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e7c80eba6532fbb66d3f8c4e0e3c16991b1ea12541d57477919d3b8f3620b84e->enter($__internal_e7c80eba6532fbb66d3f8c4e0e3c16991b1ea12541d57477919d3b8f3620b84e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_da08a4b1615c0bcde4d2f0db709d3d59cc4aa77aed78e3acaa08000b1efa56a6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da08a4b1615c0bcde4d2f0db709d3d59cc4aa77aed78e3acaa08000b1efa56a6->enter($__internal_da08a4b1615c0bcde4d2f0db709d3d59cc4aa77aed78e3acaa08000b1efa56a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_da08a4b1615c0bcde4d2f0db709d3d59cc4aa77aed78e3acaa08000b1efa56a6->leave($__internal_da08a4b1615c0bcde4d2f0db709d3d59cc4aa77aed78e3acaa08000b1efa56a6_prof);

        
        $__internal_e7c80eba6532fbb66d3f8c4e0e3c16991b1ea12541d57477919d3b8f3620b84e->leave($__internal_e7c80eba6532fbb66d3f8c4e0e3c16991b1ea12541d57477919d3b8f3620b84e_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_7ec0568092a22d59ca642d63177c541667794d709e5d00ab9081535b2c29a8c0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7ec0568092a22d59ca642d63177c541667794d709e5d00ab9081535b2c29a8c0->enter($__internal_7ec0568092a22d59ca642d63177c541667794d709e5d00ab9081535b2c29a8c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_49e9dee833969f9388b8e18bf70d6225c1dbbed56fb3f271f9573f2caf9da5fd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_49e9dee833969f9388b8e18bf70d6225c1dbbed56fb3f271f9573f2caf9da5fd->enter($__internal_49e9dee833969f9388b8e18bf70d6225c1dbbed56fb3f271f9573f2caf9da5fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_49e9dee833969f9388b8e18bf70d6225c1dbbed56fb3f271f9573f2caf9da5fd->leave($__internal_49e9dee833969f9388b8e18bf70d6225c1dbbed56fb3f271f9573f2caf9da5fd_prof);

        
        $__internal_7ec0568092a22d59ca642d63177c541667794d709e5d00ab9081535b2c29a8c0->leave($__internal_7ec0568092a22d59ca642d63177c541667794d709e5d00ab9081535b2c29a8c0_prof);

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
