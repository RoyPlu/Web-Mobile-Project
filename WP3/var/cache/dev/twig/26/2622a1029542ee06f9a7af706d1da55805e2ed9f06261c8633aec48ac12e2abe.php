<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_c47a1a3206e3133f84365aa17aa46f2aa22201fbedba2f70e0d92b71c2cfb642 extends Twig_Template
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
        $__internal_bc2bf3b7ca4066f0e87652c7c6268716ce3d8db93b4105d825e7d96155655614 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bc2bf3b7ca4066f0e87652c7c6268716ce3d8db93b4105d825e7d96155655614->enter($__internal_bc2bf3b7ca4066f0e87652c7c6268716ce3d8db93b4105d825e7d96155655614_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        $__internal_fd7bae0a68c0dbf569914299b855e40cfad49374b223082fc3c8af463548f2de = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fd7bae0a68c0dbf569914299b855e40cfad49374b223082fc3c8af463548f2de->enter($__internal_fd7bae0a68c0dbf569914299b855e40cfad49374b223082fc3c8af463548f2de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_bc2bf3b7ca4066f0e87652c7c6268716ce3d8db93b4105d825e7d96155655614->leave($__internal_bc2bf3b7ca4066f0e87652c7c6268716ce3d8db93b4105d825e7d96155655614_prof);

        
        $__internal_fd7bae0a68c0dbf569914299b855e40cfad49374b223082fc3c8af463548f2de->leave($__internal_fd7bae0a68c0dbf569914299b855e40cfad49374b223082fc3c8af463548f2de_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?xml version=\"1.0\" encoding=\"{{ _charset }}\" ?>

<error code=\"{{ status_code }}\" message=\"{{ status_text }}\" />
", "TwigBundle:Exception:error.xml.twig", "C:\\Users\\11500384\\Documents\\GitHub\\Web-Mobile-Project\\WP3\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.xml.twig");
    }
}
