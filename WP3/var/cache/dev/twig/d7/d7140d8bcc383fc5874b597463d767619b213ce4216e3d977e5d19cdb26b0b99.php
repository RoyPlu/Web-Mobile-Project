<?php

/* @Twig/Exception/error.css.twig */
class __TwigTemplate_eefe215a66c8104e90f879b6ab4cf695b9d9195b49254f2a3e3bc7437f58f457 extends Twig_Template
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
        $__internal_f5dd92e25718dc54e6726ce9e67d3002d2775ecb09352606ec3a690d751f30ab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f5dd92e25718dc54e6726ce9e67d3002d2775ecb09352606ec3a690d751f30ab->enter($__internal_f5dd92e25718dc54e6726ce9e67d3002d2775ecb09352606ec3a690d751f30ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

        $__internal_c8588be9e0a6f28a6ec4ee85925f035f0ddb3c60ba80b457bb322d30080f7a31 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c8588be9e0a6f28a6ec4ee85925f035f0ddb3c60ba80b457bb322d30080f7a31->enter($__internal_c8588be9e0a6f28a6ec4ee85925f035f0ddb3c60ba80b457bb322d30080f7a31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_f5dd92e25718dc54e6726ce9e67d3002d2775ecb09352606ec3a690d751f30ab->leave($__internal_f5dd92e25718dc54e6726ce9e67d3002d2775ecb09352606ec3a690d751f30ab_prof);

        
        $__internal_c8588be9e0a6f28a6ec4ee85925f035f0ddb3c60ba80b457bb322d30080f7a31->leave($__internal_c8588be9e0a6f28a6ec4ee85925f035f0ddb3c60ba80b457bb322d30080f7a31_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.css.twig";
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
", "@Twig/Exception/error.css.twig", "C:\\Users\\11500384\\Documents\\GitHub\\Web-Mobile-Project\\WP3\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.css.twig");
    }
}
