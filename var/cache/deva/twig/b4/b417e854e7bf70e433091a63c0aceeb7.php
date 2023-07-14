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

/* product/single_product.html.twig */
class __TwigTemplate_977ecbe8acac3b6719458021b1025acc extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "product/single_product.html.twig"));

        // line 1
        echo "<div class=\"product-item text-center\">
\t\t\t\t\t\t\t\t<a href=\"";
        // line 2
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_product", ["slug" => twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 2, $this->source); })()), "slug", [], "any", false, false, false, 2)]), "html", null, true);
        echo "\"><img src=\"/uploads/";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 2, $this->source); })()), "illustration", [], "any", false, false, false, 2), "html", null, true);
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 2, $this->source); })()), "name", [], "any", false, false, false, 2), "html", null, true);
        echo "\" class=\"img-fluid\"></a>
\t\t\t\t\t\t\t\t<h5>";
        // line 3
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 3, $this->source); })()), "name", [], "any", false, false, false, 3), "html", null, true);
        echo "</h5>
\t\t\t\t\t\t\t\t<span class=\"product-subtitle\">";
        // line 4
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 4, $this->source); })()), "subtitle", [], "any", false, false, false, 4), "html", null, true);
        echo "</span>
\t\t\t\t\t\t\t\t<span class=\"product-prix\">";
        // line 5
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 5, $this->source); })()), "prix", [], "any", false, false, false, 5) / 100), 2, ",", "."), "html", null, true);
        echo "
\t\t\t\t\t\t\t\t\t€</span>
\t\t\t\t\t\t\t</div>";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "product/single_product.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 5,  55 => 4,  51 => 3,  43 => 2,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"product-item text-center\">
\t\t\t\t\t\t\t\t<a href=\"{{ path('app_product', { 'slug' : product.slug }) }}\"><img src=\"/uploads/{{ product.illustration }}\" alt=\"{{ product.name }}\" class=\"img-fluid\"></a>
\t\t\t\t\t\t\t\t<h5>{{ product.name}}</h5>
\t\t\t\t\t\t\t\t<span class=\"product-subtitle\">{{ product.subtitle }}</span>
\t\t\t\t\t\t\t\t<span class=\"product-prix\">{{ (product.prix / 100) |number_format(2, ',','.') }}
\t\t\t\t\t\t\t\t\t€</span>
\t\t\t\t\t\t\t</div>", "product/single_product.html.twig", "C:\\Users\\malkh\\Desktop\\Ishiki.test\\maboutique\\templates\\product\\single_product.html.twig");
    }
}
