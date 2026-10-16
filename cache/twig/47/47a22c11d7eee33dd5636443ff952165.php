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

/* @Page:/Users/amer/Sites/apmia/user/pages/04.news/meeting-with-additional-secretary-industries-production */
class __TwigTemplate_85aa162ef087d40e495d857b66197483_sourced extends Template
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
        yield "<p>Meeting held by APMIA representatives including Chairman, Mian Gulzar Ahmad, Zonal Vice Chairman (North), Muhammad Afzal Shahid and Shoaib Sultan with Additional Secretary Industries &amp; Production. Following achievements were made in the meeting;</p>
<p>i) Issue of Mr. Humayun Kurd regarding his machinery has been resolved by Ministry of Industries &amp; Production. The written order from Secretary Industries has been sent to PASDEC to release his machinery.</p>
<p>ii) Secretary Industries also approved to remove the private sector nominee from the issuance of exemption certificate, Chairman APMIA will only verify and attest the exemption documents. They will intimate PASDEC as well.</p>
<p>iii) Case of Mr. Shoaib Sultan from Popular Marble regarding PASDEC’s violation of Rental agreement has been forwarded to the Secretary and will be resolved within the 15 days.</p>
<p><img alt=\"\" src=\"/user/pages/04.news/meeting-with-additional-secretary-industries-production/53.jpg\" /></p>";
        return; yield;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@Page:/Users/amer/Sites/apmia/user/pages/04.news/meeting-with-additional-secretary-industries-production";
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
        return new Source("<p>Meeting held by APMIA representatives including Chairman, Mian Gulzar Ahmad, Zonal Vice Chairman (North), Muhammad Afzal Shahid and Shoaib Sultan with Additional Secretary Industries &amp; Production. Following achievements were made in the meeting;</p>
<p>i) Issue of Mr. Humayun Kurd regarding his machinery has been resolved by Ministry of Industries &amp; Production. The written order from Secretary Industries has been sent to PASDEC to release his machinery.</p>
<p>ii) Secretary Industries also approved to remove the private sector nominee from the issuance of exemption certificate, Chairman APMIA will only verify and attest the exemption documents. They will intimate PASDEC as well.</p>
<p>iii) Case of Mr. Shoaib Sultan from Popular Marble regarding PASDEC’s violation of Rental agreement has been forwarded to the Secretary and will be resolved within the 15 days.</p>
<p><img alt=\"\" src=\"/user/pages/04.news/meeting-with-additional-secretary-industries-production/53.jpg\" /></p>", "@Page:/Users/amer/Sites/apmia/user/pages/04.news/meeting-with-additional-secretary-industries-production", "");
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
