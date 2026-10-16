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

/* news.html.twig */
class __TwigTemplate_87645b76aa0771a8c5f21297c7cb7e01_sourced extends Template
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

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return $this->parent ??= $this->load("partials/base.html.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 2
        $macros["ui"] = $this->macros["ui"] = $this->load("macros/ui.html.twig", 2)->unwrap()->getMacroNamespace();
        // line 1
        $this->parent = $this->load("partials/base.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 6
        yield "    ";
        $context["cats"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["config"] ?? null), "theme", [], "any", false, false, false, 6), "news_categories", [], "any", false, false, false, 6);
        // line 7
        yield "    ";
        $context["active_cat"] = CoreExtension::getAttribute($this->env, $this->source, ($context["uri"] ?? null), "param", ["category"], "method", false, false, false, 7);
        // line 8
        yield "    ";
        $context["active_label"] = (((($tmp = ($context["active_cat"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (((CoreExtension::getAttribute($this->env, $this->source, Twig\Extension\CoreExtension::first($this->env->getCharset(), $this->extensions['Grav\Common\Twig\Extension\GravExtension']->filterFunc($this->env, false, ($context["cats"] ?? null), function ($__c__) use ($context, $macros) { $context["c"] = $__c__; return ($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["c"] ?? null), "slug", [], "any", false, false, true, 8), 8, $this->source) == $this->sandbox->ensureToStringAllowed(($context["active_cat"] ?? null), 8, $this->source)); })), "label", [], "any", true, true, false, 8)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, Twig\Extension\CoreExtension::first($this->env->getCharset(), $this->extensions['Grav\Common\Twig\Extension\GravExtension']->filterFunc($this->env, false, ($context["cats"] ?? null), function ($__c__) use ($context, $macros) { $context["c"] = $__c__; return ($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["c"] ?? null), "slug", [], "any", false, false, true, 8), 8, $this->source) == $this->sandbox->ensureToStringAllowed(($context["active_cat"] ?? null), 8, $this->source)); })), "label", [], "any", false, false, false, 8), Twig\Extension\CoreExtension::titleCase($this->env->getCharset(), Twig\Extension\CoreExtension::replace(($context["active_cat"] ?? null), ["-" => " "])))) : (Twig\Extension\CoreExtension::titleCase($this->env->getCharset(), Twig\Extension\CoreExtension::replace(($context["active_cat"] ?? null), ["-" => " "]))))) : (null));
        // line 9
        yield "    ";
        yield from $this->load("partials/banner.html.twig", 9)->unwrap()->yield(CoreExtension::merge($context, ["banner_title" => (((($tmp = ($context["active_label"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($context["active_label"]) : (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "title", [], "any", false, false, false, 9)))]));
        // line 10
        yield "
    ";
        // line 11
        $context["all"] = CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "collection", [], "method", false, false, false, 11);
        // line 12
        yield "    ";
        $context["per"] = Twig\Extension\CoreExtension::round(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, true, false, 12), "per_page", [], "any", true, true, false, 12)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, false, 12), "per_page", [], "any", false, false, false, 12), ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["config"] ?? null), "theme", [], "any", false, true, false, 12), "news", [], "any", false, true, false, 12), "per_page", [], "any", true, true, false, 12)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["config"] ?? null), "theme", [], "any", false, false, false, 12), "news", [], "any", false, false, false, 12), "per_page", [], "any", false, false, false, 12), 12)) : (12)))) : (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["config"] ?? null), "theme", [], "any", false, true, false, 12), "news", [], "any", false, true, false, 12), "per_page", [], "any", true, true, false, 12)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["config"] ?? null), "theme", [], "any", false, false, false, 12), "news", [], "any", false, false, false, 12), "per_page", [], "any", false, false, false, 12), 12)) : (12)))));
        // line 13
        yield "    ";
        $context["total"] = Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["all"] ?? null));
        // line 14
        yield "    ";
        $context["pages_n"] = max(1, Twig\Extension\CoreExtension::round((($context["total"] ?? null) / ($context["per"] ?? null)), 0, "ceil"));
        // line 15
        yield "    ";
        $context["cur"] = max(1, min(($context["pages_n"] ?? null), Twig\Extension\CoreExtension::round(((CoreExtension::getAttribute($this->env, $this->source, ($context["uri"] ?? null), "param", ["page"], "method", true, true, false, 15)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["uri"] ?? null), "param", ["page"], "method", false, false, false, 15), 1)) : (1)))));
        // line 16
        yield "    ";
        $context["shown"] = Twig\Extension\CoreExtension::slice($this->env->getCharset(), ($context["all"] ?? null), ((($context["cur"] ?? null) - 1) * ($context["per"] ?? null)), ($context["per"] ?? null));
        // line 17
        yield "    ";
        $context["base"] = (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "url", [], "any", false, false, false, 17) . (((($tmp = ($context["active_cat"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ((("/category" . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["config"] ?? null), "system", [], "any", false, false, false, 17), "param_sep", [], "any", false, false, false, 17)) . ($context["active_cat"] ?? null))) : ("")));
        // line 18
        yield "
    <section class=\"section\">
        <div class=\"container\">
            ";
        // line 21
        if ((( !Twig\Extension\CoreExtension::testEmpty(Twig\Extension\CoreExtension::trim(Twig\Extension\CoreExtension::striptags(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, false, 21)))) &&  !(($tmp = ($context["active_cat"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) && (($context["cur"] ?? null) == 1))) {
            // line 22
            yield "            <article class=\"prose prose-intro\">";
            yield (string) CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, false, 22);
            yield "</article>
            ";
        }
        // line 24
        yield "
            <div class=\"chips\" role=\"navigation\" aria-label=\"News categories\">
                <a class=\"chip";
        // line 26
        yield (string) (( !(($tmp = ($context["active_cat"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (" is-active") : (""));
        yield "\" href=\"";
        yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "url", [], "any", false, false, false, 26), "html", null, true);
        yield "\">All news</a>
                ";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["cats"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
            // line 28
            yield "                <a class=\"chip";
            yield (string) (((($context["active_cat"] ?? null) == CoreExtension::getAttribute($this->env, $this->source, $context["c"], "slug", [], "any", false, false, false, 28))) ? (" is-active") : (""));
            yield "\" href=\"";
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "url", [], "any", false, false, false, 28), "html", null, true);
            yield "/category";
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["config"] ?? null), "system", [], "any", false, false, false, 28), "param_sep", [], "any", false, false, false, 28), "html", null, true);
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["c"], "slug", [], "any", false, false, false, 28), "html", null, true);
            yield "\">";
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["c"], "label", [], "any", false, false, false, 28), "html", null, true);
            yield "</a>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['c'], $context['_parent']);
        $context = array_intersect_key($context, $_parent);
        $context += $_parent;
        // line 30
        yield "            </div>

            ";
        // line 32
        if ((($tmp = Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["shown"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 33
            yield "            <div class=\"news-grid\">
                ";
            // line 34
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["shown"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                yield (string) ($macros["ui"] ?? $this->throwUninitializedMacroNamespace(34))->call("news_card", [$context["item"], ($context["cats"] ?? null), ($context["logo_url"] ?? null)], $context, 34, $this->source);
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['item'], $context['_parent']);
            $context = array_intersect_key($context, $_parent);
            $context += $_parent;
            // line 35
            yield "            </div>
            ";
        } else {
            // line 37
            yield "            <p class=\"empty\">No news found in this category yet.</p>
            ";
        }
        // line 39
        yield "
            ";
        // line 40
        if ((($context["pages_n"] ?? null) > 1)) {
            // line 41
            yield "            <nav class=\"pagination\" aria-label=\"Pagination\">
                ";
            // line 42
            if ((($context["cur"] ?? null) > 1)) {
                yield "<a class=\"pg\" rel=\"prev\" href=\"";
                yield (string) $this->escaper->escape(($context["base"] ?? null), "html", null, true);
                yield (string) ((((($context["cur"] ?? null) - 1) > 1)) ? ($this->escaper->escape((("/page" . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["config"] ?? null), "system", [], "any", false, false, false, 42), "param_sep", [], "any", false, false, false, 42)) . (($context["cur"] ?? null) - 1)), "html", null, true)) : (""));
                yield "\" aria-label=\"Previous page\">";
                yield (string) ($macros["ui"] ?? $this->throwUninitializedMacroNamespace(42))->call("icon", ["left"], $context, 42, $this->source);
                yield "</a>";
            }
            // line 43
            yield "                ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(range(1, ($context["pages_n"] ?? null)));
            foreach ($context['_seq'] as $context["_key"] => $context["n"]) {
                // line 44
                yield "                    ";
                if (($context["n"] == ($context["cur"] ?? null))) {
                    yield "<span class=\"pg is-current\" aria-current=\"page\">";
                    yield (string) $this->escaper->escape($context["n"], "html", null, true);
                    yield "</span>
                    ";
                } elseif ((((                // line 45
$context["n"] == 1) || ($context["n"] == ($context["pages_n"] ?? null))) || (($context["n"] >= (($context["cur"] ?? null) - 2)) && ($context["n"] <= (($context["cur"] ?? null) + 2))))) {
                    yield "<a class=\"pg\" href=\"";
                    yield (string) $this->escaper->escape(($context["base"] ?? null), "html", null, true);
                    yield (string) ((($context["n"] > 1)) ? ($this->escaper->escape((("/page" . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["config"] ?? null), "system", [], "any", false, false, false, 45), "param_sep", [], "any", false, false, false, 45)) . $context["n"]), "html", null, true)) : (""));
                    yield "\">";
                    yield (string) $this->escaper->escape($context["n"], "html", null, true);
                    yield "</a>
                    ";
                } elseif (((                // line 46
$context["n"] == (($context["cur"] ?? null) - 3)) || ($context["n"] == (($context["cur"] ?? null) + 3)))) {
                    yield "<span class=\"pg pg-gap\">…</span>
                    ";
                }
                // line 48
                yield "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['n'], $context['_parent']);
            $context = array_intersect_key($context, $_parent);
            $context += $_parent;
            // line 49
            yield "                ";
            if ((($context["cur"] ?? null) < ($context["pages_n"] ?? null))) {
                yield "<a class=\"pg\" rel=\"next\" href=\"";
                yield (string) $this->escaper->escape(($context["base"] ?? null), "html", null, true);
                yield "/page";
                yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["config"] ?? null), "system", [], "any", false, false, false, 49), "param_sep", [], "any", false, false, false, 49), "html", null, true);
                yield (string) $this->escaper->escape((($context["cur"] ?? null) + 1), "html", null, true);
                yield "\" aria-label=\"Next page\">";
                yield (string) ($macros["ui"] ?? $this->throwUninitializedMacroNamespace(49))->call("icon", ["right"], $context, 49, $this->source);
                yield "</a>";
            }
            // line 50
            yield "            </nav>
            ";
        }
        // line 52
        yield "        </div>
    </section>
";
        return; yield;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "news.html.twig";
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
        return array (  239 => 52,  235 => 50,  223 => 49,  216 => 48,  211 => 46,  202 => 45,  195 => 44,  190 => 43,  181 => 42,  178 => 41,  176 => 40,  173 => 39,  169 => 37,  165 => 35,  155 => 34,  152 => 33,  150 => 32,  146 => 30,  129 => 28,  125 => 27,  119 => 26,  115 => 24,  109 => 22,  107 => 21,  102 => 18,  99 => 17,  96 => 16,  93 => 15,  90 => 14,  87 => 13,  84 => 12,  82 => 11,  79 => 10,  76 => 9,  73 => 8,  70 => 7,  67 => 6,  60 => 5,  55 => 1,  53 => 2,  46 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends \x27partials/base.html.twig\x27 %}
{% import \x27macros/ui.html.twig\x27 as ui %}

{# News listing with category filter + pagination (taxonomy filter comes from the URL: /news/category:press-releases) #}
{% block content %}
    {% set cats = config.theme.news_categories %}
    {% set active_cat = uri.param(\x27category\x27) %}
    {% set active_label = active_cat ? (cats|filter(c => c.slug == active_cat)|first.label|default(active_cat|replace({\x27-\x27:\x27 \x27})|title)) : null %}
    {% include \x27partials/banner.html.twig\x27 with {banner_title: active_label ?: page.title} %}

    {% set all = page.collection() %}
    {% set per = (page.header.per_page|default(config.theme.news.per_page|default(12)))|round %}
    {% set total = all|length %}
    {% set pages_n = max(1, (total / per)|round(0, \x27ceil\x27)) %}
    {% set cur = max(1, min(pages_n, (uri.param(\x27page\x27)|default(1))|round)) %}
    {% set shown = all|slice((cur - 1) * per, per) %}
    {% set base = page.url ~ (active_cat ? \x27/category\x27 ~ config.system.param_sep ~ active_cat : \x27\x27) %}

    <section class=\"section\">
        <div class=\"container\">
            {% if page.content|striptags|trim is not empty and not active_cat and cur == 1 %}
            <article class=\"prose prose-intro\">{{ page.content|raw }}</article>
            {% endif %}

            <div class=\"chips\" role=\"navigation\" aria-label=\"News categories\">
                <a class=\"chip{{ not active_cat ? \x27 is-active\x27 : \x27\x27 }}\" href=\"{{ page.url }}\">All news</a>
                {% for c in cats %}
                <a class=\"chip{{ active_cat == c.slug ? \x27 is-active\x27 : \x27\x27 }}\" href=\"{{ page.url }}/category{{ config.system.param_sep }}{{ c.slug }}\">{{ c.label }}</a>
                {% endfor %}
            </div>

            {% if shown|length %}
            <div class=\"news-grid\">
                {% for item in shown %}{{ ui.news_card(item, cats, logo_url) }}{% endfor %}
            </div>
            {% else %}
            <p class=\"empty\">No news found in this category yet.</p>
            {% endif %}

            {% if pages_n > 1 %}
            <nav class=\"pagination\" aria-label=\"Pagination\">
                {% if cur > 1 %}<a class=\"pg\" rel=\"prev\" href=\"{{ base }}{{ cur - 1 > 1 ? \x27/page\x27 ~ config.system.param_sep ~ (cur - 1) : \x27\x27 }}\" aria-label=\"Previous page\">{{ ui.icon(\x27left\x27) }}</a>{% endif %}
                {% for n in 1..pages_n %}
                    {% if n == cur %}<span class=\"pg is-current\" aria-current=\"page\">{{ n }}</span>
                    {% elseif n == 1 or n == pages_n or (n >= cur - 2 and n <= cur + 2) %}<a class=\"pg\" href=\"{{ base }}{{ n > 1 ? \x27/page\x27 ~ config.system.param_sep ~ n : \x27\x27 }}\">{{ n }}</a>
                    {% elseif n == cur - 3 or n == cur + 3 %}<span class=\"pg pg-gap\">…</span>
                    {% endif %}
                {% endfor %}
                {% if cur < pages_n %}<a class=\"pg\" rel=\"next\" href=\"{{ base }}/page{{ config.system.param_sep }}{{ cur + 1 }}\" aria-label=\"Next page\">{{ ui.icon(\x27right\x27) }}</a>{% endif %}
            </nav>
            {% endif %}
        </div>
    </section>
{% endblock %}
", "news.html.twig", "/Users/amer/Sites/apmia/user/themes/apmia/templates/news.html.twig");
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
