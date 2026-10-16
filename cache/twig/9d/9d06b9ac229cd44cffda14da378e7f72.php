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

/* @Page:/Users/amer/Sites/apmia/user/pages/02.about/01.top-office-bearers/sub-zonal-vice-chairmen-year-2017-2018 */
class __TwigTemplate_56f0465feaaa576878fe6e992622f696_sourced extends Template
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
<td>Javeed Khan</td>
<td>Sub Zonal Vice Chairman</td>
<td>Chinar Marble</td>
<td>Rawalpindi</td>
</tr>
<tr>
<td>2</td>
<td>Mian Gulzar Ahmed</td>
<td>Sub Zonal Vice Chairman</td>
<td>New Nadeem Marble</td>
<td>Gujranwala</td>
</tr>
<tr>
<td>3</td>
<td>Ahsan Mehmood</td>
<td>Sub Zonal Vice Chairman</td>
<td>Subhan Marble</td>
<td>Sangjani</td>
</tr>
<tr>
<td>4</td>
<td>Sabir Ullah</td>
<td>Sub Zonal Vice Chairman</td>
<td>Shah Marble &amp; Mining</td>
<td>Peshawar</td>
</tr>
<tr>
<td>5</td>
<td>Zubair Jadoon</td>
<td>Sub Zonal Vice Chairman</td>
<td>Orush Marble Factory</td>
<td>Abtabad</td>
</tr>
<tr>
<td>6</td>
<td>Ghulam Mustafa Naseeb</td>
<td>Sub Zonal Vice Chairman</td>
<td>Pak Onyx Marble</td>
<td>Karachi</td>
</tr>
<tr>
<td>7</td>
<td>Mohammad Iqbal</td>
<td>Sub Zonal Vice Chairman</td>
<td>Iqbal &amp; Sons</td>
<td>Karachi</td>
</tr>
<tr>
<td>8</td>
<td>Riaz Ahmed Shahid</td>
<td>Sub Zonal Vice Chairman</td>
<td>Malti Marble</td>
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
        return "@Page:/Users/amer/Sites/apmia/user/pages/02.about/01.top-office-bearers/sub-zonal-vice-chairmen-year-2017-2018";
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
<td>Javeed Khan</td>
<td>Sub Zonal Vice Chairman</td>
<td>Chinar Marble</td>
<td>Rawalpindi</td>
</tr>
<tr>
<td>2</td>
<td>Mian Gulzar Ahmed</td>
<td>Sub Zonal Vice Chairman</td>
<td>New Nadeem Marble</td>
<td>Gujranwala</td>
</tr>
<tr>
<td>3</td>
<td>Ahsan Mehmood</td>
<td>Sub Zonal Vice Chairman</td>
<td>Subhan Marble</td>
<td>Sangjani</td>
</tr>
<tr>
<td>4</td>
<td>Sabir Ullah</td>
<td>Sub Zonal Vice Chairman</td>
<td>Shah Marble &amp; Mining</td>
<td>Peshawar</td>
</tr>
<tr>
<td>5</td>
<td>Zubair Jadoon</td>
<td>Sub Zonal Vice Chairman</td>
<td>Orush Marble Factory</td>
<td>Abtabad</td>
</tr>
<tr>
<td>6</td>
<td>Ghulam Mustafa Naseeb</td>
<td>Sub Zonal Vice Chairman</td>
<td>Pak Onyx Marble</td>
<td>Karachi</td>
</tr>
<tr>
<td>7</td>
<td>Mohammad Iqbal</td>
<td>Sub Zonal Vice Chairman</td>
<td>Iqbal &amp; Sons</td>
<td>Karachi</td>
</tr>
<tr>
<td>8</td>
<td>Riaz Ahmed Shahid</td>
<td>Sub Zonal Vice Chairman</td>
<td>Malti Marble</td>
<td>Karachi</td>
</tr>
</tbody>
</table>", "@Page:/Users/amer/Sites/apmia/user/pages/02.about/01.top-office-bearers/sub-zonal-vice-chairmen-year-2017-2018", "");
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
