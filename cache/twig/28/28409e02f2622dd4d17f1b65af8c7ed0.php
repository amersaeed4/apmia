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

/* error.html.twig */
class __TwigTemplate_d5d4688cc4a2facfc71895de4c738c1e_sourced extends Template
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
        yield "    <section class=\"section error-page\">
        <div class=\"container container-narrow center\">
            <p class=\"error-code\">";
        // line 7
        yield (string) $this->escaper->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["header"] ?? null), "http_response_code", [], "any", true, true, false, 7)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["header"] ?? null), "http_response_code", [], "any", false, false, false, 7), 404)) : (404)), "html", null, true);
        yield "</p>
            <h1>Page not found</h1>
            <p class=\"lead\">The page you are looking for may have moved or no longer exists.</p>
            <p><a class=\"btn\" href=\"";
        // line 10
        yield (string) (((($context["base_url"] ?? null) == "")) ? ("/") : ($this->escaper->escape(($context["base_url"] ?? null), "html", null, true)));
        yield "\">";
        yield (string) ($macros["ui"] ?? $this->throwUninitializedMacroNamespace(10))->call("icon", ["left"], $context, 10, $this->source);
        yield " Back to home</a></p>
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
        return "error.html.twig";
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
        return array (  77 => 10,  71 => 7,  67 => 5,  60 => 4,  55 => 1,  53 => 2,  46 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends \x27partials/base.html.twig\x27 %}
{% import \x27macros/ui.html.twig\x27 as ui %}

{% block content %}
    <section class=\"section error-page\">
        <div class=\"container container-narrow center\">
            <p class=\"error-code\">{{ header.http_response_code|default(404) }}</p>
            <h1>Page not found</h1>
            <p class=\"lead\">The page you are looking for may have moved or no longer exists.</p>
            <p><a class=\"btn\" href=\"{{ base_url == \x27\x27 ? \x27/\x27 : base_url }}\">{{ ui.icon(\x27left\x27) }} Back to home</a></p>
        </div>
    </section>
{% endblock %}
", "error.html.twig", "/Users/amer/Sites/apmia/user/themes/apmia/templates/error.html.twig");
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
