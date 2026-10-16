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

/* @Page:/Users/amer/Sites/apmia/user/pages/04.news/apmia-members-met-with-governor-sindh-mr-imran-ismail-in-karachi */
class __TwigTemplate_cb929549de90e30d2cfbd4477db7ca8d_sourced extends Template
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
        yield "<p>APMIA members met with Governor Sindh Mr. Imran Ismail in Karachi regarding Manghopir and Qasba dimensional stone industry. Following issues were discussed;</p>
<p>i) Road construction from Banarus upto sarjani should be completed quickly. Second, parallel road should be made workable for transport. Footpaths should be added to the master plan for pedestrian.</p>
<p>ii) Security issues; snatching issue closed to banks in Manghopir area were also discussed and we suggested to arrange a picket for rangers closed to the banks. We also agreed that we will donate cameras for vigilance in order to control the crime.</p>
<p>iii) Drinking water for laborers</p>
<p>iv) Assist us in the acquisition of our plots at marble city Karachi. Though he said that it’s not my area but I could request the Sindh govt.</p>
<p>v) We requested him to call Finance Minister for our exporters so they can share their genuine issues. He task Mr. Aziz Afridi to arrange a meeting with finance minister.</p>
<p><img alt=\"\" src=\"/user/pages/04.news/apmia-members-met-with-governor-sindh-mr-imran-ismail-in-karachi/43.jpg\" /></p>";
        return; yield;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@Page:/Users/amer/Sites/apmia/user/pages/04.news/apmia-members-met-with-governor-sindh-mr-imran-ismail-in-karachi";
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
        return new Source("<p>APMIA members met with Governor Sindh Mr. Imran Ismail in Karachi regarding Manghopir and Qasba dimensional stone industry. Following issues were discussed;</p>
<p>i) Road construction from Banarus upto sarjani should be completed quickly. Second, parallel road should be made workable for transport. Footpaths should be added to the master plan for pedestrian.</p>
<p>ii) Security issues; snatching issue closed to banks in Manghopir area were also discussed and we suggested to arrange a picket for rangers closed to the banks. We also agreed that we will donate cameras for vigilance in order to control the crime.</p>
<p>iii) Drinking water for laborers</p>
<p>iv) Assist us in the acquisition of our plots at marble city Karachi. Though he said that it’s not my area but I could request the Sindh govt.</p>
<p>v) We requested him to call Finance Minister for our exporters so they can share their genuine issues. He task Mr. Aziz Afridi to arrange a meeting with finance minister.</p>
<p><img alt=\"\" src=\"/user/pages/04.news/apmia-members-met-with-governor-sindh-mr-imran-ismail-in-karachi/43.jpg\" /></p>", "@Page:/Users/amer/Sites/apmia/user/pages/04.news/apmia-members-met-with-governor-sindh-mr-imran-ismail-in-karachi", "");
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
