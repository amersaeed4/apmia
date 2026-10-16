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

/* @Page:/Users/amer/Sites/apmia/user/pages/02.about/05.standing-committees/standing-committees-2013-14 */
class __TwigTemplate_b41f8a615f9050b7172d18b3f02c9458_sourced extends Template
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
        yield "<h3>Finance Committee</h3>
<ol>
<li>Muhammad Afzal Ghouri – Islamabad</li>
<li>Farrukh Majeed – Islamabad</li>
<li>Tayyab Hamid – Islamabad</li>
<li>Azeem Asghar- Karachi</li>
<li>Ameer Zada Khan – Islamabad</li>
<li>Mian Gulzar Ahmad – Gujranwala</li>
<li>Muhammad Arif Butt – Islamabad</li>
<li>Farooq khan Hazarvi – Rawalpindi</li>
<li>Mukhtar Ahmad – Jahangira</li>
<li>Khurram Muzamil – Karachi</li>
</ol>
<h3>Management &amp; HR Committee</h3>
<p>(Also Responsible For Magazine)</p>
<ol>
<li>Mian Abdul Sami – Islamabad</li>
<li>Shakeel Munir – Islamabad</li>
<li>Mian Khalid – Islamabad</li>
<li>Farrukh Majeed – Islamabad</li>
<li>Ilyas Muhammad – Peshawar</li>
<li>Saeed Arif – Gujranwala</li>
<li>Babar Ali – Peshawar</li>
<li>Muhammad Arif Butt – Islamabad</li>
<li>Amir Saeed – Lahore</li>
<li>Muhammad Waseem – Karachi</li>
<li>Nadeem Khan – Karachi</li>
</ol>
<h3>Industries Committee</h3>
<ol>
<li>Muhammad Arif – Karachi</li>
<li>Khurram Ibrahim – Karachi</li>
<li>Azeem Asghar – Karachi</li>
<li>Sana Ullah – Karachi</li>
<li>Farooq Bhatti – Lahore</li>
<li>Haroon Munir – Islamabad</li>
<li>Asghar Utmankel – Mardan</li>
<li>Nadeem Aslam – Lahore</li>
<li>Haji Rafiq – Rawalpindi</li>
<li>Shafi Ullah – Peshawar</li>
<li>Amir Zubair – Rawat</li>
</ol>
<h3>Trade and Export Promotion</h3>
<ol>
<li>Muhammad Akbar – Karachi</li>
<li>Muhammad Arif – Karachi</li>
<li>Hameed Shera – Karachi</li>
<li>Muhammad Saleem – Karachi</li>
<li>Haqeeq Ahmed – Lahore</li>
<li>Ilyas Muhammad – Peshawar</li>
<li>Farrukh Munir – Islamabad</li>
<li>Farrukh Majeed – Islamabad</li>
<li>Khadim Hussain – Lahore</li>
<li>Muhammad Younis – Islamabad</li>
</ol>
<h3>Mining Liaison / Development Committee</h3>
<ol>
<li>Shahid Rehman – Peshawar</li>
<li>Hidayat Ullah – Peshawar</li>
<li>Sikandar Hayat Khan Jogezai – Baluchistan</li>
<li>Muhammad Israr – Peshawar</li>
<li>Saleem Mughal – Islamabad</li>
<li>Hamid Shera – Karachi</li>
<li>Sana Ullah – Karachi</li>
<li>Ghulam Qadir – Karachi</li>
<li>Mukhtar Ahmad – Jahangira</li>
<li>Shakir Ullah – Charsadda</li>
</ol>
<h3>Government Coordination Committee</h3>
<ol>
<li>Hidayat Ullah – Peshawar</li>
<li>Shahid Rehman – Peshawar</li>
<li>Sikandar Hayat Khan Jogezai – Baluchistan</li>
<li>Saleem Mughal – Islamabad</li>
<li>Shakeel Munir – Islamabad</li>
<li>Khalid Mehmood Mian – Islamabad</li>
<li>Shoaib Hamid – Rawalpindi</li>
<li>Muhammad Arif – Karachi</li>
<li>Khurram Ibrahim – Karachi</li>
<li>Mian Abdul Sami – Islamabad</li>
</ol>";
        return; yield;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@Page:/Users/amer/Sites/apmia/user/pages/02.about/05.standing-committees/standing-committees-2013-14";
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
        return new Source("<h3>Finance Committee</h3>
<ol>
<li>Muhammad Afzal Ghouri – Islamabad</li>
<li>Farrukh Majeed – Islamabad</li>
<li>Tayyab Hamid – Islamabad</li>
<li>Azeem Asghar- Karachi</li>
<li>Ameer Zada Khan – Islamabad</li>
<li>Mian Gulzar Ahmad – Gujranwala</li>
<li>Muhammad Arif Butt – Islamabad</li>
<li>Farooq khan Hazarvi – Rawalpindi</li>
<li>Mukhtar Ahmad – Jahangira</li>
<li>Khurram Muzamil – Karachi</li>
</ol>
<h3>Management &amp; HR Committee</h3>
<p>(Also Responsible For Magazine)</p>
<ol>
<li>Mian Abdul Sami – Islamabad</li>
<li>Shakeel Munir – Islamabad</li>
<li>Mian Khalid – Islamabad</li>
<li>Farrukh Majeed – Islamabad</li>
<li>Ilyas Muhammad – Peshawar</li>
<li>Saeed Arif – Gujranwala</li>
<li>Babar Ali – Peshawar</li>
<li>Muhammad Arif Butt – Islamabad</li>
<li>Amir Saeed – Lahore</li>
<li>Muhammad Waseem – Karachi</li>
<li>Nadeem Khan – Karachi</li>
</ol>
<h3>Industries Committee</h3>
<ol>
<li>Muhammad Arif – Karachi</li>
<li>Khurram Ibrahim – Karachi</li>
<li>Azeem Asghar – Karachi</li>
<li>Sana Ullah – Karachi</li>
<li>Farooq Bhatti – Lahore</li>
<li>Haroon Munir – Islamabad</li>
<li>Asghar Utmankel – Mardan</li>
<li>Nadeem Aslam – Lahore</li>
<li>Haji Rafiq – Rawalpindi</li>
<li>Shafi Ullah – Peshawar</li>
<li>Amir Zubair – Rawat</li>
</ol>
<h3>Trade and Export Promotion</h3>
<ol>
<li>Muhammad Akbar – Karachi</li>
<li>Muhammad Arif – Karachi</li>
<li>Hameed Shera – Karachi</li>
<li>Muhammad Saleem – Karachi</li>
<li>Haqeeq Ahmed – Lahore</li>
<li>Ilyas Muhammad – Peshawar</li>
<li>Farrukh Munir – Islamabad</li>
<li>Farrukh Majeed – Islamabad</li>
<li>Khadim Hussain – Lahore</li>
<li>Muhammad Younis – Islamabad</li>
</ol>
<h3>Mining Liaison / Development Committee</h3>
<ol>
<li>Shahid Rehman – Peshawar</li>
<li>Hidayat Ullah – Peshawar</li>
<li>Sikandar Hayat Khan Jogezai – Baluchistan</li>
<li>Muhammad Israr – Peshawar</li>
<li>Saleem Mughal – Islamabad</li>
<li>Hamid Shera – Karachi</li>
<li>Sana Ullah – Karachi</li>
<li>Ghulam Qadir – Karachi</li>
<li>Mukhtar Ahmad – Jahangira</li>
<li>Shakir Ullah – Charsadda</li>
</ol>
<h3>Government Coordination Committee</h3>
<ol>
<li>Hidayat Ullah – Peshawar</li>
<li>Shahid Rehman – Peshawar</li>
<li>Sikandar Hayat Khan Jogezai – Baluchistan</li>
<li>Saleem Mughal – Islamabad</li>
<li>Shakeel Munir – Islamabad</li>
<li>Khalid Mehmood Mian – Islamabad</li>
<li>Shoaib Hamid – Rawalpindi</li>
<li>Muhammad Arif – Karachi</li>
<li>Khurram Ibrahim – Karachi</li>
<li>Mian Abdul Sami – Islamabad</li>
</ol>", "@Page:/Users/amer/Sites/apmia/user/pages/02.about/05.standing-committees/standing-committees-2013-14", "");
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
