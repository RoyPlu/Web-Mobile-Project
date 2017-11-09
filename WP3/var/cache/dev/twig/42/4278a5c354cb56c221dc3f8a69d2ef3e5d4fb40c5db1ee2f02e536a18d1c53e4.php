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
        $__internal_ccfe834e7ea0048f6eda1418ed4c5e7a10def69905a370db73259a94f189de5a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ccfe834e7ea0048f6eda1418ed4c5e7a10def69905a370db73259a94f189de5a->enter($__internal_ccfe834e7ea0048f6eda1418ed4c5e7a10def69905a370db73259a94f189de5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_699367b6912be8a5fbcae3d2ac5b6253f40d35b687a61f0a2591596b6c3d35cb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_699367b6912be8a5fbcae3d2ac5b6253f40d35b687a61f0a2591596b6c3d35cb->enter($__internal_699367b6912be8a5fbcae3d2ac5b6253f40d35b687a61f0a2591596b6c3d35cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

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
        
        $__internal_ccfe834e7ea0048f6eda1418ed4c5e7a10def69905a370db73259a94f189de5a->leave($__internal_ccfe834e7ea0048f6eda1418ed4c5e7a10def69905a370db73259a94f189de5a_prof);

        
        $__internal_699367b6912be8a5fbcae3d2ac5b6253f40d35b687a61f0a2591596b6c3d35cb->leave($__internal_699367b6912be8a5fbcae3d2ac5b6253f40d35b687a61f0a2591596b6c3d35cb_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_51311638cbe49043956de6a42fe5375c022c4d11c5ce2d64ab2af801b69e1073 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_51311638cbe49043956de6a42fe5375c022c4d11c5ce2d64ab2af801b69e1073->enter($__internal_51311638cbe49043956de6a42fe5375c022c4d11c5ce2d64ab2af801b69e1073_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_5aff6dc92638ccad03d9a8ff2e14a2231e25361c67651bf21d1e17aebb5bf5d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5aff6dc92638ccad03d9a8ff2e14a2231e25361c67651bf21d1e17aebb5bf5d1->enter($__internal_5aff6dc92638ccad03d9a8ff2e14a2231e25361c67651bf21d1e17aebb5bf5d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_5aff6dc92638ccad03d9a8ff2e14a2231e25361c67651bf21d1e17aebb5bf5d1->leave($__internal_5aff6dc92638ccad03d9a8ff2e14a2231e25361c67651bf21d1e17aebb5bf5d1_prof);

        
        $__internal_51311638cbe49043956de6a42fe5375c022c4d11c5ce2d64ab2af801b69e1073->leave($__internal_51311638cbe49043956de6a42fe5375c022c4d11c5ce2d64ab2af801b69e1073_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_4fabf6f5b1352d993eef4b6e170ff0b0bfb6273214f7ed5e60b73a21f5da1287 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4fabf6f5b1352d993eef4b6e170ff0b0bfb6273214f7ed5e60b73a21f5da1287->enter($__internal_4fabf6f5b1352d993eef4b6e170ff0b0bfb6273214f7ed5e60b73a21f5da1287_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_38eb84dbee861bb1fb41bcdd79d8f8f16b5ed442386bd94d877f59199acd6338 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_38eb84dbee861bb1fb41bcdd79d8f8f16b5ed442386bd94d877f59199acd6338->enter($__internal_38eb84dbee861bb1fb41bcdd79d8f8f16b5ed442386bd94d877f59199acd6338_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_38eb84dbee861bb1fb41bcdd79d8f8f16b5ed442386bd94d877f59199acd6338->leave($__internal_38eb84dbee861bb1fb41bcdd79d8f8f16b5ed442386bd94d877f59199acd6338_prof);

        
        $__internal_4fabf6f5b1352d993eef4b6e170ff0b0bfb6273214f7ed5e60b73a21f5da1287->leave($__internal_4fabf6f5b1352d993eef4b6e170ff0b0bfb6273214f7ed5e60b73a21f5da1287_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_c576b63e8eca56076ee80a4d835dd07655dcad9d4b7f615a9f571ff13b366e47 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c576b63e8eca56076ee80a4d835dd07655dcad9d4b7f615a9f571ff13b366e47->enter($__internal_c576b63e8eca56076ee80a4d835dd07655dcad9d4b7f615a9f571ff13b366e47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_277de332aca159605206d1719677fc48aa0463a546845f99e811822d2ac7acc8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_277de332aca159605206d1719677fc48aa0463a546845f99e811822d2ac7acc8->enter($__internal_277de332aca159605206d1719677fc48aa0463a546845f99e811822d2ac7acc8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_277de332aca159605206d1719677fc48aa0463a546845f99e811822d2ac7acc8->leave($__internal_277de332aca159605206d1719677fc48aa0463a546845f99e811822d2ac7acc8_prof);

        
        $__internal_c576b63e8eca56076ee80a4d835dd07655dcad9d4b7f615a9f571ff13b366e47->leave($__internal_c576b63e8eca56076ee80a4d835dd07655dcad9d4b7f615a9f571ff13b366e47_prof);

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
