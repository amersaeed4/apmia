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

/* @Page:/Users/amer/Sites/apmia/user/pages/02.about/mission-statement */
class __TwigTemplate_cc28e85b7dcd90a136b6018c83a84a9b_sourced extends Template
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
        yield "<p>All Pakistan Marble Industries Association (APMIA) established with a commitment to serve Pakistan’s Ornamental Stone Industries that specialize in Marble, Granite, Sandstone, Onyx etc.</p>
<p>All Pakistan Marble Industries Association (APMIA) has been working since 1985 with the basic objectives to aid and stimulate the production and development of marble and granite industry , marketing and export of marble &amp; granite, progress business in which marble industry is engaged and scientific development as well as in removing obstacles to achieve rapid and constant growth. Over the years, we have successfully created maximum awareness in the Pakistani stone markets and brought continuous interaction between Pakistan ornamental stone industries. .</p>
<p>All along, the Association has been very aggressive in taking the problems to concerned authorities, knocking the doors of the lowest to the highest and solving them by getting positive and favorable action to help and augment Pakistan’s stone trade.<br />
As the only premier body at national level to speak and serve for Pakistan’s stone industries, APMIA takes under its umbrella all those involved in granites, marbles, slates, sand stones, lime stones, quartzite’s etc., in whatever capacity they are in: Quarry lessees, processors of finished products, suppliers of plant and machinery, manufacturers and suppliers of consumables, diamond tools, traders and agents etc. In short, who ever are in ornamental building stones industry in Pakistan directly or indirectly can enroll with the Association and enjoy the privileges of being so. Over the years, the Association has gained the reputation of being the prime organization on Pakistan reserves of various granites, marbles and other stones, where to find them, whom to approach, how and where to source with the right contacts. The Association presently has 370 AM class members, 40 CM class members on its roll taking the total number of members to 410. There is no bar, anyone from the stone industry from anywhere in Pakistan can become a member of APMIA. The Association thanks you for visiting our site, cordially invites your valuable suggestions and enquiries. Feel free to contact us anytime.</p>";
        return; yield;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@Page:/Users/amer/Sites/apmia/user/pages/02.about/mission-statement";
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
        return new Source("<p>All Pakistan Marble Industries Association (APMIA) established with a commitment to serve Pakistan’s Ornamental Stone Industries that specialize in Marble, Granite, Sandstone, Onyx etc.</p>
<p>All Pakistan Marble Industries Association (APMIA) has been working since 1985 with the basic objectives to aid and stimulate the production and development of marble and granite industry , marketing and export of marble &amp; granite, progress business in which marble industry is engaged and scientific development as well as in removing obstacles to achieve rapid and constant growth. Over the years, we have successfully created maximum awareness in the Pakistani stone markets and brought continuous interaction between Pakistan ornamental stone industries. .</p>
<p>All along, the Association has been very aggressive in taking the problems to concerned authorities, knocking the doors of the lowest to the highest and solving them by getting positive and favorable action to help and augment Pakistan’s stone trade.<br />
As the only premier body at national level to speak and serve for Pakistan’s stone industries, APMIA takes under its umbrella all those involved in granites, marbles, slates, sand stones, lime stones, quartzite’s etc., in whatever capacity they are in: Quarry lessees, processors of finished products, suppliers of plant and machinery, manufacturers and suppliers of consumables, diamond tools, traders and agents etc. In short, who ever are in ornamental building stones industry in Pakistan directly or indirectly can enroll with the Association and enjoy the privileges of being so. Over the years, the Association has gained the reputation of being the prime organization on Pakistan reserves of various granites, marbles and other stones, where to find them, whom to approach, how and where to source with the right contacts. The Association presently has 370 AM class members, 40 CM class members on its roll taking the total number of members to 410. There is no bar, anyone from the stone industry from anywhere in Pakistan can become a member of APMIA. The Association thanks you for visiting our site, cordially invites your valuable suggestions and enquiries. Feel free to contact us anytime.</p>", "@Page:/Users/amer/Sites/apmia/user/pages/02.about/mission-statement", "");
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
