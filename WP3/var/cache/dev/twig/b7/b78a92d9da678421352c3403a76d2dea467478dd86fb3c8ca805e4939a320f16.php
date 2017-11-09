<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_6a523ded7db85c60d66359ccbf04efb533eeb0ba30dee6b79bfe8c8916ace336 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2bc1073f35d16b363e3a50a150de8ae706920946391d1ba3844d6d6cc8a1fbb7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2bc1073f35d16b363e3a50a150de8ae706920946391d1ba3844d6d6cc8a1fbb7->enter($__internal_2bc1073f35d16b363e3a50a150de8ae706920946391d1ba3844d6d6cc8a1fbb7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $__internal_7ad3f8c73324ced9b3fd6a697b194eb0628f41018135340c9557ea319011bee6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7ad3f8c73324ced9b3fd6a697b194eb0628f41018135340c9557ea319011bee6->enter($__internal_7ad3f8c73324ced9b3fd6a697b194eb0628f41018135340c9557ea319011bee6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2bc1073f35d16b363e3a50a150de8ae706920946391d1ba3844d6d6cc8a1fbb7->leave($__internal_2bc1073f35d16b363e3a50a150de8ae706920946391d1ba3844d6d6cc8a1fbb7_prof);

        
        $__internal_7ad3f8c73324ced9b3fd6a697b194eb0628f41018135340c9557ea319011bee6->leave($__internal_7ad3f8c73324ced9b3fd6a697b194eb0628f41018135340c9557ea319011bee6_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_791c8a0b26a90d5ffc0aed9fbaa43846435e9f2b3c1b360f2a898017b0a1b3ea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_791c8a0b26a90d5ffc0aed9fbaa43846435e9f2b3c1b360f2a898017b0a1b3ea->enter($__internal_791c8a0b26a90d5ffc0aed9fbaa43846435e9f2b3c1b360f2a898017b0a1b3ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_cb3fa19878d8b5b4b8689555ba212c85e4a8e1500fccf436f2ae8c5de9be734e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cb3fa19878d8b5b4b8689555ba212c85e4a8e1500fccf436f2ae8c5de9be734e->enter($__internal_cb3fa19878d8b5b4b8689555ba212c85e4a8e1500fccf436f2ae8c5de9be734e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_cb3fa19878d8b5b4b8689555ba212c85e4a8e1500fccf436f2ae8c5de9be734e->leave($__internal_cb3fa19878d8b5b4b8689555ba212c85e4a8e1500fccf436f2ae8c5de9be734e_prof);

        
        $__internal_791c8a0b26a90d5ffc0aed9fbaa43846435e9f2b3c1b360f2a898017b0a1b3ea->leave($__internal_791c8a0b26a90d5ffc0aed9fbaa43846435e9f2b3c1b360f2a898017b0a1b3ea_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_3134c4488acc35a0fb2075d0437feb8012aea733840db99aecb0d003b659f3cd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3134c4488acc35a0fb2075d0437feb8012aea733840db99aecb0d003b659f3cd->enter($__internal_3134c4488acc35a0fb2075d0437feb8012aea733840db99aecb0d003b659f3cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_53af014456995059bb84933a11da628a09c808200b1bfdf360db1705ec483d45 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_53af014456995059bb84933a11da628a09c808200b1bfdf360db1705ec483d45->enter($__internal_53af014456995059bb84933a11da628a09c808200b1bfdf360db1705ec483d45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_53af014456995059bb84933a11da628a09c808200b1bfdf360db1705ec483d45->leave($__internal_53af014456995059bb84933a11da628a09c808200b1bfdf360db1705ec483d45_prof);

        
        $__internal_3134c4488acc35a0fb2075d0437feb8012aea733840db99aecb0d003b659f3cd->leave($__internal_3134c4488acc35a0fb2075d0437feb8012aea733840db99aecb0d003b659f3cd_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 8,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", "C:\\Users\\11500384\\Documents\\GitHub\\Web-Mobile-Project\\WP3\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
