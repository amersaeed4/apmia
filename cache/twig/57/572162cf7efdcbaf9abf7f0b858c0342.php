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

/* @Page:/Users/amer/Sites/apmia/user/pages/04.news/apmia-executives-and-representatives-in-apmia-karachi-office */
class __TwigTemplate_846e101cdc2f39ffc31cd48e8c32d37d_sourced extends Template
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
        yield "<p>APMIA executives and representatives in APMIA Karachi office, chaired by Mian Gulzar Ahmed, Chairman APMIA, Muhammad Bilal Khan, Senior Vice Chairman, Atiq Ur Rehman Abbasi, Zonal Vice Chairman (South), following points were discussed in the meeting,</p>
<p>i) Local issues regarding construction of road, environment, street lights, lack of security and the issues of wastage storage including local relevant departments</p>
<p>ii) We should invite the bankers to open a bank on Manghopir Road to facilitate the businessmen nearby.</p>
<p>iii) Mian Gulzar Ahmed, Chairman APMIA told the members that all the stakeholders should work together to resolve the issues and committee for local issues should be made.</p>
<p>iv) We should invite all the factory / showroom owners under one roof to brief them the roles / services / benefits of APMIA, which will help us to increase the membership from South zone.</p>
<p><img alt=\"\" src=\"/user/pages/04.news/apmia-executives-and-representatives-in-apmia-karachi-office/44.jpg\" /></p>";
        return; yield;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@Page:/Users/amer/Sites/apmia/user/pages/04.news/apmia-executives-and-representatives-in-apmia-karachi-office";
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
        return new Source("<p>APMIA executives and representatives in APMIA Karachi office, chaired by Mian Gulzar Ahmed, Chairman APMIA, Muhammad Bilal Khan, Senior Vice Chairman, Atiq Ur Rehman Abbasi, Zonal Vice Chairman (South), following points were discussed in the meeting,</p>
<p>i) Local issues regarding construction of road, environment, street lights, lack of security and the issues of wastage storage including local relevant departments</p>
<p>ii) We should invite the bankers to open a bank on Manghopir Road to facilitate the businessmen nearby.</p>
<p>iii) Mian Gulzar Ahmed, Chairman APMIA told the members that all the stakeholders should work together to resolve the issues and committee for local issues should be made.</p>
<p>iv) We should invite all the factory / showroom owners under one roof to brief them the roles / services / benefits of APMIA, which will help us to increase the membership from South zone.</p>
<p><img alt=\"\" src=\"/user/pages/04.news/apmia-executives-and-representatives-in-apmia-karachi-office/44.jpg\" /></p>", "@Page:/Users/amer/Sites/apmia/user/pages/04.news/apmia-executives-and-representatives-in-apmia-karachi-office", "");
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
