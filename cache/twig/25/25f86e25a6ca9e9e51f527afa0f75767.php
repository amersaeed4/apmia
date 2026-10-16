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

/* @Page:/Users/amer/Sites/apmia/user/pages/04.news/meeting-of-apmia-with-deputy-commissioner-buner-regarding-axle-load */
class __TwigTemplate_69e5df0d3b50c1d5bc6d4ba051e22330_sourced extends Template
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
        yield "<p>An important meeting was held with Deputy Commissioner, Buner, Mr. Hamid Ali on June 10, 2024 (Monday) regarding the ban on Marble Block trucks in connection with axle load under the Chairmanship of Mr. Asghar Khan Utmankhel along with the Mine Owners, Industrialists and Marble Block Transporters.</p>
<p>In the meeting, the Deputy Commissioner was informed about the marble sector’s stance regarding the implementation of axle load regulations. The Deputy Commissioner deemed the marble sector’s position to be correct and granted unrestricted permission for block trucks until Eid. It was also decided that after Eid, a joint meeting with all stakeholders will be held to collectively formulate a new procedure regarding this matter.</p>
<p>Additionally, the Deputy Commissioner clarified that since he took charge as DC in Buner, no instructions have been issued to stop or penalize marble trucks. Therefore, any complaints regarding this matter can be directed to the DC office. Meanwhile, stakeholders were requested to self-regulate the heavy loads of marble block trucks to avoid any issues and ensure that the marble sector, which is a crucial part of the province’s and especially Buner’s economy, continues to operate smoothly without any interruptions.</p>";
        return; yield;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@Page:/Users/amer/Sites/apmia/user/pages/04.news/meeting-of-apmia-with-deputy-commissioner-buner-regarding-axle-load";
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
        return new Source("<p>An important meeting was held with Deputy Commissioner, Buner, Mr. Hamid Ali on June 10, 2024 (Monday) regarding the ban on Marble Block trucks in connection with axle load under the Chairmanship of Mr. Asghar Khan Utmankhel along with the Mine Owners, Industrialists and Marble Block Transporters.</p>
<p>In the meeting, the Deputy Commissioner was informed about the marble sector’s stance regarding the implementation of axle load regulations. The Deputy Commissioner deemed the marble sector’s position to be correct and granted unrestricted permission for block trucks until Eid. It was also decided that after Eid, a joint meeting with all stakeholders will be held to collectively formulate a new procedure regarding this matter.</p>
<p>Additionally, the Deputy Commissioner clarified that since he took charge as DC in Buner, no instructions have been issued to stop or penalize marble trucks. Therefore, any complaints regarding this matter can be directed to the DC office. Meanwhile, stakeholders were requested to self-regulate the heavy loads of marble block trucks to avoid any issues and ensure that the marble sector, which is a crucial part of the province’s and especially Buner’s economy, continues to operate smoothly without any interruptions.</p>", "@Page:/Users/amer/Sites/apmia/user/pages/04.news/meeting-of-apmia-with-deputy-commissioner-buner-regarding-axle-load", "");
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
