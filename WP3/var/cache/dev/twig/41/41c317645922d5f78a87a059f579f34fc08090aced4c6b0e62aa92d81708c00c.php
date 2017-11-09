<?php

/* @WebProfiler/Profiler/header.html.twig */
class __TwigTemplate_efc7ec3f99ce1ab01ba47a03d26b548845ed52dfd4a07526e406bf4fb4d4f39c extends Twig_Template
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
        $__internal_9145aa5c49de8cd0b5c75d3bbe991c5368bf709592dcda687d55522682723ba5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9145aa5c49de8cd0b5c75d3bbe991c5368bf709592dcda687d55522682723ba5->enter($__internal_9145aa5c49de8cd0b5c75d3bbe991c5368bf709592dcda687d55522682723ba5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        $__internal_d4e6909620d1557b7ce6206dd00e1efc9e921b0ba87b2372b878b29c4f560992 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d4e6909620d1557b7ce6206dd00e1efc9e921b0ba87b2372b878b29c4f560992->enter($__internal_d4e6909620d1557b7ce6206dd00e1efc9e921b0ba87b2372b878b29c4f560992_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        // line 1
        echo "<div id=\"header\">
    <div class=\"container\">
        <h1>";
        // line 3
        echo twig_include($this->env, $context, "@WebProfiler/Icon/symfony.svg");
        echo " Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
";
        
        $__internal_9145aa5c49de8cd0b5c75d3bbe991c5368bf709592dcda687d55522682723ba5->leave($__internal_9145aa5c49de8cd0b5c75d3bbe991c5368bf709592dcda687d55522682723ba5_prof);

        
        $__internal_d4e6909620d1557b7ce6206dd00e1efc9e921b0ba87b2372b878b29c4f560992->leave($__internal_d4e6909620d1557b7ce6206dd00e1efc9e921b0ba87b2372b878b29c4f560992_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div id=\"header\">
    <div class=\"container\">
        <h1>{{ include('@WebProfiler/Icon/symfony.svg') }} Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
", "@WebProfiler/Profiler/header.html.twig", "C:\\Users\\11500384\\Documents\\GitHub\\Web-Mobile-Project\\WP3\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\header.html.twig");
    }
}
