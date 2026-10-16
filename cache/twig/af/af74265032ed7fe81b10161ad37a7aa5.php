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

/* @Page:/Users/amer/Sites/apmia/user/pages/04.news/meeting-with-mr-hasan-nisar-secretary-of-ministry-of-energy-power-division-islamabad */
class __TwigTemplate_59813b3e0348d5a5dc4ede1410e3b40e_sourced extends Template
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
        yield "<p>Following meetings were conducted by the Mr. Mian Gulzar Ahmed, Chairman APMIA</p>
<p>i) Meeting with Mr. Hasan Nisar, Secretary of Ministry of Energy Power Division, Islamabad, following points were discussed;</p>
<p>a) Minerals potential in Pakistan was discussed, we can utilize this potential for the betterment of economy, employment and export.</p>
<p>a) Electricity issues regarding marble City, Risalpur</p>
<p>b) Transmission issues to the grid station of Risalpur from Mardan</p>
<p>c) 12 poles are required</p>
<p>ii) Meeting with Mr. Waseem Mukhtar, Managing Director of Pakistan Electric Power Company (PEPCO), following points were discussed;</p>
<p>a) Chairman APMIA conveyed to M. PEPECO that Marble factory owners are facing very serious problems in Marble City, Risalpur regarding electricity.</p>
<p>b) Working has been stopped since 2 years, it should be resolved.</p>
<p>c) NOC from Army was received on 05-07-2018</p>
<p>d) Managing Director PEPCO assured that the issue will be resolved till December, 2018</p>
<p><img alt=\"\" src=\"/user/pages/04.news/meeting-with-mr-hasan-nisar-secretary-of-ministry-of-energy-power-division-islamabad/20.jpg\" /></p>";
        return; yield;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@Page:/Users/amer/Sites/apmia/user/pages/04.news/meeting-with-mr-hasan-nisar-secretary-of-ministry-of-energy-power-division-islamabad";
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
        return new Source("<p>Following meetings were conducted by the Mr. Mian Gulzar Ahmed, Chairman APMIA</p>
<p>i) Meeting with Mr. Hasan Nisar, Secretary of Ministry of Energy Power Division, Islamabad, following points were discussed;</p>
<p>a) Minerals potential in Pakistan was discussed, we can utilize this potential for the betterment of economy, employment and export.</p>
<p>a) Electricity issues regarding marble City, Risalpur</p>
<p>b) Transmission issues to the grid station of Risalpur from Mardan</p>
<p>c) 12 poles are required</p>
<p>ii) Meeting with Mr. Waseem Mukhtar, Managing Director of Pakistan Electric Power Company (PEPCO), following points were discussed;</p>
<p>a) Chairman APMIA conveyed to M. PEPECO that Marble factory owners are facing very serious problems in Marble City, Risalpur regarding electricity.</p>
<p>b) Working has been stopped since 2 years, it should be resolved.</p>
<p>c) NOC from Army was received on 05-07-2018</p>
<p>d) Managing Director PEPCO assured that the issue will be resolved till December, 2018</p>
<p><img alt=\"\" src=\"/user/pages/04.news/meeting-with-mr-hasan-nisar-secretary-of-ministry-of-energy-power-division-islamabad/20.jpg\" /></p>", "@Page:/Users/amer/Sites/apmia/user/pages/04.news/meeting-with-mr-hasan-nisar-secretary-of-ministry-of-energy-power-division-islamabad", "");
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
