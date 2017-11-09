<?php

/* @Twig/Exception/traces.xml.twig */
class __TwigTemplate_9088f6f6278c4d6ad30a2a83d22a31fa4c897cec0907da81ebb4df44c1e136bd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9f984dbcf905ce873158b5d12423d8eaa363c73c3298d41681957c2cffc5a5bd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9f984dbcf905ce873158b5d12423d8eaa363c73c3298d41681957c2cffc5a5bd->enter($__internal_9f984dbcf905ce873158b5d12423d8eaa363c73c3298d41681957c2cffc5a5bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.xml.twig"));

        $__internal_2c1bb9ed873e21768590e8b16aae01c840817436e8e37b62779c7181d8265037 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2c1bb9ed873e21768590e8b16aae01c840817436e8e37b62779c7181d8265037->enter($__internal_2c1bb9ed873e21768590e8b16aae01c840817436e8e37b62779c7181d8265037_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.xml.twig"));

        // line 1
        echo "        <traces>
";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "trace", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
            // line 3
            echo "            <trace>
";
            // line 4
            echo twig_include($this->env, $context, "@Twig/Exception/trace.txt.twig", array("trace" => $context["trace"]), false);
            echo "

            </trace>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo "        </traces>
";
        
        $__internal_9f984dbcf905ce873158b5d12423d8eaa363c73c3298d41681957c2cffc5a5bd->leave($__internal_9f984dbcf905ce873158b5d12423d8eaa363c73c3298d41681957c2cffc5a5bd_prof);

        
        $__internal_2c1bb9ed873e21768590e8b16aae01c840817436e8e37b62779c7181d8265037->leave($__internal_2c1bb9ed873e21768590e8b16aae01c840817436e8e37b62779c7181d8265037_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/traces.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 8,  35 => 4,  32 => 3,  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("        <traces>
{% for trace in exception.trace %}
            <trace>
{{ include('@Twig/Exception/trace.txt.twig', { trace: trace }, with_context = false) }}

            </trace>
{% endfor %}
        </traces>
", "@Twig/Exception/traces.xml.twig", "C:\\Users\\11500384\\Documents\\GitHub\\Web-Mobile-Project\\WP3\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\traces.xml.twig");
    }
}
