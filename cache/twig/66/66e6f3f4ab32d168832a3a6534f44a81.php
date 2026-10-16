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

/* @Page:/Users/amer/Sites/apmia/user/pages/02.about/01.top-office-bearers/top-office-bearers-year-2016-2017 */
class __TwigTemplate_6378cf9e45ead22e1ece859314da1e1e_sourced extends Template
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
        yield "<h2>TOP OFFICE BEARERS FOR THE YEAR OF 2016-17</h2>
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
<td>Ilyas Muhammad</td>
<td>Chairman</td>
<td>Stone Mart</td>
<td>Rawalpindi</td>
</tr>
<tr>
<td><strong>2</strong></td>
<td>Khurram Rangoonwala</td>
<td>Senior Vice Chairman</td>
<td>Hanam Industries</td>
<td>Karachi</td>
</tr>
<tr>
<td><strong>3</strong></td>
<td>Zubair Ishaq Bhatti</td>
<td>Vice Chairman</td>
<td>Farooq Marble Factory</td>
<td>Lahore</td>
</tr>
<tr>
<td><strong>4</strong></td>
<td>Azeem Asghar</td>
<td>Zonal Vice Chairman</td>
<td>Azeem Industries</td>
<td>Karachi</td>
</tr>
<tr>
<td><strong>5</strong></td>
<td>Ibad Ali</td>
<td>Zonal Vice Chairman</td>
<td>Al Hadi Marble Factory</td>
<td>Nowshera</td>
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
        return "@Page:/Users/amer/Sites/apmia/user/pages/02.about/01.top-office-bearers/top-office-bearers-year-2016-2017";
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
        return new Source("<h2>TOP OFFICE BEARERS FOR THE YEAR OF 2016-17</h2>
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
<td>Ilyas Muhammad</td>
<td>Chairman</td>
<td>Stone Mart</td>
<td>Rawalpindi</td>
</tr>
<tr>
<td><strong>2</strong></td>
<td>Khurram Rangoonwala</td>
<td>Senior Vice Chairman</td>
<td>Hanam Industries</td>
<td>Karachi</td>
</tr>
<tr>
<td><strong>3</strong></td>
<td>Zubair Ishaq Bhatti</td>
<td>Vice Chairman</td>
<td>Farooq Marble Factory</td>
<td>Lahore</td>
</tr>
<tr>
<td><strong>4</strong></td>
<td>Azeem Asghar</td>
<td>Zonal Vice Chairman</td>
<td>Azeem Industries</td>
<td>Karachi</td>
</tr>
<tr>
<td><strong>5</strong></td>
<td>Ibad Ali</td>
<td>Zonal Vice Chairman</td>
<td>Al Hadi Marble Factory</td>
<td>Nowshera</td>
</tr>
</tbody>
</table>", "@Page:/Users/amer/Sites/apmia/user/pages/02.about/01.top-office-bearers/top-office-bearers-year-2016-2017", "");
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
