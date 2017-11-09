<?php

/* @Framework/Form/button_attributes.html.php */
class __TwigTemplate_8e3ec9b4855ffd5c7a52c5a7c578d283896ab36df9764c55c6501d798818eb89 extends Twig_Template
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
        $__internal_2e84e3c012f394ba0e1b311d82dab2b6718c142d43c3edbfb29c1e9823c5cadd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2e84e3c012f394ba0e1b311d82dab2b6718c142d43c3edbfb29c1e9823c5cadd->enter($__internal_2e84e3c012f394ba0e1b311d82dab2b6718c142d43c3edbfb29c1e9823c5cadd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        $__internal_b2f01a30c51c4b773ad1329664c02672c38ad3317494894810b347a7f62fa6cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b2f01a30c51c4b773ad1329664c02672c38ad3317494894810b347a7f62fa6cd->enter($__internal_b2f01a30c51c4b773ad1329664c02672c38ad3317494894810b347a7f62fa6cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_2e84e3c012f394ba0e1b311d82dab2b6718c142d43c3edbfb29c1e9823c5cadd->leave($__internal_2e84e3c012f394ba0e1b311d82dab2b6718c142d43c3edbfb29c1e9823c5cadd_prof);

        
        $__internal_b2f01a30c51c4b773ad1329664c02672c38ad3317494894810b347a7f62fa6cd->leave($__internal_b2f01a30c51c4b773ad1329664c02672c38ad3317494894810b347a7f62fa6cd_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_attributes.html.php";
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
        return new Twig_Source("id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/button_attributes.html.php", "C:\\Users\\11500384\\Documents\\GitHub\\Web-Mobile-Project\\WP3\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\button_attributes.html.php");
    }
}
