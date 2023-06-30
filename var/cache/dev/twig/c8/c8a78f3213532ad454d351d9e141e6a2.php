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

/* tontines/show.html.twig */
class __TwigTemplate_170a90123efcc8df89d30239c0295160 extends Template
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
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "tontines/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "tontines/show.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Tontines";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <h1>Tontines</h1>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["tontine"]) || array_key_exists("tontine", $context) ? $context["tontine"] : (function () { throw new RuntimeError('Variable "tontine" does not exist.', 12, $this->source); })()), "id", [], "any", false, false, false, 12), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Date_debut</th>
                <td>";
        // line 16
        ((twig_get_attribute($this->env, $this->source, (isset($context["tontine"]) || array_key_exists("tontine", $context) ? $context["tontine"] : (function () { throw new RuntimeError('Variable "tontine" does not exist.', 16, $this->source); })()), "DateDebut", [], "any", false, false, false, 16)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["tontine"]) || array_key_exists("tontine", $context) ? $context["tontine"] : (function () { throw new RuntimeError('Variable "tontine" does not exist.', 16, $this->source); })()), "DateDebut", [], "any", false, false, false, 16), "Y-m-d H:i:s"), "html", null, true))) : (print ("")));
        echo "</td>
            </tr>
            <tr>
                <th>Date_cloture</th>
                <td>";
        // line 20
        ((twig_get_attribute($this->env, $this->source, (isset($context["tontine"]) || array_key_exists("tontine", $context) ? $context["tontine"] : (function () { throw new RuntimeError('Variable "tontine" does not exist.', 20, $this->source); })()), "DateCloture", [], "any", false, false, false, 20)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["tontine"]) || array_key_exists("tontine", $context) ? $context["tontine"] : (function () { throw new RuntimeError('Variable "tontine" does not exist.', 20, $this->source); })()), "DateCloture", [], "any", false, false, false, 20), "Y-m-d H:i:s"), "html", null, true))) : (print ("")));
        echo "</td>
            </tr>
            <tr>
                <th>Montant</th>
                <td>";
        // line 24
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["tontine"]) || array_key_exists("tontine", $context) ? $context["tontine"] : (function () { throw new RuntimeError('Variable "tontine" does not exist.', 24, $this->source); })()), "Montant", [], "any", false, false, false, 24), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <a href=\"";
        // line 29
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_tontines_index");
        echo "\">back to list</a>

    <a href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_tontines_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["tontine"]) || array_key_exists("tontine", $context) ? $context["tontine"] : (function () { throw new RuntimeError('Variable "tontine" does not exist.', 31, $this->source); })()), "id", [], "any", false, false, false, 31)]), "html", null, true);
        echo "\">edit</a>

    ";
        // line 33
        echo twig_include($this->env, $context, "tontines/_delete_form.html.twig");
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "tontines/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  120 => 33,  115 => 31,  110 => 29,  102 => 24,  95 => 20,  88 => 16,  81 => 12,  73 => 6,  66 => 5,  53 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Tontines{% endblock %}

{% block body %}
    <h1>Tontines</h1>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ tontine.id }}</td>
            </tr>
            <tr>
                <th>Date_debut</th>
                <td>{{ tontine.DateDebut ? tontine.DateDebut|date('Y-m-d H:i:s') : '' }}</td>
            </tr>
            <tr>
                <th>Date_cloture</th>
                <td>{{ tontine.DateCloture ? tontine.DateCloture|date('Y-m-d H:i:s') : '' }}</td>
            </tr>
            <tr>
                <th>Montant</th>
                <td>{{ tontine.Montant }}</td>
            </tr>
        </tbody>
    </table>

    <a href=\"{{ path('app_tontines_index') }}\">back to list</a>

    <a href=\"{{ path('app_tontines_edit', {'id': tontine.id}) }}\">edit</a>

    {{ include('tontines/_delete_form.html.twig') }}
{% endblock %}
", "tontines/show.html.twig", "C:\\Users\\Top_runner\\Documents\\projet\\PPE301_MicroFinance\\templates\\tontines\\show.html.twig");
    }
}
