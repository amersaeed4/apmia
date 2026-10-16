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

/* @Page:/Users/amer/Sites/apmia/user/pages/04.news/meeting-of-apmia-representatives-was-conducted-with-pasdecs-site-office-in-marble-city-risalpur */
class __TwigTemplate_82b05127917fc8c36d93b9bd89781eb3_sourced extends Template
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
        yield "<p>Meeting of APMIA representatives was conducted with PASDEC’s site office in Marble City, Risalpur.</p>
<p>i) Major issue in Marble City, Risalpur which was highlighted is the transmission of electricity to the factory owners.</p>
<p>ii) The allottees are also facing the issues regarding the disposal of sludge which should be resolved on priority basis.</p>
<p>iii) Furthermore, Chairman and other executive members of APMIA assured to try to resolve the problems of marble city and will raise their issues on every relevant forum.</p>
<p><img alt=\"\" src=\"/user/pages/04.news/meeting-of-apmia-representatives-was-conducted-with-pasdecs-site-office-in-marble-city-risalpur/48.jpg\" /></p>
<p><img alt=\"\" src=\"/user/pages/04.news/meeting-of-apmia-representatives-was-conducted-with-pasdecs-site-office-in-marble-city-risalpur/49.jpg\" /></p>";
        return; yield;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@Page:/Users/amer/Sites/apmia/user/pages/04.news/meeting-of-apmia-representatives-was-conducted-with-pasdecs-site-office-in-marble-city-risalpur";
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
        return new Source("<p>Meeting of APMIA representatives was conducted with PASDEC’s site office in Marble City, Risalpur.</p>
<p>i) Major issue in Marble City, Risalpur which was highlighted is the transmission of electricity to the factory owners.</p>
<p>ii) The allottees are also facing the issues regarding the disposal of sludge which should be resolved on priority basis.</p>
<p>iii) Furthermore, Chairman and other executive members of APMIA assured to try to resolve the problems of marble city and will raise their issues on every relevant forum.</p>
<p><img alt=\"\" src=\"/user/pages/04.news/meeting-of-apmia-representatives-was-conducted-with-pasdecs-site-office-in-marble-city-risalpur/48.jpg\" /></p>
<p><img alt=\"\" src=\"/user/pages/04.news/meeting-of-apmia-representatives-was-conducted-with-pasdecs-site-office-in-marble-city-risalpur/49.jpg\" /></p>", "@Page:/Users/amer/Sites/apmia/user/pages/04.news/meeting-of-apmia-representatives-was-conducted-with-pasdecs-site-office-in-marble-city-risalpur", "");
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
