<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_79fd4dc20dac5c3d1fbecfb0258b595f3b2311e486bf28752724406086231de7 extends Twig_Template
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
        $__internal_48cab58776abb55213a6ac3fafce50e00c047afbd728c1250003271e29c8f4d2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_48cab58776abb55213a6ac3fafce50e00c047afbd728c1250003271e29c8f4d2->enter($__internal_48cab58776abb55213a6ac3fafce50e00c047afbd728c1250003271e29c8f4d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        $__internal_82ce94ae28254fb7b25150c944b4d1ab0ef4f6fbfc50f4830d6aa2747a3d7009 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_82ce94ae28254fb7b25150c944b4d1ab0ef4f6fbfc50f4830d6aa2747a3d7009->enter($__internal_82ce94ae28254fb7b25150c944b4d1ab0ef4f6fbfc50f4830d6aa2747a3d7009_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_48cab58776abb55213a6ac3fafce50e00c047afbd728c1250003271e29c8f4d2->leave($__internal_48cab58776abb55213a6ac3fafce50e00c047afbd728c1250003271e29c8f4d2_prof);

        
        $__internal_82ce94ae28254fb7b25150c944b4d1ab0ef4f6fbfc50f4830d6aa2747a3d7009->leave($__internal_82ce94ae28254fb7b25150c944b4d1ab0ef4f6fbfc50f4830d6aa2747a3d7009_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
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
        return new Twig_Source("<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
", "@Framework/Form/collection_widget.html.php", "C:\\Users\\11500384\\Documents\\GitHub\\Web-Mobile-Project\\WP3\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\collection_widget.html.php");
    }
}
