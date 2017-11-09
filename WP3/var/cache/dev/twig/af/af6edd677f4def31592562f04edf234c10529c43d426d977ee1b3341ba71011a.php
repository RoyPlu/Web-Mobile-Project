<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_edf58e9eebc3ee350bde014d0a827730b4c2501c79baa078d306516d85b70674 extends Twig_Template
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
        $__internal_9872c745d14c250b96635b76ecf5354f331c6a4978107a703453d0d594cdc454 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9872c745d14c250b96635b76ecf5354f331c6a4978107a703453d0d594cdc454->enter($__internal_9872c745d14c250b96635b76ecf5354f331c6a4978107a703453d0d594cdc454_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        $__internal_e9741ec8c03b1917155852136d71005c9b5d80aa03c64c6d605245c112234163 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e9741ec8c03b1917155852136d71005c9b5d80aa03c64c6d605245c112234163->enter($__internal_e9741ec8c03b1917155852136d71005c9b5d80aa03c64c6d605245c112234163_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_9872c745d14c250b96635b76ecf5354f331c6a4978107a703453d0d594cdc454->leave($__internal_9872c745d14c250b96635b76ecf5354f331c6a4978107a703453d0d594cdc454_prof);

        
        $__internal_e9741ec8c03b1917155852136d71005c9b5d80aa03c64c6d605245c112234163->leave($__internal_e9741ec8c03b1917155852136d71005c9b5d80aa03c64c6d605245c112234163_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
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
        return new Twig_Source("<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/radio_widget.html.php", "C:\\Users\\11500384\\Documents\\GitHub\\Web-Mobile-Project\\WP3\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\radio_widget.html.php");
    }
}
