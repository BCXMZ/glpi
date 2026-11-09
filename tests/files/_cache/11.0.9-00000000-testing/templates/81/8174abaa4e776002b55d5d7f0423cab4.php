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

/* components/form/header.html.twig */
class __TwigTemplate_bce9880123698313a17055e0ce8950c1 extends Template
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
        $context["target"] = (((CoreExtension::getAttribute($this->env, $this->source, ($context["params"] ?? null), "target", [], "array", true, true, false, 33) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["params"]) || array_key_exists("params", $context) ? $context["params"] : (function () { throw new RuntimeError('Variable "params" does not exist.', 33, $this->source); })()), "target", [], "array", false, false, false, 33)))) ? (CoreExtension::getAttribute($this->env, $this->source, (isset($context["params"]) || array_key_exists("params", $context) ? $context["params"] : (function () { throw new RuntimeError('Variable "params" does not exist.', 33, $this->source); })()), "target", [], "array", false, false, false, 33)) : (CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 33, $this->source); })()), "getFormURL", [], "method", false, false, false, 33)));
        // line 34
        $context["withtemplate"] = (((CoreExtension::getAttribute($this->env, $this->source, ($context["params"] ?? null), "withtemplate", [], "array", true, true, false, 34) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["params"]) || array_key_exists("params", $context) ? $context["params"] : (function () { throw new RuntimeError('Variable "params" does not exist.', 34, $this->source); })()), "withtemplate", [], "array", false, false, false, 34)))) ? (CoreExtension::getAttribute($this->env, $this->source, (isset($context["params"]) || array_key_exists("params", $context) ? $context["params"] : (function () { throw new RuntimeError('Variable "params" does not exist.', 34, $this->source); })()), "withtemplate", [], "array", false, false, false, 34)) : (""));
        // line 35
        $context["rand"] = Twig\Extension\CoreExtension::random($this->env->getCharset());
        // line 36
        $context["nametype"] = (((CoreExtension::getAttribute($this->env, $this->source, ($context["params"] ?? null), "formtitle", [], "array", true, true, false, 36) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["params"]) || array_key_exists("params", $context) ? $context["params"] : (function () { throw new RuntimeError('Variable "params" does not exist.', 36, $this->source); })()), "formtitle", [], "array", false, false, false, 36)))) ? (CoreExtension::getAttribute($this->env, $this->source, (isset($context["params"]) || array_key_exists("params", $context) ? $context["params"] : (function () { throw new RuntimeError('Variable "params" does not exist.', 36, $this->source); })()), "formtitle", [], "array", false, false, false, 36)) : (CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 36, $this->source); })()), "getTypeName", [1], "method", false, false, false, 36)));
        // line 37
        $context["no_id"] = (((CoreExtension::getAttribute($this->env, $this->source, ($context["params"] ?? null), "noid", [], "array", true, true, false, 37) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["params"]) || array_key_exists("params", $context) ? $context["params"] : (function () { throw new RuntimeError('Variable "params" does not exist.', 37, $this->source); })()), "noid", [], "array", false, false, false, 37)))) ? (CoreExtension::getAttribute($this->env, $this->source, (isset($context["params"]) || array_key_exists("params", $context) ? $context["params"] : (function () { throw new RuntimeError('Variable "params" does not exist.', 37, $this->source); })()), "noid", [], "array", false, false, false, 37)) : (false));
        // line 38
        $context["formoptions"] = (((CoreExtension::getAttribute($this->env, $this->source, ($context["params"] ?? null), "formoptions", [], "array", true, true, false, 38) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["params"]) || array_key_exists("params", $context) ? $context["params"] : (function () { throw new RuntimeError('Variable "params" does not exist.', 38, $this->source); })()), "formoptions", [], "array", false, false, false, 38)))) ? (CoreExtension::getAttribute($this->env, $this->source, (isset($context["params"]) || array_key_exists("params", $context) ? $context["params"] : (function () { throw new RuntimeError('Variable "params" does not exist.', 38, $this->source); })()), "formoptions", [], "array", false, false, false, 38)) : (""));
        // line 39
        $context["form_id"] = ((CoreExtension::getAttribute($this->env, $this->source, ($context["params"] ?? null), "form_id", [], "array", true, true, false, 39)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["params"]) || array_key_exists("params", $context) ? $context["params"] : (function () { throw new RuntimeError('Variable "params" does not exist.', 39, $this->source); })()), "form_id", [], "array", false, false, false, 39), "main-form")) : ("main-form"));
        // line 40
        yield "
";
        // line 41
        $context["entity_id"] = 0;
        // line 42
        $context["entity_name"] = "";
        // line 43
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 43, $this->source); })()), "getType", [], "method", false, false, false, 43) == "Entity")) {
            // line 44
            yield "    ";
            $context["entity_id"] = (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 44, $this->source); })()), "fields", [], "any", false, false, false, 44), "id", [], "array", false, false, false, 44) == 0)) ? (null) : ((((CoreExtension::getAttribute($this->env, $this->source, ($context["params"] ?? null), "entities_id", [], "array", true, true, false, 44) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["params"]) || array_key_exists("params", $context) ? $context["params"] : (function () { throw new RuntimeError('Variable "params" does not exist.', 44, $this->source); })()), "entities_id", [], "array", false, false, false, 44)))) ? (CoreExtension::getAttribute($this->env, $this->source, (isset($context["params"]) || array_key_exists("params", $context) ? $context["params"] : (function () { throw new RuntimeError('Variable "params" does not exist.', 44, $this->source); })()), "entities_id", [], "array", false, false, false, 44)) : ((((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, true, false, 44), "entities_id", [], "array", true, true, false, 44) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 44, $this->source); })()), "fields", [], "any", false, false, false, 44), "entities_id", [], "array", false, false, false, 44)))) ? (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 44, $this->source); })()), "fields", [], "any", false, false, false, 44), "entities_id", [], "array", false, false, false, 44)) : ($this->extensions['Glpi\Application\View\Extension\SessionExtension']->session("glpiactive_entity")))))));
        } elseif ((($tmp = CoreExtension::getAttribute($this->env, $this->source,         // line 45
(isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 45, $this->source); })()), "isEntityAssign", [], "method", false, false, false, 45)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 46
            yield "    ";
            $context["entity_id"] = (((CoreExtension::getAttribute($this->env, $this->source, ($context["params"] ?? null), "entities_id", [], "array", true, true, false, 46) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["params"]) || array_key_exists("params", $context) ? $context["params"] : (function () { throw new RuntimeError('Variable "params" does not exist.', 46, $this->source); })()), "entities_id", [], "array", false, false, false, 46)))) ? (CoreExtension::getAttribute($this->env, $this->source, (isset($context["params"]) || array_key_exists("params", $context) ? $context["params"] : (function () { throw new RuntimeError('Variable "params" does not exist.', 46, $this->source); })()), "entities_id", [], "array", false, false, false, 46)) : ((((CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "getEntityID", [], "method", true, true, false, 46) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 46, $this->source); })()), "getEntityID", [], "method", false, false, false, 46)))) ? (CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 46, $this->source); })()), "getEntityID", [], "method", false, false, false, 46)) : ($this->extensions['Glpi\Application\View\Extension\SessionExtension']->session("glpiactive_entity")))));
        }
        // line 48
        if ((($tmp = Session::isMultiEntitiesMode()) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 49
            yield "    ";
            $context["entity_name"] = (( !(null === (isset($context["entity_id"]) || array_key_exists("entity_id", $context) ? $context["entity_id"] : (function () { throw new RuntimeError('Variable "entity_id" does not exist.', 49, $this->source); })()))) ? ($this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemName("Entity", (isset($context["entity_id"]) || array_key_exists("entity_id", $context) ? $context["entity_id"] : (function () { throw new RuntimeError('Variable "entity_id" does not exist.', 49, $this->source); })()))) : (null));
        }
        // line 51
        yield "
";
        // line 52
        $context["no_header"] = ((array_key_exists("no_header", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["no_header"]) || array_key_exists("no_header", $context) ? $context["no_header"] : (function () { throw new RuntimeError('Variable "no_header" does not exist.', 52, $this->source); })()), false)) : (false));
        // line 53
        $context["open_form"] = (((($tmp = (isset($context["no_header"]) || array_key_exists("no_header", $context) ? $context["no_header"] : (function () { throw new RuntimeError('Variable "no_header" does not exist.', 53, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp) || (($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 53, $this->source); })()), "isNewID", [CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 53, $this->source); })()), "fields", [], "any", false, false, false, 53), "id", [], "array", false, false, false, 53)], "method", false, false, false, 53)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ||  !array_key_exists("in_twig", $context));
        // line 57
        $context["include_header_content"] = (((isset($context["no_header"]) || array_key_exists("no_header", $context) ? $context["no_header"] : (function () { throw new RuntimeError('Variable "no_header" does not exist.', 57, $this->source); })()) == false) && ((array_key_exists("in_twig", $context) || (($tmp = ((CoreExtension::getAttribute($this->env, $this->source, ($context["_get"] ?? null), "_in_modal", [], "any", true, true, false, 57)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["_get"]) || array_key_exists("_get", $context) ? $context["_get"] : (function () { throw new RuntimeError('Variable "_get" does not exist.', 57, $this->source); })()), "_in_modal", [], "any", false, false, false, 57), false)) : (false))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) || ( !array_key_exists("in_twig", $context) && (($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 57, $this->source); })()), "isNewID", [CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 57, $this->source); })()), "fields", [], "any", false, false, false, 57), "id", [], "array", false, false, false, 57)], "method", false, false, false, 57)) && $tmp instanceof Markup ? (string) $tmp : $tmp))));
        // line 58
        $context["canedit"] = ((CoreExtension::getAttribute($this->env, $this->source, ($context["params"] ?? null), "canedit", [], "array", true, true, false, 58)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["params"]) || array_key_exists("params", $context) ? $context["params"] : (function () { throw new RuntimeError('Variable "params" does not exist.', 58, $this->source); })()), "canedit", [], "array", false, false, false, 58), CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 58, $this->source); })()), "canEdit", [CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 58, $this->source); })()), "fields", [], "any", false, false, false, 58), "id", [], "array", false, false, false, 58)], "method", false, false, false, 58))) : (CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 58, $this->source); })()), "canEdit", [CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 58, $this->source); })()), "fields", [], "any", false, false, false, 58), "id", [], "array", false, false, false, 58)], "method", false, false, false, 58)));
        // line 59
        yield "
";
        // line 60
        if (((($tmp = (isset($context["open_form"]) || array_key_exists("open_form", $context) ? $context["open_form"] : (function () { throw new RuntimeError('Variable "open_form" does not exist.', 60, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp) && (($tmp = (isset($context["canedit"]) || array_key_exists("canedit", $context) ? $context["canedit"] : (function () { throw new RuntimeError('Variable "canedit" does not exist.', 60, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp))) {
            // line 61
            yield "<form id=\"";
            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["form_id"]) || array_key_exists("form_id", $context) ? $context["form_id"] : (function () { throw new RuntimeError('Variable "form_id" does not exist.', 61, $this->source); })()), "html", null, true);
            yield "\" name=\"asset_form\" method=\"post\" action=\"";
            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["target"]) || array_key_exists("target", $context) ? $context["target"] : (function () { throw new RuntimeError('Variable "target" does not exist.', 61, $this->source); })()), "html", null, true);
            yield "\" ";
            yield (string) (isset($context["formoptions"]) || array_key_exists("formoptions", $context) ? $context["formoptions"] : (function () { throw new RuntimeError('Variable "formoptions" does not exist.', 61, $this->source); })());
            yield " enctype=\"multipart/form-data\" data-submit-once>
   ";
            // line 62
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 62, $this->source); })()), "isField", ["entities_id"], "method", false, false, false, 62)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 63
                yield "       <input type=\"hidden\" name=\"entities_id\" value=\"";
                yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["entity_id"]) || array_key_exists("entity_id", $context) ? $context["entity_id"] : (function () { throw new RuntimeError('Variable "entity_id" does not exist.', 63, $this->source); })()), "html", null, true);
                yield "\" />
   ";
            }
            // line 65
            yield "   ";
            if ((CoreExtension::getAttribute($this->env, $this->source, ($context["_request"] ?? null), "_in_modal", [], "array", true, true, false, 65) && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["_request"]) || array_key_exists("_request", $context) ? $context["_request"] : (function () { throw new RuntimeError('Variable "_request" does not exist.', 65, $this->source); })()), "_in_modal", [], "array", false, false, false, 65) == "1"))) {
                // line 66
                yield "      <input type=\"hidden\" name=\"_in_modal\" value=\"1\"/>
   ";
            }
        }
        // line 69
        yield "   <div id=\"mainformtable\">
      ";
        // line 70
        if ((($tmp = (isset($context["include_header_content"]) || array_key_exists("include_header_content", $context) ? $context["include_header_content"] : (function () { throw new RuntimeError('Variable "include_header_content" does not exist.', 70, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 71
            yield "         ";
            yield (string) Twig\Extension\CoreExtension::include($this->env, $context, "components/form/header_content.html.twig");
            yield "
      ";
        }
        // line 73
        yield "
      ";
        // line 74
        yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\PluginExtension']->callPluginHook(Twig\Extension\CoreExtension::constant("Glpi\\Plugin\\Hooks::PRE_ITEM_FORM"), ["item" => (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 74, $this->source); })()), "options" => (((array_key_exists("params", $context) &&  !(null === $context["params"]))) ? ($context["params"]) : ([]))]), "html", null, true);
        yield "

      ";
        // line 76
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["_request"] ?? null), "_in_modal", [], "array", true, true, false, 76) && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["_request"]) || array_key_exists("_request", $context) ? $context["_request"] : (function () { throw new RuntimeError('Variable "_request" does not exist.', 76, $this->source); })()), "_in_modal", [], "array", false, false, false, 76) == "1"))) {
            // line 77
            yield "      <input type=\"hidden\" name=\"_no_message_link\" value=\"1\" />
      ";
        }
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "components/form/header.html.twig";
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
        return array (  146 => 77,  144 => 76,  139 => 74,  136 => 73,  130 => 71,  128 => 70,  125 => 69,  120 => 66,  117 => 65,  111 => 63,  109 => 62,  100 => 61,  98 => 60,  95 => 59,  93 => 58,  91 => 57,  89 => 53,  87 => 52,  84 => 51,  80 => 49,  78 => 48,  74 => 46,  72 => 45,  69 => 44,  67 => 43,  65 => 42,  63 => 41,  60 => 40,  58 => 39,  56 => 38,  54 => 37,  52 => 36,  50 => 35,  48 => 34,  46 => 33,  43 => 32,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "components/form/header.html.twig", "/Users/alvarozuculajunior/BCX/glpi/templates/components/form/header.html.twig");
    }
}
