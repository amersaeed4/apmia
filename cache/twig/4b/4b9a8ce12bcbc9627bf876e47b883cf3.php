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

/* @Page:/Users/amer/Sites/apmia/user/pages/04.news/cec-meeting-2 */
class __TwigTemplate_c55aefc6a903ddfd4c3dcb0af43b71b5_sourced extends Template
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
        yield "<p>Meeting of Executive Committee Members at Karachi under the Chairmanship of Mr. Muhammad Bilal Khan, following points were discussed,</p>
<ol>
<li>a) Electricity issues, Load shedding, PMT and poles self purchases by the industries and rates are fixed per factory without checking the electric meters.</li>
<li>b) Arrangement for land near Manghopir for the disposal of Sludge / Mud</li>
<li>c) The road condition is very worse</li>
<li>d) Law and Order and security issues of the industrialists in Karachi</li>
<li>e) Issues related to export were discussed regarding valuation and state bank.</li>
<li>f) Financial issues and problems related to collection of membership fee were also discussed.</li>
</ol>
<p>Different proposals given by the executives regarding the solutions and in this regards to improve the membership of APMIA, the creation of Sub Zonal Office at Baraboard, Karachi were also suggested. All executives collectively committed to work together as a team for the eradication of standing issues.</p>
<p><img alt=\"\" src=\"/user/pages/04.news/cec-meeting-2/13.jpg\" /></p>";
        return; yield;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@Page:/Users/amer/Sites/apmia/user/pages/04.news/cec-meeting-2";
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
        return new Source("<p>Meeting of Executive Committee Members at Karachi under the Chairmanship of Mr. Muhammad Bilal Khan, following points were discussed,</p>
<ol>
<li>a) Electricity issues, Load shedding, PMT and poles self purchases by the industries and rates are fixed per factory without checking the electric meters.</li>
<li>b) Arrangement for land near Manghopir for the disposal of Sludge / Mud</li>
<li>c) The road condition is very worse</li>
<li>d) Law and Order and security issues of the industrialists in Karachi</li>
<li>e) Issues related to export were discussed regarding valuation and state bank.</li>
<li>f) Financial issues and problems related to collection of membership fee were also discussed.</li>
</ol>
<p>Different proposals given by the executives regarding the solutions and in this regards to improve the membership of APMIA, the creation of Sub Zonal Office at Baraboard, Karachi were also suggested. All executives collectively committed to work together as a team for the eradication of standing issues.</p>
<p><img alt=\"\" src=\"/user/pages/04.news/cec-meeting-2/13.jpg\" /></p>", "@Page:/Users/amer/Sites/apmia/user/pages/04.news/cec-meeting-2", "");
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
