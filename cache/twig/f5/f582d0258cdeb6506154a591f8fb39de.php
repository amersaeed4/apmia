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

/* gallery.html.twig */
class __TwigTemplate_1b4574f9050f577e072a05e62ceb0f12_sourced extends Template
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
        $context["items"] = ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, true, false, 7), "gallery_items", [], "any", true, true, false, 7)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, false, 7), "gallery_items", [], "any", false, false, false, 7), [])) : ([]));
        // line 8
        yield "    <section class=\"section\">
        <div class=\"container\">
            ";
        // line 10
        if ( !Twig\Extension\CoreExtension::testEmpty(Twig\Extension\CoreExtension::trim(Twig\Extension\CoreExtension::striptags(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, false, 10))))) {
            yield "<article class=\"prose prose-intro\">";
            yield (string) CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, false, 10);
            yield "</article>";
        }
        // line 11
        yield "            <div class=\"photo-grid\" data-lightbox>
                ";
        // line 12
        if ((($tmp = Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["items"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 13
            yield "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["items"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["it"]) {
                // line 14
                yield "                    ";
                $context["img"] = (($_v0 = CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "media", [], "any", false, false, false, 14)) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0[(($_v1 = CoreExtension::getAttribute($this->env, $this->source, $context["it"], "image", [], "any", false, false, false, 14)) instanceof \Stringable && (is_array($_v0) || $_v0 instanceof \ArrayObject || $_v0 instanceof \ArrayIterator) ? (string) $_v1 : $_v1)] ?? null) : null);
                // line 15
                yield "                    ";
                if ((($tmp = ($context["img"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 16
                    yield "                    <figure class=\"photo\">
                        <a href=\"";
                    // line 17
                    yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["img"] ?? null), "url", [], "any", false, false, false, 17), "html", null, true);
                    yield "\" data-caption=\"";
                    yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["it"], "title", [], "any", false, false, false, 17), "html", null, true);
                    yield "\">
                            ";
                    // line 18
                    yield (string) CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["img"] ?? null), "cropZoom", [480, 480], "method", false, false, false, 18), "quality", [78], "method", false, false, false, 18), "html", [(((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["it"], "title", [], "any", false, false, false, 18)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (CoreExtension::getAttribute($this->env, $this->source, $context["it"], "title", [], "any", false, false, false, 18)) : (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "title", [], "any", false, false, false, 18))), "", ""], "method", false, false, false, 18);
                    yield "
                        </a>
                        ";
                    // line 20
                    if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["it"], "title", [], "any", false, false, false, 20)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        yield "<figcaption>";
                        yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["it"], "title", [], "any", false, false, false, 20), "html", null, true);
                        yield "</figcaption>";
                    }
                    // line 21
                    yield "                    </figure>
                    ";
                }
                // line 23
                yield "                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['it'], $context['_parent']);
            $context = array_intersect_key($context, $_parent);
            $context += $_parent;
            // line 24
            yield "                ";
        } else {
            // line 25
            yield "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "media", [], "any", false, false, false, 25), "images", [], "any", false, false, false, 25));
            foreach ($context['_seq'] as $context["_key"] => $context["img"]) {
                // line 26
                yield "                    <figure class=\"photo\">
                        <a href=\"";
                // line 27
                yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["img"], "url", [], "any", false, false, false, 27), "html", null, true);
                yield "\">";
                yield (string) CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["img"], "cropZoom", [480, 480], "method", false, false, false, 27), "quality", [78], "method", false, false, false, 27), "html", [CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "title", [], "any", false, false, false, 27), "", ""], "method", false, false, false, 27);
                yield "</a>
                    </figure>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['img'], $context['_parent']);
            $context = array_intersect_key($context, $_parent);
            $context += $_parent;
            // line 30
            yield "                ";
        }
        // line 31
        yield "            </div>
            <p class=\"back-link\"><a class=\"btn btn-ghost\" href=\"";
        // line 32
        yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "parent", [], "any", false, false, false, 32), "url", [], "any", false, false, false, 32), "html", null, true);
        yield "\">";
        yield (string) ($macros["ui"] ?? $this->throwUninitializedMacroNamespace(32))->call("icon", ["left"], $context, 32, $this->source);
        yield " All galleries</a></p>
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
        return "gallery.html.twig";
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
        return array (  159 => 32,  156 => 31,  153 => 30,  141 => 27,  138 => 26,  133 => 25,  130 => 24,  123 => 23,  119 => 21,  113 => 20,  108 => 18,  102 => 17,  99 => 16,  96 => 15,  93 => 14,  88 => 13,  86 => 12,  83 => 11,  77 => 10,  73 => 8,  70 => 7,  67 => 6,  60 => 5,  55 => 1,  53 => 2,  46 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends \x27partials/base.html.twig\x27 %}
{% import \x27macros/ui.html.twig\x27 as ui %}

{# A photo gallery. Items come from header.gallery_items; if empty, every image in the page folder is shown #}
{% block content %}
    {% include \x27partials/banner.html.twig\x27 %}
    {% set items = page.header.gallery_items|default([]) %}
    <section class=\"section\">
        <div class=\"container\">
            {% if page.content|striptags|trim is not empty %}<article class=\"prose prose-intro\">{{ page.content|raw }}</article>{% endif %}
            <div class=\"photo-grid\" data-lightbox>
                {% if items|length %}
                    {% for it in items %}
                    {% set img = page.media[it.image] %}
                    {% if img %}
                    <figure class=\"photo\">
                        <a href=\"{{ img.url }}\" data-caption=\"{{ it.title }}\">
                            {{ img.cropZoom(480, 480).quality(78).html(it.title ?: page.title, \x27\x27, \x27\x27)|raw }}
                        </a>
                        {% if it.title %}<figcaption>{{ it.title }}</figcaption>{% endif %}
                    </figure>
                    {% endif %}
                    {% endfor %}
                {% else %}
                    {% for img in page.media.images %}
                    <figure class=\"photo\">
                        <a href=\"{{ img.url }}\">{{ img.cropZoom(480, 480).quality(78).html(page.title, \x27\x27, \x27\x27)|raw }}</a>
                    </figure>
                    {% endfor %}
                {% endif %}
            </div>
            <p class=\"back-link\"><a class=\"btn btn-ghost\" href=\"{{ page.parent.url }}\">{{ ui.icon(\x27left\x27) }} All galleries</a></p>
        </div>
    </section>
{% endblock %}
", "gallery.html.twig", "/Users/amer/Sites/apmia/user/themes/apmia/templates/gallery.html.twig");
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
