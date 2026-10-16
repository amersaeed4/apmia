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

/* @Page:/Users/amer/Sites/apmia/user/pages/02.about/01.top-office-bearers/sub-zonal-vice-chairmen-year-2015-2016 */
class __TwigTemplate_62bbb594a0d6afe21b06884f8ca653ca_sourced extends Template
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
        yield "<p><strong>LIST OF SUB ZONAL VICE CHAIRMEN OF APMIA FOR THE YEAR OF 2015-2016</strong></p>
<table>
<thead>
<tr>
<th><strong>S#</strong></th>
<th><strong>Name of Owner</strong></th>
<th><strong>Designation</strong></th>
<th><strong>Name of Company</strong></th>
<th><strong>Zone</strong></th>
</tr>
</thead>
<tbody>
<tr>
<td><strong>1</strong></td>
<td><strong>Jalal Ud Din Akbar</strong></td>
<td><strong>Sub Zonal Vice Chairman</strong></td>
<td><strong>Bajour Marble</strong></td>
<td><strong>Islamabad</strong></td>
</tr>
<tr>
<td><strong>2</strong></td>
<td><strong>Muhammad Zubar Ishaq</strong></td>
<td><strong>Sub Zonal Vice Chairman</strong></td>
<td><strong>Farooq Marble</strong></td>
<td><strong>Lahore</strong></td>
</tr>
<tr>
<td><strong>3</strong></td>
<td><strong>Shahzada Bashir</strong></td>
<td><strong>Sub Zonal Vice Chairman</strong></td>
<td><strong>Shehzad Marble &amp; Granite</strong></td>
<td><strong>Rawat</strong></td>
</tr>
<tr>
<td><strong>4</strong></td>
<td><strong>Muhammad Yasin</strong></td>
<td><strong>Sub Zonal Vice Chairman</strong></td>
<td><strong>Master Marble</strong></td>
<td><strong>Gujranwala</strong></td>
</tr>
<tr>
<td><strong>5</strong></td>
<td><strong>Ali Akbar</strong></td>
<td><strong>Sub Zonal Vice Chairman</strong></td>
<td><strong>New Ittehad Marble</strong></td>
<td><strong>Rawalpindi</strong></td>
</tr>
<tr>
<td><strong>6</strong></td>
<td><strong>Haji Muhammad Younas</strong></td>
<td><strong>Sub Zonal Vice Chairman</strong></td>
<td><strong>Al-Faisal Marble &amp; Granite</strong></td>
<td><strong>Sangjani</strong></td>
</tr>
<tr>
<td><strong>7</strong></td>
<td><strong>Fazeelat Shah</strong></td>
<td><strong>Sub Zonal Vice Chairman</strong></td>
<td><strong>Ittefaq Marble</strong></td>
<td><strong>Jahangira</strong></td>
</tr>
<tr>
<td><strong>8</strong></td>
<td><strong>Himit Shah</strong></td>
<td><strong>Sub Zonal Vice Chairman</strong></td>
<td><strong>Spin Ghar Marble Indusry</strong></td>
<td><strong>Peshawar</strong></td>
</tr>
<tr>
<td><strong>9</strong></td>
<td><strong>Haji Gul Bahadur</strong></td>
<td><strong>Sub Zonal Vice Chairman</strong></td>
<td><strong>Samnat Marble</strong></td>
<td><strong>Charsadda</strong></td>
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
        return "@Page:/Users/amer/Sites/apmia/user/pages/02.about/01.top-office-bearers/sub-zonal-vice-chairmen-year-2015-2016";
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
        return new Source("<p><strong>LIST OF SUB ZONAL VICE CHAIRMEN OF APMIA FOR THE YEAR OF 2015-2016</strong></p>
<table>
<thead>
<tr>
<th><strong>S#</strong></th>
<th><strong>Name of Owner</strong></th>
<th><strong>Designation</strong></th>
<th><strong>Name of Company</strong></th>
<th><strong>Zone</strong></th>
</tr>
</thead>
<tbody>
<tr>
<td><strong>1</strong></td>
<td><strong>Jalal Ud Din Akbar</strong></td>
<td><strong>Sub Zonal Vice Chairman</strong></td>
<td><strong>Bajour Marble</strong></td>
<td><strong>Islamabad</strong></td>
</tr>
<tr>
<td><strong>2</strong></td>
<td><strong>Muhammad Zubar Ishaq</strong></td>
<td><strong>Sub Zonal Vice Chairman</strong></td>
<td><strong>Farooq Marble</strong></td>
<td><strong>Lahore</strong></td>
</tr>
<tr>
<td><strong>3</strong></td>
<td><strong>Shahzada Bashir</strong></td>
<td><strong>Sub Zonal Vice Chairman</strong></td>
<td><strong>Shehzad Marble &amp; Granite</strong></td>
<td><strong>Rawat</strong></td>
</tr>
<tr>
<td><strong>4</strong></td>
<td><strong>Muhammad Yasin</strong></td>
<td><strong>Sub Zonal Vice Chairman</strong></td>
<td><strong>Master Marble</strong></td>
<td><strong>Gujranwala</strong></td>
</tr>
<tr>
<td><strong>5</strong></td>
<td><strong>Ali Akbar</strong></td>
<td><strong>Sub Zonal Vice Chairman</strong></td>
<td><strong>New Ittehad Marble</strong></td>
<td><strong>Rawalpindi</strong></td>
</tr>
<tr>
<td><strong>6</strong></td>
<td><strong>Haji Muhammad Younas</strong></td>
<td><strong>Sub Zonal Vice Chairman</strong></td>
<td><strong>Al-Faisal Marble &amp; Granite</strong></td>
<td><strong>Sangjani</strong></td>
</tr>
<tr>
<td><strong>7</strong></td>
<td><strong>Fazeelat Shah</strong></td>
<td><strong>Sub Zonal Vice Chairman</strong></td>
<td><strong>Ittefaq Marble</strong></td>
<td><strong>Jahangira</strong></td>
</tr>
<tr>
<td><strong>8</strong></td>
<td><strong>Himit Shah</strong></td>
<td><strong>Sub Zonal Vice Chairman</strong></td>
<td><strong>Spin Ghar Marble Indusry</strong></td>
<td><strong>Peshawar</strong></td>
</tr>
<tr>
<td><strong>9</strong></td>
<td><strong>Haji Gul Bahadur</strong></td>
<td><strong>Sub Zonal Vice Chairman</strong></td>
<td><strong>Samnat Marble</strong></td>
<td><strong>Charsadda</strong></td>
</tr>
</tbody>
</table>", "@Page:/Users/amer/Sites/apmia/user/pages/02.about/01.top-office-bearers/sub-zonal-vice-chairmen-year-2015-2016", "");
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
