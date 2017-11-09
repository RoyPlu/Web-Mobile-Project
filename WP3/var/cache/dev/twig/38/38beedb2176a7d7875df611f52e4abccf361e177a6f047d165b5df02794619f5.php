<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_4e01af8ce8baf523efd5a8898ea2d69e264b4291a85d43acd3eb2ccb02c28d2e extends Twig_Template
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
        $__internal_f2a1b4472909f5521c3e5c62bbba92a0a20a75448e27c52b5f09b619cd1a1ced = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f2a1b4472909f5521c3e5c62bbba92a0a20a75448e27c52b5f09b619cd1a1ced->enter($__internal_f2a1b4472909f5521c3e5c62bbba92a0a20a75448e27c52b5f09b619cd1a1ced_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_8f8cce6e53a4704073553558bf62fcffe2c7c496f4c08d3aa9f4b71c66a288b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8f8cce6e53a4704073553558bf62fcffe2c7c496f4c08d3aa9f4b71c66a288b5->enter($__internal_8f8cce6e53a4704073553558bf62fcffe2c7c496f4c08d3aa9f4b71c66a288b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_f2a1b4472909f5521c3e5c62bbba92a0a20a75448e27c52b5f09b619cd1a1ced->leave($__internal_f2a1b4472909f5521c3e5c62bbba92a0a20a75448e27c52b5f09b619cd1a1ced_prof);

        
        $__internal_8f8cce6e53a4704073553558bf62fcffe2c7c496f4c08d3aa9f4b71c66a288b5->leave($__internal_8f8cce6e53a4704073553558bf62fcffe2c7c496f4c08d3aa9f4b71c66a288b5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "C:\\Users\\11500384\\Documents\\GitHub\\Web-Mobile-Project\\WP3\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\submit_widget.html.php");
    }
}
