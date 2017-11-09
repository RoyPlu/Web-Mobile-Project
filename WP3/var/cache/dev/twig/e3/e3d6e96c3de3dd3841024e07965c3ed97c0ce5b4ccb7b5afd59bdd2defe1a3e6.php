<?php

/* @Twig/Exception/error.txt.twig */
class __TwigTemplate_3cb80f5652630e0858780fc311ca8f915e5d8f4d92c0802441d14215ecb380e9 extends Twig_Template
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
        $__internal_c65b536520533de6deb060ad5f7c333e98c54ddf035167f43af11a74601685b0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c65b536520533de6deb060ad5f7c333e98c54ddf035167f43af11a74601685b0->enter($__internal_c65b536520533de6deb060ad5f7c333e98c54ddf035167f43af11a74601685b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.txt.twig"));

        $__internal_0830ee342477a0eac5e28d178b52f599e2df6014adbfe0d8cda05bd52f9d8a0e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0830ee342477a0eac5e28d178b52f599e2df6014adbfe0d8cda05bd52f9d8a0e->enter($__internal_0830ee342477a0eac5e28d178b52f599e2df6014adbfe0d8cda05bd52f9d8a0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo ($context["status_code"] ?? $this->getContext($context, "status_code"));
        echo " ";
        echo ($context["status_text"] ?? $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_c65b536520533de6deb060ad5f7c333e98c54ddf035167f43af11a74601685b0->leave($__internal_c65b536520533de6deb060ad5f7c333e98c54ddf035167f43af11a74601685b0_prof);

        
        $__internal_0830ee342477a0eac5e28d178b52f599e2df6014adbfe0d8cda05bd52f9d8a0e->leave($__internal_0830ee342477a0eac5e28d178b52f599e2df6014adbfe0d8cda05bd52f9d8a0e_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("Oops! An Error Occurred
=======================

The server returned a \"{{ status_code }} {{ status_text }}\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
", "@Twig/Exception/error.txt.twig", "C:\\Users\\11500384\\Documents\\GitHub\\Web-Mobile-Project\\WP3\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.txt.twig");
    }
}
