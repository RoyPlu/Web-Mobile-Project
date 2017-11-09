<?php

/* @Framework/Form/choice_attributes.html.php */
class __TwigTemplate_549ef9b04c3b04b5cfd07295a3312501d50ed7c92300be1de5ba1803b31e3d95 extends Twig_Template
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
        $__internal_27af5746f820ffe5c2927d205ed88fa137c455701d6abbd7aab8b4ec3653916d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_27af5746f820ffe5c2927d205ed88fa137c455701d6abbd7aab8b4ec3653916d->enter($__internal_27af5746f820ffe5c2927d205ed88fa137c455701d6abbd7aab8b4ec3653916d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        $__internal_223e5a4de934d5b8432f71587c2e73ab76417986d003290c9db2a1986e96fabb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_223e5a4de934d5b8432f71587c2e73ab76417986d003290c9db2a1986e96fabb->enter($__internal_223e5a4de934d5b8432f71587c2e73ab76417986d003290c9db2a1986e96fabb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        // line 1
        echo "<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
";
        
        $__internal_27af5746f820ffe5c2927d205ed88fa137c455701d6abbd7aab8b4ec3653916d->leave($__internal_27af5746f820ffe5c2927d205ed88fa137c455701d6abbd7aab8b4ec3653916d_prof);

        
        $__internal_223e5a4de934d5b8432f71587c2e73ab76417986d003290c9db2a1986e96fabb->leave($__internal_223e5a4de934d5b8432f71587c2e73ab76417986d003290c9db2a1986e96fabb_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_attributes.html.php";
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
        return new Twig_Source("<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
", "@Framework/Form/choice_attributes.html.php", "C:\\Users\\11500384\\Documents\\GitHub\\Web-Mobile-Project\\WP3\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\choice_attributes.html.php");
    }
}
