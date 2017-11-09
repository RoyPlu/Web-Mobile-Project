<?php

/* TwigBundle:Exception:traces.xml.twig */
class __TwigTemplate_65b714d25bf5a60679775bd5d7b53edf38232fd068428a81150360a7a6fd913f extends Twig_Template
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
        $__internal_3a72ceda2e673360de988b8680f5c4af369b251fbe79ad91489253d3bcc82ed5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3a72ceda2e673360de988b8680f5c4af369b251fbe79ad91489253d3bcc82ed5->enter($__internal_3a72ceda2e673360de988b8680f5c4af369b251fbe79ad91489253d3bcc82ed5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.xml.twig"));

        $__internal_c14bcca8769bbe930f6e52ec246cb8e428feb3d831416fe4e30813379e3164c3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c14bcca8769bbe930f6e52ec246cb8e428feb3d831416fe4e30813379e3164c3->enter($__internal_c14bcca8769bbe930f6e52ec246cb8e428feb3d831416fe4e30813379e3164c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.xml.twig"));

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
        
        $__internal_3a72ceda2e673360de988b8680f5c4af369b251fbe79ad91489253d3bcc82ed5->leave($__internal_3a72ceda2e673360de988b8680f5c4af369b251fbe79ad91489253d3bcc82ed5_prof);

        
        $__internal_c14bcca8769bbe930f6e52ec246cb8e428feb3d831416fe4e30813379e3164c3->leave($__internal_c14bcca8769bbe930f6e52ec246cb8e428feb3d831416fe4e30813379e3164c3_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:traces.xml.twig";
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
", "TwigBundle:Exception:traces.xml.twig", "C:\\Users\\11500384\\Documents\\GitHub\\Web-Mobile-Project\\WP3\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/traces.xml.twig");
    }
}
