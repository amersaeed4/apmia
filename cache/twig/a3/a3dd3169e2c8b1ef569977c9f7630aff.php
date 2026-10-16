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

/* @Page:/Users/amer/Sites/apmia/user/pages/04.news/apmia-holds-successful-agm-and-oath-taking-ceremony */
class __TwigTemplate_c147a7761a33b8e2aca57ca7a88c0a6e_sourced extends Template
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
        yield "<p>Islamabad, September 18, 2024 — All Pakistan Marble Industries Association (APMIA) successfully conducted its Annual General Meeting (AGM) and Oath-Taking Ceremony for the new office bearers today. The event was honored by the presence of Chief Guest Mr. Rana Mashhood Ahmad Khan, Chairman of the PM Youth Program, and Mr. Atif Ikram Sheikh, President of the Federation of Pakistan Chambers of Commerce and Industry (FPCCI).<br />
The event was further attended by distinguished former Chairmen, including:  </p>
<p>– Mr. Asghar Khan Utmankhel<br />
– Mr. Muhammad Shakeel Munir<br />
– Mr. Farukh Majeed<br />
– Mr. Ilyas Muhammad<br />
– Mr. Gulzar Ahmad<br />
– Mr. Shabir Ahmad Baloch  </p>
<p>In his address, Mr. Rana Mashood emphasized the vital role of the mining industry in Pakistan’s economy and praised APMIA’s tireless efforts to promote the sector. Mr. Atif Ikram highlighted the need for continued collaboration and innovation to overcome the mining industry’s challenges.  </p>
<p>The guests and seniors highly appreciate the remarkable efforts &amp; achievements of the outgoing Chairman Asgher Khan Utmankhel &amp; his team.<br />
The new office bearers were sworn in:  </p>
<p>– Chairman: Mr. Muhammad Bilal Khan Mohmand<br />
– Senior Vice Chairman: Mr. Mian Irfan Zafar<br />
– Vice Chairman (South): Mr. Rahat Shah<br />
– Vice Chairman: Mr. Shah Khalid Safi</p>
<p>Mr. Muhammad Bilal Khan Mohmand, the incoming Chairman, committed to continue the legacy of the outgoing team by focusing on core targets:  </p>
<ol>
<li>Mining Mechanization  </li>
<li>Better Transportation  </li>
<li>Value Addition  </li>
<li>Boosting Exports  </li>
</ol>
<p>The AGM also featured discussions on future initiatives and strategic plans to address the mining industry challenges. The event concluded with a networking session, providing an opportunity for attendees to engage with industry peers and explore collaborative opportunities.</p>";
        return; yield;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@Page:/Users/amer/Sites/apmia/user/pages/04.news/apmia-holds-successful-agm-and-oath-taking-ceremony";
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
        return new Source("<p>Islamabad, September 18, 2024 — All Pakistan Marble Industries Association (APMIA) successfully conducted its Annual General Meeting (AGM) and Oath-Taking Ceremony for the new office bearers today. The event was honored by the presence of Chief Guest Mr. Rana Mashhood Ahmad Khan, Chairman of the PM Youth Program, and Mr. Atif Ikram Sheikh, President of the Federation of Pakistan Chambers of Commerce and Industry (FPCCI).<br />
The event was further attended by distinguished former Chairmen, including:  </p>
<p>– Mr. Asghar Khan Utmankhel<br />
– Mr. Muhammad Shakeel Munir<br />
– Mr. Farukh Majeed<br />
– Mr. Ilyas Muhammad<br />
– Mr. Gulzar Ahmad<br />
– Mr. Shabir Ahmad Baloch  </p>
<p>In his address, Mr. Rana Mashood emphasized the vital role of the mining industry in Pakistan’s economy and praised APMIA’s tireless efforts to promote the sector. Mr. Atif Ikram highlighted the need for continued collaboration and innovation to overcome the mining industry’s challenges.  </p>
<p>The guests and seniors highly appreciate the remarkable efforts &amp; achievements of the outgoing Chairman Asgher Khan Utmankhel &amp; his team.<br />
The new office bearers were sworn in:  </p>
<p>– Chairman: Mr. Muhammad Bilal Khan Mohmand<br />
– Senior Vice Chairman: Mr. Mian Irfan Zafar<br />
– Vice Chairman (South): Mr. Rahat Shah<br />
– Vice Chairman: Mr. Shah Khalid Safi</p>
<p>Mr. Muhammad Bilal Khan Mohmand, the incoming Chairman, committed to continue the legacy of the outgoing team by focusing on core targets:  </p>
<ol>
<li>Mining Mechanization  </li>
<li>Better Transportation  </li>
<li>Value Addition  </li>
<li>Boosting Exports  </li>
</ol>
<p>The AGM also featured discussions on future initiatives and strategic plans to address the mining industry challenges. The event concluded with a networking session, providing an opportunity for attendees to engage with industry peers and explore collaborative opportunities.</p>", "@Page:/Users/amer/Sites/apmia/user/pages/04.news/apmia-holds-successful-agm-and-oath-taking-ceremony", "");
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
