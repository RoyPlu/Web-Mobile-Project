<?php

/* @Twig/Exception/exception.js.twig */
class __TwigTemplate_3f16bd6e92c62ae4ff11e44fb2a4a617eaf443af56cc18f9fe10a9f9c5f76ee2 extends Twig_Template
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
        $__internal_20ad7c4137cd38e58fe35629f447d759eaa4f778de125ea1eca39cea69e2a7ca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_20ad7c4137cd38e58fe35629f447d759eaa4f778de125ea1eca39cea69e2a7ca->enter($__internal_20ad7c4137cd38e58fe35629f447d759eaa4f778de125ea1eca39cea69e2a7ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        $__internal_0d913befc07cc1a42ac1cbd9359dd95517fd7395a2c2998c0442e42ca3cdb7f8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0d913befc07cc1a42ac1cbd9359dd95517fd7395a2c2998c0442e42ca3cdb7f8->enter($__internal_0d913befc07cc1a42ac1cbd9359dd95517fd7395a2c2998c0442e42ca3cdb7f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
*/
";
        
        $__internal_20ad7c4137cd38e58fe35629f447d759eaa4f778de125ea1eca39cea69e2a7ca->leave($__internal_20ad7c4137cd38e58fe35629f447d759eaa4f778de125ea1eca39cea69e2a7ca_prof);

        
        $__internal_0d913befc07cc1a42ac1cbd9359dd95517fd7395a2c2998c0442e42ca3cdb7f8->leave($__internal_0d913befc07cc1a42ac1cbd9359dd95517fd7395a2c2998c0442e42ca3cdb7f8_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.js.twig";
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
", "@Twig/Exception/exception.js.twig", "C:\\Users\\11500384\\Documents\\GitHub\\Web-Mobile-Project\\WP3\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.js.twig");
    }
}
