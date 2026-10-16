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

/* @Page:/Users/amer/Sites/apmia/user/pages/04.news/a-meeting-was-held-with-dg-tdap-mr-azhar-ali-at-marble-city-gadani */
class __TwigTemplate_f430e756e607ea38049b1924db684254_sourced extends Template
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
        yield "<p>Under the leadership of Chairman APMIA, Muhammad Bilal Khan, a meeting was held with DG TDAP, Mr. Azhar Ali, at Marble City, Gadani. The meeting was attended by APMIA Vice Chairman (South) Rahat Shah, former Chairman Haji Shabbir, Muhammad Nadeem Shahanshahi, former Senior Vice Chairman Shoaib Sultan, Jamshed Khan, and other members.</p>
<p>During the meeting, issues related to the marble and granite sector were discussed. The participants deliberated on strategies to enhance and improve exports. Detailed discussions were also held on the participation of APMIA members in stone fairs in various countries and exploring new markets for the sector.</p>";
        return; yield;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@Page:/Users/amer/Sites/apmia/user/pages/04.news/a-meeting-was-held-with-dg-tdap-mr-azhar-ali-at-marble-city-gadani";
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
        return new Source("<p>Under the leadership of Chairman APMIA, Muhammad Bilal Khan, a meeting was held with DG TDAP, Mr. Azhar Ali, at Marble City, Gadani. The meeting was attended by APMIA Vice Chairman (South) Rahat Shah, former Chairman Haji Shabbir, Muhammad Nadeem Shahanshahi, former Senior Vice Chairman Shoaib Sultan, Jamshed Khan, and other members.</p>
<p>During the meeting, issues related to the marble and granite sector were discussed. The participants deliberated on strategies to enhance and improve exports. Detailed discussions were also held on the participation of APMIA members in stone fairs in various countries and exploring new markets for the sector.</p>", "@Page:/Users/amer/Sites/apmia/user/pages/04.news/a-meeting-was-held-with-dg-tdap-mr-azhar-ali-at-marble-city-gadani", "");
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
