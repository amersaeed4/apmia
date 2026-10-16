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

/* modular/cta.html.twig */
class __TwigTemplate_cab10f8d191ba14c1513393d22e9dd50_sourced extends Template
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
        yield "<section class=\"cta\">
    <div class=\"container cta-inner\">
        <div>
            <h2>";
        // line 6
        yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["h"] ?? null), "title", [], "any", false, false, false, 6), "html", null, true);
        yield "</h2>
            ";
        // line 7
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["h"] ?? null), "text", [], "any", false, false, false, 7)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "<p>";
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["h"] ?? null), "text", [], "any", false, false, false, 7), "html", null, true);
            yield "</p>";
        }
        // line 8
        yield "        </div>
        <div class=\"cta-actions\">
            ";
        // line 10
        if (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["h"] ?? null), "button_label", [], "any", false, false, false, 10)) && $tmp instanceof Markup ? (string) $tmp : $tmp) && (($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["h"] ?? null), "button_url", [], "any", false, false, false, 10)) && $tmp instanceof Markup ? (string) $tmp : $tmp))) {
            yield "<a class=\"btn btn-light\" href=\"";
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["h"] ?? null), "button_url", [], "any", false, false, false, 10), "html", null, true);
            yield "\">";
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["h"] ?? null), "button_label", [], "any", false, false, false, 10), "html", null, true);
            yield " ";
            yield (string) ($macros["ui"] ?? $this->throwUninitializedMacroNamespace(10))->call("icon", ["arrow"], $context, 10, $this->source);
            yield "</a>";
        }
        // line 11
        yield "            ";
        if (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["h"] ?? null), "button2_label", [], "any", false, false, false, 11)) && $tmp instanceof Markup ? (string) $tmp : $tmp) && (($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["h"] ?? null), "button2_url", [], "any", false, false, false, 11)) && $tmp instanceof Markup ? (string) $tmp : $tmp))) {
            yield "<a class=\"btn btn-outline-light\" href=\"";
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["h"] ?? null), "button2_url", [], "any", false, false, false, 11), "html", null, true);
            yield "\">";
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["h"] ?? null), "button2_label", [], "any", false, false, false, 11), "html", null, true);
            yield "</a>";
        }
        // line 12
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
        return "modular/cta.html.twig";
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
        return array (  90 => 12,  81 => 11,  71 => 10,  67 => 8,  61 => 7,  57 => 6,  52 => 3,  50 => 2,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% import \x27macros/ui.html.twig\x27 as ui %}
{% set h = page.header %}
<section class=\"cta\">
    <div class=\"container cta-inner\">
        <div>
            <h2>{{ h.title }}</h2>
            {% if h.text %}<p>{{ h.text }}</p>{% endif %}
        </div>
        <div class=\"cta-actions\">
            {% if h.button_label and h.button_url %}<a class=\"btn btn-light\" href=\"{{ h.button_url }}\">{{ h.button_label }} {{ ui.icon(\x27arrow\x27) }}</a>{% endif %}
            {% if h.button2_label and h.button2_url %}<a class=\"btn btn-outline-light\" href=\"{{ h.button2_url }}\">{{ h.button2_label }}</a>{% endif %}
        </div>
    </div>
</section>
", "modular/cta.html.twig", "/Users/amer/Sites/apmia/user/themes/apmia/templates/modular/cta.html.twig");
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
