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

/* @Page:/Users/amer/Sites/apmia/user/pages/04.news/meeting-of-chairman-apmia */
class __TwigTemplate_0baa9c1f22031cb4452d91e11526cb30_sourced extends Template
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
        yield "<p>A Meeting of Chairman APMIA, Mian Gulzar Ahmed including Ex-Federal Minister Mr. Humayun Kurd, Mr. Gul Zaman Shahwani and Mr. Shoaib Sultan with Secretary Industries &amp; Production, Mr. Azhar Ali Chaudhary.</p>
<p>The points of the meeting are as follows,</p>
<p>i) Secretary Industries instructed CEO PASDEC to visit the mine of Mr. Humayun Kurd in Balochistan and officially mention the reason of the refusal of his exemption because without visiting the site, there is no logical reason to reject the exemption.</p>
<p>ii) He mentioned that PASDEC is a public limited company, regulatory tasks should not be handled by PASDEC.</p>
<p>iii) Secretary Industries further told Chairman APMIA that a framework will be made that CEO PASDEC should be from the marble sector in order to enhance this industry.</p>
<p><img alt=\"\" src=\"/user/pages/04.news/meeting-of-chairman-apmia/52.jpg\" /></p>";
        return; yield;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@Page:/Users/amer/Sites/apmia/user/pages/04.news/meeting-of-chairman-apmia";
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
        return new Source("<p>A Meeting of Chairman APMIA, Mian Gulzar Ahmed including Ex-Federal Minister Mr. Humayun Kurd, Mr. Gul Zaman Shahwani and Mr. Shoaib Sultan with Secretary Industries &amp; Production, Mr. Azhar Ali Chaudhary.</p>
<p>The points of the meeting are as follows,</p>
<p>i) Secretary Industries instructed CEO PASDEC to visit the mine of Mr. Humayun Kurd in Balochistan and officially mention the reason of the refusal of his exemption because without visiting the site, there is no logical reason to reject the exemption.</p>
<p>ii) He mentioned that PASDEC is a public limited company, regulatory tasks should not be handled by PASDEC.</p>
<p>iii) Secretary Industries further told Chairman APMIA that a framework will be made that CEO PASDEC should be from the marble sector in order to enhance this industry.</p>
<p><img alt=\"\" src=\"/user/pages/04.news/meeting-of-chairman-apmia/52.jpg\" /></p>", "@Page:/Users/amer/Sites/apmia/user/pages/04.news/meeting-of-chairman-apmia", "");
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
