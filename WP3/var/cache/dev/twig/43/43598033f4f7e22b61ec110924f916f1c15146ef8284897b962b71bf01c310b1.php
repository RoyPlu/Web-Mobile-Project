<?php

/* @Twig/Exception/error.rdf.twig */
class __TwigTemplate_04113541e54b72efbe0bde2db0ad51ce980c2fd3b06071b618da70533e663e40 extends Twig_Template
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
        $__internal_d89ea66e80f8dbdaa2caa09ae1ae6149e0113b5739574e59e2bc84439ad36387 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d89ea66e80f8dbdaa2caa09ae1ae6149e0113b5739574e59e2bc84439ad36387->enter($__internal_d89ea66e80f8dbdaa2caa09ae1ae6149e0113b5739574e59e2bc84439ad36387_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        $__internal_79487057a720cfe0db4b404e2a3acb7a78e640deddfd41b441e31b64ed9d726f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_79487057a720cfe0db4b404e2a3acb7a78e640deddfd41b441e31b64ed9d726f->enter($__internal_79487057a720cfe0db4b404e2a3acb7a78e640deddfd41b441e31b64ed9d726f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_d89ea66e80f8dbdaa2caa09ae1ae6149e0113b5739574e59e2bc84439ad36387->leave($__internal_d89ea66e80f8dbdaa2caa09ae1ae6149e0113b5739574e59e2bc84439ad36387_prof);

        
        $__internal_79487057a720cfe0db4b404e2a3acb7a78e640deddfd41b441e31b64ed9d726f->leave($__internal_79487057a720cfe0db4b404e2a3acb7a78e640deddfd41b441e31b64ed9d726f_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.rdf.twig";
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
        return new Twig_Source("{{ include('@Twig/Exception/error.xml.twig') }}
", "@Twig/Exception/error.rdf.twig", "C:\\Users\\11500384\\Documents\\GitHub\\Web-Mobile-Project\\WP3\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.rdf.twig");
    }
}
