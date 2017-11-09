<?php

/* FOSUserBundle:Group:edit.html.twig */
class __TwigTemplate_3cfca3f1f39c6b5fd6064242187418d3184785d48208d81d02d5a0c20b8833a4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:edit.html.twig", 1);
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
        $__internal_a6cf3c207d493f1a1b3c6b1ae9dee3c7fb448006fef76dfd00d4e84f4e78347b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a6cf3c207d493f1a1b3c6b1ae9dee3c7fb448006fef76dfd00d4e84f4e78347b->enter($__internal_a6cf3c207d493f1a1b3c6b1ae9dee3c7fb448006fef76dfd00d4e84f4e78347b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $__internal_76f7bc7055207d7a976e2f7ab29b25cf35d6f1474e047b2c840efd56ae1d102e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_76f7bc7055207d7a976e2f7ab29b25cf35d6f1474e047b2c840efd56ae1d102e->enter($__internal_76f7bc7055207d7a976e2f7ab29b25cf35d6f1474e047b2c840efd56ae1d102e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a6cf3c207d493f1a1b3c6b1ae9dee3c7fb448006fef76dfd00d4e84f4e78347b->leave($__internal_a6cf3c207d493f1a1b3c6b1ae9dee3c7fb448006fef76dfd00d4e84f4e78347b_prof);

        
        $__internal_76f7bc7055207d7a976e2f7ab29b25cf35d6f1474e047b2c840efd56ae1d102e->leave($__internal_76f7bc7055207d7a976e2f7ab29b25cf35d6f1474e047b2c840efd56ae1d102e_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_ae40f779cfcd8922b22650172545562efd7ed0db9792d622e7beec6f115be62d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ae40f779cfcd8922b22650172545562efd7ed0db9792d622e7beec6f115be62d->enter($__internal_ae40f779cfcd8922b22650172545562efd7ed0db9792d622e7beec6f115be62d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_cf3aca6a1a0e1d6b4cca1438facc047cc94df9d36226a8123474a60dc291873b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf3aca6a1a0e1d6b4cca1438facc047cc94df9d36226a8123474a60dc291873b->enter($__internal_cf3aca6a1a0e1d6b4cca1438facc047cc94df9d36226a8123474a60dc291873b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/edit_content.html.twig", "FOSUserBundle:Group:edit.html.twig", 4)->display($context);
        
        $__internal_cf3aca6a1a0e1d6b4cca1438facc047cc94df9d36226a8123474a60dc291873b->leave($__internal_cf3aca6a1a0e1d6b4cca1438facc047cc94df9d36226a8123474a60dc291873b_prof);

        
        $__internal_ae40f779cfcd8922b22650172545562efd7ed0db9792d622e7beec6f115be62d->leave($__internal_ae40f779cfcd8922b22650172545562efd7ed0db9792d622e7beec6f115be62d_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:edit.html.twig";
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
", "FOSUserBundle:Group:edit.html.twig", "C:\\Users\\11500384\\Documents\\GitHub\\Web-Mobile-Project\\WP3\\app/Resources/FOSUserBundle/views/Group/edit.html.twig");
    }
}
