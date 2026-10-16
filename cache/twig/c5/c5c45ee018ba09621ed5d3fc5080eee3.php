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

/* @Page:/Users/amer/Sites/apmia/user/pages/04.news/meeting-with-secretary-mines-and-minerals-development-department-of-kpk */
class __TwigTemplate_685fcb6c3b3e699892d765e8e8d6916c_sourced extends Template
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
        yield "<p>Mr. Muhammad Bilal Khan, Senior Vice Chairman including executive committee members including Mr. Shakir Ullah, Mr. Asghar Khan Utmankhel of All Pakistan Marble Industries Association and they had a meeting with Secretary Mines and Minerals Development Department of KPK in Peshawar, and informed him regarding the issues faced by the miners. They suggested different options which the Secretary appreciated at the end of the meeting and he made a commitment to invite the APMIA representatives in the next meeting.</p>
<p>Second meeting conducted with the Senator Mr. Hilal Khan regarding dynamite for the miners of Mohmand Agency, KPK and he promised the ammunition will be available to the miners within a week time. Ammunition issue will be resolved with the permits.</p>
<p><img alt=\"\" src=\"/user/pages/04.news/meeting-with-secretary-mines-and-minerals-development-department-of-kpk/30.jpg\" /></p>";
        return; yield;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@Page:/Users/amer/Sites/apmia/user/pages/04.news/meeting-with-secretary-mines-and-minerals-development-department-of-kpk";
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
        return new Source("<p>Mr. Muhammad Bilal Khan, Senior Vice Chairman including executive committee members including Mr. Shakir Ullah, Mr. Asghar Khan Utmankhel of All Pakistan Marble Industries Association and they had a meeting with Secretary Mines and Minerals Development Department of KPK in Peshawar, and informed him regarding the issues faced by the miners. They suggested different options which the Secretary appreciated at the end of the meeting and he made a commitment to invite the APMIA representatives in the next meeting.</p>
<p>Second meeting conducted with the Senator Mr. Hilal Khan regarding dynamite for the miners of Mohmand Agency, KPK and he promised the ammunition will be available to the miners within a week time. Ammunition issue will be resolved with the permits.</p>
<p><img alt=\"\" src=\"/user/pages/04.news/meeting-with-secretary-mines-and-minerals-development-department-of-kpk/30.jpg\" /></p>", "@Page:/Users/amer/Sites/apmia/user/pages/04.news/meeting-with-secretary-mines-and-minerals-development-department-of-kpk", "");
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
