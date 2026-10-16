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

/* @Page:/Users/amer/Sites/apmia/user/pages/02.about/01.top-office-bearers/sub-zonal-vice-chairmen-year-2016-2017 */
class __TwigTemplate_20a98fcfe0653c862997b971674a578c_sourced extends Template
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
<td>Jalal Ud Din Akbar</td>
<td>Sub Zonal Vice Chairman</td>
<td>Bajour Marble</td>
<td>Islamabad</td>
</tr>
<tr>
<td>2</td>
<td>Javed Hayat</td>
<td>Sub Zonal Vice Chairman</td>
<td>JKR Marble</td>
<td>Lahore</td>
</tr>
<tr>
<td>3</td>
<td>Mohammed Qasim Alvi</td>
<td>Sub Zonal Vice Chairman</td>
<td>Alvi &amp; Brothers</td>
<td>Gujranwala</td>
</tr>
<tr>
<td>4</td>
<td>Chaudhary Shahzad</td>
<td>Sub Zonal Vice Chairman</td>
<td>Shahzad Marble</td>
<td>Sangjani</td>
</tr>
<tr>
<td>5</td>
<td>Shazada Bashir</td>
<td>Sub Zonal Vice Chairman</td>
<td>Shahzad Marble &amp; Granite</td>
<td>Rawat</td>
</tr>
<tr>
<td>6</td>
<td>Asghar Khan Utmankhel</td>
<td>Sub Zonal Vice Chairman</td>
<td>Mardan Stones</td>
<td>Mardan</td>
</tr>
<tr>
<td>7</td>
<td>Mohammad Irshad</td>
<td>Sub Zonal Vice Chairman</td>
<td>Marble City</td>
<td>Peshawar</td>
</tr>
<tr>
<td>8</td>
<td>Haji Shakir Ullah</td>
<td>Sub Zonal Vice Chairman</td>
<td>Pak Marble Industry</td>
<td>Charsadda</td>
</tr>
<tr>
<td>9</td>
<td>Ali Akbar</td>
<td>Sub Zonal Vice Chairman</td>
<td>New Ittehad Marble</td>
<td>Rawalpindi</td>
</tr>
<tr>
<td>10</td>
<td>Naseer Ahmed</td>
<td>Sub Zonal Vice Chairman</td>
<td>Super Kohsar Marble</td>
<td>Faisalabad</td>
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
        return "@Page:/Users/amer/Sites/apmia/user/pages/02.about/01.top-office-bearers/sub-zonal-vice-chairmen-year-2016-2017";
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
<td>Jalal Ud Din Akbar</td>
<td>Sub Zonal Vice Chairman</td>
<td>Bajour Marble</td>
<td>Islamabad</td>
</tr>
<tr>
<td>2</td>
<td>Javed Hayat</td>
<td>Sub Zonal Vice Chairman</td>
<td>JKR Marble</td>
<td>Lahore</td>
</tr>
<tr>
<td>3</td>
<td>Mohammed Qasim Alvi</td>
<td>Sub Zonal Vice Chairman</td>
<td>Alvi &amp; Brothers</td>
<td>Gujranwala</td>
</tr>
<tr>
<td>4</td>
<td>Chaudhary Shahzad</td>
<td>Sub Zonal Vice Chairman</td>
<td>Shahzad Marble</td>
<td>Sangjani</td>
</tr>
<tr>
<td>5</td>
<td>Shazada Bashir</td>
<td>Sub Zonal Vice Chairman</td>
<td>Shahzad Marble &amp; Granite</td>
<td>Rawat</td>
</tr>
<tr>
<td>6</td>
<td>Asghar Khan Utmankhel</td>
<td>Sub Zonal Vice Chairman</td>
<td>Mardan Stones</td>
<td>Mardan</td>
</tr>
<tr>
<td>7</td>
<td>Mohammad Irshad</td>
<td>Sub Zonal Vice Chairman</td>
<td>Marble City</td>
<td>Peshawar</td>
</tr>
<tr>
<td>8</td>
<td>Haji Shakir Ullah</td>
<td>Sub Zonal Vice Chairman</td>
<td>Pak Marble Industry</td>
<td>Charsadda</td>
</tr>
<tr>
<td>9</td>
<td>Ali Akbar</td>
<td>Sub Zonal Vice Chairman</td>
<td>New Ittehad Marble</td>
<td>Rawalpindi</td>
</tr>
<tr>
<td>10</td>
<td>Naseer Ahmed</td>
<td>Sub Zonal Vice Chairman</td>
<td>Super Kohsar Marble</td>
<td>Faisalabad</td>
</tr>
</tbody>
</table>", "@Page:/Users/amer/Sites/apmia/user/pages/02.about/01.top-office-bearers/sub-zonal-vice-chairmen-year-2016-2017", "");
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
