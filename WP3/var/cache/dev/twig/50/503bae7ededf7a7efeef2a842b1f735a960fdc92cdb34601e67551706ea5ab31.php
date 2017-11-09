<?php

/* @FOSUser/Group/edit.html.twig */
class __TwigTemplate_f966c9da3118d29ba540250c8a89d8d05cf043c1b7c26fb0962d9494b854d3c8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Group/edit.html.twig", 1);
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
        $__internal_a2f8c4737af9fe44a50918fc13660d3aeb0f6afe215dde93345c872221951e20 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a2f8c4737af9fe44a50918fc13660d3aeb0f6afe215dde93345c872221951e20->enter($__internal_a2f8c4737af9fe44a50918fc13660d3aeb0f6afe215dde93345c872221951e20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/edit.html.twig"));

        $__internal_a701c364fe2d37e733662386f799266ad4125209e6492d9a0405b20a9ddf7958 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a701c364fe2d37e733662386f799266ad4125209e6492d9a0405b20a9ddf7958->enter($__internal_a701c364fe2d37e733662386f799266ad4125209e6492d9a0405b20a9ddf7958_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a2f8c4737af9fe44a50918fc13660d3aeb0f6afe215dde93345c872221951e20->leave($__internal_a2f8c4737af9fe44a50918fc13660d3aeb0f6afe215dde93345c872221951e20_prof);

        
        $__internal_a701c364fe2d37e733662386f799266ad4125209e6492d9a0405b20a9ddf7958->leave($__internal_a701c364fe2d37e733662386f799266ad4125209e6492d9a0405b20a9ddf7958_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_3e82858ac88f3f6a3816d5d8008e7d9518ade2900413010b8c434ea89ba4b834 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3e82858ac88f3f6a3816d5d8008e7d9518ade2900413010b8c434ea89ba4b834->enter($__internal_3e82858ac88f3f6a3816d5d8008e7d9518ade2900413010b8c434ea89ba4b834_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_91aed95aad4153b012e29eeb5d9b1bf2fc223aca0728bdcbbcc87222df644981 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_91aed95aad4153b012e29eeb5d9b1bf2fc223aca0728bdcbbcc87222df644981->enter($__internal_91aed95aad4153b012e29eeb5d9b1bf2fc223aca0728bdcbbcc87222df644981_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/edit_content.html.twig", "@FOSUser/Group/edit.html.twig", 4)->display($context);
        
        $__internal_91aed95aad4153b012e29eeb5d9b1bf2fc223aca0728bdcbbcc87222df644981->leave($__internal_91aed95aad4153b012e29eeb5d9b1bf2fc223aca0728bdcbbcc87222df644981_prof);

        
        $__internal_3e82858ac88f3f6a3816d5d8008e7d9518ade2900413010b8c434ea89ba4b834->leave($__internal_3e82858ac88f3f6a3816d5d8008e7d9518ade2900413010b8c434ea89ba4b834_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/edit.html.twig";
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
{% include \"@FOSUser/Group/edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Group/edit.html.twig", "C:\\Users\\11500384\\Documents\\GitHub\\Web-Mobile-Project\\WP3\\app\\Resources\\FOSUserBundle\\views\\Group\\edit.html.twig");
    }
}
