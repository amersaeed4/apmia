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

/* @Page:/Users/amer/Sites/apmia/user/pages/04.news/meeting-with-lease-holders-factory-owners-and-marble-block-transporters-on-increase-in-royalties */
class __TwigTemplate_0b92a171f1607480866960b288874af5_sourced extends Template
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
        yield "<p>On the request of Chairman APMIA Mr. Asghar Khan Utmankhel, an important meeting was held between Buner Lease Holders, Factory Owners and Marble Block Transporters of Khyber Pakhtunkhuwa regarding the increase in Royalty rates by the government. Following points were settled unanimously;</p>
<ol>
<li>A committee consisting of lease holders, industrialists and marble block transporters from each zone of the entire province will be formed.</li>
<li>The committee will hold a meeting with the Chief Minister of Khyber Pakhtunkhwa as early as possible.</li>
<li>A press conference will be held at Peshawar Press Club regarding increase in Royalties.</li>
<li>The government will be prevented from increasing royalties in this oppressive manner, which ranges from 230% to 2000%, by all means. If our request is not entertained, the entire mineral sector in Khyber Pakhtunkhwa, including mining, transport, and industry, with the marble and granite sectors at the forefront, will be forcibly shut down from July 1, 2024.</li>
</ol>";
        return; yield;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@Page:/Users/amer/Sites/apmia/user/pages/04.news/meeting-with-lease-holders-factory-owners-and-marble-block-transporters-on-increase-in-royalties";
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
        return new Source("<p>On the request of Chairman APMIA Mr. Asghar Khan Utmankhel, an important meeting was held between Buner Lease Holders, Factory Owners and Marble Block Transporters of Khyber Pakhtunkhuwa regarding the increase in Royalty rates by the government. Following points were settled unanimously;</p>
<ol>
<li>A committee consisting of lease holders, industrialists and marble block transporters from each zone of the entire province will be formed.</li>
<li>The committee will hold a meeting with the Chief Minister of Khyber Pakhtunkhwa as early as possible.</li>
<li>A press conference will be held at Peshawar Press Club regarding increase in Royalties.</li>
<li>The government will be prevented from increasing royalties in this oppressive manner, which ranges from 230% to 2000%, by all means. If our request is not entertained, the entire mineral sector in Khyber Pakhtunkhwa, including mining, transport, and industry, with the marble and granite sectors at the forefront, will be forcibly shut down from July 1, 2024.</li>
</ol>", "@Page:/Users/amer/Sites/apmia/user/pages/04.news/meeting-with-lease-holders-factory-owners-and-marble-block-transporters-on-increase-in-royalties", "");
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
