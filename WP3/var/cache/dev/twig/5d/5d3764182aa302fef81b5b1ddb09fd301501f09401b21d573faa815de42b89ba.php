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
        $__internal_c1080cd97f8652c156d56e124075ca2b7fd81800c69848fe145f479fcd0f8de7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c1080cd97f8652c156d56e124075ca2b7fd81800c69848fe145f479fcd0f8de7->enter($__internal_c1080cd97f8652c156d56e124075ca2b7fd81800c69848fe145f479fcd0f8de7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/locations.html.twig"));

        $__internal_aaec4ceb5a74e9bb5a1a6422c167b9468a73cc2081c31634c5ea9628ba55ff8a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aaec4ceb5a74e9bb5a1a6422c167b9468a73cc2081c31634c5ea9628ba55ff8a->enter($__internal_aaec4ceb5a74e9bb5a1a6422c167b9468a73cc2081c31634c5ea9628ba55ff8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/locations.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c1080cd97f8652c156d56e124075ca2b7fd81800c69848fe145f479fcd0f8de7->leave($__internal_c1080cd97f8652c156d56e124075ca2b7fd81800c69848fe145f479fcd0f8de7_prof);

        
        $__internal_aaec4ceb5a74e9bb5a1a6422c167b9468a73cc2081c31634c5ea9628ba55ff8a->leave($__internal_aaec4ceb5a74e9bb5a1a6422c167b9468a73cc2081c31634c5ea9628ba55ff8a_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_24e390cbcfa76759471ecb609d46d1187a53567e67afd83b603afc78dfbd25d6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_24e390cbcfa76759471ecb609d46d1187a53567e67afd83b603afc78dfbd25d6->enter($__internal_24e390cbcfa76759471ecb609d46d1187a53567e67afd83b603afc78dfbd25d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_1f58b648e1e557aacc801e595d330591568c85815768565a8ef2ff3c1d0fca7e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f58b648e1e557aacc801e595d330591568c85815768565a8ef2ff3c1d0fca7e->enter($__internal_1f58b648e1e557aacc801e595d330591568c85815768565a8ef2ff3c1d0fca7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 3
        echo "    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\" integrity=\"sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u\" crossorigin=\"anonymous\">
    <link rel=\"stylesheet\" href=\"../web/css/location.css\">
    <link rel=\"stylesheet\" href=\"../web/css/error.css\">
    <link href=\"https://fonts.googleapis.com/css?family=Montserrat\" rel=\"stylesheet\">
";
        
        $__internal_1f58b648e1e557aacc801e595d330591568c85815768565a8ef2ff3c1d0fca7e->leave($__internal_1f58b648e1e557aacc801e595d330591568c85815768565a8ef2ff3c1d0fca7e_prof);

        
        $__internal_24e390cbcfa76759471ecb609d46d1187a53567e67afd83b603afc78dfbd25d6->leave($__internal_24e390cbcfa76759471ecb609d46d1187a53567e67afd83b603afc78dfbd25d6_prof);

    }

    // line 8
    public function block_title($context, array $blocks = array())
    {
        $__internal_c55ac693e5da77c962c315b7fb294d29597e33eb9746ae31e297614f00dc30bc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c55ac693e5da77c962c315b7fb294d29597e33eb9746ae31e297614f00dc30bc->enter($__internal_c55ac693e5da77c962c315b7fb294d29597e33eb9746ae31e297614f00dc30bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_d0e25e4277737ec7c66ed8ea0d0c590b6d249805a36c71c193089d3dafb9e6f7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d0e25e4277737ec7c66ed8ea0d0c590b6d249805a36c71c193089d3dafb9e6f7->enter($__internal_d0e25e4277737ec7c66ed8ea0d0c590b6d249805a36c71c193089d3dafb9e6f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "locations";
        
        $__internal_d0e25e4277737ec7c66ed8ea0d0c590b6d249805a36c71c193089d3dafb9e6f7->leave($__internal_d0e25e4277737ec7c66ed8ea0d0c590b6d249805a36c71c193089d3dafb9e6f7_prof);

        
        $__internal_c55ac693e5da77c962c315b7fb294d29597e33eb9746ae31e297614f00dc30bc->leave($__internal_c55ac693e5da77c962c315b7fb294d29597e33eb9746ae31e297614f00dc30bc_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_0b6dc023d3cd161c93d47ec1f43b611f19f8c021a0898232ba1ad3ad30d91a23 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0b6dc023d3cd161c93d47ec1f43b611f19f8c021a0898232ba1ad3ad30d91a23->enter($__internal_0b6dc023d3cd161c93d47ec1f43b611f19f8c021a0898232ba1ad3ad30d91a23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_44a292e38aebc8f22ebb8f0df2ce6f48cdf9af63df3f3750cea988540a568aa4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_44a292e38aebc8f22ebb8f0df2ce6f48cdf9af63df3f3750cea988540a568aa4->enter($__internal_44a292e38aebc8f22ebb8f0df2ce6f48cdf9af63df3f3750cea988540a568aa4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_44a292e38aebc8f22ebb8f0df2ce6f48cdf9af63df3f3750cea988540a568aa4->leave($__internal_44a292e38aebc8f22ebb8f0df2ce6f48cdf9af63df3f3750cea988540a568aa4_prof);

        
        $__internal_0b6dc023d3cd161c93d47ec1f43b611f19f8c021a0898232ba1ad3ad30d91a23->leave($__internal_0b6dc023d3cd161c93d47ec1f43b611f19f8c021a0898232ba1ad3ad30d91a23_prof);

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
