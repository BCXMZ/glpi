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

/* components/form/header_content.html.twig */
class __TwigTemplate_807edc82e2a360d9b8f34bc8d60468ff extends Template
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
        $context["canedit"] = (((CoreExtension::getAttribute($this->env, $this->source, ($context["params"] ?? null), "canedit", [], "array", true, true, false, 33) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["params"]) || array_key_exists("params", $context) ? $context["params"] : (function () { throw new RuntimeError('Variable "params" does not exist.', 33, $this->source); })()), "canedit", [], "array", false, false, false, 33)))) ? (CoreExtension::getAttribute($this->env, $this->source, (isset($context["params"]) || array_key_exists("params", $context) ? $context["params"] : (function () { throw new RuntimeError('Variable "params" does not exist.', 33, $this->source); })()), "canedit", [], "array", false, false, false, 33)) : (true));
        // line 34
        $context["withtemplate"] = (((CoreExtension::getAttribute($this->env, $this->source, ($context["params"] ?? null), "withtemplate", [], "array", true, true, false, 34) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["params"]) || array_key_exists("params", $context) ? $context["params"] : (function () { throw new RuntimeError('Variable "params" does not exist.', 34, $this->source); })()), "withtemplate", [], "array", false, false, false, 34)))) ? (CoreExtension::getAttribute($this->env, $this->source, (isset($context["params"]) || array_key_exists("params", $context) ? $context["params"] : (function () { throw new RuntimeError('Variable "params" does not exist.', 34, $this->source); })()), "withtemplate", [], "array", false, false, false, 34)) : (""));
        // line 35
        $context["rand"] = ((array_key_exists("rand", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["rand"]) || array_key_exists("rand", $context) ? $context["rand"] : (function () { throw new RuntimeError('Variable "rand" does not exist.', 35, $this->source); })()), Twig\Extension\CoreExtension::random($this->env->getCharset()))) : (Twig\Extension\CoreExtension::random($this->env->getCharset())));
        // line 36
        $context["nametype"] = (((CoreExtension::getAttribute($this->env, $this->source, ($context["params"] ?? null), "formtitle", [], "array", true, true, false, 36) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["params"]) || array_key_exists("params", $context) ? $context["params"] : (function () { throw new RuntimeError('Variable "params" does not exist.', 36, $this->source); })()), "formtitle", [], "array", false, false, false, 36)))) ? (CoreExtension::getAttribute($this->env, $this->source, (isset($context["params"]) || array_key_exists("params", $context) ? $context["params"] : (function () { throw new RuntimeError('Variable "params" does not exist.', 36, $this->source); })()), "formtitle", [], "array", false, false, false, 36)) : (CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 36, $this->source); })()), "getTypeName", [1], "method", false, false, false, 36)));
        // line 37
        $context["friendlyname"] = (((CoreExtension::getAttribute($this->env, $this->source, ($context["params"] ?? null), "friendlyname", [], "array", true, true, false, 37) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["params"]) || array_key_exists("params", $context) ? $context["params"] : (function () { throw new RuntimeError('Variable "params" does not exist.', 37, $this->source); })()), "friendlyname", [], "array", false, false, false, 37)))) ? (CoreExtension::getAttribute($this->env, $this->source, (isset($context["params"]) || array_key_exists("params", $context) ? $context["params"] : (function () { throw new RuntimeError('Variable "params" does not exist.', 37, $this->source); })()), "friendlyname", [], "array", false, false, false, 37)) : (CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 37, $this->source); })()), "getHeaderName", [], "method", false, false, false, 37)));
        // line 38
        $context["id"] = (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, true, false, 38), "id", [], "array", true, true, false, 38) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 38, $this->source); })()), "fields", [], "any", false, false, false, 38), "id", [], "array", false, false, false, 38)))) ? (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 38, $this->source); })()), "fields", [], "any", false, false, false, 38), "id", [], "array", false, false, false, 38)) : ( -1));
        // line 39
        $context["in_navheader"] = ((array_key_exists("in_navheader", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["in_navheader"]) || array_key_exists("in_navheader", $context) ? $context["in_navheader"] : (function () { throw new RuntimeError('Variable "in_navheader" does not exist.', 39, $this->source); })()), false)) : (false));
        // line 40
        $context["header_toolbar"] = ((array_key_exists("header_toolbar", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["header_toolbar"]) || array_key_exists("header_toolbar", $context) ? $context["header_toolbar"] : (function () { throw new RuntimeError('Variable "header_toolbar" does not exist.', 40, $this->source); })()), [])) : ([]));
        // line 41
        $context["entity_name"] = ((array_key_exists("entity_name", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["entity_name"]) || array_key_exists("entity_name", $context) ? $context["entity_name"] : (function () { throw new RuntimeError('Variable "entity_name" does not exist.', 41, $this->source); })()), "")) : (""));
        // line 42
        yield "
";
        // line 43
        if ( !array_key_exists("entity_id", $context)) {
            // line 44
            yield "    ";
            if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 44, $this->source); })()), "getType", [], "method", false, false, false, 44) == "Entity")) {
                // line 45
                yield "        ";
                $context["entity_id"] = (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 45, $this->source); })()), "fields", [], "any", false, false, false, 45), "id", [], "array", false, false, false, 45) == 0)) ? (null) : ((((CoreExtension::getAttribute($this->env, $this->source, ($context["params"] ?? null), "entities_id", [], "array", true, true, false, 45) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["params"]) || array_key_exists("params", $context) ? $context["params"] : (function () { throw new RuntimeError('Variable "params" does not exist.', 45, $this->source); })()), "entities_id", [], "array", false, false, false, 45)))) ? (CoreExtension::getAttribute($this->env, $this->source, (isset($context["params"]) || array_key_exists("params", $context) ? $context["params"] : (function () { throw new RuntimeError('Variable "params" does not exist.', 45, $this->source); })()), "entities_id", [], "array", false, false, false, 45)) : ((((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, true, false, 45), "entities_id", [], "array", true, true, false, 45) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 45, $this->source); })()), "fields", [], "any", false, false, false, 45), "entities_id", [], "array", false, false, false, 45)))) ? (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 45, $this->source); })()), "fields", [], "any", false, false, false, 45), "entities_id", [], "array", false, false, false, 45)) : ($this->extensions['Glpi\Application\View\Extension\SessionExtension']->session("glpiactive_entity")))))));
                // line 46
                yield "    ";
            } elseif ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 46, $this->source); })()), "isEntityAssign", [], "method", false, false, false, 46)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 47
                yield "        ";
                $context["entity_id"] = (((CoreExtension::getAttribute($this->env, $this->source, ($context["params"] ?? null), "entities_id", [], "array", true, true, false, 47) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["params"]) || array_key_exists("params", $context) ? $context["params"] : (function () { throw new RuntimeError('Variable "params" does not exist.', 47, $this->source); })()), "entities_id", [], "array", false, false, false, 47)))) ? (CoreExtension::getAttribute($this->env, $this->source, (isset($context["params"]) || array_key_exists("params", $context) ? $context["params"] : (function () { throw new RuntimeError('Variable "params" does not exist.', 47, $this->source); })()), "entities_id", [], "array", false, false, false, 47)) : ((((CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "getEntityID", [], "method", true, true, false, 47) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 47, $this->source); })()), "getEntityID", [], "method", false, false, false, 47)))) ? (CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 47, $this->source); })()), "getEntityID", [], "method", false, false, false, 47)) : ($this->extensions['Glpi\Application\View\Extension\SessionExtension']->session("glpiactive_entity")))));
                // line 48
                yield "    ";
            } else {
                // line 49
                yield "        ";
                $context["entity_id"] = 0;
                // line 50
                yield "    ";
            }
            // line 51
            yield "    ";
            if ((($tmp = Session::isMultiEntitiesMode()) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 52
                yield "        ";
                $context["entity_name"] = (( !(null === (isset($context["entity_id"]) || array_key_exists("entity_id", $context) ? $context["entity_id"] : (function () { throw new RuntimeError('Variable "entity_id" does not exist.', 52, $this->source); })()))) ? ($this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemName("Entity", (isset($context["entity_id"]) || array_key_exists("entity_id", $context) ? $context["entity_id"] : (function () { throw new RuntimeError('Variable "entity_id" does not exist.', 52, $this->source); })()))) : (null));
                // line 53
                yield "    ";
            }
        }
        // line 55
        yield "
";
        // line 56
        if ((((isset($context["withtemplate"]) || array_key_exists("withtemplate", $context) ? $context["withtemplate"] : (function () { throw new RuntimeError('Variable "withtemplate" does not exist.', 56, $this->source); })()) == 2) &&  !(($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 56, $this->source); })()), "isNewItem", [], "method", false, false, false, 56)) && $tmp instanceof Markup ? (string) $tmp : $tmp))) {
            // line 57
            yield "   ";
            $context["template_name"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 57, $this->source); })()), "fields", [], "any", false, false, false, 57), "template_name", [], "array", false, false, false, 57);
            // line 58
            yield "   <input type=\"hidden\" name=\"template_name\" value=\"";
            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["template_name"]) || array_key_exists("template_name", $context) ? $context["template_name"] : (function () { throw new RuntimeError('Variable "template_name" does not exist.', 58, $this->source); })()), "html", null, true);
            yield "\" />
   ";
            // line 59
            $context["nametype"] = Twig\Extension\CoreExtension::sprintf(__("Created from the template %s"), (isset($context["template_name"]) || array_key_exists("template_name", $context) ? $context["template_name"] : (function () { throw new RuntimeError('Variable "template_name" does not exist.', 59, $this->source); })()));
        } elseif ((        // line 60
(isset($context["withtemplate"]) || array_key_exists("withtemplate", $context) ? $context["withtemplate"] : (function () { throw new RuntimeError('Variable "withtemplate" does not exist.', 60, $this->source); })()) == 1)) {
            // line 61
            yield "   ";
            $context["template_name"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 61, $this->source); })()), "fields", [], "any", false, false, false, 61), "template_name", [], "array", false, false, false, 61);
            // line 62
            yield "   <input type=\"hidden\" name=\"is_template\" value=\"1\" />
";
        } elseif ((($tmp = CoreExtension::getAttribute($this->env, $this->source,         // line 63
(isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 63, $this->source); })()), "isNewItem", [], "method", false, false, false, 63)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 64
            yield "   ";
            $context["nametype"] = Twig\Extension\CoreExtension::sprintf(__("%1\$s - %2\$s"), __("New item"), (isset($context["nametype"]) || array_key_exists("nametype", $context) ? $context["nametype"] : (function () { throw new RuntimeError('Variable "nametype" does not exist.', 64, $this->source); })()));
        }
        // line 66
        yield "
";
        // line 67
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 67, $this->source); })()), "canEdit", [CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 67, $this->source); })()), "fields", [], "any", false, false, false, 67), "id", [], "array", false, false, false, 67)], "method", false, false, false, 67)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 68
            yield "   <form name=\"massaction_";
            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["rand"]) || array_key_exists("rand", $context) ? $context["rand"] : (function () { throw new RuntimeError('Variable "rand" does not exist.', 68, $this->source); })()), "html", null, true);
            yield "\" id=\"massaction_";
            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["rand"]) || array_key_exists("rand", $context) ? $context["rand"] : (function () { throw new RuntimeError('Variable "rand" does not exist.', 68, $this->source); })()), "html", null, true);
            yield "\" method=\"post\"
         action=\"";
            // line 69
            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\RoutingExtension']->path("/front/massiveaction.php"), "html", null, true);
            yield "?_single_item[itemtype]=";
            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 69, $this->source); })()), "getType", [], "method", false, false, false, 69), "html", null, true);
            yield "&_single_item[id]=";
            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 69, $this->source); })()), "getID", [], "method", false, false, false, 69), "html", null, true);
            yield "\" data-submit-once>
      <div id=\"massive_container_";
            // line 70
            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["rand"]) || array_key_exists("rand", $context) ? $context["rand"] : (function () { throw new RuntimeError('Variable "rand" does not exist.', 70, $this->source); })()), "html", null, true);
            yield "\"></div>
      <input type=\"hidden\" name=\"_glpi_csrf_token\" value=\"";
            // line 71
            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Session::getNewCSRFToken(), "html", null, true);
            yield "\" />
   </form>
";
        }
        // line 74
        yield "
<div id=\"header_";
        // line 75
        yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["rand"]) || array_key_exists("rand", $context) ? $context["rand"] : (function () { throw new RuntimeError('Variable "rand" does not exist.', 75, $this->source); })()), "html", null, true);
        yield "\"
     class=\"card-header main-header d-flex flex-wrap flex-md-nowrap me-2 mt-n2 align-items-stretch ";
        // line 76
        if ((($tmp = (isset($context["in_navheader"]) || array_key_exists("in_navheader", $context) ? $context["in_navheader"] : (function () { throw new RuntimeError('Variable "in_navheader" does not exist.', 76, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield " align-self-end ";
        }
        yield " flex-grow-1\" style=\"min-width: 100px;\">
   ";
        // line 77
        if ((((isset($context["withtemplate"]) || array_key_exists("withtemplate", $context) ? $context["withtemplate"] : (function () { throw new RuntimeError('Variable "withtemplate" does not exist.', 77, $this->source); })()) == 1) && (($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 77, $this->source); })()), "isNewItem", [], "method", false, false, false, 77)) && $tmp instanceof Markup ? (string) $tmp : $tmp))) {
            // line 78
            yield "      <input type=\"text\" class=\"form-control ms-4 mb-2\" placeholder=\"";
            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Template name"), "html", null, true);
            yield "\"
             name=\"template_name\" id=\"textfield_template_name";
            // line 79
            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["rand"]) || array_key_exists("rand", $context) ? $context["rand"] : (function () { throw new RuntimeError('Variable "rand" does not exist.', 79, $this->source); })()), "html", null, true);
            yield "\"
             value=\"";
            // line 80
            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["template_name"]) || array_key_exists("template_name", $context) ? $context["template_name"] : (function () { throw new RuntimeError('Variable "template_name" does not exist.', 80, $this->source); })()), "html", null, true);
            yield "\" />
   ";
        }
        // line 82
        yield "   <h3 class=\"card-title d-flex align-items-center ps-0 ";
        yield (string) (((($tmp = (isset($context["in_navheader"]) || array_key_exists("in_navheader", $context) ? $context["in_navheader"] : (function () { throw new RuntimeError('Variable "in_navheader" does not exist.', 82, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("ps-sm-5") : ("ps-sm-4"));
        yield "\">
      ";
        // line 83
        $context["icon"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 83, $this->source); })()), "getIcon", [], "method", false, false, false, 83);
        // line 84
        yield "      ";
        if (( !(($tmp = (isset($context["in_navheader"]) || array_key_exists("in_navheader", $context) ? $context["in_navheader"] : (function () { throw new RuntimeError('Variable "in_navheader" does not exist.', 84, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp) && (Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["icon"]) || array_key_exists("icon", $context) ? $context["icon"] : (function () { throw new RuntimeError('Variable "icon" does not exist.', 84, $this->source); })())) > 0))) {
            // line 85
            yield "         <div class=\"ribbon ribbon-bookmark ribbon-top ribbon-start bg-blue s-1\">
            <i class=\"";
            // line 86
            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["icon"]) || array_key_exists("icon", $context) ? $context["icon"] : (function () { throw new RuntimeError('Variable "icon" does not exist.', 86, $this->source); })()), "html", null, true);
            yield " fa-2x\"></i>
         </div>
      ";
        }
        // line 89
        yield "      <span ";
        if ((($tmp = (isset($context["in_navheader"]) || array_key_exists("in_navheader", $context) ? $context["in_navheader"] : (function () { throw new RuntimeError('Variable "in_navheader" does not exist.', 89, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield " class=\"status rounded-1 me-1\" ";
        }
        yield ">
         ";
        // line 90
        if ((($tmp = (isset($context["in_navheader"]) || array_key_exists("in_navheader", $context) ? $context["in_navheader"] : (function () { throw new RuntimeError('Variable "in_navheader" does not exist.', 90, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 91
            yield "            <i class=\"";
            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["icon"]) || array_key_exists("icon", $context) ? $context["icon"] : (function () { throw new RuntimeError('Variable "icon" does not exist.', 91, $this->source); })()), "html", null, true);
            yield "\"></i>
         ";
        }
        // line 93
        yield "         ";
        if ((((isset($context["withtemplate"]) || array_key_exists("withtemplate", $context) ? $context["withtemplate"] : (function () { throw new RuntimeError('Variable "withtemplate" does not exist.', 93, $this->source); })()) == 1) && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 93, $this->source); })()), "id", [], "any", false, false, false, 93) > 0))) {
            // line 94
            yield "            ";
            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(_n("Template", "Templates", 1), "html", null, true);
            yield " - ";
            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["nametype"]) || array_key_exists("nametype", $context) ? $context["nametype"] : (function () { throw new RuntimeError('Variable "nametype" does not exist.', 94, $this->source); })()), "html", null, true);
            yield " - ";
            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["template_name"]) || array_key_exists("template_name", $context) ? $context["template_name"] : (function () { throw new RuntimeError('Variable "template_name" does not exist.', 94, $this->source); })()), "html", null, true);
            yield "
         ";
        } elseif ( !(($tmp = CoreExtension::getAttribute($this->env, $this->source,         // line 95
(isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 95, $this->source); })()), "isNewItem", [], "method", false, false, false, 95)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 96
            yield "            ";
            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["nametype"]) || array_key_exists("nametype", $context) ? $context["nametype"] : (function () { throw new RuntimeError('Variable "nametype" does not exist.', 96, $this->source); })()), "html", null, true);
            yield " - <span id=\"header-friendlyname\"> ";
            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["friendlyname"]) || array_key_exists("friendlyname", $context) ? $context["friendlyname"] : (function () { throw new RuntimeError('Variable "friendlyname" does not exist.', 96, $this->source); })()), "html", null, true);
            yield " </span>
         ";
        } else {
            // line 98
            yield "            ";
            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["nametype"]) || array_key_exists("nametype", $context) ? $context["nametype"] : (function () { throw new RuntimeError('Variable "nametype" does not exist.', 98, $this->source); })()), "html", null, true);
            yield "
         ";
        }
        // line 100
        yield "      </span>
      ";
        // line 101
        if ((((($tmp = (isset($context["in_navheader"]) || array_key_exists("in_navheader", $context) ? $context["in_navheader"] : (function () { throw new RuntimeError('Variable "in_navheader" does not exist.', 101, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp) && (($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 101, $this->source); })()), "isField", ["is_dynamic"], "method", false, false, false, 101)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) && (($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 101, $this->source); })()), "fields", [], "any", false, false, false, 101), "is_dynamic", [], "array", false, false, false, 101)) && $tmp instanceof Markup ? (string) $tmp : $tmp))) {
            // line 102
            yield "      <span class=\"mx-1 status rounded-1\" title=\"";
            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Automatic Inventory"), "html", null, true);
            yield "\" data-bs-toggle=\"tooltip\">
         <i class=\"";
            // line 103
            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Agent::getIcon"), "html", null, true);
            yield "\"></i>
      </span>
      ";
        }
        // line 106
        yield "      ";
        if (((($tmp = (isset($context["in_navheader"]) || array_key_exists("in_navheader", $context) ? $context["in_navheader"] : (function () { throw new RuntimeError('Variable "in_navheader" does not exist.', 106, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp) && (($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 106, $this->source); })()), "isField", ["is_deleted"], "method", false, false, false, 106)) && $tmp instanceof Markup ? (string) $tmp : $tmp))) {
            // line 107
            yield "      ";
            $context["title"] = (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 107, $this->source); })()), "isField", ["date_mod"], "method", false, false, false, 107)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (Twig\Extension\CoreExtension::sprintf(__("Item has been deleted on %s"), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 107, $this->source); })()), "fields", [], "any", false, false, false, 107), "date_mod", [], "array", false, false, false, 107))) : (__("Deleted")));
            // line 108
            yield "      <span
         id=\"header-is-deleted\"
         class=\"mx-1 status rounded-1\"
         title=\"";
            // line 111
            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 111, $this->source); })()), "html", null, true);
            yield "\"
         data-bs-toggle=\"tooltip\"
      >
         <i class=\"ti ti-trash\"></i>
         ";
            // line 115
            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Deleted"), "html", null, true);
            yield "
      </span>
      ";
        }
        // line 118
        yield "
      ";
        // line 119
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["header_toolbar"]) || array_key_exists("header_toolbar", $context) ? $context["header_toolbar"] : (function () { throw new RuntimeError('Variable "header_toolbar" does not exist.', 119, $this->source); })())) > 0)) {
            // line 120
            yield "         <div class=\"d-inline-block toolbar ms-2\">
            ";
            // line 121
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["header_toolbar"]) || array_key_exists("header_toolbar", $context) ? $context["header_toolbar"] : (function () { throw new RuntimeError('Variable "header_toolbar" does not exist.', 121, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["raw_element"]) {
                // line 122
                yield "               ";
                yield (string) $context["raw_element"];
                yield "
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['raw_element'], $context['_parent']);
            $context = array_intersect_key($context, $_parent);
            $context += $_parent;
            // line 124
            yield "         </div>
      ";
        }
        // line 126
        yield "   </h3>

   ";
        // line 128
        $context["single_actions_ms_auto"] = true;
        // line 129
        yield "   ";
        if ((((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 129, $this->source); })()), "isEntityAssign", [], "method", false, false, false, 129)) && $tmp instanceof Markup ? (string) $tmp : $tmp) && (($tmp = Session::isMultiEntitiesMode()) && $tmp instanceof Markup ? (string) $tmp : $tmp)) &&  !$this->extensions['Glpi\Application\View\Extension\PhpExtension']->isInstanceOf((isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 129, $this->source); })()), "Entity"))) {
            // line 130
            yield "      ";
            $context["single_actions_ms_auto"] = false;
            // line 131
            yield "       <div class=\"badge entity-name mx-1 px-2 ms-auto align-items-center col\" title=\"";
            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["entity_name"]) || array_key_exists("entity_name", $context) ? $context["entity_name"] : (function () { throw new RuntimeError('Variable "entity_name" does not exist.', 131, $this->source); })()), "html", null, true);
            yield "\" style=\"min-width: 100px; max-width: fit-content;\">
           <i class=\"ti ti-stack me-2\"></i>
           <div class=\"overflow-hidden text-truncate text-nowrap\">
               <span class=\"float-end ps-1\">";
            // line 134
            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["entity_name"]) || array_key_exists("entity_name", $context) ? $context["entity_name"] : (function () { throw new RuntimeError('Variable "entity_name" does not exist.', 134, $this->source); })()), "html", null, true);
            yield "</span>
           </div>
       </div>

      ";
            // line 138
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 138, $this->source); })()), "maybeRecursive", [], "method", false, false, false, 138)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 139
                yield "         <span class=\"badge is_recursive-toggle mx-1 px-2 align-items-center col-auto\">
            <label class=\"form-check d-flex align-items-center mb-0\">
               ";
                // line 141
                $context["disabled"] = ((isset($context["canedit"]) || array_key_exists("canedit", $context) ? $context["canedit"] : (function () { throw new RuntimeError('Variable "canedit" does not exist.', 141, $this->source); })()) == false);
                // line 142
                yield "               ";
                $context["comment"] = __("Change visibility in child entities.");
                // line 143
                yield "
               ";
                // line 144
                if ($this->extensions['Glpi\Application\View\Extension\PhpExtension']->isInstanceOf((isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 144, $this->source); })()), "CommonDBChild")) {
                    // line 145
                    yield "                  ";
                    $context["comment"] = __("Can՛t change this attribute. It՛s inherited from its parent.");
                    // line 146
                    yield "                  ";
                    $context["disabled"] = true;
                    // line 147
                    yield "               ";
                } elseif ( !(($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 147, $this->source); })()), "canRecurs", [], "method", false, false, false, 147)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 148
                    yield "                  ";
                    $context["comment"] = __("You are not allowed to change the visibility flag for child entities.");
                    // line 149
                    yield "                  ";
                    $context["disabled"] = true;
                    // line 150
                    yield "               ";
                } elseif ( !(($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 150, $this->source); })()), "canUnrecurs", [], "method", false, false, false, 150)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 151
                    yield "                  ";
                    $context["comment"] = __("Flag change forbidden. Linked items found.");
                    // line 152
                    yield "                  ";
                    $context["disabled"] = true;
                    // line 153
                    yield "               ";
                }
                // line 154
                yield "
               ";
                // line 155
                if ( !(($tmp = (isset($context["disabled"]) || array_key_exists("disabled", $context) ? $context["disabled"] : (function () { throw new RuntimeError('Variable "disabled" does not exist.', 155, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield "<input form=\"main-form\" type=\"hidden\" name=\"is_recursive\" value=\"0\" />";
                }
                // line 156
                yield "               <input form=\"main-form\" class=\"form-check-input\" type=\"checkbox\" name=\"is_recursive\" value=\"1\"
                  ";
                // line 157
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 157, $this->source); })()), "isRecursive", [], "method", false, false, false, 157)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield "checked=\"checked\"";
                }
                // line 158
                yield "                  ";
                if ((($tmp = (isset($context["disabled"]) || array_key_exists("disabled", $context) ? $context["disabled"] : (function () { throw new RuntimeError('Variable "disabled" does not exist.', 158, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield "disabled=\"disabled\"";
                }
                yield " />
               ";
                // line 159
                if ((($this->extensions['Glpi\Application\View\Extension\PhpExtension']->isInstanceOf((isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 159, $this->source); })()), "CommonDBChild") && (($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 159, $this->source); })()), "isNewItem", [], "method", false, false, false, 159)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) && (($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 159, $this->source); })()), "isRecursive", [], "method", false, false, false, 159)) && $tmp instanceof Markup ? (string) $tmp : $tmp))) {
                    // line 160
                    yield "                  ";
                    // line 161
                    yield "                  <input form=\"main-form\" type=\"hidden\" name=\"is_recursive\" value=\"1\" />
               ";
                }
                // line 163
                yield "               <span class=\"form-check-label mb-0 mx-2\">
                  ";
                // line 164
                yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Child entities"), "html", null, true);
                yield "
                  <i class=\"ti ti-info-circle ms-1\" title=\"";
                // line 165
                yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["comment"]) || array_key_exists("comment", $context) ? $context["comment"] : (function () { throw new RuntimeError('Variable "comment" does not exist.', 165, $this->source); })()), "html", null, true);
                yield "\" data-bs-toggle=\"tooltip\" role=\"img\"></i>
               </span>
            </label>
         </span>
      ";
            }
            // line 170
            yield "   ";
        }
        // line 171
        yield "
   ";
        // line 172
        yield (string) Twig\Extension\CoreExtension::include($this->env, $context, "components/form/single-action.html.twig");
        yield "
</div>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "components/form/header_content.html.twig";
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
        return array (  435 => 172,  432 => 171,  429 => 170,  421 => 165,  417 => 164,  414 => 163,  410 => 161,  408 => 160,  406 => 159,  399 => 158,  395 => 157,  392 => 156,  388 => 155,  385 => 154,  382 => 153,  379 => 152,  376 => 151,  373 => 150,  370 => 149,  367 => 148,  364 => 147,  361 => 146,  358 => 145,  356 => 144,  353 => 143,  350 => 142,  348 => 141,  344 => 139,  342 => 138,  335 => 134,  328 => 131,  325 => 130,  322 => 129,  320 => 128,  316 => 126,  312 => 124,  302 => 122,  298 => 121,  295 => 120,  293 => 119,  290 => 118,  284 => 115,  277 => 111,  272 => 108,  269 => 107,  266 => 106,  260 => 103,  255 => 102,  253 => 101,  250 => 100,  244 => 98,  236 => 96,  234 => 95,  225 => 94,  222 => 93,  216 => 91,  214 => 90,  207 => 89,  201 => 86,  198 => 85,  195 => 84,  193 => 83,  188 => 82,  183 => 80,  179 => 79,  174 => 78,  172 => 77,  166 => 76,  162 => 75,  159 => 74,  153 => 71,  149 => 70,  141 => 69,  134 => 68,  132 => 67,  129 => 66,  125 => 64,  123 => 63,  120 => 62,  117 => 61,  115 => 60,  113 => 59,  108 => 58,  105 => 57,  103 => 56,  100 => 55,  96 => 53,  93 => 52,  90 => 51,  87 => 50,  84 => 49,  81 => 48,  78 => 47,  75 => 46,  72 => 45,  69 => 44,  67 => 43,  64 => 42,  62 => 41,  60 => 40,  58 => 39,  56 => 38,  54 => 37,  52 => 36,  50 => 35,  48 => 34,  46 => 33,  43 => 32,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "components/form/header_content.html.twig", "/Users/alvarozuculajunior/BCX/glpi/templates/components/form/header_content.html.twig");
    }
}
