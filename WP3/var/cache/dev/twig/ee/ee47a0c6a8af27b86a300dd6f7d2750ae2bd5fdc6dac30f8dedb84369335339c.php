<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_b89b56d4a975e444ef183178a00b9776fa0faf590807f454aaae4e02c3ff55ca extends Twig_Template
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
        $__internal_6ecd7e3aa4f58b1512cad53e960afc400702c9ff26aa46257cccaa2e010e3d9e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6ecd7e3aa4f58b1512cad53e960afc400702c9ff26aa46257cccaa2e010e3d9e->enter($__internal_6ecd7e3aa4f58b1512cad53e960afc400702c9ff26aa46257cccaa2e010e3d9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        $__internal_6bf1ad52ff11bb1999b3a7f0a436e60e02dde9965c68ae3301437ccc5a458f6b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6bf1ad52ff11bb1999b3a7f0a436e60e02dde9965c68ae3301437ccc5a458f6b->enter($__internal_6bf1ad52ff11bb1999b3a7f0a436e60e02dde9965c68ae3301437ccc5a458f6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_6ecd7e3aa4f58b1512cad53e960afc400702c9ff26aa46257cccaa2e010e3d9e->leave($__internal_6ecd7e3aa4f58b1512cad53e960afc400702c9ff26aa46257cccaa2e010e3d9e_prof);

        
        $__internal_6bf1ad52ff11bb1999b3a7f0a436e60e02dde9965c68ae3301437ccc5a458f6b->leave($__internal_6bf1ad52ff11bb1999b3a7f0a436e60e02dde9965c68ae3301437ccc5a458f6b_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{{ status_code }} {{ status_text }}

*/
", "TwigBundle:Exception:error.css.twig", "C:\\Users\\11500384\\Documents\\GitHub\\Web-Mobile-Project\\WP3\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.css.twig");
    }
}
