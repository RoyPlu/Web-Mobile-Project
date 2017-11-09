<?php

/* :default:locations.html.twig */
class __TwigTemplate_e554bc3d98cc922d1768e09d66858b8fa59cf67b723816e45e5688e2c0d01427 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", ":default:locations.html.twig", 1);
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
        $__internal_d3a8cd5db74cb6e536aef26d6a35a731d981c4e45558b2e96a9beed98e64cd67 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d3a8cd5db74cb6e536aef26d6a35a731d981c4e45558b2e96a9beed98e64cd67->enter($__internal_d3a8cd5db74cb6e536aef26d6a35a731d981c4e45558b2e96a9beed98e64cd67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:locations.html.twig"));

        $__internal_010d06e2f9fd86301470735918303dfc5ddc901ef3272c4f7ae4d5a33b7b7855 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_010d06e2f9fd86301470735918303dfc5ddc901ef3272c4f7ae4d5a33b7b7855->enter($__internal_010d06e2f9fd86301470735918303dfc5ddc901ef3272c4f7ae4d5a33b7b7855_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:locations.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d3a8cd5db74cb6e536aef26d6a35a731d981c4e45558b2e96a9beed98e64cd67->leave($__internal_d3a8cd5db74cb6e536aef26d6a35a731d981c4e45558b2e96a9beed98e64cd67_prof);

        
        $__internal_010d06e2f9fd86301470735918303dfc5ddc901ef3272c4f7ae4d5a33b7b7855->leave($__internal_010d06e2f9fd86301470735918303dfc5ddc901ef3272c4f7ae4d5a33b7b7855_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_5e3d44564e4cf899e772bbb5657df94eb2e253b56ba264f1447dadeb9c6d076e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5e3d44564e4cf899e772bbb5657df94eb2e253b56ba264f1447dadeb9c6d076e->enter($__internal_5e3d44564e4cf899e772bbb5657df94eb2e253b56ba264f1447dadeb9c6d076e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_1ba20cae923728ee40aebe5fbc3cb343c8db138cabca5cec30ea173771b567df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ba20cae923728ee40aebe5fbc3cb343c8db138cabca5cec30ea173771b567df->enter($__internal_1ba20cae923728ee40aebe5fbc3cb343c8db138cabca5cec30ea173771b567df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 3
        echo "    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\" integrity=\"sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u\" crossorigin=\"anonymous\">
    <link rel=\"stylesheet\" href=\"../web/css/location.css\">
    <link rel=\"stylesheet\" href=\"../web/css/error.css\">
    <link href=\"https://fonts.googleapis.com/css?family=Montserrat\" rel=\"stylesheet\">
";
        
        $__internal_1ba20cae923728ee40aebe5fbc3cb343c8db138cabca5cec30ea173771b567df->leave($__internal_1ba20cae923728ee40aebe5fbc3cb343c8db138cabca5cec30ea173771b567df_prof);

        
        $__internal_5e3d44564e4cf899e772bbb5657df94eb2e253b56ba264f1447dadeb9c6d076e->leave($__internal_5e3d44564e4cf899e772bbb5657df94eb2e253b56ba264f1447dadeb9c6d076e_prof);

    }

    // line 8
    public function block_title($context, array $blocks = array())
    {
        $__internal_1780f517b5c501ff677ed55cc9292b9b138ddfbdcaaa11145cc5df4b1a1e3004 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1780f517b5c501ff677ed55cc9292b9b138ddfbdcaaa11145cc5df4b1a1e3004->enter($__internal_1780f517b5c501ff677ed55cc9292b9b138ddfbdcaaa11145cc5df4b1a1e3004_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_67d51b9c863a16291555a737dc3d4e92af3cac83f9fff984165490b82ec150bf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_67d51b9c863a16291555a737dc3d4e92af3cac83f9fff984165490b82ec150bf->enter($__internal_67d51b9c863a16291555a737dc3d4e92af3cac83f9fff984165490b82ec150bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "locations";
        
        $__internal_67d51b9c863a16291555a737dc3d4e92af3cac83f9fff984165490b82ec150bf->leave($__internal_67d51b9c863a16291555a737dc3d4e92af3cac83f9fff984165490b82ec150bf_prof);

        
        $__internal_1780f517b5c501ff677ed55cc9292b9b138ddfbdcaaa11145cc5df4b1a1e3004->leave($__internal_1780f517b5c501ff677ed55cc9292b9b138ddfbdcaaa11145cc5df4b1a1e3004_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_b7f6a622303075a66b10b5abf9f90ce6d8d9ec7332abae2f950884b8eb473122 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b7f6a622303075a66b10b5abf9f90ce6d8d9ec7332abae2f950884b8eb473122->enter($__internal_b7f6a622303075a66b10b5abf9f90ce6d8d9ec7332abae2f950884b8eb473122_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ea902e83e49866e50fd386cba2806fef379e4bd8294e99d1fae2093e93c522c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ea902e83e49866e50fd386cba2806fef379e4bd8294e99d1fae2093e93c522c9->enter($__internal_ea902e83e49866e50fd386cba2806fef379e4bd8294e99d1fae2093e93c522c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_ea902e83e49866e50fd386cba2806fef379e4bd8294e99d1fae2093e93c522c9->leave($__internal_ea902e83e49866e50fd386cba2806fef379e4bd8294e99d1fae2093e93c522c9_prof);

        
        $__internal_b7f6a622303075a66b10b5abf9f90ce6d8d9ec7332abae2f950884b8eb473122->leave($__internal_b7f6a622303075a66b10b5abf9f90ce6d8d9ec7332abae2f950884b8eb473122_prof);

    }

    public function getTemplateName()
    {
        return ":default:locations.html.twig";
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

{% endblock %}", ":default:locations.html.twig", "C:\\Users\\11500384\\Documents\\GitHub\\Web-Mobile-Project\\WP3\\app/Resources\\views/default/locations.html.twig");
    }
}
