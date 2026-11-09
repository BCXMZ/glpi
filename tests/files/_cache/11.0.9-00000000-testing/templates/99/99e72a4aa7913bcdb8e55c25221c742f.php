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

/* dropdown_form.html.twig */
class __TwigTemplate_a0784ca90db3c9abe7dcb61f64f4573b extends Template
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
<div class=\"asset\">
    ";
        // line 36
        yield (string) Twig\Extension\CoreExtension::include($this->env, $context, "components/form/header.html.twig");
        yield "
    ";
        // line 37
        $context["rand"] = Twig\Extension\CoreExtension::random($this->env->getCharset());
        // line 38
        yield "    ";
        $context["base_fields_params"] = (((array_key_exists("fields_params", $context) &&  !(null === $context["fields_params"]))) ? ($context["fields_params"]) : ([]));
        // line 39
        yield "    ";
        $context["params"] = (((array_key_exists("params", $context) &&  !(null === $context["params"]))) ? ($context["params"]) : ([]));
        // line 40
        yield "    ";
        $context["target"] = (((CoreExtension::getAttribute($this->env, $this->source, ($context["params"] ?? null), "target", [], "array", true, true, false, 40) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["params"]) || array_key_exists("params", $context) ? $context["params"] : (function () { throw new RuntimeError('Variable "params" does not exist.', 40, $this->source); })()), "target", [], "array", false, false, false, 40)))) ? (CoreExtension::getAttribute($this->env, $this->source, (isset($context["params"]) || array_key_exists("params", $context) ? $context["params"] : (function () { throw new RuntimeError('Variable "params" does not exist.', 40, $this->source); })()), "target", [], "array", false, false, false, 40)) : (CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 40, $this->source); })()), "getFormURL", [], "method", false, false, false, 40)));
        // line 41
        yield "    ";
        $context["withtemplate"] = (((CoreExtension::getAttribute($this->env, $this->source, ($context["params"] ?? null), "withtemplate", [], "array", true, true, false, 41) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["params"]) || array_key_exists("params", $context) ? $context["params"] : (function () { throw new RuntimeError('Variable "params" does not exist.', 41, $this->source); })()), "withtemplate", [], "array", false, false, false, 41)))) ? (CoreExtension::getAttribute($this->env, $this->source, (isset($context["params"]) || array_key_exists("params", $context) ? $context["params"] : (function () { throw new RuntimeError('Variable "params" does not exist.', 41, $this->source); })()), "withtemplate", [], "array", false, false, false, 41)) : (""));
        // line 42
        yield "
    <div class=\"card-body row\">
        ";
        // line 44
        yield from $this->unwrap()->yieldBlock('form_fields', $context, $blocks);
        // line 246
        yield "        ";
        yield from $this->unwrap()->yieldBlock('more_fields', $context, $blocks);
        // line 248
        yield "    </div>
    ";
        // line 249
        yield (string) Twig\Extension\CoreExtension::include($this->env, $context, "components/form/buttons.html.twig");
        yield "
</div>
";
        yield from [];
    }

    // line 44
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_form_fields(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 45
        yield "            ";
        $context["picture_fields"] = ["picture_front", "picture_rear", "pictures"];
        // line 46
        yield "            ";
        $context["has_picture_field"] = false;
        // line 47
        yield "
            ";
        // line 49
        yield "            ";
        yield (string) $macros["fields"]->getTemplateForMacro("macro_autoNameField", $context, 49, $this->getSourceContext())->macro_autoNameField(...[(((($tmp = CoreExtension::getAttribute($this->env, $this->source,         // line 50
(isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 50, $this->source); })()), "isField", ["designation"], "method", false, false, false, 50)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("designation") : ("name")),         // line 51
(isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 51, $this->source); })()), __("Name"),         // line 53
(isset($context["withtemplate"]) || array_key_exists("withtemplate", $context) ? $context["withtemplate"] : (function () { throw new RuntimeError('Variable "withtemplate" does not exist.', 53, $this->source); })())]);
        // line 54
        yield "

            ";
        // line 56
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 56, $this->source); })()), "isField", ["comment"], "method", false, false, false, 56)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 57
            yield "                ";
            yield (string) $macros["fields"]->getTemplateForMacro("macro_textareaField", $context, 57, $this->getSourceContext())->macro_textareaField(...["comment", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,             // line 59
(isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 59, $this->source); })()), "fields", [], "any", false, false, false, 59), "comment", [], "array", false, false, false, 59), _n("Comment", "Comments", Session::getPluralNumber())]);
            // line 61
            yield "
            ";
        }
        // line 63
        yield "
            ";
        // line 65
        yield "            ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["additional_fields"]) || array_key_exists("additional_fields", $context) ? $context["additional_fields"] : (function () { throw new RuntimeError('Variable "additional_fields" does not exist.', 65, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
            // line 66
            yield "                ";
            $context["fields_params"] = Twig\Extension\CoreExtension::merge((isset($context["base_fields_params"]) || array_key_exists("base_fields_params", $context) ? $context["base_fields_params"] : (function () { throw new RuntimeError('Variable "base_fields_params" does not exist.', 66, $this->source); })()), (((CoreExtension::getAttribute($this->env, $this->source, $context["field"], "form_params", [], "array", true, true, false, 66) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["field"], "form_params", [], "array", false, false, false, 66)))) ? (CoreExtension::getAttribute($this->env, $this->source, $context["field"], "form_params", [], "array", false, false, false, 66)) : ([])));
            // line 67
            yield "                ";
            $context["type"] = ((CoreExtension::getAttribute($this->env, $this->source, $context["field"], "type", [], "array", true, true, false, 67)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["field"], "type", [], "array", false, false, false, 67), "")) : (""));
            // line 68
            yield "                ";
            $context["show_field"] = true;
            // line 69
            yield "                ";
            if (((CoreExtension::getAttribute($this->env, $this->source, $context["field"], "name", [], "array", false, false, false, 69) == "entities_id") && (((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 69, $this->source); })()) != "parent") || (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 69, $this->source); })()), "fields", [], "any", false, false, false, 69), "id", [], "array", false, false, false, 69) == 0)))) {
                // line 70
                yield "                    ";
                // line 71
                yield "                    ";
                $context["show_field"] = false;
                // line 72
                yield "                ";
            }
            // line 73
            yield "                ";
            if (CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, $context["field"], "name", [], "array", false, false, false, 73), (isset($context["picture_fields"]) || array_key_exists("picture_fields", $context) ? $context["picture_fields"] : (function () { throw new RuntimeError('Variable "picture_fields" does not exist.', 73, $this->source); })()))) {
                // line 74
                yield "                    ";
                $context["show_field"] = false;
                // line 75
                yield "                ";
            }
            // line 76
            yield "                ";
            if ((($tmp = (isset($context["show_field"]) || array_key_exists("show_field", $context) ? $context["show_field"] : (function () { throw new RuntimeError('Variable "show_field" does not exist.', 76, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 77
                yield "
                    ";
                // line 78
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["field"], "name", [], "array", false, false, false, 78) == "header")) {
                    // line 79
                    yield "                        ";
                    yield (string) $macros["fields"]->getTemplateForMacro("macro_largeTitle", $context, 79, $this->getSourceContext())->macro_largeTitle(...[CoreExtension::getAttribute($this->env, $this->source, $context["field"], "label", [], "array", false, false, false, 79)]);
                    yield "
                    ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 80
$context["field"], "name", [], "array", false, false, false, 80) == "content")) {
                    // line 81
                    yield "                        ";
                    yield (string) $macros["fields"]->getTemplateForMacro("macro_textareaField", $context, 81, $this->getSourceContext())->macro_textareaField(...["content", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,                     // line 83
(isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 83, $this->source); })()), "fields", [], "any", false, false, false, 83), "content", [], "array", false, false, false, 83), CoreExtension::getAttribute($this->env, $this->source,                     // line 84
$context["field"], "label", [], "array", false, false, false, 84), ["full_width" => true, "is_horizontal" => false, "enable_richtext" => ((CoreExtension::getAttribute($this->env, $this->source,                     // line 88
$context["field"], "enable_richtext", [], "array", true, true, false, 88)) ? (CoreExtension::getAttribute($this->env, $this->source, $context["field"], "enable_richtext", [], "array", false, false, false, 88)) : (true))]]);
                    // line 90
                    yield "
                    ";
                } elseif ((                // line 91
(isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 91, $this->source); })()) == "UserDropdown")) {
                    // line 92
                    yield "                        ";
                    yield (string) $macros["fields"]->getTemplateForMacro("macro_dropdownField", $context, 92, $this->getSourceContext())->macro_dropdownField(...["User", CoreExtension::getAttribute($this->env, $this->source,                     // line 94
$context["field"], "name", [], "array", false, false, false, 94), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,                     // line 95
(isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 95, $this->source); })()), "fields", [], "any", false, false, false, 95), CoreExtension::getAttribute($this->env, $this->source, $context["field"], "name", [], "array", false, false, false, 95), [], "array", false, false, false, 95), CoreExtension::getAttribute($this->env, $this->source,                     // line 96
$context["field"], "label", [], "array", false, false, false, 96), ["entity" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,                     // line 98
(isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 98, $this->source); })()), "fields", [], "any", false, false, false, 98), "entities_id", [], "array", false, false, false, 98), "right" => ((CoreExtension::getAttribute($this->env, $this->source,                     // line 99
$context["field"], "right", [], "array", true, true, false, 99)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["field"], "right", [], "array", false, false, false, 99), "interface")) : ("interface")), "rand" =>                     // line 100
(isset($context["rand"]) || array_key_exists("rand", $context) ? $context["rand"] : (function () { throw new RuntimeError('Variable "rand" does not exist.', 100, $this->source); })())]]);
                    // line 102
                    yield "
                    ";
                } elseif ((                // line 103
(isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 103, $this->source); })()) == "dropdownValue")) {
                    // line 104
                    yield "                        ";
                    $context["dropdown_params"] = ["entity" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,                     // line 105
(isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 105, $this->source); })()), "fields", [], "any", false, false, false, 105), "entities_id", [], "array", false, false, false, 105)];
                    // line 107
                    yield "                        ";
                    if (CoreExtension::getAttribute($this->env, $this->source, $context["field"], "condition", [], "array", true, true, false, 107)) {
                        // line 108
                        yield "                            ";
                        $context["dropdown_params"] = Twig\Extension\CoreExtension::merge((isset($context["dropdown_params"]) || array_key_exists("dropdown_params", $context) ? $context["dropdown_params"] : (function () { throw new RuntimeError('Variable "dropdown_params" does not exist.', 108, $this->source); })()), ["condition" => CoreExtension::getAttribute($this->env, $this->source, $context["field"], "condition", [], "array", false, false, false, 108)]);
                        // line 109
                        yield "                        ";
                    }
                    // line 110
                    yield "                        ";
                    $context["dropdown_itemtype"] = $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("getItemtypeForForeignKeyField", [CoreExtension::getAttribute($this->env, $this->source, $context["field"], "name", [], "array", false, false, false, 110)]);
                    // line 111
                    yield "                        ";
                    yield (string) $macros["fields"]->getTemplateForMacro("macro_dropdownField", $context, 111, $this->getSourceContext())->macro_dropdownField(...[(isset($context["dropdown_itemtype"]) || array_key_exists("dropdown_itemtype", $context) ? $context["dropdown_itemtype"] : (function () { throw new RuntimeError('Variable "dropdown_itemtype" does not exist.', 111, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, $context["field"], "name", [], "array", false, false, false, 111), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 111, $this->source); })()), "fields", [], "any", false, false, false, 111), CoreExtension::getAttribute($this->env, $this->source, $context["field"], "name", [], "array", false, false, false, 111), [], "array", false, false, false, 111), CoreExtension::getAttribute($this->env, $this->source, $context["field"], "label", [], "array", false, false, false, 111), (isset($context["dropdown_params"]) || array_key_exists("dropdown_params", $context) ? $context["dropdown_params"] : (function () { throw new RuntimeError('Variable "dropdown_params" does not exist.', 111, $this->source); })())]);
                    yield "
                    ";
                } elseif ((                // line 112
(isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 112, $this->source); })()) == "text")) {
                    // line 113
                    yield "                        ";
                    yield (string) $macros["fields"]->getTemplateForMacro("macro_autoNameField", $context, 113, $this->getSourceContext())->macro_autoNameField(...[CoreExtension::getAttribute($this->env, $this->source, $context["field"], "name", [], "array", false, false, false, 113), (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 113, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, $context["field"], "label", [], "array", false, false, false, 113), (isset($context["withtemplate"]) || array_key_exists("withtemplate", $context) ? $context["withtemplate"] : (function () { throw new RuntimeError('Variable "withtemplate" does not exist.', 113, $this->source); })()), (isset($context["fields_params"]) || array_key_exists("fields_params", $context) ? $context["fields_params"] : (function () { throw new RuntimeError('Variable "fields_params" does not exist.', 113, $this->source); })())]);
                    yield "
                    ";
                } elseif ((                // line 114
(isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 114, $this->source); })()) == "textarea")) {
                    // line 115
                    yield "                        ";
                    yield (string) $macros["fields"]->getTemplateForMacro("macro_textareaField", $context, 115, $this->getSourceContext())->macro_textareaField(...[CoreExtension::getAttribute($this->env, $this->source, $context["field"], "name", [], "array", false, false, false, 115), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 115, $this->source); })()), "fields", [], "any", false, false, false, 115), CoreExtension::getAttribute($this->env, $this->source, $context["field"], "name", [], "array", false, false, false, 115), [], "array", false, false, false, 115), CoreExtension::getAttribute($this->env, $this->source, $context["field"], "label", [], "array", false, false, false, 115), (isset($context["fields_params"]) || array_key_exists("fields_params", $context) ? $context["fields_params"] : (function () { throw new RuntimeError('Variable "fields_params" does not exist.', 115, $this->source); })())]);
                    yield "
                    ";
                } elseif ((                // line 116
(isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 116, $this->source); })()) == "illustration")) {
                    // line 117
                    yield "                        ";
                    yield (string) $macros["fields"]->getTemplateForMacro("macro_illustrationField", $context, 117, $this->getSourceContext())->macro_illustrationField(...[CoreExtension::getAttribute($this->env, $this->source,                     // line 118
$context["field"], "name", [], "array", false, false, false, 118), ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,                     // line 119
($context["item"] ?? null), "fields", [], "any", false, true, false, 119), CoreExtension::getAttribute($this->env, $this->source, $context["field"], "name", [], "array", false, false, false, 119), [], "array", true, true, false, 119)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 119, $this->source); })()), "fields", [], "any", false, false, false, 119), CoreExtension::getAttribute($this->env, $this->source, $context["field"], "name", [], "array", false, false, false, 119), [], "array", false, false, false, 119), Twig\Extension\CoreExtension::constant("Glpi\\UI\\IllustrationManager::DEFAULT_ILLUSTRATION"))) : (Twig\Extension\CoreExtension::constant("Glpi\\UI\\IllustrationManager::DEFAULT_ILLUSTRATION"))), CoreExtension::getAttribute($this->env, $this->source,                     // line 120
$context["field"], "label", [], "array", false, false, false, 120)]);
                    // line 121
                    yield "
                    ";
                } elseif ((                // line 122
(isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 122, $this->source); })()) == "integer")) {
                    // line 123
                    yield "                        ";
                    $context["fields_params"] = ["value" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,                     // line 124
(isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 124, $this->source); })()), "fields", [], "any", false, false, false, 124), CoreExtension::getAttribute($this->env, $this->source, $context["field"], "name", [], "array", false, false, false, 124), [], "array", false, false, false, 124)];
                    // line 126
                    yield "                        ";
                    if (CoreExtension::getAttribute($this->env, $this->source, $context["field"], "min", [], "array", true, true, false, 126)) {
                        // line 127
                        yield "                            ";
                        $context["fields_params"] = Twig\Extension\CoreExtension::merge((isset($context["fields_params"]) || array_key_exists("fields_params", $context) ? $context["fields_params"] : (function () { throw new RuntimeError('Variable "fields_params" does not exist.', 127, $this->source); })()), ["min" => CoreExtension::getAttribute($this->env, $this->source, $context["field"], "min", [], "array", false, false, false, 127)]);
                        // line 128
                        yield "                        ";
                    }
                    // line 129
                    yield "                        ";
                    if (CoreExtension::getAttribute($this->env, $this->source, $context["field"], "step", [], "array", true, true, false, 129)) {
                        // line 130
                        yield "                            ";
                        $context["fields_params"] = Twig\Extension\CoreExtension::merge((isset($context["fields_params"]) || array_key_exists("fields_params", $context) ? $context["fields_params"] : (function () { throw new RuntimeError('Variable "fields_params" does not exist.', 130, $this->source); })()), ["step" => CoreExtension::getAttribute($this->env, $this->source, $context["field"], "step", [], "array", false, false, false, 130)]);
                        // line 131
                        yield "                        ";
                    }
                    // line 132
                    yield "                        ";
                    if (CoreExtension::getAttribute($this->env, $this->source, $context["field"], "max", [], "array", true, true, false, 132)) {
                        // line 133
                        yield "                            ";
                        $context["fields_params"] = Twig\Extension\CoreExtension::merge((isset($context["fields_params"]) || array_key_exists("fields_params", $context) ? $context["fields_params"] : (function () { throw new RuntimeError('Variable "fields_params" does not exist.', 133, $this->source); })()), ["max" => CoreExtension::getAttribute($this->env, $this->source, $context["field"], "max", [], "array", false, false, false, 133)]);
                        // line 134
                        yield "                        ";
                    }
                    // line 135
                    yield "
                        ";
                    // line 136
                    $context["fields_params"] = Twig\Extension\CoreExtension::merge((isset($context["fields_params"]) || array_key_exists("fields_params", $context) ? $context["fields_params"] : (function () { throw new RuntimeError('Variable "fields_params" does not exist.', 136, $this->source); })()), ["type" => "number"]);
                    // line 137
                    yield "                        ";
                    yield (string) $macros["fields"]->getTemplateForMacro("macro_numberField", $context, 137, $this->getSourceContext())->macro_numberField(...[CoreExtension::getAttribute($this->env, $this->source, $context["field"], "name", [], "array", false, false, false, 137), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 137, $this->source); })()), "fields", [], "any", false, false, false, 137), CoreExtension::getAttribute($this->env, $this->source, $context["field"], "name", [], "array", false, false, false, 137), [], "array", false, false, false, 137), CoreExtension::getAttribute($this->env, $this->source, $context["field"], "label", [], "array", false, false, false, 137), (isset($context["fields_params"]) || array_key_exists("fields_params", $context) ? $context["fields_params"] : (function () { throw new RuntimeError('Variable "fields_params" does not exist.', 137, $this->source); })())]);
                    yield "
                    ";
                } elseif ((                // line 138
(isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 138, $this->source); })()) == "timestamp")) {
                    // line 139
                    yield "                        ";
                    $context["fields_params"] = ["value" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 139, $this->source); })()), "fields", [], "any", false, false, false, 139), CoreExtension::getAttribute($this->env, $this->source, $context["field"], "name", [], "array", false, false, false, 139), [], "array", false, false, false, 139)];
                    // line 140
                    yield "                        ";
                    if (CoreExtension::getAttribute($this->env, $this->source, $context["field"], "min", [], "array", true, true, false, 140)) {
                        // line 141
                        yield "                            ";
                        $context["fields_params"] = Twig\Extension\CoreExtension::merge((isset($context["fields_params"]) || array_key_exists("fields_params", $context) ? $context["fields_params"] : (function () { throw new RuntimeError('Variable "fields_params" does not exist.', 141, $this->source); })()), ["min" => CoreExtension::getAttribute($this->env, $this->source, $context["field"], "min", [], "array", false, false, false, 141)]);
                        // line 142
                        yield "                        ";
                    }
                    // line 143
                    yield "                        ";
                    if (CoreExtension::getAttribute($this->env, $this->source, $context["field"], "step", [], "array", true, true, false, 143)) {
                        // line 144
                        yield "                            ";
                        $context["fields_params"] = Twig\Extension\CoreExtension::merge((isset($context["fields_params"]) || array_key_exists("fields_params", $context) ? $context["fields_params"] : (function () { throw new RuntimeError('Variable "fields_params" does not exist.', 144, $this->source); })()), ["step" => CoreExtension::getAttribute($this->env, $this->source, $context["field"], "step", [], "array", false, false, false, 144)]);
                        // line 145
                        yield "                        ";
                    }
                    // line 146
                    yield "                        ";
                    if (CoreExtension::getAttribute($this->env, $this->source, $context["field"], "max", [], "array", true, true, false, 146)) {
                        // line 147
                        yield "                            ";
                        $context["fields_params"] = Twig\Extension\CoreExtension::merge((isset($context["fields_params"]) || array_key_exists("fields_params", $context) ? $context["fields_params"] : (function () { throw new RuntimeError('Variable "fields_params" does not exist.', 147, $this->source); })()), ["max" => CoreExtension::getAttribute($this->env, $this->source, $context["field"], "max", [], "array", false, false, false, 147)]);
                        // line 148
                        yield "                        ";
                    }
                    // line 149
                    yield "                        ";
                    yield (string) $macros["fields"]->getTemplateForMacro("macro_dropdownTimestampField", $context, 149, $this->getSourceContext())->macro_dropdownTimestampField(...[CoreExtension::getAttribute($this->env, $this->source, $context["field"], "name", [], "array", false, false, false, 149), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 149, $this->source); })()), "fields", [], "any", false, false, false, 149), CoreExtension::getAttribute($this->env, $this->source, $context["field"], "name", [], "array", false, false, false, 149), [], "array", false, false, false, 149), CoreExtension::getAttribute($this->env, $this->source, $context["field"], "label", [], "array", false, false, false, 149), (isset($context["fields_params"]) || array_key_exists("fields_params", $context) ? $context["fields_params"] : (function () { throw new RuntimeError('Variable "fields_params" does not exist.', 149, $this->source); })())]);
                    yield "
                    ";
                } elseif ((                // line 150
(isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 150, $this->source); })()) == "parent")) {
                    // line 151
                    yield "                        ";
                    $context["restrict"] = (((CoreExtension::getAttribute($this->env, $this->source, $context["field"], "name", [], "array", false, false, false, 151) == "entities_id")) ? ( -1) : (CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 151, $this->source); })()), "getEntityID", [], "method", false, false, false, 151)));
                    // line 152
                    yield "                        ";
                    $context["fields_params"] = Twig\Extension\CoreExtension::merge((isset($context["fields_params"]) || array_key_exists("fields_params", $context) ? $context["fields_params"] : (function () { throw new RuntimeError('Variable "fields_params" does not exist.', 152, $this->source); })()), ["entity" => (isset($context["restrict"]) || array_key_exists("restrict", $context) ? $context["restrict"] : (function () { throw new RuntimeError('Variable "restrict" does not exist.', 152, $this->source); })())]);
                    // line 153
                    yield "                        ";
                    $context["fields_params"] = Twig\Extension\CoreExtension::merge((isset($context["fields_params"]) || array_key_exists("fields_params", $context) ? $context["fields_params"] : (function () { throw new RuntimeError('Variable "fields_params" does not exist.', 153, $this->source); })()), ["used" => (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 153, $this->source); })()), "fields", [], "any", false, false, false, 153), "id", [], "array", false, false, false, 153) > 0)) ? ($this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("getSonsOf", [CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 153, $this->source); })()), "getTable", [], "method", false, false, false, 153), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 153, $this->source); })()), "fields", [], "any", false, false, false, 153), "id", [], "array", false, false, false, 153)])) : ([]))]);
                    // line 154
                    yield "                        ";
                    yield (string) $macros["fields"]->getTemplateForMacro("macro_dropdownField", $context, 154, $this->getSourceContext())->macro_dropdownField(...[(isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 154, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, $context["field"], "name", [], "array", false, false, false, 154), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 154, $this->source); })()), "fields", [], "any", false, false, false, 154), CoreExtension::getAttribute($this->env, $this->source, $context["field"], "name", [], "array", false, false, false, 154), [], "array", false, false, false, 154), CoreExtension::getAttribute($this->env, $this->source, $context["field"], "label", [], "array", false, false, false, 154), (isset($context["fields_params"]) || array_key_exists("fields_params", $context) ? $context["fields_params"] : (function () { throw new RuntimeError('Variable "fields_params" does not exist.', 154, $this->source); })())]);
                    yield "
                    ";
                } elseif ((                // line 155
(isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 155, $this->source); })()) == "icon")) {
                    // line 156
                    yield "                        ";
                    yield (string) $macros["fields"]->getTemplateForMacro("macro_dropdownIcons", $context, 156, $this->getSourceContext())->macro_dropdownIcons(...[CoreExtension::getAttribute($this->env, $this->source, $context["field"], "name", [], "array", false, false, false, 156), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 156, $this->source); })()), "fields", [], "any", false, false, false, 156), CoreExtension::getAttribute($this->env, $this->source, $context["field"], "name", [], "array", false, false, false, 156), [], "array", false, false, false, 156), CoreExtension::getAttribute($this->env, $this->source, $context["field"], "label", [], "array", false, false, false, 156), (isset($context["fields_params"]) || array_key_exists("fields_params", $context) ? $context["fields_params"] : (function () { throw new RuntimeError('Variable "fields_params" does not exist.', 156, $this->source); })())]);
                    yield "
                    ";
                } elseif ((                // line 157
(isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 157, $this->source); })()) == "bool")) {
                    // line 158
                    yield "                        ";
                    yield (string) $macros["fields"]->getTemplateForMacro("macro_dropdownYesNo", $context, 158, $this->getSourceContext())->macro_dropdownYesNo(...[CoreExtension::getAttribute($this->env, $this->source, $context["field"], "name", [], "array", false, false, false, 158), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 158, $this->source); })()), "fields", [], "any", false, false, false, 158), CoreExtension::getAttribute($this->env, $this->source, $context["field"], "name", [], "array", false, false, false, 158), [], "array", false, false, false, 158), CoreExtension::getAttribute($this->env, $this->source, $context["field"], "label", [], "array", false, false, false, 158), (isset($context["fields_params"]) || array_key_exists("fields_params", $context) ? $context["fields_params"] : (function () { throw new RuntimeError('Variable "fields_params" does not exist.', 158, $this->source); })())]);
                    yield "
                    ";
                } elseif ((                // line 159
(isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 159, $this->source); })()) == "color")) {
                    // line 160
                    yield "                        ";
                    yield (string) $macros["fields"]->getTemplateForMacro("macro_colorField", $context, 160, $this->getSourceContext())->macro_colorField(...[CoreExtension::getAttribute($this->env, $this->source, $context["field"], "name", [], "array", false, false, false, 160), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 160, $this->source); })()), "fields", [], "any", false, false, false, 160), CoreExtension::getAttribute($this->env, $this->source, $context["field"], "name", [], "array", false, false, false, 160), [], "array", false, false, false, 160), CoreExtension::getAttribute($this->env, $this->source, $context["field"], "label", [], "array", false, false, false, 160), (isset($context["fields_params"]) || array_key_exists("fields_params", $context) ? $context["fields_params"] : (function () { throw new RuntimeError('Variable "fields_params" does not exist.', 160, $this->source); })())]);
                    yield "
                    ";
                } elseif ((                // line 161
(isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 161, $this->source); })()) == "date")) {
                    // line 162
                    yield "                        ";
                    yield (string) $macros["fields"]->getTemplateForMacro("macro_dateField", $context, 162, $this->getSourceContext())->macro_dateField(...[CoreExtension::getAttribute($this->env, $this->source, $context["field"], "name", [], "array", false, false, false, 162), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 162, $this->source); })()), "fields", [], "any", false, false, false, 162), CoreExtension::getAttribute($this->env, $this->source, $context["field"], "name", [], "array", false, false, false, 162), [], "array", false, false, false, 162), CoreExtension::getAttribute($this->env, $this->source, $context["field"], "label", [], "array", false, false, false, 162), (isset($context["fields_params"]) || array_key_exists("fields_params", $context) ? $context["fields_params"] : (function () { throw new RuntimeError('Variable "fields_params" does not exist.', 162, $this->source); })())]);
                    yield "
                    ";
                } elseif ((                // line 163
(isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 163, $this->source); })()) == "datetime")) {
                    // line 164
                    yield "                        ";
                    yield (string) $macros["fields"]->getTemplateForMacro("macro_datetimeField", $context, 164, $this->getSourceContext())->macro_datetimeField(...[CoreExtension::getAttribute($this->env, $this->source, $context["field"], "name", [], "array", false, false, false, 164), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 164, $this->source); })()), "fields", [], "any", false, false, false, 164), CoreExtension::getAttribute($this->env, $this->source, $context["field"], "name", [], "array", false, false, false, 164), [], "array", false, false, false, 164), CoreExtension::getAttribute($this->env, $this->source, $context["field"], "label", [], "array", false, false, false, 164), (isset($context["fields_params"]) || array_key_exists("fields_params", $context) ? $context["fields_params"] : (function () { throw new RuntimeError('Variable "fields_params" does not exist.', 164, $this->source); })())]);
                    yield "
                    ";
                } elseif ((                // line 165
(isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 165, $this->source); })()) == "picture")) {
                    // line 166
                    yield "                        ";
                    if ( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 166, $this->source); })()), "fields", [], "any", false, false, false, 166), CoreExtension::getAttribute($this->env, $this->source, $context["field"], "name", [], "array", false, false, false, 166), [], "array", false, false, false, 166))) {
                        // line 167
                        yield "                            ";
                        yield (string) $macros["fields"]->getTemplateForMacro("macro_imageField", $context, 167, $this->getSourceContext())->macro_imageField(...[CoreExtension::getAttribute($this->env, $this->source, $context["field"], "name", [], "array", false, false, false, 167), $this->extensions['Glpi\Application\View\Extension\DataHelpersExtension']->getPictureUrl(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 167, $this->source); })()), "fields", [], "any", false, false, false, 167), CoreExtension::getAttribute($this->env, $this->source, $context["field"], "name", [], "array", false, false, false, 167), [], "array", false, false, false, 167)), CoreExtension::getAttribute($this->env, $this->source, $context["field"], "label", [], "array", false, false, false, 167), Twig\Extension\CoreExtension::merge((isset($context["fields_params"]) || array_key_exists("fields_params", $context) ? $context["fields_params"] : (function () { throw new RuntimeError('Variable "fields_params" does not exist.', 167, $this->source); })()), ["clearable" => ( !(($tmp = CoreExtension::getAttribute($this->env, $this->source,                         // line 168
(isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 168, $this->source); })()), "isNewItem", [], "method", false, false, false, 168)) && $tmp instanceof Markup ? (string) $tmp : $tmp) && (($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 168, $this->source); })()), "canUpdateItem", [], "method", false, false, false, 168)) && $tmp instanceof Markup ? (string) $tmp : $tmp))])]);
                        // line 169
                        yield "
                        ";
                    } else {
                        // line 171
                        yield "                            ";
                        yield (string) $macros["fields"]->getTemplateForMacro("macro_fileField", $context, 171, $this->getSourceContext())->macro_fileField(...[CoreExtension::getAttribute($this->env, $this->source, $context["field"], "name", [], "array", false, false, false, 171), null, CoreExtension::getAttribute($this->env, $this->source, $context["field"], "label", [], "array", false, false, false, 171), ["onlyimages" => true]]);
                        // line 173
                        yield "
                        ";
                    }
                    // line 175
                    yield "                    ";
                } elseif (((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 175, $this->source); })()) == "picture_gallery")) {
                    // line 176
                    yield "                        ";
                    $context["pictures"] = $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("importArrayFromDB", [CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 176, $this->source); })()), "fields", [], "any", false, false, false, 176), CoreExtension::getAttribute($this->env, $this->source, $context["field"], "name", [], "array", false, false, false, 176), [], "array", false, false, false, 176)]);
                    // line 177
                    yield "                        ";
                    $context["picture_urls"] = [];
                    // line 178
                    yield "                        ";
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable((isset($context["pictures"]) || array_key_exists("pictures", $context) ? $context["pictures"] : (function () { throw new RuntimeError('Variable "pictures" does not exist.', 178, $this->source); })()));
                    foreach ($context['_seq'] as $context["_key"] => $context["picture"]) {
                        // line 179
                        yield "                            ";
                        $context["picture_urls"] = Twig\Extension\CoreExtension::merge((isset($context["picture_urls"]) || array_key_exists("picture_urls", $context) ? $context["picture_urls"] : (function () { throw new RuntimeError('Variable "picture_urls" does not exist.', 179, $this->source); })()), [$this->extensions['Glpi\Application\View\Extension\DataHelpersExtension']->getPictureUrl($context["picture"])]);
                        // line 180
                        yield "                        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_key'], $context['picture'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent);
                    $context += $_parent;
                    // line 181
                    yield "                        ";
                    yield (string) $macros["fields"]->getTemplateForMacro("macro_imageGalleryField", $context, 181, $this->getSourceContext())->macro_imageGalleryField(...[CoreExtension::getAttribute($this->env, $this->source, $context["field"], "name", [], "array", false, false, false, 181), (isset($context["picture_urls"]) || array_key_exists("picture_urls", $context) ? $context["picture_urls"] : (function () { throw new RuntimeError('Variable "picture_urls" does not exist.', 181, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, $context["field"], "label", [], "array", false, false, false, 181), Twig\Extension\CoreExtension::merge((isset($context["fields_params"]) || array_key_exists("fields_params", $context) ? $context["fields_params"] : (function () { throw new RuntimeError('Variable "fields_params" does not exist.', 181, $this->source); })()), ["clearable" => ( !(($tmp = CoreExtension::getAttribute($this->env, $this->source,                     // line 182
(isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 182, $this->source); })()), "isNewItem", [], "method", false, false, false, 182)) && $tmp instanceof Markup ? (string) $tmp : $tmp) && (($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 182, $this->source); })()), "canUpdateItem", [], "method", false, false, false, 182)) && $tmp instanceof Markup ? (string) $tmp : $tmp))])]);
                    // line 183
                    yield "
                    ";
                } elseif ((                // line 184
(isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 184, $this->source); })()) == "password")) {
                    // line 185
                    yield "                        ";
                    yield (string) $macros["fields"]->getTemplateForMacro("macro_passwordField", $context, 185, $this->getSourceContext())->macro_passwordField(...[CoreExtension::getAttribute($this->env, $this->source, $context["field"], "name", [], "array", false, false, false, 185), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 185, $this->source); })()), "fields", [], "any", false, false, false, 185), CoreExtension::getAttribute($this->env, $this->source, $context["field"], "name", [], "array", false, false, false, 185), [], "array", false, false, false, 185), CoreExtension::getAttribute($this->env, $this->source, $context["field"], "label", [], "array", false, false, false, 185), (isset($context["fields_params"]) || array_key_exists("fields_params", $context) ? $context["fields_params"] : (function () { throw new RuntimeError('Variable "fields_params" does not exist.', 185, $this->source); })())]);
                    yield "
                    ";
                } elseif ((                // line 186
(isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 186, $this->source); })()) == "tinymce")) {
                    // line 187
                    yield "                        ";
                    $context["fields_params"] = Twig\Extension\CoreExtension::merge(["enable_richtext" => true, "full_width" => true], (isset($context["fields_params"]) || array_key_exists("fields_params", $context) ? $context["fields_params"] : (function () { throw new RuntimeError('Variable "fields_params" does not exist.', 187, $this->source); })()));
                    // line 188
                    yield "                        ";
                    yield (string) $macros["fields"]->getTemplateForMacro("macro_textareaField", $context, 188, $this->getSourceContext())->macro_textareaField(...[CoreExtension::getAttribute($this->env, $this->source, $context["field"], "name", [], "array", false, false, false, 188), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 188, $this->source); })()), "fields", [], "any", false, false, false, 188), CoreExtension::getAttribute($this->env, $this->source, $context["field"], "name", [], "array", false, false, false, 188), [], "array", false, false, false, 188), CoreExtension::getAttribute($this->env, $this->source, $context["field"], "label", [], "array", false, false, false, 188), (isset($context["fields_params"]) || array_key_exists("fields_params", $context) ? $context["fields_params"] : (function () { throw new RuntimeError('Variable "fields_params" does not exist.', 188, $this->source); })())]);
                    yield "
                    ";
                } elseif ((                // line 189
(isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 189, $this->source); })()) == "duration")) {
                    // line 190
                    yield "                        ";
                    $context["toadd"] = [];
                    // line 191
                    yield "                        ";
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(range(9, 100));
                    foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                        // line 192
                        yield "                            ";
                        $context["toadd"] = Twig\Extension\CoreExtension::merge((isset($context["toadd"]) || array_key_exists("toadd", $context) ? $context["toadd"] : (function () { throw new RuntimeError('Variable "toadd" does not exist.', 192, $this->source); })()), [($context["i"] * Twig\Extension\CoreExtension::constant("HOUR_TIMESTAMP"))]);
                        // line 193
                        yield "                        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_key'], $context['i'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent);
                    $context += $_parent;
                    // line 194
                    yield "                        ";
                    yield (string) $macros["fields"]->getTemplateForMacro("macro_dropdownTimestampField", $context, 194, $this->getSourceContext())->macro_dropdownTimestampField(...[CoreExtension::getAttribute($this->env, $this->source, $context["field"], "name", [], "array", false, false, false, 194), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 194, $this->source); })()), "fields", [], "any", false, false, false, 194), CoreExtension::getAttribute($this->env, $this->source, $context["field"], "name", [], "array", false, false, false, 194), [], "array", false, false, false, 194), CoreExtension::getAttribute($this->env, $this->source, $context["field"], "label", [], "array", false, false, false, 194), (isset($context["fields_params"]) || array_key_exists("fields_params", $context) ? $context["fields_params"] : (function () { throw new RuntimeError('Variable "fields_params" does not exist.', 194, $this->source); })())]);
                    yield "
                    ";
                } elseif ((                // line 195
(isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 195, $this->source); })()) == "itemtypename")) {
                    // line 196
                    yield "                        ";
                    if (CoreExtension::getAttribute($this->env, $this->source, $context["field"], "itemtype_list", [], "array", true, true, false, 196)) {
                        // line 197
                        yield "                            ";
                        $context["fields_params"] = Twig\Extension\CoreExtension::merge((isset($context["fields_params"]) || array_key_exists("fields_params", $context) ? $context["fields_params"] : (function () { throw new RuntimeError('Variable "fields_params" does not exist.', 197, $this->source); })()), ["types" => $this->extensions['Glpi\Application\View\Extension\ConfigExtension']->config(CoreExtension::getAttribute($this->env, $this->source, $context["field"], "itemtype_list", [], "array", false, false, false, 197))]);
                        // line 198
                        yield "                        ";
                    }
                    // line 199
                    yield "                        ";
                    yield (string) $macros["fields"]->getTemplateForMacro("macro_dropdownItemTypes", $context, 199, $this->getSourceContext())->macro_dropdownItemTypes(...[CoreExtension::getAttribute($this->env, $this->source, $context["field"], "name", [], "array", false, false, false, 199), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 199, $this->source); })()), "fields", [], "any", false, false, false, 199), CoreExtension::getAttribute($this->env, $this->source, $context["field"], "name", [], "array", false, false, false, 199), [], "array", false, false, false, 199), CoreExtension::getAttribute($this->env, $this->source, $context["field"], "label", [], "array", false, false, false, 199), (isset($context["fields_params"]) || array_key_exists("fields_params", $context) ? $context["fields_params"] : (function () { throw new RuntimeError('Variable "fields_params" does not exist.', 199, $this->source); })())]);
                    yield "
                    ";
                } else {
                    // line 201
                    yield "                        ";
                    $context["field_value"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                        // line 202
                        yield "                            ";
                        yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 202, $this->source); })()), "displaySpecificTypeField", [CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 202, $this->source); })()), "fields", [], "any", false, false, false, 202), "id", [], "array", false, false, false, 202), $context["field"], (isset($context["fields_params"]) || array_key_exists("fields_params", $context) ? $context["fields_params"] : (function () { throw new RuntimeError('Variable "fields_params" does not exist.', 202, $this->source); })())], "method", false, false, false, 202), "html", null, true);
                        yield "
                        ";
                        yield from [];
                    })())) ? '' : new Markup($tmp, $this->env->getCharset());
                    // line 204
                    yield "                        ";
                    yield (string) $macros["fields"]->getTemplateForMacro("macro_field", $context, 204, $this->getSourceContext())->macro_field(...[CoreExtension::getAttribute($this->env, $this->source, $context["field"], "name", [], "array", false, false, false, 204), (isset($context["field_value"]) || array_key_exists("field_value", $context) ? $context["field_value"] : (function () { throw new RuntimeError('Variable "field_value" does not exist.', 204, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, $context["field"], "label", [], "array", false, false, false, 204), (isset($context["fields_params"]) || array_key_exists("fields_params", $context) ? $context["fields_params"] : (function () { throw new RuntimeError('Variable "fields_params" does not exist.', 204, $this->source); })())]);
                    yield "
                    ";
                }
                // line 206
                yield "                ";
            } elseif (CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, $context["field"], "name", [], "array", false, false, false, 206), (isset($context["picture_fields"]) || array_key_exists("picture_fields", $context) ? $context["picture_fields"] : (function () { throw new RuntimeError('Variable "picture_fields" does not exist.', 206, $this->source); })()))) {
                // line 207
                yield "                    ";
                $context["has_picture_field"] = true;
                // line 208
                yield "                ";
            }
            // line 209
            yield "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['field'], $context['_parent']);
        $context = array_intersect_key($context, $_parent);
        $context += $_parent;
        // line 210
        yield "
            ";
        // line 211
        if ((($tmp = (isset($context["has_picture_field"]) || array_key_exists("has_picture_field", $context) ? $context["has_picture_field"] : (function () { throw new RuntimeError('Variable "has_picture_field" does not exist.', 211, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 212
            yield "                ";
            yield (string) $macros["fields"]->getTemplateForMacro("macro_largeTitle", $context, 212, $this->getSourceContext())->macro_largeTitle(...[_n("Picture", "Pictures", Session::getPluralNumber()), "ti ti-photo"]);
            yield "
            ";
        }
        // line 214
        yield "            ";
        // line 215
        yield "            ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["additional_fields"]) || array_key_exists("additional_fields", $context) ? $context["additional_fields"] : (function () { throw new RuntimeError('Variable "additional_fields" does not exist.', 215, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
            // line 216
            yield "                ";
            $context["type"] = ((CoreExtension::getAttribute($this->env, $this->source, $context["field"], "type", [], "array", true, true, false, 216)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["field"], "type", [], "array", false, false, false, 216), "")) : (""));
            // line 217
            yield "                ";
            if (CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, $context["field"], "name", [], "array", false, false, false, 217), (isset($context["picture_fields"]) || array_key_exists("picture_fields", $context) ? $context["picture_fields"] : (function () { throw new RuntimeError('Variable "picture_fields" does not exist.', 217, $this->source); })()))) {
                // line 218
                yield "                    ";
                if (((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 218, $this->source); })()) == "picture")) {
                    // line 219
                    yield "                        ";
                    if ((CoreExtension::getAttribute($this->env, $this->source, $context["field"], "name", [], "array", false, false, false, 219) == "picture_front")) {
                        // line 220
                        yield "                            ";
                        yield (string) $macros["fields"]->getTemplateForMacro("macro_smallTitle", $context, 220, $this->getSourceContext())->macro_smallTitle(...[__("Rack pictures"), $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeIcon("Rack")]);
                        yield "
                        ";
                    }
                    // line 222
                    yield "                        ";
                    if ( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 222, $this->source); })()), "fields", [], "any", false, false, false, 222), CoreExtension::getAttribute($this->env, $this->source, $context["field"], "name", [], "array", false, false, false, 222), [], "array", false, false, false, 222))) {
                        // line 223
                        yield "                            ";
                        yield (string) $macros["fields"]->getTemplateForMacro("macro_imageField", $context, 223, $this->getSourceContext())->macro_imageField(...[CoreExtension::getAttribute($this->env, $this->source, $context["field"], "name", [], "array", false, false, false, 223), $this->extensions['Glpi\Application\View\Extension\DataHelpersExtension']->getPictureUrl(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 223, $this->source); })()), "fields", [], "any", false, false, false, 223), CoreExtension::getAttribute($this->env, $this->source, $context["field"], "name", [], "array", false, false, false, 223), [], "array", false, false, false, 223)), CoreExtension::getAttribute($this->env, $this->source, $context["field"], "label", [], "array", false, false, false, 223), Twig\Extension\CoreExtension::merge((isset($context["base_fields_params"]) || array_key_exists("base_fields_params", $context) ? $context["base_fields_params"] : (function () { throw new RuntimeError('Variable "base_fields_params" does not exist.', 223, $this->source); })()), ["clearable" => CoreExtension::getAttribute($this->env, $this->source,                         // line 224
(isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 224, $this->source); })()), "canUpdateItem", [], "method", false, false, false, 224)])]);
                        // line 225
                        yield "
                        ";
                    } else {
                        // line 227
                        yield "                            ";
                        yield (string) $macros["fields"]->getTemplateForMacro("macro_fileField", $context, 227, $this->getSourceContext())->macro_fileField(...[CoreExtension::getAttribute($this->env, $this->source, $context["field"], "name", [], "array", false, false, false, 227), null, CoreExtension::getAttribute($this->env, $this->source, $context["field"], "label", [], "array", false, false, false, 227), ["onlyimages" => true]]);
                        // line 229
                        yield "
                        ";
                    }
                    // line 231
                    yield "                    ";
                } elseif (((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 231, $this->source); })()) == "picture_gallery")) {
                    // line 232
                    yield "                        ";
                    yield (string) $macros["fields"]->getTemplateForMacro("macro_smallTitle", $context, 232, $this->getSourceContext())->macro_smallTitle(...[__("Other pictures"), "ti ti-library-photo"]);
                    yield "
                        ";
                    // line 233
                    $context["pictures"] = $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("importArrayFromDB", [CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 233, $this->source); })()), "fields", [], "any", false, false, false, 233), CoreExtension::getAttribute($this->env, $this->source, $context["field"], "name", [], "array", false, false, false, 233), [], "array", false, false, false, 233)]);
                    // line 234
                    yield "                        ";
                    $context["picture_urls"] = [];
                    // line 235
                    yield "                        ";
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable((isset($context["pictures"]) || array_key_exists("pictures", $context) ? $context["pictures"] : (function () { throw new RuntimeError('Variable "pictures" does not exist.', 235, $this->source); })()));
                    foreach ($context['_seq'] as $context["_key"] => $context["picture"]) {
                        // line 236
                        yield "                            ";
                        $context["picture_urls"] = Twig\Extension\CoreExtension::merge((isset($context["picture_urls"]) || array_key_exists("picture_urls", $context) ? $context["picture_urls"] : (function () { throw new RuntimeError('Variable "picture_urls" does not exist.', 236, $this->source); })()), [$this->extensions['Glpi\Application\View\Extension\DataHelpersExtension']->getPictureUrl($context["picture"])]);
                        // line 237
                        yield "                        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_key'], $context['picture'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent);
                    $context += $_parent;
                    // line 238
                    yield "                        ";
                    yield (string) $macros["fields"]->getTemplateForMacro("macro_imageGalleryField", $context, 238, $this->getSourceContext())->macro_imageGalleryField(...[CoreExtension::getAttribute($this->env, $this->source, $context["field"], "name", [], "array", false, false, false, 238), (isset($context["picture_urls"]) || array_key_exists("picture_urls", $context) ? $context["picture_urls"] : (function () { throw new RuntimeError('Variable "picture_urls" does not exist.', 238, $this->source); })()), "", Twig\Extension\CoreExtension::merge((isset($context["base_fields_params"]) || array_key_exists("base_fields_params", $context) ? $context["base_fields_params"] : (function () { throw new RuntimeError('Variable "base_fields_params" does not exist.', 238, $this->source); })()), ["clearable" => CoreExtension::getAttribute($this->env, $this->source,                     // line 239
(isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 239, $this->source); })()), "canUpdateItem", [], "method", false, false, false, 239), "no_label" => true])]);
                    // line 241
                    yield "
                    ";
                }
                // line 243
                yield "                ";
            }
            // line 244
            yield "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['field'], $context['_parent']);
        $context = array_intersect_key($context, $_parent);
        $context += $_parent;
        // line 245
        yield "        ";
        yield from [];
    }

    // line 246
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_more_fields(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 247
        yield "        ";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "dropdown_form.html.twig";
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
        return array (  636 => 247,  629 => 246,  624 => 245,  617 => 244,  614 => 243,  610 => 241,  608 => 239,  606 => 238,  599 => 237,  596 => 236,  591 => 235,  588 => 234,  586 => 233,  581 => 232,  578 => 231,  574 => 229,  571 => 227,  567 => 225,  565 => 224,  563 => 223,  560 => 222,  554 => 220,  551 => 219,  548 => 218,  545 => 217,  542 => 216,  537 => 215,  535 => 214,  529 => 212,  527 => 211,  524 => 210,  517 => 209,  514 => 208,  511 => 207,  508 => 206,  502 => 204,  495 => 202,  492 => 201,  486 => 199,  483 => 198,  480 => 197,  477 => 196,  475 => 195,  470 => 194,  463 => 193,  460 => 192,  455 => 191,  452 => 190,  450 => 189,  445 => 188,  442 => 187,  440 => 186,  435 => 185,  433 => 184,  430 => 183,  428 => 182,  426 => 181,  419 => 180,  416 => 179,  411 => 178,  408 => 177,  405 => 176,  402 => 175,  398 => 173,  395 => 171,  391 => 169,  389 => 168,  387 => 167,  384 => 166,  382 => 165,  377 => 164,  375 => 163,  370 => 162,  368 => 161,  363 => 160,  361 => 159,  356 => 158,  354 => 157,  349 => 156,  347 => 155,  342 => 154,  339 => 153,  336 => 152,  333 => 151,  331 => 150,  326 => 149,  323 => 148,  320 => 147,  317 => 146,  314 => 145,  311 => 144,  308 => 143,  305 => 142,  302 => 141,  299 => 140,  296 => 139,  294 => 138,  289 => 137,  287 => 136,  284 => 135,  281 => 134,  278 => 133,  275 => 132,  272 => 131,  269 => 130,  266 => 129,  263 => 128,  260 => 127,  257 => 126,  255 => 124,  253 => 123,  251 => 122,  248 => 121,  246 => 120,  245 => 119,  244 => 118,  242 => 117,  240 => 116,  235 => 115,  233 => 114,  228 => 113,  226 => 112,  221 => 111,  218 => 110,  215 => 109,  212 => 108,  209 => 107,  207 => 105,  205 => 104,  203 => 103,  200 => 102,  198 => 100,  197 => 99,  196 => 98,  195 => 96,  194 => 95,  193 => 94,  191 => 92,  189 => 91,  186 => 90,  184 => 88,  183 => 84,  182 => 83,  180 => 81,  178 => 80,  173 => 79,  171 => 78,  168 => 77,  165 => 76,  162 => 75,  159 => 74,  156 => 73,  153 => 72,  150 => 71,  148 => 70,  145 => 69,  142 => 68,  139 => 67,  136 => 66,  131 => 65,  128 => 63,  124 => 61,  122 => 59,  120 => 57,  118 => 56,  114 => 54,  112 => 53,  111 => 51,  110 => 50,  108 => 49,  105 => 47,  102 => 46,  99 => 45,  92 => 44,  84 => 249,  81 => 248,  78 => 246,  76 => 44,  72 => 42,  69 => 41,  66 => 40,  63 => 39,  60 => 38,  58 => 37,  54 => 36,  50 => 34,  48 => 33,  45 => 32,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "dropdown_form.html.twig", "/Users/alvarozuculajunior/BCX/glpi/templates/dropdown_form.html.twig");
    }
}
