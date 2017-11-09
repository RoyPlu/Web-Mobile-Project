<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_0c43d32cf737ba1f3c931c45f96023f7f224f015d0da55a2ed73c92414d07599 extends Twig_Template
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
        $__internal_62b83123f747c6c4133a207c8e70ae9712ba964c5fd5cb0bdbde38ef9df3a3bc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_62b83123f747c6c4133a207c8e70ae9712ba964c5fd5cb0bdbde38ef9df3a3bc->enter($__internal_62b83123f747c6c4133a207c8e70ae9712ba964c5fd5cb0bdbde38ef9df3a3bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        $__internal_b47512f954545d2658ada87522cacf940fcc6dae334b1e9b5d0dce7552ea1f6a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b47512f954545d2658ada87522cacf940fcc6dae334b1e9b5d0dce7552ea1f6a->enter($__internal_b47512f954545d2658ada87522cacf940fcc6dae334b1e9b5d0dce7552ea1f6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_62b83123f747c6c4133a207c8e70ae9712ba964c5fd5cb0bdbde38ef9df3a3bc->leave($__internal_62b83123f747c6c4133a207c8e70ae9712ba964c5fd5cb0bdbde38ef9df3a3bc_prof);

        
        $__internal_b47512f954545d2658ada87522cacf940fcc6dae334b1e9b5d0dce7552ea1f6a->leave($__internal_b47512f954545d2658ada87522cacf940fcc6dae334b1e9b5d0dce7552ea1f6a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/integer_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
", "@Framework/Form/integer_widget.html.php", "C:\\Users\\11500384\\Documents\\GitHub\\Web-Mobile-Project\\WP3\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\integer_widget.html.php");
    }
}
