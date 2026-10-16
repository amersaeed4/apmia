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

/* @Page:/Users/amer/Sites/apmia/user/pages/02.about/02.cec-members/cec-member-list-year-2016-2017 */
class __TwigTemplate_566ccf4bd87d01c8320ad5ba60fc01c1_sourced extends Template
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
        yield "<h1><strong>Executive List of APMIA 2016-2017</strong></h1>
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
<td>Ilyas Muhammad (Chairman)</td>
<td>Stone Mart</td>
<td>Rawalpindi</td>
</tr>
<tr>
<td>2</td>
<td>Khurram Rangoonwala (Senior Vice Chairman)</td>
<td>Hanam Industries</td>
<td>Karachi</td>
</tr>
<tr>
<td>3</td>
<td>Zubair Ishaq Bhatti (Vice Chairman)</td>
<td>Farooq Marble Factory</td>
<td>Lahore</td>
</tr>
<tr>
<td>4</td>
<td>Azeem Asghar (Zonal Vice Chairman)</td>
<td>Azeem Industries</td>
<td>Karachi</td>
</tr>
<tr>
<td>5</td>
<td>Ibad Ali (Zonal Vice Chairman)</td>
<td>Al Hadi Marble Factory</td>
<td>Cnowshera</td>
</tr>
<tr>
<td>6</td>
<td>Asghar Khan Utmankhel</td>
<td>Mardan Stones</td>
<td>Mardan</td>
</tr>
<tr>
<td>7</td>
<td>Wajid Ali</td>
<td>Wajid Usman Marble</td>
<td>Lahore Cantt</td>
</tr>
<tr>
<td>8</td>
<td>Muhammad Irshad</td>
<td>Marble City</td>
<td>Peshawar</td>
</tr>
<tr>
<td>9</td>
<td>Muhammad Nazir</td>
<td>F.M.N International</td>
<td>Karachi</td>
</tr>
<tr>
<td>10</td>
<td>Jalal Ud Din Akbar</td>
<td>Bajour Marble</td>
<td>Islamabad</td>
</tr>
<tr>
<td>11</td>
<td>Javed Hayat</td>
<td>J.K.R Marble</td>
<td>Lahore</td>
</tr>
<tr>
<td>12</td>
<td>Shahid Mehmood</td>
<td>Cantt Marble</td>
<td>Rawalpindi</td>
</tr>
<tr>
<td>13</td>
<td>Tayyab Hameed</td>
<td>Farooq Marble</td>
<td>Islamabad</td>
</tr>
<tr>
<td>14</td>
<td>Shoaib Hamid</td>
<td>Watan Marble</td>
<td>Rawalpindi</td>
</tr>
<tr>
<td>15</td>
<td>Ch Shahzad Ahmad</td>
<td>Shahzad Marble</td>
<td>Sangjani</td>
</tr>
<tr>
<td>16</td>
<td>Muhammad Arif Butt</td>
<td>United Diamond Tools</td>
<td>Islamabad</td>
</tr>
<tr>
<td>17</td>
<td>Sher Ahmed Khan</td>
<td>SAK International Co</td>
<td>Karachi</td>
</tr>
<tr>
<td>18</td>
<td>Himit Shah</td>
<td>Spin Ghar Marble</td>
<td>Peshawar</td>
</tr>
<tr>
<td>19</td>
<td>Shahzada Bashir</td>
<td>Shahzada Marble</td>
<td>Islamabad</td>
</tr>
<tr>
<td>20</td>
<td>Muhammad Waseem</td>
<td>Pak Mijin Trading</td>
<td>Karachi</td>
</tr>
<tr>
<td>21</td>
<td>Mumtaz Muhammad</td>
<td>Stone Mart Marble</td>
<td>Lahore</td>
</tr>
<tr>
<td>22</td>
<td>Muhammad Younas</td>
<td>Gulls International</td>
<td>Islamabad</td>
</tr>
<tr>
<td>23</td>
<td>Nadeem Khan</td>
<td>Panorama Marble</td>
<td>Karachi</td>
</tr>
<tr>
<td>24</td>
<td>Mohammad Younas</td>
<td>Al-Faisal Marble</td>
<td>Islamabad</td>
</tr>
<tr>
<td>25</td>
<td>Muhammad Arif</td>
<td>Mehran Marmi Industries</td>
<td>Karachi</td>
</tr>
<tr>
<td>26</td>
<td>Sattar Hussain Shah</td>
<td>Natural Marble</td>
<td>Islamabad</td>
</tr>
<tr>
<td>27</td>
<td>Haji Gul Bahadur</td>
<td>Samnat Marble Industry</td>
<td>Charsadda</td>
</tr>
<tr>
<td>28</td>
<td>Ali Akbar</td>
<td>Ittehad Marble</td>
<td>Rawalpindi</td>
</tr>
<tr>
<td>29</td>
<td>M. Saleem Khan</td>
<td>S.S Stone (Pvt) Ltd</td>
<td>Karachi</td>
</tr>
<tr>
<td>30</td>
<td>Khalid Saeed</td>
<td>Trachmir Marble</td>
<td>Peshawar</td>
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
        return "@Page:/Users/amer/Sites/apmia/user/pages/02.about/02.cec-members/cec-member-list-year-2016-2017";
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
        return new Source("<h1><strong>Executive List of APMIA 2016-2017</strong></h1>
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
<td>Ilyas Muhammad (Chairman)</td>
<td>Stone Mart</td>
<td>Rawalpindi</td>
</tr>
<tr>
<td>2</td>
<td>Khurram Rangoonwala (Senior Vice Chairman)</td>
<td>Hanam Industries</td>
<td>Karachi</td>
</tr>
<tr>
<td>3</td>
<td>Zubair Ishaq Bhatti (Vice Chairman)</td>
<td>Farooq Marble Factory</td>
<td>Lahore</td>
</tr>
<tr>
<td>4</td>
<td>Azeem Asghar (Zonal Vice Chairman)</td>
<td>Azeem Industries</td>
<td>Karachi</td>
</tr>
<tr>
<td>5</td>
<td>Ibad Ali (Zonal Vice Chairman)</td>
<td>Al Hadi Marble Factory</td>
<td>Cnowshera</td>
</tr>
<tr>
<td>6</td>
<td>Asghar Khan Utmankhel</td>
<td>Mardan Stones</td>
<td>Mardan</td>
</tr>
<tr>
<td>7</td>
<td>Wajid Ali</td>
<td>Wajid Usman Marble</td>
<td>Lahore Cantt</td>
</tr>
<tr>
<td>8</td>
<td>Muhammad Irshad</td>
<td>Marble City</td>
<td>Peshawar</td>
</tr>
<tr>
<td>9</td>
<td>Muhammad Nazir</td>
<td>F.M.N International</td>
<td>Karachi</td>
</tr>
<tr>
<td>10</td>
<td>Jalal Ud Din Akbar</td>
<td>Bajour Marble</td>
<td>Islamabad</td>
</tr>
<tr>
<td>11</td>
<td>Javed Hayat</td>
<td>J.K.R Marble</td>
<td>Lahore</td>
</tr>
<tr>
<td>12</td>
<td>Shahid Mehmood</td>
<td>Cantt Marble</td>
<td>Rawalpindi</td>
</tr>
<tr>
<td>13</td>
<td>Tayyab Hameed</td>
<td>Farooq Marble</td>
<td>Islamabad</td>
</tr>
<tr>
<td>14</td>
<td>Shoaib Hamid</td>
<td>Watan Marble</td>
<td>Rawalpindi</td>
</tr>
<tr>
<td>15</td>
<td>Ch Shahzad Ahmad</td>
<td>Shahzad Marble</td>
<td>Sangjani</td>
</tr>
<tr>
<td>16</td>
<td>Muhammad Arif Butt</td>
<td>United Diamond Tools</td>
<td>Islamabad</td>
</tr>
<tr>
<td>17</td>
<td>Sher Ahmed Khan</td>
<td>SAK International Co</td>
<td>Karachi</td>
</tr>
<tr>
<td>18</td>
<td>Himit Shah</td>
<td>Spin Ghar Marble</td>
<td>Peshawar</td>
</tr>
<tr>
<td>19</td>
<td>Shahzada Bashir</td>
<td>Shahzada Marble</td>
<td>Islamabad</td>
</tr>
<tr>
<td>20</td>
<td>Muhammad Waseem</td>
<td>Pak Mijin Trading</td>
<td>Karachi</td>
</tr>
<tr>
<td>21</td>
<td>Mumtaz Muhammad</td>
<td>Stone Mart Marble</td>
<td>Lahore</td>
</tr>
<tr>
<td>22</td>
<td>Muhammad Younas</td>
<td>Gulls International</td>
<td>Islamabad</td>
</tr>
<tr>
<td>23</td>
<td>Nadeem Khan</td>
<td>Panorama Marble</td>
<td>Karachi</td>
</tr>
<tr>
<td>24</td>
<td>Mohammad Younas</td>
<td>Al-Faisal Marble</td>
<td>Islamabad</td>
</tr>
<tr>
<td>25</td>
<td>Muhammad Arif</td>
<td>Mehran Marmi Industries</td>
<td>Karachi</td>
</tr>
<tr>
<td>26</td>
<td>Sattar Hussain Shah</td>
<td>Natural Marble</td>
<td>Islamabad</td>
</tr>
<tr>
<td>27</td>
<td>Haji Gul Bahadur</td>
<td>Samnat Marble Industry</td>
<td>Charsadda</td>
</tr>
<tr>
<td>28</td>
<td>Ali Akbar</td>
<td>Ittehad Marble</td>
<td>Rawalpindi</td>
</tr>
<tr>
<td>29</td>
<td>M. Saleem Khan</td>
<td>S.S Stone (Pvt) Ltd</td>
<td>Karachi</td>
</tr>
<tr>
<td>30</td>
<td>Khalid Saeed</td>
<td>Trachmir Marble</td>
<td>Peshawar</td>
</tr>
</tbody>
</table>", "@Page:/Users/amer/Sites/apmia/user/pages/02.about/02.cec-members/cec-member-list-year-2016-2017", "");
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
