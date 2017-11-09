<?php

/* WebProfilerBundle:Collector:ajax.html.twig */
class __TwigTemplate_c7d75b6f4c6a3185de22070a8b91f0125e4017136424cce0144ba3fa94ddc06f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_bcf61fa2d43a5e50d6607b8bed95f0b3d478ac6379163d8ca680ccb88ca586ed = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bcf61fa2d43a5e50d6607b8bed95f0b3d478ac6379163d8ca680ccb88ca586ed->enter($__internal_bcf61fa2d43a5e50d6607b8bed95f0b3d478ac6379163d8ca680ccb88ca586ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $__internal_42176cf5c050166e71a8391b36a8ee058a28a0e1d258178bc367f397bcc804eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_42176cf5c050166e71a8391b36a8ee058a28a0e1d258178bc367f397bcc804eb->enter($__internal_42176cf5c050166e71a8391b36a8ee058a28a0e1d258178bc367f397bcc804eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bcf61fa2d43a5e50d6607b8bed95f0b3d478ac6379163d8ca680ccb88ca586ed->leave($__internal_bcf61fa2d43a5e50d6607b8bed95f0b3d478ac6379163d8ca680ccb88ca586ed_prof);

        
        $__internal_42176cf5c050166e71a8391b36a8ee058a28a0e1d258178bc367f397bcc804eb->leave($__internal_42176cf5c050166e71a8391b36a8ee058a28a0e1d258178bc367f397bcc804eb_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_d63a61536d98c9211231023665ff22d3b69a186f37959e921df6129e467cd77a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d63a61536d98c9211231023665ff22d3b69a186f37959e921df6129e467cd77a->enter($__internal_d63a61536d98c9211231023665ff22d3b69a186f37959e921df6129e467cd77a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_aed8f3d3c5ea8a98288f4bebf6b5b9ae404d8099c3fe0c75d39a54f7451556ce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aed8f3d3c5ea8a98288f4bebf6b5b9ae404d8099c3fe0c75d39a54f7451556ce->enter($__internal_aed8f3d3c5ea8a98288f4bebf6b5b9ae404d8099c3fe0c75d39a54f7451556ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_aed8f3d3c5ea8a98288f4bebf6b5b9ae404d8099c3fe0c75d39a54f7451556ce->leave($__internal_aed8f3d3c5ea8a98288f4bebf6b5b9ae404d8099c3fe0c75d39a54f7451556ce_prof);

        
        $__internal_d63a61536d98c9211231023665ff22d3b69a186f37959e921df6129e467cd77a->leave($__internal_d63a61536d98c9211231023665ff22d3b69a186f37959e921df6129e467cd77a_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "WebProfilerBundle:Collector:ajax.html.twig", "C:\\Users\\11500384\\Documents\\GitHub\\Web-Mobile-Project\\WP3\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}
