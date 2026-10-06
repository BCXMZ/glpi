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

/* pages/assistance/planning/planning.html.twig */
class __TwigTemplate_a7b5a10a9a43facab2fc753c2570f1ce extends Template
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
<div ";
        // line 33
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "full_view", [], "any", false, false, false, 33)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield " id=\"planning_container\" ";
        }
        yield " class=\"d-flex flex-wrap flex-sm-nowrap\">
    ";
        // line 34
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "full_view", [], "any", false, false, false, 34)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 35
            yield "        ";
            yield (string) Twig\Extension\CoreExtension::include($this->env, $context, "pages/assistance/planning/filters.html.twig");
            yield "
    ";
        }
        // line 37
        yield "    <div id=\"planning";
        yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "rand", [], "any", false, false, false, 37), "html", null, true);
        yield "\" class=\"planning-view flex-fill\"></div>
</div>
<script>
    \$(() => {
        GLPIPlanning.display(";
        // line 41
        yield (string) json_encode(($context["options"] ?? null));
        yield ");
        GLPIPlanning.planningFilters();
    });
</script>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "pages/assistance/planning/planning.html.twig";
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
        return array (  68 => 41,  60 => 37,  54 => 35,  52 => 34,  46 => 33,  43 => 32,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "pages/assistance/planning/planning.html.twig", "/Users/alvarozuculajunior/BCX/glpi/templates/pages/assistance/planning/planning.html.twig");
    }
}
