<?php

/* @FOSUser/Profile/show_content.html.twig */
class __TwigTemplate_bed6a7f674f38a2c6f8262660b90c2cb2c579c7012bdd88f30b024f79a0972be extends Twig_Template
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
        $__internal_f60a5330a57191457de8fd0561dceea385f08fdfba606a17297c1aff0943284d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f60a5330a57191457de8fd0561dceea385f08fdfba606a17297c1aff0943284d->enter($__internal_f60a5330a57191457de8fd0561dceea385f08fdfba606a17297c1aff0943284d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show_content.html.twig"));

        $__internal_28158ae61d7eae2ab6d91f166e6dad51b26a921043c16ca947ef28087fff530b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_28158ae61d7eae2ab6d91f166e6dad51b26a921043c16ca947ef28087fff530b->enter($__internal_28158ae61d7eae2ab6d91f166e6dad51b26a921043c16ca947ef28087fff530b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show_content.html.twig"));

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
        
        $__internal_f60a5330a57191457de8fd0561dceea385f08fdfba606a17297c1aff0943284d->leave($__internal_f60a5330a57191457de8fd0561dceea385f08fdfba606a17297c1aff0943284d_prof);

        
        $__internal_28158ae61d7eae2ab6d91f166e6dad51b26a921043c16ca947ef28087fff530b->leave($__internal_28158ae61d7eae2ab6d91f166e6dad51b26a921043c16ca947ef28087fff530b_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/show_content.html.twig";
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
", "@FOSUser/Profile/show_content.html.twig", "C:\\Users\\11500384\\Documents\\GitHub\\Web-Mobile-Project\\WP3\\app\\Resources\\FOSUserBundle\\views\\Profile\\show_content.html.twig");
    }
}
