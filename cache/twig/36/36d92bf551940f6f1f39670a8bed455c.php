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

/* @Page:/Users/amer/Sites/apmia/user/pages/04.news/meeting-with-the-organizers-of-14th-stone-fair-asia-international-exhibition-in-karachi */
class __TwigTemplate_a5658b1b2d70125370ff70fc73431d5c_sourced extends Template
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
        yield "<p>APMIA representatives had a meeting with the organizers of 14th Stone Fair Asia International Exhibition in Karachi, which will be held from 15 to 17 December, 2018. They have negotiated the rates of stalls to make it more economical for APMIA’s members and it was decided in the meeting that the members of APMIA will get 3 x 3 stall for Rs. 25,000/- (all inclusive of taxes), otherwise the rates are very high for stalls.</p>
<p><img alt=\"\" src=\"/user/pages/04.news/meeting-with-the-organizers-of-14th-stone-fair-asia-international-exhibition-in-karachi/32.jpg\" /></p>";
        return; yield;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@Page:/Users/amer/Sites/apmia/user/pages/04.news/meeting-with-the-organizers-of-14th-stone-fair-asia-international-exhibition-in-karachi";
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
        return new Source("<p>APMIA representatives had a meeting with the organizers of 14th Stone Fair Asia International Exhibition in Karachi, which will be held from 15 to 17 December, 2018. They have negotiated the rates of stalls to make it more economical for APMIA’s members and it was decided in the meeting that the members of APMIA will get 3 x 3 stall for Rs. 25,000/- (all inclusive of taxes), otherwise the rates are very high for stalls.</p>
<p><img alt=\"\" src=\"/user/pages/04.news/meeting-with-the-organizers-of-14th-stone-fair-asia-international-exhibition-in-karachi/32.jpg\" /></p>", "@Page:/Users/amer/Sites/apmia/user/pages/04.news/meeting-with-the-organizers-of-14th-stone-fair-asia-international-exhibition-in-karachi", "");
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
