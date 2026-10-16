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

/* @Page:/Users/amer/Sites/apmia/user/pages/04.news/the-all-pakistan-marble-industries-association-apmia-actively-participated-in-the-recent-stakeholders-workshop */
class __TwigTemplate_f6d5b84ba38b15aa980e79e916d9487b_sourced extends Template
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
        yield "<p>The All Pakistan Marble Industries Association (APMIA) actively participated in the recent Stakeholders’ Workshop on Harmonizing the Legal and Regulatory Framework of the Mineral Sector in Pakistan. The APMIA delegation, including Senior Vice Chairman Shoaib Sultan, Former Chairman Muhammad Shakeel Munir, and Senior Member Saleem Khan, presented proposals aimed at enhancing the mineral sector’s growth and investment potential.</p>
<p>Key proposals included a comprehensive resource mapping project, robust security for investors, alignment with international reporting standards, streamlined leasing processes, safeguarding systems like SIFC and mineral auditing, regulation enforcement, tax and duty exemptions on modern mining equipment, financial support through loans, technology transfer via global partnerships, establishing a dedicated mineral development bank, creating provincial development companies, institutional reforms, a national mineral data center, support for small miners, stakeholder collaboration, standardized reporting, and sustainable policy development.</p>
<p>APMIA believes these reforms will make Pakistan’s mineral sector more attractive and efficient, and looks forward to continued collaboration with the government and stakeholders for the sector’s success.</p>";
        return; yield;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@Page:/Users/amer/Sites/apmia/user/pages/04.news/the-all-pakistan-marble-industries-association-apmia-actively-participated-in-the-recent-stakeholders-workshop";
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
        return new Source("<p>The All Pakistan Marble Industries Association (APMIA) actively participated in the recent Stakeholders’ Workshop on Harmonizing the Legal and Regulatory Framework of the Mineral Sector in Pakistan. The APMIA delegation, including Senior Vice Chairman Shoaib Sultan, Former Chairman Muhammad Shakeel Munir, and Senior Member Saleem Khan, presented proposals aimed at enhancing the mineral sector’s growth and investment potential.</p>
<p>Key proposals included a comprehensive resource mapping project, robust security for investors, alignment with international reporting standards, streamlined leasing processes, safeguarding systems like SIFC and mineral auditing, regulation enforcement, tax and duty exemptions on modern mining equipment, financial support through loans, technology transfer via global partnerships, establishing a dedicated mineral development bank, creating provincial development companies, institutional reforms, a national mineral data center, support for small miners, stakeholder collaboration, standardized reporting, and sustainable policy development.</p>
<p>APMIA believes these reforms will make Pakistan’s mineral sector more attractive and efficient, and looks forward to continued collaboration with the government and stakeholders for the sector’s success.</p>", "@Page:/Users/amer/Sites/apmia/user/pages/04.news/the-all-pakistan-marble-industries-association-apmia-actively-participated-in-the-recent-stakeholders-workshop", "");
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
