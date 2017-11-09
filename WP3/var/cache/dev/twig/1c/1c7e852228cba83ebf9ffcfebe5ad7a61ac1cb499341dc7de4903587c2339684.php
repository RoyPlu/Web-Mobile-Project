<?php

/* @Framework/Form/container_attributes.html.php */
class __TwigTemplate_c774741d0954d72c7fd4d72d9a7e031a802163f1676f79fe8b6364e19c8446fd extends Twig_Template
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
        $__internal_f7cee13d016305322b26d1ec12324dfff8d95c5d574ddfbf8f045d4933ebf6ba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f7cee13d016305322b26d1ec12324dfff8d95c5d574ddfbf8f045d4933ebf6ba->enter($__internal_f7cee13d016305322b26d1ec12324dfff8d95c5d574ddfbf8f045d4933ebf6ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        $__internal_49e91becdbff57bf23890ad13a976f95142a8041e1f24c05832fe95dc0a18d90 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_49e91becdbff57bf23890ad13a976f95142a8041e1f24c05832fe95dc0a18d90->enter($__internal_49e91becdbff57bf23890ad13a976f95142a8041e1f24c05832fe95dc0a18d90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_f7cee13d016305322b26d1ec12324dfff8d95c5d574ddfbf8f045d4933ebf6ba->leave($__internal_f7cee13d016305322b26d1ec12324dfff8d95c5d574ddfbf8f045d4933ebf6ba_prof);

        
        $__internal_49e91becdbff57bf23890ad13a976f95142a8041e1f24c05832fe95dc0a18d90->leave($__internal_49e91becdbff57bf23890ad13a976f95142a8041e1f24c05832fe95dc0a18d90_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/container_attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
", "@Framework/Form/container_attributes.html.php", "C:\\Users\\11500384\\Documents\\GitHub\\Web-Mobile-Project\\WP3\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\container_attributes.html.php");
    }
}
