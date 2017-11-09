<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_72906fcea3debb325d332f3cc1831730afe2e8c6e0b34177386e0180f03850f0 extends Twig_Template
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
        $__internal_b0752160cc18a24ae024ea7451eebc5b782d5f34230d3cc17c9e4588b9a093c6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b0752160cc18a24ae024ea7451eebc5b782d5f34230d3cc17c9e4588b9a093c6->enter($__internal_b0752160cc18a24ae024ea7451eebc5b782d5f34230d3cc17c9e4588b9a093c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        $__internal_501a9c75a638b82eac2e25b967dac945fef8297ba812affd650797c647b7702a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_501a9c75a638b82eac2e25b967dac945fef8297ba812affd650797c647b7702a->enter($__internal_501a9c75a638b82eac2e25b967dac945fef8297ba812affd650797c647b7702a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_b0752160cc18a24ae024ea7451eebc5b782d5f34230d3cc17c9e4588b9a093c6->leave($__internal_b0752160cc18a24ae024ea7451eebc5b782d5f34230d3cc17c9e4588b9a093c6_prof);

        
        $__internal_501a9c75a638b82eac2e25b967dac945fef8297ba812affd650797c647b7702a->leave($__internal_501a9c75a638b82eac2e25b967dac945fef8297ba812affd650797c647b7702a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
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
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/button_row.html.php", "C:\\Users\\11500384\\Documents\\GitHub\\Web-Mobile-Project\\WP3\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\button_row.html.php");
    }
}
