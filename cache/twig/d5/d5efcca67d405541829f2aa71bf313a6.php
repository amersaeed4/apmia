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

/* @Page:/Users/amer/Sites/apmia/user/pages/02.about/05.standing-committees */
class __TwigTemplate_5c88f38ab64face7a30a9eeb17700a84_sourced extends Template
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
        yield "<h2>Bulletin Committee</h2>
<ul>
<li>Mr. Muhammad Afzal Shahid (Chairman-Bulletin Panel) <em>K-2 Corporation – Islamabad</em></li>
<li>Mian Abdul Sami (Founder Member-APMIA) <em>Star Marble Tiles – Islamabad</em></li>
<li>Mian Farrukh Majeed (Central Executive Committee Member-APMIA) <em>Farrukh Granite Art – Islamabad</em></li>
</ul>
<h2>Diplomatic Committee</h2>
<ul>
<li>Mr. Muhammad Shakeel Munir (Chairman – Diplomatic &amp; Foreign Affairs Sub-Committee) <em>Lepak Mining Company (Pvt.) Limited – Islamabad</em></li>
<li>Mr. Muhammad Afzal Shahid (Zonal Vice Chairman (North) – APMIA) <em>K-2 Corporation – Islamabad</em></li>
<li>Mr. Atiq Ur Rehman Abbasi (Zonal Vice Chairman (South) – APMIA) <em>UBC Pakistan, Karachi</em></li>
<li>Mr. Mian Farrukh Majeed (CEC Member – APMIA) <em>Farrukh Granite Art – Islamabad</em></li>
<li>Mr. Muhammad Sabir Khan (CEC Member – APMIA) <em>Pak Grinding Mills, Marble &amp; Mining Company – Peshawar</em></li>
<li>Mian Fazeelat Shah (CEC Member – APMIA) <em>Ittefaq Marble Factory – Jahangira</em></li>
<li>Mr. Ghulam Mustafa Naseeb (CEC Member – APMIA) <em>FMN International Trading, Karachi</em></li>
<li>Mr. Muhammad Amer Saeed (Corporate Member – APMIA) <em>Faisal Granites &amp; Marble, Lahore</em></li>
<li>Mr. Arslan Arif (Corporate Member – APMIA) <em>Mehran Marmi Industries, Karachi</em></li>
</ul>
<h2>HR &amp; Finance Committee</h2>
<ul>
<li>Mr. Mian Abdul Sami (Chairman – HR &amp; Finance Sub Committee) <em>Star Marble Tiles – Islamabad</em></li>
<li>Mr. Farrukh Munir <em>Kohsar Industries – Islamabad</em></li>
<li>Mian Farrukh Majeed <em>Farrukh Granite Art – Islamabad</em></li>
<li>Mr. Atiq Ur Rehman Abbasi – Karachi <em>UBC Pakistan – Karachi</em></li>
<li>Mr. Ghulam Mustafa Naseeb <em>FMN International Trading – Karachi</em></li>
<li>Mr. Shoaib Hamid <em>Watan Marble – Rawalpindi</em></li>
<li>Mr. Zafar Hussain <em>Det Tools (Pvt.) Limited – Islamabad</em></li>
<li>Mr. Arshad Mehmood <em>Siran Marble Factory – Rawalpindi</em></li>
<li>Mr. Ibaad Ali <em>Al Hadi Marble Factory – Jahangira</em></li>
<li>Mr. Faheem Uddin <em>Fine Marble – Rawalpindi</em></li>
<li>Mr. Haroon Khan Mohmand <em>Mohmand Dada Minerals (Pvt.) Limited – Karachi</em></li>
</ul>";
        return; yield;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@Page:/Users/amer/Sites/apmia/user/pages/02.about/05.standing-committees";
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
        return new Source("<h2>Bulletin Committee</h2>
<ul>
<li>Mr. Muhammad Afzal Shahid (Chairman-Bulletin Panel) <em>K-2 Corporation – Islamabad</em></li>
<li>Mian Abdul Sami (Founder Member-APMIA) <em>Star Marble Tiles – Islamabad</em></li>
<li>Mian Farrukh Majeed (Central Executive Committee Member-APMIA) <em>Farrukh Granite Art – Islamabad</em></li>
</ul>
<h2>Diplomatic Committee</h2>
<ul>
<li>Mr. Muhammad Shakeel Munir (Chairman – Diplomatic &amp; Foreign Affairs Sub-Committee) <em>Lepak Mining Company (Pvt.) Limited – Islamabad</em></li>
<li>Mr. Muhammad Afzal Shahid (Zonal Vice Chairman (North) – APMIA) <em>K-2 Corporation – Islamabad</em></li>
<li>Mr. Atiq Ur Rehman Abbasi (Zonal Vice Chairman (South) – APMIA) <em>UBC Pakistan, Karachi</em></li>
<li>Mr. Mian Farrukh Majeed (CEC Member – APMIA) <em>Farrukh Granite Art – Islamabad</em></li>
<li>Mr. Muhammad Sabir Khan (CEC Member – APMIA) <em>Pak Grinding Mills, Marble &amp; Mining Company – Peshawar</em></li>
<li>Mian Fazeelat Shah (CEC Member – APMIA) <em>Ittefaq Marble Factory – Jahangira</em></li>
<li>Mr. Ghulam Mustafa Naseeb (CEC Member – APMIA) <em>FMN International Trading, Karachi</em></li>
<li>Mr. Muhammad Amer Saeed (Corporate Member – APMIA) <em>Faisal Granites &amp; Marble, Lahore</em></li>
<li>Mr. Arslan Arif (Corporate Member – APMIA) <em>Mehran Marmi Industries, Karachi</em></li>
</ul>
<h2>HR &amp; Finance Committee</h2>
<ul>
<li>Mr. Mian Abdul Sami (Chairman – HR &amp; Finance Sub Committee) <em>Star Marble Tiles – Islamabad</em></li>
<li>Mr. Farrukh Munir <em>Kohsar Industries – Islamabad</em></li>
<li>Mian Farrukh Majeed <em>Farrukh Granite Art – Islamabad</em></li>
<li>Mr. Atiq Ur Rehman Abbasi – Karachi <em>UBC Pakistan – Karachi</em></li>
<li>Mr. Ghulam Mustafa Naseeb <em>FMN International Trading – Karachi</em></li>
<li>Mr. Shoaib Hamid <em>Watan Marble – Rawalpindi</em></li>
<li>Mr. Zafar Hussain <em>Det Tools (Pvt.) Limited – Islamabad</em></li>
<li>Mr. Arshad Mehmood <em>Siran Marble Factory – Rawalpindi</em></li>
<li>Mr. Ibaad Ali <em>Al Hadi Marble Factory – Jahangira</em></li>
<li>Mr. Faheem Uddin <em>Fine Marble – Rawalpindi</em></li>
<li>Mr. Haroon Khan Mohmand <em>Mohmand Dada Minerals (Pvt.) Limited – Karachi</em></li>
</ul>", "@Page:/Users/amer/Sites/apmia/user/pages/02.about/05.standing-committees", "");
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
