<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_3a892697a0a57b45abb3491598793c332b385575f443d7a935bff22399204189 extends Twig_Template
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
        $__internal_db819ea85e11f39ad7078f4be3e27da2fc2f0f0ac0989b47baa50a4eca0e7e21 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_db819ea85e11f39ad7078f4be3e27da2fc2f0f0ac0989b47baa50a4eca0e7e21->enter($__internal_db819ea85e11f39ad7078f4be3e27da2fc2f0f0ac0989b47baa50a4eca0e7e21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        $__internal_c9942bd7cb6c2da6c65c137d2f4b284d1282dcb92b33d85274418ed6ed5f6c0c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c9942bd7cb6c2da6c65c137d2f4b284d1282dcb92b33d85274418ed6ed5f6c0c->enter($__internal_c9942bd7cb6c2da6c65c137d2f4b284d1282dcb92b33d85274418ed6ed5f6c0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_db819ea85e11f39ad7078f4be3e27da2fc2f0f0ac0989b47baa50a4eca0e7e21->leave($__internal_db819ea85e11f39ad7078f4be3e27da2fc2f0f0ac0989b47baa50a4eca0e7e21_prof);

        
        $__internal_c9942bd7cb6c2da6c65c137d2f4b284d1282dcb92b33d85274418ed6ed5f6c0c->leave($__internal_c9942bd7cb6c2da6c65c137d2f4b284d1282dcb92b33d85274418ed6ed5f6c0c_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
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
", "TwigBundle:Exception:error.rdf.twig", "C:\\Users\\11500384\\Documents\\GitHub\\Web-Mobile-Project\\WP3\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.rdf.twig");
    }
}
