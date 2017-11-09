<?php

/* base.html.twig */
class __TwigTemplate_551c2a089b13ddf4e0ac2282d0eb2712a2ea82e32b4a08ce8ba8a82a0817cbe0 extends Twig_Template
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
        $__internal_9ec6dc023dcce273c91eaffdf7fbe8e85bb2591e6567bd0d4120b974506fbccb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9ec6dc023dcce273c91eaffdf7fbe8e85bb2591e6567bd0d4120b974506fbccb->enter($__internal_9ec6dc023dcce273c91eaffdf7fbe8e85bb2591e6567bd0d4120b974506fbccb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_a565b137a3cfbeedf92c405819d0e1e87bff6f9fb38aaa67474dcee37814dd54 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a565b137a3cfbeedf92c405819d0e1e87bff6f9fb38aaa67474dcee37814dd54->enter($__internal_a565b137a3cfbeedf92c405819d0e1e87bff6f9fb38aaa67474dcee37814dd54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_9ec6dc023dcce273c91eaffdf7fbe8e85bb2591e6567bd0d4120b974506fbccb->leave($__internal_9ec6dc023dcce273c91eaffdf7fbe8e85bb2591e6567bd0d4120b974506fbccb_prof);

        
        $__internal_a565b137a3cfbeedf92c405819d0e1e87bff6f9fb38aaa67474dcee37814dd54->leave($__internal_a565b137a3cfbeedf92c405819d0e1e87bff6f9fb38aaa67474dcee37814dd54_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_f806b1544aad4243829e368e9c6f2bc16d276582d6d706b4a3d3a8fd86516b9d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f806b1544aad4243829e368e9c6f2bc16d276582d6d706b4a3d3a8fd86516b9d->enter($__internal_f806b1544aad4243829e368e9c6f2bc16d276582d6d706b4a3d3a8fd86516b9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_e02d9247381801fcdf937f3108526e617fbf8934c440245919971fae40fc9afe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e02d9247381801fcdf937f3108526e617fbf8934c440245919971fae40fc9afe->enter($__internal_e02d9247381801fcdf937f3108526e617fbf8934c440245919971fae40fc9afe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_e02d9247381801fcdf937f3108526e617fbf8934c440245919971fae40fc9afe->leave($__internal_e02d9247381801fcdf937f3108526e617fbf8934c440245919971fae40fc9afe_prof);

        
        $__internal_f806b1544aad4243829e368e9c6f2bc16d276582d6d706b4a3d3a8fd86516b9d->leave($__internal_f806b1544aad4243829e368e9c6f2bc16d276582d6d706b4a3d3a8fd86516b9d_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_fbc4d7ad7b5aee1cde7e45f8d2c502ab41eb8a1d9049e39a341aec25cf40865f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fbc4d7ad7b5aee1cde7e45f8d2c502ab41eb8a1d9049e39a341aec25cf40865f->enter($__internal_fbc4d7ad7b5aee1cde7e45f8d2c502ab41eb8a1d9049e39a341aec25cf40865f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_5d70715c496f5c013b8d4450f8913e2459ab8977277d054e7c914d4f05d9bfe3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5d70715c496f5c013b8d4450f8913e2459ab8977277d054e7c914d4f05d9bfe3->enter($__internal_5d70715c496f5c013b8d4450f8913e2459ab8977277d054e7c914d4f05d9bfe3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "            <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\" integrity=\"sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u\" crossorigin=\"anonymous\">
            <link rel=\"stylesheet\" href=\"../../../web/css/location.css\">
            <link rel=\"stylesheet\" href=\"../../../web/css/error.css\">
            <link href=\"https://fonts.googleapis.com/css?family=Montserrat\" rel=\"stylesheet\">
        ";
        
        $__internal_5d70715c496f5c013b8d4450f8913e2459ab8977277d054e7c914d4f05d9bfe3->leave($__internal_5d70715c496f5c013b8d4450f8913e2459ab8977277d054e7c914d4f05d9bfe3_prof);

        
        $__internal_fbc4d7ad7b5aee1cde7e45f8d2c502ab41eb8a1d9049e39a341aec25cf40865f->leave($__internal_fbc4d7ad7b5aee1cde7e45f8d2c502ab41eb8a1d9049e39a341aec25cf40865f_prof);

    }

    // line 70
    public function block_body($context, array $blocks = array())
    {
        $__internal_75842a87253d78886f2b601efc629e9dcfd6c5041a3c394e244c86c6ed74e49f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_75842a87253d78886f2b601efc629e9dcfd6c5041a3c394e244c86c6ed74e49f->enter($__internal_75842a87253d78886f2b601efc629e9dcfd6c5041a3c394e244c86c6ed74e49f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_52362743d6dbc07a941aca981bb0ba2db9a4ad4577e5071c1f48beaf179f303d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_52362743d6dbc07a941aca981bb0ba2db9a4ad4577e5071c1f48beaf179f303d->enter($__internal_52362743d6dbc07a941aca981bb0ba2db9a4ad4577e5071c1f48beaf179f303d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_52362743d6dbc07a941aca981bb0ba2db9a4ad4577e5071c1f48beaf179f303d->leave($__internal_52362743d6dbc07a941aca981bb0ba2db9a4ad4577e5071c1f48beaf179f303d_prof);

        
        $__internal_75842a87253d78886f2b601efc629e9dcfd6c5041a3c394e244c86c6ed74e49f->leave($__internal_75842a87253d78886f2b601efc629e9dcfd6c5041a3c394e244c86c6ed74e49f_prof);

    }

    // line 71
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_911cd651b70f05a1e7062e5c78dac158ca118e28d635a400e010dc8a0f843663 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_911cd651b70f05a1e7062e5c78dac158ca118e28d635a400e010dc8a0f843663->enter($__internal_911cd651b70f05a1e7062e5c78dac158ca118e28d635a400e010dc8a0f843663_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_ce5dbc84114c7c9e13664923047f9022cd7a69004fe5ab74bcff25684bc929f0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce5dbc84114c7c9e13664923047f9022cd7a69004fe5ab74bcff25684bc929f0->enter($__internal_ce5dbc84114c7c9e13664923047f9022cd7a69004fe5ab74bcff25684bc929f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 72
        echo "                    <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery-1.11.1.min.js"), "html", null, true);
        echo "\"></script>
                    <script type=\"text/javascript\" src=\"";
        // line 73
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
                ";
        
        $__internal_ce5dbc84114c7c9e13664923047f9022cd7a69004fe5ab74bcff25684bc929f0->leave($__internal_ce5dbc84114c7c9e13664923047f9022cd7a69004fe5ab74bcff25684bc929f0_prof);

        
        $__internal_911cd651b70f05a1e7062e5c78dac158ca118e28d635a400e010dc8a0f843663->leave($__internal_911cd651b70f05a1e7062e5c78dac158ca118e28d635a400e010dc8a0f843663_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
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
", "base.html.twig", "C:\\Users\\11500384\\Documents\\GitHub\\Web-Mobile-Project\\WP3\\app\\Resources\\views\\base.html.twig");
    }
}
