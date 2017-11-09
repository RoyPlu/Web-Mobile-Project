<?php

/* @FOSUser/Registration/register.html.twig */
class __TwigTemplate_fb835c686cb2808943cb2a79f8ee11da5e381cd493df8c0257e35ea41dd82704 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "@FOSUser/Registration/register.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'title' => array($this, 'block_title'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_922672b12dbc3a8cc1d8510fe1fcd3cc0d6ae61e23b3cda91bb54b2182d6e617 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_922672b12dbc3a8cc1d8510fe1fcd3cc0d6ae61e23b3cda91bb54b2182d6e617->enter($__internal_922672b12dbc3a8cc1d8510fe1fcd3cc0d6ae61e23b3cda91bb54b2182d6e617_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $__internal_ec7436fc2187abcb0eacf93bd0efdf211587f398a74a7474dec2a0a8ec3ce035 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ec7436fc2187abcb0eacf93bd0efdf211587f398a74a7474dec2a0a8ec3ce035->enter($__internal_ec7436fc2187abcb0eacf93bd0efdf211587f398a74a7474dec2a0a8ec3ce035_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_922672b12dbc3a8cc1d8510fe1fcd3cc0d6ae61e23b3cda91bb54b2182d6e617->leave($__internal_922672b12dbc3a8cc1d8510fe1fcd3cc0d6ae61e23b3cda91bb54b2182d6e617_prof);

        
        $__internal_ec7436fc2187abcb0eacf93bd0efdf211587f398a74a7474dec2a0a8ec3ce035->leave($__internal_ec7436fc2187abcb0eacf93bd0efdf211587f398a74a7474dec2a0a8ec3ce035_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_4c43ff5b4411e7d77348fd035ae89abfb0414a83a7553ade8b437f2a1214aa4e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4c43ff5b4411e7d77348fd035ae89abfb0414a83a7553ade8b437f2a1214aa4e->enter($__internal_4c43ff5b4411e7d77348fd035ae89abfb0414a83a7553ade8b437f2a1214aa4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c3d957737ed6bdd761c1058c5946ded7c67666875cf2921b146519152e383f18 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c3d957737ed6bdd761c1058c5946ded7c67666875cf2921b146519152e383f18->enter($__internal_c3d957737ed6bdd761c1058c5946ded7c67666875cf2921b146519152e383f18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        $this->displayBlock('title', $context, $blocks);
        // line 5
        $this->displayBlock('fos_user_content', $context, $blocks);
        
        $__internal_c3d957737ed6bdd761c1058c5946ded7c67666875cf2921b146519152e383f18->leave($__internal_c3d957737ed6bdd761c1058c5946ded7c67666875cf2921b146519152e383f18_prof);

        
        $__internal_4c43ff5b4411e7d77348fd035ae89abfb0414a83a7553ade8b437f2a1214aa4e->leave($__internal_4c43ff5b4411e7d77348fd035ae89abfb0414a83a7553ade8b437f2a1214aa4e_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_88ba8a9df7eb9891109bab728c7930fe46a5a567bd5b5fcfa58d40e3782f0672 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_88ba8a9df7eb9891109bab728c7930fe46a5a567bd5b5fcfa58d40e3782f0672->enter($__internal_88ba8a9df7eb9891109bab728c7930fe46a5a567bd5b5fcfa58d40e3782f0672_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_fb5d02bb75c6505b6b8216cb9832cd3b728c69f81913b832d2e67d24b9a1635f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fb5d02bb75c6505b6b8216cb9832cd3b728c69f81913b832d2e67d24b9a1635f->enter($__internal_fb5d02bb75c6505b6b8216cb9832cd3b728c69f81913b832d2e67d24b9a1635f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Register";
        
        $__internal_fb5d02bb75c6505b6b8216cb9832cd3b728c69f81913b832d2e67d24b9a1635f->leave($__internal_fb5d02bb75c6505b6b8216cb9832cd3b728c69f81913b832d2e67d24b9a1635f_prof);

        
        $__internal_88ba8a9df7eb9891109bab728c7930fe46a5a567bd5b5fcfa58d40e3782f0672->leave($__internal_88ba8a9df7eb9891109bab728c7930fe46a5a567bd5b5fcfa58d40e3782f0672_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_9f2be0357f883ffc29d3b8d50b630c4141af3824a27758c6c2c0f304767fe3af = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9f2be0357f883ffc29d3b8d50b630c4141af3824a27758c6c2c0f304767fe3af->enter($__internal_9f2be0357f883ffc29d3b8d50b630c4141af3824a27758c6c2c0f304767fe3af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_847ac593783c87b0a6df47b1d81819c1e9eefdbf78dc86e8c0b3dc60117bffdb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_847ac593783c87b0a6df47b1d81819c1e9eefdbf78dc86e8c0b3dc60117bffdb->enter($__internal_847ac593783c87b0a6df47b1d81819c1e9eefdbf78dc86e8c0b3dc60117bffdb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    ";
        $this->loadTemplate("@FOSUser/Registration/register_content.html.twig", "@FOSUser/Registration/register.html.twig", 6)->display($context);
        
        $__internal_847ac593783c87b0a6df47b1d81819c1e9eefdbf78dc86e8c0b3dc60117bffdb->leave($__internal_847ac593783c87b0a6df47b1d81819c1e9eefdbf78dc86e8c0b3dc60117bffdb_prof);

        
        $__internal_9f2be0357f883ffc29d3b8d50b630c4141af3824a27758c6c2c0f304767fe3af->leave($__internal_9f2be0357f883ffc29d3b8d50b630c4141af3824a27758c6c2c0f304767fe3af_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 6,  81 => 5,  63 => 4,  53 => 5,  51 => 4,  42 => 3,  11 => 1,);
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

{% block body %}
{% block title %}Register{% endblock %}
{% block fos_user_content %}
    {% include \"@FOSUser/Registration/register_content.html.twig\" %}
{% endblock fos_user_content %}
{%  endblock %}
", "@FOSUser/Registration/register.html.twig", "C:\\Users\\11500384\\Documents\\GitHub\\Web-Mobile-Project\\WP3\\app\\Resources\\FOSUserBundle\\views\\Registration\\register.html.twig");
    }
}
