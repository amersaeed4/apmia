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

/* @Page:/Users/amer/Sites/apmia/user/pages/02.about/02.cec-members/cec-member-list-year-2014-2015 */
class __TwigTemplate_ce2961bfa78a3531ade9477af568a391_sourced extends Template
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
<th><strong>S. NO.</strong></th>
<th><strong>Name of Company</strong></th>
<th><strong>Name of Owner</strong></th>
<th><strong>Address</strong></th>
</tr>
</thead>
<tbody>
<tr>
<td>1</td>
<td>Afridi Marble Industry</td>
<td>Shafiullah Khan</td>
<td>143 Industrial Estate Hayatabad Peshawar</td>
</tr>
<tr>
<td>2</td>
<td>Farrukh Granite Art</td>
<td>Mian Farrukh majeed</td>
<td>Unit-2, plot # 2/D I-9 Markaz, Islamabad.</td>
</tr>
<tr>
<td>3</td>
<td>Alvi &amp; Brothers</td>
<td>Ghulam Qasim Alvi</td>
<td>Pakka patomand chowk Jinnah Road,near Jinnah City Gujranwala.</td>
</tr>
<tr>
<td>4</td>
<td>Master Marble</td>
<td>M.Yasin</td>
<td>Khiali Bypass Estate 2 Gujranwala</td>
</tr>
<tr>
<td>5</td>
<td>Chinar Marble</td>
<td>Javeed Khan</td>
<td>Industrial Area Chak Madad Khan, Rawalpindi</td>
</tr>
<tr>
<td>6</td>
<td>Yahya Marble</td>
<td>Mir Afazl Khan</td>
<td>G.T.Road, Jehangira.</td>
</tr>
<tr>
<td>7</td>
<td>Ittefaq Marble Factory.</td>
<td>Mian Fazeelat Shah</td>
<td>G.T Road Nihalpura Jahngira.</td>
</tr>
<tr>
<td>8</td>
<td>Lepak Mining Company (Pvt.) Ltd</td>
<td>Muhammad Shakeel Munir</td>
<td>P-260, St-8, I-9/3, Islamabad.</td>
</tr>
<tr>
<td>9</td>
<td>Shabbir Marble Works</td>
<td>Mr. Shabbir Ahmed</td>
<td>A-52 Willayat Abad Manghopir Road Karachi</td>
</tr>
<tr>
<td>10</td>
<td>Popular Marble</td>
<td>Mr Salman Ahmed</td>
<td>Modern Colony Pk Cly Karachi</td>
</tr>
<tr>
<td>11</td>
<td>T J Marble</td>
<td>S.S Hayat Khan Jogezai</td>
<td>Loralai Blochistan</td>
</tr>
<tr>
<td>12</td>
<td>Imran Marble works</td>
<td>Imran Khan</td>
<td>Pak Colony Manghopir Road MetroVille Manghopir RD Karachi</td>
</tr>
<tr>
<td>13</td>
<td>Union Marble</td>
<td>Mudasir Ali</td>
<td>5 Mian Wali Colony Qasba Metrovill Manghopir Road Karachi</td>
</tr>
<tr>
<td>14</td>
<td>Pak Onyx Marble Industries</td>
<td>Mr.GHULAM Mustafa</td>
<td>48 M P R Colony Qasba Metroville Manghopir Rd Karachi</td>
</tr>
<tr>
<td>15</td>
<td>SAS Enterprises</td>
<td>M. Saleem Mughal</td>
<td>260,Street.#08,I-9/3,Islamabad</td>
</tr>
<tr>
<td>16</td>
<td>United Diamound Tools (PVT)Ltd</td>
<td>Muhammad Arif Butt</td>
<td>P-45, St-10, I-9/2, Islamabad.</td>
</tr>
<tr>
<td>17</td>
<td>Al Rehman Marble</td>
<td>Aamir Zubair</td>
<td>T Chowk Main G T near DHA Phase IIRoad Rawat Islamabad</td>
</tr>
<tr>
<td>18</td>
<td>Faisal Granite &amp; Marble</td>
<td>Muhammad Amer Saeed</td>
<td>8-E Ghazi Road Defence Lahore</td>
</tr>
<tr>
<td>19</td>
<td>Indus Mining Company</td>
<td>Shahid Ur Rehman</td>
<td>Michni Muhammad Agency Hayyatabad, Peshawar.</td>
</tr>
<tr>
<td>20</td>
<td>Haris Trading Company</td>
<td>Ilyas Muhammad</td>
<td>47,Faiz Market, Chowk Yadgar Peshawar.</td>
</tr>
<tr>
<td>21</td>
<td>Mehran Marble Industries</td>
<td>Muhammad Arif</td>
<td>1-D-9/3 Qasba Metroville Manghopir Road Karachi</td>
</tr>
<tr>
<td>22</td>
<td>Khalid Marble.</td>
<td>Khalid Mahmood Mian</td>
<td>14-B I-9 Markaz Islamabad</td>
</tr>
<tr>
<td>23</td>
<td>Tayyab Marble</td>
<td>Romana Shams</td>
<td>NC-26 Deh Manghopir Nusrat Bhutto Colony Karachi</td>
</tr>
<tr>
<td>24</td>
<td>Granite Unit</td>
<td>Tayyub Hameed</td>
<td>Tool Plaza Sangjani Islamabad</td>
</tr>
<tr>
<td>25</td>
<td>Buneer Marble</td>
<td>Hamd Ul Wahab</td>
<td>Main Peer Wadhai Road Near Railway Phatak Rawalpindi</td>
</tr>
<tr>
<td>26</td>
<td>Khawar Marble.</td>
<td>Mirza M. Khawar.</td>
<td>186-Ferozepur Road, Lahore.</td>
</tr>
<tr>
<td>27</td>
<td>Nishat Marble.</td>
<td>Nadeem Aslam</td>
<td>186-Ferozepur Road, Lahore.</td>
</tr>
<tr>
<td>28</td>
<td>Babar Marble Industry</td>
<td>Babar Ali</td>
<td>Mohmand Agency Peshawar</td>
</tr>
<tr>
<td>29</td>
<td>Golden Marble.</td>
<td>Hidayatullah Khan</td>
<td>Hayyatabad, Peshawar</td>
</tr>
<tr>
<td>30</td>
<td>Pak Marble Industry</td>
<td>Shakir Ullah</td>
<td>Industrial State, Subhan Khawar, Tehsil Shabqadar</td>
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
        return "@Page:/Users/amer/Sites/apmia/user/pages/02.about/02.cec-members/cec-member-list-year-2014-2015";
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
<th><strong>S. NO.</strong></th>
<th><strong>Name of Company</strong></th>
<th><strong>Name of Owner</strong></th>
<th><strong>Address</strong></th>
</tr>
</thead>
<tbody>
<tr>
<td>1</td>
<td>Afridi Marble Industry</td>
<td>Shafiullah Khan</td>
<td>143 Industrial Estate Hayatabad Peshawar</td>
</tr>
<tr>
<td>2</td>
<td>Farrukh Granite Art</td>
<td>Mian Farrukh majeed</td>
<td>Unit-2, plot # 2/D I-9 Markaz, Islamabad.</td>
</tr>
<tr>
<td>3</td>
<td>Alvi &amp; Brothers</td>
<td>Ghulam Qasim Alvi</td>
<td>Pakka patomand chowk Jinnah Road,near Jinnah City Gujranwala.</td>
</tr>
<tr>
<td>4</td>
<td>Master Marble</td>
<td>M.Yasin</td>
<td>Khiali Bypass Estate 2 Gujranwala</td>
</tr>
<tr>
<td>5</td>
<td>Chinar Marble</td>
<td>Javeed Khan</td>
<td>Industrial Area Chak Madad Khan, Rawalpindi</td>
</tr>
<tr>
<td>6</td>
<td>Yahya Marble</td>
<td>Mir Afazl Khan</td>
<td>G.T.Road, Jehangira.</td>
</tr>
<tr>
<td>7</td>
<td>Ittefaq Marble Factory.</td>
<td>Mian Fazeelat Shah</td>
<td>G.T Road Nihalpura Jahngira.</td>
</tr>
<tr>
<td>8</td>
<td>Lepak Mining Company (Pvt.) Ltd</td>
<td>Muhammad Shakeel Munir</td>
<td>P-260, St-8, I-9/3, Islamabad.</td>
</tr>
<tr>
<td>9</td>
<td>Shabbir Marble Works</td>
<td>Mr. Shabbir Ahmed</td>
<td>A-52 Willayat Abad Manghopir Road Karachi</td>
</tr>
<tr>
<td>10</td>
<td>Popular Marble</td>
<td>Mr Salman Ahmed</td>
<td>Modern Colony Pk Cly Karachi</td>
</tr>
<tr>
<td>11</td>
<td>T J Marble</td>
<td>S.S Hayat Khan Jogezai</td>
<td>Loralai Blochistan</td>
</tr>
<tr>
<td>12</td>
<td>Imran Marble works</td>
<td>Imran Khan</td>
<td>Pak Colony Manghopir Road MetroVille Manghopir RD Karachi</td>
</tr>
<tr>
<td>13</td>
<td>Union Marble</td>
<td>Mudasir Ali</td>
<td>5 Mian Wali Colony Qasba Metrovill Manghopir Road Karachi</td>
</tr>
<tr>
<td>14</td>
<td>Pak Onyx Marble Industries</td>
<td>Mr.GHULAM Mustafa</td>
<td>48 M P R Colony Qasba Metroville Manghopir Rd Karachi</td>
</tr>
<tr>
<td>15</td>
<td>SAS Enterprises</td>
<td>M. Saleem Mughal</td>
<td>260,Street.#08,I-9/3,Islamabad</td>
</tr>
<tr>
<td>16</td>
<td>United Diamound Tools (PVT)Ltd</td>
<td>Muhammad Arif Butt</td>
<td>P-45, St-10, I-9/2, Islamabad.</td>
</tr>
<tr>
<td>17</td>
<td>Al Rehman Marble</td>
<td>Aamir Zubair</td>
<td>T Chowk Main G T near DHA Phase IIRoad Rawat Islamabad</td>
</tr>
<tr>
<td>18</td>
<td>Faisal Granite &amp; Marble</td>
<td>Muhammad Amer Saeed</td>
<td>8-E Ghazi Road Defence Lahore</td>
</tr>
<tr>
<td>19</td>
<td>Indus Mining Company</td>
<td>Shahid Ur Rehman</td>
<td>Michni Muhammad Agency Hayyatabad, Peshawar.</td>
</tr>
<tr>
<td>20</td>
<td>Haris Trading Company</td>
<td>Ilyas Muhammad</td>
<td>47,Faiz Market, Chowk Yadgar Peshawar.</td>
</tr>
<tr>
<td>21</td>
<td>Mehran Marble Industries</td>
<td>Muhammad Arif</td>
<td>1-D-9/3 Qasba Metroville Manghopir Road Karachi</td>
</tr>
<tr>
<td>22</td>
<td>Khalid Marble.</td>
<td>Khalid Mahmood Mian</td>
<td>14-B I-9 Markaz Islamabad</td>
</tr>
<tr>
<td>23</td>
<td>Tayyab Marble</td>
<td>Romana Shams</td>
<td>NC-26 Deh Manghopir Nusrat Bhutto Colony Karachi</td>
</tr>
<tr>
<td>24</td>
<td>Granite Unit</td>
<td>Tayyub Hameed</td>
<td>Tool Plaza Sangjani Islamabad</td>
</tr>
<tr>
<td>25</td>
<td>Buneer Marble</td>
<td>Hamd Ul Wahab</td>
<td>Main Peer Wadhai Road Near Railway Phatak Rawalpindi</td>
</tr>
<tr>
<td>26</td>
<td>Khawar Marble.</td>
<td>Mirza M. Khawar.</td>
<td>186-Ferozepur Road, Lahore.</td>
</tr>
<tr>
<td>27</td>
<td>Nishat Marble.</td>
<td>Nadeem Aslam</td>
<td>186-Ferozepur Road, Lahore.</td>
</tr>
<tr>
<td>28</td>
<td>Babar Marble Industry</td>
<td>Babar Ali</td>
<td>Mohmand Agency Peshawar</td>
</tr>
<tr>
<td>29</td>
<td>Golden Marble.</td>
<td>Hidayatullah Khan</td>
<td>Hayyatabad, Peshawar</td>
</tr>
<tr>
<td>30</td>
<td>Pak Marble Industry</td>
<td>Shakir Ullah</td>
<td>Industrial State, Subhan Khawar, Tehsil Shabqadar</td>
</tr>
</tbody>
</table>", "@Page:/Users/amer/Sites/apmia/user/pages/02.about/02.cec-members/cec-member-list-year-2014-2015", "");
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
