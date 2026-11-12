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

/* components/itilobject/service_levels.html.twig */
class __TwigTemplate_f35ecc805f27b7faf3832afd693d3132 extends Template
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
        $macros["modals"] = $this->macros["modals"] = $this->load("components/form/modals_macros.html.twig", 34)->unwrap();
        // line 35
        yield "
";
        // line 36
        $context["la_fields"] = [];
        // line 37
        yield "
";
        // line 38
        $context["la_fields"] = Twig\Extension\CoreExtension::merge((isset($context["la_fields"]) || array_key_exists("la_fields", $context) ? $context["la_fields"] : (function () { throw new RuntimeError('Variable "la_fields" does not exist.', 38, $this->source); })()), [["la" =>         // line 40
(isset($context["sla"]) || array_key_exists("sla", $context) ? $context["sla"] : (function () { throw new RuntimeError('Variable "sla" does not exist.', 40, $this->source); })()), "type_str" => "sla", "type" => Twig\Extension\CoreExtension::constant("SLM::TTO"), "datefieldname" => "time_to_own", "lafieldname" => "slas_id_tto", "label" => __("TTO"), "helper" => __("Time to own")], ["la" =>         // line 48
(isset($context["sla"]) || array_key_exists("sla", $context) ? $context["sla"] : (function () { throw new RuntimeError('Variable "sla" does not exist.', 48, $this->source); })()), "type_str" => "sla", "type" => Twig\Extension\CoreExtension::constant("SLM::TTR"), "datefieldname" => "time_to_resolve", "lafieldname" => "slas_id_ttr", "label" => __("TTR"), "helper" => __("Time to resolve")]]);
        // line 57
        yield "
";
        // line 58
        $context["la_fields"] = Twig\Extension\CoreExtension::merge((isset($context["la_fields"]) || array_key_exists("la_fields", $context) ? $context["la_fields"] : (function () { throw new RuntimeError('Variable "la_fields" does not exist.', 58, $this->source); })()), [["la" =>         // line 60
(isset($context["ola"]) || array_key_exists("ola", $context) ? $context["ola"] : (function () { throw new RuntimeError('Variable "ola" does not exist.', 60, $this->source); })()), "type_str" => "ola", "type" => Twig\Extension\CoreExtension::constant("SLM::TTO"), "datefieldname" => "internal_time_to_own", "lafieldname" => "olas_id_tto", "label" => __("Internal TTO"), "helper" => __("Internal Time to own")], ["la" =>         // line 68
(isset($context["ola"]) || array_key_exists("ola", $context) ? $context["ola"] : (function () { throw new RuntimeError('Variable "ola" does not exist.', 68, $this->source); })()), "type_str" => "ola", "type" => Twig\Extension\CoreExtension::constant("SLM::TTR"), "datefieldname" => "internal_time_to_resolve", "lafieldname" => "olas_id_ttr", "label" => __("Internal TTR"), "helper" => __("Internal Time to resolve")]]);
        // line 77
        yield "
";
        // line 78
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["la_fields"]) || array_key_exists("la_fields", $context) ? $context["la_fields"] : (function () { throw new RuntimeError('Variable "la_fields" does not exist.', 78, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["la_field"]) {
            // line 79
            yield "   ";
            $context["can_assign_sla_ola"] = (((($tmp = (isset($context["canupdate"]) || array_key_exists("canupdate", $context) ? $context["canupdate"] : (function () { throw new RuntimeError('Variable "canupdate" does not exist.', 79, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp) && (($tmp = Session::haveRight("slm", Twig\Extension\CoreExtension::constant("SLM::RIGHT_ASSIGN"))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) &&  !(($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["field_options"]) || array_key_exists("field_options", $context) ? $context["field_options"] : (function () { throw new RuntimeError('Variable "field_options" does not exist.', 79, $this->source); })()), "fields_template", [], "any", false, false, false, 79), "isReadonlyField", [CoreExtension::getAttribute($this->env, $this->source, $context["la_field"], "lafieldname", [], "any", false, false, false, 79)], "method", false, false, false, 79)) && $tmp instanceof Markup ? (string) $tmp : $tmp));
            // line 80
            yield "   ";
            $context["rand"] = Twig\Extension\CoreExtension::random($this->env->getCharset());
            // line 81
            yield "   ";
            $context["date_displayed"] = ( !CoreExtension::getAttribute($this->env, $this->source, ($context["field_options"] ?? null), "fields_template", [], "any", true, true, false, 81) ||  !(($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["field_options"]) || array_key_exists("field_options", $context) ? $context["field_options"] : (function () { throw new RuntimeError('Variable "field_options" does not exist.', 81, $this->source); })()), "fields_template", [], "any", false, false, false, 81), "isHiddenField", [CoreExtension::getAttribute($this->env, $this->source, $context["la_field"], "datefieldname", [], "any", false, false, false, 81)], "method", false, false, false, 81)) && $tmp instanceof Markup ? (string) $tmp : $tmp));
            // line 82
            yield "   ";
            $context["la_displayed"] = ( !CoreExtension::getAttribute($this->env, $this->source, ($context["field_options"] ?? null), "fields_template", [], "any", true, true, false, 82) ||  !(($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["field_options"]) || array_key_exists("field_options", $context) ? $context["field_options"] : (function () { throw new RuntimeError('Variable "field_options" does not exist.', 82, $this->source); })()), "fields_template", [], "any", false, false, false, 82), "isHiddenField", [CoreExtension::getAttribute($this->env, $this->source, $context["la_field"], "lafieldname", [], "any", false, false, false, 82)], "method", false, false, false, 82)) && $tmp instanceof Markup ? (string) $tmp : $tmp));
            // line 83
            yield "
   ";
            // line 84
            if (((($tmp = (isset($context["date_displayed"]) || array_key_exists("date_displayed", $context) ? $context["date_displayed"] : (function () { throw new RuntimeError('Variable "date_displayed" does not exist.', 84, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp) || (($tmp = (isset($context["la_displayed"]) || array_key_exists("la_displayed", $context) ? $context["la_displayed"] : (function () { throw new RuntimeError('Variable "la_displayed" does not exist.', 84, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp))) {
                // line 85
                yield "      ";
                $context["la_html"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                    // line 86
                    yield "         ";
                    if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["la_field"], "la", [], "any", false, false, false, 86), "getDataForTicket", [CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 86, $this->source); })()), "fields", [], "any", false, false, false, 86), "id", [], "array", false, false, false, 86), CoreExtension::getAttribute($this->env, $this->source, $context["la_field"], "type", [], "any", false, false, false, 86)], "method", false, false, false, 86)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 87
                        yield "            ";
                        if ((($tmp = (isset($context["date_displayed"]) || array_key_exists("date_displayed", $context) ? $context["date_displayed"] : (function () { throw new RuntimeError('Variable "date_displayed" does not exist.', 87, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                            // line 88
                            yield "               <span class=\"text-muted\">
                  ";
                            // line 89
                            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\DataHelpersExtension']->getFormattedDatetime(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 89, $this->source); })()), "fields", [], "any", false, false, false, 89), CoreExtension::getAttribute($this->env, $this->source, $context["la_field"], "datefieldname", [], "any", false, false, false, 89), [], "array", false, false, false, 89)), "html", null, true);
                            yield "
               </span>
            ";
                        }
                        // line 92
                        yield "
            ";
                        // line 93
                        if ((($tmp = (isset($context["la_displayed"]) || array_key_exists("la_displayed", $context) ? $context["la_displayed"] : (function () { throw new RuntimeError('Variable "la_displayed" does not exist.', 93, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                            // line 94
                            yield "               <span class=\"level_name badge itil-badge bg-secondary text-secondary-fg ms-1 flex-column flex-sm-row\">
                  <span class=\"d-flex align-items-center\">
                     <i class=\"ti ti-stopwatch slt me-1\"></i>
                     <span class=\"text-truncate\"
                           title=\"";
                            // line 98
                            yield (string) $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemComment(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["la_field"], "la", [], "any", false, false, false, 98), "getType", [], "method", false, false, false, 98), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 98, $this->source); })()), "fields", [], "any", false, false, false, 98), CoreExtension::getAttribute($this->env, $this->source, $context["la_field"], "lafieldname", [], "any", false, false, false, 98), [], "array", false, false, false, 98));
                            yield "\"
                           data-bs-toggle=\"tooltip\" data-bs-placement=\"top\">
                        ";
                            // line 100
                            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemName(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["la_field"], "la", [], "any", false, false, false, 100), "getType", [], "method", false, false, false, 100), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 100, $this->source); })()), "fields", [], "any", false, false, false, 100), CoreExtension::getAttribute($this->env, $this->source, $context["la_field"], "lafieldname", [], "any", false, false, false, 100), [], "array", false, false, false, 100)), "html", null, true);
                            yield "
                     </span>

                     ";
                            // line 103
                            if ((($tmp = (isset($context["can_assign_sla_ola"]) || array_key_exists("can_assign_sla_ola", $context) ? $context["can_assign_sla_ola"] : (function () { throw new RuntimeError('Variable "can_assign_sla_ola" does not exist.', 103, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                                // line 104
                                yield "                        <i class=\"ti ti-x ms-1\" role=\"button\"
                           onclick=\"delete_date_";
                                // line 105
                                yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["rand"]) || array_key_exists("rand", $context) ? $context["rand"] : (function () { throw new RuntimeError('Variable "rand" does not exist.', 105, $this->source); })()), "html", null, true);
                                yield "(event)\"
                           title=\"";
                                // line 106
                                yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(_x("button", "Delete permanently"), "html", null, true);
                                yield "\"
                           data-bs-toggle=\"tooltip\" data-bs-placement=\"top\"></i>
                     ";
                            }
                            // line 109
                            yield "                  </span>

                  ";
                            // line 111
                            $context["nextaction"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["la_field"], "la", [], "any", false, false, false, 111), "getNextActionForTicket", [(isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 111, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, $context["la_field"], "type", [], "any", false, false, false, 111)], "method", false, false, false, 111);
                            // line 112
                            yield "                  ";
                            $context["level"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["la_field"], "la", [], "any", false, false, false, 112), "getLevelFromAction", [(isset($context["nextaction"]) || array_key_exists("nextaction", $context) ? $context["nextaction"] : (function () { throw new RuntimeError('Variable "nextaction" does not exist.', 112, $this->source); })())], "method", false, false, false, 112);
                            // line 113
                            yield "                  ";
                            if (((isset($context["level"]) || array_key_exists("level", $context) ? $context["level"] : (function () { throw new RuntimeError('Variable "level" does not exist.', 113, $this->source); })()) != false)) {
                                // line 114
                                yield "                     <span class=\"badge bg-info ms-0 ms-sm-1\">
                        <i class=\"ti ti-clock me-1\"
                           title=\"";
                                // line 116
                                yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::sprintf(__("Next escalation: %s"), $this->extensions['Glpi\Application\View\Extension\DataHelpersExtension']->getFormattedDatetime(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["nextaction"]) || array_key_exists("nextaction", $context) ? $context["nextaction"] : (function () { throw new RuntimeError('Variable "nextaction" does not exist.', 116, $this->source); })()), "fields", [], "any", false, false, false, 116), "date", [], "array", false, false, false, 116))), "html", null, true);
                                yield "\"
                           data-bs-toggle=\"tooltip\" data-bs-placement=\"top\"></i>
                        <span title=\"";
                                // line 118
                                yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::sprintf(__("%1\$s: %2\$s"), _n("Escalation level", "Escalation levels", 1), $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemName((isset($context["level"]) || array_key_exists("level", $context) ? $context["level"] : (function () { throw new RuntimeError('Variable "level" does not exist.', 118, $this->source); })()))), "html", null, true);
                                yield "\"
                              data-bs-toggle=\"tooltip\" data-bs-placement=\"top\">
                           ";
                                // line 120
                                yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemName((isset($context["level"]) || array_key_exists("level", $context) ? $context["level"] : (function () { throw new RuntimeError('Variable "level" does not exist.', 120, $this->source); })())), "html", null, true);
                                yield "
                        </span>
                     </span>
                  ";
                            }
                            // line 124
                            yield "               </span>
               <script type=\"text/javascript\">
                  function delete_date_";
                            // line 126
                            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["rand"]) || array_key_exists("rand", $context) ? $context["rand"] : (function () { throw new RuntimeError('Variable "rand" does not exist.', 126, $this->source); })()), "html", null, true);
                            yield "(e) {
                     e.preventDefault();

                     var delete_date = 0;
                     if (confirm(\x27";
                            // line 130
                            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Also delete date?"), "html", null, true);
                            yield "\x27)) {
                        delete_date = 1;
                     }

                     submitGetLink(\x27";
                            // line 134
                            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 134, $this->source); })()), "getFormURL", [], "method", false, false, false, 134), "html", null, true);
                            yield "\x27, {
                        \x27";
                            // line 135
                            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["la_field"], "type_str", [], "any", false, false, false, 135), "html", null, true);
                            yield "_delete\x27: 1,
                        \x27id\x27: ";
                            // line 136
                            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 136, $this->source); })()), "fields", [], "any", false, false, false, 136), "id", [], "array", false, false, false, 136), "html", null, true);
                            yield ",
                        \x27type\x27: ";
                            // line 137
                            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["la_field"], "type", [], "any", false, false, false, 137), "html", null, true);
                            yield ",
                        \x27_glpi_csrf_token\x27: \x27";
                            // line 138
                            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Session::getNewCSRFToken(), "html", null, true);
                            yield "\x27,
                        \x27_glpi_simple_form\x27: 1,
                        \x27delete_date\x27: delete_date
                     });
                  }
               </script>
            ";
                        }
                        // line 145
                        yield "         ";
                    } else {
                        // line 146
                        yield "            <div class=\"d-flex align-items-center flex-wrap\">
               ";
                        // line 147
                        $context["assign_la_id"] = ("assign_la_" . (isset($context["rand"]) || array_key_exists("rand", $context) ? $context["rand"] : (function () { throw new RuntimeError('Variable "rand" does not exist.', 147, $this->source); })()));
                        // line 148
                        yield "
               ";
                        // line 149
                        if ((($tmp = (isset($context["date_displayed"]) || array_key_exists("date_displayed", $context) ? $context["date_displayed"] : (function () { throw new RuntimeError('Variable "date_displayed" does not exist.', 149, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                            // line 150
                            yield "                  <div class=\"la_datefield\">
                     ";
                            // line 151
                            yield (string) $macros["fields"]->getTemplateForMacro("macro_datetimeField", $context, 151, $this->getSourceContext())->macro_datetimeField(...[CoreExtension::getAttribute($this->env, $this->source,                             // line 152
$context["la_field"], "datefieldname", [], "any", false, false, false, 152), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,                             // line 153
(isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 153, $this->source); })()), "fields", [], "any", false, false, false, 153), CoreExtension::getAttribute($this->env, $this->source, $context["la_field"], "datefieldname", [], "any", false, false, false, 153), [], "array", false, false, false, 153), "", ["include_field" => false, "id" => ("date_" .                             // line 157
(isset($context["assign_la_id"]) || array_key_exists("assign_la_id", $context) ? $context["assign_la_id"] : (function () { throw new RuntimeError('Variable "assign_la_id" does not exist.', 157, $this->source); })())), "disabled" => (!(($tmp =                             // line 158
(isset($context["can_assign_sla_ola"]) || array_key_exists("can_assign_sla_ola", $context) ? $context["can_assign_sla_ola"] : (function () { throw new RuntimeError('Variable "can_assign_sla_ola" does not exist.', 158, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp))]]);
                            // line 160
                            yield "
                  </div>
               ";
                        }
                        // line 163
                        yield "
               ";
                        // line 164
                        if ((($tmp = (isset($context["la_displayed"]) || array_key_exists("la_displayed", $context) ? $context["la_displayed"] : (function () { throw new RuntimeError('Variable "la_displayed" does not exist.', 164, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                            // line 165
                            yield "                  <div class=\"";
                            yield (string) (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 165, $this->source); })()), "isNewItem", [], "method", false, false, false, 165)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("") : ("collapsed"));
                            yield " w-100 mt-1 d-none\" id=\"dropdown_";
                            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["assign_la_id"]) || array_key_exists("assign_la_id", $context) ? $context["assign_la_id"] : (function () { throw new RuntimeError('Variable "assign_la_id" does not exist.', 165, $this->source); })()), "html", null, true);
                            yield "\">
                     ";
                            // line 166
                            yield (string) $macros["fields"]->getTemplateForMacro("macro_dropdownField", $context, 166, $this->getSourceContext())->macro_dropdownField(...[CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,                             // line 167
$context["la_field"], "la", [], "any", false, false, false, 167), "getType", [], "method", false, false, false, 167), CoreExtension::getAttribute($this->env, $this->source,                             // line 168
$context["la_field"], "lafieldname", [], "any", false, false, false, 168), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,                             // line 169
(isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 169, $this->source); })()), "fields", [], "any", false, false, false, 169), CoreExtension::getAttribute($this->env, $this->source, $context["la_field"], "lafieldname", [], "any", false, false, false, 169), [], "array", false, false, false, 169), "", ["include_field" => false, "entity" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,                             // line 173
(isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 173, $this->source); })()), "fields", [], "any", false, false, false, 173), "entities_id", [], "array", false, false, false, 173), "condition" => ["type" => CoreExtension::getAttribute($this->env, $this->source,                             // line 174
$context["la_field"], "type", [], "any", false, false, false, 174)], "disabled" => (!(($tmp =                             // line 175
(isset($context["can_assign_sla_ola"]) || array_key_exists("can_assign_sla_ola", $context) ? $context["can_assign_sla_ola"] : (function () { throw new RuntimeError('Variable "can_assign_sla_ola" does not exist.', 175, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)), "add_field_class" => (((($tmp =                             // line 176
(isset($context["is_expanded"]) || array_key_exists("is_expanded", $context) ? $context["is_expanded"] : (function () { throw new RuntimeError('Variable "is_expanded" does not exist.', 176, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("col-sm-6") : (""))]]);
                            // line 178
                            yield "
                  </div>

                  ";
                            // line 181
                            if ((($tmp = (isset($context["can_assign_sla_ola"]) || array_key_exists("can_assign_sla_ola", $context) ? $context["can_assign_sla_ola"] : (function () { throw new RuntimeError('Variable "can_assign_sla_ola" does not exist.', 181, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                                // line 182
                                yield "                     <button class=\"btn btn-sm btn-ghost-secondary ms-1\" type=\"button\"
                           id=\"button_";
                                // line 183
                                yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["assign_la_id"]) || array_key_exists("assign_la_id", $context) ? $context["assign_la_id"] : (function () { throw new RuntimeError('Variable "assign_la_id" does not exist.', 183, $this->source); })()), "html", null, true);
                                yield "\"
                           data-bs-toggle=\"modal\" data-bs-target=\"#";
                                // line 184
                                yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["assign_la_id"]) || array_key_exists("assign_la_id", $context) ? $context["assign_la_id"] : (function () { throw new RuntimeError('Variable "assign_la_id" does not exist.', 184, $this->source); })()), "html", null, true);
                                yield "\"
                           aria-expanded=\"false\" aria-controls=\"";
                                // line 185
                                yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["assign_la_id"]) || array_key_exists("assign_la_id", $context) ? $context["assign_la_id"] : (function () { throw new RuntimeError('Variable "assign_la_id" does not exist.', 185, $this->source); })()), "html", null, true);
                                yield "\">
                        <i class=\"ti ti-stopwatch slt pointer\"
                           title=\"";
                                // line 187
                                yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Assign a SLA"), "html", null, true);
                                yield "\"
                           data-bs-toggle=\"tooltip\" data-bs-placement=\"top\"></i>
                     </button>

                     ";
                                // line 191
                                yield (string) $macros["modals"]->getTemplateForMacro("macro_confirm", $context, 191, $this->getSourceContext())->macro_confirm(...[__("Warning"), Twig\Extension\CoreExtension::join(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,                                 // line 193
$context["la_field"], "la", [], "any", false, false, false, 193), "getAddConfirmation", [], "method", false, false, false, 193), "<br />"), ["id" =>                                 // line 195
(isset($context["assign_la_id"]) || array_key_exists("assign_la_id", $context) ? $context["assign_la_id"] : (function () { throw new RuntimeError('Variable "assign_la_id" does not exist.', 195, $this->source); })()), "confirm_label" => ("<i class=\"ti ti-stopwatch me-1\"></i>" . __("Assign")), "confirm_event" => (("toggleAssignLA_" .                                 // line 197
(isset($context["rand"]) || array_key_exists("rand", $context) ? $context["rand"] : (function () { throw new RuntimeError('Variable "rand" does not exist.', 197, $this->source); })())) . "()")]]);
                                // line 199
                                yield "

                     <script type=\"text/javascript\">
                        function toggleAssignLA_";
                                // line 202
                                yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["rand"]) || array_key_exists("rand", $context) ? $context["rand"] : (function () { throw new RuntimeError('Variable "rand" does not exist.', 202, $this->source); })()), "html", null, true);
                                yield "() {
                           // hide button clicked
                           \$(\"#button_";
                                // line 204
                                yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["assign_la_id"]) || array_key_exists("assign_la_id", $context) ? $context["assign_la_id"] : (function () { throw new RuntimeError('Variable "assign_la_id" does not exist.', 204, $this->source); })()), "html", null, true);
                                yield "\").hide();

                           // hide date field
                           \$(\"#date_";
                                // line 207
                                yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["assign_la_id"]) || array_key_exists("assign_la_id", $context) ? $context["assign_la_id"] : (function () { throw new RuntimeError('Variable "assign_la_id" does not exist.', 207, $this->source); })()), "html", null, true);
                                yield "\").closest(\x27.la_datefield\x27).hide();

                           // show dropdown field
                           \$(\x27#dropdown_assign_la_";
                                // line 210
                                yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["rand"]) || array_key_exists("rand", $context) ? $context["rand"] : (function () { throw new RuntimeError('Variable "rand" does not exist.', 210, $this->source); })()), "html", null, true);
                                yield "\x27).removeClass(\x27d-none\x27);

                           // show level agreement dropdown
                           var myCollapse = new bootstrap.Collapse(document.getElementById(\x27dropdown_";
                                // line 213
                                yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["assign_la_id"]) || array_key_exists("assign_la_id", $context) ? $context["assign_la_id"] : (function () { throw new RuntimeError('Variable "assign_la_id" does not exist.', 213, $this->source); })()), "html", null, true);
                                yield "\x27));
                           myCollapse.show();
                        }
                     </script>

                     ";
                                // line 218
                                if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 218, $this->source); })()), "fields", [], "any", false, false, false, 218), CoreExtension::getAttribute($this->env, $this->source, $context["la_field"], "lafieldname", [], "any", false, false, false, 218), [], "array", false, false, false, 218) != 0)) {
                                    // line 219
                                    yield "                        <script type=\"text/javascript\">
                           \$(document).ready(function() {
                              toggleAssignLA_";
                                    // line 221
                                    yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["rand"]) || array_key_exists("rand", $context) ? $context["rand"] : (function () { throw new RuntimeError('Variable "rand" does not exist.', 221, $this->source); })()), "html", null, true);
                                    yield "();
                           });
                        </script>
                     ";
                                }
                                // line 225
                                yield "                  ";
                            }
                            // line 226
                            yield "               ";
                        }
                        // line 227
                        yield "            </div>
         ";
                    }
                    // line 229
                    yield "      ";
                    yield from [];
                })())) ? '' : new Markup($tmp, $this->env->getCharset());
                // line 230
                yield "      ";
                yield (string) $macros["fields"]->getTemplateForMacro("macro_field", $context, 230, $this->getSourceContext())->macro_field(...[CoreExtension::getAttribute($this->env, $this->source,                 // line 231
$context["la_field"], "lafieldname", [], "any", false, false, false, 231),                 // line 232
(isset($context["la_html"]) || array_key_exists("la_html", $context) ? $context["la_html"] : (function () { throw new RuntimeError('Variable "la_html" does not exist.', 232, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source,                 // line 233
$context["la_field"], "label", [], "any", false, false, false, 233), ["helper" => CoreExtension::getAttribute($this->env, $this->source,                 // line 235
$context["la_field"], "helper", [], "any", false, false, false, 235), "mb" => "mb-2", "label_class" => "col-auto", "full_width" => true, "is_horizontal" => false, "add_field_class" => (((($tmp =                 // line 240
(isset($context["is_expanded"]) || array_key_exists("is_expanded", $context) ? $context["is_expanded"] : (function () { throw new RuntimeError('Variable "is_expanded" does not exist.', 240, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("col-sm-6") : ("")), "required" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,                 // line 241
(isset($context["field_options"]) || array_key_exists("field_options", $context) ? $context["field_options"] : (function () { throw new RuntimeError('Variable "field_options" does not exist.', 241, $this->source); })()), "fields_template", [], "any", false, false, false, 241), "isMandatoryField", [CoreExtension::getAttribute($this->env, $this->source, $context["la_field"], "lafieldname", [], "any", false, false, false, 241)], "method", false, false, false, 241)]]);
                // line 243
                yield "
   ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['la_field'], $context['_parent']);
        $context = array_intersect_key($context, $_parent);
        $context += $_parent;
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "components/itilobject/service_levels.html.twig";
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
        return array (  380 => 243,  378 => 241,  377 => 240,  376 => 235,  375 => 233,  374 => 232,  373 => 231,  371 => 230,  367 => 229,  363 => 227,  360 => 226,  357 => 225,  350 => 221,  346 => 219,  344 => 218,  336 => 213,  330 => 210,  324 => 207,  318 => 204,  313 => 202,  308 => 199,  306 => 197,  305 => 195,  304 => 193,  303 => 191,  296 => 187,  291 => 185,  287 => 184,  283 => 183,  280 => 182,  278 => 181,  273 => 178,  271 => 176,  270 => 175,  269 => 174,  268 => 173,  267 => 169,  266 => 168,  265 => 167,  264 => 166,  257 => 165,  255 => 164,  252 => 163,  247 => 160,  245 => 158,  244 => 157,  243 => 153,  242 => 152,  241 => 151,  238 => 150,  236 => 149,  233 => 148,  231 => 147,  228 => 146,  225 => 145,  215 => 138,  211 => 137,  207 => 136,  203 => 135,  199 => 134,  192 => 130,  185 => 126,  181 => 124,  174 => 120,  169 => 118,  164 => 116,  160 => 114,  157 => 113,  154 => 112,  152 => 111,  148 => 109,  142 => 106,  138 => 105,  135 => 104,  133 => 103,  127 => 100,  122 => 98,  116 => 94,  114 => 93,  111 => 92,  105 => 89,  102 => 88,  99 => 87,  96 => 86,  93 => 85,  91 => 84,  88 => 83,  85 => 82,  82 => 81,  79 => 80,  76 => 79,  72 => 78,  69 => 77,  67 => 68,  66 => 60,  65 => 58,  62 => 57,  60 => 48,  59 => 40,  58 => 38,  55 => 37,  53 => 36,  50 => 35,  48 => 34,  46 => 33,  43 => 32,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "components/itilobject/service_levels.html.twig", "/Users/alvarozuculajunior/BCX/glpi/templates/components/itilobject/service_levels.html.twig");
    }
}
