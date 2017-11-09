<?php

/* @FOSUser/Resetting/reset.html.twig */
class __TwigTemplate_fbf3c0962a913eb38093231ebcb3d4c4a2e39d1595925b5afcd7048a8e3b1f2a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Resetting/reset.html.twig", 1);
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
        $__internal_916c5f8f41554280be7f0c0c8df66da843498898ba2b84c28c9d210ea7221b8c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_916c5f8f41554280be7f0c0c8df66da843498898ba2b84c28c9d210ea7221b8c->enter($__internal_916c5f8f41554280be7f0c0c8df66da843498898ba2b84c28c9d210ea7221b8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/reset.html.twig"));

        $__internal_8a62a75463ee629497cbd4bd5ec8934817f4202fb3dd1e147b3c8658c353802f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8a62a75463ee629497cbd4bd5ec8934817f4202fb3dd1e147b3c8658c353802f->enter($__internal_8a62a75463ee629497cbd4bd5ec8934817f4202fb3dd1e147b3c8658c353802f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_916c5f8f41554280be7f0c0c8df66da843498898ba2b84c28c9d210ea7221b8c->leave($__internal_916c5f8f41554280be7f0c0c8df66da843498898ba2b84c28c9d210ea7221b8c_prof);

        
        $__internal_8a62a75463ee629497cbd4bd5ec8934817f4202fb3dd1e147b3c8658c353802f->leave($__internal_8a62a75463ee629497cbd4bd5ec8934817f4202fb3dd1e147b3c8658c353802f_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_d2cc162c70b51cf3fe04c7b7e486d6d9ca4fdc47842ba53c99d1f043652aff54 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d2cc162c70b51cf3fe04c7b7e486d6d9ca4fdc47842ba53c99d1f043652aff54->enter($__internal_d2cc162c70b51cf3fe04c7b7e486d6d9ca4fdc47842ba53c99d1f043652aff54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_839fd9c3f8822f4d5ffc458080a411c2274995efe327dd750ac52d1efa934b60 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_839fd9c3f8822f4d5ffc458080a411c2274995efe327dd750ac52d1efa934b60->enter($__internal_839fd9c3f8822f4d5ffc458080a411c2274995efe327dd750ac52d1efa934b60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/reset_content.html.twig", "@FOSUser/Resetting/reset.html.twig", 4)->display($context);
        
        $__internal_839fd9c3f8822f4d5ffc458080a411c2274995efe327dd750ac52d1efa934b60->leave($__internal_839fd9c3f8822f4d5ffc458080a411c2274995efe327dd750ac52d1efa934b60_prof);

        
        $__internal_d2cc162c70b51cf3fe04c7b7e486d6d9ca4fdc47842ba53c99d1f043652aff54->leave($__internal_d2cc162c70b51cf3fe04c7b7e486d6d9ca4fdc47842ba53c99d1f043652aff54_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/reset.html.twig";
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
{% include \"@FOSUser/Resetting/reset_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Resetting/reset.html.twig", "C:\\Users\\11500384\\Documents\\GitHub\\Web-Mobile-Project\\WP3\\app\\Resources\\FOSUserBundle\\views\\Resetting\\reset.html.twig");
    }
}
