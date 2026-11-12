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

/* components/itilobject/timeline/pending_reasons_messages.html.twig */
class __TwigTemplate_ebfa6781f962f27a64ddd40d87e104ac extends Template
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
        $context["pending_reason_item_parent"] = $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("PendingReason_Item::getForItem", [(isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 33, $this->source); })())]);
        // line 34
        $context["display_for_parent"] = ((array_key_exists("display_for_parent", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["display_for_parent"]) || array_key_exists("display_for_parent", $context) ? $context["display_for_parent"] : (function () { throw new RuntimeError('Variable "display_for_parent" does not exist.', 34, $this->source); })()), false)) : (false));
        // line 35
        yield "
";
        // line 36
        $context["pending_reason_contexts"] = ["pending" => ["className" => "badge bg-blue-lt", "icon" => "<i class=\"ti ti-player-pause-filled me-1\"></i>", "text" => __("Pending")], "done" => ["className" => "badge bg-transparent text-muted", "icon" => "<i class=\"ti ti-check me-1\"></i>", "text" => __("Done")]];
        // line 48
        yield "
";
        // line 49
        $context["pending_reason_selected_context"] = "pending";
        // line 50
        yield "
";
        // line 51
        if ((($tmp = (isset($context["display_for_parent"]) || array_key_exists("display_for_parent", $context) ? $context["display_for_parent"] : (function () { throw new RuntimeError('Variable "display_for_parent" does not exist.', 51, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 52
            yield "    ";
            $context["pending_reason"] = (((($tmp = (isset($context["pending_reason_item_parent"]) || array_key_exists("pending_reason_item_parent", $context) ? $context["pending_reason_item_parent"] : (function () { throw new RuntimeError('Variable "pending_reason_item_parent" does not exist.', 52, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("PendingReason::getById", [CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["pending_reason_item_parent"]) || array_key_exists("pending_reason_item_parent", $context) ? $context["pending_reason_item_parent"] : (function () { throw new RuntimeError('Variable "pending_reason_item_parent" does not exist.', 52, $this->source); })()), "fields", [], "any", false, false, false, 52), "pendingreasons_id", [], "array", false, false, false, 52)])) : (false));
        } else {
            // line 54
            yield "    ";
            $context["pending_item"] = (((array_key_exists("pending_item", $context) &&  !(null === $context["pending_item"]))) ? ($context["pending_item"]) : ($this->extensions['Glpi\Application\View\Extension\PhpExtension']->call((CoreExtension::getAttribute($this->env, $this->source, (isset($context["entry"]) || array_key_exists("entry", $context) ? $context["entry"] : (function () { throw new RuntimeError('Variable "entry" does not exist.', 54, $this->source); })()), "type", [], "array", false, false, false, 54) . "::getById"), [CoreExtension::getAttribute($this->env, $this->source, (isset($context["entry_i"]) || array_key_exists("entry_i", $context) ? $context["entry_i"] : (function () { throw new RuntimeError('Variable "entry_i" does not exist.', 54, $this->source); })()), "id", [], "array", false, false, false, 54)])));
            // line 55
            yield "    ";
            $context["pending_reason_item"] = (((($tmp = (isset($context["pending_item"]) || array_key_exists("pending_item", $context) ? $context["pending_item"] : (function () { throw new RuntimeError('Variable "pending_item" does not exist.', 55, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("PendingReason_Item::getForItem", [(isset($context["pending_item"]) || array_key_exists("pending_item", $context) ? $context["pending_item"] : (function () { throw new RuntimeError('Variable "pending_item" does not exist.', 55, $this->source); })())])) : (false));
            // line 56
            yield "    ";
            $context["pending_reason"] = (((($tmp = (isset($context["pending_reason_item"]) || array_key_exists("pending_reason_item", $context) ? $context["pending_reason_item"] : (function () { throw new RuntimeError('Variable "pending_reason_item" does not exist.', 56, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("PendingReason::getById", [CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["pending_reason_item"]) || array_key_exists("pending_reason_item", $context) ? $context["pending_reason_item"] : (function () { throw new RuntimeError('Variable "pending_reason_item" does not exist.', 56, $this->source); })()), "fields", [], "any", false, false, false, 56), "pendingreasons_id", [], "array", false, false, false, 56)])) : (false));
            // line 57
            yield "    ";
            $context["is_latest_pending"] = $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("PendingReason_Item::isLastPendingForItem", [            // line 58
(isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 58, $this->source); })()),             // line 59
(isset($context["pending_item"]) || array_key_exists("pending_item", $context) ? $context["pending_item"] : (function () { throw new RuntimeError('Variable "pending_item" does not exist.', 59, $this->source); })())]);
            // line 61
            yield "    ";
            $context["pending_reason_selected_context"] = ((((($tmp = (isset($context["is_latest_pending"]) || array_key_exists("is_latest_pending", $context) ? $context["is_latest_pending"] : (function () { throw new RuntimeError('Variable "is_latest_pending" does not exist.', 61, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp) && ((isset($context["pending_reason_item_parent"]) || array_key_exists("pending_reason_item_parent", $context) ? $context["pending_reason_item_parent"] : (function () { throw new RuntimeError('Variable "pending_reason_item_parent" does not exist.', 61, $this->source); })()) != false))) ? ("pending") : ("done"));
        }
        // line 63
        yield "
";
        // line 64
        if ((($tmp = (isset($context["pending_reason"]) || array_key_exists("pending_reason", $context) ? $context["pending_reason"] : (function () { throw new RuntimeError('Variable "pending_reason" does not exist.', 64, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 65
            yield "    <span class=\"";
            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["pending_reason_contexts"]) || array_key_exists("pending_reason_contexts", $context) ? $context["pending_reason_contexts"] : (function () { throw new RuntimeError('Variable "pending_reason_contexts" does not exist.', 65, $this->source); })()), (isset($context["pending_reason_selected_context"]) || array_key_exists("pending_reason_selected_context", $context) ? $context["pending_reason_selected_context"] : (function () { throw new RuntimeError('Variable "pending_reason_selected_context" does not exist.', 65, $this->source); })()), [], "array", false, false, false, 65), "className", [], "any", false, false, false, 65), "html", null, true);
            yield " ";
            yield (string) (((($tmp = (isset($context["display_for_parent"]) || array_key_exists("display_for_parent", $context) ? $context["display_for_parent"] : (function () { throw new RuntimeError('Variable "display_for_parent" does not exist.', 65, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("mt-1 w-100 text-truncate") : (""));
            yield "\">
      ";
            // line 66
            yield (string) CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["pending_reason_contexts"]) || array_key_exists("pending_reason_contexts", $context) ? $context["pending_reason_contexts"] : (function () { throw new RuntimeError('Variable "pending_reason_contexts" does not exist.', 66, $this->source); })()), (isset($context["pending_reason_selected_context"]) || array_key_exists("pending_reason_selected_context", $context) ? $context["pending_reason_selected_context"] : (function () { throw new RuntimeError('Variable "pending_reason_selected_context" does not exist.', 66, $this->source); })()), [], "array", false, false, false, 66), "icon", [], "any", false, false, false, 66);
            yield "
        ";
            // line 67
            yield (string) (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["pending_reason_contexts"]) || array_key_exists("pending_reason_contexts", $context) ? $context["pending_reason_contexts"] : (function () { throw new RuntimeError('Variable "pending_reason_contexts" does not exist.', 67, $this->source); })()), (isset($context["pending_reason_selected_context"]) || array_key_exists("pending_reason_selected_context", $context) ? $context["pending_reason_selected_context"] : (function () { throw new RuntimeError('Variable "pending_reason_selected_context" does not exist.', 67, $this->source); })()), [], "array", false, false, false, 67), "text", [], "any", false, false, false, 67) . Twig\Extension\CoreExtension::sprintf(": %s", CoreExtension::getAttribute($this->env, $this->source, (isset($context["pending_reason"]) || array_key_exists("pending_reason", $context) ? $context["pending_reason"] : (function () { throw new RuntimeError('Variable "pending_reason" does not exist.', 67, $this->source); })()), "getLink", [], "method", false, false, false, 67)));
            yield "

        ";
            // line 69
            if (((($tmp = (isset($context["pending_reason_item_parent"]) || array_key_exists("pending_reason_item_parent", $context) ? $context["pending_reason_item_parent"] : (function () { throw new RuntimeError('Variable "pending_reason_item_parent" does not exist.', 69, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp) && ((($tmp = (isset($context["display_for_parent"]) || array_key_exists("display_for_parent", $context) ? $context["display_for_parent"] : (function () { throw new RuntimeError('Variable "display_for_parent" does not exist.', 69, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp) || (($tmp = $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("PendingReason_Item::isLastPendingForItem", [            // line 70
(isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 70, $this->source); })()),             // line 71
(isset($context["pending_item"]) || array_key_exists("pending_item", $context) ? $context["pending_item"] : (function () { throw new RuntimeError('Variable "pending_item" does not exist.', 71, $this->source); })())])) && $tmp instanceof Markup ? (string) $tmp : $tmp)))) {
                // line 73
                yield "            ";
                $context["next_bump"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["pending_reason_item_parent"]) || array_key_exists("pending_reason_item_parent", $context) ? $context["pending_reason_item_parent"] : (function () { throw new RuntimeError('Variable "pending_reason_item_parent" does not exist.', 73, $this->source); })()), "getNextFollowupDate", [], "method", false, false, false, 73);
                // line 74
                yield "            ";
                if ((($tmp = (isset($context["next_bump"]) || array_key_exists("next_bump", $context) ? $context["next_bump"] : (function () { throw new RuntimeError('Variable "next_bump" does not exist.', 74, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 75
                    yield "
                <i class=\"ti ti-clock ms-2\" title=\"";
                    // line 76
                    yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::sprintf(__("Next automatic follow-up scheduled on %s"), $this->extensions['Glpi\Application\View\Extension\DataHelpersExtension']->getFormattedDate((isset($context["next_bump"]) || array_key_exists("next_bump", $context) ? $context["next_bump"] : (function () { throw new RuntimeError('Variable "next_bump" does not exist.', 76, $this->source); })()))), "html", null, true);
                    yield "\"
                   data-bs-toggle=\"tooltip\"></i>
            ";
                }
                // line 79
                yield "
         ";
                // line 80
                $context["resolve"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["pending_reason_item_parent"]) || array_key_exists("pending_reason_item_parent", $context) ? $context["pending_reason_item_parent"] : (function () { throw new RuntimeError('Variable "pending_reason_item_parent" does not exist.', 80, $this->source); })()), "getAutoResolvedate", [], "method", false, false, false, 80);
                // line 81
                yield "         ";
                if ((($tmp = (isset($context["resolve"]) || array_key_exists("resolve", $context) ? $context["resolve"] : (function () { throw new RuntimeError('Variable "resolve" does not exist.', 81, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 82
                    yield "            <i class=\"ti ti-player-stop-filled ms-2\" title=\"";
                    yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::sprintf(__("Automatic resolution scheduled on %s"), $this->extensions['Glpi\Application\View\Extension\DataHelpersExtension']->getFormattedDate((isset($context["resolve"]) || array_key_exists("resolve", $context) ? $context["resolve"] : (function () { throw new RuntimeError('Variable "resolve" does not exist.', 82, $this->source); })()))), "html", null, true);
                    yield "\"
               data-bs-toggle=\"tooltip\"></i>
        ";
                }
                // line 85
                yield "        ";
            }
            // line 86
            yield "   </span>
";
        }
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "components/itilobject/timeline/pending_reasons_messages.html.twig";
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
        return array (  145 => 86,  142 => 85,  135 => 82,  132 => 81,  130 => 80,  127 => 79,  121 => 76,  118 => 75,  115 => 74,  112 => 73,  110 => 71,  109 => 70,  108 => 69,  103 => 67,  99 => 66,  92 => 65,  90 => 64,  87 => 63,  83 => 61,  81 => 59,  80 => 58,  78 => 57,  75 => 56,  72 => 55,  69 => 54,  65 => 52,  63 => 51,  60 => 50,  58 => 49,  55 => 48,  53 => 36,  50 => 35,  48 => 34,  46 => 33,  43 => 32,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "components/itilobject/timeline/pending_reasons_messages.html.twig", "/Users/alvarozuculajunior/BCX/glpi/templates/components/itilobject/timeline/pending_reasons_messages.html.twig");
    }
}
