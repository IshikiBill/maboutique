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

/* order/add.html.twig */
class __TwigTemplate_2aa2ad1e149b20dfceb72e8b8f9a2166 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'javascript' => [$this, 'block_javascript'],
            'title' => [$this, 'block_title'],
            'content' => [$this, 'block_content'],
            'script' => [$this, 'block_script'],
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
        $this->parent = $this->loadTemplate("base.html.twig", "order/add.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "<script src= \"https://js.stripe.com/v3/\"></script>

";
    }

    // line 8
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Paiement de ma commande - Ishiki shop";
    }

    // line 10
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 11
        echo "    <h2>Mon Récapitulatif</h2>
    <p>Vérifiez vos informations avant de payer votre commande.</p><hr>
    <div class=\"row\">
    <div class=\"col-md-6\">
    <strong>Mon adresse de livraison </strong><br/>
    <div class=\"form-check mt-4\">
    ";
        // line 17
        echo ($context["delivery"] ?? null);
        echo "
    </div>
    <hr>
    <strong>Mon transporteur</strong><br/>
    <div class=\"form-check\">
    ";
        // line 22
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["carrier"] ?? null), "name", [], "any", false, false, false, 22), "html", null, true);
        echo "
    ";
        // line 23
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["carrier"] ?? null), "description", [], "any", false, false, false, 23), "html", null, true);
        echo "
    ";
        // line 24
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (twig_get_attribute($this->env, $this->source, ($context["carrier"] ?? null), "price", [], "any", false, false, false, 24) / 100), 2, ",", "."), "html", null, true);
        echo "€
    </div>
    
    
   
    </div>
    <div class=\"col-md-6\">
    <div class=\"text-center\">
    <b>Ma commande</b><br>
    </div>
    
    <div class=\"order-summary\">
    ";
        // line 36
        $context["total"] = null;
        // line 37
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["cart"] ?? null));
        foreach ($context['_seq'] as $context["key"] => $context["product"]) {
            // line 38
            echo "    
    <div class=\"row ";
            // line 39
            if (($context["key"] > 0)) {
                echo "mt-2";
            }
            echo "\">
      <div class=\"col-8 my-auto \">
      
            ";
            // line 42
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "product", [], "any", false, false, false, 42), "name", [], "any", false, false, false, 42), "html", null, true);
            echo "<br/>
\t\t\t<small>";
            // line 43
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "product", [], "any", false, false, false, 43), "subtitle", [], "any", false, false, false, 43), "html", null, true);
            echo "
                <br/>
                x ";
            // line 45
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 45), "html", null, true);
            echo "</small>
        
        </div>
        <div class=\"col-2 my-auto\">
       <td>";
            // line 49
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "product", [], "any", false, false, false, 49), "prix", [], "any", false, false, false, 49) * twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 49)) / 100), 2, ",", "."), "html", null, true);
            echo "€</td>
        </div>
        <div class=\"col-2 mb-1  \" ><img src=\"/uploads/";
            // line 51
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "product", [], "any", false, false, false, 51), "illustration", [], "any", false, false, false, 51), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "product", [], "any", false, false, false, 51), "name", [], "any", false, false, false, 51), "html", null, true);
            echo " \" height=\"75px\">
        </div>
      
    </div>
   ";
            // line 55
            $context["total"] = (($context["total"] ?? null) + (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "product", [], "any", false, false, false, 55), "prix", [], "any", false, false, false, 55) * twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 55)));
            // line 56
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 57
        echo "    </div>

    <hr>
    <strong>Sous-Total : </strong>";
        // line 60
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (($context["total"] ?? null) / 100), 2, ",", "."), "html", null, true);
        echo "€<br/>
    <strong>Livraison : </strong> ";
        // line 61
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (twig_get_attribute($this->env, $this->source, ($context["carrier"] ?? null), "price", [], "any", false, false, false, 61) / 100), 2, ",", "."), "html", null, true);
        echo "€
    <hr>
    <strong>Total :</strong> ";
        // line 63
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ((($context["total"] ?? null) / 100) + (twig_get_attribute($this->env, $this->source, ($context["carrier"] ?? null), "price", [], "any", false, false, false, 63) / 100)), 2, ",", "."), "html", null, true);
        echo "€

        
    <a class=\"btn btn-success btn-block mt-3\" id = checkout-button >Payer | ";
        // line 66
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ((($context["total"] ?? null) / 100) + (twig_get_attribute($this->env, $this->source, ($context["carrier"] ?? null), "price", [], "any", false, false, false, 66) / 100)), 2, ",", "."), "html", null, true);
        echo "€
</a>
    </div>
    </div>
";
    }

    // line 72
    public function block_script($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 73
        echo "<script type=\"text/javascript\"> 
var stripe = Stripe(\"";
        // line 74
        echo twig_escape_filter($this->env, ($context["apikeypublic"] ?? null), "html", null, true);
        echo "\");
var checkoutButton = document.getElementById(\"checkout-button\");

checkoutButton.addEventListener(\"click\", function () {
    fetch(\"/commande/create-session/";
        // line 78
        echo twig_escape_filter($this->env, ($context["reference"] ?? null), "html", null, true);
        echo "\", {
        method: \"POST\",
    })
    .then(function (response){
        return response.json();
    })
    .then(function (session){
        if (session.error == 'order') {
            // redirection
            window.location.replace('";
        // line 87
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_order");
        echo "')

        }else{
            return stripe.redirectToCheckout({ sessionId: session.id });
        }
       
    })
    .then(function (result){
        // If redirectToCheckout fails due to a browser or network
        // error, you should display the localized error message to your
        // customer using error.message.
        if (result.error.message) {
            alert(result.error.message);

        }

    })
    .catch(function (error) {
        console.error(\"Error\", error);
    });
    });

</script>
";
    }

    public function getTemplateName()
    {
        return "order/add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  220 => 87,  208 => 78,  201 => 74,  198 => 73,  194 => 72,  185 => 66,  179 => 63,  174 => 61,  170 => 60,  165 => 57,  159 => 56,  157 => 55,  148 => 51,  143 => 49,  136 => 45,  131 => 43,  127 => 42,  119 => 39,  116 => 38,  111 => 37,  109 => 36,  94 => 24,  90 => 23,  86 => 22,  78 => 17,  70 => 11,  66 => 10,  59 => 8,  53 => 4,  49 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "order/add.html.twig", "C:\\Users\\malkh\\Desktop\\Ishiki.test\\maboutique\\templates\\order\\add.html.twig");
    }
}
