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

/* @Page:/Users/amer/Sites/apmia/user/pages/02.about/01.top-office-bearers/top-office-bearers-year-2017-2018 */
class __TwigTemplate_3af11e26c490c30a60de28ea7476c882_sourced extends Template
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
<h2>FOR THE YEAR OF 2017-18</h2>
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
<td>Nadeem Shahnshahi</td>
<td>Chairman</td>
<td>Skyword (Pvt.) Limited</td>
<td>Karachi</td>
</tr>
<tr>
<td>2</td>
<td>Mushtaq Ahmad</td>
<td>Senior Vice Chairman</td>
<td>Variety Stone Care</td>
<td>Islamabad</td>
</tr>
<tr>
<td>3</td>
<td>Aftab Ahmad</td>
<td>Vice Chairman</td>
<td>Roshan Marble &amp; Granite</td>
<td>Lahore</td>
</tr>
<tr>
<td>4</td>
<td>Muhammad Akram</td>
<td>Zonal Vice Chairman</td>
<td>Bismillah Marble</td>
<td>Lahore</td>
</tr>
<tr>
<td>5</td>
<td>Sultan Ul Arifeen</td>
<td>Zonal Vice Chairman</td>
<td>Abbas Marble Factory</td>
<td>Mardan</td>
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
        return "@Page:/Users/amer/Sites/apmia/user/pages/02.about/01.top-office-bearers/top-office-bearers-year-2017-2018";
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
<h2>FOR THE YEAR OF 2017-18</h2>
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
<td>Nadeem Shahnshahi</td>
<td>Chairman</td>
<td>Skyword (Pvt.) Limited</td>
<td>Karachi</td>
</tr>
<tr>
<td>2</td>
<td>Mushtaq Ahmad</td>
<td>Senior Vice Chairman</td>
<td>Variety Stone Care</td>
<td>Islamabad</td>
</tr>
<tr>
<td>3</td>
<td>Aftab Ahmad</td>
<td>Vice Chairman</td>
<td>Roshan Marble &amp; Granite</td>
<td>Lahore</td>
</tr>
<tr>
<td>4</td>
<td>Muhammad Akram</td>
<td>Zonal Vice Chairman</td>
<td>Bismillah Marble</td>
<td>Lahore</td>
</tr>
<tr>
<td>5</td>
<td>Sultan Ul Arifeen</td>
<td>Zonal Vice Chairman</td>
<td>Abbas Marble Factory</td>
<td>Mardan</td>
</tr>
</tbody>
</table>", "@Page:/Users/amer/Sites/apmia/user/pages/02.about/01.top-office-bearers/top-office-bearers-year-2017-2018", "");
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
