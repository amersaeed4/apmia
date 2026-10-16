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

/* @Page:/Users/amer/Sites/apmia/user/pages/04.news/meeting-minister-of-state-for-revenue-mr-muhammad-hammad-azhar */
class __TwigTemplate_b4ac3b28970c81d4976c6eb4abb6d94e_sourced extends Template
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
        yield "<p>Meeting was held with the Honorable Minister of State for Revenue, Mr. Muhammad Hammad Azhar with APMIA representatives including Chairman Mian Gulzar Ahmed, Senior Vice Chairman Muhammad Bilal Khan, Sub Zonal Vice Chairman Shabbir Ahmed and Shakir Ullah, Muhammad Sabir Khan, Imran Khan, Malik Faisal, Taimoor Khan and Himit Shah regarding draft SRO 1226(I)/2018, following conclusions were made in the said meeting;</p>
<p>i) Muhammad Hammad Azhar confirmed that this is a draft SRO and the rates mentioned in the SRO are not final.</p>
<p>ii) He accepted that we should get the concern mines and minerals departments according to the province.</p>
<p>iii) Non Filers and Filers mine owner’s collection will be made through the mine departments of every province.</p>
<p>iv) APMIA representatives suggested that the values of slabs and tiles should be changed into square foot or square meter and the minimum value of blocks for export should be 60USD per ton.</p>
<p>v) Muhammad Hammad Azhar asked APMIA representatives to provide a proposal for this SRO.</p>
<p><img alt=\"\" src=\"/user/pages/04.news/meeting-minister-of-state-for-revenue-mr-muhammad-hammad-azhar/24.jpg\" /></p>
<p><img alt=\"\" src=\"/user/pages/04.news/meeting-minister-of-state-for-revenue-mr-muhammad-hammad-azhar/25.jpg\" /></p>
<p><img alt=\"\" src=\"/user/pages/04.news/meeting-minister-of-state-for-revenue-mr-muhammad-hammad-azhar/26.jpg\" /></p>";
        return; yield;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@Page:/Users/amer/Sites/apmia/user/pages/04.news/meeting-minister-of-state-for-revenue-mr-muhammad-hammad-azhar";
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
        return new Source("<p>Meeting was held with the Honorable Minister of State for Revenue, Mr. Muhammad Hammad Azhar with APMIA representatives including Chairman Mian Gulzar Ahmed, Senior Vice Chairman Muhammad Bilal Khan, Sub Zonal Vice Chairman Shabbir Ahmed and Shakir Ullah, Muhammad Sabir Khan, Imran Khan, Malik Faisal, Taimoor Khan and Himit Shah regarding draft SRO 1226(I)/2018, following conclusions were made in the said meeting;</p>
<p>i) Muhammad Hammad Azhar confirmed that this is a draft SRO and the rates mentioned in the SRO are not final.</p>
<p>ii) He accepted that we should get the concern mines and minerals departments according to the province.</p>
<p>iii) Non Filers and Filers mine owner’s collection will be made through the mine departments of every province.</p>
<p>iv) APMIA representatives suggested that the values of slabs and tiles should be changed into square foot or square meter and the minimum value of blocks for export should be 60USD per ton.</p>
<p>v) Muhammad Hammad Azhar asked APMIA representatives to provide a proposal for this SRO.</p>
<p><img alt=\"\" src=\"/user/pages/04.news/meeting-minister-of-state-for-revenue-mr-muhammad-hammad-azhar/24.jpg\" /></p>
<p><img alt=\"\" src=\"/user/pages/04.news/meeting-minister-of-state-for-revenue-mr-muhammad-hammad-azhar/25.jpg\" /></p>
<p><img alt=\"\" src=\"/user/pages/04.news/meeting-minister-of-state-for-revenue-mr-muhammad-hammad-azhar/26.jpg\" /></p>", "@Page:/Users/amer/Sites/apmia/user/pages/04.news/meeting-minister-of-state-for-revenue-mr-muhammad-hammad-azhar", "");
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
