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

/* order/index.html.twig */
class __TwigTemplate_a092ca757ff54bb15e06ac2161fe28f2 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "order/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Valider ma commande - Ishiki shop";
    }

    // line 5
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "    <h2>Je passe ma commande</h2>
    <p>Choisissez vos préférences avant de passer votre commande sur la boutique Ishiki.</p><hr>
    <div class=\"row\">
    <div class=\"col-md-6\">
    ";
        // line 10
        ob_start(function () { return ''; });
        // line 11
        echo "    ";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start', ["action" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_order_recap")]);
        echo "
        ";
        // line 12
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "addresses", [], "any", false, false, false, 12), 'label', ["label" => "Choisissez votre adresse de livraison"]);
        echo "
        <a href=\"";
        // line 13
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_account_address_add");
        echo "\">Ajouter une nouvelle adresse</a> 
    ";
        // line 14
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
        echo "
    ";
        $context["formHtml"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 16
        echo "    ";
        echo twig_replace_filter(($context["formHtml"] ?? null), ["[br]" => "<br/>"]);
        echo "
   
    </div>
    <div class=\"col-md-6\">
    <div class=\"text-center\">
    <b>Récapitulatif de ma commande</b><br>
    <p> Retrouvez le récapitulatif de vos produits</p>
    </div>
    
    <div class=\"order-summary\">
    
    ";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["cart"] ?? null));
        foreach ($context['_seq'] as $context["key"] => $context["product"]) {
            // line 28
            echo "    
    <div class=\"row ";
            // line 29
            if (($context["key"] > 0)) {
                echo "mt-2";
            }
            echo "\">
      <div class=\"col-8 my-auto \">
            ";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "product", [], "any", false, false, false, 31), "name", [], "any", false, false, false, 31), "html", null, true);
            echo "<br/>
\t\t\t<small>";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "product", [], "any", false, false, false, 32), "subtitle", [], "any", false, false, false, 32), "html", null, true);
            echo "</small>
        
        </div>
        <div class=\"col-2 my-auto\">
        x ";
            // line 36
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 36), "html", null, true);
            echo "
        </div>
        <div class=\"col-2 mb-1  \" ><img src=\"/uploads/";
            // line 38
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "product", [], "any", false, false, false, 38), "illustration", [], "any", false, false, false, 38), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "product", [], "any", false, false, false, 38), "name", [], "any", false, false, false, 38), "html", null, true);
            echo " \" height=\"75px\">
        </div>
      
    </div>
   
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        echo "    </div>
        
    
    </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "order/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  143 => 44,  129 => 38,  124 => 36,  117 => 32,  113 => 31,  106 => 29,  103 => 28,  99 => 27,  84 => 16,  79 => 14,  75 => 13,  71 => 12,  66 => 11,  64 => 10,  58 => 6,  54 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "order/index.html.twig", "C:\\Users\\malkh\\Desktop\\Ishiki.test\\maboutique\\templates\\order\\index.html.twig");
    }
}
