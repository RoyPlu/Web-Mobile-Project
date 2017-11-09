<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_e6388d989031f1b34174fa2d5edba9bd3a8afbf42f8c35b66c4eb200b61e1f67 extends Twig_Template
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
        $__internal_4fe490c87e2fb7e2336644fde5aafc15834ed160b538252ab2fab83f2075489b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4fe490c87e2fb7e2336644fde5aafc15834ed160b538252ab2fab83f2075489b->enter($__internal_4fe490c87e2fb7e2336644fde5aafc15834ed160b538252ab2fab83f2075489b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        $__internal_352a4900111ba3b0c73b0072b4e8267e7da88ebfc6cac15c3415ff07cb0bec98 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_352a4900111ba3b0c73b0072b4e8267e7da88ebfc6cac15c3415ff07cb0bec98->enter($__internal_352a4900111ba3b0c73b0072b4e8267e7da88ebfc6cac15c3415ff07cb0bec98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => ($context["status_code"] ?? $this->getContext($context, "status_code")), "message" => ($context["status_text"] ?? $this->getContext($context, "status_text")), "exception" => $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_4fe490c87e2fb7e2336644fde5aafc15834ed160b538252ab2fab83f2075489b->leave($__internal_4fe490c87e2fb7e2336644fde5aafc15834ed160b538252ab2fab83f2075489b_prof);

        
        $__internal_352a4900111ba3b0c73b0072b4e8267e7da88ebfc6cac15c3415ff07cb0bec98->leave($__internal_352a4900111ba3b0c73b0072b4e8267e7da88ebfc6cac15c3415ff07cb0bec98_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}
", "TwigBundle:Exception:exception.json.twig", "C:\\Users\\11500384\\Documents\\GitHub\\Web-Mobile-Project\\WP3\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.json.twig");
    }
}
