<?php

/* @Framework/Form/widget_container_attributes.html.php */
class __TwigTemplate_33c3695c3499b65e7e6e7620fc5fe4800b6f710eed7c122dd53b52dac3e5ac05 extends Twig_Template
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
        $__internal_71957551277ca83dfb77ae500ad0745787f1e9157915d2a53f36b14da58ae799 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_71957551277ca83dfb77ae500ad0745787f1e9157915d2a53f36b14da58ae799->enter($__internal_71957551277ca83dfb77ae500ad0745787f1e9157915d2a53f36b14da58ae799_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        $__internal_f1c67eadcca13c7a8b55fb02d15e85043906f71ea835d7bc5a8709babae2cafa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f1c67eadcca13c7a8b55fb02d15e85043906f71ea835d7bc5a8709babae2cafa->enter($__internal_f1c67eadcca13c7a8b55fb02d15e85043906f71ea835d7bc5a8709babae2cafa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        // line 1
        echo "<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_71957551277ca83dfb77ae500ad0745787f1e9157915d2a53f36b14da58ae799->leave($__internal_71957551277ca83dfb77ae500ad0745787f1e9157915d2a53f36b14da58ae799_prof);

        
        $__internal_f1c67eadcca13c7a8b55fb02d15e85043906f71ea835d7bc5a8709babae2cafa->leave($__internal_f1c67eadcca13c7a8b55fb02d15e85043906f71ea835d7bc5a8709babae2cafa_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/widget_container_attributes.html.php";
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
        return new Twig_Source("<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/widget_container_attributes.html.php", "C:\\Users\\11500384\\Documents\\GitHub\\Web-Mobile-Project\\WP3\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\widget_container_attributes.html.php");
    }
}
