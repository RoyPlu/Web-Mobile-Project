<?php

/* @FOSUser/Group/list_content.html.twig */
class __TwigTemplate_62168934e8d59a8312fe28585a9b10fb49a677bdf34fcb6a2ccccb83676c7df1 extends Twig_Template
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
        $__internal_e1f7d32346767d84e59a32f738155c5e7f5745f43926cafde2d1d22ee77d17ce = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e1f7d32346767d84e59a32f738155c5e7f5745f43926cafde2d1d22ee77d17ce->enter($__internal_e1f7d32346767d84e59a32f738155c5e7f5745f43926cafde2d1d22ee77d17ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/list_content.html.twig"));

        $__internal_3e8958500288906a1ca7f233cf3c2b9b31bd0884c7cb40bd9641ac48a8d71422 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3e8958500288906a1ca7f233cf3c2b9b31bd0884c7cb40bd9641ac48a8d71422->enter($__internal_3e8958500288906a1ca7f233cf3c2b9b31bd0884c7cb40bd9641ac48a8d71422_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/list_content.html.twig"));

        // line 1
        echo "<div class=\"fos_user_group_list\">
    <ul>
    ";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["groups"] ?? $this->getContext($context, "groups")));
        foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
            // line 4
            echo "        <li><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_group_show", array("groupName" => $this->getAttribute($context["group"], "getName", array(), "method"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["group"], "getName", array(), "method"), "html", null, true);
            echo "</a></li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 6
        echo "    </ul>
</div>
";
        
        $__internal_e1f7d32346767d84e59a32f738155c5e7f5745f43926cafde2d1d22ee77d17ce->leave($__internal_e1f7d32346767d84e59a32f738155c5e7f5745f43926cafde2d1d22ee77d17ce_prof);

        
        $__internal_3e8958500288906a1ca7f233cf3c2b9b31bd0884c7cb40bd9641ac48a8d71422->leave($__internal_3e8958500288906a1ca7f233cf3c2b9b31bd0884c7cb40bd9641ac48a8d71422_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/list_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 6,  33 => 4,  29 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"fos_user_group_list\">
    <ul>
    {% for group in groups %}
        <li><a href=\"{{ path('fos_user_group_show', {'groupName': group.getName()} ) }}\">{{ group.getName() }}</a></li>
    {% endfor %}
    </ul>
</div>
", "@FOSUser/Group/list_content.html.twig", "C:\\Users\\11500384\\Documents\\GitHub\\Web-Mobile-Project\\WP3\\app\\Resources\\FOSUserBundle\\views\\Group\\list_content.html.twig");
    }
}