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

/* @Page:/Users/amer/Sites/apmia/user/pages/04.news/meeting-with-mr-saqif-saeed-chief-collector-exports-2 */
class __TwigTemplate_aff4ed0d2cad06dc76afd9a6895af7f2_sourced extends Template
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
        yield "<p>Meeting of Mr. Saqif Saeed, Chief Collector, Exports and APMIA representatives including Mr. Muhammad Bilal Khan, Senior Vice Chairman APMIA and convinced him along with his collector export to accept our minimum values for export. After due consultation, they agreed the formula and accepted what we presented it to them. We have requested the A/C customs to issue us the letter of endorsement, so none of our exporter in future is harassed by custom officials. Shabir Memon sahib GD is also completed and special thanks to him who resisted the pressure and remained calm during unnecessary delay.</p>
<p><img alt=\"\" src=\"/user/pages/04.news/meeting-with-mr-saqif-saeed-chief-collector-exports-2/37.jpg\" /></p>
<p><img alt=\"\" src=\"/user/pages/04.news/meeting-with-mr-saqif-saeed-chief-collector-exports-2/36.jpg\" /></p>";
        return; yield;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@Page:/Users/amer/Sites/apmia/user/pages/04.news/meeting-with-mr-saqif-saeed-chief-collector-exports-2";
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
        return new Source("<p>Meeting of Mr. Saqif Saeed, Chief Collector, Exports and APMIA representatives including Mr. Muhammad Bilal Khan, Senior Vice Chairman APMIA and convinced him along with his collector export to accept our minimum values for export. After due consultation, they agreed the formula and accepted what we presented it to them. We have requested the A/C customs to issue us the letter of endorsement, so none of our exporter in future is harassed by custom officials. Shabir Memon sahib GD is also completed and special thanks to him who resisted the pressure and remained calm during unnecessary delay.</p>
<p><img alt=\"\" src=\"/user/pages/04.news/meeting-with-mr-saqif-saeed-chief-collector-exports-2/37.jpg\" /></p>
<p><img alt=\"\" src=\"/user/pages/04.news/meeting-with-mr-saqif-saeed-chief-collector-exports-2/36.jpg\" /></p>", "@Page:/Users/amer/Sites/apmia/user/pages/04.news/meeting-with-mr-saqif-saeed-chief-collector-exports-2", "");
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
