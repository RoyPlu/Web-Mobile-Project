<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_c9f78952cac0f06f836bef76a076f48afb0514ecc489dab37a42fd5e69371b77 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ad7e8bcd4224a312bdf24d5b231f08486a9936496805c159dcfca13463e7e98e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ad7e8bcd4224a312bdf24d5b231f08486a9936496805c159dcfca13463e7e98e->enter($__internal_ad7e8bcd4224a312bdf24d5b231f08486a9936496805c159dcfca13463e7e98e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_cc9df3703c5b9aabc28f4ed640c8dd13c479193179a5361fc5833c897b02be2e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc9df3703c5b9aabc28f4ed640c8dd13c479193179a5361fc5833c897b02be2e->enter($__internal_cc9df3703c5b9aabc28f4ed640c8dd13c479193179a5361fc5833c897b02be2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 8
        echo twig_include($this->env, $context, "@Twig/images/favicon.png.base64");
        echo "\">
        <style>";
        // line 9
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "</style>
        ";
        // line 10
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">";
        // line 15
        echo twig_include($this->env, $context, "@Twig/images/symfony-logo.svg");
        echo " Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">";
        // line 19
        echo twig_include($this->env, $context, "@Twig/images/icon-book.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">";
        // line 26
        echo twig_include($this->env, $context, "@Twig/images/icon-support.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "        ";
        echo twig_include($this->env, $context, "@Twig/base_js.html.twig");
        echo "
    </body>
</html>
";
        
        $__internal_ad7e8bcd4224a312bdf24d5b231f08486a9936496805c159dcfca13463e7e98e->leave($__internal_ad7e8bcd4224a312bdf24d5b231f08486a9936496805c159dcfca13463e7e98e_prof);

        
        $__internal_cc9df3703c5b9aabc28f4ed640c8dd13c479193179a5361fc5833c897b02be2e->leave($__internal_cc9df3703c5b9aabc28f4ed640c8dd13c479193179a5361fc5833c897b02be2e_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_b49a1c78efb68253ef7e6c71b589e46abb7b4f1b51aa5ece41e9dceef023efe4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b49a1c78efb68253ef7e6c71b589e46abb7b4f1b51aa5ece41e9dceef023efe4->enter($__internal_b49a1c78efb68253ef7e6c71b589e46abb7b4f1b51aa5ece41e9dceef023efe4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_10d8c2a63cf7a5d0ff489c0dad691cc269dcaf4b4db639625734549d4827462c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_10d8c2a63cf7a5d0ff489c0dad691cc269dcaf4b4db639625734549d4827462c->enter($__internal_10d8c2a63cf7a5d0ff489c0dad691cc269dcaf4b4db639625734549d4827462c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_10d8c2a63cf7a5d0ff489c0dad691cc269dcaf4b4db639625734549d4827462c->leave($__internal_10d8c2a63cf7a5d0ff489c0dad691cc269dcaf4b4db639625734549d4827462c_prof);

        
        $__internal_b49a1c78efb68253ef7e6c71b589e46abb7b4f1b51aa5ece41e9dceef023efe4->leave($__internal_b49a1c78efb68253ef7e6c71b589e46abb7b4f1b51aa5ece41e9dceef023efe4_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_17301100e4d6063f3c6d65e27abf3c5f08ccdfb848c852a954115f7f72387b98 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_17301100e4d6063f3c6d65e27abf3c5f08ccdfb848c852a954115f7f72387b98->enter($__internal_17301100e4d6063f3c6d65e27abf3c5f08ccdfb848c852a954115f7f72387b98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_cba55e089bf69e7e1f1fe2629ab2f1543686c6c1da7ef9d15e363237b64f175d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cba55e089bf69e7e1f1fe2629ab2f1543686c6c1da7ef9d15e363237b64f175d->enter($__internal_cba55e089bf69e7e1f1fe2629ab2f1543686c6c1da7ef9d15e363237b64f175d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_cba55e089bf69e7e1f1fe2629ab2f1543686c6c1da7ef9d15e363237b64f175d->leave($__internal_cba55e089bf69e7e1f1fe2629ab2f1543686c6c1da7ef9d15e363237b64f175d_prof);

        
        $__internal_17301100e4d6063f3c6d65e27abf3c5f08ccdfb848c852a954115f7f72387b98->leave($__internal_17301100e4d6063f3c6d65e27abf3c5f08ccdfb848c852a954115f7f72387b98_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_320a59630c37bc9d3e24a5d4ff05402a37b195e955af076b90c85fc239b5ce49 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_320a59630c37bc9d3e24a5d4ff05402a37b195e955af076b90c85fc239b5ce49->enter($__internal_320a59630c37bc9d3e24a5d4ff05402a37b195e955af076b90c85fc239b5ce49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_692947c387577daed83c193432260ca01fd4aa0b7a0758616b83e08157f641a0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_692947c387577daed83c193432260ca01fd4aa0b7a0758616b83e08157f641a0->enter($__internal_692947c387577daed83c193432260ca01fd4aa0b7a0758616b83e08157f641a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_692947c387577daed83c193432260ca01fd4aa0b7a0758616b83e08157f641a0->leave($__internal_692947c387577daed83c193432260ca01fd4aa0b7a0758616b83e08157f641a0_prof);

        
        $__internal_320a59630c37bc9d3e24a5d4ff05402a37b195e955af076b90c85fc239b5ce49->leave($__internal_320a59630c37bc9d3e24a5d4ff05402a37b195e955af076b90c85fc239b5ce49_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 33,  120 => 10,  103 => 7,  88 => 34,  86 => 33,  76 => 26,  66 => 19,  59 => 15,  53 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  33 => 4,  28 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"{{ _charset }}\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>{% block title %}{% endblock %}</title>
        <link rel=\"icon\" type=\"image/png\" href=\"{{ include('@Twig/images/favicon.png.base64') }}\">
        <style>{{ include('@Twig/exception.css.twig') }}</style>
        {% block head %}{% endblock %}
    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">{{ include('@Twig/images/symfony-logo.svg') }} Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-book.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-support.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        {% block body %}{% endblock %}
        {{ include('@Twig/base_js.html.twig') }}
    </body>
</html>
", "@Twig/layout.html.twig", "C:\\Users\\11500384\\Documents\\GitHub\\Web-Mobile-Project\\WP3\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\layout.html.twig");
    }
}
