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

/* components/itilobject/timeline/form_document_item.html.twig */
class __TwigTemplate_9f9e76d18de9dd26806e27b0b5cdbbb5 extends Template
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
        // line 33
        $this->parent = $this->load("components/itilobject/timeline/form_timeline_item.html.twig", 33);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 36
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_timeline_card(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 37
        yield "    ";
        if (((isset($context["form_mode"]) || array_key_exists("form_mode", $context) ? $context["form_mode"] : (function () { throw new RuntimeError('Variable "form_mode" does not exist.', 37, $this->source); })()) == "view")) {
            // line 38
            yield "        ";
            yield (string) Twig\Extension\CoreExtension::include($this->env, $context, "components/itilobject/timeline/sub_documents.html.twig", ["entry" => ["documents" => [            // line 40
(isset($context["entry"]) || array_key_exists("entry", $context) ? $context["entry"] : (function () { throw new RuntimeError('Variable "entry" does not exist.', 40, $this->source); })())]], "item" =>             // line 42
(isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 42, $this->source); })())], false);
            // line 43
            yield "
    ";
        } else {
            // line 45
            yield "        <div class=\"document_item\">
            <form name=\"asset_form\" style=\"width: 100%;\" class=\"d-flex flex-column\" method=\"post\"
                  action=\"";
            // line 47
            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeFormPath("Document"), "html", null, true);
            yield "\" enctype=\"multipart/form-data\" data-track-changes=\"true\" data-submit-once>
                <input type=\"hidden\" name=\"entities_id\" value=\"";
            // line 48
            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 48, $this->source); })()), "getEntityID", [], "method", false, false, false, 48), "html", null, true);
            yield "\" />
                <input type=\"hidden\" name=\"is_recursive\" value=\"";
            // line 49
            yield (string) (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 49, $this->source); })()), "isRecursive", [], "method", false, false, false, 49)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (1) : (0));
            yield "\" />
                <input type=\"hidden\" name=\"itemtype\" value=\"";
            // line 50
            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 50, $this->source); })()), "getType", [], "method", false, false, false, 50), "html", null, true);
            yield "\" />
                <input type=\"hidden\" name=\"items_id\" value=\"";
            // line 51
            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 51, $this->source); })()), "fields", [], "any", false, false, false, 51), "id", [], "array", false, false, false, 51), "html", null, true);
            yield "\" />
                <input type=\"hidden\" name=\"_glpi_csrf_token\" value=\"";
            // line 52
            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Session::getNewCSRFToken(), "html", null, true);
            yield "\" />
                ";
            // line 53
            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\PluginExtension']->callPluginHook(Twig\Extension\CoreExtension::constant("Glpi\\Plugin\\Hooks::PRE_ITEM_FORM"), ["item" => (isset($context["subitem"]) || array_key_exists("subitem", $context) ? $context["subitem"] : (function () { throw new RuntimeError('Variable "subitem" does not exist.', 53, $this->source); })()), "options" => (isset($context["params"]) || array_key_exists("params", $context) ? $context["params"] : (function () { throw new RuntimeError('Variable "params" does not exist.', 53, $this->source); })())]), "html", null, true);
            yield "

                ";
            // line 55
            $context["can_screenshot"] =  !Twig\Extension\CoreExtension::testEmpty($this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Document::isValidDoc", [".png"]));
            // line 56
            yield "                ";
            $context["can_screenrecord"] =  !Twig\Extension\CoreExtension::testEmpty($this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Document::isValidDoc", [".webm"]));
            // line 57
            yield "
                ";
            // line 58
            if (((($tmp = (isset($context["can_screenshot"]) || array_key_exists("can_screenshot", $context) ? $context["can_screenshot"] : (function () { throw new RuntimeError('Variable "can_screenshot" does not exist.', 58, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp) || (($tmp = (isset($context["can_screenrecord"]) || array_key_exists("can_screenrecord", $context) ? $context["can_screenrecord"] : (function () { throw new RuntimeError('Variable "can_screenrecord" does not exist.', 58, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp))) {
                // line 59
                yield "                    <div class=\"upload-from-section d-none\">
                        <label id=\"upload_source_label\" class=\"form-label\">";
                // line 60
                yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Upload from"), "html", null, true);
                yield "</label>
                        <div class=\"d-inline\" role=\"group\" aria-labelledby=\"upload_source_label\">
                            ";
                // line 62
                if ((($tmp = (isset($context["can_screenshot"]) || array_key_exists("can_screenshot", $context) ? $context["can_screenshot"] : (function () { throw new RuntimeError('Variable "can_screenshot" does not exist.', 62, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 63
                    yield "                                <button class=\"btn btn-sm btn-secondary me-2 d-none\" type=\"button\" name=\"add_screenshot\">
                                    <i class=\"ti ti-photo\"></i>
                                    <span>";
                    // line 65
                    yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Screenshot"), "html", null, true);
                    yield "</span>
                                </button>
                            ";
                }
                // line 68
                yield "                            ";
                if ((($tmp = (isset($context["can_screenrecord"]) || array_key_exists("can_screenrecord", $context) ? $context["can_screenrecord"] : (function () { throw new RuntimeError('Variable "can_screenrecord" does not exist.', 68, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 69
                    yield "                                <button class=\"btn btn-sm btn-secondary me-2 d-none\" type=\"button\" name=\"add_screenrecording\">
                                    <i class=\"ti ti-camera\"></i>
                                    <span>";
                    // line 71
                    yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Screen recording"), "html", null, true);
                    yield "</span>
                                </button>
                            ";
                }
                // line 74
                yield "                        </div>
                        <div id=\"screen_capture_preview\" class=\"w-100\">
                            <div class=\"previews overflow-x-auto my-2 d-flex px-2\"></div>
                            <button type=\"button\" name=\"stop_recording\" class=\"btn btn-secondary d-none\">";
                // line 77
                yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Stop recording"), "html", null, true);
                yield "</button>
                        </div>
                        <hr class=\"my-1\">
                    </div>
                ";
            }
            // line 82
            yield "                ";
            if (($this->extensions['Glpi\Application\View\Extension\SessionExtension']->getCurrentInterface() == "central")) {
                // line 83
                yield "                    ";
                yield (string) $macros["fields"]->getTemplateForMacro("macro_dropdownField", $context, 83, $this->getSourceContext())->macro_dropdownField(...["DocumentCategory", "documentcategories_id", null, __("Heading"), ["full_width" => true, "is_horizontal" => false]]);
                // line 92
                yield "
                ";
            }
            // line 94
            yield "
                ";
            // line 95
            yield (string) $macros["fields"]->getTemplateForMacro("macro_fileField", $context, 95, $this->getSourceContext())->macro_fileField(...["filename", null, __("File"), ["multiple" => true, "full_width" => true, "is_horizontal" => false]]);
            // line 104
            yield "

                ";
            // line 106
            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\PluginExtension']->callPluginHook(Twig\Extension\CoreExtension::constant("Glpi\\Plugin\\Hooks::POST_ITEM_FORM"), ["item" => (isset($context["subitem"]) || array_key_exists("subitem", $context) ? $context["subitem"] : (function () { throw new RuntimeError('Variable "subitem" does not exist.', 106, $this->source); })()), "options" => (isset($context["params"]) || array_key_exists("params", $context) ? $context["params"] : (function () { throw new RuntimeError('Variable "params" does not exist.', 106, $this->source); })())]), "html", null, true);
            yield "

                <div class=\"d-flex card-footer mx-n3 mb-n3\">
                    ";
            // line 109
            if (((((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["subitem"] ?? null), "fields", [], "any", false, true, false, 109), "id", [], "array", true, true, false, 109) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["subitem"]) || array_key_exists("subitem", $context) ? $context["subitem"] : (function () { throw new RuntimeError('Variable "subitem" does not exist.', 109, $this->source); })()), "fields", [], "any", false, false, false, 109), "id", [], "array", false, false, false, 109)))) ? (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["subitem"]) || array_key_exists("subitem", $context) ? $context["subitem"] : (function () { throw new RuntimeError('Variable "subitem" does not exist.', 109, $this->source); })()), "fields", [], "any", false, false, false, 109), "id", [], "array", false, false, false, 109)) : (0)) <= 0)) {
                // line 110
                yield "                        <div class=\"input-group\">
                            <button class=\"btn btn-primary\" type=\"submit\" name=\"add\">
                                <i class=\"ti ti-file-plus\"></i>
                                <span>";
                // line 113
                yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(_x("button", "Add a new file"), "html", null, true);
                yield "</span>
                            </button>
                        </div>
                    ";
            }
            // line 117
            yield "                </div>
            </form>
        </div>
        <script type=\"module\">
            import(\x27/js/modules/ITIL/Timeline/DocumentForm.js\x27);
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
        return "components/itilobject/timeline/form_document_item.html.twig";
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
        return array (  202 => 117,  195 => 113,  190 => 110,  188 => 109,  182 => 106,  178 => 104,  176 => 95,  173 => 94,  169 => 92,  166 => 83,  163 => 82,  155 => 77,  150 => 74,  144 => 71,  140 => 69,  137 => 68,  131 => 65,  127 => 63,  125 => 62,  120 => 60,  117 => 59,  115 => 58,  112 => 57,  109 => 56,  107 => 55,  102 => 53,  98 => 52,  94 => 51,  90 => 50,  86 => 49,  82 => 48,  78 => 47,  74 => 45,  70 => 43,  68 => 42,  67 => 40,  65 => 38,  62 => 37,  55 => 36,  50 => 33,  48 => 34,  41 => 33,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "components/itilobject/timeline/form_document_item.html.twig", "/Users/alvarozuculajunior/BCX/glpi/templates/components/itilobject/timeline/form_document_item.html.twig");
    }
}
