<?php

/* FOSUserBundle:Group:show_content.html.twig */
class __TwigTemplate_9c3b0f256b5f71d06861ea597456d03e1e2b4f3d3d06a55bff45282928da6414 extends Twig_Template
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
        $__internal_f59408bdb7b6de2fd09670e952d3bed19531df726e5216cc2ccb590ab8d0b226 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f59408bdb7b6de2fd09670e952d3bed19531df726e5216cc2ccb590ab8d0b226->enter($__internal_f59408bdb7b6de2fd09670e952d3bed19531df726e5216cc2ccb590ab8d0b226_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show_content.html.twig"));

        $__internal_b71c1ca392d8ac17a16558d0ff9dd700305615908926b4775f4adf3d66eb74cf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b71c1ca392d8ac17a16558d0ff9dd700305615908926b4775f4adf3d66eb74cf->enter($__internal_b71c1ca392d8ac17a16558d0ff9dd700305615908926b4775f4adf3d66eb74cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show_content.html.twig"));

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
        
        $__internal_f59408bdb7b6de2fd09670e952d3bed19531df726e5216cc2ccb590ab8d0b226->leave($__internal_f59408bdb7b6de2fd09670e952d3bed19531df726e5216cc2ccb590ab8d0b226_prof);

        
        $__internal_b71c1ca392d8ac17a16558d0ff9dd700305615908926b4775f4adf3d66eb74cf->leave($__internal_b71c1ca392d8ac17a16558d0ff9dd700305615908926b4775f4adf3d66eb74cf_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show_content.html.twig";
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
", "FOSUserBundle:Group:show_content.html.twig", "C:\\Users\\11500384\\Documents\\GitHub\\Web-Mobile-Project\\WP3\\app/Resources/FOSUserBundle/views/Group/show_content.html.twig");
    }
}
