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

/* @Page:/Users/amer/Sites/apmia/user/pages/04.news/apmia-attended-ceo-summit-and-book-launch-of-100-performing-ceos */
class __TwigTemplate_20ec8d0b81e32fd1450a847e0ab3e41a_sourced extends Template
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
        yield "<p>Chairman and Senior Vice Chairman APMIA attended CEO Summit and Book Launch of 100 performing CEOs, Leaders and Companies of Pakistan organized by CEO CLUB Pakistan in collaboration with Prime Minister’s Secretariat, Board of Investment, Government of Pakistan.</p>
<p>Razzaq Dawood, Asad Umer, Moeed Pirzada, Munner Kamal (Chairman Stock Exchange), SM Munir, Sardar Masood Khan (Presdient AJK), Dr. Ishrat Khan along with 50 ambassadors and 80 CEO’s of the Pakistan’s leading companies were persent at the event.</p>
<p>APMIA representatives shared their views regarding Pakistan’s Stone Sector. Furthermore, Pakistan is the land of opportunities and a destination of investment and they proposed the plan of activities for next five years regarding marble, granite, stone and mining sector.</p>
<p><img alt=\"\" src=\"/user/pages/04.news/apmia-attended-ceo-summit-and-book-launch-of-100-performing-ceos/23.jpg\" /></p>";
        return; yield;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@Page:/Users/amer/Sites/apmia/user/pages/04.news/apmia-attended-ceo-summit-and-book-launch-of-100-performing-ceos";
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
        return new Source("<p>Chairman and Senior Vice Chairman APMIA attended CEO Summit and Book Launch of 100 performing CEOs, Leaders and Companies of Pakistan organized by CEO CLUB Pakistan in collaboration with Prime Minister’s Secretariat, Board of Investment, Government of Pakistan.</p>
<p>Razzaq Dawood, Asad Umer, Moeed Pirzada, Munner Kamal (Chairman Stock Exchange), SM Munir, Sardar Masood Khan (Presdient AJK), Dr. Ishrat Khan along with 50 ambassadors and 80 CEO’s of the Pakistan’s leading companies were persent at the event.</p>
<p>APMIA representatives shared their views regarding Pakistan’s Stone Sector. Furthermore, Pakistan is the land of opportunities and a destination of investment and they proposed the plan of activities for next five years regarding marble, granite, stone and mining sector.</p>
<p><img alt=\"\" src=\"/user/pages/04.news/apmia-attended-ceo-summit-and-book-launch-of-100-performing-ceos/23.jpg\" /></p>", "@Page:/Users/amer/Sites/apmia/user/pages/04.news/apmia-attended-ceo-summit-and-book-launch-of-100-performing-ceos", "");
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
