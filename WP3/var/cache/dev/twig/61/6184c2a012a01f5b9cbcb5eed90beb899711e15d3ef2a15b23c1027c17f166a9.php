<?php

/* @FOSUser/Group/show.html.twig */
class __TwigTemplate_66d4620d65a644e271c6569c01143e9c1863be14d0ffb2bbcc3c00c9de082335 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Group/show.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_377c5eee7b69d8c5631848eeeb718533b6fbf277b1fc936517c4bafe30174185 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_377c5eee7b69d8c5631848eeeb718533b6fbf277b1fc936517c4bafe30174185->enter($__internal_377c5eee7b69d8c5631848eeeb718533b6fbf277b1fc936517c4bafe30174185_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/show.html.twig"));

        $__internal_bdc099e71969b163286ad72542009fba5cdc668f2117ba5869f21ac658776ff3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bdc099e71969b163286ad72542009fba5cdc668f2117ba5869f21ac658776ff3->enter($__internal_bdc099e71969b163286ad72542009fba5cdc668f2117ba5869f21ac658776ff3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_377c5eee7b69d8c5631848eeeb718533b6fbf277b1fc936517c4bafe30174185->leave($__internal_377c5eee7b69d8c5631848eeeb718533b6fbf277b1fc936517c4bafe30174185_prof);

        
        $__internal_bdc099e71969b163286ad72542009fba5cdc668f2117ba5869f21ac658776ff3->leave($__internal_bdc099e71969b163286ad72542009fba5cdc668f2117ba5869f21ac658776ff3_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_47723170572e789429c858ef6c65110a204d34e9a81a554d897f6ef9a364c09d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_47723170572e789429c858ef6c65110a204d34e9a81a554d897f6ef9a364c09d->enter($__internal_47723170572e789429c858ef6c65110a204d34e9a81a554d897f6ef9a364c09d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_8d507b2984115a30e193a7166f5d5333ff8d372b363b07f30a0da459acfd604a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d507b2984115a30e193a7166f5d5333ff8d372b363b07f30a0da459acfd604a->enter($__internal_8d507b2984115a30e193a7166f5d5333ff8d372b363b07f30a0da459acfd604a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/show_content.html.twig", "@FOSUser/Group/show.html.twig", 4)->display($context);
        
        $__internal_8d507b2984115a30e193a7166f5d5333ff8d372b363b07f30a0da459acfd604a->leave($__internal_8d507b2984115a30e193a7166f5d5333ff8d372b363b07f30a0da459acfd604a_prof);

        
        $__internal_47723170572e789429c858ef6c65110a204d34e9a81a554d897f6ef9a364c09d->leave($__internal_47723170572e789429c858ef6c65110a204d34e9a81a554d897f6ef9a364c09d_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% block fos_user_content %}
{% include \"@FOSUser/Group/show_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Group/show.html.twig", "C:\\Users\\11500384\\Documents\\GitHub\\Web-Mobile-Project\\WP3\\app\\Resources\\FOSUserBundle\\views\\Group\\show.html.twig");
    }
}
