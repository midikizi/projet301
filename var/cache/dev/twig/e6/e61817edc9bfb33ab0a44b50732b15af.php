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

/* comptes/index.html.twig */
class __TwigTemplate_2cf26550efaed213cf4f3a491450a85a extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "comptes/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "comptes/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Comptes index";
        
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
<nav class=\"navbar bg-primary\">
    <div class=\"container-fluid\">
      
      <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarNavAltMarkup\" aria-controls=\"navbarNavAltMarkup\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
        <span class=\"navbar-toggler-icon\"></span>
      </button>
      <div class=\"collapse navbar-collapse\" id=\"navbarNavAltMarkup\">
        <div class=\"navbar-nav\">
          <a class=\"nav-link active\" aria-current=\"page\" href=\"#\">Home</a>
          <a class=\"nav-link active\" aria-current=\"page\" href=\"/clients\">Clients</a>
          <a class=\"nav-link active\" aria-current=\"page\" href=\"/comptes\">Comptes</a>
          <a class=\"nav-link active\" aria-current=\"page\" href=\"/depot\">Dépot</a>
          <a class=\"nav-link active\" aria-current=\"page\" href=\"/pret\">Prèt</a>
          <a class=\"nav-link active\" aria-current=\"page\" href=\"/retraits\">Retraits</a>
          <a class=\"nav-link active\" aria-current=\"page\" href=\"/tontines\">Tontines</a>
          <a class=\"nav-link active\" aria-current=\"page\" href=\"/remboursements\">remboursements</a>
        </div>
      </div>
    </div>
</nav>

    <h1>Comptes index</h1>

    <table class=\"table table-dark table-striped-columns\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Numero_compte</th>
                <th>Solde</th>
                <th>Date_ouvert</th>
                <th>Type_compte</th>
                <th>actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 42
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["comptes"]) || array_key_exists("comptes", $context) ? $context["comptes"] : (function () { throw new RuntimeError('Variable "comptes" does not exist.', 42, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["compte"]) {
            // line 43
            echo "            <tr>
                <td>";
            // line 44
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["compte"], "id", [], "any", false, false, false, 44), "html", null, true);
            echo "</td>
                <td>";
            // line 45
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["compte"], "NumeroCompte", [], "any", false, false, false, 45), "html", null, true);
            echo "</td>
                <td>";
            // line 46
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["compte"], "Solde", [], "any", false, false, false, 46), "html", null, true);
            echo "</td>
                <td>";
            // line 47
            ((twig_get_attribute($this->env, $this->source, $context["compte"], "DateOuvert", [], "any", false, false, false, 47)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["compte"], "DateOuvert", [], "any", false, false, false, 47), "Y-m-d H:i:s"), "html", null, true))) : (print ("")));
            echo "</td>
                <td>";
            // line 48
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["compte"], "TypeCompte", [], "any", false, false, false, 48), "html", null, true);
            echo "</td>
                <td>
                    <a href=\"";
            // line 50
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_comptes_show", ["id" => twig_get_attribute($this->env, $this->source, $context["compte"], "id", [], "any", false, false, false, 50)]), "html", null, true);
            echo "\" class=\"btn btn-warning\" >show</a>
                    <a href=\"";
            // line 51
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_comptes_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["compte"], "id", [], "any", false, false, false, 51)]), "html", null, true);
            echo "\" class=\"btn btn-light\">edit</a>
                </td>
            </tr>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 55
            echo "            <tr>
                <td colspan=\"6\">no records found</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['compte'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 59
        echo "        </tbody>
    </table>

    <a href=\"";
        // line 62
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_comptes_new");
        echo "\" class=\"btn btn-info\">Create new</a>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "comptes/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  167 => 62,  162 => 59,  153 => 55,  144 => 51,  140 => 50,  135 => 48,  131 => 47,  127 => 46,  123 => 45,  119 => 44,  116 => 43,  111 => 42,  73 => 6,  66 => 5,  53 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Comptes index{% endblock %}

{% block body %}

<nav class=\"navbar bg-primary\">
    <div class=\"container-fluid\">
      
      <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarNavAltMarkup\" aria-controls=\"navbarNavAltMarkup\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
        <span class=\"navbar-toggler-icon\"></span>
      </button>
      <div class=\"collapse navbar-collapse\" id=\"navbarNavAltMarkup\">
        <div class=\"navbar-nav\">
          <a class=\"nav-link active\" aria-current=\"page\" href=\"#\">Home</a>
          <a class=\"nav-link active\" aria-current=\"page\" href=\"/clients\">Clients</a>
          <a class=\"nav-link active\" aria-current=\"page\" href=\"/comptes\">Comptes</a>
          <a class=\"nav-link active\" aria-current=\"page\" href=\"/depot\">Dépot</a>
          <a class=\"nav-link active\" aria-current=\"page\" href=\"/pret\">Prèt</a>
          <a class=\"nav-link active\" aria-current=\"page\" href=\"/retraits\">Retraits</a>
          <a class=\"nav-link active\" aria-current=\"page\" href=\"/tontines\">Tontines</a>
          <a class=\"nav-link active\" aria-current=\"page\" href=\"/remboursements\">remboursements</a>
        </div>
      </div>
    </div>
</nav>

    <h1>Comptes index</h1>

    <table class=\"table table-dark table-striped-columns\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Numero_compte</th>
                <th>Solde</th>
                <th>Date_ouvert</th>
                <th>Type_compte</th>
                <th>actions</th>
            </tr>
        </thead>
        <tbody>
        {% for compte in comptes %}
            <tr>
                <td>{{ compte.id }}</td>
                <td>{{ compte.NumeroCompte }}</td>
                <td>{{ compte.Solde }}</td>
                <td>{{ compte.DateOuvert ? compte.DateOuvert|date('Y-m-d H:i:s') : '' }}</td>
                <td>{{ compte.TypeCompte }}</td>
                <td>
                    <a href=\"{{ path('app_comptes_show', {'id': compte.id}) }}\" class=\"btn btn-warning\" >show</a>
                    <a href=\"{{ path('app_comptes_edit', {'id': compte.id}) }}\" class=\"btn btn-light\">edit</a>
                </td>
            </tr>
        {% else %}
            <tr>
                <td colspan=\"6\">no records found</td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <a href=\"{{ path('app_comptes_new') }}\" class=\"btn btn-info\">Create new</a>
{% endblock %}
", "comptes/index.html.twig", "C:\\Users\\Top_runner\\Documents\\projet\\PPE301_MicroFinance\\templates\\comptes\\index.html.twig");
    }
}
