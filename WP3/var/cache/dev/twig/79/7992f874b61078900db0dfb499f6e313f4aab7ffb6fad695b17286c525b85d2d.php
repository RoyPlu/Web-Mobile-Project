<?php

/* FOSUserBundle:Group:list.html.twig */
class __TwigTemplate_158c85694d506f347993a9ab70b3aba6633c0caf7484db092b0c581530d46be5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:list.html.twig", 1);
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
        $__internal_dcfead33a63c335134c6ad36ab87559725f7d6b743caa2233732462fd0824922 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dcfead33a63c335134c6ad36ab87559725f7d6b743caa2233732462fd0824922->enter($__internal_dcfead33a63c335134c6ad36ab87559725f7d6b743caa2233732462fd0824922_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $__internal_e4174fe0df241fc2c94537399775333a5c5983b1107687abad6287feb0f34c5a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e4174fe0df241fc2c94537399775333a5c5983b1107687abad6287feb0f34c5a->enter($__internal_e4174fe0df241fc2c94537399775333a5c5983b1107687abad6287feb0f34c5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dcfead33a63c335134c6ad36ab87559725f7d6b743caa2233732462fd0824922->leave($__internal_dcfead33a63c335134c6ad36ab87559725f7d6b743caa2233732462fd0824922_prof);

        
        $__internal_e4174fe0df241fc2c94537399775333a5c5983b1107687abad6287feb0f34c5a->leave($__internal_e4174fe0df241fc2c94537399775333a5c5983b1107687abad6287feb0f34c5a_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_9d796d005a55388e5be5cabf44f3936da4c7bc760c2802961922476374f40738 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9d796d005a55388e5be5cabf44f3936da4c7bc760c2802961922476374f40738->enter($__internal_9d796d005a55388e5be5cabf44f3936da4c7bc760c2802961922476374f40738_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_4679ed6b5b246ba721fd1aef5d3f2efec7e62cd7b2efdba10d7b13f00dfde406 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4679ed6b5b246ba721fd1aef5d3f2efec7e62cd7b2efdba10d7b13f00dfde406->enter($__internal_4679ed6b5b246ba721fd1aef5d3f2efec7e62cd7b2efdba10d7b13f00dfde406_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/list_content.html.twig", "FOSUserBundle:Group:list.html.twig", 4)->display($context);
        
        $__internal_4679ed6b5b246ba721fd1aef5d3f2efec7e62cd7b2efdba10d7b13f00dfde406->leave($__internal_4679ed6b5b246ba721fd1aef5d3f2efec7e62cd7b2efdba10d7b13f00dfde406_prof);

        
        $__internal_9d796d005a55388e5be5cabf44f3936da4c7bc760c2802961922476374f40738->leave($__internal_9d796d005a55388e5be5cabf44f3936da4c7bc760c2802961922476374f40738_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:list.html.twig";
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
{% include \"@FOSUser/Group/list_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:list.html.twig", "C:\\Users\\11500384\\Documents\\GitHub\\Web-Mobile-Project\\WP3\\app/Resources/FOSUserBundle/views/Group/list.html.twig");
    }
}
