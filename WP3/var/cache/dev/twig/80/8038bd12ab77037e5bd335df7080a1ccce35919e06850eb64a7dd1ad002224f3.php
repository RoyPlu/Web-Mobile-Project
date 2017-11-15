<?php

/* default/location.html.twig */
class __TwigTemplate_e83af50c1211b43a9e56dbed9b6662ee343a57c832edb83805707111b0694dfa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "default/location.html.twig", 1);
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
        $__internal_4f011f60e29012d07ea28a78a1d28c4c95c7e6457b93873efb50d230df76dbcd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4f011f60e29012d07ea28a78a1d28c4c95c7e6457b93873efb50d230df76dbcd->enter($__internal_4f011f60e29012d07ea28a78a1d28c4c95c7e6457b93873efb50d230df76dbcd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/location.html.twig"));

        $__internal_e0f24b436e6fb91f9f6abfe0a73784de2b616f36846d7bd53b8b2a14acd61269 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e0f24b436e6fb91f9f6abfe0a73784de2b616f36846d7bd53b8b2a14acd61269->enter($__internal_e0f24b436e6fb91f9f6abfe0a73784de2b616f36846d7bd53b8b2a14acd61269_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/location.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4f011f60e29012d07ea28a78a1d28c4c95c7e6457b93873efb50d230df76dbcd->leave($__internal_4f011f60e29012d07ea28a78a1d28c4c95c7e6457b93873efb50d230df76dbcd_prof);

        
        $__internal_e0f24b436e6fb91f9f6abfe0a73784de2b616f36846d7bd53b8b2a14acd61269->leave($__internal_e0f24b436e6fb91f9f6abfe0a73784de2b616f36846d7bd53b8b2a14acd61269_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_e75bf97c6d312dbfaf83c98136438ff2a07929db90f841f884aa65f24ecfc161 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e75bf97c6d312dbfaf83c98136438ff2a07929db90f841f884aa65f24ecfc161->enter($__internal_e75bf97c6d312dbfaf83c98136438ff2a07929db90f841f884aa65f24ecfc161_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_39d8bdf0dc21b707f7fb6bce87cf22b1439261f1e9e90a181bcafdbc41e219cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_39d8bdf0dc21b707f7fb6bce87cf22b1439261f1e9e90a181bcafdbc41e219cd->enter($__internal_39d8bdf0dc21b707f7fb6bce87cf22b1439261f1e9e90a181bcafdbc41e219cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "locations";
        
        $__internal_39d8bdf0dc21b707f7fb6bce87cf22b1439261f1e9e90a181bcafdbc41e219cd->leave($__internal_39d8bdf0dc21b707f7fb6bce87cf22b1439261f1e9e90a181bcafdbc41e219cd_prof);

        
        $__internal_e75bf97c6d312dbfaf83c98136438ff2a07929db90f841f884aa65f24ecfc161->leave($__internal_e75bf97c6d312dbfaf83c98136438ff2a07929db90f841f884aa65f24ecfc161_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_e4c913fbb42dc5893f9150cf6136e40be8154cdc716288f4f2234110bfcb1e27 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e4c913fbb42dc5893f9150cf6136e40be8154cdc716288f4f2234110bfcb1e27->enter($__internal_e4c913fbb42dc5893f9150cf6136e40be8154cdc716288f4f2234110bfcb1e27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_4439f763f3a68900b03088fdcad84b94eda6b917e6e8c546c848ab4b9cd36d18 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4439f763f3a68900b03088fdcad84b94eda6b917e6e8c546c848ab4b9cd36d18->enter($__internal_4439f763f3a68900b03088fdcad84b94eda6b917e6e8c546c848ab4b9cd36d18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <head>
        <link rel=\"stylesheet\" href=\"../web/css/sizing.css\">
    </head>
    <div class=\"container\" style=\"background-color: #edf0ee\">

    <h1>Problemen</h1>
        <hr style=\"width: 97%; color: gray; height: 2px; background-color: gray\" />
        ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["problemMessages"] ?? $this->getContext($context, "problemMessages")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["problemMessage"]) {
            if ( !twig_test_empty(($context["problemMessages"] ?? $this->getContext($context, "problemMessages")))) {
                // line 12
                echo "                <div class=\"alert alert-danger\" role=\"alert\">
                    <p>ProblemId: ";
                // line 13
                echo twig_escape_filter($this->env, $this->getAttribute($context["problemMessage"], "id", array()), "html", null, true);
                echo "</p>
                    <p>Problem: ";
                // line 14
                echo twig_escape_filter($this->env, $this->getAttribute($context["problemMessage"], "problem", array()), "html", null, true);
                echo "</p>
                    <p>Finished: ";
                // line 15
                echo twig_escape_filter($this->env, $this->getAttribute($context["problemMessage"], "finished", array()), "html", null, true);
                echo "</p>
                    <img style=\"width:300px;\" src=\"http://drpattydental.com/wp-content/uploads/2017/05/placeholder.png\">

                    ";
                // line 18
                if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_MGR")) {
                    // line 19
                    echo "                <button>Assign technician</button>
            ";
                }
                // line 21
                echo "                </div>
        ";
                $context['_iterated'] = true;
            }
        }
        if (!$context['_iterated']) {
            // line 23
            echo "            <li>No problems found</li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['problemMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "        <a href=\"../location/1/addproblem\"><button>Add problem</button></a>
        </br>
    <h1>Status</h1>
        <hr style=\"width: 97%; color: gray; height: 2px; background-color: gray\" />
        <div class=\"smaller\">
        ";
        // line 30
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["statusMessages"] ?? $this->getContext($context, "statusMessages")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["statusMessage"]) {
            if ( !twig_test_empty(($context["statusMessages"] ?? $this->getContext($context, "statusMessages")))) {
                // line 31
                echo "            <div class=\"alert alert-info\" role=\"alert\">
                <h2>";
                // line 32
                echo twig_escape_filter($this->env, $this->getAttribute($context["statusMessage"], "status", array()), "html", null, true);
                echo "</h2>
            </div>
        ";
                $context['_iterated'] = true;
            }
        }
        if (!$context['_iterated']) {
            // line 35
            echo "            <p>No status found</p>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['statusMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "        </div>
    </div>
    </br>
    ";
        // line 40
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_TECH")) {
            // line 41
            echo "        <div class=\"container\" style=\"background-color: #edf0ee\">
        <h1>Problemen toegekend aan technicus</h1>
        <hr />
            <ul>

                ";
            // line 46
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["problemMessages"] ?? $this->getContext($context, "problemMessages")));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["problemMessage"]) {
                if ( !twig_test_empty(($context["problemMessages"] ?? $this->getContext($context, "problemMessages")))) {
                    // line 47
                    echo "                    ";
                    if (($this->getAttribute($context["problemMessage"], "techId", array()) == $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "id", array()))) {
                        // line 48
                        echo "                        ";
                        if (($this->getAttribute($context["problemMessage"], "finished", array()) == 0)) {
                            // line 49
                            echo "                    <li>
                        <div class=\"alert alert-danger\" role=\"alert\">
                            <p>";
                            // line 51
                            echo twig_escape_filter($this->env, $this->getAttribute($context["problemMessage"], "problem", array()), "html", null, true);
                            echo "</p>
                        </div>

                    </li>
                    ";
                        }
                        // line 56
                        echo "                        ";
                    }
                    // line 57
                    echo "                ";
                    $context['_iterated'] = true;
                }
            }
            if (!$context['_iterated']) {
                // line 58
                echo "                    <li>No problems found</li>

                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['problemMessage'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 61
            echo "            </ul>
    </div>
        ";
        }
        // line 64
        echo "
";
        
        $__internal_4439f763f3a68900b03088fdcad84b94eda6b917e6e8c546c848ab4b9cd36d18->leave($__internal_4439f763f3a68900b03088fdcad84b94eda6b917e6e8c546c848ab4b9cd36d18_prof);

        
        $__internal_e4c913fbb42dc5893f9150cf6136e40be8154cdc716288f4f2234110bfcb1e27->leave($__internal_e4c913fbb42dc5893f9150cf6136e40be8154cdc716288f4f2234110bfcb1e27_prof);

    }

    public function getTemplateName()
    {
        return "default/location.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  212 => 64,  207 => 61,  199 => 58,  193 => 57,  190 => 56,  182 => 51,  178 => 49,  175 => 48,  172 => 47,  166 => 46,  159 => 41,  157 => 40,  152 => 37,  145 => 35,  136 => 32,  133 => 31,  127 => 30,  120 => 25,  113 => 23,  106 => 21,  102 => 19,  100 => 18,  94 => 15,  90 => 14,  86 => 13,  83 => 12,  77 => 11,  68 => 4,  59 => 3,  41 => 2,  11 => 1,);
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
    <head>
        <link rel=\"stylesheet\" href=\"../web/css/sizing.css\">
    </head>
    <div class=\"container\" style=\"background-color: #edf0ee\">

    <h1>Problemen</h1>
        <hr style=\"width: 97%; color: gray; height: 2px; background-color: gray\" />
        {%  for problemMessage in problemMessages if problemMessages is not empty %}
                <div class=\"alert alert-danger\" role=\"alert\">
                    <p>ProblemId: {{ problemMessage.id }}</p>
                    <p>Problem: {{ problemMessage.problem}}</p>
                    <p>Finished: {{ problemMessage.finished}}</p>
                    <img style=\"width:300px;\" src=\"http://drpattydental.com/wp-content/uploads/2017/05/placeholder.png\">

                    {% if is_granted('ROLE_MGR') %}
                <button>Assign technician</button>
            {%  endif %}
                </div>
        {%  else %}
            <li>No problems found</li>
        {% endfor %}
        <a href=\"../location/1/addproblem\"><button>Add problem</button></a>
        </br>
    <h1>Status</h1>
        <hr style=\"width: 97%; color: gray; height: 2px; background-color: gray\" />
        <div class=\"smaller\">
        {%  for statusMessage in statusMessages if statusMessages is not empty %}
            <div class=\"alert alert-info\" role=\"alert\">
                <h2>{{ statusMessage.status}}</h2>
            </div>
        {%  else %}
            <p>No status found</p>
        {% endfor %}
        </div>
    </div>
    </br>
    {% if is_granted('ROLE_TECH') %}
        <div class=\"container\" style=\"background-color: #edf0ee\">
        <h1>Problemen toegekend aan technicus</h1>
        <hr />
            <ul>

                {%  for problemMessage in problemMessages if problemMessages is not empty %}
                    {%  if problemMessage.techId == app.user.id  %}
                        {%  if problemMessage.finished == 0 %}
                    <li>
                        <div class=\"alert alert-danger\" role=\"alert\">
                            <p>{{ problemMessage.problem}}</p>
                        </div>

                    </li>
                    {%  endif %}
                        {% endif %}
                {%  else %}
                    <li>No problems found</li>

                {% endfor %}
            </ul>
    </div>
        {% endif %}

{% endblock %}", "default/location.html.twig", "C:\\Users\\11500384\\Documents\\GitHub\\Web-Mobile-Project\\WP3\\app\\Resources\\views\\default\\location.html.twig");
    }
}
