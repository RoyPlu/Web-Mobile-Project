<?php

/* @Framework/Form/percent_widget.html.php */
class __TwigTemplate_26fee7e44f32462a127921ff6a772f38da5144264870a6bb7f22b064eda4ea02 extends Twig_Template
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
        $__internal_927e95834fe31ce2b211e33eae29599358016805c72c4fcb8d556d758fa57488 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_927e95834fe31ce2b211e33eae29599358016805c72c4fcb8d556d758fa57488->enter($__internal_927e95834fe31ce2b211e33eae29599358016805c72c4fcb8d556d758fa57488_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        $__internal_ace72de2345911c3ca3aed51473a4f2615187910708b81eccee465549ed5d135 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ace72de2345911c3ca3aed51473a4f2615187910708b81eccee465549ed5d135->enter($__internal_ace72de2345911c3ca3aed51473a4f2615187910708b81eccee465549ed5d135_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
        
        $__internal_927e95834fe31ce2b211e33eae29599358016805c72c4fcb8d556d758fa57488->leave($__internal_927e95834fe31ce2b211e33eae29599358016805c72c4fcb8d556d758fa57488_prof);

        
        $__internal_ace72de2345911c3ca3aed51473a4f2615187910708b81eccee465549ed5d135->leave($__internal_ace72de2345911c3ca3aed51473a4f2615187910708b81eccee465549ed5d135_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/percent_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
", "@Framework/Form/percent_widget.html.php", "C:\\Users\\11500384\\Documents\\GitHub\\Web-Mobile-Project\\WP3\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\percent_widget.html.php");
    }
}
