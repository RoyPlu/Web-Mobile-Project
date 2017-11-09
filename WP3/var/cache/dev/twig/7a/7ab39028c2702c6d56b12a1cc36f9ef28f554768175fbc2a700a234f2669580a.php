<?php

/* @Framework/Form/widget_attributes.html.php */
class __TwigTemplate_20b3e78f9ba7ee2537c9bcb6e8979af69dccc81268833ffa6d12d4fde6758868 extends Twig_Template
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
        $__internal_0a5ff6e6e982d3460dc6861a760a45f137440c1b4e0a630447506a6b2071d79a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0a5ff6e6e982d3460dc6861a760a45f137440c1b4e0a630447506a6b2071d79a->enter($__internal_0a5ff6e6e982d3460dc6861a760a45f137440c1b4e0a630447506a6b2071d79a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        $__internal_d9f26768024821f8a0a95f197ce89c427f63e7696576ea1a6c5cb09942fceb57 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d9f26768024821f8a0a95f197ce89c427f63e7696576ea1a6c5cb09942fceb57->enter($__internal_d9f26768024821f8a0a95f197ce89c427f63e7696576ea1a6c5cb09942fceb57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php if (\$required): ?> required=\"required\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_0a5ff6e6e982d3460dc6861a760a45f137440c1b4e0a630447506a6b2071d79a->leave($__internal_0a5ff6e6e982d3460dc6861a760a45f137440c1b4e0a630447506a6b2071d79a_prof);

        
        $__internal_d9f26768024821f8a0a95f197ce89c427f63e7696576ea1a6c5cb09942fceb57->leave($__internal_d9f26768024821f8a0a95f197ce89c427f63e7696576ea1a6c5cb09942fceb57_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/widget_attributes.html.php";
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
        return new Twig_Source("id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php if (\$required): ?> required=\"required\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/widget_attributes.html.php", "C:\\Users\\11500384\\Documents\\GitHub\\Web-Mobile-Project\\WP3\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\widget_attributes.html.php");
    }
}
