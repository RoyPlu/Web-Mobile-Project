<?php

/* default/locations.html.twig */
class __TwigTemplate_1a586efa5da765bc4b16d29fec6c6d8f59535c507578edf044894b2e2c6d45af extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "default/locations.html.twig", 1);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
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
        $__internal_099aa56b38f9914f5c9d7a6c3eff5b1ffedf8cdd48228d14ff65007ca785072d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_099aa56b38f9914f5c9d7a6c3eff5b1ffedf8cdd48228d14ff65007ca785072d->enter($__internal_099aa56b38f9914f5c9d7a6c3eff5b1ffedf8cdd48228d14ff65007ca785072d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/locations.html.twig"));

        $__internal_17f9d3a6397c367732da349cdf3c214d4727f465cf4be256badea8e7f976fd70 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_17f9d3a6397c367732da349cdf3c214d4727f465cf4be256badea8e7f976fd70->enter($__internal_17f9d3a6397c367732da349cdf3c214d4727f465cf4be256badea8e7f976fd70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/locations.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_099aa56b38f9914f5c9d7a6c3eff5b1ffedf8cdd48228d14ff65007ca785072d->leave($__internal_099aa56b38f9914f5c9d7a6c3eff5b1ffedf8cdd48228d14ff65007ca785072d_prof);

        
        $__internal_17f9d3a6397c367732da349cdf3c214d4727f465cf4be256badea8e7f976fd70->leave($__internal_17f9d3a6397c367732da349cdf3c214d4727f465cf4be256badea8e7f976fd70_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_7a89d1fa4b98e7626d286d0380e5471063ad4561618fefb91843dba2793803b9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7a89d1fa4b98e7626d286d0380e5471063ad4561618fefb91843dba2793803b9->enter($__internal_7a89d1fa4b98e7626d286d0380e5471063ad4561618fefb91843dba2793803b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_376fb57282bbb3739e858c75c79dd956b56da4d6ef34431ed14cf1fea100f9a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_376fb57282bbb3739e858c75c79dd956b56da4d6ef34431ed14cf1fea100f9a3->enter($__internal_376fb57282bbb3739e858c75c79dd956b56da4d6ef34431ed14cf1fea100f9a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 3
        echo "    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\" integrity=\"sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u\" crossorigin=\"anonymous\">
    <link rel=\"stylesheet\" href=\"../web/css/location.css\">
    <link rel=\"stylesheet\" href=\"../web/css/error.css\">
    <link href=\"https://fonts.googleapis.com/css?family=Montserrat\" rel=\"stylesheet\">
";
        
        $__internal_376fb57282bbb3739e858c75c79dd956b56da4d6ef34431ed14cf1fea100f9a3->leave($__internal_376fb57282bbb3739e858c75c79dd956b56da4d6ef34431ed14cf1fea100f9a3_prof);

        
        $__internal_7a89d1fa4b98e7626d286d0380e5471063ad4561618fefb91843dba2793803b9->leave($__internal_7a89d1fa4b98e7626d286d0380e5471063ad4561618fefb91843dba2793803b9_prof);

    }

    // line 8
    public function block_title($context, array $blocks = array())
    {
        $__internal_ed88c6d9a60719f34e92fd75c30dd9c56e551d19c7551fe2215656694e7eef6c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ed88c6d9a60719f34e92fd75c30dd9c56e551d19c7551fe2215656694e7eef6c->enter($__internal_ed88c6d9a60719f34e92fd75c30dd9c56e551d19c7551fe2215656694e7eef6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_b0a9313dd81a04899f71194625852edb6fd3a7905e318b55d5f6aa162a145c95 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b0a9313dd81a04899f71194625852edb6fd3a7905e318b55d5f6aa162a145c95->enter($__internal_b0a9313dd81a04899f71194625852edb6fd3a7905e318b55d5f6aa162a145c95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "locations";
        
        $__internal_b0a9313dd81a04899f71194625852edb6fd3a7905e318b55d5f6aa162a145c95->leave($__internal_b0a9313dd81a04899f71194625852edb6fd3a7905e318b55d5f6aa162a145c95_prof);

        
        $__internal_ed88c6d9a60719f34e92fd75c30dd9c56e551d19c7551fe2215656694e7eef6c->leave($__internal_ed88c6d9a60719f34e92fd75c30dd9c56e551d19c7551fe2215656694e7eef6c_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_07d1a6547bdaa593311c8ea56a143b107b8d5042e2e163113eba359b66023876 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_07d1a6547bdaa593311c8ea56a143b107b8d5042e2e163113eba359b66023876->enter($__internal_07d1a6547bdaa593311c8ea56a143b107b8d5042e2e163113eba359b66023876_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_1ae2d3dc015c9f25a9b68dfb9089d0f207528e7b3c4f15fafeec9c9f408f628e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ae2d3dc015c9f25a9b68dfb9089d0f207528e7b3c4f15fafeec9c9f408f628e->enter($__internal_1ae2d3dc015c9f25a9b68dfb9089d0f207528e7b3c4f15fafeec9c9f408f628e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "    <div class=\"container\">

    <div class=\"col-md-10 col-md-offset-1\">

        <div class=\"panel panel-default panel-table\">
            <div class=\"panel-heading\">
                <div class=\"row\">
                    <div class=\"col col-xs-6\">
                        <h1 class=\"panel-title\">Locations</h1>
                    </div>
                </div>
            </div>
            <div class=\"panel-body\">
                <table class=\"table table-striped table-bordered table-list\">
                    <thead>
                    <tr>
                        <!-- <th><em class=\"fa fa-cog\"></em></th> -->
                        <th class=\"hidden-xs\">ID</th>
                        <th>Location name</th>
                    </tr>
                    </thead>
                    <tbody>
                    ";
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["locations"] ?? $this->getContext($context, "locations")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["location"]) {
            if ( !twig_test_empty(($context["locations"] ?? $this->getContext($context, "locations")))) {
                // line 33
                echo "                    <tr>
                        <!-- <td class=\"hidden-xs\"></td> -->
                        <td>";
                // line 35
                echo twig_escape_filter($this->env, $this->getAttribute($context["location"], "id", array()), "html", null, true);
                echo "</td>
                        <td><a href=\"../location/";
                // line 36
                echo twig_escape_filter($this->env, $this->getAttribute($context["location"], "id", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["location"], "name", array()), "html", null, true);
                echo "</td></a>

                    </tr>
                    ";
                $context['_iterated'] = true;
            }
        }
        if (!$context['_iterated']) {
            // line 40
            echo "                        <li>No locations found</li>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['location'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "                    </tbody>
                </table>

            </div>
        </div>
    </div>

    </div>

";
        
        $__internal_1ae2d3dc015c9f25a9b68dfb9089d0f207528e7b3c4f15fafeec9c9f408f628e->leave($__internal_1ae2d3dc015c9f25a9b68dfb9089d0f207528e7b3c4f15fafeec9c9f408f628e_prof);

        
        $__internal_07d1a6547bdaa593311c8ea56a143b107b8d5042e2e163113eba359b66023876->leave($__internal_07d1a6547bdaa593311c8ea56a143b107b8d5042e2e163113eba359b66023876_prof);

    }

    public function getTemplateName()
    {
        return "default/locations.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  149 => 42,  142 => 40,  130 => 36,  126 => 35,  122 => 33,  116 => 32,  92 => 10,  83 => 9,  65 => 8,  51 => 3,  42 => 2,  11 => 1,);
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
{% block stylesheets %}
    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\" integrity=\"sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u\" crossorigin=\"anonymous\">
    <link rel=\"stylesheet\" href=\"../web/css/location.css\">
    <link rel=\"stylesheet\" href=\"../web/css/error.css\">
    <link href=\"https://fonts.googleapis.com/css?family=Montserrat\" rel=\"stylesheet\">
{% endblock %}
{% block title %}locations{% endblock %}
{% block body %}
    <div class=\"container\">

    <div class=\"col-md-10 col-md-offset-1\">

        <div class=\"panel panel-default panel-table\">
            <div class=\"panel-heading\">
                <div class=\"row\">
                    <div class=\"col col-xs-6\">
                        <h1 class=\"panel-title\">Locations</h1>
                    </div>
                </div>
            </div>
            <div class=\"panel-body\">
                <table class=\"table table-striped table-bordered table-list\">
                    <thead>
                    <tr>
                        <!-- <th><em class=\"fa fa-cog\"></em></th> -->
                        <th class=\"hidden-xs\">ID</th>
                        <th>Location name</th>
                    </tr>
                    </thead>
                    <tbody>
                    {%  for location in locations if locations is not empty %}
                    <tr>
                        <!-- <td class=\"hidden-xs\"></td> -->
                        <td>{{ location.id }}</td>
                        <td><a href=\"../location/{{ location.id }}\">{{ location.name }}</td></a>

                    </tr>
                    {% else %}
                        <li>No locations found</li>
                    {% endfor %}
                    </tbody>
                </table>

            </div>
        </div>
    </div>

    </div>

{% endblock %}", "default/locations.html.twig", "C:\\Users\\11500384\\Documents\\GitHub\\Web-Mobile-Project\\WP3\\app\\Resources\\views\\default\\locations.html.twig");
    }
}
