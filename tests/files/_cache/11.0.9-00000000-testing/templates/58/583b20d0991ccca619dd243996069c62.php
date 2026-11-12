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

/* components/illustration/icon.svg.twig */
class __TwigTemplate_32ce0fcd227491f928c6984b8f91c5eb extends Template
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
<svg role=\"img\" width=\"";
        // line 33
        yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["width"]) || array_key_exists("width", $context) ? $context["width"] : (function () { throw new RuntimeError('Variable "width" does not exist.', 33, $this->source); })()), "html", null, true);
        yield "\" height=\"";
        yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["height"]) || array_key_exists("height", $context) ? $context["height"] : (function () { throw new RuntimeError('Variable "height" does not exist.', 33, $this->source); })()), "html", null, true);
        yield "\" class=\"flex-shrink-0\">
    <title>";
        // line 34
        yield (string) (((array_key_exists("title", $context) &&  !(null === $context["title"]))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["title"], "html", null, true)) : (""));
        yield "</title>
    <use xlink:href=\"";
        // line 35
        yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\RoutingExtension']->path((isset($context["file_path"]) || array_key_exists("file_path", $context) ? $context["file_path"] : (function () { throw new RuntimeError('Variable "file_path" does not exist.', 35, $this->source); })())), "html", null, true);
        yield "#";
        yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["icon_id"]) || array_key_exists("icon_id", $context) ? $context["icon_id"] : (function () { throw new RuntimeError('Variable "icon_id" does not exist.', 35, $this->source); })()), "html", null, true);
        yield "\"/>
</svg>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "components/illustration/icon.svg.twig";
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
        return array (  56 => 35,  52 => 34,  46 => 33,  43 => 32,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "components/illustration/icon.svg.twig", "/Users/alvarozuculajunior/BCX/glpi/templates/components/illustration/icon.svg.twig");
    }
}
