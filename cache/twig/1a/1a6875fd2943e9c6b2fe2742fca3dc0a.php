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

/* people.html.twig */
class __TwigTemplate_51c039234389f9f3b476eab7d3927401_sourced extends Template
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
        yield from $this->load("partials/banner.html.twig", 6)->unwrap()->yield($context);
        // line 7
        yield "    ";
        $context["persons"] = $this->extensions['Grav\Common\Twig\Extension\GravExtension']->filterFunc($this->env, false, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "children", [], "any", false, false, false, 7), function ($__c__) use ($context, $macros) { $context["c"] = $__c__; return (($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["c"] ?? null), "template", [], "any", false, false, true, 7), 7, $this->source) == "person") && (($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["c"] ?? null), "published", [], "any", false, false, true, 7)) && $tmp instanceof Markup ? (string) $tmp : $tmp)); });
        // line 8
        yield "    ";
        $context["others"] = $this->extensions['Grav\Common\Twig\Extension\GravExtension']->sortFunc($this->env, false, $this->extensions['Grav\Common\Twig\Extension\GravExtension']->filterFunc($this->env, false, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "children", [], "any", false, false, false, 8), function ($__c__) use ($context, $macros) { $context["c"] = $__c__; return (($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["c"] ?? null), "template", [], "any", false, false, true, 8), 8, $this->source) != "person") && (($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["c"] ?? null), "published", [], "any", false, false, true, 8)) && $tmp instanceof Markup ? (string) $tmp : $tmp)); }), function ($__a__, $__b__) use ($context, $macros) { $context["a"] = $__a__; $context["b"] = $__b__; return ($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["b"] ?? null), "title", [], "any", false, false, true, 8), 8, $this->source) <=> $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["a"] ?? null), "title", [], "any", false, false, true, 8), 8, $this->source)); });
        // line 9
        yield "    <section class=\"section\">
        <div class=\"container\">
            ";
        // line 11
        if ( !Twig\Extension\CoreExtension::testEmpty(Twig\Extension\CoreExtension::trim(Twig\Extension\CoreExtension::striptags(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, false, 11))))) {
            // line 12
            yield "            <article class=\"prose prose-intro\">";
            yield (string) CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, false, 12);
            yield "</article>
            ";
        }
        // line 14
        yield "
            ";
        // line 15
        if ((($tmp = Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["persons"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 16
            yield "            <div class=\"people-grid\">
                ";
            // line 17
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["persons"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
                yield (string) ($macros["ui"] ?? $this->throwUninitializedMacroNamespace(17))->call("person_card", [$context["p"]], $context, 17, $this->source);
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['p'], $context['_parent']);
            $context = array_intersect_key($context, $_parent);
            $context += $_parent;
            // line 18
            yield "            </div>
            ";
        }
        // line 20
        yield "
            ";
        // line 21
        if ((($tmp = Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["others"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 22
            yield "            <h2 class=\"archive-title\">";
            yield (string) $this->escaper->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, true, false, 22), "archive_title", [], "any", true, true, false, 22)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, false, 22), "archive_title", [], "any", false, false, false, 22), "Previous terms")) : ("Previous terms")), "html", null, true);
            yield "</h2>
            <ul class=\"archive-list\">
                ";
            // line 24
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["others"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
                yield "<li><a href=\"";
                yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["c"], "url", [], "any", false, false, false, 24), "html", null, true);
                yield "\">";
                yield (string) ($macros["ui"] ?? $this->throwUninitializedMacroNamespace(24))->call("icon", ["file"], $context, 24, $this->source);
                yield "<span>";
                yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["c"], "title", [], "any", false, false, false, 24), "html", null, true);
                yield "</span></a></li>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['c'], $context['_parent']);
            $context = array_intersect_key($context, $_parent);
            $context += $_parent;
            // line 25
            yield "            </ul>
            ";
        }
        // line 27
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
        return "people.html.twig";
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
        return array (  141 => 27,  137 => 25,  121 => 24,  115 => 22,  113 => 21,  110 => 20,  106 => 18,  96 => 17,  93 => 16,  91 => 15,  88 => 14,  82 => 12,  80 => 11,  76 => 9,  73 => 8,  70 => 7,  67 => 6,  60 => 5,  55 => 1,  53 => 2,  46 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends \x27partials/base.html.twig\x27 %}
{% import \x27macros/ui.html.twig\x27 as ui %}

{# Listing of person pages (office bearers, CEC members, chairmen…) #}
{% block content %}
    {% include \x27partials/banner.html.twig\x27 %}
    {% set persons = page.children|filter(c => c.template == \x27person\x27 and c.published) %}
    {% set others = page.children|filter(c => c.template != \x27person\x27 and c.published)|sort((a, b) => b.title <=> a.title) %}
    <section class=\"section\">
        <div class=\"container\">
            {% if page.content|striptags|trim is not empty %}
            <article class=\"prose prose-intro\">{{ page.content|raw }}</article>
            {% endif %}

            {% if persons|length %}
            <div class=\"people-grid\">
                {% for p in persons %}{{ ui.person_card(p) }}{% endfor %}
            </div>
            {% endif %}

            {% if others|length %}
            <h2 class=\"archive-title\">{{ page.header.archive_title|default(\x27Previous terms\x27) }}</h2>
            <ul class=\"archive-list\">
                {% for c in others %}<li><a href=\"{{ c.url }}\">{{ ui.icon(\x27file\x27) }}<span>{{ c.title }}</span></a></li>{% endfor %}
            </ul>
            {% endif %}
        </div>
    </section>
{% endblock %}
", "people.html.twig", "/Users/amer/Sites/apmia/user/themes/apmia/templates/people.html.twig");
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
