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
        $__internal_aa991431182e64eede0956390d7a4a778e6a77fd378d38cdc32539d51caa4f51 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aa991431182e64eede0956390d7a4a778e6a77fd378d38cdc32539d51caa4f51->enter($__internal_aa991431182e64eede0956390d7a4a778e6a77fd378d38cdc32539d51caa4f51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/location.html.twig"));

        $__internal_d7b77848be55c7c810dd9e190a70031ed7efb77c4be149c6de59e51d1cf78170 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d7b77848be55c7c810dd9e190a70031ed7efb77c4be149c6de59e51d1cf78170->enter($__internal_d7b77848be55c7c810dd9e190a70031ed7efb77c4be149c6de59e51d1cf78170_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/location.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_aa991431182e64eede0956390d7a4a778e6a77fd378d38cdc32539d51caa4f51->leave($__internal_aa991431182e64eede0956390d7a4a778e6a77fd378d38cdc32539d51caa4f51_prof);

        
        $__internal_d7b77848be55c7c810dd9e190a70031ed7efb77c4be149c6de59e51d1cf78170->leave($__internal_d7b77848be55c7c810dd9e190a70031ed7efb77c4be149c6de59e51d1cf78170_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_0598e830caaba3a560bcc35bfc3b487533ad4bf90f6198851ce0532e4e8d9764 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0598e830caaba3a560bcc35bfc3b487533ad4bf90f6198851ce0532e4e8d9764->enter($__internal_0598e830caaba3a560bcc35bfc3b487533ad4bf90f6198851ce0532e4e8d9764_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_1cbf6763621246c96fd5cf5be51e6e6feb933f65cb2c08f39d53b44751bad396 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1cbf6763621246c96fd5cf5be51e6e6feb933f65cb2c08f39d53b44751bad396->enter($__internal_1cbf6763621246c96fd5cf5be51e6e6feb933f65cb2c08f39d53b44751bad396_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "locations";
        
        $__internal_1cbf6763621246c96fd5cf5be51e6e6feb933f65cb2c08f39d53b44751bad396->leave($__internal_1cbf6763621246c96fd5cf5be51e6e6feb933f65cb2c08f39d53b44751bad396_prof);

        
        $__internal_0598e830caaba3a560bcc35bfc3b487533ad4bf90f6198851ce0532e4e8d9764->leave($__internal_0598e830caaba3a560bcc35bfc3b487533ad4bf90f6198851ce0532e4e8d9764_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_5066749afe1a35ba9931c76a2cc5ce8edfc70b08bce8b8eb047dab2253fe1299 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5066749afe1a35ba9931c76a2cc5ce8edfc70b08bce8b8eb047dab2253fe1299->enter($__internal_5066749afe1a35ba9931c76a2cc5ce8edfc70b08bce8b8eb047dab2253fe1299_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_1801637d5132b009b26cdaf796b410defe088ab63c20b7a7b9c90b4f696aad50 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1801637d5132b009b26cdaf796b410defe088ab63c20b7a7b9c90b4f696aad50->enter($__internal_1801637d5132b009b26cdaf796b410defe088ab63c20b7a7b9c90b4f696aad50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
            ";
                // line 14
                if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_MGR")) {
                    // line 15
                    echo "                <button>Assign technician</button>
            ";
                }
                // line 17
                echo "                </div>
        ";
                $context['_iterated'] = true;
            }
        }
        if (!$context['_iterated']) {
            // line 19
            echo "            <li>No problems found</li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['problemMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "    </br>
    <h1>Status</h1>
        <hr style=\"width: 97%; color: gray; height: 2px; background-color: gray\" />
        <div class=\"smaller\">
        ";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["statusMessages"] ?? $this->getContext($context, "statusMessages")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["statusMessage"]) {
            if ( !twig_test_empty(($context["statusMessages"] ?? $this->getContext($context, "statusMessages")))) {
                // line 26
                echo "            <div class=\"alert alert-info\" role=\"alert\">
                <h2>";
                // line 27
                echo twig_escape_filter($this->env, $this->getAttribute($context["statusMessage"], "status", array()), "html", null, true);
                echo "</h2>
            </div>
        ";
                $context['_iterated'] = true;
            }
        }
        if (!$context['_iterated']) {
            // line 30
            echo "            <p>No status found</p>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['statusMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "        </div>
    </div>
    </br>
    ";
        // line 35
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_TECH")) {
            // line 36
            echo "        <div class=\"container\" style=\"background-color: #edf0ee\">
        <h1>Problemen toegekend aan technicus</h1>
        <hr />
            <ul>

                ";
            // line 41
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["problemMessages"] ?? $this->getContext($context, "problemMessages")));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["problemMessage"]) {
                if ( !twig_test_empty(($context["problemMessages"] ?? $this->getContext($context, "problemMessages")))) {
                    // line 42
                    echo "                    ";
                    if (($this->getAttribute($context["problemMessage"], "techId", array()) == $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "id", array()))) {
                        // line 43
                        echo "                        ";
                        if (($this->getAttribute($context["problemMessage"], "finished", array()) == 0)) {
                            // line 44
                            echo "                    <li>
                        <div class=\"alert alert-danger\" role=\"alert\">
                            <p>";
                            // line 46
                            echo twig_escape_filter($this->env, $this->getAttribute($context["problemMessage"], "problem", array()), "html", null, true);
                            echo "</p>
                        </div>

                    </li>
                    ";
                        }
                        // line 51
                        echo "                        ";
                    }
                    // line 52
                    echo "                ";
                    $context['_iterated'] = true;
                }
            }
            if (!$context['_iterated']) {
                // line 53
                echo "                    <li>No problems found</li>

                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['problemMessage'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 56
            echo "            </ul>
    </div>
        ";
        }
        // line 59
        echo "
";
        
        $__internal_1801637d5132b009b26cdaf796b410defe088ab63c20b7a7b9c90b4f696aad50->leave($__internal_1801637d5132b009b26cdaf796b410defe088ab63c20b7a7b9c90b4f696aad50_prof);

        
        $__internal_5066749afe1a35ba9931c76a2cc5ce8edfc70b08bce8b8eb047dab2253fe1299->leave($__internal_5066749afe1a35ba9931c76a2cc5ce8edfc70b08bce8b8eb047dab2253fe1299_prof);

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
        return array (  201 => 59,  196 => 56,  188 => 53,  182 => 52,  179 => 51,  171 => 46,  167 => 44,  164 => 43,  161 => 42,  155 => 41,  148 => 36,  146 => 35,  141 => 32,  134 => 30,  125 => 27,  122 => 26,  116 => 25,  110 => 21,  103 => 19,  96 => 17,  92 => 15,  90 => 14,  86 => 13,  83 => 12,  77 => 11,  68 => 4,  59 => 3,  41 => 2,  11 => 1,);
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
            {% if is_granted('ROLE_MGR') %}
                <button>Assign technician</button>
            {%  endif %}
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
