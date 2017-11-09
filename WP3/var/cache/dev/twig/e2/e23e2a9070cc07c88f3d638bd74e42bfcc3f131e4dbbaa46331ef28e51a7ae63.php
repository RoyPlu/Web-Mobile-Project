<?php

/* FOSUserBundle:Group:new.html.twig */
class __TwigTemplate_22d28760bd247001deb1294b2c9daa41d749783621155ef2d9df872af9062e02 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:new.html.twig", 1);
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
        $__internal_c52ff32e1833738c54be037f9c2489a045fc4f434ede827d6416cc4471ec612f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c52ff32e1833738c54be037f9c2489a045fc4f434ede827d6416cc4471ec612f->enter($__internal_c52ff32e1833738c54be037f9c2489a045fc4f434ede827d6416cc4471ec612f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $__internal_c2c54401218750a3a5c3d59be21d6c73e2754ad5e9f3ab5776fccad29bf66d17 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c2c54401218750a3a5c3d59be21d6c73e2754ad5e9f3ab5776fccad29bf66d17->enter($__internal_c2c54401218750a3a5c3d59be21d6c73e2754ad5e9f3ab5776fccad29bf66d17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c52ff32e1833738c54be037f9c2489a045fc4f434ede827d6416cc4471ec612f->leave($__internal_c52ff32e1833738c54be037f9c2489a045fc4f434ede827d6416cc4471ec612f_prof);

        
        $__internal_c2c54401218750a3a5c3d59be21d6c73e2754ad5e9f3ab5776fccad29bf66d17->leave($__internal_c2c54401218750a3a5c3d59be21d6c73e2754ad5e9f3ab5776fccad29bf66d17_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_55bfc1df96afb7498669f85a7815fca55d2b9a198b74ef256f3c5e0e71fd8fb4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_55bfc1df96afb7498669f85a7815fca55d2b9a198b74ef256f3c5e0e71fd8fb4->enter($__internal_55bfc1df96afb7498669f85a7815fca55d2b9a198b74ef256f3c5e0e71fd8fb4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_0b93a403019ea3e00e6e8b55e43317f7a1c58f4fd3f2af02ddfd78b1385652a1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b93a403019ea3e00e6e8b55e43317f7a1c58f4fd3f2af02ddfd78b1385652a1->enter($__internal_0b93a403019ea3e00e6e8b55e43317f7a1c58f4fd3f2af02ddfd78b1385652a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/new_content.html.twig", "FOSUserBundle:Group:new.html.twig", 4)->display($context);
        
        $__internal_0b93a403019ea3e00e6e8b55e43317f7a1c58f4fd3f2af02ddfd78b1385652a1->leave($__internal_0b93a403019ea3e00e6e8b55e43317f7a1c58f4fd3f2af02ddfd78b1385652a1_prof);

        
        $__internal_55bfc1df96afb7498669f85a7815fca55d2b9a198b74ef256f3c5e0e71fd8fb4->leave($__internal_55bfc1df96afb7498669f85a7815fca55d2b9a198b74ef256f3c5e0e71fd8fb4_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:new.html.twig";
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
{% include \"@FOSUser/Group/new_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:new.html.twig", "C:\\Users\\11500384\\Documents\\GitHub\\Web-Mobile-Project\\WP3\\app/Resources/FOSUserBundle/views/Group/new.html.twig");
    }
}
