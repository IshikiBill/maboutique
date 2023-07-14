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
class __TwigTemplate_5d8a2461a0f74628d609816a81b1173c extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "order/add.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "order/add.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "order/add.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript"));

        // line 4
        echo "<script src= \"https://js.stripe.com/v3/\"></script>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 8
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Paiement de ma commande - Ishiki shop";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 10
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 11
        echo "    <h2>Mon Récapitulatif</h2>
    <p>Vérifiez vos informations avant de payer votre commande.</p><hr>
    <div class=\"row\">
    <div class=\"col-md-6\">
    <strong>Mon adresse de livraison </strong><br/>
    <div class=\"form-check mt-4\">
    ";
        // line 17
        echo (isset($context["delivery"]) || array_key_exists("delivery", $context) ? $context["delivery"] : (function () { throw new RuntimeError('Variable "delivery" does not exist.', 17, $this->source); })());
        echo "
    </div>
    <hr>
    <strong>Mon transporteur</strong><br/>
    <div class=\"form-check\">
    ";
        // line 22
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["carrier"]) || array_key_exists("carrier", $context) ? $context["carrier"] : (function () { throw new RuntimeError('Variable "carrier" does not exist.', 22, $this->source); })()), "name", [], "any", false, false, false, 22), "html", null, true);
        echo "
    ";
        // line 23
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["carrier"]) || array_key_exists("carrier", $context) ? $context["carrier"] : (function () { throw new RuntimeError('Variable "carrier" does not exist.', 23, $this->source); })()), "description", [], "any", false, false, false, 23), "html", null, true);
        echo "
    ";
        // line 24
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (twig_get_attribute($this->env, $this->source, (isset($context["carrier"]) || array_key_exists("carrier", $context) ? $context["carrier"] : (function () { throw new RuntimeError('Variable "carrier" does not exist.', 24, $this->source); })()), "price", [], "any", false, false, false, 24) / 100), 2, ",", "."), "html", null, true);
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
        $context['_seq'] = twig_ensure_traversable((isset($context["cart"]) || array_key_exists("cart", $context) ? $context["cart"] : (function () { throw new RuntimeError('Variable "cart" does not exist.', 37, $this->source); })()));
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
            $context["total"] = ((isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 55, $this->source); })()) + (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "product", [], "any", false, false, false, 55), "prix", [], "any", false, false, false, 55) * twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 55)));
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
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ((isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 60, $this->source); })()) / 100), 2, ",", "."), "html", null, true);
        echo "€<br/>
    <strong>Livraison : </strong> ";
        // line 61
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (twig_get_attribute($this->env, $this->source, (isset($context["carrier"]) || array_key_exists("carrier", $context) ? $context["carrier"] : (function () { throw new RuntimeError('Variable "carrier" does not exist.', 61, $this->source); })()), "price", [], "any", false, false, false, 61) / 100), 2, ",", "."), "html", null, true);
        echo "€
    <hr>
    <strong>Total :</strong> ";
        // line 63
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (((isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 63, $this->source); })()) / 100) + (twig_get_attribute($this->env, $this->source, (isset($context["carrier"]) || array_key_exists("carrier", $context) ? $context["carrier"] : (function () { throw new RuntimeError('Variable "carrier" does not exist.', 63, $this->source); })()), "price", [], "any", false, false, false, 63) / 100)), 2, ",", "."), "html", null, true);
        echo "€

        
    <a class=\"btn btn-success btn-block mt-3\" id = checkout-button >Payer | ";
        // line 66
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (((isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 66, $this->source); })()) / 100) + (twig_get_attribute($this->env, $this->source, (isset($context["carrier"]) || array_key_exists("carrier", $context) ? $context["carrier"] : (function () { throw new RuntimeError('Variable "carrier" does not exist.', 66, $this->source); })()), "price", [], "any", false, false, false, 66) / 100)), 2, ",", "."), "html", null, true);
        echo "€
</a>
    </div>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 72
    public function block_script($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "script"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "script"));

        // line 73
        echo "<script type=\"text/javascript\"> 
var stripe = Stripe(\"";
        // line 74
        echo twig_escape_filter($this->env, (isset($context["apikeypublic"]) || array_key_exists("apikeypublic", $context) ? $context["apikeypublic"] : (function () { throw new RuntimeError('Variable "apikeypublic" does not exist.', 74, $this->source); })()), "html", null, true);
        echo "\");
var checkoutButton = document.getElementById(\"checkout-button\");

checkoutButton.addEventListener(\"click\", function () {
    fetch(\"/commande/create-session/";
        // line 78
        echo twig_escape_filter($this->env, (isset($context["reference"]) || array_key_exists("reference", $context) ? $context["reference"] : (function () { throw new RuntimeError('Variable "reference" does not exist.', 78, $this->source); })()), "html", null, true);
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
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

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
        return array (  274 => 87,  262 => 78,  255 => 74,  252 => 73,  242 => 72,  227 => 66,  221 => 63,  216 => 61,  212 => 60,  207 => 57,  201 => 56,  199 => 55,  190 => 51,  185 => 49,  178 => 45,  173 => 43,  169 => 42,  161 => 39,  158 => 38,  153 => 37,  151 => 36,  136 => 24,  132 => 23,  128 => 22,  120 => 17,  112 => 11,  102 => 10,  83 => 8,  71 => 4,  61 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block javascript %}
<script src= \"https://js.stripe.com/v3/\"></script>

{% endblock %}

{% block title %}Paiement de ma commande - Ishiki shop{% endblock %}

{% block content %}
    <h2>Mon Récapitulatif</h2>
    <p>Vérifiez vos informations avant de payer votre commande.</p><hr>
    <div class=\"row\">
    <div class=\"col-md-6\">
    <strong>Mon adresse de livraison </strong><br/>
    <div class=\"form-check mt-4\">
    {{ delivery|raw }}
    </div>
    <hr>
    <strong>Mon transporteur</strong><br/>
    <div class=\"form-check\">
    {{ carrier.name }}
    {{ carrier.description }}
    {{ (carrier.price / 100)|number_format(2, ',','.') }}€
    </div>
    
    
   
    </div>
    <div class=\"col-md-6\">
    <div class=\"text-center\">
    <b>Ma commande</b><br>
    </div>
    
    <div class=\"order-summary\">
    {% set total = null %}
    {% for key,product in cart %}
    
    <div class=\"row {% if key > 0 %}mt-2{%  endif %}\">
      <div class=\"col-8 my-auto \">
      
            {{ product.product.name }}<br/>
\t\t\t<small>{{ product.product.subtitle }}
                <br/>
                x {{ product.quantity }}</small>
        
        </div>
        <div class=\"col-2 my-auto\">
       <td>{{ ((product.product.prix * product.quantity) / 100) |number_format(2, ',','.') }}€</td>
        </div>
        <div class=\"col-2 mb-1  \" ><img src=\"/uploads/{{ product.product.illustration }}\" alt=\"{{ product.product.name }} \" height=\"75px\">
        </div>
      
    </div>
   {% set total = total + (product.product.prix * product.quantity) %}
    {% endfor %}
    </div>

    <hr>
    <strong>Sous-Total : </strong>{{ (total / 100) |number_format(2, ',','.') }}€<br/>
    <strong>Livraison : </strong> {{ (carrier.price / 100) |number_format(2, ',','.') }}€
    <hr>
    <strong>Total :</strong> {{ ((total / 100) + (carrier.price / 100)) |number_format(2, ',','.') }}€

        
    <a class=\"btn btn-success btn-block mt-3\" id = checkout-button >Payer | {{ ((total / 100) + (carrier.price / 100)) |number_format(2, ',','.') }}€
</a>
    </div>
    </div>
{% endblock %}

{% block script %}
<script type=\"text/javascript\"> 
var stripe = Stripe(\"{{ apikeypublic }}\");
var checkoutButton = document.getElementById(\"checkout-button\");

checkoutButton.addEventListener(\"click\", function () {
    fetch(\"/commande/create-session/{{ reference }}\", {
        method: \"POST\",
    })
    .then(function (response){
        return response.json();
    })
    .then(function (session){
        if (session.error == 'order') {
            // redirection
            window.location.replace('{{ path('app_order') }}')

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
{% endblock %}
", "order/add.html.twig", "C:\\Users\\malkh\\Desktop\\Ishiki.test\\maboutique\\templates\\order\\add.html.twig");
    }
}
