<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_bc1d6c528da12626efc7fb9b80f806d50f7606e901bcdfbb073df3f52d11bfcc extends Twig_Template
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
        $__internal_214aa4052feb7aa5b094d204e297067a753909f87be9d9a4d7ea69d3e178fbdf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_214aa4052feb7aa5b094d204e297067a753909f87be9d9a4d7ea69d3e178fbdf->enter($__internal_214aa4052feb7aa5b094d204e297067a753909f87be9d9a4d7ea69d3e178fbdf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        $__internal_298bd79a303b4ceec8494370b6c1e3a54406e68583b95bb1233d33db5fe20ec5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_298bd79a303b4ceec8494370b6c1e3a54406e68583b95bb1233d33db5fe20ec5->enter($__internal_298bd79a303b4ceec8494370b6c1e3a54406e68583b95bb1233d33db5fe20ec5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
*/
";
        
        $__internal_214aa4052feb7aa5b094d204e297067a753909f87be9d9a4d7ea69d3e178fbdf->leave($__internal_214aa4052feb7aa5b094d204e297067a753909f87be9d9a4d7ea69d3e178fbdf_prof);

        
        $__internal_298bd79a303b4ceec8494370b6c1e3a54406e68583b95bb1233d33db5fe20ec5->leave($__internal_298bd79a303b4ceec8494370b6c1e3a54406e68583b95bb1233d33db5fe20ec5_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{{ include('@Twig/Exception/exception.txt.twig', { exception: exception }) }}
*/
", "TwigBundle:Exception:exception.js.twig", "C:\\Users\\11500384\\Documents\\GitHub\\Web-Mobile-Project\\WP3\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.js.twig");
    }
}
