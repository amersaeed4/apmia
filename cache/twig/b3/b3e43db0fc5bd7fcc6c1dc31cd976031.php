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

/* @Page:/Users/amer/Sites/apmia/user/pages/04.news/dimension-stone-summit-uniting-for-knowledge-based-economy-at-pcsir-peshawar-in-collaboration-with-apmia */
class __TwigTemplate_c0b06936d9b41bfbc40e75fba923c929_sourced extends Template
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
        yield "<p>A one day Dimension Stone Summit titled “Uniting for Knowledge-Based Economy” was organized by the Pakistan Council of Scientific and Industrial Research (PCSIR), Peshawar in collaboration with All Pakistan Marble Industries Association (APMIA) on June 11, 2024 at PCSIR, Peshawar.</p>
<p>The event was graced by the presence of the Minister of Food for Khyber Pakhtunkhwa, Mr. Muhammad Zahoor Shah, as the chief guest, along with distinguished experts Professor Dr. Yaseen Iqbal Yousafzai, Chairman APMIA, Mr. Asghar Khan Utmankhel, Engineer Muhammad Amir Yousafzai, and Mr. Ashfaq Afridi. These eminent participants shared their valuable insights and experiences with the attendees to promote research, development, and innovation in Pakistan’s marble and granite sector. The aim is to steer the marble and granite sector towards a knowledge-based, sustainable business model, and to conduct mining and processing according to international standards.</p>
<p>The seminar concluded with the signing of a Memorandum of Understanding (MoU) between PCSIR and APMIA, reinforcing their commitment to collaborative efforts for the development and advancement of the marble and granite sector. Additionally, according to the MoU, registered members of APMIA will be provided with preferential facilities and will receive a 10% discount on mineral testing charges.</p>";
        return; yield;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@Page:/Users/amer/Sites/apmia/user/pages/04.news/dimension-stone-summit-uniting-for-knowledge-based-economy-at-pcsir-peshawar-in-collaboration-with-apmia";
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
        return new Source("<p>A one day Dimension Stone Summit titled “Uniting for Knowledge-Based Economy” was organized by the Pakistan Council of Scientific and Industrial Research (PCSIR), Peshawar in collaboration with All Pakistan Marble Industries Association (APMIA) on June 11, 2024 at PCSIR, Peshawar.</p>
<p>The event was graced by the presence of the Minister of Food for Khyber Pakhtunkhwa, Mr. Muhammad Zahoor Shah, as the chief guest, along with distinguished experts Professor Dr. Yaseen Iqbal Yousafzai, Chairman APMIA, Mr. Asghar Khan Utmankhel, Engineer Muhammad Amir Yousafzai, and Mr. Ashfaq Afridi. These eminent participants shared their valuable insights and experiences with the attendees to promote research, development, and innovation in Pakistan’s marble and granite sector. The aim is to steer the marble and granite sector towards a knowledge-based, sustainable business model, and to conduct mining and processing according to international standards.</p>
<p>The seminar concluded with the signing of a Memorandum of Understanding (MoU) between PCSIR and APMIA, reinforcing their commitment to collaborative efforts for the development and advancement of the marble and granite sector. Additionally, according to the MoU, registered members of APMIA will be provided with preferential facilities and will receive a 10% discount on mineral testing charges.</p>", "@Page:/Users/amer/Sites/apmia/user/pages/04.news/dimension-stone-summit-uniting-for-knowledge-based-economy-at-pcsir-peshawar-in-collaboration-with-apmia", "");
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
