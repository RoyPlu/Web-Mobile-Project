<?php

/* @Framework/Form/number_widget.html.php */
class __TwigTemplate_1a986333b094b87a5e8b136b3a1590ecbde6e661346357fede5bf1e61240b198 extends Twig_Template
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
        $__internal_045205d18052d0a363a2432b8a4a26e2e567dfe70b314f87bd03d5d1b92d293b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_045205d18052d0a363a2432b8a4a26e2e567dfe70b314f87bd03d5d1b92d293b->enter($__internal_045205d18052d0a363a2432b8a4a26e2e567dfe70b314f87bd03d5d1b92d293b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        $__internal_318069fc3cec5962e549702967b260b60b9648173a8fe3ec32b138514127cceb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_318069fc3cec5962e549702967b260b60b9648173a8fe3ec32b138514127cceb->enter($__internal_318069fc3cec5962e549702967b260b60b9648173a8fe3ec32b138514127cceb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_045205d18052d0a363a2432b8a4a26e2e567dfe70b314f87bd03d5d1b92d293b->leave($__internal_045205d18052d0a363a2432b8a4a26e2e567dfe70b314f87bd03d5d1b92d293b_prof);

        
        $__internal_318069fc3cec5962e549702967b260b60b9648173a8fe3ec32b138514127cceb->leave($__internal_318069fc3cec5962e549702967b260b60b9648173a8fe3ec32b138514127cceb_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/number_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
", "@Framework/Form/number_widget.html.php", "C:\\Users\\11500384\\Documents\\GitHub\\Web-Mobile-Project\\WP3\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\number_widget.html.php");
    }
}
