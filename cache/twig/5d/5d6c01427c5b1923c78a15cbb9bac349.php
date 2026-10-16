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

/* modular/objectives.html.twig */
class __TwigTemplate_5edd7dd91adbd0ab3cbe117fe1ce485e_sourced extends Template
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
        yield "<section class=\"section section-soft\">
    <div class=\"container\">
        ";
        // line 5
        yield (string) ($macros["ui"] ?? $this->throwUninitializedMacroNamespace(5))->call("heading", [((CoreExtension::getAttribute($this->env, $this->source, ($context["h"] ?? null), "title", [], "any", true, true, false, 5)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["h"] ?? null), "title", [], "any", false, false, false, 5), "Objectives")) : ("Objectives")), CoreExtension::getAttribute($this->env, $this->source, ($context["h"] ?? null), "eyebrow", [], "any", false, false, false, 5), CoreExtension::getAttribute($this->env, $this->source, ($context["h"] ?? null), "lead", [], "any", false, false, false, 5)], $context, 5, $this->source);
        yield "
        <div class=\"objective-grid\">
            ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["h"] ?? null), "items", [], "any", false, false, false, 7));
        foreach ($context['_seq'] as $context["_key"] => $context["o"]) {
            // line 8
            yield "            <article class=\"objective\">
                <span class=\"objective-icon\">";
            // line 9
            yield (string) ($macros["ui"] ?? $this->throwUninitializedMacroNamespace(9))->call("icon", [((CoreExtension::getAttribute($this->env, $this->source, $context["o"], "icon", [], "any", true, true, false, 9)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["o"], "icon", [], "any", false, false, false, 9), "mountain")) : ("mountain"))], $context, 9, $this->source);
            yield "</span>
                <h3>";
            // line 10
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["o"], "title", [], "any", false, false, false, 10), "html", null, true);
            yield "</h3>
                <p>";
            // line 11
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["o"], "text", [], "any", false, false, false, 11), "html", null, true);
            yield "</p>
            </article>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['o'], $context['_parent']);
        $context = array_intersect_key($context, $_parent);
        $context += $_parent;
        // line 14
        yield "        </div>
    </div>
</section>
";
        return; yield;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "modular/objectives.html.twig";
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
        return array (  86 => 14,  76 => 11,  72 => 10,  68 => 9,  65 => 8,  61 => 7,  56 => 5,  52 => 3,  50 => 2,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% import \x27macros/ui.html.twig\x27 as ui %}
{% set h = page.header %}
<section class=\"section section-soft\">
    <div class=\"container\">
        {{ ui.heading(h.title|default(\x27Objectives\x27), h.eyebrow, h.lead) }}
        <div class=\"objective-grid\">
            {% for o in h.items %}
            <article class=\"objective\">
                <span class=\"objective-icon\">{{ ui.icon(o.icon|default(\x27mountain\x27)) }}</span>
                <h3>{{ o.title }}</h3>
                <p>{{ o.text }}</p>
            </article>
            {% endfor %}
        </div>
    </div>
</section>
", "modular/objectives.html.twig", "/Users/amer/Sites/apmia/user/themes/apmia/templates/modular/objectives.html.twig");
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
