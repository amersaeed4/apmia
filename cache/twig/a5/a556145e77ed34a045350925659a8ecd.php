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

/* @Page:/Users/amer/Sites/apmia/user/pages/04.news/workshop-at-muslim-bagh-with-smeda-and-local-mine-owners */
class __TwigTemplate_d6eb9ee2ab7036a5ecf20534b8e7dd9e_sourced extends Template
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
        yield "<ol>
<li>i) Shabbir Ahmed (Sub Zonal Vice Chairman-APMIA) has attended the workshop at Muslim Bagh with SMEDA and local mine owners, during discussion following issues are raised,</li>
<li>a) Regulatory</li>
<li>b) Technology / Technical supports</li>
<li>c) Financial Support</li>
<li>d) Infrastructure from chrome city</li>
<li>e) Explosive material availability for mining.</li>
</ol>
<p><img alt=\"\" src=\"/user/pages/04.news/workshop-at-muslim-bagh-with-smeda-and-local-mine-owners/14.jpg\" /></p>
<p>iii) Mr. Shabbir Ahmed (Sub Zonal Vice Chairman – APMIA) meeting with SMEDA at Marble City, Gaddani, Lasbela, Balochistan</p>
<p><img alt=\"\" src=\"/user/pages/04.news/workshop-at-muslim-bagh-with-smeda-and-local-mine-owners/15.jpg\" /></p>
<p><img alt=\"\" src=\"/user/pages/04.news/workshop-at-muslim-bagh-with-smeda-and-local-mine-owners/16.jpg\" /></p>";
        return; yield;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@Page:/Users/amer/Sites/apmia/user/pages/04.news/workshop-at-muslim-bagh-with-smeda-and-local-mine-owners";
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
        return new Source("<ol>
<li>i) Shabbir Ahmed (Sub Zonal Vice Chairman-APMIA) has attended the workshop at Muslim Bagh with SMEDA and local mine owners, during discussion following issues are raised,</li>
<li>a) Regulatory</li>
<li>b) Technology / Technical supports</li>
<li>c) Financial Support</li>
<li>d) Infrastructure from chrome city</li>
<li>e) Explosive material availability for mining.</li>
</ol>
<p><img alt=\"\" src=\"/user/pages/04.news/workshop-at-muslim-bagh-with-smeda-and-local-mine-owners/14.jpg\" /></p>
<p>iii) Mr. Shabbir Ahmed (Sub Zonal Vice Chairman – APMIA) meeting with SMEDA at Marble City, Gaddani, Lasbela, Balochistan</p>
<p><img alt=\"\" src=\"/user/pages/04.news/workshop-at-muslim-bagh-with-smeda-and-local-mine-owners/15.jpg\" /></p>
<p><img alt=\"\" src=\"/user/pages/04.news/workshop-at-muslim-bagh-with-smeda-and-local-mine-owners/16.jpg\" /></p>", "@Page:/Users/amer/Sites/apmia/user/pages/04.news/workshop-at-muslim-bagh-with-smeda-and-local-mine-owners", "");
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
