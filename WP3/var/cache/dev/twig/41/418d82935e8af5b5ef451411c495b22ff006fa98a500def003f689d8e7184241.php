<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_ffc5582c0963056776c8881ebd9d9fe496b86e25f88920d82f64d5ac4a05f0f3 extends Twig_Template
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
        $__internal_acdb30533c838a8cfa1fcd77f49d1f36475edeeb77f20cff09de2ab94c3a618b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_acdb30533c838a8cfa1fcd77f49d1f36475edeeb77f20cff09de2ab94c3a618b->enter($__internal_acdb30533c838a8cfa1fcd77f49d1f36475edeeb77f20cff09de2ab94c3a618b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        $__internal_0f14f92254c66ec3eb729290ddafd8f5cdb1a41b2b518cf98197822ca138faf9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0f14f92254c66ec3eb729290ddafd8f5cdb1a41b2b518cf98197822ca138faf9->enter($__internal_0f14f92254c66ec3eb729290ddafd8f5cdb1a41b2b518cf98197822ca138faf9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_acdb30533c838a8cfa1fcd77f49d1f36475edeeb77f20cff09de2ab94c3a618b->leave($__internal_acdb30533c838a8cfa1fcd77f49d1f36475edeeb77f20cff09de2ab94c3a618b_prof);

        
        $__internal_0f14f92254c66ec3eb729290ddafd8f5cdb1a41b2b518cf98197822ca138faf9->leave($__internal_0f14f92254c66ec3eb729290ddafd8f5cdb1a41b2b518cf98197822ca138faf9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/form_row.html.php", "C:\\Users\\11500384\\Documents\\GitHub\\Web-Mobile-Project\\WP3\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_row.html.php");
    }
}
