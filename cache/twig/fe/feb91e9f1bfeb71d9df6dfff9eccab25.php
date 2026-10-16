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

/* modular/latest-news.html.twig */
class __TwigTemplate_393ec1b33923ef602d571a2ff81f9be2_sourced extends Template
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
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1
        $macros["ui"] = $this->macros["ui"] = $this->load("macros/ui.html.twig", 1)->unwrap()->getMacroNamespace();
        // line 2
        $context["h"] = CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, false, 2);
        // line 3
        $context["custom_logo"] = (((is_iterable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["config"] ?? null), "theme", [], "any", false, false, false, 3), "custom_logo", [], "any", false, false, false, 3)) && (Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["config"] ?? null), "theme", [], "any", false, false, false, 3), "custom_logo", [], "any", false, false, false, 3)) > 0))) ? (CoreExtension::getAttribute($this->env, $this->source, Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["config"] ?? null), "theme", [], "any", false, false, false, 3), "custom_logo", [], "any", false, false, false, 3)), "name", [], "any", false, false, false, 3)) : (null));
        // line 4
        $context["logo_url"] = (((($tmp = ($context["custom_logo"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->extensions['Grav\Common\Twig\Extension\GravExtension']->urlFunc(("theme://images/logo/" . ($context["custom_logo"] ?? null)))) : ($this->extensions['Grav\Common\Twig\Extension\GravExtension']->urlFunc("theme://images/apmia-logo.png")));
        // line 5
        $context["src"] = CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "find", [((CoreExtension::getAttribute($this->env, $this->source, ($context["h"] ?? null), "source", [], "any", true, true, false, 5)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["h"] ?? null), "source", [], "any", false, false, false, 5), "/news")) : ("/news"))], "method", false, false, false, 5);
        // line 6
        $context["cats"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["config"] ?? null), "theme", [], "any", false, false, false, 6), "news_categories", [], "any", false, false, false, 6);
        // line 7
        yield "<section class=\"section section-soft\">
    <div class=\"container\">
        ";
        // line 9
        yield (string) ($macros["ui"] ?? $this->throwUninitializedMacroNamespace(9))->call("heading", [((CoreExtension::getAttribute($this->env, $this->source, ($context["h"] ?? null), "title", [], "any", true, true, false, 9)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["h"] ?? null), "title", [], "any", false, false, false, 9), "Latest News")) : ("Latest News")), CoreExtension::getAttribute($this->env, $this->source, ($context["h"] ?? null), "eyebrow", [], "any", false, false, false, 9), CoreExtension::getAttribute($this->env, $this->source, ($context["h"] ?? null), "lead", [], "any", false, false, false, 9)], $context, 9, $this->source);
        yield "
        ";
        // line 10
        if ((($tmp = ($context["src"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 11
            yield "        ";
            $context["items"] = Twig\Extension\CoreExtension::slice($this->env->getCharset(), $this->extensions['Grav\Common\Twig\Extension\GravExtension']->sortFunc($this->env, false, $this->extensions['Grav\Common\Twig\Extension\GravExtension']->filterFunc($this->env, false, CoreExtension::getAttribute($this->env, $this->source, ($context["src"] ?? null), "children", [], "any", false, false, false, 11), function ($__c__) use ($context, $macros) { $context["c"] = $__c__; return (($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["c"] ?? null), "template", [], "any", false, false, true, 11), 11, $this->source) == "newsitem") && (($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["c"] ?? null), "published", [], "any", false, false, true, 11)) && $tmp instanceof Markup ? (string) $tmp : $tmp)); }), function ($__a__, $__b__) use ($context, $macros) { $context["a"] = $__a__; $context["b"] = $__b__; return ($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["b"] ?? null), "date", [], "any", false, false, true, 11), 11, $this->source) <=> $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["a"] ?? null), "date", [], "any", false, false, true, 11), 11, $this->source)); }), 0, ((CoreExtension::getAttribute($this->env, $this->source, ($context["h"] ?? null), "limit", [], "any", true, true, false, 11)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["h"] ?? null), "limit", [], "any", false, false, false, 11), 6)) : (6)));
            // line 12
            yield "        <div class=\"news-grid\">
            ";
            // line 13
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["items"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                yield (string) ($macros["ui"] ?? $this->throwUninitializedMacroNamespace(13))->call("news_card", [$context["item"], ($context["cats"] ?? null), ($context["logo_url"] ?? null)], $context, 13, $this->source);
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['item'], $context['_parent']);
            $context = array_intersect_key($context, $_parent);
            $context += $_parent;
            // line 14
            yield "        </div>
        <p class=\"center\"><a class=\"btn\" href=\"";
            // line 15
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["src"] ?? null), "url", [], "any", false, false, false, 15), "html", null, true);
            yield "\">";
            yield (string) $this->escaper->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["h"] ?? null), "button_label", [], "any", true, true, false, 15)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["h"] ?? null), "button_label", [], "any", false, false, false, 15), "All news")) : ("All news")), "html", null, true);
            yield " ";
            yield (string) ($macros["ui"] ?? $this->throwUninitializedMacroNamespace(15))->call("icon", ["arrow"], $context, 15, $this->source);
            yield "</a></p>
        ";
        }
        // line 17
        yield "    </div>
</section>
";
        return; yield;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "modular/latest-news.html.twig";
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
        return array (  98 => 17,  89 => 15,  86 => 14,  76 => 13,  73 => 12,  70 => 11,  68 => 10,  64 => 9,  60 => 7,  58 => 6,  56 => 5,  54 => 4,  52 => 3,  50 => 2,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% import \x27macros/ui.html.twig\x27 as ui %}
{% set h = page.header %}
{% set custom_logo = config.theme.custom_logo is iterable and config.theme.custom_logo|length > 0 ? (config.theme.custom_logo|first).name : null %}
{% set logo_url = custom_logo ? url(\x27theme://images/logo/\x27 ~ custom_logo) : url(\x27theme://images/apmia-logo.png\x27) %}
{% set src = page.find(h.source|default(\x27/news\x27)) %}
{% set cats = config.theme.news_categories %}
<section class=\"section section-soft\">
    <div class=\"container\">
        {{ ui.heading(h.title|default(\x27Latest News\x27), h.eyebrow, h.lead) }}
        {% if src %}
        {% set items = src.children|filter(c => c.template == \x27newsitem\x27 and c.published)|sort((a, b) => b.date <=> a.date)|slice(0, h.limit|default(6)) %}
        <div class=\"news-grid\">
            {% for item in items %}{{ ui.news_card(item, cats, logo_url) }}{% endfor %}
        </div>
        <p class=\"center\"><a class=\"btn\" href=\"{{ src.url }}\">{{ h.button_label|default(\x27All news\x27) }} {{ ui.icon(\x27arrow\x27) }}</a></p>
        {% endif %}
    </div>
</section>
", "modular/latest-news.html.twig", "/Users/amer/Sites/apmia/user/themes/apmia/templates/modular/latest-news.html.twig");
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
