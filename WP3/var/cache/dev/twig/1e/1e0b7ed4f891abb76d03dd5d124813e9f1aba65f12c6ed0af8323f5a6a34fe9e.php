<?php

/* @Twig/Exception/error.js.twig */
class __TwigTemplate_c1f258f52ab6e021b89ce3317bb5a7109e2857f83385a158ade88c470d781a53 extends Twig_Template
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
        $__internal_58bcbd274649534a3353a73fccae5743557262a1033fb61ec024f73500407bc9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_58bcbd274649534a3353a73fccae5743557262a1033fb61ec024f73500407bc9->enter($__internal_58bcbd274649534a3353a73fccae5743557262a1033fb61ec024f73500407bc9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

        $__internal_dcbaefa667a7e04136f883f2956ab9bff45aa5215a6a702cd31cbe6a094b9f6a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dcbaefa667a7e04136f883f2956ab9bff45aa5215a6a702cd31cbe6a094b9f6a->enter($__internal_dcbaefa667a7e04136f883f2956ab9bff45aa5215a6a702cd31cbe6a094b9f6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_58bcbd274649534a3353a73fccae5743557262a1033fb61ec024f73500407bc9->leave($__internal_58bcbd274649534a3353a73fccae5743557262a1033fb61ec024f73500407bc9_prof);

        
        $__internal_dcbaefa667a7e04136f883f2956ab9bff45aa5215a6a702cd31cbe6a094b9f6a->leave($__internal_dcbaefa667a7e04136f883f2956ab9bff45aa5215a6a702cd31cbe6a094b9f6a_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.js.twig";
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
{{ status_code }} {{ status_text }}

*/
", "@Twig/Exception/error.js.twig", "C:\\Users\\11500384\\Documents\\GitHub\\Web-Mobile-Project\\WP3\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.js.twig");
    }
}
