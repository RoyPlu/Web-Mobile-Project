<?php

/* :default:admin.html.twig */
class __TwigTemplate_0bf2ba635605da7025395dab8d72eada87ba32e7804eb40e3581db7a48f0c7ad extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("::base.html.twig", ":default:admin.html.twig", 3);
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
        $__internal_bcaf2bf48f6e89b7459e847af8cce6875267558db0c1ca5edf3b847c7938b033 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bcaf2bf48f6e89b7459e847af8cce6875267558db0c1ca5edf3b847c7938b033->enter($__internal_bcaf2bf48f6e89b7459e847af8cce6875267558db0c1ca5edf3b847c7938b033_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:admin.html.twig"));

        $__internal_eaf4e4fc57a865f91650659556fb1e2509d2a96c284eeb12c159d98944e4cf00 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eaf4e4fc57a865f91650659556fb1e2509d2a96c284eeb12c159d98944e4cf00->enter($__internal_eaf4e4fc57a865f91650659556fb1e2509d2a96c284eeb12c159d98944e4cf00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:admin.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bcaf2bf48f6e89b7459e847af8cce6875267558db0c1ca5edf3b847c7938b033->leave($__internal_bcaf2bf48f6e89b7459e847af8cce6875267558db0c1ca5edf3b847c7938b033_prof);

        
        $__internal_eaf4e4fc57a865f91650659556fb1e2509d2a96c284eeb12c159d98944e4cf00->leave($__internal_eaf4e4fc57a865f91650659556fb1e2509d2a96c284eeb12c159d98944e4cf00_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_63f0e9fb020b897bf4c8f67eb2eea09d88a8966c19e91991adb1eea46f12c9d5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_63f0e9fb020b897bf4c8f67eb2eea09d88a8966c19e91991adb1eea46f12c9d5->enter($__internal_63f0e9fb020b897bf4c8f67eb2eea09d88a8966c19e91991adb1eea46f12c9d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_05e9e6e7ff0c9916453dfca57b422363fa4616ef956448c9767469e551227ebf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_05e9e6e7ff0c9916453dfca57b422363fa4616ef956448c9767469e551227ebf->enter($__internal_05e9e6e7ff0c9916453dfca57b422363fa4616ef956448c9767469e551227ebf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "locations";
        
        $__internal_05e9e6e7ff0c9916453dfca57b422363fa4616ef956448c9767469e551227ebf->leave($__internal_05e9e6e7ff0c9916453dfca57b422363fa4616ef956448c9767469e551227ebf_prof);

        
        $__internal_63f0e9fb020b897bf4c8f67eb2eea09d88a8966c19e91991adb1eea46f12c9d5->leave($__internal_63f0e9fb020b897bf4c8f67eb2eea09d88a8966c19e91991adb1eea46f12c9d5_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_77073d27161040780e070c81086592289b1dc05656f5b82f4a5038328945818f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_77073d27161040780e070c81086592289b1dc05656f5b82f4a5038328945818f->enter($__internal_77073d27161040780e070c81086592289b1dc05656f5b82f4a5038328945818f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ff48e16fb6ed59eaeb754ccc38d25c98f6fc59804bb9292d1018543ef997bfda = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff48e16fb6ed59eaeb754ccc38d25c98f6fc59804bb9292d1018543ef997bfda->enter($__internal_ff48e16fb6ed59eaeb754ccc38d25c98f6fc59804bb9292d1018543ef997bfda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
                    <label style=\"text-align: right\"><a href=\"admin/edit/3\">Edit</a></label>
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
        
        $__internal_ff48e16fb6ed59eaeb754ccc38d25c98f6fc59804bb9292d1018543ef997bfda->leave($__internal_ff48e16fb6ed59eaeb754ccc38d25c98f6fc59804bb9292d1018543ef997bfda_prof);

        
        $__internal_77073d27161040780e070c81086592289b1dc05656f5b82f4a5038328945818f->leave($__internal_77073d27161040780e070c81086592289b1dc05656f5b82f4a5038328945818f_prof);

    }

    public function getTemplateName()
    {
        return ":default:admin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  107 => 22,  100 => 20,  91 => 17,  86 => 15,  83 => 14,  77 => 13,  68 => 6,  59 => 5,  41 => 4,  11 => 3,);
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
                    <label style=\"text-align: right\"><a href=\"admin/edit/3\">Edit</a></label>
                    <label style=\"text-align: right\"><a href=\"admin/remove?techId={{ tech.id }}\">Delete</a></label></p>
            </div>
        {%  else %}
            <li>No technicians found</li>
        {% endfor %}
    </div>
    </br>

{% endblock %}", ":default:admin.html.twig", "C:\\Users\\11500384\\Documents\\GitHub\\Web-Mobile-Project\\WP3\\app/Resources\\views/default/admin.html.twig");
    }
}
