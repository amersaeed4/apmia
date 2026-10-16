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

/* @Page:/Users/amer/Sites/apmia/user/pages/04.news/meeting-with-chairman-senior-vice-chairman-executive-members */
class __TwigTemplate_ee8974c621d7db4f7076c46b77c2b7a9_sourced extends Template
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
        yield "<p>Second meeting including Chairman, Senior Vice Chairman and other executive members of APMIA was conducted with Mr. Allauddin Marri, member APMIA (Presidential candidate of FPCCI for the year 2019) including Mr. Mian Zahid Hussain, Senior Vice Chairman of Businessmen Panel Pakistan (BMP).</p>
<p>Mr. Allauddin Marri briefed his visions / objectives / plan of activities regarding promoting marble sector, especially in mining sector in Balochistan.</p>
<p><img alt=\"\" src=\"/user/pages/04.news/meeting-with-chairman-senior-vice-chairman-executive-members/45.jpg\" /></p>";
        return; yield;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@Page:/Users/amer/Sites/apmia/user/pages/04.news/meeting-with-chairman-senior-vice-chairman-executive-members";
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
        return new Source("<p>Second meeting including Chairman, Senior Vice Chairman and other executive members of APMIA was conducted with Mr. Allauddin Marri, member APMIA (Presidential candidate of FPCCI for the year 2019) including Mr. Mian Zahid Hussain, Senior Vice Chairman of Businessmen Panel Pakistan (BMP).</p>
<p>Mr. Allauddin Marri briefed his visions / objectives / plan of activities regarding promoting marble sector, especially in mining sector in Balochistan.</p>
<p><img alt=\"\" src=\"/user/pages/04.news/meeting-with-chairman-senior-vice-chairman-executive-members/45.jpg\" /></p>", "@Page:/Users/amer/Sites/apmia/user/pages/04.news/meeting-with-chairman-senior-vice-chairman-executive-members", "");
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
