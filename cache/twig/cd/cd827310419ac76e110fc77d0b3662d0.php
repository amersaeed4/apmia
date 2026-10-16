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

/* @Page:/Users/amer/Sites/apmia/user/pages/04.news/meeting-of-mr-muhammad-bilal-khan-senior-vice-chairman */
class __TwigTemplate_480484bd6f53c28954712cdd3ce6e27b_sourced extends Template
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
        yield "<p>A meeting of Mr. Muhammad Bilal Khan, Senior Vice Chairman including Haji Shakir Ullah, Muhammad Sabir Khan, Ilyas khan, shah Khalid, Saeed khan, Rahim shah and Khalid Yousaf, Nigar khan and other participants held with Mohmand miners and industrialists at Subhan Khwar, the minutes of our meeting are here under;</p>
<p>i) Explosive issue is resolved, on Monday the first lot will be available to our miners</p>
<p>ii) New members are invited to join our team to strengthen APMIA</p>
<p>iii) Other issues related to mining, industry and PASDEC are discussed, we agreed to work together for better future.</p>
<p>iv) Sub-committee will be formed to rake up the relevant issues with local administration and if they need our assistance at higher level we will ensure 100% support.</p>
<p><img alt=\"\" src=\"/user/pages/04.news/meeting-of-mr-muhammad-bilal-khan-senior-vice-chairman/51.jpg\" /></p>";
        return; yield;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@Page:/Users/amer/Sites/apmia/user/pages/04.news/meeting-of-mr-muhammad-bilal-khan-senior-vice-chairman";
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
        return new Source("<p>A meeting of Mr. Muhammad Bilal Khan, Senior Vice Chairman including Haji Shakir Ullah, Muhammad Sabir Khan, Ilyas khan, shah Khalid, Saeed khan, Rahim shah and Khalid Yousaf, Nigar khan and other participants held with Mohmand miners and industrialists at Subhan Khwar, the minutes of our meeting are here under;</p>
<p>i) Explosive issue is resolved, on Monday the first lot will be available to our miners</p>
<p>ii) New members are invited to join our team to strengthen APMIA</p>
<p>iii) Other issues related to mining, industry and PASDEC are discussed, we agreed to work together for better future.</p>
<p>iv) Sub-committee will be formed to rake up the relevant issues with local administration and if they need our assistance at higher level we will ensure 100% support.</p>
<p><img alt=\"\" src=\"/user/pages/04.news/meeting-of-mr-muhammad-bilal-khan-senior-vice-chairman/51.jpg\" /></p>", "@Page:/Users/amer/Sites/apmia/user/pages/04.news/meeting-of-mr-muhammad-bilal-khan-senior-vice-chairman", "");
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
