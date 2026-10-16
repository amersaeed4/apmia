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

/* @Page:/Users/amer/Sites/apmia/user/pages/04.news/apmia-met-representatives-of-sbp-and-bank-al-habib-in-karachi-regarding-various-issues */
class __TwigTemplate_83ca8e48f28b0629c84512e704d7552c_sourced extends Template
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
        yield "<p>A delegation of our APMIA met representatives of SBP and bank Al Habib in Karachi regarding various issues. APMIA team raised following issues;</p>
<p>i) 5th mode of payment where credit time is given to exporters, to our utmost surprise SBP had already started it and they entertain those who have good track record. So those who want to send their export cargo without engaging banks, they can send through agreement which will be registered with the concerned bank.</p>
<p>ii) Conversion rebate; once remittance received there is always a gap between interbank and open market to bridge the gap, we requested SBP to issue us differential amount rebate. They didn’t agree to it, but requested us to submit the proposal for further approval.</p>
<p>iii) Our mining sector is out of negative list banks have been informed to provide leasing facilities to the dimensional stone industry. Islamic banking has also been started and musharika and mudaribaa is there for the clients.</p>
<p>iv) There is a finance committee and we need to send names for it who will work on behalf of our association. Our association will be informed through official letters from now onward.</p>
<p>v) Workshops will be arranged for awareness regarding new SBP rules and it is clearly informed if any bank is not complying send us the written complaint and we will ensure 100% compliance.</p>
<p><img alt=\"\" src=\"/user/pages/04.news/apmia-met-representatives-of-sbp-and-bank-al-habib-in-karachi-regarding-various-issues/42.jpg\" /></p>";
        return; yield;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@Page:/Users/amer/Sites/apmia/user/pages/04.news/apmia-met-representatives-of-sbp-and-bank-al-habib-in-karachi-regarding-various-issues";
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
        return new Source("<p>A delegation of our APMIA met representatives of SBP and bank Al Habib in Karachi regarding various issues. APMIA team raised following issues;</p>
<p>i) 5th mode of payment where credit time is given to exporters, to our utmost surprise SBP had already started it and they entertain those who have good track record. So those who want to send their export cargo without engaging banks, they can send through agreement which will be registered with the concerned bank.</p>
<p>ii) Conversion rebate; once remittance received there is always a gap between interbank and open market to bridge the gap, we requested SBP to issue us differential amount rebate. They didn’t agree to it, but requested us to submit the proposal for further approval.</p>
<p>iii) Our mining sector is out of negative list banks have been informed to provide leasing facilities to the dimensional stone industry. Islamic banking has also been started and musharika and mudaribaa is there for the clients.</p>
<p>iv) There is a finance committee and we need to send names for it who will work on behalf of our association. Our association will be informed through official letters from now onward.</p>
<p>v) Workshops will be arranged for awareness regarding new SBP rules and it is clearly informed if any bank is not complying send us the written complaint and we will ensure 100% compliance.</p>
<p><img alt=\"\" src=\"/user/pages/04.news/apmia-met-representatives-of-sbp-and-bank-al-habib-in-karachi-regarding-various-issues/42.jpg\" /></p>", "@Page:/Users/amer/Sites/apmia/user/pages/04.news/apmia-met-representatives-of-sbp-and-bank-al-habib-in-karachi-regarding-various-issues", "");
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
