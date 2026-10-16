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

/* @Page:/Users/amer/Sites/apmia/user/pages/04.news/the-federal-government-drastically-increased-the-basic-electricity-tariff */
class __TwigTemplate_b9c08c9b7e92f35ed98569cf97f83ecc_sourced extends Template
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
        yield "<p>As all know, last year too, the federal government drastically increased the basic electricity tariff. This increase had severely affected all sectors across the country, including industries.</p>
<p>All Pakistan Marble Industries Association (APMIA) raised its voice on this issue at that time. A press conference was held under the chairmanship of Mr. Asghar Khan Utmankhel, Chairman APMIA on <strong>15 July 2024</strong> and presented a ten-point reforms agenda. Top of the agenda was the demand for revision of contracts with IPPs and immediate termination of invalid contracts</p>
<p>The association also appealed to other industry sectors to unite on this issue. However, it is a pity that there has been no significant response from other industrial sectors in this regard</p>
<p>There is still time for all power consumers in the country and leaders of all industrial sectors to unite for austerity contracts with IPPs and other necessary reforms in the power sector. Only this unity can save the country’s economy.</p>";
        return; yield;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@Page:/Users/amer/Sites/apmia/user/pages/04.news/the-federal-government-drastically-increased-the-basic-electricity-tariff";
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
        return new Source("<p>As all know, last year too, the federal government drastically increased the basic electricity tariff. This increase had severely affected all sectors across the country, including industries.</p>
<p>All Pakistan Marble Industries Association (APMIA) raised its voice on this issue at that time. A press conference was held under the chairmanship of Mr. Asghar Khan Utmankhel, Chairman APMIA on <strong>15 July 2024</strong> and presented a ten-point reforms agenda. Top of the agenda was the demand for revision of contracts with IPPs and immediate termination of invalid contracts</p>
<p>The association also appealed to other industry sectors to unite on this issue. However, it is a pity that there has been no significant response from other industrial sectors in this regard</p>
<p>There is still time for all power consumers in the country and leaders of all industrial sectors to unite for austerity contracts with IPPs and other necessary reforms in the power sector. Only this unity can save the country’s economy.</p>", "@Page:/Users/amer/Sites/apmia/user/pages/04.news/the-federal-government-drastically-increased-the-basic-electricity-tariff", "");
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
