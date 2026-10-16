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

/* @Page:/Users/amer/Sites/apmia/user/pages/04.news/on-july-19-2024-a-meeting-was-held-between-member-infrastructure */
class __TwigTemplate_50d2ac4ed9de8ca27e2ba4a5e9d580a9_sourced extends Template
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
        yield "<p>On <strong>July 19, 2024</strong>, a meeting was held between Member Infrastructure Dr. Waqas Anwar and DG Coordination Zahoor Ali Shah at Ministry of Planning, Islamabad and Chairman APMIA Asghar Khan UtmanKhel along with Member Executive Committee Mr. Zulqarnain Haider. Mr. Ashfaq Sahib, Mr. Shahid Mehmood &amp; Mr. Zafar Hussain also participated in this meeting.</p>
<p>In the meeting, Chairman APMIA gave a presentation on the challenges faced by the sector including mechanized mining, better transportation, value addition in processing and increasing exports, in which various suggestions were made, with the objective of marble and granite sector in economic planning at the federal level. Importance in the national economy, problems faced and suggestions for solutions were presented.</p>";
        return; yield;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@Page:/Users/amer/Sites/apmia/user/pages/04.news/on-july-19-2024-a-meeting-was-held-between-member-infrastructure";
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
        return new Source("<p>On <strong>July 19, 2024</strong>, a meeting was held between Member Infrastructure Dr. Waqas Anwar and DG Coordination Zahoor Ali Shah at Ministry of Planning, Islamabad and Chairman APMIA Asghar Khan UtmanKhel along with Member Executive Committee Mr. Zulqarnain Haider. Mr. Ashfaq Sahib, Mr. Shahid Mehmood &amp; Mr. Zafar Hussain also participated in this meeting.</p>
<p>In the meeting, Chairman APMIA gave a presentation on the challenges faced by the sector including mechanized mining, better transportation, value addition in processing and increasing exports, in which various suggestions were made, with the objective of marble and granite sector in economic planning at the federal level. Importance in the national economy, problems faced and suggestions for solutions were presented.</p>", "@Page:/Users/amer/Sites/apmia/user/pages/04.news/on-july-19-2024-a-meeting-was-held-between-member-infrastructure", "");
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
