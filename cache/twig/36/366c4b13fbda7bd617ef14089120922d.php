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

/* @Page:/Users/amer/Sites/apmia/user/pages/04.news/participation-in-14th-build-asia-exhibition */
class __TwigTemplate_c2b8f0e6be2c29abb58eee08b67124e0_sourced extends Template
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
        yield "<p>Participation of All Pakistan Marble Industries Association in 14th Build Asia Exhibition, International Building Materials &amp; Construction Machinery Show, 15-17 December 2018.</p>
<p><img alt=\"\" src=\"/user/pages/04.news/participation-in-14th-build-asia-exhibition/1-1.png\" /></p>
<p><img alt=\"\" src=\"/user/pages/04.news/participation-in-14th-build-asia-exhibition/2.png\" /></p>
<p>Second CEC Meeting of All Pakistan Marble Industries Association (APMIA) including Chairman Mr. Mian Gulzar Ahmad, Senior Vice Chairman, Mr. Muhammad Bilal Khan, Vice Chairman, Sheikh Iftikhar Rasheed and other executive committee members.</p>
<p><img alt=\"\" src=\"/user/pages/04.news/participation-in-14th-build-asia-exhibition/3.png\" /> <img alt=\"\" src=\"/user/pages/04.news/participation-in-14th-build-asia-exhibition/4.png\" /></p>";
        return; yield;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@Page:/Users/amer/Sites/apmia/user/pages/04.news/participation-in-14th-build-asia-exhibition";
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
        return new Source("<p>Participation of All Pakistan Marble Industries Association in 14th Build Asia Exhibition, International Building Materials &amp; Construction Machinery Show, 15-17 December 2018.</p>
<p><img alt=\"\" src=\"/user/pages/04.news/participation-in-14th-build-asia-exhibition/1-1.png\" /></p>
<p><img alt=\"\" src=\"/user/pages/04.news/participation-in-14th-build-asia-exhibition/2.png\" /></p>
<p>Second CEC Meeting of All Pakistan Marble Industries Association (APMIA) including Chairman Mr. Mian Gulzar Ahmad, Senior Vice Chairman, Mr. Muhammad Bilal Khan, Vice Chairman, Sheikh Iftikhar Rasheed and other executive committee members.</p>
<p><img alt=\"\" src=\"/user/pages/04.news/participation-in-14th-build-asia-exhibition/3.png\" /> <img alt=\"\" src=\"/user/pages/04.news/participation-in-14th-build-asia-exhibition/4.png\" /></p>", "@Page:/Users/amer/Sites/apmia/user/pages/04.news/participation-in-14th-build-asia-exhibition", "");
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
