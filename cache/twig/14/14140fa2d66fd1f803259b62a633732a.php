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

/* @Page:/Users/amer/Sites/apmia/user/pages/02.about/01.top-office-bearers/top-office-bearers-year-2015-2016 */
class __TwigTemplate_19deb7ceb66c5ebd7b45adc33cd2b635_sourced extends Template
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
        yield "<h2>TOP OFFICE BEARERS OF 2015-16</h2>
<table>
<thead>
<tr>
<th><strong>S#</strong></th>
<th><strong>Name</strong></th>
<th><strong>Designation</strong></th>
<th><strong>Company Name</strong></th>
<th><strong>Address</strong></th>
</tr>
</thead>
<tbody>
<tr>
<td><strong>1</strong></td>
<td>Muhammad Shakeel Munir</td>
<td>Chairman</td>
<td>Lepak Mining Company (Pvt.) Limited</td>
<td>Islamabad</td>
</tr>
<tr>
<td><strong>2</strong></td>
<td>Asghar Khan Utmankhel</td>
<td>Senior Vice Chairman</td>
<td>Mardan Stones</td>
<td>Mardan</td>
</tr>
<tr>
<td><strong>3</strong></td>
<td>Wajid Ali</td>
<td>Vice Chairman</td>
<td>Wajid Usman Marble &amp; Granite</td>
<td>Lahore</td>
</tr>
<tr>
<td><strong>4</strong></td>
<td>Muhammad Irshad</td>
<td>Zonal Vice Chairman</td>
<td>Marble City</td>
<td>Peshawar</td>
</tr>
<tr>
<td><strong>5</strong></td>
<td>Muhammad Nazir</td>
<td>Zonal Vice Chairman</td>
<td>F.M.N International Trading</td>
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
        return "@Page:/Users/amer/Sites/apmia/user/pages/02.about/01.top-office-bearers/top-office-bearers-year-2015-2016";
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
        return new Source("<h2>TOP OFFICE BEARERS OF 2015-16</h2>
<table>
<thead>
<tr>
<th><strong>S#</strong></th>
<th><strong>Name</strong></th>
<th><strong>Designation</strong></th>
<th><strong>Company Name</strong></th>
<th><strong>Address</strong></th>
</tr>
</thead>
<tbody>
<tr>
<td><strong>1</strong></td>
<td>Muhammad Shakeel Munir</td>
<td>Chairman</td>
<td>Lepak Mining Company (Pvt.) Limited</td>
<td>Islamabad</td>
</tr>
<tr>
<td><strong>2</strong></td>
<td>Asghar Khan Utmankhel</td>
<td>Senior Vice Chairman</td>
<td>Mardan Stones</td>
<td>Mardan</td>
</tr>
<tr>
<td><strong>3</strong></td>
<td>Wajid Ali</td>
<td>Vice Chairman</td>
<td>Wajid Usman Marble &amp; Granite</td>
<td>Lahore</td>
</tr>
<tr>
<td><strong>4</strong></td>
<td>Muhammad Irshad</td>
<td>Zonal Vice Chairman</td>
<td>Marble City</td>
<td>Peshawar</td>
</tr>
<tr>
<td><strong>5</strong></td>
<td>Muhammad Nazir</td>
<td>Zonal Vice Chairman</td>
<td>F.M.N International Trading</td>
<td>Karachi</td>
</tr>
</tbody>
</table>", "@Page:/Users/amer/Sites/apmia/user/pages/02.about/01.top-office-bearers/top-office-bearers-year-2015-2016", "");
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
