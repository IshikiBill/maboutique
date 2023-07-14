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

/* @EasyAdmin/layout.html.twig */
class __TwigTemplate_d75ef5f59e038d958ee6bb907fe844e5 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'head_metas' => [$this, 'block_head_metas'],
            'page_title' => [$this, 'block_page_title'],
            'head_stylesheets' => [$this, 'block_head_stylesheets'],
            'configured_stylesheets' => [$this, 'block_configured_stylesheets'],
            'head_favicon' => [$this, 'block_head_favicon'],
            'head_javascript' => [$this, 'block_head_javascript'],
            'configured_javascripts' => [$this, 'block_configured_javascripts'],
            'configured_head_contents' => [$this, 'block_configured_head_contents'],
            'body' => [$this, 'block_body'],
            'body_attr' => [$this, 'block_body_attr'],
            'body_id' => [$this, 'block_body_id'],
            'body_class' => [$this, 'block_body_class'],
            'javascript_page_layout' => [$this, 'block_javascript_page_layout'],
            'javascript_page_color_scheme' => [$this, 'block_javascript_page_color_scheme'],
            'wrapper_wrapper' => [$this, 'block_wrapper_wrapper'],
            'flash_messages' => [$this, 'block_flash_messages'],
            'user_menu' => [$this, 'block_user_menu'],
            'wrapper' => [$this, 'block_wrapper'],
            'responsive_header' => [$this, 'block_responsive_header'],
            'responsive_header_logo' => [$this, 'block_responsive_header_logo'],
            'sidebar' => [$this, 'block_sidebar'],
            'header' => [$this, 'block_header'],
            'header_navbar' => [$this, 'block_header_navbar'],
            'header_logo' => [$this, 'block_header_logo'],
            'main_menu_wrapper' => [$this, 'block_main_menu_wrapper'],
            'content_top_header' => [$this, 'block_content_top_header'],
            'search_wrapper' => [$this, 'block_search_wrapper'],
            'search' => [$this, 'block_search'],
            'search_form' => [$this, 'block_search_form'],
            'search_form_filters' => [$this, 'block_search_form_filters'],
            'header_custom_menu_wrapper' => [$this, 'block_header_custom_menu_wrapper'],
            'header_custom_menu' => [$this, 'block_header_custom_menu'],
            'settings_dropdown_wrapper' => [$this, 'block_settings_dropdown_wrapper'],
            'content' => [$this, 'block_content'],
            'content_header_wrapper' => [$this, 'block_content_header_wrapper'],
            'content_header' => [$this, 'block_content_header'],
            'content_title' => [$this, 'block_content_title'],
            'content_help' => [$this, 'block_content_help'],
            'page_actions_wrapper' => [$this, 'block_page_actions_wrapper'],
            'page_actions' => [$this, 'block_page_actions'],
            'main' => [$this, 'block_main'],
            'content_footer_wrapper' => [$this, 'block_content_footer_wrapper'],
            'body_javascript' => [$this, 'block_body_javascript'],
            'configured_body_contents' => [$this, 'block_configured_body_contents'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        $context["__internal_9405f6032f5e4827a2a81d6542c88bf725294ffdc42cb6123ee51b931ecde3df"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "i18n", [], "any", false, false, false, 2), "translationDomain", [], "any", false, false, false, 2);
        // line 3
        echo "
<!DOCTYPE html>
<html lang=\"";
        // line 5
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "i18n", [], "any", false, false, false, 5), "htmlLocale", [], "any", false, false, false, 5), "html", null, true);
        echo "\" dir=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "i18n", [], "any", false, false, false, 5), "textDirection", [], "any", false, false, false, 5), "html", null, true);
        echo "\" data-turbo=\"false\">
<head>
    ";
        // line 7
        $this->displayBlock('head_metas', $context, $blocks);
        // line 14
        echo "
    ";
        // line 15
        ob_start(function () { return ''; });
        $this->displayBlock('page_title', $context, $blocks);
        $context["page_title_block_output"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 16
        echo "    <title>";
        echo twig_striptags(($context["page_title_block_output"] ?? null));
        echo "</title>

    ";
        // line 18
        $this->displayBlock('head_stylesheets', $context, $blocks);
        // line 21
        echo "
    ";
        // line 22
        $this->displayBlock('configured_stylesheets', $context, $blocks);
        // line 26
        echo "
    ";
        // line 27
        $this->displayBlock('head_favicon', $context, $blocks);
        // line 30
        echo "
    ";
        // line 31
        $this->displayBlock('head_javascript', $context, $blocks);
        // line 34
        echo "
    ";
        // line 35
        $this->displayBlock('configured_javascripts', $context, $blocks);
        // line 39
        echo "
    ";
        // line 40
        if (("rtl" == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "i18n", [], "any", false, false, false, 40), "textDirection", [], "any", false, false, false, 40))) {
            // line 41
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("app.rtl.css", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "assets", [], "any", false, false, false, 41), "defaultAssetPackageName", [], "any", false, false, false, 41)), "html", null, true);
            echo "\">
    ";
        }
        // line 43
        echo "
    ";
        // line 44
        $this->displayBlock('configured_head_contents', $context, $blocks);
        // line 49
        echo "</head>

";
        // line 51
        $this->displayBlock('body', $context, $blocks);
        // line 385
        echo "</html>
";
    }

    // line 7
    public function block_head_metas($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 8
        echo "        <meta charset=\"utf-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"robots\" content=\"noindex, nofollow, noarchive, nosnippet, noodp, noimageindex, notranslate, nocache\" />
        <meta content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no\" name=\"viewport\">
        <meta name=\"generator\" content=\"EasyAdmin\" />
    ";
    }

    // line 15
    public function block_page_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->displayBlock("content_title", $context, $blocks);
    }

    // line 18
    public function block_head_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 19
        echo "        <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("app.css", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "assets", [], "any", false, false, false, 19), "defaultAssetPackageName", [], "any", false, false, false, 19)), "html", null, true);
        echo "\">
    ";
    }

    // line 22
    public function block_configured_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 23
        echo "        ";
        echo twig_include($this->env, $context, "@EasyAdmin/includes/_css_assets.html.twig", ["assets" => (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "assets", [], "any", false, true, false, 23), "cssAssets", [], "any", true, true, false, 23) &&  !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "assets", [], "any", false, true, false, 23), "cssAssets", [], "any", false, false, false, 23)))) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "assets", [], "any", false, true, false, 23), "cssAssets", [], "any", false, false, false, 23)) : ([]))], false);
        echo "
        ";
        // line 24
        echo twig_include($this->env, $context, "@EasyAdmin/includes/_encore_link_tags.html.twig", ["assets" => (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "assets", [], "any", false, true, false, 24), "webpackEncoreAssets", [], "any", true, true, false, 24) &&  !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "assets", [], "any", false, true, false, 24), "webpackEncoreAssets", [], "any", false, false, false, 24)))) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "assets", [], "any", false, true, false, 24), "webpackEncoreAssets", [], "any", false, false, false, 24)) : ([]))], false);
        echo "
    ";
    }

    // line 27
    public function block_head_favicon($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 28
        echo "        <link rel=\"shortcut icon\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "dashboardFaviconPath", [], "any", false, false, false, 28)), "html", null, true);
        echo "\">
    ";
    }

    // line 31
    public function block_head_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 32
        echo "        <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("app.js", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "assets", [], "any", false, false, false, 32), "defaultAssetPackageName", [], "any", false, false, false, 32)), "html", null, true);
        echo "\"></script>
    ";
    }

    // line 35
    public function block_configured_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 36
        echo "        ";
        echo twig_include($this->env, $context, "@EasyAdmin/includes/_js_assets.html.twig", ["assets" => (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "assets", [], "any", false, true, false, 36), "jsAssets", [], "any", true, true, false, 36) &&  !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "assets", [], "any", false, true, false, 36), "jsAssets", [], "any", false, false, false, 36)))) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "assets", [], "any", false, true, false, 36), "jsAssets", [], "any", false, false, false, 36)) : ([]))], false);
        echo "
        ";
        // line 37
        echo twig_include($this->env, $context, "@EasyAdmin/includes/_encore_script_tags.html.twig", ["assets" => (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "assets", [], "any", false, true, false, 37), "webpackEncoreAssets", [], "any", true, true, false, 37) &&  !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "assets", [], "any", false, true, false, 37), "webpackEncoreAssets", [], "any", false, false, false, 37)))) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "assets", [], "any", false, true, false, 37), "webpackEncoreAssets", [], "any", false, false, false, 37)) : ([]))], false);
        echo "
    ";
    }

    // line 44
    public function block_configured_head_contents($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 45
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "assets", [], "any", false, true, false, 45), "headContents", [], "any", true, true, false, 45) &&  !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "assets", [], "any", false, true, false, 45), "headContents", [], "any", false, false, false, 45)))) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "assets", [], "any", false, true, false, 45), "headContents", [], "any", false, false, false, 45)) : ([])));
        foreach ($context['_seq'] as $context["_key"] => $context["htmlContent"]) {
            // line 46
            echo "            ";
            echo $context["htmlContent"];
            echo "
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['htmlContent'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        echo "    ";
    }

    // line 51
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 52
        echo "    <body ";
        $this->displayBlock('body_attr', $context, $blocks);
        // line 53
        echo "        id=\"";
        $this->displayBlock('body_id', $context, $blocks);
        echo "\"
        class=\"ea ";
        // line 54
        $this->displayBlock('body_class', $context, $blocks);
        echo "\"
        data-ea-content-width=\"";
        // line 55
        echo twig_escape_filter($this->env, (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "crud", [], "any", false, true, false, 55), "contentWidth", [], "any", true, true, false, 55) &&  !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "crud", [], "any", false, true, false, 55), "contentWidth", [], "any", false, false, false, 55)))) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "crud", [], "any", false, true, false, 55), "contentWidth", [], "any", false, false, false, 55)) : ((((twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "dashboardContentWidth", [], "any", true, true, false, 55) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "dashboardContentWidth", [], "any", false, false, false, 55)))) ? (twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "dashboardContentWidth", [], "any", false, false, false, 55)) : ("normal")))), "html", null, true);
        echo "\"
        data-ea-sidebar-width=\"";
        // line 56
        echo twig_escape_filter($this->env, (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "crud", [], "any", false, true, false, 56), "sidebarWidth", [], "any", true, true, false, 56) &&  !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "crud", [], "any", false, true, false, 56), "sidebarWidth", [], "any", false, false, false, 56)))) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "crud", [], "any", false, true, false, 56), "sidebarWidth", [], "any", false, false, false, 56)) : ((((twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "dashboardSidebarWidth", [], "any", true, true, false, 56) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "dashboardSidebarWidth", [], "any", false, false, false, 56)))) ? (twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "dashboardSidebarWidth", [], "any", false, false, false, 56)) : ("normal")))), "html", null, true);
        echo "\"
        data-ea-dark-scheme-is-enabled=\"";
        // line 57
        echo ((twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "dashboardHasDarkModeEnabled", [], "any", false, false, false, 57)) ? ("true") : ("false"));
        echo "\"
    >
    ";
        // line 59
        $this->displayBlock('javascript_page_layout', $context, $blocks);
        // line 62
        echo "    ";
        $this->displayBlock('javascript_page_color_scheme', $context, $blocks);
        // line 65
        echo "
    ";
        // line 66
        $this->displayBlock('wrapper_wrapper', $context, $blocks);
        // line 375
        echo "
    ";
        // line 376
        $this->displayBlock('body_javascript', $context, $blocks);
        // line 377
        echo "
    ";
        // line 378
        $this->displayBlock('configured_body_contents', $context, $blocks);
        // line 383
        echo "    </body>
";
    }

    // line 52
    public function block_body_attr($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 53
    public function block_body_id($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 54
    public function block_body_class($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 59
    public function block_javascript_page_layout($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 60
        echo "        <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("page-layout.js", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "assets", [], "any", false, false, false, 60), "defaultAssetPackageName", [], "any", false, false, false, 60)), "html", null, true);
        echo "\"></script>
    ";
    }

    // line 62
    public function block_javascript_page_color_scheme($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 63
        echo "        <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("page-color-scheme.js", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "assets", [], "any", false, false, false, 63), "defaultAssetPackageName", [], "any", false, false, false, 63)), "html", null, true);
        echo "\"></script>
    ";
    }

    // line 66
    public function block_wrapper_wrapper($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 67
        echo "        ";
        $this->displayBlock('flash_messages', $context, $blocks);
        // line 70
        echo "
        ";
        // line 71
        ob_start(function () { return ''; });
        // line 72
        echo "            ";
        if ((null == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "userMenu", [], "any", false, false, false, 72), "avatarUrl", [], "any", false, false, false, 72))) {
            // line 73
            echo "                <span class=\"user-avatar\">
                    <span class=\"fa-stack\">
                        <i class=\"user-avatar-icon-background fas fa-square fa-stack-2x\"></i>
                        <i class=\"user-avatar-icon-foreground ";
            // line 76
            echo (( !(null === twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "user", [], "any", false, false, false, 76))) ? ("fa fa-user") : ("fas fa-user-slash"));
            echo " fa-stack-1x fa-inverse\"></i>
                    </span>
                </span>
            ";
        } else {
            // line 80
            echo "                <img class=\"user-avatar\" src=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "userMenu", [], "any", false, false, false, 80), "avatarUrl", [], "any", false, false, false, 80), "html", null, true);
            echo "\" />
            ";
        }
        // line 82
        echo "        ";
        $context["user_menu_avatar"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 83
        echo "
        ";
        // line 84
        $context["impersonator_permission"] = ((twig_constant_is_defined("Symfony\\Component\\Security\\Core\\Authorization\\Voter\\AuthenticatedVoter::IS_IMPERSONATOR")) ? ("IS_IMPERSONATOR") : ("ROLE_PREVIOUS_ADMIN"));
        // line 85
        echo "
        ";
        // line 86
        ob_start(function () { return ''; });
        // line 87
        echo "            <ul class=\"dropdown-menu dropdown-menu-end\">
                <li class=\"dropdown-user-details\">
                    <div>";
        // line 89
        echo twig_escape_filter($this->env, ($context["user_menu_avatar"] ?? null), "html", null, true);
        echo "</div>
                    <div>
                        <span class=\"user-label\">";
        // line 91
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("user.logged_in_as", array(), "EasyAdminBundle"), "html", null, true);
        echo "</span>
                        <span class=\"user-name\">";
        // line 92
        echo twig_escape_filter($this->env, (((null === twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "user", [], "any", false, false, false, 92))) ? ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("user.anonymous", array(), "EasyAdminBundle")) : (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "userMenu", [], "any", false, false, false, 92), "name", [], "any", false, false, false, 92))), "html", null, true);
        echo "</span>
                    </div>
                </li>

                ";
        // line 96
        $this->displayBlock('user_menu', $context, $blocks);
        // line 115
        echo "            </ul>
        ";
        $context["user_menu_dropdown"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 117
        echo "
        ";
        // line 118
        ob_start(function () { return ''; });
        // line 119
        echo "            ";
        if ((twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "dashboardLocales", [], "any", false, false, false, 119) || twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "dashboardHasDarkModeEnabled", [], "any", false, false, false, 119))) {
            // line 120
            echo "                <div class=\"dropdown dropdown-settings\">
                    <a class=\"dropdown-settings-button\" type=\"button\" data-bs-toggle=\"dropdown\" data-bs-offset=\"0,5\" aria-expanded=\"false\">
                        <i class=\"fas fa-gear\"></i>
                    </a>

                    <ul class=\"dropdown-menu dropdown-menu-end\">
                        ";
            // line 126
            if (twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "dashboardLocales", [], "any", false, false, false, 126)) {
                // line 127
                echo "                            <li class=\"dropdown-header dropdown-locales-label\">
                                ";
                // line 128
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("settings.locale", array(), "EasyAdminBundle"), "html", null, true);
                echo "
                            </li>

                            ";
                // line 131
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "dashboardLocales", [], "any", false, false, false, 131));
                foreach ($context['_seq'] as $context["_key"] => $context["localeDto"]) {
                    // line 132
                    echo "                                <li>
                                    <a href=\"";
                    // line 133
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->getAdminUrlGenerator(), "set", [0 => "_locale", 1 => twig_get_attribute($this->env, $this->source, $context["localeDto"], "locale", [], "any", false, false, false, 133)], "method", false, false, false, 133), "html", null, true);
                    echo "\" class=\"dropdown-item";
                    if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 133), "locale", [], "any", false, false, false, 133) == twig_get_attribute($this->env, $this->source, $context["localeDto"], "locale", [], "any", false, false, false, 133))) {
                        echo " active";
                    }
                    echo "\">
                                        ";
                    // line 134
                    if (twig_get_attribute($this->env, $this->source, $context["localeDto"], "icon", [], "any", false, false, false, 134)) {
                        // line 135
                        echo "                                            <i class=\"";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["localeDto"], "icon", [], "any", false, false, false, 135), "html", null, true);
                        echo "\"></i>
                                        ";
                    }
                    // line 137
                    echo "                                        ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["localeDto"], "name", [], "any", false, false, false, 137), "html", null, true);
                    echo "
                                    </a>
                                </li>
                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['localeDto'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 141
                echo "                        ";
            }
            // line 142
            echo "
                        ";
            // line 143
            if (twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "dashboardHasDarkModeEnabled", [], "any", false, false, false, 143)) {
                // line 144
                echo "                            ";
                if (twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "dashboardLocales", [], "any", false, false, false, 144)) {
                    // line 145
                    echo "                                <div class=\"dropdown-divider\"></div>
                            ";
                }
                // line 147
                echo "
                            <li class=\"dropdown-header dropdown-appearance-label\">
                                ";
                // line 149
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("settings.appearance.label", array(), "EasyAdminBundle"), "html", null, true);
                echo "
                            </li>
                            <li>
                                <a href=\"#\" class=\"dropdown-item dropdown-appearance-item\" data-ea-color-scheme=\"light\">
                                    <i class=\"far fa-sun fa-fw\"></i>
                                    ";
                // line 154
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("settings.appearance.light", array(), "EasyAdminBundle"), "html", null, true);
                echo "
                                </a>
                            </li>
                            <li>
                                <a href=\"#\" class=\"dropdown-item dropdown-appearance-item\" data-ea-color-scheme=\"dark\">
                                    <i class=\"far fa-moon fa-fw\"></i>
                                    ";
                // line 160
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("settings.appearance.dark", array(), "EasyAdminBundle"), "html", null, true);
                echo "
                                </a>
                            </li>
                            <li>
                                <a href=\"#\" class=\"dropdown-item dropdown-appearance-item active\" data-ea-color-scheme=\"auto\">
                                    <i class=\"fas fa-desktop fa-fw\"></i>
                                    ";
                // line 166
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("settings.appearance.auto", array(), "EasyAdminBundle"), "html", null, true);
                echo "
                                </a>
                            </li>
                        ";
            }
            // line 170
            echo "                    </ul>
                </div>
            ";
        }
        // line 173
        echo "        ";
        $context["settings_dropdown"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 174
        echo "
        <div class=\"wrapper\">
            ";
        // line 176
        $this->displayBlock('wrapper', $context, $blocks);
        // line 373
        echo "        </div>
    ";
    }

    // line 67
    public function block_flash_messages($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 68
        echo "            ";
        echo twig_include($this->env, $context, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "templatePath", [0 => "flash_messages"], "method", false, false, false, 68));
        echo "
        ";
    }

    // line 96
    public function block_user_menu($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 97
        echo "                    ";
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "userMenu", [], "any", false, false, false, 97), "items", [], "any", false, false, false, 97)) > 0)) {
            // line 98
            echo "                        <li><hr class=\"dropdown-divider\"></li>
                        ";
            // line 99
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "userMenu", [], "any", false, false, false, 99), "items", [], "any", false, false, false, 99));
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
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 100
                echo "                            <li>
                                ";
                // line 101
                if ((twig_get_attribute($this->env, $this->source, $context["item"], "isMenuSection", [], "any", false, false, false, 101) &&  !twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 101))) {
                    // line 102
                    echo "                                    <hr class=\"dropdown-divider\">
                                ";
                } elseif ( !twig_get_attribute($this->env, $this->source,                 // line 103
$context["item"], "isMenuSection", [], "any", false, false, false, 103)) {
                    // line 104
                    echo "                                    <a href=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "linkUrl", [], "any", false, false, false, 104), "html", null, true);
                    echo "\" class=\"dropdown-item user-action ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "cssClass", [], "any", false, false, false, 104), "html", null, true);
                    echo "\"
                                       target=\"";
                    // line 105
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "linkTarget", [], "any", false, false, false, 105), "html", null, true);
                    echo "\" rel=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "linkRel", [], "any", false, false, false, 105), "html", null, true);
                    echo "\"
                                       referrerpolicy=\"origin-when-cross-origin\">
                                        ";
                    // line 107
                    if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["item"], "icon", [], "any", false, false, false, 107))) {
                        echo "<i class=\"fa fa-fw ";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "icon", [], "any", false, false, false, 107), "html", null, true);
                        echo "\"></i>";
                    }
                    // line 108
                    echo "                                        ";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, $context["item"], "label", [], "any", false, false, false, 108), [],                     // line 2
($context["__internal_9405f6032f5e4827a2a81d6542c88bf725294ffdc42cb6123ee51b931ecde3df"] ?? null)), "html", null, true);
                    // line 108
                    echo "
                                    </a>
                                ";
                }
                // line 111
                echo "                            </li>
                        ";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 113
            echo "                    ";
        }
        // line 114
        echo "                ";
    }

    // line 176
    public function block_wrapper($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 177
        echo "                <div class=\"responsive-header\">
                    ";
        // line 178
        $this->displayBlock('responsive_header', $context, $blocks);
        // line 207
        echo "                </div>

                <div class=\"sidebar-wrapper\">
                    <aside class=\"sidebar\">
                        ";
        // line 211
        $this->displayBlock('sidebar', $context, $blocks);
        // line 233
        echo "
                        <div id=\"sidebar-resizer-handler\" class=\"resizer-handler resizer-handler-left\"></div>
                    </aside>
                </div>

                <section class=\"main-content\">
                    ";
        // line 239
        $context["has_search"] = ( !(null === twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "crud", [], "any", false, false, false, 239)) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "crud", [], "any", false, false, false, 239), "isSearchEnabled", [], "any", false, false, false, 239));
        // line 240
        echo "                    <aside class=\"content-top ";
        echo ((($context["has_search"] ?? null)) ? ("ea-search-enabled") : ("ea-search-disabled"));
        echo "\">
                        ";
        // line 241
        $this->displayBlock('content_top_header', $context, $blocks);
        // line 324
        echo "                    </aside>

                    <div class=\"content-wrapper\">
                        ";
        // line 327
        $this->displayBlock('content', $context, $blocks);
        // line 368
        echo "
                        <div id=\"content-resizer-handler\" class=\"resizer-handler resizer-handler-right\"></div>
                    </div>
                </section>
            ";
    }

    // line 178
    public function block_responsive_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 179
        echo "                        <button id=\"navigation-toggler\" type=\"button\" aria-label=\"Toggle navigation\">
                            <i class=\"fa fa-fw fa-bars\"></i>
                        </button>

                        <div id=\"responsive-header-logo\" class=\"text-truncate ms-auto\">
                            ";
        // line 184
        $this->displayBlock('responsive_header_logo', $context, $blocks);
        // line 189
        echo "                        </div>

                        <div class=\"dropdown user-menu-wrapper ";
        // line 191
        echo (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted(($context["impersonator_permission"] ?? null))) ? ("user-is-impersonated") : (""));
        echo " ms-auto\">
                            <a class=\"user-details\" type=\"button\" data-bs-toggle=\"dropdown\" data-bs-offset=\"0,5\" aria-expanded=\"false\">
                                ";
        // line 195
        echo "                                ";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "userMenu", [], "any", false, false, false, 195), "avatarDisplayed", [], "any", false, false, false, 195)) {
            // line 196
            echo "                                    ";
            echo twig_escape_filter($this->env, ($context["user_menu_avatar"] ?? null), "html", null, true);
            echo "
                                ";
        } else {
            // line 198
            echo "                                    <i class=\"user-avatar fa fa-fw ";
            echo (( !(null === twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "user", [], "any", false, false, false, 198))) ? ("fa-user") : ("fa-user-times"));
            echo "\"></i>
                                ";
        }
        // line 200
        echo "                            </a>

                            ";
        // line 202
        echo twig_escape_filter($this->env, ($context["user_menu_dropdown"] ?? null), "html", null, true);
        echo "
                        </div>

                        ";
        // line 205
        echo twig_escape_filter($this->env, ($context["settings_dropdown"] ?? null), "html", null, true);
        echo "
                    ";
    }

    // line 184
    public function block_responsive_header_logo($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 185
        echo "                                <a class=\"responsive-logo\" title=\"";
        echo twig_escape_filter($this->env, twig_striptags(twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "dashboardTitle", [], "any", false, false, false, 185)), "html", null, true);
        echo "\" href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "dashboardRouteName", [], "any", false, false, false, 185));
        echo "\">
                                    ";
        // line 186
        echo twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "dashboardTitle", [], "any", false, false, false, 186);
        echo "
                                </a>
                            ";
    }

    // line 211
    public function block_sidebar($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 212
        echo "                            <header class=\"main-header\">
                                ";
        // line 213
        $this->displayBlock('header', $context, $blocks);
        // line 227
        echo "                            </header>

                            ";
        // line 229
        $this->displayBlock('main_menu_wrapper', $context, $blocks);
        // line 232
        echo "                        ";
    }

    // line 213
    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 214
        echo "                                <nav class=\"navbar\" role=\"navigation\">
                                    ";
        // line 215
        $this->displayBlock('header_navbar', $context, $blocks);
        // line 225
        echo "                                </nav>
                                ";
    }

    // line 215
    public function block_header_navbar($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 216
        echo "                                        <div id=\"header-logo\">
                                            ";
        // line 217
        $this->displayBlock('header_logo', $context, $blocks);
        // line 223
        echo "                                        </div>
                                    ";
    }

    // line 217
    public function block_header_logo($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 218
        echo "                                                <a class=\"logo\" title=\"";
        echo twig_escape_filter($this->env, twig_striptags(twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "dashboardTitle", [], "any", false, false, false, 218)), "html", null, true);
        echo "\" href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "dashboardRouteName", [], "any", false, false, false, 218));
        echo "\">
                                                    <span class=\"logo-custom\">";
        // line 219
        echo twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "dashboardTitle", [], "any", false, false, false, 219);
        echo "</span>
                                                    <span class=\"logo-compact\"><i class=\"fas fa-home\"></i></span>
                                                </a>
                                            ";
    }

    // line 229
    public function block_main_menu_wrapper($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 230
        echo "                                ";
        echo twig_include($this->env, $context, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "templatePath", [0 => "main_menu"], "method", false, false, false, 230));
        echo "
                            ";
    }

    // line 241
    public function block_content_top_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 242
        echo "                            ";
        $this->displayBlock('search_wrapper', $context, $blocks);
        // line 302
        echo "
                            ";
        // line 303
        $this->displayBlock('header_custom_menu_wrapper', $context, $blocks);
        // line 319
        echo "
                            ";
        // line 320
        $this->displayBlock('settings_dropdown_wrapper', $context, $blocks);
        // line 323
        echo "                        ";
    }

    // line 242
    public function block_search_wrapper($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 243
        echo "                            <div class=\"content-search\">
                                ";
        // line 244
        if (($context["has_search"] ?? null)) {
            // line 245
            echo "                                    ";
            $this->displayBlock('search', $context, $blocks);
            // line 299
            echo "                                ";
        }
        // line 300
        echo "                            </div>
                            ";
    }

    // line 245
    public function block_search($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 246
        echo "
                                        <form class=\"form-action-search\" method=\"get\">
                                            ";
        // line 248
        $this->displayBlock('search_form', $context, $blocks);
        // line 297
        echo "                                        </form>
                                    ";
    }

    // line 248
    public function block_search_form($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 249
        echo "                                                ";
        $this->displayBlock('search_form_filters', $context, $blocks);
        // line 274
        echo "
                                                <input type=\"hidden\" name=\"crudAction\" value=\"index\">
                                                <input type=\"hidden\" name=\"crudControllerFqcn\" value=\"";
        // line 276
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "request", [], "any", false, false, false, 276), "query", [], "any", false, false, false, 276), "get", [0 => "crudControllerFqcn"], "method", false, false, false, 276), "html", null, true);
        echo "\">
                                                <input type=\"hidden\" name=\"menuIndex\" value=\"";
        // line 277
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "request", [], "any", false, false, false, 277), "query", [], "any", false, false, false, 277), "get", [0 => "menuIndex"], "method", false, false, false, 277), "html", null, true);
        echo "\">
                                                <input type=\"hidden\" name=\"submenuIndex\" value=\"";
        // line 278
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "request", [], "any", false, false, false, 278), "query", [], "any", false, false, false, 278), "get", [0 => "submenuIndex"], "method", false, false, false, 278), "html", null, true);
        echo "\">
                                                <input type=\"hidden\" name=\"page\" value=\"1\">

                                                <div class=\"form-group\">
                                                    <div class=\"form-widget\">
                                                        <i class=\"fas fa-search content-search-icon\"></i>

                                                        <label class=\"content-search-label\" data-value=\"";
        // line 285
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 285), "get", [0 => "query"], "method", false, false, false, 285), "html", null, true);
        echo "\">
                                                            <input class=\"form-control ";
        // line 286
        echo (((null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 286), "get", [0 => "query"], "method", false, false, false, 286))) ? ("is-blank") : (""));
        echo "\" type=\"search\" name=\"query\" value=\"";
        (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, true, false, 286), "get", [0 => "query"], "method", true, true, false, 286) &&  !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, true, false, 286), "get", [0 => "query"], "method", false, false, false, 286)))) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, true, false, 286), "get", [0 => "query"], "method", false, false, false, 286), "html", null, true))) : (print ("")));
        echo "\" placeholder=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->createTranslatable("action.search", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "i18n", [], "any", false, false, false, 286), "translationParameters", [], "any", false, false, false, 286), "EasyAdminBundle"), [],         // line 2
($context["__internal_9405f6032f5e4827a2a81d6542c88bf725294ffdc42cb6123ee51b931ecde3df"] ?? null)), "html", null, true);
        // line 286
        echo "\" spellcheck=\"false\" autocorrect=\"off\" onInput=\"this.parentNode.dataset.value=this.value\"";
        if (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "crud", [], "any", false, false, false, 286), "currentAction", [], "any", false, false, false, 286) == "index") && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "crud", [], "any", false, false, false, 286), "autofocusSearch", [], "any", false, false, false, 286) == true))) {
            echo " autofocus=\"autofocus\"";
        }
        echo ">
                                                        </label>

                                                        ";
        // line 289
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 289), "get", [0 => "query"], "method", false, false, false, 289)) {
            // line 290
            echo "                                                            <a href=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->getAdminUrlGenerator(), "unset", [0 => "query"], "method", false, false, false, 290), "html", null, true);
            echo "\" class=\"content-search-reset\">
                                                                <i class=\"fas fa-fw fa-times\"></i>
                                                            </a>
                                                        ";
        }
        // line 294
        echo "                                                    </div>
                                                </div>
                                            ";
    }

    // line 249
    public function block_search_form_filters($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 250
        echo "                                                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "search", [], "any", false, false, false, 250), "appliedFilters", [], "any", false, false, false, 250));
        foreach ($context['_seq'] as $context["field"] => $context["fieldValue"]) {
            // line 251
            echo "                                                        ";
            if (twig_test_iterable($context["fieldValue"])) {
                // line 252
                echo "                                                            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["fieldValue"]);
                foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                    // line 253
                    echo "                                                                ";
                    // line 254
                    echo "                                                                ";
                    if (twig_test_iterable($context["value"])) {
                        // line 255
                        echo "                                                                    ";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($context["value"]);
                        foreach ($context['_seq'] as $context["index"] => $context["iterValue"]) {
                            // line 256
                            echo "                                                                        ";
                            // line 257
                            echo "                                                                        ";
                            if (twig_test_iterable($context["iterValue"])) {
                                // line 258
                                echo "                                                                            ";
                                $context['_parent'] = $context;
                                $context['_seq'] = twig_ensure_traversable($context["iterValue"]);
                                foreach ($context['_seq'] as $context["subIndex"] => $context["subIterValue"]) {
                                    // line 259
                                    echo "                                                                                <input type=\"hidden\" name=\"filters[";
                                    echo twig_escape_filter($this->env, $context["field"], "html", null, true);
                                    echo "][";
                                    echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                                    echo "][";
                                    echo twig_escape_filter($this->env, $context["index"], "html", null, true);
                                    echo "][";
                                    echo twig_escape_filter($this->env, $context["subIndex"], "html", null, true);
                                    echo "]\" value=\"";
                                    echo twig_escape_filter($this->env, $context["subIterValue"], "html", null, true);
                                    echo "\">
                                                                            ";
                                }
                                $_parent = $context['_parent'];
                                unset($context['_seq'], $context['_iterated'], $context['subIndex'], $context['subIterValue'], $context['_parent'], $context['loop']);
                                $context = array_intersect_key($context, $_parent) + $_parent;
                                // line 261
                                echo "                                                                        ";
                            } else {
                                // line 262
                                echo "                                                                            <input type=\"hidden\" name=\"filters[";
                                echo twig_escape_filter($this->env, $context["field"], "html", null, true);
                                echo "][";
                                echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                                echo "][";
                                echo twig_escape_filter($this->env, $context["index"], "html", null, true);
                                echo "]\" value=\"";
                                echo twig_escape_filter($this->env, $context["iterValue"], "html", null, true);
                                echo "\">
                                                                        ";
                            }
                            // line 264
                            echo "                                                                    ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['index'], $context['iterValue'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 265
                        echo "                                                                ";
                    } else {
                        // line 266
                        echo "                                                                    <input type=\"hidden\" name=\"filters[";
                        echo twig_escape_filter($this->env, $context["field"], "html", null, true);
                        echo "][";
                        echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                        echo "]\" value=\"";
                        echo twig_escape_filter($this->env, $context["value"], "html", null, true);
                        echo "\">
                                                                ";
                    }
                    // line 268
                    echo "                                                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 269
                echo "                                                        ";
            } else {
                // line 270
                echo "                                                            <input type=\"hidden\" name=\"filters[";
                echo twig_escape_filter($this->env, $context["field"], "html", null, true);
                echo "]\" value=\"";
                echo twig_escape_filter($this->env, $context["fieldValue"], "html", null, true);
                echo "\">
                                                        ";
            }
            // line 272
            echo "                                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['field'], $context['fieldValue'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 273
        echo "                                                ";
    }

    // line 303
    public function block_header_custom_menu_wrapper($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 304
        echo "                            <div class=\"navbar-custom-menu\">
                                ";
        // line 305
        $this->displayBlock('header_custom_menu', $context, $blocks);
        // line 317
        echo "                            </div>
                            ";
    }

    // line 305
    public function block_header_custom_menu($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 306
        echo "                                    <div class=\"dropdown user-menu-wrapper ";
        echo (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted(($context["impersonator_permission"] ?? null))) ? ("user-is-impersonated") : (""));
        echo "\">
                                        <a class=\"user-details\" type=\"button\" data-bs-toggle=\"dropdown\" data-bs-offset=\"0,5\" aria-expanded=\"false\">
                                            ";
        // line 308
        echo twig_escape_filter($this->env, ($context["user_menu_avatar"] ?? null), "html", null, true);
        echo "
                                            ";
        // line 309
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "userMenu", [], "any", false, false, false, 309), "isNameDisplayed", [], "any", false, false, false, 309)) {
            // line 310
            echo "                                                <span class=\"user-name\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "userMenu", [], "any", false, false, false, 310), "name", [], "any", false, false, false, 310), "html", null, true);
            echo "</span>
                                            ";
        }
        // line 312
        echo "                                        </a>

                                        ";
        // line 314
        echo twig_escape_filter($this->env, ($context["user_menu_dropdown"] ?? null), "html", null, true);
        echo "
                                    </div>
                                ";
    }

    // line 320
    public function block_settings_dropdown_wrapper($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 321
        echo "                                ";
        echo twig_escape_filter($this->env, ($context["settings_dropdown"] ?? null), "html", null, true);
        echo "
                            ";
    }

    // line 327
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 328
        echo "                            <article class=\"content\">
                                ";
        // line 329
        $this->displayBlock('content_header_wrapper', $context, $blocks);
        // line 353
        echo "
                                <section id=\"main\" class=\"content-body\">
                                    ";
        // line 355
        $this->displayBlock('main', $context, $blocks);
        // line 356
        echo "                                </section>

                                ";
        // line 358
        $this->displayBlock('content_footer_wrapper', $context, $blocks);
        // line 366
        echo "                            </article>
                        ";
    }

    // line 329
    public function block_content_header_wrapper($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 330
        echo "                                    ";
        $context["has_help_message"] =  !twig_test_empty((((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "crud", [], "any", false, true, false, 330), "helpMessage", [], "any", true, true, false, 330) &&  !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "crud", [], "any", false, true, false, 330), "helpMessage", [], "any", false, false, false, 330)))) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "crud", [], "any", false, true, false, 330), "helpMessage", [], "any", false, false, false, 330)) : ("")));
        // line 331
        echo "                                    <section class=\"content-header\">
                                        ";
        // line 332
        $this->displayBlock('content_header', $context, $blocks);
        // line 351
        echo "                                    </section>
                                ";
    }

    // line 332
    public function block_content_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 333
        echo "                                            <div class=\"content-header-title\">
                                                <h1 class=\"title\">
                                                    ";
        // line 335
        $this->displayBlock('content_title', $context, $blocks);
        // line 336
        echo "
                                                    ";
        // line 337
        $this->displayBlock('content_help', $context, $blocks);
        // line 344
        echo "                                                </h1>
                                            </div>

                                            ";
        // line 347
        $this->displayBlock('page_actions_wrapper', $context, $blocks);
        // line 350
        echo "                                        ";
    }

    // line 335
    public function block_content_title($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 337
    public function block_content_help($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 338
        echo "                                                        ";
        if (($context["has_help_message"] ?? null)) {
            // line 339
            echo "                                                            <a tabindex=\"0\" class=\"content-header-help\" data-bs-toggle=\"popover\" data-bs-custom-class=\"ea-content-help-popover\" data-bs-animation=\"true\" data-bs-html=\"true\" data-bs-placement=\"bottom\" data-bs-trigger=\"focus\" data-bs-content=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "crud", [], "any", false, false, false, 339), "helpMessage", [], "any", false, false, false, 339), [],             // line 2
($context["__internal_9405f6032f5e4827a2a81d6542c88bf725294ffdc42cb6123ee51b931ecde3df"] ?? null)), "html_attr");
            // line 339
            echo "\">
                                                                <i class=\"far fa-question-circle\"></i>
                                                            </a>
                                                        ";
        }
        // line 343
        echo "                                                    ";
    }

    // line 347
    public function block_page_actions_wrapper($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 348
        echo "                                                <div class=\"page-actions\">";
        $this->displayBlock('page_actions', $context, $blocks);
        echo "</div>
                                            ";
    }

    public function block_page_actions($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 355
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 358
    public function block_content_footer_wrapper($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 359
        echo "                                    ";
        $context["content_footer"] = ((        $this->hasBlock("content_footer", $context, $blocks)) ? (        $this->renderBlock("content_footer", $context, $blocks)) : (""));
        // line 360
        echo "                                    ";
        if ( !twig_test_empty(($context["content_footer"] ?? null))) {
            // line 361
            echo "                                        <section class=\"content-footer\">
                                            ";
            // line 362
            echo twig_escape_filter($this->env, ($context["content_footer"] ?? null), "html", null, true);
            echo "
                                        </section>
                                    ";
        }
        // line 365
        echo "                                ";
    }

    // line 376
    public function block_body_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 378
    public function block_configured_body_contents($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 379
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "assets", [], "any", false, true, false, 379), "bodyContents", [], "any", true, true, false, 379) &&  !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "assets", [], "any", false, true, false, 379), "bodyContents", [], "any", false, false, false, 379)))) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "assets", [], "any", false, true, false, 379), "bodyContents", [], "any", false, false, false, 379)) : ([])));
        foreach ($context['_seq'] as $context["_key"] => $context["htmlContent"]) {
            // line 380
            echo "            ";
            echo $context["htmlContent"];
            echo "
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['htmlContent'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 382
        echo "    ";
    }

    public function getTemplateName()
    {
        return "@EasyAdmin/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1316 => 382,  1307 => 380,  1302 => 379,  1298 => 378,  1292 => 376,  1288 => 365,  1282 => 362,  1279 => 361,  1276 => 360,  1273 => 359,  1269 => 358,  1263 => 355,  1251 => 348,  1247 => 347,  1243 => 343,  1237 => 339,  1235 => 2,  1233 => 339,  1230 => 338,  1226 => 337,  1220 => 335,  1216 => 350,  1214 => 347,  1209 => 344,  1207 => 337,  1204 => 336,  1202 => 335,  1198 => 333,  1194 => 332,  1189 => 351,  1187 => 332,  1184 => 331,  1181 => 330,  1177 => 329,  1172 => 366,  1170 => 358,  1166 => 356,  1164 => 355,  1160 => 353,  1158 => 329,  1155 => 328,  1151 => 327,  1144 => 321,  1140 => 320,  1133 => 314,  1129 => 312,  1123 => 310,  1121 => 309,  1117 => 308,  1111 => 306,  1107 => 305,  1102 => 317,  1100 => 305,  1097 => 304,  1093 => 303,  1089 => 273,  1083 => 272,  1075 => 270,  1072 => 269,  1066 => 268,  1056 => 266,  1053 => 265,  1047 => 264,  1035 => 262,  1032 => 261,  1015 => 259,  1010 => 258,  1007 => 257,  1005 => 256,  1000 => 255,  997 => 254,  995 => 253,  990 => 252,  987 => 251,  982 => 250,  978 => 249,  972 => 294,  964 => 290,  962 => 289,  953 => 286,  951 => 2,  946 => 286,  942 => 285,  932 => 278,  928 => 277,  924 => 276,  920 => 274,  917 => 249,  913 => 248,  908 => 297,  906 => 248,  902 => 246,  898 => 245,  893 => 300,  890 => 299,  887 => 245,  885 => 244,  882 => 243,  878 => 242,  874 => 323,  872 => 320,  869 => 319,  867 => 303,  864 => 302,  861 => 242,  857 => 241,  850 => 230,  846 => 229,  838 => 219,  831 => 218,  827 => 217,  822 => 223,  820 => 217,  817 => 216,  813 => 215,  808 => 225,  806 => 215,  803 => 214,  799 => 213,  795 => 232,  793 => 229,  789 => 227,  787 => 213,  784 => 212,  780 => 211,  773 => 186,  766 => 185,  762 => 184,  756 => 205,  750 => 202,  746 => 200,  740 => 198,  734 => 196,  731 => 195,  726 => 191,  722 => 189,  720 => 184,  713 => 179,  709 => 178,  701 => 368,  699 => 327,  694 => 324,  692 => 241,  687 => 240,  685 => 239,  677 => 233,  675 => 211,  669 => 207,  667 => 178,  664 => 177,  660 => 176,  656 => 114,  653 => 113,  638 => 111,  633 => 108,  631 => 2,  629 => 108,  623 => 107,  616 => 105,  609 => 104,  607 => 103,  604 => 102,  602 => 101,  599 => 100,  582 => 99,  579 => 98,  576 => 97,  572 => 96,  565 => 68,  561 => 67,  556 => 373,  554 => 176,  550 => 174,  547 => 173,  542 => 170,  535 => 166,  526 => 160,  517 => 154,  509 => 149,  505 => 147,  501 => 145,  498 => 144,  496 => 143,  493 => 142,  490 => 141,  479 => 137,  473 => 135,  471 => 134,  463 => 133,  460 => 132,  456 => 131,  450 => 128,  447 => 127,  445 => 126,  437 => 120,  434 => 119,  432 => 118,  429 => 117,  425 => 115,  423 => 96,  416 => 92,  412 => 91,  407 => 89,  403 => 87,  401 => 86,  398 => 85,  396 => 84,  393 => 83,  390 => 82,  384 => 80,  377 => 76,  372 => 73,  369 => 72,  367 => 71,  364 => 70,  361 => 67,  357 => 66,  350 => 63,  346 => 62,  339 => 60,  335 => 59,  329 => 54,  323 => 53,  317 => 52,  312 => 383,  310 => 378,  307 => 377,  305 => 376,  302 => 375,  300 => 66,  297 => 65,  294 => 62,  292 => 59,  287 => 57,  283 => 56,  279 => 55,  275 => 54,  270 => 53,  267 => 52,  263 => 51,  259 => 48,  250 => 46,  245 => 45,  241 => 44,  235 => 37,  230 => 36,  226 => 35,  219 => 32,  215 => 31,  208 => 28,  204 => 27,  198 => 24,  193 => 23,  189 => 22,  182 => 19,  178 => 18,  171 => 15,  162 => 8,  158 => 7,  153 => 385,  151 => 51,  147 => 49,  145 => 44,  142 => 43,  136 => 41,  134 => 40,  131 => 39,  129 => 35,  126 => 34,  124 => 31,  121 => 30,  119 => 27,  116 => 26,  114 => 22,  111 => 21,  109 => 18,  103 => 16,  99 => 15,  96 => 14,  94 => 7,  87 => 5,  83 => 3,  81 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("", "@EasyAdmin/layout.html.twig", "C:\\Users\\malkh\\Desktop\\Ishiki.test\\maboutique\\vendor\\easycorp\\easyadmin-bundle\\src\\Resources\\views\\layout.html.twig");
    }
}
