<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_b30c823462b383e5de0b753849d8c65af2aa25ed045ea5966984cd8a8bdb5673 extends Twig_Template
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
        $__internal_4cf124aaf600b7226357b2dc53589d8fe341834feb9f0283ca8ec4cd8581998a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4cf124aaf600b7226357b2dc53589d8fe341834feb9f0283ca8ec4cd8581998a->enter($__internal_4cf124aaf600b7226357b2dc53589d8fe341834feb9f0283ca8ec4cd8581998a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        $__internal_b967bdeb84ea2695ca4f5d58f3a390907bacfd4c4d53e3448134f38ee42a88e9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b967bdeb84ea2695ca4f5d58f3a390907bacfd4c4d53e3448134f38ee42a88e9->enter($__internal_b967bdeb84ea2695ca4f5d58f3a390907bacfd4c4d53e3448134f38ee42a88e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_4cf124aaf600b7226357b2dc53589d8fe341834feb9f0283ca8ec4cd8581998a->leave($__internal_4cf124aaf600b7226357b2dc53589d8fe341834feb9f0283ca8ec4cd8581998a_prof);

        
        $__internal_b967bdeb84ea2695ca4f5d58f3a390907bacfd4c4d53e3448134f38ee42a88e9->leave($__internal_b967bdeb84ea2695ca4f5d58f3a390907bacfd4c4d53e3448134f38ee42a88e9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
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
        return new Twig_Source("<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
", "@Framework/Form/choice_widget_expanded.html.php", "C:\\Users\\11500384\\Documents\\GitHub\\Web-Mobile-Project\\WP3\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\choice_widget_expanded.html.php");
    }
}
