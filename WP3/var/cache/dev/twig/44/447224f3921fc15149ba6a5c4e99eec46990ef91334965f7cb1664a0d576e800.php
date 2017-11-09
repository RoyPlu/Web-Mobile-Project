<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_c3b3687db4d7e780c15bcb34cde2c97170ac0e1b5d611bdea3185bae3b44407f extends Twig_Template
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
        $__internal_6715dd36feaf85eb99ab4b8d128a0789526919df91db1cbd0330025d29fa1000 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6715dd36feaf85eb99ab4b8d128a0789526919df91db1cbd0330025d29fa1000->enter($__internal_6715dd36feaf85eb99ab4b8d128a0789526919df91db1cbd0330025d29fa1000_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        $__internal_2ad90ec5b702f57a70ca6820b4c0cf646dd049193ae120c77316a9342947abb4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ad90ec5b702f57a70ca6820b4c0cf646dd049193ae120c77316a9342947abb4->enter($__internal_2ad90ec5b702f57a70ca6820b4c0cf646dd049193ae120c77316a9342947abb4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
*/
";
        
        $__internal_6715dd36feaf85eb99ab4b8d128a0789526919df91db1cbd0330025d29fa1000->leave($__internal_6715dd36feaf85eb99ab4b8d128a0789526919df91db1cbd0330025d29fa1000_prof);

        
        $__internal_2ad90ec5b702f57a70ca6820b4c0cf646dd049193ae120c77316a9342947abb4->leave($__internal_2ad90ec5b702f57a70ca6820b4c0cf646dd049193ae120c77316a9342947abb4_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
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
", "TwigBundle:Exception:exception.css.twig", "C:\\Users\\11500384\\Documents\\GitHub\\Web-Mobile-Project\\WP3\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.css.twig");
    }
}
