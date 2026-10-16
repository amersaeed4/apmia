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

/* @Page:/Users/amer/Sites/apmia/user/pages/04.news/meeting-of-all-pakistan-marble-industries-association */
class __TwigTemplate_74f27d67c2c0775a6d98916ec7e9a1fe_sourced extends Template
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
        yield "<p>Meeting of All Pakistan Marble Industries Association (APMIA) members including Senior Vice Chairman Muhammad Bilal Khan, Haji Shabbir Ahmed, Atiq ur Rehman Abbasi, Ilyas Muhammad with Secretary Industries &amp; Commerce, Balochistan in Islamabad regarding the issues of marble industries sector, we reached to following conclusions which are hereunder;</p>
<p>i) Haji Shabbir Ahmed’s inclusion in Board of Directors of Lasbela Industrial Estate Development Authority (LIEDA).</p>
<p>ii) To avoid electricity shut down and an alternate solution of 10MW self power generation is also verbally approved.</p>
<p>iii) Managing Director LIEDA has instructed by the secretary to meet our delegation in his upcoming visit to marble city in Gaddani.</p>
<p>iv) Secretary Industries also accepted that private entrepreneurs should develop Phase II Marble City under the government rules and regulations.</p>";
        return; yield;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@Page:/Users/amer/Sites/apmia/user/pages/04.news/meeting-of-all-pakistan-marble-industries-association";
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
        return new Source("<p>Meeting of All Pakistan Marble Industries Association (APMIA) members including Senior Vice Chairman Muhammad Bilal Khan, Haji Shabbir Ahmed, Atiq ur Rehman Abbasi, Ilyas Muhammad with Secretary Industries &amp; Commerce, Balochistan in Islamabad regarding the issues of marble industries sector, we reached to following conclusions which are hereunder;</p>
<p>i) Haji Shabbir Ahmed’s inclusion in Board of Directors of Lasbela Industrial Estate Development Authority (LIEDA).</p>
<p>ii) To avoid electricity shut down and an alternate solution of 10MW self power generation is also verbally approved.</p>
<p>iii) Managing Director LIEDA has instructed by the secretary to meet our delegation in his upcoming visit to marble city in Gaddani.</p>
<p>iv) Secretary Industries also accepted that private entrepreneurs should develop Phase II Marble City under the government rules and regulations.</p>", "@Page:/Users/amer/Sites/apmia/user/pages/04.news/meeting-of-all-pakistan-marble-industries-association", "");
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
