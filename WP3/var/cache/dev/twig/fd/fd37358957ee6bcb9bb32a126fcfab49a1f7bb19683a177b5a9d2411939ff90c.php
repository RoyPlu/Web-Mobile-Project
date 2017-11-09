<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_2b6d3e585265c7b9b05d325bd589dd3922118f0104e39875aac641d849b74692 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
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
        $__internal_c62c98f436b05ffaf448122824b19288fff3bc483a2d10bebb3b0894eecd5e2b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c62c98f436b05ffaf448122824b19288fff3bc483a2d10bebb3b0894eecd5e2b->enter($__internal_c62c98f436b05ffaf448122824b19288fff3bc483a2d10bebb3b0894eecd5e2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $__internal_d2bea897de7dab8c5a2dc8738edd048b491cfff6e49af4e3d91482fa4103cb61 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d2bea897de7dab8c5a2dc8738edd048b491cfff6e49af4e3d91482fa4103cb61->enter($__internal_d2bea897de7dab8c5a2dc8738edd048b491cfff6e49af4e3d91482fa4103cb61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c62c98f436b05ffaf448122824b19288fff3bc483a2d10bebb3b0894eecd5e2b->leave($__internal_c62c98f436b05ffaf448122824b19288fff3bc483a2d10bebb3b0894eecd5e2b_prof);

        
        $__internal_d2bea897de7dab8c5a2dc8738edd048b491cfff6e49af4e3d91482fa4103cb61->leave($__internal_d2bea897de7dab8c5a2dc8738edd048b491cfff6e49af4e3d91482fa4103cb61_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_6c2efcac2f76c9bd529ab7c8854dbd6b4156c69121f544a6b7d2466d36c1a7e5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6c2efcac2f76c9bd529ab7c8854dbd6b4156c69121f544a6b7d2466d36c1a7e5->enter($__internal_6c2efcac2f76c9bd529ab7c8854dbd6b4156c69121f544a6b7d2466d36c1a7e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_9aaffedae3401f59919c5ec11c6f79c0021d29799a2a35b7f9a8b87ff8757e61 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9aaffedae3401f59919c5ec11c6f79c0021d29799a2a35b7f9a8b87ff8757e61->enter($__internal_9aaffedae3401f59919c5ec11c6f79c0021d29799a2a35b7f9a8b87ff8757e61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_9aaffedae3401f59919c5ec11c6f79c0021d29799a2a35b7f9a8b87ff8757e61->leave($__internal_9aaffedae3401f59919c5ec11c6f79c0021d29799a2a35b7f9a8b87ff8757e61_prof);

        
        $__internal_6c2efcac2f76c9bd529ab7c8854dbd6b4156c69121f544a6b7d2466d36c1a7e5->leave($__internal_6c2efcac2f76c9bd529ab7c8854dbd6b4156c69121f544a6b7d2466d36c1a7e5_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_21730a332a690ecf70c046250825f0d6023f609326de7e2eb5be1dcfe91ab246 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_21730a332a690ecf70c046250825f0d6023f609326de7e2eb5be1dcfe91ab246->enter($__internal_21730a332a690ecf70c046250825f0d6023f609326de7e2eb5be1dcfe91ab246_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_5055d239fd45c53c93ad91618512b8bb81908500c13567e1295a16e039746296 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5055d239fd45c53c93ad91618512b8bb81908500c13567e1295a16e039746296->enter($__internal_5055d239fd45c53c93ad91618512b8bb81908500c13567e1295a16e039746296_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_5055d239fd45c53c93ad91618512b8bb81908500c13567e1295a16e039746296->leave($__internal_5055d239fd45c53c93ad91618512b8bb81908500c13567e1295a16e039746296_prof);

        
        $__internal_21730a332a690ecf70c046250825f0d6023f609326de7e2eb5be1dcfe91ab246->leave($__internal_21730a332a690ecf70c046250825f0d6023f609326de7e2eb5be1dcfe91ab246_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_732c0d3f4b0d9a589c8fb5b88f27fd273d1925ef5ef85c19c07416721d390e76 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_732c0d3f4b0d9a589c8fb5b88f27fd273d1925ef5ef85c19c07416721d390e76->enter($__internal_732c0d3f4b0d9a589c8fb5b88f27fd273d1925ef5ef85c19c07416721d390e76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_38a2b821370ab08c5320e351bdb7b87283457c1c9cac5654bf23a885e671c709 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_38a2b821370ab08c5320e351bdb7b87283457c1c9cac5654bf23a885e671c709->enter($__internal_38a2b821370ab08c5320e351bdb7b87283457c1c9cac5654bf23a885e671c709_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 141)->display($context);
        
        $__internal_38a2b821370ab08c5320e351bdb7b87283457c1c9cac5654bf23a885e671c709->leave($__internal_38a2b821370ab08c5320e351bdb7b87283457c1c9cac5654bf23a885e671c709_prof);

        
        $__internal_732c0d3f4b0d9a589c8fb5b88f27fd273d1925ef5ef85c19c07416721d390e76->leave($__internal_732c0d3f4b0d9a589c8fb5b88f27fd273d1925ef5ef85c19c07416721d390e76_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
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
", "TwigBundle:Exception:exception_full.html.twig", "C:\\Users\\11500384\\Documents\\GitHub\\Web-Mobile-Project\\WP3\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}