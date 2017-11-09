<?php

/* default/admin.html.twig */
class __TwigTemplate_b4f1ce13fa595a365470fe63938adac71bdb5e213229cf5e96340ff54f073a42 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("::base.html.twig", "default/admin.html.twig", 3);
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
        $__internal_8f2fab14d661d2e1a31f90b135137d97380f3994932d4872868f439a477dc018 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8f2fab14d661d2e1a31f90b135137d97380f3994932d4872868f439a477dc018->enter($__internal_8f2fab14d661d2e1a31f90b135137d97380f3994932d4872868f439a477dc018_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/admin.html.twig"));

        $__internal_d87cf6df293798451b964f46762c3a78dee7b3cb9576c2f96a1bb1bc1b861dfd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d87cf6df293798451b964f46762c3a78dee7b3cb9576c2f96a1bb1bc1b861dfd->enter($__internal_d87cf6df293798451b964f46762c3a78dee7b3cb9576c2f96a1bb1bc1b861dfd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/admin.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8f2fab14d661d2e1a31f90b135137d97380f3994932d4872868f439a477dc018->leave($__internal_8f2fab14d661d2e1a31f90b135137d97380f3994932d4872868f439a477dc018_prof);

        
        $__internal_d87cf6df293798451b964f46762c3a78dee7b3cb9576c2f96a1bb1bc1b861dfd->leave($__internal_d87cf6df293798451b964f46762c3a78dee7b3cb9576c2f96a1bb1bc1b861dfd_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_b8c440c57abf937216f11b3099b8928b54266eced6fea0e3b06a75722d7faf45 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b8c440c57abf937216f11b3099b8928b54266eced6fea0e3b06a75722d7faf45->enter($__internal_b8c440c57abf937216f11b3099b8928b54266eced6fea0e3b06a75722d7faf45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_4e8d575eb878c1d21714fc43f11f69769048a27b32287d110060b9bebd657641 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e8d575eb878c1d21714fc43f11f69769048a27b32287d110060b9bebd657641->enter($__internal_4e8d575eb878c1d21714fc43f11f69769048a27b32287d110060b9bebd657641_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "locations";
        
        $__internal_4e8d575eb878c1d21714fc43f11f69769048a27b32287d110060b9bebd657641->leave($__internal_4e8d575eb878c1d21714fc43f11f69769048a27b32287d110060b9bebd657641_prof);

        
        $__internal_b8c440c57abf937216f11b3099b8928b54266eced6fea0e3b06a75722d7faf45->leave($__internal_b8c440c57abf937216f11b3099b8928b54266eced6fea0e3b06a75722d7faf45_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_405d7a4f67f345f9a53f91606e6c6f1b8549e406638da5284e316b243cab6f61 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_405d7a4f67f345f9a53f91606e6c6f1b8549e406638da5284e316b243cab6f61->enter($__internal_405d7a4f67f345f9a53f91606e6c6f1b8549e406638da5284e316b243cab6f61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_fe9ed53487c6334d29fca7dc2333fe54b02318559ca2373cd17e0990d7779054 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fe9ed53487c6334d29fca7dc2333fe54b02318559ca2373cd17e0990d7779054->enter($__internal_fe9ed53487c6334d29fca7dc2333fe54b02318559ca2373cd17e0990d7779054_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <head>
        <link rel=\"stylesheet\" href=\"../web/css/sizing.css\">
    </head>
    <div class=\"container\" style=\"background-color: #edf0ee; max-width: 500px\">

        <h1>Technicians</h1>
        <hr style=\"width: 97%; color: gray; height: 2px; background-color: gray\" />
        ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["technicians_list"] ?? $this->getContext($context, "technicians_list")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["tech"]) {
            if ( !twig_test_empty(($context["technicians_list"] ?? $this->getContext($context, "technicians_list")))) {
                // line 14
                echo "            <div class=\"alert alert-success\" role=\"alert\">
                <p><label>";
                // line 15
                echo twig_escape_filter($this->env, $context["tech"], "html", null, true);
                echo "</label>
                    <label style=\"text-align: right\"><a href=\"admin/edit/";
                // line 16
                echo twig_escape_filter($this->env, $this->getAttribute($context["tech"], "id", array()), "html", null, true);
                echo "\">Edit</a></label>
                    <label style=\"text-align: right\"><a href=\"admin/remove?techId=";
                // line 17
                echo twig_escape_filter($this->env, $this->getAttribute($context["tech"], "id", array()), "html", null, true);
                echo "\">Delete</a></label></p>
            </div>
        ";
                $context['_iterated'] = true;
            }
        }
        if (!$context['_iterated']) {
            // line 20
            echo "            <li>No technicians found</li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tech'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "    </div>
    </br>

";
        
        $__internal_fe9ed53487c6334d29fca7dc2333fe54b02318559ca2373cd17e0990d7779054->leave($__internal_fe9ed53487c6334d29fca7dc2333fe54b02318559ca2373cd17e0990d7779054_prof);

        
        $__internal_405d7a4f67f345f9a53f91606e6c6f1b8549e406638da5284e316b243cab6f61->leave($__internal_405d7a4f67f345f9a53f91606e6c6f1b8549e406638da5284e316b243cab6f61_prof);

    }

    public function getTemplateName()
    {
        return "default/admin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 22,  103 => 20,  94 => 17,  90 => 16,  86 => 15,  83 => 14,  77 => 13,  68 => 6,  59 => 5,  41 => 4,  11 => 3,);
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
    <head>
        <link rel=\"stylesheet\" href=\"../web/css/sizing.css\">
    </head>
    <div class=\"container\" style=\"background-color: #edf0ee; max-width: 500px\">

        <h1>Technicians</h1>
        <hr style=\"width: 97%; color: gray; height: 2px; background-color: gray\" />
        {%  for tech in technicians_list if technicians_list is not empty %}
            <div class=\"alert alert-success\" role=\"alert\">
                <p><label>{{ tech }}</label>
                    <label style=\"text-align: right\"><a href=\"admin/edit/{{tech.id}}\">Edit</a></label>
                    <label style=\"text-align: right\"><a href=\"admin/remove?techId={{ tech.id }}\">Delete</a></label></p>
            </div>
        {%  else %}
            <li>No technicians found</li>
        {% endfor %}
    </div>
    </br>

{% endblock %}", "default/admin.html.twig", "C:\\Users\\11500384\\Documents\\GitHub\\Web-Mobile-Project\\WP3\\app\\Resources\\views\\default\\admin.html.twig");
    }
}
