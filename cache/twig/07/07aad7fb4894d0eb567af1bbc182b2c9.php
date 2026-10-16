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

/* @Page:/Users/amer/Sites/apmia/user/pages/04.news/meeting-with-the-honorable-provincial-minister-of-sindh */
class __TwigTemplate_d8da99fa0b7482c72c26ba2ccc226067_sourced extends Template
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
        yield "<p>Meeting with the Honorable Provincial Minister of Sindh for Local Government, Public Health Engineering and Rural Development, Mr. Saeed Ghani and APMIA representatives under the chairmanship of Mr. Muhammad Bilal Khan, Senior Vice chairman including Executive Committee Members APMIA, Mr. Azeem Chughtai, Mr. Mustafa Naseeb, Mr. Sardar Nazir, Mr. Noman sultan, Mr. Haji Iqbal and Syed Faraz, Office Secretary APMIA (Southern zone).</p>
<p>Following issues were to discussed in the meeting which our marble industry is facing,</p>
<p>i) Storage of slugs.<br />
ii) Sanitation.<br />
iii) Water supply for industry.<br />
iv) Water supply for human consumption.<br />
v) Enforce DMC services, maintains &amp; improves infrastructure.<br />
vi) Trade license fee (Reduce).<br />
vii) Environmental issues.<br />
viii) Law and order.</p>
<p><img alt=\"\" src=\"/user/pages/04.news/meeting-with-the-honorable-provincial-minister-of-sindh/35.jpg\" /></p>";
        return; yield;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@Page:/Users/amer/Sites/apmia/user/pages/04.news/meeting-with-the-honorable-provincial-minister-of-sindh";
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
        return new Source("<p>Meeting with the Honorable Provincial Minister of Sindh for Local Government, Public Health Engineering and Rural Development, Mr. Saeed Ghani and APMIA representatives under the chairmanship of Mr. Muhammad Bilal Khan, Senior Vice chairman including Executive Committee Members APMIA, Mr. Azeem Chughtai, Mr. Mustafa Naseeb, Mr. Sardar Nazir, Mr. Noman sultan, Mr. Haji Iqbal and Syed Faraz, Office Secretary APMIA (Southern zone).</p>
<p>Following issues were to discussed in the meeting which our marble industry is facing,</p>
<p>i) Storage of slugs.<br />
ii) Sanitation.<br />
iii) Water supply for industry.<br />
iv) Water supply for human consumption.<br />
v) Enforce DMC services, maintains &amp; improves infrastructure.<br />
vi) Trade license fee (Reduce).<br />
vii) Environmental issues.<br />
viii) Law and order.</p>
<p><img alt=\"\" src=\"/user/pages/04.news/meeting-with-the-honorable-provincial-minister-of-sindh/35.jpg\" /></p>", "@Page:/Users/amer/Sites/apmia/user/pages/04.news/meeting-with-the-honorable-provincial-minister-of-sindh", "");
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
