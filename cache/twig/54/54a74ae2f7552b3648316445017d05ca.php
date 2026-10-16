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

/* @Page:/Users/amer/Sites/apmia/user/pages/04.news/zakir-ullah-khan-vice-chairman-apmia-south-addressing-regarding-the-current-compaign-curtailing-illegal-water-pipelines */
class __TwigTemplate_86313d8cb66e29da30033db2d13a47e5_sourced extends Template
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
        yield "<p>Mr. Shoaib Sultan, Senior Vice Chairman APMIA and Me. Zakir Ullah Khan, Vice Chairman APMIA South, addressing regarding the current compaign curtailing illegal water pipelines and establishing the legal water connections in various Karachi industrial areas; All Pakistan Marble Association became the pioneer and itself arranged and distributed the installation, pipelines and meters from 8’’ to 1’’ at the lowest prices, installments and become the for Manghopir Marble factories, Karachi</p>";
        return; yield;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@Page:/Users/amer/Sites/apmia/user/pages/04.news/zakir-ullah-khan-vice-chairman-apmia-south-addressing-regarding-the-current-compaign-curtailing-illegal-water-pipelines";
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
        return new Source("<p>Mr. Shoaib Sultan, Senior Vice Chairman APMIA and Me. Zakir Ullah Khan, Vice Chairman APMIA South, addressing regarding the current compaign curtailing illegal water pipelines and establishing the legal water connections in various Karachi industrial areas; All Pakistan Marble Association became the pioneer and itself arranged and distributed the installation, pipelines and meters from 8’’ to 1’’ at the lowest prices, installments and become the for Manghopir Marble factories, Karachi</p>", "@Page:/Users/amer/Sites/apmia/user/pages/04.news/zakir-ullah-khan-vice-chairman-apmia-south-addressing-regarding-the-current-compaign-curtailing-illegal-water-pipelines", "");
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
