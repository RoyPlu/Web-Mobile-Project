<?php

/* WebProfilerBundle:Profiler:open.html.twig */
class __TwigTemplate_c96f6c2dfb32a1082817420a38bf4c8a8873649359c68c62ce12711cc0b1c039 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "WebProfilerBundle:Profiler:open.html.twig", 1);
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
        $__internal_949a20911881333eb6de1a9c1a9f0707563f4903889bb453868b22bd52307026 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_949a20911881333eb6de1a9c1a9f0707563f4903889bb453868b22bd52307026->enter($__internal_949a20911881333eb6de1a9c1a9f0707563f4903889bb453868b22bd52307026_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $__internal_9980c5f843492553b1da77de51cdf76e143e50b3599f850af334f63f0ee69dfd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9980c5f843492553b1da77de51cdf76e143e50b3599f850af334f63f0ee69dfd->enter($__internal_9980c5f843492553b1da77de51cdf76e143e50b3599f850af334f63f0ee69dfd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_949a20911881333eb6de1a9c1a9f0707563f4903889bb453868b22bd52307026->leave($__internal_949a20911881333eb6de1a9c1a9f0707563f4903889bb453868b22bd52307026_prof);

        
        $__internal_9980c5f843492553b1da77de51cdf76e143e50b3599f850af334f63f0ee69dfd->leave($__internal_9980c5f843492553b1da77de51cdf76e143e50b3599f850af334f63f0ee69dfd_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_443ce6b5e219927961250f524220489c64baf9e4c72bd87cea798218be58b072 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_443ce6b5e219927961250f524220489c64baf9e4c72bd87cea798218be58b072->enter($__internal_443ce6b5e219927961250f524220489c64baf9e4c72bd87cea798218be58b072_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_b6ad5c227d2d557f95b8c72a2427074d5fac1315b8ccd6afe1bdae6455462e91 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b6ad5c227d2d557f95b8c72a2427074d5fac1315b8ccd6afe1bdae6455462e91->enter($__internal_b6ad5c227d2d557f95b8c72a2427074d5fac1315b8ccd6afe1bdae6455462e91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_b6ad5c227d2d557f95b8c72a2427074d5fac1315b8ccd6afe1bdae6455462e91->leave($__internal_b6ad5c227d2d557f95b8c72a2427074d5fac1315b8ccd6afe1bdae6455462e91_prof);

        
        $__internal_443ce6b5e219927961250f524220489c64baf9e4c72bd87cea798218be58b072->leave($__internal_443ce6b5e219927961250f524220489c64baf9e4c72bd87cea798218be58b072_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_010b712d809715724ad245cf791f2b616557102ba57279c87c159a85daf19578 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_010b712d809715724ad245cf791f2b616557102ba57279c87c159a85daf19578->enter($__internal_010b712d809715724ad245cf791f2b616557102ba57279c87c159a85daf19578_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c9c1729dbbb95faf63482dd5786613ab8fc938f03c81af7666d045adb479defb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c9c1729dbbb95faf63482dd5786613ab8fc938f03c81af7666d045adb479defb->enter($__internal_c9c1729dbbb95faf63482dd5786613ab8fc938f03c81af7666d045adb479defb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_c9c1729dbbb95faf63482dd5786613ab8fc938f03c81af7666d045adb479defb->leave($__internal_c9c1729dbbb95faf63482dd5786613ab8fc938f03c81af7666d045adb479defb_prof);

        
        $__internal_010b712d809715724ad245cf791f2b616557102ba57279c87c159a85daf19578->leave($__internal_010b712d809715724ad245cf791f2b616557102ba57279c87c159a85daf19578_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:open.html.twig";
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
", "WebProfilerBundle:Profiler:open.html.twig", "C:\\Users\\11500384\\Documents\\GitHub\\Web-Mobile-Project\\WP3\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/open.html.twig");
    }
}
