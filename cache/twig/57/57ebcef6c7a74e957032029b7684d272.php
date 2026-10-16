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

/* @Page:/Users/amer/Sites/apmia/user/pages/04.news/reducing-the-prices-of-imported-blades-and-segments */
class __TwigTemplate_8c1a0d81a9551c1fa1ed7a195047a29a_sourced extends Template
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
        yield "<p>By the grace of Allah and through the efforts of Chairman APMIA, Muhammad Bilal Khan, and his team, a significant milestone has been achieved in reducing the prices of imported blades and segments. This is a very important and positive development for our sector.</p>
<p>We hope this will encourage our suppliers of segments and blades to lower their prices, benefiting our dimension stone processors</p>
<p><img alt=\"\" src=\"/user/pages/04.news/reducing-the-prices-of-imported-blades-and-segments/Picture3.png\" /></p>
<p><img alt=\"\" src=\"/user/pages/04.news/reducing-the-prices-of-imported-blades-and-segments/Picture4.png\" /></p>
<p><img alt=\"\" src=\"/user/pages/04.news/reducing-the-prices-of-imported-blades-and-segments/Picture5.png\" /></p>";
        return; yield;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@Page:/Users/amer/Sites/apmia/user/pages/04.news/reducing-the-prices-of-imported-blades-and-segments";
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
        return new Source("<p>By the grace of Allah and through the efforts of Chairman APMIA, Muhammad Bilal Khan, and his team, a significant milestone has been achieved in reducing the prices of imported blades and segments. This is a very important and positive development for our sector.</p>
<p>We hope this will encourage our suppliers of segments and blades to lower their prices, benefiting our dimension stone processors</p>
<p><img alt=\"\" src=\"/user/pages/04.news/reducing-the-prices-of-imported-blades-and-segments/Picture3.png\" /></p>
<p><img alt=\"\" src=\"/user/pages/04.news/reducing-the-prices-of-imported-blades-and-segments/Picture4.png\" /></p>
<p><img alt=\"\" src=\"/user/pages/04.news/reducing-the-prices-of-imported-blades-and-segments/Picture5.png\" /></p>", "@Page:/Users/amer/Sites/apmia/user/pages/04.news/reducing-the-prices-of-imported-blades-and-segments", "");
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
