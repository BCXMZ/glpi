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

/* components/itilobject/fields/status.html.twig */
class __TwigTemplate_4c00a4deda1ffb59b2b4c0095c0b1c53 extends Template
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
        $macros["fields"] = $this->macros["fields"] = $this->load("components/form/fields_macros.html.twig", 33)->unwrap();
        // line 34
        yield "
";
        // line 35
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["itiltemplate"]) || array_key_exists("itiltemplate", $context) ? $context["itiltemplate"] : (function () { throw new RuntimeError('Variable "itiltemplate" does not exist.', 35, $this->source); })()), "isReadonlyField", ["status"], "method", false, false, false, 35)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 36
            yield "   ";
            $context["field_options"] = Twig\Extension\CoreExtension::merge((isset($context["field_options"]) || array_key_exists("field_options", $context) ? $context["field_options"] : (function () { throw new RuntimeError('Variable "field_options" does not exist.', 36, $this->source); })()), ["readonly" => true]);
        }
        // line 38
        yield "
";
        // line 39
        if ((($tmp = (isset($context["canupdate"]) || array_key_exists("canupdate", $context) ? $context["canupdate"] : (function () { throw new RuntimeError('Variable "canupdate" does not exist.', 39, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 40
            yield "   ";
            $context["status_field"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                // line 41
                yield "      ";
                yield (string) CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 41, $this->source); })()), "dropdownStatus", [Twig\Extension\CoreExtension::merge(["value" => ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,                 // line 42
($context["item"] ?? null), "input", [], "any", false, true, false, 42), "status", [], "array", true, true, false, 42)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 42, $this->source); })()), "input", [], "any", false, false, false, 42), "status", [], "array", false, false, false, 42), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 42, $this->source); })()), "fields", [], "any", false, false, false, 42), "status", [], "array", false, false, false, 42))) : (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 42, $this->source); })()), "fields", [], "any", false, false, false, 42), "status", [], "array", false, false, false, 42))), "value_calculation" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,                 // line 43
(isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 43, $this->source); })()), "fields", [], "any", false, false, false, 43), "status", [], "array", false, false, false, 43), "showtype" => "allowed", "width" => "100%", "display" => false, "use_template_limits" => (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,                 // line 47
($context["itiltemplate"] ?? null), "fields", [], "any", false, true, false, 47), "id", [], "array", true, true, false, 47) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["itiltemplate"]) || array_key_exists("itiltemplate", $context) ? $context["itiltemplate"] : (function () { throw new RuntimeError('Variable "itiltemplate" does not exist.', 47, $this->source); })()), "fields", [], "any", false, false, false, 47), "id", [], "array", false, false, false, 47)))) ? (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["itiltemplate"]) || array_key_exists("itiltemplate", $context) ? $context["itiltemplate"] : (function () { throw new RuntimeError('Variable "itiltemplate" does not exist.', 47, $this->source); })()), "fields", [], "any", false, false, false, 47), "id", [], "array", false, false, false, 47)) : (0))],                 // line 48
(isset($context["field_options"]) || array_key_exists("field_options", $context) ? $context["field_options"] : (function () { throw new RuntimeError('Variable "field_options" does not exist.', 48, $this->source); })()))], "method", false, false, false, 41);
                yield "

      ";
                // line 50
                $context["validation_class"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 50, $this->source); })()), "getValidationClassInstance", [], "method", false, false, false, 50);
                // line 51
                yield "      ";
                if ( !(null === (isset($context["validation_class"]) || array_key_exists("validation_class", $context) ? $context["validation_class"] : (function () { throw new RuntimeError('Variable "validation_class" does not exist.', 51, $this->source); })()))) {
                    // line 52
                    yield "         ";
                    yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["validation_class"]) || array_key_exists("validation_class", $context) ? $context["validation_class"] : (function () { throw new RuntimeError('Variable "validation_class" does not exist.', 52, $this->source); })()), "alertValidation", [(isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 52, $this->source); })()), "status"], "method", false, false, false, 52), "html", null, true);
                    yield "
      ";
                }
                // line 54
                yield "
      ";
                // line 55
                yield (string) Twig\Extension\CoreExtension::include($this->env, $context, "components/itilobject/timeline/pending_reasons_messages.html.twig", ["display_for_parent" => true]);
                // line 57
                yield "
   ";
                yield from [];
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
        } else {
            // line 60
            yield "   ";
            $context["field_options"] = Twig\Extension\CoreExtension::merge((isset($context["field_options"]) || array_key_exists("field_options", $context) ? $context["field_options"] : (function () { throw new RuntimeError('Variable "field_options" does not exist.', 60, $this->source); })()), ["center" => true]);
            // line 61
            yield "   ";
            $context["status_field"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                // line 62
                yield "      ";
                yield (string) CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 62, $this->source); })()), "getStatusIcon", [CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 62, $this->source); })()), "fields", [], "any", false, false, false, 62), "status", [], "array", false, false, false, 62)], "method", false, false, false, 62);
                yield "
      ";
                // line 63
                yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 63, $this->source); })()), "getStatus", [CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 63, $this->source); })()), "fields", [], "any", false, false, false, 63), "status", [], "array", false, false, false, 63)], "method", false, false, false, 63), "html", null, true);
                yield "

      ";
                // line 65
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 65, $this->source); })()), "canReopen", [], "method", false, false, false, 65)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 66
                    yield "         <a href=\"";
                    yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 66, $this->source); })()), "getLinkURL", [], "method", false, false, false, 66), "html", null, true);
                    yield "&amp;_openfollowup=1\"
            class=\"btn btn-ghost-secondary\">
            <i class=\"ti ti-folder-open\"></i>
            <span>";
                    // line 69
                    yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Reopen"), "html", null, true);
                    yield "</span>
         </a>
      ";
                }
                // line 72
                yield "   ";
                yield from [];
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
        }
        // line 74
        yield "
";
        // line 75
        yield (string) $macros["fields"]->getTemplateForMacro("macro_field", $context, 75, $this->getSourceContext())->macro_field(...["status",         // line 77
(isset($context["status_field"]) || array_key_exists("status_field", $context) ? $context["status_field"] : (function () { throw new RuntimeError('Variable "status_field" does not exist.', 77, $this->source); })()), __("Status"),         // line 79
(isset($context["field_options"]) || array_key_exists("field_options", $context) ? $context["field_options"] : (function () { throw new RuntimeError('Variable "field_options" does not exist.', 79, $this->source); })())]);
        // line 80
        yield "
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "components/itilobject/fields/status.html.twig";
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
        return array (  140 => 80,  138 => 79,  137 => 77,  136 => 75,  133 => 74,  128 => 72,  122 => 69,  115 => 66,  113 => 65,  108 => 63,  103 => 62,  100 => 61,  97 => 60,  91 => 57,  89 => 55,  86 => 54,  80 => 52,  77 => 51,  75 => 50,  70 => 48,  69 => 47,  68 => 43,  67 => 42,  65 => 41,  62 => 40,  60 => 39,  57 => 38,  53 => 36,  51 => 35,  48 => 34,  46 => 33,  43 => 32,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "components/itilobject/fields/status.html.twig", "/Users/alvarozuculajunior/BCX/glpi/templates/components/itilobject/fields/status.html.twig");
    }
}
