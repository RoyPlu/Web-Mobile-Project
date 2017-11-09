<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_2d896137cb2172f6bbf2d7c8aa0f18ca5835c9a54ad72c7165ac4ba7bd3bd871 extends Twig_Template
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
        $__internal_4298c47f4388c7a538981419397bf1cdc993a6ae80bf910009cc9e1081f99269 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4298c47f4388c7a538981419397bf1cdc993a6ae80bf910009cc9e1081f99269->enter($__internal_4298c47f4388c7a538981419397bf1cdc993a6ae80bf910009cc9e1081f99269_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        $__internal_da3b3927a67ba42c39ccef672fbc94f2fe70df73208a28ff5f06a1a241947140 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da3b3927a67ba42c39ccef672fbc94f2fe70df73208a28ff5f06a1a241947140->enter($__internal_da3b3927a67ba42c39ccef672fbc94f2fe70df73208a28ff5f06a1a241947140_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_4298c47f4388c7a538981419397bf1cdc993a6ae80bf910009cc9e1081f99269->leave($__internal_4298c47f4388c7a538981419397bf1cdc993a6ae80bf910009cc9e1081f99269_prof);

        
        $__internal_da3b3927a67ba42c39ccef672fbc94f2fe70df73208a28ff5f06a1a241947140->leave($__internal_da3b3927a67ba42c39ccef672fbc94f2fe70df73208a28ff5f06a1a241947140_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/search_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
", "@Framework/Form/search_widget.html.php", "C:\\Users\\11500384\\Documents\\GitHub\\Web-Mobile-Project\\WP3\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\search_widget.html.php");
    }
}
