<?php

/* WebProfilerBundle:Profiler:header.html.twig */
class __TwigTemplate_4370a46a3e30ec23bae811ad83a0c702c68ac13fd61b69ae1f423c25dc0f85f9 extends Twig_Template
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
        $__internal_e0b2d2cd0b916ded819c7c954327c9f5aa6f882d75f9330d6aaa046f1684354b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e0b2d2cd0b916ded819c7c954327c9f5aa6f882d75f9330d6aaa046f1684354b->enter($__internal_e0b2d2cd0b916ded819c7c954327c9f5aa6f882d75f9330d6aaa046f1684354b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:header.html.twig"));

        $__internal_d34c2bf564f335cd85eac77e3caca77946f651beadbd35d7c3c75ca51a30fe5f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d34c2bf564f335cd85eac77e3caca77946f651beadbd35d7c3c75ca51a30fe5f->enter($__internal_d34c2bf564f335cd85eac77e3caca77946f651beadbd35d7c3c75ca51a30fe5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:header.html.twig"));

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
        
        $__internal_e0b2d2cd0b916ded819c7c954327c9f5aa6f882d75f9330d6aaa046f1684354b->leave($__internal_e0b2d2cd0b916ded819c7c954327c9f5aa6f882d75f9330d6aaa046f1684354b_prof);

        
        $__internal_d34c2bf564f335cd85eac77e3caca77946f651beadbd35d7c3c75ca51a30fe5f->leave($__internal_d34c2bf564f335cd85eac77e3caca77946f651beadbd35d7c3c75ca51a30fe5f_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:header.html.twig";
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
", "WebProfilerBundle:Profiler:header.html.twig", "C:\\Users\\11500384\\Documents\\GitHub\\Web-Mobile-Project\\WP3\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/header.html.twig");
    }
}
