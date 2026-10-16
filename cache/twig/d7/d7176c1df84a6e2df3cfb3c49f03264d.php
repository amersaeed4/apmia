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

/* contact.html.twig */
class __TwigTemplate_2648dc10f6cf3f30d4362caeb0bd6e49_sourced extends Template
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
        $context["f"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["config"] ?? null), "theme", [], "any", false, false, false, 5), "footer", [], "any", false, false, false, 5);
        // line 6
        yield "    ";
        $context["tb"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["config"] ?? null), "theme", [], "any", false, false, false, 6), "topbar", [], "any", false, false, false, 6);
        // line 7
        yield "    ";
        yield from $this->load("partials/banner.html.twig", 7)->unwrap()->yield($context);
        // line 8
        yield "    <section class=\"section\">
        <div class=\"container contact-layout\">
            <div class=\"contact-form\">
                <h2>Send us a message</h2>
                ";
        // line 12
        if ( !Twig\Extension\CoreExtension::testEmpty(Twig\Extension\CoreExtension::trim(Twig\Extension\CoreExtension::striptags(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, false, 12))))) {
            yield "<div class=\"prose\">";
            yield (string) CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, false, 12);
            yield "</div>";
        }
        // line 13
        yield "
                ";
        // line 14
        try {
            $_v0 = $this->load("forms/form.html.twig", 14);
        } catch (LoaderError $e) {
            // ignore missing template
            $_v0 = null;
        }
        if ($_v0) {
            yield from $_v0->unwrap()->yield($context);
        }
        // line 15
        yield "            </div>

            <aside class=\"contact-aside\">
                <div class=\"info-card\">
                    <h3>Our address</h3>
                    <ul class=\"info-list\">
                        <li>";
        // line 21
        yield (string) ($macros["ui"] ?? $this->throwUninitializedMacroNamespace(21))->call("icon", ["pin"], $context, 21, $this->source);
        yield "<span>";
        yield (string) $this->escaper->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["f"] ?? null), "address", [], "any", true, true, false, 21)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["f"] ?? null), "address", [], "any", false, false, false, 21), CoreExtension::getAttribute($this->env, $this->source, ($context["tb"] ?? null), "address", [], "any", false, false, false, 21))) : (CoreExtension::getAttribute($this->env, $this->source, ($context["tb"] ?? null), "address", [], "any", false, false, false, 21))), "html", null, true);
        yield "</span></li>
                        ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["f"] ?? null), "phones", [], "any", false, false, false, 22));
        foreach ($context['_seq'] as $context["_key"] => $context["ph"]) {
            yield "<li>";
            yield (string) ($macros["ui"] ?? $this->throwUninitializedMacroNamespace(22))->call("icon", ["phone"], $context, 22, $this->source);
            yield "<a href=\"tel:";
            yield (string) $this->escaper->escape(Twig\Extension\CoreExtension::replace($context["ph"], [" " => "", "-" => ""]), "html", null, true);
            yield "\">";
            yield (string) $this->escaper->escape($context["ph"], "html", null, true);
            yield "</a></li>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['ph'], $context['_parent']);
        $context = array_intersect_key($context, $_parent);
        $context += $_parent;
        // line 23
        yield "                        ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["f"] ?? null), "emails", [], "any", false, false, false, 23));
        foreach ($context['_seq'] as $context["_key"] => $context["em"]) {
            yield "<li>";
            yield (string) ($macros["ui"] ?? $this->throwUninitializedMacroNamespace(23))->call("icon", ["mail"], $context, 23, $this->source);
            yield "<a href=\"mailto:";
            yield (string) $this->escaper->escape($context["em"], "html", null, true);
            yield "\">";
            yield (string) $this->escaper->escape($context["em"], "html", null, true);
            yield "</a></li>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['em'], $context['_parent']);
        $context = array_intersect_key($context, $_parent);
        $context += $_parent;
        // line 24
        yield "                        ";
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["f"] ?? null), "hours", [], "any", false, false, false, 24)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "<li>";
            yield (string) ($macros["ui"] ?? $this->throwUninitializedMacroNamespace(24))->call("icon", ["clock"], $context, 24, $this->source);
            yield "<span>";
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["f"] ?? null), "hours", [], "any", false, false, false, 24), "html", null, true);
            yield "</span></li>";
        }
        // line 25
        yield "                    </ul>
                </div>
                ";
        // line 27
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, false, 27), "links", [], "any", false, false, false, 27)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 28
            yield "                <div class=\"info-card\">
                    <h3>";
            // line 29
            yield (string) $this->escaper->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, true, false, 29), "links_title", [], "any", true, true, false, 29)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, false, 29), "links_title", [], "any", false, false, false, 29), "Important links")) : ("Important links")), "html", null, true);
            yield "</h3>
                    <ul class=\"info-list\">
                        ";
            // line 31
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, false, 31), "links", [], "any", false, false, false, 31));
            foreach ($context['_seq'] as $context["_key"] => $context["l"]) {
                yield "<li>";
                yield (string) ($macros["ui"] ?? $this->throwUninitializedMacroNamespace(31))->call("icon", ["external"], $context, 31, $this->source);
                yield "<a href=\"";
                yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["l"], "url", [], "any", false, false, false, 31), "html", null, true);
                yield "\" target=\"_blank\" rel=\"noopener\">";
                yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["l"], "label", [], "any", false, false, false, 31), "html", null, true);
                yield "</a></li>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['l'], $context['_parent']);
            $context = array_intersect_key($context, $_parent);
            $context += $_parent;
            // line 32
            yield "                    </ul>
                </div>
                ";
        }
        // line 35
        yield "            </aside>
        </div>

        ";
        // line 38
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, false, 38), "map_embed", [], "any", false, false, false, 38)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 39
            yield "        <div class=\"container map-wrap\">
            <div class=\"map\"><iframe src=\"";
            // line 40
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, false, 40), "map_embed", [], "any", false, false, false, 40), "html", null, true);
            yield "\" title=\"Map\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\" allowfullscreen></iframe></div>
        </div>
        ";
        }
        // line 43
        yield "    </section>
";
        return; yield;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "contact.html.twig";
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
        return array (  208 => 43,  202 => 40,  199 => 39,  197 => 38,  192 => 35,  187 => 32,  171 => 31,  166 => 29,  163 => 28,  161 => 27,  157 => 25,  148 => 24,  131 => 23,  115 => 22,  109 => 21,  101 => 15,  91 => 14,  88 => 13,  82 => 12,  76 => 8,  73 => 7,  70 => 6,  67 => 5,  60 => 4,  55 => 1,  53 => 2,  46 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends \x27partials/base.html.twig\x27 %}
{% import \x27macros/ui.html.twig\x27 as ui %}

{% block content %}
    {% set f = config.theme.footer %}
    {% set tb = config.theme.topbar %}
    {% include \x27partials/banner.html.twig\x27 %}
    <section class=\"section\">
        <div class=\"container contact-layout\">
            <div class=\"contact-form\">
                <h2>Send us a message</h2>
                {% if page.content|striptags|trim is not empty %}<div class=\"prose\">{{ page.content|raw }}</div>{% endif %}

                {% include \x27forms/form.html.twig\x27 ignore missing %}
            </div>

            <aside class=\"contact-aside\">
                <div class=\"info-card\">
                    <h3>Our address</h3>
                    <ul class=\"info-list\">
                        <li>{{ ui.icon(\x27pin\x27) }}<span>{{ f.address|default(tb.address) }}</span></li>
                        {% for ph in f.phones %}<li>{{ ui.icon(\x27phone\x27) }}<a href=\"tel:{{ ph|replace({\x27 \x27:\x27\x27, \x27-\x27:\x27\x27}) }}\">{{ ph }}</a></li>{% endfor %}
                        {% for em in f.emails %}<li>{{ ui.icon(\x27mail\x27) }}<a href=\"mailto:{{ em }}\">{{ em }}</a></li>{% endfor %}
                        {% if f.hours %}<li>{{ ui.icon(\x27clock\x27) }}<span>{{ f.hours }}</span></li>{% endif %}
                    </ul>
                </div>
                {% if page.header.links %}
                <div class=\"info-card\">
                    <h3>{{ page.header.links_title|default(\x27Important links\x27) }}</h3>
                    <ul class=\"info-list\">
                        {% for l in page.header.links %}<li>{{ ui.icon(\x27external\x27) }}<a href=\"{{ l.url }}\" target=\"_blank\" rel=\"noopener\">{{ l.label }}</a></li>{% endfor %}
                    </ul>
                </div>
                {% endif %}
            </aside>
        </div>

        {% if page.header.map_embed %}
        <div class=\"container map-wrap\">
            <div class=\"map\"><iframe src=\"{{ page.header.map_embed }}\" title=\"Map\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\" allowfullscreen></iframe></div>
        </div>
        {% endif %}
    </section>
{% endblock %}
", "contact.html.twig", "/Users/amer/Sites/apmia/user/themes/apmia/templates/contact.html.twig");
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
