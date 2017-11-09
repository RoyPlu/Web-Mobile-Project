<?php

/* @FOSUser/Profile/show.html.twig */
class __TwigTemplate_5e9080eaf586fecd8525e9ed3570a5b040b238b46566b80c297304a6c3a88346 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Profile/show.html.twig", 1);
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
        $__internal_30acbd2115695f7e74346ccfe71333e13305a803a2cfccd42c9ad4f57dd6b4cf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_30acbd2115695f7e74346ccfe71333e13305a803a2cfccd42c9ad4f57dd6b4cf->enter($__internal_30acbd2115695f7e74346ccfe71333e13305a803a2cfccd42c9ad4f57dd6b4cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show.html.twig"));

        $__internal_21cc7333c1def2791e7711515609a23d7fe4d16c0e57516f08b1412a48542a6c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_21cc7333c1def2791e7711515609a23d7fe4d16c0e57516f08b1412a48542a6c->enter($__internal_21cc7333c1def2791e7711515609a23d7fe4d16c0e57516f08b1412a48542a6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_30acbd2115695f7e74346ccfe71333e13305a803a2cfccd42c9ad4f57dd6b4cf->leave($__internal_30acbd2115695f7e74346ccfe71333e13305a803a2cfccd42c9ad4f57dd6b4cf_prof);

        
        $__internal_21cc7333c1def2791e7711515609a23d7fe4d16c0e57516f08b1412a48542a6c->leave($__internal_21cc7333c1def2791e7711515609a23d7fe4d16c0e57516f08b1412a48542a6c_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_4df4b3a9cbeb086d6f9d7e1e0235c4f773c053b08de083b4516c7c9870716dd0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4df4b3a9cbeb086d6f9d7e1e0235c4f773c053b08de083b4516c7c9870716dd0->enter($__internal_4df4b3a9cbeb086d6f9d7e1e0235c4f773c053b08de083b4516c7c9870716dd0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_85da82449632be5551a3c063b827368ce56ddddba819b9faf24da3decc666f0b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_85da82449632be5551a3c063b827368ce56ddddba819b9faf24da3decc666f0b->enter($__internal_85da82449632be5551a3c063b827368ce56ddddba819b9faf24da3decc666f0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/show_content.html.twig", "@FOSUser/Profile/show.html.twig", 4)->display($context);
        
        $__internal_85da82449632be5551a3c063b827368ce56ddddba819b9faf24da3decc666f0b->leave($__internal_85da82449632be5551a3c063b827368ce56ddddba819b9faf24da3decc666f0b_prof);

        
        $__internal_4df4b3a9cbeb086d6f9d7e1e0235c4f773c053b08de083b4516c7c9870716dd0->leave($__internal_4df4b3a9cbeb086d6f9d7e1e0235c4f773c053b08de083b4516c7c9870716dd0_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/show.html.twig";
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
{% include \"@FOSUser/Profile/show_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Profile/show.html.twig", "C:\\Users\\11500384\\Documents\\GitHub\\Web-Mobile-Project\\WP3\\app\\Resources\\FOSUserBundle\\views\\Profile\\show.html.twig");
    }
}
