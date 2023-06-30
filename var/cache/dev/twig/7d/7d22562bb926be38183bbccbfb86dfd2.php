<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* home/index.html.twig */
class __TwigTemplate_9dbb4f25b63dc696fd173aaa5abb41d6 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "temp_index.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $this->parent = $this->loadTemplate("temp_index.html.twig", "home/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Hello HomeController!";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
<html lang=\"en\">

<body>
<div id=\"layoutSidenav\">

    <div id=\"layoutSidenav_content\">
        <main>
            <div class=\"container-fluid px-4\">
                <h1 class=\"mt-4\">Dashboard</h1>
                <ol class=\"breadcrumb mb-4\">
                    <li class=\"breadcrumb-item active\">Dashboard</li>
                </ol>
                <div class=\"row\">
                    <div class=\"col-xl-3 col-md-6\">
                        <div class=\"card bg-primary text-white mb-4\">
                            <div class=\"card-body\">Primary Card</div>
                            <div class=\"card-footer d-flex align-items-center justify-content-between\">
                                <a class=\"small text-white stretched-link\" href=\"#\">View Details</a>
                                <div class=\"small text-white\"><i class=\"fas fa-angle-right\"></i></div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-xl-3 col-md-6\">
                        <div class=\"card bg-warning text-white mb-4\">
                            <div class=\"card-body\">Warning Card</div>
                            <div class=\"card-footer d-flex align-items-center justify-content-between\">
                                <a class=\"small text-white stretched-link\" href=\"#\">View Details</a>
                                <div class=\"small text-white\"><i class=\"fas fa-angle-right\"></i></div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-xl-3 col-md-6\">
                        <div class=\"card bg-success text-white mb-4\">
                            <div class=\"card-body\">Success Card</div>
                            <div class=\"card-footer d-flex align-items-center justify-content-between\">
                                <a class=\"small text-white stretched-link\" href=\"#\">View Details</a>
                                <div class=\"small text-white\"><i class=\"fas fa-angle-right\"></i></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>

</html>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "home/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 6,  66 => 5,  53 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'temp_index.html.twig' %}

{% block title %}Hello HomeController!{% endblock %}

{% block body %}

<html lang=\"en\">

<body>
<div id=\"layoutSidenav\">

    <div id=\"layoutSidenav_content\">
        <main>
            <div class=\"container-fluid px-4\">
                <h1 class=\"mt-4\">Dashboard</h1>
                <ol class=\"breadcrumb mb-4\">
                    <li class=\"breadcrumb-item active\">Dashboard</li>
                </ol>
                <div class=\"row\">
                    <div class=\"col-xl-3 col-md-6\">
                        <div class=\"card bg-primary text-white mb-4\">
                            <div class=\"card-body\">Primary Card</div>
                            <div class=\"card-footer d-flex align-items-center justify-content-between\">
                                <a class=\"small text-white stretched-link\" href=\"#\">View Details</a>
                                <div class=\"small text-white\"><i class=\"fas fa-angle-right\"></i></div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-xl-3 col-md-6\">
                        <div class=\"card bg-warning text-white mb-4\">
                            <div class=\"card-body\">Warning Card</div>
                            <div class=\"card-footer d-flex align-items-center justify-content-between\">
                                <a class=\"small text-white stretched-link\" href=\"#\">View Details</a>
                                <div class=\"small text-white\"><i class=\"fas fa-angle-right\"></i></div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-xl-3 col-md-6\">
                        <div class=\"card bg-success text-white mb-4\">
                            <div class=\"card-body\">Success Card</div>
                            <div class=\"card-footer d-flex align-items-center justify-content-between\">
                                <a class=\"small text-white stretched-link\" href=\"#\">View Details</a>
                                <div class=\"small text-white\"><i class=\"fas fa-angle-right\"></i></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>

</html>
{% endblock %}
", "home/index.html.twig", "C:\\Users\\Top_runner\\Documents\\projet\\PPE301_MicroFinance\\templates\\home\\index.html.twig");
    }
}
