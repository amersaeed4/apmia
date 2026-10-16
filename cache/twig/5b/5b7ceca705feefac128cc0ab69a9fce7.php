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

/* @Page:/Users/amer/Sites/apmia/user/pages/04.news/meeting-was-held-at-ministry-of-planning-development-reforms-islamabad */
class __TwigTemplate_ac2e541f09cc30dfada9be30e9adf44f_sourced extends Template
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
        yield "<p>Meeting was held at Ministry of Planning, Development &amp; Reforms, Islamabad, Chaired by the Joint Secretary including Chairman Mian Gulzar Ahmed, Zonal Vice Chairman (North) Muhammad Afzal Shahid APMIA, CEO , GM SMEDA, Government officials from all provinces and Federal ministries, Mr. Shahid Ur Rehman (Former Chairman APMIA) was also in the meeting including representatives from mining Association’s;</p>
<p>Following points were highlighted by APMIA;</p>
<p>i) We should spread awareness regarding the benefits of our industry by inviting businessmen / investors so they can become aware of the stone sector, investment opportunities and attractions.</p>
<p>ii) PASDEC has failed to play their role in development and promotion of mining sector.</p>
<p>iii) PASDEC should be further strengthened and should be export targets for increasing exports to greater extent.</p>
<p>iv) Regulatory framework should be further improved.</p>
<p>v) Government should support the mine owners to resolve their local issues. 6. Invite mine owners and brief them regarding mechanize mining and latest technology by showing them videos / photos, that will help the miners positively.</p>
<p>vi) To provide mechanize machinery on lease on the installments on down payment of 5% rather than providing them machinery on rent.</p>
<p>vii) Chinese investors are investing in mining sector with latest machinery, we should propose them to include our unskilled labor so they can learn to operate latest machinery. Half of the labor should be from Pakistan so they can be skilled.</p>
<p>viii) As our export is decreasing, we should identify the basic problems that will help in resolving the export related issues.</p>
<p>ix) APMIA has assured the quorum that we will provide full support and cooperation.</p>
<p>x) Chairman APMIA told the ministry officials to provide us the time so we can discuss the issues regarding stone industry with our members so we can officially submit our proposals / recommendations/ suggestions with the mutual consent of all APMIA members.</p>
<p><img alt=\"\" src=\"/user/pages/04.news/meeting-was-held-at-ministry-of-planning-development-reforms-islamabad/54.jpg\" /></p>
<p><img alt=\"\" src=\"/user/pages/04.news/meeting-was-held-at-ministry-of-planning-development-reforms-islamabad/55.jpg\" /></p>";
        return; yield;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@Page:/Users/amer/Sites/apmia/user/pages/04.news/meeting-was-held-at-ministry-of-planning-development-reforms-islamabad";
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
        return new Source("<p>Meeting was held at Ministry of Planning, Development &amp; Reforms, Islamabad, Chaired by the Joint Secretary including Chairman Mian Gulzar Ahmed, Zonal Vice Chairman (North) Muhammad Afzal Shahid APMIA, CEO , GM SMEDA, Government officials from all provinces and Federal ministries, Mr. Shahid Ur Rehman (Former Chairman APMIA) was also in the meeting including representatives from mining Association’s;</p>
<p>Following points were highlighted by APMIA;</p>
<p>i) We should spread awareness regarding the benefits of our industry by inviting businessmen / investors so they can become aware of the stone sector, investment opportunities and attractions.</p>
<p>ii) PASDEC has failed to play their role in development and promotion of mining sector.</p>
<p>iii) PASDEC should be further strengthened and should be export targets for increasing exports to greater extent.</p>
<p>iv) Regulatory framework should be further improved.</p>
<p>v) Government should support the mine owners to resolve their local issues. 6. Invite mine owners and brief them regarding mechanize mining and latest technology by showing them videos / photos, that will help the miners positively.</p>
<p>vi) To provide mechanize machinery on lease on the installments on down payment of 5% rather than providing them machinery on rent.</p>
<p>vii) Chinese investors are investing in mining sector with latest machinery, we should propose them to include our unskilled labor so they can learn to operate latest machinery. Half of the labor should be from Pakistan so they can be skilled.</p>
<p>viii) As our export is decreasing, we should identify the basic problems that will help in resolving the export related issues.</p>
<p>ix) APMIA has assured the quorum that we will provide full support and cooperation.</p>
<p>x) Chairman APMIA told the ministry officials to provide us the time so we can discuss the issues regarding stone industry with our members so we can officially submit our proposals / recommendations/ suggestions with the mutual consent of all APMIA members.</p>
<p><img alt=\"\" src=\"/user/pages/04.news/meeting-was-held-at-ministry-of-planning-development-reforms-islamabad/54.jpg\" /></p>
<p><img alt=\"\" src=\"/user/pages/04.news/meeting-was-held-at-ministry-of-planning-development-reforms-islamabad/55.jpg\" /></p>", "@Page:/Users/amer/Sites/apmia/user/pages/04.news/meeting-was-held-at-ministry-of-planning-development-reforms-islamabad", "");
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
