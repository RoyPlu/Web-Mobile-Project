<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_5617e637abbc5907a44f7f726adec1dbeceeb0872bc5d3f5d4b0ac330afbcc53 extends Twig_Template
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
        $__internal_01de9014adccd3bdf7b90a2c0a2fee5cb1426f17066089f1ea1fb4e7b8395475 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_01de9014adccd3bdf7b90a2c0a2fee5cb1426f17066089f1ea1fb4e7b8395475->enter($__internal_01de9014adccd3bdf7b90a2c0a2fee5cb1426f17066089f1ea1fb4e7b8395475_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        $__internal_b59488c18bf8561ae762a7ed2b72c630fc5fcc79c8fd6dda288e5a33aaf15671 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b59488c18bf8561ae762a7ed2b72c630fc5fcc79c8fd6dda288e5a33aaf15671->enter($__internal_b59488c18bf8561ae762a7ed2b72c630fc5fcc79c8fd6dda288e5a33aaf15671_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_01de9014adccd3bdf7b90a2c0a2fee5cb1426f17066089f1ea1fb4e7b8395475->leave($__internal_01de9014adccd3bdf7b90a2c0a2fee5cb1426f17066089f1ea1fb4e7b8395475_prof);

        
        $__internal_b59488c18bf8561ae762a7ed2b72c630fc5fcc79c8fd6dda288e5a33aaf15671->leave($__internal_b59488c18bf8561ae762a7ed2b72c630fc5fcc79c8fd6dda288e5a33aaf15671_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
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
        return new Twig_Source("<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
", "@Framework/Form/form_errors.html.php", "C:\\Users\\11500384\\Documents\\GitHub\\Web-Mobile-Project\\WP3\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_errors.html.php");
    }
}
