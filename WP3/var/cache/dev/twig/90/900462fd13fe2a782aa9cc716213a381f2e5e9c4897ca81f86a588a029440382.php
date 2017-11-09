<?php

/* WebProfilerBundle:Collector:exception.html.twig */
class __TwigTemplate_a0101072286096cd49d356127a35e50be9fb2c6bf9f1d947efe00afdfbd91f14 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:exception.html.twig", 1);
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
        $__internal_77e0d4eed27959e981af8d445258e3b4f10670a6debef5872134f0a27494eae1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_77e0d4eed27959e981af8d445258e3b4f10670a6debef5872134f0a27494eae1->enter($__internal_77e0d4eed27959e981af8d445258e3b4f10670a6debef5872134f0a27494eae1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $__internal_fd4f771c0ff4542359945979d612f429fbe804c00f00034b7e792dec32528f72 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fd4f771c0ff4542359945979d612f429fbe804c00f00034b7e792dec32528f72->enter($__internal_fd4f771c0ff4542359945979d612f429fbe804c00f00034b7e792dec32528f72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_77e0d4eed27959e981af8d445258e3b4f10670a6debef5872134f0a27494eae1->leave($__internal_77e0d4eed27959e981af8d445258e3b4f10670a6debef5872134f0a27494eae1_prof);

        
        $__internal_fd4f771c0ff4542359945979d612f429fbe804c00f00034b7e792dec32528f72->leave($__internal_fd4f771c0ff4542359945979d612f429fbe804c00f00034b7e792dec32528f72_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_aca32afb29541d5dfa5cba0f821c2d60d042faceab49b12d717a34a96ba59f98 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aca32afb29541d5dfa5cba0f821c2d60d042faceab49b12d717a34a96ba59f98->enter($__internal_aca32afb29541d5dfa5cba0f821c2d60d042faceab49b12d717a34a96ba59f98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_42a673fed12e2e3b67b8c1059213269c2da9f63730b38bb2eaf8e065ff915948 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_42a673fed12e2e3b67b8c1059213269c2da9f63730b38bb2eaf8e065ff915948->enter($__internal_42a673fed12e2e3b67b8c1059213269c2da9f63730b38bb2eaf8e065ff915948_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_42a673fed12e2e3b67b8c1059213269c2da9f63730b38bb2eaf8e065ff915948->leave($__internal_42a673fed12e2e3b67b8c1059213269c2da9f63730b38bb2eaf8e065ff915948_prof);

        
        $__internal_aca32afb29541d5dfa5cba0f821c2d60d042faceab49b12d717a34a96ba59f98->leave($__internal_aca32afb29541d5dfa5cba0f821c2d60d042faceab49b12d717a34a96ba59f98_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_0d68dfa1ba23c2be38211fe395fd14a92e4cb8171fd65325bd41920326e1318b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0d68dfa1ba23c2be38211fe395fd14a92e4cb8171fd65325bd41920326e1318b->enter($__internal_0d68dfa1ba23c2be38211fe395fd14a92e4cb8171fd65325bd41920326e1318b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_fe27bee69181aa1a0ca01c955e2f85a75f30e8df912ec3f366c6e88b4447a58a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fe27bee69181aa1a0ca01c955e2f85a75f30e8df912ec3f366c6e88b4447a58a->enter($__internal_fe27bee69181aa1a0ca01c955e2f85a75f30e8df912ec3f366c6e88b4447a58a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_fe27bee69181aa1a0ca01c955e2f85a75f30e8df912ec3f366c6e88b4447a58a->leave($__internal_fe27bee69181aa1a0ca01c955e2f85a75f30e8df912ec3f366c6e88b4447a58a_prof);

        
        $__internal_0d68dfa1ba23c2be38211fe395fd14a92e4cb8171fd65325bd41920326e1318b->leave($__internal_0d68dfa1ba23c2be38211fe395fd14a92e4cb8171fd65325bd41920326e1318b_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_369beaeba6f59651be69b09c0168c699bba6d47f598b4db3e095b8b645f344ec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_369beaeba6f59651be69b09c0168c699bba6d47f598b4db3e095b8b645f344ec->enter($__internal_369beaeba6f59651be69b09c0168c699bba6d47f598b4db3e095b8b645f344ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_2721184d34192f9b56cd20ff0a7c9992daa6139e71b13dabe445b613c30371d6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2721184d34192f9b56cd20ff0a7c9992daa6139e71b13dabe445b613c30371d6->enter($__internal_2721184d34192f9b56cd20ff0a7c9992daa6139e71b13dabe445b613c30371d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_2721184d34192f9b56cd20ff0a7c9992daa6139e71b13dabe445b613c30371d6->leave($__internal_2721184d34192f9b56cd20ff0a7c9992daa6139e71b13dabe445b613c30371d6_prof);

        
        $__internal_369beaeba6f59651be69b09c0168c699bba6d47f598b4db3e095b8b645f344ec->leave($__internal_369beaeba6f59651be69b09c0168c699bba6d47f598b4db3e095b8b645f344ec_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.html.twig";
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
", "WebProfilerBundle:Collector:exception.html.twig", "C:\\Users\\11500384\\Documents\\GitHub\\Web-Mobile-Project\\WP3\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
