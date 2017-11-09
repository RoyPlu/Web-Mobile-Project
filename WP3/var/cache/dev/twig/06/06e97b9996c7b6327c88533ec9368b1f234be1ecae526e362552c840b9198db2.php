<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_6f055778700a1ed6fb9e2a124b07e0dc01e053e951c5634cabd2b5e00f8ac966 extends Twig_Template
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
        $__internal_a242f2208f0d94e69e1c60a147e98cce38a75daf97b4c04672524a8ea35cdf3a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a242f2208f0d94e69e1c60a147e98cce38a75daf97b4c04672524a8ea35cdf3a->enter($__internal_a242f2208f0d94e69e1c60a147e98cce38a75daf97b4c04672524a8ea35cdf3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        $__internal_b86c0eba94ec0fc3ab8dbc597993ebbf63d5ef3a92dc4ebcdc42a8ae94810dcf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b86c0eba94ec0fc3ab8dbc597993ebbf63d5ef3a92dc4ebcdc42a8ae94810dcf->enter($__internal_b86c0eba94ec0fc3ab8dbc597993ebbf63d5ef3a92dc4ebcdc42a8ae94810dcf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => ($context["status_code"] ?? $this->getContext($context, "status_code")), "message" => ($context["status_text"] ?? $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_a242f2208f0d94e69e1c60a147e98cce38a75daf97b4c04672524a8ea35cdf3a->leave($__internal_a242f2208f0d94e69e1c60a147e98cce38a75daf97b4c04672524a8ea35cdf3a_prof);

        
        $__internal_b86c0eba94ec0fc3ab8dbc597993ebbf63d5ef3a92dc4ebcdc42a8ae94810dcf->leave($__internal_b86c0eba94ec0fc3ab8dbc597993ebbf63d5ef3a92dc4ebcdc42a8ae94810dcf_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}
", "TwigBundle:Exception:error.json.twig", "C:\\Users\\11500384\\Documents\\GitHub\\Web-Mobile-Project\\WP3\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.json.twig");
    }
}
