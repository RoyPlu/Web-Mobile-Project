<?php

/* @FOSUser/Registration/confirmed.html.twig */
class __TwigTemplate_71621f254e5f6fb9d267bb18c685fa3274560208955c6ee81ce924de528d0729 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Registration/confirmed.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_cd49cfcd3daf91b62a6bff705cfa6c6109223b03f165fdde321f691b1da5d3b2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cd49cfcd3daf91b62a6bff705cfa6c6109223b03f165fdde321f691b1da5d3b2->enter($__internal_cd49cfcd3daf91b62a6bff705cfa6c6109223b03f165fdde321f691b1da5d3b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/confirmed.html.twig"));

        $__internal_101e8b93b04b7e69e75be2fe68a6788e5d3287b2379d7e76f1556e3bffb2e61d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_101e8b93b04b7e69e75be2fe68a6788e5d3287b2379d7e76f1556e3bffb2e61d->enter($__internal_101e8b93b04b7e69e75be2fe68a6788e5d3287b2379d7e76f1556e3bffb2e61d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cd49cfcd3daf91b62a6bff705cfa6c6109223b03f165fdde321f691b1da5d3b2->leave($__internal_cd49cfcd3daf91b62a6bff705cfa6c6109223b03f165fdde321f691b1da5d3b2_prof);

        
        $__internal_101e8b93b04b7e69e75be2fe68a6788e5d3287b2379d7e76f1556e3bffb2e61d->leave($__internal_101e8b93b04b7e69e75be2fe68a6788e5d3287b2379d7e76f1556e3bffb2e61d_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_ceadfda3c78719e63fede5b8c69447db25960932ef7b9a879b6bd9319b930078 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ceadfda3c78719e63fede5b8c69447db25960932ef7b9a879b6bd9319b930078->enter($__internal_ceadfda3c78719e63fede5b8c69447db25960932ef7b9a879b6bd9319b930078_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_1ac59485172be0f4e5191faecd874020de2ac997272f9e3ccdb1a606a4a1a622 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ac59485172be0f4e5191faecd874020de2ac997272f9e3ccdb1a606a4a1a622->enter($__internal_1ac59485172be0f4e5191faecd874020de2ac997272f9e3ccdb1a606a4a1a622_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.confirmed", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
    ";
        // line 7
        if (($context["targetUrl"] ?? $this->getContext($context, "targetUrl"))) {
            // line 8
            echo "    <p><a href=\"";
            echo twig_escape_filter($this->env, ($context["targetUrl"] ?? $this->getContext($context, "targetUrl")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.back", array(), "FOSUserBundle"), "html", null, true);
            echo "</a></p>
    ";
        }
        
        $__internal_1ac59485172be0f4e5191faecd874020de2ac997272f9e3ccdb1a606a4a1a622->leave($__internal_1ac59485172be0f4e5191faecd874020de2ac997272f9e3ccdb1a606a4a1a622_prof);

        
        $__internal_ceadfda3c78719e63fede5b8c69447db25960932ef7b9a879b6bd9319b930078->leave($__internal_ceadfda3c78719e63fede5b8c69447db25960932ef7b9a879b6bd9319b930078_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/confirmed.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 8,  54 => 7,  49 => 6,  40 => 5,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% trans_default_domain 'FOSUserBundle' %}

{% block fos_user_content %}
    <p>{{ 'registration.confirmed'|trans({'%username%': user.username}) }}</p>
    {% if targetUrl %}
    <p><a href=\"{{ targetUrl }}\">{{ 'registration.back'|trans }}</a></p>
    {% endif %}
{% endblock fos_user_content %}
", "@FOSUser/Registration/confirmed.html.twig", "C:\\Users\\11500384\\Documents\\GitHub\\Web-Mobile-Project\\WP3\\app\\Resources\\FOSUserBundle\\views\\Registration\\confirmed.html.twig");
    }
}
