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
class __TwigTemplate_1321b5a7630ae81d01ff41ae88b2472f extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "cart/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Mon panier - Ishiki Shop
";
    }

    // line 6
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 7
        echo "<h1>Mon panier</h1>
Retrouvez l'ensemble des produits que vous avez ajouté à votre panier.


";
        // line 11
        if ((twig_length_filter($this->env, ($context["cart"] ?? null)) > 0)) {
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
            $context['_seq'] = twig_ensure_traversable(($context["cart"] ?? null));
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
                $context["total"] = (($context["total"] ?? null) + (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "product", [], "any", false, false, false, 53), "prix", [], "any", false, false, false, 53) * twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 53)));
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo "</tbody></table><div class=\"text-right mb-5\"><b>Nombre de produits :</b>";
            echo twig_escape_filter($this->env, twig_length_filter($this->env, ($context["cart"] ?? null)), "html", null, true);
            echo "<br/><hr>
<b>Total de mon panier :</b><td>";
            // line 54
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (($context["total"] ?? null) / 100), 2, ",", "."), "html", null, true);
            echo "€</td><hr><a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_order");
            echo "\" class=\"btn btn-success btn-block\">Valider mon panier</a></div>";
        } else {
            echo "<hr><p>Votre panier est vide</p>";
        }
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
        return array (  165 => 54,  155 => 53,  147 => 48,  143 => 47,  138 => 45,  134 => 44,  128 => 41,  124 => 40,  120 => 39,  115 => 37,  111 => 36,  105 => 33,  101 => 32,  93 => 29,  89 => 27,  84 => 26,  82 => 25,  67 => 12,  65 => 11,  59 => 7,  55 => 6,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "cart/index.html.twig", "C:\\Users\\malkh\\Desktop\\Ishiki.test\\maboutique\\templates\\cart\\index.html.twig");
    }
}
