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

/* @Page:/Users/amer/Sites/apmia/user/pages/02.about/01.top-office-bearers/top-office-bearers-2013-2014 */
class __TwigTemplate_822ccda07e64ef4e8893d8ab0b4ce59a_sourced extends Template
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
<h2>FOR THE YEAR OF 2013-14</h2>
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
<td>Muhammad Akbar</td>
<td>Chairman</td>
<td>Matrix International Trading</td>
<td>Karachi</td>
</tr>
<tr>
<td>2</td>
<td>Ilyas Muhammad</td>
<td>Senior Vice Chairman</td>
<td>Haris Trading Company</td>
<td>Peshawar</td>
</tr>
<tr>
<td>3</td>
<td>Aamir Zubair</td>
<td>Vice Chairman</td>
<td>Al Rehman Marble &amp; Tiles</td>
<td>Rawat Islamabad</td>
</tr>
<tr>
<td>4</td>
<td>Saeed Arif</td>
<td>Zonal Vice Chairman (Northern)</td>
<td>Al Noor Marble Industry</td>
<td>Gujranwala</td>
</tr>
<tr>
<td>5</td>
<td>Muhammad Saleem</td>
<td>Zonal Vice Chairman (Southern)</td>
<td>SS Stone (Pvt) Ltd</td>
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
        return "@Page:/Users/amer/Sites/apmia/user/pages/02.about/01.top-office-bearers/top-office-bearers-2013-2014";
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
<h2>FOR THE YEAR OF 2013-14</h2>
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
<td>Muhammad Akbar</td>
<td>Chairman</td>
<td>Matrix International Trading</td>
<td>Karachi</td>
</tr>
<tr>
<td>2</td>
<td>Ilyas Muhammad</td>
<td>Senior Vice Chairman</td>
<td>Haris Trading Company</td>
<td>Peshawar</td>
</tr>
<tr>
<td>3</td>
<td>Aamir Zubair</td>
<td>Vice Chairman</td>
<td>Al Rehman Marble &amp; Tiles</td>
<td>Rawat Islamabad</td>
</tr>
<tr>
<td>4</td>
<td>Saeed Arif</td>
<td>Zonal Vice Chairman (Northern)</td>
<td>Al Noor Marble Industry</td>
<td>Gujranwala</td>
</tr>
<tr>
<td>5</td>
<td>Muhammad Saleem</td>
<td>Zonal Vice Chairman (Southern)</td>
<td>SS Stone (Pvt) Ltd</td>
<td>Karachi</td>
</tr>
</tbody>
</table>", "@Page:/Users/amer/Sites/apmia/user/pages/02.about/01.top-office-bearers/top-office-bearers-2013-2014", "");
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
