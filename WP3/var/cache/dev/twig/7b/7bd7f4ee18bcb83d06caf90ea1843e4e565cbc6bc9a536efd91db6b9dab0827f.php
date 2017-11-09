<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_480ba7d04fc94ef386e136e55a55f06aebe94fc5cb26400d9f83c8a7ebd9a03f extends Twig_Template
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
        $__internal_86ef0491129e8005902b8273031239ef07a3ae8925a2338c849e3030eed4e27b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_86ef0491129e8005902b8273031239ef07a3ae8925a2338c849e3030eed4e27b->enter($__internal_86ef0491129e8005902b8273031239ef07a3ae8925a2338c849e3030eed4e27b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        $__internal_bffcf87a9263b3074e1278606cd6591ca2f36d72685398f26ab2877ef2255a22 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bffcf87a9263b3074e1278606cd6591ca2f36d72685398f26ab2877ef2255a22->enter($__internal_bffcf87a9263b3074e1278606cd6591ca2f36d72685398f26ab2877ef2255a22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_86ef0491129e8005902b8273031239ef07a3ae8925a2338c849e3030eed4e27b->leave($__internal_86ef0491129e8005902b8273031239ef07a3ae8925a2338c849e3030eed4e27b_prof);

        
        $__internal_bffcf87a9263b3074e1278606cd6591ca2f36d72685398f26ab2877ef2255a22->leave($__internal_bffcf87a9263b3074e1278606cd6591ca2f36d72685398f26ab2877ef2255a22_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
", "@Framework/Form/form.html.php", "C:\\Users\\11500384\\Documents\\GitHub\\Web-Mobile-Project\\WP3\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form.html.php");
    }
}
