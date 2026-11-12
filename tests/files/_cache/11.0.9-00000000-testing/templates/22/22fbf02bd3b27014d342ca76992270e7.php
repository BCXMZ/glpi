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

/* components/itilobject/timeline/timeline_item_header_badges.html.twig */
class __TwigTemplate_77abb163d20987fe14ca04cdcdb317d5 extends Template
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
        $context["timeline_display_date"] = $this->extensions['Glpi\Application\View\Extension\SessionExtension']->session("glpitimeline_date_format");
        // line 34
        yield "
<span class=\"badge user-select-auto text-wrap d-none d-md-flex align-items-center flex-wrap\">
   ";
        // line 36
        $context["date_span"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 37
            yield "      <span class=\"d-inline-flex align-items-center\"
         ";
            // line 38
            if (((isset($context["timeline_display_date"]) || array_key_exists("timeline_display_date", $context) ? $context["timeline_display_date"] : (function () { throw new RuntimeError('Variable "timeline_display_date" does not exist.', 38, $this->source); })()) == Twig\Extension\CoreExtension::constant("Config::TIMELINE_RELATIVE_DATE"))) {
                // line 39
                yield "            title=\"";
                yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\DataHelpersExtension']->getFormattedDatetime((isset($context["date_creation"]) || array_key_exists("date_creation", $context) ? $context["date_creation"] : (function () { throw new RuntimeError('Variable "date_creation" does not exist.', 39, $this->source); })())), "html", null, true);
                yield "\"
            data-bs-toggle=\"tooltip\" data-bs-placement=\"bottom\"
         ";
            }
            // line 42
            yield "      >
         <i class=\"ti ti-clock me-1\"></i>
         <a href=\"#";
            // line 44
            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["anchor"]) || array_key_exists("anchor", $context) ? $context["anchor"] : (function () { throw new RuntimeError('Variable "anchor" does not exist.', 44, $this->source); })()), "html", null, true);
            yield "\">
            ";
            // line 45
            if (((isset($context["timeline_display_date"]) || array_key_exists("timeline_display_date", $context) ? $context["timeline_display_date"] : (function () { throw new RuntimeError('Variable "timeline_display_date" does not exist.', 45, $this->source); })()) == Twig\Extension\CoreExtension::constant("Config::TIMELINE_RELATIVE_DATE"))) {
                // line 46
                yield "               ";
                yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\DataHelpersExtension']->getRelativeDatetime((isset($context["date_creation"]) || array_key_exists("date_creation", $context) ? $context["date_creation"] : (function () { throw new RuntimeError('Variable "date_creation" does not exist.', 46, $this->source); })())), "html", null, true);
                yield "
            ";
            } else {
                // line 48
                yield "               ";
                yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\DataHelpersExtension']->getFormattedDatetime((isset($context["date_creation"]) || array_key_exists("date_creation", $context) ? $context["date_creation"] : (function () { throw new RuntimeError('Variable "date_creation" does not exist.', 48, $this->source); })())), "html", null, true);
                yield "
            ";
            }
            // line 50
            yield "         </a>
      </span>
   ";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 53
        yield "
   ";
        // line 54
        $context["is_validation_answer"] = ((array_key_exists("entry", $context) && (is_string($_v0 = CoreExtension::getAttribute($this->env, $this->source, (isset($context["entry"]) || array_key_exists("entry", $context) ? $context["entry"] : (function () { throw new RuntimeError('Variable "entry" does not exist.', 54, $this->source); })()), "type", [], "array", false, false, false, 54)) && is_string($_v1 = "Validation") && str_ends_with($_v0, $_v1))) && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["entry"]) || array_key_exists("entry", $context) ? $context["entry"] : (function () { throw new RuntimeError('Variable "entry" does not exist.', 54, $this->source); })()), "item_action", [], "array", false, false, false, 54) == "validation-answer"));
        // line 55
        yield "   ";
        if (((($tmp = (isset($context["is_validation_answer"]) || array_key_exists("is_validation_answer", $context) ? $context["is_validation_answer"] : (function () { throw new RuntimeError('Variable "is_validation_answer" does not exist.', 55, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp) && (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["entry"]) || array_key_exists("entry", $context) ? $context["entry"] : (function () { throw new RuntimeError('Variable "entry" does not exist.', 55, $this->source); })()), "item", [], "array", false, false, false, 55), "itemtype_target", [], "array", false, false, false, 55) == "Group"))) {
            // line 56
            yield "      ";
            $context["creator_span"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                // line 57
                yield "         ";
                yield (string) Twig\Extension\CoreExtension::include($this->env, $context, "components/user/link_with_tooltip.html.twig", ["users_id" =>                 // line 58
(isset($context["users_id"]) || array_key_exists("users_id", $context) ? $context["users_id"] : (function () { throw new RuntimeError('Variable "users_id" does not exist.', 58, $this->source); })()), "user_object" =>                 // line 59
(isset($context["user_object"]) || array_key_exists("user_object", $context) ? $context["user_object"] : (function () { throw new RuntimeError('Variable "user_object" does not exist.', 59, $this->source); })()), "enable_anonymization" => (((                // line 60
array_key_exists("anonym_user", $context) &&  !(null === $context["anonym_user"]))) ? ($context["anonym_user"]) : (false))], false);
                // line 61
                yield "
      ";
                yield from [];
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 63
            yield "      ";
            $context["group_span"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                // line 64
                yield "         <span id=\"group_";
                yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::random($this->env->getCharset()), "html", null, true);
                yield "\" class=\"d-inline-flex align-items-center\">
            <i class=\"ti ti-users ms-1 me-1\"></i>
            ";
                // line 66
                yield (string) $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemLink("Group", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["entry"]) || array_key_exists("entry", $context) ? $context["entry"] : (function () { throw new RuntimeError('Variable "entry" does not exist.', 66, $this->source); })()), "item", [], "array", false, false, false, 66), "items_id_target", [], "array", false, false, false, 66), ["enable_anonymization" => (((                // line 67
array_key_exists("anonym_user", $context) &&  !(null === $context["anonym_user"]))) ? ($context["anonym_user"]) : (false))]);
                // line 68
                yield "
         </span>
      ";
                yield from [];
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 71
            yield "
      ";
            // line 72
            yield (string) Twig\Extension\CoreExtension::sprintf(__("Created: %1\$s by %2\$s for the group %3\$s"), (isset($context["date_span"]) || array_key_exists("date_span", $context) ? $context["date_span"] : (function () { throw new RuntimeError('Variable "date_span" does not exist.', 72, $this->source); })()), (isset($context["creator_span"]) || array_key_exists("creator_span", $context) ? $context["creator_span"] : (function () { throw new RuntimeError('Variable "creator_span" does not exist.', 72, $this->source); })()), (isset($context["group_span"]) || array_key_exists("group_span", $context) ? $context["group_span"] : (function () { throw new RuntimeError('Variable "group_span" does not exist.', 72, $this->source); })()));
            yield "
   ";
        } elseif ((        // line 73
array_key_exists("entry", $context) && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["entry"]) || array_key_exists("entry", $context) ? $context["entry"] : (function () { throw new RuntimeError('Variable "entry" does not exist.', 73, $this->source); })()), "type", [], "array", false, false, false, 73) == "ITILReminder"))) {
            // line 74
            yield "      ";
            yield (string) (isset($context["date_span"]) || array_key_exists("date_span", $context) ? $context["date_span"] : (function () { throw new RuntimeError('Variable "date_span" does not exist.', 74, $this->source); })());
            yield "
   ";
        } else {
            // line 76
            yield "      ";
            if (((isset($context["users_id"]) || array_key_exists("users_id", $context) ? $context["users_id"] : (function () { throw new RuntimeError('Variable "users_id" does not exist.', 76, $this->source); })()) > 0)) {
                // line 77
                yield "         ";
                $context["creator_span"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                    // line 78
                    yield "            ";
                    yield (string) Twig\Extension\CoreExtension::include($this->env, $context, "components/user/link_with_tooltip.html.twig", ["users_id" =>                     // line 79
(isset($context["users_id"]) || array_key_exists("users_id", $context) ? $context["users_id"] : (function () { throw new RuntimeError('Variable "users_id" does not exist.', 79, $this->source); })()), "enable_anonymization" => (((                    // line 80
array_key_exists("anonym_user", $context) &&  !(null === $context["anonym_user"]))) ? ($context["anonym_user"]) : (false))], false);
                    // line 81
                    yield "
         ";
                    yield from [];
                })())) ? '' : new Markup($tmp, $this->env->getCharset());
                // line 83
                yield "
         ";
                // line 84
                yield (string) Twig\Extension\CoreExtension::sprintf(__("Created: %1\$s by %2\$s"), (isset($context["date_span"]) || array_key_exists("date_span", $context) ? $context["date_span"] : (function () { throw new RuntimeError('Variable "date_span" does not exist.', 84, $this->source); })()), (isset($context["creator_span"]) || array_key_exists("creator_span", $context) ? $context["creator_span"] : (function () { throw new RuntimeError('Variable "creator_span" does not exist.', 84, $this->source); })()));
                yield "
      ";
            } else {
                // line 86
                yield "         ";
                yield (string) Twig\Extension\CoreExtension::sprintf(__("Created: %1\$s"), (isset($context["date_span"]) || array_key_exists("date_span", $context) ? $context["date_span"] : (function () { throw new RuntimeError('Variable "date_span" does not exist.', 86, $this->source); })()));
                yield "
      ";
            }
            // line 88
            yield "   ";
        }
        // line 89
        yield "</span>

";
        // line 91
        if ((((isset($context["users_id_editor"]) || array_key_exists("users_id_editor", $context) ? $context["users_id_editor"] : (function () { throw new RuntimeError('Variable "users_id_editor" does not exist.', 91, $this->source); })()) > 0) && ((isset($context["date_creation"]) || array_key_exists("date_creation", $context) ? $context["date_creation"] : (function () { throw new RuntimeError('Variable "date_creation" does not exist.', 91, $this->source); })()) != (isset($context["date_mod"]) || array_key_exists("date_mod", $context) ? $context["date_mod"] : (function () { throw new RuntimeError('Variable "date_mod" does not exist.', 91, $this->source); })())))) {
            // line 92
            yield "   <span class=\"badge user-select-auto text-wrap ms-1 d-none d-md-flex align-items-center flex-wrap\">
      ";
            // line 93
            $context["date_span"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                // line 94
                yield "         <span class=\"d-inline-flex align-items-center\"
            ";
                // line 95
                if (((isset($context["timeline_display_date"]) || array_key_exists("timeline_display_date", $context) ? $context["timeline_display_date"] : (function () { throw new RuntimeError('Variable "timeline_display_date" does not exist.', 95, $this->source); })()) == Twig\Extension\CoreExtension::constant("Config::TIMELINE_RELATIVE_DATE"))) {
                    // line 96
                    yield "               title=\"";
                    yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\DataHelpersExtension']->getFormattedDatetime((isset($context["date_mod"]) || array_key_exists("date_mod", $context) ? $context["date_mod"] : (function () { throw new RuntimeError('Variable "date_mod" does not exist.', 96, $this->source); })())), "html", null, true);
                    yield "\"
               data-bs-toggle=\"tooltip\" data-bs-placement=\"bottom\"
            ";
                }
                // line 99
                yield "         >
            <i class=\"ti ti-clock me-1\"></i>
            ";
                // line 101
                if (((isset($context["timeline_display_date"]) || array_key_exists("timeline_display_date", $context) ? $context["timeline_display_date"] : (function () { throw new RuntimeError('Variable "timeline_display_date" does not exist.', 101, $this->source); })()) == Twig\Extension\CoreExtension::constant("Config::TIMELINE_RELATIVE_DATE"))) {
                    // line 102
                    yield "               ";
                    yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\DataHelpersExtension']->getRelativeDatetime((isset($context["date_mod"]) || array_key_exists("date_mod", $context) ? $context["date_mod"] : (function () { throw new RuntimeError('Variable "date_mod" does not exist.', 102, $this->source); })())), "html", null, true);
                    yield "
            ";
                } else {
                    // line 104
                    yield "               ";
                    yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\DataHelpersExtension']->getFormattedDatetime((isset($context["date_mod"]) || array_key_exists("date_mod", $context) ? $context["date_mod"] : (function () { throw new RuntimeError('Variable "date_mod" does not exist.', 104, $this->source); })())), "html", null, true);
                    yield "
            ";
                }
                // line 106
                yield "         </span>
      ";
                yield from [];
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 108
            yield "
      ";
            // line 109
            $context["is_current_editor"] = ((isset($context["users_id_editor"]) || array_key_exists("users_id_editor", $context) ? $context["users_id_editor"] : (function () { throw new RuntimeError('Variable "users_id_editor" does not exist.', 109, $this->source); })()) == $this->extensions['Glpi\Application\View\Extension\SessionExtension']->session("glpiID"));
            // line 110
            yield "      ";
            $context["anonym_editor"] = ((($this->extensions['Glpi\Application\View\Extension\SessionExtension']->getCurrentInterface() == "helpdesk") &&  !(($tmp = (isset($context["is_current_editor"]) || array_key_exists("is_current_editor", $context) ? $context["is_current_editor"] : (function () { throw new RuntimeError('Variable "is_current_editor" does not exist.', 110, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) && ($this->extensions['Glpi\Application\View\Extension\ConfigExtension']->getEntityConfig("anonymize_support_agents", $this->extensions['Glpi\Application\View\Extension\SessionExtension']->session("glpiactive_entity")) != Twig\Extension\CoreExtension::constant("Entity::ANONYMIZE_DISABLED")));
            // line 111
            yield "      ";
            $context["editor_span"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                // line 112
                yield "         ";
                yield (string) Twig\Extension\CoreExtension::include($this->env, $context, "components/user/link_with_tooltip.html.twig", ["users_id" =>                 // line 113
(isset($context["users_id_editor"]) || array_key_exists("users_id_editor", $context) ? $context["users_id_editor"] : (function () { throw new RuntimeError('Variable "users_id_editor" does not exist.', 113, $this->source); })()), "user_object" => (((                // line 114
(isset($context["users_id"]) || array_key_exists("users_id", $context) ? $context["users_id"] : (function () { throw new RuntimeError('Variable "users_id" does not exist.', 114, $this->source); })()) == (isset($context["users_id_editor"]) || array_key_exists("users_id_editor", $context) ? $context["users_id_editor"] : (function () { throw new RuntimeError('Variable "users_id_editor" does not exist.', 114, $this->source); })()))) ? ((((array_key_exists("user_object", $context) &&  !(null === $context["user_object"]))) ? ($context["user_object"]) : (null))) : (null)), "enable_anonymization" =>                 // line 115
(isset($context["anonym_editor"]) || array_key_exists("anonym_editor", $context) ? $context["anonym_editor"] : (function () { throw new RuntimeError('Variable "anonym_editor" does not exist.', 115, $this->source); })())], false);
                // line 116
                yield "
      ";
                yield from [];
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 118
            yield "
      ";
            // line 119
            yield (string) Twig\Extension\CoreExtension::sprintf(__("Last update: %1\$s by %2\$s"), (isset($context["date_span"]) || array_key_exists("date_span", $context) ? $context["date_span"] : (function () { throw new RuntimeError('Variable "date_span" does not exist.', 119, $this->source); })()), (isset($context["editor_span"]) || array_key_exists("editor_span", $context) ? $context["editor_span"] : (function () { throw new RuntimeError('Variable "editor_span" does not exist.', 119, $this->source); })()));
            yield "
   </span>
";
        }
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "components/itilobject/timeline/timeline_item_header_badges.html.twig";
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
        return array (  253 => 119,  250 => 118,  245 => 116,  243 => 115,  242 => 114,  241 => 113,  239 => 112,  236 => 111,  233 => 110,  231 => 109,  228 => 108,  223 => 106,  217 => 104,  211 => 102,  209 => 101,  205 => 99,  198 => 96,  196 => 95,  193 => 94,  191 => 93,  188 => 92,  186 => 91,  182 => 89,  179 => 88,  173 => 86,  168 => 84,  165 => 83,  160 => 81,  158 => 80,  157 => 79,  155 => 78,  152 => 77,  149 => 76,  143 => 74,  141 => 73,  137 => 72,  134 => 71,  128 => 68,  126 => 67,  125 => 66,  119 => 64,  116 => 63,  111 => 61,  109 => 60,  108 => 59,  107 => 58,  105 => 57,  102 => 56,  99 => 55,  97 => 54,  94 => 53,  88 => 50,  82 => 48,  76 => 46,  74 => 45,  70 => 44,  66 => 42,  59 => 39,  57 => 38,  54 => 37,  52 => 36,  48 => 34,  46 => 33,  43 => 32,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "components/itilobject/timeline/timeline_item_header_badges.html.twig", "/Users/alvarozuculajunior/BCX/glpi/templates/components/itilobject/timeline/timeline_item_header_badges.html.twig");
    }
}
