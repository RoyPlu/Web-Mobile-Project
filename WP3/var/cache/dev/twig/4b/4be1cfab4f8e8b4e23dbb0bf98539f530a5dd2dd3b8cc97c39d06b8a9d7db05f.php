<?php

/* @FOSUser/Group/show_content.html.twig */
class __TwigTemplate_4a2ba01bdb1d7fc0255a956cb91c3b8a22642c0a1aa2668c9af2ed88f6c6f79c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_efc86dd090f986c8071ddacf85d84357fbd1a6a82c065b01a7d5cf27ed9bbaef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_efc86dd090f986c8071ddacf85d84357fbd1a6a82c065b01a7d5cf27ed9bbaef->enter($__internal_efc86dd090f986c8071ddacf85d84357fbd1a6a82c065b01a7d5cf27ed9bbaef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/show_content.html.twig"));

        $__internal_3a3c57820632788645e7bf35eb36e05186259697c01ec933b20083e5d2254abb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3a3c57820632788645e7bf35eb36e05186259697c01ec933b20083e5d2254abb->enter($__internal_3a3c57820632788645e7bf35eb36e05186259697c01ec933b20083e5d2254abb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/show_content.html.twig"));

        // line 2
        echo "
<div class=\"fos_user_group_show\">
    <p>";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("group.show.name", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["group"] ?? $this->getContext($context, "group")), "getName", array(), "method"), "html", null, true);
        echo "</p>
</div>
";
        
        $__internal_efc86dd090f986c8071ddacf85d84357fbd1a6a82c065b01a7d5cf27ed9bbaef->leave($__internal_efc86dd090f986c8071ddacf85d84357fbd1a6a82c065b01a7d5cf27ed9bbaef_prof);

        
        $__internal_3a3c57820632788645e7bf35eb36e05186259697c01ec933b20083e5d2254abb->leave($__internal_3a3c57820632788645e7bf35eb36e05186259697c01ec933b20083e5d2254abb_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 4,  25 => 2,);
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

<div class=\"fos_user_group_show\">
    <p>{{ 'group.show.name'|trans }}: {{ group.getName() }}</p>
</div>
", "@FOSUser/Group/show_content.html.twig", "C:\\Users\\11500384\\Documents\\GitHub\\Web-Mobile-Project\\WP3\\app\\Resources\\FOSUserBundle\\views\\Group\\show_content.html.twig");
    }
}
