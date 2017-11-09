<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_cf0e391ddfb9b3f718960afeba9c380f039968cbc9627c1999b7bd77f30fca45 extends Twig_Template
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
        $__internal_225e6282eb63c80f87b332229867a7a1bddc8d3585a41a6406389b6092e24d8a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_225e6282eb63c80f87b332229867a7a1bddc8d3585a41a6406389b6092e24d8a->enter($__internal_225e6282eb63c80f87b332229867a7a1bddc8d3585a41a6406389b6092e24d8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        $__internal_81afdc97210d27590e5cdc3a6658dabdb46a5b2c73a14dbd207beac33332cae8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_81afdc97210d27590e5cdc3a6658dabdb46a5b2c73a14dbd207beac33332cae8->enter($__internal_81afdc97210d27590e5cdc3a6658dabdb46a5b2c73a14dbd207beac33332cae8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_225e6282eb63c80f87b332229867a7a1bddc8d3585a41a6406389b6092e24d8a->leave($__internal_225e6282eb63c80f87b332229867a7a1bddc8d3585a41a6406389b6092e24d8a_prof);

        
        $__internal_81afdc97210d27590e5cdc3a6658dabdb46a5b2c73a14dbd207beac33332cae8->leave($__internal_81afdc97210d27590e5cdc3a6658dabdb46a5b2c73a14dbd207beac33332cae8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
", "@Framework/Form/url_widget.html.php", "C:\\Users\\11500384\\Documents\\GitHub\\Web-Mobile-Project\\WP3\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\url_widget.html.php");
    }
}
