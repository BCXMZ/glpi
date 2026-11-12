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

/* components/itilobject/fields/priority_matrix.html.twig */
class __TwigTemplate_3ae7f915da353c312f686c75a6e91a38 extends Template
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
        $context["urgency_options"] = Twig\Extension\CoreExtension::merge((isset($context["field_options"]) || array_key_exists("field_options", $context) ? $context["field_options"] : (function () { throw new RuntimeError('Variable "field_options" does not exist.', 35, $this->source); })()), ["disabled" => (!((($tmp =         // line 36
(isset($context["canupdate"]) || array_key_exists("canupdate", $context) ? $context["canupdate"] : (function () { throw new RuntimeError('Variable "canupdate" does not exist.', 36, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp) || (($tmp = (isset($context["can_requester"]) || array_key_exists("can_requester", $context) ? $context["can_requester"] : (function () { throw new RuntimeError('Variable "can_requester" does not exist.', 36, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)))]);
        // line 38
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["field_options"]) || array_key_exists("field_options", $context) ? $context["field_options"] : (function () { throw new RuntimeError('Variable "field_options" does not exist.', 38, $this->source); })()), "fields_template", [], "any", false, false, false, 38), "isMandatoryField", ["urgency"], "method", false, false, false, 38)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 39
            yield "   ";
            $context["urgency_options"] = Twig\Extension\CoreExtension::merge((isset($context["urgency_options"]) || array_key_exists("urgency_options", $context) ? $context["urgency_options"] : (function () { throw new RuntimeError('Variable "urgency_options" does not exist.', 39, $this->source); })()), ["required" => true]);
        }
        // line 43
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["field_options"]) || array_key_exists("field_options", $context) ? $context["field_options"] : (function () { throw new RuntimeError('Variable "field_options" does not exist.', 43, $this->source); })()), "fields_template", [], "any", false, false, false, 43), "isReadonlyField", ["urgency"], "method", false, false, false, 43)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 44
            yield "   ";
            $context["urgency_options"] = Twig\Extension\CoreExtension::merge((isset($context["urgency_options"]) || array_key_exists("urgency_options", $context) ? $context["urgency_options"] : (function () { throw new RuntimeError('Variable "urgency_options" does not exist.', 44, $this->source); })()), ["readonly" => true]);
        }
        // line 48
        yield "
";
        // line 49
        yield (string) $macros["fields"]->getTemplateForMacro("macro_field", $context, 49, $this->getSourceContext())->macro_field(...["urgency", CoreExtension::getAttribute($this->env, $this->source,         // line 51
(isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 51, $this->source); })()), "dropdownUrgency", [Twig\Extension\CoreExtension::merge(["value" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 52
(isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 52, $this->source); })()), "fields", [], "any", false, false, false, 52), "urgency", [], "array", false, false, false, 52), "width" => "100%", "display" => false, "rand" => CoreExtension::getAttribute($this->env, $this->source,         // line 55
(isset($context["field_options"]) || array_key_exists("field_options", $context) ? $context["field_options"] : (function () { throw new RuntimeError('Variable "field_options" does not exist.', 55, $this->source); })()), "rand", [], "any", false, false, false, 55)],         // line 56
(isset($context["urgency_options"]) || array_key_exists("urgency_options", $context) ? $context["urgency_options"] : (function () { throw new RuntimeError('Variable "urgency_options" does not exist.', 56, $this->source); })()))], "method", false, false, false, 51), __("Urgency"), Twig\Extension\CoreExtension::merge(        // line 58
(isset($context["field_options"]) || array_key_exists("field_options", $context) ? $context["field_options"] : (function () { throw new RuntimeError('Variable "field_options" does not exist.', 58, $this->source); })()), ["id" => ("dropdown_urgency" . CoreExtension::getAttribute($this->env, $this->source,         // line 59
(isset($context["field_options"]) || array_key_exists("field_options", $context) ? $context["field_options"] : (function () { throw new RuntimeError('Variable "field_options" does not exist.', 59, $this->source); })()), "rand", [], "any", false, false, false, 59))])]);
        // line 61
        yield "

";
        // line 63
        $context["impact_options"] = (isset($context["field_options"]) || array_key_exists("field_options", $context) ? $context["field_options"] : (function () { throw new RuntimeError('Variable "field_options" does not exist.', 63, $this->source); })());
        // line 64
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["field_options"]) || array_key_exists("field_options", $context) ? $context["field_options"] : (function () { throw new RuntimeError('Variable "field_options" does not exist.', 64, $this->source); })()), "fields_template", [], "any", false, false, false, 64), "isMandatoryField", ["impact"], "method", false, false, false, 64)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 65
            yield "   ";
            $context["impact_options"] = Twig\Extension\CoreExtension::merge((isset($context["impact_options"]) || array_key_exists("impact_options", $context) ? $context["impact_options"] : (function () { throw new RuntimeError('Variable "impact_options" does not exist.', 65, $this->source); })()), ["required" => true]);
        }
        // line 69
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["field_options"]) || array_key_exists("field_options", $context) ? $context["field_options"] : (function () { throw new RuntimeError('Variable "field_options" does not exist.', 69, $this->source); })()), "fields_template", [], "any", false, false, false, 69), "isReadonlyField", ["impact"], "method", false, false, false, 69)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 70
            yield "   ";
            $context["impact_options"] = Twig\Extension\CoreExtension::merge((isset($context["impact_options"]) || array_key_exists("impact_options", $context) ? $context["impact_options"] : (function () { throw new RuntimeError('Variable "impact_options" does not exist.', 70, $this->source); })()), ["readonly" => true]);
        }
        // line 74
        yield "
";
        // line 75
        yield (string) $macros["fields"]->getTemplateForMacro("macro_field", $context, 75, $this->getSourceContext())->macro_field(...["impact", CoreExtension::getAttribute($this->env, $this->source,         // line 77
(isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 77, $this->source); })()), "dropdownImpact", [Twig\Extension\CoreExtension::merge(["value" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 78
(isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 78, $this->source); })()), "fields", [], "any", false, false, false, 78), "impact", [], "array", false, false, false, 78), "width" => "100%", "display" => false, "rand" => CoreExtension::getAttribute($this->env, $this->source,         // line 81
(isset($context["field_options"]) || array_key_exists("field_options", $context) ? $context["field_options"] : (function () { throw new RuntimeError('Variable "field_options" does not exist.', 81, $this->source); })()), "rand", [], "any", false, false, false, 81)],         // line 82
(isset($context["impact_options"]) || array_key_exists("impact_options", $context) ? $context["impact_options"] : (function () { throw new RuntimeError('Variable "impact_options" does not exist.', 82, $this->source); })()))], "method", false, false, false, 77), __("Impact"), Twig\Extension\CoreExtension::merge(        // line 84
(isset($context["field_options"]) || array_key_exists("field_options", $context) ? $context["field_options"] : (function () { throw new RuntimeError('Variable "field_options" does not exist.', 84, $this->source); })()), ["id" => ("dropdown_impact" . CoreExtension::getAttribute($this->env, $this->source,         // line 85
(isset($context["field_options"]) || array_key_exists("field_options", $context) ? $context["field_options"] : (function () { throw new RuntimeError('Variable "field_options" does not exist.', 85, $this->source); })()), "rand", [], "any", false, false, false, 85))])]);
        // line 87
        yield "

";
        // line 89
        $context["priority_options"] = Twig\Extension\CoreExtension::merge((isset($context["field_options"]) || array_key_exists("field_options", $context) ? $context["field_options"] : (function () { throw new RuntimeError('Variable "field_options" does not exist.', 89, $this->source); })()), ["disabled" => (!(($tmp =         // line 90
(isset($context["canpriority"]) || array_key_exists("canpriority", $context) ? $context["canpriority"] : (function () { throw new RuntimeError('Variable "canpriority" does not exist.', 90, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)), "withmajor" => true]);
        // line 93
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["field_options"]) || array_key_exists("field_options", $context) ? $context["field_options"] : (function () { throw new RuntimeError('Variable "field_options" does not exist.', 93, $this->source); })()), "fields_template", [], "any", false, false, false, 93), "isMandatoryField", ["priority"], "method", false, false, false, 93)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 94
            yield "   ";
            $context["priority_options"] = Twig\Extension\CoreExtension::merge((isset($context["priority_options"]) || array_key_exists("priority_options", $context) ? $context["priority_options"] : (function () { throw new RuntimeError('Variable "priority_options" does not exist.', 94, $this->source); })()), ["required" => true]);
        }
        // line 98
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["field_options"]) || array_key_exists("field_options", $context) ? $context["field_options"] : (function () { throw new RuntimeError('Variable "field_options" does not exist.', 98, $this->source); })()), "fields_template", [], "any", false, false, false, 98), "isReadonlyField", ["priority"], "method", false, false, false, 98)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 99
            yield "   ";
            $context["priority_options"] = Twig\Extension\CoreExtension::merge((isset($context["priority_options"]) || array_key_exists("priority_options", $context) ? $context["priority_options"] : (function () { throw new RuntimeError('Variable "priority_options" does not exist.', 99, $this->source); })()), ["readonly" => true]);
        }
        // line 103
        yield "
";
        // line 104
        yield (string) $macros["fields"]->getTemplateForMacro("macro_field", $context, 104, $this->getSourceContext())->macro_field(...["priority", CoreExtension::getAttribute($this->env, $this->source,         // line 106
(isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 106, $this->source); })()), "dropdownPriority", [Twig\Extension\CoreExtension::merge(["value" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 107
(isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 107, $this->source); })()), "fields", [], "any", false, false, false, 107), "priority", [], "array", false, false, false, 107), "width" => "100%", "display" => false, "rand" => CoreExtension::getAttribute($this->env, $this->source,         // line 110
(isset($context["field_options"]) || array_key_exists("field_options", $context) ? $context["field_options"] : (function () { throw new RuntimeError('Variable "field_options" does not exist.', 110, $this->source); })()), "rand", [], "any", false, false, false, 110)], Twig\Extension\CoreExtension::merge(        // line 111
(isset($context["field_options"]) || array_key_exists("field_options", $context) ? $context["field_options"] : (function () { throw new RuntimeError('Variable "field_options" does not exist.', 111, $this->source); })()), (isset($context["priority_options"]) || array_key_exists("priority_options", $context) ? $context["priority_options"] : (function () { throw new RuntimeError('Variable "priority_options" does not exist.', 111, $this->source); })())))], "method", false, false, false, 106), __("Priority"), Twig\Extension\CoreExtension::merge(        // line 113
(isset($context["field_options"]) || array_key_exists("field_options", $context) ? $context["field_options"] : (function () { throw new RuntimeError('Variable "field_options" does not exist.', 113, $this->source); })()), ["id" => ("dropdown_priority" . CoreExtension::getAttribute($this->env, $this->source,         // line 114
(isset($context["field_options"]) || array_key_exists("field_options", $context) ? $context["field_options"] : (function () { throw new RuntimeError('Variable "field_options" does not exist.', 114, $this->source); })()), "rand", [], "any", false, false, false, 114))])]);
        // line 116
        yield "

<script type=\"text/javascript\">
\$(function() {
   \$(\x27#dropdown_urgency";
        // line 120
        yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["field_options"]) || array_key_exists("field_options", $context) ? $context["field_options"] : (function () { throw new RuntimeError('Variable "field_options" does not exist.', 120, $this->source); })()), "rand", [], "any", false, false, false, 120), "html", null, true);
        yield ", #dropdown_impact";
        yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["field_options"]) || array_key_exists("field_options", $context) ? $context["field_options"] : (function () { throw new RuntimeError('Variable "field_options" does not exist.', 120, $this->source); })()), "rand", [], "any", false, false, false, 120), "html", null, true);
        yield "\x27).on(\x27change.select2\x27, function (e) {
      \$.ajax({
         url: `\${CFG_GLPI.root_doc}/ajax/priority.php`,
         datatype: \x27json\x27,
         data: {
            \x27urgency\x27: \$(\x27#dropdown_urgency";
        // line 125
        yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["field_options"]) || array_key_exists("field_options", $context) ? $context["field_options"] : (function () { throw new RuntimeError('Variable "field_options" does not exist.', 125, $this->source); })()), "rand", [], "any", false, false, false, 125), "html", null, true);
        yield "\x27).select2(\x27data\x27) ? \$(\x27#dropdown_urgency";
        yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["field_options"]) || array_key_exists("field_options", $context) ? $context["field_options"] : (function () { throw new RuntimeError('Variable "field_options" does not exist.', 125, $this->source); })()), "rand", [], "any", false, false, false, 125), "html", null, true);
        yield "\x27).select2(\x27data\x27)[0].id : 0,
            \x27impact\x27:  \$(\x27#dropdown_impact";
        // line 126
        yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["field_options"]) || array_key_exists("field_options", $context) ? $context["field_options"] : (function () { throw new RuntimeError('Variable "field_options" does not exist.', 126, $this->source); })()), "rand", [], "any", false, false, false, 126), "html", null, true);
        yield "\x27).select2(\x27data\x27) ? \$(\x27#dropdown_impact";
        yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["field_options"]) || array_key_exists("field_options", $context) ? $context["field_options"] : (function () { throw new RuntimeError('Variable "field_options" does not exist.', 126, $this->source); })()), "rand", [], "any", false, false, false, 126), "html", null, true);
        yield "\x27).select2(\x27data\x27)[0].id : 0,
            \x27_predefined_fields\x27:  \$(\x27input[name=\"_predefined_fields\"]\x27).val(),
            \x27getJson\x27: true,
         }
      }).done(function(data) {
         \$(\x27#dropdown_priority";
        // line 131
        yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["field_options"]) || array_key_exists("field_options", $context) ? $context["field_options"] : (function () { throw new RuntimeError('Variable "field_options" does not exist.', 131, $this->source); })()), "rand", [], "any", false, false, false, 131), "html", null, true);
        yield "\x27).val(data.priority);
         \$(\x27#dropdown_priority";
        // line 132
        yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["field_options"]) || array_key_exists("field_options", $context) ? $context["field_options"] : (function () { throw new RuntimeError('Variable "field_options" does not exist.', 132, $this->source); })()), "rand", [], "any", false, false, false, 132), "html", null, true);
        yield "\x27).trigger(\x27change\x27);
      });
   })
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
        return "components/itilobject/fields/priority_matrix.html.twig";
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
        return array (  172 => 132,  168 => 131,  158 => 126,  152 => 125,  142 => 120,  136 => 116,  134 => 114,  133 => 113,  132 => 111,  131 => 110,  130 => 107,  129 => 106,  128 => 104,  125 => 103,  121 => 99,  119 => 98,  115 => 94,  113 => 93,  111 => 90,  110 => 89,  106 => 87,  104 => 85,  103 => 84,  102 => 82,  101 => 81,  100 => 78,  99 => 77,  98 => 75,  95 => 74,  91 => 70,  89 => 69,  85 => 65,  83 => 64,  81 => 63,  77 => 61,  75 => 59,  74 => 58,  73 => 56,  72 => 55,  71 => 52,  70 => 51,  69 => 49,  66 => 48,  62 => 44,  60 => 43,  56 => 39,  54 => 38,  52 => 36,  51 => 35,  48 => 34,  46 => 33,  43 => 32,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "components/itilobject/fields/priority_matrix.html.twig", "/Users/alvarozuculajunior/BCX/glpi/templates/components/itilobject/fields/priority_matrix.html.twig");
    }
}
