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

/* components/itilobject/actors/field.html.twig */
class __TwigTemplate_2322a04080d68e62b838494d8c5a4989 extends Template
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
        $context["rand"] = Html::sanitizeDomId(((array_key_exists("rand", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["rand"]) || array_key_exists("rand", $context) ? $context["rand"] : (function () { throw new RuntimeError('Variable "rand" does not exist.', 33, $this->source); })()), Twig\Extension\CoreExtension::random($this->env->getCharset()))) : (Twig\Extension\CoreExtension::random($this->env->getCharset()))));
        // line 34
        yield "
";
        // line 35
        $context["load_actors"] = (((CoreExtension::getAttribute($this->env, $this->source, ($context["params"] ?? null), "load_actors", [], "array", true, true, false, 35) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["params"]) || array_key_exists("params", $context) ? $context["params"] : (function () { throw new RuntimeError('Variable "params" does not exist.', 35, $this->source); })()), "load_actors", [], "array", false, false, false, 35)))) ? (CoreExtension::getAttribute($this->env, $this->source, (isset($context["params"]) || array_key_exists("params", $context) ? $context["params"] : (function () { throw new RuntimeError('Variable "params" does not exist.', 35, $this->source); })()), "load_actors", [], "array", false, false, false, 35)) : (true));
        // line 36
        $context["actors"] = (((($tmp = (isset($context["load_actors"]) || array_key_exists("load_actors", $context) ? $context["load_actors"] : (function () { throw new RuntimeError('Variable "load_actors" does not exist.', 36, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 36, $this->source); })()), "getActorsForType", [(isset($context["actortypeint"]) || array_key_exists("actortypeint", $context) ? $context["actortypeint"] : (function () { throw new RuntimeError('Variable "actortypeint" does not exist.', 36, $this->source); })()), (isset($context["params"]) || array_key_exists("params", $context) ? $context["params"] : (function () { throw new RuntimeError('Variable "params" does not exist.', 36, $this->source); })())], "method", false, false, false, 36)) : ([]));
        // line 37
        yield "
";
        // line 38
        $context["required"] = false;
        // line 39
        if ((((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["itiltemplate"]) || array_key_exists("itiltemplate", $context) ? $context["itiltemplate"] : (function () { throw new RuntimeError('Variable "itiltemplate" does not exist.', 39, $this->source); })()), "isMandatoryField", [("_users_id_" . (isset($context["actortype"]) || array_key_exists("actortype", $context) ? $context["actortype"] : (function () { throw new RuntimeError('Variable "actortype" does not exist.', 39, $this->source); })()))], "method", false, false, false, 39)) && $tmp instanceof Markup ? (string) $tmp : $tmp) || (($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["itiltemplate"]) || array_key_exists("itiltemplate", $context) ? $context["itiltemplate"] : (function () { throw new RuntimeError('Variable "itiltemplate" does not exist.', 39, $this->source); })()), "isMandatoryField", [("_groups_id_" . (isset($context["actortype"]) || array_key_exists("actortype", $context) ? $context["actortype"] : (function () { throw new RuntimeError('Variable "actortype" does not exist.', 39, $this->source); })()))], "method", false, false, false, 39)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) || (((isset($context["actortype"]) || array_key_exists("actortype", $context) ? $context["actortype"] : (function () { throw new RuntimeError('Variable "actortype" does not exist.', 39, $this->source); })()) == "assign") && (($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["itiltemplate"]) || array_key_exists("itiltemplate", $context) ? $context["itiltemplate"] : (function () { throw new RuntimeError('Variable "itiltemplate" does not exist.', 39, $this->source); })()), "isMandatoryField", [("_suppliers_id_" . (isset($context["actortype"]) || array_key_exists("actortype", $context) ? $context["actortype"] : (function () { throw new RuntimeError('Variable "actortype" does not exist.', 39, $this->source); })()))], "method", false, false, false, 39)) && $tmp instanceof Markup ? (string) $tmp : $tmp)))) {
            // line 40
            yield "   ";
            $context["required"] = true;
        }
        // line 42
        yield "
";
        // line 43
        $context["is_actor_hidden"] = false;
        // line 44
        if ((((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["itiltemplate"]) || array_key_exists("itiltemplate", $context) ? $context["itiltemplate"] : (function () { throw new RuntimeError('Variable "itiltemplate" does not exist.', 44, $this->source); })()), "isHiddenField", [("_users_id_" . (isset($context["actortype"]) || array_key_exists("actortype", $context) ? $context["actortype"] : (function () { throw new RuntimeError('Variable "actortype" does not exist.', 44, $this->source); })()))], "method", false, false, false, 44)) && $tmp instanceof Markup ? (string) $tmp : $tmp) && (($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["itiltemplate"]) || array_key_exists("itiltemplate", $context) ? $context["itiltemplate"] : (function () { throw new RuntimeError('Variable "itiltemplate" does not exist.', 44, $this->source); })()), "isHiddenField", [("_groups_id_" . (isset($context["actortype"]) || array_key_exists("actortype", $context) ? $context["actortype"] : (function () { throw new RuntimeError('Variable "actortype" does not exist.', 44, $this->source); })()))], "method", false, false, false, 44)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) && (((isset($context["actortype"]) || array_key_exists("actortype", $context) ? $context["actortype"] : (function () { throw new RuntimeError('Variable "actortype" does not exist.', 44, $this->source); })()) != "assign") || (($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["itiltemplate"]) || array_key_exists("itiltemplate", $context) ? $context["itiltemplate"] : (function () { throw new RuntimeError('Variable "itiltemplate" does not exist.', 44, $this->source); })()), "isHiddenField", [("_suppliers_id_" . (isset($context["actortype"]) || array_key_exists("actortype", $context) ? $context["actortype"] : (function () { throw new RuntimeError('Variable "actortype" does not exist.', 44, $this->source); })()))], "method", false, false, false, 44)) && $tmp instanceof Markup ? (string) $tmp : $tmp)))) {
            // line 45
            yield "   ";
            $context["is_actor_hidden"] = true;
        }
        // line 47
        yield "
";
        // line 48
        $context["onchange"] = "";
        // line 49
        $context["allow_auto_submit"] = (((array_key_exists("allow_auto_submit", $context) &&  !(null === $context["allow_auto_submit"]))) ? ($context["allow_auto_submit"]) : (true));
        // line 50
        if ((((($tmp = (isset($context["allow_auto_submit"]) || array_key_exists("allow_auto_submit", $context) ? $context["allow_auto_submit"] : (function () { throw new RuntimeError('Variable "allow_auto_submit" does not exist.', 50, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp) && (($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 50, $this->source); })()), "isNewItem", [], "method", false, false, false, 50)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) && ((isset($context["actortype"]) || array_key_exists("actortype", $context) ? $context["actortype"] : (function () { throw new RuntimeError('Variable "actortype" does not exist.', 50, $this->source); })()) == "requester"))) {
            // line 51
            yield "   ";
            $context["onchange"] = "e.target.form.submit();";
        }
        // line 53
        yield "
";
        // line 54
        if ( !(($tmp = (isset($context["is_actor_hidden"]) || array_key_exists("is_actor_hidden", $context) ? $context["is_actor_hidden"] : (function () { throw new RuntimeError('Variable "is_actor_hidden" does not exist.', 54, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 55
            yield "   <select class=\"form-select\" multiple=\"true\" id=\"actor_";
            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["rand"]) || array_key_exists("rand", $context) ? $context["rand"] : (function () { throw new RuntimeError('Variable "rand" does not exist.', 55, $this->source); })()), "html", null, true);
            yield "\" data-actor-type=\"";
            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["actortype"]) || array_key_exists("actortype", $context) ? $context["actortype"] : (function () { throw new RuntimeError('Variable "actortype" does not exist.', 55, $this->source); })()), "html", null, true);
            yield "\" data-testid=\"select-";
            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["actortype"]) || array_key_exists("actortype", $context) ? $context["actortype"] : (function () { throw new RuntimeError('Variable "actortype" does not exist.', 55, $this->source); })()), "html", null, true);
            yield "\"
        ";
            // line 56
            yield (string) (((($tmp = (isset($context["required"]) || array_key_exists("required", $context) ? $context["required"] : (function () { throw new RuntimeError('Variable "required" does not exist.', 56, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("required") : (""));
            yield ">
   ";
            // line 57
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["actors"]) || array_key_exists("actors", $context) ? $context["actors"] : (function () { throw new RuntimeError('Variable "actors" does not exist.', 57, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["actor"]) {
                // line 58
                yield "      ";
                $context["unique_id"] = ((("user_opt_" . (isset($context["actortype"]) || array_key_exists("actortype", $context) ? $context["actortype"] : (function () { throw new RuntimeError('Variable "actortype" does not exist.', 58, $this->source); })())) . CoreExtension::getAttribute($this->env, $this->source, $context["actor"], "itemtype", [], "any", false, false, false, 58)) . CoreExtension::getAttribute($this->env, $this->source, $context["actor"], "items_id", [], "any", false, false, false, 58));
                // line 59
                yield "      ";
                $context["actor_use_notification"] = (((CoreExtension::getAttribute($this->env, $this->source, $context["actor"], "use_notification", [], "array", true, true, false, 59) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["actor"], "use_notification", [], "array", false, false, false, 59)))) ? (CoreExtension::getAttribute($this->env, $this->source, $context["actor"], "use_notification", [], "array", false, false, false, 59)) : (false));
                // line 60
                yield "      <option selected=\"true\" value=\"";
                yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["actor"], "itemtype", [], "array", false, false, false, 60) . "_") . CoreExtension::getAttribute($this->env, $this->source, $context["actor"], "items_id", [], "array", false, false, false, 60)), "html", null, true);
                yield "\"
            data-itemtype=\"";
                // line 61
                yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["actor"], "itemtype", [], "array", false, false, false, 61), "html", null, true);
                yield "\" data-items-id=\"";
                yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["actor"], "items_id", [], "array", false, false, false, 61), "html", null, true);
                yield "\"
            data-use-notification=\"";
                // line 62
                yield (string) (((($tmp = (isset($context["actor_use_notification"]) || array_key_exists("actor_use_notification", $context) ? $context["actor_use_notification"] : (function () { throw new RuntimeError('Variable "actor_use_notification" does not exist.', 62, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (1) : (0));
                yield "\"
            data-default-email=\"";
                // line 63
                yield (string) (((CoreExtension::getAttribute($this->env, $this->source, $context["actor"], "default_email", [], "array", true, true, false, 63) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["actor"], "default_email", [], "array", false, false, false, 63)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["actor"], "default_email", [], "array", false, false, false, 63), "html", null, true)) : (""));
                yield "\"
            data-alternative-email=\"";
                // line 64
                yield (string) (((CoreExtension::getAttribute($this->env, $this->source, $context["actor"], "alternative_email", [], "array", true, true, false, 64) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["actor"], "alternative_email", [], "array", false, false, false, 64)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["actor"], "alternative_email", [], "array", false, false, false, 64), "html", null, true)) : (""));
                yield "\"
            ";
                // line 65
                if ((((CoreExtension::getAttribute($this->env, $this->source, $context["actor"], "itemtype", [], "array", false, false, false, 65) == "User") && (($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["itiltemplate"]) || array_key_exists("itiltemplate", $context) ? $context["itiltemplate"] : (function () { throw new RuntimeError('Variable "itiltemplate" does not exist.', 65, $this->source); })()), "isHiddenField", [("_users_id_" . (isset($context["actortype"]) || array_key_exists("actortype", $context) ? $context["actortype"] : (function () { throw new RuntimeError('Variable "actortype" does not exist.', 65, $this->source); })()))], "method", false, false, false, 65)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) || ((CoreExtension::getAttribute($this->env, $this->source, $context["actor"], "itemtype", [], "array", false, false, false, 65) == "Group") && (($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["itiltemplate"]) || array_key_exists("itiltemplate", $context) ? $context["itiltemplate"] : (function () { throw new RuntimeError('Variable "itiltemplate" does not exist.', 65, $this->source); })()), "isHiddenField", [("_groups_id_" . (isset($context["actortype"]) || array_key_exists("actortype", $context) ? $context["actortype"] : (function () { throw new RuntimeError('Variable "actortype" does not exist.', 65, $this->source); })()))], "method", false, false, false, 65)) && $tmp instanceof Markup ? (string) $tmp : $tmp)))) {
                    // line 66
                    yield "               disabled=\"disabled\" style=\"display: none;\"
            ";
                }
                // line 68
                yield "            data-text=\"";
                yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["actor"], "text", [], "array", false, false, false, 68), "html", null, true);
                yield "\" data-title=\"";
                yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["actor"], "title", [], "array", false, false, false, 68), "html", null, true);
                yield "\" data-glpi-popover-source=\"content";
                yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["unique_id"]) || array_key_exists("unique_id", $context) ? $context["unique_id"] : (function () { throw new RuntimeError('Variable "unique_id" does not exist.', 68, $this->source); })()), "html", null, true);
                yield "\">
         ";
                // line 69
                yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["actor"], "title", [], "array", false, false, false, 69), "html", null, true);
                yield "
      </option>
   ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['actor'], $context['_parent']);
            $context = array_intersect_key($context, $_parent);
            $context += $_parent;
            // line 72
            yield "   </select>

   ";
            // line 74
            if ((( !(($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 74, $this->source); })()), "isNewItem", [], "method", false, false, false, 74)) && $tmp instanceof Markup ? (string) $tmp : $tmp) &&  !(($tmp = (((CoreExtension::getAttribute($this->env, $this->source, ($context["params"] ?? null), "template_preview", [], "array", true, true, false, 74) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["params"]) || array_key_exists("params", $context) ? $context["params"] : (function () { throw new RuntimeError('Variable "params" does not exist.', 74, $this->source); })()), "template_preview", [], "array", false, false, false, 74)))) ? (CoreExtension::getAttribute($this->env, $this->source, (isset($context["params"]) || array_key_exists("params", $context) ? $context["params"] : (function () { throw new RuntimeError('Variable "params" does not exist.', 74, $this->source); })()), "template_preview", [], "array", false, false, false, 74)) : (false))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) && (($tmp = (isset($context["canassigntome"]) || array_key_exists("canassigntome", $context) ? $context["canassigntome"] : (function () { throw new RuntimeError('Variable "canassigntome" does not exist.', 74, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp))) {
                // line 75
                yield "      ";
                yield (string) Twig\Extension\CoreExtension::include($this->env, $context, "components/itilobject/actors/assign_to_me.html.twig");
                yield "
   ";
            }
            // line 77
            yield "
    ";
            // line 87
            yield "    ";
            $context["safe_item_fields"] = Twig\Extension\CoreExtension::filter($this->env, $this->env->hasExtension(\Twig\Extension\SandboxExtension::class) && $this->env->getExtension(\Twig\Extension\SandboxExtension::class)->isSandboxed($this->source), CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 87, $this->source); })()), "fields", [], "any", false, false, false, 87), function ($__value__, $__key__) use ($context, $macros) { $context["value"] = $__value__; $context["key"] = $__key__; return ((isset($context["key"]) || array_key_exists("key", $context) ? $context["key"] : (function () { throw new RuntimeError('Variable "key" does not exist.', 87, $this->source); })()) != "content"); });
            // line 88
            yield "    <script type=\"module\" defer>
        const actorytype = \x27";
            // line 89
            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["actortype"]) || array_key_exists("actortype", $context) ? $context["actortype"] : (function () { throw new RuntimeError('Variable "actortype" does not exist.', 89, $this->source); })()), "js"), "html", null, true);
            yield "\x27;

        // function to display an option in the list or the selected input
        function genericTemplate(option = {}, is_selection = false) {
            const element   = \$(option.element);
            const itemtype  = element.data(\x27itemtype\x27) ?? option.itemtype;
            const items_id  = element.data(\x27items-id\x27) ?? option.items_id;
            let text        = _.escape(element.data(\x27text\x27) ?? option.text ?? \x27\x27);
            const title     = _.escape(element.data(\x27title\x27) ?? option.title ?? \x27\x27);
            const use_notif = element.data(\x27use-notification\x27) ?? option.use_notification ?? 1;
            const alt_email = element.data(\x27alternative-email\x27) ?? option.alternative_email ?? \x27\x27;

            let icon = \"\";
            let fk   = \"\";
            switch (itemtype) {
                case \"User\":
                    if (items_id == 0) {
                        text = _.escape(alt_email);
                        icon = `<i class=\"ti ti-mail mx-1\" title=\"";
            // line 107
            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Direct email"), "html"), "js"), "html", null, true);
            yield "\"></i>`;
                    } else {
                        icon = `<i class=\"ti ti-user mx-1\" title=\"";
            // line 109
            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeName("User"), "html"), "js"), "html", null, true);
            yield "\"></i>`;
                    }
                    if (\"";
            // line 111
            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["actortype"]) || array_key_exists("actortype", $context) ? $context["actortype"] : (function () { throw new RuntimeError('Variable "actortype" does not exist.', 111, $this->source); })()), "js"), "html", null, true);
            yield "\" == \"assign\") {
                        fk = \"users_id_assign\";
                    } else if (\"";
            // line 113
            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["actortype"]) || array_key_exists("actortype", $context) ? $context["actortype"] : (function () { throw new RuntimeError('Variable "actortype" does not exist.', 113, $this->source); })()), "js"), "html", null, true);
            yield "\" == \"requester\") {
                        fk = \"users_id_requester\";
                    } else if (\"";
            // line 115
            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["actortype"]) || array_key_exists("actortype", $context) ? $context["actortype"] : (function () { throw new RuntimeError('Variable "actortype" does not exist.', 115, $this->source); })()), "js"), "html", null, true);
            yield "\" == \"observer\") {
                        fk = \"users_id_observer\";
                    }
                    break;
                case \"Group\":
                    icon = `<i class=\"ti ti-users mx-1\" title=\"";
            // line 120
            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeName("Group"), "html"), "js"), "html", null, true);
            yield "\"></i>`;
                    if (\"";
            // line 121
            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["actortype"]) || array_key_exists("actortype", $context) ? $context["actortype"] : (function () { throw new RuntimeError('Variable "actortype" does not exist.', 121, $this->source); })()), "js"), "html", null, true);
            yield "\" == \"assign\") {
                        fk = \"groups_id_assign\";
                    } else if (\"";
            // line 123
            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["actortype"]) || array_key_exists("actortype", $context) ? $context["actortype"] : (function () { throw new RuntimeError('Variable "actortype" does not exist.', 123, $this->source); })()), "js"), "html", null, true);
            yield "\" == \"requester\") {
                        fk = \"groups_id_requester\";
                    } else if (\"";
            // line 125
            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["actortype"]) || array_key_exists("actortype", $context) ? $context["actortype"] : (function () { throw new RuntimeError('Variable "actortype" does not exist.', 125, $this->source); })()), "js"), "html", null, true);
            yield "\" == \"observer\") {
                        fk = \"groups_id_observer\";
                    }
                    break;
                case \"Supplier\":
                    icon = `<i class=\"ti ti-package mx-1\" title=\"";
            // line 130
            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeName("Supplier"), "html"), "js"), "html", null, true);
            yield "\"></i>`;
                    fk   = \"suppliers_id_assign\";
                    break;
            }

            let actions = \"\";
            ";
            // line 136
            if ((($tmp = (isset($context["canupdate"]) || array_key_exists("canupdate", $context) ? $context["canupdate"] : (function () { throw new RuntimeError('Variable "canupdate" does not exist.', 136, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 137
                yield "            if ([\x27User\x27, \x27Supplier\x27, \x27Email\x27].includes(itemtype)
                && is_selection) {
                const icon_class = use_notif ? \"ti-bell-filled\" : \"ti-bell\";
                actions = `
                    <button class=\"btn btn-sm btn-ghost-secondary edit-notify-user\"
                              data-bs-toggle=\"tooltip\" data-bs-placement=\"top\"
                              title=\"";
                // line 143
                yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Email followup"), "html"), "js"), "html", null, true);
                yield "\"
                              type=\"button\">
                        <i class=\"ti \${icon_class} notify-icon\"></i>
                    </button>`;
            }
            ";
            }
            // line 149
            yield "
            // manage specific display for tree data (like groups)
            let indent = \"\";
            if (!is_selection && \"level\" in option && option.level > 1) {
                for (let index = 1; index < option.level; index++) {
                    indent = \"&nbsp;&nbsp;&nbsp;\"+indent;
                }
                indent = indent+\"&raquo;\";
            }

            // prepare html for option element
            text = (is_selection && itemtype == \"Group\") ? title : text;
            const option_text    = `<span class=\"actor_text\">\${text}</span>`;
            const option_element = \$(`<span class=\"actor_entry\" data-itemtype=\"\${_.escape(itemtype)}\" data-items-id=\"\${_.escape(items_id)}\" data-actortype=\"\${_.escape(actorytype)}\" data-testid=\"actor-entry-\${_.escape(actorytype)}-\${_.escape(itemtype)}-\${_.escape(items_id)}\">\${indent}\${icon}\${option_text}\${actions}</span>`);

            if (is_selection && itemtype == \"User\") {
                const unique_id = \"user_opt_\" + actor_select.attr(\x27data-actor-type\x27) + \"User\" + items_id;
                \$.ajax({
                    url: `\${CFG_GLPI.root_doc}/ajax/comments.php`,
                    type: \x27POST\x27,
                    data: {
                        \x27itemtype\x27: \x27User\x27,
                        \x27value\x27: items_id,
                    }
                }).then((result) => {
                    ";
            // line 175
            yield "                    if (result) {
                        actor_select.parent().append(\x27<\x27 + `div id=\"content\${_.escape(unique_id)}\" style=\"display: none;\">\${result}<` + \x27/div>\x27);
                        option_element.attr(\x27data-glpi-popover-source\x27, `content\${unique_id}`);
                    }
                });
            }

            if (is_selection && itemtype == \"Group\") {
                const unique_id = \"group_opt_\" + actor_select.attr(\x27data-actor-type\x27) + \"Group\" + items_id;
                \$.ajax({
                    url: `\${CFG_GLPI.root_doc}/ajax/comments.php`,
                    type: \x27POST\x27,
                    data: {
                        \x27itemtype\x27: \x27Group\x27,
                        \x27value\x27: items_id,
                    }
                }).then((result) => {
                    ";
            // line 193
            yield "                    if (result) {
                        actor_select.parent().append(\x27<\x27 + `div id=\"content\${_.escape(unique_id)}\" style=\"display: none;\">\${result}<` + \x27/div>\x27);
                        option_element.attr(\x27data-glpi-popover-source\x27, `content\${unique_id}`);
                    }
                });
            }

            if (is_selection && itemtype == \"Supplier\") {
                const unique_id = \"supplier_opt_\" + actor_select.attr(\x27data-actor-type\x27) + \"Supplier\" + items_id;
                \$.ajax({
                    url: `\${CFG_GLPI.root_doc}/ajax/comments.php`,
                    type: \x27POST\x27,
                    data: {
                        \x27itemtype\x27: \x27Supplier\x27,
                        \x27value\x27: items_id,
                    }
                }).then((result) => {
                    ";
            // line 211
            yield "                    if (result) {
                        actor_select.parent().append(\x27<\x27 + `div id=\"content\${_.escape(unique_id)}\" style=\"display: none;\">\${result}<` + \x27/div>\x27);
                        option_element.attr(\x27data-glpi-popover-source\x27, `content\${unique_id}`);
                    }
                });
            }

            // manage ticket information (number of assigned ticket for an actor)
            if (is_selection && itemtype != \"Email\") {
                let label = \x27\x27;
                if (\"";
            // line 221
            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["actortype"]) || array_key_exists("actortype", $context) ? $context["actortype"] : (function () { throw new RuntimeError('Variable "actortype" does not exist.', 221, $this->source); })()), "js"), "html", null, true);
            yield "\" == \"assign\") {
                    label = \"";
            // line 222
            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Number of tickets already assigned"), "js"), "html", null, true);
            yield "\";
                } else if (\"";
            // line 223
            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["actortype"]) || array_key_exists("actortype", $context) ? $context["actortype"] : (function () { throw new RuntimeError('Variable "actortype" does not exist.', 223, $this->source); })()), "js"), "html", null, true);
            yield "\" == \"requester\") {
                    label = \"";
            // line 224
            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Number of tickets as requester"), "js"), "html", null, true);
            yield "\";
                }
                const existing_element = \$(`
                    <span class=\"assign_infos ms-1\" title=\"\${_.escape(label)}\"
                        data-bs-toggle=\"tooltip\" data-bs-placement=\"top\"
                        data-id=\"\${_.escape(items_id)}\" data-fk=\"\${_.escape(fk)}\">
                        <span class=\"spinner-border spinner-border-sm\" role=\"status\" aria-hidden=\"true\"></span>
                    </span>
                `);
                option_element.append(existing_element);

                \$.get(`\${CFG_GLPI.root_doc}/ajax/actorinformation.php`, {
                    [fk]: items_id,
                    only_number: true,
                }).done((number) => {
                    ";
            // line 240
            yield "                    const badge = number.length > 0 ? `<span class=\"badge bg-secondary-lt\">\${number}</span>` : \x27\x27;
                    existing_element.html(badge);
                });
            }

            return option_element;
        }

        const select2_width = \"";
            // line 248
            yield (string) (((($tmp = (isset($context["canassigntome"]) || array_key_exists("canassigntome", $context) ? $context["canassigntome"] : (function () { throw new RuntimeError('Variable "canassigntome" does not exist.', 248, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("calc(100% - 30px)") : ("100%"));
            yield "\";

        const actor_select = \$(\"#actor_";
            // line 250
            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["rand"]) || array_key_exists("rand", $context) ? $context["rand"] : (function () { throw new RuntimeError('Variable "rand" does not exist.', 250, $this->source); })()), "html", null, true);
            yield "\");
        actor_select.select2({
            tags: true,
            width: select2_width,
            tokenSeparators: [\x27,\x27, \x27 \x27],
            containerCssClass: \x27actor-field\x27,
            templateSelection: (option) => genericTemplate(option, true),
            templateResult: (option) => genericTemplate(option, false),
            disabled: ";
            // line 258
            yield (string) (((($tmp = (isset($context["canupdate"]) || array_key_exists("canupdate", $context) ? $context["canupdate"] : (function () { throw new RuntimeError('Variable "canupdate" does not exist.', 258, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("false") : ("true"));
            yield ",
            createTag: (params) => {
                const term = \$.trim(params.term);

                if (term === \x27\x27) {
                    return null;
                }

                // Don\x27t offset to create a tag if it\x27s not an email
                if (!new RegExp(";
            // line 267
            yield (string) json_encode(Twig\Extension\CoreExtension::slice($this->env->getCharset(), Twig\Extension\CoreExtension::constant("Toolbox::ACTOR_EMAIL_VALIDATION_REGEX"), 1,  -2));
            yield ", \x27u\x27).test(term)) {
                    // Return null to disable tag creation
                    return null;
                }

                return {
                    id: term,
                    text: term,
                    itemtype: \"User\",
                    items_id: 0,
                    use_notification: 1,
                    alternative_email: term,
                }
            },
            ajax: {
                url: `\${CFG_GLPI.root_doc}/ajax/actors.php`,
                datatype: \x27json\x27,
                type: \x27POST\x27,
                delay:250,
                data: (params) => {
                    const is_new_item = ";
            // line 287
            yield (string) (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 287, $this->source); })()), "isNewItem", [], "method", false, false, false, 287)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("true") : ("false"));
            yield ";
                    return {
                        action: \x27getActors\x27,
                        actortype: actorytype,
                        users_right: \x27";
            // line 291
            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((((array_key_exists("users_right", $context) &&  !(null === $context["users_right"]))) ? ($context["users_right"]) : ("all")), "js"), "html", null, true);
            yield "\x27,
                        entity_restrict: (window.actors.requester.length === 0 && is_new_item) ? -1 : ";
            // line 292
            yield (string) json_encode((isset($context["entities_id"]) || array_key_exists("entities_id", $context) ? $context["entities_id"] : (function () { throw new RuntimeError('Variable "entities_id" does not exist.', 292, $this->source); })()));
            yield ",
                        searchText: params.term,
                        _idor_token: \x27";
            // line 294
            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Session::getNewIDORToken(CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 294, $this->source); })()), "getType", [], "method", false, false, false, 294), ["users_right" => (((array_key_exists("users_right", $context) &&  !(null === $context["users_right"]))) ? ($context["users_right"]) : ("all"))]), "js"), "html", null, true);
            yield "\x27,
                        itiltemplate_class: \x27";
            // line 295
            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["itiltemplate"]) || array_key_exists("itiltemplate", $context) ? $context["itiltemplate"] : (function () { throw new RuntimeError('Variable "itiltemplate" does not exist.', 295, $this->source); })()), "getType", [], "method", false, false, false, 295), "js"), "html", null, true);
            yield "\x27,
                        itiltemplates_id: ";
            // line 296
            yield (string) json_encode((((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["itiltemplate"] ?? null), "fields", [], "any", false, true, false, 296), "id", [], "array", true, true, false, 296) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["itiltemplate"]) || array_key_exists("itiltemplate", $context) ? $context["itiltemplate"] : (function () { throw new RuntimeError('Variable "itiltemplate" does not exist.', 296, $this->source); })()), "fields", [], "any", false, false, false, 296), "id", [], "array", false, false, false, 296)))) ? (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["itiltemplate"]) || array_key_exists("itiltemplate", $context) ? $context["itiltemplate"] : (function () { throw new RuntimeError('Variable "itiltemplate" does not exist.', 296, $this->source); })()), "fields", [], "any", false, false, false, 296), "id", [], "array", false, false, false, 296)) : (0)));
            yield ",
                        itemtype: \x27";
            // line 297
            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 297, $this->source); })()), "getType", [], "method", false, false, false, 297), "js"), "html", null, true);
            yield "\x27,
                        items_id: ";
            // line 298
            yield (string) json_encode((((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 298, $this->source); })()), "isNewItem", [], "method", false, false, false, 298)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ( -1) : (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 298, $this->source); })()), "fields", [], "any", false, false, false, 298), "id", [], "array", false, false, false, 298))));
            yield ",
                        item: ";
            // line 299
            yield (string) json_encode((isset($context["safe_item_fields"]) || array_key_exists("safe_item_fields", $context) ? $context["safe_item_fields"] : (function () { throw new RuntimeError('Variable "safe_item_fields" does not exist.', 299, $this->source); })()));
            yield ",
                        returned_itemtypes: ";
            // line 300
            yield (string) json_encode((((array_key_exists("returned_itemtypes", $context) &&  !(null === $context["returned_itemtypes"]))) ? ($context["returned_itemtypes"]) : (["User", "Group", "Supplier"])));
            yield ",
                        page: params.page || 1
                    };
                },
            }
        }).on(\x27select2:open\x27, () => {
            // Close popovers
            \$(\x27.popover\x27).popover(\x27hide\x27);
        });

        actor_select.parent().popover({
            selector: \x27[data-glpi-popover-source]\x27,
            container: actor_select.parent(),
            html: true,
            sanitize: false,
            trigger: \x27hover\x27,
            delay: {
                hide: 300
            },
            content: (el) => {
                // Close other popovers
                \$(\x27.popover\x27).popover(\x27hide\x27);
                return \$(\x27#\x27 + \$(el).attr(\x27data-glpi-popover-source\x27)).html();
            }
        }).on(\x27hide.bs.popover\x27, () => {
            // prevent closing popover when user card is hover
            if (\$(\x27.user-info-card:hover\x27).length > 0) {
                return false;
            }
            // prevent closing popover when group card is hover
            if (\$(\x27.group-info-card:hover\x27).length > 0) {
                return false;
            }
            // prevent closing popover when group card is hover
            if (\$(\x27.supplier-info-card:hover\x27).length > 0) {
                return false;
            }
        });

        // when the mouse leave the info card in the popover, close it
        \$(document).on(\x27mouseleave\x27, \x27.user-info-card, .group-info-card, .supplier-info-card\x27, (e) => {
            const popover = \$(e.target).closest(\x27.popover\x27);
            if (popover.length === 0) {
                return;
            }

            setTimeout(() => {
                // Find the trigger element and hide its popover
                const popover_element = \$(\x27[data-glpi-popover-source][aria-describedby=\"\x27 + CSS.escape(popover.attr(\x27id\x27)) + \x27\"]\x27);
                if (popover_element.length > 0) {
                    const popover_instance = bootstrap.Popover.getInstance(popover_element[0]);
                    popover_instance.hide();
                }
            }, 300);
        });

        // manage actors change
        function updateActors() {
            const data = \$(\"#actor_";
            // line 358
            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["rand"]) || array_key_exists("rand", $context) ? $context["rand"] : (function () { throw new RuntimeError('Variable "rand" does not exist.', 358, $this->source); })()), "html", null, true);
            yield "\").select2(\x27data\x27);

            const new_actors = [];
            data.forEach((selection) => {
                const element = \$(selection.element);

                let itemtype  = selection.itemtype ?? element.data(\x27itemtype\x27);
                const items_id  = selection.items_id ?? element.data(\x27items-id\x27);
                let use_notif = selection.use_notification  ?? element.data(\x27use-notification\x27)  ?? false;
                const def_email = selection.default_email ?? element.data(\x27default-email\x27) ?? \x27\x27;
                let alt_email = selection.alternative_email ?? element.data(\x27alternative-email\x27) ?? \x27\x27;

                if (itemtype == \"Email\") {
                    itemtype  = \"User\";
                    use_notif = true;
                    alt_email = selection.id;
                }

                new_actors.push({
                    itemtype: itemtype,
                    items_id: items_id,
                    use_notification: use_notif,
                    default_email: def_email,
                    alternative_email: alt_email,
                });
            });

            window.actors[actorytype] = new_actors;

            saveActorsToDom();
        }

        \$(\"#actor_";
            // line 390
            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["rand"]) || array_key_exists("rand", $context) ? $context["rand"] : (function () { throw new RuntimeError('Variable "rand" does not exist.', 390, $this->source); })()), "html", null, true);
            yield "\").on(\x27select2:select\x27, (e) => {
            updateActors();
            ";
            // line 392
            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["onchange"]) || array_key_exists("onchange", $context) ? $context["onchange"] : (function () { throw new RuntimeError('Variable "onchange" does not exist.', 392, $this->source); })()), "html", null, true);
            yield "
        });
        \$(\"#actor_";
            // line 394
            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["rand"]) || array_key_exists("rand", $context) ? $context["rand"] : (function () { throw new RuntimeError('Variable "rand" does not exist.', 394, $this->source); })()), "html", null, true);
            yield "\").on(\x27select2:unselect\x27, (e) => {
            updateActors();
            ";
            // line 396
            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["onchange"]) || array_key_exists("onchange", $context) ? $context["onchange"] : (function () { throw new RuntimeError('Variable "onchange" does not exist.', 396, $this->source); })()), "html", null, true);
            yield "
        });

        // intercept event for edit notification button
        document.addEventListener(\x27click\x27, event => {
            if (event.target.closest(\"#actor_";
            // line 401
            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["rand"]) || array_key_exists("rand", $context) ? $context["rand"] : (function () { throw new RuntimeError('Variable "rand" does not exist.', 401, $this->source); })()), "html", null, true);
            yield " + .select2 .edit-notify-user\")) {
                return openNotifyModal(event);
            }
            // if a click on assign info is detected prevent opening of select2
            if (event.target.closest(\"#actor_";
            // line 405
            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["rand"]) || array_key_exists("rand", $context) ? $context["rand"] : (function () { throw new RuntimeError('Variable "rand" does not exist.', 405, $this->source); })()), "html", null, true);
            yield " + .select2 .assign_infos\")) {
                event.stopPropagation();
            }
        }, {capture: true})
        document.addEventListener(\x27keydown\x27, event => {
            if (event.target.closest(\"#actor_";
            // line 410
            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["rand"]) || array_key_exists("rand", $context) ? $context["rand"] : (function () { throw new RuntimeError('Variable "rand" does not exist.', 410, $this->source); })()), "html", null, true);
            yield " + .select2 .edit-notify-user\")
                && event.key == \"Enter\") {
                return openNotifyModal(event);
            }
        }, {capture: true})

        ";
            // line 416
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["itiltemplate"]) || array_key_exists("itiltemplate", $context) ? $context["itiltemplate"] : (function () { throw new RuntimeError('Variable "itiltemplate" does not exist.', 416, $this->source); })()), "isHiddenField", [("_users_id_" . (isset($context["actortype"]) || array_key_exists("actortype", $context) ? $context["actortype"] : (function () { throw new RuntimeError('Variable "actortype" does not exist.', 416, $this->source); })()))], "method", false, false, false, 416)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 417
                yield "        \$(\".actor_entry[data-itemtype=\\\"User\\\"][data-actortype=\\\"";
                yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["actortype"]) || array_key_exists("actortype", $context) ? $context["actortype"] : (function () { throw new RuntimeError('Variable "actortype" does not exist.', 417, $this->source); })()), "css"), "js"), "html", null, true);
                yield "\\\"]\").parent().css(\"display\", \"none\");
        ";
            }
            // line 419
            yield "        ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["itiltemplate"]) || array_key_exists("itiltemplate", $context) ? $context["itiltemplate"] : (function () { throw new RuntimeError('Variable "itiltemplate" does not exist.', 419, $this->source); })()), "isHiddenField", [("_groups_id_" . (isset($context["actortype"]) || array_key_exists("actortype", $context) ? $context["actortype"] : (function () { throw new RuntimeError('Variable "actortype" does not exist.', 419, $this->source); })()))], "method", false, false, false, 419)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 420
                yield "        \$(\".actor_entry[data-itemtype=\\\"Group\\\"][data-actortype=\\\"";
                yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["actortype"]) || array_key_exists("actortype", $context) ? $context["actortype"] : (function () { throw new RuntimeError('Variable "actortype" does not exist.', 420, $this->source); })()), "css"), "js"), "html", null, true);
                yield "\\\"]\").parent().css(\"display\", \"none\");
        ";
            }
            // line 422
            yield "    </script>
";
        }
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "components/itilobject/actors/field.html.twig";
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
        return array (  654 => 422,  648 => 420,  645 => 419,  639 => 417,  637 => 416,  628 => 410,  620 => 405,  613 => 401,  605 => 396,  600 => 394,  595 => 392,  590 => 390,  555 => 358,  494 => 300,  490 => 299,  486 => 298,  482 => 297,  478 => 296,  474 => 295,  470 => 294,  465 => 292,  461 => 291,  454 => 287,  431 => 267,  419 => 258,  408 => 250,  403 => 248,  393 => 240,  375 => 224,  371 => 223,  367 => 222,  363 => 221,  351 => 211,  332 => 193,  313 => 175,  286 => 149,  277 => 143,  269 => 137,  267 => 136,  258 => 130,  250 => 125,  245 => 123,  240 => 121,  236 => 120,  228 => 115,  223 => 113,  218 => 111,  213 => 109,  208 => 107,  187 => 89,  184 => 88,  181 => 87,  178 => 77,  172 => 75,  170 => 74,  166 => 72,  156 => 69,  147 => 68,  143 => 66,  141 => 65,  137 => 64,  133 => 63,  129 => 62,  123 => 61,  118 => 60,  115 => 59,  112 => 58,  108 => 57,  104 => 56,  95 => 55,  93 => 54,  90 => 53,  86 => 51,  84 => 50,  82 => 49,  80 => 48,  77 => 47,  73 => 45,  71 => 44,  69 => 43,  66 => 42,  62 => 40,  60 => 39,  58 => 38,  55 => 37,  53 => 36,  51 => 35,  48 => 34,  46 => 33,  43 => 32,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "components/itilobject/actors/field.html.twig", "/Users/alvarozuculajunior/BCX/glpi/templates/components/itilobject/actors/field.html.twig");
    }
}
