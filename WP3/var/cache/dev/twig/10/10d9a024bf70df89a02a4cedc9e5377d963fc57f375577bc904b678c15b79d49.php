<?php

/* @Framework/Form/hidden_row.html.php */
class __TwigTemplate_bf17eba1dbe554d212c6673c6cfa53b874b049465ab3c9367b046d5004d53c67 extends Twig_Template
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
        $__internal_92c4900bcd5ee0f297d988c5bf27f9bf11a7d43c68a24357c4a47f8956646104 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_92c4900bcd5ee0f297d988c5bf27f9bf11a7d43c68a24357c4a47f8956646104->enter($__internal_92c4900bcd5ee0f297d988c5bf27f9bf11a7d43c68a24357c4a47f8956646104_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        $__internal_7cc4acff8f11dee83bb166a8d6b0515671f04c6c8c8f3ad873567353632660cc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7cc4acff8f11dee83bb166a8d6b0515671f04c6c8c8f3ad873567353632660cc->enter($__internal_7cc4acff8f11dee83bb166a8d6b0515671f04c6c8c8f3ad873567353632660cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_92c4900bcd5ee0f297d988c5bf27f9bf11a7d43c68a24357c4a47f8956646104->leave($__internal_92c4900bcd5ee0f297d988c5bf27f9bf11a7d43c68a24357c4a47f8956646104_prof);

        
        $__internal_7cc4acff8f11dee83bb166a8d6b0515671f04c6c8c8f3ad873567353632660cc->leave($__internal_7cc4acff8f11dee83bb166a8d6b0515671f04c6c8c8f3ad873567353632660cc_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->widget(\$form) ?>
", "@Framework/Form/hidden_row.html.php", "C:\\Users\\11500384\\Documents\\GitHub\\Web-Mobile-Project\\WP3\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\hidden_row.html.php");
    }
}
