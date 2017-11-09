<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_914874d3da876f894a48e992d9bf7c9e4751bc264ff32959e2659779e5ffc6da extends Twig_Template
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
        $__internal_53db825bf557931309b0a585c251d53a87af30b21a9cd6034fc86974d60ef1b8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_53db825bf557931309b0a585c251d53a87af30b21a9cd6034fc86974d60ef1b8->enter($__internal_53db825bf557931309b0a585c251d53a87af30b21a9cd6034fc86974d60ef1b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_ce1e7099c79f233cde26984c04c161b3267603f23ea8463b4bd5ce0c67053e3e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce1e7099c79f233cde26984c04c161b3267603f23ea8463b4bd5ce0c67053e3e->enter($__internal_ce1e7099c79f233cde26984c04c161b3267603f23ea8463b4bd5ce0c67053e3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_53db825bf557931309b0a585c251d53a87af30b21a9cd6034fc86974d60ef1b8->leave($__internal_53db825bf557931309b0a585c251d53a87af30b21a9cd6034fc86974d60ef1b8_prof);

        
        $__internal_ce1e7099c79f233cde26984c04c161b3267603f23ea8463b4bd5ce0c67053e3e->leave($__internal_ce1e7099c79f233cde26984c04c161b3267603f23ea8463b4bd5ce0c67053e3e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
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
        return new Twig_Source("<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
", "@Framework/Form/form_enctype.html.php", "C:\\Users\\11500384\\Documents\\GitHub\\Web-Mobile-Project\\WP3\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_enctype.html.php");
    }
}
