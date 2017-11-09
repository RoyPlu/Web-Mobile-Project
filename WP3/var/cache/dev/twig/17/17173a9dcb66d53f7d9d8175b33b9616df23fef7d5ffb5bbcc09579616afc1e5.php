<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_ad70f29241a284d520f0e5bbb34960fdaa6a9a50373849a457b5cb36d38425ee extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Security:login.html.twig", 1);
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
        $__internal_03842a1a2e8a4d4327f770f978ae3e2d00422070c3e751841bfacd9413bdaea5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_03842a1a2e8a4d4327f770f978ae3e2d00422070c3e751841bfacd9413bdaea5->enter($__internal_03842a1a2e8a4d4327f770f978ae3e2d00422070c3e751841bfacd9413bdaea5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $__internal_92811d71f1db326f3a52edfc43edad2fe1856eac4fb00a1be7ff082458efaff6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_92811d71f1db326f3a52edfc43edad2fe1856eac4fb00a1be7ff082458efaff6->enter($__internal_92811d71f1db326f3a52edfc43edad2fe1856eac4fb00a1be7ff082458efaff6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_03842a1a2e8a4d4327f770f978ae3e2d00422070c3e751841bfacd9413bdaea5->leave($__internal_03842a1a2e8a4d4327f770f978ae3e2d00422070c3e751841bfacd9413bdaea5_prof);

        
        $__internal_92811d71f1db326f3a52edfc43edad2fe1856eac4fb00a1be7ff082458efaff6->leave($__internal_92811d71f1db326f3a52edfc43edad2fe1856eac4fb00a1be7ff082458efaff6_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_bd0730cb127915c73635572e3ba8b72ed8a15e1300f6c1dd1ba32f74b7361149 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bd0730cb127915c73635572e3ba8b72ed8a15e1300f6c1dd1ba32f74b7361149->enter($__internal_bd0730cb127915c73635572e3ba8b72ed8a15e1300f6c1dd1ba32f74b7361149_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_9f7d084d50add58ede35414e30de2287296fa6b3bb4a93886132cdb8c456ce51 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9f7d084d50add58ede35414e30de2287296fa6b3bb4a93886132cdb8c456ce51->enter($__internal_9f7d084d50add58ede35414e30de2287296fa6b3bb4a93886132cdb8c456ce51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "@FOSUser/Security/login_content.html.twig");
        echo "
";
        
        $__internal_9f7d084d50add58ede35414e30de2287296fa6b3bb4a93886132cdb8c456ce51->leave($__internal_9f7d084d50add58ede35414e30de2287296fa6b3bb4a93886132cdb8c456ce51_prof);

        
        $__internal_bd0730cb127915c73635572e3ba8b72ed8a15e1300f6c1dd1ba32f74b7361149->leave($__internal_bd0730cb127915c73635572e3ba8b72ed8a15e1300f6c1dd1ba32f74b7361149_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login.html.twig";
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
    {{ include('@FOSUser/Security/login_content.html.twig') }}
{% endblock fos_user_content %}
", "FOSUserBundle:Security:login.html.twig", "C:\\Users\\11500384\\Documents\\GitHub\\Web-Mobile-Project\\WP3\\app/Resources/FOSUserBundle/views/Security/login.html.twig");
    }
}
