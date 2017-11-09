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
        $__internal_e30986b35f1f5fa2e5d2dec4b6aa0bf8b69a888da3573c742fe3499314347d41 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e30986b35f1f5fa2e5d2dec4b6aa0bf8b69a888da3573c742fe3499314347d41->enter($__internal_e30986b35f1f5fa2e5d2dec4b6aa0bf8b69a888da3573c742fe3499314347d41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_819d68d907f315b2e5526119e562d7422b9fcf4bac2d0ddb02a8a36ce5b31e07 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_819d68d907f315b2e5526119e562d7422b9fcf4bac2d0ddb02a8a36ce5b31e07->enter($__internal_819d68d907f315b2e5526119e562d7422b9fcf4bac2d0ddb02a8a36ce5b31e07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e30986b35f1f5fa2e5d2dec4b6aa0bf8b69a888da3573c742fe3499314347d41->leave($__internal_e30986b35f1f5fa2e5d2dec4b6aa0bf8b69a888da3573c742fe3499314347d41_prof);

        
        $__internal_819d68d907f315b2e5526119e562d7422b9fcf4bac2d0ddb02a8a36ce5b31e07->leave($__internal_819d68d907f315b2e5526119e562d7422b9fcf4bac2d0ddb02a8a36ce5b31e07_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_b0927946861d9343c4e3029f2e006c4a1ddca12419b4f23bcfe1e123531832c8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b0927946861d9343c4e3029f2e006c4a1ddca12419b4f23bcfe1e123531832c8->enter($__internal_b0927946861d9343c4e3029f2e006c4a1ddca12419b4f23bcfe1e123531832c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_344aeac5266b346b6dcc85a2236e1d2ee8d218225c3083e5afcb1e01a4292437 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_344aeac5266b346b6dcc85a2236e1d2ee8d218225c3083e5afcb1e01a4292437->enter($__internal_344aeac5266b346b6dcc85a2236e1d2ee8d218225c3083e5afcb1e01a4292437_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_344aeac5266b346b6dcc85a2236e1d2ee8d218225c3083e5afcb1e01a4292437->leave($__internal_344aeac5266b346b6dcc85a2236e1d2ee8d218225c3083e5afcb1e01a4292437_prof);

        
        $__internal_b0927946861d9343c4e3029f2e006c4a1ddca12419b4f23bcfe1e123531832c8->leave($__internal_b0927946861d9343c4e3029f2e006c4a1ddca12419b4f23bcfe1e123531832c8_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_99ed4ee588b9e7078282d678edb290eb0d48a61b97712a96e2c2dc6125d9917f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_99ed4ee588b9e7078282d678edb290eb0d48a61b97712a96e2c2dc6125d9917f->enter($__internal_99ed4ee588b9e7078282d678edb290eb0d48a61b97712a96e2c2dc6125d9917f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_1a5ac5f79a4458d9cc6748b40917256f3ea2f66266f0c10409aac0b6c823e3d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a5ac5f79a4458d9cc6748b40917256f3ea2f66266f0c10409aac0b6c823e3d3->enter($__internal_1a5ac5f79a4458d9cc6748b40917256f3ea2f66266f0c10409aac0b6c823e3d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_1a5ac5f79a4458d9cc6748b40917256f3ea2f66266f0c10409aac0b6c823e3d3->leave($__internal_1a5ac5f79a4458d9cc6748b40917256f3ea2f66266f0c10409aac0b6c823e3d3_prof);

        
        $__internal_99ed4ee588b9e7078282d678edb290eb0d48a61b97712a96e2c2dc6125d9917f->leave($__internal_99ed4ee588b9e7078282d678edb290eb0d48a61b97712a96e2c2dc6125d9917f_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_cf6dbadec1c28b43ab6de56eca6ff8047117ebe78c4b6ed09fc2d181f86f708c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cf6dbadec1c28b43ab6de56eca6ff8047117ebe78c4b6ed09fc2d181f86f708c->enter($__internal_cf6dbadec1c28b43ab6de56eca6ff8047117ebe78c4b6ed09fc2d181f86f708c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_10be54c9f8b4defc2e2a642a1183102786cef80fd21fe9b13910aa31abe16b56 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_10be54c9f8b4defc2e2a642a1183102786cef80fd21fe9b13910aa31abe16b56->enter($__internal_10be54c9f8b4defc2e2a642a1183102786cef80fd21fe9b13910aa31abe16b56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_10be54c9f8b4defc2e2a642a1183102786cef80fd21fe9b13910aa31abe16b56->leave($__internal_10be54c9f8b4defc2e2a642a1183102786cef80fd21fe9b13910aa31abe16b56_prof);

        
        $__internal_cf6dbadec1c28b43ab6de56eca6ff8047117ebe78c4b6ed09fc2d181f86f708c->leave($__internal_cf6dbadec1c28b43ab6de56eca6ff8047117ebe78c4b6ed09fc2d181f86f708c_prof);

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
