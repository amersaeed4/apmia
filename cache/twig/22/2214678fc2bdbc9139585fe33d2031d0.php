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

/* modular/hero.html.twig */
class __TwigTemplate_7febcb33ac2dbd55b259b947d762e5e3_sourced extends Template
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
        $context["slides"] = ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, true, false, 2), "slides", [], "any", true, true, false, 2)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, false, 2), "slides", [], "any", false, false, false, 2), [])) : ([]));
        // line 3
        yield "<section class=\"hero\" data-hero data-autoplay=\"";
        yield (string) $this->escaper->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, true, false, 3), "autoplay", [], "any", true, true, false, 3)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, false, 3), "autoplay", [], "any", false, false, false, 3), 6)) : (6)), "html", null, true);
        yield "\" aria-roledescription=\"carousel\" aria-label=\"Featured\">
    <div class=\"hero-track\">
        ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["slides"] ?? null));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["s"]) {
            // line 6
            yield "        ";
            $context["img"] = (($_v0 = CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "media", [], "any", false, false, false, 6)) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0[(($_v1 = CoreExtension::getAttribute($this->env, $this->source, $context["s"], "image", [], "any", false, false, false, 6)) instanceof \Stringable && (is_array($_v0) || $_v0 instanceof \ArrayObject || $_v0 instanceof \ArrayIterator) ? (string) $_v1 : $_v1)] ?? null) : null);
            // line 7
            yield "        ";
            if ((($tmp = ($context["img"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 8
                yield "        <div class=\"hero-slide";
                yield (string) (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 8)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (" is-active") : (""));
                yield "\" role=\"group\" aria-roledescription=\"slide\" aria-label=\"";
                yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 8), "html", null, true);
                yield " of ";
                yield (string) $this->escaper->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["slides"] ?? null)), "html", null, true);
                yield "\">
            ";
                // line 9
                yield (string) CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["img"] ?? null), "quality", [80], "method", false, false, false, 9), "html", [(((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["s"], "title", [], "any", false, false, false, 9)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (CoreExtension::getAttribute($this->env, $this->source, $context["s"], "title", [], "any", false, false, false, 9)) : ("")), "", "hero-img"], "method", false, false, false, 9);
                yield "
            <div class=\"hero-shade\"></div>
            <div class=\"container hero-copy\">
                ";
                // line 12
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["s"], "eyebrow", [], "any", false, false, false, 12)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield "<span class=\"eyebrow eyebrow-light\">";
                    yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["s"], "eyebrow", [], "any", false, false, false, 12), "html", null, true);
                    yield "</span>";
                }
                // line 13
                yield "                ";
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["s"], "title", [], "any", false, false, false, 13)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield "<h2>";
                    yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["s"], "title", [], "any", false, false, false, 13), "html", null, true);
                    yield "</h2>";
                }
                // line 14
                yield "                ";
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["s"], "text", [], "any", false, false, false, 14)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield "<p>";
                    yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["s"], "text", [], "any", false, false, false, 14), "html", null, true);
                    yield "</p>";
                }
                // line 15
                yield "                ";
                if (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["s"], "button_label", [], "any", false, false, false, 15)) && $tmp instanceof Markup ? (string) $tmp : $tmp) && (($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["s"], "button_url", [], "any", false, false, false, 15)) && $tmp instanceof Markup ? (string) $tmp : $tmp))) {
                    // line 16
                    yield "                <a class=\"btn btn-light\" href=\"";
                    yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["s"], "button_url", [], "any", false, false, false, 16), "html", null, true);
                    yield "\">";
                    yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["s"], "button_label", [], "any", false, false, false, 16), "html", null, true);
                    yield " ";
                    yield (string) ($macros["ui"] ?? $this->throwUninitializedMacroNamespace(16))->call("icon", ["arrow"], $context, 16, $this->source);
                    yield "</a>
                ";
                }
                // line 18
                yield "            </div>
        </div>
        ";
            }
            // line 21
            yield "        ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['s'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent);
        $context += $_parent;
        // line 22
        yield "    </div>
    ";
        // line 23
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["slides"] ?? null)) > 1)) {
            // line 24
            yield "    <div class=\"hero-controls container\">
        <button class=\"hero-arrow\" type=\"button\" data-hero-prev aria-label=\"Previous slide\">";
            // line 25
            yield (string) ($macros["ui"] ?? $this->throwUninitializedMacroNamespace(25))->call("icon", ["left"], $context, 25, $this->source);
            yield "</button>
        <div class=\"hero-dots\" role=\"tablist\">
            ";
            // line 27
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["slides"] ?? null));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["s"]) {
                yield "<button type=\"button\" class=\"hero-dot";
                yield (string) (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 27)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (" is-active") : (""));
                yield "\" aria-label=\"Go to slide ";
                yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 27), "html", null, true);
                yield "\"></button>";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['s'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent);
            $context += $_parent;
            // line 28
            yield "        </div>
        <button class=\"hero-arrow\" type=\"button\" data-hero-next aria-label=\"Next slide\">";
            // line 29
            yield (string) ($macros["ui"] ?? $this->throwUninitializedMacroNamespace(29))->call("icon", ["right"], $context, 29, $this->source);
            yield "</button>
    </div>
    ";
        }
        // line 32
        yield "</section>
";
        return; yield;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "modular/hero.html.twig";
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
        return array (  206 => 32,  200 => 29,  197 => 28,  162 => 27,  157 => 25,  154 => 24,  152 => 23,  149 => 22,  134 => 21,  129 => 18,  119 => 16,  116 => 15,  109 => 14,  102 => 13,  96 => 12,  90 => 9,  81 => 8,  78 => 7,  75 => 6,  58 => 5,  52 => 3,  50 => 2,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% import \x27macros/ui.html.twig\x27 as ui %}
{% set slides = page.header.slides|default([]) %}
<section class=\"hero\" data-hero data-autoplay=\"{{ page.header.autoplay|default(6) }}\" aria-roledescription=\"carousel\" aria-label=\"Featured\">
    <div class=\"hero-track\">
        {% for s in slides %}
        {% set img = page.media[s.image] %}
        {% if img %}
        <div class=\"hero-slide{{ loop.first ? \x27 is-active\x27 : \x27\x27 }}\" role=\"group\" aria-roledescription=\"slide\" aria-label=\"{{ loop.index }} of {{ slides|length }}\">
            {{ img.quality(80).html(s.title ?: \x27\x27, \x27\x27, \x27hero-img\x27)|raw }}
            <div class=\"hero-shade\"></div>
            <div class=\"container hero-copy\">
                {% if s.eyebrow %}<span class=\"eyebrow eyebrow-light\">{{ s.eyebrow }}</span>{% endif %}
                {% if s.title %}<h2>{{ s.title }}</h2>{% endif %}
                {% if s.text %}<p>{{ s.text }}</p>{% endif %}
                {% if s.button_label and s.button_url %}
                <a class=\"btn btn-light\" href=\"{{ s.button_url }}\">{{ s.button_label }} {{ ui.icon(\x27arrow\x27) }}</a>
                {% endif %}
            </div>
        </div>
        {% endif %}
        {% endfor %}
    </div>
    {% if slides|length > 1 %}
    <div class=\"hero-controls container\">
        <button class=\"hero-arrow\" type=\"button\" data-hero-prev aria-label=\"Previous slide\">{{ ui.icon(\x27left\x27) }}</button>
        <div class=\"hero-dots\" role=\"tablist\">
            {% for s in slides %}<button type=\"button\" class=\"hero-dot{{ loop.first ? \x27 is-active\x27 : \x27\x27 }}\" aria-label=\"Go to slide {{ loop.index }}\"></button>{% endfor %}
        </div>
        <button class=\"hero-arrow\" type=\"button\" data-hero-next aria-label=\"Next slide\">{{ ui.icon(\x27right\x27) }}</button>
    </div>
    {% endif %}
</section>
", "modular/hero.html.twig", "/Users/amer/Sites/apmia/user/themes/apmia/templates/modular/hero.html.twig");
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
