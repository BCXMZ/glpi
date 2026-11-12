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

/* components/itilobject/actors/main.html.twig */
class __TwigTemplate_cf775ea8eceaf3eaac7d2dceeb609ba9 extends Template
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
        $macros["fields"] = $this->macros["fields"] = $this->load("components/form/fields_macros.html.twig", 33)->unwrap();
        // line 34
        yield "
";
        // line 35
        if ( !array_key_exists("display_actortypes", $context)) {
            // line 36
            yield "   ";
            $context["display_actortypes"] = ["requester", "observer", "assign"];
        }
        // line 38
        if ( !array_key_exists("display_labels", $context)) {
            // line 39
            yield "   ";
            $context["display_labels"] = true;
        }
        // line 41
        yield "
";
        // line 42
        $context["actor_options"] = Twig\Extension\CoreExtension::merge((isset($context["field_options"]) || array_key_exists("field_options", $context) ? $context["field_options"] : (function () { throw new RuntimeError('Variable "field_options" does not exist.', 42, $this->source); })()), ["is_horizontal" => false, "add_field_class" => (((($tmp =         // line 44
(isset($context["is_expanded"]) || array_key_exists("is_expanded", $context) ? $context["is_expanded"] : (function () { throw new RuntimeError('Variable "is_expanded" does not exist.', 44, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("col-sm-4") : (""))]);
        // line 46
        $context["can_admin"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 46, $this->source); })()), "canAdminActors", [], "method", false, false, false, 46);
        // line 47
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 47, $this->source); })()), "isNewItem", [], "method", false, false, false, 47)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 48
            yield "   ";
            $context["can_admin"] = true;
        }
        // line 50
        yield "
";
        // line 52
        $context["allow_auto_submit"] = (((array_key_exists("allow_auto_submit", $context) &&  !(null === $context["allow_auto_submit"]))) ? ($context["allow_auto_submit"]) : (true));
        // line 54
        yield "
";
        // line 56
        yield "
";
        // line 57
        if ((CoreExtension::inFilter("requester", (isset($context["display_actortypes"]) || array_key_exists("display_actortypes", $context) ? $context["display_actortypes"] : (function () { throw new RuntimeError('Variable "display_actortypes" does not exist.', 57, $this->source); })())) && ( !(($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["itiltemplate"]) || array_key_exists("itiltemplate", $context) ? $context["itiltemplate"] : (function () { throw new RuntimeError('Variable "itiltemplate" does not exist.', 57, $this->source); })()), "isHiddenField", ["_users_id_requester"], "method", false, false, false, 57)) && $tmp instanceof Markup ? (string) $tmp : $tmp) ||  !(($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["itiltemplate"]) || array_key_exists("itiltemplate", $context) ? $context["itiltemplate"] : (function () { throw new RuntimeError('Variable "itiltemplate" does not exist.', 57, $this->source); })()), "isHiddenField", ["_groups_id_requester"], "method", false, false, false, 57)) && $tmp instanceof Markup ? (string) $tmp : $tmp)))) {
            // line 58
            yield "   ";
            $context["rand"] = Twig\Extension\CoreExtension::random($this->env->getCharset());
            // line 59
            yield "   ";
            $context["requester_field"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                // line 60
                yield "      ";
                yield (string) Twig\Extension\CoreExtension::include($this->env, $context, "components/itilobject/actors/field.html.twig", ["rand" =>                 // line 61
(isset($context["rand"]) || array_key_exists("rand", $context) ? $context["rand"] : (function () { throw new RuntimeError('Variable "rand" does not exist.', 61, $this->source); })()), "item" =>                 // line 62
(isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 62, $this->source); })()), "actortypeint" => Twig\Extension\CoreExtension::constant("CommonITILActor::REQUESTER"), "actortype" => "requester", "entities_id" =>                 // line 65
(isset($context["entities_id"]) || array_key_exists("entities_id", $context) ? $context["entities_id"] : (function () { throw new RuntimeError('Variable "entities_id" does not exist.', 65, $this->source); })()), "itiltemplate" =>                 // line 66
(isset($context["itiltemplate"]) || array_key_exists("itiltemplate", $context) ? $context["itiltemplate"] : (function () { throw new RuntimeError('Variable "itiltemplate" does not exist.', 66, $this->source); })()), "params" =>                 // line 67
(isset($context["params"]) || array_key_exists("params", $context) ? $context["params"] : (function () { throw new RuntimeError('Variable "params" does not exist.', 67, $this->source); })()), "canupdate" =>                 // line 68
(isset($context["canupdate"]) || array_key_exists("canupdate", $context) ? $context["canupdate"] : (function () { throw new RuntimeError('Variable "canupdate" does not exist.', 68, $this->source); })()), "cancreateuser" => ((                // line 69
array_key_exists("cancreateuser", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["cancreateuser"]) || array_key_exists("cancreateuser", $context) ? $context["cancreateuser"] : (function () { throw new RuntimeError('Variable "cancreateuser" does not exist.', 69, $this->source); })()), false)) : (false)), "canassigntome" => (((                // line 70
array_key_exists("canassigntome", $context) &&  !(null === $context["canassigntome"]))) ? ($context["canassigntome"]) : (false)), "main_rand" =>                 // line 71
(isset($context["main_rand"]) || array_key_exists("main_rand", $context) ? $context["main_rand"] : (function () { throw new RuntimeError('Variable "main_rand" does not exist.', 71, $this->source); })()), "allow_auto_submit" =>                 // line 72
(isset($context["allow_auto_submit"]) || array_key_exists("allow_auto_submit", $context) ? $context["allow_auto_submit"] : (function () { throw new RuntimeError('Variable "allow_auto_submit" does not exist.', 72, $this->source); })())], false);
                // line 73
                yield "
   ";
                yield from [];
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 75
            yield "   ";
            if ((($tmp = (isset($context["display_labels"]) || array_key_exists("display_labels", $context) ? $context["display_labels"] : (function () { throw new RuntimeError('Variable "display_labels" does not exist.', 75, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 76
                yield "      ";
                yield (string) $macros["fields"]->getTemplateForMacro("macro_field", $context, 76, $this->getSourceContext())->macro_field(...["requester",                 // line 78
(isset($context["requester_field"]) || array_key_exists("requester_field", $context) ? $context["requester_field"] : (function () { throw new RuntimeError('Variable "requester_field" does not exist.', 78, $this->source); })()), _n("Requester", "Requesters", 1), Twig\Extension\CoreExtension::merge(                // line 80
(isset($context["actor_options"]) || array_key_exists("actor_options", $context) ? $context["actor_options"] : (function () { throw new RuntimeError('Variable "actor_options" does not exist.', 80, $this->source); })()), ["required" => ((($tmp = CoreExtension::getAttribute($this->env, $this->source,                 // line 81
(isset($context["itiltemplate"]) || array_key_exists("itiltemplate", $context) ? $context["itiltemplate"] : (function () { throw new RuntimeError('Variable "itiltemplate" does not exist.', 81, $this->source); })()), "isMandatoryField", ["_users_id_requester"], "method", false, false, false, 81)) && $tmp instanceof Markup ? (string) $tmp : $tmp) || (($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["itiltemplate"]) || array_key_exists("itiltemplate", $context) ? $context["itiltemplate"] : (function () { throw new RuntimeError('Variable "itiltemplate" does not exist.', 81, $this->source); })()), "isMandatoryField", ["_groups_id_requester"], "method", false, false, false, 81)) && $tmp instanceof Markup ? (string) $tmp : $tmp)), "id" => ("actor_" .                 // line 82
(isset($context["rand"]) || array_key_exists("rand", $context) ? $context["rand"] : (function () { throw new RuntimeError('Variable "rand" does not exist.', 82, $this->source); })()))])]);
                // line 84
                yield "
   ";
            } else {
                // line 86
                yield "      ";
                yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["requester_field"]) || array_key_exists("requester_field", $context) ? $context["requester_field"] : (function () { throw new RuntimeError('Variable "requester_field" does not exist.', 86, $this->source); })()), "html", null, true);
                yield "
   ";
            }
        }
        // line 89
        yield "
";
        // line 90
        if ((CoreExtension::inFilter("observer", (isset($context["display_actortypes"]) || array_key_exists("display_actortypes", $context) ? $context["display_actortypes"] : (function () { throw new RuntimeError('Variable "display_actortypes" does not exist.', 90, $this->source); })())) && ( !(($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["itiltemplate"]) || array_key_exists("itiltemplate", $context) ? $context["itiltemplate"] : (function () { throw new RuntimeError('Variable "itiltemplate" does not exist.', 90, $this->source); })()), "isHiddenField", ["_users_id_observer"], "method", false, false, false, 90)) && $tmp instanceof Markup ? (string) $tmp : $tmp) ||  !(($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["itiltemplate"]) || array_key_exists("itiltemplate", $context) ? $context["itiltemplate"] : (function () { throw new RuntimeError('Variable "itiltemplate" does not exist.', 90, $this->source); })()), "isHiddenField", ["_groups_id_observer"], "method", false, false, false, 90)) && $tmp instanceof Markup ? (string) $tmp : $tmp)))) {
            // line 91
            yield "   ";
            $context["rand"] = Twig\Extension\CoreExtension::random($this->env->getCharset());
            // line 92
            yield "   ";
            $context["observer_field"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                // line 93
                yield "      ";
                yield (string) Twig\Extension\CoreExtension::include($this->env, $context, "components/itilobject/actors/field.html.twig", ["rand" =>                 // line 94
(isset($context["rand"]) || array_key_exists("rand", $context) ? $context["rand"] : (function () { throw new RuntimeError('Variable "rand" does not exist.', 94, $this->source); })()), "item" =>                 // line 95
(isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 95, $this->source); })()), "actortypeint" => Twig\Extension\CoreExtension::constant("CommonITILActor::OBSERVER"), "actortype" => "observer", "entities_id" =>                 // line 98
(isset($context["entities_id"]) || array_key_exists("entities_id", $context) ? $context["entities_id"] : (function () { throw new RuntimeError('Variable "entities_id" does not exist.', 98, $this->source); })()), "itiltemplate" =>                 // line 99
(isset($context["itiltemplate"]) || array_key_exists("itiltemplate", $context) ? $context["itiltemplate"] : (function () { throw new RuntimeError('Variable "itiltemplate" does not exist.', 99, $this->source); })()), "params" =>                 // line 100
(isset($context["params"]) || array_key_exists("params", $context) ? $context["params"] : (function () { throw new RuntimeError('Variable "params" does not exist.', 100, $this->source); })()), "canupdate" =>                 // line 101
(isset($context["canupdate"]) || array_key_exists("canupdate", $context) ? $context["canupdate"] : (function () { throw new RuntimeError('Variable "canupdate" does not exist.', 101, $this->source); })()), "cancreateuser" => ((                // line 102
array_key_exists("cancreateuser", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["cancreateuser"]) || array_key_exists("cancreateuser", $context) ? $context["cancreateuser"] : (function () { throw new RuntimeError('Variable "cancreateuser" does not exist.', 102, $this->source); })()), false)) : (false)), "canassigntome" => (((                // line 103
array_key_exists("canassigntome", $context) &&  !(null === $context["canassigntome"]))) ? ($context["canassigntome"]) : (false)), "main_rand" =>                 // line 104
(isset($context["main_rand"]) || array_key_exists("main_rand", $context) ? $context["main_rand"] : (function () { throw new RuntimeError('Variable "main_rand" does not exist.', 104, $this->source); })()), "allow_auto_submit" =>                 // line 105
(isset($context["allow_auto_submit"]) || array_key_exists("allow_auto_submit", $context) ? $context["allow_auto_submit"] : (function () { throw new RuntimeError('Variable "allow_auto_submit" does not exist.', 105, $this->source); })())], false);
                // line 106
                yield "
   ";
                yield from [];
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 108
            yield "   ";
            if ((($tmp = (isset($context["display_labels"]) || array_key_exists("display_labels", $context) ? $context["display_labels"] : (function () { throw new RuntimeError('Variable "display_labels" does not exist.', 108, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 109
                yield "      ";
                yield (string) $macros["fields"]->getTemplateForMacro("macro_field", $context, 109, $this->getSourceContext())->macro_field(...["observer",                 // line 111
(isset($context["observer_field"]) || array_key_exists("observer_field", $context) ? $context["observer_field"] : (function () { throw new RuntimeError('Variable "observer_field" does not exist.', 111, $this->source); })()), _n("Observer", "Observers", 1), Twig\Extension\CoreExtension::merge(                // line 113
(isset($context["actor_options"]) || array_key_exists("actor_options", $context) ? $context["actor_options"] : (function () { throw new RuntimeError('Variable "actor_options" does not exist.', 113, $this->source); })()), ["required" => ((($tmp = CoreExtension::getAttribute($this->env, $this->source,                 // line 114
(isset($context["itiltemplate"]) || array_key_exists("itiltemplate", $context) ? $context["itiltemplate"] : (function () { throw new RuntimeError('Variable "itiltemplate" does not exist.', 114, $this->source); })()), "isMandatoryField", ["_users_id_observer"], "method", false, false, false, 114)) && $tmp instanceof Markup ? (string) $tmp : $tmp) || (($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["itiltemplate"]) || array_key_exists("itiltemplate", $context) ? $context["itiltemplate"] : (function () { throw new RuntimeError('Variable "itiltemplate" does not exist.', 114, $this->source); })()), "isMandatoryField", ["_groups_id_observer"], "method", false, false, false, 114)) && $tmp instanceof Markup ? (string) $tmp : $tmp)), "id" => ("actor_" .                 // line 115
(isset($context["rand"]) || array_key_exists("rand", $context) ? $context["rand"] : (function () { throw new RuntimeError('Variable "rand" does not exist.', 115, $this->source); })()))])]);
                // line 117
                yield "
   ";
            } else {
                // line 119
                yield "      ";
                yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["observer_field"]) || array_key_exists("observer_field", $context) ? $context["observer_field"] : (function () { throw new RuntimeError('Variable "observer_field" does not exist.', 119, $this->source); })()), "html", null, true);
                yield "
   ";
            }
        }
        // line 122
        yield "
";
        // line 123
        if ((CoreExtension::inFilter("assign", (isset($context["display_actortypes"]) || array_key_exists("display_actortypes", $context) ? $context["display_actortypes"] : (function () { throw new RuntimeError('Variable "display_actortypes" does not exist.', 123, $this->source); })())) && (( !(($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["itiltemplate"]) || array_key_exists("itiltemplate", $context) ? $context["itiltemplate"] : (function () { throw new RuntimeError('Variable "itiltemplate" does not exist.', 123, $this->source); })()), "isHiddenField", ["_users_id_assign"], "method", false, false, false, 123)) && $tmp instanceof Markup ? (string) $tmp : $tmp) ||  !(($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["itiltemplate"]) || array_key_exists("itiltemplate", $context) ? $context["itiltemplate"] : (function () { throw new RuntimeError('Variable "itiltemplate" does not exist.', 123, $this->source); })()), "isHiddenField", ["_groups_id_assign"], "method", false, false, false, 123)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ||  !(($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["itiltemplate"]) || array_key_exists("itiltemplate", $context) ? $context["itiltemplate"] : (function () { throw new RuntimeError('Variable "itiltemplate" does not exist.', 123, $this->source); })()), "isHiddenField", ["_supplier_id_assign"], "method", false, false, false, 123)) && $tmp instanceof Markup ? (string) $tmp : $tmp)))) {
            // line 124
            yield "   ";
            $context["assign_field"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                // line 125
                yield "      ";
                $context["rand"] = Twig\Extension\CoreExtension::random($this->env->getCharset());
                // line 126
                yield "      ";
                yield (string) Twig\Extension\CoreExtension::include($this->env, $context, "components/itilobject/actors/field.html.twig", ["rand" =>                 // line 127
(isset($context["rand"]) || array_key_exists("rand", $context) ? $context["rand"] : (function () { throw new RuntimeError('Variable "rand" does not exist.', 127, $this->source); })()), "item" =>                 // line 128
(isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 128, $this->source); })()), "actortypeint" => Twig\Extension\CoreExtension::constant("CommonITILActor::ASSIGN"), "actortype" => "assign", "users_right" => "own_ticket", "entities_id" =>                 // line 132
(isset($context["entities_id"]) || array_key_exists("entities_id", $context) ? $context["entities_id"] : (function () { throw new RuntimeError('Variable "entities_id" does not exist.', 132, $this->source); })()), "itiltemplate" =>                 // line 133
(isset($context["itiltemplate"]) || array_key_exists("itiltemplate", $context) ? $context["itiltemplate"] : (function () { throw new RuntimeError('Variable "itiltemplate" does not exist.', 133, $this->source); })()), "params" =>                 // line 134
(isset($context["params"]) || array_key_exists("params", $context) ? $context["params"] : (function () { throw new RuntimeError('Variable "params" does not exist.', 134, $this->source); })()), "canupdate" =>                 // line 135
(isset($context["canassign"]) || array_key_exists("canassign", $context) ? $context["canassign"] : (function () { throw new RuntimeError('Variable "canassign" does not exist.', 135, $this->source); })()), "canassigntome" => (((                // line 136
array_key_exists("canassigntome", $context) &&  !(null === $context["canassigntome"]))) ? ($context["canassigntome"]) : (false)), "main_rand" =>                 // line 137
(isset($context["main_rand"]) || array_key_exists("main_rand", $context) ? $context["main_rand"] : (function () { throw new RuntimeError('Variable "main_rand" does not exist.', 137, $this->source); })()), "allow_auto_submit" =>                 // line 138
(isset($context["allow_auto_submit"]) || array_key_exists("allow_auto_submit", $context) ? $context["allow_auto_submit"] : (function () { throw new RuntimeError('Variable "allow_auto_submit" does not exist.', 138, $this->source); })())], false);
                // line 139
                yield "
   ";
                yield from [];
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 141
            yield "   ";
            if ((($tmp = (isset($context["display_labels"]) || array_key_exists("display_labels", $context) ? $context["display_labels"] : (function () { throw new RuntimeError('Variable "display_labels" does not exist.', 141, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 142
                yield "      ";
                yield (string) $macros["fields"]->getTemplateForMacro("macro_field", $context, 142, $this->getSourceContext())->macro_field(...["assign",                 // line 144
(isset($context["assign_field"]) || array_key_exists("assign_field", $context) ? $context["assign_field"] : (function () { throw new RuntimeError('Variable "assign_field" does not exist.', 144, $this->source); })()), __("Assigned to"), Twig\Extension\CoreExtension::merge(                // line 146
(isset($context["actor_options"]) || array_key_exists("actor_options", $context) ? $context["actor_options"] : (function () { throw new RuntimeError('Variable "actor_options" does not exist.', 146, $this->source); })()), ["required" => (((($tmp = CoreExtension::getAttribute($this->env, $this->source,                 // line 147
(isset($context["itiltemplate"]) || array_key_exists("itiltemplate", $context) ? $context["itiltemplate"] : (function () { throw new RuntimeError('Variable "itiltemplate" does not exist.', 147, $this->source); })()), "isMandatoryField", ["_users_id_assign"], "method", false, false, false, 147)) && $tmp instanceof Markup ? (string) $tmp : $tmp) || (($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["itiltemplate"]) || array_key_exists("itiltemplate", $context) ? $context["itiltemplate"] : (function () { throw new RuntimeError('Variable "itiltemplate" does not exist.', 147, $this->source); })()), "isMandatoryField", ["_groups_id_assign"], "method", false, false, false, 147)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) || (($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["itiltemplate"]) || array_key_exists("itiltemplate", $context) ? $context["itiltemplate"] : (function () { throw new RuntimeError('Variable "itiltemplate" does not exist.', 147, $this->source); })()), "isMandatoryField", ["_supplier_id_assign"], "method", false, false, false, 147)) && $tmp instanceof Markup ? (string) $tmp : $tmp)), "id" => ("actor_" .                 // line 148
(isset($context["rand"]) || array_key_exists("rand", $context) ? $context["rand"] : (function () { throw new RuntimeError('Variable "rand" does not exist.', 148, $this->source); })()))])]);
                // line 150
                yield "
   ";
            } else {
                // line 152
                yield "      ";
                yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["assign_field"]) || array_key_exists("assign_field", $context) ? $context["assign_field"] : (function () { throw new RuntimeError('Variable "assign_field" does not exist.', 152, $this->source); })()), "html", null, true);
                yield "
   ";
            }
        }
        // line 155
        yield "
<input type=\"hidden\" name=\"_actors\" id=\"_actors\" />

";
        // line 159
        yield "<div class=\"modal fade\" id=\"editActorNotifySettings\" tabindex=\"-1\" aria-hidden=\"true\">
  <div class=\"modal-dialog\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
         <h5 class=\"modal-title\">
            <i class=\"ti ti-mail\"></i>
            &nbsp;";
        // line 165
        yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Edit notification settings"), "html", null, true);
        yield "
         </h5>
         <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"";
        // line 167
        yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Close"), "html", null, true);
        yield "\"></button>
      </div>
      <div class=\"modal-body\">
         <div class=\"mb-3\">
            <label class=\"form-label\" for=\"actorname\">";
        // line 171
        yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Actor"), "html", null, true);
        yield "</label>
            <input type=\"text\" class=\"form-control\" id=\"actorname\" name=\"_notifications_actorname\" />
            <input type=\"hidden\" name=\"_notifications_actortype\" value=\"\" />
            <input type=\"hidden\" name=\"_notifications_actorindex\" value=\"\" />
         </div>
         <div class=\"mb-3\">
            <label for=\"alternative_email\" class=\"form-label\">";
        // line 177
        yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Email address"), "html", null, true);
        yield "</label>
            <div class=\"form-check form-switch\">
               <input class=\"form-check-input\" type=\"checkbox\" id=\"use_notification\" name=\"_notifications_use_notification\" />
               <label class=\"form-check-label\" for=\"use_notification\">";
        // line 180
        yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Email followup"), "html", null, true);
        yield "</label>
            </div>
            <div id=\"alert_notification_disable\" class=\x27alert alert-info d-flex align-items-center mb-4 d-none\x27 role=\x27alert\x27>
               <i class=\x27ti ti-info-circle fs-2x\x27></i>
               <span class=\x27ms-2\x27>
                  ";
        // line 185
        yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Notifications are disabled because:"), "html", null, true);
        yield "
                  <ul>
                     <li>";
        // line 187
        yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("User does not have an email address."), "html", null, true);
        yield "</li>
                     <li>";
        // line 188
        yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("User has disabled notifications from its preferences."), "html", null, true);
        yield "</li>
                     <li>";
        // line 189
        yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Notifications are disabled in this entity."), "html", null, true);
        yield "</li>
                  </ul>
                  ";
        // line 191
        yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("However, you can reactivate the notifications for this ticket."), "html", null, true);
        yield "
               </span>
            </div>
            <input type=\"email\" class=\"form-control\" id=\"alternative_email\" name=\"_notifications_alternative_email\" />
         </div>
      </div>
      <div class=\"modal-footer\">
         <button type=\"button\" class=\"btn btn-outline-secondary\" data-bs-dismiss=\"modal\">
            <i class=\"ti ti-x\"></i>
            <span>";
        // line 200
        yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Close"), "html", null, true);
        yield "</span>
         </button>
         <button type=\"button\" class=\"btn btn-primary\" id=\"saveActorNotifySettings\">
            <i class=\"ti ti-device-floppy\"></i>
            <span>";
        // line 204
        yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Save"), "html", null, true);
        yield "</span>
         </button>
      </div>
    </div>
  </div>
</div>

";
        // line 211
        $context["actortypes"] = ["requester" => Twig\Extension\CoreExtension::constant("CommonITILActor::REQUESTER"), "observer" => Twig\Extension\CoreExtension::constant("CommonITILActor::OBSERVER"), "assign" => Twig\Extension\CoreExtension::constant("CommonITILActor::ASSIGN")];
        // line 216
        yield "
<script type=\"text/javascript\">
   /* global bootstrap */
   var editActorNotifySettings_modal = null;
   \$(function () {
      editActorNotifySettings_modal = new bootstrap.Modal(document.getElementById(\x27editActorNotifySettings\x27), {});
   });

   var actors = {
      ";
        // line 225
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["actortypes"]) || array_key_exists("actortypes", $context) ? $context["actortypes"] : (function () { throw new RuntimeError('Variable "actortypes" does not exist.', 225, $this->source); })()));
        foreach ($context['_seq'] as $context["actortype"] => $context["actortypeint"]) {
            // line 226
            yield "         ";
            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["actortype"], "html", null, true);
            yield ": [
            ";
            // line 227
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 227, $this->source); })()), "getActorsForType", [$context["actortypeint"], (isset($context["params"]) || array_key_exists("params", $context) ? $context["params"] : (function () { throw new RuntimeError('Variable "params" does not exist.', 227, $this->source); })())], "method", false, false, false, 227));
            foreach ($context['_seq'] as $context["_key"] => $context["actor"]) {
                // line 228
                yield "            {
               itemtype: \"";
                // line 229
                yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["actor"], "itemtype", [], "array", false, false, false, 229), "js"), "html", null, true);
                yield "\",
               items_id: \"";
                // line 230
                yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["actor"], "items_id", [], "array", false, false, false, 230), "js"), "html", null, true);
                yield "\",
               use_notification: ";
                // line 231
                yield (string) (((($tmp = (((CoreExtension::getAttribute($this->env, $this->source, $context["actor"], "use_notification", [], "array", true, true, false, 231) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["actor"], "use_notification", [], "array", false, false, false, 231)))) ? (CoreExtension::getAttribute($this->env, $this->source, $context["actor"], "use_notification", [], "array", false, false, false, 231)) : (false))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("1") : ("0"));
                yield ",
               alternative_email: \"";
                // line 232
                yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((((CoreExtension::getAttribute($this->env, $this->source, $context["actor"], "alternative_email", [], "array", true, true, false, 232) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["actor"], "alternative_email", [], "array", false, false, false, 232)))) ? (CoreExtension::getAttribute($this->env, $this->source, $context["actor"], "alternative_email", [], "array", false, false, false, 232)) : ("")), "js"), "html", null, true);
                yield "\",
               default_email: \"";
                // line 233
                yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((((CoreExtension::getAttribute($this->env, $this->source, $context["actor"], "default_email", [], "array", true, true, false, 233) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["actor"], "default_email", [], "array", false, false, false, 233)))) ? (CoreExtension::getAttribute($this->env, $this->source, $context["actor"], "default_email", [], "array", false, false, false, 233)) : ("")), "js"), "html", null, true);
                yield "\",
            },
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['actor'], $context['_parent']);
            $context = array_intersect_key($context, $_parent);
            $context += $_parent;
            // line 236
            yield "         ],
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['actortype'], $context['actortypeint'], $context['_parent']);
        $context = array_intersect_key($context, $_parent);
        $context += $_parent;
        // line 238
        yield "   };

   // edit email preference when .edit-notify-user button is activated
   function openNotifyModal(event) {
      event.stopPropagation();

      var element = \$(event.target).closest(\x27.actor_entry\x27);
      var itemtype  = element.data(\x27itemtype\x27);
      var items_id  = element.data(\x27items-id\x27);
      var actortype = element.data(\x27actortype\x27);
      var text      = element.find(\x27.actor_text\x27).text().trim();

      actorIndex = actors[actortype].findIndex(element =>
         element.itemtype == itemtype &&
         (items_id === 0 ? element.alternative_email == text : element.items_id == items_id)
      );
      var actor = actors[actortype][actorIndex];

      var modal = \$(\x27#editActorNotifySettings\x27);
      modal.find(\"input[name=_notifications_actortype]\").val(actortype);
      modal.find(\"input[name=_notifications_actorindex]\").val(actorIndex);
      modal.find(\"input[name=_notifications_actorname]\").removeAttr(\x27readonly\x27).val(text).attr(\x27readonly\x27, \x27true\x27);
      modal.find(\"input[name=_notifications_use_notification]\").prop(\x27checked\x27, parseInt(actor.use_notification));
      modal.find(\"input[name=_notifications_alternative_email]\").attr(\x27placeholder\x27, actor.default_email);
      modal.find(\"input[name=_notifications_alternative_email]\").val(actor.alternative_email);
      modal.find(\"#alert_notification_disable\").toggleClass(\x27d-none\x27, parseInt(actor.use_notification) == true);

      editActorNotifySettings_modal.show();
   }

   // save edited actor when clicking on save button
   \$(document).on(\x27click\x27, \x27#saveActorNotifySettings\x27, function(event) {
      saveNotificationSettings();
   });

   // prevent submit on enter key in modal (but save notification settings)
   \$(document).on(\x27keyup keypress\x27, \x27#editActorNotifySettings input\x27, function(event) {
      var keyCode = event.keyCode || event.which;
      if (keyCode === 13) {
         event.preventDefault();
         saveNotificationSettings();
         return false;
      }
   });

   // save settings from modal (get modal data, and serialize them into input hidden)
   function saveNotificationSettings() {
      var modal = \$(\x27#editActorNotifySettings\x27);
      var actortype  = modal.find(\"input[name=_notifications_actortype]\").val();
      var actorIndex = modal.find(\"input[name=_notifications_actorindex]\").val();
      var use_notif  = (modal.find(\"input[name=_notifications_use_notification]\").is(\":checked\") ? 1 : 0);
      var alt_email  = modal.find(\"input[name=_notifications_alternative_email]\").val();

      var actor = actors[actortype][actorIndex];
      actor.use_notification = use_notif;
      actor.alternative_email = alt_email;

      var actor_entry = \$(\x27.actor_entry[data-itemtype=\x27+CSS.escape(actor.itemtype)+\x27][data-items-id=\x27+parseInt(actor.items_id)+\x27][data-actortype=\x27+CSS.escape(actortype)+\x27]\x27)
         .filter(function() {
            if(actor.items_id == 0 && actor.itemtype == \"User\") {
               return \$(this).text().trim() === actor.alternative_email;
            }
            return \$(this).text()
         });

      // toggle notify icon
      actor_entry.find(\x27.notify-icon\x27)
          .toggleClass(\x27ti-bell-filled\x27, use_notif === 1)
          .toggleClass(\x27ti-bell\x27, use_notif === 0);

      // toggle text for direct email
      if (actor.itemtype == \"User\" && parseInt(actor.items_id) == 0) {
         actor_entry.find(\x27.actor_text\x27).html(alt_email);
      }


      editActorNotifySettings_modal.hide();
      saveActorsToDom();
   }

   // save actors object to dom
   function saveActorsToDom() {
      \$(\x27#_actors\x27).val(JSON.stringify(actors));
   }
   saveActorsToDom();
</script>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "components/itilobject/actors/main.html.twig";
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
        return array (  392 => 238,  384 => 236,  374 => 233,  370 => 232,  366 => 231,  362 => 230,  358 => 229,  355 => 228,  351 => 227,  346 => 226,  342 => 225,  331 => 216,  329 => 211,  319 => 204,  312 => 200,  300 => 191,  295 => 189,  291 => 188,  287 => 187,  282 => 185,  274 => 180,  268 => 177,  259 => 171,  252 => 167,  247 => 165,  239 => 159,  234 => 155,  227 => 152,  223 => 150,  221 => 148,  220 => 147,  219 => 146,  218 => 144,  216 => 142,  213 => 141,  208 => 139,  206 => 138,  205 => 137,  204 => 136,  203 => 135,  202 => 134,  201 => 133,  200 => 132,  199 => 128,  198 => 127,  196 => 126,  193 => 125,  190 => 124,  188 => 123,  185 => 122,  178 => 119,  174 => 117,  172 => 115,  171 => 114,  170 => 113,  169 => 111,  167 => 109,  164 => 108,  159 => 106,  157 => 105,  156 => 104,  155 => 103,  154 => 102,  153 => 101,  152 => 100,  151 => 99,  150 => 98,  149 => 95,  148 => 94,  146 => 93,  143 => 92,  140 => 91,  138 => 90,  135 => 89,  128 => 86,  124 => 84,  122 => 82,  121 => 81,  120 => 80,  119 => 78,  117 => 76,  114 => 75,  109 => 73,  107 => 72,  106 => 71,  105 => 70,  104 => 69,  103 => 68,  102 => 67,  101 => 66,  100 => 65,  99 => 62,  98 => 61,  96 => 60,  93 => 59,  90 => 58,  88 => 57,  85 => 56,  82 => 54,  80 => 52,  77 => 50,  73 => 48,  71 => 47,  69 => 46,  67 => 44,  66 => 42,  63 => 41,  59 => 39,  57 => 38,  53 => 36,  51 => 35,  48 => 34,  46 => 33,  43 => 32,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "components/itilobject/actors/main.html.twig", "/Users/alvarozuculajunior/BCX/glpi/templates/components/itilobject/actors/main.html.twig");
    }
}
