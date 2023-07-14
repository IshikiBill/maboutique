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

/* security/login.html.twig */
class __TwigTemplate_0d96679a0fdfc7e302e8e1ba014e1e55 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "security/login.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Se connecter - Ishiki Shop
";
    }

    // line 6
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 7
        echo "\t<div class=\"block-small\">
\t\t<form method=\"post\">
\t\t\t";
        // line 9
        if (($context["error"] ?? null)) {
            // line 10
            echo "\t\t\t\t<div class=\"alert alert-danger\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, ($context["error"] ?? null), "messageKey", [], "any", false, false, false, 10), twig_get_attribute($this->env, $this->source, ($context["error"] ?? null), "messageData", [], "any", false, false, false, 10), "security"), "html", null, true);
            echo "</div>
\t\t\t";
        }
        // line 12
        echo "
\t\t\t";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "flashes", [0 => "notice"], "method", false, false, false, 13));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 14
            echo "\t\t\t\t<div class=\"alert alert-info\">";
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "</div>

\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "
\t\t\t";
        // line 18
        if (twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 18)) {
            // line 19
            echo "\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\tYou are logged in as
\t\t\t\t\t";
            // line 21
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 21), "userIdentifier", [], "any", false, false, false, 21), "html", null, true);
            echo ",
\t\t\t\t\t<a href=\"";
            // line 22
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\">Logout</a>
\t\t\t\t</div>
\t\t\t";
        }
        // line 25
        echo "
\t\t\t<h1 class=\"h3 mb-3 font-weight-normal\">Merci de vous connecter</h1>
\t\t\t<label for=\"inputEmail\">Votre email</label>
\t\t\t<input type=\"email\" value=\"";
        // line 28
        echo twig_escape_filter($this->env, ($context["last_username"] ?? null), "html", null, true);
        echo "\" name=\"email\" id=\"inputEmail\" class=\"form-control\" autocomplete=\"email\" placeholder=\"Votre adresse email\" required autofocus>
\t\t\t<label for=\"inputPassword\">Votre mot de passe</label>
\t\t\t<input type=\"password\" name=\"password\" id=\"inputPassword\" class=\"form-control\" autocomplete=\"current-password\" placeholder=\"Votre mot de passe\" required>

\t\t\t<input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"), "html", null, true);
        echo "\">


\t\t\t<button class=\"btn btn-lg btn-info btn-block mt-3\" type=\"submit\">
\t\t\t\tSe Connecter
\t\t\t</button>
\t\t\t<hr>
\t\t\t<p class=\"text-center\">
\t\t\t\t<a href=\"";
        // line 40
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reset_password");
        echo "\">Mot de passe oublié</a>
\t\t\t</p>
\t\t\t<p class=\"text-center\">Ou souhaitez-vous
\t\t\t\t<a href=\"";
        // line 43
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
        echo "\">Créer un compte</a>
\t\t\t</p>
\t\t</form>
\t</div>
";
    }

    public function getTemplateName()
    {
        return "security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  136 => 43,  130 => 40,  119 => 32,  112 => 28,  107 => 25,  101 => 22,  97 => 21,  93 => 19,  91 => 18,  88 => 17,  78 => 14,  74 => 13,  71 => 12,  65 => 10,  63 => 9,  59 => 7,  55 => 6,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "security/login.html.twig", "C:\\Users\\malkh\\Desktop\\Ishiki.test\\maboutique\\templates\\security\\login.html.twig");
    }
}
