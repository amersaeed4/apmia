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

/* @Page:/Users/amer/Sites/apmia/user/pages/04.news/asghar-khan-utmankhel-chairman-of-apmia-along-with-wisal-khan-president-of-mardan-industries-association-mia-former-cec-member-apmia */
class __TwigTemplate_c1d2dc45f13b7c5d10ab21f6617a8200_sourced extends Template
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
        yield "<p>Asghar Khan Utmankhel, Chairman of APMIA, along with Wisal Khan, President of Mardan Industries Association (MIA) &amp; former CEC member APMIA, held a meeting with Engr. Said Mehmood, Vice Chairman of KPBOIT, and his team regarding the proposal of “KP Dimension Stone (Marble &amp; Granite) Expo and Investment Conference” and other different sector development initiatives. It was proposed to establish this event as a regular annual occurrence to enhance the dimension stone sector in KP.</p>
<p>Furthermore, collaborative efforts will be made to engage other government and private organizations, facilitating direct exports from KP.<br />
In conclusion, Vice Chairman KPBOIT presented an appreciation shield to Asghar Khan, Chairman of APMIA, in recognition of his dedicated efforts to advance the dimension stone sector in Pakistan.</p>
<p>In a second meeting held at KPTEVTA with Tahir Khan, the provincial coordinator of GIZ TEVT Support Program, the agenda revolved around forming a technical committee for reviewing, implementing Marble technician curricula, and other sector development projects.</p>";
        return; yield;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@Page:/Users/amer/Sites/apmia/user/pages/04.news/asghar-khan-utmankhel-chairman-of-apmia-along-with-wisal-khan-president-of-mardan-industries-association-mia-former-cec-member-apmia";
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
        return new Source("<p>Asghar Khan Utmankhel, Chairman of APMIA, along with Wisal Khan, President of Mardan Industries Association (MIA) &amp; former CEC member APMIA, held a meeting with Engr. Said Mehmood, Vice Chairman of KPBOIT, and his team regarding the proposal of “KP Dimension Stone (Marble &amp; Granite) Expo and Investment Conference” and other different sector development initiatives. It was proposed to establish this event as a regular annual occurrence to enhance the dimension stone sector in KP.</p>
<p>Furthermore, collaborative efforts will be made to engage other government and private organizations, facilitating direct exports from KP.<br />
In conclusion, Vice Chairman KPBOIT presented an appreciation shield to Asghar Khan, Chairman of APMIA, in recognition of his dedicated efforts to advance the dimension stone sector in Pakistan.</p>
<p>In a second meeting held at KPTEVTA with Tahir Khan, the provincial coordinator of GIZ TEVT Support Program, the agenda revolved around forming a technical committee for reviewing, implementing Marble technician curricula, and other sector development projects.</p>", "@Page:/Users/amer/Sites/apmia/user/pages/04.news/asghar-khan-utmankhel-chairman-of-apmia-along-with-wisal-khan-president-of-mardan-industries-association-mia-former-cec-member-apmia", "");
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
