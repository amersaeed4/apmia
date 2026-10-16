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

/* @Page:/Users/amer/Sites/apmia/user/pages/02.about/06.x-chairmen/apmia-chairmen-since-1985 */
class __TwigTemplate_b59927f4c01e399586f33937757348ba_sourced extends Template
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
<th><strong>Sr.No</strong></th>
<th><strong>Name</strong></th>
<th><strong>Tenure</strong></th>
<th><strong>Picture</strong></th>
</tr>
</thead>
<tbody>
<tr>
<td>1-</td>
<td>Rana Muhammad Aqil</td>
<td>(1985-1987)</td>
<td></td>
</tr>
<tr>
<td>2-</td>
<td>Sohail Khan Babar</td>
<td>(1988, 1993, 1996-1999)</td>
<td></td>
</tr>
<tr>
<td>3-</td>
<td>Syed Ameer Ghawas</td>
<td>(1989, 1991)</td>
<td></td>
</tr>
<tr>
<td>4-</td>
<td>Safdar Ai Mirza</td>
<td>(1990, 1992, 2012)</td>
<td></td>
</tr>
<tr>
<td>5-</td>
<td>Syed Mujahid Nabi</td>
<td>1994</td>
<td></td>
</tr>
<tr>
<td>6-</td>
<td>Ch. Mehboob Ali Sirki</td>
<td>(1999, 2003-2004)</td>
<td></td>
</tr>
<tr>
<td>7-</td>
<td>Mian Abdul Sami</td>
<td>(1999-2000)</td>
<td></td>
</tr>
<tr>
<td>8-</td>
<td>Ihsan Ullah Khan</td>
<td>(2000-2001)</td>
<td></td>
</tr>
<tr>
<td>9-</td>
<td>Mian Amir Majeed</td>
<td>2002</td>
<td></td>
</tr>
<tr>
<td>10-</td>
<td>Haji Muhammad Shareef</td>
<td>2003</td>
<td>No Picture Available</td>
</tr>
<tr>
<td>11-</td>
<td>Sana Ullah Khan</td>
<td>(2004-2005)</td>
<td></td>
</tr>
<tr>
<td>12-</td>
<td>Khalid Mehmood Mian</td>
<td>(2005-2006)</td>
<td></td>
</tr>
<tr>
<td>13-</td>
<td>Muhammad Saleem Mughal</td>
<td>(2006-2007)</td>
<td></td>
</tr>
<tr>
<td>14-</td>
<td>Shahid Ur Rehman</td>
<td>2008</td>
<td></td>
</tr>
<tr>
<td>15-</td>
<td>Farrukh Majeed</td>
<td>(2008-2009)</td>
<td></td>
</tr>
<tr>
<td>16-</td>
<td>Muhammad Haroon Rashid</td>
<td>(2009-2010)</td>
<td></td>
</tr>
<tr>
<td>17-</td>
<td>Hidayat Ullah</td>
<td>(2010-2011, 2014-2015)</td>
<td></td>
</tr>
<tr>
<td>18-</td>
<td>Sikandar Hayat Khan Jogezai</td>
<td>(2011-2012)</td>
<td></td>
</tr>
<tr>
<td>19-</td>
<td>Muhammad Aslam</td>
<td>(2012-2013)</td>
<td></td>
</tr>
<tr>
<td>20-</td>
<td>Muhammad Akbar</td>
<td>(2013-2014)</td>
<td></td>
</tr>
<tr>
<td>21-</td>
<td>Muhammad Shakeel Munir</td>
<td>(2015-2016)</td>
<td></td>
</tr>
<tr>
<td>22-</td>
<td>Ilyas Muhammad</td>
<td>(2016-2017)</td>
<td></td>
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
        return "@Page:/Users/amer/Sites/apmia/user/pages/02.about/06.x-chairmen/apmia-chairmen-since-1985";
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
<th><strong>Sr.No</strong></th>
<th><strong>Name</strong></th>
<th><strong>Tenure</strong></th>
<th><strong>Picture</strong></th>
</tr>
</thead>
<tbody>
<tr>
<td>1-</td>
<td>Rana Muhammad Aqil</td>
<td>(1985-1987)</td>
<td></td>
</tr>
<tr>
<td>2-</td>
<td>Sohail Khan Babar</td>
<td>(1988, 1993, 1996-1999)</td>
<td></td>
</tr>
<tr>
<td>3-</td>
<td>Syed Ameer Ghawas</td>
<td>(1989, 1991)</td>
<td></td>
</tr>
<tr>
<td>4-</td>
<td>Safdar Ai Mirza</td>
<td>(1990, 1992, 2012)</td>
<td></td>
</tr>
<tr>
<td>5-</td>
<td>Syed Mujahid Nabi</td>
<td>1994</td>
<td></td>
</tr>
<tr>
<td>6-</td>
<td>Ch. Mehboob Ali Sirki</td>
<td>(1999, 2003-2004)</td>
<td></td>
</tr>
<tr>
<td>7-</td>
<td>Mian Abdul Sami</td>
<td>(1999-2000)</td>
<td></td>
</tr>
<tr>
<td>8-</td>
<td>Ihsan Ullah Khan</td>
<td>(2000-2001)</td>
<td></td>
</tr>
<tr>
<td>9-</td>
<td>Mian Amir Majeed</td>
<td>2002</td>
<td></td>
</tr>
<tr>
<td>10-</td>
<td>Haji Muhammad Shareef</td>
<td>2003</td>
<td>No Picture Available</td>
</tr>
<tr>
<td>11-</td>
<td>Sana Ullah Khan</td>
<td>(2004-2005)</td>
<td></td>
</tr>
<tr>
<td>12-</td>
<td>Khalid Mehmood Mian</td>
<td>(2005-2006)</td>
<td></td>
</tr>
<tr>
<td>13-</td>
<td>Muhammad Saleem Mughal</td>
<td>(2006-2007)</td>
<td></td>
</tr>
<tr>
<td>14-</td>
<td>Shahid Ur Rehman</td>
<td>2008</td>
<td></td>
</tr>
<tr>
<td>15-</td>
<td>Farrukh Majeed</td>
<td>(2008-2009)</td>
<td></td>
</tr>
<tr>
<td>16-</td>
<td>Muhammad Haroon Rashid</td>
<td>(2009-2010)</td>
<td></td>
</tr>
<tr>
<td>17-</td>
<td>Hidayat Ullah</td>
<td>(2010-2011, 2014-2015)</td>
<td></td>
</tr>
<tr>
<td>18-</td>
<td>Sikandar Hayat Khan Jogezai</td>
<td>(2011-2012)</td>
<td></td>
</tr>
<tr>
<td>19-</td>
<td>Muhammad Aslam</td>
<td>(2012-2013)</td>
<td></td>
</tr>
<tr>
<td>20-</td>
<td>Muhammad Akbar</td>
<td>(2013-2014)</td>
<td></td>
</tr>
<tr>
<td>21-</td>
<td>Muhammad Shakeel Munir</td>
<td>(2015-2016)</td>
<td></td>
</tr>
<tr>
<td>22-</td>
<td>Ilyas Muhammad</td>
<td>(2016-2017)</td>
<td></td>
</tr>
</tbody>
</table>", "@Page:/Users/amer/Sites/apmia/user/pages/02.about/06.x-chairmen/apmia-chairmen-since-1985", "");
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
