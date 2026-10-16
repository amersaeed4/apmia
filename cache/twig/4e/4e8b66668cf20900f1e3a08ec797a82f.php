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

/* @Page:/Users/amer/Sites/apmia/user/pages/04.news/chairman-apmia-mr-asghar-khan-utmankhel-represented-the-all-pakistan-marble-industries-association-apmia-at-the-launch-stakeholders-validation-workshop */
class __TwigTemplate_25e3b0bd6ac312c50743d59e2c862a0e_sourced extends Template
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
        yield "<p>Chairman APMIA Mr. Asghar Khan Utmankhel represented the All Pakistan Marble &amp; Industries Association (APMIA) at the Launch &amp; Stakeholders Validation Workshop on Value Chain Mapping Study by International Labour Organization &amp; SMEDA in Islamabad. Contributed insights from the marble &amp; granite sector towards developing a National Action Plan for the Formalization of SMEs and MSMEs.</p>";
        return; yield;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@Page:/Users/amer/Sites/apmia/user/pages/04.news/chairman-apmia-mr-asghar-khan-utmankhel-represented-the-all-pakistan-marble-industries-association-apmia-at-the-launch-stakeholders-validation-workshop";
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
        return new Source("<p>Chairman APMIA Mr. Asghar Khan Utmankhel represented the All Pakistan Marble &amp; Industries Association (APMIA) at the Launch &amp; Stakeholders Validation Workshop on Value Chain Mapping Study by International Labour Organization &amp; SMEDA in Islamabad. Contributed insights from the marble &amp; granite sector towards developing a National Action Plan for the Formalization of SMEs and MSMEs.</p>", "@Page:/Users/amer/Sites/apmia/user/pages/04.news/chairman-apmia-mr-asghar-khan-utmankhel-represented-the-all-pakistan-marble-industries-association-apmia-at-the-launch-stakeholders-validation-workshop", "");
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
