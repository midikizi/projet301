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

/* pret/index.html.twig */
class __TwigTemplate_c6815ab8e6ae5f63ba51e61b5496198a extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pret/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "pret/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Pret index";
        
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

    <h1>Pret index</h1>

    <table class=\"table table-dark table-striped-columns\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Somme</th>
                <th>Taux_interet</th>
                <th>actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 40
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["prets"]) || array_key_exists("prets", $context) ? $context["prets"] : (function () { throw new RuntimeError('Variable "prets" does not exist.', 40, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["pret"]) {
            // line 41
            echo "            <tr>
                <td>";
            // line 42
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["pret"], "id", [], "any", false, false, false, 42), "html", null, true);
            echo "</td>
                <td>";
            // line 43
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["pret"], "Somme", [], "any", false, false, false, 43), "html", null, true);
            echo "</td>
                <td>";
            // line 44
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["pret"], "TauxInteret", [], "any", false, false, false, 44), "html", null, true);
            echo "</td>
                <td>
                    <a href=\"";
            // line 46
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_pret_show", ["id" => twig_get_attribute($this->env, $this->source, $context["pret"], "id", [], "any", false, false, false, 46)]), "html", null, true);
            echo "\">show</a>
                    <a href=\"";
            // line 47
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_pret_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["pret"], "id", [], "any", false, false, false, 47)]), "html", null, true);
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pret'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 55
        echo "        </tbody>
    </table>

    <a href=\"";
        // line 58
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_pret_new");
        echo "\">Create new</a>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "pret/index.html.twig";
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

{% block title %}Pret index{% endblock %}

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

    <h1>Pret index</h1>

    <table class=\"table table-dark table-striped-columns\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Somme</th>
                <th>Taux_interet</th>
                <th>actions</th>
            </tr>
        </thead>
        <tbody>
        {% for pret in prets %}
            <tr>
                <td>{{ pret.id }}</td>
                <td>{{ pret.Somme }}</td>
                <td>{{ pret.TauxInteret }}</td>
                <td>
                    <a href=\"{{ path('app_pret_show', {'id': pret.id}) }}\">show</a>
                    <a href=\"{{ path('app_pret_edit', {'id': pret.id}) }}\">edit</a>
                </td>
            </tr>
        {% else %}
            <tr>
                <td colspan=\"4\">no records found</td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <a href=\"{{ path('app_pret_new') }}\">Create new</a>
{% endblock %}
", "pret/index.html.twig", "C:\\Users\\Top_runner\\Documents\\projet\\PPE301_MicroFinance\\templates\\pret\\index.html.twig");
    }
}
