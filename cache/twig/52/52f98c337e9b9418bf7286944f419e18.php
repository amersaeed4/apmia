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

/* @Page:/Users/amer/Sites/apmia/user/pages/04.news/chairman-asghar-khan-utmankhel-along-with-senior-vice-chairman-shoaib-sultan-of-the-all-pakistan-marble-industries-association-apmia-participated-in-the-pakistan-development-summit */
class __TwigTemplate_9844d77402d8848df9bacc1f5a5e315f_sourced extends Template
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
        yield "<p>Chairman Asghar Khan Utmankhel, along with Senior Vice Chairman Shoaib Sultan of the All Pakistan Marble Industries Association (APMIA), participated in the Pakistan Development Summit: 5Es Framework – Roadmap to a Trillion Dollar Economy by 2035 in Islamabad. Federal Minister for Planning, Development, and Reforms, Mr. Ahsan Iqbal, emphasized that while Pakistan is rich in resources, development is impossible without peace and political stability.</p>
<p>After the Minister’s keynote address, both the office bearers actively contributed to the Focus Group Discussion (FGD) on Exports &amp; Productivity, sharing insights on the Marble &amp; Granite sector’s challenges and opportunities.</p>
<p>The APMIA office bearers also presented the new sector development strategy to officials from the Ministry of Planning, Development, and Special Initiatives, aiming to advance the industry.</p>
<p>Chairman APMIA requested a detailed meeting with the Ministry to further discuss the new strategy and explore collaborative efforts to fully realize the potential of the Marble &amp; Granite sector.</p>";
        return; yield;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@Page:/Users/amer/Sites/apmia/user/pages/04.news/chairman-asghar-khan-utmankhel-along-with-senior-vice-chairman-shoaib-sultan-of-the-all-pakistan-marble-industries-association-apmia-participated-in-the-pakistan-development-summit";
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
        return new Source("<p>Chairman Asghar Khan Utmankhel, along with Senior Vice Chairman Shoaib Sultan of the All Pakistan Marble Industries Association (APMIA), participated in the Pakistan Development Summit: 5Es Framework – Roadmap to a Trillion Dollar Economy by 2035 in Islamabad. Federal Minister for Planning, Development, and Reforms, Mr. Ahsan Iqbal, emphasized that while Pakistan is rich in resources, development is impossible without peace and political stability.</p>
<p>After the Minister’s keynote address, both the office bearers actively contributed to the Focus Group Discussion (FGD) on Exports &amp; Productivity, sharing insights on the Marble &amp; Granite sector’s challenges and opportunities.</p>
<p>The APMIA office bearers also presented the new sector development strategy to officials from the Ministry of Planning, Development, and Special Initiatives, aiming to advance the industry.</p>
<p>Chairman APMIA requested a detailed meeting with the Ministry to further discuss the new strategy and explore collaborative efforts to fully realize the potential of the Marble &amp; Granite sector.</p>", "@Page:/Users/amer/Sites/apmia/user/pages/04.news/chairman-asghar-khan-utmankhel-along-with-senior-vice-chairman-shoaib-sultan-of-the-all-pakistan-marble-industries-association-apmia-participated-in-the-pakistan-development-summit", "");
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
