<?php

/* ::base.html.twig */
class __TwigTemplate_d8adfa9850bfec8e291ce4ea3ebe73a551d37a2fd71e81b00584a94726427558 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8358451111a13c7516577531edcb06c5bc4b6c969af30a018c112603edde8aa4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8358451111a13c7516577531edcb06c5bc4b6c969af30a018c112603edde8aa4->enter($__internal_8358451111a13c7516577531edcb06c5bc4b6c969af30a018c112603edde8aa4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        $__internal_33c2d5077a95cd207c98d1c6cb0f189c732b2a186821d7c6b891fa13040cacc5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_33c2d5077a95cd207c98d1c6cb0f189c732b2a186821d7c6b891fa13040cacc5->enter($__internal_33c2d5077a95cd207c98d1c6cb0f189c732b2a186821d7c6b891fa13040cacc5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 12
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />

        <style>
            body {
                font-family: 'Montserrat', sans-serif;
                background-color: #e7e5e4;
            }
        </style>
    </head>

    <body>
            <div class=\"\">

                <nav class=\"navbar navbar-inverse navbar-static-top\" role=\"navigation\">
                    <div class=\"container\">
                        <div class=\"navbar-header\">
                            <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#navbar\" aria-expanded=\"false\" aria-controls=\"navbar\">
                                <span class=\"sr-only\">Toggle navigation</span>
                                <span class=\"icon-bar\"></span>
                                <span class=\"icon-bar\"></span>
                                <span class=\"icon-bar\"></span>
                            </button>
                            <a class=\"navbar-brand\" href=\"../\">Home</a>
                        </div>
                        <div id=\"navbar\" class=\"navbar-collapse collapse\">
                            <ul class=\"nav navbar-nav\">
                                <li class=\"\"><a href=\"../locations\">Locations</a></li>
                                ";
        // line 39
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN")) {
            // line 40
            echo "                                <li class=\"\"><a href=\"../admin\">Admin page</a></li>
                                ";
        }
        // line 42
        echo "                            </ul>
                            ";
        // line 43
        if ($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array())) {
            // line 44
            echo "                                <ul class=\"nav pull-right\">
                                    <h3 style=\"color: whitesmoke\">";
            // line 45
            echo twig_escape_filter($this->env, $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "html", null, true);
            echo " <a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
            echo "\">
                                            <span style=\"font-size: 0.6em;\">Logout</span>
                                        </a></h3>

                                </ul>
                                ";
        } else {
            // line 51
            echo "                                    <form class=\"navbar-form navbar-right\" role=\"search\" action=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_check");
            echo "\" method=\"post\">
                                        <div class=\"form-group\">
                                            <input type=\"hidden\" name=\"_csrf_token\" value=\"";
            // line 53
            echo twig_escape_filter($this->env, $this->getAttribute(($context["fos_csrf_provider"] ?? $this->getContext($context, "fos_csrf_provider")), "refreshToken", array(0 => "authenticate"), "method"), "html", null, true);
            echo "\" />
                                            <input type=\"text\" class=\"form-control\" id=\"username\" name=\"_username\" placeholder=\"Username\">
                                        </div>
                                        <div class=\"form-group\">
                                            <input type=\"password\" class=\"form-control\" id=\"password\" name=\"_password\" placeholder=\"Password\">
                                        </div>
                                        <button type=\"submit\" class=\"btn btn-default\">Sign In</button>
                                        <a href=\"";
            // line 60
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_registration_register");
            echo "\">New user?</a>
                                    </form>

                            ";
        }
        // line 64
        echo "
                        </div>
                    </div>
                </nav>


                ";
        // line 70
        $this->displayBlock('body', $context, $blocks);
        // line 71
        echo "                ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 75
        echo "            </div>
    </body>
    <!-- Latest compiled and minified JavaScript -->
    <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\" integrity=\"sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa\" crossorigin=\"anonymous\"></script>
</html>
";
        
        $__internal_8358451111a13c7516577531edcb06c5bc4b6c969af30a018c112603edde8aa4->leave($__internal_8358451111a13c7516577531edcb06c5bc4b6c969af30a018c112603edde8aa4_prof);

        
        $__internal_33c2d5077a95cd207c98d1c6cb0f189c732b2a186821d7c6b891fa13040cacc5->leave($__internal_33c2d5077a95cd207c98d1c6cb0f189c732b2a186821d7c6b891fa13040cacc5_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_b6af7100d14c8f24f134159c9fea42d74a52727578766ef14b5a866ef8df04b3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b6af7100d14c8f24f134159c9fea42d74a52727578766ef14b5a866ef8df04b3->enter($__internal_b6af7100d14c8f24f134159c9fea42d74a52727578766ef14b5a866ef8df04b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_9d1ee91699cc9bb33abfc6e8b054d3573f2a22efaa08f9fab7fc17c54dc9f8e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d1ee91699cc9bb33abfc6e8b054d3573f2a22efaa08f9fab7fc17c54dc9f8e4->enter($__internal_9d1ee91699cc9bb33abfc6e8b054d3573f2a22efaa08f9fab7fc17c54dc9f8e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_9d1ee91699cc9bb33abfc6e8b054d3573f2a22efaa08f9fab7fc17c54dc9f8e4->leave($__internal_9d1ee91699cc9bb33abfc6e8b054d3573f2a22efaa08f9fab7fc17c54dc9f8e4_prof);

        
        $__internal_b6af7100d14c8f24f134159c9fea42d74a52727578766ef14b5a866ef8df04b3->leave($__internal_b6af7100d14c8f24f134159c9fea42d74a52727578766ef14b5a866ef8df04b3_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_fdbc2fe7c5d039c678c72df46dafc5fad25df59ea1891ddd01a7b77c3517fde2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fdbc2fe7c5d039c678c72df46dafc5fad25df59ea1891ddd01a7b77c3517fde2->enter($__internal_fdbc2fe7c5d039c678c72df46dafc5fad25df59ea1891ddd01a7b77c3517fde2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_fef91828ebc67dad63a3f2e554e5b74c09d57ab147f3dd6088148ea84c63ddd6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fef91828ebc67dad63a3f2e554e5b74c09d57ab147f3dd6088148ea84c63ddd6->enter($__internal_fef91828ebc67dad63a3f2e554e5b74c09d57ab147f3dd6088148ea84c63ddd6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "            <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\" integrity=\"sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u\" crossorigin=\"anonymous\">
            <link rel=\"stylesheet\" href=\"../../../web/css/location.css\">
            <link rel=\"stylesheet\" href=\"../../../web/css/error.css\">
            <link href=\"https://fonts.googleapis.com/css?family=Montserrat\" rel=\"stylesheet\">
        ";
        
        $__internal_fef91828ebc67dad63a3f2e554e5b74c09d57ab147f3dd6088148ea84c63ddd6->leave($__internal_fef91828ebc67dad63a3f2e554e5b74c09d57ab147f3dd6088148ea84c63ddd6_prof);

        
        $__internal_fdbc2fe7c5d039c678c72df46dafc5fad25df59ea1891ddd01a7b77c3517fde2->leave($__internal_fdbc2fe7c5d039c678c72df46dafc5fad25df59ea1891ddd01a7b77c3517fde2_prof);

    }

    // line 70
    public function block_body($context, array $blocks = array())
    {
        $__internal_652e087c4f8a383e84bfcb4bf4822717cb5cd9775c00cdcfb6f187166c05df13 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_652e087c4f8a383e84bfcb4bf4822717cb5cd9775c00cdcfb6f187166c05df13->enter($__internal_652e087c4f8a383e84bfcb4bf4822717cb5cd9775c00cdcfb6f187166c05df13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_b194bd2f5cbb4ed7727d91bf49016da11d20bfa92b40b1f4e5d6b4029937b744 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b194bd2f5cbb4ed7727d91bf49016da11d20bfa92b40b1f4e5d6b4029937b744->enter($__internal_b194bd2f5cbb4ed7727d91bf49016da11d20bfa92b40b1f4e5d6b4029937b744_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_b194bd2f5cbb4ed7727d91bf49016da11d20bfa92b40b1f4e5d6b4029937b744->leave($__internal_b194bd2f5cbb4ed7727d91bf49016da11d20bfa92b40b1f4e5d6b4029937b744_prof);

        
        $__internal_652e087c4f8a383e84bfcb4bf4822717cb5cd9775c00cdcfb6f187166c05df13->leave($__internal_652e087c4f8a383e84bfcb4bf4822717cb5cd9775c00cdcfb6f187166c05df13_prof);

    }

    // line 71
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_72fbb20315b6041556c6195576c9ac4c42b0c8fe395a2b3a1096ae85dd6dcbc4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_72fbb20315b6041556c6195576c9ac4c42b0c8fe395a2b3a1096ae85dd6dcbc4->enter($__internal_72fbb20315b6041556c6195576c9ac4c42b0c8fe395a2b3a1096ae85dd6dcbc4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_b321ec4be4ba72d8d4a7efd0b63c24f4a2fa8227263e3a42a3715f38fbb80b85 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b321ec4be4ba72d8d4a7efd0b63c24f4a2fa8227263e3a42a3715f38fbb80b85->enter($__internal_b321ec4be4ba72d8d4a7efd0b63c24f4a2fa8227263e3a42a3715f38fbb80b85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 72
        echo "                    <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery-1.11.1.min.js"), "html", null, true);
        echo "\"></script>
                    <script type=\"text/javascript\" src=\"";
        // line 73
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
                ";
        
        $__internal_b321ec4be4ba72d8d4a7efd0b63c24f4a2fa8227263e3a42a3715f38fbb80b85->leave($__internal_b321ec4be4ba72d8d4a7efd0b63c24f4a2fa8227263e3a42a3715f38fbb80b85_prof);

        
        $__internal_72fbb20315b6041556c6195576c9ac4c42b0c8fe395a2b3a1096ae85dd6dcbc4->leave($__internal_72fbb20315b6041556c6195576c9ac4c42b0c8fe395a2b3a1096ae85dd6dcbc4_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  220 => 73,  215 => 72,  206 => 71,  189 => 70,  175 => 7,  166 => 6,  148 => 5,  133 => 75,  130 => 71,  128 => 70,  120 => 64,  113 => 60,  103 => 53,  97 => 51,  86 => 45,  83 => 44,  81 => 43,  78 => 42,  74 => 40,  72 => 39,  41 => 12,  39 => 6,  35 => 5,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}
            <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\" integrity=\"sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u\" crossorigin=\"anonymous\">
            <link rel=\"stylesheet\" href=\"../../../web/css/location.css\">
            <link rel=\"stylesheet\" href=\"../../../web/css/error.css\">
            <link href=\"https://fonts.googleapis.com/css?family=Montserrat\" rel=\"stylesheet\">
        {% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />

        <style>
            body {
                font-family: 'Montserrat', sans-serif;
                background-color: #e7e5e4;
            }
        </style>
    </head>

    <body>
            <div class=\"\">

                <nav class=\"navbar navbar-inverse navbar-static-top\" role=\"navigation\">
                    <div class=\"container\">
                        <div class=\"navbar-header\">
                            <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#navbar\" aria-expanded=\"false\" aria-controls=\"navbar\">
                                <span class=\"sr-only\">Toggle navigation</span>
                                <span class=\"icon-bar\"></span>
                                <span class=\"icon-bar\"></span>
                                <span class=\"icon-bar\"></span>
                            </button>
                            <a class=\"navbar-brand\" href=\"../\">Home</a>
                        </div>
                        <div id=\"navbar\" class=\"navbar-collapse collapse\">
                            <ul class=\"nav navbar-nav\">
                                <li class=\"\"><a href=\"../locations\">Locations</a></li>
                                {% if is_granted('ROLE_ADMIN') %}
                                <li class=\"\"><a href=\"../admin\">Admin page</a></li>
                                {% endif %}
                            </ul>
                            {% if app.user %}
                                <ul class=\"nav pull-right\">
                                    <h3 style=\"color: whitesmoke\">{{ app.user }} <a href=\"{{  path(\"fos_user_security_logout\") }}\">
                                            <span style=\"font-size: 0.6em;\">Logout</span>
                                        </a></h3>

                                </ul>
                                {%  else %}
                                    <form class=\"navbar-form navbar-right\" role=\"search\" action=\"{{ path(\"fos_user_security_check\") }}\" method=\"post\">
                                        <div class=\"form-group\">
                                            <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ fos_csrf_provider.refreshToken('authenticate') }}\" />
                                            <input type=\"text\" class=\"form-control\" id=\"username\" name=\"_username\" placeholder=\"Username\">
                                        </div>
                                        <div class=\"form-group\">
                                            <input type=\"password\" class=\"form-control\" id=\"password\" name=\"_password\" placeholder=\"Password\">
                                        </div>
                                        <button type=\"submit\" class=\"btn btn-default\">Sign In</button>
                                        <a href=\"{{path(\"fos_user_registration_register\") }}\">New user?</a>
                                    </form>

                            {% endif %}

                        </div>
                    </div>
                </nav>


                {% block body %}{% endblock %}
                {% block javascripts %}
                    <script type=\"text/javascript\" src=\"{{asset('js/jquery-1.11.1.min.js')}}\"></script>
                    <script type=\"text/javascript\" src=\"{{asset('js/bootstrap.min.js')}}\"></script>
                {% endblock %}
            </div>
    </body>
    <!-- Latest compiled and minified JavaScript -->
    <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\" integrity=\"sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa\" crossorigin=\"anonymous\"></script>
</html>
", "::base.html.twig", "C:\\Users\\11500384\\Documents\\GitHub\\Web-Mobile-Project\\WP3\\app/Resources\\views/base.html.twig");
    }
}
