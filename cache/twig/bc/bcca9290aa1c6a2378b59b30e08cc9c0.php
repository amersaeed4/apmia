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

/* partials/banner.html.twig */
class __TwigTemplate_169f5189fb12bab305ecf6877be25694_sourced extends Template
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
            'banner_extra' => [$this, 'block_banner_extra'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 2
        $context["chain"] = [];
        // line 3
        $context["cur"] = CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "parent", [], "any", false, false, false, 3);
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(range(1, 6));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 5
            yield "    ";
            if (((($tmp = ($context["cur"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp) &&  !(($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["cur"] ?? null), "root", [], "any", false, false, false, 5)) && $tmp instanceof Markup ? (string) $tmp : $tmp))) {
                // line 6
                yield "        ";
                $context["chain"] = Twig\Extension\CoreExtension::merge([($context["cur"] ?? null)], ($context["chain"] ?? null));
                // line 7
                yield "        ";
                $context["cur"] = CoreExtension::getAttribute($this->env, $this->source, ($context["cur"] ?? null), "parent", [], "any", false, false, false, 7);
                // line 8
                yield "    ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['i'], $context['_parent']);
        $context = array_intersect_key($context, $_parent);
        $context += $_parent;
        // line 10
        $context["b_title"] = ((array_key_exists("banner_title", $context)) ? (Twig\Extension\CoreExtension::default(($context["banner_title"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "title", [], "any", false, false, false, 10))) : (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "title", [], "any", false, false, false, 10)));
        // line 11
        $context["b_sub"] = ((array_key_exists("banner_sub", $context)) ? (Twig\Extension\CoreExtension::default(($context["banner_sub"] ?? null), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, false, 11), "subtitle", [], "any", false, false, false, 11))) : (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, false, 11), "subtitle", [], "any", false, false, false, 11)));
        // line 12
        $context["b_img"] = (((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, false, 12), "banner_image", [], "any", false, false, false, 12)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ((($_v0 = CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "media", [], "any", false, false, false, 12)) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0[(($_v1 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, false, 12), "banner_image", [], "any", false, false, false, 12)) instanceof \Stringable && (is_array($_v0) || $_v0 instanceof \ArrayObject || $_v0 instanceof \ArrayIterator) ? (string) $_v1 : $_v1)] ?? null) : null)) : (null));
        // line 13
        yield "<section class=\"page-banner";
        yield (string) (((($tmp = ($context["b_img"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (" has-image") : (""));
        yield "\"";
        if ((($tmp = ($context["b_img"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield " style=\"--banner-image:url(\x27";
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["b_img"] ?? null), "url", [], "any", false, false, false, 13), "html", null, true);
            yield "\x27)\"";
        }
        yield ">
    <div class=\"container\">
        <nav class=\"crumbs\" aria-label=\"Breadcrumb\">
            <a href=\"";
        // line 16
        yield (string) (((($context["base_url"] ?? null) == "")) ? ("/") : ($this->escaper->escape(($context["base_url"] ?? null), "html", null, true)));
        yield "\">Home</a>
            ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["chain"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
            yield "<span class=\"sep\">/</span><a href=\"";
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["c"], "url", [], "any", false, false, false, 17), "html", null, true);
            yield "\">";
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["c"], "menu", [], "any", false, false, false, 17), "html", null, true);
            yield "</a>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['c'], $context['_parent']);
        $context = array_intersect_key($context, $_parent);
        $context += $_parent;
        // line 18
        yield "        </nav>
        <h1>";
        // line 19
        yield (string) $this->escaper->escape(($context["b_title"] ?? null), "html", null, true);
        yield "</h1>
        ";
        // line 20
        if ((($tmp = ($context["b_sub"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "<p class=\"banner-sub\">";
            yield (string) $this->escaper->escape(($context["b_sub"] ?? null), "html", null, true);
            yield "</p>";
        }
        // line 21
        yield "        ";
        yield from $this->unwrap()->yieldBlock('banner_extra', $context, $blocks);
        // line 22
        yield "    </div>
</section>
";
        return; yield;
    }

    // line 21
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_banner_extra(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        return; yield;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "partials/banner.html.twig";
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
        return array (  134 => 21,  127 => 22,  124 => 21,  118 => 20,  114 => 19,  111 => 18,  97 => 17,  93 => 16,  80 => 13,  78 => 12,  76 => 11,  74 => 10,  66 => 8,  63 => 7,  60 => 6,  57 => 5,  53 => 4,  51 => 3,  49 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# Page title banner with breadcrumbs. Pass `banner_title` / `banner_sub` to override. #}
{% set chain = [] %}
{% set cur = page.parent %}
{% for i in 1..6 %}
    {% if cur and not cur.root %}
        {% set chain = [cur]|merge(chain) %}
        {% set cur = cur.parent %}
    {% endif %}
{% endfor %}
{% set b_title = banner_title|default(page.title) %}
{% set b_sub = banner_sub|default(page.header.subtitle) %}
{% set b_img = page.header.banner_image ? page.media[page.header.banner_image] : null %}
<section class=\"page-banner{{ b_img ? \x27 has-image\x27 : \x27\x27 }}\"{% if b_img %} style=\"--banner-image:url(\x27{{ b_img.url }}\x27)\"{% endif %}>
    <div class=\"container\">
        <nav class=\"crumbs\" aria-label=\"Breadcrumb\">
            <a href=\"{{ base_url == \x27\x27 ? \x27/\x27 : base_url }}\">Home</a>
            {% for c in chain %}<span class=\"sep\">/</span><a href=\"{{ c.url }}\">{{ c.menu }}</a>{% endfor %}
        </nav>
        <h1>{{ b_title }}</h1>
        {% if b_sub %}<p class=\"banner-sub\">{{ b_sub }}</p>{% endif %}
        {% block banner_extra %}{% endblock %}
    </div>
</section>
", "partials/banner.html.twig", "/Users/amer/Sites/apmia/user/themes/apmia/templates/partials/banner.html.twig");
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
