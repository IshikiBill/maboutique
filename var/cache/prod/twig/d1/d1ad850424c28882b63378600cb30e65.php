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

/* account/address.html.twig */
class __TwigTemplate_498862983adb482bd83f2cf3d574df68 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "account/address.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Mes adresses - Ishiki Shop
";
    }

    // line 6
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 7
        echo "\t<a href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_account_address_add");
        echo "\" class=\"btn btn-info btn-sm float-right\">Ajouter une adresse</a>
\t<h1>Mes adresses</h1>
\tBienvenue
\t";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 10), "firstname", [], "any", false, false, false, 10), "html", null, true);
        echo "
\tdans votre compte.
\t<br/>
\tC'est dans cet espace que vous allez pouvoir gérer vos adresses.
\t<a href=\"";
        // line 14
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_account");
        echo "\"></br>
\tRetour</a>
<hr>
";
        // line 17
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 17), "addresses", [], "any", false, false, false, 17)) == 0)) {
            // line 18
            echo "\t<p class=\"text-center\">
\t\tVous n'avez pas encore ajouté d'adresse dans votre compte client. Pour en ajouter une, veuillez
\t\t<a href=\"";
            // line 20
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_account_address_add");
            echo "\">Cliquer ici</a>
\t</p>
";
        } else {
            // line 23
            echo "\t<div class=\"row\">
\t\t";
            // line 24
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 24), "addresses", [], "any", false, false, false, 24));
            foreach ($context['_seq'] as $context["_key"] => $context["address"]) {
                // line 25
                echo "\t\t\t<div class=\"col-md-4\">
\t\t\t\t<div class=\"card\" style=\"width: 18rem;\">
\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t<h5 class=\"card-title\">";
                // line 28
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["address"], "name", [], "any", false, false, false, 28), "html", null, true);
                echo "</h5>
\t\t\t\t\t\t<p class=\"card-text\">
\t\t\t\t\t\t\t";
                // line 30
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["address"], "address", [], "any", false, false, false, 30), "html", null, true);
                echo ",<br/>
\t\t\t\t\t\t\t";
                // line 31
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["address"], "postal", [], "any", false, false, false, 31), "html", null, true);
                echo "
\t\t\t\t\t\t\t-
\t\t\t\t\t\t\t";
                // line 33
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["address"], "city", [], "any", false, false, false, 33), "html", null, true);
                echo "
\t\t\t\t\t\t\t-
\t\t\t\t\t\t\t";
                // line 35
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["address"], "country", [], "any", false, false, false, 35), "html", null, true);
                echo "
\t\t\t\t\t\t</p>
\t\t\t\t\t\t<a href=\"";
                // line 37
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_account_address_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["address"], "id", [], "any", false, false, false, 37)]), "html", null, true);
                echo "\">Modifier</a>
\t\t\t\t\t\t|
\t\t\t\t\t\t<a href=\"";
                // line 39
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_account_address_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["address"], "id", [], "any", false, false, false, 39)]), "html", null, true);
                echo "\">Supprimer</a>

\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['address'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 45
            echo "\t</div>
";
        }
    }

    public function getTemplateName()
    {
        return "account/address.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  144 => 45,  132 => 39,  127 => 37,  122 => 35,  117 => 33,  112 => 31,  108 => 30,  103 => 28,  98 => 25,  94 => 24,  91 => 23,  85 => 20,  81 => 18,  79 => 17,  73 => 14,  66 => 10,  59 => 7,  55 => 6,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "account/address.html.twig", "C:\\Users\\malkh\\Desktop\\Ishiki.test\\maboutique\\templates\\account\\address.html.twig");
    }
}
