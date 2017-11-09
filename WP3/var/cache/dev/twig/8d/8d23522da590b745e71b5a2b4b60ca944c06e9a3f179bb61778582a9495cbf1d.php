<?php

/* @Framework/FormTable/button_row.html.php */
class __TwigTemplate_77c469f91eb7870c6523f95c5075bbae8c2dbe0ea18c6f1fa53f85e31cefd268 extends Twig_Template
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
        $__internal_e6a239b23280ed8e0ad4478d7810067d3b585f581702a98454ee1d111602557a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e6a239b23280ed8e0ad4478d7810067d3b585f581702a98454ee1d111602557a->enter($__internal_e6a239b23280ed8e0ad4478d7810067d3b585f581702a98454ee1d111602557a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        $__internal_651845655967f69887087fc3337afb62ccab76f30788c5ea7fc4ec31691917a1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_651845655967f69887087fc3337afb62ccab76f30788c5ea7fc4ec31691917a1->enter($__internal_651845655967f69887087fc3337afb62ccab76f30788c5ea7fc4ec31691917a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
";
        
        $__internal_e6a239b23280ed8e0ad4478d7810067d3b585f581702a98454ee1d111602557a->leave($__internal_e6a239b23280ed8e0ad4478d7810067d3b585f581702a98454ee1d111602557a_prof);

        
        $__internal_651845655967f69887087fc3337afb62ccab76f30788c5ea7fc4ec31691917a1->leave($__internal_651845655967f69887087fc3337afb62ccab76f30788c5ea7fc4ec31691917a1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/button_row.html.php";
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
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
", "@Framework/FormTable/button_row.html.php", "C:\\Users\\11500384\\Documents\\GitHub\\Web-Mobile-Project\\WP3\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\FormTable\\button_row.html.php");
    }
}
