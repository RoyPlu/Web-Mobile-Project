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
        $__internal_dff60a252f58528a04afddabae67eb246c1de870373addcb2bfa938515880b11 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dff60a252f58528a04afddabae67eb246c1de870373addcb2bfa938515880b11->enter($__internal_dff60a252f58528a04afddabae67eb246c1de870373addcb2bfa938515880b11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_37ad71e5d6a05f8d26e22a1cf3f874e5dce2bf2c7c2d77b88d66f0a132e2b332 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_37ad71e5d6a05f8d26e22a1cf3f874e5dce2bf2c7c2d77b88d66f0a132e2b332->enter($__internal_37ad71e5d6a05f8d26e22a1cf3f874e5dce2bf2c7c2d77b88d66f0a132e2b332_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dff60a252f58528a04afddabae67eb246c1de870373addcb2bfa938515880b11->leave($__internal_dff60a252f58528a04afddabae67eb246c1de870373addcb2bfa938515880b11_prof);

        
        $__internal_37ad71e5d6a05f8d26e22a1cf3f874e5dce2bf2c7c2d77b88d66f0a132e2b332->leave($__internal_37ad71e5d6a05f8d26e22a1cf3f874e5dce2bf2c7c2d77b88d66f0a132e2b332_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_c141d6f6a3d172caa209f55450b1f19f9fe6d122da285971323e9eb2f0c0f417 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c141d6f6a3d172caa209f55450b1f19f9fe6d122da285971323e9eb2f0c0f417->enter($__internal_c141d6f6a3d172caa209f55450b1f19f9fe6d122da285971323e9eb2f0c0f417_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_a75257915e69f871dfca1adf48719e1c2e83200ced1a3989cc4e03b85298973c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a75257915e69f871dfca1adf48719e1c2e83200ced1a3989cc4e03b85298973c->enter($__internal_a75257915e69f871dfca1adf48719e1c2e83200ced1a3989cc4e03b85298973c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_a75257915e69f871dfca1adf48719e1c2e83200ced1a3989cc4e03b85298973c->leave($__internal_a75257915e69f871dfca1adf48719e1c2e83200ced1a3989cc4e03b85298973c_prof);

        
        $__internal_c141d6f6a3d172caa209f55450b1f19f9fe6d122da285971323e9eb2f0c0f417->leave($__internal_c141d6f6a3d172caa209f55450b1f19f9fe6d122da285971323e9eb2f0c0f417_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_1969ddc62951cc9e92d013a9e3ec1978b19cb022cc76444f1ef632a3aaac61e5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1969ddc62951cc9e92d013a9e3ec1978b19cb022cc76444f1ef632a3aaac61e5->enter($__internal_1969ddc62951cc9e92d013a9e3ec1978b19cb022cc76444f1ef632a3aaac61e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_a34e4c1873ab10e87ac053c5ed2eb65b728cbb35a4b74dca1f7995f901864ae1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a34e4c1873ab10e87ac053c5ed2eb65b728cbb35a4b74dca1f7995f901864ae1->enter($__internal_a34e4c1873ab10e87ac053c5ed2eb65b728cbb35a4b74dca1f7995f901864ae1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_a34e4c1873ab10e87ac053c5ed2eb65b728cbb35a4b74dca1f7995f901864ae1->leave($__internal_a34e4c1873ab10e87ac053c5ed2eb65b728cbb35a4b74dca1f7995f901864ae1_prof);

        
        $__internal_1969ddc62951cc9e92d013a9e3ec1978b19cb022cc76444f1ef632a3aaac61e5->leave($__internal_1969ddc62951cc9e92d013a9e3ec1978b19cb022cc76444f1ef632a3aaac61e5_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_9250bee8a732a12d1dfd471c47ccfff7e4aebf2f7b273e5f712432001ef25288 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9250bee8a732a12d1dfd471c47ccfff7e4aebf2f7b273e5f712432001ef25288->enter($__internal_9250bee8a732a12d1dfd471c47ccfff7e4aebf2f7b273e5f712432001ef25288_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_a12388fb40f698fa79b5a4ea5e15a6fe094304b63bcb47ecb7015b4017b668c4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a12388fb40f698fa79b5a4ea5e15a6fe094304b63bcb47ecb7015b4017b668c4->enter($__internal_a12388fb40f698fa79b5a4ea5e15a6fe094304b63bcb47ecb7015b4017b668c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_a12388fb40f698fa79b5a4ea5e15a6fe094304b63bcb47ecb7015b4017b668c4->leave($__internal_a12388fb40f698fa79b5a4ea5e15a6fe094304b63bcb47ecb7015b4017b668c4_prof);

        
        $__internal_9250bee8a732a12d1dfd471c47ccfff7e4aebf2f7b273e5f712432001ef25288->leave($__internal_9250bee8a732a12d1dfd471c47ccfff7e4aebf2f7b273e5f712432001ef25288_prof);

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
