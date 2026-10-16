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

/* newsitem.html.twig */
class __TwigTemplate_2110e818ea31a09f153f4c124854f324_sourced extends Template
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

    // line 4
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 5
        yield "    ";
        $context["cats"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["config"] ?? null), "theme", [], "any", false, false, false, 5), "news_categories", [], "any", false, false, false, 5);
        // line 6
        yield "    ";
        $context["my_cats"] = ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "taxonomy", [], "any", false, true, false, 6), "category", [], "any", true, true, false, 6)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "taxonomy", [], "any", false, false, false, 6), "category", [], "any", false, false, false, 6), [])) : ([]));
        // line 7
        yield "    ";
        yield from $this->load("partials/banner.html.twig", 7)->unwrap()->yield($context);
        // line 8
        yield "    <section class=\"section\">
        <div class=\"container container-narrow\">
            <div class=\"article-meta\">
                <span>";
        // line 11
        yield (string) ($macros["ui"] ?? $this->throwUninitializedMacroNamespace(11))->call("icon", ["calendar"], $context, 11, $this->source);
        yield "<time datetime=\"";
        yield (string) $this->escaper->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "date", [], "any", false, false, false, 11), "Y-m-d"), "html", null, true);
        yield "\">";
        yield (string) $this->escaper->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "date", [], "any", false, false, false, 11), "F j, Y"), "html", null, true);
        yield "</time></span>
                ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["my_cats"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["slug"]) {
            // line 13
            yield "                <a class=\"chip is-small\" href=\"";
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "parent", [], "any", false, false, false, 13), "url", [], "any", false, false, false, 13), "html", null, true);
            yield "/category";
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["config"] ?? null), "system", [], "any", false, false, false, 13), "param_sep", [], "any", false, false, false, 13), "html", null, true);
            yield (string) $this->escaper->escape($context["slug"], "html", null, true);
            yield "\">";
            yield (string) $this->escaper->escape(((CoreExtension::getAttribute($this->env, $this->source, Twig\Extension\CoreExtension::first($this->env->getCharset(), $this->extensions['Grav\Common\Twig\Extension\GravExtension']->filterFunc($this->env, false, ($context["cats"] ?? null), function ($__c__) use ($context, $macros) { $context["c"] = $__c__; return ($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["c"] ?? null), "slug", [], "any", false, false, true, 13), 13, $this->source) == $this->sandbox->ensureToStringAllowed($context["slug"], 13, $this->source)); })), "label", [], "any", true, true, false, 13)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, Twig\Extension\CoreExtension::first($this->env->getCharset(), $this->extensions['Grav\Common\Twig\Extension\GravExtension']->filterFunc($this->env, false, ($context["cats"] ?? null), function ($__c__) use ($context, $macros) { $context["c"] = $__c__; return ($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["c"] ?? null), "slug", [], "any", false, false, true, 13), 13, $this->source) == $this->sandbox->ensureToStringAllowed($context["slug"], 13, $this->source)); })), "label", [], "any", false, false, false, 13), Twig\Extension\CoreExtension::titleCase($this->env->getCharset(), Twig\Extension\CoreExtension::replace($context["slug"], ["-" => " "])))) : (Twig\Extension\CoreExtension::titleCase($this->env->getCharset(), Twig\Extension\CoreExtension::replace($context["slug"], ["-" => " "])))), "html", null, true);
            yield "</a>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['slug'], $context['_parent']);
        $context = array_intersect_key($context, $_parent);
        $context += $_parent;
        // line 15
        yield "            </div>

            <article class=\"prose article\">
                ";
        // line 18
        yield (string) CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, false, 18);
        yield "
            </article>

            ";
        // line 21
        $context["more"] = Twig\Extension\CoreExtension::slice($this->env->getCharset(), $this->extensions['Grav\Common\Twig\Extension\GravExtension']->sortFunc($this->env, false, $this->extensions['Grav\Common\Twig\Extension\GravExtension']->filterFunc($this->env, false, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "parent", [], "any", false, false, false, 21), "children", [], "any", false, false, false, 21), function ($__c__) use ($context, $macros) { $context["c"] = $__c__; return ((($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["c"] ?? null), "template", [], "any", false, false, true, 21), 21, $this->source) == "newsitem") && (($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["c"] ?? null), "published", [], "any", false, false, true, 21)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) && ($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["c"] ?? null), "route", [], "any", false, false, true, 21), 21, $this->source) != $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "route", [], "any", false, false, true, 21), 21, $this->source))); }), function ($__a__, $__b__) use ($context, $macros) { $context["a"] = $__a__; $context["b"] = $__b__; return ($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["b"] ?? null), "date", [], "any", false, false, true, 21), 21, $this->source) <=> $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["a"] ?? null), "date", [], "any", false, false, true, 21), 21, $this->source)); }), 0, 3);
        // line 22
        yield "            <p class=\"back-link\"><a class=\"btn btn-ghost\" href=\"";
        yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "parent", [], "any", false, false, false, 22), "url", [], "any", false, false, false, 22), "html", null, true);
        yield "\">";
        yield (string) ($macros["ui"] ?? $this->throwUninitializedMacroNamespace(22))->call("icon", ["left"], $context, 22, $this->source);
        yield " All news</a></p>
        </div>
        ";
        // line 24
        if ((($tmp = Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["more"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 25
            yield "        <div class=\"container more-news\">
            <h2 class=\"archive-title\">Latest news</h2>
            <div class=\"news-grid\">
                ";
            // line 28
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["more"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                yield (string) ($macros["ui"] ?? $this->throwUninitializedMacroNamespace(28))->call("news_card", [$context["item"], ($context["cats"] ?? null), ($context["logo_url"] ?? null)], $context, 28, $this->source);
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['item'], $context['_parent']);
            $context = array_intersect_key($context, $_parent);
            $context += $_parent;
            // line 29
            yield "            </div>
        </div>
        ";
        }
        // line 32
        yield "    </section>
";
        return; yield;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "newsitem.html.twig";
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
        return array (  151 => 32,  146 => 29,  136 => 28,  131 => 25,  129 => 24,  121 => 22,  119 => 21,  113 => 18,  108 => 15,  93 => 13,  89 => 12,  81 => 11,  76 => 8,  73 => 7,  70 => 6,  67 => 5,  60 => 4,  55 => 1,  53 => 2,  46 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends \x27partials/base.html.twig\x27 %}
{% import \x27macros/ui.html.twig\x27 as ui %}

{% block content %}
    {% set cats = config.theme.news_categories %}
    {% set my_cats = page.taxonomy.category|default([]) %}
    {% include \x27partials/banner.html.twig\x27 %}
    <section class=\"section\">
        <div class=\"container container-narrow\">
            <div class=\"article-meta\">
                <span>{{ ui.icon(\x27calendar\x27) }}<time datetime=\"{{ page.date|date(\x27Y-m-d\x27) }}\">{{ page.date|date(\x27F j, Y\x27) }}</time></span>
                {% for slug in my_cats %}
                <a class=\"chip is-small\" href=\"{{ page.parent.url }}/category{{ config.system.param_sep }}{{ slug }}\">{{ cats|filter(c => c.slug == slug)|first.label|default(slug|replace({\x27-\x27:\x27 \x27})|title) }}</a>
                {% endfor %}
            </div>

            <article class=\"prose article\">
                {{ page.content|raw }}
            </article>

            {% set more = page.parent.children|filter(c => c.template == \x27newsitem\x27 and c.published and c.route != page.route)|sort((a, b) => b.date <=> a.date)|slice(0, 3) %}
            <p class=\"back-link\"><a class=\"btn btn-ghost\" href=\"{{ page.parent.url }}\">{{ ui.icon(\x27left\x27) }} All news</a></p>
        </div>
        {% if more|length %}
        <div class=\"container more-news\">
            <h2 class=\"archive-title\">Latest news</h2>
            <div class=\"news-grid\">
                {% for item in more %}{{ ui.news_card(item, cats, logo_url) }}{% endfor %}
            </div>
        </div>
        {% endif %}
    </section>
{% endblock %}
", "newsitem.html.twig", "/Users/amer/Sites/apmia/user/themes/apmia/templates/newsitem.html.twig");
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
