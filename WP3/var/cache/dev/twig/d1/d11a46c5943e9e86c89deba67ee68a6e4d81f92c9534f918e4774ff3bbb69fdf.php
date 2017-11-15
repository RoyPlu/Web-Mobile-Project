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
        $__internal_4017472eab5051bb0921596ad7c4c21a2e153ffba3d2bdf33993d634ef90f2eb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4017472eab5051bb0921596ad7c4c21a2e153ffba3d2bdf33993d634ef90f2eb->enter($__internal_4017472eab5051bb0921596ad7c4c21a2e153ffba3d2bdf33993d634ef90f2eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/add.problem.html.twig"));

        $__internal_478b40b9e24838b91dcefb125181a1484761478fabb50b0164f25be5f9f6a328 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_478b40b9e24838b91dcefb125181a1484761478fabb50b0164f25be5f9f6a328->enter($__internal_478b40b9e24838b91dcefb125181a1484761478fabb50b0164f25be5f9f6a328_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/add.problem.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4017472eab5051bb0921596ad7c4c21a2e153ffba3d2bdf33993d634ef90f2eb->leave($__internal_4017472eab5051bb0921596ad7c4c21a2e153ffba3d2bdf33993d634ef90f2eb_prof);

        
        $__internal_478b40b9e24838b91dcefb125181a1484761478fabb50b0164f25be5f9f6a328->leave($__internal_478b40b9e24838b91dcefb125181a1484761478fabb50b0164f25be5f9f6a328_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_4d9e74a8cae4c86a25feb5d8bf3474cccc84dd803c3c9de824931e76c0d241bb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4d9e74a8cae4c86a25feb5d8bf3474cccc84dd803c3c9de824931e76c0d241bb->enter($__internal_4d9e74a8cae4c86a25feb5d8bf3474cccc84dd803c3c9de824931e76c0d241bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_318f484877cf273d20a05b0da6166197c9da0bb9d4855787c792ecb419ba11af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_318f484877cf273d20a05b0da6166197c9da0bb9d4855787c792ecb419ba11af->enter($__internal_318f484877cf273d20a05b0da6166197c9da0bb9d4855787c792ecb419ba11af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "locations";
        
        $__internal_318f484877cf273d20a05b0da6166197c9da0bb9d4855787c792ecb419ba11af->leave($__internal_318f484877cf273d20a05b0da6166197c9da0bb9d4855787c792ecb419ba11af_prof);

        
        $__internal_4d9e74a8cae4c86a25feb5d8bf3474cccc84dd803c3c9de824931e76c0d241bb->leave($__internal_4d9e74a8cae4c86a25feb5d8bf3474cccc84dd803c3c9de824931e76c0d241bb_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_14a136f38a735237bdd33c4db38b432f6e7670e186169a92a9d55154d6fcf307 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_14a136f38a735237bdd33c4db38b432f6e7670e186169a92a9d55154d6fcf307->enter($__internal_14a136f38a735237bdd33c4db38b432f6e7670e186169a92a9d55154d6fcf307_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_9bcd3f09f5816814bfc21bc13cdf0888856257c48b0917759ea4eaa09b3223d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9bcd3f09f5816814bfc21bc13cdf0888856257c48b0917759ea4eaa09b3223d5->enter($__internal_9bcd3f09f5816814bfc21bc13cdf0888856257c48b0917759ea4eaa09b3223d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
 <form action=\"";
        // line 7
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_submit_problem");
        echo "\" method=\"post\">
        <input type=\"hidden\" name=\"Id\" value=\"1\" />

        <label for=\"id\">";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("id"), "html", null, true);
        echo "</label>
        <input type=\"text\" id=\"id\" name=\"_id\" value=\"\" />

        <label for=\"locationId\">";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("locationId"), "html", null, true);
        echo "</label>
        <input type=\"text\" id=\"locationId\" name=\"_locationId\" value=\"\" required=\"required\"/>

        <label for=\"problem\">";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("problem"), "html", null, true);
        echo "</label>
        <input type=\"text\" id=\"problem\" name=\"_problem\" value=\"\" />

        <label for=\"date\">";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("date"), "html", null, true);
        echo "</label>
        <input type=\"date\" id=\"date\" name=\"_date\" value=\"\" />

        <label for=\"finished\">";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("finished"), "html", null, true);
        echo "</label>
        <input type=\"checkbox\" id=\"finished\" name=\"_finished\" value=\"\" />

        <input type=\"submit\" id=\"_submit\" name=\"_submit\" value=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Update"), "html", null, true);
        echo "\" />

 </form>
";
        
        $__internal_9bcd3f09f5816814bfc21bc13cdf0888856257c48b0917759ea4eaa09b3223d5->leave($__internal_9bcd3f09f5816814bfc21bc13cdf0888856257c48b0917759ea4eaa09b3223d5_prof);

        
        $__internal_14a136f38a735237bdd33c4db38b432f6e7670e186169a92a9d55154d6fcf307->leave($__internal_14a136f38a735237bdd33c4db38b432f6e7670e186169a92a9d55154d6fcf307_prof);

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
        return array (  107 => 25,  101 => 22,  95 => 19,  89 => 16,  83 => 13,  77 => 10,  71 => 7,  68 => 6,  59 => 5,  41 => 4,  11 => 3,);
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

 <form action=\"{{ path('admin_submit_problem') }}\" method=\"post\">
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

 </form>
{% endblock %}", "default/add.problem.html.twig", "C:\\Users\\11500384\\Documents\\GitHub\\Web-Mobile-Project\\WP3\\app\\Resources\\views\\default\\add.problem.html.twig");
    }
}
