<?php

/* FOSUserBundle:Resetting:request.html.twig */
class __TwigTemplate_89bcc38f1b50c116ab7b501d699005d089ea9609aaa3d5c76284b31fc2c70b35 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Resetting:request.html.twig", 1);
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
        $__internal_0f8be19ee64d757e8c02c61a50c30727d109a5b3e38bb81da8e3fd202af8b021 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0f8be19ee64d757e8c02c61a50c30727d109a5b3e38bb81da8e3fd202af8b021->enter($__internal_0f8be19ee64d757e8c02c61a50c30727d109a5b3e38bb81da8e3fd202af8b021_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $__internal_970f1a7ef43cba1a0027c4320867f4618028fc17c0c287ed209103c48095dddc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_970f1a7ef43cba1a0027c4320867f4618028fc17c0c287ed209103c48095dddc->enter($__internal_970f1a7ef43cba1a0027c4320867f4618028fc17c0c287ed209103c48095dddc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0f8be19ee64d757e8c02c61a50c30727d109a5b3e38bb81da8e3fd202af8b021->leave($__internal_0f8be19ee64d757e8c02c61a50c30727d109a5b3e38bb81da8e3fd202af8b021_prof);

        
        $__internal_970f1a7ef43cba1a0027c4320867f4618028fc17c0c287ed209103c48095dddc->leave($__internal_970f1a7ef43cba1a0027c4320867f4618028fc17c0c287ed209103c48095dddc_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_daaf707b55bb22488dfe346158111656b8d7020bccae125cb07ae4c9adc9ba1c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_daaf707b55bb22488dfe346158111656b8d7020bccae125cb07ae4c9adc9ba1c->enter($__internal_daaf707b55bb22488dfe346158111656b8d7020bccae125cb07ae4c9adc9ba1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_89b92bc01342d58ca8d8ed01075cbc436bc0a3d096fb6d7e26907f58f9805862 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_89b92bc01342d58ca8d8ed01075cbc436bc0a3d096fb6d7e26907f58f9805862->enter($__internal_89b92bc01342d58ca8d8ed01075cbc436bc0a3d096fb6d7e26907f58f9805862_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/request_content.html.twig", "FOSUserBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_89b92bc01342d58ca8d8ed01075cbc436bc0a3d096fb6d7e26907f58f9805862->leave($__internal_89b92bc01342d58ca8d8ed01075cbc436bc0a3d096fb6d7e26907f58f9805862_prof);

        
        $__internal_daaf707b55bb22488dfe346158111656b8d7020bccae125cb07ae4c9adc9ba1c->leave($__internal_daaf707b55bb22488dfe346158111656b8d7020bccae125cb07ae4c9adc9ba1c_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:request.html.twig";
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
{% include \"@FOSUser/Resetting/request_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Resetting:request.html.twig", "C:\\Users\\11500384\\Documents\\GitHub\\Web-Mobile-Project\\WP3\\app/Resources/FOSUserBundle/views/Resetting/request.html.twig");
    }
}
