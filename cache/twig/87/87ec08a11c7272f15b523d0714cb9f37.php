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

/* @Page:/Users/amer/Sites/apmia/user/pages/06.membership */
class __TwigTemplate_4b2c794f1139a94b657fb726e222c5aa_sourced extends Template
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
        yield "<h2>New Membership</h2>
<h3>List of Documents Required</h3>
<ul>
<li>Copy of CNIC</li>
<li>Copy of National Tax Number (NTN) Certificate</li>
<li>Latest Income Tax Return, where applicable</li>
<li>Two photographs of the representative (Passport Size)</li>
<li>A copy of Sales Tax Registration, if registered / applicable</li>
<li>Duly filled application form (<a href=\"/membership/Membership-Form.pdf\">click to download</a> )</li>
<li>Visiting Card</li>
</ul>
<h3>New Membership Fee:</h3>
<ul>
<li>Rs. 4,500/- (Associate Class + membership card)</li>
<li>Rs. 7,500/- (Corporate Class + membership card)</li>
</ul>
<h2>Membership Renewal</h2>
<ul>
<li>Copy of CNIC</li>
<li>Latest Income Tax Return, where applicable</li>
<li>One photograph (Passport Size)</li>
<li>Copy of GST (if applicable / registered)</li>
<li>Duly filled application form (<a href=\"/membership/Renewal-Form.pdf\">click to download</a> )</li>
</ul>
<h3>Renewal Membership Fee:</h3>
<ul>
<li>Rs. 3,000/- ( Associate Class )</li>
<li>Rs. 7,500/- ( Corporate Class )</li>
<li>Rs. 500/- ( Membership Card )</li>
</ul>
<h3>Payment Mode:</h3>
<p>Payment should be made through Pay Order, Bank Draft or Cross Cheque in favour of \"All Pakistan Marble Industries Association\" or through online deposit in APMIA Bank Account Number: 0010000410380016, Allied Bank Limited, I-9 Branch, Islamabad.</p>
<h3>Note:</h3>
<ul>
<li>Incomplete application will not be entertained.</li>
<li>Application form must be proposed and seconded by any two valid members of APMIA.</li>
<li>for any further support, please <a href=\"/contact\">contact us</a>.</li>
</ul>";
        return; yield;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@Page:/Users/amer/Sites/apmia/user/pages/06.membership";
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
        return new Source("<h2>New Membership</h2>
<h3>List of Documents Required</h3>
<ul>
<li>Copy of CNIC</li>
<li>Copy of National Tax Number (NTN) Certificate</li>
<li>Latest Income Tax Return, where applicable</li>
<li>Two photographs of the representative (Passport Size)</li>
<li>A copy of Sales Tax Registration, if registered / applicable</li>
<li>Duly filled application form (<a href=\"/membership/Membership-Form.pdf\">click to download</a> )</li>
<li>Visiting Card</li>
</ul>
<h3>New Membership Fee:</h3>
<ul>
<li>Rs. 4,500/- (Associate Class + membership card)</li>
<li>Rs. 7,500/- (Corporate Class + membership card)</li>
</ul>
<h2>Membership Renewal</h2>
<ul>
<li>Copy of CNIC</li>
<li>Latest Income Tax Return, where applicable</li>
<li>One photograph (Passport Size)</li>
<li>Copy of GST (if applicable / registered)</li>
<li>Duly filled application form (<a href=\"/membership/Renewal-Form.pdf\">click to download</a> )</li>
</ul>
<h3>Renewal Membership Fee:</h3>
<ul>
<li>Rs. 3,000/- ( Associate Class )</li>
<li>Rs. 7,500/- ( Corporate Class )</li>
<li>Rs. 500/- ( Membership Card )</li>
</ul>
<h3>Payment Mode:</h3>
<p>Payment should be made through Pay Order, Bank Draft or Cross Cheque in favour of \"All Pakistan Marble Industries Association\" or through online deposit in APMIA Bank Account Number: 0010000410380016, Allied Bank Limited, I-9 Branch, Islamabad.</p>
<h3>Note:</h3>
<ul>
<li>Incomplete application will not be entertained.</li>
<li>Application form must be proposed and seconded by any two valid members of APMIA.</li>
<li>for any further support, please <a href=\"/contact\">contact us</a>.</li>
</ul>", "@Page:/Users/amer/Sites/apmia/user/pages/06.membership", "");
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
