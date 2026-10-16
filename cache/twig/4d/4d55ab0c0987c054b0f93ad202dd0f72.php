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

/* partials/metadata.html.twig */
class __TwigTemplate_051aa87bea0fe843b6bcd082655408c9_sourced extends Template
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
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "metadata", [], "any", false, false, false, 1));
        foreach ($context['_seq'] as $context["_key"] => $context["meta"]) {
            // line 2
            yield "    <meta ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["meta"], "name", [], "any", false, false, false, 2)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "name=\"";
                yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["meta"], "name", [], "any", false, false, false, 2));
                yield "\" ";
            }
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["meta"], "http_equiv", [], "any", false, false, false, 2)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "http-equiv=\"";
                yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["meta"], "http_equiv", [], "any", false, false, false, 2));
                yield "\" ";
            }
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["meta"], "charset", [], "any", false, false, false, 2)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "charset=\"";
                yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["meta"], "charset", [], "any", false, false, false, 2));
                yield "\" ";
            }
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["meta"], "property", [], "any", false, false, false, 2)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "property=\"";
                yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["meta"], "property", [], "any", false, false, false, 2));
                yield "\" ";
            }
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["meta"], "content", [], "any", false, false, false, 2)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "content=\"";
                yield (string) CoreExtension::getAttribute($this->env, $this->source, $context["meta"], "content", [], "any", false, false, false, 2);
                yield "\" ";
            }
            yield "/>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['meta'], $context['_parent']);
        $context = array_intersect_key($context, $_parent);
        $context += $_parent;
        // line 4
        if (((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["config"] ?? null), "system", [], "any", false, false, false, 4), "pages", [], "any", false, false, false, 4), "markdown_output", [], "any", false, false, false, 4), "enabled", [], "any", false, false, false, 4)) && $tmp instanceof Markup ? (string) $tmp : $tmp) && (($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "routable", [], "any", false, false, false, 4)) && $tmp instanceof Markup ? (string) $tmp : $tmp))) {
            // line 5
            yield "    <link rel=\"alternate\" type=\"text/markdown\" href=\"";
            yield (string) $this->escaper->escape($this->extensions['Grav\Common\Twig\Extension\GravExtension']->markdownUrlFunc(($context["page"] ?? null)));
            yield "\" />
";
        }
        return; yield;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "partials/metadata.html.twig";
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
        return array (  88 => 5,  86 => 4,  52 => 2,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% for meta in page.metadata %}
    <meta {% if meta.name %}name=\"{{ meta.name|e }}\" {% endif %}{% if meta.http_equiv %}http-equiv=\"{{ meta.http_equiv|e }}\" {% endif %}{% if meta.charset %}charset=\"{{ meta.charset|e }}\" {% endif %}{% if meta.property %}property=\"{{ meta.property|e }}\" {% endif %}{% if meta.content %}content=\"{{ meta.content|raw }}\" {% endif %}/>
{% endfor %}
{% if config.system.pages.markdown_output.enabled and page.routable %}
    <link rel=\"alternate\" type=\"text/markdown\" href=\"{{ markdown_url(page)|e }}\" />
{% endif %}
", "partials/metadata.html.twig", "/Users/amer/Sites/apmia/system/templates/partials/metadata.html.twig");
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
