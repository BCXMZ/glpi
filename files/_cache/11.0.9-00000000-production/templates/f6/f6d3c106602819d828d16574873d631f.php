<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Sandbox\SecurityNotAllowedTestError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* error_block.html.twig */
class __TwigTemplate_d911c94fb55643be2e8f4d205d02737c extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 32
        yield "
<div class=\"card\">
    <div class=\"card-body\">
        <div role=\"alert\" class=\"alert alert-danger alert-important\">
            <div class=\"d-flex\">
                <div class=\"me-2\">
                    <i class=\"ti ti-alert-triangle fs-2x\"></i>
                </div>
                <div>
                    ";
        // line 41
        yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["message"] ?? null), "html", null, true);
        yield "
                    ";
        // line 42
        if ( !Twig\Extension\CoreExtension::testEmpty(($context["link_url"] ?? null))) {
            // line 43
            yield "                        <br>
                        <a href=\"";
            // line 44
            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["link_url"] ?? null), "html", null, true);
            yield "\">";
            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["link_text"] ?? null), "html", null, true);
            yield "</a>
                    ";
        }
        // line 46
        yield "                </div>
            </div>
        </div>

        ";
        // line 50
        if ( !Twig\Extension\CoreExtension::testEmpty(($context["trace"] ?? null))) {
            // line 51
            yield "            <pre data-testid=\"stack-trace\">";
            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["trace"] ?? null), "html", null, true);
            yield "</pre>
        ";
        }
        // line 53
        yield "    </div>
</div>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "error_block.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  84 => 53,  78 => 51,  76 => 50,  70 => 46,  63 => 44,  60 => 43,  58 => 42,  54 => 41,  43 => 32,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "error_block.html.twig", "/Users/alvarozuculajunior/BCX/glpi/templates/error_block.html.twig");
    }
}
