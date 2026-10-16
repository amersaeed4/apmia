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

/* partials/footer.html.twig */
class __TwigTemplate_090bf3c115b8e237b59de11ffc1f7da1_sourced extends Template
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
        $context["theme"] = CoreExtension::getAttribute($this->env, $this->source, ($context["config"] ?? null), "theme", [], "any", false, false, false, 2);
        // line 3
        $context["f"] = CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "footer", [], "any", false, false, false, 3);
        // line 4
        yield "<footer class=\"site-footer\">
    <div class=\"container footer-top\">
        <div class=\"footer-brand\">
            <a class=\"brand brand-light\" href=\"";
        // line 7
        yield (string) (((($context["base_url"] ?? null) == "")) ? ("/") : ($this->escaper->escape(($context["base_url"] ?? null), "html", null, true)));
        yield "\">
                <img src=\"";
        // line 8
        yield (string) $this->escaper->escape(($context["logo_url"] ?? null), "html", null, true);
        yield "\" alt=\"\" width=\"56\" height=\"56\">
                <span class=\"brand-text\"><strong>";
        // line 9
        yield (string) $this->escaper->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "org", [], "any", false, true, false, 9), "name", [], "any", true, true, false, 9)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "org", [], "any", false, false, false, 9), "name", [], "any", false, false, false, 9), CoreExtension::getAttribute($this->env, $this->source, ($context["site"] ?? null), "title", [], "any", false, false, false, 9))) : (CoreExtension::getAttribute($this->env, $this->source, ($context["site"] ?? null), "title", [], "any", false, false, false, 9))), "html", null, true);
        yield "</strong></span>
            </a>
            ";
        // line 11
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["f"] ?? null), "about", [], "any", false, false, false, 11)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "<p>";
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["f"] ?? null), "about", [], "any", false, false, false, 11), "html", null, true);
            yield "</p>";
        }
        // line 12
        yield "        </div>

        ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["f"] ?? null), "columns", [], "any", false, false, false, 14));
        foreach ($context['_seq'] as $context["_key"] => $context["col"]) {
            // line 15
            yield "        <nav class=\"footer-col\" aria-label=\"";
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["col"], "title", [], "any", false, false, false, 15), "html", null, true);
            yield "\">
            <h4>";
            // line 16
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["col"], "title", [], "any", false, false, false, 16), "html", null, true);
            yield "</h4>
            <ul>
                ";
            // line 18
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["col"], "links", [], "any", false, false, false, 18));
            foreach ($context['_seq'] as $context["_key"] => $context["l"]) {
                // line 19
                yield "                <li><a href=\"";
                yield (string) (((is_string($_v0 = CoreExtension::getAttribute($this->env, $this->source, $context["l"], "url", [], "any", false, false, false, 19)) && is_string($_v1 = "http") && str_starts_with($_v0, $_v1))) ? ($this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["l"], "url", [], "any", false, false, false, 19), "html", null, true)) : ((((CoreExtension::getAttribute($this->env, $this->source, $context["l"], "url", [], "any", false, false, false, 19) == "/")) ? ((((($context["base_url"] ?? null) == "")) ? ("/") : ($this->escaper->escape(($context["base_url"] ?? null), "html", null, true)))) : ($this->escaper->escape((($context["base_url"] ?? null) . CoreExtension::getAttribute($this->env, $this->source, $context["l"], "url", [], "any", false, false, false, 19)), "html", null, true)))));
                yield "\">";
                yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["l"], "label", [], "any", false, false, false, 19), "html", null, true);
                yield "</a></li>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['l'], $context['_parent']);
            $context = array_intersect_key($context, $_parent);
            $context += $_parent;
            // line 21
            yield "            </ul>
        </nav>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['col'], $context['_parent']);
        $context = array_intersect_key($context, $_parent);
        $context += $_parent;
        // line 24
        yield "
        <div class=\"footer-col footer-contact\">
            <h4>";
        // line 26
        yield (string) $this->escaper->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["f"] ?? null), "contact_title", [], "any", true, true, false, 26)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["f"] ?? null), "contact_title", [], "any", false, false, false, 26), "Here We Are")) : ("Here We Are")), "html", null, true);
        yield "</h4>
            <ul>
                ";
        // line 28
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["f"] ?? null), "address", [], "any", false, false, false, 28)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "<li>";
            yield (string) ($macros["ui"] ?? $this->throwUninitializedMacroNamespace(28))->call("icon", ["pin"], $context, 28, $this->source);
            yield "<span>";
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["f"] ?? null), "address", [], "any", false, false, false, 28), "html", null, true);
            yield "</span></li>";
        }
        // line 29
        yield "                ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["f"] ?? null), "phones", [], "any", false, false, false, 29));
        foreach ($context['_seq'] as $context["_key"] => $context["ph"]) {
            yield "<li>";
            yield (string) ($macros["ui"] ?? $this->throwUninitializedMacroNamespace(29))->call("icon", ["phone"], $context, 29, $this->source);
            yield "<a href=\"tel:";
            yield (string) $this->escaper->escape(Twig\Extension\CoreExtension::replace($context["ph"], [" " => "", "-" => ""]), "html", null, true);
            yield "\">";
            yield (string) $this->escaper->escape($context["ph"], "html", null, true);
            yield "</a></li>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['ph'], $context['_parent']);
        $context = array_intersect_key($context, $_parent);
        $context += $_parent;
        // line 30
        yield "                ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["f"] ?? null), "emails", [], "any", false, false, false, 30));
        foreach ($context['_seq'] as $context["_key"] => $context["em"]) {
            yield "<li>";
            yield (string) ($macros["ui"] ?? $this->throwUninitializedMacroNamespace(30))->call("icon", ["mail"], $context, 30, $this->source);
            yield "<a href=\"mailto:";
            yield (string) $this->escaper->escape($context["em"], "html", null, true);
            yield "\">";
            yield (string) $this->escaper->escape($context["em"], "html", null, true);
            yield "</a></li>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['em'], $context['_parent']);
        $context = array_intersect_key($context, $_parent);
        $context += $_parent;
        // line 31
        yield "                ";
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["f"] ?? null), "hours", [], "any", false, false, false, 31)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "<li>";
            yield (string) ($macros["ui"] ?? $this->throwUninitializedMacroNamespace(31))->call("icon", ["clock"], $context, 31, $this->source);
            yield "<span>";
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["f"] ?? null), "hours", [], "any", false, false, false, 31), "html", null, true);
            yield "</span></li>";
        }
        // line 32
        yield "            </ul>
        </div>
    </div>

    <div class=\"footer-bottom\">
        <div class=\"container footer-bottom-inner\">
            <p>";
        // line 38
        yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["f"] ?? null), "copyright", [], "any", false, false, false, 38), "html", null, true);
        yield " Powered by <a href=\"";
        yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["f"] ?? null), "powered_by_url", [], "any", false, false, false, 38), "html", null, true);
        yield "\" target=\"_blank\" rel=\"noopener\">";
        yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["f"] ?? null), "powered_by_name", [], "any", false, false, false, 38), "html", null, true);
        yield "</a></p>
        </div>
    </div>
</footer>
";
        return; yield;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "partials/footer.html.twig";
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
        return array (  189 => 38,  181 => 32,  172 => 31,  155 => 30,  138 => 29,  130 => 28,  125 => 26,  121 => 24,  112 => 21,  100 => 19,  96 => 18,  91 => 16,  86 => 15,  82 => 14,  78 => 12,  72 => 11,  67 => 9,  63 => 8,  59 => 7,  54 => 4,  52 => 3,  50 => 2,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% import \x27macros/ui.html.twig\x27 as ui %}
{% set theme = config.theme %}
{% set f = theme.footer %}
<footer class=\"site-footer\">
    <div class=\"container footer-top\">
        <div class=\"footer-brand\">
            <a class=\"brand brand-light\" href=\"{{ base_url == \x27\x27 ? \x27/\x27 : base_url }}\">
                <img src=\"{{ logo_url }}\" alt=\"\" width=\"56\" height=\"56\">
                <span class=\"brand-text\"><strong>{{ theme.org.name|default(site.title) }}</strong></span>
            </a>
            {% if f.about %}<p>{{ f.about }}</p>{% endif %}
        </div>

        {% for col in f.columns %}
        <nav class=\"footer-col\" aria-label=\"{{ col.title }}\">
            <h4>{{ col.title }}</h4>
            <ul>
                {% for l in col.links %}
                <li><a href=\"{{ l.url starts with \x27http\x27 ? l.url : (l.url == \x27/\x27 ? (base_url == \x27\x27 ? \x27/\x27 : base_url) : base_url ~ l.url) }}\">{{ l.label }}</a></li>
                {% endfor %}
            </ul>
        </nav>
        {% endfor %}

        <div class=\"footer-col footer-contact\">
            <h4>{{ f.contact_title|default(\x27Here We Are\x27) }}</h4>
            <ul>
                {% if f.address %}<li>{{ ui.icon(\x27pin\x27) }}<span>{{ f.address }}</span></li>{% endif %}
                {% for ph in f.phones %}<li>{{ ui.icon(\x27phone\x27) }}<a href=\"tel:{{ ph|replace({\x27 \x27:\x27\x27, \x27-\x27:\x27\x27}) }}\">{{ ph }}</a></li>{% endfor %}
                {% for em in f.emails %}<li>{{ ui.icon(\x27mail\x27) }}<a href=\"mailto:{{ em }}\">{{ em }}</a></li>{% endfor %}
                {% if f.hours %}<li>{{ ui.icon(\x27clock\x27) }}<span>{{ f.hours }}</span></li>{% endif %}
            </ul>
        </div>
    </div>

    <div class=\"footer-bottom\">
        <div class=\"container footer-bottom-inner\">
            <p>{{ f.copyright }} Powered by <a href=\"{{ f.powered_by_url }}\" target=\"_blank\" rel=\"noopener\">{{ f.powered_by_name }}</a></p>
        </div>
    </div>
</footer>
", "partials/footer.html.twig", "/Users/amer/Sites/apmia/user/themes/apmia/templates/partials/footer.html.twig");
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
