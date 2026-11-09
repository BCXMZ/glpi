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
class __TwigTemplate_7348960fb66d7859a9fd92db7af6acd7 extends Template
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
        yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 41, $this->source); })()), "html", null, true);
        yield "
                    ";
        // line 42
        if ( !Twig\Extension\CoreExtension::testEmpty((isset($context["link_url"]) || array_key_exists("link_url", $context) ? $context["link_url"] : (function () { throw new RuntimeError('Variable "link_url" does not exist.', 42, $this->source); })()))) {
            // line 43
            yield "                        <br>
                        <a href=\"";
            // line 44
            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["link_url"]) || array_key_exists("link_url", $context) ? $context["link_url"] : (function () { throw new RuntimeError('Variable "link_url" does not exist.', 44, $this->source); })()), "html", null, true);
            yield "\">";
            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["link_text"]) || array_key_exists("link_text", $context) ? $context["link_text"] : (function () { throw new RuntimeError('Variable "link_text" does not exist.', 44, $this->source); })()), "html", null, true);
            yield "</a>
                    ";
        }
        // line 46
        yield "                </div>
            </div>
        </div>

        ";
        // line 50
        if ( !Twig\Extension\CoreExtension::testEmpty((isset($context["trace"]) || array_key_exists("trace", $context) ? $context["trace"] : (function () { throw new RuntimeError('Variable "trace" does not exist.', 50, $this->source); })()))) {
            // line 51
            yield "            <pre data-testid=\"stack-trace\">";
            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["trace"]) || array_key_exists("trace", $context) ? $context["trace"] : (function () { throw new RuntimeError('Variable "trace" does not exist.', 51, $this->source); })()), "html", null, true);
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
