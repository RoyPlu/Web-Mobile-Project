<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_c78883b0a794df95bdc741371f79e94d9f33e13589dce19f76379b9c0a0f1d06 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ff4ec1fce2e54609e917dffdd234a8fc27eac3e1ca2805265e154874147ed454 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ff4ec1fce2e54609e917dffdd234a8fc27eac3e1ca2805265e154874147ed454->enter($__internal_ff4ec1fce2e54609e917dffdd234a8fc27eac3e1ca2805265e154874147ed454_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_b28f35058e6b2a9efd34d0f0452db4e3fe8e7e7f3534ecaca4f3ad2b3a00b463 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b28f35058e6b2a9efd34d0f0452db4e3fe8e7e7f3534ecaca4f3ad2b3a00b463->enter($__internal_b28f35058e6b2a9efd34d0f0452db4e3fe8e7e7f3534ecaca4f3ad2b3a00b463_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ff4ec1fce2e54609e917dffdd234a8fc27eac3e1ca2805265e154874147ed454->leave($__internal_ff4ec1fce2e54609e917dffdd234a8fc27eac3e1ca2805265e154874147ed454_prof);

        
        $__internal_b28f35058e6b2a9efd34d0f0452db4e3fe8e7e7f3534ecaca4f3ad2b3a00b463->leave($__internal_b28f35058e6b2a9efd34d0f0452db4e3fe8e7e7f3534ecaca4f3ad2b3a00b463_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_0a44f03056d593c3a3d437c48a978097d4176cec7192def62005c831d1fdbc4e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0a44f03056d593c3a3d437c48a978097d4176cec7192def62005c831d1fdbc4e->enter($__internal_0a44f03056d593c3a3d437c48a978097d4176cec7192def62005c831d1fdbc4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_120b7bc959c1f2ff92a521b06492a913ba3dcd12f17311fe6613ea2eba33dc47 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_120b7bc959c1f2ff92a521b06492a913ba3dcd12f17311fe6613ea2eba33dc47->enter($__internal_120b7bc959c1f2ff92a521b06492a913ba3dcd12f17311fe6613ea2eba33dc47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_120b7bc959c1f2ff92a521b06492a913ba3dcd12f17311fe6613ea2eba33dc47->leave($__internal_120b7bc959c1f2ff92a521b06492a913ba3dcd12f17311fe6613ea2eba33dc47_prof);

        
        $__internal_0a44f03056d593c3a3d437c48a978097d4176cec7192def62005c831d1fdbc4e->leave($__internal_0a44f03056d593c3a3d437c48a978097d4176cec7192def62005c831d1fdbc4e_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_2e648834d8c53ed227e9bf514af4965c955b194c3638ff07e328d67116a5f3c0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2e648834d8c53ed227e9bf514af4965c955b194c3638ff07e328d67116a5f3c0->enter($__internal_2e648834d8c53ed227e9bf514af4965c955b194c3638ff07e328d67116a5f3c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_6c74f0ff07f73345fcbf121f42755d452f8a24bbc8aff85795d3b6407698c1ea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6c74f0ff07f73345fcbf121f42755d452f8a24bbc8aff85795d3b6407698c1ea->enter($__internal_6c74f0ff07f73345fcbf121f42755d452f8a24bbc8aff85795d3b6407698c1ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_6c74f0ff07f73345fcbf121f42755d452f8a24bbc8aff85795d3b6407698c1ea->leave($__internal_6c74f0ff07f73345fcbf121f42755d452f8a24bbc8aff85795d3b6407698c1ea_prof);

        
        $__internal_2e648834d8c53ed227e9bf514af4965c955b194c3638ff07e328d67116a5f3c0->leave($__internal_2e648834d8c53ed227e9bf514af4965c955b194c3638ff07e328d67116a5f3c0_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_ffbbd7cd96fca10b4506652691ed683cef6d16e6ef77dd36a4e83b5c6c9b4740 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ffbbd7cd96fca10b4506652691ed683cef6d16e6ef77dd36a4e83b5c6c9b4740->enter($__internal_ffbbd7cd96fca10b4506652691ed683cef6d16e6ef77dd36a4e83b5c6c9b4740_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_9c1e54ee10f8d5e97dc77dea14ab58a19102257fe32e217c7d9fc1adc260e568 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9c1e54ee10f8d5e97dc77dea14ab58a19102257fe32e217c7d9fc1adc260e568->enter($__internal_9c1e54ee10f8d5e97dc77dea14ab58a19102257fe32e217c7d9fc1adc260e568_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_9c1e54ee10f8d5e97dc77dea14ab58a19102257fe32e217c7d9fc1adc260e568->leave($__internal_9c1e54ee10f8d5e97dc77dea14ab58a19102257fe32e217c7d9fc1adc260e568_prof);

        
        $__internal_ffbbd7cd96fca10b4506652691ed683cef6d16e6ef77dd36a4e83b5c6c9b4740->leave($__internal_ffbbd7cd96fca10b4506652691ed683cef6d16e6ef77dd36a4e83b5c6c9b4740_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
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

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "C:\\Users\\11500384\\Documents\\GitHub\\Web-Mobile-Project\\WP3\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
