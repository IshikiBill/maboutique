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

/* account/order.html.twig */
class __TwigTemplate_9d28a1248d40d0279a8ae4407b0f97a2 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'content' => [$this, 'block_content'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "account/order.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "account/order.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "account/order.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Mes commandes - Ishiki Shop
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 6
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 7
        echo "<a href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_account_address_add");
        echo "\" class=\"btn btn-info btn-sm float-right\">Ajouter une adresse</a>
<h1>Mes commandes</h1>
Bienvenue
";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 10, $this->source); })()), "user", [], "any", false, false, false, 10), "firstname", [], "any", false, false, false, 10), "html", null, true);
        echo "
dans votre compte.
<br/>
C'est dans cet espace que vous allez pouvoir gérer vos commandes.
<a href=\"";
        // line 14
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_account");
        echo "\"></br>
Retour</a>";
        // line 15
        if ((twig_length_filter($this->env, (isset($context["orders"]) || array_key_exists("orders", $context) ? $context["orders"] : (function () { throw new RuntimeError('Variable "orders" does not exist.', 15, $this->source); })())) == 0)) {
            // line 16
            echo "<hr>
<p class=\"text-center\">
\tVous n'avez pas encore passé de commande sur Ishiki-shop.
</p>";
        } else {
            // line 20
            echo "<table class=\"table mt-4\">
\t<thead>
\t\t<tr>

\t\t\t<th scope=\"col\">Référence</th>
\t\t\t<th scope=\"col\">Statut</th>
\t\t\t<th scope=\"col\">Produit(s)</th>
\t\t\t<th scope=\"col\">Total</th>
\t\t\t<th scope=\"col\"></th>
\t\t</tr>
\t</thead>
\t<tbody>
\t\t";
            // line 32
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["orders"]) || array_key_exists("orders", $context) ? $context["orders"] : (function () { throw new RuntimeError('Variable "orders" does not exist.', 32, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["order"]) {
                // line 33
                echo "\t\t\t<hr>
\t\t\t<td>
\t\t\t\t<span class=\"badge badge-secondary\">";
                // line 35
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["order"], "reference", [], "any", false, false, false, 35), "html", null, true);
                echo "</span>
\t\t\t</td>
\t\t\t<td>
\t\t\t\t";
                // line 38
                if ((twig_get_attribute($this->env, $this->source, $context["order"], "state", [], "any", false, false, false, 38) == 1)) {
                    // line 39
                    echo "\t\t\t\t\tPaiement accepté
\t\t\t\t\t";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 40
$context["order"], "state", [], "any", false, false, false, 40) == 2)) {
                    // line 41
                    echo "\t\t\t\t\tPréparation en cours
\t\t\t\t\t";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 42
$context["order"], "state", [], "any", false, false, false, 42) == 3)) {
                    // line 43
                    echo "\t\t\t\t\tLivraiso en cours
\t\t\t\t";
                }
                // line 45
                echo "
\t\t\t</td>
\t\t\t<td>";
                // line 47
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["order"], "createdAt", [], "any", false, false, false, 47), "d/m/Y"), "html", null, true);
                echo "</td>
\t\t\t<td>";
                // line 48
                echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["order"], "orderDetails", [], "any", false, false, false, 48)), "html", null, true);
                echo "</td>
\t\t\t<td>";
                // line 49
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["order"], "carrierPrice", [], "any", false, false, false, 49) + twig_get_attribute($this->env, $this->source, $context["order"], "getTotal", [], "any", false, false, false, 49)) / 100), 2, ",", "."), "html", null, true);
                echo "
\t\t\t\t€</td>
\t\t\t<td class=\"text-right\">
\t\t\t\t<a href=\"";
                // line 52
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_account_order_show", ["reference" => twig_get_attribute($this->env, $this->source, $context["order"], "reference", [], "any", false, false, false, 52)]), "html", null, true);
                echo "\">Voir ma commande</a>
\t\t\t</td>
\t\t</tr>
\t</tbody>
</pre>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 56
            echo "</tbody></table>";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "account/order.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  188 => 56,  177 => 52,  171 => 49,  167 => 48,  163 => 47,  159 => 45,  155 => 43,  153 => 42,  150 => 41,  148 => 40,  145 => 39,  143 => 38,  137 => 35,  133 => 33,  129 => 32,  115 => 20,  109 => 16,  107 => 15,  103 => 14,  96 => 10,  89 => 7,  79 => 6,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Mes commandes - Ishiki Shop
{% endblock %}

{% block content %}
<a href=\"{{ path('app_account_address_add') }}\" class=\"btn btn-info btn-sm float-right\">Ajouter une adresse</a>
<h1>Mes commandes</h1>
Bienvenue
{{ app.user.firstname }}
dans votre compte.
<br/>
C'est dans cet espace que vous allez pouvoir gérer vos commandes.
<a href=\"{{ path ('app_account') }}\"></br>
Retour</a>{% if orders|length == 0 %}
<hr>
<p class=\"text-center\">
\tVous n'avez pas encore passé de commande sur Ishiki-shop.
</p>{% else %}
<table class=\"table mt-4\">
\t<thead>
\t\t<tr>

\t\t\t<th scope=\"col\">Référence</th>
\t\t\t<th scope=\"col\">Statut</th>
\t\t\t<th scope=\"col\">Produit(s)</th>
\t\t\t<th scope=\"col\">Total</th>
\t\t\t<th scope=\"col\"></th>
\t\t</tr>
\t</thead>
\t<tbody>
\t\t{% for order in orders %}
\t\t\t<hr>
\t\t\t<td>
\t\t\t\t<span class=\"badge badge-secondary\">{{ order.reference }}</span>
\t\t\t</td>
\t\t\t<td>
\t\t\t\t{% if order.state == 1 %}
\t\t\t\t\tPaiement accepté
\t\t\t\t\t{% elseif order.state == 2 %}
\t\t\t\t\tPréparation en cours
\t\t\t\t\t{% elseif order.state == 3 %}
\t\t\t\t\tLivraiso en cours
\t\t\t\t{% endif %}

\t\t\t</td>
\t\t\t<td>{{ order.createdAt|date('d/m/Y') }}</td>
\t\t\t<td>{{ order.orderDetails|length  }}</td>
\t\t\t<td>{{ ((order.carrierPrice + order.getTotal) / 100)| number_format(2,',','.') }}
\t\t\t\t€</td>
\t\t\t<td class=\"text-right\">
\t\t\t\t<a href=\"{{ path('app_account_order_show', { 'reference' : order.reference }) }}\">Voir ma commande</a>
\t\t\t</td>
\t\t</tr>
\t</tbody>
</pre>{% endfor %}</tbody></table>{% endif %}{% endblock %}
", "account/order.html.twig", "C:\\Users\\malkh\\Desktop\\Ishiki.test\\maboutique\\templates\\account\\order.html.twig");
    }
}
