<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_38200d3abb114a03932fc98ec8defbe19cd8ef067be01b80fd4acdc4a319f006 extends Twig_Template
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
        $__internal_9bb2b1038ce4dc1b2a182473a589d668f89980328cad726bf3241384ff072ed2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9bb2b1038ce4dc1b2a182473a589d668f89980328cad726bf3241384ff072ed2->enter($__internal_9bb2b1038ce4dc1b2a182473a589d668f89980328cad726bf3241384ff072ed2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        $__internal_e44b5943e0dd5b9a0361304b4fae0c07e390efa11a11e82ea771c636e8181558 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e44b5943e0dd5b9a0361304b4fae0c07e390efa11a11e82ea771c636e8181558->enter($__internal_e44b5943e0dd5b9a0361304b4fae0c07e390efa11a11e82ea771c636e8181558_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, ($context["widget"] ?? $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_9bb2b1038ce4dc1b2a182473a589d668f89980328cad726bf3241384ff072ed2->leave($__internal_9bb2b1038ce4dc1b2a182473a589d668f89980328cad726bf3241384ff072ed2_prof);

        
        $__internal_e44b5943e0dd5b9a0361304b4fae0c07e390efa11a11e82ea771c636e8181558->leave($__internal_e44b5943e0dd5b9a0361304b4fae0c07e390efa11a11e82ea771c636e8181558_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
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
        return new Twig_Source("<?php echo str_replace('{{ widget }}', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
", "@Framework/Form/money_widget.html.php", "C:\\Users\\11500384\\Documents\\GitHub\\Web-Mobile-Project\\WP3\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\money_widget.html.php");
    }
}
