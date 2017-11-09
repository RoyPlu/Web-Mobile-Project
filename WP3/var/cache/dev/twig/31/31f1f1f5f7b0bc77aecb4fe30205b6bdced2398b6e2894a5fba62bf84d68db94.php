<?php

/* default/index.html.twig */
class __TwigTemplate_c2ac62140443d763b5eeaadac6da4e58bd2b22f00ba0e1eab06c53bf7c520b3a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/index.html.twig", 1);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_06da89a88d9eb42fd4d3d3bed294f36c8c1d36eb7e6c121424a70a8698d73574 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_06da89a88d9eb42fd4d3d3bed294f36c8c1d36eb7e6c121424a70a8698d73574->enter($__internal_06da89a88d9eb42fd4d3d3bed294f36c8c1d36eb7e6c121424a70a8698d73574_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $__internal_8ea64dde5f4c3e0a853d746f499bfa241fffc78c0ffa817473ace7e30bd408c8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ea64dde5f4c3e0a853d746f499bfa241fffc78c0ffa817473ace7e30bd408c8->enter($__internal_8ea64dde5f4c3e0a853d746f499bfa241fffc78c0ffa817473ace7e30bd408c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_06da89a88d9eb42fd4d3d3bed294f36c8c1d36eb7e6c121424a70a8698d73574->leave($__internal_06da89a88d9eb42fd4d3d3bed294f36c8c1d36eb7e6c121424a70a8698d73574_prof);

        
        $__internal_8ea64dde5f4c3e0a853d746f499bfa241fffc78c0ffa817473ace7e30bd408c8->leave($__internal_8ea64dde5f4c3e0a853d746f499bfa241fffc78c0ffa817473ace7e30bd408c8_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_079febc34b054d28ec2ddde9580bdc9669f74ad60b8f82ce699ed5181730f3de = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_079febc34b054d28ec2ddde9580bdc9669f74ad60b8f82ce699ed5181730f3de->enter($__internal_079febc34b054d28ec2ddde9580bdc9669f74ad60b8f82ce699ed5181730f3de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_4ef2f5ee313583f750078269106f41837819e99199302e94ea355ec6cb57f917 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4ef2f5ee313583f750078269106f41837819e99199302e94ea355ec6cb57f917->enter($__internal_4ef2f5ee313583f750078269106f41837819e99199302e94ea355ec6cb57f917_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 3
        echo "    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\" integrity=\"sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u\" crossorigin=\"anonymous\">
    <link href=\"https://fonts.googleapis.com/css?family=Montserrat\" rel=\"stylesheet\">
    <style>
        body { background: #F5F5F5; font: 18px/1.5 sans-serif; }
        h1, h2 { line-height: 1.2; margin: 0 0 .5em; }
        h1 { font-size: 36px; }
        h2 { font-size: 21px; margin-bottom: 1em; }
        p { margin: 0 0 1em 0; }
        a { color: #0000F0; }
        a:hover { text-decoration: none; }
        code { background: #F5F5F5; max-width: 100px; padding: 2px 6px; word-wrap: break-word; }
        #wrapper { background: #FFF; margin: 1em auto; max-width: 800px; width: 95%; }
        #container { padding: 2em; }
        #welcome, #status { margin-bottom: 2em; }
        #welcome h1 span { display: block; font-size: 75%; }
        #icon-status, #icon-book { float: left; height: 64px; margin-right: 1em; margin-top: -4px; width: 64px; }
        #icon-book { display: none; }

        @media (min-width: 768px) {
            #wrapper {
                width: 80%;
                margin: 2em auto;
            }

            #icon-book {
                display: inline-block;
            }

            #status a, #next a {
                display: block;
            }

            @-webkit-keyframes fade-in {
                0% {
                    opacity: 0;
                }
                100% {
                    opacity: 1;
                }
            }
            @keyframes fade-in {
                0% {
                    opacity: 0;
                }
                100% {
                    opacity: 1;
                }
            }
            .sf-toolbar {
                opacity: 0;
                -webkit-animation: fade-in 1s .2s forwards;
                animation: fade-in 1s .2s forwards;
            }

            h1 {
                font-family: \"Avant Garde\", Avantgarde, \"Century Gothic\", CenturyGothic, \"AppleGothic\", sans-serif;
                font-size: 100px;
                padding: 80px 50px;
                text-align: center;
                text-transform: uppercase;
                text-rendering: optimizeLegibility;
            }

            h2 {
                font-family: \"Avant Garde\", Avantgarde, \"Century Gothic\", CenturyGothic, \"AppleGothic\", sans-serif;
                font-size: 60px;
                padding: 80px 50px;
                text-align: center;
                text-transform: uppercase;
                text-rendering: optimizeLegibility;
            }

            h1.elegantshadow {
                color: #131313;
                background-color: #e7e5e4;
                letter-spacing: .15em;
                text-shadow: 1px -1px 0 #767676, -1px 2px 1px #737272, -2px 4px 1px #767474, -3px 6px 1px #787777, -4px 8px 1px #7b7a7a, -5px 10px 1px #7f7d7d, -6px 12px 1px #828181, -7px 14px 1px #868585, -8px 16px 1px #8b8a89, -9px 18px 1px #8f8e8d, -10px 20px 1px #949392, -11px 22px 1px #999897, -12px 24px 1px #9e9c9c, -13px 26px 1px #a3a1a1, -14px 28px 1px #a8a6a6, -15px 30px 1px #adabab, -16px 32px 1px #b2b1b0, -17px 34px 1px #b7b6b5, -18px 36px 1px #bcbbba, -19px 38px 1px #c1bfbf, -20px 40px 1px #c6c4c4, -21px 42px 1px #cbc9c8, -22px 44px 1px #cfcdcd, -23px 46px 1px #d4d2d1, -24px 48px 1px #d8d6d5, -25px 50px 1px #dbdad9, -26px 52px 1px #dfdddc, -27px 54px 1px #e2e0df, -28px 56px 1px #e4e3e2;
            }

            h1.deepshadow {
                color: #e0dfdc;
                background-color: #333;
                letter-spacing: .1em;
                text-shadow: 0 -1px 0 #fff, 0 1px 0 #2e2e2e, 0 2px 0 #2c2c2c, 0 3px 0 #2a2a2a, 0 4px 0 #282828, 0 5px 0 #262626, 0 6px 0 #242424, 0 7px 0 #222, 0 8px 0 #202020, 0 9px 0 #1e1e1e, 0 10px 0 #1c1c1c, 0 11px 0 #1a1a1a, 0 12px 0 #181818, 0 13px 0 #161616, 0 14px 0 #141414, 0 15px 0 #121212, 0 22px 30px rgba(0, 0, 0, 0.9);
            }

            h1.insetshadow {
                color: #202020;
                background-color: #2d2d2d;
                letter-spacing: .1em;
                text-shadow: -1px -1px 1px #111, 2px 2px 1px #363636;
            }

            h1.retroshadow {
                color: #2c2c2c;
                background-color: #d5d5d5;
                letter-spacing: .05em;
                text-shadow: 4px 4px 0px #d5d5d5, 7px 7px 0px rgba(0, 0, 0, 0.2);
            }
        }
    </style>
";
        
        $__internal_4ef2f5ee313583f750078269106f41837819e99199302e94ea355ec6cb57f917->leave($__internal_4ef2f5ee313583f750078269106f41837819e99199302e94ea355ec6cb57f917_prof);

        
        $__internal_079febc34b054d28ec2ddde9580bdc9669f74ad60b8f82ce699ed5181730f3de->leave($__internal_079febc34b054d28ec2ddde9580bdc9669f74ad60b8f82ce699ed5181730f3de_prof);

    }

    // line 105
    public function block_body($context, array $blocks = array())
    {
        $__internal_66ec4911707faa92d95016e221839fcd6468b47aa04dbf02a67446bf9d796805 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_66ec4911707faa92d95016e221839fcd6468b47aa04dbf02a67446bf9d796805->enter($__internal_66ec4911707faa92d95016e221839fcd6468b47aa04dbf02a67446bf9d796805_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_48ce041d1401535f2c1a59e59b3d70a5ad070fb57498afd1f04437e16b7c18ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_48ce041d1401535f2c1a59e59b3d70a5ad070fb57498afd1f04437e16b7c18ae->enter($__internal_48ce041d1401535f2c1a59e59b3d70a5ad070fb57498afd1f04437e16b7c18ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 106
        echo "            <h1 class=\"elegantshadow\">Welcome</h1>
    <h2> WP3 - Symfony </h2>
";
        
        $__internal_48ce041d1401535f2c1a59e59b3d70a5ad070fb57498afd1f04437e16b7c18ae->leave($__internal_48ce041d1401535f2c1a59e59b3d70a5ad070fb57498afd1f04437e16b7c18ae_prof);

        
        $__internal_66ec4911707faa92d95016e221839fcd6468b47aa04dbf02a67446bf9d796805->leave($__internal_66ec4911707faa92d95016e221839fcd6468b47aa04dbf02a67446bf9d796805_prof);

    }

    public function getTemplateName()
    {
        return "default/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  170 => 106,  161 => 105,  50 => 3,  41 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}
{% block stylesheets %}
    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\" integrity=\"sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u\" crossorigin=\"anonymous\">
    <link href=\"https://fonts.googleapis.com/css?family=Montserrat\" rel=\"stylesheet\">
    <style>
        body { background: #F5F5F5; font: 18px/1.5 sans-serif; }
        h1, h2 { line-height: 1.2; margin: 0 0 .5em; }
        h1 { font-size: 36px; }
        h2 { font-size: 21px; margin-bottom: 1em; }
        p { margin: 0 0 1em 0; }
        a { color: #0000F0; }
        a:hover { text-decoration: none; }
        code { background: #F5F5F5; max-width: 100px; padding: 2px 6px; word-wrap: break-word; }
        #wrapper { background: #FFF; margin: 1em auto; max-width: 800px; width: 95%; }
        #container { padding: 2em; }
        #welcome, #status { margin-bottom: 2em; }
        #welcome h1 span { display: block; font-size: 75%; }
        #icon-status, #icon-book { float: left; height: 64px; margin-right: 1em; margin-top: -4px; width: 64px; }
        #icon-book { display: none; }

        @media (min-width: 768px) {
            #wrapper {
                width: 80%;
                margin: 2em auto;
            }

            #icon-book {
                display: inline-block;
            }

            #status a, #next a {
                display: block;
            }

            @-webkit-keyframes fade-in {
                0% {
                    opacity: 0;
                }
                100% {
                    opacity: 1;
                }
            }
            @keyframes fade-in {
                0% {
                    opacity: 0;
                }
                100% {
                    opacity: 1;
                }
            }
            .sf-toolbar {
                opacity: 0;
                -webkit-animation: fade-in 1s .2s forwards;
                animation: fade-in 1s .2s forwards;
            }

            h1 {
                font-family: \"Avant Garde\", Avantgarde, \"Century Gothic\", CenturyGothic, \"AppleGothic\", sans-serif;
                font-size: 100px;
                padding: 80px 50px;
                text-align: center;
                text-transform: uppercase;
                text-rendering: optimizeLegibility;
            }

            h2 {
                font-family: \"Avant Garde\", Avantgarde, \"Century Gothic\", CenturyGothic, \"AppleGothic\", sans-serif;
                font-size: 60px;
                padding: 80px 50px;
                text-align: center;
                text-transform: uppercase;
                text-rendering: optimizeLegibility;
            }

            h1.elegantshadow {
                color: #131313;
                background-color: #e7e5e4;
                letter-spacing: .15em;
                text-shadow: 1px -1px 0 #767676, -1px 2px 1px #737272, -2px 4px 1px #767474, -3px 6px 1px #787777, -4px 8px 1px #7b7a7a, -5px 10px 1px #7f7d7d, -6px 12px 1px #828181, -7px 14px 1px #868585, -8px 16px 1px #8b8a89, -9px 18px 1px #8f8e8d, -10px 20px 1px #949392, -11px 22px 1px #999897, -12px 24px 1px #9e9c9c, -13px 26px 1px #a3a1a1, -14px 28px 1px #a8a6a6, -15px 30px 1px #adabab, -16px 32px 1px #b2b1b0, -17px 34px 1px #b7b6b5, -18px 36px 1px #bcbbba, -19px 38px 1px #c1bfbf, -20px 40px 1px #c6c4c4, -21px 42px 1px #cbc9c8, -22px 44px 1px #cfcdcd, -23px 46px 1px #d4d2d1, -24px 48px 1px #d8d6d5, -25px 50px 1px #dbdad9, -26px 52px 1px #dfdddc, -27px 54px 1px #e2e0df, -28px 56px 1px #e4e3e2;
            }

            h1.deepshadow {
                color: #e0dfdc;
                background-color: #333;
                letter-spacing: .1em;
                text-shadow: 0 -1px 0 #fff, 0 1px 0 #2e2e2e, 0 2px 0 #2c2c2c, 0 3px 0 #2a2a2a, 0 4px 0 #282828, 0 5px 0 #262626, 0 6px 0 #242424, 0 7px 0 #222, 0 8px 0 #202020, 0 9px 0 #1e1e1e, 0 10px 0 #1c1c1c, 0 11px 0 #1a1a1a, 0 12px 0 #181818, 0 13px 0 #161616, 0 14px 0 #141414, 0 15px 0 #121212, 0 22px 30px rgba(0, 0, 0, 0.9);
            }

            h1.insetshadow {
                color: #202020;
                background-color: #2d2d2d;
                letter-spacing: .1em;
                text-shadow: -1px -1px 1px #111, 2px 2px 1px #363636;
            }

            h1.retroshadow {
                color: #2c2c2c;
                background-color: #d5d5d5;
                letter-spacing: .05em;
                text-shadow: 4px 4px 0px #d5d5d5, 7px 7px 0px rgba(0, 0, 0, 0.2);
            }
        }
    </style>
{% endblock %}
{% block body %}
            <h1 class=\"elegantshadow\">Welcome</h1>
    <h2> WP3 - Symfony </h2>
{% endblock %}

", "default/index.html.twig", "C:\\Users\\11500384\\Documents\\GitHub\\Web-Mobile-Project\\WP3\\app\\Resources\\views\\default\\index.html.twig");
    }
}
