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

/* components/itilobject/fields_panel.html.twig */
class __TwigTemplate_4848d71b41c402ab96a374a6ca3bbb68 extends Template
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
        $context["field_options"] = ["full_width" => true, "fields_template" =>         // line 36
(isset($context["itiltemplate"]) || array_key_exists("itiltemplate", $context) ? $context["itiltemplate"] : (function () { throw new RuntimeError('Variable "itiltemplate" does not exist.', 36, $this->source); })()), "disabled" => (!(($tmp =         // line 37
(isset($context["canupdate"]) || array_key_exists("canupdate", $context) ? $context["canupdate"] : (function () { throw new RuntimeError('Variable "canupdate" does not exist.', 37, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)), "add_field_class" => (((($tmp =         // line 38
(isset($context["is_expanded"]) || array_key_exists("is_expanded", $context) ? $context["is_expanded"] : (function () { throw new RuntimeError('Variable "is_expanded" does not exist.', 38, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("col-sm-6") : ("")), "rand" =>         // line 39
(isset($context["rand"]) || array_key_exists("rand", $context) ? $context["rand"] : (function () { throw new RuntimeError('Variable "rand" does not exist.', 39, $this->source); })())];
        // line 41
        yield "
";
        // line 42
        $context["itil_layout"] = $this->extensions['Glpi\Application\View\Extension\SessionExtension']->userPref("itil_layout", true);
        // line 43
        $context["headers_states"] = ((CoreExtension::getAttribute($this->env, $this->source, ($context["itil_layout"] ?? null), "items", [], "array", true, true, false, 43)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["itil_layout"]) || array_key_exists("itil_layout", $context) ? $context["itil_layout"] : (function () { throw new RuntimeError('Variable "itil_layout" does not exist.', 43, $this->source); })()), "items", [], "array", false, false, false, 43), [])) : ([]));
        // line 44
        yield "
<div class=\"accordion open accordion-flush itil-object-fields\" id=\"itil-data\">
   ";
        // line 46
        $context["main_show"] = ((( !CoreExtension::getAttribute($this->env, $this->source, ($context["headers_states"] ?? null), "item-main", [], "array", true, true, false, 46) || (CoreExtension::getAttribute($this->env, $this->source, (isset($context["headers_states"]) || array_key_exists("headers_states", $context) ? $context["headers_states"] : (function () { throw new RuntimeError('Variable "headers_states" does not exist.', 46, $this->source); })()), "item-main", [], "array", false, false, false, 46) == "true"))) ? (true) : (false));
        // line 47
        yield "   ";
        yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\PluginExtension']->callPluginHook(Twig\Extension\CoreExtension::constant("Glpi\\Plugin\\Hooks::PRE_ITIL_INFO_SECTION"), ["item" => (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 47, $this->source); })()), "options" => (isset($context["params"]) || array_key_exists("params", $context) ? $context["params"] : (function () { throw new RuntimeError('Variable "params" does not exist.', 47, $this->source); })())]), "html", null, true);
        yield "
   <section class=\"accordion-item\" aria-label=\"";
        // line 48
        yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 48, $this->source); })()), "getTypeName", [1], "method", false, false, false, 48), "html", null, true);
        yield "\">
      <div class=\"accordion-header\" id=\"heading-main-item\">
         <button class=\"accordion-button ";
        // line 50
        yield (string) (((($tmp = (isset($context["main_show"]) || array_key_exists("main_show", $context) ? $context["main_show"] : (function () { throw new RuntimeError('Variable "main_show" does not exist.', 50, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("") : ("collapsed"));
        yield "\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#item-main\" aria-expanded=\"true\" aria-controls=\"ticket-main\">
            <i class=\"ti ti-alert-circle item-icon\"></i>
            <span class=\x27status-recall\x27>
                ";
        // line 53
        yield (string) CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 53, $this->source); })()), "getStatusIcon", [CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 53, $this->source); })()), "fields", [], "any", false, false, false, 53), "status", [], "array", false, false, false, 53)], "method", false, false, false, 53);
        yield "
            </span>
            <span class=\"item-title\">
                ";
        // line 56
        yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 56, $this->source); })()), "getTypeName", [1], "method", false, false, false, 56), "html", null, true);
        yield "
            </span>
         </button>
      </div>
      <section id=\"item-main\" class=\"accordion-collapse collapse ";
        // line 60
        yield (string) (((($tmp = (isset($context["main_show"]) || array_key_exists("main_show", $context) ? $context["main_show"] : (function () { throw new RuntimeError('Variable "main_show" does not exist.', 60, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("show") : (""));
        yield "\" aria-labelledby=\"heading-main-item\">
         <div class=\"accordion-body row m-0 mt-n2\">

            ";
        // line 63
        yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\PluginExtension']->callPluginHook(Twig\Extension\CoreExtension::constant("Glpi\\Plugin\\Hooks::PRE_ITEM_FORM"), ["item" => (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 63, $this->source); })()), "options" => (isset($context["params"]) || array_key_exists("params", $context) ? $context["params"] : (function () { throw new RuntimeError('Variable "params" does not exist.', 63, $this->source); })())]), "html", null, true);
        yield "

            ";
        // line 65
        if ((($tmp = Session::isMultiEntitiesMode()) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 66
            yield "               ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 66, $this->source); })()), "isNewItem", [], "method", false, false, false, 66)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 67
                yield "                  ";
                yield (string) $macros["fields"]->getTemplateForMacro("macro_dropdownField", $context, 67, $this->getSourceContext())->macro_dropdownField(...["Entity", "entities_id", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,                 // line 70
(isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 70, $this->source); })()), "fields", [], "any", false, false, false, 70), "entities_id", [], "array", false, false, false, 70), _n("Entity", "Entities", 1), Twig\Extension\CoreExtension::merge(                // line 72
(isset($context["field_options"]) || array_key_exists("field_options", $context) ? $context["field_options"] : (function () { throw new RuntimeError('Variable "field_options" does not exist.', 72, $this->source); })()), ["entity" => ((                // line 73
array_key_exists("userentities", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["userentities"]) || array_key_exists("userentities", $context) ? $context["userentities"] : (function () { throw new RuntimeError('Variable "userentities" does not exist.', 73, $this->source); })()),  -1)) : ( -1)), "on_change" => "this.form.submit()"])]);
                // line 76
                yield "
               ";
            } else {
                // line 78
                yield "                  ";
                $context["entity_html"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                    // line 79
                    yield "                      ";
                    if ((($tmp = $this->extensions['Glpi\Application\View\Extension\SessionExtension']->hasItemtypeRight("Entity", Twig\Extension\CoreExtension::constant("READ"))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 80
                        yield "                          ";
                        yield (string) $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Entity::badgeCompletenameLinkById", [CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 80, $this->source); })()), "fields", [], "any", false, false, false, 80), "entities_id", [], "array", false, false, false, 80)]);
                        yield "
                      ";
                    } else {
                        // line 82
                        yield "                          ";
                        yield (string) $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Entity::badgeCompletenameById", [CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 82, $this->source); })()), "fields", [], "any", false, false, false, 82), "entities_id", [], "array", false, false, false, 82)]);
                        yield "
                      ";
                    }
                    // line 84
                    yield "                  ";
                    yield from [];
                })())) ? '' : new Markup($tmp, $this->env->getCharset());
                // line 85
                yield "
                  ";
                // line 86
                yield (string) $macros["fields"]->getTemplateForMacro("macro_field", $context, 86, $this->getSourceContext())->macro_field(...["",                 // line 88
(isset($context["entity_html"]) || array_key_exists("entity_html", $context) ? $context["entity_html"] : (function () { throw new RuntimeError('Variable "entity_html" does not exist.', 88, $this->source); })()), _n("Entity", "Entities", 1), Twig\Extension\CoreExtension::merge(                // line 90
(isset($context["field_options"]) || array_key_exists("field_options", $context) ? $context["field_options"] : (function () { throw new RuntimeError('Variable "field_options" does not exist.', 90, $this->source); })()), ["add_field_class" => "d-flex align-items-center"])]);
                // line 93
                yield "
               ";
            }
            // line 95
            yield "
               ";
            // line 96
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 96, $this->source); })()), "isField", ["is_recursive"], "method", false, false, false, 96)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 97
                yield "                  ";
                yield (string) $macros["fields"]->getTemplateForMacro("macro_dropdownYesNo", $context, 97, $this->getSourceContext())->macro_dropdownYesNo(...["is_recursive", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,                 // line 99
(isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 99, $this->source); })()), "fields", [], "any", false, false, false, 99), "is_recursive", [], "array", false, false, false, 99), __("Child entities"),                 // line 101
(isset($context["field_options"]) || array_key_exists("field_options", $context) ? $context["field_options"] : (function () { throw new RuntimeError('Variable "field_options" does not exist.', 101, $this->source); })())]);
                // line 102
                yield "
               ";
            }
            // line 104
            yield "            ";
        }
        // line 105
        yield "
            ";
        // line 106
        yield (string) $macros["fields"]->getTemplateForMacro("macro_datetimeField", $context, 106, $this->getSourceContext())->macro_datetimeField(...["date", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 108
(isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 108, $this->source); })()), "fields", [], "any", false, false, false, 108), "date", [], "array", false, false, false, 108), __("Opening date"),         // line 110
(isset($context["field_options"]) || array_key_exists("field_options", $context) ? $context["field_options"] : (function () { throw new RuntimeError('Variable "field_options" does not exist.', 110, $this->source); })())]);
        // line 111
        yield "

            ";
        // line 113
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 113, $this->source); })()), "getType", [], "method", false, false, false, 113) != "Ticket")) {
            // line 114
            yield "               ";
            yield (string) $macros["fields"]->getTemplateForMacro("macro_datetimeField", $context, 114, $this->getSourceContext())->macro_datetimeField(...["time_to_resolve", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,             // line 116
(isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 116, $this->source); })()), "fields", [], "any", false, false, false, 116), "time_to_resolve", [], "array", false, false, false, 116), __("Time to resolve"),             // line 118
(isset($context["field_options"]) || array_key_exists("field_options", $context) ? $context["field_options"] : (function () { throw new RuntimeError('Variable "field_options" does not exist.', 118, $this->source); })())]);
            // line 119
            yield "
            ";
        }
        // line 121
        yield "
            ";
        // line 122
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 122, $this->source); })()), "isSolved", [true], "method", false, false, false, 122)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 123
            yield "               ";
            yield (string) $macros["fields"]->getTemplateForMacro("macro_datetimeField", $context, 123, $this->getSourceContext())->macro_datetimeField(...["solvedate", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,             // line 125
(isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 125, $this->source); })()), "fields", [], "any", false, false, false, 125), "solvedate", [], "array", false, false, false, 125), __("Resolution date"),             // line 127
(isset($context["field_options"]) || array_key_exists("field_options", $context) ? $context["field_options"] : (function () { throw new RuntimeError('Variable "field_options" does not exist.', 127, $this->source); })())]);
            // line 128
            yield "
            ";
        }
        // line 130
        yield "
            ";
        // line 131
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 131, $this->source); })()), "isClosed", [], "method", false, false, false, 131)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 132
            yield "               ";
            yield (string) $macros["fields"]->getTemplateForMacro("macro_datetimeField", $context, 132, $this->getSourceContext())->macro_datetimeField(...["closedate", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,             // line 134
(isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 134, $this->source); })()), "fields", [], "any", false, false, false, 134), "closedate", [], "array", false, false, false, 134), __("Close date"),             // line 136
(isset($context["field_options"]) || array_key_exists("field_options", $context) ? $context["field_options"] : (function () { throw new RuntimeError('Variable "field_options" does not exist.', 136, $this->source); })())]);
            // line 137
            yield "
            ";
        }
        // line 139
        yield "
            ";
        // line 140
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 140, $this->source); })()), "getType", [], "method", false, false, false, 140) == "Ticket")) {
            // line 141
            yield "               ";
            $context["type_params"] = Twig\Extension\CoreExtension::merge(["value" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,             // line 142
(isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 142, $this->source); })()), "fields", [], "any", false, false, false, 142), "type", [], "array", false, false, false, 142), "width" => "100%", "display" => false, "rand" =>             // line 145
(isset($context["rand"]) || array_key_exists("rand", $context) ? $context["rand"] : (function () { throw new RuntimeError('Variable "rand" does not exist.', 145, $this->source); })()), "readonly" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,             // line 146
(isset($context["field_options"]) || array_key_exists("field_options", $context) ? $context["field_options"] : (function () { throw new RuntimeError('Variable "field_options" does not exist.', 146, $this->source); })()), "fields_template", [], "any", false, false, false, 146), "isReadonlyField", ["type"], "method", false, false, false, 146)],             // line 147
(isset($context["field_options"]) || array_key_exists("field_options", $context) ? $context["field_options"] : (function () { throw new RuntimeError('Variable "field_options" does not exist.', 147, $this->source); })()));
            // line 148
            yield "               ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 148, $this->source); })()), "isNewItem", [], "method", false, false, false, 148)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 149
                yield "                  ";
                $context["type_params"] = Twig\Extension\CoreExtension::merge((isset($context["type_params"]) || array_key_exists("type_params", $context) ? $context["type_params"] : (function () { throw new RuntimeError('Variable "type_params" does not exist.', 149, $this->source); })()), ["on_change" => "this.form.submit()"]);
                // line 150
                yield "               ";
            } else {
                // line 151
                yield "                  ";
                $context["type_params"] = Twig\Extension\CoreExtension::merge((isset($context["type_params"]) || array_key_exists("type_params", $context) ? $context["type_params"] : (function () { throw new RuntimeError('Variable "type_params" does not exist.', 151, $this->source); })()), ["on_change" => "reloadCategory()"]);
                // line 152
                yield "               ";
            }
            // line 153
            yield "               ";
            // line 154
            yield "               ";
            yield (string) $macros["fields"]->getTemplateForMacro("macro_field", $context, 154, $this->getSourceContext())->macro_field(...["type", CoreExtension::getAttribute($this->env, $this->source,             // line 156
(isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 156, $this->source); })()), "dropdownType", ["type", (isset($context["type_params"]) || array_key_exists("type_params", $context) ? $context["type_params"] : (function () { throw new RuntimeError('Variable "type_params" does not exist.', 156, $this->source); })())], "method", false, false, false, 156), _n("Type", "Types", 1), Twig\Extension\CoreExtension::merge(            // line 158
(isset($context["field_options"]) || array_key_exists("field_options", $context) ? $context["field_options"] : (function () { throw new RuntimeError('Variable "field_options" does not exist.', 158, $this->source); })()), ["id" => ("dropdown_type" .             // line 159
(isset($context["rand"]) || array_key_exists("rand", $context) ? $context["rand"] : (function () { throw new RuntimeError('Variable "rand" does not exist.', 159, $this->source); })()))])]);
            // line 161
            yield "
            ";
        }
        // line 163
        yield "
            ";
        // line 164
        $context["cat_params"] = Twig\Extension\CoreExtension::merge((isset($context["field_options"]) || array_key_exists("field_options", $context) ? $context["field_options"] : (function () { throw new RuntimeError('Variable "field_options" does not exist.', 164, $this->source); })()), ["entity" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 165
(isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 165, $this->source); })()), "fields", [], "any", false, false, false, 165), "entities_id", [], "array", false, false, false, 165), "disabled" => (!((($tmp =         // line 166
(isset($context["canupdate"]) || array_key_exists("canupdate", $context) ? $context["canupdate"] : (function () { throw new RuntimeError('Variable "canupdate" does not exist.', 166, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp) || (($tmp = (isset($context["can_requester"]) || array_key_exists("can_requester", $context) ? $context["can_requester"] : (function () { throw new RuntimeError('Variable "can_requester" does not exist.', 166, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp))), "container_id" => ("category_field_container" .         // line 167
(isset($context["rand"]) || array_key_exists("rand", $context) ? $context["rand"] : (function () { throw new RuntimeError('Variable "rand" does not exist.', 167, $this->source); })()))]);
        // line 169
        yield "            ";
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 169, $this->source); })()), "isNewItem", [], "method", false, false, false, 169)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 170
            yield "               ";
            $context["cat_params"] = Twig\Extension\CoreExtension::merge((isset($context["cat_params"]) || array_key_exists("cat_params", $context) ? $context["cat_params"] : (function () { throw new RuntimeError('Variable "cat_params" does not exist.', 170, $this->source); })()), ["on_change" => "this.form.submit()"]);
            // line 173
            yield "            ";
        }
        // line 174
        yield "            ";
        if ((( !(($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 174, $this->source); })()), "isNewItem", [], "method", false, false, false, 174)) && $tmp instanceof Markup ? (string) $tmp : $tmp) && (($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["itiltemplate"]) || array_key_exists("itiltemplate", $context) ? $context["itiltemplate"] : (function () { throw new RuntimeError('Variable "itiltemplate" does not exist.', 174, $this->source); })()), "isMandatoryField", ["itilcategories_id"], "method", false, false, false, 174)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) && (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 174, $this->source); })()), "fields", [], "any", false, false, false, 174), "itilcategories_id", [], "array", false, false, false, 174) > 0))) {
            // line 175
            yield "               ";
            $context["cat_params"] = Twig\Extension\CoreExtension::merge((isset($context["cat_params"]) || array_key_exists("cat_params", $context) ? $context["cat_params"] : (function () { throw new RuntimeError('Variable "cat_params" does not exist.', 175, $this->source); })()), ["display_emptychoice" => false]);
            // line 178
            yield "            ";
        }
        // line 179
        yield "            ";
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 179, $this->source); })()), "getType", [], "method", false, false, false, 179) == "Ticket")) {
            // line 180
            yield "               ";
            if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 180, $this->source); })()), "fields", [], "any", false, false, false, 180), "type", [], "array", false, false, false, 180) == Twig\Extension\CoreExtension::constant("Ticket::INCIDENT_TYPE"))) {
                // line 181
                yield "                  ";
                $context["cat_params"] = Twig\Extension\CoreExtension::merge((isset($context["cat_params"]) || array_key_exists("cat_params", $context) ? $context["cat_params"] : (function () { throw new RuntimeError('Variable "cat_params" does not exist.', 181, $this->source); })()), ["condition" => ["is_incident" => 1]]);
                // line 182
                yield "               ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 182, $this->source); })()), "fields", [], "any", false, false, false, 182), "type", [], "array", false, false, false, 182) == Twig\Extension\CoreExtension::constant("Ticket::DEMAND_TYPE"))) {
                // line 183
                yield "                  ";
                $context["cat_params"] = Twig\Extension\CoreExtension::merge((isset($context["cat_params"]) || array_key_exists("cat_params", $context) ? $context["cat_params"] : (function () { throw new RuntimeError('Variable "cat_params" does not exist.', 183, $this->source); })()), ["condition" => ["is_request" => 1]]);
                // line 184
                yield "               ";
            }
            // line 185
            yield "            ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 185, $this->source); })()), "getType", [], "method", false, false, false, 185) == "Problem")) {
            // line 186
            yield "               ";
            $context["cat_params"] = Twig\Extension\CoreExtension::merge((isset($context["cat_params"]) || array_key_exists("cat_params", $context) ? $context["cat_params"] : (function () { throw new RuntimeError('Variable "cat_params" does not exist.', 186, $this->source); })()), ["condition" => ["is_problem" => 1]]);
            // line 187
            yield "            ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 187, $this->source); })()), "getType", [], "method", false, false, false, 187) == "Change")) {
            // line 188
            yield "               ";
            $context["cat_params"] = Twig\Extension\CoreExtension::merge((isset($context["cat_params"]) || array_key_exists("cat_params", $context) ? $context["cat_params"] : (function () { throw new RuntimeError('Variable "cat_params" does not exist.', 188, $this->source); })()), ["condition" => ["is_change" => 1]]);
            // line 189
            yield "            ";
        }
        // line 190
        yield "            <span id=\"category_block_";
        yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["rand"]) || array_key_exists("rand", $context) ? $context["rand"] : (function () { throw new RuntimeError('Variable "rand" does not exist.', 190, $this->source); })()), "html", null, true);
        yield "\">
            ";
        // line 191
        yield (string) $macros["fields"]->getTemplateForMacro("macro_dropdownField", $context, 191, $this->getSourceContext())->macro_dropdownField(...["ITILCategory", "itilcategories_id", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 194
(isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 194, $this->source); })()), "fields", [], "any", false, false, false, 194), "itilcategories_id", [], "array", false, false, false, 194), _n("Category", "Categories", 1),         // line 196
(isset($context["cat_params"]) || array_key_exists("cat_params", $context) ? $context["cat_params"] : (function () { throw new RuntimeError('Variable "cat_params" does not exist.', 196, $this->source); })())]);
        // line 197
        yield "
            </span>

            ";
        // line 201
        yield "            ";
        yield (string) Twig\Extension\CoreExtension::include($this->env, $context, "components/itilobject/fields/status.html.twig");
        yield "

            ";
        // line 204
        yield "            ";
        if ((((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, true, false, 204), "global_validation", [], "array", true, true, false, 204)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 204, $this->source); })()), "fields", [], "any", false, false, false, 204), "global_validation", [], "array", false, false, false, 204), 1)) : (1)) != 1)) {
            // line 205
            yield "               ";
            yield (string) Twig\Extension\CoreExtension::include($this->env, $context, "components/itilobject/fields/global_validation.html.twig");
            yield "
            ";
        }
        // line 207
        yield "
            ";
        // line 208
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 208, $this->source); })()), "isField", ["requesttypes_id"], "method", false, false, false, 208)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 209
            yield "               ";
            yield (string) $macros["fields"]->getTemplateForMacro("macro_dropdownField", $context, 209, $this->getSourceContext())->macro_dropdownField(...["RequestType", "requesttypes_id", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,             // line 212
(isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 212, $this->source); })()), "fields", [], "any", false, false, false, 212), "requesttypes_id", [], "array", false, false, false, 212), $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeName("RequestType"), Twig\Extension\CoreExtension::merge(            // line 214
(isset($context["field_options"]) || array_key_exists("field_options", $context) ? $context["field_options"] : (function () { throw new RuntimeError('Variable "field_options" does not exist.', 214, $this->source); })()), ["condition" => ["is_active" => 1, "is_ticketheader" => 1]])]);
            // line 220
            yield "
            ";
        }
        // line 222
        yield "
            ";
        // line 223
        yield (string) Twig\Extension\CoreExtension::include($this->env, $context, "components/itilobject/fields/priority_matrix.html.twig");
        yield "

            ";
        // line 225
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 225, $this->source); })()), "isField", ["locations_id"], "method", false, false, false, 225)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 226
            yield "               ";
            yield (string) $macros["fields"]->getTemplateForMacro("macro_dropdownField", $context, 226, $this->getSourceContext())->macro_dropdownField(...["Location", "locations_id", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,             // line 229
(isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 229, $this->source); })()), "fields", [], "any", false, false, false, 229), "locations_id", [], "array", false, false, false, 229), $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeName("Location"), Twig\Extension\CoreExtension::merge(            // line 231
(isset($context["field_options"]) || array_key_exists("field_options", $context) ? $context["field_options"] : (function () { throw new RuntimeError('Variable "field_options" does not exist.', 231, $this->source); })()), ["hide_if_no_elements" => true, "entity" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,             // line 233
(isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 233, $this->source); })()), "fields", [], "any", false, false, false, 233), "entities_id", [], "array", false, false, false, 233), "entity_sons" => true])]);
            // line 236
            yield "
            ";
        }
        // line 238
        yield "
            ";
        // line 239
        if (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 239, $this->source); })()), "isNewItem", [], "method", false, false, false, 239)) && $tmp instanceof Markup ? (string) $tmp : $tmp) && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 239, $this->source); })()), "getType", [], "method", false, false, false, 239) == "Ticket"))) {
            // line 240
            yield "               ";
            yield (string) $macros["fields"]->getTemplateForMacro("macro_dropdownField", $context, 240, $this->getSourceContext())->macro_dropdownField(...["Contract", "_contracts_id", ((CoreExtension::getAttribute($this->env, $this->source,             // line 243
($context["params"] ?? null), "_contracts_id", [], "array", true, true, false, 243)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["params"]) || array_key_exists("params", $context) ? $context["params"] : (function () { throw new RuntimeError('Variable "params" does not exist.', 243, $this->source); })()), "_contracts_id", [], "array", false, false, false, 243), 0)) : (0)), $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeName("Contract"), Twig\Extension\CoreExtension::merge(            // line 245
(isset($context["field_options"]) || array_key_exists("field_options", $context) ? $context["field_options"] : (function () { throw new RuntimeError('Variable "field_options" does not exist.', 245, $this->source); })()), ["entity" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,             // line 246
(isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 246, $this->source); })()), "fields", [], "any", false, false, false, 246), "entities_id", [], "array", false, false, false, 246), "width" => "100%", "hide_if_no_elements" => true, "nochecklimit" => true])]);
            // line 251
            yield "
            ";
        }
        // line 253
        yield "
            ";
        // line 254
        if ((((CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 254, $this->source); })()), "getType", [], "method", false, false, false, 254) == "Ticket") && (($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 254, $this->source); })()), "isNewItem", [], "method", false, false, false, 254)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ||  !(($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 254, $this->source); })()), "isNewItem", [], "method", false, false, false, 254)) && $tmp instanceof Markup ? (string) $tmp : $tmp))) {
            // line 255
            yield "               ";
            yield (string) $macros["fields"]->getTemplateForMacro("macro_dropdownTimestampField", $context, 255, $this->getSourceContext())->macro_dropdownTimestampField(...["actiontime", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,             // line 257
(isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 257, $this->source); })()), "fields", [], "any", false, false, false, 257), "actiontime", [], "array", false, false, false, 257), __("Total duration"),             // line 259
(isset($context["field_options"]) || array_key_exists("field_options", $context) ? $context["field_options"] : (function () { throw new RuntimeError('Variable "field_options" does not exist.', 259, $this->source); })())]);
            // line 260
            yield "
            ";
        }
        // line 262
        yield "
            ";
        // line 263
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 263, $this->source); })()), "isField", ["externalid"], "method", false, false, false, 263)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 264
            yield "               ";
            yield (string) $macros["fields"]->getTemplateForMacro("macro_textField", $context, 264, $this->getSourceContext())->macro_textField(...["externalid", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 264, $this->source); })()), "fields", [], "any", false, false, false, 264), "externalid", [], "array", false, false, false, 264), __("External ID"), (isset($context["field_options"]) || array_key_exists("field_options", $context) ? $context["field_options"] : (function () { throw new RuntimeError('Variable "field_options" does not exist.', 264, $this->source); })())]);
            yield "
            ";
        }
        // line 266
        yield "
            ";
        // line 267
        yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\PluginExtension']->callPluginHook(Twig\Extension\CoreExtension::constant("Glpi\\Plugin\\Hooks::POST_ITEM_FORM"), ["item" => (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 267, $this->source); })()), "options" => (isset($context["params"]) || array_key_exists("params", $context) ? $context["params"] : (function () { throw new RuntimeError('Variable "params" does not exist.', 267, $this->source); })())]), "html", null, true);
        yield "
         </div>
      </section>
   </section>

   ";
        // line 272
        $context["actors_show"] = ((( !CoreExtension::getAttribute($this->env, $this->source, ($context["headers_states"] ?? null), "actors", [], "array", true, true, false, 272) || (CoreExtension::getAttribute($this->env, $this->source, (isset($context["headers_states"]) || array_key_exists("headers_states", $context) ? $context["headers_states"] : (function () { throw new RuntimeError('Variable "headers_states" does not exist.', 272, $this->source); })()), "actors", [], "array", false, false, false, 272) == "true"))) ? (true) : (false));
        // line 273
        yield "   <section class=\"accordion-item\" aria-label=\"";
        yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Actors"), "html", null, true);
        yield "\">
      <div class=\"accordion-header\" id=\"heading-actor\" title=\"";
        // line 274
        yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Actors"), "html", null, true);
        yield "\" data-bs-toggle=\"tooltip\">
         <button class=\"accordion-button ";
        // line 275
        yield (string) (((($tmp = (isset($context["actors_show"]) || array_key_exists("actors_show", $context) ? $context["actors_show"] : (function () { throw new RuntimeError('Variable "actors_show" does not exist.', 275, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("") : ("collapsed"));
        yield "\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#actors\" aria-expanded=\"true\" aria-controls=\"actors\">
            <i class=\"ti ti-users\"></i>
            <span class=\"item-title\">
                ";
        // line 278
        yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Actors"), "html", null, true);
        yield "
            </span>
            <span class=\"badge bg-secondary text-secondary-fg ms-2\">
               ";
        // line 281
        yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 281, $this->source); })()), "countActors", [], "method", false, false, false, 281), "html", null, true);
        yield "
            </span>
            ";
        // line 283
        if ((( !(($tmp = (((CoreExtension::getAttribute($this->env, $this->source, ($context["params"] ?? null), "template_preview", [], "array", true, true, false, 283) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["params"]) || array_key_exists("params", $context) ? $context["params"] : (function () { throw new RuntimeError('Variable "params" does not exist.', 283, $this->source); })()), "template_preview", [], "array", false, false, false, 283)))) ? (CoreExtension::getAttribute($this->env, $this->source, (isset($context["params"]) || array_key_exists("params", $context) ? $context["params"] : (function () { throw new RuntimeError('Variable "params" does not exist.', 283, $this->source); })()), "template_preview", [], "array", false, false, false, 283)) : (false))) && $tmp instanceof Markup ? (string) $tmp : $tmp) && (($tmp = ((array_key_exists("cancreateuser", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["cancreateuser"]) || array_key_exists("cancreateuser", $context) ? $context["cancreateuser"] : (function () { throw new RuntimeError('Variable "cancreateuser" does not exist.', 283, $this->source); })()), false)) : (false))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) && (($tmp = (isset($context["canupdate"]) || array_key_exists("canupdate", $context) ? $context["canupdate"] : (function () { throw new RuntimeError('Variable "canupdate" does not exist.', 283, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp))) {
            // line 284
            yield "               ";
            yield (string) Twig\Extension\CoreExtension::include($this->env, $context, "components/user/create_user.html.twig");
            yield "
            ";
        }
        // line 286
        yield "         </button>
      </div>
      <div id=\"actors\" class=\"accordion-collapse collapse ";
        // line 288
        yield (string) (((($tmp = (isset($context["actors_show"]) || array_key_exists("actors_show", $context) ? $context["actors_show"] : (function () { throw new RuntimeError('Variable "actors_show" does not exist.', 288, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("show") : (""));
        yield "\" aria-labelledby=\"heading-actor\">
         <div class=\"accordion-body accordion-actors row m-0 mt-n2\">
            ";
        // line 290
        yield (string) Twig\Extension\CoreExtension::include($this->env, $context, "components/itilobject/actors/main.html.twig");
        yield "
         </div>
      </div>
   </section>

   ";
        // line 295
        if ((($tmp = ((array_key_exists("canreadnote", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["canreadnote"]) || array_key_exists("canreadnote", $context) ? $context["canreadnote"] : (function () { throw new RuntimeError('Variable "canreadnote" does not exist.', 295, $this->source); })()), false)) : (false))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 296
            yield "      ";
            $context["notes"] = $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Notepad::getAllForItem", [$this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItem("Entity", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 296, $this->source); })()), "fields", [], "any", false, false, false, 296), "entities_id", [], "array", false, false, false, 296)), "Ticket"]);
            // line 297
            yield "      ";
            $context["notes_show"] = ((( !CoreExtension::getAttribute($this->env, $this->source, ($context["headers_states"] ?? null), "notes", [], "array", true, true, false, 297) || (CoreExtension::getAttribute($this->env, $this->source, (isset($context["headers_states"]) || array_key_exists("headers_states", $context) ? $context["headers_states"] : (function () { throw new RuntimeError('Variable "headers_states" does not exist.', 297, $this->source); })()), "notes", [], "array", false, false, false, 297) == "true"))) ? (true) : ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["notes"]) || array_key_exists("notes", $context) ? $context["notes"] : (function () { throw new RuntimeError('Variable "notes" does not exist.', 297, $this->source); })())) > 0)));
            // line 298
            yield "       ";
            if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["notes"]) || array_key_exists("notes", $context) ? $context["notes"] : (function () { throw new RuntimeError('Variable "notes" does not exist.', 298, $this->source); })())) != 0)) {
                // line 299
                yield "          <section class=\"accordion-item\" aria-label=\"";
                yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Notes"), "html", null, true);
                yield "\">
             <div class=\"accordion-header\" id=\"notes-heading\" title=\"";
                // line 300
                yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Notes"), "html", null, true);
                yield "\" data-bs-toggle=\"tooltip\">
                <button class=\"accordion-button ";
                // line 301
                yield (string) (((($tmp = (isset($context["notes_show"]) || array_key_exists("notes_show", $context) ? $context["notes_show"] : (function () { throw new RuntimeError('Variable "notes_show" does not exist.', 301, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("") : ("collapsed"));
                yield "\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#notes\" aria-expanded=\"true\" aria-controls=\"notes\">
                   <i class=\"ti ti-notes\"></i>
                   <span class=\"item-title\">
                      ";
                // line 304
                yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Entity notes"), "html", null, true);
                yield "
                   </span>
                   <span class=\"badge bg-secondary text-secondary-fg ms-2\">";
                // line 306
                yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["notes"]) || array_key_exists("notes", $context) ? $context["notes"] : (function () { throw new RuntimeError('Variable "notes" does not exist.', 306, $this->source); })())), "html", null, true);
                yield "</span>
                </button>
             </div>
             <div id=\"notes\" class=\"accordion-collapse collapse ";
                // line 309
                yield (string) (((($tmp = (isset($context["notes_show"]) || array_key_exists("notes_show", $context) ? $context["notes_show"] : (function () { throw new RuntimeError('Variable "notes_show" does not exist.', 309, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("show") : (""));
                yield "\" aria-labelledby=\"notes-heading\">
                <div class=\"accordion-body row m-0 mt-n2\">
                  ";
                // line 311
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable((isset($context["notes"]) || array_key_exists("notes", $context) ? $context["notes"] : (function () { throw new RuntimeError('Variable "notes" does not exist.', 311, $this->source); })()));
                $context['loop'] = [
                  'parent' => $context['_parent'],
                  'index0' => 0,
                  'index'  => 1,
                  'first'  => true,
                ];
                if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                    $length = count($context['_seq']);
                    $context['loop']['revindex0'] = $length - 1;
                    $context['loop']['revindex'] = $length;
                    $context['loop']['length'] = $length;
                    $context['loop']['last'] = 1 === $length;
                }
                foreach ($context['_seq'] as $context["_key"] => $context["note"]) {
                    // line 312
                    yield "                     <div class=\"alert alert-info entitynote rich_text_container\" role=\"alert\">
                        ";
                    // line 313
                    yield (string) $this->extensions['Glpi\Application\View\Extension\DataHelpersExtension']->getSafeHtml(CoreExtension::getAttribute($this->env, $this->source, $context["note"], "content", [], "array", false, false, false, 313));
                    yield "

                        ";
                    // line 315
                    yield (string) Twig\Extension\CoreExtension::include($this->env, $context, "components/itilobject/timeline/sub_documents.html.twig", ["item" => $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItem(CoreExtension::getAttribute($this->env, $this->source,                     // line 316
$context["note"], "itemtype", [], "array", false, false, false, 316), CoreExtension::getAttribute($this->env, $this->source, $context["note"], "items_id", [], "array", false, false, false, 316)), "entry" =>                     // line 317
$context["note"]]);
                    // line 318
                    yield "
                     </div>
                  ";
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                    if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                        --$context['loop']['revindex0'];
                        --$context['loop']['revindex'];
                        $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['note'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent);
                $context += $_parent;
                // line 321
                yield "                </div>
             </div>
          </section>
       ";
            }
            // line 325
            yield "   ";
        }
        // line 326
        yield "
   ";
        // line 327
        if ((array_key_exists("item_commonitilobject", $context) &&  !(null === (isset($context["item_commonitilobject"]) || array_key_exists("item_commonitilobject", $context) ? $context["item_commonitilobject"] : (function () { throw new RuntimeError('Variable "item_commonitilobject" does not exist.', 327, $this->source); })())))) {
            // line 328
            yield "      ";
            $context["items_show"] = ((( !CoreExtension::getAttribute($this->env, $this->source, ($context["headers_states"] ?? null), "items", [], "array", true, true, false, 328) || (CoreExtension::getAttribute($this->env, $this->source, (isset($context["headers_states"]) || array_key_exists("headers_states", $context) ? $context["headers_states"] : (function () { throw new RuntimeError('Variable "headers_states" does not exist.', 328, $this->source); })()), "items", [], "array", false, false, false, 328) == "true"))) ? (true) : (false));
            // line 329
            yield "      <section class=\"accordion-item\" aria-label=\"";
            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(_n("Item", "Items", Session::getPluralNumber()), "html", null, true);
            yield "\">
         <div class=\"accordion-header\" id=\"items-heading\" title=\"";
            // line 330
            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(_n("Item", "Items", Session::getPluralNumber()), "html", null, true);
            yield "\" data-bs-toggle=\"tooltip\">
            <button class=\"accordion-button ";
            // line 331
            yield (string) (((($tmp = (isset($context["items_show"]) || array_key_exists("items_show", $context) ? $context["items_show"] : (function () { throw new RuntimeError('Variable "items_show" does not exist.', 331, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("") : ("collapsed"));
            yield "\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#items\" aria-expanded=\"true\" aria-controls=\"items\">
               <i class=\"ti ti-package\"></i>
               <span class=\"item-title\">
                    ";
            // line 334
            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(_n("Item", "Items", Session::getPluralNumber()), "html", null, true);
            yield "
                </span>
               <span class=\"item-counter badge bg-secondary text-secondary-fg ms-2\"></span>
               ";
            // line 337
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["itiltemplate"]) || array_key_exists("itiltemplate", $context) ? $context["itiltemplate"] : (function () { throw new RuntimeError('Variable "itiltemplate" does not exist.', 337, $this->source); })()), "isMandatoryField", ["items_id"], "method", false, false, false, 337)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 338
                yield "                  <span class=\"required\">*</span>
               ";
            }
            // line 340
            yield "            </button>
         </div>
         <div id=\"items\" class=\"accordion-collapse collapse ";
            // line 342
            yield (string) (((($tmp = (isset($context["items_show"]) || array_key_exists("items_show", $context) ? $context["items_show"] : (function () { throw new RuntimeError('Variable "items_show" does not exist.', 342, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("show") : (""));
            yield "\" aria-labelledby=\"items-heading\">
            <div class=\"accordion-body accordion-items row m-0 mt-n2\">
               ";
            // line 344
            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["item_commonitilobject"]) || array_key_exists("item_commonitilobject", $context) ? $context["item_commonitilobject"] : (function () { throw new RuntimeError('Variable "item_commonitilobject" does not exist.', 344, $this->source); })()), "itemAddForm", [(isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 344, $this->source); })()), Twig\Extension\CoreExtension::merge(((array_key_exists("params", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["params"]) || array_key_exists("params", $context) ? $context["params"] : (function () { throw new RuntimeError('Variable "params" does not exist.', 344, $this->source); })()), [])) : ([])), ["entities_id" => (isset($context["entities_id"]) || array_key_exists("entities_id", $context) ? $context["entities_id"] : (function () { throw new RuntimeError('Variable "entities_id" does not exist.', 344, $this->source); })())])], "method", false, false, false, 344), "html", null, true);
            yield "
            </div>
         </div>
      </section>
   ";
        }
        // line 349
        yield "
   ";
        // line 350
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 350, $this->source); })()), "getType", [], "method", false, false, false, 350) == "Ticket")) {
            // line 351
            yield "      ";
            $context["la_content"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                // line 352
                yield "         ";
                yield (string) Twig\Extension\CoreExtension::include($this->env, $context, "components/itilobject/service_levels.html.twig");
                yield "
      ";
                yield from [];
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 354
            yield "
      ";
            // line 355
            if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), Twig\Extension\CoreExtension::trim((isset($context["la_content"]) || array_key_exists("la_content", $context) ? $context["la_content"] : (function () { throw new RuntimeError('Variable "la_content" does not exist.', 355, $this->source); })()))) > 0)) {
                // line 356
                yield "         ";
                $context["nb_la"] = ((((((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 356, $this->source); })()), "fields", [], "any", false, false, false, 356), "slas_id_tto", [], "array", false, false, false, 356) > 0)) ? (1) : (0)) + (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 356, $this->source); })()), "fields", [], "any", false, false, false, 356), "slas_id_ttr", [], "array", false, false, false, 356) > 0)) ? (1) : (0))) + (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 356, $this->source); })()), "fields", [], "any", false, false, false, 356), "olas_id_tto", [], "array", false, false, false, 356) > 0)) ? (1) : (0))) + (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 356, $this->source); })()), "fields", [], "any", false, false, false, 356), "olas_id_ttr", [], "array", false, false, false, 356) > 0)) ? (1) : (0)));
                // line 357
                yield "         ";
                $context["servicelevels_show"] = (((CoreExtension::getAttribute($this->env, $this->source, ($context["headers_states"] ?? null), "service-levels", [], "array", true, true, false, 357) && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["headers_states"]) || array_key_exists("headers_states", $context) ? $context["headers_states"] : (function () { throw new RuntimeError('Variable "headers_states" does not exist.', 357, $this->source); })()), "service-levels", [], "array", false, false, false, 357) == "true"))) ? (true) : (false));
                // line 358
                yield "         <section class=\"accordion-item\" aria-label=\"";
                yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(_n("Service level", "Service levels", Session::getPluralNumber()), "html", null, true);
                yield "\">
            <div class=\"accordion-header\" id=\"service-levels-heading\" title=\"";
                // line 359
                yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(_n("Service level", "Service levels", Session::getPluralNumber()), "html", null, true);
                yield "\" data-bs-toggle=\"tooltip\">
               <button class=\"accordion-button ";
                // line 360
                yield (string) (((($tmp = (isset($context["servicelevels_show"]) || array_key_exists("servicelevels_show", $context) ? $context["servicelevels_show"] : (function () { throw new RuntimeError('Variable "servicelevels_show" does not exist.', 360, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("") : ("collapsed"));
                yield "\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#service-levels\" aria-expanded=\"true\" aria-controls=\"service-levels\">
                  <i class=\"ti ti-alarm\"></i>
                  <span class=\"item-title\">
                     ";
                // line 363
                yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(_n("Service level", "Service levels", Session::getPluralNumber()), "html", null, true);
                yield "
                  </span>
                  ";
                // line 365
                if (((isset($context["nb_la"]) || array_key_exists("nb_la", $context) ? $context["nb_la"] : (function () { throw new RuntimeError('Variable "nb_la" does not exist.', 365, $this->source); })()) > 0)) {
                    // line 366
                    yield "                     <span class=\"badge bg-secondary text-secondary-fg ms-2\">";
                    yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["nb_la"]) || array_key_exists("nb_la", $context) ? $context["nb_la"] : (function () { throw new RuntimeError('Variable "nb_la" does not exist.', 366, $this->source); })()), "html", null, true);
                    yield "</span>
                  ";
                }
                // line 368
                yield "               </button>
            </div>
            <div id=\"service-levels\" class=\"accordion-collapse collapse ";
                // line 370
                yield (string) (((($tmp = (isset($context["servicelevels_show"]) || array_key_exists("servicelevels_show", $context) ? $context["servicelevels_show"] : (function () { throw new RuntimeError('Variable "servicelevels_show" does not exist.', 370, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("show") : (""));
                yield "\" aria-labelledby=\"service-levels-heading\">
               <div class=\"accordion-body row m-0 mt-n2\">
                  ";
                // line 372
                yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["la_content"]) || array_key_exists("la_content", $context) ? $context["la_content"] : (function () { throw new RuntimeError('Variable "la_content" does not exist.', 372, $this->source); })()), "html", null, true);
                yield "
               </div>
            </div>
         </section>
      ";
            }
            // line 377
            yield "   ";
        }
        // line 378
        yield "
   ";
        // line 379
        if (CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 379, $this->source); })()), "getType", [], "method", false, false, false, 379), ["Problem", "Change"])) {
            // line 380
            yield "      ";
            $context["analysis_fields"] = ["impactcontent" => __("Impacts"), "causecontent" => __("Causes"), "symptomcontent" => __("Symptoms"), "controlistcontent" => __("Control list")];
            // line 386
            yield "
      ";
            // line 387
            $context["nb_analysis"] = 0;
            // line 388
            yield "      ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["analysis_fields"]) || array_key_exists("analysis_fields", $context) ? $context["analysis_fields"] : (function () { throw new RuntimeError('Variable "analysis_fields" does not exist.', 388, $this->source); })()));
            foreach ($context['_seq'] as $context["analysis_field"] => $context["label"]) {
                // line 389
                yield "         ";
                if (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 389, $this->source); })()), "isField", [$context["analysis_field"]], "method", false, false, false, 389)) && $tmp instanceof Markup ? (string) $tmp : $tmp) && (Twig\Extension\CoreExtension::length($this->env->getCharset(), Twig\Extension\CoreExtension::trim(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 389, $this->source); })()), "fields", [], "any", false, false, false, 389), $context["analysis_field"], [], "array", false, false, false, 389))) > 0))) {
                    // line 390
                    yield "            ";
                    $context["nb_analysis"] = ((isset($context["nb_analysis"]) || array_key_exists("nb_analysis", $context) ? $context["nb_analysis"] : (function () { throw new RuntimeError('Variable "nb_analysis" does not exist.', 390, $this->source); })()) + 1);
                    // line 391
                    yield "         ";
                }
                // line 392
                yield "      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['analysis_field'], $context['label'], $context['_parent']);
            $context = array_intersect_key($context, $_parent);
            $context += $_parent;
            // line 393
            yield "      ";
            $context["analysis_show"] = (((CoreExtension::getAttribute($this->env, $this->source, ($context["headers_states"] ?? null), "analysis", [], "array", true, true, false, 393) && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["headers_states"]) || array_key_exists("headers_states", $context) ? $context["headers_states"] : (function () { throw new RuntimeError('Variable "headers_states" does not exist.', 393, $this->source); })()), "analysis", [], "array", false, false, false, 393) == "true"))) ? (true) : (false));
            // line 394
            yield "      <section class=\"accordion-item\" aria-label=\"";
            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Analysis"), "html", null, true);
            yield "\">
         <div class=\"accordion-header\" id=\"analysis-heading\" title=\"";
            // line 395
            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Analysis"), "html", null, true);
            yield "\" data-bs-toggle=\"tooltip\">
            <button class=\"accordion-button ";
            // line 396
            yield (string) (((($tmp = (isset($context["analysis_show"]) || array_key_exists("analysis_show", $context) ? $context["analysis_show"] : (function () { throw new RuntimeError('Variable "analysis_show" does not exist.', 396, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("") : ("collapsed"));
            yield "\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#analysis\" aria-expanded=\"true\" aria-controls=\"analysis\">
               <i class=\"ti ti-eyeglass\"></i>
               <span class=\"item-title\">
                    ";
            // line 399
            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Analysis"), "html", null, true);
            yield "
               </span>
               ";
            // line 401
            if (((isset($context["nb_analysis"]) || array_key_exists("nb_analysis", $context) ? $context["nb_analysis"] : (function () { throw new RuntimeError('Variable "nb_analysis" does not exist.', 401, $this->source); })()) > 0)) {
                // line 402
                yield "                  <span class=\"badge bg-secondary text-secondary-fg ms-2\">";
                yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["nb_analysis"]) || array_key_exists("nb_analysis", $context) ? $context["nb_analysis"] : (function () { throw new RuntimeError('Variable "nb_analysis" does not exist.', 402, $this->source); })()), "html", null, true);
                yield "</span>
               ";
            }
            // line 404
            yield "            </button>
         </div>
         <div id=\"analysis\" class=\"accordion-collapse collapse ";
            // line 406
            yield (string) (((($tmp = (isset($context["analysis_show"]) || array_key_exists("analysis_show", $context) ? $context["analysis_show"] : (function () { throw new RuntimeError('Variable "analysis_show" does not exist.', 406, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("show") : (""));
            yield "\" aria-labelledby=\"analysis-heading\">
            <div class=\"accordion-body row m-0 mt-n2\">
               ";
            // line 408
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["analysis_fields"]) || array_key_exists("analysis_fields", $context) ? $context["analysis_fields"] : (function () { throw new RuntimeError('Variable "analysis_fields" does not exist.', 408, $this->source); })()));
            foreach ($context['_seq'] as $context["analysis_field"] => $context["label"]) {
                // line 409
                yield "                  ";
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 409, $this->source); })()), "isField", [$context["analysis_field"]], "method", false, false, false, 409)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 410
                    yield "                     ";
                    yield (string) $macros["fields"]->getTemplateForMacro("macro_textareaField", $context, 410, $this->getSourceContext())->macro_textareaField(...[                    // line 411
$context["analysis_field"], CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,                     // line 412
(isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 412, $this->source); })()), "fields", [], "any", false, false, false, 412), $context["analysis_field"], [], "array", false, false, false, 412),                     // line 413
$context["label"], Twig\Extension\CoreExtension::merge(                    // line 414
(isset($context["field_options"]) || array_key_exists("field_options", $context) ? $context["field_options"] : (function () { throw new RuntimeError('Variable "field_options" does not exist.', 414, $this->source); })()), ["enable_richtext" => true, "is_horizontal" => false])]);
                    // line 418
                    yield "
                  ";
                }
                // line 420
                yield "               ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['analysis_field'], $context['label'], $context['_parent']);
            $context = array_intersect_key($context, $_parent);
            $context += $_parent;
            // line 421
            yield "            </div>
         </div>
      </section>
   ";
        }
        // line 425
        yield "
   ";
        // line 426
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 426, $this->source); })()), "getType", [], "method", false, false, false, 426) == "Change")) {
            // line 427
            yield "      ";
            $context["plans_fields"] = ["rolloutplancontent" => __("Deployment plan"), "backoutplancontent" => __("Backup plan"), "checklistcontent" => __("Checklist")];
            // line 432
            yield "
      ";
            // line 433
            $context["nb_plans"] = 0;
            // line 434
            yield "      ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["plans_fields"]) || array_key_exists("plans_fields", $context) ? $context["plans_fields"] : (function () { throw new RuntimeError('Variable "plans_fields" does not exist.', 434, $this->source); })()));
            foreach ($context['_seq'] as $context["plans_field"] => $context["label"]) {
                // line 435
                yield "         ";
                if (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 435, $this->source); })()), "isField", [$context["plans_field"]], "method", false, false, false, 435)) && $tmp instanceof Markup ? (string) $tmp : $tmp) && (Twig\Extension\CoreExtension::length($this->env->getCharset(), Twig\Extension\CoreExtension::trim(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 435, $this->source); })()), "fields", [], "any", false, false, false, 435), $context["plans_field"], [], "array", false, false, false, 435))) > 0))) {
                    // line 436
                    yield "            ";
                    $context["nb_plans"] = ((isset($context["nb_plans"]) || array_key_exists("nb_plans", $context) ? $context["nb_plans"] : (function () { throw new RuntimeError('Variable "nb_plans" does not exist.', 436, $this->source); })()) + 1);
                    // line 437
                    yield "         ";
                }
                // line 438
                yield "      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['plans_field'], $context['label'], $context['_parent']);
            $context = array_intersect_key($context, $_parent);
            $context += $_parent;
            // line 439
            yield "
      ";
            // line 440
            $context["plans_show"] = (((CoreExtension::getAttribute($this->env, $this->source, ($context["headers_states"] ?? null), "plans", [], "array", true, true, false, 440) && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["headers_states"]) || array_key_exists("headers_states", $context) ? $context["headers_states"] : (function () { throw new RuntimeError('Variable "headers_states" does not exist.', 440, $this->source); })()), "plans", [], "array", false, false, false, 440) == "true"))) ? (true) : (false));
            // line 441
            yield "      <section class=\"accordion-item\" aria-label=\"";
            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Plans"), "html", null, true);
            yield "\">
         <div class=\"accordion-header\" id=\"plans-heading\" title=\"";
            // line 442
            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Plans"), "html", null, true);
            yield "\" data-bs-toggle=\"tooltip\">
            <button class=\"accordion-button ";
            // line 443
            yield (string) (((($tmp = (isset($context["plans_show"]) || array_key_exists("plans_show", $context) ? $context["plans_show"] : (function () { throw new RuntimeError('Variable "plans_show" does not exist.', 443, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("") : ("collapsed"));
            yield "\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#plans\" aria-expanded=\"true\" aria-controls=\"plans\">
               <i class=\"ti ti-checkup-list\"></i>
               <span class=\"item-title\">
                    ";
            // line 446
            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Plans"), "html", null, true);
            yield "
               </span>
               ";
            // line 448
            if (((isset($context["nb_plans"]) || array_key_exists("nb_plans", $context) ? $context["nb_plans"] : (function () { throw new RuntimeError('Variable "nb_plans" does not exist.', 448, $this->source); })()) > 0)) {
                // line 449
                yield "                  <span class=\"badge bg-secondary text-secondary-fg ms-2\">";
                yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["nb_plans"]) || array_key_exists("nb_plans", $context) ? $context["nb_plans"] : (function () { throw new RuntimeError('Variable "nb_plans" does not exist.', 449, $this->source); })()), "html", null, true);
                yield "</span>
               ";
            }
            // line 451
            yield "            </button>
         </div>
         <div id=\"plans\" class=\"accordion-collapse collapse ";
            // line 453
            yield (string) (((($tmp = (isset($context["plans_show"]) || array_key_exists("plans_show", $context) ? $context["plans_show"] : (function () { throw new RuntimeError('Variable "plans_show" does not exist.', 453, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("show") : (""));
            yield "\" aria-labelledby=\"plans-heading\">
            <div class=\"accordion-body row m-0 mt-n2\">
               ";
            // line 455
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["plans_fields"]) || array_key_exists("plans_fields", $context) ? $context["plans_fields"] : (function () { throw new RuntimeError('Variable "plans_fields" does not exist.', 455, $this->source); })()));
            foreach ($context['_seq'] as $context["plans_field"] => $context["label"]) {
                // line 456
                yield "                  ";
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 456, $this->source); })()), "isField", [$context["plans_field"]], "method", false, false, false, 456)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 457
                    yield "                     ";
                    yield (string) $macros["fields"]->getTemplateForMacro("macro_textareaField", $context, 457, $this->getSourceContext())->macro_textareaField(...[                    // line 458
$context["plans_field"], CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,                     // line 459
(isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 459, $this->source); })()), "fields", [], "any", false, false, false, 459), $context["plans_field"], [], "array", false, false, false, 459),                     // line 460
$context["label"], Twig\Extension\CoreExtension::merge(                    // line 461
(isset($context["field_options"]) || array_key_exists("field_options", $context) ? $context["field_options"] : (function () { throw new RuntimeError('Variable "field_options" does not exist.', 461, $this->source); })()), ["enable_richtext" => true, "is_horizontal" => false])]);
                    // line 465
                    yield "
                  ";
                }
                // line 467
                yield "               ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['plans_field'], $context['label'], $context['_parent']);
            $context = array_intersect_key($context, $_parent);
            $context += $_parent;
            // line 468
            yield "            </div>
         </div>
      </section>
   ";
        }
        // line 472
        yield "
   ";
        // line 473
        $context["linked_itilobjects_show"] = (((CoreExtension::getAttribute($this->env, $this->source, ($context["headers_states"] ?? null), "linked_itilobjects", [], "array", true, true, false, 473) && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["headers_states"]) || array_key_exists("headers_states", $context) ? $context["headers_states"] : (function () { throw new RuntimeError('Variable "headers_states" does not exist.', 473, $this->source); })()), "linked_itilobjects", [], "array", false, false, false, 473) == "true"))) ? (true) : (false));
        // line 474
        yield "   ";
        $context["nb_linked_itilobjects"] = (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 474, $this->source); })()), "isNewItem", [], "method", false, false, false, 474)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (0) : ($this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("CommonITILObject_CommonITILObject::countAllLinks", [CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 474, $this->source); })()), "getType", [], "method", false, false, false, 474), CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 474, $this->source); })()), "getId", [], "method", false, false, false, 474)])));
        // line 475
        yield "   <section class=\"accordion-item\" aria-label=\"";
        yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeName("CommonITILObject_CommonITILObject", (isset($context["nb_linked_itilobjects"]) || array_key_exists("nb_linked_itilobjects", $context) ? $context["nb_linked_itilobjects"] : (function () { throw new RuntimeError('Variable "nb_linked_itilobjects" does not exist.', 475, $this->source); })())), "html", null, true);
        yield "\">
      <div class=\"accordion-header\" id=\"linked_itilobjects-heading\" title=\"";
        // line 476
        yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeName("CommonITILObject_CommonITILObject", (isset($context["nb_linked_itilobjects"]) || array_key_exists("nb_linked_itilobjects", $context) ? $context["nb_linked_itilobjects"] : (function () { throw new RuntimeError('Variable "nb_linked_itilobjects" does not exist.', 476, $this->source); })())), "html", null, true);
        yield "\" data-bs-toggle=\"tooltip\">
         <button class=\"accordion-button ";
        // line 477
        yield (string) (((($tmp = (isset($context["linked_itilobjects_show"]) || array_key_exists("linked_itilobjects_show", $context) ? $context["linked_itilobjects_show"] : (function () { throw new RuntimeError('Variable "linked_itilobjects_show" does not exist.', 477, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("") : ("collapsed"));
        yield "\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#linked_itilobjects\" aria-expanded=\"true\" aria-controls=\"linked_itilobjects\">
            <i class=\"ti ti-link\"></i>
            ";
        // line 479
        if (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 479, $this->source); })()), "isNewItem", [], "method", false, false, false, 479)) && $tmp instanceof Markup ? (string) $tmp : $tmp) && ((((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["params"] ?? null), "_link", [], "array", false, true, false, 479), "items_id_2", [], "array", true, true, false, 479) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["params"]) || array_key_exists("params", $context) ? $context["params"] : (function () { throw new RuntimeError('Variable "params" does not exist.', 479, $this->source); })()), "_link", [], "array", false, false, false, 479), "items_id_2", [], "array", false, false, false, 479)))) ? (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["params"]) || array_key_exists("params", $context) ? $context["params"] : (function () { throw new RuntimeError('Variable "params" does not exist.', 479, $this->source); })()), "_link", [], "array", false, false, false, 479), "items_id_2", [], "array", false, false, false, 479)) : (0)) > 0))) {
            // line 480
            yield "               ";
            $context["nb_linked_itilobjects"] = 1;
            // line 481
            yield "            ";
        }
        // line 482
        yield "            <span class=\"item-title\">
                 ";
        // line 483
        yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeName("CommonITILObject_CommonITILObject", (isset($context["nb_linked_itilobjects"]) || array_key_exists("nb_linked_itilobjects", $context) ? $context["nb_linked_itilobjects"] : (function () { throw new RuntimeError('Variable "nb_linked_itilobjects" does not exist.', 483, $this->source); })())), "html", null, true);
        yield "
            </span>
            ";
        // line 485
        if (((isset($context["nb_linked_itilobjects"]) || array_key_exists("nb_linked_itilobjects", $context) ? $context["nb_linked_itilobjects"] : (function () { throw new RuntimeError('Variable "nb_linked_itilobjects" does not exist.', 485, $this->source); })()) > 0)) {
            // line 486
            yield "               <span class=\"badge bg-secondary text-secondary-fg ms-2\">";
            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["nb_linked_itilobjects"]) || array_key_exists("nb_linked_itilobjects", $context) ? $context["nb_linked_itilobjects"] : (function () { throw new RuntimeError('Variable "nb_linked_itilobjects" does not exist.', 486, $this->source); })()), "html", null, true);
            yield "</span>
            ";
        }
        // line 488
        yield "         </button>
      </div>
      <div id=\"linked_itilobjects\" class=\"accordion-collapse collapse ";
        // line 490
        yield (string) (((($tmp = (isset($context["linked_itilobjects_show"]) || array_key_exists("linked_itilobjects_show", $context) ? $context["linked_itilobjects_show"] : (function () { throw new RuntimeError('Variable "linked_itilobjects_show" does not exist.', 490, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("show") : (""));
        yield "\" aria-labelledby=\"linked_itilobjects-heading\">
         <div class=\"accordion-body\">
            ";
        // line 492
        yield (string) Twig\Extension\CoreExtension::include($this->env, $context, "components/itilobject/linked_itilobjects.html.twig");
        yield "
         </div>
      </div>
   </section>

   ";
        // line 497
        yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\PluginExtension']->callPluginHook(Twig\Extension\CoreExtension::constant("Glpi\\Plugin\\Hooks::POST_ITIL_INFO_SECTION"), ["item" => (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 497, $this->source); })()), "options" => (isset($context["params"]) || array_key_exists("params", $context) ? $context["params"] : (function () { throw new RuntimeError('Variable "params" does not exist.', 497, $this->source); })())]), "html", null, true);
        yield "

    <span class=\"d-none d-md-block\">
        <button type=\"button\" class=\"switch-panel-width btn btn-icon btn-ghost-secondary position-absolute bottom-0 start-0 mb-2\">
            <i class=\"ti ti-caret-left-filled\"></i>
        </button>
    </span>
</div>

<script type=\"text/javascript\">
\$(function() {
   if (\$(window).width() < 768) { // medium breakpoint (Todo check if it\x27s possible to get bootstrap breakpoints withint javascript)
      \$(\x27#itil-data .accordion-collapse\x27).each(function() {
         \$(this).removeClass(\x27show\x27);
      })
   }
});

\$(function() {
    // Prevent display of accordion header tooltips when right panel is expanded
    \$(\x27#itil-data .accordion-header\x27).on(\x27show.bs.tooltip\x27, function(e) {
        if (!\$(\x27#itil-object-container\x27).hasClass(\x27right-collapsed\x27) && \$(e.target).hasClass(\x27accordion-header\x27)) {
            e.preventDefault();
        }
    });
});

var reloadCategory = function() {
    var type = \$(\x27[name=type]\x27).val();
   // Target only the category field to avoid conflicts with other field-container elements in the KB
    \$(\x27#category_field_container";
        // line 527
        yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["rand"]) || array_key_exists("rand", $context) ? $context["rand"] : (function () { throw new RuntimeError('Variable "rand" does not exist.', 527, $this->source); })()), "html", null, true);
        yield "\x27).load(
        \x27";
        // line 528
        yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\RoutingExtension']->path("ajax/dropdownTicketCategories.php"), "html", null, true);
        yield "\x27,
        {
            \x27type\x27: type,
            \x27entity_restrict\x27: ";
        // line 531
        yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 531, $this->source); })()), "fields", [], "any", false, false, false, 531), "entities_id", [], "array", false, false, false, 531), "html", null, true);
        yield ",
            \x27value\x27: ";
        // line 532
        yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 532, $this->source); })()), "fields", [], "any", false, false, false, 532), "itilcategories_id", [], "array", false, false, false, 532), "html", null, true);
        yield ",
        }
    );
};
</script>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "components/itilobject/fields_panel.html.twig";
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
        return array (  1032 => 532,  1028 => 531,  1022 => 528,  1018 => 527,  985 => 497,  977 => 492,  972 => 490,  968 => 488,  962 => 486,  960 => 485,  955 => 483,  952 => 482,  949 => 481,  946 => 480,  944 => 479,  939 => 477,  935 => 476,  930 => 475,  927 => 474,  925 => 473,  922 => 472,  916 => 468,  909 => 467,  905 => 465,  903 => 461,  902 => 460,  901 => 459,  900 => 458,  898 => 457,  895 => 456,  891 => 455,  886 => 453,  882 => 451,  876 => 449,  874 => 448,  869 => 446,  863 => 443,  859 => 442,  854 => 441,  852 => 440,  849 => 439,  842 => 438,  839 => 437,  836 => 436,  833 => 435,  828 => 434,  826 => 433,  823 => 432,  820 => 427,  818 => 426,  815 => 425,  809 => 421,  802 => 420,  798 => 418,  796 => 414,  795 => 413,  794 => 412,  793 => 411,  791 => 410,  788 => 409,  784 => 408,  779 => 406,  775 => 404,  769 => 402,  767 => 401,  762 => 399,  756 => 396,  752 => 395,  747 => 394,  744 => 393,  737 => 392,  734 => 391,  731 => 390,  728 => 389,  723 => 388,  721 => 387,  718 => 386,  715 => 380,  713 => 379,  710 => 378,  707 => 377,  699 => 372,  694 => 370,  690 => 368,  684 => 366,  682 => 365,  677 => 363,  671 => 360,  667 => 359,  662 => 358,  659 => 357,  656 => 356,  654 => 355,  651 => 354,  644 => 352,  641 => 351,  639 => 350,  636 => 349,  628 => 344,  623 => 342,  619 => 340,  615 => 338,  613 => 337,  607 => 334,  601 => 331,  597 => 330,  592 => 329,  589 => 328,  587 => 327,  584 => 326,  581 => 325,  575 => 321,  558 => 318,  556 => 317,  555 => 316,  554 => 315,  549 => 313,  546 => 312,  529 => 311,  524 => 309,  518 => 306,  513 => 304,  507 => 301,  503 => 300,  498 => 299,  495 => 298,  492 => 297,  489 => 296,  487 => 295,  479 => 290,  474 => 288,  470 => 286,  464 => 284,  462 => 283,  457 => 281,  451 => 278,  445 => 275,  441 => 274,  436 => 273,  434 => 272,  426 => 267,  423 => 266,  417 => 264,  415 => 263,  412 => 262,  408 => 260,  406 => 259,  405 => 257,  403 => 255,  401 => 254,  398 => 253,  394 => 251,  392 => 246,  391 => 245,  390 => 243,  388 => 240,  386 => 239,  383 => 238,  379 => 236,  377 => 233,  376 => 231,  375 => 229,  373 => 226,  371 => 225,  366 => 223,  363 => 222,  359 => 220,  357 => 214,  356 => 212,  354 => 209,  352 => 208,  349 => 207,  343 => 205,  340 => 204,  334 => 201,  329 => 197,  327 => 196,  326 => 194,  325 => 191,  320 => 190,  317 => 189,  314 => 188,  311 => 187,  308 => 186,  305 => 185,  302 => 184,  299 => 183,  296 => 182,  293 => 181,  290 => 180,  287 => 179,  284 => 178,  281 => 175,  278 => 174,  275 => 173,  272 => 170,  269 => 169,  267 => 167,  266 => 166,  265 => 165,  264 => 164,  261 => 163,  257 => 161,  255 => 159,  254 => 158,  253 => 156,  251 => 154,  249 => 153,  246 => 152,  243 => 151,  240 => 150,  237 => 149,  234 => 148,  232 => 147,  231 => 146,  230 => 145,  229 => 142,  227 => 141,  225 => 140,  222 => 139,  218 => 137,  216 => 136,  215 => 134,  213 => 132,  211 => 131,  208 => 130,  204 => 128,  202 => 127,  201 => 125,  199 => 123,  197 => 122,  194 => 121,  190 => 119,  188 => 118,  187 => 116,  185 => 114,  183 => 113,  179 => 111,  177 => 110,  176 => 108,  175 => 106,  172 => 105,  169 => 104,  165 => 102,  163 => 101,  162 => 99,  160 => 97,  158 => 96,  155 => 95,  151 => 93,  149 => 90,  148 => 88,  147 => 86,  144 => 85,  140 => 84,  134 => 82,  128 => 80,  125 => 79,  122 => 78,  118 => 76,  116 => 73,  115 => 72,  114 => 70,  112 => 67,  109 => 66,  107 => 65,  102 => 63,  96 => 60,  89 => 56,  83 => 53,  77 => 50,  72 => 48,  67 => 47,  65 => 46,  61 => 44,  59 => 43,  57 => 42,  54 => 41,  52 => 39,  51 => 38,  50 => 37,  49 => 36,  48 => 34,  46 => 33,  43 => 32,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "components/itilobject/fields_panel.html.twig", "/Users/alvarozuculajunior/BCX/glpi/templates/components/itilobject/fields_panel.html.twig");
    }
}
