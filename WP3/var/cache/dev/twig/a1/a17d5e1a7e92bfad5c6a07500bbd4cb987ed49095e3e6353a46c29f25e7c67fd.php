<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_8ec21a639de0744ae512996b64518518ac794da75e130fb04d27789b18894725 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_30635d8631d0fb9e0bfa1f04bcac0951430e1d26116551441977d0c4b5e8c34b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_30635d8631d0fb9e0bfa1f04bcac0951430e1d26116551441977d0c4b5e8c34b->enter($__internal_30635d8631d0fb9e0bfa1f04bcac0951430e1d26116551441977d0c4b5e8c34b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        $__internal_a727c3d5cc0f9ffaf7881287a7f1e6392eb27a2d6da9734c778dbc255166c6ed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a727c3d5cc0f9ffaf7881287a7f1e6392eb27a2d6da9734c778dbc255166c6ed->enter($__internal_a727c3d5cc0f9ffaf7881287a7f1e6392eb27a2d6da9734c778dbc255166c6ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_30635d8631d0fb9e0bfa1f04bcac0951430e1d26116551441977d0c4b5e8c34b->leave($__internal_30635d8631d0fb9e0bfa1f04bcac0951430e1d26116551441977d0c4b5e8c34b_prof);

        
        $__internal_a727c3d5cc0f9ffaf7881287a7f1e6392eb27a2d6da9734c778dbc255166c6ed->leave($__internal_a727c3d5cc0f9ffaf7881287a7f1e6392eb27a2d6da9734c778dbc255166c6ed_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_3a1fea794a4eb1fc3762f8663dbf9eb4ca5045b48bf12c9c216377cb52f82ab7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3a1fea794a4eb1fc3762f8663dbf9eb4ca5045b48bf12c9c216377cb52f82ab7->enter($__internal_3a1fea794a4eb1fc3762f8663dbf9eb4ca5045b48bf12c9c216377cb52f82ab7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_5411d27fc5a15d58269c18fda37e532ce819c38063aa612989622db7bb67d8b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5411d27fc5a15d58269c18fda37e532ce819c38063aa612989622db7bb67d8b7->enter($__internal_5411d27fc5a15d58269c18fda37e532ce819c38063aa612989622db7bb67d8b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_5411d27fc5a15d58269c18fda37e532ce819c38063aa612989622db7bb67d8b7->leave($__internal_5411d27fc5a15d58269c18fda37e532ce819c38063aa612989622db7bb67d8b7_prof);

        
        $__internal_3a1fea794a4eb1fc3762f8663dbf9eb4ca5045b48bf12c9c216377cb52f82ab7->leave($__internal_3a1fea794a4eb1fc3762f8663dbf9eb4ca5045b48bf12c9c216377cb52f82ab7_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "C:\\Users\\11500384\\Documents\\GitHub\\Web-Mobile-Project\\WP3\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
