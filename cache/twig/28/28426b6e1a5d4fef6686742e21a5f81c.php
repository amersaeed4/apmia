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

/* @Page:/Users/amer/Sites/apmia/user/pages/02.about/organizational-structure */
class __TwigTemplate_d6605cfc0d74988c53b1aca14aa04320_sourced extends Template
{
    private Source $source;
    /**
     * @var array<string, MacroNamespace>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        $this->sandbox = $env->getExtension(SandboxExtension::class)->getChecker();
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1
        yield "<h3><strong>Establishment:</strong></h3>
<p>All Pakistan Marble Industries Association (APMIA) established with a commitment to serve Pakistan’s Ornamental Stone Industries that specialize in Marble, Granite, Sandstone, Onyx etc. All Pakistan Marble Industries Association (APMIA) has been working since 1985 with the basic objectives to aid. Over the years, we have successfully created maximum awareness in the Pakistani stone markets and brought continuous interaction between Pakistan ornamental stone industries.</p>
<p><strong>Mission:</strong></p>
<p>To stimulate the production and development of marble and granite industry , marketing and export of marble &amp; granite, progress business in which marble industry is engaged and scientific development as well as in removing obstacles to achieve rapid and constant growth.</p>
<p><strong>Vision:</strong></p>
<p>All along, the Association has been very aggressive in taking the problems to concerned authorities, knocking the doors of the lowest to the highest and solving them by getting positive and favourable action to help and augment Pakistan’s stone trade.</p>";
        return; yield;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@Page:/Users/amer/Sites/apmia/user/pages/02.about/organizational-structure";
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
        return array (  45 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<h3><strong>Establishment:</strong></h3>
<p>All Pakistan Marble Industries Association (APMIA) established with a commitment to serve Pakistan’s Ornamental Stone Industries that specialize in Marble, Granite, Sandstone, Onyx etc. All Pakistan Marble Industries Association (APMIA) has been working since 1985 with the basic objectives to aid. Over the years, we have successfully created maximum awareness in the Pakistani stone markets and brought continuous interaction between Pakistan ornamental stone industries.</p>
<p><strong>Mission:</strong></p>
<p>To stimulate the production and development of marble and granite industry , marketing and export of marble &amp; granite, progress business in which marble industry is engaged and scientific development as well as in removing obstacles to achieve rapid and constant growth.</p>
<p><strong>Vision:</strong></p>
<p>All along, the Association has been very aggressive in taking the problems to concerned authorities, knocking the doors of the lowest to the highest and solving them by getting positive and favourable action to help and augment Pakistan’s stone trade.</p>", "@Page:/Users/amer/Sites/apmia/user/pages/02.about/organizational-structure", "");
    }
    
    public function ensureSecurityChecked(): void
    {
        if ($this->sandbox->isSandboxed($this->source)) {
            $this->checkSecurity();
        }
    }
    
    public function checkSecurity()
    {
        static $tags = [];
        static $filters = [];
        static $functions = [];
        static $tests = [];

        try {
            $this->sandbox->checkSecurity(
                [],
                [],
                [],
                [],
                $this->source
            );
        } catch (SecurityError $e) {
            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            } elseif ($e instanceof SecurityNotAllowedTestError && isset($tests[$e->getTestName()])) {
                $e->setTemplateLine($tests[$e->getTestName()]);
            }

            throw $e;
        }

    }
}
