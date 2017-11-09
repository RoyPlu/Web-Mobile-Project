<?php

/* FOSUserBundle:Profile:show_content.html.twig */
class __TwigTemplate_32e1cd6a4fd28b4c212f41ec9017b63e9bf61f467ab3b915ffad15e6d949c744 extends Twig_Template
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
        $__internal_d74882a1e4d5de074e941fe54458fb04001c2ff24896c2e07af528750c2ea0ca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d74882a1e4d5de074e941fe54458fb04001c2ff24896c2e07af528750c2ea0ca->enter($__internal_d74882a1e4d5de074e941fe54458fb04001c2ff24896c2e07af528750c2ea0ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show_content.html.twig"));

        $__internal_294f19d606b51442918b7b84c597ad7788ab1b4053d401dadf0ef3e3cb513ad6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_294f19d606b51442918b7b84c597ad7788ab1b4053d401dadf0ef3e3cb513ad6->enter($__internal_294f19d606b51442918b7b84c597ad7788ab1b4053d401dadf0ef3e3cb513ad6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show_content.html.twig"));

        // line 2
        echo "
<div class=\"fos_user_user_show\">
    <p>";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("profile.show.username", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "html", null, true);
        echo "</p>
    <p>";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("profile.show.email", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "email", array()), "html", null, true);
        echo "</p>
</div>
";
        
        $__internal_d74882a1e4d5de074e941fe54458fb04001c2ff24896c2e07af528750c2ea0ca->leave($__internal_d74882a1e4d5de074e941fe54458fb04001c2ff24896c2e07af528750c2ea0ca_prof);

        
        $__internal_294f19d606b51442918b7b84c597ad7788ab1b4053d401dadf0ef3e3cb513ad6->leave($__internal_294f19d606b51442918b7b84c597ad7788ab1b4053d401dadf0ef3e3cb513ad6_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 5,  29 => 4,  25 => 2,);
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

<div class=\"fos_user_user_show\">
    <p>{{ 'profile.show.username'|trans }}: {{ user.username }}</p>
    <p>{{ 'profile.show.email'|trans }}: {{ user.email }}</p>
</div>
", "FOSUserBundle:Profile:show_content.html.twig", "C:\\Users\\11500384\\Documents\\GitHub\\Web-Mobile-Project\\WP3\\app/Resources/FOSUserBundle/views/Profile/show_content.html.twig");
    }
}
