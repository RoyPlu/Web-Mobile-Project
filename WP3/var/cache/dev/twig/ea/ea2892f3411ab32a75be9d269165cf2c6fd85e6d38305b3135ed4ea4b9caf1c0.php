<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_02c1f16ca8e5c3114caa69487d7586bd1311c35f97d7c9e8a7db11cad366dc66 extends Twig_Template
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
        $__internal_1cb5ba37949ec3cf4254523ac5bf610f739feb593c381bd3c70f3b7ef38cd192 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1cb5ba37949ec3cf4254523ac5bf610f739feb593c381bd3c70f3b7ef38cd192->enter($__internal_1cb5ba37949ec3cf4254523ac5bf610f739feb593c381bd3c70f3b7ef38cd192_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        $__internal_7bbfb878f65f3753f01bb3a6253bef2e76eab399c2138f48b5d27025ba53000c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7bbfb878f65f3753f01bb3a6253bef2e76eab399c2138f48b5d27025ba53000c->enter($__internal_7bbfb878f65f3753f01bb3a6253bef2e76eab399c2138f48b5d27025ba53000c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_1cb5ba37949ec3cf4254523ac5bf610f739feb593c381bd3c70f3b7ef38cd192->leave($__internal_1cb5ba37949ec3cf4254523ac5bf610f739feb593c381bd3c70f3b7ef38cd192_prof);

        
        $__internal_7bbfb878f65f3753f01bb3a6253bef2e76eab399c2138f48b5d27025ba53000c->leave($__internal_7bbfb878f65f3753f01bb3a6253bef2e76eab399c2138f48b5d27025ba53000c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
", "@Framework/Form/hidden_widget.html.php", "C:\\Users\\11500384\\Documents\\GitHub\\Web-Mobile-Project\\WP3\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\hidden_widget.html.php");
    }
}
