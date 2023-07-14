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
class __TwigTemplate_a79173585a26f0c9fe49d5f6c1fbda3b extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "account/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Mon compte - Ishiki Shop
";
    }

    // line 6
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
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
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 12), "firstname", [], "any", false, false, false, 12), "html", null, true);
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
        return array (  115 => 38,  111 => 37,  103 => 32,  99 => 31,  91 => 26,  87 => 25,  78 => 18,  69 => 12,  64 => 9,  62 => 8,  59 => 7,  55 => 6,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "account/index.html.twig", "C:\\Users\\malkh\\Desktop\\Ishiki.test\\maboutique\\templates\\account\\index.html.twig");
    }
}
