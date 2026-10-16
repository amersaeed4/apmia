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

/* @Page:/Users/amer/Sites/apmia/user/pages/04.news/on-world-msme-day */
class __TwigTemplate_a4e99ad312200b2cf7b41b0b9b324f47_sourced extends Template
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
        yield "<p>On World MSME Day <strong>28 June 2024</strong>, SMEDA celebrated the achievements of Pakistan’s MSMEs and announced a 10-year cluster-based development plan for pharmaceuticals, fruits and vegetables, marble and granite, seafood, and e-bikes. This initiative aims to create new opportunities for enterprise and SME development in Pakistan. Furthermore, SMEDA CEO Mr. Aman Rana shared SMEDA’s vision to empower SMEs, increasing their number from 5.2 million to 7.2 million, and increasing their contribution to GDP by 40%. % to 44%, and exports increased by \$3 billion</p>
<p>Moreover, Mr. Rashid Aman, Head of SMEDA-KP approached APMIA to focus on marble and granite cluster-based studies with key stakeholders. Several meetings were held and a comprehensive presentation was given on the development of the marble and granite sector in KP. The presentation also suggested government development work over the next ten years to take the sector on a growth path and increase its contribution to Pakistan’s economy and exports</p>
<p>SMEDA Khyber Pakhtunkhwa chose marble and granite sector as focus sector. Additionally, APMIA aims to expand the cluster-based study to a sector-wide study including other provinces</p>
<p>Due to a surprise meeting with Chief Minister KP regarding royalty matters, Chairman APMIA could not attend the event. Instead, the APMIA team led by former Chairman Mr. Muhammad Shakeel Munir participated and received the shield from SMEDA in honor of Chairman APMIA, Mr. Asghar Khan Utmankhel</p>";
        return; yield;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@Page:/Users/amer/Sites/apmia/user/pages/04.news/on-world-msme-day";
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
        return new Source("<p>On World MSME Day <strong>28 June 2024</strong>, SMEDA celebrated the achievements of Pakistan’s MSMEs and announced a 10-year cluster-based development plan for pharmaceuticals, fruits and vegetables, marble and granite, seafood, and e-bikes. This initiative aims to create new opportunities for enterprise and SME development in Pakistan. Furthermore, SMEDA CEO Mr. Aman Rana shared SMEDA’s vision to empower SMEs, increasing their number from 5.2 million to 7.2 million, and increasing their contribution to GDP by 40%. % to 44%, and exports increased by \$3 billion</p>
<p>Moreover, Mr. Rashid Aman, Head of SMEDA-KP approached APMIA to focus on marble and granite cluster-based studies with key stakeholders. Several meetings were held and a comprehensive presentation was given on the development of the marble and granite sector in KP. The presentation also suggested government development work over the next ten years to take the sector on a growth path and increase its contribution to Pakistan’s economy and exports</p>
<p>SMEDA Khyber Pakhtunkhwa chose marble and granite sector as focus sector. Additionally, APMIA aims to expand the cluster-based study to a sector-wide study including other provinces</p>
<p>Due to a surprise meeting with Chief Minister KP regarding royalty matters, Chairman APMIA could not attend the event. Instead, the APMIA team led by former Chairman Mr. Muhammad Shakeel Munir participated and received the shield from SMEDA in honor of Chairman APMIA, Mr. Asghar Khan Utmankhel</p>", "@Page:/Users/amer/Sites/apmia/user/pages/04.news/on-world-msme-day", "");
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
