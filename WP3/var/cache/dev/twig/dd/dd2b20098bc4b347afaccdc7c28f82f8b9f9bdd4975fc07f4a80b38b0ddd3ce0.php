<?php

/* @Twig/Exception/error.atom.twig */
class __TwigTemplate_216180dd67c50f963ee3aaeb8f32af49e9daf4dbec518aae9b66fafa8fb9b3fc extends Twig_Template
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
        $__internal_fa031ce7bd63c6925c38aac8ad7eb3aa9556ce47bf82aa98dfe475124fecceb8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fa031ce7bd63c6925c38aac8ad7eb3aa9556ce47bf82aa98dfe475124fecceb8->enter($__internal_fa031ce7bd63c6925c38aac8ad7eb3aa9556ce47bf82aa98dfe475124fecceb8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        $__internal_dc8a59c11e2ef1db5398e9c5c8be23768f38cf6587453f9d9ef1d7a1b2f0c83f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc8a59c11e2ef1db5398e9c5c8be23768f38cf6587453f9d9ef1d7a1b2f0c83f->enter($__internal_dc8a59c11e2ef1db5398e9c5c8be23768f38cf6587453f9d9ef1d7a1b2f0c83f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_fa031ce7bd63c6925c38aac8ad7eb3aa9556ce47bf82aa98dfe475124fecceb8->leave($__internal_fa031ce7bd63c6925c38aac8ad7eb3aa9556ce47bf82aa98dfe475124fecceb8_prof);

        
        $__internal_dc8a59c11e2ef1db5398e9c5c8be23768f38cf6587453f9d9ef1d7a1b2f0c83f->leave($__internal_dc8a59c11e2ef1db5398e9c5c8be23768f38cf6587453f9d9ef1d7a1b2f0c83f_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.atom.twig";
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
", "@Twig/Exception/error.atom.twig", "C:\\Users\\11500384\\Documents\\GitHub\\Web-Mobile-Project\\WP3\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.atom.twig");
    }
}
