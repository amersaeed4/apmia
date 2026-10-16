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

/* person.html.twig */
class __TwigTemplate_8ad2da4c915a502bfdcc1be189072bba_sourced extends Template
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
        $context["h"] = CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, false, 5);
        // line 6
        yield "    ";
        $context["photo"] = (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["h"] ?? null), "photo", [], "any", false, false, false, 6)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ((($_v0 = CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "media", [], "any", false, false, false, 6)) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0[(($_v1 = CoreExtension::getAttribute($this->env, $this->source, ($context["h"] ?? null), "photo", [], "any", false, false, false, 6)) instanceof \Stringable && (is_array($_v0) || $_v0 instanceof \ArrayObject || $_v0 instanceof \ArrayIterator) ? (string) $_v1 : $_v1)] ?? null) : null)) : (Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "media", [], "any", false, false, false, 6), "images", [], "any", false, false, false, 6))));
        // line 7
        yield "    ";
        yield from $this->load("partials/banner.html.twig", 7)->unwrap()->yield(CoreExtension::merge($context, ["banner_sub" => CoreExtension::getAttribute($this->env, $this->source, ($context["h"] ?? null), "designation", [], "any", false, false, false, 7)]));
        // line 8
        yield "    <section class=\"section\">
        <div class=\"container\">
            <div class=\"profile\">
                <div class=\"profile-photo\">
                    ";
        // line 12
        if ((($tmp = ($context["photo"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield (string) CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["photo"] ?? null), "cropZoom", [560, 640], "method", false, false, false, 12), "quality", [85], "method", false, false, false, 12), "html", [CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "title", [], "any", false, false, false, 12), "", ""], "method", false, false, false, 12);
        } else {
            yield "<span class=\"person-initial\">";
            yield (string) $this->escaper->escape(Twig\Extension\CoreExtension::first($this->env->getCharset(), Twig\Extension\CoreExtension::replace(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "title", [], "any", false, false, false, 12), ["Mr. " => ""])), "html", null, true);
            yield "</span>";
        }
        // line 13
        yield "                </div>
                <div class=\"profile-body\">
                    <h2>";
        // line 15
        yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "title", [], "any", false, false, false, 15), "html", null, true);
        yield "</h2>
                    ";
        // line 16
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["h"] ?? null), "designation", [], "any", false, false, false, 16)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "<p class=\"person-role\">";
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["h"] ?? null), "designation", [], "any", false, false, false, 16), "html", null, true);
            yield "</p>";
        }
        // line 17
        yield "                    <dl class=\"profile-facts\">
                        ";
        // line 18
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["h"] ?? null), "company", [], "any", false, false, false, 18)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "<dt>Company</dt><dd>";
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["h"] ?? null), "company", [], "any", false, false, false, 18), "html", null, true);
            yield "</dd>";
        }
        // line 19
        yield "                        ";
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["h"] ?? null), "address", [], "any", false, false, false, 19)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "<dt>Business address</dt><dd>";
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["h"] ?? null), "address", [], "any", false, false, false, 19), "html", null, true);
            yield "</dd>";
        }
        // line 20
        yield "                        ";
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["h"] ?? null), "term", [], "any", false, false, false, 20)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "<dt>Term</dt><dd>";
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["h"] ?? null), "term", [], "any", false, false, false, 20), "html", null, true);
            yield "</dd>";
        }
        // line 21
        yield "                        ";
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["h"] ?? null), "phone", [], "any", false, false, false, 21)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "<dt>Telephone</dt><dd><a href=\"tel:";
            yield (string) $this->escaper->escape(Twig\Extension\CoreExtension::replace(CoreExtension::getAttribute($this->env, $this->source, ($context["h"] ?? null), "phone", [], "any", false, false, false, 21), [" " => "", "-" => ""]), "html", null, true);
            yield "\">";
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["h"] ?? null), "phone", [], "any", false, false, false, 21), "html", null, true);
            yield "</a></dd>";
        }
        // line 22
        yield "                        ";
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["h"] ?? null), "email", [], "any", false, false, false, 22)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "<dt>Email</dt><dd><a href=\"mailto:";
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["h"] ?? null), "email", [], "any", false, false, false, 22), "html", null, true);
            yield "\">";
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["h"] ?? null), "email", [], "any", false, false, false, 22), "html", null, true);
            yield "</a></dd>";
        }
        // line 23
        yield "                    </dl>
                    ";
        // line 24
        if ( !Twig\Extension\CoreExtension::testEmpty(Twig\Extension\CoreExtension::trim(Twig\Extension\CoreExtension::striptags(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, false, 24))))) {
            yield "<div class=\"prose\">";
            yield (string) CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, false, 24);
            yield "</div>";
        }
        // line 25
        yield "                    <p><a class=\"btn btn-ghost\" href=\"";
        yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "parent", [], "any", false, false, false, 25), "url", [], "any", false, false, false, 25), "html", null, true);
        yield "\">";
        yield (string) ($macros["ui"] ?? $this->throwUninitializedMacroNamespace(25))->call("icon", ["left"], $context, 25, $this->source);
        yield " Back to ";
        yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "parent", [], "any", false, false, false, 25), "title", [], "any", false, false, false, 25), "html", null, true);
        yield "</a></p>
                </div>
            </div>
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
        return "person.html.twig";
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
        return array (  154 => 25,  148 => 24,  145 => 23,  136 => 22,  127 => 21,  120 => 20,  113 => 19,  107 => 18,  104 => 17,  98 => 16,  94 => 15,  90 => 13,  82 => 12,  76 => 8,  73 => 7,  70 => 6,  67 => 5,  60 => 4,  55 => 1,  53 => 2,  46 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends \x27partials/base.html.twig\x27 %}
{% import \x27macros/ui.html.twig\x27 as ui %}

{% block content %}
    {% set h = page.header %}
    {% set photo = h.photo ? page.media[h.photo] : page.media.images|first %}
    {% include \x27partials/banner.html.twig\x27 with {banner_sub: h.designation} %}
    <section class=\"section\">
        <div class=\"container\">
            <div class=\"profile\">
                <div class=\"profile-photo\">
                    {% if photo %}{{ photo.cropZoom(560, 640).quality(85).html(page.title, \x27\x27, \x27\x27)|raw }}{% else %}<span class=\"person-initial\">{{ page.title|replace({\x27Mr. \x27:\x27\x27})|first }}</span>{% endif %}
                </div>
                <div class=\"profile-body\">
                    <h2>{{ page.title }}</h2>
                    {% if h.designation %}<p class=\"person-role\">{{ h.designation }}</p>{% endif %}
                    <dl class=\"profile-facts\">
                        {% if h.company %}<dt>Company</dt><dd>{{ h.company }}</dd>{% endif %}
                        {% if h.address %}<dt>Business address</dt><dd>{{ h.address }}</dd>{% endif %}
                        {% if h.term %}<dt>Term</dt><dd>{{ h.term }}</dd>{% endif %}
                        {% if h.phone %}<dt>Telephone</dt><dd><a href=\"tel:{{ h.phone|replace({\x27 \x27:\x27\x27, \x27-\x27:\x27\x27}) }}\">{{ h.phone }}</a></dd>{% endif %}
                        {% if h.email %}<dt>Email</dt><dd><a href=\"mailto:{{ h.email }}\">{{ h.email }}</a></dd>{% endif %}
                    </dl>
                    {% if page.content|striptags|trim is not empty %}<div class=\"prose\">{{ page.content|raw }}</div>{% endif %}
                    <p><a class=\"btn btn-ghost\" href=\"{{ page.parent.url }}\">{{ ui.icon(\x27left\x27) }} Back to {{ page.parent.title }}</a></p>
                </div>
            </div>
        </div>
    </section>
{% endblock %}
", "person.html.twig", "/Users/amer/Sites/apmia/user/themes/apmia/templates/person.html.twig");
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
