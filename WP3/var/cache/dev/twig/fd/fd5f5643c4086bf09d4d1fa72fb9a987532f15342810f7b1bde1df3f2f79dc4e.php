<?php

/* @WebProfiler/Profiler/toolbar_redirect.html.twig */
class __TwigTemplate_1253556a646148b46732b4956f595bc68f998958627453acf22d0f1af8679245 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@WebProfiler/Profiler/toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_fc51b75002403fd23434febf79742ecde56270a4be8b3a23030c7ff2d661c833 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fc51b75002403fd23434febf79742ecde56270a4be8b3a23030c7ff2d661c833->enter($__internal_fc51b75002403fd23434febf79742ecde56270a4be8b3a23030c7ff2d661c833_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $__internal_236e462cd93d40c107ae1434c7fc9c0a8f88ff5e6c6ae2cc4c3acaaf7d82a5e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_236e462cd93d40c107ae1434c7fc9c0a8f88ff5e6c6ae2cc4c3acaaf7d82a5e1->enter($__internal_236e462cd93d40c107ae1434c7fc9c0a8f88ff5e6c6ae2cc4c3acaaf7d82a5e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fc51b75002403fd23434febf79742ecde56270a4be8b3a23030c7ff2d661c833->leave($__internal_fc51b75002403fd23434febf79742ecde56270a4be8b3a23030c7ff2d661c833_prof);

        
        $__internal_236e462cd93d40c107ae1434c7fc9c0a8f88ff5e6c6ae2cc4c3acaaf7d82a5e1->leave($__internal_236e462cd93d40c107ae1434c7fc9c0a8f88ff5e6c6ae2cc4c3acaaf7d82a5e1_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_784d4c395048a4a79d66c62809e5c2bae63c1057202908fb614a690cc5937c27 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_784d4c395048a4a79d66c62809e5c2bae63c1057202908fb614a690cc5937c27->enter($__internal_784d4c395048a4a79d66c62809e5c2bae63c1057202908fb614a690cc5937c27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_196c8440b4271cbd409e4e84d9a4a28cfc04a9a0ccdeff0c7695abc44dae003d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_196c8440b4271cbd409e4e84d9a4a28cfc04a9a0ccdeff0c7695abc44dae003d->enter($__internal_196c8440b4271cbd409e4e84d9a4a28cfc04a9a0ccdeff0c7695abc44dae003d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_196c8440b4271cbd409e4e84d9a4a28cfc04a9a0ccdeff0c7695abc44dae003d->leave($__internal_196c8440b4271cbd409e4e84d9a4a28cfc04a9a0ccdeff0c7695abc44dae003d_prof);

        
        $__internal_784d4c395048a4a79d66c62809e5c2bae63c1057202908fb614a690cc5937c27->leave($__internal_784d4c395048a4a79d66c62809e5c2bae63c1057202908fb614a690cc5937c27_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_62645d0748d407f667812903dd9a26304a53a43cc2c323afe73b0c19e6c6798b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_62645d0748d407f667812903dd9a26304a53a43cc2c323afe73b0c19e6c6798b->enter($__internal_62645d0748d407f667812903dd9a26304a53a43cc2c323afe73b0c19e6c6798b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_04f8fd2f43514c9ab48f8891b2466146b60e7ee6c8a601b4a8fc1cfca536627d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_04f8fd2f43514c9ab48f8891b2466146b60e7ee6c8a601b4a8fc1cfca536627d->enter($__internal_04f8fd2f43514c9ab48f8891b2466146b60e7ee6c8a601b4a8fc1cfca536627d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_04f8fd2f43514c9ab48f8891b2466146b60e7ee6c8a601b4a8fc1cfca536627d->leave($__internal_04f8fd2f43514c9ab48f8891b2466146b60e7ee6c8a601b4a8fc1cfca536627d_prof);

        
        $__internal_62645d0748d407f667812903dd9a26304a53a43cc2c323afe73b0c19e6c6798b->leave($__internal_62645d0748d407f667812903dd9a26304a53a43cc2c323afe73b0c19e6c6798b_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 8,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "@WebProfiler/Profiler/toolbar_redirect.html.twig", "C:\\Users\\11500384\\Documents\\GitHub\\Web-Mobile-Project\\WP3\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\toolbar_redirect.html.twig");
    }
}
