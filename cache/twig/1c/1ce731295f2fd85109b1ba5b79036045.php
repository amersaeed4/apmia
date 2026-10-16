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

/* @Page:/Users/amer/Sites/apmia/user/pages/04.news/3rd-knowledgeable-seminar-on-marble-and-granite-export-awareness-held-at-fpcci-head-office-in-karachi */
class __TwigTemplate_fd5e6456f378ea91d3962d063cfcaa80_sourced extends Template
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
        yield "<p>3rd knowledgeable seminar on Marble and Granite Export Awareness held at FPCCI head office in Karachi, stakeholders from the south zone (Sindh &amp; Balochistan) participated.</p>
<p>Speakers included:<br />
Mr. Omer Hussain Bajwa, Assistant<br />
Director, TDAP<br />
Mr. Asghar Khan Utmankhel Chairman APMIA<br />
Mr. Shoaib Sultan S.V Chairman APMIA<br />
Mr. Shabir Ahmad Former Chairman APMIA<br />
Mr. Muhammad Bilal Khan Convener Mines &amp; Minerals, FPCCI<br />
Mr. Arsalan Arif Mehran marble Industries, Karachi<br />
Mr. Baber Habib Bobby ExpImp, Karachi<br />
Mr. Zakir Khan Vice Chairman, APMIA</p>
<p>Distinguished Guest Speakers participated:<br />
Mr. Muhammad Suleman Chawla S.V President FPCCI<br />
Mr. Khadim Hussain DG Mines &amp; Minerals, Sindh<br />
Mr. Shafiq MD LIEDA, Balochistan<br />
Mr. Representative from Sindh Economic Zones Management Company (SEZMC)</p>
<p>The esteemed speakers shared invaluable insights into Pakistan’s marble and granite exports, unveiling their potential, and inspiring the participants. The distribution of shields marked the ongoing journey to enhance awareness and harness the sector’s capabilities, all with the shared goal of reaching the \$1 billion annual export target. InShaAllah, together, this aim will be achieved.</p>";
        return; yield;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@Page:/Users/amer/Sites/apmia/user/pages/04.news/3rd-knowledgeable-seminar-on-marble-and-granite-export-awareness-held-at-fpcci-head-office-in-karachi";
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
        return new Source("<p>3rd knowledgeable seminar on Marble and Granite Export Awareness held at FPCCI head office in Karachi, stakeholders from the south zone (Sindh &amp; Balochistan) participated.</p>
<p>Speakers included:<br />
Mr. Omer Hussain Bajwa, Assistant<br />
Director, TDAP<br />
Mr. Asghar Khan Utmankhel Chairman APMIA<br />
Mr. Shoaib Sultan S.V Chairman APMIA<br />
Mr. Shabir Ahmad Former Chairman APMIA<br />
Mr. Muhammad Bilal Khan Convener Mines &amp; Minerals, FPCCI<br />
Mr. Arsalan Arif Mehran marble Industries, Karachi<br />
Mr. Baber Habib Bobby ExpImp, Karachi<br />
Mr. Zakir Khan Vice Chairman, APMIA</p>
<p>Distinguished Guest Speakers participated:<br />
Mr. Muhammad Suleman Chawla S.V President FPCCI<br />
Mr. Khadim Hussain DG Mines &amp; Minerals, Sindh<br />
Mr. Shafiq MD LIEDA, Balochistan<br />
Mr. Representative from Sindh Economic Zones Management Company (SEZMC)</p>
<p>The esteemed speakers shared invaluable insights into Pakistan’s marble and granite exports, unveiling their potential, and inspiring the participants. The distribution of shields marked the ongoing journey to enhance awareness and harness the sector’s capabilities, all with the shared goal of reaching the \$1 billion annual export target. InShaAllah, together, this aim will be achieved.</p>", "@Page:/Users/amer/Sites/apmia/user/pages/04.news/3rd-knowledgeable-seminar-on-marble-and-granite-export-awareness-held-at-fpcci-head-office-in-karachi", "");
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
