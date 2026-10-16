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

/* @Page:/Users/amer/Sites/apmia/user/pages/04.news/an-online-meeting-convened-by-the-ministry-of-industries-and-production */
class __TwigTemplate_a2667e2407467ea7b10ff69d15e31267_sourced extends Template
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
        yield "<p>An online meeting, convened by the Ministry of Industries and Production (MOIP) regarding budget 2024-25 proposals, was chaired by the honorable federal Minister, Mr. Rana Tanveer Hussain. Representatives from all trade bodies nationwide participated. Mr. Asghar Khan Utmankhel, Chairman of APMIA, spoke for the marble and granite sector, identifying high and unstable electricity tariffs as the foremost threat to the industry’s future. Alongside, proposals including regionally competitive tariffs, exemptions on import duties and taxes for mining and processing machinery, and a GST proposal for marble, were highlighted as top priorities for the sector.</p>";
        return; yield;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@Page:/Users/amer/Sites/apmia/user/pages/04.news/an-online-meeting-convened-by-the-ministry-of-industries-and-production";
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
        return new Source("<p>An online meeting, convened by the Ministry of Industries and Production (MOIP) regarding budget 2024-25 proposals, was chaired by the honorable federal Minister, Mr. Rana Tanveer Hussain. Representatives from all trade bodies nationwide participated. Mr. Asghar Khan Utmankhel, Chairman of APMIA, spoke for the marble and granite sector, identifying high and unstable electricity tariffs as the foremost threat to the industry’s future. Alongside, proposals including regionally competitive tariffs, exemptions on import duties and taxes for mining and processing machinery, and a GST proposal for marble, were highlighted as top priorities for the sector.</p>", "@Page:/Users/amer/Sites/apmia/user/pages/04.news/an-online-meeting-convened-by-the-ministry-of-industries-and-production", "");
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
