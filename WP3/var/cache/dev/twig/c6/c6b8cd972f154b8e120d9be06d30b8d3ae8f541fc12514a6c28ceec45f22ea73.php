<?php

/* FOSUserBundle:Group:show.html.twig */
class __TwigTemplate_30e6f5dabba7218c68a7358e724cdc7dd16b0b78cc49c06872dff5099331c235 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:show.html.twig", 1);
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
        $__internal_e6e57d638882003ab40d3539ec7777934eaf624903e3e267ed4044c52ea9f263 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e6e57d638882003ab40d3539ec7777934eaf624903e3e267ed4044c52ea9f263->enter($__internal_e6e57d638882003ab40d3539ec7777934eaf624903e3e267ed4044c52ea9f263_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $__internal_dfc8b2ddb5f6fe3119264c4a924b537433d39a72c600361be449c534c316dee0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dfc8b2ddb5f6fe3119264c4a924b537433d39a72c600361be449c534c316dee0->enter($__internal_dfc8b2ddb5f6fe3119264c4a924b537433d39a72c600361be449c534c316dee0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e6e57d638882003ab40d3539ec7777934eaf624903e3e267ed4044c52ea9f263->leave($__internal_e6e57d638882003ab40d3539ec7777934eaf624903e3e267ed4044c52ea9f263_prof);

        
        $__internal_dfc8b2ddb5f6fe3119264c4a924b537433d39a72c600361be449c534c316dee0->leave($__internal_dfc8b2ddb5f6fe3119264c4a924b537433d39a72c600361be449c534c316dee0_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_6aa6a5ad8cb1b4a6890438c25406d6ada1d1cc21c9e55d5930f01aab12f4e152 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6aa6a5ad8cb1b4a6890438c25406d6ada1d1cc21c9e55d5930f01aab12f4e152->enter($__internal_6aa6a5ad8cb1b4a6890438c25406d6ada1d1cc21c9e55d5930f01aab12f4e152_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_cbb3864f10cae196e73fb9411307ed087ae51ab063c38e821cef5667a2ecc4f5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cbb3864f10cae196e73fb9411307ed087ae51ab063c38e821cef5667a2ecc4f5->enter($__internal_cbb3864f10cae196e73fb9411307ed087ae51ab063c38e821cef5667a2ecc4f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/show_content.html.twig", "FOSUserBundle:Group:show.html.twig", 4)->display($context);
        
        $__internal_cbb3864f10cae196e73fb9411307ed087ae51ab063c38e821cef5667a2ecc4f5->leave($__internal_cbb3864f10cae196e73fb9411307ed087ae51ab063c38e821cef5667a2ecc4f5_prof);

        
        $__internal_6aa6a5ad8cb1b4a6890438c25406d6ada1d1cc21c9e55d5930f01aab12f4e152->leave($__internal_6aa6a5ad8cb1b4a6890438c25406d6ada1d1cc21c9e55d5930f01aab12f4e152_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
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

{% block fos_user_content %}
{% include \"@FOSUser/Group/show_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:show.html.twig", "C:\\Users\\11500384\\Documents\\GitHub\\Web-Mobile-Project\\WP3\\app/Resources/FOSUserBundle/views/Group/show.html.twig");
    }
}
