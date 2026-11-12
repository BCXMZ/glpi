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

/* components/itilobject/timeline/form_followup.html.twig */
class __TwigTemplate_2177b17776730acd9f88646739143f3d extends Template
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
        $context["rand"] = Twig\Extension\CoreExtension::random($this->env->getCharset());
        // line 43
        $context["is_default_pending"] = $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("PendingReason::isDefaultPending");
        // line 45
        $context["content_field_id"] = ("solution_content_" . (isset($context["rand"]) || array_key_exists("rand", $context) ? $context["rand"] : (function () { throw new RuntimeError('Variable "rand" does not exist.', 45, $this->source); })()));
        // line 33
        $this->parent = $this->load("components/itilobject/timeline/form_timeline_item.html.twig", 33);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 47
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_timeline_card(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 48
        yield "   ";
        if (((isset($context["form_mode"]) || array_key_exists("form_mode", $context) ? $context["form_mode"] : (function () { throw new RuntimeError('Variable "form_mode" does not exist.', 48, $this->source); })()) == "view")) {
            // line 49
            yield "      <div class=\"read-only-content\">
         <div class=\"rich_text_container\">
            ";
            // line 51
            yield (string) $this->extensions['Glpi\Application\View\Extension\DataHelpersExtension']->getEnhancedHtml(CoreExtension::getAttribute($this->env, $this->source, (isset($context["entry_i"]) || array_key_exists("entry_i", $context) ? $context["entry_i"] : (function () { throw new RuntimeError('Variable "entry_i" does not exist.', 51, $this->source); })()), "content", [], "array", false, false, false, 51), ["user_mentions" => true, "images_gallery" => true]);
            // line 54
            yield "
         </div>

         <div class=\"timeline-badges\">
            ";
            // line 58
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["entry_i"]) || array_key_exists("entry_i", $context) ? $context["entry_i"] : (function () { throw new RuntimeError('Variable "entry_i" does not exist.', 58, $this->source); })()), "requesttypes_id", [], "array", false, false, false, 58)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 59
                yield "               <span class=\"badge bg-blue-lt\" title=\"";
                yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Source of followup"), "html", null, true);
                yield "\">
                  <i class=\"ti ti-inbox me-1\"></i>
                  ";
                // line 61
                yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemName("RequestType", CoreExtension::getAttribute($this->env, $this->source, (isset($context["entry_i"]) || array_key_exists("entry_i", $context) ? $context["entry_i"] : (function () { throw new RuntimeError('Variable "entry_i" does not exist.', 61, $this->source); })()), "requesttypes_id", [], "array", false, false, false, 61)), "html", null, true);
                yield "
               </span>
            ";
            }
            // line 64
            yield "
            ";
            // line 65
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["entry_i"]) || array_key_exists("entry_i", $context) ? $context["entry_i"] : (function () { throw new RuntimeError('Variable "entry_i" does not exist.', 65, $this->source); })()), "sourceitems_id", [], "array", false, false, false, 65)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 66
                yield "               <span class=\"badge bg-blue-lt\">
                  <i class=\"ti ti-git-merge me-1\"></i>
                  ";
                // line 68
                $context["merged_badge"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                    // line 69
                    yield "                     <span class=\"badge\">
                        ";
                    // line 70
                    yield (string) $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemLink("Ticket", CoreExtension::getAttribute($this->env, $this->source, (isset($context["entry_i"]) || array_key_exists("entry_i", $context) ? $context["entry_i"] : (function () { throw new RuntimeError('Variable "entry_i" does not exist.', 70, $this->source); })()), "sourceitems_id", [], "array", false, false, false, 70));
                    yield "
                     </span>
                  ";
                    yield from [];
                })())) ? '' : new Markup($tmp, $this->env->getCharset());
                // line 73
                yield "                  ";
                yield (string) Twig\Extension\CoreExtension::sprintf(__("Merged from Ticket %1\$s"), (isset($context["merged_badge"]) || array_key_exists("merged_badge", $context) ? $context["merged_badge"] : (function () { throw new RuntimeError('Variable "merged_badge" does not exist.', 73, $this->source); })()));
                yield "
               </span>
            ";
            }
            // line 76
            yield "
            ";
            // line 77
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["entry_i"]) || array_key_exists("entry_i", $context) ? $context["entry_i"] : (function () { throw new RuntimeError('Variable "entry_i" does not exist.', 77, $this->source); })()), "sourceof_items_id", [], "array", false, false, false, 77)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 78
                yield "               <span class=\"badge bg-blue-lt\">
                  <i class=\"ti ti-git-merge me-1\"></i>
                  ";
                // line 80
                $context["promoted_badge"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                    // line 81
                    yield "                     <span class=\"badge\">
                        ";
                    // line 82
                    yield (string) $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemLink("Ticket", CoreExtension::getAttribute($this->env, $this->source, (isset($context["entry_i"]) || array_key_exists("entry_i", $context) ? $context["entry_i"] : (function () { throw new RuntimeError('Variable "entry_i" does not exist.', 82, $this->source); })()), "sourceof_items_id", [], "array", false, false, false, 82));
                    yield "
                     </span>
                  ";
                    yield from [];
                })())) ? '' : new Markup($tmp, $this->env->getCharset());
                // line 85
                yield "                  ";
                yield (string) Twig\Extension\CoreExtension::sprintf(__("Promoted to Ticket %1\$s"), (isset($context["promoted_badge"]) || array_key_exists("promoted_badge", $context) ? $context["promoted_badge"] : (function () { throw new RuntimeError('Variable "promoted_badge" does not exist.', 85, $this->source); })()));
                yield "
               </span>
            ";
            }
            // line 88
            yield "
            ";
            // line 89
            yield (string) Twig\Extension\CoreExtension::include($this->env, $context, "components/itilobject/timeline/pending_reasons_messages.html.twig");
            yield "
         </div>
      </div>
   ";
        } else {
            // line 93
            yield "      <div class=\"itilfollowup\">
         <form name=\"asset_form\" style=\"width: 100%;\" class=\"d-flex flex-column\" method=\"post\"
               action=\"";
            // line 95
            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["subitem"]) || array_key_exists("subitem", $context) ? $context["subitem"] : (function () { throw new RuntimeError('Variable "subitem" does not exist.', 95, $this->source); })()), "getFormURL", [], "method", false, false, false, 95), "html", null, true);
            yield "\" enctype=\"multipart/form-data\" data-track-changes=\"true\" data-submit-once>
            <input type=\"hidden\" name=\"itemtype\" value=\"";
            // line 96
            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 96, $this->source); })()), "getType", [], "method", false, false, false, 96), "html", null, true);
            yield "\" />
            <input type=\"hidden\" name=\"items_id\" value=\"";
            // line 97
            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 97, $this->source); })()), "fields", [], "any", false, false, false, 97), "id", [], "array", false, false, false, 97), "html", null, true);
            yield "\" />
            ";
            // line 98
            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\PluginExtension']->callPluginHook(Twig\Extension\CoreExtension::constant("Glpi\\Plugin\\Hooks::PRE_ITEM_FORM"), ["item" => (isset($context["subitem"]) || array_key_exists("subitem", $context) ? $context["subitem"] : (function () { throw new RuntimeError('Variable "subitem" does not exist.', 98, $this->source); })()), "options" => (isset($context["params"]) || array_key_exists("params", $context) ? $context["params"] : (function () { throw new RuntimeError('Variable "params" does not exist.', 98, $this->source); })())]), "html", null, true);
            yield "

            ";
            // line 100
            $context["add_reopen"] = ((($tmp = (((CoreExtension::getAttribute($this->env, $this->source, ($context["_get"] ?? null), "_openfollowup", [], "array", true, true, false, 100) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["_get"]) || array_key_exists("_get", $context) ? $context["_get"] : (function () { throw new RuntimeError('Variable "_get" does not exist.', 100, $this->source); })()), "_openfollowup", [], "array", false, false, false, 100)))) ? (CoreExtension::getAttribute($this->env, $this->source, (isset($context["_get"]) || array_key_exists("_get", $context) ? $context["_get"] : (function () { throw new RuntimeError('Variable "_get" does not exist.', 100, $this->source); })()), "_openfollowup", [], "array", false, false, false, 100)) : (false))) && $tmp instanceof Markup ? (string) $tmp : $tmp) || (($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 100, $this->source); })()), "needReopen", [], "method", false, false, false, 100)) && $tmp instanceof Markup ? (string) $tmp : $tmp));
            // line 101
            yield "            ";
            if ((($tmp = (isset($context["add_reopen"]) || array_key_exists("add_reopen", $context) ? $context["add_reopen"] : (function () { throw new RuntimeError('Variable "add_reopen" does not exist.', 101, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 102
                yield "               <input type=\"hidden\" name=\"add_reopen\" value=\"1\" />
            ";
            }
            // line 104
            yield "
            <div class=\"row mx-n3 mx-xxl-auto\">
               ";
            // line 106
            $context["col_md"] = ((($this->extensions['Glpi\Application\View\Extension\SessionExtension']->getCurrentInterface() == "central")) ? ("col-xl-7 col-xxl-8") : ("col-xxl-12"));
            // line 107
            yield "               <div class=\"col-12 ";
            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["col_md"]) || array_key_exists("col_md", $context) ? $context["col_md"] : (function () { throw new RuntimeError('Variable "col_md" does not exist.', 107, $this->source); })()), "html", null, true);
            yield "\">
                  ";
            // line 108
            yield (string) $macros["fields"]->getTemplateForMacro("macro_textareaField", $context, 108, $this->getSourceContext())->macro_textareaField(...["content", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,             // line 110
(isset($context["subitem"]) || array_key_exists("subitem", $context) ? $context["subitem"] : (function () { throw new RuntimeError('Variable "subitem" does not exist.', 110, $this->source); })()), "fields", [], "any", false, false, false, 110), "content", [], "array", false, false, false, 110), "", ["id" =>             // line 113
(isset($context["content_field_id"]) || array_key_exists("content_field_id", $context) ? $context["content_field_id"] : (function () { throw new RuntimeError('Variable "content_field_id" does not exist.', 113, $this->source); })()), "full_width" => true, "no_label" => true, "enable_richtext" => true, "enable_fileupload" => true, "mention_options" =>             // line 118
(isset($context["mention_options"]) || array_key_exists("mention_options", $context) ? $context["mention_options"] : (function () { throw new RuntimeError('Variable "mention_options" does not exist.', 118, $this->source); })()), "entities_id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,             // line 119
(isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 119, $this->source); })()), "fields", [], "any", false, false, false, 119), "entities_id", [], "array", false, false, false, 119), "rand" =>             // line 120
(isset($context["rand"]) || array_key_exists("rand", $context) ? $context["rand"] : (function () { throw new RuntimeError('Variable "rand" does not exist.', 120, $this->source); })()), "required" =>             // line 121
(isset($context["add_reopen"]) || array_key_exists("add_reopen", $context) ? $context["add_reopen"] : (function () { throw new RuntimeError('Variable "add_reopen" does not exist.', 121, $this->source); })()), "aria_label" => _n("Followup", "Followups", 1)]]);
            // line 124
            yield "
               </div>
               ";
            // line 126
            if (($this->extensions['Glpi\Application\View\Extension\SessionExtension']->getCurrentInterface() == "central")) {
                // line 127
                yield "                  <div class=\"col-12 col-xl-5 col-xxl-4 order-first order-md-last pe-0 pe-xxl-auto\">
                     <div class=\"row\">

                        ";
                // line 130
                yield (string) Twig\Extension\CoreExtension::include($this->env, $context, "components/itilobject/timeline/knowledge_item.html.twig");
                yield "

                        ";
                // line 132
                $context["fup_template_lbl"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                    // line 133
                    yield "                           <i class=\"";
                    yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeIcon("ITILFollowupTemplate"), "html", null, true);
                    yield " me-1\"
                              title=\"";
                    // line 134
                    yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(_n("Followup template", "Followup templates", Session::getPluralNumber()), "html", null, true);
                    yield "\"></i>
                        ";
                    yield from [];
                })())) ? '' : new Markup($tmp, $this->env->getCharset());
                // line 136
                yield "                        ";
                yield (string) $macros["fields"]->getTemplateForMacro("macro_dropdownField", $context, 136, $this->getSourceContext())->macro_dropdownField(...["ITILFollowupTemplate", "itilfollowuptemplates_id", (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,                 // line 139
($context["subitem"] ?? null), "fields", [], "any", false, true, false, 139), "itilfollowuptemplates_id", [], "array", true, true, false, 139) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["subitem"]) || array_key_exists("subitem", $context) ? $context["subitem"] : (function () { throw new RuntimeError('Variable "subitem" does not exist.', 139, $this->source); })()), "fields", [], "any", false, false, false, 139), "itilfollowuptemplates_id", [], "array", false, false, false, 139)))) ? (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["subitem"]) || array_key_exists("subitem", $context) ? $context["subitem"] : (function () { throw new RuntimeError('Variable "subitem" does not exist.', 139, $this->source); })()), "fields", [], "any", false, false, false, 139), "itilfollowuptemplates_id", [], "array", false, false, false, 139)) : (0)),                 // line 140
(isset($context["fup_template_lbl"]) || array_key_exists("fup_template_lbl", $context) ? $context["fup_template_lbl"] : (function () { throw new RuntimeError('Variable "fup_template_lbl" does not exist.', 140, $this->source); })()), ["full_width" => true, "icon_label" => true, "on_change" => (("itilfollowuptemplate_update" .                 // line 144
(isset($context["rand"]) || array_key_exists("rand", $context) ? $context["rand"] : (function () { throw new RuntimeError('Variable "rand" does not exist.', 144, $this->source); })())) . "(this.value)"), "entity" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,                 // line 145
(isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 145, $this->source); })()), "fields", [], "any", false, false, false, 145), "entities_id", [], "array", false, false, false, 145), "rand" =>                 // line 146
(isset($context["rand"]) || array_key_exists("rand", $context) ? $context["rand"] : (function () { throw new RuntimeError('Variable "rand" does not exist.', 146, $this->source); })()), "aria_label" => _n("Followup template", "Followup templates", 1)]]);
                // line 149
                yield "

                        ";
                // line 151
                $context["fup_source_lbl"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                    // line 152
                    yield "                           <i class=\"ti ti-inbox me-1\" title=\"";
                    yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Source of followup"), "html", null, true);
                    yield "\"></i>
                        ";
                    yield from [];
                })())) ? '' : new Markup($tmp, $this->env->getCharset());
                // line 154
                yield "                        ";
                yield (string) $macros["fields"]->getTemplateForMacro("macro_dropdownField", $context, 154, $this->getSourceContext())->macro_dropdownField(...["RequestType", "requesttypes_id", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,                 // line 157
(isset($context["subitem"]) || array_key_exists("subitem", $context) ? $context["subitem"] : (function () { throw new RuntimeError('Variable "subitem" does not exist.', 157, $this->source); })()), "fields", [], "any", false, false, false, 157), "requesttypes_id", [], "array", false, false, false, 157),                 // line 158
(isset($context["fup_source_lbl"]) || array_key_exists("fup_source_lbl", $context) ? $context["fup_source_lbl"] : (function () { throw new RuntimeError('Variable "fup_source_lbl" does not exist.', 158, $this->source); })()), ["full_width" => true, "icon_label" => true, "condition" => ["is_active" => 1, "is_itilfollowup" => 1], "rand" =>                 // line 166
(isset($context["rand"]) || array_key_exists("rand", $context) ? $context["rand"] : (function () { throw new RuntimeError('Variable "rand" does not exist.', 166, $this->source); })()), "aria_label" => __("Source of followup")]]);
                // line 169
                yield "

                        ";
                // line 171
                $context["fup_private_lbl"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                    // line 172
                    yield "                           <i class=\"ti ti-eye-off me-1\" title=\"";
                    yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Private"), "html", null, true);
                    yield "\"></i>
                        ";
                    yield from [];
                })())) ? '' : new Markup($tmp, $this->env->getCharset());
                // line 174
                yield "                        ";
                yield (string) $macros["fields"]->getTemplateForMacro("macro_sliderField", $context, 174, $this->getSourceContext())->macro_sliderField(...["is_private", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,                 // line 176
(isset($context["subitem"]) || array_key_exists("subitem", $context) ? $context["subitem"] : (function () { throw new RuntimeError('Variable "subitem" does not exist.', 176, $this->source); })()), "fields", [], "any", false, false, false, 176), "is_private", [], "array", false, false, false, 176),                 // line 177
(isset($context["fup_private_lbl"]) || array_key_exists("fup_private_lbl", $context) ? $context["fup_private_lbl"] : (function () { throw new RuntimeError('Variable "fup_private_lbl" does not exist.', 177, $this->source); })()), ["full_width" => true, "icon_label" => true, "rand" =>                 // line 181
(isset($context["rand"]) || array_key_exists("rand", $context) ? $context["rand"] : (function () { throw new RuntimeError('Variable "rand" does not exist.', 181, $this->source); })()), "additional_attributes" => ["onchange" => "toggleTimelinePrivate(this.checked, this)", "data-testid" => "private-switch"]]]);
                // line 187
                yield "

                        ";
                // line 189
                if ((((($tmp = (isset($context["candedit"]) || array_key_exists("candedit", $context) ? $context["candedit"] : (function () { throw new RuntimeError('Variable "candedit" does not exist.', 189, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp) && (($tmp = (isset($context["can_update_kb"]) || array_key_exists("can_update_kb", $context) ? $context["can_update_kb"] : (function () { throw new RuntimeError('Variable "can_update_kb" does not exist.', 189, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) &&  !(($tmp = (isset($context["nokb"]) || array_key_exists("nokb", $context) ? $context["nokb"] : (function () { throw new RuntimeError('Variable "nokb" does not exist.', 189, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp))) {
                    // line 190
                    yield "                           ";
                    $context["fup_to_kb_lbl"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                        // line 191
                        yield "                              <i class=\"ti ti-device-floppy me-1\" title=\"";
                        yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Save and add to the knowledge base"), "html", null, true);
                        yield "\"
                                 data-bs-toggle=\"tooltip\" data-bs-placement=\"top\"></i>
                           ";
                        yield from [];
                    })())) ? '' : new Markup($tmp, $this->env->getCharset());
                    // line 194
                    yield "                           ";
                    yield (string) $macros["fields"]->getTemplateForMacro("macro_sliderField", $context, 194, $this->getSourceContext())->macro_sliderField(...["_fup_to_kb", 0,                     // line 197
(isset($context["fup_to_kb_lbl"]) || array_key_exists("fup_to_kb_lbl", $context) ? $context["fup_to_kb_lbl"] : (function () { throw new RuntimeError('Variable "fup_to_kb_lbl" does not exist.', 197, $this->source); })()), ["full_width" => true, "icon_label" => true, "rand" =>                     // line 201
(isset($context["rand"]) || array_key_exists("rand", $context) ? $context["rand"] : (function () { throw new RuntimeError('Variable "rand" does not exist.', 201, $this->source); })())]]);
                    // line 203
                    yield "
                        ";
                }
                // line 205
                yield "                     </div>
                  </div>
               ";
            }
            // line 208
            yield "            </div>

            ";
            // line 210
            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\PluginExtension']->callPluginHook(Twig\Extension\CoreExtension::constant("Glpi\\Plugin\\Hooks::POST_ITEM_FORM"), ["item" => (isset($context["subitem"]) || array_key_exists("subitem", $context) ? $context["subitem"] : (function () { throw new RuntimeError('Variable "subitem" does not exist.', 210, $this->source); })()), "options" => (isset($context["params"]) || array_key_exists("params", $context) ? $context["params"] : (function () { throw new RuntimeError('Variable "params" does not exist.', 210, $this->source); })())]), "html", null, true);
            yield "
            ";
            // line 212
            yield "            <div class=\"d-flex card-footer mx-n3 mb-n3 flex-wrap\" style=\"row-gap: 10px; min-height: 79px\">
               ";
            // line 213
            $context["pending_reasons"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                // line 214
                yield "                  ";
                $context["show_pending_reasons_actions"] = (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 214, $this->source); })()), "fields", [], "any", false, false, false, 214), "status", [], "array", false, false, false, 214) == Twig\Extension\CoreExtension::constant("CommonITILObject::WAITING")) || (($tmp = (isset($context["is_default_pending"]) || array_key_exists("is_default_pending", $context) ? $context["is_default_pending"] : (function () { throw new RuntimeError('Variable "is_default_pending" does not exist.', 214, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) &&  !(($tmp = (isset($context["add_reopen"]) || array_key_exists("add_reopen", $context) ? $context["add_reopen"] : (function () { throw new RuntimeError('Variable "add_reopen" does not exist.', 214, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp));
                // line 215
                yield "                  ";
                if (((($this->extensions['Glpi\Application\View\Extension\SessionExtension']->getCurrentInterface() == "central") && (($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 215, $this->source); })()), "isAllowedStatus", [CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 215, $this->source); })()), "fields", [], "any", false, false, false, 215), "status", [], "array", false, false, false, 215), Twig\Extension\CoreExtension::constant("CommonITILObject::WAITING")], "method", false, false, false, 215)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) && (($tmp = $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("PendingReason_Item::canDisplayPendingReasonForItem", [(isset($context["subitem"]) || array_key_exists("subitem", $context) ? $context["subitem"] : (function () { throw new RuntimeError('Variable "subitem" does not exist.', 215, $this->source); })())])) && $tmp instanceof Markup ? (string) $tmp : $tmp))) {
                    // line 216
                    yield "                     <span
                        class=\"input-group-text bg-yellow-lt py-0 pe-0 ";
                    // line 217
                    yield (string) (((($tmp = (isset($context["show_pending_reasons_actions"]) || array_key_exists("show_pending_reasons_actions", $context) ? $context["show_pending_reasons_actions"] : (function () { throw new RuntimeError('Variable "show_pending_reasons_actions" does not exist.', 217, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("flex-fill") : (""));
                    yield "\"
                        id=\"pending-reasons-control-";
                    // line 218
                    yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["rand"]) || array_key_exists("rand", $context) ? $context["rand"] : (function () { throw new RuntimeError('Variable "rand" does not exist.', 218, $this->source); })()), "html", null, true);
                    yield "\"
                     >
                        <span class=\"d-inline-flex align-items-center\" title=\"";
                    // line 220
                    yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Set the status to pending"), "html", null, true);
                    yield "\"
                              data-bs-toggle=\"tooltip\" data-bs-placement=\"top\" role=\"button\">
                           <i class=\"ti ti-player-pause-filled me-2\"></i>
                           <label class=\"form-check form-switch mt-2\">
                              <input type=\"hidden\"   name=\"pending\" value=\"0\" />
                              <input type=\"checkbox\" name=\"pending\" value=\"1\" class=\"form-check-input\"
                                    id=\"enable-pending-reasons-";
                    // line 226
                    yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["rand"]) || array_key_exists("rand", $context) ? $context["rand"] : (function () { throw new RuntimeError('Variable "rand" does not exist.', 226, $this->source); })()), "html", null, true);
                    yield "\"
                                    role=\"button\"
                                    ";
                    // line 228
                    yield (string) (((((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 228, $this->source); })()), "fields", [], "any", false, false, false, 228), "status", [], "array", false, false, false, 228) == Twig\Extension\CoreExtension::constant("CommonITILObject::WAITING")) || (($tmp = (isset($context["is_default_pending"]) || array_key_exists("is_default_pending", $context) ? $context["is_default_pending"] : (function () { throw new RuntimeError('Variable "is_default_pending" does not exist.', 228, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) &&  !(($tmp = (isset($context["add_reopen"]) || array_key_exists("add_reopen", $context) ? $context["add_reopen"] : (function () { throw new RuntimeError('Variable "add_reopen" does not exist.', 228, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp))) ? ("checked") : (""));
                    yield "
                                    data-bs-toggle=\"collapse\" data-bs-target=\"#pending-reasons-setup-";
                    // line 229
                    yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["rand"]) || array_key_exists("rand", $context) ? $context["rand"] : (function () { throw new RuntimeError('Variable "rand" does not exist.', 229, $this->source); })()), "html", null, true);
                    yield "\"
                                    data-testid=\"pending-checkbox\" />
                           </label>
                        </span>

                        <div
                           class=\"collapse ps-2 py-1 flex-fill ";
                    // line 235
                    yield (string) (((($tmp = (isset($context["show_pending_reasons_actions"]) || array_key_exists("show_pending_reasons_actions", $context) ? $context["show_pending_reasons_actions"] : (function () { throw new RuntimeError('Variable "show_pending_reasons_actions" does not exist.', 235, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("show") : (""));
                    yield "\"
                           aria-expanded=\"";
                    // line 236
                    yield (string) (((($tmp = (isset($context["show_pending_reasons_actions"]) || array_key_exists("show_pending_reasons_actions", $context) ? $context["show_pending_reasons_actions"] : (function () { throw new RuntimeError('Variable "show_pending_reasons_actions" does not exist.', 236, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("true") : ("false"));
                    yield "\"
                           id=\"pending-reasons-setup-";
                    // line 237
                    yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["rand"]) || array_key_exists("rand", $context) ? $context["rand"] : (function () { throw new RuntimeError('Variable "rand" does not exist.', 237, $this->source); })()), "html", null, true);
                    yield "\"
                        >
                           ";
                    // line 239
                    yield (string) Twig\Extension\CoreExtension::include($this->env, $context, "components/itilobject/timeline/pending_reasons.html.twig");
                    yield "
                        </div>
                     </span>
                  ";
                }
                // line 243
                yield "               ";
                yield from [];
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 244
            yield "
               ";
            // line 245
            if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["subitem"]) || array_key_exists("subitem", $context) ? $context["subitem"] : (function () { throw new RuntimeError('Variable "subitem" does not exist.', 245, $this->source); })()), "fields", [], "any", false, false, false, 245), "id", [], "array", false, false, false, 245) <= 0)) {
                // line 246
                yield "                  ";
                // line 247
                yield "                  <div class=\"input-group flex-nowrap\">
                     <button
                        class=\"btn btn-primary\"
                        type=\"submit\"
                        name=\"add\"
                        aria-label=\"";
                // line 252
                yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(_x("button", "Add"), "html", null, true);
                yield "\"
                     >
                        <i class=\"ti ti-plus\"></i>
                        <span>";
                // line 255
                yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(_x("button", "Add"), "html", null, true);
                yield "</span>
                     </button>
                    ";
                // line 257
                yield (string) (isset($context["pending_reasons"]) || array_key_exists("pending_reasons", $context) ? $context["pending_reasons"] : (function () { throw new RuntimeError('Variable "pending_reasons" does not exist.', 257, $this->source); })());
                yield "

                  </div>
               ";
            } else {
                // line 261
                yield "                  <input type=\"hidden\" name=\"id\" value=\"";
                yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["subitem"]) || array_key_exists("subitem", $context) ? $context["subitem"] : (function () { throw new RuntimeError('Variable "subitem" does not exist.', 261, $this->source); })()), "fields", [], "any", false, false, false, 261), "id", [], "array", false, false, false, 261), "html", null, true);
                yield "\" />
                  <button class=\"btn btn-primary me-2\" type=\"submit\" name=\"update\">
                     <i class=\"ti ti-device-floppy\"></i>
                     <span>";
                // line 264
                yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(_x("button", "Save"), "html", null, true);
                yield "</span>
                  </button>

                  ";
                // line 267
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["subitem"]) || array_key_exists("subitem", $context) ? $context["subitem"] : (function () { throw new RuntimeError('Variable "subitem" does not exist.', 267, $this->source); })()), "can", [CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["subitem"]) || array_key_exists("subitem", $context) ? $context["subitem"] : (function () { throw new RuntimeError('Variable "subitem" does not exist.', 267, $this->source); })()), "fields", [], "any", false, false, false, 267), "id", [], "array", false, false, false, 267), Twig\Extension\CoreExtension::constant("PURGE")], "method", false, false, false, 267)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 268
                    yield "                     <button class=\"btn btn-outline-danger me-2\" type=\"submit\" name=\"purge\"
                             onclick=\"return confirm(\x27";
                    // line 269
                    yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Confirm the final deletion?"), "js"), "html", null, true);
                    yield "\x27);\">
                        <i class=\"ti ti-trash\"></i>
                        <span>";
                    // line 271
                    yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(_x("button", "Delete permanently"), "html", null, true);
                    yield "</span>
                     </button>
                  ";
                }
                // line 274
                yield "                  ";
                yield (string) (isset($context["pending_reasons"]) || array_key_exists("pending_reasons", $context) ? $context["pending_reasons"] : (function () { throw new RuntimeError('Variable "pending_reasons" does not exist.', 274, $this->source); })());
                yield "
               ";
            }
            // line 276
            yield "            </div>

            <input type=\"hidden\" name=\"_glpi_csrf_token\" value=\"";
            // line 278
            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Session::getNewCSRFToken(), "html", null, true);
            yield "\" />
         </form>
      </div>

      <script type=\"text/javascript\">
         function itilfollowuptemplate_update";
            // line 283
            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["rand"]) || array_key_exists("rand", $context) ? $context["rand"] : (function () { throw new RuntimeError('Variable "rand" does not exist.', 283, $this->source); })()), "html", null, true);
            yield "(value) {
            \$.ajax({
               url: `\${CFG_GLPI.root_doc}/ajax/itilfollowup.php`,
               type: \x27POST\x27,
               data: {
                  itilfollowuptemplates_id: value,
                  items_id: \x27";
            // line 289
            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 289, $this->source); })()), "fields", [], "any", false, false, false, 289), "id", [], "array", false, false, false, 289), "js"), "html", null, true);
            yield "\x27,
                  itemtype: \x27";
            // line 290
            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 290, $this->source); })()), "getType", [], "method", false, false, false, 290), "js"), "html", null, true);
            yield "\x27
               }
            }).done(function (data) {
               var requesttypes_id = isNaN(parseInt(data.requesttypes_id))
                  ? 0
                  : parseInt(data.requesttypes_id);

               // set textarea content ONLY if template defines content
               // If template has no content defined, preserve user\x27s existing content
               if (data.content && data.content.trim() !== \x27\x27) {
                  setRichTextEditorContent(\"";
            // line 300
            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["content_field_id"]) || array_key_exists("content_field_id", $context) ? $context["content_field_id"] : (function () { throw new RuntimeError('Variable "content_field_id" does not exist.', 300, $this->source); })()), "js"), "html", null, true);
            yield "\", data.content);
               }
               // set category
               //need to create new DOM option, because SELECT is remotely-sourced (AJAX)
               //see : https://select2.org/programmatic-control/add-select-clear-items#preselecting-options-in-an-remotely-sourced-ajax-select2
               var newOption = new Option(data.requesttypes_name, requesttypes_id, true, true);
               \$(\"#dropdown_requesttypes_id";
            // line 306
            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["rand"]) || array_key_exists("rand", $context) ? $context["rand"] : (function () { throw new RuntimeError('Variable "rand" does not exist.', 306, $this->source); })()), "html", null, true);
            yield "\").append(newOption).trigger(\x27change\x27);

               if (data.is_private !== undefined) {
                   // set is_private
                   \$(\"#is_private_";
            // line 310
            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["rand"]) || array_key_exists("rand", $context) ? $context["rand"] : (function () { throw new RuntimeError('Variable "rand" does not exist.', 310, $this->source); })()), "html", null, true);
            yield "\")
                       .prop(\"checked\", data.is_private == \"0\"
                         ? false
                         : true);
               }

               // set predefined pending reason ONLY if template defines one
               // If template has no pending reason defined, preserve user\x27s choices
               if (data.pendingreasons_id > 0) {
                  \$(\"#enable-pending-reasons-";
            // line 319
            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["rand"]) || array_key_exists("rand", $context) ? $context["rand"] : (function () { throw new RuntimeError('Variable "rand" does not exist.', 319, $this->source); })()), "html", null, true);
            yield "\")
                     .prop(\"checked\", true);
                  \$(\"#pending-reasons-setup-";
            // line 321
            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["rand"]) || array_key_exists("rand", $context) ? $context["rand"] : (function () { throw new RuntimeError('Variable "rand" does not exist.', 321, $this->source); })()), "html", null, true);
            yield "\")
                     .collapse(\x27show\x27);

                  //need to create new DOM option, because SELECT is remotely-sourced (AJAX)
                  //see : https://select2.org/programmatic-control/add-select-clear-items#preselecting-options-in-an-remotely-sourced-ajax-select2
                  var newOption = new Option(data.pendingreasons_name, data.pendingreasons_id, true, true);
                  \$(\"#dropdown_pendingreasons_id";
            // line 327
            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["rand"]) || array_key_exists("rand", $context) ? $context["rand"] : (function () { throw new RuntimeError('Variable "rand" does not exist.', 327, $this->source); })()), "html", null, true);
            yield "\")
                     .append(newOption)
                     .trigger(\x27change\x27);
               }
               // If template has NO pending (data.pendingreasons_id is 0 or undefined),
               // DO NOTHING to preserve user\x27s pending choices
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
        return "components/itilobject/timeline/form_followup.html.twig";
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
        return array (  557 => 327,  548 => 321,  543 => 319,  531 => 310,  524 => 306,  515 => 300,  502 => 290,  498 => 289,  489 => 283,  481 => 278,  477 => 276,  471 => 274,  465 => 271,  460 => 269,  457 => 268,  455 => 267,  449 => 264,  442 => 261,  435 => 257,  430 => 255,  424 => 252,  417 => 247,  415 => 246,  413 => 245,  410 => 244,  406 => 243,  399 => 239,  394 => 237,  390 => 236,  386 => 235,  377 => 229,  373 => 228,  368 => 226,  359 => 220,  354 => 218,  350 => 217,  347 => 216,  344 => 215,  341 => 214,  339 => 213,  336 => 212,  332 => 210,  328 => 208,  323 => 205,  319 => 203,  317 => 201,  316 => 197,  314 => 194,  306 => 191,  303 => 190,  301 => 189,  297 => 187,  295 => 181,  294 => 177,  293 => 176,  291 => 174,  284 => 172,  282 => 171,  278 => 169,  276 => 166,  275 => 158,  274 => 157,  272 => 154,  265 => 152,  263 => 151,  259 => 149,  257 => 146,  256 => 145,  255 => 144,  254 => 140,  253 => 139,  251 => 136,  245 => 134,  240 => 133,  238 => 132,  233 => 130,  228 => 127,  226 => 126,  222 => 124,  220 => 121,  219 => 120,  218 => 119,  217 => 118,  216 => 113,  215 => 110,  214 => 108,  209 => 107,  207 => 106,  203 => 104,  199 => 102,  196 => 101,  194 => 100,  189 => 98,  185 => 97,  181 => 96,  177 => 95,  173 => 93,  166 => 89,  163 => 88,  156 => 85,  149 => 82,  146 => 81,  144 => 80,  140 => 78,  138 => 77,  135 => 76,  128 => 73,  121 => 70,  118 => 69,  116 => 68,  112 => 66,  110 => 65,  107 => 64,  101 => 61,  95 => 59,  93 => 58,  87 => 54,  85 => 51,  81 => 49,  78 => 48,  71 => 47,  66 => 33,  64 => 45,  62 => 43,  60 => 42,  58 => 41,  56 => 40,  54 => 39,  52 => 38,  50 => 36,  48 => 34,  41 => 33,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "components/itilobject/timeline/form_followup.html.twig", "/Users/alvarozuculajunior/BCX/glpi/templates/components/itilobject/timeline/form_followup.html.twig");
    }
}
