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

/* depot/index.html.twig */
class __TwigTemplate_522a41e1501315df04ad82a0b106b047 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "depot/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "depot/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Depot index";
        
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

    <h1>Depot index</h1>

    <table class=\"table table-dark table-striped-columns\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Montant</th>
                <th>Date_depot</th>
                <th>actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 40
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["depots"]) || array_key_exists("depots", $context) ? $context["depots"] : (function () { throw new RuntimeError('Variable "depots" does not exist.', 40, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["depot"]) {
            // line 41
            echo "            <tr>
                <td>";
            // line 42
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["depot"], "id", [], "any", false, false, false, 42), "html", null, true);
            echo "</td>
                <td>";
            // line 43
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["depot"], "Montant", [], "any", false, false, false, 43), "html", null, true);
            echo "</td>
                <td>";
            // line 44
            ((twig_get_attribute($this->env, $this->source, $context["depot"], "DateDepot", [], "any", false, false, false, 44)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["depot"], "DateDepot", [], "any", false, false, false, 44), "Y-m-d H:i:s"), "html", null, true))) : (print ("")));
            echo "</td>
                <td>
                    <a href=\"";
            // line 46
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_depot_show", ["id" => twig_get_attribute($this->env, $this->source, $context["depot"], "id", [], "any", false, false, false, 46)]), "html", null, true);
            echo "\">show</a>
                    <a href=\"";
            // line 47
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_depot_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["depot"], "id", [], "any", false, false, false, 47)]), "html", null, true);
            echo "\">edit</a>
                </td>
            </tr>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 51
            echo "            <tr>
                <td colspan=\"4\">no records found</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['depot'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 55
        echo "        </tbody>
    </table>

    <a href=\"";
        // line 58
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_depot_new");
        echo "\">Create new</a>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "depot/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  157 => 58,  152 => 55,  143 => 51,  134 => 47,  130 => 46,  125 => 44,  121 => 43,  117 => 42,  114 => 41,  109 => 40,  73 => 6,  66 => 5,  53 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Depot index{% endblock %}

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

    <h1>Depot index</h1>

    <table class=\"table table-dark table-striped-columns\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Montant</th>
                <th>Date_depot</th>
                <th>actions</th>
            </tr>
        </thead>
        <tbody>
        {% for depot in depots %}
            <tr>
                <td>{{ depot.id }}</td>
                <td>{{ depot.Montant }}</td>
                <td>{{ depot.DateDepot ? depot.DateDepot|date('Y-m-d H:i:s') : '' }}</td>
                <td>
                    <a href=\"{{ path('app_depot_show', {'id': depot.id}) }}\">show</a>
                    <a href=\"{{ path('app_depot_edit', {'id': depot.id}) }}\">edit</a>
                </td>
            </tr>
        {% else %}
            <tr>
                <td colspan=\"4\">no records found</td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <a href=\"{{ path('app_depot_new') }}\">Create new</a>
{% endblock %}
", "depot/index.html.twig", "C:\\Users\\Top_runner\\Documents\\projet\\PPE301_MicroFinance\\templates\\depot\\index.html.twig");
    }
}
