<?php

/* FOSUserBundle:Registration:email.txt.twig */
class __TwigTemplate_ad0e79979de17229ef249ab92e10cdb64516fb1a031a9e76e64f896f848eb5dc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'subject' => array($this, 'block_subject'),
            'body_text' => array($this, 'block_body_text'),
            'body_html' => array($this, 'block_body_html'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9a84e44913d1969792e9ad4fdca885d27a3f50f3078fdf8220012f6d45320859 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9a84e44913d1969792e9ad4fdca885d27a3f50f3078fdf8220012f6d45320859->enter($__internal_9a84e44913d1969792e9ad4fdca885d27a3f50f3078fdf8220012f6d45320859_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        $__internal_e66273711b711288ad1e761e9a598ee1c5a4dfcc811221911c8c66aed230ad0a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e66273711b711288ad1e761e9a598ee1c5a4dfcc811221911c8c66aed230ad0a->enter($__internal_e66273711b711288ad1e761e9a598ee1c5a4dfcc811221911c8c66aed230ad0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_9a84e44913d1969792e9ad4fdca885d27a3f50f3078fdf8220012f6d45320859->leave($__internal_9a84e44913d1969792e9ad4fdca885d27a3f50f3078fdf8220012f6d45320859_prof);

        
        $__internal_e66273711b711288ad1e761e9a598ee1c5a4dfcc811221911c8c66aed230ad0a->leave($__internal_e66273711b711288ad1e761e9a598ee1c5a4dfcc811221911c8c66aed230ad0a_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_f8c03166b7058505124135f1af5927e0d9178479d29ef2fde551dd2a1644b5a2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f8c03166b7058505124135f1af5927e0d9178479d29ef2fde551dd2a1644b5a2->enter($__internal_f8c03166b7058505124135f1af5927e0d9178479d29ef2fde551dd2a1644b5a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_080e307acc601dcdf52940ed38c7fa0eddf51998f4e3917821f771b45272db94 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_080e307acc601dcdf52940ed38c7fa0eddf51998f4e3917821f771b45272db94->enter($__internal_080e307acc601dcdf52940ed38c7fa0eddf51998f4e3917821f771b45272db94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.subject", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => ($context["confirmationUrl"] ?? $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        
        $__internal_080e307acc601dcdf52940ed38c7fa0eddf51998f4e3917821f771b45272db94->leave($__internal_080e307acc601dcdf52940ed38c7fa0eddf51998f4e3917821f771b45272db94_prof);

        
        $__internal_f8c03166b7058505124135f1af5927e0d9178479d29ef2fde551dd2a1644b5a2->leave($__internal_f8c03166b7058505124135f1af5927e0d9178479d29ef2fde551dd2a1644b5a2_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_1a10dbf7206959473e152e0898a2a7f1ff9ab1a4b3ad7b71a8bdd7706c663578 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1a10dbf7206959473e152e0898a2a7f1ff9ab1a4b3ad7b71a8bdd7706c663578->enter($__internal_1a10dbf7206959473e152e0898a2a7f1ff9ab1a4b3ad7b71a8bdd7706c663578_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_d6d5ae906e17ebfd05b2dd7d54713a58e431a19607f8bdad783991ecca2f603b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d6d5ae906e17ebfd05b2dd7d54713a58e431a19607f8bdad783991ecca2f603b->enter($__internal_d6d5ae906e17ebfd05b2dd7d54713a58e431a19607f8bdad783991ecca2f603b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.message", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => ($context["confirmationUrl"] ?? $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_d6d5ae906e17ebfd05b2dd7d54713a58e431a19607f8bdad783991ecca2f603b->leave($__internal_d6d5ae906e17ebfd05b2dd7d54713a58e431a19607f8bdad783991ecca2f603b_prof);

        
        $__internal_1a10dbf7206959473e152e0898a2a7f1ff9ab1a4b3ad7b71a8bdd7706c663578->leave($__internal_1a10dbf7206959473e152e0898a2a7f1ff9ab1a4b3ad7b71a8bdd7706c663578_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_f357f0dc2be15889115ec32b262cb75e10702a6a3c655e98a9006230415e6bb1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f357f0dc2be15889115ec32b262cb75e10702a6a3c655e98a9006230415e6bb1->enter($__internal_f357f0dc2be15889115ec32b262cb75e10702a6a3c655e98a9006230415e6bb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_d5c43d5a4fc0d54373b544e4ccf3bdab5cb72f02790dc5bbecb18bd21fe0a7c7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d5c43d5a4fc0d54373b544e4ccf3bdab5cb72f02790dc5bbecb18bd21fe0a7c7->enter($__internal_d5c43d5a4fc0d54373b544e4ccf3bdab5cb72f02790dc5bbecb18bd21fe0a7c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_d5c43d5a4fc0d54373b544e4ccf3bdab5cb72f02790dc5bbecb18bd21fe0a7c7->leave($__internal_d5c43d5a4fc0d54373b544e4ccf3bdab5cb72f02790dc5bbecb18bd21fe0a7c7_prof);

        
        $__internal_f357f0dc2be15889115ec32b262cb75e10702a6a3c655e98a9006230415e6bb1->leave($__internal_f357f0dc2be15889115ec32b262cb75e10702a6a3c655e98a9006230415e6bb1_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  85 => 13,  73 => 10,  64 => 8,  54 => 4,  45 => 2,  35 => 13,  33 => 8,  30 => 7,  28 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}
{% block subject %}
{%- autoescape false -%}
{{ 'registration.email.subject'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{%- endautoescape -%}
{% endblock %}

{% block body_text %}
{% autoescape false %}
{{ 'registration.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{% endautoescape %}
{% endblock %}
{% block body_html %}{% endblock %}
", "FOSUserBundle:Registration:email.txt.twig", "C:\\Users\\11500384\\Documents\\GitHub\\Web-Mobile-Project\\WP3\\app/Resources/FOSUserBundle/views/Registration/email.txt.twig");
    }
}
