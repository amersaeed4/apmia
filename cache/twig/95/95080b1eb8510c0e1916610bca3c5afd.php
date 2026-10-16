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

/* @Page:/Users/amer/Sites/apmia/user/pages/04.news/a-meeting-with-the-commercial-counselor-mr-demir-ahmet-in-embassy-of-turkey-islamabad */
class __TwigTemplate_7db9487907325691d47dfbe8c2be41ed_sourced extends Template
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
        yield "<p>A meeting was held between Mr. Mian Gulzar Ahmad, Chairman APMIA, Mr. Sheikh Iftikhar Rasheed, Vice Chairman APMIA, Mr. Muhammad Sabir Khan, Member Executive Committee APMIA and Mr. Muhammad Qasim, Deputy Secretary APMIA with the Commercial Counselor Mr. Demir Ahmet in Embassy of Turkey, Islamabad.</p>
<p><img alt=\"\" src=\"/user/pages/04.news/a-meeting-with-the-commercial-counselor-mr-demir-ahmet-in-embassy-of-turkey-islamabad/6.png\" /></p>";
        return; yield;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@Page:/Users/amer/Sites/apmia/user/pages/04.news/a-meeting-with-the-commercial-counselor-mr-demir-ahmet-in-embassy-of-turkey-islamabad";
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
        return new Source("<p>A meeting was held between Mr. Mian Gulzar Ahmad, Chairman APMIA, Mr. Sheikh Iftikhar Rasheed, Vice Chairman APMIA, Mr. Muhammad Sabir Khan, Member Executive Committee APMIA and Mr. Muhammad Qasim, Deputy Secretary APMIA with the Commercial Counselor Mr. Demir Ahmet in Embassy of Turkey, Islamabad.</p>
<p><img alt=\"\" src=\"/user/pages/04.news/a-meeting-with-the-commercial-counselor-mr-demir-ahmet-in-embassy-of-turkey-islamabad/6.png\" /></p>", "@Page:/Users/amer/Sites/apmia/user/pages/04.news/a-meeting-with-the-commercial-counselor-mr-demir-ahmet-in-embassy-of-turkey-islamabad", "");
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
