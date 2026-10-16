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

/* @Page:/Users/amer/Sites/apmia/user/pages/04.news/delegation-from-apmia-comprising-zonal-vice-chairmen-including-mr-waqas-jadon-abdul-malik */
class __TwigTemplate_3a196b32f070d9888d5ae674d0ab44f6_sourced extends Template
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
        yield "<p>The delegation from APMIA, comprising Zonal Vice Chairmen including Mr. Waqas Jadon, Abdul Malik, Engr Ali Haider, Amjad Ali Afridi, Zahid Iqbal Khan, Muhammad Irsal Khan, along with other members such as Farhan Khattak, Muneeb Ur Rehman, Nihad Ali, Khursheed Ali Khan, Musa Jan, Watan Gul, representing various zones, was led by Chairman Asghar Khan Utmankhel in a meeting with Governor Haji Ghulam Ali of KP. They discussed critical issues in the Marble &amp; Granite sector, addressing concerns encompassing the Axle Load Regime, Buner mining explosives, Mohmand Road challenges, GST implications for settled area factories, unstable high electricity tariffs, and the need to reinstate tax exemptions on imported mining and processing machinery. Detailed presentations highlighted proposals for Mining Mechanization, Value Addition, Enhanced Transportation, and Expanding Exports from KP. The Governor pledged proactive measures to tackle sector issues and outlined further action plans. The meeting concluded with the Chairman presenting a shield from APMIA in recognition of the Governor’s services to the business community in Pakistan.</p>";
        return; yield;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@Page:/Users/amer/Sites/apmia/user/pages/04.news/delegation-from-apmia-comprising-zonal-vice-chairmen-including-mr-waqas-jadon-abdul-malik";
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
        return new Source("<p>The delegation from APMIA, comprising Zonal Vice Chairmen including Mr. Waqas Jadon, Abdul Malik, Engr Ali Haider, Amjad Ali Afridi, Zahid Iqbal Khan, Muhammad Irsal Khan, along with other members such as Farhan Khattak, Muneeb Ur Rehman, Nihad Ali, Khursheed Ali Khan, Musa Jan, Watan Gul, representing various zones, was led by Chairman Asghar Khan Utmankhel in a meeting with Governor Haji Ghulam Ali of KP. They discussed critical issues in the Marble &amp; Granite sector, addressing concerns encompassing the Axle Load Regime, Buner mining explosives, Mohmand Road challenges, GST implications for settled area factories, unstable high electricity tariffs, and the need to reinstate tax exemptions on imported mining and processing machinery. Detailed presentations highlighted proposals for Mining Mechanization, Value Addition, Enhanced Transportation, and Expanding Exports from KP. The Governor pledged proactive measures to tackle sector issues and outlined further action plans. The meeting concluded with the Chairman presenting a shield from APMIA in recognition of the Governor’s services to the business community in Pakistan.</p>", "@Page:/Users/amer/Sites/apmia/user/pages/04.news/delegation-from-apmia-comprising-zonal-vice-chairmen-including-mr-waqas-jadon-abdul-malik", "");
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
