<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_10f6101ecd7ac1a0be1907c372495ed7e194300a9674f771a52cbbea2c5441a5 extends Twig_Template
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
        $__internal_112aa07f5b2f9e03ffc2f4a2038dc6bcc36a54619dc773cd9ac03916b9b2500f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_112aa07f5b2f9e03ffc2f4a2038dc6bcc36a54619dc773cd9ac03916b9b2500f->enter($__internal_112aa07f5b2f9e03ffc2f4a2038dc6bcc36a54619dc773cd9ac03916b9b2500f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        $__internal_e45ecbb743ac6b66c7beec3534fbda5932d8c83110c5e90736cf750519ab2d81 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e45ecbb743ac6b66c7beec3534fbda5932d8c83110c5e90736cf750519ab2d81->enter($__internal_e45ecbb743ac6b66c7beec3534fbda5932d8c83110c5e90736cf750519ab2d81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_112aa07f5b2f9e03ffc2f4a2038dc6bcc36a54619dc773cd9ac03916b9b2500f->leave($__internal_112aa07f5b2f9e03ffc2f4a2038dc6bcc36a54619dc773cd9ac03916b9b2500f_prof);

        
        $__internal_e45ecbb743ac6b66c7beec3534fbda5932d8c83110c5e90736cf750519ab2d81->leave($__internal_e45ecbb743ac6b66c7beec3534fbda5932d8c83110c5e90736cf750519ab2d81_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
", "@Framework/Form/form_rest.html.php", "C:\\Users\\11500384\\Documents\\GitHub\\Web-Mobile-Project\\WP3\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_rest.html.php");
    }
}
