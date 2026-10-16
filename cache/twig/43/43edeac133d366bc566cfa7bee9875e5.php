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

/* document.html.twig */
class __TwigTemplate_cc110ca3dc131534c1e94e6a7f365127_sourced extends Template
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
        $context["fname"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, false, 7), "file", [], "any", false, false, false, 7);
        // line 8
        yield "    ";
        $context["f"] = (((($tmp = ($context["fname"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ((($_v0 = CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "media", [], "any", false, false, false, 8)) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0[(($_v1 = ($context["fname"] ?? null)) instanceof \Stringable && (is_array($_v0) || $_v0 instanceof \ArrayObject || $_v0 instanceof \ArrayIterator) ? (string) $_v1 : $_v1)] ?? null) : null)) : (null));
        // line 9
        yield "    ";
        $context["furl"] = (((($tmp = ($context["f"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["f"] ?? null), "url", [], "any", false, false, false, 9)) : (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, false, 9), "file_url", [], "any", false, false, false, 9)));
        // line 10
        yield "    <section class=\"section\">
        <div class=\"container container-narrow\">
            ";
        // line 12
        if ( !Twig\Extension\CoreExtension::testEmpty(Twig\Extension\CoreExtension::trim(Twig\Extension\CoreExtension::striptags(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, false, 12))))) {
            // line 13
            yield "            <article class=\"prose\">";
            yield (string) CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, false, 13);
            yield "</article>
            ";
        }
        // line 15
        yield "
            ";
        // line 16
        if ((($tmp = ($context["furl"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 17
            yield "            <div class=\"doc-card\">
                <span class=\"doc-icon\">";
            // line 18
            yield (string) ($macros["ui"] ?? $this->throwUninitializedMacroNamespace(18))->call("icon", ["file"], $context, 18, $this->source);
            yield "</span>
                <div class=\"doc-info\">
                    <strong>";
            // line 20
            yield (string) $this->escaper->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, true, false, 20), "file_label", [], "any", true, true, false, 20)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, false, 20), "file_label", [], "any", false, false, false, 20), CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "title", [], "any", false, false, false, 20))) : (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "title", [], "any", false, false, false, 20))), "html", null, true);
            yield "</strong>
                    <small>";
            // line 21
            yield (string) $this->escaper->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), Twig\Extension\CoreExtension::last($this->env->getCharset(), Twig\Extension\CoreExtension::split($this->env->getCharset(), (((($tmp = ($context["fname"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($context["fname"]) : (($context["furl"] ?? null))), "."))), "html", null, true);
            if (((($tmp = ($context["f"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp) && (($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["f"] ?? null), "size", [], "any", false, false, false, 21)) && $tmp instanceof Markup ? (string) $tmp : $tmp))) {
                yield " · ";
                yield (string) $this->escaper->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((CoreExtension::getAttribute($this->env, $this->source, ($context["f"] ?? null), "size", [], "any", false, false, false, 21) / 1048576), 2), "html", null, true);
                yield " MB";
            }
            yield "</small>
                </div>
                <a class=\"btn\" href=\"";
            // line 23
            yield (string) $this->escaper->escape(($context["furl"] ?? null), "html", null, true);
            yield "\" download>";
            yield (string) ($macros["ui"] ?? $this->throwUninitializedMacroNamespace(23))->call("icon", ["download"], $context, 23, $this->source);
            yield " Download</a>
                <a class=\"btn btn-ghost\" href=\"";
            // line 24
            yield (string) $this->escaper->escape(($context["furl"] ?? null), "html", null, true);
            yield "\" target=\"_blank\" rel=\"noopener\">";
            yield (string) ($macros["ui"] ?? $this->throwUninitializedMacroNamespace(24))->call("icon", ["external"], $context, 24, $this->source);
            yield " Open</a>
            </div>
            ";
            // line 26
            if (((($tmp = ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, true, false, 26), "embed", [], "any", true, true, false, 26)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, false, 26), "embed", [], "any", false, false, false, 26), true)) : (true))) && $tmp instanceof Markup ? (string) $tmp : $tmp) && ((is_string($_v2 = Twig\Extension\CoreExtension::lower($this->env->getCharset(), ($context["fname"] ?? null))) && is_string($_v3 = ".pdf") && str_ends_with($_v2, $_v3)) || (is_string($_v4 = Twig\Extension\CoreExtension::lower($this->env->getCharset(), ($context["furl"] ?? null))) && is_string($_v5 = ".pdf") && str_ends_with($_v4, $_v5))))) {
                // line 27
                yield "            <div class=\"doc-viewer\">
                <iframe src=\"";
                // line 28
                yield (string) $this->escaper->escape(($context["furl"] ?? null), "html", null, true);
                yield "#view=FitH\" title=\"";
                yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "title", [], "any", false, false, false, 28), "html", null, true);
                yield "\" loading=\"lazy\"></iframe>
            </div>
            ";
            }
            // line 31
            yield "            ";
        }
        // line 32
        yield "            ";
        yield from $this->load("partials/archive.html.twig", 32)->unwrap()->yield($context);
        // line 33
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
        return "document.html.twig";
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
        return array (  150 => 33,  147 => 32,  144 => 31,  136 => 28,  133 => 27,  131 => 26,  124 => 24,  118 => 23,  108 => 21,  104 => 20,  99 => 18,  96 => 17,  94 => 16,  91 => 15,  85 => 13,  83 => 12,  79 => 10,  76 => 9,  73 => 8,  70 => 7,  67 => 6,  60 => 5,  55 => 1,  53 => 2,  46 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends \x27partials/base.html.twig\x27 %}
{% import \x27macros/ui.html.twig\x27 as ui %}

{# A page that presents a downloadable file (PDF etc.), with an optional inline viewer #}
{% block content %}
    {% include \x27partials/banner.html.twig\x27 %}
    {% set fname = page.header.file %}
    {% set f = fname ? page.media[fname] : null %}
    {% set furl = f ? f.url : page.header.file_url %}
    <section class=\"section\">
        <div class=\"container container-narrow\">
            {% if page.content|striptags|trim is not empty %}
            <article class=\"prose\">{{ page.content|raw }}</article>
            {% endif %}

            {% if furl %}
            <div class=\"doc-card\">
                <span class=\"doc-icon\">{{ ui.icon(\x27file\x27) }}</span>
                <div class=\"doc-info\">
                    <strong>{{ page.header.file_label|default(page.title) }}</strong>
                    <small>{{ (fname ?: furl)|split(\x27.\x27)|last|upper }}{% if f and f.size %} · {{ (f.size / 1048576)|number_format(2) }} MB{% endif %}</small>
                </div>
                <a class=\"btn\" href=\"{{ furl }}\" download>{{ ui.icon(\x27download\x27) }} Download</a>
                <a class=\"btn btn-ghost\" href=\"{{ furl }}\" target=\"_blank\" rel=\"noopener\">{{ ui.icon(\x27external\x27) }} Open</a>
            </div>
            {% if page.header.embed|default(true) and (fname|lower ends with \x27.pdf\x27 or furl|lower ends with \x27.pdf\x27) %}
            <div class=\"doc-viewer\">
                <iframe src=\"{{ furl }}#view=FitH\" title=\"{{ page.title }}\" loading=\"lazy\"></iframe>
            </div>
            {% endif %}
            {% endif %}
            {% include \x27partials/archive.html.twig\x27 %}
        </div>
    </section>
{% endblock %}
", "document.html.twig", "/Users/amer/Sites/apmia/user/themes/apmia/templates/document.html.twig");
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
