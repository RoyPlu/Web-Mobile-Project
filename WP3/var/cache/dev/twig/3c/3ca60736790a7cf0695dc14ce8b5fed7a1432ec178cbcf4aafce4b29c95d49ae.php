<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_b5914bf066f58989ba117eb0784bdf29005c841d0f55f7e16c97fe980b832c00 extends Twig_Template
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
        $__internal_0cccdf2213923f01a8b46876de76673450c5b472d1594302e3833f61540f6e1b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0cccdf2213923f01a8b46876de76673450c5b472d1594302e3833f61540f6e1b->enter($__internal_0cccdf2213923f01a8b46876de76673450c5b472d1594302e3833f61540f6e1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        $__internal_970b578dedf4fc6a5379ce045561c77e994178ce8e29912d55b1d2c9c29764c0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_970b578dedf4fc6a5379ce045561c77e994178ce8e29912d55b1d2c9c29764c0->enter($__internal_970b578dedf4fc6a5379ce045561c77e994178ce8e29912d55b1d2c9c29764c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_0cccdf2213923f01a8b46876de76673450c5b472d1594302e3833f61540f6e1b->leave($__internal_0cccdf2213923f01a8b46876de76673450c5b472d1594302e3833f61540f6e1b_prof);

        
        $__internal_970b578dedf4fc6a5379ce045561c77e994178ce8e29912d55b1d2c9c29764c0->leave($__internal_970b578dedf4fc6a5379ce045561c77e994178ce8e29912d55b1d2c9c29764c0_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
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
        return new Twig_Source("<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
", "@Framework/Form/datetime_widget.html.php", "C:\\Users\\11500384\\Documents\\GitHub\\Web-Mobile-Project\\WP3\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\datetime_widget.html.php");
    }
}
