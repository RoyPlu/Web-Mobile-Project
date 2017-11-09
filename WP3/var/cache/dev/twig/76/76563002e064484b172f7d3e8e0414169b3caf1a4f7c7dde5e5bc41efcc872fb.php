<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_7380f353489ad0a5ff6672a52fb97048e5c767e201659521c867011c902d8955 extends Twig_Template
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
        $__internal_4e1aa56dadc14c874c6ca60e9846e0a65004d7d0ec4d23347b62f694141d355f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4e1aa56dadc14c874c6ca60e9846e0a65004d7d0ec4d23347b62f694141d355f->enter($__internal_4e1aa56dadc14c874c6ca60e9846e0a65004d7d0ec4d23347b62f694141d355f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        $__internal_ebeeee57d09d3fe5e7859998fc0428a5e8eb3685ed60efe73ed83e293dda09be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ebeeee57d09d3fe5e7859998fc0428a5e8eb3685ed60efe73ed83e293dda09be->enter($__internal_ebeeee57d09d3fe5e7859998fc0428a5e8eb3685ed60efe73ed83e293dda09be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_4e1aa56dadc14c874c6ca60e9846e0a65004d7d0ec4d23347b62f694141d355f->leave($__internal_4e1aa56dadc14c874c6ca60e9846e0a65004d7d0ec4d23347b62f694141d355f_prof);

        
        $__internal_ebeeee57d09d3fe5e7859998fc0428a5e8eb3685ed60efe73ed83e293dda09be->leave($__internal_ebeeee57d09d3fe5e7859998fc0428a5e8eb3685ed60efe73ed83e293dda09be_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ include('@Twig/Exception/error.xml.twig') }}
", "TwigBundle:Exception:error.atom.twig", "C:\\Users\\11500384\\Documents\\GitHub\\Web-Mobile-Project\\WP3\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.atom.twig");
    }
}
