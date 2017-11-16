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
        $__internal_54a038f6c39651efb375ff26c26f8c5553810bc707ba190f825880097b3f3619 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_54a038f6c39651efb375ff26c26f8c5553810bc707ba190f825880097b3f3619->enter($__internal_54a038f6c39651efb375ff26c26f8c5553810bc707ba190f825880097b3f3619_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        $__internal_85741df06ada8158bf9370ec72e26ab68212089e9eefaaa6cbe26af0ba7f7c63 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_85741df06ada8158bf9370ec72e26ab68212089e9eefaaa6cbe26af0ba7f7c63->enter($__internal_85741df06ada8158bf9370ec72e26ab68212089e9eefaaa6cbe26af0ba7f7c63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_54a038f6c39651efb375ff26c26f8c5553810bc707ba190f825880097b3f3619->leave($__internal_54a038f6c39651efb375ff26c26f8c5553810bc707ba190f825880097b3f3619_prof);

        
        $__internal_85741df06ada8158bf9370ec72e26ab68212089e9eefaaa6cbe26af0ba7f7c63->leave($__internal_85741df06ada8158bf9370ec72e26ab68212089e9eefaaa6cbe26af0ba7f7c63_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_c333e22ecea77f3dd460ae0a2be9a05f70a759f17360b2156c4ee1da1662f12d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c333e22ecea77f3dd460ae0a2be9a05f70a759f17360b2156c4ee1da1662f12d->enter($__internal_c333e22ecea77f3dd460ae0a2be9a05f70a759f17360b2156c4ee1da1662f12d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_ee1facfe72d91fd70fdcb7a53f494385f31602354a93c982799bb7724c10a289 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee1facfe72d91fd70fdcb7a53f494385f31602354a93c982799bb7724c10a289->enter($__internal_ee1facfe72d91fd70fdcb7a53f494385f31602354a93c982799bb7724c10a289_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_ee1facfe72d91fd70fdcb7a53f494385f31602354a93c982799bb7724c10a289->leave($__internal_ee1facfe72d91fd70fdcb7a53f494385f31602354a93c982799bb7724c10a289_prof);

        
        $__internal_c333e22ecea77f3dd460ae0a2be9a05f70a759f17360b2156c4ee1da1662f12d->leave($__internal_c333e22ecea77f3dd460ae0a2be9a05f70a759f17360b2156c4ee1da1662f12d_prof);

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
