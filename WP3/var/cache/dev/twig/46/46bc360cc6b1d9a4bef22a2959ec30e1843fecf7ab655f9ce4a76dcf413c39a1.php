<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_becee07805f88215adbcce699f266c3ca2d45355762a1dc7101f30680e4dba9a extends Twig_Template
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
        $__internal_491b08167af33d1bc549a18d6d459a688d0a06e298e3559844e79c9667cee65a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_491b08167af33d1bc549a18d6d459a688d0a06e298e3559844e79c9667cee65a->enter($__internal_491b08167af33d1bc549a18d6d459a688d0a06e298e3559844e79c9667cee65a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_103edea1d7502d58ee20cf3ba7b7216f50c7dcdebe40dcd4fb2dc156f9465be9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_103edea1d7502d58ee20cf3ba7b7216f50c7dcdebe40dcd4fb2dc156f9465be9->enter($__internal_103edea1d7502d58ee20cf3ba7b7216f50c7dcdebe40dcd4fb2dc156f9465be9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_491b08167af33d1bc549a18d6d459a688d0a06e298e3559844e79c9667cee65a->leave($__internal_491b08167af33d1bc549a18d6d459a688d0a06e298e3559844e79c9667cee65a_prof);

        
        $__internal_103edea1d7502d58ee20cf3ba7b7216f50c7dcdebe40dcd4fb2dc156f9465be9->leave($__internal_103edea1d7502d58ee20cf3ba7b7216f50c7dcdebe40dcd4fb2dc156f9465be9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "C:\\Users\\11500384\\Documents\\GitHub\\Web-Mobile-Project\\WP3\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\reset_widget.html.php");
    }
}
