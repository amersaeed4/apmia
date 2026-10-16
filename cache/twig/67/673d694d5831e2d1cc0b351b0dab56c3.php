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

/* partials/header.html.twig */
class __TwigTemplate_abb567b77fcf0faf962069f60bcafa78_sourced extends Template
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
        $context["theme"] = CoreExtension::getAttribute($this->env, $this->source, ($context["config"] ?? null), "theme", [], "any", false, false, false, 2);
        // line 3
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "topbar", [], "any", false, false, false, 3), "show", [], "any", false, false, false, 3)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 4
            yield "<div class=\"topbar\">
    <div class=\"container topbar-inner\">
        <ul class=\"topbar-list\">
            ";
            // line 7
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "topbar", [], "any", false, false, false, 7), "address", [], "any", false, false, false, 7)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "<li>";
                yield (string) ($macros["ui"] ?? $this->throwUninitializedMacroNamespace(7))->call("icon", ["pin"], $context, 7, $this->source);
                yield "<span>";
                yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "topbar", [], "any", false, false, false, 7), "address", [], "any", false, false, false, 7), "html", null, true);
                yield "</span></li>";
            }
            // line 8
            yield "        </ul>
        <ul class=\"topbar-list topbar-right\">
            ";
            // line 10
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "topbar", [], "any", false, false, false, 10), "phone", [], "any", false, false, false, 10)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "<li>";
                yield (string) ($macros["ui"] ?? $this->throwUninitializedMacroNamespace(10))->call("icon", ["phone"], $context, 10, $this->source);
                yield "<a href=\"tel:";
                yield (string) $this->escaper->escape(Twig\Extension\CoreExtension::replace(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "topbar", [], "any", false, false, false, 10), "phone", [], "any", false, false, false, 10), [" " => "", "-" => ""]), "html", null, true);
                yield "\">";
                yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "topbar", [], "any", false, false, false, 10), "phone", [], "any", false, false, false, 10), "html", null, true);
                yield "</a></li>";
            }
            // line 11
            yield "            ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "topbar", [], "any", false, false, false, 11), "email", [], "any", false, false, false, 11)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "<li>";
                yield (string) ($macros["ui"] ?? $this->throwUninitializedMacroNamespace(11))->call("icon", ["mail"], $context, 11, $this->source);
                yield "<a href=\"mailto:";
                yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "topbar", [], "any", false, false, false, 11), "email", [], "any", false, false, false, 11), "html", null, true);
                yield "\">";
                yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "topbar", [], "any", false, false, false, 11), "email", [], "any", false, false, false, 11), "html", null, true);
                yield "</a></li>";
            }
            // line 12
            yield "        </ul>
    </div>
</div>
";
        }
        // line 16
        yield "
<header class=\"site-header\" id=\"site-header\">
    <div class=\"container header-inner\">
        <a class=\"brand\" href=\"";
        // line 19
        yield (string) (((($context["base_url"] ?? null) == "")) ? ("/") : ($this->escaper->escape(($context["base_url"] ?? null), "html", null, true)));
        yield "\" aria-label=\"";
        yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["site"] ?? null), "title", [], "any", false, false, false, 19), "html", null, true);
        yield "\">
            <img src=\"";
        // line 20
        yield (string) $this->escaper->escape(($context["logo_url"] ?? null), "html", null, true);
        yield "\" alt=\"\" width=\"64\" height=\"64\">
            <span class=\"brand-text\">
                <strong>";
        // line 22
        yield (string) $this->escaper->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "org", [], "any", false, true, false, 22), "name", [], "any", true, true, false, 22)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "org", [], "any", false, false, false, 22), "name", [], "any", false, false, false, 22), CoreExtension::getAttribute($this->env, $this->source, ($context["site"] ?? null), "title", [], "any", false, false, false, 22))) : (CoreExtension::getAttribute($this->env, $this->source, ($context["site"] ?? null), "title", [], "any", false, false, false, 22))), "html", null, true);
        yield "</strong>
                ";
        // line 23
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "org", [], "any", false, false, false, 23), "tagline", [], "any", false, false, false, 23)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "<small>";
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "org", [], "any", false, false, false, 23), "tagline", [], "any", false, false, false, 23), "html", null, true);
            yield "</small>";
        }
        // line 24
        yield "            </span>
        </a>

        <button class=\"nav-toggle\" type=\"button\" aria-expanded=\"false\" aria-controls=\"primary-nav\" aria-label=\"Open menu\">
            <span class=\"when-closed\">";
        // line 28
        yield (string) ($macros["ui"] ?? $this->throwUninitializedMacroNamespace(28))->call("icon", ["menu"], $context, 28, $this->source);
        yield "</span>
            <span class=\"when-open\">";
        // line 29
        yield (string) ($macros["ui"] ?? $this->throwUninitializedMacroNamespace(29))->call("icon", ["close"], $context, 29, $this->source);
        yield "</span>
        </button>

        <nav class=\"primary-nav\" id=\"primary-nav\" aria-label=\"Primary\">
            <ul class=\"nav-list\">
            ";
        // line 34
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["pages"] ?? null), "children", [], "any", false, false, false, 34), "visible", [], "any", false, false, false, 34));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 35
            yield "                ";
            $context["kids"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["p"], "children", [], "any", false, false, false, 35), "visible", [], "any", false, false, false, 35);
            // line 36
            yield "                ";
            $context["is_news"] = (CoreExtension::getAttribute($this->env, $this->source, $context["p"], "template", [], "any", false, false, false, 36) == "news");
            // line 37
            yield "                ";
            $context["has_sub"] = ((Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["kids"] ?? null)) > 0) || (($tmp = ($context["is_news"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp));
            // line 38
            yield "                <li class=\"nav-item";
            yield (string) (((($tmp = ($context["has_sub"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (" has-sub") : (""));
            yield (string) ((((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["p"], "active", [], "any", false, false, false, 38)) && $tmp instanceof Markup ? (string) $tmp : $tmp) || (($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["p"], "activeChild", [], "any", false, false, false, 38)) && $tmp instanceof Markup ? (string) $tmp : $tmp))) ? (" is-active") : (""));
            yield "\">
                    <a class=\"nav-link\" href=\"";
            // line 39
            yield (string) (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["p"], "home", [], "any", false, false, false, 39)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ((((($context["base_url"] ?? null) == "")) ? ("/") : ($this->escaper->escape(($context["base_url"] ?? null), "html", null, true)))) : ($this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["p"], "url", [], "any", false, false, false, 39), "html", null, true)));
            yield "\"";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["p"], "active", [], "any", false, false, false, 39)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield " aria-current=\"page\"";
            }
            yield ">";
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["p"], "menu", [], "any", false, false, false, 39), "html", null, true);
            yield "</a>
                    ";
            // line 40
            if ((($tmp = ($context["has_sub"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 41
                yield "                    <button class=\"sub-toggle\" type=\"button\" aria-expanded=\"false\" aria-label=\"Toggle ";
                yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["p"], "menu", [], "any", false, false, false, 41), "html", null, true);
                yield " submenu\">";
                yield (string) ($macros["ui"] ?? $this->throwUninitializedMacroNamespace(41))->call("icon", ["chevron"], $context, 41, $this->source);
                yield "</button>
                    <ul class=\"sub-menu\">
                        ";
                // line 43
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(($context["kids"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
                    // line 44
                    yield "                        <li><a href=\"";
                    yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["c"], "url", [], "any", false, false, false, 44), "html", null, true);
                    yield "\"";
                    if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["c"], "active", [], "any", false, false, false, 44)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        yield " aria-current=\"page\"";
                    }
                    yield ">";
                    yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["c"], "menu", [], "any", false, false, false, 44), "html", null, true);
                    yield "</a></li>
                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['c'], $context['_parent']);
                $context = array_intersect_key($context, $_parent);
                $context += $_parent;
                // line 46
                yield "                        ";
                if ((($tmp = ($context["is_news"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 47
                    yield "                            ";
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "news_categories", [], "any", false, false, false, 47));
                    foreach ($context['_seq'] as $context["_key"] => $context["cat"]) {
                        // line 48
                        yield "                            <li><a href=\"";
                        yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["p"], "url", [], "any", false, false, false, 48), "html", null, true);
                        yield "/category";
                        yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["config"] ?? null), "system", [], "any", false, false, false, 48), "param_sep", [], "any", false, false, false, 48), "html", null, true);
                        yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["cat"], "slug", [], "any", false, false, false, 48), "html", null, true);
                        yield "\">";
                        yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["cat"], "label", [], "any", false, false, false, 48), "html", null, true);
                        yield "</a></li>
                            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_key'], $context['cat'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent);
                    $context += $_parent;
                    // line 50
                    yield "                        ";
                }
                // line 51
                yield "                    </ul>
                    ";
            }
            // line 53
            yield "                </li>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['p'], $context['_parent']);
        $context = array_intersect_key($context, $_parent);
        $context += $_parent;
        // line 55
        yield "            </ul>
        </nav>
    </div>
</header>
";
        return; yield;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "partials/header.html.twig";
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
        return array (  239 => 55,  231 => 53,  227 => 51,  224 => 50,  209 => 48,  204 => 47,  201 => 46,  185 => 44,  181 => 43,  173 => 41,  171 => 40,  161 => 39,  155 => 38,  152 => 37,  149 => 36,  146 => 35,  142 => 34,  134 => 29,  130 => 28,  124 => 24,  118 => 23,  114 => 22,  109 => 20,  103 => 19,  98 => 16,  92 => 12,  81 => 11,  71 => 10,  67 => 8,  59 => 7,  54 => 4,  52 => 3,  50 => 2,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% import \x27macros/ui.html.twig\x27 as ui %}
{% set theme = config.theme %}
{% if theme.topbar.show %}
<div class=\"topbar\">
    <div class=\"container topbar-inner\">
        <ul class=\"topbar-list\">
            {% if theme.topbar.address %}<li>{{ ui.icon(\x27pin\x27) }}<span>{{ theme.topbar.address }}</span></li>{% endif %}
        </ul>
        <ul class=\"topbar-list topbar-right\">
            {% if theme.topbar.phone %}<li>{{ ui.icon(\x27phone\x27) }}<a href=\"tel:{{ theme.topbar.phone|replace({\x27 \x27:\x27\x27, \x27-\x27:\x27\x27}) }}\">{{ theme.topbar.phone }}</a></li>{% endif %}
            {% if theme.topbar.email %}<li>{{ ui.icon(\x27mail\x27) }}<a href=\"mailto:{{ theme.topbar.email }}\">{{ theme.topbar.email }}</a></li>{% endif %}
        </ul>
    </div>
</div>
{% endif %}

<header class=\"site-header\" id=\"site-header\">
    <div class=\"container header-inner\">
        <a class=\"brand\" href=\"{{ base_url == \x27\x27 ? \x27/\x27 : base_url }}\" aria-label=\"{{ site.title }}\">
            <img src=\"{{ logo_url }}\" alt=\"\" width=\"64\" height=\"64\">
            <span class=\"brand-text\">
                <strong>{{ theme.org.name|default(site.title) }}</strong>
                {% if theme.org.tagline %}<small>{{ theme.org.tagline }}</small>{% endif %}
            </span>
        </a>

        <button class=\"nav-toggle\" type=\"button\" aria-expanded=\"false\" aria-controls=\"primary-nav\" aria-label=\"Open menu\">
            <span class=\"when-closed\">{{ ui.icon(\x27menu\x27) }}</span>
            <span class=\"when-open\">{{ ui.icon(\x27close\x27) }}</span>
        </button>

        <nav class=\"primary-nav\" id=\"primary-nav\" aria-label=\"Primary\">
            <ul class=\"nav-list\">
            {% for p in pages.children.visible %}
                {% set kids = p.children.visible %}
                {% set is_news = p.template == \x27news\x27 %}
                {% set has_sub = kids|length > 0 or is_news %}
                <li class=\"nav-item{{ has_sub ? \x27 has-sub\x27 : \x27\x27 }}{{ (p.active or p.activeChild) ? \x27 is-active\x27 : \x27\x27 }}\">
                    <a class=\"nav-link\" href=\"{{ p.home ? (base_url == \x27\x27 ? \x27/\x27 : base_url) : p.url }}\"{% if p.active %} aria-current=\"page\"{% endif %}>{{ p.menu }}</a>
                    {% if has_sub %}
                    <button class=\"sub-toggle\" type=\"button\" aria-expanded=\"false\" aria-label=\"Toggle {{ p.menu }} submenu\">{{ ui.icon(\x27chevron\x27) }}</button>
                    <ul class=\"sub-menu\">
                        {% for c in kids %}
                        <li><a href=\"{{ c.url }}\"{% if c.active %} aria-current=\"page\"{% endif %}>{{ c.menu }}</a></li>
                        {% endfor %}
                        {% if is_news %}
                            {% for cat in theme.news_categories %}
                            <li><a href=\"{{ p.url }}/category{{ config.system.param_sep }}{{ cat.slug }}\">{{ cat.label }}</a></li>
                            {% endfor %}
                        {% endif %}
                    </ul>
                    {% endif %}
                </li>
            {% endfor %}
            </ul>
        </nav>
    </div>
</header>
", "partials/header.html.twig", "/Users/amer/Sites/apmia/user/themes/apmia/templates/partials/header.html.twig");
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
