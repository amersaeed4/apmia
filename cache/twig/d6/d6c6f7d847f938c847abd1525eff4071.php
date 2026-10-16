<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\MacroNamespace;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Sandbox\SecurityNotAllowedTestError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* partials/base.html.twig */
class __TwigTemplate_dd68917b0f79283a36d2b99953550cd1_sourced extends Template
{
    private Source $source;
    /**
     * @var array<string, MacroNamespace>
     */
    private array $macros = [];
    private \Twig\Runtime\EscaperRuntime $escaper;

    public function __construct(Environment $env)
    {
        $this->sandbox = $env->getExtension(SandboxExtension::class)->getChecker();
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->escaper = $env->getRuntime('Twig\Runtime\EscaperRuntime');

        $this->parent = false;

        $this->blocks = [
            'head' => [$this, 'block_head'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'head_extra' => [$this, 'block_head_extra'],
            'content' => [$this, 'block_content'],
            'javascripts' => [$this, 'block_javascripts'],
            'bottom' => [$this, 'block_bottom'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1
        $macros["ui"] = $this->macros["ui"] = $this->load("macros/ui.html.twig", 1)->unwrap()->getMacroNamespace();
        // line 2
        $context["theme"] = CoreExtension::getAttribute($this->env, $this->source, ($context["config"] ?? null), "theme", [], "any", false, false, false, 2);
        // line 3
        $context["custom_logo"] = (((is_iterable(CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "custom_logo", [], "any", false, false, false, 3)) && (Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "custom_logo", [], "any", false, false, false, 3)) > 0))) ? (CoreExtension::getAttribute($this->env, $this->source, Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "custom_logo", [], "any", false, false, false, 3)), "name", [], "any", false, false, false, 3)) : (null));
        // line 4
        $context["logo_url"] = (((($tmp = ($context["custom_logo"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->extensions['Grav\Common\Twig\Extension\GravExtension']->urlFunc(("theme://images/logo/" . ($context["custom_logo"] ?? null)))) : ($this->extensions['Grav\Common\Twig\Extension\GravExtension']->urlFunc("theme://images/apmia-logo.png")));
        // line 5
        yield "<!DOCTYPE html>
<html lang=\"en\">
<head>
";
        // line 8
        yield from $this->unwrap()->yieldBlock('head', $context, $blocks);
        // line 20
        yield "
";
        // line 21
        yield from $this->unwrap()->yieldBlock('stylesheets', $context, $blocks);
        // line 25
        yield "    ";
        yield (string) CoreExtension::getAttribute($this->env, $this->source, ($context["assets"] ?? null), "css", [], "method", false, false, false, 25);
        yield "
    ";
        // line 26
        yield from $this->unwrap()->yieldBlock('head_extra', $context, $blocks);
        // line 27
        yield "</head>
<body class=\"tpl-";
        // line 28
        yield (string) $this->escaper->escape(Twig\Extension\CoreExtension::replace(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "template", [], "any", false, false, false, 28), ["/" => "-"]), "html", null, true);
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "home", [], "any", false, false, false, 28)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield " is-home";
        }
        yield " ";
        yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, false, 28), "body_classes", [], "any", false, false, false, 28), "html", null, true);
        yield "\">
    ";
        // line 29
        yield from $this->load("partials/icons.html.twig", 29)->unwrap()->yield($context);
        // line 30
        yield "    <a class=\"skip-link\" href=\"#main\">Skip to content</a>

    ";
        // line 32
        yield from $this->load("partials/header.html.twig", 32)->unwrap()->yield($context);
        // line 33
        yield "
    <main id=\"main\">
    ";
        // line 35
        yield from $this->unwrap()->yieldBlock('content', $context, $blocks);
        // line 36
        yield "    </main>

    ";
        // line 38
        yield from $this->load("partials/footer.html.twig", 38)->unwrap()->yield($context);
        // line 39
        yield "
    ";
        // line 40
        yield from $this->unwrap()->yieldBlock('javascripts', $context, $blocks);
        // line 43
        yield "    ";
        yield (string) CoreExtension::getAttribute($this->env, $this->source, ($context["assets"] ?? null), "js", ["bottom"], "method", false, false, false, 43);
        yield "
    ";
        // line 44
        yield from $this->unwrap()->yieldBlock('bottom', $context, $blocks);
        // line 45
        yield "</body>
</html>
";
        return; yield;
    }

    // line 8
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_head(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 9
        yield "    <meta charset=\"utf-8\">
    <title>";
        // line 10
        if (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "title", [], "any", false, false, false, 10)) && $tmp instanceof Markup ? (string) $tmp : $tmp) &&  !(($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "home", [], "any", false, false, false, 10)) && $tmp instanceof Markup ? (string) $tmp : $tmp))) {
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "title", [], "any", false, false, false, 10), "html");
            yield " | ";
        }
        yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["site"] ?? null), "title", [], "any", false, false, false, 10), "html");
        yield "</title>
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <meta name=\"theme-color\" content=\"#07683a\">
    ";
        // line 13
        yield from $this->load("partials/metadata.html.twig", 13)->unwrap()->yield($context);
        // line 14
        yield "    <link rel=\"icon\" type=\"image/png\" href=\"";
        yield (string) $this->escaper->escape($this->extensions['Grav\Common\Twig\Extension\GravExtension']->urlFunc("theme://images/favicon.png"), "html", null, true);
        yield "\">
    <link rel=\"apple-touch-icon\" href=\"";
        // line 15
        yield (string) $this->escaper->escape($this->extensions['Grav\Common\Twig\Extension\GravExtension']->urlFunc("theme://images/favicon.png"), "html", null, true);
        yield "\">
    <link rel=\"canonical\" href=\"";
        // line 16
        yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "url", [true, true], "method", false, false, false, 16), "html", null, true);
        yield "\">
    <link rel=\"preload\" as=\"font\" type=\"font/woff2\" crossorigin href=\"";
        // line 17
        yield (string) $this->escaper->escape($this->extensions['Grav\Common\Twig\Extension\GravExtension']->urlFunc("theme://fonts/roboto-latin.woff2"), "html", null, true);
        yield "\">
    <link rel=\"preload\" as=\"font\" type=\"font/woff2\" crossorigin href=\"";
        // line 18
        yield (string) $this->escaper->escape($this->extensions['Grav\Common\Twig\Extension\GravExtension']->urlFunc("theme://fonts/roboto-condensed-latin.woff2"), "html", null, true);
        yield "\">
";
        return; yield;
    }

    // line 21
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_stylesheets(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 22
        yield "    ";
        CoreExtension::getAttribute($this->env, $this->source, ($context["assets"] ?? null), "addCss", ["theme://css/fonts.css", 100], "method", false, false, false, 22);
        // line 23
        yield "    ";
        CoreExtension::getAttribute($this->env, $this->source, ($context["assets"] ?? null), "addCss", ["theme://css/theme.css", 90], "method", false, false, false, 23);
        return; yield;
    }

    // line 26
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_head_extra(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        return; yield;
    }

    // line 35
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        return; yield;
    }

    // line 40
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 41
        yield "        ";
        CoreExtension::getAttribute($this->env, $this->source, ($context["assets"] ?? null), "addJs", ["theme://js/theme.js", ["group" => "bottom", "loading" => "defer"]], "method", false, false, false, 41);
        // line 42
        yield "    ";
        return; yield;
    }

    // line 44
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_bottom(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        return; yield;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "partials/base.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDefaultEscapeStrategy(): string|false
    {
        return "html";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  229 => 44,  224 => 42,  221 => 41,  214 => 40,  204 => 35,  194 => 26,  188 => 23,  185 => 22,  178 => 21,  171 => 18,  167 => 17,  163 => 16,  159 => 15,  154 => 14,  152 => 13,  142 => 10,  139 => 9,  132 => 8,  125 => 45,  123 => 44,  118 => 43,  116 => 40,  113 => 39,  111 => 38,  107 => 36,  105 => 35,  101 => 33,  99 => 32,  95 => 30,  93 => 29,  84 => 28,  81 => 27,  79 => 26,  74 => 25,  72 => 21,  69 => 20,  67 => 8,  62 => 5,  60 => 4,  58 => 3,  56 => 2,  54 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% import \x27macros/ui.html.twig\x27 as ui %}
{% set theme = config.theme %}
{% set custom_logo = theme.custom_logo is iterable and theme.custom_logo|length > 0 ? (theme.custom_logo|first).name : null %}
{% set logo_url = custom_logo ? url(\x27theme://images/logo/\x27 ~ custom_logo) : url(\x27theme://images/apmia-logo.png\x27) %}
<!DOCTYPE html>
<html lang=\"en\">
<head>
{% block head %}
    <meta charset=\"utf-8\">
    <title>{% if page.title and not page.home %}{{ page.title|e(\x27html\x27) }} | {% endif %}{{ site.title|e(\x27html\x27) }}</title>
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <meta name=\"theme-color\" content=\"#07683a\">
    {% include \x27partials/metadata.html.twig\x27 %}
    <link rel=\"icon\" type=\"image/png\" href=\"{{ url(\x27theme://images/favicon.png\x27) }}\">
    <link rel=\"apple-touch-icon\" href=\"{{ url(\x27theme://images/favicon.png\x27) }}\">
    <link rel=\"canonical\" href=\"{{ page.url(true, true) }}\">
    <link rel=\"preload\" as=\"font\" type=\"font/woff2\" crossorigin href=\"{{ url(\x27theme://fonts/roboto-latin.woff2\x27) }}\">
    <link rel=\"preload\" as=\"font\" type=\"font/woff2\" crossorigin href=\"{{ url(\x27theme://fonts/roboto-condensed-latin.woff2\x27) }}\">
{% endblock %}

{% block stylesheets %}
    {% do assets.addCss(\x27theme://css/fonts.css\x27, 100) %}
    {% do assets.addCss(\x27theme://css/theme.css\x27, 90) %}
{% endblock %}
    {{ assets.css()|raw }}
    {% block head_extra %}{% endblock %}
</head>
<body class=\"tpl-{{ page.template|replace({\x27/\x27:\x27-\x27}) }}{% if page.home %} is-home{% endif %} {{ page.header.body_classes }}\">
    {% include \x27partials/icons.html.twig\x27 %}
    <a class=\"skip-link\" href=\"#main\">Skip to content</a>

    {% include \x27partials/header.html.twig\x27 %}

    <main id=\"main\">
    {% block content %}{% endblock %}
    </main>

    {% include \x27partials/footer.html.twig\x27 %}

    {% block javascripts %}
        {% do assets.addJs(\x27theme://js/theme.js\x27, {group: \x27bottom\x27, loading: \x27defer\x27}) %}
    {% endblock %}
    {{ assets.js(\x27bottom\x27)|raw }}
    {% block bottom %}{% endblock %}
</body>
</html>
", "partials/base.html.twig", "/Users/amer/Sites/apmia/user/themes/apmia/templates/partials/base.html.twig");
    }
    
    public function ensureSecurityCheckedOrHandOver(): ?\Twig\Template
    {
        if (!$this->sandbox->isSandboxed()) {
            return null;
        }

        return $this->loadSecurityCheckedTemplate() ?? throw new \Twig\Sandbox\SecurityError(\sprintf('Template "%s" was loaded as a trusted template and cannot be rendered while the sandbox is enabled.', $this->getTemplateName()), -1, $this->source);
    }
    
    public function ensureSecurityChecked(): void
    {
        if ($this->sandbox->isSandboxed()) {
            throw new \Twig\Sandbox\SecurityError(\sprintf('Template "%s" was loaded as a trusted template and cannot be rendered while the sandbox is enabled.', $this->getTemplateName()), -1, $this->source);
        }
    }
}
