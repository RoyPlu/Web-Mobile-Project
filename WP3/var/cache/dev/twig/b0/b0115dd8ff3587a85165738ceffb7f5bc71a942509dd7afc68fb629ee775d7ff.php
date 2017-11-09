<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_34da8767fa2c8c476073b806318ee4bb40dc965e9f965e49d7b7a318049f74cd extends Twig_Template
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
        $__internal_6fac80bae3dc2b9e1b3142338348ada5a2e03ff7afb8d396e2c71eb8bf9ab81c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6fac80bae3dc2b9e1b3142338348ada5a2e03ff7afb8d396e2c71eb8bf9ab81c->enter($__internal_6fac80bae3dc2b9e1b3142338348ada5a2e03ff7afb8d396e2c71eb8bf9ab81c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_ef2283b10ba056a5bb21af641cef141a3e6ab98e03f01f80a47c9d93343cf4cf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef2283b10ba056a5bb21af641cef141a3e6ab98e03f01f80a47c9d93343cf4cf->enter($__internal_ef2283b10ba056a5bb21af641cef141a3e6ab98e03f01f80a47c9d93343cf4cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_6fac80bae3dc2b9e1b3142338348ada5a2e03ff7afb8d396e2c71eb8bf9ab81c->leave($__internal_6fac80bae3dc2b9e1b3142338348ada5a2e03ff7afb8d396e2c71eb8bf9ab81c_prof);

        
        $__internal_ef2283b10ba056a5bb21af641cef141a3e6ab98e03f01f80a47c9d93343cf4cf->leave($__internal_ef2283b10ba056a5bb21af641cef141a3e6ab98e03f01f80a47c9d93343cf4cf_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
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
        return new Twig_Source("<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
", "@Framework/Form/form_widget.html.php", "C:\\Users\\11500384\\Documents\\GitHub\\Web-Mobile-Project\\WP3\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_widget.html.php");
    }
}
