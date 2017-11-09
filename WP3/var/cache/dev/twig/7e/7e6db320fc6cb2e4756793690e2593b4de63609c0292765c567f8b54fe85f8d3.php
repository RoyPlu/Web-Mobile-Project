<?php

/* @WebProfiler/Profiler/ajax_layout.html.twig */
class __TwigTemplate_cd01f0532a053df441c0291a483537c5b39dae9131dea8f326950f7bc65f147f extends Twig_Template
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
        $__internal_c02a3cbf0760ed8347e218f90de036104c286afd06f691faac1f164e70e33eed = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c02a3cbf0760ed8347e218f90de036104c286afd06f691faac1f164e70e33eed->enter($__internal_c02a3cbf0760ed8347e218f90de036104c286afd06f691faac1f164e70e33eed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        $__internal_bb5f61319649a319e4b378f577f3ee097bcc3494e9bd70591cc7c9afed94a515 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb5f61319649a319e4b378f577f3ee097bcc3494e9bd70591cc7c9afed94a515->enter($__internal_bb5f61319649a319e4b378f577f3ee097bcc3494e9bd70591cc7c9afed94a515_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_c02a3cbf0760ed8347e218f90de036104c286afd06f691faac1f164e70e33eed->leave($__internal_c02a3cbf0760ed8347e218f90de036104c286afd06f691faac1f164e70e33eed_prof);

        
        $__internal_bb5f61319649a319e4b378f577f3ee097bcc3494e9bd70591cc7c9afed94a515->leave($__internal_bb5f61319649a319e4b378f577f3ee097bcc3494e9bd70591cc7c9afed94a515_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_bf47db000a2d49a1a85d314d0a656909e784a8e28f62f9aa04e23299e1e5790b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bf47db000a2d49a1a85d314d0a656909e784a8e28f62f9aa04e23299e1e5790b->enter($__internal_bf47db000a2d49a1a85d314d0a656909e784a8e28f62f9aa04e23299e1e5790b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_15c73209ae17f88f024aaeca4eae945f67be18dba05e455182758712b0d8a51a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_15c73209ae17f88f024aaeca4eae945f67be18dba05e455182758712b0d8a51a->enter($__internal_15c73209ae17f88f024aaeca4eae945f67be18dba05e455182758712b0d8a51a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_15c73209ae17f88f024aaeca4eae945f67be18dba05e455182758712b0d8a51a->leave($__internal_15c73209ae17f88f024aaeca4eae945f67be18dba05e455182758712b0d8a51a_prof);

        
        $__internal_bf47db000a2d49a1a85d314d0a656909e784a8e28f62f9aa04e23299e1e5790b->leave($__internal_bf47db000a2d49a1a85d314d0a656909e784a8e28f62f9aa04e23299e1e5790b_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/ajax_layout.html.twig";
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
", "@WebProfiler/Profiler/ajax_layout.html.twig", "C:\\Users\\11500384\\Documents\\GitHub\\Web-Mobile-Project\\WP3\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\ajax_layout.html.twig");
    }
}
