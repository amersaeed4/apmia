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

/* @Page:/Users/amer/Sites/apmia/user/pages/02.about/05.standing-committees/standing-committees-2017-18 */
class __TwigTemplate_70261ddbad6d0a9521eeebcb690775d6_sourced extends Template
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
        yield "<ul>
<li>
<p>Finance Committee Chairman approved the name of finance committee for the signing authority of Allied Bank A/c No. 1384-5 with the title of APMIA. Signatory Authorities include’</p>
</li>
<li>
<p>Mr. Mushtaq Ahmad (Senior Vice Chairman APMIA)</p>
</li>
<li>
<p>Mr. Ilyas Muhammad (Executive member)</p>
</li>
<li>
<p>Mr. Farrukh Majeed (Member)</p>
</li>
<li>
<p>Export Promotion Committee Chairman approved the names of Export Promotion Committee for the regular coordination with Trade Development Authority of Pakistan, Committee members include;</p>
</li>
<li>
<p>Ilyas Muhammad (Executive member)</p>
</li>
<li>
<p>Sana Ullah Khan (Ex-Chairman)</p>
</li>
<li>
<p>Muhammad Haroon Rashid (Ex-Chairman)</p>
</li>
</ul>";
        return; yield;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@Page:/Users/amer/Sites/apmia/user/pages/02.about/05.standing-committees/standing-committees-2017-18";
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
        return new Source("<ul>
<li>
<p>Finance Committee Chairman approved the name of finance committee for the signing authority of Allied Bank A/c No. 1384-5 with the title of APMIA. Signatory Authorities include’</p>
</li>
<li>
<p>Mr. Mushtaq Ahmad (Senior Vice Chairman APMIA)</p>
</li>
<li>
<p>Mr. Ilyas Muhammad (Executive member)</p>
</li>
<li>
<p>Mr. Farrukh Majeed (Member)</p>
</li>
<li>
<p>Export Promotion Committee Chairman approved the names of Export Promotion Committee for the regular coordination with Trade Development Authority of Pakistan, Committee members include;</p>
</li>
<li>
<p>Ilyas Muhammad (Executive member)</p>
</li>
<li>
<p>Sana Ullah Khan (Ex-Chairman)</p>
</li>
<li>
<p>Muhammad Haroon Rashid (Ex-Chairman)</p>
</li>
</ul>", "@Page:/Users/amer/Sites/apmia/user/pages/02.about/05.standing-committees/standing-committees-2017-18", "");
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
