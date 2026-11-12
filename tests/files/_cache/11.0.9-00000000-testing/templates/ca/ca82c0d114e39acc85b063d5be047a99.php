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

/* components/itilobject/timeline/timeline_item_header.html.twig */
class __TwigTemplate_79d72f7a74b42548a7518ab18e08cdf8 extends Template
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
<div class=\"d-flex timeline-header\">
   <div class=\"d-flex creator\">
      ";
        // line 35
        yield (string) Twig\Extension\CoreExtension::include($this->env, $context, "components/itilobject/timeline/timeline_item_header_badges.html.twig", ["users_id" =>         // line 36
(isset($context["users_id"]) || array_key_exists("users_id", $context) ? $context["users_id"] : (function () { throw new RuntimeError('Variable "users_id" does not exist.', 36, $this->source); })()), "user_object" =>         // line 37
(isset($context["user_object"]) || array_key_exists("user_object", $context) ? $context["user_object"] : (function () { throw new RuntimeError('Variable "user_object" does not exist.', 37, $this->source); })()), "date_creation" =>         // line 38
(isset($context["date_creation"]) || array_key_exists("date_creation", $context) ? $context["date_creation"] : (function () { throw new RuntimeError('Variable "date_creation" does not exist.', 38, $this->source); })()), "date_mod" =>         // line 39
(isset($context["date_mod"]) || array_key_exists("date_mod", $context) ? $context["date_mod"] : (function () { throw new RuntimeError('Variable "date_mod" does not exist.', 39, $this->source); })()), "users_id_editor" => ((CoreExtension::getAttribute($this->env, $this->source,         // line 40
($context["entry_i"] ?? null), "users_id_editor", [], "array", true, true, false, 40)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["entry_i"]) || array_key_exists("entry_i", $context) ? $context["entry_i"] : (function () { throw new RuntimeError('Variable "entry_i" does not exist.', 40, $this->source); })()), "users_id_editor", [], "array", false, false, false, 40), null)) : (null)), "anchor" => ((CoreExtension::getAttribute($this->env, $this->source,         // line 41
(isset($context["entry"]) || array_key_exists("entry", $context) ? $context["entry"] : (function () { throw new RuntimeError('Variable "entry" does not exist.', 41, $this->source); })()), "type", [], "array", false, false, false, 41) . "_") . CoreExtension::getAttribute($this->env, $this->source, (isset($context["entry_i"]) || array_key_exists("entry_i", $context) ? $context["entry_i"] : (function () { throw new RuntimeError('Variable "entry_i" does not exist.', 41, $this->source); })()), "id", [], "array", false, false, false, 41)), "anonym_user" =>         // line 42
(isset($context["anonym_user"]) || array_key_exists("anonym_user", $context) ? $context["anonym_user"] : (function () { throw new RuntimeError('Variable "anonym_user" does not exist.', 42, $this->source); })()), "entry" =>         // line 43
(isset($context["entry"]) || array_key_exists("entry", $context) ? $context["entry"] : (function () { throw new RuntimeError('Variable "entry" does not exist.', 43, $this->source); })())], false);
        // line 44
        yield "
   </div>

   <div class=\"d-flex ms-auto timeline-item-buttons\">
      ";
        // line 48
        $context["actions"] = [];
        // line 49
        yield "      ";
        if ((((($tmp = (((CoreExtension::getAttribute($this->env, $this->source, ($context["entry_i"] ?? null), "can_edit", [], "array", true, true, false, 49) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["entry_i"]) || array_key_exists("entry_i", $context) ? $context["entry_i"] : (function () { throw new RuntimeError('Variable "entry_i" does not exist.', 49, $this->source); })()), "can_edit", [], "array", false, false, false, 49)))) ? (CoreExtension::getAttribute($this->env, $this->source, (isset($context["entry_i"]) || array_key_exists("entry_i", $context) ? $context["entry_i"] : (function () { throw new RuntimeError('Variable "entry_i" does not exist.', 49, $this->source); })()), "can_edit", [], "array", false, false, false, 49)) : (false))) && $tmp instanceof Markup ? (string) $tmp : $tmp) &&  !(($tmp = (isset($context["status_closed"]) || array_key_exists("status_closed", $context) ? $context["status_closed"] : (function () { throw new RuntimeError('Variable "status_closed" does not exist.', 49, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) &&  !CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, (isset($context["entry"]) || array_key_exists("entry", $context) ? $context["entry"] : (function () { throw new RuntimeError('Variable "entry" does not exist.', 49, $this->source); })()), "type", [], "array", false, false, false, 49), ["Document_Item", "Assign"]))) {
            // line 50
            yield "         ";
            $context["edit_btn"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                // line 51
                yield "            <li>
               <a class=\"dropdown-item edit-timeline-item\" href=\"#\">
                  <i class=\"ti ti-edit\"></i>
                  <span>";
                // line 54
                yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Edit"), "html", null, true);
                yield "</span>
               </a>
            </li>
         ";
                yield from [];
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 58
            yield "         ";
            $context["actions"] = Twig\Extension\CoreExtension::merge((isset($context["actions"]) || array_key_exists("actions", $context) ? $context["actions"] : (function () { throw new RuntimeError('Variable "actions" does not exist.', 58, $this->source); })()), ["edit_btn" => (isset($context["edit_btn"]) || array_key_exists("edit_btn", $context) ? $context["edit_btn"] : (function () { throw new RuntimeError('Variable "edit_btn" does not exist.', 58, $this->source); })())]);
            // line 59
            yield "      ";
        }
        // line 60
        yield "
      ";
        // line 61
        if ((($tmp = (((CoreExtension::getAttribute($this->env, $this->source, ($context["entry_i"] ?? null), "can_promote", [], "array", true, true, false, 61) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["entry_i"]) || array_key_exists("entry_i", $context) ? $context["entry_i"] : (function () { throw new RuntimeError('Variable "entry_i" does not exist.', 61, $this->source); })()), "can_promote", [], "array", false, false, false, 61)))) ? (CoreExtension::getAttribute($this->env, $this->source, (isset($context["entry_i"]) || array_key_exists("entry_i", $context) ? $context["entry_i"] : (function () { throw new RuntimeError('Variable "entry_i" does not exist.', 61, $this->source); })()), "can_promote", [], "array", false, false, false, 61)) : (false))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 62
            yield "         ";
            if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["entry_i"]) || array_key_exists("entry_i", $context) ? $context["entry_i"] : (function () { throw new RuntimeError('Variable "entry_i" does not exist.', 62, $this->source); })()), "sourceof_items_id", [], "array", false, false, false, 62) > 0)) {
                // line 63
                yield "            ";
                $context["promoted_btn"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                    // line 64
                    yield "               <li>
                  <a class=\"dropdown-item text-warning\" href=\"";
                    // line 65
                    yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeFormPath("Ticket", CoreExtension::getAttribute($this->env, $this->source, (isset($context["entry_i"]) || array_key_exists("entry_i", $context) ? $context["entry_i"] : (function () { throw new RuntimeError('Variable "entry_i" does not exist.', 65, $this->source); })()), "sourceof_items_id", [], "array", false, false, false, 65)), "html", null, true);
                    yield "\">
                     <i class=\"ti ti-git-branch\"></i>
                     <span>";
                    // line 67
                    yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::sprintf(__("%s was already promoted"), $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeName(CoreExtension::getAttribute($this->env, $this->source, (isset($context["entry"]) || array_key_exists("entry", $context) ? $context["entry"] : (function () { throw new RuntimeError('Variable "entry" does not exist.', 67, $this->source); })()), "type", [], "array", false, false, false, 67))), "html", null, true);
                    yield "</span>
                  </a>
               </li>
            ";
                    yield from [];
                })())) ? '' : new Markup($tmp, $this->env->getCharset());
                // line 71
                yield "            ";
                $context["actions"] = Twig\Extension\CoreExtension::merge((isset($context["actions"]) || array_key_exists("actions", $context) ? $context["actions"] : (function () { throw new RuntimeError('Variable "actions" does not exist.', 71, $this->source); })()), ["promoted_btn" => (isset($context["promoted_btn"]) || array_key_exists("promoted_btn", $context) ? $context["promoted_btn"] : (function () { throw new RuntimeError('Variable "promoted_btn" does not exist.', 71, $this->source); })())]);
                // line 72
                yield "         ";
            } else {
                // line 73
                yield "            ";
                $context["promote_url"] = ("?_promoted_fup_id=" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["entry_i"]) || array_key_exists("entry_i", $context) ? $context["entry_i"] : (function () { throw new RuntimeError('Variable "entry_i" does not exist.', 73, $this->source); })()), "id", [], "array", false, false, false, 73));
                // line 74
                yield "            ";
                if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["entry"]) || array_key_exists("entry", $context) ? $context["entry"] : (function () { throw new RuntimeError('Variable "entry" does not exist.', 74, $this->source); })()), "type", [], "array", false, false, false, 74) === "TicketTask")) {
                    // line 75
                    yield "               ";
                    $context["promote_url"] = ("?_promoted_task_id=" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["entry_i"]) || array_key_exists("entry_i", $context) ? $context["entry_i"] : (function () { throw new RuntimeError('Variable "entry_i" does not exist.', 75, $this->source); })()), "id", [], "array", false, false, false, 75));
                    // line 76
                    yield "            ";
                }
                // line 77
                yield "
            ";
                // line 78
                $context["promote_btn"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                    // line 79
                    yield "               <li>
                  <a class=\"dropdown-item\" href=\"";
                    // line 80
                    yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeFormPath("Ticket") . (isset($context["promote_url"]) || array_key_exists("promote_url", $context) ? $context["promote_url"] : (function () { throw new RuntimeError('Variable "promote_url" does not exist.', 80, $this->source); })())), "html", null, true);
                    yield "\">
                     <i class=\"ti ti-git-branch\"></i>
                     <span>";
                    // line 82
                    yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Promote to Ticket"), "html", null, true);
                    yield "</span>
                  </a>
               </li>
            ";
                    yield from [];
                })())) ? '' : new Markup($tmp, $this->env->getCharset());
                // line 86
                yield "            ";
                $context["actions"] = Twig\Extension\CoreExtension::merge((isset($context["actions"]) || array_key_exists("actions", $context) ? $context["actions"] : (function () { throw new RuntimeError('Variable "actions" does not exist.', 86, $this->source); })()), ["promote_btn" => (isset($context["promote_btn"]) || array_key_exists("promote_btn", $context) ? $context["promote_btn"] : (function () { throw new RuntimeError('Variable "promote_btn" does not exist.', 86, $this->source); })())]);
                // line 87
                yield "         ";
            }
            // line 88
            yield "      ";
        }
        // line 89
        yield "
      ";
        // line 90
        if ((($tmp = Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["actions"]) || array_key_exists("actions", $context) ? $context["actions"] : (function () { throw new RuntimeError('Variable "actions" does not exist.', 90, $this->source); })()))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 91
            yield "         <div class=\"dropdown ms-2\">
            <button class=\"btn btn-sm btn-ghost-secondary timeline-more-actions\" type=\"button\" id=\"more-actions-";
            // line 92
            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["entry_rand"]) || array_key_exists("entry_rand", $context) ? $context["entry_rand"] : (function () { throw new RuntimeError('Variable "entry_rand" does not exist.', 92, $this->source); })()), "html", null, true);
            yield "\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
               <i class=\"ti ti-dots-vertical\"></i>
            </button>
            <ul class=\"dropdown-menu\" aria-labelledby=\"more-actions-";
            // line 95
            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["entry_rand"]) || array_key_exists("entry_rand", $context) ? $context["entry_rand"] : (function () { throw new RuntimeError('Variable "entry_rand" does not exist.', 95, $this->source); })()), "html", null, true);
            yield "\">
               ";
            // line 96
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["actions"]) || array_key_exists("actions", $context) ? $context["actions"] : (function () { throw new RuntimeError('Variable "actions" does not exist.', 96, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["action"]) {
                // line 97
                yield "                  ";
                yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["action"], "html", null, true);
                yield "
               ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['action'], $context['_parent']);
            $context = array_intersect_key($context, $_parent);
            $context += $_parent;
            // line 99
            yield "            </ul>
         </div>
      ";
        }
        // line 102
        yield "
      ";
        // line 103
        if ((($tmp = (isset($context["is_private"]) || array_key_exists("is_private", $context) ? $context["is_private"] : (function () { throw new RuntimeError('Variable "is_private" does not exist.', 103, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 104
            yield "         <span class=\"is-private ms-2\" title=\"";
            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("This entry is \"internal\" (visible only to technicians)"), "html", null, true);
            yield "\" data-testid=\"private-followup-hint\"
               data-bs-toggle=\"tooltip\" data-bs-placement=\"bottom\">
            <i class=\"ti ti-eye-off\" aria-label=\"";
            // line 106
            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Private"), "html", null, true);
            yield "\"></i>
         </span>
      ";
        }
        // line 109
        yield "   </div>

   <button class=\"btn btn-sm btn-ghost-secondary close-edit-content d-none ms-auto\">
      <i class=\"ti ti-x\"></i>
   </button>
</div>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "components/itilobject/timeline/timeline_item_header.html.twig";
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
        return array (  220 => 109,  214 => 106,  208 => 104,  206 => 103,  203 => 102,  198 => 99,  188 => 97,  184 => 96,  180 => 95,  174 => 92,  171 => 91,  169 => 90,  166 => 89,  163 => 88,  160 => 87,  157 => 86,  149 => 82,  144 => 80,  141 => 79,  139 => 78,  136 => 77,  133 => 76,  130 => 75,  127 => 74,  124 => 73,  121 => 72,  118 => 71,  110 => 67,  105 => 65,  102 => 64,  99 => 63,  96 => 62,  94 => 61,  91 => 60,  88 => 59,  85 => 58,  77 => 54,  72 => 51,  69 => 50,  66 => 49,  64 => 48,  58 => 44,  56 => 43,  55 => 42,  54 => 41,  53 => 40,  52 => 39,  51 => 38,  50 => 37,  49 => 36,  48 => 35,  43 => 32,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "components/itilobject/timeline/timeline_item_header.html.twig", "/Users/alvarozuculajunior/BCX/glpi/templates/components/itilobject/timeline/timeline_item_header.html.twig");
    }
}
