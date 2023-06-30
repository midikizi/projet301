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

/* remboursements/index.html.twig */
class __TwigTemplate_0ef2a88d2f973709e8c9de7a9c15f4c5 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "remboursements/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "remboursements/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Remboursements index";
        
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

    <h1>Remboursements index</h1>

    <table class=\"table\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Payement</th>
                <th>actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 39
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["remboursements"]) || array_key_exists("remboursements", $context) ? $context["remboursements"] : (function () { throw new RuntimeError('Variable "remboursements" does not exist.', 39, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["remboursement"]) {
            // line 40
            echo "            <tr>
                <td>";
            // line 41
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["remboursement"], "id", [], "any", false, false, false, 41), "html", null, true);
            echo "</td>
                <td>";
            // line 42
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["remboursement"], "Payement", [], "any", false, false, false, 42), "html", null, true);
            echo "</td>
                <td>
                    <a href=\"";
            // line 44
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_remboursements_show", ["id" => twig_get_attribute($this->env, $this->source, $context["remboursement"], "id", [], "any", false, false, false, 44)]), "html", null, true);
            echo "\">show</a>
                    <a href=\"";
            // line 45
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_remboursements_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["remboursement"], "id", [], "any", false, false, false, 45)]), "html", null, true);
            echo "\">edit</a>
                </td>
            </tr>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 49
            echo "            <tr>
                <td colspan=\"3\">no records found</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['remboursement'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 53
        echo "        </tbody>
    </table>

    <a href=\"";
        // line 56
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_remboursements_new");
        echo "\">Create new</a>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "remboursements/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  152 => 56,  147 => 53,  138 => 49,  129 => 45,  125 => 44,  120 => 42,  116 => 41,  113 => 40,  108 => 39,  73 => 6,  66 => 5,  53 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Remboursements index{% endblock %}

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

    <h1>Remboursements index</h1>

    <table class=\"table\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Payement</th>
                <th>actions</th>
            </tr>
        </thead>
        <tbody>
        {% for remboursement in remboursements %}
            <tr>
                <td>{{ remboursement.id }}</td>
                <td>{{ remboursement.Payement }}</td>
                <td>
                    <a href=\"{{ path('app_remboursements_show', {'id': remboursement.id}) }}\">show</a>
                    <a href=\"{{ path('app_remboursements_edit', {'id': remboursement.id}) }}\">edit</a>
                </td>
            </tr>
        {% else %}
            <tr>
                <td colspan=\"3\">no records found</td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <a href=\"{{ path('app_remboursements_new') }}\">Create new</a>
{% endblock %}
", "remboursements/index.html.twig", "C:\\Users\\Top_runner\\Documents\\projet\\PPE301_MicroFinance\\templates\\remboursements\\index.html.twig");
    }
}
