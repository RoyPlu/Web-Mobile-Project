<?php

/* FOSUserBundle:Profile:show.html.twig */
class __TwigTemplate_d6d80d740d4d7b344b2eb8da919d3b509dbcc3a40032fd758a1a712132bc89bc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Profile:show.html.twig", 1);
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
        $__internal_940b7e35e212c568b3f80b69e4d6b8993f633a06f53f660c2b6741eb7d95883b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_940b7e35e212c568b3f80b69e4d6b8993f633a06f53f660c2b6741eb7d95883b->enter($__internal_940b7e35e212c568b3f80b69e4d6b8993f633a06f53f660c2b6741eb7d95883b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $__internal_88ddd06a31257e0e81af4388e0b222713d0a1f225888cb0130b36779cc1227ea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_88ddd06a31257e0e81af4388e0b222713d0a1f225888cb0130b36779cc1227ea->enter($__internal_88ddd06a31257e0e81af4388e0b222713d0a1f225888cb0130b36779cc1227ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_940b7e35e212c568b3f80b69e4d6b8993f633a06f53f660c2b6741eb7d95883b->leave($__internal_940b7e35e212c568b3f80b69e4d6b8993f633a06f53f660c2b6741eb7d95883b_prof);

        
        $__internal_88ddd06a31257e0e81af4388e0b222713d0a1f225888cb0130b36779cc1227ea->leave($__internal_88ddd06a31257e0e81af4388e0b222713d0a1f225888cb0130b36779cc1227ea_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_2f49f491a3ea389c3790f33db197b7405f85209dcafbb6ab58bd8c5203e0fc51 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2f49f491a3ea389c3790f33db197b7405f85209dcafbb6ab58bd8c5203e0fc51->enter($__internal_2f49f491a3ea389c3790f33db197b7405f85209dcafbb6ab58bd8c5203e0fc51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_e1ad93be2b113888077ae42b1afba763ce8f85b45b375f59590efc64566bdd44 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e1ad93be2b113888077ae42b1afba763ce8f85b45b375f59590efc64566bdd44->enter($__internal_e1ad93be2b113888077ae42b1afba763ce8f85b45b375f59590efc64566bdd44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 4)->display($context);
        
        $__internal_e1ad93be2b113888077ae42b1afba763ce8f85b45b375f59590efc64566bdd44->leave($__internal_e1ad93be2b113888077ae42b1afba763ce8f85b45b375f59590efc64566bdd44_prof);

        
        $__internal_2f49f491a3ea389c3790f33db197b7405f85209dcafbb6ab58bd8c5203e0fc51->leave($__internal_2f49f491a3ea389c3790f33db197b7405f85209dcafbb6ab58bd8c5203e0fc51_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show.html.twig";
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
", "FOSUserBundle:Profile:show.html.twig", "C:\\Users\\11500384\\Documents\\GitHub\\Web-Mobile-Project\\WP3\\app/Resources/FOSUserBundle/views/Profile/show.html.twig");
    }
}
