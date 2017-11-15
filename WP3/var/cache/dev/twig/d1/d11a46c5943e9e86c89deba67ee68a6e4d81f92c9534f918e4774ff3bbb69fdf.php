<?php

/* default/add.problem.html.twig */
class __TwigTemplate_6b01f5918dda431c7f514243de09c4edc6db086277edb1c0829e7e7850fde427 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("::base.html.twig", "default/add.problem.html.twig", 3);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_40a3626f837f1699c465c9b0ebf2156443d1091969818f7bfc8f836e6da10de5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_40a3626f837f1699c465c9b0ebf2156443d1091969818f7bfc8f836e6da10de5->enter($__internal_40a3626f837f1699c465c9b0ebf2156443d1091969818f7bfc8f836e6da10de5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/add.problem.html.twig"));

        $__internal_c9e4845bbc6a04ace5e1e2d48c94a32d7985ee86159470821a9b119cd934e521 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c9e4845bbc6a04ace5e1e2d48c94a32d7985ee86159470821a9b119cd934e521->enter($__internal_c9e4845bbc6a04ace5e1e2d48c94a32d7985ee86159470821a9b119cd934e521_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/add.problem.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_40a3626f837f1699c465c9b0ebf2156443d1091969818f7bfc8f836e6da10de5->leave($__internal_40a3626f837f1699c465c9b0ebf2156443d1091969818f7bfc8f836e6da10de5_prof);

        
        $__internal_c9e4845bbc6a04ace5e1e2d48c94a32d7985ee86159470821a9b119cd934e521->leave($__internal_c9e4845bbc6a04ace5e1e2d48c94a32d7985ee86159470821a9b119cd934e521_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_a9d8000129d1087d2e8fdcf0493d521d9bdf2a3fe00572f8957bcba491bb1345 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a9d8000129d1087d2e8fdcf0493d521d9bdf2a3fe00572f8957bcba491bb1345->enter($__internal_a9d8000129d1087d2e8fdcf0493d521d9bdf2a3fe00572f8957bcba491bb1345_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_a72252da91726fbff7c212e8ae3b6b0f6580d16d6a1a3afecc266dc1f9ac2a63 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a72252da91726fbff7c212e8ae3b6b0f6580d16d6a1a3afecc266dc1f9ac2a63->enter($__internal_a72252da91726fbff7c212e8ae3b6b0f6580d16d6a1a3afecc266dc1f9ac2a63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "locations";
        
        $__internal_a72252da91726fbff7c212e8ae3b6b0f6580d16d6a1a3afecc266dc1f9ac2a63->leave($__internal_a72252da91726fbff7c212e8ae3b6b0f6580d16d6a1a3afecc266dc1f9ac2a63_prof);

        
        $__internal_a9d8000129d1087d2e8fdcf0493d521d9bdf2a3fe00572f8957bcba491bb1345->leave($__internal_a9d8000129d1087d2e8fdcf0493d521d9bdf2a3fe00572f8957bcba491bb1345_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_1faf32b2ffd93ca4cb25c525bdf76fb9de8b879c80a53bb7d115db05c95cebad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1faf32b2ffd93ca4cb25c525bdf76fb9de8b879c80a53bb7d115db05c95cebad->enter($__internal_1faf32b2ffd93ca4cb25c525bdf76fb9de8b879c80a53bb7d115db05c95cebad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c4156ecd56597a2e1a45f0301fa4905ad364611dff7ff95853328dc8738ebfbb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c4156ecd56597a2e1a45f0301fa4905ad364611dff7ff95853328dc8738ebfbb->enter($__internal_c4156ecd56597a2e1a45f0301fa4905ad364611dff7ff95853328dc8738ebfbb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
<!-- <form action=\"";
        // line 7
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_submit_problem");
        echo "\" method=\"post\"> -->

        <input type=\"hidden\" name=\"Id\" value=\"1\" />

        <label for=\"id\">";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("id"), "html", null, true);
        echo "</label>
        <input type=\"text\" id=\"id\" name=\"_id\" value=\"\" />

        <label for=\"locationId\">";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("locationId"), "html", null, true);
        echo "</label>
        <input type=\"text\" id=\"locationId\" name=\"_locationId\" value=\"\" required=\"required\"/>

        <label for=\"problem\">";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("problem"), "html", null, true);
        echo "</label>
        <input type=\"text\" id=\"problem\" name=\"_problem\" value=\"\" />

        <label for=\"date\">";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("date"), "html", null, true);
        echo "</label>
        <input type=\"date\" id=\"date\" name=\"_date\" value=\"\" />

        <label for=\"finished\">";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("finished"), "html", null, true);
        echo "</label>
        <input type=\"checkbox\" id=\"finished\" name=\"_finished\" value=\"\" />

        <input type=\"submit\" id=\"_submit\" name=\"_submit\" value=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Update"), "html", null, true);
        echo "\" />

<!-- </form> -->
";
        
        $__internal_c4156ecd56597a2e1a45f0301fa4905ad364611dff7ff95853328dc8738ebfbb->leave($__internal_c4156ecd56597a2e1a45f0301fa4905ad364611dff7ff95853328dc8738ebfbb_prof);

        
        $__internal_1faf32b2ffd93ca4cb25c525bdf76fb9de8b879c80a53bb7d115db05c95cebad->leave($__internal_1faf32b2ffd93ca4cb25c525bdf76fb9de8b879c80a53bb7d115db05c95cebad_prof);

    }

    public function getTemplateName()
    {
        return "default/add.problem.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  108 => 26,  102 => 23,  96 => 20,  90 => 17,  84 => 14,  78 => 11,  71 => 7,  68 => 6,  59 => 5,  41 => 4,  11 => 3,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("

{% extends \"::base.html.twig\" %}
{% block title %}locations{% endblock %}
{% block body %}

<!-- <form action=\"{{ path('admin_submit_problem') }}\" method=\"post\"> -->

        <input type=\"hidden\" name=\"Id\" value=\"1\" />

        <label for=\"id\">{{ 'id'|trans }}</label>
        <input type=\"text\" id=\"id\" name=\"_id\" value=\"\" />

        <label for=\"locationId\">{{ 'locationId'|trans }}</label>
        <input type=\"text\" id=\"locationId\" name=\"_locationId\" value=\"\" required=\"required\"/>

        <label for=\"problem\">{{ 'problem'|trans }}</label>
        <input type=\"text\" id=\"problem\" name=\"_problem\" value=\"\" />

        <label for=\"date\">{{ 'date'|trans }}</label>
        <input type=\"date\" id=\"date\" name=\"_date\" value=\"\" />

        <label for=\"finished\">{{ 'finished'|trans }}</label>
        <input type=\"checkbox\" id=\"finished\" name=\"_finished\" value=\"\" />

        <input type=\"submit\" id=\"_submit\" name=\"_submit\" value=\"{{ 'Update'|trans }}\" />

<!-- </form> -->
{% endblock %}", "default/add.problem.html.twig", "C:\\Users\\11500384\\Documents\\GitHub\\Web-Mobile-Project\\WP3\\app\\Resources\\views\\default\\add.problem.html.twig");
    }
}
