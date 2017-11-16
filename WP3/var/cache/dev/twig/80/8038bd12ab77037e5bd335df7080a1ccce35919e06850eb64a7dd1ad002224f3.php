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
        $__internal_91208d33e88481050cf3215c6d38c115d570ed43ed848e65647fe9cda237a0ec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_91208d33e88481050cf3215c6d38c115d570ed43ed848e65647fe9cda237a0ec->enter($__internal_91208d33e88481050cf3215c6d38c115d570ed43ed848e65647fe9cda237a0ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/location.html.twig"));

        $__internal_bc01adb4be7a93143114641398d090995cf2e1419f2c93eccc61a7c98b9662d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bc01adb4be7a93143114641398d090995cf2e1419f2c93eccc61a7c98b9662d2->enter($__internal_bc01adb4be7a93143114641398d090995cf2e1419f2c93eccc61a7c98b9662d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/location.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_91208d33e88481050cf3215c6d38c115d570ed43ed848e65647fe9cda237a0ec->leave($__internal_91208d33e88481050cf3215c6d38c115d570ed43ed848e65647fe9cda237a0ec_prof);

        
        $__internal_bc01adb4be7a93143114641398d090995cf2e1419f2c93eccc61a7c98b9662d2->leave($__internal_bc01adb4be7a93143114641398d090995cf2e1419f2c93eccc61a7c98b9662d2_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_f6479eb7522d3f5d9b78965c5493b825a6021299f535b9805345983851b5791b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f6479eb7522d3f5d9b78965c5493b825a6021299f535b9805345983851b5791b->enter($__internal_f6479eb7522d3f5d9b78965c5493b825a6021299f535b9805345983851b5791b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_24f45029a0d4f787612d3b34bdbfea1be0cf11d703d538eadd9432a68022c7f6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_24f45029a0d4f787612d3b34bdbfea1be0cf11d703d538eadd9432a68022c7f6->enter($__internal_24f45029a0d4f787612d3b34bdbfea1be0cf11d703d538eadd9432a68022c7f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "locations";
        
        $__internal_24f45029a0d4f787612d3b34bdbfea1be0cf11d703d538eadd9432a68022c7f6->leave($__internal_24f45029a0d4f787612d3b34bdbfea1be0cf11d703d538eadd9432a68022c7f6_prof);

        
        $__internal_f6479eb7522d3f5d9b78965c5493b825a6021299f535b9805345983851b5791b->leave($__internal_f6479eb7522d3f5d9b78965c5493b825a6021299f535b9805345983851b5791b_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_0cac714751f6ea46f4bc5b4d139ce050448625c8b7d0d2896d544aa292ffa283 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0cac714751f6ea46f4bc5b4d139ce050448625c8b7d0d2896d544aa292ffa283->enter($__internal_0cac714751f6ea46f4bc5b4d139ce050448625c8b7d0d2896d544aa292ffa283_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_fdea0b4149284783c92eb8392257036335bd31be61a0fb13196fc2f5d52595c1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fdea0b4149284783c92eb8392257036335bd31be61a0fb13196fc2f5d52595c1->enter($__internal_fdea0b4149284783c92eb8392257036335bd31be61a0fb13196fc2f5d52595c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
                echo "                <div class=\"alert alert-danger\" style=\"float:inherit;\" role=\"alert\">
                    <p>Problem Id: ";
                // line 13
                echo twig_escape_filter($this->env, $this->getAttribute($context["problemMessage"], "id", array()), "html", null, true);
                echo "</p>
                    <p>Date: ";
                // line 14
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["problemMessage"], "date", array()), "Y-m-d"), "html", null, true);
                echo "</p>
                    <p>Problem: ";
                // line 15
                echo twig_escape_filter($this->env, $this->getAttribute($context["problemMessage"], "problem", array()), "html", null, true);
                echo "</p>
                    <p>
                        Finished:
                        ";
                // line 18
                if (($this->getAttribute($context["problemMessage"], "finished", array()) == 0)) {
                    // line 19
                    echo "                        False
                        ";
                } else {
                    // line 21
                    echo "                            True
                        ";
                }
                // line 23
                echo "
                    </p>
                    <hr>
                    <img style=\"width: 300px;\" src=\"";
                // line 26
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("uploads/problems/" . $this->getAttribute($context["problemMessage"], "image", array()))), "html", null, true);
                echo "\">
                    ";
                // line 27
                if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_MGR")) {
                    // line 28
                    echo "                <button>Assign technician</button>
            ";
                }
                // line 30
                echo "                </div>
        ";
                $context['_iterated'] = true;
            }
        }
        if (!$context['_iterated']) {
            // line 32
            echo "            <li>No problems found</li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['problemMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "    ";
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 35
            echo "        <a href=\"../locations/addproblem\"><button>Add problem</button></a>
        ";
        }
        // line 37
        echo "        </br>
    <h1>Status</h1>
        <hr style=\"width: 97%; color: gray; height: 2px; background-color: gray\" />
        <div class=\"smaller\">
        ";
        // line 41
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["statusMessages"] ?? $this->getContext($context, "statusMessages")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["statusMessage"]) {
            if ( !twig_test_empty(($context["statusMessages"] ?? $this->getContext($context, "statusMessages")))) {
                // line 42
                echo "            <div class=\"alert alert-info\" role=\"alert\">
                <h2>";
                // line 43
                echo twig_escape_filter($this->env, $this->getAttribute($context["statusMessage"], "status", array()), "html", null, true);
                echo "</h2>
            </div>
        ";
                $context['_iterated'] = true;
            }
        }
        if (!$context['_iterated']) {
            // line 46
            echo "            <p>No status found</p>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['statusMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        echo "        </div>
    </div>
    </br>
    ";
        // line 51
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_TECH")) {
            // line 52
            echo "        <div class=\"container\" style=\"background-color: #edf0ee\">
        <h1>Problemen toegekend aan technicus</h1>
        <hr />
            <ul>

                ";
            // line 57
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["problemMessages"] ?? $this->getContext($context, "problemMessages")));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["problemMessage"]) {
                if ( !twig_test_empty(($context["problemMessages"] ?? $this->getContext($context, "problemMessages")))) {
                    // line 58
                    echo "                    ";
                    if (($this->getAttribute($context["problemMessage"], "techId", array()) == $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "id", array()))) {
                        // line 59
                        echo "                        ";
                        if (($this->getAttribute($context["problemMessage"], "finished", array()) == 0)) {
                            // line 60
                            echo "                    <li>
                        <div class=\"alert alert-danger\" role=\"alert\">
                            <p>";
                            // line 62
                            echo twig_escape_filter($this->env, $this->getAttribute($context["problemMessage"], "problem", array()), "html", null, true);
                            echo "</p>
                        </div>

                    </li>
                    ";
                        }
                        // line 67
                        echo "                        ";
                    }
                    // line 68
                    echo "                ";
                    $context['_iterated'] = true;
                }
            }
            if (!$context['_iterated']) {
                // line 69
                echo "                    <li>No problems found</li>

                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['problemMessage'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 72
            echo "            </ul>
    </div>
        ";
        }
        // line 75
        echo "
";
        
        $__internal_fdea0b4149284783c92eb8392257036335bd31be61a0fb13196fc2f5d52595c1->leave($__internal_fdea0b4149284783c92eb8392257036335bd31be61a0fb13196fc2f5d52595c1_prof);

        
        $__internal_0cac714751f6ea46f4bc5b4d139ce050448625c8b7d0d2896d544aa292ffa283->leave($__internal_0cac714751f6ea46f4bc5b4d139ce050448625c8b7d0d2896d544aa292ffa283_prof);

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
        return array (  237 => 75,  232 => 72,  224 => 69,  218 => 68,  215 => 67,  207 => 62,  203 => 60,  200 => 59,  197 => 58,  191 => 57,  184 => 52,  182 => 51,  177 => 48,  170 => 46,  161 => 43,  158 => 42,  152 => 41,  146 => 37,  142 => 35,  139 => 34,  132 => 32,  125 => 30,  121 => 28,  119 => 27,  115 => 26,  110 => 23,  106 => 21,  102 => 19,  100 => 18,  94 => 15,  90 => 14,  86 => 13,  83 => 12,  77 => 11,  68 => 4,  59 => 3,  41 => 2,  11 => 1,);
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
                <div class=\"alert alert-danger\" style=\"float:inherit;\" role=\"alert\">
                    <p>Problem Id: {{ problemMessage.id }}</p>
                    <p>Date: {{ problemMessage.date|date('Y-m-d') }}</p>
                    <p>Problem: {{ problemMessage.problem}}</p>
                    <p>
                        Finished:
                        {%  if problemMessage.finished == 0 %}
                        False
                        {% else %}
                            True
                        {% endif %}

                    </p>
                    <hr>
                    <img style=\"width: 300px;\" src=\"{{ asset('uploads/problems/' ~ problemMessage.image) }}\">
                    {% if is_granted('ROLE_MGR') %}
                <button>Assign technician</button>
            {%  endif %}
                </div>
        {%  else %}
            <li>No problems found</li>
        {% endfor %}
    {% if is_granted('IS_AUTHENTICATED_FULLY') %}
        <a href=\"../locations/addproblem\"><button>Add problem</button></a>
        {% endif %}
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
