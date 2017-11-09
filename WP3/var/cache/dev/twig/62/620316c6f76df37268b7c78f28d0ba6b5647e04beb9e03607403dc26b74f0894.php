<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_af6092474556d59b2056973638b1922c770e3833f54c7a92242747fb2a0a8402 extends Twig_Template
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
        $__internal_c4f34827cc7e831671fd084825e181741dce3e64e086d96319946d17f0d74800 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c4f34827cc7e831671fd084825e181741dce3e64e086d96319946d17f0d74800->enter($__internal_c4f34827cc7e831671fd084825e181741dce3e64e086d96319946d17f0d74800_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_4a9df00bd3c1639391006bbfb3c472f65b838b0da486b1bf07c5cd82179624cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a9df00bd3c1639391006bbfb3c472f65b838b0da486b1bf07c5cd82179624cd->enter($__internal_4a9df00bd3c1639391006bbfb3c472f65b838b0da486b1bf07c5cd82179624cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_c4f34827cc7e831671fd084825e181741dce3e64e086d96319946d17f0d74800->leave($__internal_c4f34827cc7e831671fd084825e181741dce3e64e086d96319946d17f0d74800_prof);

        
        $__internal_4a9df00bd3c1639391006bbfb3c472f65b838b0da486b1bf07c5cd82179624cd->leave($__internal_4a9df00bd3c1639391006bbfb3c472f65b838b0da486b1bf07c5cd82179624cd_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
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
        return new Twig_Source("<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
", "@Framework/Form/textarea_widget.html.php", "C:\\Users\\11500384\\Documents\\GitHub\\Web-Mobile-Project\\WP3\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\textarea_widget.html.php");
    }
}
