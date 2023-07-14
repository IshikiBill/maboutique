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

/* home/index.html.twig */
class __TwigTemplate_28c8a3906711eb5e4e5359ac780c2f57 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'carousel' => [$this, 'block_carousel'],
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "home/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_carousel($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "carousel"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 4
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 5
        echo "\t<!-- Three columns of text below the carousel -->
\t

\t\t<div class=\"clearfix\">
\t\t\t<img src=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/sebnitz-g4e4d3d7dc_640.jpg"), "html", null, true);
        echo "\" class=\"col-md-6 float-md-end mb-3 ms-md-3\" alt=\"...\">

\t\t\t<p>
\t\t\t\tL’humanité et ses ancêtres utilisent les pierres depuis au moins trois millions d’années. Sur les sites archéologiques, la présence d’artefacts établit avec certitude que nos lointains ancêtres australopithèques transformaient la pierre pour en faire des outils. Plus proche de nous, les hommes préhistoriques habitaient les cavernes et vivaient ainsi quotidiennement sous la protection du règne minéral.
\t\t\t</p>

\t\t\t<p>
\t\t\t\tL’histoire de l’usage des pierres comme instruments de soin est trop ancienne pour être retracée avec certitude. Néanmoins, nous savons qu’entre 15000 et 5000 ans avant notre ère, les hommes des cavernes manipulaient les pierres dans tous les actes de leur vie quotidienne. La pierre était « portée en amulette, travaillée en statuette, dressée en temples mégalithiques : menhirs, dolmens, cromlechs…On y appelait force, fécondité… La lithothérapie était déjà née.
\t\t\t</p>

\t\t\t<p>
\t\t\t\tla lithothérapie vise à rééquilibrer  des fonctions vitales et participe donc à une harmonisation du corps et de l'esprit mais aussi à la stimulation et purification de certaines fonctions.
\t\t\t</p>
\t\t</div>
\t\t<hr>
\t\t<h3>Nos produits phares</h3>
\t\t<p>Présentation des articles les plus vendus.</p>
\t\t<div class=\"row\">
\t\t\t";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["products"]) || array_key_exists("products", $context) ? $context["products"] : (function () { throw new RuntimeError('Variable "products" does not exist.', 27, $this->source); })()));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 28
            echo "\t\t\t<div class=\"col-md-3\">
\t\t\t";
            // line 29
            $this->loadTemplate("product/single_product.html.twig", "home/index.html.twig", 29)->display($context);
            // line 30
            echo "\t\t\t</div>
\t\t\t\t
\t\t\t";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "
\t\t\t<!-- /.col-lg-4 -->

\t\t\t<!-- /.row -->


\t\t\t<!-- START THE FEATURETTES -->

\t\t\t<hr class=\"featurette-divider\"> <div class=\"row featurette\">
\t\t\t\t<div class=\"col-md-7\">
\t\t\t\t\t<h2 class=\"featurette-heading\">Créer du lien avec sa pierre,
\t\t\t\t\t\t<span class=\"text-muted\">grace à la paume de votre main.</span>
\t\t\t\t\t</h2>
\t\t\t\t\t<p class=\"lead\">Tenir sa pierre dans la main aura donc un impact vibratoire sur tout le corps ! Et sans ces petits temps d'attention, d'entretien de la relation entre la pierre et vous, on ressentira moins sa vibration.</div>
\t\t\t\t<div class=\"col-md-5\">
\t\t\t\t\t<img src=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/mano.jpg"), "html", null, true);
        echo "\" class = \"img-fluid\" alt=\"Le lien avec sa pierre\">
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<hr class=\"featurette-divider\">

\t\t\t<div class=\"row featurette\">
\t\t\t\t<div class=\"col-md-7 order-md-2\">
\t\t\t\t\t<h2 class=\"featurette-heading\">Les bougies de lithothérapie,
\t\t\t\t\t\t<span class=\"text-muted\">venez découvrir leurs bienfaits.</span>
\t\t\t\t\t</h2>
\t\t\t\t\t<p class=\"lead\">Faites l'expérience d'une bougie artisanale infusée aux pierres semi-précieuses de lithothérapie. Retrouvez en chacune d'elles, un parfum naturel et capiteux et des associations de pierres naturelles qui éveillent vos sens et répondent à votre cheminement personnel. Chaque bougie est une expérience et propose une combustion saine et propre pour votre santé et votre intérieur.</div>
\t\t\t\t<div class=\"col-md-5 order-md-1\">
\t\t\t\t\t<img src=\"";
        // line 61
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/light.jpg"), "html", null, true);
        echo "\" class = \"img-fluid\" alt=\"Les bougies\">
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t

\t\t<hr class=\"featurette-divider\"><!-- /END THE FEATURETTES -->";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "home/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  170 => 61,  154 => 48,  137 => 33,  121 => 30,  119 => 29,  116 => 28,  99 => 27,  78 => 9,  72 => 5,  65 => 4,  53 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.html.twig\" %}

{% block carousel %}{% endblock %}
{% block content %}
\t<!-- Three columns of text below the carousel -->
\t

\t\t<div class=\"clearfix\">
\t\t\t<img src=\"{{ asset('assets/img/sebnitz-g4e4d3d7dc_640.jpg') }}\" class=\"col-md-6 float-md-end mb-3 ms-md-3\" alt=\"...\">

\t\t\t<p>
\t\t\t\tL’humanité et ses ancêtres utilisent les pierres depuis au moins trois millions d’années. Sur les sites archéologiques, la présence d’artefacts établit avec certitude que nos lointains ancêtres australopithèques transformaient la pierre pour en faire des outils. Plus proche de nous, les hommes préhistoriques habitaient les cavernes et vivaient ainsi quotidiennement sous la protection du règne minéral.
\t\t\t</p>

\t\t\t<p>
\t\t\t\tL’histoire de l’usage des pierres comme instruments de soin est trop ancienne pour être retracée avec certitude. Néanmoins, nous savons qu’entre 15000 et 5000 ans avant notre ère, les hommes des cavernes manipulaient les pierres dans tous les actes de leur vie quotidienne. La pierre était « portée en amulette, travaillée en statuette, dressée en temples mégalithiques : menhirs, dolmens, cromlechs…On y appelait force, fécondité… La lithothérapie était déjà née.
\t\t\t</p>

\t\t\t<p>
\t\t\t\tla lithothérapie vise à rééquilibrer  des fonctions vitales et participe donc à une harmonisation du corps et de l'esprit mais aussi à la stimulation et purification de certaines fonctions.
\t\t\t</p>
\t\t</div>
\t\t<hr>
\t\t<h3>Nos produits phares</h3>
\t\t<p>Présentation des articles les plus vendus.</p>
\t\t<div class=\"row\">
\t\t\t{% for product in products %}
\t\t\t<div class=\"col-md-3\">
\t\t\t{% include \"product/single_product.html.twig\" %}
\t\t\t</div>
\t\t\t\t
\t\t\t{% endfor %}

\t\t\t<!-- /.col-lg-4 -->

\t\t\t<!-- /.row -->


\t\t\t<!-- START THE FEATURETTES -->

\t\t\t<hr class=\"featurette-divider\"> <div class=\"row featurette\">
\t\t\t\t<div class=\"col-md-7\">
\t\t\t\t\t<h2 class=\"featurette-heading\">Créer du lien avec sa pierre,
\t\t\t\t\t\t<span class=\"text-muted\">grace à la paume de votre main.</span>
\t\t\t\t\t</h2>
\t\t\t\t\t<p class=\"lead\">Tenir sa pierre dans la main aura donc un impact vibratoire sur tout le corps ! Et sans ces petits temps d'attention, d'entretien de la relation entre la pierre et vous, on ressentira moins sa vibration.</div>
\t\t\t\t<div class=\"col-md-5\">
\t\t\t\t\t<img src=\"{{ asset('assets/img/mano.jpg')}}\" class = \"img-fluid\" alt=\"Le lien avec sa pierre\">
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<hr class=\"featurette-divider\">

\t\t\t<div class=\"row featurette\">
\t\t\t\t<div class=\"col-md-7 order-md-2\">
\t\t\t\t\t<h2 class=\"featurette-heading\">Les bougies de lithothérapie,
\t\t\t\t\t\t<span class=\"text-muted\">venez découvrir leurs bienfaits.</span>
\t\t\t\t\t</h2>
\t\t\t\t\t<p class=\"lead\">Faites l'expérience d'une bougie artisanale infusée aux pierres semi-précieuses de lithothérapie. Retrouvez en chacune d'elles, un parfum naturel et capiteux et des associations de pierres naturelles qui éveillent vos sens et répondent à votre cheminement personnel. Chaque bougie est une expérience et propose une combustion saine et propre pour votre santé et votre intérieur.</div>
\t\t\t\t<div class=\"col-md-5 order-md-1\">
\t\t\t\t\t<img src=\"{{ asset('assets/img/light.jpg')}}\" class = \"img-fluid\" alt=\"Les bougies\">
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t

\t\t<hr class=\"featurette-divider\"><!-- /END THE FEATURETTES -->{% endblock %}
", "home/index.html.twig", "C:\\Users\\malkh\\Desktop\\Ishiki.test\\maboutique\\templates\\home\\index.html.twig");
    }
}
