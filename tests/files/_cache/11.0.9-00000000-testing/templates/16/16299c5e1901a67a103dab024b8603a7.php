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

/* components/itilobject/timeline/form_solution.html.twig */
class __TwigTemplate_d956914c2b3696b7a14278f535201b95 extends Template
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

        $this->blocks = [
            'timeline_card' => [$this, 'block_timeline_card'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 33
        return "components/itilobject/timeline/form_timeline_item.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 34
        $macros["fields"] = $this->macros["fields"] = $this->load("components/form/fields_macros.html.twig", 34)->unwrap();
        // line 36
        $context["params"] = Twig\Extension\CoreExtension::merge(["item" => (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 36, $this->source); })())], ((array_key_exists("params", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["params"]) || array_key_exists("params", $context) ? $context["params"] : (function () { throw new RuntimeError('Variable "params" does not exist.', 36, $this->source); })()), [])) : ([])));
        // line 38
        $context["candedit"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 38, $this->source); })()), "maySolve", [], "method", false, false, false, 38);
        // line 39
        $context["can_read_kb"] = ((($tmp = Session::haveRight("knowbase", Twig\Extension\CoreExtension::constant("READ"))) && $tmp instanceof Markup ? (string) $tmp : $tmp) || (($tmp = Session::haveRight("knowbase", Twig\Extension\CoreExtension::constant("KnowbaseItem::READFAQ"))) && $tmp instanceof Markup ? (string) $tmp : $tmp));
        // line 40
        $context["can_update_kb"] = Session::haveRight("knowbase", Twig\Extension\CoreExtension::constant("UPDATE"));
        // line 41
        $context["nokb"] = (CoreExtension::getAttribute($this->env, $this->source, ($context["params"] ?? null), "nokb", [], "array", true, true, false, 41) || ((((CoreExtension::getAttribute($this->env, $this->source, ($context["params"] ?? null), "nokb", [], "array", true, true, false, 41) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["params"]) || array_key_exists("params", $context) ? $context["params"] : (function () { throw new RuntimeError('Variable "params" does not exist.', 41, $this->source); })()), "nokb", [], "array", false, false, false, 41)))) ? (CoreExtension::getAttribute($this->env, $this->source, (isset($context["params"]) || array_key_exists("params", $context) ? $context["params"] : (function () { throw new RuntimeError('Variable "params" does not exist.', 41, $this->source); })()), "nokb", [], "array", false, false, false, 41)) : (false)) == true));
        // line 42
        $context["noform"] = (CoreExtension::getAttribute($this->env, $this->source, ($context["params"] ?? null), "noform", [], "array", true, true, false, 42) || ((((CoreExtension::getAttribute($this->env, $this->source, ($context["params"] ?? null), "noform", [], "array", true, true, false, 42) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["params"]) || array_key_exists("params", $context) ? $context["params"] : (function () { throw new RuntimeError('Variable "params" does not exist.', 42, $this->source); })()), "noform", [], "array", false, false, false, 42)))) ? (CoreExtension::getAttribute($this->env, $this->source, (isset($context["params"]) || array_key_exists("params", $context) ? $context["params"] : (function () { throw new RuntimeError('Variable "params" does not exist.', 42, $this->source); })()), "noform", [], "array", false, false, false, 42)) : (false)) == true));
        // line 43
        $context["disabled"] = ((isset($context["candedit"]) || array_key_exists("candedit", $context) ? $context["candedit"] : (function () { throw new RuntimeError('Variable "candedit" does not exist.', 43, $this->source); })()) == false);
        // line 44
        $context["rand"] = Html::sanitizeDomId(((array_key_exists("rand", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["rand"]) || array_key_exists("rand", $context) ? $context["rand"] : (function () { throw new RuntimeError('Variable "rand" does not exist.', 44, $this->source); })()), Twig\Extension\CoreExtension::random($this->env->getCharset()))) : (Twig\Extension\CoreExtension::random($this->env->getCharset()))));
        // line 46
        $context["content_field_id"] = ("solution_content_" . (isset($context["rand"]) || array_key_exists("rand", $context) ? $context["rand"] : (function () { throw new RuntimeError('Variable "rand" does not exist.', 46, $this->source); })()));
        // line 33
        $this->parent = $this->load("components/itilobject/timeline/form_timeline_item.html.twig", 33);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 48
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_timeline_card(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 49
        yield "   ";
        if (((isset($context["form_mode"]) || array_key_exists("form_mode", $context) ? $context["form_mode"] : (function () { throw new RuntimeError('Variable "form_mode" does not exist.', 49, $this->source); })()) == "view")) {
            // line 50
            yield "      <div class=\"read-only-content\">
         <div class= \"rich_text_container\">
            ";
            // line 52
            yield (string) $this->extensions['Glpi\Application\View\Extension\DataHelpersExtension']->getEnhancedHtml(CoreExtension::getAttribute($this->env, $this->source, (isset($context["entry_i"]) || array_key_exists("entry_i", $context) ? $context["entry_i"] : (function () { throw new RuntimeError('Variable "entry_i" does not exist.', 52, $this->source); })()), "content", [], "array", false, false, false, 52), ["user_mentions" => true, "images_gallery" => true]);
            // line 55
            yield "
         </div>

         <div class=\"timeline-badges\">
            ";
            // line 59
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["entry_i"]) || array_key_exists("entry_i", $context) ? $context["entry_i"] : (function () { throw new RuntimeError('Variable "entry_i" does not exist.', 59, $this->source); })()), "solutiontypes_id", [], "array", false, false, false, 59)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 60
                yield "               <span class=\"badge bg-blue-lt\">
                  <i class=\"ti ti-tag me-1\"></i>
                  ";
                // line 62
                yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemName("SolutionType", CoreExtension::getAttribute($this->env, $this->source, (isset($context["entry_i"]) || array_key_exists("entry_i", $context) ? $context["entry_i"] : (function () { throw new RuntimeError('Variable "entry_i" does not exist.', 62, $this->source); })()), "solutiontypes_id", [], "array", false, false, false, 62)), "html", null, true);
                yield "
               </span>
            ";
            }
            // line 65
            yield "
            ";
            // line 66
            if (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["entry_i"]) || array_key_exists("entry_i", $context) ? $context["entry_i"] : (function () { throw new RuntimeError('Variable "entry_i" does not exist.', 66, $this->source); })()), "status", [], "array", false, false, false, 66) != Twig\Extension\CoreExtension::constant("CommonITILValidation::WAITING")) && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["entry_i"]) || array_key_exists("entry_i", $context) ? $context["entry_i"] : (function () { throw new RuntimeError('Variable "entry_i" does not exist.', 66, $this->source); })()), "status", [], "array", false, false, false, 66) != Twig\Extension\CoreExtension::constant("CommonITILValidation::NONE")))) {
                // line 67
                yield "               <span class=\"badge bg-blue-lt\">
                  ";
                // line 68
                $context["action"] = (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["entry_i"]) || array_key_exists("entry_i", $context) ? $context["entry_i"] : (function () { throw new RuntimeError('Variable "entry_i" does not exist.', 68, $this->source); })()), "status", [], "array", false, false, false, 68) == Twig\Extension\CoreExtension::constant("CommonITILValidation::ACCEPTED"))) ? (__("Accepted")) : (_x("validation", "Refused")));
                // line 69
                yield "                  ";
                yield (string) Twig\Extension\CoreExtension::sprintf(__("%1\$s on %2\$s by %3\$s"),                 // line 70
(isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 70, $this->source); })()), $this->extensions['Glpi\Application\View\Extension\DataHelpersExtension']->getFormattedDatetime(CoreExtension::getAttribute($this->env, $this->source,                 // line 71
(isset($context["entry_i"]) || array_key_exists("entry_i", $context) ? $context["entry_i"] : (function () { throw new RuntimeError('Variable "entry_i" does not exist.', 71, $this->source); })()), "date_approval", [], "array", false, false, false, 71)), $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemLink("User", CoreExtension::getAttribute($this->env, $this->source,                 // line 72
(isset($context["entry_i"]) || array_key_exists("entry_i", $context) ? $context["entry_i"] : (function () { throw new RuntimeError('Variable "entry_i" does not exist.', 72, $this->source); })()), "users_id_approval", [], "array", false, false, false, 72), ["enable_anonymization" => true]));
                // line 73
                yield "
               </span>
            ";
            }
            // line 76
            yield "         </div>
      </div>
   ";
        } else {
            // line 79
            yield "      <div class=\"itilsolution\">
         ";
            // line 80
            $context["validation_class"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 80, $this->source); })()), "getValidationClassInstance", [], "method", false, false, false, 80);
            // line 81
            yield "         ";
            if ( !(null === (isset($context["validation_class"]) || array_key_exists("validation_class", $context) ? $context["validation_class"] : (function () { throw new RuntimeError('Variable "validation_class" does not exist.', 81, $this->source); })()))) {
                // line 82
                yield "            ";
                yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["validation_class"]) || array_key_exists("validation_class", $context) ? $context["validation_class"] : (function () { throw new RuntimeError('Variable "validation_class" does not exist.', 82, $this->source); })()), "alertValidation", [(isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 82, $this->source); })()), "solution"], "method", false, false, false, 82), "html", null, true);
                yield "
         ";
            }
            // line 84
            yield "
         ";
            // line 85
            if ( !(($tmp = (isset($context["noform"]) || array_key_exists("noform", $context) ? $context["noform"] : (function () { throw new RuntimeError('Variable "noform" does not exist.', 85, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 86
                yield "         <form name=\"asset_form\" style=\"width: 100%;\" class=\"d-flex flex-column\" method=\"post\"
               action=\"";
                // line 87
                yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["subitem"]) || array_key_exists("subitem", $context) ? $context["subitem"] : (function () { throw new RuntimeError('Variable "subitem" does not exist.', 87, $this->source); })()), "getFormURL", [], "method", false, false, false, 87), "html", null, true);
                yield "\" enctype=\"multipart/form-data\" data-track-changes=\"true\" data-submit-once>
         ";
            }
            // line 89
            yield "
            <input type=\"hidden\" name=\"itemtype\" value=\"";
            // line 90
            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 90, $this->source); })()), "getType", [], "method", false, false, false, 90), "html", null, true);
            yield "\" />
            <input type=\"hidden\" name=\"items_id\" value=\"";
            // line 91
            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 91, $this->source); })()), "fields", [], "any", false, false, false, 91), "id", [], "array", false, false, false, 91), "html", null, true);
            yield "\" />
            <input type=\"hidden\" name=\"_no_message_link\" value=\"1\" />
            ";
            // line 93
            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\PluginExtension']->callPluginHook(Twig\Extension\CoreExtension::constant("Glpi\\Plugin\\Hooks::PRE_ITEM_FORM"), ["item" => (isset($context["subitem"]) || array_key_exists("subitem", $context) ? $context["subitem"] : (function () { throw new RuntimeError('Variable "subitem" does not exist.', 93, $this->source); })()), "options" => (isset($context["params"]) || array_key_exists("params", $context) ? $context["params"] : (function () { throw new RuntimeError('Variable "params" does not exist.', 93, $this->source); })())]), "html", null, true);
            yield "

            ";
            // line 95
            if (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 95, $this->source); })()), "getType", [], "method", false, false, false, 95) == "Ticket") && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 95, $this->source); })()), "countOpenChildrenOfSameType", [], "method", false, false, false, 95) > 0))) {
                // line 96
                yield "               <div class=\"alert alert-important alert-warning\">
                  <i class=\"ti ti-info-circle fs-2x me-2\"></i>
                  <span>";
                // line 98
                yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Warning: non closed children tickets depends on current ticket. Are you sure you want to close it?"), "html", null, true);
                yield "</span>
               </div>
            ";
            }
            // line 101
            yield "
            <div class=\"row mx-n3 mx-xxl-auto\">
               <div class=\"col-12 col-xl-7 col-xxl-8\">
                  ";
            // line 104
            $context["content"] = (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["subitem"] ?? null), "fields", [], "any", false, true, false, 104), "content", [], "array", true, true, false, 104) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["subitem"]) || array_key_exists("subitem", $context) ? $context["subitem"] : (function () { throw new RuntimeError('Variable "subitem" does not exist.', 104, $this->source); })()), "fields", [], "any", false, false, false, 104), "content", [], "array", false, false, false, 104)))) ? (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["subitem"]) || array_key_exists("subitem", $context) ? $context["subitem"] : (function () { throw new RuntimeError('Variable "subitem" does not exist.', 104, $this->source); })()), "fields", [], "any", false, false, false, 104), "content", [], "array", false, false, false, 104)) : (""));
            // line 105
            yield "
                  ";
            // line 106
            yield (string) $macros["fields"]->getTemplateForMacro("macro_textareaField", $context, 106, $this->getSourceContext())->macro_textareaField(...["content",             // line 108
(isset($context["content"]) || array_key_exists("content", $context) ? $context["content"] : (function () { throw new RuntimeError('Variable "content" does not exist.', 108, $this->source); })()), "", ["id" =>             // line 111
(isset($context["content_field_id"]) || array_key_exists("content_field_id", $context) ? $context["content_field_id"] : (function () { throw new RuntimeError('Variable "content_field_id" does not exist.', 111, $this->source); })()), "full_width" => true, "no_label" => true, "enable_richtext" => true, "enable_fileupload" => true, "mention_options" => ((            // line 116
array_key_exists("mention_options", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["mention_options"]) || array_key_exists("mention_options", $context) ? $context["mention_options"] : (function () { throw new RuntimeError('Variable "mention_options" does not exist.', 116, $this->source); })()), [])) : ([])), "entities_id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,             // line 117
(isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 117, $this->source); })()), "fields", [], "any", false, false, false, 117), "entities_id", [], "array", false, false, false, 117), "rand" =>             // line 118
(isset($context["rand"]) || array_key_exists("rand", $context) ? $context["rand"] : (function () { throw new RuntimeError('Variable "rand" does not exist.', 118, $this->source); })()), "disabled" =>             // line 119
(isset($context["disabled"]) || array_key_exists("disabled", $context) ? $context["disabled"] : (function () { throw new RuntimeError('Variable "disabled" does not exist.', 119, $this->source); })()), "aria_label" => _n("Solution", "Solutions", 1)]]);
            // line 122
            yield "
               </div>
               <div class=\"col-12 col-xl-5 col-xxl-4 order-first order-md-last pe-0 pe-xxl-auto\">
                  <div class=\"row\">
                     ";
            // line 126
            if ((($tmp = (isset($context["candedit"]) || array_key_exists("candedit", $context) ? $context["candedit"] : (function () { throw new RuntimeError('Variable "candedit" does not exist.', 126, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 127
                yield "                        ";
                if (((($tmp = (isset($context["can_read_kb"]) || array_key_exists("can_read_kb", $context) ? $context["can_read_kb"] : (function () { throw new RuntimeError('Variable "can_read_kb" does not exist.', 127, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp) &&  !(($tmp = (isset($context["nokb"]) || array_key_exists("nokb", $context) ? $context["nokb"] : (function () { throw new RuntimeError('Variable "nokb" does not exist.', 127, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp))) {
                    // line 128
                    yield "                           ";
                    yield (string) Twig\Extension\CoreExtension::include($this->env, $context, "components/itilobject/timeline/knowledge_item.html.twig");
                    yield "
                        ";
                }
                // line 130
                yield "
                        ";
                // line 131
                $context["sol_template_lbl"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                    // line 132
                    yield "                           <i class=\"";
                    yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeIcon("SolutionTemplate"), "html", null, true);
                    yield " me-1\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\"
                              title=\"";
                    // line 133
                    yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(_n("Solution template", "Solution templates", Session::getPluralNumber()), "html", null, true);
                    yield "\"></i>
                        ";
                    yield from [];
                })())) ? '' : new Markup($tmp, $this->env->getCharset());
                // line 135
                yield "                        ";
                yield (string) $macros["fields"]->getTemplateForMacro("macro_dropdownField", $context, 135, $this->getSourceContext())->macro_dropdownField(...["SolutionTemplate", "solutiontemplates_id", 0,                 // line 139
(isset($context["sol_template_lbl"]) || array_key_exists("sol_template_lbl", $context) ? $context["sol_template_lbl"] : (function () { throw new RuntimeError('Variable "sol_template_lbl" does not exist.', 139, $this->source); })()), ["full_width" => true, "icon_label" => true, "on_change" => (("solutiontemplate_update" .                 // line 143
(isset($context["rand"]) || array_key_exists("rand", $context) ? $context["rand"] : (function () { throw new RuntimeError('Variable "rand" does not exist.', 143, $this->source); })())) . "(this.value)"), "rand" =>                 // line 144
(isset($context["rand"]) || array_key_exists("rand", $context) ? $context["rand"] : (function () { throw new RuntimeError('Variable "rand" does not exist.', 144, $this->source); })()), "entity" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,                 // line 145
(isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 145, $this->source); })()), "fields", [], "any", false, false, false, 145), "entities_id", [], "array", false, false, false, 145), "disabled" =>                 // line 146
(isset($context["disabled"]) || array_key_exists("disabled", $context) ? $context["disabled"] : (function () { throw new RuntimeError('Variable "disabled" does not exist.', 146, $this->source); })())]]);
                // line 148
                yield "

                     ";
            }
            // line 151
            yield "
                     ";
            // line 152
            $context["sol_type_lbl"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                // line 153
                yield "                        <i class=\"ti ti-tag me-1\" title=\"";
                yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeName("SolutionType"), "html", null, true);
                yield "\"
                           data-bs-toggle=\"tooltip\" data-bs-placement=\"top\"></i>
                     ";
                yield from [];
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 156
            yield "                     ";
            $context["sol_search"] = [];
            // line 157
            yield "                     ";
            if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 157, $this->source); })()), "getType", [], "method", false, false, false, 157) == "Ticket")) {
                // line 158
                yield "                        ";
                if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 158, $this->source); })()), "fields", [], "any", false, false, false, 158), "type", [], "array", false, false, false, 158) == Twig\Extension\CoreExtension::constant("Ticket::INCIDENT_TYPE"))) {
                    // line 159
                    yield "                           ";
                    $context["sol_search"] = ["is_incident" => 1];
                    // line 160
                    yield "                        ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 160, $this->source); })()), "fields", [], "any", false, false, false, 160), "type", [], "array", false, false, false, 160) == Twig\Extension\CoreExtension::constant("Ticket::DEMAND_TYPE"))) {
                    // line 161
                    yield "                           ";
                    $context["sol_search"] = ["is_request" => 1];
                    // line 162
                    yield "                        ";
                }
                // line 163
                yield "                     ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 163, $this->source); })()), "getType", [], "method", false, false, false, 163) == "Problem")) {
                // line 164
                yield "                        ";
                $context["sol_search"] = ["is_problem" => 1];
                // line 165
                yield "                     ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 165, $this->source); })()), "getType", [], "method", false, false, false, 165) == "Change")) {
                // line 166
                yield "                        ";
                $context["sol_search"] = ["is_change" => 1];
                // line 167
                yield "                     ";
            }
            // line 168
            yield "                     ";
            yield (string) $macros["fields"]->getTemplateForMacro("macro_dropdownField", $context, 168, $this->getSourceContext())->macro_dropdownField(...["SolutionType", "solutiontypes_id", (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,             // line 171
($context["subitem"] ?? null), "fields", [], "any", false, true, false, 171), "solutiontypes_id", [], "array", true, true, false, 171) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["subitem"]) || array_key_exists("subitem", $context) ? $context["subitem"] : (function () { throw new RuntimeError('Variable "subitem" does not exist.', 171, $this->source); })()), "fields", [], "any", false, false, false, 171), "solutiontypes_id", [], "array", false, false, false, 171)))) ? (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["subitem"]) || array_key_exists("subitem", $context) ? $context["subitem"] : (function () { throw new RuntimeError('Variable "subitem" does not exist.', 171, $this->source); })()), "fields", [], "any", false, false, false, 171), "solutiontypes_id", [], "array", false, false, false, 171)) : (0)),             // line 172
(isset($context["sol_type_lbl"]) || array_key_exists("sol_type_lbl", $context) ? $context["sol_type_lbl"] : (function () { throw new RuntimeError('Variable "sol_type_lbl" does not exist.', 172, $this->source); })()), ["full_width" => true, "icon_label" => true, "rand" =>             // line 176
(isset($context["rand"]) || array_key_exists("rand", $context) ? $context["rand"] : (function () { throw new RuntimeError('Variable "rand" does not exist.', 176, $this->source); })()), "entity" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,             // line 177
(isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 177, $this->source); })()), "fields", [], "any", false, false, false, 177), "entities_id", [], "array", false, false, false, 177), "condition" =>             // line 178
(isset($context["sol_search"]) || array_key_exists("sol_search", $context) ? $context["sol_search"] : (function () { throw new RuntimeError('Variable "sol_search" does not exist.', 178, $this->source); })()), "disabled" =>             // line 179
(isset($context["disabled"]) || array_key_exists("disabled", $context) ? $context["disabled"] : (function () { throw new RuntimeError('Variable "disabled" does not exist.', 179, $this->source); })())]]);
            // line 181
            yield "

                    ";
            // line 183
            $context["link_kb_lbl"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                // line 184
                yield "                        <i class=\"ti ti-link me-1\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\"
                           title=\"";
                // line 185
                yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::replace(__("Link to knowledge base entry #%id"), ["%id" => ""]), "html", null, true);
                yield "\"></i>
                    ";
                yield from [];
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 187
            yield "                    ";
            yield (string) $macros["fields"]->getTemplateForMacro("macro_sliderField", $context, 187, $this->getSourceContext())->macro_sliderField(...["kb_linked_id", 1,             // line 190
(isset($context["link_kb_lbl"]) || array_key_exists("link_kb_lbl", $context) ? $context["link_kb_lbl"] : (function () { throw new RuntimeError('Variable "link_kb_lbl" does not exist.', 190, $this->source); })()), ["full_width" => true, "icon_label" => true, "rand" =>             // line 194
(isset($context["rand"]) || array_key_exists("rand", $context) ? $context["rand"] : (function () { throw new RuntimeError('Variable "rand" does not exist.', 194, $this->source); })()), "yes_value" => 0, "add_field_class" => "d-none", "disabled" => true]]);
            // line 199
            yield "

                     ";
            // line 201
            if ((((($tmp = (isset($context["candedit"]) || array_key_exists("candedit", $context) ? $context["candedit"] : (function () { throw new RuntimeError('Variable "candedit" does not exist.', 201, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp) && (($tmp = (isset($context["can_update_kb"]) || array_key_exists("can_update_kb", $context) ? $context["can_update_kb"] : (function () { throw new RuntimeError('Variable "can_update_kb" does not exist.', 201, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) &&  !(($tmp = (isset($context["nokb"]) || array_key_exists("nokb", $context) ? $context["nokb"] : (function () { throw new RuntimeError('Variable "nokb" does not exist.', 201, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp))) {
                // line 202
                yield "                        ";
                $context["sol_to_kb_lbl"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                    // line 203
                    yield "                           <i class=\"ti ti-device-floppy me-1\" title=\"";
                    yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Save and add to the knowledge base"), "html", null, true);
                    yield "\"
                              data-bs-toggle=\"tooltip\" data-bs-placement=\"top\"></i>
                        ";
                    yield from [];
                })())) ? '' : new Markup($tmp, $this->env->getCharset());
                // line 206
                yield "                        ";
                yield (string) $macros["fields"]->getTemplateForMacro("macro_sliderField", $context, 206, $this->getSourceContext())->macro_sliderField(...["_sol_to_kb", 0,                 // line 209
(isset($context["sol_to_kb_lbl"]) || array_key_exists("sol_to_kb_lbl", $context) ? $context["sol_to_kb_lbl"] : (function () { throw new RuntimeError('Variable "sol_to_kb_lbl" does not exist.', 209, $this->source); })()), ["full_width" => true, "icon_label" => true, "rand" =>                 // line 213
(isset($context["rand"]) || array_key_exists("rand", $context) ? $context["rand"] : (function () { throw new RuntimeError('Variable "rand" does not exist.', 213, $this->source); })())]]);
                // line 215
                yield "
                     ";
            }
            // line 217
            yield "                  </div>
               </div>
            </div>

         ";
            // line 221
            if ( !(($tmp = (isset($context["noform"]) || array_key_exists("noform", $context) ? $context["noform"] : (function () { throw new RuntimeError('Variable "noform" does not exist.', 221, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 222
                yield "               ";
                yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\PluginExtension']->callPluginHook(Twig\Extension\CoreExtension::constant("Glpi\\Plugin\\Hooks::POST_ITEM_FORM"), ["item" => (isset($context["subitem"]) || array_key_exists("subitem", $context) ? $context["subitem"] : (function () { throw new RuntimeError('Variable "subitem" does not exist.', 222, $this->source); })()), "options" => (isset($context["params"]) || array_key_exists("params", $context) ? $context["params"] : (function () { throw new RuntimeError('Variable "params" does not exist.', 222, $this->source); })())]), "html", null, true);
                yield "
               <div class=\"d-flex card-footer mx-n3 mb-n3\">
                  ";
                // line 224
                if (((((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["subitem"] ?? null), "fields", [], "any", false, true, false, 224), "id", [], "array", true, true, false, 224) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["subitem"]) || array_key_exists("subitem", $context) ? $context["subitem"] : (function () { throw new RuntimeError('Variable "subitem" does not exist.', 224, $this->source); })()), "fields", [], "any", false, false, false, 224), "id", [], "array", false, false, false, 224)))) ? (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["subitem"]) || array_key_exists("subitem", $context) ? $context["subitem"] : (function () { throw new RuntimeError('Variable "subitem" does not exist.', 224, $this->source); })()), "fields", [], "any", false, false, false, 224), "id", [], "array", false, false, false, 224)) : (0)) <= 0)) {
                    // line 225
                    yield "                     <button class=\"btn btn-primary me-2\" type=\"submit\" name=\"add\">
                        <i class=\"ti ti-plus\"></i>
                        <span>";
                    // line 227
                    yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(_x("button", "Add"), "html", null, true);
                    yield "</span>
                     </button>
                  ";
                } else {
                    // line 230
                    yield "                     <input type=\"hidden\" name=\"id\" value=\"";
                    yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["subitem"]) || array_key_exists("subitem", $context) ? $context["subitem"] : (function () { throw new RuntimeError('Variable "subitem" does not exist.', 230, $this->source); })()), "fields", [], "any", false, false, false, 230), "id", [], "array", false, false, false, 230), "html", null, true);
                    yield "\" />
                     <button class=\"btn btn-primary me-2\" type=\"submit\" name=\"update\">
                        <i class=\"ti ti-device-floppy\"></i>
                        <span>";
                    // line 233
                    yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(_x("button", "Save"), "html", null, true);
                    yield "</span>
                     </button>
                  ";
                }
                // line 236
                yield "               </div>

               <input type=\"hidden\" name=\"_glpi_csrf_token\" value=\"";
                // line 238
                yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Session::getNewCSRFToken(), "html", null, true);
                yield "\" />
            </form>
         ";
            }
            // line 241
            yield "      </div>

      <script type=\"text/javascript\">
         function solutiontemplate_update";
            // line 244
            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["rand"]) || array_key_exists("rand", $context) ? $context["rand"] : (function () { throw new RuntimeError('Variable "rand" does not exist.', 244, $this->source); })()), "html", null, true);
            yield "(value) {
            \$.ajax({
               url: `\${CFG_GLPI.root_doc}/ajax/solution.php`,
               type: \x27POST\x27,
               data: {
                  solutiontemplates_id: value,
                  items_id: \x27";
            // line 250
            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 250, $this->source); })()), "fields", [], "any", false, false, false, 250), "id", [], "array", false, false, false, 250), "js"), "html", null, true);
            yield "\x27,
                  itemtype: \x27";
            // line 251
            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 251, $this->source); })()), "getType", [], "method", false, false, false, 251), "js"), "html", null, true);
            yield "\x27
               }
            }).done(function (data) {
               // set textarea content
               setRichTextEditorContent(\"";
            // line 255
            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["content_field_id"]) || array_key_exists("content_field_id", $context) ? $context["content_field_id"] : (function () { throw new RuntimeError('Variable "content_field_id" does not exist.', 255, $this->source); })()), "js"), "html", null, true);
            yield "\", data.content);

               // set type
               var solutiontypes_id = isNaN(parseInt(data.solutiontypes_id))
                  ? 0
                  : parseInt(data.solutiontypes_id);

               //need to create new DOM option, because SELECT is remotely-sourced (AJAX)
               //see : https://select2.org/programmatic-control/add-select-clear-items#preselecting-options-in-an-remotely-sourced-ajax-select2
               var newOption = new Option(data.solutiontypes_name, solutiontypes_id, true, true);
               \$(\"#dropdown_solutiontypes_id";
            // line 265
            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["rand"]) || array_key_exists("rand", $context) ? $context["rand"] : (function () { throw new RuntimeError('Variable "rand" does not exist.', 265, $this->source); })()), "html", null, true);
            yield "\").append(newOption).trigger(\x27change\x27);
            });
         }
      </script>
   ";
        }
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "components/itilobject/timeline/form_solution.html.twig";
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
        return array (  444 => 265,  431 => 255,  424 => 251,  420 => 250,  411 => 244,  406 => 241,  400 => 238,  396 => 236,  390 => 233,  383 => 230,  377 => 227,  373 => 225,  371 => 224,  365 => 222,  363 => 221,  357 => 217,  353 => 215,  351 => 213,  350 => 209,  348 => 206,  340 => 203,  337 => 202,  335 => 201,  331 => 199,  329 => 194,  328 => 190,  326 => 187,  320 => 185,  317 => 184,  315 => 183,  311 => 181,  309 => 179,  308 => 178,  307 => 177,  306 => 176,  305 => 172,  304 => 171,  302 => 168,  299 => 167,  296 => 166,  293 => 165,  290 => 164,  287 => 163,  284 => 162,  281 => 161,  278 => 160,  275 => 159,  272 => 158,  269 => 157,  266 => 156,  258 => 153,  256 => 152,  253 => 151,  248 => 148,  246 => 146,  245 => 145,  244 => 144,  243 => 143,  242 => 139,  240 => 135,  234 => 133,  229 => 132,  227 => 131,  224 => 130,  218 => 128,  215 => 127,  213 => 126,  207 => 122,  205 => 119,  204 => 118,  203 => 117,  202 => 116,  201 => 111,  200 => 108,  199 => 106,  196 => 105,  194 => 104,  189 => 101,  183 => 98,  179 => 96,  177 => 95,  172 => 93,  167 => 91,  163 => 90,  160 => 89,  155 => 87,  152 => 86,  150 => 85,  147 => 84,  141 => 82,  138 => 81,  136 => 80,  133 => 79,  128 => 76,  123 => 73,  121 => 72,  120 => 71,  119 => 70,  117 => 69,  115 => 68,  112 => 67,  110 => 66,  107 => 65,  101 => 62,  97 => 60,  95 => 59,  89 => 55,  87 => 52,  83 => 50,  80 => 49,  73 => 48,  68 => 33,  66 => 46,  64 => 44,  62 => 43,  60 => 42,  58 => 41,  56 => 40,  54 => 39,  52 => 38,  50 => 36,  48 => 34,  41 => 33,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "components/itilobject/timeline/form_solution.html.twig", "/Users/alvarozuculajunior/BCX/glpi/templates/components/itilobject/timeline/form_solution.html.twig");
    }
}
