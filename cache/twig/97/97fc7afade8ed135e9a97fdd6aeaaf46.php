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

/* @Page:/Users/amer/Sites/apmia/user/pages/02.about/01.top-office-bearers/top-office-bearers-year-2014-2015 */
class __TwigTemplate_75732920eaeb78feca0d1beda2f740b8_sourced extends Template
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
        yield "<h2>LIST OF TOP OFFICE BEARERS OF APMIA ELECTED</h2>
<h2>FOR THE YEAR OF 2014-15</h2>
<table>
<thead>
<tr>
<th><strong>Sr. NO.</strong></th>
<th><strong>Name of Owner</strong></th>
<th><strong>Designation</strong></th>
<th><strong>Name of Company</strong></th>
<th><strong>Address</strong></th>
</tr>
</thead>
<tbody>
<tr>
<td>1</td>
<td>Hidayatullah Khan</td>
<td>Chairman</td>
<td>Golden Marble.</td>
<td>Peshawar</td>
</tr>
<tr>
<td>2</td>
<td>Muhammad Arif Butt</td>
<td>Senior Vice Chairman</td>
<td>Unitedc Diamond Tools Pvt Ltd</td>
<td>Islamabad</td>
</tr>
<tr>
<td>3</td>
<td>Mirza M. Khawar.</td>
<td>Vice Chairman</td>
<td>Khawar Marble.</td>
<td>Lahore</td>
</tr>
<tr>
<td>4</td>
<td>Tayyab Hameed</td>
<td>Zonal Vice Chairman (Northern)</td>
<td>Farooq Marles</td>
<td>Islamabad</td>
</tr>
<tr>
<td>5</td>
<td>Mr.GHULAM Mustafa</td>
<td>Zonal Vice Chairman (Southern)</td>
<td>Pak Onyx Marble Industries</td>
<td>Karachi</td>
</tr>
</tbody>
</table>";
        return; yield;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@Page:/Users/amer/Sites/apmia/user/pages/02.about/01.top-office-bearers/top-office-bearers-year-2014-2015";
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
        return new Source("<h2>LIST OF TOP OFFICE BEARERS OF APMIA ELECTED</h2>
<h2>FOR THE YEAR OF 2014-15</h2>
<table>
<thead>
<tr>
<th><strong>Sr. NO.</strong></th>
<th><strong>Name of Owner</strong></th>
<th><strong>Designation</strong></th>
<th><strong>Name of Company</strong></th>
<th><strong>Address</strong></th>
</tr>
</thead>
<tbody>
<tr>
<td>1</td>
<td>Hidayatullah Khan</td>
<td>Chairman</td>
<td>Golden Marble.</td>
<td>Peshawar</td>
</tr>
<tr>
<td>2</td>
<td>Muhammad Arif Butt</td>
<td>Senior Vice Chairman</td>
<td>Unitedc Diamond Tools Pvt Ltd</td>
<td>Islamabad</td>
</tr>
<tr>
<td>3</td>
<td>Mirza M. Khawar.</td>
<td>Vice Chairman</td>
<td>Khawar Marble.</td>
<td>Lahore</td>
</tr>
<tr>
<td>4</td>
<td>Tayyab Hameed</td>
<td>Zonal Vice Chairman (Northern)</td>
<td>Farooq Marles</td>
<td>Islamabad</td>
</tr>
<tr>
<td>5</td>
<td>Mr.GHULAM Mustafa</td>
<td>Zonal Vice Chairman (Southern)</td>
<td>Pak Onyx Marble Industries</td>
<td>Karachi</td>
</tr>
</tbody>
</table>", "@Page:/Users/amer/Sites/apmia/user/pages/02.about/01.top-office-bearers/top-office-bearers-year-2014-2015", "");
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
