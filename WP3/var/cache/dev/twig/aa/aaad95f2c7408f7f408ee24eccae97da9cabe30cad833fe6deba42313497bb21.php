<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_ece50ff3b644ec28d824c5495f36a5b85362f9458d55db91e663fe9535f63752 extends Twig_Template
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
        $__internal_70f8f762d4236982de2da6e36bf8fd8b268da185cce7b021aec151d48ee1601c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_70f8f762d4236982de2da6e36bf8fd8b268da185cce7b021aec151d48ee1601c->enter($__internal_70f8f762d4236982de2da6e36bf8fd8b268da185cce7b021aec151d48ee1601c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        $__internal_a04c5c8fa11ee56349cca3875cf6ebf766b45cd90f236c6826dd93ff2a2c2441 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a04c5c8fa11ee56349cca3875cf6ebf766b45cd90f236c6826dd93ff2a2c2441->enter($__internal_a04c5c8fa11ee56349cca3875cf6ebf766b45cd90f236c6826dd93ff2a2c2441_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
";
        
        $__internal_70f8f762d4236982de2da6e36bf8fd8b268da185cce7b021aec151d48ee1601c->leave($__internal_70f8f762d4236982de2da6e36bf8fd8b268da185cce7b021aec151d48ee1601c_prof);

        
        $__internal_a04c5c8fa11ee56349cca3875cf6ebf766b45cd90f236c6826dd93ff2a2c2441->leave($__internal_a04c5c8fa11ee56349cca3875cf6ebf766b45cd90f236c6826dd93ff2a2c2441_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ include('@Twig/Exception/exception.xml.twig', { exception: exception }) }}
", "TwigBundle:Exception:exception.atom.twig", "C:\\Users\\11500384\\Documents\\GitHub\\Web-Mobile-Project\\WP3\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.atom.twig");
    }
}
