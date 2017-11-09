<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_4c71843004658eea480d1426f79a80653b7afafba1c2049cb195499103285b50 extends Twig_Template
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
        $__internal_963b35a87a8949cda74399c6c71e15000fddd53dbd651b58075a6c63818ff056 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_963b35a87a8949cda74399c6c71e15000fddd53dbd651b58075a6c63818ff056->enter($__internal_963b35a87a8949cda74399c6c71e15000fddd53dbd651b58075a6c63818ff056_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        $__internal_4d35551bdc52bf2d69d00e73d36d4a7d344ebaa97e6a71351c4f68a6130fdb53 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d35551bdc52bf2d69d00e73d36d4a7d344ebaa97e6a71351c4f68a6130fdb53->enter($__internal_4d35551bdc52bf2d69d00e73d36d4a7d344ebaa97e6a71351c4f68a6130fdb53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_963b35a87a8949cda74399c6c71e15000fddd53dbd651b58075a6c63818ff056->leave($__internal_963b35a87a8949cda74399c6c71e15000fddd53dbd651b58075a6c63818ff056_prof);

        
        $__internal_4d35551bdc52bf2d69d00e73d36d4a7d344ebaa97e6a71351c4f68a6130fdb53->leave($__internal_4d35551bdc52bf2d69d00e73d36d4a7d344ebaa97e6a71351c4f68a6130fdb53_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
", "@Framework/Form/form_rows.html.php", "C:\\Users\\11500384\\Documents\\GitHub\\Web-Mobile-Project\\WP3\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_rows.html.php");
    }
}
