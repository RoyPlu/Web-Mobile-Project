<?php

/* FOSUserBundle:Registration:register_content.html.twig */
class __TwigTemplate_e4f21be0b537687b462344c26fae4a0146015e8ff2811c75fde9bd7e5f0ebf83 extends Twig_Template
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
        $__internal_712185727233cb15afac123616dc0b0c00ca297177999be6482044c4f49369ca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_712185727233cb15afac123616dc0b0c00ca297177999be6482044c4f49369ca->enter($__internal_712185727233cb15afac123616dc0b0c00ca297177999be6482044c4f49369ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register_content.html.twig"));

        $__internal_49e86964ccb3801d7e22d6c6a0fafb343acf0fa066ef0e092ae981df43df62ba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_49e86964ccb3801d7e22d6c6a0fafb343acf0fa066ef0e092ae981df43df62ba->enter($__internal_49e86964ccb3801d7e22d6c6a0fafb343acf0fa066ef0e092ae981df43df62ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register_content.html.twig"));

        // line 2
        echo "
";
        // line 3
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start', array("method" => "post", "action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_registration_register"), "attr" => array("class" => "fos_user_registration_register")));
        echo "
    ";
        // line 4
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
<div>
    <input type=\"submit\" value=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
</div>
";
        // line 8
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
";
        
        $__internal_712185727233cb15afac123616dc0b0c00ca297177999be6482044c4f49369ca->leave($__internal_712185727233cb15afac123616dc0b0c00ca297177999be6482044c4f49369ca_prof);

        
        $__internal_49e86964ccb3801d7e22d6c6a0fafb343acf0fa066ef0e092ae981df43df62ba->leave($__internal_49e86964ccb3801d7e22d6c6a0fafb343acf0fa066ef0e092ae981df43df62ba_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 8,  37 => 6,  32 => 4,  28 => 3,  25 => 2,);
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

{{ form_start(form, {'method': 'post', 'action': path('fos_user_registration_register'), 'attr': {'class': 'fos_user_registration_register'}}) }}
    {{ form_widget(form) }}
<div>
    <input type=\"submit\" value=\"{{ 'registration.submit'|trans }}\" />
</div>
{{ form_end(form) }}
", "FOSUserBundle:Registration:register_content.html.twig", "C:\\Users\\11500384\\Documents\\GitHub\\Web-Mobile-Project\\WP3\\app/Resources/FOSUserBundle/views/Registration/register_content.html.twig");
    }
}
