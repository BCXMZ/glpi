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

/* components/itilobject/linked_itilobjects.html.twig */
class __TwigTemplate_185248b132ec8350664649ce3b459008 extends Template
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
<input type=\"hidden\" name=\"_link[itemtype_1]\" value=\"";
        // line 33
        yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 33, $this->source); })()), "getType", [], "method", false, false, false, 33), "html", null, true);
        yield "\" />
<input type=\"hidden\" name=\"_link[items_id_1]\" value=\"";
        // line 34
        yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 34, $this->source); })()), "fields", [], "any", false, false, false, 34), "id", [], "array", false, false, false, 34), "html", null, true);
        yield "\" />

";
        // line 36
        $context["linked_itilobjects"] = (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 36, $this->source); })()), "isNewItem", [], "method", false, false, false, 36)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ([]) : ($this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("CommonITILObject_CommonITILObject::getAllLinkedTo", [CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 36, $this->source); })()), "getType", [], "method", false, false, false, 36), CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 36, $this->source); })()), "getId", [], "method", false, false, false, 36)])));
        // line 37
        if ((($tmp = Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["linked_itilobjects"]) || array_key_exists("linked_itilobjects", $context) ? $context["linked_itilobjects"] : (function () { throw new RuntimeError('Variable "linked_itilobjects" does not exist.', 37, $this->source); })()))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 38
            yield "   <div class=\"card\">
      <div class=\"list-group list-group-flush list-group-hoverable\">
         ";
            // line 40
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["linked_itilobjects"]) || array_key_exists("linked_itilobjects", $context) ? $context["linked_itilobjects"] : (function () { throw new RuntimeError('Variable "linked_itilobjects" does not exist.', 40, $this->source); })()));
            foreach ($context['_seq'] as $context["id"] => $context["linked"]) {
                // line 41
                yield "            ";
                $context["new_itilobject"] = $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItem(CoreExtension::getAttribute($this->env, $this->source, $context["linked"], "itemtype", [], "array", false, false, false, 41), CoreExtension::getAttribute($this->env, $this->source, $context["linked"], "items_id", [], "array", false, false, false, 41));
                // line 42
                yield "            ";
                $context["can_view_item"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["new_itilobject"]) || array_key_exists("new_itilobject", $context) ? $context["new_itilobject"] : (function () { throw new RuntimeError('Variable "new_itilobject" does not exist.', 42, $this->source); })()), "can", [CoreExtension::getAttribute($this->env, $this->source, $context["linked"], "items_id", [], "array", false, false, false, 42), Twig\Extension\CoreExtension::constant("READ")], "method", false, false, false, 42);
                // line 43
                yield "            ";
                $context["can_delete_relation"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 43, $this->source); })()), "can", [CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 43, $this->source); })()), "getID", [], "method", false, false, false, 43), Twig\Extension\CoreExtension::constant("UPDATE")], "method", false, false, false, 43);
                // line 44
                yield "            <div class=\"list-group-item\">
               <div class=\"row\">
                  <div class=\"col-auto\">
                     ";
                // line 47
                yield (string) $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("CommonITILObject_CommonITILObject::getLinkName", [CoreExtension::getAttribute($this->env, $this->source,                 // line 48
$context["linked"], "link", [], "array", false, false, false, 48), ((CoreExtension::getAttribute($this->env, $this->source,                 // line 49
$context["linked"], "itemtype_2", [], "array", false, false, false, 49) == CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 49, $this->source); })()), "getType", [], "method", false, false, false, 49)) && (CoreExtension::getAttribute($this->env, $this->source, $context["linked"], "items_id_2", [], "array", false, false, false, 49) == CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 49, $this->source); })()), "fields", [], "any", false, false, false, 49), "id", [], "array", false, false, false, 49))), true]);
                // line 51
                yield "
                  </div>
                  <div class=\"col text-truncate\">
                     ";
                // line 54
                if ((($tmp = (isset($context["can_view_item"]) || array_key_exists("can_view_item", $context) ? $context["can_view_item"] : (function () { throw new RuntimeError('Variable "can_view_item" does not exist.', 54, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 55
                    yield "                        <a href=\"";
                    yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeFormPath(CoreExtension::getAttribute($this->env, $this->source, $context["linked"], "itemtype", [], "array", false, false, false, 55), CoreExtension::getAttribute($this->env, $this->source, $context["linked"], "items_id", [], "array", false, false, false, 55)), "html", null, true);
                    yield "\" class=\"col-9 overflow-hidden text-nowrap\">
                           <i class=\"";
                    // line 56
                    yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeIcon(CoreExtension::getAttribute($this->env, $this->source, $context["linked"], "itemtype", [], "array", false, false, false, 56)), "html", null, true);
                    yield "\" title=\"";
                    yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeName(CoreExtension::getAttribute($this->env, $this->source, $context["linked"], "itemtype", [], "array", false, false, false, 56)), "html", null, true);
                    yield "\" data-bs-toggle=\"tooltip\"></i>
                           ";
                    // line 57
                    yield (string) CoreExtension::getAttribute($this->env, $this->source, (isset($context["new_itilobject"]) || array_key_exists("new_itilobject", $context) ? $context["new_itilobject"] : (function () { throw new RuntimeError('Variable "new_itilobject" does not exist.', 57, $this->source); })()), "getStatusIcon", [CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["new_itilobject"]) || array_key_exists("new_itilobject", $context) ? $context["new_itilobject"] : (function () { throw new RuntimeError('Variable "new_itilobject" does not exist.', 57, $this->source); })()), "fields", [], "any", false, false, false, 57), "status", [], "array", false, false, false, 57)], "method", false, false, false, 57);
                    yield "
                           <span title=\"";
                    // line 58
                    yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["new_itilobject"]) || array_key_exists("new_itilobject", $context) ? $context["new_itilobject"] : (function () { throw new RuntimeError('Variable "new_itilobject" does not exist.', 58, $this->source); })()), "fields", [], "any", false, false, false, 58), "name", [], "array", false, false, false, 58), "html", null, true);
                    yield "\" data-bs-toggle=\"tooltip\">
                              ";
                    // line 59
                    yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["new_itilobject"]) || array_key_exists("new_itilobject", $context) ? $context["new_itilobject"] : (function () { throw new RuntimeError('Variable "new_itilobject" does not exist.', 59, $this->source); })()), "fields", [], "any", false, false, false, 59), "name", [], "array", false, false, false, 59), "html", null, true);
                    yield "
                           </span>
                           (";
                    // line 61
                    yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["new_itilobject"]) || array_key_exists("new_itilobject", $context) ? $context["new_itilobject"] : (function () { throw new RuntimeError('Variable "new_itilobject" does not exist.', 61, $this->source); })()), "fields", [], "any", false, false, false, 61), "id", [], "array", false, false, false, 61), "html", null, true);
                    yield ")
                        </a>
                     ";
                } else {
                    // line 64
                    yield "                        <span class=\"col-9 overflow-hidden text-nowrap text-muted\">
                           <i class=\"";
                    // line 65
                    yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeIcon(CoreExtension::getAttribute($this->env, $this->source, $context["linked"], "itemtype", [], "array", false, false, false, 65)), "html", null, true);
                    yield "\" title=\"";
                    yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeName(CoreExtension::getAttribute($this->env, $this->source, $context["linked"], "itemtype", [], "array", false, false, false, 65)), "html", null, true);
                    yield "\" data-bs-toggle=\"tooltip\"></i>
                           <span title=\"";
                    // line 66
                    yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["new_itilobject"]) || array_key_exists("new_itilobject", $context) ? $context["new_itilobject"] : (function () { throw new RuntimeError('Variable "new_itilobject" does not exist.', 66, $this->source); })()), "fields", [], "any", false, false, false, 66), "name", [], "array", false, false, false, 66), "html", null, true);
                    yield "\" data-bs-toggle=\"tooltip\">
                              ";
                    // line 67
                    yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["new_itilobject"]) || array_key_exists("new_itilobject", $context) ? $context["new_itilobject"] : (function () { throw new RuntimeError('Variable "new_itilobject" does not exist.', 67, $this->source); })()), "fields", [], "any", false, false, false, 67), "name", [], "array", false, false, false, 67), "html", null, true);
                    yield "
                           </span>
                           (";
                    // line 69
                    yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["new_itilobject"]) || array_key_exists("new_itilobject", $context) ? $context["new_itilobject"] : (function () { throw new RuntimeError('Variable "new_itilobject" does not exist.', 69, $this->source); })()), "fields", [], "any", false, false, false, 69), "id", [], "array", false, false, false, 69), "html", null, true);
                    yield ")
                        </span>
                     ";
                }
                // line 72
                yield "                  </div>

                  ";
                // line 74
                if ((($tmp = (isset($context["can_delete_relation"]) || array_key_exists("can_delete_relation", $context) ? $context["can_delete_relation"] : (function () { throw new RuntimeError('Variable "can_delete_relation" does not exist.', 74, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 75
                    yield "                     <div class=\"col-auto\">
                        <button type=\"submit\"
                                form=\"linked_itilobjects_";
                    // line 77
                    yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["main_rand"]) || array_key_exists("main_rand", $context) ? $context["main_rand"] : (function () { throw new RuntimeError('Variable "main_rand" does not exist.', 77, $this->source); })()), "html", null, true);
                    yield "\"
                                name=\"id\"
                                value=\"";
                    // line 79
                    yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["id"], "html", null, true);
                    yield "\"
                                class=\"btn btn-sm btn-ghost-danger\"
                                title=\"";
                    // line 81
                    yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(_x("button", "Unlink"), "html", null, true);
                    yield "\"
                                data-bs-toggle=\"tooltip\">
                           <i class=\"ti ti-unlink\"></i>
                        </button>
                     </div>
                  ";
                }
                // line 87
                yield "               </div>
            </div>
         ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['id'], $context['linked'], $context['_parent']);
            $context = array_intersect_key($context, $_parent);
            $context += $_parent;
            // line 90
            yield "      </div>
   </div>
";
        }
        // line 93
        yield "
";
        // line 94
        if (((($tmp = (isset($context["canupdate"]) || array_key_exists("canupdate", $context) ? $context["canupdate"] : (function () { throw new RuntimeError('Variable "canupdate" does not exist.', 94, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp) &&  !(($tmp = (((CoreExtension::getAttribute($this->env, $this->source, ($context["params"] ?? null), "template_preview", [], "array", true, true, false, 94) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["params"]) || array_key_exists("params", $context) ? $context["params"] : (function () { throw new RuntimeError('Variable "params" does not exist.', 94, $this->source); })()), "template_preview", [], "array", false, false, false, 94)))) ? (CoreExtension::getAttribute($this->env, $this->source, (isset($context["params"]) || array_key_exists("params", $context) ? $context["params"] : (function () { throw new RuntimeError('Variable "params" does not exist.', 94, $this->source); })()), "template_preview", [], "array", false, false, false, 94)) : (false))) && $tmp instanceof Markup ? (string) $tmp : $tmp))) {
            // line 95
            yield "   ";
            $context["has_pending_link"] = (Twig\Extension\CoreExtension::length($this->env->getCharset(), (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["params"] ?? null), "_link", [], "array", false, true, false, 95), "items_id_2", [], "array", true, true, false, 95) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["params"]) || array_key_exists("params", $context) ? $context["params"] : (function () { throw new RuntimeError('Variable "params" does not exist.', 95, $this->source); })()), "_link", [], "array", false, false, false, 95), "items_id_2", [], "array", false, false, false, 95)))) ? (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["params"]) || array_key_exists("params", $context) ? $context["params"] : (function () { throw new RuntimeError('Variable "params" does not exist.', 95, $this->source); })()), "_link", [], "array", false, false, false, 95), "items_id_2", [], "array", false, false, false, 95)) : (""))) > 0);
            // line 96
            yield "
   ";
            // line 98
            yield "   ";
            $context["used_items"] = [ (string)CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 98, $this->source); })()), "getType", [], "method", false, false, false, 98) => [CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 98, $this->source); })()), "fields", [], "any", false, false, false, 98), "id", [], "array", false, false, false, 98)]];
            // line 99
            yield "   ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["linked_itilobjects"]) || array_key_exists("linked_itilobjects", $context) ? $context["linked_itilobjects"] : (function () { throw new RuntimeError('Variable "linked_itilobjects" does not exist.', 99, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["linked"]) {
                // line 100
                yield "      ";
                $context["linked_type"] = CoreExtension::getAttribute($this->env, $this->source, $context["linked"], "itemtype", [], "array", false, false, false, 100);
                // line 101
                yield "      ";
                $context["linked_id"] = CoreExtension::getAttribute($this->env, $this->source, $context["linked"], "items_id", [], "array", false, false, false, 101);
                // line 102
                yield "      ";
                if ( !CoreExtension::getAttribute($this->env, $this->source, ($context["used_items"] ?? null), (isset($context["linked_type"]) || array_key_exists("linked_type", $context) ? $context["linked_type"] : (function () { throw new RuntimeError('Variable "linked_type" does not exist.', 102, $this->source); })()), [], "array", true, true, false, 102)) {
                    // line 103
                    yield "         ";
                    $context["used_items"] = Twig\Extension\CoreExtension::merge((isset($context["used_items"]) || array_key_exists("used_items", $context) ? $context["used_items"] : (function () { throw new RuntimeError('Variable "used_items" does not exist.', 103, $this->source); })()), [ (string)(isset($context["linked_type"]) || array_key_exists("linked_type", $context) ? $context["linked_type"] : (function () { throw new RuntimeError('Variable "linked_type" does not exist.', 103, $this->source); })()) => []]);
                    // line 104
                    yield "      ";
                }
                // line 105
                yield "      ";
                $context["used_items"] = Twig\Extension\CoreExtension::merge((isset($context["used_items"]) || array_key_exists("used_items", $context) ? $context["used_items"] : (function () { throw new RuntimeError('Variable "used_items" does not exist.', 105, $this->source); })()), [ (string)(isset($context["linked_type"]) || array_key_exists("linked_type", $context) ? $context["linked_type"] : (function () { throw new RuntimeError('Variable "linked_type" does not exist.', 105, $this->source); })()) => Twig\Extension\CoreExtension::merge(CoreExtension::getAttribute($this->env, $this->source, (isset($context["used_items"]) || array_key_exists("used_items", $context) ? $context["used_items"] : (function () { throw new RuntimeError('Variable "used_items" does not exist.', 105, $this->source); })()), (isset($context["linked_type"]) || array_key_exists("linked_type", $context) ? $context["linked_type"] : (function () { throw new RuntimeError('Variable "linked_type" does not exist.', 105, $this->source); })()), [], "array", false, false, false, 105), [(isset($context["linked_id"]) || array_key_exists("linked_id", $context) ? $context["linked_id"] : (function () { throw new RuntimeError('Variable "linked_id" does not exist.', 105, $this->source); })())])]);
                // line 106
                yield "   ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['linked'], $context['_parent']);
            $context = array_intersect_key($context, $_parent);
            $context += $_parent;
            // line 107
            yield "
   <div class=\"mt-2\">
      <button class=\"btn btn-sm btn-ghost-secondary ";
            // line 109
            yield (string) (((($tmp = (isset($context["has_pending_link"]) || array_key_exists("has_pending_link", $context) ? $context["has_pending_link"] : (function () { throw new RuntimeError('Variable "has_pending_link" does not exist.', 109, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("d-none") : (""));
            yield "\" type=\"button\"
              data-bs-toggle=\"collapse\" data-bs-target=\"#link_itilobject_dropdowns\"
              aria-expanded=\"false\" aria-controls=\"link_itilobject_dropdowns\" onclick=\"\$(this).hide();\">
         <i class=\"ti ti-plus\"></i>
         <span>";
            // line 113
            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Add"), "html", null, true);
            yield "</span>
      </button>

      <span class=\"collapse ";
            // line 116
            yield (string) (((($tmp = (isset($context["has_pending_link"]) || array_key_exists("has_pending_link", $context) ? $context["has_pending_link"] : (function () { throw new RuntimeError('Variable "has_pending_link" does not exist.', 116, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("show") : (""));
            yield "\" id=\"link_itilobject_dropdowns\">
         ";
            // line 117
            $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("CommonITILObject_CommonITILObject::dropdownLinks", ["_link[link]", (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,             // line 119
($context["params"] ?? null), "_link", [], "array", false, true, false, 119), "link", [], "array", true, true, false, 119) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["params"]) || array_key_exists("params", $context) ? $context["params"] : (function () { throw new RuntimeError('Variable "params" does not exist.', 119, $this->source); })()), "_link", [], "array", false, false, false, 119), "link", [], "array", false, false, false, 119)))) ? (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["params"]) || array_key_exists("params", $context) ? $context["params"] : (function () { throw new RuntimeError('Variable "params" does not exist.', 119, $this->source); })()), "_link", [], "array", false, false, false, 119), "link", [], "array", false, false, false, 119)) : (""))]);
            // line 121
            yield "         ";
            $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Dropdown::showSelectItemFromItemtypes", [["items_id_name" => "_link[items_id_2]", "itemtype_name" => "_link[itemtype_2]", "itemtypes" => ["Ticket", "Change", "Problem"], "checkright" => true, "used" =>             // line 126
(isset($context["used_items"]) || array_key_exists("used_items", $context) ? $context["used_items"] : (function () { throw new RuntimeError('Variable "used_items" does not exist.', 126, $this->source); })()), "default_itemtype" => (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,             // line 127
($context["params"] ?? null), "_link", [], "array", false, true, false, 127), "itemtype_2", [], "array", true, true, false, 127) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["params"]) || array_key_exists("params", $context) ? $context["params"] : (function () { throw new RuntimeError('Variable "params" does not exist.', 127, $this->source); })()), "_link", [], "array", false, false, false, 127), "itemtype_2", [], "array", false, false, false, 127)))) ? (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["params"]) || array_key_exists("params", $context) ? $context["params"] : (function () { throw new RuntimeError('Variable "params" does not exist.', 127, $this->source); })()), "_link", [], "array", false, false, false, 127), "itemtype_2", [], "array", false, false, false, 127)) : ("")), "default_items_id" => (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,             // line 128
($context["params"] ?? null), "_link", [], "array", false, true, false, 128), "items_id_2", [], "array", true, true, false, 128) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["params"]) || array_key_exists("params", $context) ? $context["params"] : (function () { throw new RuntimeError('Variable "params" does not exist.', 128, $this->source); })()), "_link", [], "array", false, false, false, 128), "items_id_2", [], "array", false, false, false, 128)))) ? (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["params"]) || array_key_exists("params", $context) ? $context["params"] : (function () { throw new RuntimeError('Variable "params" does not exist.', 128, $this->source); })()), "_link", [], "array", false, false, false, 128), "items_id_2", [], "array", false, false, false, 128)) : (""))]]);
            // line 130
            yield "      </span>
   </div>
";
        }
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "components/itilobject/linked_itilobjects.html.twig";
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
        return array (  263 => 130,  261 => 128,  260 => 127,  259 => 126,  257 => 121,  255 => 119,  254 => 117,  250 => 116,  244 => 113,  237 => 109,  233 => 107,  226 => 106,  223 => 105,  220 => 104,  217 => 103,  214 => 102,  211 => 101,  208 => 100,  203 => 99,  200 => 98,  197 => 96,  194 => 95,  192 => 94,  189 => 93,  184 => 90,  175 => 87,  166 => 81,  161 => 79,  156 => 77,  152 => 75,  150 => 74,  146 => 72,  140 => 69,  135 => 67,  131 => 66,  125 => 65,  122 => 64,  116 => 61,  111 => 59,  107 => 58,  103 => 57,  97 => 56,  92 => 55,  90 => 54,  85 => 51,  83 => 49,  82 => 48,  81 => 47,  76 => 44,  73 => 43,  70 => 42,  67 => 41,  63 => 40,  59 => 38,  57 => 37,  55 => 36,  50 => 34,  46 => 33,  43 => 32,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "components/itilobject/linked_itilobjects.html.twig", "/Users/alvarozuculajunior/BCX/glpi/templates/components/itilobject/linked_itilobjects.html.twig");
    }
}
