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

/* account/index.html.twig */
class __TwigTemplate_43abf0e161c24f9f0ceeafa1781c768f extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "account/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "account/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Mon compte - Ishiki Shop
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 6
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 7
        echo "\t<h1>Mon compte</h1>
\t";
        // line 8
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 9
            echo "\t\t<small><a href=\"/admin\">Vous êtes un administrateur, accéder au backoffice ?</a></small>
\t\t<br/>
\tBienvenue
\t";
            // line 12
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 12, $this->source); })()), "user", [], "any", false, false, false, 12), "firstname", [], "any", false, false, false, 12), "html", null, true);
            echo "
\tdans votre compte.
\t<br/>
\tC'est dans cet espace que vous allez pouvoir gérer vos informations personnelles.
\t<hr>
\t";
        }
        // line 18
        echo "\t

\t

\t<div class=\"row\">
\t\t<div class=\"col-md-4\">
\t\t\t<div class=\"account-item text-center\" >
\t\t\t\t<img src=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/securite.png"), "html", null, true);
        echo "\" alt=\"Mot-de-passe\">
\t\t\t\t<a href=\"";
        // line 26
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_account_password");
        echo "\">Modifier mon mot de passe</a>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"col-md-4\">
\t\t\t<div class=\"account-item text-center\" >
\t\t\t\t<img src=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/annuaire.png"), "html", null, true);
        echo "\" alt=\"Gérer mes adresses\">
\t\t\t\t<a href=\"";
        // line 32
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_account_address");
        echo "\">Gérer mes adresses</a>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"col-md-4\">
\t\t\t<div class=\"account-item text-center\" >
\t\t\t\t<img src=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/logistique.png"), "html", null, true);
        echo "\" alt=\"Commandes\">
\t\t\t\t<a href=\"";
        // line 38
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_account_order");
        echo "\">Mes commandes</a>
\t\t\t</div>
\t\t</div>
\t</div>
\t
\t<br/>
\t<hr>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "account/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  130 => 38,  126 => 37,  118 => 32,  114 => 31,  106 => 26,  102 => 25,  93 => 18,  84 => 12,  79 => 9,  77 => 8,  74 => 7,  67 => 6,  53 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Mon compte - Ishiki Shop
{% endblock %}

{% block content %}
\t<h1>Mon compte</h1>
\t{% if is_granted('ROLE_ADMIN') %}
\t\t<small><a href=\"/admin\">Vous êtes un administrateur, accéder au backoffice ?</a></small>
\t\t<br/>
\tBienvenue
\t{{ app.user.firstname }}
\tdans votre compte.
\t<br/>
\tC'est dans cet espace que vous allez pouvoir gérer vos informations personnelles.
\t<hr>
\t{% endif %}
\t

\t

\t<div class=\"row\">
\t\t<div class=\"col-md-4\">
\t\t\t<div class=\"account-item text-center\" >
\t\t\t\t<img src=\"{{ asset('assets/img/securite.png') }}\" alt=\"Mot-de-passe\">
\t\t\t\t<a href=\"{{ path ('app_account_password') }}\">Modifier mon mot de passe</a>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"col-md-4\">
\t\t\t<div class=\"account-item text-center\" >
\t\t\t\t<img src=\"{{ asset('assets/img/annuaire.png') }}\" alt=\"Gérer mes adresses\">
\t\t\t\t<a href=\"{{ path ('app_account_address') }}\">Gérer mes adresses</a>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"col-md-4\">
\t\t\t<div class=\"account-item text-center\" >
\t\t\t\t<img src=\"{{ asset('assets/img/logistique.png') }}\" alt=\"Commandes\">
\t\t\t\t<a href=\"{{ path ('app_account_order') }}\">Mes commandes</a>
\t\t\t</div>
\t\t</div>
\t</div>
\t
\t<br/>
\t<hr>
{% endblock %}
", "account/index.html.twig", "C:\\Users\\malkh\\Desktop\\Ishiki.test\\maboutique\\templates\\account\\index.html.twig");
    }
}
