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

/* @Page:/Users/amer/Sites/apmia/user/pages/02.about */
class __TwigTemplate_30241d0c454a89ff59f39020fd78af7d_sourced extends Template
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
        yield "<p><strong>Established in 1985</strong>, the All Pakistan Marble Industries Association (APMIA) serves as the pivotal link connecting government bodies and industry stakeholders in the dimension stone sector. Recognized as the exclusive registered association by the Directorate General of Trade Organizations (DGTO) under Pakistan\x27s Ministry of Commerce, APMIA proudly represents the entire dimension stone value chain, including marble and granite. This encompassing representation spans crucial areas such as mining, transportation, processing, showrooms, and exports.</p>
<p>With a nearly four-decade legacy, APMIA consistently demonstrates its commitment to addressing industry challenges while actively contributing to sectoral growth. Over the years, APMIA has adeptly navigated intricate matters, including negotiations on tax-related issues like GST, customs, and royalties. In a significant milestone, APMIA played a pivotal role in establishing the Pakistan Stone Development Company (PASDEC) in 2006, championing the advancement of the dimension stone sector.</p>
<p>Beyond its advocacy and regulatory roles, APMIA proactively drives industry progress. It organizes seminars, conducts training programs, and hosts expos that empower stakeholders with knowledge and insights essential for success in the dynamic dimension stone sector. Furthermore, APMIA fosters collaboration with academia and partners with relevant local and international organizations, providing access to cutting-edge research, technology, and global best practices. These initiatives bolster the industry\x27s competitiveness and enduring growth.</p>
<p>As the authoritative voice of the sector, APMIA remains steadfast in its mission to promote collaboration, advocate for industry interests, and facilitate sustainable growth. Its unwavering dedication aligns with Pakistan\x27s economic objectives and development aspirations, positioning APMIA as an indispensable driver of prosperity and success in the dimension stone sector.</p>
<p><img alt=\"\" src=\"/apmia/user/pages/02.about/apmia-pak-m-g-estimate.jpeg\" /></p>
<p><img alt=\"\" src=\"/apmia/user/pages/02.about/apmia-stone-export-history1.jpeg\" /></p>";
        return; yield;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@Page:/Users/amer/Sites/apmia/user/pages/02.about";
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
        return new Source("<p><strong>Established in 1985</strong>, the All Pakistan Marble Industries Association (APMIA) serves as the pivotal link connecting government bodies and industry stakeholders in the dimension stone sector. Recognized as the exclusive registered association by the Directorate General of Trade Organizations (DGTO) under Pakistan\x27s Ministry of Commerce, APMIA proudly represents the entire dimension stone value chain, including marble and granite. This encompassing representation spans crucial areas such as mining, transportation, processing, showrooms, and exports.</p>
<p>With a nearly four-decade legacy, APMIA consistently demonstrates its commitment to addressing industry challenges while actively contributing to sectoral growth. Over the years, APMIA has adeptly navigated intricate matters, including negotiations on tax-related issues like GST, customs, and royalties. In a significant milestone, APMIA played a pivotal role in establishing the Pakistan Stone Development Company (PASDEC) in 2006, championing the advancement of the dimension stone sector.</p>
<p>Beyond its advocacy and regulatory roles, APMIA proactively drives industry progress. It organizes seminars, conducts training programs, and hosts expos that empower stakeholders with knowledge and insights essential for success in the dynamic dimension stone sector. Furthermore, APMIA fosters collaboration with academia and partners with relevant local and international organizations, providing access to cutting-edge research, technology, and global best practices. These initiatives bolster the industry\x27s competitiveness and enduring growth.</p>
<p>As the authoritative voice of the sector, APMIA remains steadfast in its mission to promote collaboration, advocate for industry interests, and facilitate sustainable growth. Its unwavering dedication aligns with Pakistan\x27s economic objectives and development aspirations, positioning APMIA as an indispensable driver of prosperity and success in the dimension stone sector.</p>
<p><img alt=\"\" src=\"/apmia/user/pages/02.about/apmia-pak-m-g-estimate.jpeg\" /></p>
<p><img alt=\"\" src=\"/apmia/user/pages/02.about/apmia-stone-export-history1.jpeg\" /></p>", "@Page:/Users/amer/Sites/apmia/user/pages/02.about", "");
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
