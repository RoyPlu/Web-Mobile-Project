<?php

/* @Twig/Exception/exception.css.twig */
class __TwigTemplate_3b720ad5a78ee950d77f8afe647fbefbbcac94e4dc42bdea0ada3fe970d57725 extends Twig_Template
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
        $__internal_ee35d15b640100a0344d4480417b6743a58ecba136e5d7a5b421eda68c3dd253 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ee35d15b640100a0344d4480417b6743a58ecba136e5d7a5b421eda68c3dd253->enter($__internal_ee35d15b640100a0344d4480417b6743a58ecba136e5d7a5b421eda68c3dd253_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        $__internal_8c73dcbccc54c41c430d93d565c39ee3b058626475ebf4dfed3e7e790a149e33 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c73dcbccc54c41c430d93d565c39ee3b058626475ebf4dfed3e7e790a149e33->enter($__internal_8c73dcbccc54c41c430d93d565c39ee3b058626475ebf4dfed3e7e790a149e33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
*/
";
        
        $__internal_ee35d15b640100a0344d4480417b6743a58ecba136e5d7a5b421eda68c3dd253->leave($__internal_ee35d15b640100a0344d4480417b6743a58ecba136e5d7a5b421eda68c3dd253_prof);

        
        $__internal_8c73dcbccc54c41c430d93d565c39ee3b058626475ebf4dfed3e7e790a149e33->leave($__internal_8c73dcbccc54c41c430d93d565c39ee3b058626475ebf4dfed3e7e790a149e33_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.css.twig";
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
", "@Twig/Exception/exception.css.twig", "C:\\Users\\11500384\\Documents\\GitHub\\Web-Mobile-Project\\WP3\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.css.twig");
    }
}
