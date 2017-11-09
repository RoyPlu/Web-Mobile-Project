<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_0e0ad0790714d312cff30338aa99469f696fc487b368dd78decbb02b75d6de80 extends Twig_Template
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
        $__internal_039398e77491337ebdfc5efd59fcb64c0fb81c4402675a4fca561c0fc4bd7bc3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_039398e77491337ebdfc5efd59fcb64c0fb81c4402675a4fca561c0fc4bd7bc3->enter($__internal_039398e77491337ebdfc5efd59fcb64c0fb81c4402675a4fca561c0fc4bd7bc3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        $__internal_beac83c9e927d3ffa40704a048a43246c595b85d698ba06e3363f1fbb446909f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_beac83c9e927d3ffa40704a048a43246c595b85d698ba06e3363f1fbb446909f->enter($__internal_beac83c9e927d3ffa40704a048a43246c595b85d698ba06e3363f1fbb446909f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_039398e77491337ebdfc5efd59fcb64c0fb81c4402675a4fca561c0fc4bd7bc3->leave($__internal_039398e77491337ebdfc5efd59fcb64c0fb81c4402675a4fca561c0fc4bd7bc3_prof);

        
        $__internal_beac83c9e927d3ffa40704a048a43246c595b85d698ba06e3363f1fbb446909f->leave($__internal_beac83c9e927d3ffa40704a048a43246c595b85d698ba06e3363f1fbb446909f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
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
        return new Twig_Source("<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
", "@Framework/Form/form_widget_simple.html.php", "C:\\Users\\11500384\\Documents\\GitHub\\Web-Mobile-Project\\WP3\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_widget_simple.html.php");
    }
}
