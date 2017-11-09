<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_40dde7d7a4231c350361a8011f7ce7269fe007f68706f2ade9ad8ff942669975 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
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
        $__internal_c2a3024a88ee992dc2885d95883b0c17877e3f0eef0b3853ecbb2c953a1828db = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c2a3024a88ee992dc2885d95883b0c17877e3f0eef0b3853ecbb2c953a1828db->enter($__internal_c2a3024a88ee992dc2885d95883b0c17877e3f0eef0b3853ecbb2c953a1828db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $__internal_d9989326958c49ed6dcd3682cac6fb7319ac701e600a13aa2eea648152f268f7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d9989326958c49ed6dcd3682cac6fb7319ac701e600a13aa2eea648152f268f7->enter($__internal_d9989326958c49ed6dcd3682cac6fb7319ac701e600a13aa2eea648152f268f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c2a3024a88ee992dc2885d95883b0c17877e3f0eef0b3853ecbb2c953a1828db->leave($__internal_c2a3024a88ee992dc2885d95883b0c17877e3f0eef0b3853ecbb2c953a1828db_prof);

        
        $__internal_d9989326958c49ed6dcd3682cac6fb7319ac701e600a13aa2eea648152f268f7->leave($__internal_d9989326958c49ed6dcd3682cac6fb7319ac701e600a13aa2eea648152f268f7_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_a7440a312d8bbe18cb5b0ad074830480c314b763375d78bc3e2d2edfc4cb5948 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a7440a312d8bbe18cb5b0ad074830480c314b763375d78bc3e2d2edfc4cb5948->enter($__internal_a7440a312d8bbe18cb5b0ad074830480c314b763375d78bc3e2d2edfc4cb5948_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_f3df3923a5bd31427c733850cb009be264f5c45fdd05600f6b44deaa63979843 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f3df3923a5bd31427c733850cb009be264f5c45fdd05600f6b44deaa63979843->enter($__internal_f3df3923a5bd31427c733850cb009be264f5c45fdd05600f6b44deaa63979843_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_f3df3923a5bd31427c733850cb009be264f5c45fdd05600f6b44deaa63979843->leave($__internal_f3df3923a5bd31427c733850cb009be264f5c45fdd05600f6b44deaa63979843_prof);

        
        $__internal_a7440a312d8bbe18cb5b0ad074830480c314b763375d78bc3e2d2edfc4cb5948->leave($__internal_a7440a312d8bbe18cb5b0ad074830480c314b763375d78bc3e2d2edfc4cb5948_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_a301e81db032e09fe3116aab5d8ae7b20a86af0e1cdb40f0e78198da9e3a007d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a301e81db032e09fe3116aab5d8ae7b20a86af0e1cdb40f0e78198da9e3a007d->enter($__internal_a301e81db032e09fe3116aab5d8ae7b20a86af0e1cdb40f0e78198da9e3a007d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_e63a01e0387fd473519272f81c0c5c887e30ef448be9dce17868439c9c9cac04 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e63a01e0387fd473519272f81c0c5c887e30ef448be9dce17868439c9c9cac04->enter($__internal_e63a01e0387fd473519272f81c0c5c887e30ef448be9dce17868439c9c9cac04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_e63a01e0387fd473519272f81c0c5c887e30ef448be9dce17868439c9c9cac04->leave($__internal_e63a01e0387fd473519272f81c0c5c887e30ef448be9dce17868439c9c9cac04_prof);

        
        $__internal_a301e81db032e09fe3116aab5d8ae7b20a86af0e1cdb40f0e78198da9e3a007d->leave($__internal_a301e81db032e09fe3116aab5d8ae7b20a86af0e1cdb40f0e78198da9e3a007d_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_e827c51193e6705edf8297cd75b2db208f289891816d6a95a010f3947f2d423e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e827c51193e6705edf8297cd75b2db208f289891816d6a95a010f3947f2d423e->enter($__internal_e827c51193e6705edf8297cd75b2db208f289891816d6a95a010f3947f2d423e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_257b7450ed56d6ab746b0dd539b7800fd0b9541f1bc57dec7d7ca07d79c8343e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_257b7450ed56d6ab746b0dd539b7800fd0b9541f1bc57dec7d7ca07d79c8343e->enter($__internal_257b7450ed56d6ab746b0dd539b7800fd0b9541f1bc57dec7d7ca07d79c8343e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_257b7450ed56d6ab746b0dd539b7800fd0b9541f1bc57dec7d7ca07d79c8343e->leave($__internal_257b7450ed56d6ab746b0dd539b7800fd0b9541f1bc57dec7d7ca07d79c8343e_prof);

        
        $__internal_e827c51193e6705edf8297cd75b2db208f289891816d6a95a010f3947f2d423e->leave($__internal_e827c51193e6705edf8297cd75b2db208f289891816d6a95a010f3947f2d423e_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
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
", "WebProfilerBundle:Collector:router.html.twig", "C:\\Users\\11500384\\Documents\\GitHub\\Web-Mobile-Project\\WP3\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
