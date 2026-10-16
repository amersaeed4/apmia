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

/* @Page:/Users/amer/Sites/apmia/user/pages/02.about/01.top-office-bearers/sub-zonal-vice-chairmen-year-2014-2015 */
class __TwigTemplate_5e72016235b952263743d5a6da150183_sourced extends Template
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
        yield "<p><strong>LIST OF SUB ZONAL VICE CHAIRMAN OF SUB ZONES OF APMIA</strong></p>
<p><strong>FOR THE YEAR OF 2014-15</strong></p>
<table>
<thead>
<tr>
<th><strong>Sr.No</strong></th>
<th><strong>Name of Owner</strong></th>
<th><strong>Designation</strong></th>
<th><strong>Name of Company</strong></th>
<th><strong>Zone Address</strong></th>
</tr>
</thead>
<tbody>
<tr>
<td>1</td>
<td>Shafiullah Khan</td>
<td>Sub Zonal Vice Chairman</td>
<td>Afridi Marble</td>
<td>Peshawar</td>
</tr>
<tr>
<td>3</td>
<td>Javeed Khan</td>
<td>Sub Zonal Vice Chairman</td>
<td>Chinar Marble</td>
<td>Rawalpindi</td>
</tr>
<tr>
<td>4</td>
<td>Nadeem Aslam</td>
<td>Sub Zonal Vice Chairman</td>
<td>Nishat Marble</td>
<td>Lahore</td>
</tr>
<tr>
<td>5</td>
<td>Babar Ali</td>
<td>Sub Zonal Vice Chairman</td>
<td>Babar Marble Industry</td>
<td>Peshawar</td>
</tr>
<tr>
<td>6</td>
<td>Fezeelat Shah</td>
<td>Sub Zonal Vice Chairman</td>
<td>Ittefeq Marble</td>
<td>Khairabad/Jahangira</td>
</tr>
<tr>
<td>7</td>
<td>ShakirUllah</td>
<td>Sub Zonal Vice Chairman</td>
<td>Pak Marble Industry</td>
<td>Shabqadar</td>
</tr>
<tr>
<td>8</td>
<td>Muhammad Sabir</td>
<td>Sub Zonal Vice Chairman</td>
<td>Pak Grinding Mils</td>
<td>Warsak Road Peshawar</td>
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
        return "@Page:/Users/amer/Sites/apmia/user/pages/02.about/01.top-office-bearers/sub-zonal-vice-chairmen-year-2014-2015";
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
        return new Source("<p><strong>LIST OF SUB ZONAL VICE CHAIRMAN OF SUB ZONES OF APMIA</strong></p>
<p><strong>FOR THE YEAR OF 2014-15</strong></p>
<table>
<thead>
<tr>
<th><strong>Sr.No</strong></th>
<th><strong>Name of Owner</strong></th>
<th><strong>Designation</strong></th>
<th><strong>Name of Company</strong></th>
<th><strong>Zone Address</strong></th>
</tr>
</thead>
<tbody>
<tr>
<td>1</td>
<td>Shafiullah Khan</td>
<td>Sub Zonal Vice Chairman</td>
<td>Afridi Marble</td>
<td>Peshawar</td>
</tr>
<tr>
<td>3</td>
<td>Javeed Khan</td>
<td>Sub Zonal Vice Chairman</td>
<td>Chinar Marble</td>
<td>Rawalpindi</td>
</tr>
<tr>
<td>4</td>
<td>Nadeem Aslam</td>
<td>Sub Zonal Vice Chairman</td>
<td>Nishat Marble</td>
<td>Lahore</td>
</tr>
<tr>
<td>5</td>
<td>Babar Ali</td>
<td>Sub Zonal Vice Chairman</td>
<td>Babar Marble Industry</td>
<td>Peshawar</td>
</tr>
<tr>
<td>6</td>
<td>Fezeelat Shah</td>
<td>Sub Zonal Vice Chairman</td>
<td>Ittefeq Marble</td>
<td>Khairabad/Jahangira</td>
</tr>
<tr>
<td>7</td>
<td>ShakirUllah</td>
<td>Sub Zonal Vice Chairman</td>
<td>Pak Marble Industry</td>
<td>Shabqadar</td>
</tr>
<tr>
<td>8</td>
<td>Muhammad Sabir</td>
<td>Sub Zonal Vice Chairman</td>
<td>Pak Grinding Mils</td>
<td>Warsak Road Peshawar</td>
</tr>
</tbody>
</table>", "@Page:/Users/amer/Sites/apmia/user/pages/02.about/01.top-office-bearers/sub-zonal-vice-chairmen-year-2014-2015", "");
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
