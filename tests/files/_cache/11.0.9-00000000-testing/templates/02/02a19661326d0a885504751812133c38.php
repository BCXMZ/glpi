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

/* components/itilobject/mainform_open.html.twig */
class __TwigTemplate_49865abad0aa126b5623bf3b045754c3 extends Template
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
        $context["enctype"] = (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 33, $this->source); })()), "isNewItem", [], "method", false, false, false, 33)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("multipart/form-data") : ("application/x-www-form-urlencoded"));
        // line 34
        $context["new_cls"] = (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 34, $this->source); })()), "isNewItem", [], "method", false, false, false, 34)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("new-itil-object") : (""));
        // line 35
        yield "
";
        // line 36
        $context["form_path"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 36, $this->source); })()), "getFormURL", [], "method", false, false, false, 36);
        // line 37
        if ( !(($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 37, $this->source); })()), "isNewItem", [], "method", false, false, false, 37)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 38
            yield "   ";
            $context["form_path"] = (((isset($context["form_path"]) || array_key_exists("form_path", $context) ? $context["form_path"] : (function () { throw new RuntimeError('Variable "form_path" does not exist.', 38, $this->source); })()) . "?id=") . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 38, $this->source); })()), "fields", [], "any", false, false, false, 38), "id", [], "array", false, false, false, 38));
        }
        // line 40
        yield "
";
        // line 41
        $context["track_changes"] = "true";
        // line 42
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 42, $this->source); })()), "isNewItem", [], "method", false, false, false, 42)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 43
            yield "   ";
            $context["track_changes"] = "false";
        }
        // line 45
        yield "
<form method=\"POST\" action=\"";
        // line 46
        yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["form_path"]) || array_key_exists("form_path", $context) ? $context["form_path"] : (function () { throw new RuntimeError('Variable "form_path" does not exist.', 46, $this->source); })()), "html", null, true);
        yield "\" enctype=\"";
        yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["enctype"]) || array_key_exists("enctype", $context) ? $context["enctype"] : (function () { throw new RuntimeError('Variable "enctype" does not exist.', 46, $this->source); })()), "html", null, true);
        yield "\"
      data-track-changes=\"";
        // line 47
        yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["track_changes"]) || array_key_exists("track_changes", $context) ? $context["track_changes"] : (function () { throw new RuntimeError('Variable "track_changes" does not exist.', 47, $this->source); })()), "html", null, true);
        yield "\" id=\"itil-form\" class=\"";
        yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["new_cls"]) || array_key_exists("new_cls", $context) ? $context["new_cls"] : (function () { throw new RuntimeError('Variable "new_cls" does not exist.', 47, $this->source); })()), "html", null, true);
        yield " needs-validation\" data-submit-once novalidate>
   ";
        // line 48
        if ( !(($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 48, $this->source); })()), "isNewItem", [], "method", false, false, false, 48)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 49
            yield "       <input type=\"hidden\" name=\"id\" value=\"";
            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 49, $this->source); })()), "fields", [], "any", false, false, false, 49), "id", [], "array", false, false, false, 49), "html", null, true);
            yield "\" />
   ";
        }
        // line 51
        yield "   <input type=\"hidden\" name=\"_glpi_csrf_token\" value=\"";
        yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Session::getNewCSRFToken(), "html", null, true);
        yield "\" />
   <input type=\"hidden\" name=\"_skip_default_actor\" value=\"1\" />

   ";
        // line 54
        if ((array_key_exists("itiltemplate_key", $context) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["itiltemplate"] ?? null), "fields", [], "any", false, true, false, 54), "id", [], "array", true, true, false, 54))) {
            // line 55
            yield "      <input type=\"hidden\" name=\"";
            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["itiltemplate_key"]) || array_key_exists("itiltemplate_key", $context) ? $context["itiltemplate_key"] : (function () { throw new RuntimeError('Variable "itiltemplate_key" does not exist.', 55, $this->source); })()), "html", null, true);
            yield "\" value=\"";
            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["itiltemplate"]) || array_key_exists("itiltemplate", $context) ? $context["itiltemplate"] : (function () { throw new RuntimeError('Variable "itiltemplate" does not exist.', 55, $this->source); })()), "fields", [], "any", false, false, false, 55), "id", [], "array", false, false, false, 55), "html", null, true);
            yield "\" />
   ";
        }
        // line 57
        yield "   ";
        if (array_key_exists("predefined_fields", $context)) {
            // line 58
            yield "      <input type=\"hidden\" name=\"_predefined_fields\" value=\"";
            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["predefined_fields"]) || array_key_exists("predefined_fields", $context) ? $context["predefined_fields"] : (function () { throw new RuntimeError('Variable "predefined_fields" does not exist.', 58, $this->source); })()), "html", null, true);
            yield "\" />
   ";
        }
        // line 60
        yield "
   ";
        // line 61
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["params"] ?? null), "tickets_id", [], "array", true, true, false, 61) || CoreExtension::getAttribute($this->env, $this->source, ($context["params"] ?? null), "_tickets_id", [], "array", true, true, false, 61))) {
            // line 62
            yield "      <input type=\"hidden\" name=\"_tickets_id\" value=\"";
            yield (string) (((CoreExtension::getAttribute($this->env, $this->source, ($context["params"] ?? null), "tickets_id", [], "array", true, true, false, 62) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["params"]) || array_key_exists("params", $context) ? $context["params"] : (function () { throw new RuntimeError('Variable "params" does not exist.', 62, $this->source); })()), "tickets_id", [], "array", false, false, false, 62)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["params"]) || array_key_exists("params", $context) ? $context["params"] : (function () { throw new RuntimeError('Variable "params" does not exist.', 62, $this->source); })()), "tickets_id", [], "array", false, false, false, 62), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["params"]) || array_key_exists("params", $context) ? $context["params"] : (function () { throw new RuntimeError('Variable "params" does not exist.', 62, $this->source); })()), "_tickets_id", [], "array", false, false, false, 62), "html", null, true)));
            yield "\" />
   ";
        }
        // line 64
        yield "
   ";
        // line 65
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["params"] ?? null), "problems_id", [], "array", true, true, false, 65) || CoreExtension::getAttribute($this->env, $this->source, ($context["params"] ?? null), "_problems_id", [], "array", true, true, false, 65))) {
            // line 66
            yield "      <input type=\"hidden\" name=\"_problems_id\" value=\"";
            yield (string) (((CoreExtension::getAttribute($this->env, $this->source, ($context["params"] ?? null), "problems_id", [], "array", true, true, false, 66) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["params"]) || array_key_exists("params", $context) ? $context["params"] : (function () { throw new RuntimeError('Variable "params" does not exist.', 66, $this->source); })()), "problems_id", [], "array", false, false, false, 66)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["params"]) || array_key_exists("params", $context) ? $context["params"] : (function () { throw new RuntimeError('Variable "params" does not exist.', 66, $this->source); })()), "problems_id", [], "array", false, false, false, 66), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["params"]) || array_key_exists("params", $context) ? $context["params"] : (function () { throw new RuntimeError('Variable "params" does not exist.', 66, $this->source); })()), "_problems_id", [], "array", false, false, false, 66), "html", null, true)));
            yield "\" />
   ";
        }
        // line 68
        yield "
   ";
        // line 69
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["params"] ?? null), "_add_fromitem", [], "array", true, true, false, 69)) {
            // line 70
            yield "      <input type=\"hidden\" name=\"_from_items_id\" value=\"";
            yield (string) (((CoreExtension::getAttribute($this->env, $this->source, ($context["params"] ?? null), "_from_items_id", [], "array", true, true, false, 70) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["params"]) || array_key_exists("params", $context) ? $context["params"] : (function () { throw new RuntimeError('Variable "params" does not exist.', 70, $this->source); })()), "_from_items_id", [], "array", false, false, false, 70)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["params"]) || array_key_exists("params", $context) ? $context["params"] : (function () { throw new RuntimeError('Variable "params" does not exist.', 70, $this->source); })()), "_from_items_id", [], "array", false, false, false, 70), "html", null, true)) : (0));
            yield "\" />
      <input type=\"hidden\" name=\"_from_itemtype\" value=\"";
            // line 71
            yield (string) (((CoreExtension::getAttribute($this->env, $this->source, ($context["params"] ?? null), "_from_itemtype", [], "array", true, true, false, 71) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["params"]) || array_key_exists("params", $context) ? $context["params"] : (function () { throw new RuntimeError('Variable "params" does not exist.', 71, $this->source); })()), "_from_itemtype", [], "array", false, false, false, 71)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["params"]) || array_key_exists("params", $context) ? $context["params"] : (function () { throw new RuntimeError('Variable "params" does not exist.', 71, $this->source); })()), "_from_itemtype", [], "array", false, false, false, 71), "html", null, true)) : (""));
            yield "\" />
   ";
        }
        // line 73
        yield "
   ";
        // line 74
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["params"] ?? null), "_promoted_fup_id", [], "array", true, true, false, 74) && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["params"]) || array_key_exists("params", $context) ? $context["params"] : (function () { throw new RuntimeError('Variable "params" does not exist.', 74, $this->source); })()), "_promoted_fup_id", [], "array", false, false, false, 74) > 0))) {
            // line 75
            yield "      <input type=\"hidden\" name=\"_promoted_fup_id\" value=\"";
            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["params"]) || array_key_exists("params", $context) ? $context["params"] : (function () { throw new RuntimeError('Variable "params" does not exist.', 75, $this->source); })()), "_promoted_fup_id", [], "array", false, false, false, 75), "html", null, true);
            yield "\" />
   ";
        }
        // line 77
        yield "   ";
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["params"] ?? null), "_promoted_task_id", [], "array", true, true, false, 77) && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["params"]) || array_key_exists("params", $context) ? $context["params"] : (function () { throw new RuntimeError('Variable "params" does not exist.', 77, $this->source); })()), "_promoted_task_id", [], "array", false, false, false, 77) > 0))) {
            // line 78
            yield "      <input type=\"hidden\" name=\"_promoted_task_id\" value=\"";
            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["params"]) || array_key_exists("params", $context) ? $context["params"] : (function () { throw new RuntimeError('Variable "params" does not exist.', 78, $this->source); })()), "_promoted_task_id", [], "array", false, false, false, 78), "html", null, true);
            yield "\" />
   ";
        }
        // line 80
        yield "   ";
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["params"] ?? null), "_skip_promoted_fields", [], "array", true, true, false, 80) && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["params"]) || array_key_exists("params", $context) ? $context["params"] : (function () { throw new RuntimeError('Variable "params" does not exist.', 80, $this->source); })()), "_skip_promoted_fields", [], "array", false, false, false, 80) > 0))) {
            // line 81
            yield "      <input type=\"hidden\" name=\"_skip_promoted_fields\" value=\"";
            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["params"]) || array_key_exists("params", $context) ? $context["params"] : (function () { throw new RuntimeError('Variable "params" does not exist.', 81, $this->source); })()), "_skip_promoted_fields", [], "array", false, false, false, 81), "html", null, true);
            yield "\" />
   ";
        }
        // line 83
        yield "
   ";
        // line 85
        yield "   ";
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["params"] ?? null), "_projecttasks_id", [], "array", true, true, false, 85) && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["params"]) || array_key_exists("params", $context) ? $context["params"] : (function () { throw new RuntimeError('Variable "params" does not exist.', 85, $this->source); })()), "_projecttasks_id", [], "array", false, false, false, 85) > 0))) {
            // line 86
            yield "      <input type=\"hidden\" name=\"_projecttasks_id\" value=\"";
            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["params"]) || array_key_exists("params", $context) ? $context["params"] : (function () { throw new RuntimeError('Variable "params" does not exist.', 86, $this->source); })()), "_projecttasks_id", [], "array", false, false, false, 86), "html", null, true);
            yield "\" />
   ";
        }
        // line 88
        yield "
   ";
        // line 89
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["params"] ?? null), "_tasktemplates_id", [], "array", true, true, false, 89) && (Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["params"]) || array_key_exists("params", $context) ? $context["params"] : (function () { throw new RuntimeError('Variable "params" does not exist.', 89, $this->source); })()), "_tasktemplates_id", [], "array", false, false, false, 89)) > 0))) {
            // line 90
            yield "      ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["params"]) || array_key_exists("params", $context) ? $context["params"] : (function () { throw new RuntimeError('Variable "params" does not exist.', 90, $this->source); })()), "_tasktemplates_id", [], "array", false, false, false, 90));
            foreach ($context['_seq'] as $context["_key"] => $context["tasktemplate_id"]) {
                // line 91
                yield "         <input type=\"hidden\" name=\"_tasktemplates_id[]\" value=\"";
                yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["tasktemplate_id"], "html", null, true);
                yield "\" />
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['tasktemplate_id'], $context['_parent']);
            $context = array_intersect_key($context, $_parent);
            $context += $_parent;
            // line 93
            yield "   ";
        }
        // line 94
        yield "
   ";
        // line 95
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["params"] ?? null), "_hidden_fields", [], "array", true, true, false, 95) && (Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["params"]) || array_key_exists("params", $context) ? $context["params"] : (function () { throw new RuntimeError('Variable "params" does not exist.', 95, $this->source); })()), "_hidden_fields", [], "array", false, false, false, 95)) > 0))) {
            // line 96
            yield "      ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["params"]) || array_key_exists("params", $context) ? $context["params"] : (function () { throw new RuntimeError('Variable "params" does not exist.', 96, $this->source); })()), "_hidden_fields", [], "array", false, false, false, 96));
            foreach ($context['_seq'] as $context["field_name"] => $context["field_value"]) {
                // line 97
                yield "         <input type=\"hidden\" name=\"";
                yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["field_name"], "html", null, true);
                yield "\" value=\"";
                yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["field_value"], "html", null, true);
                yield "\" />
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['field_name'], $context['field_value'], $context['_parent']);
            $context = array_intersect_key($context, $_parent);
            $context += $_parent;
            // line 99
            yield "   ";
        }
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "components/itilobject/mainform_open.html.twig";
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
        return array (  244 => 99,  232 => 97,  227 => 96,  225 => 95,  222 => 94,  219 => 93,  209 => 91,  204 => 90,  202 => 89,  199 => 88,  193 => 86,  190 => 85,  187 => 83,  181 => 81,  178 => 80,  172 => 78,  169 => 77,  163 => 75,  161 => 74,  158 => 73,  153 => 71,  148 => 70,  146 => 69,  143 => 68,  137 => 66,  135 => 65,  132 => 64,  126 => 62,  124 => 61,  121 => 60,  115 => 58,  112 => 57,  104 => 55,  102 => 54,  95 => 51,  89 => 49,  87 => 48,  81 => 47,  75 => 46,  72 => 45,  68 => 43,  66 => 42,  64 => 41,  61 => 40,  57 => 38,  55 => 37,  53 => 36,  50 => 35,  48 => 34,  46 => 33,  43 => 32,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "components/itilobject/mainform_open.html.twig", "/Users/alvarozuculajunior/BCX/glpi/templates/components/itilobject/mainform_open.html.twig");
    }
}
