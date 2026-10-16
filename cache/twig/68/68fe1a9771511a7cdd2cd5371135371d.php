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

/* @Page:/Users/amer/Sites/apmia/user/pages/02.about/02.cec-members/cec-member-list-year-2017-2018 */
class __TwigTemplate_53558d8b9f9243c2d3d2235841a0d051_sourced extends Template
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
        yield "<h1><strong>Executive List of APMIA 2017-2018</strong></h1>
<table>
<thead>
<tr>
<th><strong>S. NO.</strong></th>
<th><strong>Name &amp; Designation</strong></th>
<th><strong>Company</strong></th>
<th><strong>City</strong></th>
</tr>
</thead>
<tbody>
<tr>
<td>1</td>
<td><strong>Nadeem Shahnshahi (Chairman)</strong></td>
<td><strong>Skyword (Pvt.) Limited</strong></td>
<td><strong>Karachi</strong></td>
</tr>
<tr>
<td>2</td>
<td><strong>Mushtaq Ahmad</strong> <strong>(Senior Vice Chairman)</strong></td>
<td><strong>Variety Stone Care</strong></td>
<td><strong>Islamabad</strong></td>
</tr>
<tr>
<td>3</td>
<td><strong>Aftab Ahmad</strong> <strong>(Vice Chairman)</strong></td>
<td><strong>Roshan Marble &amp; Granite</strong></td>
<td><strong>Lahore</strong></td>
</tr>
<tr>
<td>4</td>
<td><strong>Muhammad Akram</strong> <strong>(Zonal Vice Chairman)</strong></td>
<td><strong>Bismillah Marble</strong></td>
<td><strong>Lahore</strong></td>
</tr>
<tr>
<td>5</td>
<td><strong>Sultan Ul Arifeen</strong> <strong>(Zonal Vice Chairman)</strong></td>
<td><strong>Abbas Marble Factory</strong></td>
<td><strong>Mardan</strong></td>
</tr>
<tr>
<td>6</td>
<td>Sikandar Hayat Jogezai</td>
<td>T.J Marble</td>
<td>Balochistan</td>
</tr>
<tr>
<td>7</td>
<td>Mazhar Ahmad</td>
<td>Gulistan Marble &amp; Granite</td>
<td>Lahore</td>
</tr>
<tr>
<td>8</td>
<td>Shahid Ur Rehman</td>
<td>Indus Mining Company</td>
<td>KPK</td>
</tr>
<tr>
<td>9</td>
<td>Umair Sajjad</td>
<td>Huzaifa Marble &amp; Granite</td>
<td>Taxila</td>
</tr>
<tr>
<td>10</td>
<td>Farrukh Majeed</td>
<td>Farrukh Granite Art</td>
<td>Islamabad</td>
</tr>
<tr>
<td>11</td>
<td>Ahsan Mehmood</td>
<td>Subhan Marble</td>
<td>Rawalpindi</td>
</tr>
<tr>
<td>12</td>
<td>Javeed Khan</td>
<td>Chinar Marble</td>
<td>Rawalpindi</td>
</tr>
<tr>
<td>13</td>
<td>Mian Gulzar Ahmad</td>
<td>New Nadeem Marble</td>
<td>Gujranwala</td>
</tr>
<tr>
<td>14</td>
<td>Muhammad Sabir Khan</td>
<td>Pak Grinding Mills, Marble &amp; Mining Company</td>
<td>Peshawar</td>
</tr>
<tr>
<td>15</td>
<td>Muhammad Iqbal</td>
<td>Two Star Marble Factory</td>
<td>Mardan</td>
</tr>
<tr>
<td>16</td>
<td>Muhammad Arif Butt</td>
<td>United Diamond Tools (Pvt.) Ltd</td>
<td>Islamabad</td>
</tr>
<tr>
<td>17</td>
<td>Sher Ahmed Khan</td>
<td>SAK International Corporation</td>
<td>Karachi</td>
</tr>
<tr>
<td>18</td>
<td>Muhammad Waseem</td>
<td>Pak Mijin Trading Company</td>
<td>Karachi</td>
</tr>
<tr>
<td>19</td>
<td>Nadeem Khan</td>
<td>Panorama Marbles</td>
<td>Karachi</td>
</tr>
<tr>
<td>20</td>
<td>Muhammad Arif</td>
<td>Mehran Marmi Industries (Pvt.) Ltd</td>
<td>Karachi</td>
</tr>
<tr>
<td>21</td>
<td>Khurram Rangoonwala</td>
<td>Hanam Industries</td>
<td>Karachi</td>
</tr>
<tr>
<td>22</td>
<td>Muhammad Saleem Khan</td>
<td>S.S Stone (Pvt.) Ltd</td>
<td>Karachi</td>
</tr>
<tr>
<td>23</td>
<td>Azeem Asghar</td>
<td>S.S Stone (Pvt.) Ltd</td>
<td>Karachi</td>
</tr>
<tr>
<td>24</td>
<td>Ibaad Ali</td>
<td>Al Hadi Marble Factory</td>
<td>Nowshera</td>
</tr>
<tr>
<td>25</td>
<td>Javed Hayat</td>
<td>J.K.R Traders</td>
<td>Lahore</td>
</tr>
<tr>
<td>26</td>
<td>Ilyas Muhammad</td>
<td>Stone Mart</td>
<td>Rawalpindi</td>
</tr>
<tr>
<td>27</td>
<td>Shahid Mehmood</td>
<td>Cantt Marble</td>
<td>Rawalpindi</td>
</tr>
<tr>
<td>28</td>
<td>Tayyab Hameed</td>
<td>Farooq Marble</td>
<td>Islamabad</td>
</tr>
<tr>
<td>29</td>
<td>Shoaib Hamid</td>
<td>Watan Marble</td>
<td>Rawalpindi</td>
</tr>
<tr>
<td>30</td>
<td>Ch. Shahzad Ahmed</td>
<td>Shahzad Marble</td>
<td>Sangjani</td>
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
        return "@Page:/Users/amer/Sites/apmia/user/pages/02.about/02.cec-members/cec-member-list-year-2017-2018";
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
        return new Source("<h1><strong>Executive List of APMIA 2017-2018</strong></h1>
<table>
<thead>
<tr>
<th><strong>S. NO.</strong></th>
<th><strong>Name &amp; Designation</strong></th>
<th><strong>Company</strong></th>
<th><strong>City</strong></th>
</tr>
</thead>
<tbody>
<tr>
<td>1</td>
<td><strong>Nadeem Shahnshahi (Chairman)</strong></td>
<td><strong>Skyword (Pvt.) Limited</strong></td>
<td><strong>Karachi</strong></td>
</tr>
<tr>
<td>2</td>
<td><strong>Mushtaq Ahmad</strong> <strong>(Senior Vice Chairman)</strong></td>
<td><strong>Variety Stone Care</strong></td>
<td><strong>Islamabad</strong></td>
</tr>
<tr>
<td>3</td>
<td><strong>Aftab Ahmad</strong> <strong>(Vice Chairman)</strong></td>
<td><strong>Roshan Marble &amp; Granite</strong></td>
<td><strong>Lahore</strong></td>
</tr>
<tr>
<td>4</td>
<td><strong>Muhammad Akram</strong> <strong>(Zonal Vice Chairman)</strong></td>
<td><strong>Bismillah Marble</strong></td>
<td><strong>Lahore</strong></td>
</tr>
<tr>
<td>5</td>
<td><strong>Sultan Ul Arifeen</strong> <strong>(Zonal Vice Chairman)</strong></td>
<td><strong>Abbas Marble Factory</strong></td>
<td><strong>Mardan</strong></td>
</tr>
<tr>
<td>6</td>
<td>Sikandar Hayat Jogezai</td>
<td>T.J Marble</td>
<td>Balochistan</td>
</tr>
<tr>
<td>7</td>
<td>Mazhar Ahmad</td>
<td>Gulistan Marble &amp; Granite</td>
<td>Lahore</td>
</tr>
<tr>
<td>8</td>
<td>Shahid Ur Rehman</td>
<td>Indus Mining Company</td>
<td>KPK</td>
</tr>
<tr>
<td>9</td>
<td>Umair Sajjad</td>
<td>Huzaifa Marble &amp; Granite</td>
<td>Taxila</td>
</tr>
<tr>
<td>10</td>
<td>Farrukh Majeed</td>
<td>Farrukh Granite Art</td>
<td>Islamabad</td>
</tr>
<tr>
<td>11</td>
<td>Ahsan Mehmood</td>
<td>Subhan Marble</td>
<td>Rawalpindi</td>
</tr>
<tr>
<td>12</td>
<td>Javeed Khan</td>
<td>Chinar Marble</td>
<td>Rawalpindi</td>
</tr>
<tr>
<td>13</td>
<td>Mian Gulzar Ahmad</td>
<td>New Nadeem Marble</td>
<td>Gujranwala</td>
</tr>
<tr>
<td>14</td>
<td>Muhammad Sabir Khan</td>
<td>Pak Grinding Mills, Marble &amp; Mining Company</td>
<td>Peshawar</td>
</tr>
<tr>
<td>15</td>
<td>Muhammad Iqbal</td>
<td>Two Star Marble Factory</td>
<td>Mardan</td>
</tr>
<tr>
<td>16</td>
<td>Muhammad Arif Butt</td>
<td>United Diamond Tools (Pvt.) Ltd</td>
<td>Islamabad</td>
</tr>
<tr>
<td>17</td>
<td>Sher Ahmed Khan</td>
<td>SAK International Corporation</td>
<td>Karachi</td>
</tr>
<tr>
<td>18</td>
<td>Muhammad Waseem</td>
<td>Pak Mijin Trading Company</td>
<td>Karachi</td>
</tr>
<tr>
<td>19</td>
<td>Nadeem Khan</td>
<td>Panorama Marbles</td>
<td>Karachi</td>
</tr>
<tr>
<td>20</td>
<td>Muhammad Arif</td>
<td>Mehran Marmi Industries (Pvt.) Ltd</td>
<td>Karachi</td>
</tr>
<tr>
<td>21</td>
<td>Khurram Rangoonwala</td>
<td>Hanam Industries</td>
<td>Karachi</td>
</tr>
<tr>
<td>22</td>
<td>Muhammad Saleem Khan</td>
<td>S.S Stone (Pvt.) Ltd</td>
<td>Karachi</td>
</tr>
<tr>
<td>23</td>
<td>Azeem Asghar</td>
<td>S.S Stone (Pvt.) Ltd</td>
<td>Karachi</td>
</tr>
<tr>
<td>24</td>
<td>Ibaad Ali</td>
<td>Al Hadi Marble Factory</td>
<td>Nowshera</td>
</tr>
<tr>
<td>25</td>
<td>Javed Hayat</td>
<td>J.K.R Traders</td>
<td>Lahore</td>
</tr>
<tr>
<td>26</td>
<td>Ilyas Muhammad</td>
<td>Stone Mart</td>
<td>Rawalpindi</td>
</tr>
<tr>
<td>27</td>
<td>Shahid Mehmood</td>
<td>Cantt Marble</td>
<td>Rawalpindi</td>
</tr>
<tr>
<td>28</td>
<td>Tayyab Hameed</td>
<td>Farooq Marble</td>
<td>Islamabad</td>
</tr>
<tr>
<td>29</td>
<td>Shoaib Hamid</td>
<td>Watan Marble</td>
<td>Rawalpindi</td>
</tr>
<tr>
<td>30</td>
<td>Ch. Shahzad Ahmed</td>
<td>Shahzad Marble</td>
<td>Sangjani</td>
</tr>
</tbody>
</table>", "@Page:/Users/amer/Sites/apmia/user/pages/02.about/02.cec-members/cec-member-list-year-2017-2018", "");
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
