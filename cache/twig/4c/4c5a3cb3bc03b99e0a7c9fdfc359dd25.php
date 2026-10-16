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

/* partials/archive.html.twig */
class __TwigTemplate_a3678a51a66225c2b27c048cd625f044_sourced extends Template
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
        $macros["ui"] = $this->macros["ui"] = $this->load("macros/ui.html.twig", 2)->unwrap()->getMacroNamespace();
        // line 3
        $context["archive"] = $this->extensions['Grav\Common\Twig\Extension\GravExtension']->filterFunc($this->env, false, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "children", [], "any", false, false, false, 3), function ($__c__) use ($context, $macros) { $context["c"] = $__c__; return CoreExtension::getAttribute($this->env, $this->source, ($context["c"] ?? null), "published", [], "any", false, false, true, 3); });
        // line 4
        if ((($tmp = Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["archive"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 5
            yield "    ";
            $context["archive"] = (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, false, 5), "archive_sort", [], "any", false, false, false, 5) == "asc")) ? ($this->extensions['Grav\Common\Twig\Extension\GravExtension']->sortFunc($this->env, false, ($context["archive"] ?? null), function ($__a__, $__b__) use ($context, $macros) { $context["a"] = $__a__; $context["b"] = $__b__; return ($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["a"] ?? null), "title", [], "any", false, false, true, 5), 5, $this->source) <=> $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["b"] ?? null), "title", [], "any", false, false, true, 5), 5, $this->source)); })) : ($this->extensions['Grav\Common\Twig\Extension\GravExtension']->sortFunc($this->env, false, ($context["archive"] ?? null), function ($__a__, $__b__) use ($context, $macros) { $context["a"] = $__a__; $context["b"] = $__b__; return ($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["b"] ?? null), "title", [], "any", false, false, true, 5), 5, $this->source) <=> $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["a"] ?? null), "title", [], "any", false, false, true, 5), 5, $this->source)); })));
            // line 6
            yield "    <h2 class=\"archive-title\">";
            yield (string) $this->escaper->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, true, false, 6), "archive_title", [], "any", true, true, false, 6)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, false, 6), "archive_title", [], "any", false, false, false, 6), "Previous years")) : ("Previous years")), "html", null, true);
            yield "</h2>
    <ul class=\"archive-list\">
        ";
            // line 8
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["archive"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
                yield "<li><a href=\"";
                yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["c"], "url", [], "any", false, false, false, 8), "html", null, true);
                yield "\">";
                yield (string) ($macros["ui"] ?? $this->throwUninitializedMacroNamespace(8))->call("icon", ["file"], $context, 8, $this->source);
                yield "<span>";
                yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["c"], "title", [], "any", false, false, false, 8), "html", null, true);
                yield "</span></a></li>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['c'], $context['_parent']);
            $context = array_intersect_key($context, $_parent);
            $context += $_parent;
            // line 9
            yield "    </ul>
";
        }
        return; yield;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "partials/archive.html.twig";
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
        return array (  79 => 9,  63 => 8,  57 => 6,  54 => 5,  52 => 4,  50 => 3,  48 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# Lists older/child pages (e.g. previous years) under a page, newest first #}
{% import \x27macros/ui.html.twig\x27 as ui %}
{% set archive = page.children|filter(c => c.published) %}
{% if archive|length %}
    {% set archive = page.header.archive_sort == \x27asc\x27 ? archive|sort((a, b) => a.title <=> b.title) : archive|sort((a, b) => b.title <=> a.title) %}
    <h2 class=\"archive-title\">{{ page.header.archive_title|default(\x27Previous years\x27) }}</h2>
    <ul class=\"archive-list\">
        {% for c in archive %}<li><a href=\"{{ c.url }}\">{{ ui.icon(\x27file\x27) }}<span>{{ c.title }}</span></a></li>{% endfor %}
    </ul>
{% endif %}
", "partials/archive.html.twig", "/Users/amer/Sites/apmia/user/themes/apmia/templates/partials/archive.html.twig");
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
