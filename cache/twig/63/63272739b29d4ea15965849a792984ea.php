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

/* @Page:/Users/amer/Sites/apmia/user/pages/04.news/meeting-with-mr-azhar-ali-chaudhary-federal-secretary-of-ministry-of-industries-production-islamabad */
class __TwigTemplate_1192196f5c8decb17c1e8e4689f0226d_sourced extends Template
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
        yield "<p>Meeting was attended by Mian Gulzar Ahmed, Chairman, Muhammad Bilal Khan, Senior Vice Chairman, Atiq Ur Rehman Abbasi, Zonal Vice Chairman, Shabbir Ahmed, Sub Zonal Vice Chairman-APMIA and Our honorable Ex-Federal Minister Mr. Humayun Kurd, Gulzaman Gulgee, Shoaib sultan and other respective members of executive committee with Mr. Azhar Ali Chaudhary, Federal Secretary of Ministry of Industries &amp; Production, Islamabad, we suggested following points;</p>
<p>i) CEO PASDEC must be removed as he is not appointed as per the criteria, secondly he failed to deliver other than creating nuisance for miners and finally his tenure is also completed. Future appointment of CEO should be strictly as per merit and he ought to be from marble sector.</p>
<p>ii) Third party audit of PASDEC’s accounts and its performance.</p>
<p>iii) Rent should be replaced with mortgage and miners can pay installments of that machine rather than giving the rent, it can support the miners very positively.</p>
<p>iv) Secretary told that he will arrange our meeting with the Governor state Bank of Pakistan for machinery finance.</p>
<p>v) Those quarries which are under litigation should be unlocked for the owners. 6- Geo economic reporting before PASDEC gets into another venture.</p>
<p>vi) For skill development best geologists and mining engineers should be invited by PASDEC to improve the skills of our miners.</p>
<p>vii) Extend the benefits of the clause 17 of the 5th scheduled should be extended to all those commercial and dimensional stone miners and industries.</p>
<p><img alt=\"\" src=\"/user/pages/04.news/meeting-with-mr-azhar-ali-chaudhary-federal-secretary-of-ministry-of-industries-production-islamabad/50.jpg\" /></p>";
        return; yield;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@Page:/Users/amer/Sites/apmia/user/pages/04.news/meeting-with-mr-azhar-ali-chaudhary-federal-secretary-of-ministry-of-industries-production-islamabad";
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
        return new Source("<p>Meeting was attended by Mian Gulzar Ahmed, Chairman, Muhammad Bilal Khan, Senior Vice Chairman, Atiq Ur Rehman Abbasi, Zonal Vice Chairman, Shabbir Ahmed, Sub Zonal Vice Chairman-APMIA and Our honorable Ex-Federal Minister Mr. Humayun Kurd, Gulzaman Gulgee, Shoaib sultan and other respective members of executive committee with Mr. Azhar Ali Chaudhary, Federal Secretary of Ministry of Industries &amp; Production, Islamabad, we suggested following points;</p>
<p>i) CEO PASDEC must be removed as he is not appointed as per the criteria, secondly he failed to deliver other than creating nuisance for miners and finally his tenure is also completed. Future appointment of CEO should be strictly as per merit and he ought to be from marble sector.</p>
<p>ii) Third party audit of PASDEC’s accounts and its performance.</p>
<p>iii) Rent should be replaced with mortgage and miners can pay installments of that machine rather than giving the rent, it can support the miners very positively.</p>
<p>iv) Secretary told that he will arrange our meeting with the Governor state Bank of Pakistan for machinery finance.</p>
<p>v) Those quarries which are under litigation should be unlocked for the owners. 6- Geo economic reporting before PASDEC gets into another venture.</p>
<p>vi) For skill development best geologists and mining engineers should be invited by PASDEC to improve the skills of our miners.</p>
<p>vii) Extend the benefits of the clause 17 of the 5th scheduled should be extended to all those commercial and dimensional stone miners and industries.</p>
<p><img alt=\"\" src=\"/user/pages/04.news/meeting-with-mr-azhar-ali-chaudhary-federal-secretary-of-ministry-of-industries-production-islamabad/50.jpg\" /></p>", "@Page:/Users/amer/Sites/apmia/user/pages/04.news/meeting-with-mr-azhar-ali-chaudhary-federal-secretary-of-ministry-of-industries-production-islamabad", "");
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
