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

/* @Page:/Users/amer/Sites/apmia/user/pages/04.news/successful-2nd-seminar-on-marble-granite-export-awareness-in-mohmand-economic-zone */
class __TwigTemplate_d4c65bf04ba92c022b1abc2e96bb5662_sourced extends Template
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
        yield "<p>A thriving seminar took place today at the Mohmand Economic Zone, marking the second event in a series focused on Marble &amp; Granite Export Awareness. Distinguished speakers included:</p>
<p>Mr. Asghar Khan Utmankhel, Chairman of the All Pakistan Marble Industries Association<br />
Mr. Shakir Ullah, CEC Member of the All Pakistan Marble Industries Association<br />
Mr. Omar Hussan Bajwa, Assistant Director, Trade Development Authority of Pakistan (TDAP)<br />
Mr. Muhammad Bilal Khan, CEO of Mohmand Dada Minerals<br />
Mr. Mazhar Abbas Khan, CEO of Samawat International Corporation</p>
<p>Guest Speaker Engr. Said Muhammad, Vice Chairman of the Khyber Pakhtunkhwa Board of Investment &amp; Trade (KPBOIT), added valuable insights to the seminar.</p>
<p>In recognition of their valuable contributions, shields and certificates were presented to the participants.</p>
<p>This seminar is just the beginning; the initiative will not stop here. Plans are already in motion to take this awareness and collaboration to other potential clusters in the near future</p>";
        return; yield;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@Page:/Users/amer/Sites/apmia/user/pages/04.news/successful-2nd-seminar-on-marble-granite-export-awareness-in-mohmand-economic-zone";
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
        return new Source("<p>A thriving seminar took place today at the Mohmand Economic Zone, marking the second event in a series focused on Marble &amp; Granite Export Awareness. Distinguished speakers included:</p>
<p>Mr. Asghar Khan Utmankhel, Chairman of the All Pakistan Marble Industries Association<br />
Mr. Shakir Ullah, CEC Member of the All Pakistan Marble Industries Association<br />
Mr. Omar Hussan Bajwa, Assistant Director, Trade Development Authority of Pakistan (TDAP)<br />
Mr. Muhammad Bilal Khan, CEO of Mohmand Dada Minerals<br />
Mr. Mazhar Abbas Khan, CEO of Samawat International Corporation</p>
<p>Guest Speaker Engr. Said Muhammad, Vice Chairman of the Khyber Pakhtunkhwa Board of Investment &amp; Trade (KPBOIT), added valuable insights to the seminar.</p>
<p>In recognition of their valuable contributions, shields and certificates were presented to the participants.</p>
<p>This seminar is just the beginning; the initiative will not stop here. Plans are already in motion to take this awareness and collaboration to other potential clusters in the near future</p>", "@Page:/Users/amer/Sites/apmia/user/pages/04.news/successful-2nd-seminar-on-marble-granite-export-awareness-in-mohmand-economic-zone", "");
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
