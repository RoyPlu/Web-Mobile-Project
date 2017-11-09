<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_02e99a03a2ef687a1beb8cd3666febd37eb1a3152f5d92d75f6391122bca1244 extends Twig_Template
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
        $__internal_60bbe5e4d74ea562a3f2881e448ce366b4963575d3565bd674c21693edc064da = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_60bbe5e4d74ea562a3f2881e448ce366b4963575d3565bd674c21693edc064da->enter($__internal_60bbe5e4d74ea562a3f2881e448ce366b4963575d3565bd674c21693edc064da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        $__internal_c63d8e533055f2a27b3c0e8848fcb6dd71cab86835453495ed28150398011998 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c63d8e533055f2a27b3c0e8848fcb6dd71cab86835453495ed28150398011998->enter($__internal_c63d8e533055f2a27b3c0e8848fcb6dd71cab86835453495ed28150398011998_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_60bbe5e4d74ea562a3f2881e448ce366b4963575d3565bd674c21693edc064da->leave($__internal_60bbe5e4d74ea562a3f2881e448ce366b4963575d3565bd674c21693edc064da_prof);

        
        $__internal_c63d8e533055f2a27b3c0e8848fcb6dd71cab86835453495ed28150398011998->leave($__internal_c63d8e533055f2a27b3c0e8848fcb6dd71cab86835453495ed28150398011998_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
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
        return new Twig_Source("<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
", "@Framework/Form/form_end.html.php", "C:\\Users\\11500384\\Documents\\GitHub\\Web-Mobile-Project\\WP3\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_end.html.php");
    }
}
