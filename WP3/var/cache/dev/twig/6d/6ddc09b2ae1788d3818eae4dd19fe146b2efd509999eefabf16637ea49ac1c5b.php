<?php

/* @Twig/Exception/exception.json.twig */
class __TwigTemplate_0f54549387ec44ba90b4fd479a3f8866692348bc8f71632c49f2e5d2d192313c extends Twig_Template
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
        $__internal_14ded3d0a90076eac3604e1e846d2b5d4a41430184518154c38bfe7f2f2337ab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_14ded3d0a90076eac3604e1e846d2b5d4a41430184518154c38bfe7f2f2337ab->enter($__internal_14ded3d0a90076eac3604e1e846d2b5d4a41430184518154c38bfe7f2f2337ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        $__internal_77fd45725efd7ba28ca49fe8ff973e6aa28dcfecd9d877875f3cea3c14d8c210 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_77fd45725efd7ba28ca49fe8ff973e6aa28dcfecd9d877875f3cea3c14d8c210->enter($__internal_77fd45725efd7ba28ca49fe8ff973e6aa28dcfecd9d877875f3cea3c14d8c210_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => ($context["status_code"] ?? $this->getContext($context, "status_code")), "message" => ($context["status_text"] ?? $this->getContext($context, "status_text")), "exception" => $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_14ded3d0a90076eac3604e1e846d2b5d4a41430184518154c38bfe7f2f2337ab->leave($__internal_14ded3d0a90076eac3604e1e846d2b5d4a41430184518154c38bfe7f2f2337ab_prof);

        
        $__internal_77fd45725efd7ba28ca49fe8ff973e6aa28dcfecd9d877875f3cea3c14d8c210->leave($__internal_77fd45725efd7ba28ca49fe8ff973e6aa28dcfecd9d877875f3cea3c14d8c210_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.json.twig";
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
", "@Twig/Exception/exception.json.twig", "C:\\Users\\11500384\\Documents\\GitHub\\Web-Mobile-Project\\WP3\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.json.twig");
    }
}
