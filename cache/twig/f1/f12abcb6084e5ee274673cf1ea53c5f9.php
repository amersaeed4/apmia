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

/* @Page:/Users/amer/Sites/apmia/user/pages/04.news/federal-minister-of-the-ministry-of-industries-rana-tanveer-hussain */
class __TwigTemplate_33413e4ab5a8d83d34aaf49febe4423d_sourced extends Template
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
        yield "<p>Chairman APMIA, Muhammad Bilal Khan, requested the Federal Minister of the Ministry of Industries, Rana Tanveer Hussain on October 30, 2024, to grant the mining sector the status of an industry. This step could prove to be highly beneficial for the development of Pakistan’s mining sector, as it would resolve many of the issues faced by the sector and significantly contribute to its growth. Moreover, this decision would positively impact the country’s economic development.</p>
<p>Chairman APMIA also raised this point during the SIFC meeting held on November 1, 2024, emphasizing the need to grant the mining sector the status of an industry to ensure every possible improvement in this sector.</p>
<p>Given the mining sector’s significant role in the national economy, SIFC has scheduled a working group meeting on Thursday, November 14, 2024, to advance this matter and consider granting the mining sector the status of an industry. Secretaries from the Ministry of Commerce, Ministry of Industries, Ministry of Planning, Ministry of Law, and the Ministry of Energy (Petroleum Division), along with the Chief Secretaries of all provinces, have been invited to this meeting to discuss and take necessary steps for the development of this sector</p>";
        return; yield;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@Page:/Users/amer/Sites/apmia/user/pages/04.news/federal-minister-of-the-ministry-of-industries-rana-tanveer-hussain";
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
        return new Source("<p>Chairman APMIA, Muhammad Bilal Khan, requested the Federal Minister of the Ministry of Industries, Rana Tanveer Hussain on October 30, 2024, to grant the mining sector the status of an industry. This step could prove to be highly beneficial for the development of Pakistan’s mining sector, as it would resolve many of the issues faced by the sector and significantly contribute to its growth. Moreover, this decision would positively impact the country’s economic development.</p>
<p>Chairman APMIA also raised this point during the SIFC meeting held on November 1, 2024, emphasizing the need to grant the mining sector the status of an industry to ensure every possible improvement in this sector.</p>
<p>Given the mining sector’s significant role in the national economy, SIFC has scheduled a working group meeting on Thursday, November 14, 2024, to advance this matter and consider granting the mining sector the status of an industry. Secretaries from the Ministry of Commerce, Ministry of Industries, Ministry of Planning, Ministry of Law, and the Ministry of Energy (Petroleum Division), along with the Chief Secretaries of all provinces, have been invited to this meeting to discuss and take necessary steps for the development of this sector</p>", "@Page:/Users/amer/Sites/apmia/user/pages/04.news/federal-minister-of-the-ministry-of-industries-rana-tanveer-hussain", "");
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
