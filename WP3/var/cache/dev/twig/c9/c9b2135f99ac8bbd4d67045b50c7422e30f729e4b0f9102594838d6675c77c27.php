<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_d11cbdf64e7fb3d374c87fcdd598a98dae51609b9a05afc1633ef255f0cb3bf6 extends Twig_Template
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
        $__internal_0e6c02086c043cf57cb138c166480e8eb0f7644a5206b965df3a5aecbf49f21f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0e6c02086c043cf57cb138c166480e8eb0f7644a5206b965df3a5aecbf49f21f->enter($__internal_0e6c02086c043cf57cb138c166480e8eb0f7644a5206b965df3a5aecbf49f21f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        $__internal_0e2102133a573f63fe2fa976b282d2bf12671a38fd648bcc431d84126f5adbe1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e2102133a573f63fe2fa976b282d2bf12671a38fd648bcc431d84126f5adbe1->enter($__internal_0e2102133a573f63fe2fa976b282d2bf12671a38fd648bcc431d84126f5adbe1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_0e6c02086c043cf57cb138c166480e8eb0f7644a5206b965df3a5aecbf49f21f->leave($__internal_0e6c02086c043cf57cb138c166480e8eb0f7644a5206b965df3a5aecbf49f21f_prof);

        
        $__internal_0e2102133a573f63fe2fa976b282d2bf12671a38fd648bcc431d84126f5adbe1->leave($__internal_0e2102133a573f63fe2fa976b282d2bf12671a38fd648bcc431d84126f5adbe1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/email_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
", "@Framework/Form/email_widget.html.php", "C:\\Users\\11500384\\Documents\\GitHub\\Web-Mobile-Project\\WP3\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\email_widget.html.php");
    }
}
