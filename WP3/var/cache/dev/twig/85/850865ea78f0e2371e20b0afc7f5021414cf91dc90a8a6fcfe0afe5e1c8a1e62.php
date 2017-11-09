<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_5bd7f8a780af153f7b032cdcf8ff8bed527ab6abfb102758ecf7625f9382938d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_086850115c0b386749a98eb9e37b96cbaf1a04c250e27341528e9971a17bc00f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_086850115c0b386749a98eb9e37b96cbaf1a04c250e27341528e9971a17bc00f->enter($__internal_086850115c0b386749a98eb9e37b96cbaf1a04c250e27341528e9971a17bc00f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_c8666acd83e8eaba600b9dba27eda868e8514fae4e3ab5c77e4d5a812678ba9c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c8666acd83e8eaba600b9dba27eda868e8514fae4e3ab5c77e4d5a812678ba9c->enter($__internal_c8666acd83e8eaba600b9dba27eda868e8514fae4e3ab5c77e4d5a812678ba9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_086850115c0b386749a98eb9e37b96cbaf1a04c250e27341528e9971a17bc00f->leave($__internal_086850115c0b386749a98eb9e37b96cbaf1a04c250e27341528e9971a17bc00f_prof);

        
        $__internal_c8666acd83e8eaba600b9dba27eda868e8514fae4e3ab5c77e4d5a812678ba9c->leave($__internal_c8666acd83e8eaba600b9dba27eda868e8514fae4e3ab5c77e4d5a812678ba9c_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_940a5a45f8adb573e0279041512915721481296baf65fc0292c1dcfdedd109ab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_940a5a45f8adb573e0279041512915721481296baf65fc0292c1dcfdedd109ab->enter($__internal_940a5a45f8adb573e0279041512915721481296baf65fc0292c1dcfdedd109ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_11f783e98952f5c64be70ef9f7fadee55716365615a7364676b0ec71e05e63c7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_11f783e98952f5c64be70ef9f7fadee55716365615a7364676b0ec71e05e63c7->enter($__internal_11f783e98952f5c64be70ef9f7fadee55716365615a7364676b0ec71e05e63c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_11f783e98952f5c64be70ef9f7fadee55716365615a7364676b0ec71e05e63c7->leave($__internal_11f783e98952f5c64be70ef9f7fadee55716365615a7364676b0ec71e05e63c7_prof);

        
        $__internal_940a5a45f8adb573e0279041512915721481296baf65fc0292c1dcfdedd109ab->leave($__internal_940a5a45f8adb573e0279041512915721481296baf65fc0292c1dcfdedd109ab_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_5ea02fb813e70a14f2f075e197924e499b129bae22f2cf303556434b28a0468d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5ea02fb813e70a14f2f075e197924e499b129bae22f2cf303556434b28a0468d->enter($__internal_5ea02fb813e70a14f2f075e197924e499b129bae22f2cf303556434b28a0468d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_0c4da9252cdf0c158be63303e992103b9e63d68002c77bdd88e25204a3a7f670 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0c4da9252cdf0c158be63303e992103b9e63d68002c77bdd88e25204a3a7f670->enter($__internal_0c4da9252cdf0c158be63303e992103b9e63d68002c77bdd88e25204a3a7f670_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_0c4da9252cdf0c158be63303e992103b9e63d68002c77bdd88e25204a3a7f670->leave($__internal_0c4da9252cdf0c158be63303e992103b9e63d68002c77bdd88e25204a3a7f670_prof);

        
        $__internal_5ea02fb813e70a14f2f075e197924e499b129bae22f2cf303556434b28a0468d->leave($__internal_5ea02fb813e70a14f2f075e197924e499b129bae22f2cf303556434b28a0468d_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_65467b19c0798af2f2f5353f37d1e6f1af983bed0776a1eba41a7ac025c33746 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_65467b19c0798af2f2f5353f37d1e6f1af983bed0776a1eba41a7ac025c33746->enter($__internal_65467b19c0798af2f2f5353f37d1e6f1af983bed0776a1eba41a7ac025c33746_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_54f46c72240da65b0323b1cb50dcf98da5377b60eacf6b6b734935c9762b52e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_54f46c72240da65b0323b1cb50dcf98da5377b60eacf6b6b734935c9762b52e8->enter($__internal_54f46c72240da65b0323b1cb50dcf98da5377b60eacf6b6b734935c9762b52e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_54f46c72240da65b0323b1cb50dcf98da5377b60eacf6b6b734935c9762b52e8->leave($__internal_54f46c72240da65b0323b1cb50dcf98da5377b60eacf6b6b734935c9762b52e8_prof);

        
        $__internal_65467b19c0798af2f2f5353f37d1e6f1af983bed0776a1eba41a7ac025c33746->leave($__internal_65467b19c0798af2f2f5353f37d1e6f1af983bed0776a1eba41a7ac025c33746_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "C:\\Users\\11500384\\Documents\\GitHub\\Web-Mobile-Project\\WP3\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception_full.html.twig");
    }
}
