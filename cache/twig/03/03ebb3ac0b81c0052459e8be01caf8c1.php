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

/* @Page:/Users/amer/Sites/apmia/user/pages/02.about/01.top-office-bearers/sub-zonal-vice-chairmen-year-2013-2014 */
class __TwigTemplate_ad1b5091a7eb00f5f42a7de161c14805_sourced extends Template
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
        yield "<table>
<thead>
<tr>
<th><strong>Sr. NO</strong>.</th>
<th><strong>Name of Owner</strong></th>
<th><strong>Designation</strong></th>
<th><strong>Name of Company</strong></th>
<th><strong>Zone Address</strong></th>
</tr>
</thead>
<tbody>
<tr>
<td><strong>1</strong></td>
<td>M. Arif Butt</td>
<td>Sub Zonal Vice Chairman</td>
<td>United Diamonds</td>
<td>Islamabad</td>
</tr>
<tr>
<td>2</td>
<td>Tayyab Hameed</td>
<td>Sub Zonal Vice Chairman</td>
<td>Granite Unit</td>
<td>Sangjani</td>
</tr>
<tr>
<td>3</td>
<td>Hamd Ul Wahab</td>
<td>Sub Zonal Vice Chairman</td>
<td>Buneer Marble</td>
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
<td>Hazrat Younis</td>
<td>Sub Zonal Vice Chairman</td>
<td>Fazal Qadir Marble</td>
<td>Khairabad/Jahangira</td>
</tr>
<tr>
<td>7</td>
<td>Shakir Ullah</td>
<td>Sub Zonal Vice Chairman</td>
<td>Pak Marble Industry</td>
<td>Shabqadar</td>
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
        return "@Page:/Users/amer/Sites/apmia/user/pages/02.about/01.top-office-bearers/sub-zonal-vice-chairmen-year-2013-2014";
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
        return new Source("<table>
<thead>
<tr>
<th><strong>Sr. NO</strong>.</th>
<th><strong>Name of Owner</strong></th>
<th><strong>Designation</strong></th>
<th><strong>Name of Company</strong></th>
<th><strong>Zone Address</strong></th>
</tr>
</thead>
<tbody>
<tr>
<td><strong>1</strong></td>
<td>M. Arif Butt</td>
<td>Sub Zonal Vice Chairman</td>
<td>United Diamonds</td>
<td>Islamabad</td>
</tr>
<tr>
<td>2</td>
<td>Tayyab Hameed</td>
<td>Sub Zonal Vice Chairman</td>
<td>Granite Unit</td>
<td>Sangjani</td>
</tr>
<tr>
<td>3</td>
<td>Hamd Ul Wahab</td>
<td>Sub Zonal Vice Chairman</td>
<td>Buneer Marble</td>
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
<td>Hazrat Younis</td>
<td>Sub Zonal Vice Chairman</td>
<td>Fazal Qadir Marble</td>
<td>Khairabad/Jahangira</td>
</tr>
<tr>
<td>7</td>
<td>Shakir Ullah</td>
<td>Sub Zonal Vice Chairman</td>
<td>Pak Marble Industry</td>
<td>Shabqadar</td>
</tr>
</tbody>
</table>", "@Page:/Users/amer/Sites/apmia/user/pages/02.about/01.top-office-bearers/sub-zonal-vice-chairmen-year-2013-2014", "");
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
