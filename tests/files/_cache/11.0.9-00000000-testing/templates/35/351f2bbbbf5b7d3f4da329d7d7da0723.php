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

/* components/itilobject/timeline/todo-list-summary.html.twig */
class __TwigTemplate_3736f24cbabbd2d96d575c9146b4fa04 extends Template
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
";
        // line 33
        $context["timeline_stats"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 33, $this->source); })()), "getTimelineStats", [], "method", false, false, false, 33);
        // line 34
        $context["total_duration"] = (((CoreExtension::getAttribute($this->env, $this->source, ($context["timeline_stats"] ?? null), "total_duration", [], "array", true, true, false, 34) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["timeline_stats"]) || array_key_exists("timeline_stats", $context) ? $context["timeline_stats"] : (function () { throw new RuntimeError('Variable "timeline_stats" does not exist.', 34, $this->source); })()), "total_duration", [], "array", false, false, false, 34)))) ? (CoreExtension::getAttribute($this->env, $this->source, (isset($context["timeline_stats"]) || array_key_exists("timeline_stats", $context) ? $context["timeline_stats"] : (function () { throw new RuntimeError('Variable "timeline_stats" does not exist.', 34, $this->source); })()), "total_duration", [], "array", false, false, false, 34)) : (0));
        // line 35
        $context["todo_percent"] = (((CoreExtension::getAttribute($this->env, $this->source, ($context["timeline_stats"] ?? null), "percent_done", [], "array", true, true, false, 35) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["timeline_stats"]) || array_key_exists("timeline_stats", $context) ? $context["timeline_stats"] : (function () { throw new RuntimeError('Variable "timeline_stats" does not exist.', 35, $this->source); })()), "percent_done", [], "array", false, false, false, 35)))) ? (CoreExtension::getAttribute($this->env, $this->source, (isset($context["timeline_stats"]) || array_key_exists("timeline_stats", $context) ? $context["timeline_stats"] : (function () { throw new RuntimeError('Variable "timeline_stats" does not exist.', 35, $this->source); })()), "percent_done", [], "array", false, false, false, 35)) : (0));
        // line 36
        yield "
<div class=\"timeline-item timeline_stats pb-3\">
   <div class=\"mb-2 ms-1 text-muted\">
      ";
        // line 39
        yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::sprintf(__("Total duration: %s"), $this->extensions['Glpi\Application\View\Extension\DataHelpersExtension']->getFormattedDuration((isset($context["total_duration"]) || array_key_exists("total_duration", $context) ? $context["total_duration"] : (function () { throw new RuntimeError('Variable "total_duration" does not exist.', 39, $this->source); })()))), "html", null, true);
        yield "
   </div>
   <div class=\"d-flex\">
      <span class=\"task-progress-label mx-2\">
         ";
        // line 43
        yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["todo_percent"]) || array_key_exists("todo_percent", $context) ? $context["todo_percent"] : (function () { throw new RuntimeError('Variable "todo_percent" does not exist.', 43, $this->source); })()), "html", null, true);
        yield "%
      </span>
      <div class=\"progress mt-1\" style=\"max-width: 260px\">
         <div class=\"progress-bar progress-bar-striped timeline-progress\" role=\"progressbar\" style=\"width: ";
        // line 46
        yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["todo_percent"]) || array_key_exists("todo_percent", $context) ? $context["todo_percent"] : (function () { throw new RuntimeError('Variable "todo_percent" does not exist.', 46, $this->source); })()), "html", null, true);
        yield "%;\"
              aria-valuenow=\"";
        // line 47
        yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["todo_percent"]) || array_key_exists("todo_percent", $context) ? $context["todo_percent"] : (function () { throw new RuntimeError('Variable "todo_percent" does not exist.', 47, $this->source); })()), "html", null, true);
        yield "\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
      </div>
   </div>
</div>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "components/itilobject/timeline/todo-list-summary.html.twig";
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
        return array (  74 => 47,  70 => 46,  64 => 43,  57 => 39,  52 => 36,  50 => 35,  48 => 34,  46 => 33,  43 => 32,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "components/itilobject/timeline/todo-list-summary.html.twig", "/Users/alvarozuculajunior/BCX/glpi/templates/components/itilobject/timeline/todo-list-summary.html.twig");
    }
}
