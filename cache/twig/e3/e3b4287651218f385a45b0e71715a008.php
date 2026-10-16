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

/* @Page:/Users/amer/Sites/apmia/user/pages/04.news/meeting-at-lahore-in-expo-center-lahore */
class __TwigTemplate_986ef6616f2fffa28c81bd23947d5804_sourced extends Template
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
        yield "<p>Chairman and Senior Vice Chairman APMIA including executives from Peshawar had a meeting at Lahore in Expo Center, Lahore. Following points were discussed;</p>
<ol>
<li>i) Chairman APMIA told the executives that we should held the meeting for consecutive 7 days, it would be very result oriented.</li>
<li>ii) Rather than relying on government sources, we can contribute mutually and construct a ware house out of country.</li>
</ol>
<p>iii) Improving the mining will help in increasing the export.</p>
<ol>
<li>iv) To discuss and resolve the issues by the local members.</li>
<li>v) APMIA representatives met Mr. Salim Khan Tanoli, CEO of Fakt Exhibitions (Pvt.) Limited and Organizer of Build Expo, Lahore, to promote Stone products in Pakistani market and it was mutually decided that APMIA and Fakt Exhibitions (Pvt.) Limited will work together in coming exhibitions.</li>
</ol>
<p><img alt=\"\" src=\"/user/pages/04.news/meeting-at-lahore-in-expo-center-lahore/27.jpg\" /></p>
<p><img alt=\"\" src=\"/user/pages/04.news/meeting-at-lahore-in-expo-center-lahore/28.jpg\" /></p>
<p><img alt=\"\" src=\"/user/pages/04.news/meeting-at-lahore-in-expo-center-lahore/29.jpg\" /></p>";
        return; yield;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@Page:/Users/amer/Sites/apmia/user/pages/04.news/meeting-at-lahore-in-expo-center-lahore";
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
        return new Source("<p>Chairman and Senior Vice Chairman APMIA including executives from Peshawar had a meeting at Lahore in Expo Center, Lahore. Following points were discussed;</p>
<ol>
<li>i) Chairman APMIA told the executives that we should held the meeting for consecutive 7 days, it would be very result oriented.</li>
<li>ii) Rather than relying on government sources, we can contribute mutually and construct a ware house out of country.</li>
</ol>
<p>iii) Improving the mining will help in increasing the export.</p>
<ol>
<li>iv) To discuss and resolve the issues by the local members.</li>
<li>v) APMIA representatives met Mr. Salim Khan Tanoli, CEO of Fakt Exhibitions (Pvt.) Limited and Organizer of Build Expo, Lahore, to promote Stone products in Pakistani market and it was mutually decided that APMIA and Fakt Exhibitions (Pvt.) Limited will work together in coming exhibitions.</li>
</ol>
<p><img alt=\"\" src=\"/user/pages/04.news/meeting-at-lahore-in-expo-center-lahore/27.jpg\" /></p>
<p><img alt=\"\" src=\"/user/pages/04.news/meeting-at-lahore-in-expo-center-lahore/28.jpg\" /></p>
<p><img alt=\"\" src=\"/user/pages/04.news/meeting-at-lahore-in-expo-center-lahore/29.jpg\" /></p>", "@Page:/Users/amer/Sites/apmia/user/pages/04.news/meeting-at-lahore-in-expo-center-lahore", "");
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
