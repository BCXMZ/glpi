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
class __TwigTemplate_e25ba4b73ff23096e8fbf1572413399f extends Template
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
        $context["target"] = (((CoreExtension::getAttribute($this->env, $this->source, ($context["params"] ?? null), "target", [], "array", true, true, false, 33) &&  !(null === (($_v0 = ($context["params"] ?? null)) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0["target"] ?? null) : null)))) ? ((($_v1 = ($context["params"] ?? null)) && is_array($_v1) || $_v1 instanceof ArrayAccess ? ($_v1["target"] ?? null) : null)) : (CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "getFormURL", [], "method", false, false, false, 33)));
        // line 34
        $context["withtemplate"] = (((CoreExtension::getAttribute($this->env, $this->source, ($context["params"] ?? null), "withtemplate", [], "array", true, true, false, 34) &&  !(null === (($_v2 = ($context["params"] ?? null)) && is_array($_v2) || $_v2 instanceof ArrayAccess ? ($_v2["withtemplate"] ?? null) : null)))) ? ((($_v3 = ($context["params"] ?? null)) && is_array($_v3) || $_v3 instanceof ArrayAccess ? ($_v3["withtemplate"] ?? null) : null)) : (""));
        // line 35
        $context["rand"] = Twig\Extension\CoreExtension::random($this->env->getCharset());
        // line 36
        $context["nametype"] = (((CoreExtension::getAttribute($this->env, $this->source, ($context["params"] ?? null), "formtitle", [], "array", true, true, false, 36) &&  !(null === (($_v4 = ($context["params"] ?? null)) && is_array($_v4) || $_v4 instanceof ArrayAccess ? ($_v4["formtitle"] ?? null) : null)))) ? ((($_v5 = ($context["params"] ?? null)) && is_array($_v5) || $_v5 instanceof ArrayAccess ? ($_v5["formtitle"] ?? null) : null)) : (CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "getTypeName", [1], "method", false, false, false, 36)));
        // line 37
        $context["no_id"] = (((CoreExtension::getAttribute($this->env, $this->source, ($context["params"] ?? null), "noid", [], "array", true, true, false, 37) &&  !(null === (($_v6 = ($context["params"] ?? null)) && is_array($_v6) || $_v6 instanceof ArrayAccess ? ($_v6["noid"] ?? null) : null)))) ? ((($_v7 = ($context["params"] ?? null)) && is_array($_v7) || $_v7 instanceof ArrayAccess ? ($_v7["noid"] ?? null) : null)) : (false));
        // line 38
        $context["formoptions"] = (((CoreExtension::getAttribute($this->env, $this->source, ($context["params"] ?? null), "formoptions", [], "array", true, true, false, 38) &&  !(null === (($_v8 = ($context["params"] ?? null)) && is_array($_v8) || $_v8 instanceof ArrayAccess ? ($_v8["formoptions"] ?? null) : null)))) ? ((($_v9 = ($context["params"] ?? null)) && is_array($_v9) || $_v9 instanceof ArrayAccess ? ($_v9["formoptions"] ?? null) : null)) : (""));
        // line 39
        $context["form_id"] = ((CoreExtension::getAttribute($this->env, $this->source, ($context["params"] ?? null), "form_id", [], "array", true, true, false, 39)) ? (Twig\Extension\CoreExtension::default((($_v10 = ($context["params"] ?? null)) && is_array($_v10) || $_v10 instanceof ArrayAccess ? ($_v10["form_id"] ?? null) : null), "main-form")) : ("main-form"));
        // line 40
        yield "
";
        // line 41
        $context["entity_id"] = 0;
        // line 42
        $context["entity_name"] = "";
        // line 43
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "getType", [], "method", false, false, false, 43) == "Entity")) {
            // line 44
            yield "    ";
            $context["entity_id"] = ((((($_v11 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 44)) && is_array($_v11) || $_v11 instanceof ArrayAccess ? ($_v11["id"] ?? null) : null) == 0)) ? (null) : ((((CoreExtension::getAttribute($this->env, $this->source, ($context["params"] ?? null), "entities_id", [], "array", true, true, false, 44) &&  !(null === (($_v12 = ($context["params"] ?? null)) && is_array($_v12) || $_v12 instanceof ArrayAccess ? ($_v12["entities_id"] ?? null) : null)))) ? ((($_v13 = ($context["params"] ?? null)) && is_array($_v13) || $_v13 instanceof ArrayAccess ? ($_v13["entities_id"] ?? null) : null)) : ((((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, true, false, 44), "entities_id", [], "array", true, true, false, 44) &&  !(null === (($_v14 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 44)) && is_array($_v14) || $_v14 instanceof ArrayAccess ? ($_v14["entities_id"] ?? null) : null)))) ? ((($_v15 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 44)) && is_array($_v15) || $_v15 instanceof ArrayAccess ? ($_v15["entities_id"] ?? null) : null)) : ($this->extensions['Glpi\Application\View\Extension\SessionExtension']->session("glpiactive_entity")))))));
        } elseif ((($tmp = CoreExtension::getAttribute($this->env, $this->source,         // line 45
($context["item"] ?? null), "isEntityAssign", [], "method", false, false, false, 45)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 46
            yield "    ";
            $context["entity_id"] = (((CoreExtension::getAttribute($this->env, $this->source, ($context["params"] ?? null), "entities_id", [], "array", true, true, false, 46) &&  !(null === (($_v16 = ($context["params"] ?? null)) && is_array($_v16) || $_v16 instanceof ArrayAccess ? ($_v16["entities_id"] ?? null) : null)))) ? ((($_v17 = ($context["params"] ?? null)) && is_array($_v17) || $_v17 instanceof ArrayAccess ? ($_v17["entities_id"] ?? null) : null)) : ((((CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "getEntityID", [], "method", true, true, false, 46) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "getEntityID", [], "method", false, false, false, 46)))) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "getEntityID", [], "method", false, false, false, 46)) : ($this->extensions['Glpi\Application\View\Extension\SessionExtension']->session("glpiactive_entity")))));
        }
        // line 48
        if ((($tmp = Session::isMultiEntitiesMode()) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 49
            yield "    ";
            $context["entity_name"] = (( !(null === ($context["entity_id"] ?? null))) ? ($this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemName("Entity", ($context["entity_id"] ?? null))) : (null));
        }
        // line 51
        yield "
";
        // line 52
        $context["no_header"] = ((array_key_exists("no_header", $context)) ? (Twig\Extension\CoreExtension::default(($context["no_header"] ?? null), false)) : (false));
        // line 53
        $context["open_form"] = (((($tmp = ($context["no_header"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp) || (($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "isNewID", [(($_v18 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 53)) && is_array($_v18) || $_v18 instanceof ArrayAccess ? ($_v18["id"] ?? null) : null)], "method", false, false, false, 53)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ||  !array_key_exists("in_twig", $context));
        // line 57
        $context["include_header_content"] = ((($context["no_header"] ?? null) == false) && ((array_key_exists("in_twig", $context) || (($tmp = ((CoreExtension::getAttribute($this->env, $this->source, ($context["_get"] ?? null), "_in_modal", [], "any", true, true, false, 57)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["_get"] ?? null), "_in_modal", [], "any", false, false, false, 57), false)) : (false))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) || ( !array_key_exists("in_twig", $context) && (($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "isNewID", [(($_v19 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 57)) && is_array($_v19) || $_v19 instanceof ArrayAccess ? ($_v19["id"] ?? null) : null)], "method", false, false, false, 57)) && $tmp instanceof Markup ? (string) $tmp : $tmp))));
        // line 58
        $context["canedit"] = ((CoreExtension::getAttribute($this->env, $this->source, ($context["params"] ?? null), "canedit", [], "array", true, true, false, 58)) ? (Twig\Extension\CoreExtension::default((($_v20 = ($context["params"] ?? null)) && is_array($_v20) || $_v20 instanceof ArrayAccess ? ($_v20["canedit"] ?? null) : null), CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "canEdit", [(($_v21 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 58)) && is_array($_v21) || $_v21 instanceof ArrayAccess ? ($_v21["id"] ?? null) : null)], "method", false, false, false, 58))) : (CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "canEdit", [(($_v22 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 58)) && is_array($_v22) || $_v22 instanceof ArrayAccess ? ($_v22["id"] ?? null) : null)], "method", false, false, false, 58)));
        // line 59
        yield "
";
        // line 60
        if (((($tmp = ($context["open_form"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp) && (($tmp = ($context["canedit"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp))) {
            // line 61
            yield "<form id=\"";
            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["form_id"] ?? null), "html", null, true);
            yield "\" name=\"asset_form\" method=\"post\" action=\"";
            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["target"] ?? null), "html", null, true);
            yield "\" ";
            yield (string) ($context["formoptions"] ?? null);
            yield " enctype=\"multipart/form-data\" data-submit-once>
   ";
            // line 62
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "isField", ["entities_id"], "method", false, false, false, 62)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 63
                yield "       <input type=\"hidden\" name=\"entities_id\" value=\"";
                yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["entity_id"] ?? null), "html", null, true);
                yield "\" />
   ";
            }
            // line 65
            yield "   ";
            if ((CoreExtension::getAttribute($this->env, $this->source, ($context["_request"] ?? null), "_in_modal", [], "array", true, true, false, 65) && ((($_v23 = ($context["_request"] ?? null)) && is_array($_v23) || $_v23 instanceof ArrayAccess ? ($_v23["_in_modal"] ?? null) : null) == "1"))) {
                // line 66
                yield "      <input type=\"hidden\" name=\"_in_modal\" value=\"1\"/>
   ";
            }
        }
        // line 69
        yield "   <div id=\"mainformtable\">
      ";
        // line 70
        if ((($tmp = ($context["include_header_content"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
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
        yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\PluginExtension']->callPluginHook(Twig\Extension\CoreExtension::constant("Glpi\\Plugin\\Hooks::PRE_ITEM_FORM"), ["item" => ($context["item"] ?? null), "options" => (((array_key_exists("params", $context) &&  !(null === $context["params"]))) ? ($context["params"]) : ([]))]), "html", null, true);
        yield "

      ";
        // line 76
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["_request"] ?? null), "_in_modal", [], "array", true, true, false, 76) && ((($_v24 = ($context["_request"] ?? null)) && is_array($_v24) || $_v24 instanceof ArrayAccess ? ($_v24["_in_modal"] ?? null) : null) == "1"))) {
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
