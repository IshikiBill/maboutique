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

/* account/order_show.html.twig */
class __TwigTemplate_fc4ee00dd8d0c6e236c149fd000f6911 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "account/order_show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "account/order_show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "account/order_show.html.twig", 1);
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

        echo "Ma commande - Ishiki Shop ";
        
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
        echo "\t<a href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_account_address_add");
        echo "\" class=\"btn btn-info btn-sm float-right\">Ajouter une adresse</a>
\t<h1>Ma commande ";
        // line 8
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 8, $this->source); })()), "reference", [], "any", false, false, false, 8), "html", null, true);
        echo "</h1>
\t<a href=\"";
        // line 9
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_account_order");
        echo "\"></br>
\tRetour</a>
    <hr>
    <strong>Statut de la commande :</strong>
\t\t\t\t";
        // line 13
        if ((twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 13, $this->source); })()), "state", [], "any", false, false, false, 13) == 1)) {
            // line 14
            echo "\t\t\t\t\tPaiement accepté
\t\t\t\t\t";
        } elseif ((twig_get_attribute($this->env, $this->source,         // line 15
(isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 15, $this->source); })()), "state", [], "any", false, false, false, 15) == 2)) {
            // line 16
            echo "\t\t\t\t\tPréparation en cours
\t\t\t\t\t";
        } elseif ((twig_get_attribute($this->env, $this->source,         // line 17
(isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 17, $this->source); })()), "state", [], "any", false, false, false, 17) == 3)) {
            // line 18
            echo "\t\t\t\t\tLivraiso en cours
\t\t\t\t";
        }
        // line 20
        echo "      </br>
   <strong>Commande passé le : </strong> ";
        // line 21
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 21, $this->source); })()), "createdAT", [], "any", false, false, false, 21), "d/m/Y"), "html", null, true);
        echo "<br/> 
   <strong>Référence de ma commande : </strong>";
        // line 22
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 22, $this->source); })()), "reference", [], "any", false, false, false, 22), "html", null, true);
        echo "<br/>
   <strong>Transporteur choisi : </strong>";
        // line 23
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 23, $this->source); })()), "carrierName", [], "any", false, false, false, 23), "html", null, true);
        echo "<br/>
   
   <hr>

   <strong>Détails</strong>
<table class=\"table mt-4\">
  <thead>
    <tr>
      <th scope=\"col\">Produit</th>
      <th scope=\"col\">Quantité</th>
      <th scope=\"col\">Prix unitaire</th>
      <th scope=\"col\">Total</th>
    </tr>
  </thead>
  <tbody>
  ";
        // line 38
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 38, $this->source); })()), "orderDetails", [], "any", false, false, false, 38));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 39
            echo "  <tr>
      <td>";
            // line 40
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "product", [], "any", false, false, false, 40), "html", null, true);
            echo "</td>
      <td>";
            // line 41
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 41), "html", null, true);
            echo "</td>
      <td>";
            // line 42
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 42) / 100), 2, ",", "."), "html", null, true);
            echo " €</td>
      <td>";
            // line 43
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (twig_get_attribute($this->env, $this->source, $context["product"], "total", [], "any", false, false, false, 43) / 100), 2, ",", "."), "html", null, true);
            echo " €</td>
    </tr>
    
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo "    
  </tbody>
</table>

<div class=\"text-right\">
    
    <strong>Sous-total:</strong> ";
        // line 53
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 53, $this->source); })()), "getTotal", [], "any", false, false, false, 53) / 100), 2, ",", "."), "html", null, true);
        echo " € <br/>
    <strong>Livraison:</strong> ";
        // line 54
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 54, $this->source); })()), "carrierPrice", [], "any", false, false, false, 54) / 100), 2, ",", "."), "html", null, true);
        echo " € <br/>
    <strong>Total: </strong> ";
        // line 55
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ((twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 55, $this->source); })()), "carrierPrice", [], "any", false, false, false, 55) + twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 55, $this->source); })()), "getTotal", [], "any", false, false, false, 55)) / 100), 2, ",", "."), "html", null, true);
        echo " € <br/>
    
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "account/order_show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  194 => 55,  190 => 54,  186 => 53,  178 => 47,  168 => 43,  164 => 42,  160 => 41,  156 => 40,  153 => 39,  149 => 38,  131 => 23,  127 => 22,  123 => 21,  120 => 20,  116 => 18,  114 => 17,  111 => 16,  109 => 15,  106 => 14,  104 => 13,  97 => 9,  93 => 8,  88 => 7,  78 => 6,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Ma commande - Ishiki Shop {% endblock %}


{% block content %}
\t<a href=\"{{ path('app_account_address_add') }}\" class=\"btn btn-info btn-sm float-right\">Ajouter une adresse</a>
\t<h1>Ma commande {{ order.reference }}</h1>
\t<a href=\"{{ path ('app_account_order') }}\"></br>
\tRetour</a>
    <hr>
    <strong>Statut de la commande :</strong>
\t\t\t\t{% if order.state == 1 %}
\t\t\t\t\tPaiement accepté
\t\t\t\t\t{% elseif order.state == 2 %}
\t\t\t\t\tPréparation en cours
\t\t\t\t\t{% elseif order.state == 3 %}
\t\t\t\t\tLivraiso en cours
\t\t\t\t{% endif %}
      </br>
   <strong>Commande passé le : </strong> {{ order.createdAT| date('d/m/Y') }}<br/> 
   <strong>Référence de ma commande : </strong>{{ order.reference }}<br/>
   <strong>Transporteur choisi : </strong>{{ order.carrierName }}<br/>
   
   <hr>

   <strong>Détails</strong>
<table class=\"table mt-4\">
  <thead>
    <tr>
      <th scope=\"col\">Produit</th>
      <th scope=\"col\">Quantité</th>
      <th scope=\"col\">Prix unitaire</th>
      <th scope=\"col\">Total</th>
    </tr>
  </thead>
  <tbody>
  {% for product in order.orderDetails %}
  <tr>
      <td>{{ product.product }}</td>
      <td>{{ product.quantity }}</td>
      <td>{{ (product.price / 100 )|number_format(2,',','.') }} €</td>
      <td>{{ (product.total / 100 )|number_format(2,',','.') }} €</td>
    </tr>
    
  {% endfor %}
    
  </tbody>
</table>

<div class=\"text-right\">
    
    <strong>Sous-total:</strong> {{ (order.getTotal / 100 )|number_format(2,',','.') }} € <br/>
    <strong>Livraison:</strong> {{ (order.carrierPrice / 100 )|number_format(2,',','.') }} € <br/>
    <strong>Total: </strong> {{ ((order.carrierPrice + order.getTotal) / 100)| number_format(2,',','.') }} € <br/>
    
</div>
{% endblock %}", "account/order_show.html.twig", "C:\\Users\\malkh\\Desktop\\Ishiki.test\\maboutique\\templates\\account\\order_show.html.twig");
    }
}
