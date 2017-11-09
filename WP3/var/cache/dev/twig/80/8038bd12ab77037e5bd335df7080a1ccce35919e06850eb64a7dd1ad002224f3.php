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
        $__internal_0de6199c70ae4e14d65c4de186744038d6db12d0d580025fbadc5b1cc84500f6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0de6199c70ae4e14d65c4de186744038d6db12d0d580025fbadc5b1cc84500f6->enter($__internal_0de6199c70ae4e14d65c4de186744038d6db12d0d580025fbadc5b1cc84500f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/location.html.twig"));

        $__internal_62c8b46815ad7d1eb98a99f30d9968429a9236d6d8aa008acf8db25ad8be72db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_62c8b46815ad7d1eb98a99f30d9968429a9236d6d8aa008acf8db25ad8be72db->enter($__internal_62c8b46815ad7d1eb98a99f30d9968429a9236d6d8aa008acf8db25ad8be72db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/location.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0de6199c70ae4e14d65c4de186744038d6db12d0d580025fbadc5b1cc84500f6->leave($__internal_0de6199c70ae4e14d65c4de186744038d6db12d0d580025fbadc5b1cc84500f6_prof);

        
        $__internal_62c8b46815ad7d1eb98a99f30d9968429a9236d6d8aa008acf8db25ad8be72db->leave($__internal_62c8b46815ad7d1eb98a99f30d9968429a9236d6d8aa008acf8db25ad8be72db_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_18770c61911cc9ce5d640b87916940271ab09fa2886c80b658375cedf01ebb72 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_18770c61911cc9ce5d640b87916940271ab09fa2886c80b658375cedf01ebb72->enter($__internal_18770c61911cc9ce5d640b87916940271ab09fa2886c80b658375cedf01ebb72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_3b600d0993992eb91f66e9d506d1ff40e59b627272326355b38af847ebfd84a1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3b600d0993992eb91f66e9d506d1ff40e59b627272326355b38af847ebfd84a1->enter($__internal_3b600d0993992eb91f66e9d506d1ff40e59b627272326355b38af847ebfd84a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "locations";
        
        $__internal_3b600d0993992eb91f66e9d506d1ff40e59b627272326355b38af847ebfd84a1->leave($__internal_3b600d0993992eb91f66e9d506d1ff40e59b627272326355b38af847ebfd84a1_prof);

        
        $__internal_18770c61911cc9ce5d640b87916940271ab09fa2886c80b658375cedf01ebb72->leave($__internal_18770c61911cc9ce5d640b87916940271ab09fa2886c80b658375cedf01ebb72_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_0d9a7056d6e70adf1a104b253d435d69dcac1c3097a28e84820a218ec9e653a4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0d9a7056d6e70adf1a104b253d435d69dcac1c3097a28e84820a218ec9e653a4->enter($__internal_0d9a7056d6e70adf1a104b253d435d69dcac1c3097a28e84820a218ec9e653a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_6559132dc54ff3015dd90ddd07fc6077e5e2e2956f7f68c42662ef427033780d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6559132dc54ff3015dd90ddd07fc6077e5e2e2956f7f68c42662ef427033780d->enter($__internal_6559132dc54ff3015dd90ddd07fc6077e5e2e2956f7f68c42662ef427033780d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
                    <p>";
                // line 13
                echo twig_escape_filter($this->env, $this->getAttribute($context["problemMessage"], "problem", array()), "html", null, true);
                echo "</p>
                </div>
        ";
                $context['_iterated'] = true;
            }
        }
        if (!$context['_iterated']) {
            // line 16
            echo "            <li>No problems found</li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['problemMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "    </br>
    <h1>Status</h1>
        <hr style=\"width: 97%; color: gray; height: 2px; background-color: gray\" />
        <div class=\"smaller\">
        ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["statusMessages"] ?? $this->getContext($context, "statusMessages")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["statusMessage"]) {
            if ( !twig_test_empty(($context["statusMessages"] ?? $this->getContext($context, "statusMessages")))) {
                // line 23
                echo "            <div class=\"alert alert-info\" role=\"alert\">
                <h2>";
                // line 24
                echo twig_escape_filter($this->env, $this->getAttribute($context["statusMessage"], "status", array()), "html", null, true);
                echo "</h2>
            </div>
        ";
                $context['_iterated'] = true;
            }
        }
        if (!$context['_iterated']) {
            // line 27
            echo "            <p>No status found</p>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['statusMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "        </div>
    </div>
    </br>
    ";
        // line 32
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_TECH")) {
            // line 33
            echo "        <div class=\"container\" style=\"background-color: #edf0ee\">
        <h1>Problemen toegekend aan technicus</h1>
        <hr />
            <ul>

                ";
            // line 38
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["problemMessages"] ?? $this->getContext($context, "problemMessages")));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["problemMessage"]) {
                if ( !twig_test_empty(($context["problemMessages"] ?? $this->getContext($context, "problemMessages")))) {
                    // line 39
                    echo "                    ";
                    if (($this->getAttribute($context["problemMessage"], "techId", array()) == $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "id", array()))) {
                        // line 40
                        echo "                        ";
                        if (($this->getAttribute($context["problemMessage"], "finished", array()) == 0)) {
                            // line 41
                            echo "                    <li>
                        <div class=\"alert alert-danger\" role=\"alert\">
                            <p>";
                            // line 43
                            echo twig_escape_filter($this->env, $this->getAttribute($context["problemMessage"], "problem", array()), "html", null, true);
                            echo "</p>
                        </div>

                    </li>
                    ";
                        }
                        // line 48
                        echo "                        ";
                    }
                    // line 49
                    echo "                ";
                    $context['_iterated'] = true;
                }
            }
            if (!$context['_iterated']) {
                // line 50
                echo "                    <li>No problems found</li>

                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['problemMessage'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 53
            echo "            </ul>
    </div>
        ";
        }
        // line 56
        echo "
";
        
        $__internal_6559132dc54ff3015dd90ddd07fc6077e5e2e2956f7f68c42662ef427033780d->leave($__internal_6559132dc54ff3015dd90ddd07fc6077e5e2e2956f7f68c42662ef427033780d_prof);

        
        $__internal_0d9a7056d6e70adf1a104b253d435d69dcac1c3097a28e84820a218ec9e653a4->leave($__internal_0d9a7056d6e70adf1a104b253d435d69dcac1c3097a28e84820a218ec9e653a4_prof);

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
        return array (  193 => 56,  188 => 53,  180 => 50,  174 => 49,  171 => 48,  163 => 43,  159 => 41,  156 => 40,  153 => 39,  147 => 38,  140 => 33,  138 => 32,  133 => 29,  126 => 27,  117 => 24,  114 => 23,  108 => 22,  102 => 18,  95 => 16,  86 => 13,  83 => 12,  77 => 11,  68 => 4,  59 => 3,  41 => 2,  11 => 1,);
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
                    <p>{{ problemMessage.problem}}</p>
                </div>
        {%  else %}
            <li>No problems found</li>
        {% endfor %}
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
