<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_3c0ae02049e09568dd4caa191fe4cca5c4bb1803dedb579cb689d27449e2dba2 extends Twig_Template
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
        $__internal_6611bb286d82a9f8e72e818f43f2b3c189ee865536d95b26f04201066233dd0b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6611bb286d82a9f8e72e818f43f2b3c189ee865536d95b26f04201066233dd0b->enter($__internal_6611bb286d82a9f8e72e818f43f2b3c189ee865536d95b26f04201066233dd0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        $__internal_748190b6a657a52b32454058517d4ef1edacca854fe812f742d86213e7d7a3c3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_748190b6a657a52b32454058517d4ef1edacca854fe812f742d86213e7d7a3c3->enter($__internal_748190b6a657a52b32454058517d4ef1edacca854fe812f742d86213e7d7a3c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
";
        
        $__internal_6611bb286d82a9f8e72e818f43f2b3c189ee865536d95b26f04201066233dd0b->leave($__internal_6611bb286d82a9f8e72e818f43f2b3c189ee865536d95b26f04201066233dd0b_prof);

        
        $__internal_748190b6a657a52b32454058517d4ef1edacca854fe812f742d86213e7d7a3c3->leave($__internal_748190b6a657a52b32454058517d4ef1edacca854fe812f742d86213e7d7a3c3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
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
        return new Twig_Source("<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
", "@Framework/FormTable/hidden_row.html.php", "C:\\Users\\11500384\\Documents\\GitHub\\Web-Mobile-Project\\WP3\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\FormTable\\hidden_row.html.php");
    }
}
