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

/* @Page:/Users/amer/Sites/apmia/user/pages/04.news/annual-general-meeting-of-all-pakistan-marble-industries-association */
class __TwigTemplate_ae8794922e10649fe1dfc57082707623_sourced extends Template
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
        yield "<p>Annual General Meeting of All Pakistan Marble Industries Association for the year 2018-2019</p>
<p><img alt=\"\" src=\"/user/pages/04.news/annual-general-meeting-of-all-pakistan-marble-industries-association/1.jpg\" /></p>
<p><img alt=\"\" src=\"/user/pages/04.news/annual-general-meeting-of-all-pakistan-marble-industries-association/2.jpg\" /></p>
<p>Oath Taking Ceremony of Newly elected members of Central Executive Committee of All Pakistan marble Industries Association (APMIA),</p>
<p><img alt=\"\" src=\"/user/pages/04.news/annual-general-meeting-of-all-pakistan-marble-industries-association/3.jpg\" /></p>
<p>Newly elected Top Office bearers of All Pakistan Marble Industries Association (APMIA) with nominated Governor Balochistan Dr. Ameer Khan Jogezai</p>
<p><img alt=\"\" src=\"/user/pages/04.news/annual-general-meeting-of-all-pakistan-marble-industries-association/4.jpg\" /></p>
<p>Mr. Mian Gulzar Ahmed, Chairman All Pakistan Marble Industries Association addressing.</p>
<p><img alt=\"\" src=\"/user/pages/04.news/annual-general-meeting-of-all-pakistan-marble-industries-association/5.jpg\" /></p>
<p>Mr. Muhammad Bilal Khan, Senior Vice Chairman All Pakistan Marble Industries Association addressing.</p>
<p><img alt=\"\" src=\"/user/pages/04.news/annual-general-meeting-of-all-pakistan-marble-industries-association/6.jpg\" /></p>
<p>Mr. Sheikh Iftikhar Rashid, Vice Chairman All Pakistan Marble Industries Association addressing.</p>
<p><img alt=\"\" src=\"/user/pages/04.news/annual-general-meeting-of-all-pakistan-marble-industries-association/7.jpg\" /></p>
<p>Former Chairmen of All Pakistan Marble Industries Association with nominated Governor Dr. Ameer Khan Jogezai and President Islamabad Chamber of Commerce &amp; Industry Mr. Sheikh Amir Waheed</p>
<p><img alt=\"\" src=\"/user/pages/04.news/annual-general-meeting-of-all-pakistan-marble-industries-association/8.jpg\" /></p>";
        return; yield;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@Page:/Users/amer/Sites/apmia/user/pages/04.news/annual-general-meeting-of-all-pakistan-marble-industries-association";
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
        return new Source("<p>Annual General Meeting of All Pakistan Marble Industries Association for the year 2018-2019</p>
<p><img alt=\"\" src=\"/user/pages/04.news/annual-general-meeting-of-all-pakistan-marble-industries-association/1.jpg\" /></p>
<p><img alt=\"\" src=\"/user/pages/04.news/annual-general-meeting-of-all-pakistan-marble-industries-association/2.jpg\" /></p>
<p>Oath Taking Ceremony of Newly elected members of Central Executive Committee of All Pakistan marble Industries Association (APMIA),</p>
<p><img alt=\"\" src=\"/user/pages/04.news/annual-general-meeting-of-all-pakistan-marble-industries-association/3.jpg\" /></p>
<p>Newly elected Top Office bearers of All Pakistan Marble Industries Association (APMIA) with nominated Governor Balochistan Dr. Ameer Khan Jogezai</p>
<p><img alt=\"\" src=\"/user/pages/04.news/annual-general-meeting-of-all-pakistan-marble-industries-association/4.jpg\" /></p>
<p>Mr. Mian Gulzar Ahmed, Chairman All Pakistan Marble Industries Association addressing.</p>
<p><img alt=\"\" src=\"/user/pages/04.news/annual-general-meeting-of-all-pakistan-marble-industries-association/5.jpg\" /></p>
<p>Mr. Muhammad Bilal Khan, Senior Vice Chairman All Pakistan Marble Industries Association addressing.</p>
<p><img alt=\"\" src=\"/user/pages/04.news/annual-general-meeting-of-all-pakistan-marble-industries-association/6.jpg\" /></p>
<p>Mr. Sheikh Iftikhar Rashid, Vice Chairman All Pakistan Marble Industries Association addressing.</p>
<p><img alt=\"\" src=\"/user/pages/04.news/annual-general-meeting-of-all-pakistan-marble-industries-association/7.jpg\" /></p>
<p>Former Chairmen of All Pakistan Marble Industries Association with nominated Governor Dr. Ameer Khan Jogezai and President Islamabad Chamber of Commerce &amp; Industry Mr. Sheikh Amir Waheed</p>
<p><img alt=\"\" src=\"/user/pages/04.news/annual-general-meeting-of-all-pakistan-marble-industries-association/8.jpg\" /></p>", "@Page:/Users/amer/Sites/apmia/user/pages/04.news/annual-general-meeting-of-all-pakistan-marble-industries-association", "");
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
