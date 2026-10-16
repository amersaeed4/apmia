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

/* section.html.twig */
class __TwigTemplate_3873612d4fe33547bdf6bbc15b359ead_sourced extends Template
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
        yield "    <section class=\"section\">
        <div class=\"container\">
            ";
        // line 9
        if ( !Twig\Extension\CoreExtension::testEmpty(Twig\Extension\CoreExtension::trim(Twig\Extension\CoreExtension::striptags(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, false, 9))))) {
            // line 10
            yield "            <article class=\"prose prose-intro\">";
            yield (string) CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, false, 10);
            yield "</article>
            ";
        }
        // line 12
        yield "
            ";
        // line 13
        $context["kids"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "children", [], "any", false, false, false, 13), "visible", [], "any", false, false, false, 13);
        // line 14
        yield "            ";
        if ((($tmp = Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["kids"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 15
            yield "            <div class=\"link-cards\">
                ";
            // line 16
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["kids"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
                // line 17
                yield "                ";
                $context["ico"] = ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["c"], "header", [], "any", false, true, false, 17), "icon", [], "any", true, true, false, 17)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["c"], "header", [], "any", false, false, false, 17), "icon", [], "any", false, false, false, 17), (((CoreExtension::getAttribute($this->env, $this->source, $context["c"], "template", [], "any", false, false, false, 17) == "document")) ? ("file") : ("arrow")))) : ((((CoreExtension::getAttribute($this->env, $this->source, $context["c"], "template", [], "any", false, false, false, 17) == "document")) ? ("file") : ("arrow"))));
                // line 18
                yield "                <a class=\"link-card\" href=\"";
                yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["c"], "url", [], "any", false, false, false, 18), "html", null, true);
                yield "\">
                    <span class=\"link-card-icon\">";
                // line 19
                yield (string) ($macros["ui"] ?? $this->throwUninitializedMacroNamespace(19))->call("icon", [($context["ico"] ?? null)], $context, 19, $this->source);
                yield "</span>
                    <span class=\"link-card-text\">
                        <strong>";
                // line 21
                yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["c"], "title", [], "any", false, false, false, 21), "html", null, true);
                yield "</strong>
                        ";
                // line 22
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["c"], "header", [], "any", false, false, false, 22), "summary", [], "any", false, false, false, 22)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield "<small>";
                    yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["c"], "header", [], "any", false, false, false, 22), "summary", [], "any", false, false, false, 22), "html", null, true);
                    yield "</small>";
                }
                // line 23
                yield "                    </span>
                    <span class=\"link-card-go\">";
                // line 24
                yield (string) ($macros["ui"] ?? $this->throwUninitializedMacroNamespace(24))->call("icon", ["arrow"], $context, 24, $this->source);
                yield "</span>
                </a>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['c'], $context['_parent']);
            $context = array_intersect_key($context, $_parent);
            $context += $_parent;
            // line 27
            yield "            </div>
            ";
        }
        // line 29
        yield "
            ";
        // line 30
        $context["hidden_kids"] = $this->extensions['Grav\Common\Twig\Extension\GravExtension']->filterFunc($this->env, false, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "children", [], "any", false, false, false, 30), function ($__c__) use ($context, $macros) { $context["c"] = $__c__; return ( !(($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["c"] ?? null), "visible", [], "any", false, false, true, 30)) && $tmp instanceof Markup ? (string) $tmp : $tmp) && (($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["c"] ?? null), "published", [], "any", false, false, true, 30)) && $tmp instanceof Markup ? (string) $tmp : $tmp)); });
        // line 31
        yield "            ";
        if (((($tmp = Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["hidden_kids"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp) && (($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, false, 31), "list_archive", [], "any", false, false, false, 31)) && $tmp instanceof Markup ? (string) $tmp : $tmp))) {
            // line 32
            yield "            <h2 class=\"archive-title\">";
            yield (string) $this->escaper->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, true, false, 32), "archive_title", [], "any", true, true, false, 32)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, false, 32), "archive_title", [], "any", false, false, false, 32), "Archive")) : ("Archive")), "html", null, true);
            yield "</h2>
            <ul class=\"archive-list\">
                ";
            // line 34
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["hidden_kids"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
                yield "<li><a href=\"";
                yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["c"], "url", [], "any", false, false, false, 34), "html", null, true);
                yield "\">";
                yield (string) ($macros["ui"] ?? $this->throwUninitializedMacroNamespace(34))->call("icon", ["file"], $context, 34, $this->source);
                yield "<span>";
                yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["c"], "title", [], "any", false, false, false, 34), "html", null, true);
                yield "</span></a></li>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['c'], $context['_parent']);
            $context = array_intersect_key($context, $_parent);
            $context += $_parent;
            // line 35
            yield "            </ul>
            ";
        }
        // line 37
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
        return "section.html.twig";
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
        return array (  171 => 37,  167 => 35,  151 => 34,  145 => 32,  142 => 31,  140 => 30,  137 => 29,  133 => 27,  123 => 24,  120 => 23,  114 => 22,  110 => 21,  105 => 19,  100 => 18,  97 => 17,  93 => 16,  90 => 15,  87 => 14,  85 => 13,  82 => 12,  76 => 10,  74 => 9,  70 => 7,  67 => 6,  60 => 5,  55 => 1,  53 => 2,  46 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends \x27partials/base.html.twig\x27 %}
{% import \x27macros/ui.html.twig\x27 as ui %}

{# A landing page that shows its visible child pages as cards (e.g. Elections, About) #}
{% block content %}
    {% include \x27partials/banner.html.twig\x27 %}
    <section class=\"section\">
        <div class=\"container\">
            {% if page.content|striptags|trim is not empty %}
            <article class=\"prose prose-intro\">{{ page.content|raw }}</article>
            {% endif %}

            {% set kids = page.children.visible %}
            {% if kids|length %}
            <div class=\"link-cards\">
                {% for c in kids %}
                {% set ico = c.header.icon|default(c.template == \x27document\x27 ? \x27file\x27 : \x27arrow\x27) %}
                <a class=\"link-card\" href=\"{{ c.url }}\">
                    <span class=\"link-card-icon\">{{ ui.icon(ico) }}</span>
                    <span class=\"link-card-text\">
                        <strong>{{ c.title }}</strong>
                        {% if c.header.summary %}<small>{{ c.header.summary }}</small>{% endif %}
                    </span>
                    <span class=\"link-card-go\">{{ ui.icon(\x27arrow\x27) }}</span>
                </a>
                {% endfor %}
            </div>
            {% endif %}

            {% set hidden_kids = page.children|filter(c => not c.visible and c.published) %}
            {% if hidden_kids|length and page.header.list_archive %}
            <h2 class=\"archive-title\">{{ page.header.archive_title|default(\x27Archive\x27) }}</h2>
            <ul class=\"archive-list\">
                {% for c in hidden_kids %}<li><a href=\"{{ c.url }}\">{{ ui.icon(\x27file\x27) }}<span>{{ c.title }}</span></a></li>{% endfor %}
            </ul>
            {% endif %}
        </div>
    </section>
{% endblock %}
", "section.html.twig", "/Users/amer/Sites/apmia/user/themes/apmia/templates/section.html.twig");
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
