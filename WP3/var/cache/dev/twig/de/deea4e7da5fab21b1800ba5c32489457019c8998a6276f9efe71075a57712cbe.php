<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_2469ecb5cf3e075367343b6f22045d4dcf2577b9a0f902fada5445d8fb8ea0f9 extends Twig_Template
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
        $__internal_ee1f1732f453eb52800a21e0add3fbc940bb5d0fa029021504063598c4eb1294 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ee1f1732f453eb52800a21e0add3fbc940bb5d0fa029021504063598c4eb1294->enter($__internal_ee1f1732f453eb52800a21e0add3fbc940bb5d0fa029021504063598c4eb1294_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        $__internal_f310076fe517120f34480bffe2fe18e5e27de82c9d9681bc1de32880029a3df5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f310076fe517120f34480bffe2fe18e5e27de82c9d9681bc1de32880029a3df5->enter($__internal_f310076fe517120f34480bffe2fe18e5e27de82c9d9681bc1de32880029a3df5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_ee1f1732f453eb52800a21e0add3fbc940bb5d0fa029021504063598c4eb1294->leave($__internal_ee1f1732f453eb52800a21e0add3fbc940bb5d0fa029021504063598c4eb1294_prof);

        
        $__internal_f310076fe517120f34480bffe2fe18e5e27de82c9d9681bc1de32880029a3df5->leave($__internal_f310076fe517120f34480bffe2fe18e5e27de82c9d9681bc1de32880029a3df5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
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
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
", "@Framework/Form/form_widget_compound.html.php", "C:\\Users\\11500384\\Documents\\GitHub\\Web-Mobile-Project\\WP3\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_widget_compound.html.php");
    }
}
