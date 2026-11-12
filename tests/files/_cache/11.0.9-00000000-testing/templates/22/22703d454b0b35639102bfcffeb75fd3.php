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

/* generic_show_form.html.twig */
class __TwigTemplate_d1adc6fef990fab5262446c937b754b5 extends Template
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
            'form_fields' => [$this, 'block_form_fields'],
            'more_fields' => [$this, 'block_more_fields'],
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
        $context["no_header"] = ((array_key_exists("no_header", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["no_header"]) || array_key_exists("no_header", $context) ? $context["no_header"] : (function () { throw new RuntimeError('Variable "no_header" does not exist.', 35, $this->source); })()), ( !(($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 35, $this->source); })()), "isNewItem", [], "method", false, false, false, 35)) && $tmp instanceof Markup ? (string) $tmp : $tmp) &&  !(($tmp = ((CoreExtension::getAttribute($this->env, $this->source, ($context["_get"] ?? null), "_in_modal", [], "any", true, true, false, 35)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["_get"]) || array_key_exists("_get", $context) ? $context["_get"] : (function () { throw new RuntimeError('Variable "_get" does not exist.', 35, $this->source); })()), "_in_modal", [], "any", false, false, false, 35), false)) : (false))) && $tmp instanceof Markup ? (string) $tmp : $tmp)))) : (( !(($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 35, $this->source); })()), "isNewItem", [], "method", false, false, false, 35)) && $tmp instanceof Markup ? (string) $tmp : $tmp) &&  !(($tmp = ((CoreExtension::getAttribute($this->env, $this->source, ($context["_get"] ?? null), "_in_modal", [], "any", true, true, false, 35)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["_get"]) || array_key_exists("_get", $context) ? $context["_get"] : (function () { throw new RuntimeError('Variable "_get" does not exist.', 35, $this->source); })()), "_in_modal", [], "any", false, false, false, 35), false)) : (false))) && $tmp instanceof Markup ? (string) $tmp : $tmp))));
        // line 36
        $context["bg"] = "";
        // line 37
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 37, $this->source); })()), "isDeleted", [], "method", false, false, false, 37)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 38
            yield "   ";
            $context["bg"] = "asset-deleted";
        }
        // line 40
        yield "
<div class=\"asset ";
        // line 41
        yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["bg"]) || array_key_exists("bg", $context) ? $context["bg"] : (function () { throw new RuntimeError('Variable "bg" does not exist.', 41, $this->source); })()), "html", null, true);
        yield "\">
   ";
        // line 42
        yield (string) Twig\Extension\CoreExtension::include($this->env, $context, "components/form/header.html.twig", ["in_twig" => true]);
        yield "

   ";
        // line 44
        $context["rand"] = Twig\Extension\CoreExtension::random($this->env->getCharset());
        // line 45
        yield "   ";
        $context["params"] = (((array_key_exists("params", $context) &&  !(null === $context["params"]))) ? ($context["params"]) : ([]));
        // line 46
        yield "   ";
        $context["target"] = (((CoreExtension::getAttribute($this->env, $this->source, ($context["params"] ?? null), "target", [], "array", true, true, false, 46) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["params"]) || array_key_exists("params", $context) ? $context["params"] : (function () { throw new RuntimeError('Variable "params" does not exist.', 46, $this->source); })()), "target", [], "array", false, false, false, 46)))) ? (CoreExtension::getAttribute($this->env, $this->source, (isset($context["params"]) || array_key_exists("params", $context) ? $context["params"] : (function () { throw new RuntimeError('Variable "params" does not exist.', 46, $this->source); })()), "target", [], "array", false, false, false, 46)) : (CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 46, $this->source); })()), "getFormURL", [], "method", false, false, false, 46)));
        // line 47
        yield "   ";
        $context["withtemplate"] = (((CoreExtension::getAttribute($this->env, $this->source, ($context["params"] ?? null), "withtemplate", [], "array", true, true, false, 47) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["params"]) || array_key_exists("params", $context) ? $context["params"] : (function () { throw new RuntimeError('Variable "params" does not exist.', 47, $this->source); })()), "withtemplate", [], "array", false, false, false, 47)))) ? (CoreExtension::getAttribute($this->env, $this->source, (isset($context["params"]) || array_key_exists("params", $context) ? $context["params"] : (function () { throw new RuntimeError('Variable "params" does not exist.', 47, $this->source); })()), "withtemplate", [], "array", false, false, false, 47)) : (""));
        // line 48
        yield "   ";
        $context["item_type"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 48, $this->source); })()), "getType", [], "method", false, false, false, 48);
        // line 49
        yield "   ";
        $context["item_has_pictures"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 49, $this->source); })()), "hasItemtypeOrModelPictures", [], "method", false, false, false, 49);
        // line 50
        yield "   ";
        $context["field_options"] = ["locked_fields" => CoreExtension::getAttribute($this->env, $this->source,         // line 51
(isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 51, $this->source); })()), "getLockedFields", [], "method", false, false, false, 51), "rand" =>         // line 52
(isset($context["rand"]) || array_key_exists("rand", $context) ? $context["rand"] : (function () { throw new RuntimeError('Variable "rand" does not exist.', 52, $this->source); })())];
        // line 54
        yield "
    ";
        // line 56
        yield "    ";
        $context["custom_fields"] = ((array_key_exists("custom_fields", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["custom_fields"]) || array_key_exists("custom_fields", $context) ? $context["custom_fields"] : (function () { throw new RuntimeError('Variable "custom_fields" does not exist.', 56, $this->source); })()), [])) : ([]));
        // line 57
        yield "    ";
        $context["field_order"] = ((array_key_exists("field_order", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["field_order"]) || array_key_exists("field_order", $context) ? $context["field_order"] : (function () { throw new RuntimeError('Variable "field_order" does not exist.', 57, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 57, $this->source); })()), "getFormFields", [], "method", false, false, false, 57))) : (CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 57, $this->source); })()), "getFormFields", [], "method", false, false, false, 57)));
        // line 58
        yield "    ";
        $context["has_third_col"] = ((($tmp = (isset($context["item_has_pictures"]) || array_key_exists("item_has_pictures", $context) ? $context["item_has_pictures"] : (function () { throw new RuntimeError('Variable "item_has_pictures" does not exist.', 58, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp) || ( !(($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 58, $this->source); })()), "isNewItem", [], "method", false, false, false, 58)) && $tmp instanceof Markup ? (string) $tmp : $tmp) && CoreExtension::inFilter((isset($context["item_type"]) || array_key_exists("item_type", $context) ? $context["item_type"] : (function () { throw new RuntimeError('Variable "item_type" does not exist.', 58, $this->source); })()), $this->extensions['Glpi\Application\View\Extension\ConfigExtension']->config("asset_types"))));
        // line 59
        yield "
   <div class=\"card-body d-flex flex-wrap\">
      <div class=\"col-12 col-xxl-";
        // line 61
        yield (string) (((($tmp = (isset($context["has_third_col"]) || array_key_exists("has_third_col", $context) ? $context["has_third_col"] : (function () { throw new RuntimeError('Variable "has_third_col" does not exist.', 61, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("9") : ("12"));
        yield " flex-column\">
         <div class=\"d-flex flex-row flex-wrap flex-xl-nowrap\">
            <div class=\"row flex-row align-items-start flex-grow-1\" style=\"min-width: 0;\">
               <div class=\"row flex-row\">
                  ";
        // line 65
        yield from $this->unwrap()->yieldBlock('form_fields', $context, $blocks);
        // line 551
        yield "               </div> ";
        // line 552
        yield "            </div> ";
        // line 553
        yield "         </div> ";
        // line 554
        yield "      </div>
       <div class=\"col-12 col-xxl-3 flex-column\">
           <div class=\"flex-row asset-pictures\">
               ";
        // line 557
        yield (string) Twig\Extension\CoreExtension::include($this->env, $context, "components/form/pictures.html.twig", ["gallery_type" => ""]);
        yield "
           </div>
       </div>
   </div> ";
        // line 561
        yield "
   ";
        // line 562
        if (((isset($context["item_type"]) || array_key_exists("item_type", $context) ? $context["item_type"] : (function () { throw new RuntimeError('Variable "item_type" does not exist.', 562, $this->source); })()) == "Contract")) {
            // line 563
            yield "      ";
            yield (string) Twig\Extension\CoreExtension::include($this->env, $context, "components/form/support_hours.html.twig");
            yield "
   ";
        }
        // line 565
        yield "   ";
        if (( !array_key_exists("no_form_buttons", $context) || ((isset($context["no_form_buttons"]) || array_key_exists("no_form_buttons", $context) ? $context["no_form_buttons"] : (function () { throw new RuntimeError('Variable "no_form_buttons" does not exist.', 565, $this->source); })()) == false))) {
            // line 566
            yield "      ";
            yield (string) Twig\Extension\CoreExtension::include($this->env, $context, "components/form/buttons.html.twig");
            yield "
   ";
        }
        // line 568
        yield "   ";
        if (( !array_key_exists("no_inventory_footer", $context) || ((isset($context["no_inventory_footer"]) || array_key_exists("no_inventory_footer", $context) ? $context["no_inventory_footer"] : (function () { throw new RuntimeError('Variable "no_inventory_footer" does not exist.', 568, $this->source); })()) == false))) {
            // line 569
            yield "      ";
            yield (string) Twig\Extension\CoreExtension::include($this->env, $context, "components/form/inventory_info.html.twig");
            yield "
   ";
        }
        // line 571
        yield "
   ";
        // line 572
        if ((($tmp = (((CoreExtension::getAttribute($this->env, $this->source, ($context["params"] ?? null), "formfooter", [], "array", true, true, false, 572) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["params"]) || array_key_exists("params", $context) ? $context["params"] : (function () { throw new RuntimeError('Variable "params" does not exist.', 572, $this->source); })()), "formfooter", [], "array", false, false, false, 572)))) ? (CoreExtension::getAttribute($this->env, $this->source, (isset($context["params"]) || array_key_exists("params", $context) ? $context["params"] : (function () { throw new RuntimeError('Variable "params" does not exist.', 572, $this->source); })()), "formfooter", [], "array", false, false, false, 572)) : (true))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 573
            yield "      <div class=\"card-footer mx-n2 mb-n2\">
         ";
            // line 574
            yield (string) Twig\Extension\CoreExtension::include($this->env, $context, "components/form/dates.html.twig");
            yield "
      </div>
   ";
        }
        // line 577
        yield "</div>
";
        yield from [];
    }

    // line 65
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_form_fields(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 66
        yield "                      ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["field_order"]) || array_key_exists("field_order", $context) ? $context["field_order"] : (function () { throw new RuntimeError('Variable "field_order" does not exist.', 66, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
            // line 67
            yield "                          ";
            $context["specific_field_options"] = Twig\Extension\CoreExtension::merge((isset($context["field_options"]) || array_key_exists("field_options", $context) ? $context["field_options"] : (function () { throw new RuntimeError('Variable "field_options" does not exist.', 67, $this->source); })()), ((CoreExtension::getAttribute($this->env, $this->source, ($context["additional_field_options"] ?? null), $context["field"], [], "array", true, true, false, 67)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["additional_field_options"]) || array_key_exists("additional_field_options", $context) ? $context["additional_field_options"] : (function () { throw new RuntimeError('Variable "additional_field_options" does not exist.', 67, $this->source); })()), $context["field"], [], "array", false, false, false, 67), [])) : ([])));
            // line 68
            yield "
                          ";
            // line 69
            if (($context["field"] === "name")) {
                // line 70
                yield "                              ";
                yield (string) $macros["fields"]->getTemplateForMacro("macro_autoNameField", $context, 70, $this->getSourceContext())->macro_autoNameField(...["name", (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 70, $this->source); })()), ((((isset($context["item_type"]) || array_key_exists("item_type", $context) ? $context["item_type"] : (function () { throw new RuntimeError('Variable "item_type" does not exist.', 70, $this->source); })()) == "Contact")) ? (__("Surname")) : (__("Name"))), (isset($context["withtemplate"]) || array_key_exists("withtemplate", $context) ? $context["withtemplate"] : (function () { throw new RuntimeError('Variable "withtemplate" does not exist.', 70, $this->source); })()), (isset($context["specific_field_options"]) || array_key_exists("specific_field_options", $context) ? $context["specific_field_options"] : (function () { throw new RuntimeError('Variable "specific_field_options" does not exist.', 70, $this->source); })())]);
                yield "
                          ";
            } elseif ((            // line 71
$context["field"] === "firstname")) {
                // line 72
                yield "                              ";
                yield (string) $macros["fields"]->getTemplateForMacro("macro_autoNameField", $context, 72, $this->getSourceContext())->macro_autoNameField(...["firstname", (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 72, $this->source); })()), __("First name"), (isset($context["withtemplate"]) || array_key_exists("withtemplate", $context) ? $context["withtemplate"] : (function () { throw new RuntimeError('Variable "withtemplate" does not exist.', 72, $this->source); })()), (isset($context["specific_field_options"]) || array_key_exists("specific_field_options", $context) ? $context["specific_field_options"] : (function () { throw new RuntimeError('Variable "specific_field_options" does not exist.', 72, $this->source); })())]);
                yield "
                          ";
            } elseif ((((            // line 73
$context["field"] === "template_name") && ((isset($context["withtemplate"]) || array_key_exists("withtemplate", $context) ? $context["withtemplate"] : (function () { throw new RuntimeError('Variable "withtemplate" does not exist.', 73, $this->source); })()) == 1)) && (($tmp = (isset($context["no_header"]) || array_key_exists("no_header", $context) ? $context["no_header"] : (function () { throw new RuntimeError('Variable "no_header" does not exist.', 73, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp))) {
                // line 74
                yield "                              ";
                yield (string) $macros["fields"]->getTemplateForMacro("macro_autoNameField", $context, 74, $this->getSourceContext())->macro_autoNameField(...["template_name", (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 74, $this->source); })()), __("Template name"), 0, (isset($context["specific_field_options"]) || array_key_exists("specific_field_options", $context) ? $context["specific_field_options"] : (function () { throw new RuntimeError('Variable "specific_field_options" does not exist.', 74, $this->source); })())]);
                yield "
                          ";
            } elseif ((((($tmp = CoreExtension::getAttribute($this->env, $this->source,             // line 75
(isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 75, $this->source); })()), "isField", ["is_active"], "method", false, false, false, 75)) && $tmp instanceof Markup ? (string) $tmp : $tmp) && ($context["field"] === "_template_is_active")) && ((isset($context["withtemplate"]) || array_key_exists("withtemplate", $context) ? $context["withtemplate"] : (function () { throw new RuntimeError('Variable "withtemplate" does not exist.', 75, $this->source); })()) >= 1))) {
                // line 76
                yield "                              ";
                yield (string) $macros["fields"]->getTemplateForMacro("macro_hiddenField", $context, 76, $this->getSourceContext())->macro_hiddenField(...["is_active", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 76, $this->source); })()), "fields", [], "any", false, false, false, 76), "is_active", [], "array", false, false, false, 76)]);
                yield "
                          ";
            } elseif (((            // line 77
$context["field"] === "states_id") && CoreExtension::inFilter(get_class((isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 77, $this->source); })())), $this->extensions['Glpi\Application\View\Extension\ConfigExtension']->config("state_types")))) {
                // line 78
                yield "                              ";
                yield (string) $macros["fields"]->getTemplateForMacro("macro_dropdownField", $context, 78, $this->getSourceContext())->macro_dropdownField(...["State", "states_id", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,                 // line 81
(isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 81, $this->source); })()), "fields", [], "any", false, false, false, 81), "states_id", [], "array", false, false, false, 81), __("Status"), Twig\Extension\CoreExtension::merge(                // line 83
(isset($context["specific_field_options"]) || array_key_exists("specific_field_options", $context) ? $context["specific_field_options"] : (function () { throw new RuntimeError('Variable "specific_field_options" does not exist.', 83, $this->source); })()), ["entity" => ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,                 // line 84
($context["item"] ?? null), "fields", [], "any", false, true, false, 84), "entities_id", [], "array", true, true, false, 84)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 84, $this->source); })()), "fields", [], "any", false, false, false, 84), "entities_id", [], "array", false, false, false, 84),  -1)) : ( -1)), "condition" => CoreExtension::getAttribute($this->env, $this->source,                 // line 85
(isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 85, $this->source); })()), "getStateVisibilityCriteria", [], "method", false, false, false, 85)])]);
                // line 87
                yield "
                          ";
            } elseif (((            // line 88
$context["field"] === CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 88, $this->source); })()), "getForeignKeyField", [], "method", false, false, false, 88)) && ((isset($context["item_type"]) || array_key_exists("item_type", $context) ? $context["item_type"] : (function () { throw new RuntimeError('Variable "item_type" does not exist.', 88, $this->source); })()) != "Software"))) {
                // line 89
                yield "                              ";
                yield (string) $macros["fields"]->getTemplateForMacro("macro_dropdownField", $context, 89, $this->getSourceContext())->macro_dropdownField(...[                // line 90
(isset($context["item_type"]) || array_key_exists("item_type", $context) ? $context["item_type"] : (function () { throw new RuntimeError('Variable "item_type" does not exist.', 90, $this->source); })()),                 // line 91
$context["field"], CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,                 // line 92
(isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 92, $this->source); })()), "fields", [], "any", false, false, false, 92), $context["field"], [], "array", false, false, false, 92), __("As child of"), Twig\Extension\CoreExtension::merge(                // line 94
(isset($context["specific_field_options"]) || array_key_exists("specific_field_options", $context) ? $context["specific_field_options"] : (function () { throw new RuntimeError('Variable "specific_field_options" does not exist.', 94, $this->source); })()), ["entity" => ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,                 // line 95
($context["item"] ?? null), "fields", [], "any", false, true, false, 95), "entities_id", [], "array", true, true, false, 95)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 95, $this->source); })()), "fields", [], "any", false, false, false, 95), "entities_id", [], "array", false, false, false, 95),  -1)) : ( -1)), "used" => [CoreExtension::getAttribute($this->env, $this->source,                 // line 96
(isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 96, $this->source); })()), "getID", [], "method", false, false, false, 96)]])]);
                // line 98
                yield "
                          ";
            } elseif (((            // line 99
$context["field"] === "is_helpdesk_visible") && ((isset($context["item_type"]) || array_key_exists("item_type", $context) ? $context["item_type"] : (function () { throw new RuntimeError('Variable "item_type" does not exist.', 99, $this->source); })()) != "SoftwareLicense"))) {
                // line 100
                yield "                              ";
                // line 101
                yield "                              ";
                yield (string) $macros["fields"]->getTemplateForMacro("macro_checkboxField", $context, 101, $this->getSourceContext())->macro_checkboxField(...["is_helpdesk_visible", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,                 // line 103
(isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 103, $this->source); })()), "fields", [], "any", false, false, false, 103), "is_helpdesk_visible", [], "array", false, false, false, 103), __("Associable to a ticket"),                 // line 105
(isset($context["specific_field_options"]) || array_key_exists("specific_field_options", $context) ? $context["specific_field_options"] : (function () { throw new RuntimeError('Variable "specific_field_options" does not exist.', 105, $this->source); })())]);
                // line 106
                yield "
                          ";
            } elseif ((            // line 107
$context["field"] === "_dc_breadcrumbs")) {
                // line 108
                yield "                              ";
                $context["conditions_met"] = 0;
                // line 109
                yield "                              ";
                $context["dc_breadcrumbs"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                    // line 110
                    yield "                                  ";
                    if ($this->extensions['Glpi\Application\View\Extension\PhpExtension']->isUsingTrait((isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 110, $this->source); })()), "Glpi\\Features\\DCBreadcrumb")) {
                        // line 111
                        yield "                                      ";
                        yield (string) $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call((CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 111, $this->source); })()), "getType", [], "method", false, false, false, 111) . "::renderDcBreadcrumb"), [CoreExtension::getAttribute($this->env, $this->source,                         // line 112
(isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 112, $this->source); })()), "getID", [], "any", false, false, false, 112)]);
                        // line 113
                        yield "
                                  ";
                    }
                    // line 115
                    yield "                              ";
                    yield from [];
                })())) ? '' : new Markup($tmp, $this->env->getCharset());
                // line 116
                yield "                              ";
                if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), Twig\Extension\CoreExtension::trim((isset($context["dc_breadcrumbs"]) || array_key_exists("dc_breadcrumbs", $context) ? $context["dc_breadcrumbs"] : (function () { throw new RuntimeError('Variable "dc_breadcrumbs" does not exist.', 116, $this->source); })()))) > 0)) {
                    // line 117
                    yield "                                  ";
                    yield (string) $macros["fields"]->getTemplateForMacro("macro_htmlField", $context, 117, $this->getSourceContext())->macro_htmlField(...["",                     // line 119
(isset($context["dc_breadcrumbs"]) || array_key_exists("dc_breadcrumbs", $context) ? $context["dc_breadcrumbs"] : (function () { throw new RuntimeError('Variable "dc_breadcrumbs" does not exist.', 119, $this->source); })()), __("Data center position")]);
                    // line 121
                    yield "
                                  ";
                    // line 122
                    $context["conditions_met"] = ((isset($context["conditions_met"]) || array_key_exists("conditions_met", $context) ? $context["conditions_met"] : (function () { throw new RuntimeError('Variable "conditions_met" does not exist.', 122, $this->source); })()) + 1);
                    // line 123
                    yield "                              ";
                }
                // line 124
                yield "
                              ";
                // line 125
                if ((array_key_exists("cluster", $context) &&  !(null === (isset($context["cluster"]) || array_key_exists("cluster", $context) ? $context["cluster"] : (function () { throw new RuntimeError('Variable "cluster" does not exist.', 125, $this->source); })())))) {
                    // line 126
                    yield "                                  ";
                    yield (string) $macros["fields"]->getTemplateForMacro("macro_htmlField", $context, 126, $this->getSourceContext())->macro_htmlField(...["", CoreExtension::getAttribute($this->env, $this->source,                     // line 128
(isset($context["cluster"]) || array_key_exists("cluster", $context) ? $context["cluster"] : (function () { throw new RuntimeError('Variable "cluster" does not exist.', 128, $this->source); })()), "getLink", [], "method", false, false, false, 128), _n("Cluster", "Clusters", 1)]);
                    // line 130
                    yield "
                                  ";
                    // line 131
                    $context["conditions_met"] = ((isset($context["conditions_met"]) || array_key_exists("conditions_met", $context) ? $context["conditions_met"] : (function () { throw new RuntimeError('Variable "conditions_met" does not exist.', 131, $this->source); })()) + 1);
                    // line 132
                    yield "                              ";
                }
                // line 133
                yield "                              ";
                if (((isset($context["conditions_met"]) || array_key_exists("conditions_met", $context) ? $context["conditions_met"] : (function () { throw new RuntimeError('Variable "conditions_met" does not exist.', 133, $this->source); })()) == 1)) {
                    // line 134
                    yield "                                  ";
                    yield (string) $macros["fields"]->getTemplateForMacro("macro_nullField", $context, 134, $this->getSourceContext())->macro_nullField(...[]);
                    yield "
                              ";
                }
                // line 136
                yield "                          ";
            } elseif (($context["field"] === "locations_id")) {
                // line 137
                yield "                              ";
                yield (string) $macros["fields"]->getTemplateForMacro("macro_dropdownField", $context, 137, $this->getSourceContext())->macro_dropdownField(...["Location", "locations_id", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,                 // line 140
(isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 140, $this->source); })()), "fields", [], "any", false, false, false, 140), "locations_id", [], "array", false, false, false, 140), $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeName("Location"), Twig\Extension\CoreExtension::merge(                // line 142
(isset($context["specific_field_options"]) || array_key_exists("specific_field_options", $context) ? $context["specific_field_options"] : (function () { throw new RuntimeError('Variable "specific_field_options" does not exist.', 142, $this->source); })()), ["entity" => ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,                 // line 143
($context["item"] ?? null), "fields", [], "any", false, true, false, 143), "entities_id", [], "array", true, true, false, 143)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 143, $this->source); })()), "fields", [], "any", false, false, false, 143), "entities_id", [], "array", false, false, false, 143),  -1)) : ( -1))])]);
                // line 145
                yield "
                          ";
            } elseif (((            // line 146
$context["field"] === "item_type") && ((isset($context["item_type"]) || array_key_exists("item_type", $context) ? $context["item_type"] : (function () { throw new RuntimeError('Variable "item_type" does not exist.', 146, $this->source); })()) == "Unmanaged"))) {
                // line 147
                yield "                              ";
                yield (string) $macros["fields"]->getTemplateForMacro("macro_dropdownArrayField", $context, 147, $this->getSourceContext())->macro_dropdownArrayField(...["item_type", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,                 // line 149
(isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 149, $this->source); })()), "fields", [], "any", false, false, false, 149), "itemtype", [], "array", false, false, false, 149), _n("Type", "Types", 1), ["Computer", "NetworkEquipment", "Printer", "Peripheral", "Phone"],                 // line 154
(isset($context["specific_field_options"]) || array_key_exists("specific_field_options", $context) ? $context["specific_field_options"] : (function () { throw new RuntimeError('Variable "specific_field_options" does not exist.', 154, $this->source); })())]);
                // line 155
                yield "
                          ";
            } elseif (((            // line 156
$context["field"] === "itemtype") && ((isset($context["item_type"]) || array_key_exists("item_type", $context) ? $context["item_type"] : (function () { throw new RuntimeError('Variable "item_type" does not exist.', 156, $this->source); })()) == "DefaultFilter"))) {
                // line 157
                yield "                              ";
                yield (string) $macros["fields"]->getTemplateForMacro("macro_dropdownItemTypes", $context, 157, $this->getSourceContext())->macro_dropdownItemTypes(...["itemtype", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,                 // line 159
(isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 159, $this->source); })()), "fields", [], "any", false, false, false, 159), "itemtype", [], "array", false, false, false, 159), __("Itemtype"), Twig\Extension\CoreExtension::merge(                // line 161
(isset($context["specific_field_options"]) || array_key_exists("specific_field_options", $context) ? $context["specific_field_options"] : (function () { throw new RuntimeError('Variable "specific_field_options" does not exist.', 161, $this->source); })()), ["types" => $this->extensions['Glpi\Application\View\Extension\ConfigExtension']->config("globalsearch_types")])]);
                // line 162
                yield "
                          ";
            } elseif ((            // line 163
$context["field"] === "date_domaincreation")) {
                // line 164
                yield "                              ";
                yield (string) $macros["fields"]->getTemplateForMacro("macro_datetimeField", $context, 164, $this->getSourceContext())->macro_datetimeField(...["date_domaincreation", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 164, $this->source); })()), "fields", [], "any", false, false, false, 164), "date_domaincreation", [], "array", false, false, false, 164), __("Registration date")]);
                yield "
                          ";
            } elseif ((            // line 165
$context["field"] === CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 165, $this->source); })()), "getTypeForeignKeyField", [], "method", false, false, false, 165))) {
                // line 166
                yield "                              ";
                $context["type_itemtype"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 166, $this->source); })()), "getTypeClass", [], "method", false, false, false, 166);
                // line 167
                yield "                              ";
                yield (string) $macros["fields"]->getTemplateForMacro("macro_dropdownField", $context, 167, $this->getSourceContext())->macro_dropdownField(...[                // line 168
(isset($context["type_itemtype"]) || array_key_exists("type_itemtype", $context) ? $context["type_itemtype"] : (function () { throw new RuntimeError('Variable "type_itemtype" does not exist.', 168, $this->source); })()),                 // line 169
$context["field"], CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,                 // line 170
(isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 170, $this->source); })()), "fields", [], "any", false, false, false, 170), $context["field"], [], "array", false, false, false, 170), _n("Type", "Types", 1),                 // line 172
(isset($context["specific_field_options"]) || array_key_exists("specific_field_options", $context) ? $context["specific_field_options"] : (function () { throw new RuntimeError('Variable "specific_field_options" does not exist.', 172, $this->source); })())]);
                // line 173
                yield "
                          ";
            } elseif ((            // line 174
$context["field"] === "usertitles_id")) {
                // line 175
                yield "                              ";
                yield (string) $macros["fields"]->getTemplateForMacro("macro_dropdownField", $context, 175, $this->getSourceContext())->macro_dropdownField(...["UserTitle", "usertitles_id", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,                 // line 178
(isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 178, $this->source); })()), "fields", [], "any", false, false, false, 178), "usertitles_id", [], "array", false, false, false, 178), $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeName("UserTitle"), Twig\Extension\CoreExtension::merge(                // line 180
(isset($context["specific_field_options"]) || array_key_exists("specific_field_options", $context) ? $context["specific_field_options"] : (function () { throw new RuntimeError('Variable "specific_field_options" does not exist.', 180, $this->source); })()), ["entity" => ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,                 // line 181
($context["item"] ?? null), "fields", [], "any", false, true, false, 181), "entities_id", [], "array", true, true, false, 181)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 181, $this->source); })()), "fields", [], "any", false, false, false, 181), "entities_id", [], "array", false, false, false, 181),  -1)) : ( -1))])]);
                // line 183
                yield "
                          ";
            } elseif ((            // line 184
$context["field"] === "registration_number")) {
                // line 185
                yield "                              ";
                yield (string) $macros["fields"]->getTemplateForMacro("macro_autoNameField", $context, 185, $this->getSourceContext())->macro_autoNameField(...["registration_number",                 // line 187
(isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 187, $this->source); })()), (((is_string($_v0 =                 // line 188
(isset($context["item_type"]) || array_key_exists("item_type", $context) ? $context["item_type"] : (function () { throw new RuntimeError('Variable "item_type" does not exist.', 188, $this->source); })())) && is_string($_v1 = "User") && str_starts_with($_v0, $_v1))) ? (_x("user", "Administrative number")) : (_x("infocom", "Administrative number"))),                 // line 189
(isset($context["withtemplate"]) || array_key_exists("withtemplate", $context) ? $context["withtemplate"] : (function () { throw new RuntimeError('Variable "withtemplate" does not exist.', 189, $this->source); })()),                 // line 190
(isset($context["specific_field_options"]) || array_key_exists("specific_field_options", $context) ? $context["specific_field_options"] : (function () { throw new RuntimeError('Variable "specific_field_options" does not exist.', 190, $this->source); })())]);
                // line 191
                yield "
                          ";
            } elseif ((            // line 192
$context["field"] === "phone")) {
                // line 193
                yield "                              ";
                yield (string) $macros["fields"]->getTemplateForMacro("macro_autoNameField", $context, 193, $this->getSourceContext())->macro_autoNameField(...["phone",                 // line 195
(isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 195, $this->source); })()), $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeName("Phone"),                 // line 197
(isset($context["withtemplate"]) || array_key_exists("withtemplate", $context) ? $context["withtemplate"] : (function () { throw new RuntimeError('Variable "withtemplate" does not exist.', 197, $this->source); })()),                 // line 198
(isset($context["specific_field_options"]) || array_key_exists("specific_field_options", $context) ? $context["specific_field_options"] : (function () { throw new RuntimeError('Variable "specific_field_options" does not exist.', 198, $this->source); })())]);
                // line 199
                yield "
                          ";
            } elseif ((            // line 200
$context["field"] === "phone2")) {
                // line 201
                yield "                              ";
                yield (string) $macros["fields"]->getTemplateForMacro("macro_autoNameField", $context, 201, $this->getSourceContext())->macro_autoNameField(...["phone2",                 // line 203
(isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 203, $this->source); })()), __("Phone 2"),                 // line 205
(isset($context["withtemplate"]) || array_key_exists("withtemplate", $context) ? $context["withtemplate"] : (function () { throw new RuntimeError('Variable "withtemplate" does not exist.', 205, $this->source); })()),                 // line 206
(isset($context["specific_field_options"]) || array_key_exists("specific_field_options", $context) ? $context["specific_field_options"] : (function () { throw new RuntimeError('Variable "specific_field_options" does not exist.', 206, $this->source); })())]);
                // line 207
                yield "
                          ";
            } elseif ((            // line 208
$context["field"] === "phonenumber")) {
                // line 209
                yield "                              ";
                yield (string) $macros["fields"]->getTemplateForMacro("macro_autoNameField", $context, 209, $this->getSourceContext())->macro_autoNameField(...["phonenumber",                 // line 211
(isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 211, $this->source); })()), $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeName("Phone"),                 // line 213
(isset($context["withtemplate"]) || array_key_exists("withtemplate", $context) ? $context["withtemplate"] : (function () { throw new RuntimeError('Variable "withtemplate" does not exist.', 213, $this->source); })()),                 // line 214
(isset($context["specific_field_options"]) || array_key_exists("specific_field_options", $context) ? $context["specific_field_options"] : (function () { throw new RuntimeError('Variable "specific_field_options" does not exist.', 214, $this->source); })())]);
                // line 215
                yield "
                          ";
            } elseif ((            // line 216
$context["field"] === "mobile")) {
                // line 217
                yield "                              ";
                yield (string) $macros["fields"]->getTemplateForMacro("macro_autoNameField", $context, 217, $this->getSourceContext())->macro_autoNameField(...["mobile",                 // line 219
(isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 219, $this->source); })()), __("Mobile phone"),                 // line 221
(isset($context["withtemplate"]) || array_key_exists("withtemplate", $context) ? $context["withtemplate"] : (function () { throw new RuntimeError('Variable "withtemplate" does not exist.', 221, $this->source); })()),                 // line 222
(isset($context["specific_field_options"]) || array_key_exists("specific_field_options", $context) ? $context["specific_field_options"] : (function () { throw new RuntimeError('Variable "specific_field_options" does not exist.', 222, $this->source); })())]);
                // line 223
                yield "
                          ";
            } elseif ((            // line 224
$context["field"] === "fax")) {
                // line 225
                yield "                              ";
                yield (string) $macros["fields"]->getTemplateForMacro("macro_autoNameField", $context, 225, $this->getSourceContext())->macro_autoNameField(...["fax",                 // line 227
(isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 227, $this->source); })()), __("Fax"),                 // line 229
(isset($context["withtemplate"]) || array_key_exists("withtemplate", $context) ? $context["withtemplate"] : (function () { throw new RuntimeError('Variable "withtemplate" does not exist.', 229, $this->source); })()),                 // line 230
(isset($context["specific_field_options"]) || array_key_exists("specific_field_options", $context) ? $context["specific_field_options"] : (function () { throw new RuntimeError('Variable "specific_field_options" does not exist.', 230, $this->source); })())]);
                // line 231
                yield "
                          ";
            } elseif ((            // line 232
$context["field"] === "website")) {
                // line 233
                yield "                              ";
                yield (string) $macros["fields"]->getTemplateForMacro("macro_autoNameField", $context, 233, $this->getSourceContext())->macro_autoNameField(...["website",                 // line 235
(isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 235, $this->source); })()), __("Website"),                 // line 237
(isset($context["withtemplate"]) || array_key_exists("withtemplate", $context) ? $context["withtemplate"] : (function () { throw new RuntimeError('Variable "withtemplate" does not exist.', 237, $this->source); })()),                 // line 238
(isset($context["specific_field_options"]) || array_key_exists("specific_field_options", $context) ? $context["specific_field_options"] : (function () { throw new RuntimeError('Variable "specific_field_options" does not exist.', 238, $this->source); })())]);
                // line 239
                yield "
                          ";
            } elseif ((            // line 240
$context["field"] === "email")) {
                // line 241
                yield "                              ";
                yield (string) $macros["fields"]->getTemplateForMacro("macro_autoNameField", $context, 241, $this->getSourceContext())->macro_autoNameField(...["email",                 // line 243
(isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 243, $this->source); })()), _n("Email", "Emails", 1),                 // line 245
(isset($context["withtemplate"]) || array_key_exists("withtemplate", $context) ? $context["withtemplate"] : (function () { throw new RuntimeError('Variable "withtemplate" does not exist.', 245, $this->source); })()),                 // line 246
(isset($context["specific_field_options"]) || array_key_exists("specific_field_options", $context) ? $context["specific_field_options"] : (function () { throw new RuntimeError('Variable "specific_field_options" does not exist.', 246, $this->source); })())]);
                // line 247
                yield "
                          ";
            } elseif ((            // line 248
$context["field"] === "address")) {
                // line 249
                yield "                              ";
                yield (string) $macros["fields"]->getTemplateForMacro("macro_textareaField", $context, 249, $this->getSourceContext())->macro_textareaField(...["address", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 249, $this->source); })()), "fields", [], "any", false, false, false, 249), "address", [], "array", false, false, false, 249), __("Address")]);
                yield "
                          ";
            } elseif ((            // line 250
$context["field"] === "town")) {
                // line 251
                yield "                              ";
                yield (string) $macros["fields"]->getTemplateForMacro("macro_autoNameField", $context, 251, $this->getSourceContext())->macro_autoNameField(...["town",                 // line 253
(isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 253, $this->source); })()), __("City"),                 // line 255
(isset($context["withtemplate"]) || array_key_exists("withtemplate", $context) ? $context["withtemplate"] : (function () { throw new RuntimeError('Variable "withtemplate" does not exist.', 255, $this->source); })()),                 // line 256
(isset($context["specific_field_options"]) || array_key_exists("specific_field_options", $context) ? $context["specific_field_options"] : (function () { throw new RuntimeError('Variable "specific_field_options" does not exist.', 256, $this->source); })())]);
                // line 257
                yield "
                          ";
            } elseif ((            // line 258
$context["field"] === "postcode")) {
                // line 259
                yield "                              ";
                yield (string) $macros["fields"]->getTemplateForMacro("macro_autoNameField", $context, 259, $this->getSourceContext())->macro_autoNameField(...["postcode",                 // line 261
(isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 261, $this->source); })()), __("Postal code"),                 // line 263
(isset($context["withtemplate"]) || array_key_exists("withtemplate", $context) ? $context["withtemplate"] : (function () { throw new RuntimeError('Variable "withtemplate" does not exist.', 263, $this->source); })()),                 // line 264
(isset($context["specific_field_options"]) || array_key_exists("specific_field_options", $context) ? $context["specific_field_options"] : (function () { throw new RuntimeError('Variable "specific_field_options" does not exist.', 264, $this->source); })())]);
                // line 265
                yield "
                          ";
            } elseif (((            // line 266
$context["field"] === "state") && (((isset($context["item_type"]) || array_key_exists("item_type", $context) ? $context["item_type"] : (function () { throw new RuntimeError('Variable "item_type" does not exist.', 266, $this->source); })()) == "Supplier") || ((isset($context["item_type"]) || array_key_exists("item_type", $context) ? $context["item_type"] : (function () { throw new RuntimeError('Variable "item_type" does not exist.', 266, $this->source); })()) == "Contact")))) {
                // line 267
                yield "                              ";
                yield (string) $macros["fields"]->getTemplateForMacro("macro_autoNameField", $context, 267, $this->getSourceContext())->macro_autoNameField(...["state",                 // line 269
(isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 269, $this->source); })()), _x("location", "State"),                 // line 271
(isset($context["withtemplate"]) || array_key_exists("withtemplate", $context) ? $context["withtemplate"] : (function () { throw new RuntimeError('Variable "withtemplate" does not exist.', 271, $this->source); })()),                 // line 272
(isset($context["specific_field_options"]) || array_key_exists("specific_field_options", $context) ? $context["specific_field_options"] : (function () { throw new RuntimeError('Variable "specific_field_options" does not exist.', 272, $this->source); })())]);
                // line 273
                yield "
                          ";
            } elseif ((            // line 274
$context["field"] === "country")) {
                // line 275
                yield "                              ";
                yield (string) $macros["fields"]->getTemplateForMacro("macro_autoNameField", $context, 275, $this->getSourceContext())->macro_autoNameField(...["country",                 // line 277
(isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 277, $this->source); })()), __("Country"),                 // line 279
(isset($context["withtemplate"]) || array_key_exists("withtemplate", $context) ? $context["withtemplate"] : (function () { throw new RuntimeError('Variable "withtemplate" does not exist.', 279, $this->source); })()),                 // line 280
(isset($context["specific_field_options"]) || array_key_exists("specific_field_options", $context) ? $context["specific_field_options"] : (function () { throw new RuntimeError('Variable "specific_field_options" does not exist.', 280, $this->source); })())]);
                // line 281
                yield "
                          ";
            } elseif ((            // line 282
$context["field"] === "date_expiration")) {
                // line 283
                yield "                              ";
                if (((isset($context["item_type"]) || array_key_exists("item_type", $context) ? $context["item_type"] : (function () { throw new RuntimeError('Variable "item_type" does not exist.', 283, $this->source); })()) == "Certificate")) {
                    // line 284
                    yield "                                  ";
                    yield (string) $macros["fields"]->getTemplateForMacro("macro_dateField", $context, 284, $this->getSourceContext())->macro_dateField(...["date_expiration", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 284, $this->source); })()), "fields", [], "any", false, false, false, 284), "date_expiration", [], "array", false, false, false, 284), __("Expiration date"), Twig\Extension\CoreExtension::merge(["helper" => __("Empty for infinite"), "checkIsExpired" => false, "expiration_class" => CoreExtension::getAttribute($this->env, $this->source,                     // line 287
(isset($context["params"]) || array_key_exists("params", $context) ? $context["params"] : (function () { throw new RuntimeError('Variable "params" does not exist.', 287, $this->source); })()), "expiration_class", [], "any", false, false, false, 287)],                     // line 288
(isset($context["specific_field_options"]) || array_key_exists("specific_field_options", $context) ? $context["specific_field_options"] : (function () { throw new RuntimeError('Variable "specific_field_options" does not exist.', 288, $this->source); })()))]);
                    yield "
                              ";
                } elseif ((                // line 289
(isset($context["item_type"]) || array_key_exists("item_type", $context) ? $context["item_type"] : (function () { throw new RuntimeError('Variable "item_type" does not exist.', 289, $this->source); })()) == "ItemAntivirus")) {
                    // line 290
                    yield "                                  ";
                    yield (string) $macros["fields"]->getTemplateForMacro("macro_dateField", $context, 290, $this->getSourceContext())->macro_dateField(...["date_expiration", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 290, $this->source); })()), "fields", [], "any", false, false, false, 290), "date_expiration", [], "array", false, false, false, 290), __("Expiration date"), Twig\Extension\CoreExtension::merge(["helper" => __("Empty for infinite"), "checkIsExpired" => true],                     // line 293
(isset($context["specific_field_options"]) || array_key_exists("specific_field_options", $context) ? $context["specific_field_options"] : (function () { throw new RuntimeError('Variable "specific_field_options" does not exist.', 293, $this->source); })()))]);
                    yield "
                              ";
                } else {
                    // line 295
                    yield "                                  ";
                    yield (string) $macros["fields"]->getTemplateForMacro("macro_datetimeField", $context, 295, $this->getSourceContext())->macro_datetimeField(...["date_expiration", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 295, $this->source); })()), "fields", [], "any", false, false, false, 295), "date_expiration", [], "array", false, false, false, 295), __("Expiration date"), Twig\Extension\CoreExtension::merge(["helper" => __("Empty for infinite"), "checkIsExpired" => true],                     // line 298
(isset($context["specific_field_options"]) || array_key_exists("specific_field_options", $context) ? $context["specific_field_options"] : (function () { throw new RuntimeError('Variable "specific_field_options" does not exist.', 298, $this->source); })()))]);
                    yield "
                              ";
                }
                // line 300
                yield "                          ";
            } elseif (($context["field"] === "ref")) {
                // line 301
                yield "                              ";
                yield (string) $macros["fields"]->getTemplateForMacro("macro_textField", $context, 301, $this->getSourceContext())->macro_textField(...["ref", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,                 // line 303
(isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 303, $this->source); })()), "fields", [], "any", false, false, false, 303), "ref", [], "array", false, false, false, 303), __("Reference"),                 // line 305
(isset($context["specific_field_options"]) || array_key_exists("specific_field_options", $context) ? $context["specific_field_options"] : (function () { throw new RuntimeError('Variable "specific_field_options" does not exist.', 305, $this->source); })())]);
                // line 306
                yield "
                          ";
            } elseif ((            // line 307
$context["field"] === "users_id_tech")) {
                // line 308
                yield "                              ";
                yield (string) $macros["fields"]->getTemplateForMacro("macro_dropdownField", $context, 308, $this->getSourceContext())->macro_dropdownField(...["User", "users_id_tech", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,                 // line 311
(isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 311, $this->source); })()), "fields", [], "any", false, false, false, 311), "users_id_tech", [], "array", false, false, false, 311), __("Technician in charge"), Twig\Extension\CoreExtension::merge(                // line 313
(isset($context["specific_field_options"]) || array_key_exists("specific_field_options", $context) ? $context["specific_field_options"] : (function () { throw new RuntimeError('Variable "specific_field_options" does not exist.', 313, $this->source); })()), ["entity" => ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,                 // line 314
($context["item"] ?? null), "fields", [], "any", false, true, false, 314), "entities_id", [], "array", true, true, false, 314)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 314, $this->source); })()), "fields", [], "any", false, false, false, 314), "entities_id", [], "array", false, false, false, 314),  -1)) : ( -1)), "right" => "own_ticket"])]);
                // line 317
                yield "
                          ";
            } elseif ((            // line 318
$context["field"] === "manufacturers_id")) {
                // line 319
                yield "                              ";
                yield (string) $macros["fields"]->getTemplateForMacro("macro_dropdownField", $context, 319, $this->getSourceContext())->macro_dropdownField(...["Manufacturer", "manufacturers_id", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,                 // line 322
(isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 322, $this->source); })()), "fields", [], "any", false, false, false, 322), "manufacturers_id", [], "array", false, false, false, 322), (((is_string($_v2 =                 // line 323
(isset($context["item_type"]) || array_key_exists("item_type", $context) ? $context["item_type"] : (function () { throw new RuntimeError('Variable "item_type" does not exist.', 323, $this->source); })())) && is_string($_v3 = "Software") && str_starts_with($_v2, $_v3))) ? (__("Publisher")) : ($this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeName("Manufacturer"))),                 // line 324
(isset($context["specific_field_options"]) || array_key_exists("specific_field_options", $context) ? $context["specific_field_options"] : (function () { throw new RuntimeError('Variable "specific_field_options" does not exist.', 324, $this->source); })())]);
                // line 325
                yield "
                          ";
            } elseif ((            // line 326
$context["field"] === "groups_id_tech")) {
                // line 327
                yield "                              ";
                yield (string) $macros["fields"]->getTemplateForMacro("macro_dropdownField", $context, 327, $this->getSourceContext())->macro_dropdownField(...["Group", "groups_id_tech", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,                 // line 330
(isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 330, $this->source); })()), "fields", [], "any", false, false, false, 330), "groups_id_tech", [], "array", false, false, false, 330), __("Group in charge"), Twig\Extension\CoreExtension::merge(                // line 332
(isset($context["specific_field_options"]) || array_key_exists("specific_field_options", $context) ? $context["specific_field_options"] : (function () { throw new RuntimeError('Variable "specific_field_options" does not exist.', 332, $this->source); })()), ["entity" => ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,                 // line 333
($context["item"] ?? null), "fields", [], "any", false, true, false, 333), "entities_id", [], "array", true, true, false, 333)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 333, $this->source); })()), "fields", [], "any", false, false, false, 333), "entities_id", [], "array", false, false, false, 333),  -1)) : ( -1)), "condition" => ["is_assign" => 1], "multiple" => (($this->extensions['Glpi\Application\View\Extension\PhpExtension']->isUsingTrait(                // line 335
(isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 335, $this->source); })()), "Glpi\\Features\\AssignableItem")) ? (true) : (false))])]);
                // line 337
                yield "
                          ";
            } elseif ((            // line 338
$context["field"] === CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 338, $this->source); })()), "getModelForeignKeyField", [], "method", false, false, false, 338))) {
                // line 339
                yield "                              ";
                $context["model_itemtype"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 339, $this->source); })()), "getModelClass", [], "method", false, false, false, 339);
                // line 340
                yield "                              ";
                yield (string) $macros["fields"]->getTemplateForMacro("macro_dropdownField", $context, 340, $this->getSourceContext())->macro_dropdownField(...[                // line 341
(isset($context["model_itemtype"]) || array_key_exists("model_itemtype", $context) ? $context["model_itemtype"] : (function () { throw new RuntimeError('Variable "model_itemtype" does not exist.', 341, $this->source); })()),                 // line 342
$context["field"], CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,                 // line 343
(isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 343, $this->source); })()), "fields", [], "any", false, false, false, 343), $context["field"], [], "array", false, false, false, 343), _n("Model", "Models", 1),                 // line 345
(isset($context["specific_field_options"]) || array_key_exists("specific_field_options", $context) ? $context["specific_field_options"] : (function () { throw new RuntimeError('Variable "specific_field_options" does not exist.', 345, $this->source); })())]);
                // line 346
                yield "
                          ";
            } elseif (((            // line 347
$context["field"] === "contact_num") && ((isset($context["item_type"]) || array_key_exists("item_type", $context) ? $context["item_type"] : (function () { throw new RuntimeError('Variable "item_type" does not exist.', 347, $this->source); })()) != "SoftwareLicense"))) {
                // line 348
                yield "                              ";
                // line 349
                yield "                              ";
                yield (string) $macros["fields"]->getTemplateForMacro("macro_textField", $context, 349, $this->getSourceContext())->macro_textField(...["contact_num", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,                 // line 351
(isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 351, $this->source); })()), "fields", [], "any", false, false, false, 351), "contact_num", [], "array", false, false, false, 351), __("Alternate username number"),                 // line 353
(isset($context["specific_field_options"]) || array_key_exists("specific_field_options", $context) ? $context["specific_field_options"] : (function () { throw new RuntimeError('Variable "specific_field_options" does not exist.', 353, $this->source); })())]);
                // line 354
                yield "
                          ";
            } elseif ((            // line 355
$context["field"] === "serial")) {
                // line 356
                yield "                              ";
                yield (string) $macros["fields"]->getTemplateForMacro("macro_textField", $context, 356, $this->getSourceContext())->macro_textField(...["serial", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,                 // line 358
(isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 358, $this->source); })()), "fields", [], "any", false, false, false, 358), "serial", [], "array", false, false, false, 358), __("Serial number"),                 // line 360
(isset($context["specific_field_options"]) || array_key_exists("specific_field_options", $context) ? $context["specific_field_options"] : (function () { throw new RuntimeError('Variable "specific_field_options" does not exist.', 360, $this->source); })())]);
                // line 361
                yield "
                          ";
            } elseif (((            // line 362
$context["field"] === "contact") && ((isset($context["item_type"]) || array_key_exists("item_type", $context) ? $context["item_type"] : (function () { throw new RuntimeError('Variable "item_type" does not exist.', 362, $this->source); })()) != "SoftwareLicense"))) {
                // line 363
                yield "                              ";
                // line 364
                yield "                              ";
                yield (string) $macros["fields"]->getTemplateForMacro("macro_textField", $context, 364, $this->getSourceContext())->macro_textField(...["contact", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,                 // line 366
(isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 366, $this->source); })()), "fields", [], "any", false, false, false, 366), "contact", [], "array", false, false, false, 366), __("Alternate username"),                 // line 368
(isset($context["specific_field_options"]) || array_key_exists("specific_field_options", $context) ? $context["specific_field_options"] : (function () { throw new RuntimeError('Variable "specific_field_options" does not exist.', 368, $this->source); })())]);
                // line 369
                yield "
                          ";
            } elseif ((            // line 370
$context["field"] === "otherserial")) {
                // line 371
                yield "                              ";
                yield (string) $macros["fields"]->getTemplateForMacro("macro_autoNameField", $context, 371, $this->getSourceContext())->macro_autoNameField(...["otherserial",                 // line 373
(isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 373, $this->source); })()), __("Inventory number"),                 // line 375
(isset($context["withtemplate"]) || array_key_exists("withtemplate", $context) ? $context["withtemplate"] : (function () { throw new RuntimeError('Variable "withtemplate" does not exist.', 375, $this->source); })()),                 // line 376
(isset($context["specific_field_options"]) || array_key_exists("specific_field_options", $context) ? $context["specific_field_options"] : (function () { throw new RuntimeError('Variable "specific_field_options" does not exist.', 376, $this->source); })())]);
                // line 377
                yield "
                          ";
            } elseif ((            // line 378
$context["field"] === "sysdescr")) {
                // line 379
                yield "                              ";
                yield (string) $macros["fields"]->getTemplateForMacro("macro_textareaField", $context, 379, $this->getSourceContext())->macro_textareaField(...["sysdescr", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 379, $this->source); })()), "fields", [], "any", false, false, false, 379), "sysdescr", [], "array", false, false, false, 379), __("Sysdescr"), (isset($context["specific_field_options"]) || array_key_exists("specific_field_options", $context) ? $context["specific_field_options"] : (function () { throw new RuntimeError('Variable "specific_field_options" does not exist.', 379, $this->source); })())]);
                yield "
                          ";
            } elseif ((            // line 380
$context["field"] === "snmpcredentials_id")) {
                // line 381
                yield "                              ";
                yield (string) $macros["fields"]->getTemplateForMacro("macro_dropdownField", $context, 381, $this->getSourceContext())->macro_dropdownField(...["SNMPCredential", "snmpcredentials_id", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,                 // line 384
(isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 384, $this->source); })()), "fields", [], "any", false, false, false, 384), "snmpcredentials_id", [], "array", false, false, false, 384), $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeName("SNMPCredential"),                 // line 386
(isset($context["specific_field_options"]) || array_key_exists("specific_field_options", $context) ? $context["specific_field_options"] : (function () { throw new RuntimeError('Variable "specific_field_options" does not exist.', 386, $this->source); })())]);
                // line 387
                yield "
                          ";
            } elseif ((            // line 388
$context["field"] === "users_id")) {
                // line 389
                yield "                              ";
                yield (string) $macros["fields"]->getTemplateForMacro("macro_dropdownField", $context, 389, $this->getSourceContext())->macro_dropdownField(...["User", "users_id", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,                 // line 392
(isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 392, $this->source); })()), "fields", [], "any", false, false, false, 392), "users_id", [], "array", false, false, false, 392), $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeName("User"), Twig\Extension\CoreExtension::merge(                // line 394
(isset($context["specific_field_options"]) || array_key_exists("specific_field_options", $context) ? $context["specific_field_options"] : (function () { throw new RuntimeError('Variable "specific_field_options" does not exist.', 394, $this->source); })()), ["entity" => ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,                 // line 395
($context["item"] ?? null), "fields", [], "any", false, true, false, 395), "entities_id", [], "array", true, true, false, 395)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 395, $this->source); })()), "fields", [], "any", false, false, false, 395), "entities_id", [], "array", false, false, false, 395),  -1)) : ( -1)), "right" => "all"])]);
                // line 398
                yield "
                          ";
            } elseif ((            // line 399
$context["field"] === "is_global")) {
                // line 400
                yield "                              ";
                $context["management_restrict"] = 0;
                // line 401
                yield "                              ";
                if (((isset($context["item_type"]) || array_key_exists("item_type", $context) ? $context["item_type"] : (function () { throw new RuntimeError('Variable "item_type" does not exist.', 401, $this->source); })()) == "Monitor")) {
                    // line 402
                    yield "                                  ";
                    $context["management_restrict"] = $this->extensions['Glpi\Application\View\Extension\ConfigExtension']->config("monitors_management_restrict");
                    // line 403
                    yield "                              ";
                } elseif (((isset($context["item_type"]) || array_key_exists("item_type", $context) ? $context["item_type"] : (function () { throw new RuntimeError('Variable "item_type" does not exist.', 403, $this->source); })()) == "Peripheral")) {
                    // line 404
                    yield "                                  ";
                    $context["management_restrict"] = $this->extensions['Glpi\Application\View\Extension\ConfigExtension']->config("peripherals_management_restrict");
                    // line 405
                    yield "                              ";
                } elseif (((isset($context["item_type"]) || array_key_exists("item_type", $context) ? $context["item_type"] : (function () { throw new RuntimeError('Variable "item_type" does not exist.', 405, $this->source); })()) == "Phone")) {
                    // line 406
                    yield "                                  ";
                    $context["management_restrict"] = $this->extensions['Glpi\Application\View\Extension\ConfigExtension']->config("phones_management_restrict");
                    // line 407
                    yield "                              ";
                } elseif (((isset($context["item_type"]) || array_key_exists("item_type", $context) ? $context["item_type"] : (function () { throw new RuntimeError('Variable "item_type" does not exist.', 407, $this->source); })()) == "Printer")) {
                    // line 408
                    yield "                                  ";
                    $context["management_restrict"] = $this->extensions['Glpi\Application\View\Extension\ConfigExtension']->config("printers_management_restrict");
                    // line 409
                    yield "                              ";
                } else {
                    // line 410
                    yield "                                  ";
                    $context["management_restrict"] = 0;
                    // line 411
                    yield "                              ";
                }
                // line 412
                yield "                              ";
                $context["dd_globalswitch"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                    // line 413
                    yield "                                  ";
                    $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Dropdown::showGlobalSwitch", [CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 413, $this->source); })()), "fields", [], "any", false, false, false, 413), "id", [], "array", false, false, false, 413), ["withtemplate" =>                     // line 414
(isset($context["withtemplate"]) || array_key_exists("withtemplate", $context) ? $context["withtemplate"] : (function () { throw new RuntimeError('Variable "withtemplate" does not exist.', 414, $this->source); })()), "value" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,                     // line 415
(isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 415, $this->source); })()), "fields", [], "any", false, false, false, 415), "is_global", [], "array", false, false, false, 415), "management_restrict" =>                     // line 416
(isset($context["management_restrict"]) || array_key_exists("management_restrict", $context) ? $context["management_restrict"] : (function () { throw new RuntimeError('Variable "management_restrict" does not exist.', 416, $this->source); })()), "target" =>                     // line 417
(isset($context["target"]) || array_key_exists("target", $context) ? $context["target"] : (function () { throw new RuntimeError('Variable "target" does not exist.', 417, $this->source); })()), "width" => "100%"]]);
                    // line 420
                    yield "                              ";
                    yield from [];
                })())) ? '' : new Markup($tmp, $this->env->getCharset());
                // line 421
                yield "                              ";
                yield (string) $macros["fields"]->getTemplateForMacro("macro_htmlField", $context, 421, $this->getSourceContext())->macro_htmlField(...["is_global",                 // line 423
(isset($context["dd_globalswitch"]) || array_key_exists("dd_globalswitch", $context) ? $context["dd_globalswitch"] : (function () { throw new RuntimeError('Variable "dd_globalswitch" does not exist.', 423, $this->source); })()), __("Management type")]);
                // line 425
                yield "
                          ";
            } elseif ((            // line 426
$context["field"] === "size")) {
                // line 427
                yield "                              ";
                yield (string) $macros["fields"]->getTemplateForMacro("macro_numberField", $context, 427, $this->getSourceContext())->macro_numberField(...["size", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,                 // line 429
(isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 429, $this->source); })()), "fields", [], "any", false, false, false, 429), "size", [], "array", false, false, false, 429), __("Size"), Twig\Extension\CoreExtension::merge(                // line 431
(isset($context["specific_field_options"]) || array_key_exists("specific_field_options", $context) ? $context["specific_field_options"] : (function () { throw new RuntimeError('Variable "specific_field_options" does not exist.', 431, $this->source); })()), ["min" => 0, "max" => 999.99, "step" => 0.01])]);
                // line 436
                yield "
                          ";
            } elseif ((            // line 437
$context["field"] === "networks_id")) {
                // line 438
                yield "                              ";
                yield (string) $macros["fields"]->getTemplateForMacro("macro_dropdownField", $context, 438, $this->getSourceContext())->macro_dropdownField(...["Network", "networks_id", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,                 // line 441
(isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 441, $this->source); })()), "fields", [], "any", false, false, false, 441), "networks_id", [], "array", false, false, false, 441), _n("Network", "Networks", 1),                 // line 443
(isset($context["specific_field_options"]) || array_key_exists("specific_field_options", $context) ? $context["specific_field_options"] : (function () { throw new RuntimeError('Variable "specific_field_options" does not exist.', 443, $this->source); })())]);
                // line 444
                yield "
                          ";
            } elseif ((            // line 445
$context["field"] === "groups_id")) {
                // line 446
                yield "                              ";
                yield (string) $macros["fields"]->getTemplateForMacro("macro_dropdownField", $context, 446, $this->getSourceContext())->macro_dropdownField(...["Group", "groups_id", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,                 // line 449
(isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 449, $this->source); })()), "fields", [], "any", false, false, false, 449), "groups_id", [], "array", false, false, false, 449), $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeName("Group"), Twig\Extension\CoreExtension::merge(                // line 451
(isset($context["specific_field_options"]) || array_key_exists("specific_field_options", $context) ? $context["specific_field_options"] : (function () { throw new RuntimeError('Variable "specific_field_options" does not exist.', 451, $this->source); })()), ["entity" => ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,                 // line 452
($context["item"] ?? null), "fields", [], "any", false, true, false, 452), "entities_id", [], "array", true, true, false, 452)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 452, $this->source); })()), "fields", [], "any", false, false, false, 452), "entities_id", [], "array", false, false, false, 452),  -1)) : ( -1)), "condition" => ["is_itemgroup" => 1], "multiple" => (($this->extensions['Glpi\Application\View\Extension\PhpExtension']->isUsingTrait(                // line 454
(isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 454, $this->source); })()), "Glpi\\Features\\AssignableItem")) ? (true) : (false))])]);
                // line 456
                yield "
                          ";
            } elseif ((            // line 457
$context["field"] === "uuid")) {
                // line 458
                yield "                              ";
                yield (string) $macros["fields"]->getTemplateForMacro("macro_textField", $context, 458, $this->getSourceContext())->macro_textField(...["uuid", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,                 // line 460
(isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 460, $this->source); })()), "fields", [], "any", false, false, false, 460), "uuid", [], "array", false, false, false, 460), __("UUID"),                 // line 462
(isset($context["specific_field_options"]) || array_key_exists("specific_field_options", $context) ? $context["specific_field_options"] : (function () { throw new RuntimeError('Variable "specific_field_options" does not exist.', 462, $this->source); })())]);
                // line 463
                yield "
                          ";
            } elseif ((            // line 464
$context["field"] === "version")) {
                // line 465
                yield "                              ";
                yield (string) $macros["fields"]->getTemplateForMacro("macro_autoNameField", $context, 465, $this->getSourceContext())->macro_autoNameField(...["version",                 // line 467
(isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 467, $this->source); })()), _n("Version", "Versions", 1),                 // line 469
(isset($context["withtemplate"]) || array_key_exists("withtemplate", $context) ? $context["withtemplate"] : (function () { throw new RuntimeError('Variable "withtemplate" does not exist.', 469, $this->source); })()),                 // line 470
(isset($context["specific_field_options"]) || array_key_exists("specific_field_options", $context) ? $context["specific_field_options"] : (function () { throw new RuntimeError('Variable "specific_field_options" does not exist.', 470, $this->source); })())]);
                // line 471
                yield "
                          ";
            } elseif ((            // line 472
$context["field"] === "comment")) {
                // line 473
                yield "                              ";
                yield (string) $macros["fields"]->getTemplateForMacro("macro_textareaField", $context, 473, $this->getSourceContext())->macro_textareaField(...["comment", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,                 // line 475
(isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 475, $this->source); })()), "fields", [], "any", false, false, false, 475), "comment", [], "array", false, false, false, 475), _n("Comment", "Comments", Session::getPluralNumber()),                 // line 477
(isset($context["specific_field_options"]) || array_key_exists("specific_field_options", $context) ? $context["specific_field_options"] : (function () { throw new RuntimeError('Variable "specific_field_options" does not exist.', 477, $this->source); })())]);
                // line 478
                yield "
                          ";
            } elseif ((            // line 479
$context["field"] === "ram")) {
                // line 480
                yield "                              ";
                yield (string) $macros["fields"]->getTemplateForMacro("macro_numberField", $context, 480, $this->getSourceContext())->macro_numberField(...["ram", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,                 // line 482
(isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 482, $this->source); })()), "fields", [], "any", false, false, false, 482), "ram", [], "array", false, false, false, 482), Twig\Extension\CoreExtension::sprintf(__("%1\$s (%2\$s)"), _n("Memory", "Memories", 1), __("Mio")),                 // line 484
(isset($context["specific_field_options"]) || array_key_exists("specific_field_options", $context) ? $context["specific_field_options"] : (function () { throw new RuntimeError('Variable "specific_field_options" does not exist.', 484, $this->source); })())]);
                // line 485
                yield "
                          ";
            } elseif ((            // line 486
$context["field"] === "alarm_threshold")) {
                // line 487
                yield "                              ";
                $context["dd_alarm_treshold"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                    // line 488
                    yield "                                  ";
                    $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Dropdown::showNumber", ["alarm_threshold", Twig\Extension\CoreExtension::merge(["value" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,                     // line 489
(isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 489, $this->source); })()), "fields", [], "any", false, false, false, 489), "alarm_threshold", [], "array", false, false, false, 489), "rand" =>                     // line 490
(isset($context["rand"]) || array_key_exists("rand", $context) ? $context["rand"] : (function () { throw new RuntimeError('Variable "rand" does not exist.', 490, $this->source); })()), "width" => "100%", "min" => 0, "max" => 100, "step" => 1, "toadd" => ["-1" => __("Never")]],                     // line 496
(isset($context["params"]) || array_key_exists("params", $context) ? $context["params"] : (function () { throw new RuntimeError('Variable "params" does not exist.', 496, $this->source); })()))]);
                    // line 497
                    yield "                              ";
                    yield from [];
                })())) ? '' : new Markup($tmp, $this->env->getCharset());
                // line 498
                yield "                              ";
                $context["last_alert_html"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                    // line 499
                    yield "                                  <span class=\"text-muted\">
                                      ";
                    // line 500
                    $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Alert::displayLastAlert", [(isset($context["item_type"]) || array_key_exists("item_type", $context) ? $context["item_type"] : (function () { throw new RuntimeError('Variable "item_type" does not exist.', 500, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 500, $this->source); })()), "fields", [], "any", false, false, false, 500), "id", [], "array", false, false, false, 500)]);
                    // line 501
                    yield "                                  </span>
                              ";
                    yield from [];
                })())) ? '' : new Markup($tmp, $this->env->getCharset());
                // line 503
                yield "                              ";
                yield (string) $macros["fields"]->getTemplateForMacro("macro_htmlField", $context, 503, $this->getSourceContext())->macro_htmlField(...["alarm_threshold",                 // line 505
(isset($context["dd_alarm_treshold"]) || array_key_exists("dd_alarm_treshold", $context) ? $context["dd_alarm_treshold"] : (function () { throw new RuntimeError('Variable "dd_alarm_treshold" does not exist.', 505, $this->source); })()), __("Alert threshold"), Twig\Extension\CoreExtension::merge(                // line 507
(isset($context["specific_field_options"]) || array_key_exists("specific_field_options", $context) ? $context["specific_field_options"] : (function () { throw new RuntimeError('Variable "specific_field_options" does not exist.', 507, $this->source); })()), ["add_field_html" =>                 // line 508
(isset($context["last_alert_html"]) || array_key_exists("last_alert_html", $context) ? $context["last_alert_html"] : (function () { throw new RuntimeError('Variable "last_alert_html" does not exist.', 508, $this->source); })())])]);
                // line 510
                yield "
                          ";
            } elseif ((            // line 511
$context["field"] === "brand")) {
                // line 512
                yield "                              ";
                yield (string) $macros["fields"]->getTemplateForMacro("macro_textField", $context, 512, $this->getSourceContext())->macro_textField(...["brand", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,                 // line 514
(isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 514, $this->source); })()), "fields", [], "any", false, false, false, 514), "brand", [], "array", false, false, false, 514), __("Brand"),                 // line 516
(isset($context["specific_field_options"]) || array_key_exists("specific_field_options", $context) ? $context["specific_field_options"] : (function () { throw new RuntimeError('Variable "specific_field_options" does not exist.', 516, $this->source); })())]);
                // line 517
                yield "
                          ";
            } elseif ((            // line 518
$context["field"] === "begin_date")) {
                // line 519
                yield "                              ";
                yield (string) $macros["fields"]->getTemplateForMacro("macro_dateField", $context, 519, $this->getSourceContext())->macro_dateField(...["begin_date", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,                 // line 521
(isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 521, $this->source); })()), "fields", [], "any", false, false, false, 521), "begin_date", [], "array", false, false, false, 521), __("Start date"),                 // line 523
(isset($context["specific_field_options"]) || array_key_exists("specific_field_options", $context) ? $context["specific_field_options"] : (function () { throw new RuntimeError('Variable "specific_field_options" does not exist.', 523, $this->source); })())]);
                // line 524
                yield "
                          ";
            } elseif ((            // line 525
$context["field"] === "autoupdatesystems_id")) {
                // line 526
                yield "                              ";
                yield (string) $macros["fields"]->getTemplateForMacro("macro_dropdownField", $context, 526, $this->getSourceContext())->macro_dropdownField(...["AutoUpdateSystem", "autoupdatesystems_id", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,                 // line 529
(isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 529, $this->source); })()), "fields", [], "any", false, false, false, 529), "autoupdatesystems_id", [], "array", false, false, false, 529), $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeName("AutoUpdateSystem"),                 // line 531
(isset($context["specific_field_options"]) || array_key_exists("specific_field_options", $context) ? $context["specific_field_options"] : (function () { throw new RuntimeError('Variable "specific_field_options" does not exist.', 531, $this->source); })())]);
                // line 532
                yield "
                          ";
            } elseif ((            // line 533
$context["field"] === "pictures")) {
                // line 534
                yield "                              ";
                yield (string) $macros["fields"]->getTemplateForMacro("macro_fileField", $context, 534, $this->getSourceContext())->macro_fileField(...["pictures", null, _n("Picture", "Pictures", Session::getPluralNumber()), ["onlyimages" => true, "multiple" => true]]);
                // line 537
                yield "
                          ";
            } elseif ((            // line 538
$context["field"] === "is_active")) {
                // line 539
                yield "                              ";
                yield (string) $macros["fields"]->getTemplateForMacro("macro_dropdownYesNo", $context, 539, $this->getSourceContext())->macro_dropdownYesNo(...["is_active", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 539, $this->source); })()), "fields", [], "any", false, false, false, 539), "is_active", [], "array", false, false, false, 539), __("Active"), (isset($context["specific_field_options"]) || array_key_exists("specific_field_options", $context) ? $context["specific_field_options"] : (function () { throw new RuntimeError('Variable "specific_field_options" does not exist.', 539, $this->source); })())]);
                yield "
                          ";
            } elseif ((((            // line 540
$context["field"] === "last_boot") && (($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 540, $this->source); })()), "isField", ["is_dynamic"], "method", false, false, false, 540)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) && (($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 540, $this->source); })()), "fields", [], "any", false, false, false, 540), "is_dynamic", [], "array", false, false, false, 540)) && $tmp instanceof Markup ? (string) $tmp : $tmp))) {
                // line 541
                yield "                              ";
                // line 542
                yield "                              ";
                yield (string) $macros["fields"]->getTemplateForMacro("macro_htmlField", $context, 542, $this->getSourceContext())->macro_htmlField(...["last_boot", $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\DataHelpersExtension']->getFormattedDatetime(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 542, $this->source); })()), "fields", [], "any", false, false, false, 542), "last_boot", [], "array", false, false, false, 542), true)), __("Last boot date")]);
                yield "
                          ";
            } elseif (CoreExtension::inFilter(            // line 543
$context["field"], Twig\Extension\CoreExtension::keys((isset($context["custom_fields"]) || array_key_exists("custom_fields", $context) ? $context["custom_fields"] : (function () { throw new RuntimeError('Variable "custom_fields" does not exist.', 543, $this->source); })())))) {
                // line 544
                yield "                              ";
                yield (string) CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["custom_fields"]) || array_key_exists("custom_fields", $context) ? $context["custom_fields"] : (function () { throw new RuntimeError('Variable "custom_fields" does not exist.', 544, $this->source); })()), $context["field"], [], "array", false, false, false, 544), "getFieldType", [], "method", false, false, false, 544), "getFormInput", [$context["field"], CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 544, $this->source); })()), "fields", [], "any", false, false, false, 544), $context["field"], [], "array", false, false, false, 544)], "method", false, false, false, 544);
                yield "
                          ";
            }
            // line 546
            yield "                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['field'], $context['_parent']);
        $context = array_intersect_key($context, $_parent);
        $context += $_parent;
        // line 547
        yield "
                     ";
        // line 548
        yield from $this->unwrap()->yieldBlock('more_fields', $context, $blocks);
        // line 550
        yield "                  ";
        yield from [];
    }

    // line 548
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_more_fields(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 549
        yield "                     ";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "generic_show_form.html.twig";
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
        return array (  957 => 549,  950 => 548,  945 => 550,  943 => 548,  940 => 547,  933 => 546,  927 => 544,  925 => 543,  920 => 542,  918 => 541,  916 => 540,  911 => 539,  909 => 538,  906 => 537,  903 => 534,  901 => 533,  898 => 532,  896 => 531,  895 => 529,  893 => 526,  891 => 525,  888 => 524,  886 => 523,  885 => 521,  883 => 519,  881 => 518,  878 => 517,  876 => 516,  875 => 514,  873 => 512,  871 => 511,  868 => 510,  866 => 508,  865 => 507,  864 => 505,  862 => 503,  857 => 501,  855 => 500,  852 => 499,  849 => 498,  845 => 497,  843 => 496,  842 => 490,  841 => 489,  839 => 488,  836 => 487,  834 => 486,  831 => 485,  829 => 484,  828 => 482,  826 => 480,  824 => 479,  821 => 478,  819 => 477,  818 => 475,  816 => 473,  814 => 472,  811 => 471,  809 => 470,  808 => 469,  807 => 467,  805 => 465,  803 => 464,  800 => 463,  798 => 462,  797 => 460,  795 => 458,  793 => 457,  790 => 456,  788 => 454,  787 => 452,  786 => 451,  785 => 449,  783 => 446,  781 => 445,  778 => 444,  776 => 443,  775 => 441,  773 => 438,  771 => 437,  768 => 436,  766 => 431,  765 => 429,  763 => 427,  761 => 426,  758 => 425,  756 => 423,  754 => 421,  750 => 420,  748 => 417,  747 => 416,  746 => 415,  745 => 414,  743 => 413,  740 => 412,  737 => 411,  734 => 410,  731 => 409,  728 => 408,  725 => 407,  722 => 406,  719 => 405,  716 => 404,  713 => 403,  710 => 402,  707 => 401,  704 => 400,  702 => 399,  699 => 398,  697 => 395,  696 => 394,  695 => 392,  693 => 389,  691 => 388,  688 => 387,  686 => 386,  685 => 384,  683 => 381,  681 => 380,  676 => 379,  674 => 378,  671 => 377,  669 => 376,  668 => 375,  667 => 373,  665 => 371,  663 => 370,  660 => 369,  658 => 368,  657 => 366,  655 => 364,  653 => 363,  651 => 362,  648 => 361,  646 => 360,  645 => 358,  643 => 356,  641 => 355,  638 => 354,  636 => 353,  635 => 351,  633 => 349,  631 => 348,  629 => 347,  626 => 346,  624 => 345,  623 => 343,  622 => 342,  621 => 341,  619 => 340,  616 => 339,  614 => 338,  611 => 337,  609 => 335,  608 => 333,  607 => 332,  606 => 330,  604 => 327,  602 => 326,  599 => 325,  597 => 324,  596 => 323,  595 => 322,  593 => 319,  591 => 318,  588 => 317,  586 => 314,  585 => 313,  584 => 311,  582 => 308,  580 => 307,  577 => 306,  575 => 305,  574 => 303,  572 => 301,  569 => 300,  564 => 298,  562 => 295,  557 => 293,  555 => 290,  553 => 289,  549 => 288,  548 => 287,  546 => 284,  543 => 283,  541 => 282,  538 => 281,  536 => 280,  535 => 279,  534 => 277,  532 => 275,  530 => 274,  527 => 273,  525 => 272,  524 => 271,  523 => 269,  521 => 267,  519 => 266,  516 => 265,  514 => 264,  513 => 263,  512 => 261,  510 => 259,  508 => 258,  505 => 257,  503 => 256,  502 => 255,  501 => 253,  499 => 251,  497 => 250,  492 => 249,  490 => 248,  487 => 247,  485 => 246,  484 => 245,  483 => 243,  481 => 241,  479 => 240,  476 => 239,  474 => 238,  473 => 237,  472 => 235,  470 => 233,  468 => 232,  465 => 231,  463 => 230,  462 => 229,  461 => 227,  459 => 225,  457 => 224,  454 => 223,  452 => 222,  451 => 221,  450 => 219,  448 => 217,  446 => 216,  443 => 215,  441 => 214,  440 => 213,  439 => 211,  437 => 209,  435 => 208,  432 => 207,  430 => 206,  429 => 205,  428 => 203,  426 => 201,  424 => 200,  421 => 199,  419 => 198,  418 => 197,  417 => 195,  415 => 193,  413 => 192,  410 => 191,  408 => 190,  407 => 189,  406 => 188,  405 => 187,  403 => 185,  401 => 184,  398 => 183,  396 => 181,  395 => 180,  394 => 178,  392 => 175,  390 => 174,  387 => 173,  385 => 172,  384 => 170,  383 => 169,  382 => 168,  380 => 167,  377 => 166,  375 => 165,  370 => 164,  368 => 163,  365 => 162,  363 => 161,  362 => 159,  360 => 157,  358 => 156,  355 => 155,  353 => 154,  352 => 149,  350 => 147,  348 => 146,  345 => 145,  343 => 143,  342 => 142,  341 => 140,  339 => 137,  336 => 136,  330 => 134,  327 => 133,  324 => 132,  322 => 131,  319 => 130,  317 => 128,  315 => 126,  313 => 125,  310 => 124,  307 => 123,  305 => 122,  302 => 121,  300 => 119,  298 => 117,  295 => 116,  291 => 115,  287 => 113,  285 => 112,  283 => 111,  280 => 110,  277 => 109,  274 => 108,  272 => 107,  269 => 106,  267 => 105,  266 => 103,  264 => 101,  262 => 100,  260 => 99,  257 => 98,  255 => 96,  254 => 95,  253 => 94,  252 => 92,  251 => 91,  250 => 90,  248 => 89,  246 => 88,  243 => 87,  241 => 85,  240 => 84,  239 => 83,  238 => 81,  236 => 78,  234 => 77,  229 => 76,  227 => 75,  222 => 74,  220 => 73,  215 => 72,  213 => 71,  208 => 70,  206 => 69,  203 => 68,  200 => 67,  195 => 66,  188 => 65,  182 => 577,  176 => 574,  173 => 573,  171 => 572,  168 => 571,  162 => 569,  159 => 568,  153 => 566,  150 => 565,  144 => 563,  142 => 562,  139 => 561,  133 => 557,  128 => 554,  126 => 553,  124 => 552,  122 => 551,  120 => 65,  113 => 61,  109 => 59,  106 => 58,  103 => 57,  100 => 56,  97 => 54,  95 => 52,  94 => 51,  92 => 50,  89 => 49,  86 => 48,  83 => 47,  80 => 46,  77 => 45,  75 => 44,  70 => 42,  66 => 41,  63 => 40,  59 => 38,  57 => 37,  55 => 36,  53 => 35,  50 => 34,  48 => 33,  45 => 32,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "generic_show_form.html.twig", "/Users/alvarozuculajunior/BCX/glpi/templates/generic_show_form.html.twig");
    }
}
