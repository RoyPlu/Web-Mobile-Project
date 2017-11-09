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
        $__internal_de59c289107d831a71504d353c96e324ea55022d4aacfc1bec6af4923cb30f1b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_de59c289107d831a71504d353c96e324ea55022d4aacfc1bec6af4923cb30f1b->enter($__internal_de59c289107d831a71504d353c96e324ea55022d4aacfc1bec6af4923cb30f1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        $__internal_702ed60ede2df58895514ceedb93116cf0782d937a7d36c8341c8a429b03bd56 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_702ed60ede2df58895514ceedb93116cf0782d937a7d36c8341c8a429b03bd56->enter($__internal_702ed60ede2df58895514ceedb93116cf0782d937a7d36c8341c8a429b03bd56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_de59c289107d831a71504d353c96e324ea55022d4aacfc1bec6af4923cb30f1b->leave($__internal_de59c289107d831a71504d353c96e324ea55022d4aacfc1bec6af4923cb30f1b_prof);

        
        $__internal_702ed60ede2df58895514ceedb93116cf0782d937a7d36c8341c8a429b03bd56->leave($__internal_702ed60ede2df58895514ceedb93116cf0782d937a7d36c8341c8a429b03bd56_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_170d11a2d5a7237f73db1e30d8e6a22404de564bc81c282d6993d59d0ed6db84 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_170d11a2d5a7237f73db1e30d8e6a22404de564bc81c282d6993d59d0ed6db84->enter($__internal_170d11a2d5a7237f73db1e30d8e6a22404de564bc81c282d6993d59d0ed6db84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_b16fd150f30f4ac216c23506f81a6a3983381d3d832cc4d38e13ae73109c0fe8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b16fd150f30f4ac216c23506f81a6a3983381d3d832cc4d38e13ae73109c0fe8->enter($__internal_b16fd150f30f4ac216c23506f81a6a3983381d3d832cc4d38e13ae73109c0fe8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_b16fd150f30f4ac216c23506f81a6a3983381d3d832cc4d38e13ae73109c0fe8->leave($__internal_b16fd150f30f4ac216c23506f81a6a3983381d3d832cc4d38e13ae73109c0fe8_prof);

        
        $__internal_170d11a2d5a7237f73db1e30d8e6a22404de564bc81c282d6993d59d0ed6db84->leave($__internal_170d11a2d5a7237f73db1e30d8e6a22404de564bc81c282d6993d59d0ed6db84_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_99f7d70f94f972d69e86e02764c870c9b5fae3a460fd2e5684f461ce99b05cf0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_99f7d70f94f972d69e86e02764c870c9b5fae3a460fd2e5684f461ce99b05cf0->enter($__internal_99f7d70f94f972d69e86e02764c870c9b5fae3a460fd2e5684f461ce99b05cf0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_bf1296e9c7673c1f201b70cb289fa04e4758822c96acb81de941a66f1538ffda = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf1296e9c7673c1f201b70cb289fa04e4758822c96acb81de941a66f1538ffda->enter($__internal_bf1296e9c7673c1f201b70cb289fa04e4758822c96acb81de941a66f1538ffda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "            <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\" integrity=\"sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u\" crossorigin=\"anonymous\">
            <link rel=\"stylesheet\" href=\"../../../web/css/location.css\">
            <link rel=\"stylesheet\" href=\"../../../web/css/error.css\">
            <link href=\"https://fonts.googleapis.com/css?family=Montserrat\" rel=\"stylesheet\">
        ";
        
        $__internal_bf1296e9c7673c1f201b70cb289fa04e4758822c96acb81de941a66f1538ffda->leave($__internal_bf1296e9c7673c1f201b70cb289fa04e4758822c96acb81de941a66f1538ffda_prof);

        
        $__internal_99f7d70f94f972d69e86e02764c870c9b5fae3a460fd2e5684f461ce99b05cf0->leave($__internal_99f7d70f94f972d69e86e02764c870c9b5fae3a460fd2e5684f461ce99b05cf0_prof);

    }

    // line 70
    public function block_body($context, array $blocks = array())
    {
        $__internal_905043e9ec3ce638e7d81ebcabb5629330c76b96e8f4d8768fd5a94e7d533c33 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_905043e9ec3ce638e7d81ebcabb5629330c76b96e8f4d8768fd5a94e7d533c33->enter($__internal_905043e9ec3ce638e7d81ebcabb5629330c76b96e8f4d8768fd5a94e7d533c33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f144009691008a5da3792de653c9b357639acffde2c879e8bb50ac79f1cbdbbb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f144009691008a5da3792de653c9b357639acffde2c879e8bb50ac79f1cbdbbb->enter($__internal_f144009691008a5da3792de653c9b357639acffde2c879e8bb50ac79f1cbdbbb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_f144009691008a5da3792de653c9b357639acffde2c879e8bb50ac79f1cbdbbb->leave($__internal_f144009691008a5da3792de653c9b357639acffde2c879e8bb50ac79f1cbdbbb_prof);

        
        $__internal_905043e9ec3ce638e7d81ebcabb5629330c76b96e8f4d8768fd5a94e7d533c33->leave($__internal_905043e9ec3ce638e7d81ebcabb5629330c76b96e8f4d8768fd5a94e7d533c33_prof);

    }

    // line 71
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_062dcff45a776d2252bb3ea492dd8db5a326a2892b2cc0b91d18bb3bdcd98f53 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_062dcff45a776d2252bb3ea492dd8db5a326a2892b2cc0b91d18bb3bdcd98f53->enter($__internal_062dcff45a776d2252bb3ea492dd8db5a326a2892b2cc0b91d18bb3bdcd98f53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_1d72c8f41ed3212be1ae659999070614e121157e795a88442e3db4d5504da1d6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d72c8f41ed3212be1ae659999070614e121157e795a88442e3db4d5504da1d6->enter($__internal_1d72c8f41ed3212be1ae659999070614e121157e795a88442e3db4d5504da1d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 72
        echo "                    <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery-1.11.1.min.js"), "html", null, true);
        echo "\"></script>
                    <script type=\"text/javascript\" src=\"";
        // line 73
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
                ";
        
        $__internal_1d72c8f41ed3212be1ae659999070614e121157e795a88442e3db4d5504da1d6->leave($__internal_1d72c8f41ed3212be1ae659999070614e121157e795a88442e3db4d5504da1d6_prof);

        
        $__internal_062dcff45a776d2252bb3ea492dd8db5a326a2892b2cc0b91d18bb3bdcd98f53->leave($__internal_062dcff45a776d2252bb3ea492dd8db5a326a2892b2cc0b91d18bb3bdcd98f53_prof);

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
