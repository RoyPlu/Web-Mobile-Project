<?php

/* :default:location.html.twig */
class __TwigTemplate_668e120af62d8d39113ce8a39c3e8dc28331e8fdf28b9389471cf2fafff143ac extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", ":default:location.html.twig", 1);
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
        $__internal_78db38c183fd72557effb1b1b77bea055d5aa4fe79406af14002a1bb2c5f51dc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_78db38c183fd72557effb1b1b77bea055d5aa4fe79406af14002a1bb2c5f51dc->enter($__internal_78db38c183fd72557effb1b1b77bea055d5aa4fe79406af14002a1bb2c5f51dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:location.html.twig"));

        $__internal_cc9c04dd08604b4d10b3bdc2c7a253ba099736baa94a6c32f06808ee327730f7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc9c04dd08604b4d10b3bdc2c7a253ba099736baa94a6c32f06808ee327730f7->enter($__internal_cc9c04dd08604b4d10b3bdc2c7a253ba099736baa94a6c32f06808ee327730f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:location.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_78db38c183fd72557effb1b1b77bea055d5aa4fe79406af14002a1bb2c5f51dc->leave($__internal_78db38c183fd72557effb1b1b77bea055d5aa4fe79406af14002a1bb2c5f51dc_prof);

        
        $__internal_cc9c04dd08604b4d10b3bdc2c7a253ba099736baa94a6c32f06808ee327730f7->leave($__internal_cc9c04dd08604b4d10b3bdc2c7a253ba099736baa94a6c32f06808ee327730f7_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_e59148cadfc5fb120de8db57d165d67774dab0308697adfd1924a8dbdb44a250 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e59148cadfc5fb120de8db57d165d67774dab0308697adfd1924a8dbdb44a250->enter($__internal_e59148cadfc5fb120de8db57d165d67774dab0308697adfd1924a8dbdb44a250_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_860f30243ba344869c88ee483b69158edac0f0a8bcab1918f98340294f8186f8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_860f30243ba344869c88ee483b69158edac0f0a8bcab1918f98340294f8186f8->enter($__internal_860f30243ba344869c88ee483b69158edac0f0a8bcab1918f98340294f8186f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "locations";
        
        $__internal_860f30243ba344869c88ee483b69158edac0f0a8bcab1918f98340294f8186f8->leave($__internal_860f30243ba344869c88ee483b69158edac0f0a8bcab1918f98340294f8186f8_prof);

        
        $__internal_e59148cadfc5fb120de8db57d165d67774dab0308697adfd1924a8dbdb44a250->leave($__internal_e59148cadfc5fb120de8db57d165d67774dab0308697adfd1924a8dbdb44a250_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_0186c6d4413ecf5ad3c659905b700112cb9323f3e68c97c704d43aa70fca7804 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0186c6d4413ecf5ad3c659905b700112cb9323f3e68c97c704d43aa70fca7804->enter($__internal_0186c6d4413ecf5ad3c659905b700112cb9323f3e68c97c704d43aa70fca7804_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_bd5260081b24d0ae8c322b1d82b297ac1e51ad67ce5a4a34f0434323defd2819 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd5260081b24d0ae8c322b1d82b297ac1e51ad67ce5a4a34f0434323defd2819->enter($__internal_bd5260081b24d0ae8c322b1d82b297ac1e51ad67ce5a4a34f0434323defd2819_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_bd5260081b24d0ae8c322b1d82b297ac1e51ad67ce5a4a34f0434323defd2819->leave($__internal_bd5260081b24d0ae8c322b1d82b297ac1e51ad67ce5a4a34f0434323defd2819_prof);

        
        $__internal_0186c6d4413ecf5ad3c659905b700112cb9323f3e68c97c704d43aa70fca7804->leave($__internal_0186c6d4413ecf5ad3c659905b700112cb9323f3e68c97c704d43aa70fca7804_prof);

    }

    public function getTemplateName()
    {
        return ":default:location.html.twig";
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

{% endblock %}", ":default:location.html.twig", "C:\\Users\\11500384\\Documents\\GitHub\\Web-Mobile-Project\\WP3\\app/Resources\\views/default/location.html.twig");
    }
}
