<?php

/* default/add.problem.html.twig */
class __TwigTemplate_6b01f5918dda431c7f514243de09c4edc6db086277edb1c0829e7e7850fde427 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "default/add.problem.html.twig", 1);
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
        $__internal_041955e3b44072549ddbb328b973797d18170eb9717ccde1dfc002f495d956ce = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_041955e3b44072549ddbb328b973797d18170eb9717ccde1dfc002f495d956ce->enter($__internal_041955e3b44072549ddbb328b973797d18170eb9717ccde1dfc002f495d956ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/add.problem.html.twig"));

        $__internal_97b5ae78932c545a5887730e7c5b32fad44a05db22f966cd7a8e6a04953c98e3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_97b5ae78932c545a5887730e7c5b32fad44a05db22f966cd7a8e6a04953c98e3->enter($__internal_97b5ae78932c545a5887730e7c5b32fad44a05db22f966cd7a8e6a04953c98e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/add.problem.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_041955e3b44072549ddbb328b973797d18170eb9717ccde1dfc002f495d956ce->leave($__internal_041955e3b44072549ddbb328b973797d18170eb9717ccde1dfc002f495d956ce_prof);

        
        $__internal_97b5ae78932c545a5887730e7c5b32fad44a05db22f966cd7a8e6a04953c98e3->leave($__internal_97b5ae78932c545a5887730e7c5b32fad44a05db22f966cd7a8e6a04953c98e3_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_77935ebcca612570c1abffe4e03a719875c32b43dc4fc319070f60c05ac511a1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_77935ebcca612570c1abffe4e03a719875c32b43dc4fc319070f60c05ac511a1->enter($__internal_77935ebcca612570c1abffe4e03a719875c32b43dc4fc319070f60c05ac511a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_e9f1b2d7035c4f6cae135197342ee7b34f89dbfb2a5677703ae26bb77c6daee3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e9f1b2d7035c4f6cae135197342ee7b34f89dbfb2a5677703ae26bb77c6daee3->enter($__internal_e9f1b2d7035c4f6cae135197342ee7b34f89dbfb2a5677703ae26bb77c6daee3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "locations";
        
        $__internal_e9f1b2d7035c4f6cae135197342ee7b34f89dbfb2a5677703ae26bb77c6daee3->leave($__internal_e9f1b2d7035c4f6cae135197342ee7b34f89dbfb2a5677703ae26bb77c6daee3_prof);

        
        $__internal_77935ebcca612570c1abffe4e03a719875c32b43dc4fc319070f60c05ac511a1->leave($__internal_77935ebcca612570c1abffe4e03a719875c32b43dc4fc319070f60c05ac511a1_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_f13025e899fa9cd3360a773e8b8b606a223a018c47f255807bd5ebbac6c1b442 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f13025e899fa9cd3360a773e8b8b606a223a018c47f255807bd5ebbac6c1b442->enter($__internal_f13025e899fa9cd3360a773e8b8b606a223a018c47f255807bd5ebbac6c1b442_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_93f245af4e2232533a5808e5ef2b27decf72fca788a38fe1833026b040f04c52 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_93f245af4e2232533a5808e5ef2b27decf72fca788a38fe1833026b040f04c52->enter($__internal_93f245af4e2232533a5808e5ef2b27decf72fca788a38fe1833026b040f04c52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div style=\"border: 2px solid black; padding: 20px; float: left; horiz-align: center\">
    ";
        // line 5
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start', array("attr" => array("novalidate" => "novalidate")));
        echo "
    <div class=\"form-group\">
        ";
        // line 7
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "locationId", array()), 'label');
        echo "
        ";
        // line 8
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "locationId", array()), 'widget');
        echo "
        ";
        // line 9
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "locationId", array()), 'errors');
        echo "
    </div>
    <div class=\"form-group\">
        ";
        // line 12
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "date", array()), 'label');
        echo "
        ";
        // line 13
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "date", array()), 'widget');
        echo "
        ";
        // line 14
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "date", array()), 'errors');
        echo "
    </div>
    <div class=\"form-group\">
        ";
        // line 17
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "problem", array()), 'label');
        echo "
        ";
        // line 18
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "problem", array()), 'widget');
        echo "
        ";
        // line 19
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "problem", array()), 'errors');
        echo "
    </div>
    <div class=\"form-group\">
        ";
        // line 22
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "image", array()), 'label');
        echo "
        ";
        // line 23
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "image", array()), 'widget');
        echo "
        ";
        // line 24
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "image", array()), 'errors');
        echo "
    </div>
    <div class=\"form-group\">
        ";
        // line 27
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "finished", array()), 'label');
        echo "
        ";
        // line 28
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "finished", array()), 'widget');
        echo "
        ";
        // line 29
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "finished", array()), 'errors');
        echo "
    </div>
    ";
        // line 31
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
    </div>
";
        
        $__internal_93f245af4e2232533a5808e5ef2b27decf72fca788a38fe1833026b040f04c52->leave($__internal_93f245af4e2232533a5808e5ef2b27decf72fca788a38fe1833026b040f04c52_prof);

        
        $__internal_f13025e899fa9cd3360a773e8b8b606a223a018c47f255807bd5ebbac6c1b442->leave($__internal_f13025e899fa9cd3360a773e8b8b606a223a018c47f255807bd5ebbac6c1b442_prof);

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
        return array (  145 => 31,  140 => 29,  136 => 28,  132 => 27,  126 => 24,  122 => 23,  118 => 22,  112 => 19,  108 => 18,  104 => 17,  98 => 14,  94 => 13,  90 => 12,  84 => 9,  80 => 8,  76 => 7,  71 => 5,  68 => 4,  59 => 3,  41 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"::base.html.twig\" %}
{% block title %}locations{% endblock %}
{% block body %}
    <div style=\"border: 2px solid black; padding: 20px; float: left; horiz-align: center\">
    {{ form_start(form, {attr: {novalidate: 'novalidate'}}) }}
    <div class=\"form-group\">
        {{ form_label(form.locationId) }}
        {{ form_widget(form.locationId) }}
        {{ form_errors(form.locationId) }}
    </div>
    <div class=\"form-group\">
        {{ form_label(form.date) }}
        {{ form_widget(form.date) }}
        {{ form_errors(form.date) }}
    </div>
    <div class=\"form-group\">
        {{ form_label(form.problem) }}
        {{ form_widget(form.problem) }}
        {{ form_errors(form.problem) }}
    </div>
    <div class=\"form-group\">
        {{ form_label(form.image) }}
        {{ form_widget(form.image) }}
        {{ form_errors(form.image) }}
    </div>
    <div class=\"form-group\">
        {{ form_label(form.finished) }}
        {{ form_widget(form.finished) }}
        {{ form_errors(form.finished) }}
    </div>
    {{ form_end(form) }}
    </div>
{% endblock %}", "default/add.problem.html.twig", "C:\\Users\\11500384\\Documents\\GitHub\\Web-Mobile-Project\\WP3\\app\\Resources\\views\\default\\add.problem.html.twig");
    }
}
