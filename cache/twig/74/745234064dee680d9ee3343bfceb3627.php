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

/* @Page:/Users/amer/Sites/apmia/user/pages/04.news/a-meeting-at-directorate-general-of-mines-minerals-kpk */
class __TwigTemplate_60d7cc70066483d13606b69639f0b536_sourced extends Template
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
        yield "<p>A meeting was held at Directorate General of Mines &amp; Minerals, KPK between Mr. Muhammd Bilal Khan, Senior Vice Chairman APMIA and Mr. Saleem Mughal, Chairman Founder Group APMIA with DG Mines and Minerals Mr. Muntazir Khan in Peshawar, KPK. Theytook the initiative and tried to bridge the gap between KP mineral department and other group. Numerous pending leases will granted and issues which were raised at civil courts from both ends will be resolved through our good offices. Our first round of meeting was very promising with DG mines and his team and he pledged to resolve these matters soon. DG Mines &amp; Minerals, KPK also promised to start a marathon of mining-committee in order to either grant or reject 5000 mining related long pending cases. Other group promised to join us and our APMIA forum. Indeed it will be a big achievement on behalf of APMIA if we conclude this deal between the two opponent groups.</p>
<p><img alt=\"\" src=\"/user/pages/04.news/a-meeting-at-directorate-general-of-mines-minerals-kpk/apmiaa.png\" /></p>";
        return; yield;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@Page:/Users/amer/Sites/apmia/user/pages/04.news/a-meeting-at-directorate-general-of-mines-minerals-kpk";
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
        return new Source("<p>A meeting was held at Directorate General of Mines &amp; Minerals, KPK between Mr. Muhammd Bilal Khan, Senior Vice Chairman APMIA and Mr. Saleem Mughal, Chairman Founder Group APMIA with DG Mines and Minerals Mr. Muntazir Khan in Peshawar, KPK. Theytook the initiative and tried to bridge the gap between KP mineral department and other group. Numerous pending leases will granted and issues which were raised at civil courts from both ends will be resolved through our good offices. Our first round of meeting was very promising with DG mines and his team and he pledged to resolve these matters soon. DG Mines &amp; Minerals, KPK also promised to start a marathon of mining-committee in order to either grant or reject 5000 mining related long pending cases. Other group promised to join us and our APMIA forum. Indeed it will be a big achievement on behalf of APMIA if we conclude this deal between the two opponent groups.</p>
<p><img alt=\"\" src=\"/user/pages/04.news/a-meeting-at-directorate-general-of-mines-minerals-kpk/apmiaa.png\" /></p>", "@Page:/Users/amer/Sites/apmia/user/pages/04.news/a-meeting-at-directorate-general-of-mines-minerals-kpk", "");
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
