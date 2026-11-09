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

/* components/form/buttons.html.twig */
class __TwigTemplate_db8011b074df39c29fefa385dedd3fe2 extends Template
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
        $context["withtemplate"] = (((CoreExtension::getAttribute($this->env, $this->source, ($context["params"] ?? null), "withtemplate", [], "array", true, true, false, 33) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["params"]) || array_key_exists("params", $context) ? $context["params"] : (function () { throw new RuntimeError('Variable "params" does not exist.', 33, $this->source); })()), "withtemplate", [], "array", false, false, false, 33)))) ? (CoreExtension::getAttribute($this->env, $this->source, (isset($context["params"]) || array_key_exists("params", $context) ? $context["params"] : (function () { throw new RuntimeError('Variable "params" does not exist.', 33, $this->source); })()), "withtemplate", [], "array", false, false, false, 33)) : (""));
        // line 34
        $context["candel"] = (((CoreExtension::getAttribute($this->env, $this->source, ($context["params"] ?? null), "candel", [], "array", true, true, false, 34) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["params"]) || array_key_exists("params", $context) ? $context["params"] : (function () { throw new RuntimeError('Variable "params" does not exist.', 34, $this->source); })()), "candel", [], "array", false, false, false, 34)))) ? (CoreExtension::getAttribute($this->env, $this->source, (isset($context["params"]) || array_key_exists("params", $context) ? $context["params"] : (function () { throw new RuntimeError('Variable "params" does not exist.', 34, $this->source); })()), "candel", [], "array", false, false, false, 34)) : (true));
        // line 35
        $context["canedit"] = (((CoreExtension::getAttribute($this->env, $this->source, ($context["params"] ?? null), "canedit", [], "array", true, true, false, 35) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["params"]) || array_key_exists("params", $context) ? $context["params"] : (function () { throw new RuntimeError('Variable "params" does not exist.', 35, $this->source); })()), "canedit", [], "array", false, false, false, 35)))) ? (CoreExtension::getAttribute($this->env, $this->source, (isset($context["params"]) || array_key_exists("params", $context) ? $context["params"] : (function () { throw new RuntimeError('Variable "params" does not exist.', 35, $this->source); })()), "canedit", [], "array", false, false, false, 35)) : (true));
        // line 36
        $context["id"] = (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, true, false, 36), "id", [], "array", true, true, false, 36) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 36, $this->source); })()), "fields", [], "any", false, false, false, 36), "id", [], "array", false, false, false, 36)))) ? (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 36, $this->source); })()), "fields", [], "any", false, false, false, 36), "id", [], "array", false, false, false, 36)) : ( -1));
        // line 37
        $context["in_modal"] = ((CoreExtension::getAttribute($this->env, $this->source, ($context["params"] ?? null), "in_modal", [], "array", true, true, false, 37)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["params"]) || array_key_exists("params", $context) ? $context["params"] : (function () { throw new RuntimeError('Variable "params" does not exist.', 37, $this->source); })()), "in_modal", [], "array", false, false, false, 37), ((CoreExtension::getAttribute($this->env, $this->source, ($context["_get"] ?? null), "_in_modal", [], "any", true, true, false, 37)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["_get"]) || array_key_exists("_get", $context) ? $context["_get"] : (function () { throw new RuntimeError('Variable "_get" does not exist.', 37, $this->source); })()), "_in_modal", [], "any", false, false, false, 37), false)) : (false)))) : (((CoreExtension::getAttribute($this->env, $this->source, ($context["_get"] ?? null), "_in_modal", [], "any", true, true, false, 37)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["_get"]) || array_key_exists("_get", $context) ? $context["_get"] : (function () { throw new RuntimeError('Variable "_get" does not exist.', 37, $this->source); })()), "_in_modal", [], "any", false, false, false, 37), false)) : (false))));
        // line 38
        yield "
";
        // line 39
        if (array_key_exists("item", $context)) {
            // line 40
            yield "
     ";
            // line 41
            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\PluginExtension']->callPluginHook(Twig\Extension\CoreExtension::constant("Glpi\\Plugin\\Hooks::POST_ITEM_FORM"), ["item" => (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 41, $this->source); })()), "options" => (isset($context["params"]) || array_key_exists("params", $context) ? $context["params"] : (function () { throw new RuntimeError('Variable "params" does not exist.', 41, $this->source); })())]), "html", null, true);
            yield "

    ";
            // line 43
            if (((($tmp = (isset($context["canedit"]) || array_key_exists("canedit", $context) ? $context["canedit"] : (function () { throw new RuntimeError('Variable "canedit" does not exist.', 43, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp) || (($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 43, $this->source); })()), "canEdit", [CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 43, $this->source); })()), "fields", [], "any", false, false, false, 43), "id", [], "array", false, false, false, 43)], "method", false, false, false, 43)) && $tmp instanceof Markup ? (string) $tmp : $tmp))) {
                // line 44
                yield "      <div class=\"form-button-separator card-body mx-n2 border-top d-flex flex-row-reverse align-items-start flex-wrap  ";
                yield (string) (((($tmp = (isset($context["in_modal"]) || array_key_exists("in_modal", $context) ? $context["in_modal"] : (function () { throw new RuntimeError('Variable "in_modal" does not exist.', 44, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("p-2") : (""));
                yield "\">
         ";
                // line 45
                if ((((isset($context["withtemplate"]) || array_key_exists("withtemplate", $context) ? $context["withtemplate"] : (function () { throw new RuntimeError('Variable "withtemplate" does not exist.', 45, $this->source); })()) > 0) || (($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 45, $this->source); })()), "isNewID", [(isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 45, $this->source); })())], "method", false, false, false, 45)) && $tmp instanceof Markup ? (string) $tmp : $tmp))) {
                    // line 46
                    yield "            ";
                    if ((((isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 46, $this->source); })()) <= 0) || ((isset($context["withtemplate"]) || array_key_exists("withtemplate", $context) ? $context["withtemplate"] : (function () { throw new RuntimeError('Variable "withtemplate" does not exist.', 46, $this->source); })()) == 2))) {
                        // line 47
                        yield "               <button
                  class=\"btn btn-primary me-2\"
                  type=\"submit\"
                  name=\"add\"
                  value=\"1\"
                  aria-label=\"";
                        // line 52
                        yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(_x("button", "Add"), "html", null, true);
                        yield "\"
               >
                  <i class=\"ti ti-plus\"></i>
                  <span>";
                        // line 55
                        yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(_x("button", "Add"), "html", null, true);
                        yield "</span>
               </button>
            ";
                    } else {
                        // line 58
                        yield "               <button
                  class=\"btn btn-primary me-2\"
                  type=\"submit\"
                  name=\"update\"
                  value=\"1\"
                  aria-label=\"";
                        // line 63
                        yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(_x("button", "Save"), "html", null, true);
                        yield "\"
               >
                  <i class=\"ti ti-device-floppy\"></i>
                  <span>";
                        // line 66
                        yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(_x("button", "Save"), "html", null, true);
                        yield "</span>
               </button>
            ";
                    }
                    // line 69
                    yield "         ";
                } else {
                    // line 70
                    yield "            ";
                    if ((((($tmp = (isset($context["candel"]) || array_key_exists("candel", $context) ? $context["candel"] : (function () { throw new RuntimeError('Variable "candel" does not exist.', 70, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp) &&  !(($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 70, $this->source); })()), "can", [(isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 70, $this->source); })()), Twig\Extension\CoreExtension::constant("DELETE")], "method", false, false, false, 70)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) &&  !(($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 70, $this->source); })()), "can", [(isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 70, $this->source); })()), Twig\Extension\CoreExtension::constant("PURGE")], "method", false, false, false, 70)) && $tmp instanceof Markup ? (string) $tmp : $tmp))) {
                        // line 71
                        yield "               ";
                        $context["candel"] = false;
                        // line 72
                        yield "            ";
                    }
                    // line 73
                    yield "
            ";
                    // line 74
                    if (((($tmp = (isset($context["canedit"]) || array_key_exists("canedit", $context) ? $context["canedit"] : (function () { throw new RuntimeError('Variable "canedit" does not exist.', 74, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp) && (($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 74, $this->source); })()), "can", [(isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 74, $this->source); })()), Twig\Extension\CoreExtension::constant("UPDATE")], "method", false, false, false, 74)) && $tmp instanceof Markup ? (string) $tmp : $tmp))) {
                        // line 75
                        yield "               <button
                  class=\"btn btn-primary me-2\"
                  type=\"submit\"
                  name=\"update\"
                  value=\"1\"
                  aria-label=\"";
                        // line 80
                        yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(_x("button", "Save"), "html", null, true);
                        yield "\"
               >
                  <i class=\"ti ti-device-floppy\"></i>
                  <span>";
                        // line 83
                        yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(_x("button", "Save"), "html", null, true);
                        yield "</span>
               </button>
            ";
                    }
                    // line 86
                    yield "
            ";
                    // line 87
                    if ((($tmp = (isset($context["candel"]) || array_key_exists("candel", $context) ? $context["candel"] : (function () { throw new RuntimeError('Variable "candel" does not exist.', 87, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 88
                        yield "               ";
                        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 88, $this->source); })()), "isDeleted", [], "method", false, false, false, 88)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                            // line 89
                            yield "                  ";
                            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 89, $this->source); })()), "can", [(isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 89, $this->source); })()), Twig\Extension\CoreExtension::constant("DELETE")], "method", false, false, false, 89)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                                // line 90
                                yield "                     <button
                        class=\"btn btn-outline-secondary me-2\"
                        type=\"submit\"
                        name=\"restore\"
                        value=\"1\"
                        aria-label=\"";
                                // line 95
                                yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(_x("button", "Restore"), "html", null, true);
                                yield "\"
                     >
                        <i class=\"ti ti-trash-off\"></i>
                        <span>";
                                // line 98
                                yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(_x("button", "Restore"), "html", null, true);
                                yield "</span>
                     </button>
                  ";
                            }
                            // line 101
                            yield "
                  ";
                            // line 102
                            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 102, $this->source); })()), "can", [(isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 102, $this->source); })()), Twig\Extension\CoreExtension::constant("PURGE")], "method", false, false, false, 102)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                                // line 103
                                yield "                    ";
                                $context["item_devices"] = $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Item_Devices::getConcernedItems");
                                // line 104
                                yield "                    ";
                                $context["show_keep_devices"] = CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 104, $this->source); })()), "getType", [], "method", false, false, false, 104), (isset($context["item_devices"]) || array_key_exists("item_devices", $context) ? $context["item_devices"] : (function () { throw new RuntimeError('Variable "item_devices" does not exist.', 104, $this->source); })()));
                                // line 105
                                yield "
                    ";
                                // line 106
                                $context["span_cls"] = "";
                                // line 107
                                yield "                    ";
                                if ((($tmp = (isset($context["show_keep_devices"]) || array_key_exists("show_keep_devices", $context) ? $context["show_keep_devices"] : (function () { throw new RuntimeError('Variable "show_keep_devices" does not exist.', 107, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                                    // line 108
                                    yield "                        ";
                                    $context["span_cls"] = "border border-danger d-flex align-items-start flex-wrap p-1 px-2 me-2";
                                    // line 109
                                    yield "                    ";
                                }
                                // line 110
                                yield "
                     <span class=\"";
                                // line 111
                                yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["span_cls"]) || array_key_exists("span_cls", $context) ? $context["span_cls"] : (function () { throw new RuntimeError('Variable "span_cls" does not exist.', 111, $this->source); })()), "html", null, true);
                                yield "\">
                        <button
                           class=\"btn btn-danger me-2\"
                           type=\"submit\"
                           name=\"purge\"
                           value=\"1\"
                           onclick=\"return confirm(\x27";
                                // line 117
                                yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Confirm the final deletion?"), "js"), "html", null, true);
                                yield "\x27);\"
                           aria-label=\"";
                                // line 118
                                yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(_x("button", "Delete permanently"), "html", null, true);
                                yield "\"
                        >
                           <i class=\"ti ti-trash\"></i>
                           <span>";
                                // line 121
                                yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(_x("button", "Delete permanently"), "html", null, true);
                                yield "</span>
                        </button>
                        ";
                                // line 123
                                if ((($tmp = (isset($context["show_keep_devices"]) || array_key_exists("show_keep_devices", $context) ? $context["show_keep_devices"] : (function () { throw new RuntimeError('Variable "show_keep_devices" does not exist.', 123, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                                    // line 124
                                    yield "                            <span class=\"mt-2\">
                                <label class=\"form-check form-switch\">
                                    <input class=\"form-check-input\" type=\"checkbox\" name=\"keep_devices\" value=\"1\" />
                                    <span class=\"form-check-label text-danger\">
                                        ";
                                    // line 128
                                    yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Keep the devices while deleting this item"), "html", null, true);
                                    yield "
                                    </span>
                                </label>
                            </span>
                        ";
                                }
                                // line 133
                                yield "                     </span>
                  ";
                            }
                            // line 135
                            yield "               ";
                        } else {
                            // line 136
                            yield "                  ";
                            if (( !(($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 136, $this->source); })()), "maybeDeleted", [], "method", false, false, false, 136)) && $tmp instanceof Markup ? (string) $tmp : $tmp) || (($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 136, $this->source); })()), "useDeletedToLockIfDynamic", [], "method", false, false, false, 136)) && $tmp instanceof Markup ? (string) $tmp : $tmp))) {
                                // line 137
                                yield "                     ";
                                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 137, $this->source); })()), "can", [(isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 137, $this->source); })()), Twig\Extension\CoreExtension::constant("PURGE")], "method", false, false, false, 137)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                                    // line 138
                                    yield "                        <button
                           class=\"btn btn-outline-danger me-2\"
                           type=\"submit\"
                           name=\"purge\"
                           onclick=\"return confirm(\x27";
                                    // line 142
                                    yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Confirm the final deletion?"), "js"), "html", null, true);
                                    yield "\x27);\"
                           value=\"1\"
                           aria-label=\"";
                                    // line 144
                                    yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(_x("button", "Delete permanently"), "html", null, true);
                                    yield "\"
                        >
                           <i class=\"ti ti-trash\"></i>
                           <span>";
                                    // line 147
                                    yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(_x("button", "Delete permanently"), "html", null, true);
                                    yield "</span>
                        </button>
                     ";
                                }
                                // line 150
                                yield "                  ";
                            } elseif (( !(($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 150, $this->source); })()), "isDeleted", [], "method", false, false, false, 150)) && $tmp instanceof Markup ? (string) $tmp : $tmp) && (($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 150, $this->source); })()), "can", [(isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 150, $this->source); })()), Twig\Extension\CoreExtension::constant("DELETE")], "method", false, false, false, 150)) && $tmp instanceof Markup ? (string) $tmp : $tmp))) {
                                // line 151
                                yield "                     <button
                        class=\"btn btn-outline-warning me-2\"
                        type=\"submit\"
                        name=\"delete\"
                        value=\"1\"
                        aria-label=\"";
                                // line 156
                                yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(_x("button", "Put in trashbin"), "html", null, true);
                                yield "\"
                     >
                        <i class=\"ti ti-trash\"></i>
                        <span>";
                                // line 159
                                yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(_x("button", "Put in trashbin"), "html", null, true);
                                yield "</span>
                     </button>
                  ";
                            }
                            // line 162
                            yield "               ";
                        }
                        // line 163
                        yield "            ";
                    }
                    // line 164
                    yield "
            ";
                    // line 165
                    if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 165, $this->source); })()), "isField", ["date_mod"], "method", false, false, false, 165)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 166
                        yield "               <input type=\"hidden\" name=\"_read_date_mod\" value=\"";
                        yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 166, $this->source); })()), "fields", [], "any", false, false, false, 166), "date_mod", [], "array", false, false, false, 166), "html", null, true);
                        yield "\" />
            ";
                    }
                    // line 168
                    yield "         ";
                }
                // line 169
                yield "
         ";
                // line 170
                if ( !(($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 170, $this->source); })()), "isNewID", [(isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 170, $this->source); })())], "method", false, false, false, 170)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 171
                    yield "            <input type=\"hidden\" name=\"id\" value=\"";
                    yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 171, $this->source); })()), "html", null, true);
                    yield "\" />
         ";
                }
                // line 173
                yield "
         ";
                // line 174
                if (((($tmp = (isset($context["canedit"]) || array_key_exists("canedit", $context) ? $context["canedit"] : (function () { throw new RuntimeError('Variable "canedit" does not exist.', 174, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp) && (Twig\Extension\CoreExtension::length($this->env->getCharset(), (((CoreExtension::getAttribute($this->env, $this->source, ($context["params"] ?? null), "addbuttons", [], "array", true, true, false, 174) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["params"]) || array_key_exists("params", $context) ? $context["params"] : (function () { throw new RuntimeError('Variable "params" does not exist.', 174, $this->source); })()), "addbuttons", [], "array", false, false, false, 174)))) ? (CoreExtension::getAttribute($this->env, $this->source, (isset($context["params"]) || array_key_exists("params", $context) ? $context["params"] : (function () { throw new RuntimeError('Variable "params" does not exist.', 174, $this->source); })()), "addbuttons", [], "array", false, false, false, 174)) : ([]))) > 0))) {
                    // line 175
                    yield "            ";
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["params"]) || array_key_exists("params", $context) ? $context["params"] : (function () { throw new RuntimeError('Variable "params" does not exist.', 175, $this->source); })()), "addbuttons", [], "array", false, false, false, 175));
                    foreach ($context['_seq'] as $context["key"] => $context["val"]) {
                        // line 176
                        yield "                ";
                        if ( !Twig\Extension\CoreExtension::testEmpty((((CoreExtension::getAttribute($this->env, $this->source, $context["val"], "add_attribs", [], "any", true, true, false, 176) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["val"], "add_attribs", [], "any", false, false, false, 176)))) ? (CoreExtension::getAttribute($this->env, $this->source, $context["val"], "add_attribs", [], "any", false, false, false, 176)) : ([])))) {
                            // line 177
                            yield "                    ";
                            $context["extra_attribs"] = $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Html::parseAttributes", ["options" => CoreExtension::getAttribute($this->env, $this->source, $context["val"], "add_attribs", [], "any", false, false, false, 177)]);
                            // line 178
                            yield "                ";
                        } else {
                            // line 179
                            yield "                    ";
                            $context["extra_attribs"] = "";
                            // line 180
                            yield "                ";
                        }
                        // line 181
                        yield "               <button class=\"btn ";
                        yield (string) (((CoreExtension::getAttribute($this->env, $this->source, $context["val"], "btn_class", [], "any", true, true, false, 181) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["val"], "btn_class", [], "any", false, false, false, 181)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["val"], "btn_class", [], "any", false, false, false, 181), "html", null, true)) : ("btn-outline-secondary"));
                        yield " me-2 ";
                        yield (string) (((CoreExtension::getAttribute($this->env, $this->source, $context["val"], "add_class", [], "any", true, true, false, 181) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["val"], "add_class", [], "any", false, false, false, 181)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["val"], "add_class", [], "any", false, false, false, 181), "html", null, true)) : (""));
                        yield "\" type=\"";
                        yield (string) (((CoreExtension::getAttribute($this->env, $this->source, $context["val"], "type", [], "any", true, true, false, 181) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["val"], "type", [], "any", false, false, false, 181)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["val"], "type", [], "any", false, false, false, 181), "html", null, true)) : ("submit"));
                        yield "\" name=\"";
                        yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["key"], "html", null, true);
                        yield "\" value=\"1\" title=\"";
                        yield (string) (((CoreExtension::getAttribute($this->env, $this->source, $context["val"], "title", [], "any", true, true, false, 181) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["val"], "title", [], "any", false, false, false, 181)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["val"], "title", [], "any", false, false, false, 181), "html", null, true)) : (""));
                        yield "\" onclick=\"";
                        yield (string) (((CoreExtension::getAttribute($this->env, $this->source, $context["val"], "onclick", [], "any", true, true, false, 181) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["val"], "onclick", [], "any", false, false, false, 181)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["val"], "onclick", [], "any", false, false, false, 181), "html", null, true)) : (""));
                        yield "\" ";
                        yield (string) (isset($context["extra_attribs"]) || array_key_exists("extra_attribs", $context) ? $context["extra_attribs"] : (function () { throw new RuntimeError('Variable "extra_attribs" does not exist.', 181, $this->source); })());
                        yield ">
                  ";
                        // line 182
                        if (is_iterable($context["val"])) {
                            // line 183
                            yield "                     ";
                            if (CoreExtension::getAttribute($this->env, $this->source, $context["val"], "icon", [], "any", true, true, false, 183)) {
                                // line 184
                                yield "                        <i class=\"";
                                yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["val"], "icon", [], "any", false, false, false, 184), "html", null, true);
                                yield "\"></i>
                     ";
                            }
                            // line 186
                            yield "                     <span>";
                            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["val"], "text", [], "any", true, true, false, 186)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["val"], "text", [], "any", false, false, false, 186), "")) : ("")), "html", null, true);
                            yield "</span>
                  ";
                        } else {
                            // line 188
                            yield "                     ";
                            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["val"], "html", null, true);
                            yield "
                  ";
                        }
                        // line 190
                        yield "               </button>
            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['key'], $context['val'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent);
                    $context += $_parent;
                    // line 192
                    yield "         ";
                }
                // line 193
                yield "
      </div>

      <input type=\"hidden\" name=\"_glpi_csrf_token\" value=\"";
                // line 196
                yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Session::getNewCSRFToken(), "html", null, true);
                yield "\" />
   </div> ";
                // line 198
                yield "</form> ";
                // line 199
                yield "    ";
            } else {
                // line 200
                yield "   </div> ";
                // line 201
                yield "    ";
            }
        }
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "components/form/buttons.html.twig";
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
        return array (  434 => 201,  432 => 200,  429 => 199,  427 => 198,  423 => 196,  418 => 193,  415 => 192,  407 => 190,  401 => 188,  395 => 186,  389 => 184,  386 => 183,  384 => 182,  367 => 181,  364 => 180,  361 => 179,  358 => 178,  355 => 177,  352 => 176,  347 => 175,  345 => 174,  342 => 173,  336 => 171,  334 => 170,  331 => 169,  328 => 168,  322 => 166,  320 => 165,  317 => 164,  314 => 163,  311 => 162,  305 => 159,  299 => 156,  292 => 151,  289 => 150,  283 => 147,  277 => 144,  272 => 142,  266 => 138,  263 => 137,  260 => 136,  257 => 135,  253 => 133,  245 => 128,  239 => 124,  237 => 123,  232 => 121,  226 => 118,  222 => 117,  213 => 111,  210 => 110,  207 => 109,  204 => 108,  201 => 107,  199 => 106,  196 => 105,  193 => 104,  190 => 103,  188 => 102,  185 => 101,  179 => 98,  173 => 95,  166 => 90,  163 => 89,  160 => 88,  158 => 87,  155 => 86,  149 => 83,  143 => 80,  136 => 75,  134 => 74,  131 => 73,  128 => 72,  125 => 71,  122 => 70,  119 => 69,  113 => 66,  107 => 63,  100 => 58,  94 => 55,  88 => 52,  81 => 47,  78 => 46,  76 => 45,  71 => 44,  69 => 43,  64 => 41,  61 => 40,  59 => 39,  56 => 38,  54 => 37,  52 => 36,  50 => 35,  48 => 34,  46 => 33,  43 => 32,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "components/form/buttons.html.twig", "/Users/alvarozuculajunior/BCX/glpi/templates/components/form/buttons.html.twig");
    }
}
