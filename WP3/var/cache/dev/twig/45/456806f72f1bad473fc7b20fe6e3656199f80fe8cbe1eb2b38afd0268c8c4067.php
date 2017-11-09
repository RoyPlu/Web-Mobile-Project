<?php

/* TwigBundle::layout.html.twig */
class __TwigTemplate_6023e7046629ab9729ab6484398a02caaee165f05f4f641d0ff3fd39fce6a214 extends Twig_Template
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
        $__internal_721def7bcd6b3546619a9557b063d9f96be37d7c5325f2efea239e3bccb857dd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_721def7bcd6b3546619a9557b063d9f96be37d7c5325f2efea239e3bccb857dd->enter($__internal_721def7bcd6b3546619a9557b063d9f96be37d7c5325f2efea239e3bccb857dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle::layout.html.twig"));

        $__internal_6b91234111fb1c000b57c8f1185c3af657b6a29e1c18a26bf1a0ca37eec8c47d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6b91234111fb1c000b57c8f1185c3af657b6a29e1c18a26bf1a0ca37eec8c47d->enter($__internal_6b91234111fb1c000b57c8f1185c3af657b6a29e1c18a26bf1a0ca37eec8c47d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle::layout.html.twig"));

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
        
        $__internal_721def7bcd6b3546619a9557b063d9f96be37d7c5325f2efea239e3bccb857dd->leave($__internal_721def7bcd6b3546619a9557b063d9f96be37d7c5325f2efea239e3bccb857dd_prof);

        
        $__internal_6b91234111fb1c000b57c8f1185c3af657b6a29e1c18a26bf1a0ca37eec8c47d->leave($__internal_6b91234111fb1c000b57c8f1185c3af657b6a29e1c18a26bf1a0ca37eec8c47d_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_87c86f70711277dcf6dbb4e46f4050c89ade2e8da8b56ad31232e45920638c5d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_87c86f70711277dcf6dbb4e46f4050c89ade2e8da8b56ad31232e45920638c5d->enter($__internal_87c86f70711277dcf6dbb4e46f4050c89ade2e8da8b56ad31232e45920638c5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_5c10c5d6bda3e78922eb7dfcf4c2059e0ed1f02da2fbfafae2a092102ea4a5ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5c10c5d6bda3e78922eb7dfcf4c2059e0ed1f02da2fbfafae2a092102ea4a5ff->enter($__internal_5c10c5d6bda3e78922eb7dfcf4c2059e0ed1f02da2fbfafae2a092102ea4a5ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_5c10c5d6bda3e78922eb7dfcf4c2059e0ed1f02da2fbfafae2a092102ea4a5ff->leave($__internal_5c10c5d6bda3e78922eb7dfcf4c2059e0ed1f02da2fbfafae2a092102ea4a5ff_prof);

        
        $__internal_87c86f70711277dcf6dbb4e46f4050c89ade2e8da8b56ad31232e45920638c5d->leave($__internal_87c86f70711277dcf6dbb4e46f4050c89ade2e8da8b56ad31232e45920638c5d_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_8e41491194659a85da0ebbba31349da84d9d01abbc58853543adc24a0f91976f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8e41491194659a85da0ebbba31349da84d9d01abbc58853543adc24a0f91976f->enter($__internal_8e41491194659a85da0ebbba31349da84d9d01abbc58853543adc24a0f91976f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_4d2f393fffe4244643f4556b2d3f56abea70aac08fe3a378116436f242d4c785 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d2f393fffe4244643f4556b2d3f56abea70aac08fe3a378116436f242d4c785->enter($__internal_4d2f393fffe4244643f4556b2d3f56abea70aac08fe3a378116436f242d4c785_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_4d2f393fffe4244643f4556b2d3f56abea70aac08fe3a378116436f242d4c785->leave($__internal_4d2f393fffe4244643f4556b2d3f56abea70aac08fe3a378116436f242d4c785_prof);

        
        $__internal_8e41491194659a85da0ebbba31349da84d9d01abbc58853543adc24a0f91976f->leave($__internal_8e41491194659a85da0ebbba31349da84d9d01abbc58853543adc24a0f91976f_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_f52bd03747e65b9bb6327a86d81bfd88869efab0a92555440dd681cdf503dd2b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f52bd03747e65b9bb6327a86d81bfd88869efab0a92555440dd681cdf503dd2b->enter($__internal_f52bd03747e65b9bb6327a86d81bfd88869efab0a92555440dd681cdf503dd2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_870557aeac76127d96264bc5484d2f8557fe79944538fdbb851762b3e85f2c73 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_870557aeac76127d96264bc5484d2f8557fe79944538fdbb851762b3e85f2c73->enter($__internal_870557aeac76127d96264bc5484d2f8557fe79944538fdbb851762b3e85f2c73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_870557aeac76127d96264bc5484d2f8557fe79944538fdbb851762b3e85f2c73->leave($__internal_870557aeac76127d96264bc5484d2f8557fe79944538fdbb851762b3e85f2c73_prof);

        
        $__internal_f52bd03747e65b9bb6327a86d81bfd88869efab0a92555440dd681cdf503dd2b->leave($__internal_f52bd03747e65b9bb6327a86d81bfd88869efab0a92555440dd681cdf503dd2b_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle::layout.html.twig";
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
", "TwigBundle::layout.html.twig", "C:\\Users\\11500384\\Documents\\GitHub\\Web-Mobile-Project\\WP3\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/layout.html.twig");
    }
}
