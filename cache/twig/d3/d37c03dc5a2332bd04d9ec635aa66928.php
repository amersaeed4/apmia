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

/* modular/intro.html.twig */
class __TwigTemplate_937a1252110a352e7a45ef927a9cba97_sourced extends Template
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
        $context["img"] = (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["h"] ?? null), "image", [], "any", false, false, false, 3)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ((($_v0 = CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "media", [], "any", false, false, false, 3)) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0[(($_v1 = CoreExtension::getAttribute($this->env, $this->source, ($context["h"] ?? null), "image", [], "any", false, false, false, 3)) instanceof \Stringable && (is_array($_v0) || $_v0 instanceof \ArrayObject || $_v0 instanceof \ArrayIterator) ? (string) $_v1 : $_v1)] ?? null) : null)) : (Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "media", [], "any", false, false, false, 3), "images", [], "any", false, false, false, 3))));
        // line 4
        yield "<section class=\"section section-intro\">
    <div class=\"container intro-grid";
        // line 5
        yield (string) (((($tmp = ($context["img"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("") : (" no-image"));
        yield "\">
        <div class=\"intro-copy\">
            ";
        // line 7
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["h"] ?? null), "eyebrow", [], "any", false, false, false, 7)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "<span class=\"eyebrow\">";
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["h"] ?? null), "eyebrow", [], "any", false, false, false, 7), "html", null, true);
            yield "</span>";
        }
        // line 8
        yield "            ";
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["h"] ?? null), "title", [], "any", false, false, false, 8)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "<h2>";
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["h"] ?? null), "title", [], "any", false, false, false, 8), "html", null, true);
            yield "</h2>";
        }
        // line 9
        yield "            <div class=\"prose\">";
        yield (string) CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, false, 9);
        yield "</div>
            ";
        // line 10
        if (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["h"] ?? null), "button_label", [], "any", false, false, false, 10)) && $tmp instanceof Markup ? (string) $tmp : $tmp) && (($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["h"] ?? null), "button_url", [], "any", false, false, false, 10)) && $tmp instanceof Markup ? (string) $tmp : $tmp))) {
            // line 11
            yield "            <p><a class=\"btn\" href=\"";
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["h"] ?? null), "button_url", [], "any", false, false, false, 11), "html", null, true);
            yield "\">";
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["h"] ?? null), "button_label", [], "any", false, false, false, 11), "html", null, true);
            yield " ";
            yield (string) ($macros["ui"] ?? $this->throwUninitializedMacroNamespace(11))->call("icon", ["arrow"], $context, 11, $this->source);
            yield "</a></p>
            ";
        }
        // line 13
        yield "        </div>
        ";
        // line 14
        if ((($tmp = ($context["img"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 15
            yield "        <figure class=\"intro-media\">
            ";
            // line 16
            yield (string) CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["img"] ?? null), "quality", [82], "method", false, false, false, 16), "html", [(((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["h"] ?? null), "title", [], "any", false, false, false, 16)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["h"] ?? null), "title", [], "any", false, false, false, 16)) : ("")), "", ""], "method", false, false, false, 16);
            yield "
        </figure>
        ";
        }
        // line 19
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
        return "modular/intro.html.twig";
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
        return array (  106 => 19,  100 => 16,  97 => 15,  95 => 14,  92 => 13,  82 => 11,  80 => 10,  75 => 9,  68 => 8,  62 => 7,  57 => 5,  54 => 4,  52 => 3,  50 => 2,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% import \x27macros/ui.html.twig\x27 as ui %}
{% set h = page.header %}
{% set img = h.image ? page.media[h.image] : page.media.images|first %}
<section class=\"section section-intro\">
    <div class=\"container intro-grid{{ img ? \x27\x27 : \x27 no-image\x27 }}\">
        <div class=\"intro-copy\">
            {% if h.eyebrow %}<span class=\"eyebrow\">{{ h.eyebrow }}</span>{% endif %}
            {% if h.title %}<h2>{{ h.title }}</h2>{% endif %}
            <div class=\"prose\">{{ page.content|raw }}</div>
            {% if h.button_label and h.button_url %}
            <p><a class=\"btn\" href=\"{{ h.button_url }}\">{{ h.button_label }} {{ ui.icon(\x27arrow\x27) }}</a></p>
            {% endif %}
        </div>
        {% if img %}
        <figure class=\"intro-media\">
            {{ img.quality(82).html(h.title ?: \x27\x27, \x27\x27, \x27\x27)|raw }}
        </figure>
        {% endif %}
    </div>
</section>
", "modular/intro.html.twig", "/Users/amer/Sites/apmia/user/themes/apmia/templates/modular/intro.html.twig");
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
