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

/* @Page:/Users/amer/Sites/apmia/user/pages/04.news/meeting-with-collector-exports */
class __TwigTemplate_3578f255f8793fab5da86afeaf54f04f_sourced extends Template
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
        yield "<p>A meeting was conducted of APMIA representatives with collector exports regarding minimum value of exports and they also suggested to keep an advisory committee from APMIA for further guidance. Both suggestions were accepted and APMIA representatives immediately shared the value of formula (Reverse calculation of cost) to the Assistant Collector along with the other relevant officers.</p>
<p>The advisory committee of APMIA will consist of the following members,</p>
<ol>
<li>i) Muhammad Saleem Khan</li>
<li>ii) Atiq Ur Rehman Abbasi</li>
</ol>
<p>iii) Mr. Haroon Rasheed</p>
<ol>
<li>iv) Niaz Muhammad</li>
</ol>
<p>v) Mr. Faraz Khan (Office Secreatry, Southern Zone)</p>";
        return; yield;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@Page:/Users/amer/Sites/apmia/user/pages/04.news/meeting-with-collector-exports";
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
        return new Source("<p>A meeting was conducted of APMIA representatives with collector exports regarding minimum value of exports and they also suggested to keep an advisory committee from APMIA for further guidance. Both suggestions were accepted and APMIA representatives immediately shared the value of formula (Reverse calculation of cost) to the Assistant Collector along with the other relevant officers.</p>
<p>The advisory committee of APMIA will consist of the following members,</p>
<ol>
<li>i) Muhammad Saleem Khan</li>
<li>ii) Atiq Ur Rehman Abbasi</li>
</ol>
<p>iii) Mr. Haroon Rasheed</p>
<ol>
<li>iv) Niaz Muhammad</li>
</ol>
<p>v) Mr. Faraz Khan (Office Secreatry, Southern Zone)</p>", "@Page:/Users/amer/Sites/apmia/user/pages/04.news/meeting-with-collector-exports", "");
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
