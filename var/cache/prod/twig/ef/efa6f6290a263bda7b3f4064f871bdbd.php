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

/* learn_more/index.html.twig */
class __TwigTemplate_a1b242576bdc0ad3bc613aa089f871b1 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "learn_more/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "En savoir un peu plus sur Ishiki";
    }

    // line 5
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "    <h1>Ishiki</h1>
    <div class=\"logo\">
        <img width=\"197\" height=\"60\" src=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/sunshine.jpg"), "html", null, true);
        echo "\" style=\"max-width:100%;height:auto;\" alt=\"image du jour qui se lève\">
        <p>2023 Angel Number Meaning For Manifestation</p>
    </div>

    <main>
        <section>
            <div>
                <h2>Qu'est-ce que la lithothérapie ?</h2>
                <p>La lithothérapie est une pratique alternative qui utilise les propriétés et les énergies des pierres et des cristaux pour promouvoir la guérison, l'équilibre et le bien-être physique, émotionnel et spirituel. Cette pratique est basée sur l'idée que les cristaux émettent des vibrations spécifiques qui peuvent interagir avec les énergies du corps humain.</p>

                <p>Selon les partisans de la lithothérapie, chaque cristal possède une vibration unique et des propriétés spécifiques qui peuvent être utilisées pour influencer différents aspects de la santé et du bien-être. Par exemple, certaines pierres sont considérées comme ayant des propriétés apaisantes et relaxantes, tandis que d'autres sont censées favoriser l'énergie et la vitalité.</p>

                <p>La lithothérapie peut être utilisée de différentes manières, notamment en portant des bijoux en pierres, en plaçant des cristaux sur le corps, en les utilisant lors de séances de méditation ou de guérison, ou en les intégrant dans des environnements tels que la maison ou le lieu de travail.</p>

                <p>Il convient de noter que la lithothérapie est considérée comme une approche complémentaire et ne remplace pas les traitements médicaux traditionnels. Elle est souvent utilisée en conjonction avec d'autres pratiques de bien-être et de médecine alternative pour soutenir le processus de guérison et promouvoir un équilibre global. Comme pour toute pratique de bien-être, il est recommandé de consulter un professionnel de la santé avant d'entreprendre un traitement basé sur la lithothérapie.</p>
            </div>
        </section>

        <section class=\"flexbox-container\">
            <div class=\"flexbox-item\">
                <img src=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/article1.jpg"), "html", null, true);
        echo "\" alt=\"Article 1\">
                <h3>Titre de l'article 1</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec vel velit lorem. Sed mattis felis eu justo ultricies, sed commodo nulla convallis.</p>
            </div>

            <div class=\"flexbox-item\">
                <img src=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/article2.jpg"), "html", null, true);
        echo "\" alt=\"Article 2\">
                <h3>Titre de l'article 2</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec vel velit lorem. Sed mattis felis eu justo ultricies, sed commodo nulla convallis.</p>
            </div>

            <div class=\"flexbox-item\">
                <img src=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/article3.jpg"), "html", null, true);
        echo "\" alt=\"Article 3\">
                <h3>Titre de l'article 3</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec vel velit lorem. Sed mattis felis eu justo ultricies, sed commodo nulla convallis.</p>
            </div>
        </section>
    </main>
";
    }

    public function getTemplateName()
    {
        return "learn_more/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  103 => 40,  94 => 34,  85 => 28,  62 => 8,  58 => 6,  54 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "learn_more/index.html.twig", "C:\\Users\\malkh\\Desktop\\Ishiki.test\\maboutique\\templates\\learn_more\\index.html.twig");
    }
}
