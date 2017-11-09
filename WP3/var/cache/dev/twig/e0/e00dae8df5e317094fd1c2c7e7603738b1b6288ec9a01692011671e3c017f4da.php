<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_8472a2c61093b31931e5effd2c08f217660f70ca7b1d73a848589cde042d1731 extends Twig_Template
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
        $__internal_bc0743a0c560489b0c04990386389819b83891923358e336a9b561fdb27f7b7e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bc0743a0c560489b0c04990386389819b83891923358e336a9b561fdb27f7b7e->enter($__internal_bc0743a0c560489b0c04990386389819b83891923358e336a9b561fdb27f7b7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        $__internal_48d72a467cd4dcd8cfa290bece2f4efec0634f55cd89add16ac0963cbb060f49 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_48d72a467cd4dcd8cfa290bece2f4efec0634f55cd89add16ac0963cbb060f49->enter($__internal_48d72a467cd4dcd8cfa290bece2f4efec0634f55cd89add16ac0963cbb060f49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes'); ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form); ?>
        </td>
    </tr>
    <?php endif; ?>
    <?php echo \$view['form']->block(\$form, 'form_rows'); ?>
    <?php echo \$view['form']->rest(\$form); ?>
</table>
";
        
        $__internal_bc0743a0c560489b0c04990386389819b83891923358e336a9b561fdb27f7b7e->leave($__internal_bc0743a0c560489b0c04990386389819b83891923358e336a9b561fdb27f7b7e_prof);

        
        $__internal_48d72a467cd4dcd8cfa290bece2f4efec0634f55cd89add16ac0963cbb060f49->leave($__internal_48d72a467cd4dcd8cfa290bece2f4efec0634f55cd89add16ac0963cbb060f49_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
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
        return new Twig_Source("<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes'); ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form); ?>
        </td>
    </tr>
    <?php endif; ?>
    <?php echo \$view['form']->block(\$form, 'form_rows'); ?>
    <?php echo \$view['form']->rest(\$form); ?>
</table>
", "@Framework/FormTable/form_widget_compound.html.php", "C:\\Users\\11500384\\Documents\\GitHub\\Web-Mobile-Project\\WP3\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\FormTable\\form_widget_compound.html.php");
    }
}
