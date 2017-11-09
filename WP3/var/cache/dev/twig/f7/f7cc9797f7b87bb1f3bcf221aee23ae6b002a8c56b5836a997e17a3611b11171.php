<?php

/* @Twig/Exception/exception.atom.twig */
class __TwigTemplate_4f95640733a68d5cf799195a18aa10f3ae8e03e2fbe796501a17a52a6e9d6770 extends Twig_Template
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
        $__internal_af40e828c7beb4c14cda31c67887351be4954fd19061454ac732e8963cb0295d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_af40e828c7beb4c14cda31c67887351be4954fd19061454ac732e8963cb0295d->enter($__internal_af40e828c7beb4c14cda31c67887351be4954fd19061454ac732e8963cb0295d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        $__internal_ce8f34157ebcf924b6a79d2fb3a56d8b429b2dab6b379f09016899d15bfe5cd3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce8f34157ebcf924b6a79d2fb3a56d8b429b2dab6b379f09016899d15bfe5cd3->enter($__internal_ce8f34157ebcf924b6a79d2fb3a56d8b429b2dab6b379f09016899d15bfe5cd3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
";
        
        $__internal_af40e828c7beb4c14cda31c67887351be4954fd19061454ac732e8963cb0295d->leave($__internal_af40e828c7beb4c14cda31c67887351be4954fd19061454ac732e8963cb0295d_prof);

        
        $__internal_ce8f34157ebcf924b6a79d2fb3a56d8b429b2dab6b379f09016899d15bfe5cd3->leave($__internal_ce8f34157ebcf924b6a79d2fb3a56d8b429b2dab6b379f09016899d15bfe5cd3_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.atom.twig";
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
", "@Twig/Exception/exception.atom.twig", "C:\\Users\\11500384\\Documents\\GitHub\\Web-Mobile-Project\\WP3\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.atom.twig");
    }
}
