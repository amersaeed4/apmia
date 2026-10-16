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

/* @Page:/Users/amer/Sites/apmia/user/pages/04.news/meeting-with-chairman-fbr-mr-syed-muhammad-shabbar-zaidi */
class __TwigTemplate_87e5713fa9d543a6487974580189f219_sourced extends Template
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
        yield "<p>A meeting was held between Chairman FBR Mr. Syed Muhammad Shabbar Zaidi and Chairman APMIA Mr. Mian Gulzar Ahmad, Former Chairman Mr. Muhammad Shakeel Munir, Founder Member APMIA Mr. Mian Abdul Sami, Executive Committee Member APMIA Mr. Mian Fazeelat Shah and senior members APMIA Mr. Shoaib Hamid, Mr. Muhammad Younas, Mr. Farrukh Munir and Mr. Ibad Ali regarding sales tax issues.</p>
<p><img alt=\"\" src=\"/user/pages/04.news/meeting-with-chairman-fbr-mr-syed-muhammad-shabbar-zaidi/picture1a.jpg\" /></p>";
        return; yield;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@Page:/Users/amer/Sites/apmia/user/pages/04.news/meeting-with-chairman-fbr-mr-syed-muhammad-shabbar-zaidi";
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
        return new Source("<p>A meeting was held between Chairman FBR Mr. Syed Muhammad Shabbar Zaidi and Chairman APMIA Mr. Mian Gulzar Ahmad, Former Chairman Mr. Muhammad Shakeel Munir, Founder Member APMIA Mr. Mian Abdul Sami, Executive Committee Member APMIA Mr. Mian Fazeelat Shah and senior members APMIA Mr. Shoaib Hamid, Mr. Muhammad Younas, Mr. Farrukh Munir and Mr. Ibad Ali regarding sales tax issues.</p>
<p><img alt=\"\" src=\"/user/pages/04.news/meeting-with-chairman-fbr-mr-syed-muhammad-shabbar-zaidi/picture1a.jpg\" /></p>", "@Page:/Users/amer/Sites/apmia/user/pages/04.news/meeting-with-chairman-fbr-mr-syed-muhammad-shabbar-zaidi", "");
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
