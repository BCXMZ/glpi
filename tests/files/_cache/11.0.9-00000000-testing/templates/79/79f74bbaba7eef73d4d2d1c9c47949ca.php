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

/* components/itilobject/layout.html.twig */
class __TwigTemplate_f88250d6fb55d393a9d9ec5b0e77f308 extends Template
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
        $context["rand"] = Twig\Extension\CoreExtension::random($this->env->getCharset());
        // line 34
        $context["main_rand"] = (isset($context["rand"]) || array_key_exists("rand", $context) ? $context["rand"] : (function () { throw new RuntimeError('Variable "rand" does not exist.', 34, $this->source); })());
        // line 35
        $context["is_helpdesk"] = ($this->extensions['Glpi\Application\View\Extension\SessionExtension']->getCurrentInterface() == "helpdesk");
        // line 36
        $context["show_extra_fields"] = ( !(($tmp = (isset($context["is_helpdesk"]) || array_key_exists("is_helpdesk", $context) ? $context["is_helpdesk"] : (function () { throw new RuntimeError('Variable "is_helpdesk" does not exist.', 36, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp) || (($tmp = (isset($context["show_tickets_properties_on_helpdesk"]) || array_key_exists("show_tickets_properties_on_helpdesk", $context) ? $context["show_tickets_properties_on_helpdesk"] : (function () { throw new RuntimeError('Variable "show_tickets_properties_on_helpdesk" does not exist.', 36, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp));
        // line 37
        yield "
";
        // line 38
        $context["itil_layout"] = $this->extensions['Glpi\Application\View\Extension\SessionExtension']->userPref("itil_layout", true);
        // line 39
        $context["is_collapsed"] = ((((CoreExtension::getAttribute($this->env, $this->source, ($context["itil_layout"] ?? null), "collapsed", [], "array", true, true, false, 39) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["itil_layout"]) || array_key_exists("itil_layout", $context) ? $context["itil_layout"] : (function () { throw new RuntimeError('Variable "itil_layout" does not exist.', 39, $this->source); })()), "collapsed", [], "array", false, false, false, 39)))) ? (CoreExtension::getAttribute($this->env, $this->source, (isset($context["itil_layout"]) || array_key_exists("itil_layout", $context) ? $context["itil_layout"] : (function () { throw new RuntimeError('Variable "itil_layout" does not exist.', 39, $this->source); })()), "collapsed", [], "array", false, false, false, 39)) : (false)) == "true");
        // line 40
        $context["is_expanded"] = ((((CoreExtension::getAttribute($this->env, $this->source, ($context["itil_layout"] ?? null), "expanded", [], "array", true, true, false, 40) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["itil_layout"]) || array_key_exists("itil_layout", $context) ? $context["itil_layout"] : (function () { throw new RuntimeError('Variable "itil_layout" does not exist.', 40, $this->source); })()), "expanded", [], "array", false, false, false, 40)))) ? (CoreExtension::getAttribute($this->env, $this->source, (isset($context["itil_layout"]) || array_key_exists("itil_layout", $context) ? $context["itil_layout"] : (function () { throw new RuntimeError('Variable "itil_layout" does not exist.', 40, $this->source); })()), "expanded", [], "array", false, false, false, 40)) : (false)) == "true");
        // line 41
        $context["collapsed_cls"] = (((($tmp = (isset($context["is_collapsed"]) || array_key_exists("is_collapsed", $context) ? $context["is_collapsed"] : (function () { throw new RuntimeError('Variable "is_collapsed" does not exist.', 41, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("right-collapsed") : (""));
        // line 42
        $context["expanded_cls"] = ((((isset($context["is_expanded"]) || array_key_exists("is_expanded", $context) ? $context["is_expanded"] : (function () { throw new RuntimeError('Variable "is_expanded" does not exist.', 42, $this->source); })()) == "true")) ? ("right-expanded") : (""));
        // line 43
        $context["template_preview"] = ((CoreExtension::getAttribute($this->env, $this->source, ($context["params"] ?? null), "template_preview", [], "any", true, true, false, 43)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["params"]) || array_key_exists("params", $context) ? $context["params"] : (function () { throw new RuntimeError('Variable "params" does not exist.', 43, $this->source); })()), "template_preview", [], "any", false, false, false, 43), false)) : (false));
        // line 44
        yield "
";
        // line 45
        $context["left_regular_cls"] = "col-lg-8";
        // line 46
        $context["right_regular_cls"] = "col-lg-4";
        // line 47
        yield "
";
        // line 48
        $context["left_expanded_cls"] = "col-xl-5 col-lg-6";
        // line 49
        $context["right_expanded_cls"] = "col-xl-7 col-lg-6";
        // line 50
        yield "
";
        // line 51
        $context["left_side_cls"] = (isset($context["left_regular_cls"]) || array_key_exists("left_regular_cls", $context) ? $context["left_regular_cls"] : (function () { throw new RuntimeError('Variable "left_regular_cls" does not exist.', 51, $this->source); })());
        // line 52
        $context["right_side_cls"] = (isset($context["right_regular_cls"]) || array_key_exists("right_regular_cls", $context) ? $context["right_regular_cls"] : (function () { throw new RuntimeError('Variable "right_regular_cls" does not exist.', 52, $this->source); })());
        // line 53
        if ((($tmp = (isset($context["is_expanded"]) || array_key_exists("is_expanded", $context) ? $context["is_expanded"] : (function () { throw new RuntimeError('Variable "is_expanded" does not exist.', 53, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 54
            yield "    ";
            $context["left_side_cls"] = (isset($context["left_expanded_cls"]) || array_key_exists("left_expanded_cls", $context) ? $context["left_expanded_cls"] : (function () { throw new RuntimeError('Variable "left_expanded_cls" does not exist.', 54, $this->source); })());
            // line 55
            yield "    ";
            $context["right_side_cls"] = (isset($context["right_expanded_cls"]) || array_key_exists("right_expanded_cls", $context) ? $context["right_expanded_cls"] : (function () { throw new RuntimeError('Variable "right_expanded_cls" does not exist.', 55, $this->source); })());
        }
        // line 57
        yield "
";
        // line 58
        $context["can_have_form"] =  !(($tmp = (isset($context["template_preview"]) || array_key_exists("template_preview", $context) ? $context["template_preview"] : (function () { throw new RuntimeError('Variable "template_preview" does not exist.', 58, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp);
        // line 59
        yield "
<div id=\"itil-object-container\" class=\"mt-n1 ";
        // line 60
        yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["collapsed_cls"]) || array_key_exists("collapsed_cls", $context) ? $context["collapsed_cls"] : (function () { throw new RuntimeError('Variable "collapsed_cls" does not exist.', 60, $this->source); })()), "html", null, true);
        yield " ";
        yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["expanded_cls"]) || array_key_exists("expanded_cls", $context) ? $context["expanded_cls"] : (function () { throw new RuntimeError('Variable "expanded_cls" does not exist.', 60, $this->source); })()), "html", null, true);
        yield "\">

    ";
        // line 62
        if (((($tmp = (isset($context["can_have_form"]) || array_key_exists("can_have_form", $context) ? $context["can_have_form"] : (function () { throw new RuntimeError('Variable "can_have_form" does not exist.', 62, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp) && (($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 62, $this->source); })()), "isNewItem", [], "method", false, false, false, 62)) && $tmp instanceof Markup ? (string) $tmp : $tmp))) {
            // line 63
            yield "        ";
            yield (string) Twig\Extension\CoreExtension::include($this->env, $context, "components/itilobject/mainform_open.html.twig");
            yield "
    ";
        }
        // line 65
        yield "
    <div class=\"row d-flex flex-column itil-object\">
        ";
        // line 67
        $context["is_timeline_reversed"] = ($this->extensions['Glpi\Application\View\Extension\SessionExtension']->userPref("timeline_order") == Twig\Extension\CoreExtension::constant("CommonITILObject::TIMELINE_ORDER_REVERSE"));
        // line 68
        yield "        ";
        $context["fl_direction"] = ((((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 68, $this->source); })()), "isNewItem", [], "method", false, false, false, 68)) && $tmp instanceof Markup ? (string) $tmp : $tmp) || (($tmp = (isset($context["is_timeline_reversed"]) || array_key_exists("is_timeline_reversed", $context) ? $context["is_timeline_reversed"] : (function () { throw new RuntimeError('Variable "is_timeline_reversed" does not exist.', 68, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp))) ? ("flex-column") : ("flex-column-reverse"));
        // line 69
        yield "        <div class=\"itil-left-side col-12 ";
        yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["left_side_cls"]) || array_key_exists("left_side_cls", $context) ? $context["left_side_cls"] : (function () { throw new RuntimeError('Variable "left_side_cls" does not exist.', 69, $this->source); })()), "html", null, true);
        yield " order-last order-lg-first pt-2 pe-2 pe-lg-4 d-flex ";
        yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["fl_direction"]) || array_key_exists("fl_direction", $context) ? $context["fl_direction"] : (function () { throw new RuntimeError('Variable "fl_direction" does not exist.', 69, $this->source); })()), "html", null, true);
        yield " border-top border-4 ";
        yield (string) (( !(($tmp = (isset($context["show_extra_fields"]) || array_key_exists("show_extra_fields", $context) ? $context["show_extra_fields"] : (function () { throw new RuntimeError('Variable "show_extra_fields" does not exist.', 69, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("w-100") : (""));
        yield "\" tabindex=\"-1\">
            ";
        // line 70
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 70, $this->source); })()), "isNewItem", [], "method", false, false, false, 70)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 71
            yield "                ";
            yield (string) Twig\Extension\CoreExtension::include($this->env, $context, "components/itilobject/timeline/new_form.html.twig");
            yield "
            ";
        } else {
            // line 73
            yield "                ";
            yield (string) Twig\Extension\CoreExtension::include($this->env, $context, "components/itilobject/timeline/timeline.html.twig");
            yield "
            ";
        }
        // line 75
        yield "        </div>
        <div class=\"itil-right-side col-12 ";
        // line 76
        yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["right_side_cls"]) || array_key_exists("right_side_cls", $context) ? $context["right_side_cls"] : (function () { throw new RuntimeError('Variable "right_side_cls" does not exist.', 76, $this->source); })()), "html", null, true);
        yield " mt-0 mt-lg-n1 card-footer p-0 rounded-0 ";
        yield (string) (((($tmp = (isset($context["show_extra_fields"]) || array_key_exists("show_extra_fields", $context) ? $context["show_extra_fields"] : (function () { throw new RuntimeError('Variable "show_extra_fields" does not exist.', 76, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("") : ("d-none"));
        yield "\" tabindex=\"-1\">
            ";
        // line 78
        yield "            ";
        if (((($tmp = (isset($context["can_have_form"]) || array_key_exists("can_have_form", $context) ? $context["can_have_form"] : (function () { throw new RuntimeError('Variable "can_have_form" does not exist.', 78, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp) &&  !(($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 78, $this->source); })()), "isNewItem", [], "method", false, false, false, 78)) && $tmp instanceof Markup ? (string) $tmp : $tmp))) {
            // line 79
            yield "                ";
            yield (string) Twig\Extension\CoreExtension::include($this->env, $context, "components/itilobject/mainform_open.html.twig");
            yield "
            ";
        }
        // line 81
        yield "            ";
        if ((($tmp = (isset($context["show_extra_fields"]) || array_key_exists("show_extra_fields", $context) ? $context["show_extra_fields"] : (function () { throw new RuntimeError('Variable "show_extra_fields" does not exist.', 81, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 82
            yield "                ";
            yield (string) Twig\Extension\CoreExtension::include($this->env, $context, "components/itilobject/fields_panel.html.twig");
            yield "
            ";
        }
        // line 84
        yield "            ";
        if (((($tmp = (isset($context["can_have_form"]) || array_key_exists("can_have_form", $context) ? $context["can_have_form"] : (function () { throw new RuntimeError('Variable "can_have_form" does not exist.', 84, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp) &&  !(($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 84, $this->source); })()), "isNewItem", [], "method", false, false, false, 84)) && $tmp instanceof Markup ? (string) $tmp : $tmp))) {
            // line 85
            yield "                ";
            yield (string) Twig\Extension\CoreExtension::include($this->env, $context, "components/itilobject/mainform_close.html.twig");
            yield "
            ";
        }
        // line 87
        yield "        </div>
    </div>

    ";
        // line 90
        if ( !(($tmp = (isset($context["template_preview"]) || array_key_exists("template_preview", $context) ? $context["template_preview"] : (function () { throw new RuntimeError('Variable "template_preview" does not exist.', 90, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 91
            yield "        ";
            yield (string) Twig\Extension\CoreExtension::include($this->env, $context, "components/itilobject/footer.html.twig");
            yield "
    ";
        }
        // line 93
        yield "
    ";
        // line 94
        if (((($tmp = (isset($context["can_have_form"]) || array_key_exists("can_have_form", $context) ? $context["can_have_form"] : (function () { throw new RuntimeError('Variable "can_have_form" does not exist.', 94, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp) && (($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 94, $this->source); })()), "isNewItem", [], "method", false, false, false, 94)) && $tmp instanceof Markup ? (string) $tmp : $tmp))) {
            // line 95
            yield "        ";
            yield (string) Twig\Extension\CoreExtension::include($this->env, $context, "components/itilobject/mainform_close.html.twig");
            yield "
    ";
        }
        // line 97
        yield "</div>

";
        // line 100
        yield "<form method=\"POST\" action=\"";
        yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("CommonITILObject_CommonITILObject::getFormURL"), "html", null, true);
        yield "\" class=\"d-none\" id=\"linked_itilobjects_";
        yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["main_rand"]) || array_key_exists("main_rand", $context) ? $context["main_rand"] : (function () { throw new RuntimeError('Variable "main_rand" does not exist.', 100, $this->source); })()), "html", null, true);
        yield "\" data-submit-once>
   <input type=\"hidden\" name=\"_glpi_csrf_token\" value=\"";
        // line 101
        yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Session::getNewCSRFToken(), "html", null, true);
        yield "\" />
   <input type=\"hidden\" name=\"purge\" value=\"1\" />
   <input type=\"hidden\" name=\"itemtype\" value=\"";
        // line 103
        yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 103, $this->source); })()), "getType", [], "method", false, false, false, 103), "html", null, true);
        yield "\" />
   <input type=\"hidden\" name=\"items_id\" value=\"";
        // line 104
        yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 104, $this->source); })()), "fields", [], "any", false, false, false, 104), "id", [], "array", false, false, false, 104), "html", null, true);
        yield "\" />
</form>

";
        // line 108
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(["requester", "observer", "assign"]);
        foreach ($context['_seq'] as $context["_key"] => $context["actortype"]) {
            // line 109
            yield "   <form method=\"POST\" action=\"";
            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 109, $this->source); })()), "getFormURL", [], "method", false, false, false, 109), "html", null, true);
            yield "\" class=\"d-none\" id=\"addme_as_";
            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["actortype"], "html", null, true);
            yield "_";
            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["main_rand"]) || array_key_exists("main_rand", $context) ? $context["main_rand"] : (function () { throw new RuntimeError('Variable "main_rand" does not exist.', 109, $this->source); })()), "html", null, true);
            yield "\" data-submit-once>
      <input type=\"hidden\" name=\"_glpi_csrf_token\" value=\"";
            // line 110
            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Session::getNewCSRFToken(), "html", null, true);
            yield "\" />
      <input type=\"hidden\" name=\"addme_as_actor\" value=\"1\" />
      <input type=\"hidden\" name=\"actortype\" value=\"";
            // line 112
            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["actortype"], "html", null, true);
            yield "\" />
   </form>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['actortype'], $context['_parent']);
        $context = array_intersect_key($context, $_parent);
        $context += $_parent;
        // line 115
        yield "
<form name=\"massaction_";
        // line 116
        yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["rand"]) || array_key_exists("rand", $context) ? $context["rand"] : (function () { throw new RuntimeError('Variable "rand" does not exist.', 116, $this->source); })()), "html", null, true);
        yield "\" id=\"massaction_";
        yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["rand"]) || array_key_exists("rand", $context) ? $context["rand"] : (function () { throw new RuntimeError('Variable "rand" does not exist.', 116, $this->source); })()), "html", null, true);
        yield "\" method=\"post\"
      action=\"";
        // line 117
        yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\RoutingExtension']->path("/front/massiveaction.php"), "html", null, true);
        yield "?_single_item[itemtype]=";
        yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 117, $this->source); })()), "getType", [], "method", false, false, false, 117), "html", null, true);
        yield "&_single_item[id]=";
        yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 117, $this->source); })()), "getID", [], "method", false, false, false, 117), "html", null, true);
        yield "\" data-submit-once>
   <div id=\"massive_container_";
        // line 118
        yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["rand"]) || array_key_exists("rand", $context) ? $context["rand"] : (function () { throw new RuntimeError('Variable "rand" does not exist.', 118, $this->source); })()), "html", null, true);
        yield "\"></div>
   <input type=\"hidden\" name=\"_glpi_csrf_token\" value=\"";
        // line 119
        yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Session::getNewCSRFToken(), "html", null, true);
        yield "\" />
</form>

<script type=\"text/javascript\">
\$(function() {
   \$(document).on(\"click\", \".switch-panel-width\", function() {
       if (\$(\x27#itil-object-container\x27).hasClass(\x27right-collapsed\x27)) {
           \$(\x27#itil-object-container\x27).removeClass(\x27right-collapsed\x27);
       } else if (\$(\x27.itil-left-side\x27).hasClass(\"";
        // line 127
        yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["left_regular_cls"]) || array_key_exists("left_regular_cls", $context) ? $context["left_regular_cls"] : (function () { throw new RuntimeError('Variable "left_regular_cls" does not exist.', 127, $this->source); })()), "html", null, true);
        yield "\")) {
         // Expand right-side panel
         \$(\x27#itil-object-container\x27).addClass(\x27right-expanded\x27);
         // Left side
         \$(\x27.itil-left-side\x27).removeClass(\"";
        // line 131
        yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["left_regular_cls"]) || array_key_exists("left_regular_cls", $context) ? $context["left_regular_cls"] : (function () { throw new RuntimeError('Variable "left_regular_cls" does not exist.', 131, $this->source); })()), "html", null, true);
        yield "\").addClass(\"";
        yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["left_expanded_cls"]) || array_key_exists("left_expanded_cls", $context) ? $context["left_expanded_cls"] : (function () { throw new RuntimeError('Variable "left_expanded_cls" does not exist.', 131, $this->source); })()), "html", null, true);
        yield "\");
         \$(\x27.itil-footer .timeline-buttons\x27).removeClass(\"";
        // line 132
        yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["left_regular_cls"]) || array_key_exists("left_regular_cls", $context) ? $context["left_regular_cls"] : (function () { throw new RuntimeError('Variable "left_regular_cls" does not exist.', 132, $this->source); })()), "html", null, true);
        yield "\").addClass(\"";
        yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["left_expanded_cls"]) || array_key_exists("left_expanded_cls", $context) ? $context["left_expanded_cls"] : (function () { throw new RuntimeError('Variable "left_expanded_cls" does not exist.', 132, $this->source); })()), "html", null, true);
        yield "\");
         // Right side
         \$(\x27.itil-footer .form-buttons\x27).removeClass(\x27col-lg\x27).addClass(\"";
        // line 134
        yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["right_expanded_cls"]) || array_key_exists("right_expanded_cls", $context) ? $context["right_expanded_cls"] : (function () { throw new RuntimeError('Variable "right_expanded_cls" does not exist.', 134, $this->source); })()), "html", null, true);
        yield "\");
         \$(\x27.itil-right-side\x27).removeClass(\"";
        // line 135
        yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["right_regular_cls"]) || array_key_exists("right_regular_cls", $context) ? $context["right_regular_cls"] : (function () { throw new RuntimeError('Variable "right_regular_cls" does not exist.', 135, $this->source); })()), "html", null, true);
        yield "\").addClass(\"";
        yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["right_expanded_cls"]) || array_key_exists("right_expanded_cls", $context) ? $context["right_expanded_cls"] : (function () { throw new RuntimeError('Variable "right_expanded_cls" does not exist.', 135, $this->source); })()), "html", null, true);
        yield "\");
         // Switcher buttons
         \$(\x27.switch-panel-width i.fas\x27).removeClass(\x27fa-caret-left\x27).addClass(\x27fa-caret-right\x27);
         \$(\x27.itil-right-side .accordion-body:not(.accordion-actors).row .col-12\x27).removeClass(\x27col-12\x27).addClass(\x27col-sm-6\x27);
         \$(\x27#actors .col-12\x27).removeClass(\x27col-12\x27).addClass(\x27col-sm-4\x27);
      } else {
         // Decrease right-side panel
         \$(\x27#itil-object-container\x27).removeClass(\x27right-expanded\x27);
         // Left side
         \$(\x27.itil-left-side\x27).removeClass(\"";
        // line 144
        yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["left_expanded_cls"]) || array_key_exists("left_expanded_cls", $context) ? $context["left_expanded_cls"] : (function () { throw new RuntimeError('Variable "left_expanded_cls" does not exist.', 144, $this->source); })()), "html", null, true);
        yield "\").addClass(\"";
        yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["left_regular_cls"]) || array_key_exists("left_regular_cls", $context) ? $context["left_regular_cls"] : (function () { throw new RuntimeError('Variable "left_regular_cls" does not exist.', 144, $this->source); })()), "html", null, true);
        yield "\");
         \$(\x27.itil-footer .timeline-buttons\x27).removeClass(\"";
        // line 145
        yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["left_expanded_cls"]) || array_key_exists("left_expanded_cls", $context) ? $context["left_expanded_cls"] : (function () { throw new RuntimeError('Variable "left_expanded_cls" does not exist.', 145, $this->source); })()), "html", null, true);
        yield "\").addClass(\"";
        yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["left_regular_cls"]) || array_key_exists("left_regular_cls", $context) ? $context["left_regular_cls"] : (function () { throw new RuntimeError('Variable "left_regular_cls" does not exist.', 145, $this->source); })()), "html", null, true);
        yield "\");
         // Right side
         \$(\x27.itil-footer .form-buttons\x27).removeClass(\"";
        // line 147
        yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["right_expanded_cls"]) || array_key_exists("right_expanded_cls", $context) ? $context["right_expanded_cls"] : (function () { throw new RuntimeError('Variable "right_expanded_cls" does not exist.', 147, $this->source); })()), "html", null, true);
        yield "\").addClass(\x27col-lg\x27);
         \$(\x27.itil-right-side\x27).removeClass(\"";
        // line 148
        yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["right_expanded_cls"]) || array_key_exists("right_expanded_cls", $context) ? $context["right_expanded_cls"] : (function () { throw new RuntimeError('Variable "right_expanded_cls" does not exist.', 148, $this->source); })()), "html", null, true);
        yield "\").addClass(\"";
        yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["right_regular_cls"]) || array_key_exists("right_regular_cls", $context) ? $context["right_regular_cls"] : (function () { throw new RuntimeError('Variable "right_regular_cls" does not exist.', 148, $this->source); })()), "html", null, true);
        yield "\");
         // Switcher buttons
         \$(\x27.switch-panel-width i.fas\x27).removeClass(\x27fa-caret-right\x27).addClass(\x27fa-caret-left\x27);
         \$(\x27.itil-right-side .accordion-body:not(.accordion-actors).row .col-sm-6\x27).removeClass(\x27col-sm-6\x27).addClass(\x27col-12\x27);
         \$(\x27#actors .col-sm-4\x27).removeClass(\x27col-sm-4\x27).addClass(\x27col-12\x27);
      }

      saveFieldPanelState();
   });

    \$(document).on(\"click\", \".collapse-panel\", function() {
       \$(\x27#itil-object-container\x27).addClass(\x27right-collapsed\x27);

        // Hide all accordion item
        \$(\x27#itil-data .accordion-collapse\x27).removeClass(\x27show\x27);
        \$(\x27#itil-data .accordion-button\x27).addClass(\x27collapsed\x27);

       saveFieldPanelState();
    });

    \$(document).on(\"click\", \".right-collapsed .itil-right-side\", function(event) {
        \$(\x27#itil-object-container\x27).removeClass(\x27right-collapsed\x27);
        saveFieldPanelState();
    });

    var myCollapsible = document.getElementById(\x27itil-data\x27);
    if (myCollapsible) {
        myCollapsible.addEventListener(\x27shown.bs.collapse\x27, function () {
            saveFieldPanelState();
        });
        myCollapsible.addEventListener(\x27hidden.bs.collapse\x27, function () {
            saveFieldPanelState();
        });
    }

    var itil_layout = {
        collapsed: false,
        expanded: false,
        items: {}
    };

    var saveFieldPanelState = function() {
        itil_layout.collapsed = \$(\x27#itil-object-container\x27).hasClass(\x27right-collapsed\x27);
        itil_layout.expanded  = \$(\x27#itil-object-container\x27).hasClass(\x27right-expanded\x27);

        \$(\x27#itil-data .accordion-collapse\x27).each(function() {
            var item_shown = \$(this).hasClass(\x27show\x27);
            var item_id    = \$(this).attr(\x27id\x27);

            itil_layout.items[item_id] = item_shown;
        });

        \$.ajax({
            url: CFG_GLPI.root_doc + \x27/ajax/itillayout.php\x27,
            type: \x27POST\x27,
            datatype: \"json\",
            data: {
                \x27itil_layout\x27: itil_layout
            }
        });
    }

    var restoreFieldPanelState = function() {
        \$.each(field_panel_state.items, function(item_id, item_shown) {
            if (item_shown) {
                \$(\x27#\x27 + item_id).addClass(\x27show\x27);
            } else {
                \$(\x27#\x27 + item_id).removeClass(\x27show\x27);
            }
        });
    }
});
</script>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "components/itilobject/layout.html.twig";
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
        return array (  355 => 148,  351 => 147,  344 => 145,  338 => 144,  324 => 135,  320 => 134,  313 => 132,  307 => 131,  300 => 127,  289 => 119,  285 => 118,  277 => 117,  271 => 116,  268 => 115,  258 => 112,  253 => 110,  244 => 109,  240 => 108,  234 => 104,  230 => 103,  225 => 101,  218 => 100,  214 => 97,  208 => 95,  206 => 94,  203 => 93,  197 => 91,  195 => 90,  190 => 87,  184 => 85,  181 => 84,  175 => 82,  172 => 81,  166 => 79,  163 => 78,  157 => 76,  154 => 75,  148 => 73,  142 => 71,  140 => 70,  131 => 69,  128 => 68,  126 => 67,  122 => 65,  116 => 63,  114 => 62,  107 => 60,  104 => 59,  102 => 58,  99 => 57,  95 => 55,  92 => 54,  90 => 53,  88 => 52,  86 => 51,  83 => 50,  81 => 49,  79 => 48,  76 => 47,  74 => 46,  72 => 45,  69 => 44,  67 => 43,  65 => 42,  63 => 41,  61 => 40,  59 => 39,  57 => 38,  54 => 37,  52 => 36,  50 => 35,  48 => 34,  46 => 33,  43 => 32,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "components/itilobject/layout.html.twig", "/Users/alvarozuculajunior/BCX/glpi/templates/components/itilobject/layout.html.twig");
    }
}
