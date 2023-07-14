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
class __TwigTemplate_56714fb9a1337a7c184831153131e16a extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "account/order_show.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Ma commande - Ishiki Shop ";
    }

    // line 6
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 7
        echo "\t<a href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_account_address_add");
        echo "\" class=\"btn btn-info btn-sm float-right\">Ajouter une adresse</a>
\t<h1>Ma commande ";
        // line 8
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "reference", [], "any", false, false, false, 8), "html", null, true);
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
        if ((twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "state", [], "any", false, false, false, 13) == 1)) {
            // line 14
            echo "\t\t\t\t\tPaiement accepté
\t\t\t\t\t";
        } elseif ((twig_get_attribute($this->env, $this->source,         // line 15
($context["order"] ?? null), "state", [], "any", false, false, false, 15) == 2)) {
            // line 16
            echo "\t\t\t\t\tPréparation en cours
\t\t\t\t\t";
        } elseif ((twig_get_attribute($this->env, $this->source,         // line 17
($context["order"] ?? null), "state", [], "any", false, false, false, 17) == 3)) {
            // line 18
            echo "\t\t\t\t\tLivraiso en cours
\t\t\t\t";
        }
        // line 20
        echo "      </br>
   <strong>Commande passé le : </strong> ";
        // line 21
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "createdAT", [], "any", false, false, false, 21), "d/m/Y"), "html", null, true);
        echo "<br/> 
   <strong>Référence de ma commande : </strong>";
        // line 22
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "reference", [], "any", false, false, false, 22), "html", null, true);
        echo "<br/>
   <strong>Transporteur choisi : </strong>";
        // line 23
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "carrierName", [], "any", false, false, false, 23), "html", null, true);
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
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "orderDetails", [], "any", false, false, false, 38));
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
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "getTotal", [], "any", false, false, false, 53) / 100), 2, ",", "."), "html", null, true);
        echo " € <br/>
    <strong>Livraison:</strong> ";
        // line 54
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "carrierPrice", [], "any", false, false, false, 54) / 100), 2, ",", "."), "html", null, true);
        echo " € <br/>
    <strong>Total: </strong> ";
        // line 55
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "carrierPrice", [], "any", false, false, false, 55) + twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "getTotal", [], "any", false, false, false, 55)) / 100), 2, ",", "."), "html", null, true);
        echo " € <br/>
    
</div>
";
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
        return array (  164 => 55,  160 => 54,  156 => 53,  148 => 47,  138 => 43,  134 => 42,  130 => 41,  126 => 40,  123 => 39,  119 => 38,  101 => 23,  97 => 22,  93 => 21,  90 => 20,  86 => 18,  84 => 17,  81 => 16,  79 => 15,  76 => 14,  74 => 13,  67 => 9,  63 => 8,  58 => 7,  54 => 6,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "account/order_show.html.twig", "C:\\Users\\malkh\\Desktop\\Ishiki.test\\maboutique\\templates\\account\\order_show.html.twig");
    }
}
