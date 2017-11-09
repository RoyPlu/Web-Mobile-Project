<?php

/* @FOSUser/Resetting/request.html.twig */
class __TwigTemplate_d2e3208b6226502a44881f8c180b3d4272230bb4e54d07a5a9555d55e83ef554 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Resetting/request.html.twig", 1);
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
        $__internal_287764be41dabf1e78d009d4b2ed6dbf178b5b93ffdfac79f6c7400119b80954 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_287764be41dabf1e78d009d4b2ed6dbf178b5b93ffdfac79f6c7400119b80954->enter($__internal_287764be41dabf1e78d009d4b2ed6dbf178b5b93ffdfac79f6c7400119b80954_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/request.html.twig"));

        $__internal_764e04dabe9414cbc9c6c35bf8d61062e5ad00d812f38281829dee37102ba3e9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_764e04dabe9414cbc9c6c35bf8d61062e5ad00d812f38281829dee37102ba3e9->enter($__internal_764e04dabe9414cbc9c6c35bf8d61062e5ad00d812f38281829dee37102ba3e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_287764be41dabf1e78d009d4b2ed6dbf178b5b93ffdfac79f6c7400119b80954->leave($__internal_287764be41dabf1e78d009d4b2ed6dbf178b5b93ffdfac79f6c7400119b80954_prof);

        
        $__internal_764e04dabe9414cbc9c6c35bf8d61062e5ad00d812f38281829dee37102ba3e9->leave($__internal_764e04dabe9414cbc9c6c35bf8d61062e5ad00d812f38281829dee37102ba3e9_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_9bdea1dda9387901361532676d31a53c2fd897347d8c607dd9b4d2d0a7877276 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9bdea1dda9387901361532676d31a53c2fd897347d8c607dd9b4d2d0a7877276->enter($__internal_9bdea1dda9387901361532676d31a53c2fd897347d8c607dd9b4d2d0a7877276_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_c5a4a30ed6f8f760d6e676427fceedc5d61632c7881adb603418fbe6559f34c8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c5a4a30ed6f8f760d6e676427fceedc5d61632c7881adb603418fbe6559f34c8->enter($__internal_c5a4a30ed6f8f760d6e676427fceedc5d61632c7881adb603418fbe6559f34c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/request_content.html.twig", "@FOSUser/Resetting/request.html.twig", 4)->display($context);
        
        $__internal_c5a4a30ed6f8f760d6e676427fceedc5d61632c7881adb603418fbe6559f34c8->leave($__internal_c5a4a30ed6f8f760d6e676427fceedc5d61632c7881adb603418fbe6559f34c8_prof);

        
        $__internal_9bdea1dda9387901361532676d31a53c2fd897347d8c607dd9b4d2d0a7877276->leave($__internal_9bdea1dda9387901361532676d31a53c2fd897347d8c607dd9b4d2d0a7877276_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/request.html.twig";
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
", "@FOSUser/Resetting/request.html.twig", "C:\\Users\\11500384\\Documents\\GitHub\\Web-Mobile-Project\\WP3\\app\\Resources\\FOSUserBundle\\views\\Resetting\\request.html.twig");
    }
}
