<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_79f4f975998be03add3fce45c7240a150ebaa70fa5c800b3164b5c427dab3f43 extends Twig_Template
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
        $__internal_0c4961090036e3e4d9104f9d7ec19b5df442db8eee136d0089695618d19f5e14 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0c4961090036e3e4d9104f9d7ec19b5df442db8eee136d0089695618d19f5e14->enter($__internal_0c4961090036e3e4d9104f9d7ec19b5df442db8eee136d0089695618d19f5e14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        $__internal_1a93724ca552923f2ce4a7aa2a46ac8caf8c29d06427bd8f3d9a82f0bffb9a78 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a93724ca552923f2ce4a7aa2a46ac8caf8c29d06427bd8f3d9a82f0bffb9a78->enter($__internal_1a93724ca552923f2ce4a7aa2a46ac8caf8c29d06427bd8f3d9a82f0bffb9a78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form); ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form); ?>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
";
        
        $__internal_0c4961090036e3e4d9104f9d7ec19b5df442db8eee136d0089695618d19f5e14->leave($__internal_0c4961090036e3e4d9104f9d7ec19b5df442db8eee136d0089695618d19f5e14_prof);

        
        $__internal_1a93724ca552923f2ce4a7aa2a46ac8caf8c29d06427bd8f3d9a82f0bffb9a78->leave($__internal_1a93724ca552923f2ce4a7aa2a46ac8caf8c29d06427bd8f3d9a82f0bffb9a78_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
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
        return new Twig_Source("<tr>
    <td>
        <?php echo \$view['form']->label(\$form); ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form); ?>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
", "@Framework/FormTable/form_row.html.php", "C:\\Users\\11500384\\Documents\\GitHub\\Web-Mobile-Project\\WP3\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\FormTable\\form_row.html.php");
    }
}
