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

/* components/table.html.twig */
class __TwigTemplate_1f7152a49ed91fb249f2bde461b15a3c extends Template
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
<div class=\"table-responsive card-table\">
   <table class=\"";
        // line 34
        yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("class", $context)) ? (Twig\Extension\CoreExtension::default(($context["class"] ?? null), "")) : ("")), "html", null, true);
        yield "\">
      <thead>
      ";
        // line 36
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["header_rows"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["header_row"]) {
            // line 37
            yield "         <tr>
            ";
            // line 38
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable($context["header_row"]);
            foreach ($context['_seq'] as $context["_key"] => $context["header"]) {
                // line 39
                yield "               ";
                if ( !is_iterable($context["header"])) {
                    // line 40
                    yield "                  ";
                    $context["header"] = ["content" => $context["header"]];
                    // line 41
                    yield "               ";
                }
                // line 42
                yield "               <th colspan=\"";
                yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["header"], "colspan", [], "any", true, true, false, 42)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["header"], "colspan", [], "any", false, false, false, 42), 1)) : (1)), "html", null, true);
                yield "\" style=\"";
                yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["header"], "style", [], "any", true, true, false, 42)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["header"], "style", [], "any", false, false, false, 42), "")) : ("")), "html", null, true);
                yield "\">";
                yield (string) CoreExtension::getAttribute($this->env, $this->source, $context["header"], "content", [], "any", false, false, false, 42);
                yield "</th>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['header'], $context['_parent']);
            $context = array_intersect_key($context, $_parent);
            $context += $_parent;
            // line 44
            yield "         </tr>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['header_row'], $context['_parent']);
        $context = array_intersect_key($context, $_parent);
        $context += $_parent;
        // line 46
        yield "      </thead>
      <tbody>
      ";
        // line 48
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["rows"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 49
            yield "         <tr class=\"";
            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["row"], "class", [], "any", true, true, false, 49)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["row"], "class", [], "any", false, false, false, 49), "")) : ("")), "html", null, true);
            yield "\">
            ";
            // line 50
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["row"], "values", [], "any", false, false, false, 50));
            foreach ($context['_seq'] as $context["_key"] => $context["value"]) {
                // line 51
                yield "               ";
                if ( !is_iterable($context["value"])) {
                    // line 52
                    yield "                  ";
                    $context["value"] = ["content" => $context["value"]];
                    // line 53
                    yield "               ";
                }
                // line 54
                yield "               <td colspan=\"";
                yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["value"], "colspan", [], "any", true, true, false, 54)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["value"], "colspan", [], "any", false, false, false, 54), 1)) : (1)), "html", null, true);
                yield "\" class=\"";
                yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["value"], "class", [], "any", true, true, false, 54)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["value"], "class", [], "any", false, false, false, 54), "")) : ("")), "html", null, true);
                yield "\" style=\"";
                yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["value"], "style", [], "any", true, true, false, 54)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["value"], "style", [], "any", false, false, false, 54), "")) : ("")), "html", null, true);
                yield "\">";
                yield (string) CoreExtension::getAttribute($this->env, $this->source, $context["value"], "content", [], "any", false, false, false, 54);
                yield "</td>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['value'], $context['_parent']);
            $context = array_intersect_key($context, $_parent);
            $context += $_parent;
            // line 56
            yield "         </tr>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['row'], $context['_parent']);
        $context = array_intersect_key($context, $_parent);
        $context += $_parent;
        // line 58
        yield "      </tbody>
   </table>
</div>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "components/table.html.twig";
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
        return array (  144 => 58,  136 => 56,  120 => 54,  117 => 53,  114 => 52,  111 => 51,  107 => 50,  102 => 49,  98 => 48,  94 => 46,  86 => 44,  72 => 42,  69 => 41,  66 => 40,  63 => 39,  59 => 38,  56 => 37,  52 => 36,  47 => 34,  43 => 32,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "components/table.html.twig", "/Users/alvarozuculajunior/BCX/glpi/templates/components/table.html.twig");
    }
}
