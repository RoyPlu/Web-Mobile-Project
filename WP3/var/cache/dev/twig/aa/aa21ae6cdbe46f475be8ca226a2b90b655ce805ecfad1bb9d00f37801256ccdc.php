<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_77a1fdcb3d733a62eca66f75da0ab332c7a0043cd01c9cce54e958e43fc839a9 extends Twig_Template
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
        $__internal_c8210b0ba02215d0b2b6bc779781d7e39485008efb956e93d02eb8b554655347 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c8210b0ba02215d0b2b6bc779781d7e39485008efb956e93d02eb8b554655347->enter($__internal_c8210b0ba02215d0b2b6bc779781d7e39485008efb956e93d02eb8b554655347_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        $__internal_3ade860f801e1308a30643b19ff5913b760415120be64f129a7a1f13bc36a66d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ade860f801e1308a30643b19ff5913b760415120be64f129a7a1f13bc36a66d->enter($__internal_3ade860f801e1308a30643b19ff5913b760415120be64f129a7a1f13bc36a66d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_c8210b0ba02215d0b2b6bc779781d7e39485008efb956e93d02eb8b554655347->leave($__internal_c8210b0ba02215d0b2b6bc779781d7e39485008efb956e93d02eb8b554655347_prof);

        
        $__internal_3ade860f801e1308a30643b19ff5913b760415120be64f129a7a1f13bc36a66d->leave($__internal_3ade860f801e1308a30643b19ff5913b760415120be64f129a7a1f13bc36a66d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
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
        return new Twig_Source("<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
", "@Framework/Form/choice_widget.html.php", "C:\\Users\\11500384\\Documents\\GitHub\\Web-Mobile-Project\\WP3\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\choice_widget.html.php");
    }
}
