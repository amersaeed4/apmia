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

/* @Page:/Users/amer/Sites/apmia/user/pages/04.news/a-visit-to-14th-build-asia-exhibition */
class __TwigTemplate_95ed584a2ffd8b6e51e2c8d7e5b406d7_sourced extends Template
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
        yield "<p>DG Mines &amp; Minerals Department KPK, Mr. Muntazir Khan had a visit to 14th Build Asia Exhibition, 2018 along with Chairman Mian Gulzar Ahmad and Senior Vice Chairman Muhammad Bilal Khan of All Pakistan Marble Industries Association (APMIA), Sub Zonal Vice Chairman (Balochistan) Mr. Shabbir Ahmad and Mr. Asghar Khan Utmankhel, Executive Committee Member and Mr. Ilyas, Member APMIA.</p>
<p><img alt=\"\" src=\"/user/pages/04.news/a-visit-to-14th-build-asia-exhibition/asiabuild.png\" /></p>
<p>Governor Sindh Mr. Imran Ismail visit at Expo Center, Karachi for 14th Build Asia Exhibition, December 2018.</p>
<p>Mr. Mian Gulzar Ahmad, Chairman APMIA and Mr. Sheikh Iftikhar Rasheed (Vice Chairman APMIA) has also joined him along with other Executive Committee Members.</p>
<p><img alt=\"\" src=\"/user/pages/04.news/a-visit-to-14th-build-asia-exhibition/asiabuild12.png\" /></p>";
        return; yield;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@Page:/Users/amer/Sites/apmia/user/pages/04.news/a-visit-to-14th-build-asia-exhibition";
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
        return new Source("<p>DG Mines &amp; Minerals Department KPK, Mr. Muntazir Khan had a visit to 14th Build Asia Exhibition, 2018 along with Chairman Mian Gulzar Ahmad and Senior Vice Chairman Muhammad Bilal Khan of All Pakistan Marble Industries Association (APMIA), Sub Zonal Vice Chairman (Balochistan) Mr. Shabbir Ahmad and Mr. Asghar Khan Utmankhel, Executive Committee Member and Mr. Ilyas, Member APMIA.</p>
<p><img alt=\"\" src=\"/user/pages/04.news/a-visit-to-14th-build-asia-exhibition/asiabuild.png\" /></p>
<p>Governor Sindh Mr. Imran Ismail visit at Expo Center, Karachi for 14th Build Asia Exhibition, December 2018.</p>
<p>Mr. Mian Gulzar Ahmad, Chairman APMIA and Mr. Sheikh Iftikhar Rasheed (Vice Chairman APMIA) has also joined him along with other Executive Committee Members.</p>
<p><img alt=\"\" src=\"/user/pages/04.news/a-visit-to-14th-build-asia-exhibition/asiabuild12.png\" /></p>", "@Page:/Users/amer/Sites/apmia/user/pages/04.news/a-visit-to-14th-build-asia-exhibition", "");
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
