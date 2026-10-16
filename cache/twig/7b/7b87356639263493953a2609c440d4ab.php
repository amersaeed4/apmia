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

/* @Page:/Users/amer/Sites/apmia/user/pages/04.news/a-meeting-with-dg-mines-minerals-kpk */
class __TwigTemplate_f545c1b307fb33518fcdc9545714eaf4_sourced extends Template
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
        yield "<p>A meeting was held today between Mr. Muntazir Khan, DG Mines &amp; Minerals, KPK and APMIA Executives including Mr. Shakir Ullah, Mr. Muhammad Sabir Khan and other mine owners from FATA region.<br />
The problems regarding Challan books have been resolved and Challan books are issued to the mine owners. DG Mines has assured that he will fully support the mine owners of KPK in future.</p>
<p><img alt=\"\" src=\"/user/pages/04.news/a-meeting-with-dg-mines-minerals-kpk/meeting.png\" /></p>";
        return; yield;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@Page:/Users/amer/Sites/apmia/user/pages/04.news/a-meeting-with-dg-mines-minerals-kpk";
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
        return new Source("<p>A meeting was held today between Mr. Muntazir Khan, DG Mines &amp; Minerals, KPK and APMIA Executives including Mr. Shakir Ullah, Mr. Muhammad Sabir Khan and other mine owners from FATA region.<br />
The problems regarding Challan books have been resolved and Challan books are issued to the mine owners. DG Mines has assured that he will fully support the mine owners of KPK in future.</p>
<p><img alt=\"\" src=\"/user/pages/04.news/a-meeting-with-dg-mines-minerals-kpk/meeting.png\" /></p>", "@Page:/Users/amer/Sites/apmia/user/pages/04.news/a-meeting-with-dg-mines-minerals-kpk", "");
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
