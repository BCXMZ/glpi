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
class __TwigTemplate_dd27859b7a3abaa73b5aec7f9ef2573f extends Template
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
        $context["withtemplate"] = (((CoreExtension::getAttribute($this->env, $this->source, ($context["params"] ?? null), "withtemplate", [], "array", true, true, false, 33) &&  !(null === (($_v0 = ($context["params"] ?? null)) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0["withtemplate"] ?? null) : null)))) ? ((($_v1 = ($context["params"] ?? null)) && is_array($_v1) || $_v1 instanceof ArrayAccess ? ($_v1["withtemplate"] ?? null) : null)) : (""));
        // line 34
        $context["candel"] = (((CoreExtension::getAttribute($this->env, $this->source, ($context["params"] ?? null), "candel", [], "array", true, true, false, 34) &&  !(null === (($_v2 = ($context["params"] ?? null)) && is_array($_v2) || $_v2 instanceof ArrayAccess ? ($_v2["candel"] ?? null) : null)))) ? ((($_v3 = ($context["params"] ?? null)) && is_array($_v3) || $_v3 instanceof ArrayAccess ? ($_v3["candel"] ?? null) : null)) : (true));
        // line 35
        $context["canedit"] = (((CoreExtension::getAttribute($this->env, $this->source, ($context["params"] ?? null), "canedit", [], "array", true, true, false, 35) &&  !(null === (($_v4 = ($context["params"] ?? null)) && is_array($_v4) || $_v4 instanceof ArrayAccess ? ($_v4["canedit"] ?? null) : null)))) ? ((($_v5 = ($context["params"] ?? null)) && is_array($_v5) || $_v5 instanceof ArrayAccess ? ($_v5["canedit"] ?? null) : null)) : (true));
        // line 36
        $context["id"] = (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, true, false, 36), "id", [], "array", true, true, false, 36) &&  !(null === (($_v6 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 36)) && is_array($_v6) || $_v6 instanceof ArrayAccess ? ($_v6["id"] ?? null) : null)))) ? ((($_v7 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 36)) && is_array($_v7) || $_v7 instanceof ArrayAccess ? ($_v7["id"] ?? null) : null)) : ( -1));
        // line 37
        $context["in_modal"] = ((CoreExtension::getAttribute($this->env, $this->source, ($context["params"] ?? null), "in_modal", [], "array", true, true, false, 37)) ? (Twig\Extension\CoreExtension::default((($_v8 = ($context["params"] ?? null)) && is_array($_v8) || $_v8 instanceof ArrayAccess ? ($_v8["in_modal"] ?? null) : null), ((CoreExtension::getAttribute($this->env, $this->source, ($context["_get"] ?? null), "_in_modal", [], "any", true, true, false, 37)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["_get"] ?? null), "_in_modal", [], "any", false, false, false, 37), false)) : (false)))) : (((CoreExtension::getAttribute($this->env, $this->source, ($context["_get"] ?? null), "_in_modal", [], "any", true, true, false, 37)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["_get"] ?? null), "_in_modal", [], "any", false, false, false, 37), false)) : (false))));
        // line 38
        yield "
";
        // line 39
        if (array_key_exists("item", $context)) {
            // line 40
            yield "
     ";
            // line 41
            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\PluginExtension']->callPluginHook(Twig\Extension\CoreExtension::constant("Glpi\\Plugin\\Hooks::POST_ITEM_FORM"), ["item" => ($context["item"] ?? null), "options" => ($context["params"] ?? null)]), "html", null, true);
            yield "

    ";
            // line 43
            if (((($tmp = ($context["canedit"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp) || (($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "canEdit", [(($_v9 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 43)) && is_array($_v9) || $_v9 instanceof ArrayAccess ? ($_v9["id"] ?? null) : null)], "method", false, false, false, 43)) && $tmp instanceof Markup ? (string) $tmp : $tmp))) {
                // line 44
                yield "      <div class=\"form-button-separator card-body mx-n2 border-top d-flex flex-row-reverse align-items-start flex-wrap  ";
                yield (string) (((($tmp = ($context["in_modal"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("p-2") : (""));
                yield "\">
         ";
                // line 45
                if (((($context["withtemplate"] ?? null) > 0) || (($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "isNewID", [($context["id"] ?? null)], "method", false, false, false, 45)) && $tmp instanceof Markup ? (string) $tmp : $tmp))) {
                    // line 46
                    yield "            ";
                    if (((($context["id"] ?? null) <= 0) || (($context["withtemplate"] ?? null) == 2))) {
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
                    if ((((($tmp = ($context["candel"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp) &&  !(($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "can", [($context["id"] ?? null), Twig\Extension\CoreExtension::constant("DELETE")], "method", false, false, false, 70)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) &&  !(($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "can", [($context["id"] ?? null), Twig\Extension\CoreExtension::constant("PURGE")], "method", false, false, false, 70)) && $tmp instanceof Markup ? (string) $tmp : $tmp))) {
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
                    if (((($tmp = ($context["canedit"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp) && (($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "can", [($context["id"] ?? null), Twig\Extension\CoreExtension::constant("UPDATE")], "method", false, false, false, 74)) && $tmp instanceof Markup ? (string) $tmp : $tmp))) {
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
                    if ((($tmp = ($context["candel"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 88
                        yield "               ";
                        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "isDeleted", [], "method", false, false, false, 88)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                            // line 89
                            yield "                  ";
                            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "can", [($context["id"] ?? null), Twig\Extension\CoreExtension::constant("DELETE")], "method", false, false, false, 89)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
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
                            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "can", [($context["id"] ?? null), Twig\Extension\CoreExtension::constant("PURGE")], "method", false, false, false, 102)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                                // line 103
                                yield "                    ";
                                $context["item_devices"] = $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Item_Devices::getConcernedItems");
                                // line 104
                                yield "                    ";
                                $context["show_keep_devices"] = CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "getType", [], "method", false, false, false, 104), ($context["item_devices"] ?? null));
                                // line 105
                                yield "
                    ";
                                // line 106
                                $context["span_cls"] = "";
                                // line 107
                                yield "                    ";
                                if ((($tmp = ($context["show_keep_devices"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
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
                                yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["span_cls"] ?? null), "html", null, true);
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
                                if ((($tmp = ($context["show_keep_devices"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
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
                            if (( !(($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "maybeDeleted", [], "method", false, false, false, 136)) && $tmp instanceof Markup ? (string) $tmp : $tmp) || (($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "useDeletedToLockIfDynamic", [], "method", false, false, false, 136)) && $tmp instanceof Markup ? (string) $tmp : $tmp))) {
                                // line 137
                                yield "                     ";
                                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "can", [($context["id"] ?? null), Twig\Extension\CoreExtension::constant("PURGE")], "method", false, false, false, 137)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
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
                            } elseif (( !(($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "isDeleted", [], "method", false, false, false, 150)) && $tmp instanceof Markup ? (string) $tmp : $tmp) && (($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "can", [($context["id"] ?? null), Twig\Extension\CoreExtension::constant("DELETE")], "method", false, false, false, 150)) && $tmp instanceof Markup ? (string) $tmp : $tmp))) {
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
                    if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "isField", ["date_mod"], "method", false, false, false, 165)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 166
                        yield "               <input type=\"hidden\" name=\"_read_date_mod\" value=\"";
                        yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v10 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 166)) && is_array($_v10) || $_v10 instanceof ArrayAccess ? ($_v10["date_mod"] ?? null) : null), "html", null, true);
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
                if ( !(($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "isNewID", [($context["id"] ?? null)], "method", false, false, false, 170)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 171
                    yield "            <input type=\"hidden\" name=\"id\" value=\"";
                    yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["id"] ?? null), "html", null, true);
                    yield "\" />
         ";
                }
                // line 173
                yield "
         ";
                // line 174
                if (((($tmp = ($context["canedit"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp) && (Twig\Extension\CoreExtension::length($this->env->getCharset(), (((CoreExtension::getAttribute($this->env, $this->source, ($context["params"] ?? null), "addbuttons", [], "array", true, true, false, 174) &&  !(null === (($_v11 = ($context["params"] ?? null)) && is_array($_v11) || $_v11 instanceof ArrayAccess ? ($_v11["addbuttons"] ?? null) : null)))) ? ((($_v12 = ($context["params"] ?? null)) && is_array($_v12) || $_v12 instanceof ArrayAccess ? ($_v12["addbuttons"] ?? null) : null)) : ([]))) > 0))) {
                    // line 175
                    yield "            ";
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable((($_v13 = ($context["params"] ?? null)) && is_array($_v13) || $_v13 instanceof ArrayAccess ? ($_v13["addbuttons"] ?? null) : null));
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
                        yield (string) ($context["extra_attribs"] ?? null);
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
