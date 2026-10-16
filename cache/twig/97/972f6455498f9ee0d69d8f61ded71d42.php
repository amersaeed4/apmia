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

/* modular/bearers.html.twig */
class __TwigTemplate_f3ced5c6e98d79ea646f49c563f0de93_sourced extends Template
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
        $context["src"] = CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "find", [((CoreExtension::getAttribute($this->env, $this->source, ($context["h"] ?? null), "source", [], "any", true, true, false, 3)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["h"] ?? null), "source", [], "any", false, false, false, 3), "/about/top-office-bearers")) : ("/about/top-office-bearers"))], "method", false, false, false, 3);
        // line 4
        yield "<section class=\"section\">
    <div class=\"container\">
        ";
        // line 6
        yield (string) ($macros["ui"] ?? $this->throwUninitializedMacroNamespace(6))->call("heading", [((CoreExtension::getAttribute($this->env, $this->source, ($context["h"] ?? null), "title", [], "any", true, true, false, 6)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["h"] ?? null), "title", [], "any", false, false, false, 6), "Top Office Bearers")) : ("Top Office Bearers")), CoreExtension::getAttribute($this->env, $this->source, ($context["h"] ?? null), "eyebrow", [], "any", false, false, false, 6), CoreExtension::getAttribute($this->env, $this->source, ($context["h"] ?? null), "lead", [], "any", false, false, false, 6)], $context, 6, $this->source);
        yield "
        ";
        // line 7
        if ((($tmp = ($context["src"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 8
            yield "        <div class=\"people-grid\">
            ";
            // line 9
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(Twig\Extension\CoreExtension::slice($this->env->getCharset(), $this->extensions['Grav\Common\Twig\Extension\GravExtension']->filterFunc($this->env, false, CoreExtension::getAttribute($this->env, $this->source, ($context["src"] ?? null), "children", [], "any", false, false, false, 9), function ($__c__) use ($context, $macros) { $context["c"] = $__c__; return (($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["c"] ?? null), "template", [], "any", false, false, true, 9), 9, $this->source) == "person") && (($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["c"] ?? null), "published", [], "any", false, false, true, 9)) && $tmp instanceof Markup ? (string) $tmp : $tmp)); }), 0, ((CoreExtension::getAttribute($this->env, $this->source, ($context["h"] ?? null), "limit", [], "any", true, true, false, 9)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["h"] ?? null), "limit", [], "any", false, false, false, 9), 4)) : (4))));
            foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
                yield (string) ($macros["ui"] ?? $this->throwUninitializedMacroNamespace(9))->call("person_card", [$context["p"]], $context, 9, $this->source);
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['p'], $context['_parent']);
            $context = array_intersect_key($context, $_parent);
            $context += $_parent;
            // line 10
            yield "        </div>
        <p class=\"center\"><a class=\"btn btn-ghost\" href=\"";
            // line 11
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["src"] ?? null), "url", [], "any", false, false, false, 11), "html", null, true);
            yield "\">";
            yield (string) $this->escaper->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["h"] ?? null), "button_label", [], "any", true, true, false, 11)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["h"] ?? null), "button_label", [], "any", false, false, false, 11), "View all")) : ("View all")), "html", null, true);
            yield " ";
            yield (string) ($macros["ui"] ?? $this->throwUninitializedMacroNamespace(11))->call("icon", ["arrow"], $context, 11, $this->source);
            yield "</a></p>
        ";
        }
        // line 13
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
        return "modular/bearers.html.twig";
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
        return array (  89 => 13,  80 => 11,  77 => 10,  67 => 9,  64 => 8,  62 => 7,  58 => 6,  54 => 4,  52 => 3,  50 => 2,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% import \x27macros/ui.html.twig\x27 as ui %}
{% set h = page.header %}
{% set src = page.find(h.source|default(\x27/about/top-office-bearers\x27)) %}
<section class=\"section\">
    <div class=\"container\">
        {{ ui.heading(h.title|default(\x27Top Office Bearers\x27), h.eyebrow, h.lead) }}
        {% if src %}
        <div class=\"people-grid\">
            {% for p in src.children|filter(c => c.template == \x27person\x27 and c.published)|slice(0, h.limit|default(4)) %}{{ ui.person_card(p) }}{% endfor %}
        </div>
        <p class=\"center\"><a class=\"btn btn-ghost\" href=\"{{ src.url }}\">{{ h.button_label|default(\x27View all\x27) }} {{ ui.icon(\x27arrow\x27) }}</a></p>
        {% endif %}
    </div>
</section>
", "modular/bearers.html.twig", "/Users/amer/Sites/apmia/user/themes/apmia/templates/modular/bearers.html.twig");
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
