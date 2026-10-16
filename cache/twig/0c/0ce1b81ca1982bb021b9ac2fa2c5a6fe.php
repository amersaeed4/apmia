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

/* @Page:/Users/amer/Sites/apmia/user/pages/04.news/meeting-with-local-mine-owners */
class __TwigTemplate_c1f966e14170a1fda17567cc082562bc_sourced extends Template
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
        yield "<p>Mr. Sheikh Iftikhar Rashid, Vice Chairman APMIA visited Shabqadar, Charsadda, KPK and had a meeting with local mine owners including Saeed Noor Hashim, Haibat Khan, Haji Ilyas, Haji Darbar and Sheikh Shahzad.</p>
<p>In this meeting following issues were highlighted,</p>
<ol>
<li>Local contractors are facing some issues regarding mining, the protection of the local contractors is a major concern.</li>
<li>Instead of using generators for mining, government should provide them the electricity to the mines which are near the grid station that will help in reducing the rates of marble.</li>
<li>Marble mining is divided into three categories according to the quality i.e., A, B &amp; C and government is not providing the required explosives to the mine owners having ‘C’ category, so they have to purchase the explosives on very high rates which is effecting their production.</li>
<li>Mine owners demanded are very much interested in mechanize mining and they have demanded that APMIA should play a role to provide machinery on installments without interest, so they can improve mining and reduce the percentage of wastage.</li>
<li>Unpaved roads are a major problem, so carpeted roads should be made to avoid the inconvenience for the transportation of the product.</li>
</ol>
<p>Mr. Sheikh Iftikhar Rashid told all the mine owners that APMIA is already working to resolve these issues on priority basis on every forum and he ensured the mine owners that with the collaboration of all the senior members these problems will be solved.</p>
<p><img alt=\"\" src=\"/user/pages/04.news/meeting-with-local-mine-owners/33.jpg\" /></p>";
        return; yield;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@Page:/Users/amer/Sites/apmia/user/pages/04.news/meeting-with-local-mine-owners";
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
        return new Source("<p>Mr. Sheikh Iftikhar Rashid, Vice Chairman APMIA visited Shabqadar, Charsadda, KPK and had a meeting with local mine owners including Saeed Noor Hashim, Haibat Khan, Haji Ilyas, Haji Darbar and Sheikh Shahzad.</p>
<p>In this meeting following issues were highlighted,</p>
<ol>
<li>Local contractors are facing some issues regarding mining, the protection of the local contractors is a major concern.</li>
<li>Instead of using generators for mining, government should provide them the electricity to the mines which are near the grid station that will help in reducing the rates of marble.</li>
<li>Marble mining is divided into three categories according to the quality i.e., A, B &amp; C and government is not providing the required explosives to the mine owners having ‘C’ category, so they have to purchase the explosives on very high rates which is effecting their production.</li>
<li>Mine owners demanded are very much interested in mechanize mining and they have demanded that APMIA should play a role to provide machinery on installments without interest, so they can improve mining and reduce the percentage of wastage.</li>
<li>Unpaved roads are a major problem, so carpeted roads should be made to avoid the inconvenience for the transportation of the product.</li>
</ol>
<p>Mr. Sheikh Iftikhar Rashid told all the mine owners that APMIA is already working to resolve these issues on priority basis on every forum and he ensured the mine owners that with the collaboration of all the senior members these problems will be solved.</p>
<p><img alt=\"\" src=\"/user/pages/04.news/meeting-with-local-mine-owners/33.jpg\" /></p>", "@Page:/Users/amer/Sites/apmia/user/pages/04.news/meeting-with-local-mine-owners", "");
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
