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

/* @Page:/Users/amer/Sites/apmia/user/pages/04.news/meeting-with-special-assistant-of-cm-kp-on-industries-trade-technical-education */
class __TwigTemplate_f3cf7b6161a6e6eb7b6c1a941b76c81f_sourced extends Template
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
        yield "<p>Meeting with Special Assistant of CM KP on Industries, Trade &amp; Technical Education Mr. Abdul Karim Khan and APMIA representatives including Chairman APMIA Mr. Asghar Khan Utmankhel, Zonal Vice Chairman Mr. Wisal Khan and President Frontier Mine Owner’s Association Mr. Sher Bandi Khan Marwat and Asghar Afridi and other representatives was held on <strong>June 25, 2024 (Tuesday)</strong></p>
<p>In the meeting, Mr. Abdul Karim Khan was apprised of the current situation of the sector and the recent huge increase in electricity and other various taxes on the Marble &amp; Granite Sector including Mineral royalties by the government. The representatives demanded Mr. Abdul Karim Khan to play his role in this regard, roll back the outrageous increase in royalty, and request to present our case on the Assembly Floor including the cabinet.</p>
<p>Mr. Abdul Karim Khan assured the delegation of full cooperation and informed them about other measures regarding the development of the Marble Sector.</p>";
        return; yield;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@Page:/Users/amer/Sites/apmia/user/pages/04.news/meeting-with-special-assistant-of-cm-kp-on-industries-trade-technical-education";
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
        return new Source("<p>Meeting with Special Assistant of CM KP on Industries, Trade &amp; Technical Education Mr. Abdul Karim Khan and APMIA representatives including Chairman APMIA Mr. Asghar Khan Utmankhel, Zonal Vice Chairman Mr. Wisal Khan and President Frontier Mine Owner’s Association Mr. Sher Bandi Khan Marwat and Asghar Afridi and other representatives was held on <strong>June 25, 2024 (Tuesday)</strong></p>
<p>In the meeting, Mr. Abdul Karim Khan was apprised of the current situation of the sector and the recent huge increase in electricity and other various taxes on the Marble &amp; Granite Sector including Mineral royalties by the government. The representatives demanded Mr. Abdul Karim Khan to play his role in this regard, roll back the outrageous increase in royalty, and request to present our case on the Assembly Floor including the cabinet.</p>
<p>Mr. Abdul Karim Khan assured the delegation of full cooperation and informed them about other measures regarding the development of the Marble Sector.</p>", "@Page:/Users/amer/Sites/apmia/user/pages/04.news/meeting-with-special-assistant-of-cm-kp-on-industries-trade-technical-education", "");
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
