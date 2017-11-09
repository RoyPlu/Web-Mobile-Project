<?php

/* :default:edit.technician.html.twig */
class __TwigTemplate_ff2f822444f4fd981c5cbdabc9098d97607435b91e89d4874137602307f70d30 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("::base.html.twig", ":default:edit.technician.html.twig", 3);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_303003987c30f942f1a4975bed9c81a5e23e81ec81e2a3cf181a728728fa9e79 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_303003987c30f942f1a4975bed9c81a5e23e81ec81e2a3cf181a728728fa9e79->enter($__internal_303003987c30f942f1a4975bed9c81a5e23e81ec81e2a3cf181a728728fa9e79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:edit.technician.html.twig"));

        $__internal_0d4a7e6b7bf1b219ced204f7aba0f1274e1548ae60f9a2d369f9bba7e77fb186 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0d4a7e6b7bf1b219ced204f7aba0f1274e1548ae60f9a2d369f9bba7e77fb186->enter($__internal_0d4a7e6b7bf1b219ced204f7aba0f1274e1548ae60f9a2d369f9bba7e77fb186_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:edit.technician.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_303003987c30f942f1a4975bed9c81a5e23e81ec81e2a3cf181a728728fa9e79->leave($__internal_303003987c30f942f1a4975bed9c81a5e23e81ec81e2a3cf181a728728fa9e79_prof);

        
        $__internal_0d4a7e6b7bf1b219ced204f7aba0f1274e1548ae60f9a2d369f9bba7e77fb186->leave($__internal_0d4a7e6b7bf1b219ced204f7aba0f1274e1548ae60f9a2d369f9bba7e77fb186_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_bc74acc3f95231cfae91d50a61f973b412aa73e4473c01418e75c503ee1e874f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bc74acc3f95231cfae91d50a61f973b412aa73e4473c01418e75c503ee1e874f->enter($__internal_bc74acc3f95231cfae91d50a61f973b412aa73e4473c01418e75c503ee1e874f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_ad6dc8e23a8147f1abcc91fcd3143cc80851ca57ca55bff1334044df402985d9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad6dc8e23a8147f1abcc91fcd3143cc80851ca57ca55bff1334044df402985d9->enter($__internal_ad6dc8e23a8147f1abcc91fcd3143cc80851ca57ca55bff1334044df402985d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "locations";
        
        $__internal_ad6dc8e23a8147f1abcc91fcd3143cc80851ca57ca55bff1334044df402985d9->leave($__internal_ad6dc8e23a8147f1abcc91fcd3143cc80851ca57ca55bff1334044df402985d9_prof);

        
        $__internal_bc74acc3f95231cfae91d50a61f973b412aa73e4473c01418e75c503ee1e874f->leave($__internal_bc74acc3f95231cfae91d50a61f973b412aa73e4473c01418e75c503ee1e874f_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_3cdd30a6681d79f90bca5d8597c9cb43900582c9c776f1c4ca1371da680f6287 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3cdd30a6681d79f90bca5d8597c9cb43900582c9c776f1c4ca1371da680f6287->enter($__internal_3cdd30a6681d79f90bca5d8597c9cb43900582c9c776f1c4ca1371da680f6287_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_8e5c5172fcf8b7647a01abf917f8bec3ebe2ede7fbc9921d90255ed473b1e0fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8e5c5172fcf8b7647a01abf917f8bec3ebe2ede7fbc9921d90255ed473b1e0fb->enter($__internal_8e5c5172fcf8b7647a01abf917f8bec3ebe2ede7fbc9921d90255ed473b1e0fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <form action=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("");
        echo "\" method=\"post\">

        <label for=\"username\">";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.username"), "html", null, true);
        echo "</label>
        <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 9
        echo twig_escape_filter($this->env, ($context["last_username"] ?? $this->getContext($context, "last_username")), "html", null, true);
        echo "\" required=\"required\" />

        <label for=\"password\">";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.password"), "html", null, true);
        echo "</label>
        <input type=\"password\" id=\"password\" name=\"_password\" required=\"required\" />

        <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" />
        <label for=\"remember_me\">";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.remember_me"), "html", null, true);
        echo "</label>

        <input type=\"submit\" id=\"_submit\" name=\"_submit\" value=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.submit"), "html", null, true);
        echo "\" />
    </form>


";
        
        $__internal_8e5c5172fcf8b7647a01abf917f8bec3ebe2ede7fbc9921d90255ed473b1e0fb->leave($__internal_8e5c5172fcf8b7647a01abf917f8bec3ebe2ede7fbc9921d90255ed473b1e0fb_prof);

        
        $__internal_3cdd30a6681d79f90bca5d8597c9cb43900582c9c776f1c4ca1371da680f6287->leave($__internal_3cdd30a6681d79f90bca5d8597c9cb43900582c9c776f1c4ca1371da680f6287_prof);

    }

    public function getTemplateName()
    {
        return ":default:edit.technician.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 17,  90 => 15,  83 => 11,  78 => 9,  74 => 8,  68 => 6,  59 => 5,  41 => 4,  11 => 3,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("

{% extends \"::base.html.twig\" %}
{% block title %}locations{% endblock %}
{% block body %}
    <form action=\"{{ path(\"\") }}\" method=\"post\">

        <label for=\"username\">{{ 'security.login.username'|trans }}</label>
        <input type=\"text\" id=\"username\" name=\"_username\" value=\"{{ last_username }}\" required=\"required\" />

        <label for=\"password\">{{ 'security.login.password'|trans }}</label>
        <input type=\"password\" id=\"password\" name=\"_password\" required=\"required\" />

        <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" />
        <label for=\"remember_me\">{{ 'security.login.remember_me'|trans }}</label>

        <input type=\"submit\" id=\"_submit\" name=\"_submit\" value=\"{{ 'security.login.submit'|trans }}\" />
    </form>


{% endblock %}", ":default:edit.technician.html.twig", "C:\\Users\\11500384\\Documents\\GitHub\\Web-Mobile-Project\\WP3\\app/Resources\\views/default/edit.technician.html.twig");
    }
}
