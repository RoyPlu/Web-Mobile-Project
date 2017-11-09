<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_d2fb6d43772f1ccfaa1d2a53f822e25a293fb346b9844a31875a1dc9c10173f3 extends Twig_Template
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
        $__internal_9f28ba9ab5e72129bf112fa35c30234c86d902c524ab47ef2663c7b7f6065af8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9f28ba9ab5e72129bf112fa35c30234c86d902c524ab47ef2663c7b7f6065af8->enter($__internal_9f28ba9ab5e72129bf112fa35c30234c86d902c524ab47ef2663c7b7f6065af8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        $__internal_085e8d1ff51d02a22e17390e16aa6007b443a3bc31ffa60472de53a1375f6e0e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_085e8d1ff51d02a22e17390e16aa6007b443a3bc31ffa60472de53a1375f6e0e->enter($__internal_085e8d1ff51d02a22e17390e16aa6007b443a3bc31ffa60472de53a1375f6e0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_9f28ba9ab5e72129bf112fa35c30234c86d902c524ab47ef2663c7b7f6065af8->leave($__internal_9f28ba9ab5e72129bf112fa35c30234c86d902c524ab47ef2663c7b7f6065af8_prof);

        
        $__internal_085e8d1ff51d02a22e17390e16aa6007b443a3bc31ffa60472de53a1375f6e0e->leave($__internal_085e8d1ff51d02a22e17390e16aa6007b443a3bc31ffa60472de53a1375f6e0e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
", "@Framework/Form/password_widget.html.php", "C:\\Users\\11500384\\Documents\\GitHub\\Web-Mobile-Project\\WP3\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\password_widget.html.php");
    }
}
