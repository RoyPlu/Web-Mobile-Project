<?php

/* @FOSUser/ChangePassword/change_password.html.twig */
class __TwigTemplate_e777430b0f6d76de5bcea138a484780fc4584287f70bb592fb75ce92caf54c96 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/ChangePassword/change_password.html.twig", 1);
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
        $__internal_cf89abe80dd4f92ca028f733d80d8658f635d3cc7cf3cebf3082c3fa66b6cda2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cf89abe80dd4f92ca028f733d80d8658f635d3cc7cf3cebf3082c3fa66b6cda2->enter($__internal_cf89abe80dd4f92ca028f733d80d8658f635d3cc7cf3cebf3082c3fa66b6cda2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/ChangePassword/change_password.html.twig"));

        $__internal_a9616c2141da62d75545cab673e6b898505cc507383e18399338e8dbc8487b46 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a9616c2141da62d75545cab673e6b898505cc507383e18399338e8dbc8487b46->enter($__internal_a9616c2141da62d75545cab673e6b898505cc507383e18399338e8dbc8487b46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/ChangePassword/change_password.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cf89abe80dd4f92ca028f733d80d8658f635d3cc7cf3cebf3082c3fa66b6cda2->leave($__internal_cf89abe80dd4f92ca028f733d80d8658f635d3cc7cf3cebf3082c3fa66b6cda2_prof);

        
        $__internal_a9616c2141da62d75545cab673e6b898505cc507383e18399338e8dbc8487b46->leave($__internal_a9616c2141da62d75545cab673e6b898505cc507383e18399338e8dbc8487b46_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_c68967b1b9e6c7bc72b3d9456ca534646740a47127776a520c2e3b0df8421a65 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c68967b1b9e6c7bc72b3d9456ca534646740a47127776a520c2e3b0df8421a65->enter($__internal_c68967b1b9e6c7bc72b3d9456ca534646740a47127776a520c2e3b0df8421a65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_d9d76aadf5cd7a2db40639c5ea1fe3b9e0597d639f7f6d938fbb9186a4100b90 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d9d76aadf5cd7a2db40639c5ea1fe3b9e0597d639f7f6d938fbb9186a4100b90->enter($__internal_d9d76aadf5cd7a2db40639c5ea1fe3b9e0597d639f7f6d938fbb9186a4100b90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/ChangePassword/change_password_content.html.twig", "@FOSUser/ChangePassword/change_password.html.twig", 4)->display($context);
        
        $__internal_d9d76aadf5cd7a2db40639c5ea1fe3b9e0597d639f7f6d938fbb9186a4100b90->leave($__internal_d9d76aadf5cd7a2db40639c5ea1fe3b9e0597d639f7f6d938fbb9186a4100b90_prof);

        
        $__internal_c68967b1b9e6c7bc72b3d9456ca534646740a47127776a520c2e3b0df8421a65->leave($__internal_c68967b1b9e6c7bc72b3d9456ca534646740a47127776a520c2e3b0df8421a65_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/ChangePassword/change_password.html.twig";
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
{% include \"@FOSUser/ChangePassword/change_password_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/ChangePassword/change_password.html.twig", "C:\\Users\\11500384\\Documents\\GitHub\\Web-Mobile-Project\\WP3\\app\\Resources\\FOSUserBundle\\views\\ChangePassword\\change_password.html.twig");
    }
}
