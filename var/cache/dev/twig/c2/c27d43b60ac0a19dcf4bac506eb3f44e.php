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

/* cart/index.html.twig */
class __TwigTemplate_875cc8dfa153aa6f405842ecb9b5ee18 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cart/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cart/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "cart/index.html.twig", 1);
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

        echo "Mon panier - Ishiki Shop
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
        echo "<h1>Mon panier</h1>
Retrouvez l'ensemble des produits que vous avez ajouté à votre panier.


";
        // line 11
        if ((twig_length_filter($this->env, (isset($context["cart"]) || array_key_exists("cart", $context) ? $context["cart"] : (function () { throw new RuntimeError('Variable "cart" does not exist.', 11, $this->source); })())) > 0)) {
            // line 12
            echo "\t<table class=\"table mt-3\">
\t\t<thead>
\t\t\t<tr>

\t\t\t\t<th scope=\"col\">Produits</th>
\t\t\t\t<th scope=\"col\"></th>
\t\t\t\t<th scope=\"col\">Quantité</th>
\t\t\t\t<th scope=\"col\">Prix</th>
\t\t\t\t<th scope=\"col\">Total</th>
\t\t\t\t<th scope=\"col\"></th>
\t\t\t</tr>
\t\t</thead>
\t\t<tbody>
\t\t\t";
            // line 25
            $context["total"] = null;
            // line 26
            echo "\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["cart"]) || array_key_exists("cart", $context) ? $context["cart"] : (function () { throw new RuntimeError('Variable "cart" does not exist.', 26, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 27
                echo "\t\t\t\t<tr>
\t\t\t\t\t<th>
\t\t\t\t\t\t<img src=\"/uploads/";
                // line 29
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "product", [], "any", false, false, false, 29), "illustration", [], "any", false, false, false, 29), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "product", [], "any", false, false, false, 29), "name", [], "any", false, false, false, 29), "html", null, true);
                echo "\" height=\"100px\"><br/>
\t\t\t\t\t</th>
\t\t\t\t\t<td>
\t\t\t\t\t\t";
                // line 32
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "product", [], "any", false, false, false, 32), "name", [], "any", false, false, false, 32), "html", null, true);
                echo "<br/>
\t\t\t\t\t\t<small>";
                // line 33
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "product", [], "any", false, false, false, 33), "subtitle", [], "any", false, false, false, 33), "html", null, true);
                echo "</small>
\t\t\t\t\t</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t<a href=\"";
                // line 36
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("decrease_to_cart", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "product", [], "any", false, false, false, 36), "id", [], "any", false, false, false, 36)]), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t<img src=\"";
                // line 37
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/minus-sign.png"), "html", null, true);
                echo "\" height=\"12px\" alt=\"Retirer un produit\">
\t\t\t\t\t\t</a>
\t\t\t\t\t\tx ";
                // line 39
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 39), "html", null, true);
                echo "
\t\t\t\t\t\t<a href=\"";
                // line 40
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("add_to_cart", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "product", [], "any", false, false, false, 40), "id", [], "any", false, false, false, 40)]), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t<img src=\"";
                // line 41
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/plus.png"), "html", null, true);
                echo "\" height=\"12px\" alt=\"ajouter un produit\">
\t\t\t\t\t\t</a>
\t\t\t\t\t</td>
\t\t\t\t\t<td>";
                // line 44
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "product", [], "any", false, false, false, 44), "prix", [], "any", false, false, false, 44) / 100), 2, ",", "."), "html", null, true);
                echo "€</td>
\t\t\t\t\t<td>";
                // line 45
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "product", [], "any", false, false, false, 45), "prix", [], "any", false, false, false, 45) * twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 45)) / 100), 2, ",", "."), "html", null, true);
                echo "€</td>
\t<td>
\t\t<a href=\"";
                // line 47
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("delete_to_cart", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "product", [], "any", false, false, false, 47), "id", [], "any", false, false, false, 47)]), "html", null, true);
                echo "\">
\t\t\t<img src=\"";
                // line 48
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/poubelle.png"), "html", null, true);
                echo "\" height=\"18px\" alt=\"Supprimer mon produit\">
\t\t</a>
\t</td>

</tr>
";
                // line 53
                $context["total"] = ((isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 53, $this->source); })()) + (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "product", [], "any", false, false, false, 53), "prix", [], "any", false, false, false, 53) * twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 53)));
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo "</tbody></table><div class=\"text-right mb-5\"><b>Nombre de produits :</b>";
            echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["cart"]) || array_key_exists("cart", $context) ? $context["cart"] : (function () { throw new RuntimeError('Variable "cart" does not exist.', 53, $this->source); })())), "html", null, true);
            echo "<br/><hr>
<b>Total de mon panier :</b><td>";
            // line 54
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ((isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 54, $this->source); })()) / 100), 2, ",", "."), "html", null, true);
            echo "€</td><hr><a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_order");
            echo "\" class=\"btn btn-success btn-block\">Valider mon panier</a></div>";
        } else {
            echo "<hr><p>Votre panier est vide</p>";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "cart/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  195 => 54,  185 => 53,  177 => 48,  173 => 47,  168 => 45,  164 => 44,  158 => 41,  154 => 40,  150 => 39,  145 => 37,  141 => 36,  135 => 33,  131 => 32,  123 => 29,  119 => 27,  114 => 26,  112 => 25,  97 => 12,  95 => 11,  89 => 7,  79 => 6,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Mon panier - Ishiki Shop
{% endblock %}

{% block content %}
<h1>Mon panier</h1>
Retrouvez l'ensemble des produits que vous avez ajouté à votre panier.


{% if cart|length > 0   %}
\t<table class=\"table mt-3\">
\t\t<thead>
\t\t\t<tr>

\t\t\t\t<th scope=\"col\">Produits</th>
\t\t\t\t<th scope=\"col\"></th>
\t\t\t\t<th scope=\"col\">Quantité</th>
\t\t\t\t<th scope=\"col\">Prix</th>
\t\t\t\t<th scope=\"col\">Total</th>
\t\t\t\t<th scope=\"col\"></th>
\t\t\t</tr>
\t\t</thead>
\t\t<tbody>
\t\t\t{% set total = null %}
\t\t\t{% for product in cart %}
\t\t\t\t<tr>
\t\t\t\t\t<th>
\t\t\t\t\t\t<img src=\"/uploads/{{ product.product.illustration }}\" alt=\"{{ product.product.name }}\" height=\"100px\"><br/>
\t\t\t\t\t</th>
\t\t\t\t\t<td>
\t\t\t\t\t\t{{ product.product.name }}<br/>
\t\t\t\t\t\t<small>{{ product.product.subtitle }}</small>
\t\t\t\t\t</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t<a href=\"{{ path('decrease_to_cart', {'id': product.product.id}) }}\">
\t\t\t\t\t\t\t<img src=\"{{ asset('assets/img/minus-sign.png') }}\" height=\"12px\" alt=\"Retirer un produit\">
\t\t\t\t\t\t</a>
\t\t\t\t\t\tx {{ product.quantity }}
\t\t\t\t\t\t<a href=\"{{ path('add_to_cart', { 'id': product.product.id}) }}\">
\t\t\t\t\t\t\t<img src=\"{{ asset('assets/img/plus.png') }}\" height=\"12px\" alt=\"ajouter un produit\">
\t\t\t\t\t\t</a>
\t\t\t\t\t</td>
\t\t\t\t\t<td>{{ (product.product.prix / 100) |number_format(2, ',','.') }}€</td>
\t\t\t\t\t<td>{{ ((product.product.prix * product.quantity) / 100) |number_format(2, ',','.') }}€</td>
\t<td>
\t\t<a href=\"{{ path('delete_to_cart', {'id' : product.product.id })}}\">
\t\t\t<img src=\"{{ asset('assets/img/poubelle.png') }}\" height=\"18px\" alt=\"Supprimer mon produit\">
\t\t</a>
\t</td>

</tr>
{% set total = total + (product.product.prix * product.quantity) %}{% endfor %}</tbody></table><div class=\"text-right mb-5\"><b>Nombre de produits :</b>{{ cart|length }}<br/><hr>
<b>Total de mon panier :</b><td>{{ (total / 100) |number_format(2, ',','.') }}€</td><hr><a href=\"{{ path('app_order') }}\" class=\"btn btn-success btn-block\">Valider mon panier</a></div>{% else %}<hr><p>Votre panier est vide</p>{% endif %}{% endblock %}
", "cart/index.html.twig", "C:\\Users\\malkh\\Desktop\\Ishiki.test\\maboutique\\templates\\cart\\index.html.twig");
    }
}
