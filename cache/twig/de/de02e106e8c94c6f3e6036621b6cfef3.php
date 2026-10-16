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

/* macros/ui.html.twig */
class __TwigTemplate_0754ba497b7bbf6eb1b9af3f36b5e6f5_sourced extends Template
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
        // line 2
        yield "
";
        // line 4
        yield "
";
        // line 13
        yield "
";
        // line 39
        yield "
";
        return; yield;
    }

    protected function loadDeclaredMacros(): array
    {
        return [
            "icon" => new \Twig\TwigMacro("icon", function ($name = null, $cls = null, ...$varargs): string|Markup {
                // line 3
                $macros = $this->macros;
                $context = [
                    "name" => $name,
                    "cls" => $cls,
                    "varargs" => $varargs,
                ] + $this->env->getGlobals();

                $blocks = [];

                return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                    yield "<svg class=\"icon ";
                    yield (string) $this->escaper->escape(($context["cls"] ?? null), "html", null, true);
                    yield "\" aria-hidden=\"true\" focusable=\"false\"><use href=\"#i-";
                    yield (string) $this->escaper->escape(((array_key_exists("name", $context)) ? (Twig\Extension\CoreExtension::default(($context["name"] ?? null), "mountain")) : ("mountain")), "html", null, true);
                    yield "\"/></svg>";
                    return; yield;
                })())) ? '' : new Markup($tmp, $this->env->getCharset());
            }, ["name" => false, "cls" => false], false),
            "heading" => new \Twig\TwigMacro("heading", function ($title = null, $eyebrow = null, $lead = null, $align = null, ...$varargs): string|Markup {
                // line 6
                $macros = $this->macros;
                $context = [
                    "title" => $title,
                    "eyebrow" => $eyebrow,
                    "lead" => $lead,
                    "align" => $align,
                    "varargs" => $varargs,
                ] + $this->env->getGlobals();

                $blocks = [];

                return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                    // line 7
                    yield "<header class=\"section-head";
                    yield (string) (((($context["align"] ?? null) == "left")) ? (" is-left") : (""));
                    yield "\">
    ";
                    // line 8
                    if ((($tmp = ($context["eyebrow"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        yield "<span class=\"eyebrow\">";
                        yield (string) $this->escaper->escape(($context["eyebrow"] ?? null), "html", null, true);
                        yield "</span>";
                    }
                    // line 9
                    yield "    <h2>";
                    yield (string) $this->escaper->escape(($context["title"] ?? null), "html", null, true);
                    yield "</h2>
    ";
                    // line 10
                    if ((($tmp = ($context["lead"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        yield "<p class=\"lead\">";
                        yield (string) $this->escaper->escape(($context["lead"] ?? null), "html", null, true);
                        yield "</p>";
                    }
                    // line 11
                    yield "</header>
";
                    return; yield;
                })())) ? '' : new Markup($tmp, $this->env->getCharset());
            }, ["title" => false, "eyebrow" => false, "lead" => false, "align" => false], false),
            "person_card" => new \Twig\TwigMacro("person_card", function ($p = null, ...$varargs): string|Markup {
                // line 15
                $macros = $this->macros;
                $context = [
                    "p" => $p,
                    "varargs" => $varargs,
                ] + $this->env->getGlobals();

                $blocks = [];

                return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                    // line 16
                    $context["h"] = CoreExtension::getAttribute($this->env, $this->source, ($context["p"] ?? null), "header", [], "any", false, false, false, 16);
                    // line 17
                    $context["photo"] = (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["h"] ?? null), "photo", [], "any", false, false, false, 17)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ((($_v0 = CoreExtension::getAttribute($this->env, $this->source, ($context["p"] ?? null), "media", [], "any", false, false, false, 17)) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0[(($_v1 = CoreExtension::getAttribute($this->env, $this->source, ($context["h"] ?? null), "photo", [], "any", false, false, false, 17)) instanceof \Stringable && (is_array($_v0) || $_v0 instanceof \ArrayObject || $_v0 instanceof \ArrayIterator) ? (string) $_v1 : $_v1)] ?? null) : null)) : (null));
                    // line 18
                    if ( !(($tmp = ($context["photo"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        $context["photo"] = Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["p"] ?? null), "media", [], "any", false, false, false, 18), "images", [], "any", false, false, false, 18));
                    }
                    // line 19
                    yield "<article class=\"person-card\">
    <a class=\"person-photo\" href=\"";
                    // line 20
                    yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["p"] ?? null), "url", [], "any", false, false, false, 20), "html", null, true);
                    yield "\" tabindex=\"-1\" aria-hidden=\"true\">
        ";
                    // line 21
                    if ((($tmp = ($context["photo"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 22
                        yield "            ";
                        yield (string) CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["photo"] ?? null), "cropZoom", [480, 540], "method", false, false, false, 22), "quality", [82], "method", false, false, false, 22), "html", [CoreExtension::getAttribute($this->env, $this->source, ($context["p"] ?? null), "title", [], "any", false, false, false, 22), "", ""], "method", false, false, false, 22);
                        yield "
        ";
                    } else {
                        // line 24
                        yield "            <span class=\"person-initial\">";
                        yield (string) $this->escaper->escape(Twig\Extension\CoreExtension::first($this->env->getCharset(), Twig\Extension\CoreExtension::replace(CoreExtension::getAttribute($this->env, $this->source, ($context["p"] ?? null), "title", [], "any", false, false, false, 24), ["Mr. " => "", "Mr " => "", "Dr. " => "", "Engr. " => "", "Haji " => "", "Mian " => ""])), "html", null, true);
                        yield "</span>
        ";
                    }
                    // line 26
                    yield "    </a>
    <div class=\"person-body\">
        <h3><a href=\"";
                    // line 28
                    yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["p"] ?? null), "url", [], "any", false, false, false, 28), "html", null, true);
                    yield "\">";
                    yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["p"] ?? null), "title", [], "any", false, false, false, 28), "html", null, true);
                    yield "</a></h3>
        ";
                    // line 29
                    if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["h"] ?? null), "designation", [], "any", false, false, false, 29)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        yield "<p class=\"person-role\">";
                        yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["h"] ?? null), "designation", [], "any", false, false, false, 29), "html", null, true);
                        yield "</p>";
                    }
                    // line 30
                    yield "        ";
                    if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["h"] ?? null), "company", [], "any", false, false, false, 30)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        yield "<p class=\"person-company\">";
                        yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["h"] ?? null), "company", [], "any", false, false, false, 30), "html", null, true);
                        yield "</p>";
                    }
                    // line 31
                    yield "        <ul class=\"person-meta\">
            ";
                    // line 32
                    if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["h"] ?? null), "address", [], "any", false, false, false, 32)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        yield "<li>";
                        yield (string) $this->getMacroNamespace()->call("icon", ["pin"], $context, 32, $this->source);
                        yield "<span>";
                        yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["h"] ?? null), "address", [], "any", false, false, false, 32), "html", null, true);
                        yield "</span></li>";
                    }
                    // line 33
                    yield "            ";
                    if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["h"] ?? null), "phone", [], "any", false, false, false, 33)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        yield "<li>";
                        yield (string) $this->getMacroNamespace()->call("icon", ["phone"], $context, 33, $this->source);
                        yield "<a href=\"tel:";
                        yield (string) $this->escaper->escape(Twig\Extension\CoreExtension::replace(CoreExtension::getAttribute($this->env, $this->source, ($context["h"] ?? null), "phone", [], "any", false, false, false, 33), [" " => "", "-" => ""]), "html", null, true);
                        yield "\">";
                        yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["h"] ?? null), "phone", [], "any", false, false, false, 33), "html", null, true);
                        yield "</a></li>";
                    }
                    // line 34
                    yield "            ";
                    if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["h"] ?? null), "email", [], "any", false, false, false, 34)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        yield "<li>";
                        yield (string) $this->getMacroNamespace()->call("icon", ["mail"], $context, 34, $this->source);
                        yield "<a href=\"mailto:";
                        yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["h"] ?? null), "email", [], "any", false, false, false, 34), "html", null, true);
                        yield "\">";
                        yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["h"] ?? null), "email", [], "any", false, false, false, 34), "html", null, true);
                        yield "</a></li>";
                    }
                    // line 35
                    yield "        </ul>
    </div>
</article>
";
                    return; yield;
                })())) ? '' : new Markup($tmp, $this->env->getCharset());
            }, ["p" => false], false),
            "news_card" => new \Twig\TwigMacro("news_card", function ($p = null, $categories = null, $logo_url = null, ...$varargs): string|Markup {
                // line 41
                $macros = $this->macros;
                $context = [
                    "p" => $p,
                    "categories" => $categories,
                    "logo_url" => $logo_url,
                    "varargs" => $varargs,
                ] + $this->env->getGlobals();

                $blocks = [];

                return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                    // line 42
                    $context["cover"] = (((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["p"] ?? null), "header", [], "any", false, false, false, 42), "image", [], "any", false, false, false, 42)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ((($_v2 = CoreExtension::getAttribute($this->env, $this->source, ($context["p"] ?? null), "media", [], "any", false, false, false, 42)) && is_array($_v2) || $_v2 instanceof ArrayAccess ? ($_v2[(($_v3 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["p"] ?? null), "header", [], "any", false, false, false, 42), "image", [], "any", false, false, false, 42)) instanceof \Stringable && (is_array($_v2) || $_v2 instanceof \ArrayObject || $_v2 instanceof \ArrayIterator) ? (string) $_v3 : $_v3)] ?? null) : null)) : (null));
                    // line 43
                    if ( !(($tmp = ($context["cover"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        $context["cover"] = Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["p"] ?? null), "media", [], "any", false, false, false, 43), "images", [], "any", false, false, false, 43));
                    }
                    // line 44
                    $context["cats"] = ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["p"] ?? null), "taxonomy", [], "any", false, true, false, 44), "category", [], "any", true, true, false, 44)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["p"] ?? null), "taxonomy", [], "any", false, false, false, 44), "category", [], "any", false, false, false, 44), [])) : ([]));
                    // line 45
                    yield "<article class=\"news-card\">
    <a class=\"news-thumb\" href=\"";
                    // line 46
                    yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["p"] ?? null), "url", [], "any", false, false, false, 46), "html", null, true);
                    yield "\" tabindex=\"-1\" aria-hidden=\"true\">
        ";
                    // line 47
                    if ((($tmp = ($context["cover"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 48
                        yield "            ";
                        yield (string) CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["cover"] ?? null), "cropZoom", [640, 400], "method", false, false, false, 48), "quality", [80], "method", false, false, false, 48), "html", [CoreExtension::getAttribute($this->env, $this->source, ($context["p"] ?? null), "title", [], "any", false, false, false, 48), "", ""], "method", false, false, false, 48);
                        yield "
        ";
                    } else {
                        // line 50
                        yield "            <span class=\"news-thumb-empty\"><img src=\"";
                        yield (string) $this->escaper->escape(($context["logo_url"] ?? null), "html", null, true);
                        yield "\" alt=\"\" width=\"72\" height=\"72\" loading=\"lazy\"></span>
        ";
                    }
                    // line 52
                    yield "    </a>
    <div class=\"news-body\">
        <div class=\"news-meta\">
            <time datetime=\"";
                    // line 55
                    yield (string) $this->escaper->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, ($context["p"] ?? null), "date", [], "any", false, false, false, 55), "Y-m-d"), "html", null, true);
                    yield "\">";
                    yield (string) $this->escaper->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, ($context["p"] ?? null), "date", [], "any", false, false, false, 55), "M j, Y"), "html", null, true);
                    yield "</time>
            ";
                    // line 56
                    if ((($tmp = Twig\Extension\CoreExtension::first($this->env->getCharset(), ($context["cats"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        yield "<span class=\"dot\"></span><span>";
                        yield (string) $this->escaper->escape(((CoreExtension::getAttribute($this->env, $this->source, Twig\Extension\CoreExtension::first($this->env->getCharset(), $this->extensions['Grav\Common\Twig\Extension\GravExtension']->filterFunc($this->env, false, ((array_key_exists("categories", $context)) ? (Twig\Extension\CoreExtension::default(($context["categories"] ?? null), [])) : ([])), function ($__c__) use ($context, $macros) { $context["c"] = $__c__; return ($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["c"] ?? null), "slug", [], "any", false, false, true, 56), 56, $this->source) == $this->sandbox->ensureToStringAllowed(Twig\Extension\CoreExtension::first($this->env->getCharset(), $this->sandbox->ensureToStringAllowed(($context["cats"] ?? null), 56, $this->source)), 56, $this->source)); })), "label", [], "any", true, true, false, 56)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, Twig\Extension\CoreExtension::first($this->env->getCharset(), $this->extensions['Grav\Common\Twig\Extension\GravExtension']->filterFunc($this->env, false, ((array_key_exists("categories", $context)) ? (Twig\Extension\CoreExtension::default(($context["categories"] ?? null), [])) : ([])), function ($__c__) use ($context, $macros) { $context["c"] = $__c__; return ($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["c"] ?? null), "slug", [], "any", false, false, true, 56), 56, $this->source) == $this->sandbox->ensureToStringAllowed(Twig\Extension\CoreExtension::first($this->env->getCharset(), $this->sandbox->ensureToStringAllowed(($context["cats"] ?? null), 56, $this->source)), 56, $this->source)); })), "label", [], "any", false, false, false, 56), Twig\Extension\CoreExtension::titleCase($this->env->getCharset(), Twig\Extension\CoreExtension::replace(Twig\Extension\CoreExtension::first($this->env->getCharset(), ($context["cats"] ?? null)), ["-" => " "])))) : (Twig\Extension\CoreExtension::titleCase($this->env->getCharset(), Twig\Extension\CoreExtension::replace(Twig\Extension\CoreExtension::first($this->env->getCharset(), ($context["cats"] ?? null)), ["-" => " "])))), "html", null, true);
                        yield "</span>";
                    }
                    // line 57
                    yield "        </div>
        <h3><a href=\"";
                    // line 58
                    yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["p"] ?? null), "url", [], "any", false, false, false, 58), "html", null, true);
                    yield "\">";
                    yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["p"] ?? null), "title", [], "any", false, false, false, 58), "html", null, true);
                    yield "</a></h3>
    </div>
</article>
";
                    return; yield;
                })())) ? '' : new Markup($tmp, $this->env->getCharset());
            }, ["p" => false, "categories" => false, "logo_url" => false], false),
        ];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "macros/ui.html.twig";
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
        return array (  294 => 58,  291 => 57,  285 => 56,  279 => 55,  274 => 52,  268 => 50,  262 => 48,  260 => 47,  256 => 46,  253 => 45,  251 => 44,  247 => 43,  245 => 42,  233 => 41,  224 => 35,  213 => 34,  202 => 33,  194 => 32,  191 => 31,  184 => 30,  178 => 29,  172 => 28,  168 => 26,  162 => 24,  156 => 22,  154 => 21,  150 => 20,  147 => 19,  143 => 18,  141 => 17,  139 => 16,  129 => 15,  122 => 11,  116 => 10,  111 => 9,  105 => 8,  100 => 7,  87 => 6,  67 => 3,  57 => 39,  54 => 13,  51 => 4,  48 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# Small UI helpers shared across templates #}

{% macro icon(name, cls) %}<svg class=\"icon {{ cls }}\" aria-hidden=\"true\" focusable=\"false\"><use href=\"#i-{{ name|default(\x27mountain\x27) }}\"/></svg>{% endmacro %}

{# Section heading: eyebrow + title + optional lead #}
{% macro heading(title, eyebrow, lead, align) %}
<header class=\"section-head{{ align == \x27left\x27 ? \x27 is-left\x27 : \x27\x27 }}\">
    {% if eyebrow %}<span class=\"eyebrow\">{{ eyebrow }}</span>{% endif %}
    <h2>{{ title }}</h2>
    {% if lead %}<p class=\"lead\">{{ lead }}</p>{% endif %}
</header>
{% endmacro %}

{# Person card used on listings and on the home page #}
{% macro person_card(p) %}
{% set h = p.header %}
{% set photo = h.photo ? p.media[h.photo] : null %}
{% if not photo %}{% set photo = p.media.images|first %}{% endif %}
<article class=\"person-card\">
    <a class=\"person-photo\" href=\"{{ p.url }}\" tabindex=\"-1\" aria-hidden=\"true\">
        {% if photo %}
            {{ photo.cropZoom(480, 540).quality(82).html(p.title, \x27\x27, \x27\x27)|raw }}
        {% else %}
            <span class=\"person-initial\">{{ p.title|replace({\x27Mr. \x27:\x27\x27, \x27Mr \x27:\x27\x27, \x27Dr. \x27:\x27\x27, \x27Engr. \x27:\x27\x27, \x27Haji \x27:\x27\x27, \x27Mian \x27:\x27\x27})|first }}</span>
        {% endif %}
    </a>
    <div class=\"person-body\">
        <h3><a href=\"{{ p.url }}\">{{ p.title }}</a></h3>
        {% if h.designation %}<p class=\"person-role\">{{ h.designation }}</p>{% endif %}
        {% if h.company %}<p class=\"person-company\">{{ h.company }}</p>{% endif %}
        <ul class=\"person-meta\">
            {% if h.address %}<li>{{ _self.icon(\x27pin\x27) }}<span>{{ h.address }}</span></li>{% endif %}
            {% if h.phone %}<li>{{ _self.icon(\x27phone\x27) }}<a href=\"tel:{{ h.phone|replace({\x27 \x27:\x27\x27, \x27-\x27:\x27\x27}) }}\">{{ h.phone }}</a></li>{% endif %}
            {% if h.email %}<li>{{ _self.icon(\x27mail\x27) }}<a href=\"mailto:{{ h.email }}\">{{ h.email }}</a></li>{% endif %}
        </ul>
    </div>
</article>
{% endmacro %}

{# News card #}
{% macro news_card(p, categories, logo_url) %}
{% set cover = p.header.image ? p.media[p.header.image] : null %}
{% if not cover %}{% set cover = p.media.images|first %}{% endif %}
{% set cats = p.taxonomy.category|default([]) %}
<article class=\"news-card\">
    <a class=\"news-thumb\" href=\"{{ p.url }}\" tabindex=\"-1\" aria-hidden=\"true\">
        {% if cover %}
            {{ cover.cropZoom(640, 400).quality(80).html(p.title, \x27\x27, \x27\x27)|raw }}
        {% else %}
            <span class=\"news-thumb-empty\"><img src=\"{{ logo_url }}\" alt=\"\" width=\"72\" height=\"72\" loading=\"lazy\"></span>
        {% endif %}
    </a>
    <div class=\"news-body\">
        <div class=\"news-meta\">
            <time datetime=\"{{ p.date|date(\x27Y-m-d\x27) }}\">{{ p.date|date(\x27M j, Y\x27) }}</time>
            {% if cats|first %}<span class=\"dot\"></span><span>{{ (categories|default([]))|filter(c => c.slug == (cats|first))|first.label|default((cats|first)|replace({\x27-\x27:\x27 \x27})|title) }}</span>{% endif %}
        </div>
        <h3><a href=\"{{ p.url }}\">{{ p.title }}</a></h3>
    </div>
</article>
{% endmacro %}
", "macros/ui.html.twig", "/Users/amer/Sites/apmia/user/themes/apmia/templates/macros/ui.html.twig");
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
