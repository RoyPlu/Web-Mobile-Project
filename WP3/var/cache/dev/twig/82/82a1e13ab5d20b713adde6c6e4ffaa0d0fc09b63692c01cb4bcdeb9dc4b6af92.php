<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_8ece518a7d47cbec3cd793902ac2d1780625c2e915ea685331c4e93ae6c98d3a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_57c30e1a712084cca140fdeb629d8051847d430fa509256a636c32f267236f7b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_57c30e1a712084cca140fdeb629d8051847d430fa509256a636c32f267236f7b->enter($__internal_57c30e1a712084cca140fdeb629d8051847d430fa509256a636c32f267236f7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_036d52f9eed9e013ff8e44d46078fd98d35090d2e20465d85a6694466cdfce3c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_036d52f9eed9e013ff8e44d46078fd98d35090d2e20465d85a6694466cdfce3c->enter($__internal_036d52f9eed9e013ff8e44d46078fd98d35090d2e20465d85a6694466cdfce3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_57c30e1a712084cca140fdeb629d8051847d430fa509256a636c32f267236f7b->leave($__internal_57c30e1a712084cca140fdeb629d8051847d430fa509256a636c32f267236f7b_prof);

        
        $__internal_036d52f9eed9e013ff8e44d46078fd98d35090d2e20465d85a6694466cdfce3c->leave($__internal_036d52f9eed9e013ff8e44d46078fd98d35090d2e20465d85a6694466cdfce3c_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_864fa1a1201745cdf7d930cbd925e66a88a4449d83303c6cfeecc44061116233 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_864fa1a1201745cdf7d930cbd925e66a88a4449d83303c6cfeecc44061116233->enter($__internal_864fa1a1201745cdf7d930cbd925e66a88a4449d83303c6cfeecc44061116233_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_99a1755aeb513af8d283adcdcd60be4969364161eba3bd2091cf4f6d108d74e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_99a1755aeb513af8d283adcdcd60be4969364161eba3bd2091cf4f6d108d74e8->enter($__internal_99a1755aeb513af8d283adcdcd60be4969364161eba3bd2091cf4f6d108d74e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_99a1755aeb513af8d283adcdcd60be4969364161eba3bd2091cf4f6d108d74e8->leave($__internal_99a1755aeb513af8d283adcdcd60be4969364161eba3bd2091cf4f6d108d74e8_prof);

        
        $__internal_864fa1a1201745cdf7d930cbd925e66a88a4449d83303c6cfeecc44061116233->leave($__internal_864fa1a1201745cdf7d930cbd925e66a88a4449d83303c6cfeecc44061116233_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_eed8b64775132f9288107f308a45b2b502d40711ac583b15725c972a8980e562 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eed8b64775132f9288107f308a45b2b502d40711ac583b15725c972a8980e562->enter($__internal_eed8b64775132f9288107f308a45b2b502d40711ac583b15725c972a8980e562_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_63270204cbe245b953254cb306ec90a96476be83bf7404c24b50acd867486f0a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_63270204cbe245b953254cb306ec90a96476be83bf7404c24b50acd867486f0a->enter($__internal_63270204cbe245b953254cb306ec90a96476be83bf7404c24b50acd867486f0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_63270204cbe245b953254cb306ec90a96476be83bf7404c24b50acd867486f0a->leave($__internal_63270204cbe245b953254cb306ec90a96476be83bf7404c24b50acd867486f0a_prof);

        
        $__internal_eed8b64775132f9288107f308a45b2b502d40711ac583b15725c972a8980e562->leave($__internal_eed8b64775132f9288107f308a45b2b502d40711ac583b15725c972a8980e562_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_1d137a28c2efe18e8c10e4e49360e1acf14d8d0a1dbc34a826d6f67c8b8ba7c7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1d137a28c2efe18e8c10e4e49360e1acf14d8d0a1dbc34a826d6f67c8b8ba7c7->enter($__internal_1d137a28c2efe18e8c10e4e49360e1acf14d8d0a1dbc34a826d6f67c8b8ba7c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_db50762b73ba4f932656d9344274e0264172c349d5c6f082b5340508f07f0bd3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_db50762b73ba4f932656d9344274e0264172c349d5c6f082b5340508f07f0bd3->enter($__internal_db50762b73ba4f932656d9344274e0264172c349d5c6f082b5340508f07f0bd3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_db50762b73ba4f932656d9344274e0264172c349d5c6f082b5340508f07f0bd3->leave($__internal_db50762b73ba4f932656d9344274e0264172c349d5c6f082b5340508f07f0bd3_prof);

        
        $__internal_1d137a28c2efe18e8c10e4e49360e1acf14d8d0a1dbc34a826d6f67c8b8ba7c7->leave($__internal_1d137a28c2efe18e8c10e4e49360e1acf14d8d0a1dbc34a826d6f67c8b8ba7c7_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "C:\\Users\\11500384\\Documents\\GitHub\\Web-Mobile-Project\\WP3\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\exception.html.twig");
    }
}
