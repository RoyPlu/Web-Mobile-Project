<?php

/* @Twig/Exception/exception.rdf.twig */
class __TwigTemplate_1dc8cf45edab51eeafb05318c01d68d2ac4c92a51b78e2f6fcaed50cddd3912c extends Twig_Template
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
        $__internal_df4f130336f5f8f5be79e76d81ef1faac118744a5ba942cf51885021720f68ea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_df4f130336f5f8f5be79e76d81ef1faac118744a5ba942cf51885021720f68ea->enter($__internal_df4f130336f5f8f5be79e76d81ef1faac118744a5ba942cf51885021720f68ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        $__internal_a0eeacf9b3913c85188a2512bf0ced5d4b9144e60cb620221e1d6e4bbefb5b8e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a0eeacf9b3913c85188a2512bf0ced5d4b9144e60cb620221e1d6e4bbefb5b8e->enter($__internal_a0eeacf9b3913c85188a2512bf0ced5d4b9144e60cb620221e1d6e4bbefb5b8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
";
        
        $__internal_df4f130336f5f8f5be79e76d81ef1faac118744a5ba942cf51885021720f68ea->leave($__internal_df4f130336f5f8f5be79e76d81ef1faac118744a5ba942cf51885021720f68ea_prof);

        
        $__internal_a0eeacf9b3913c85188a2512bf0ced5d4b9144e60cb620221e1d6e4bbefb5b8e->leave($__internal_a0eeacf9b3913c85188a2512bf0ced5d4b9144e60cb620221e1d6e4bbefb5b8e_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.rdf.twig";
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
", "@Twig/Exception/exception.rdf.twig", "C:\\Users\\11500384\\Documents\\GitHub\\Web-Mobile-Project\\WP3\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.rdf.twig");
    }
}
