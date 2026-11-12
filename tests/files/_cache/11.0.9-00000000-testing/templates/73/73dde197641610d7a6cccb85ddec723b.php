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

/* components/form/inventory_info.html.twig */
class __TwigTemplate_1c630acdd4fa9faaa613f9f31eae24be extends Template
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
        if (((($tmp = Session::haveRight("inventory", Twig\Extension\CoreExtension::constant("READ"))) && $tmp instanceof Markup ? (string) $tmp : $tmp) && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 33, $this->source); })()), "isDynamic", [], "method", false, false, false, 33) != false))) {
            // line 34
            yield "<div class=\"card m-n2 border-0 shadow-none\">
   <div class=\"card-header\">
      <div class=\"ribbon ribbon-bookmark ribbon-top ribbon-start bg-blue s-1\">
         <i class=\"ti ti-cloud-download fa-2x\"></i>
      </div>
      <h4 class=\"card-title ps-5\">
         ";
            // line 40
            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Inventory information"), "html", null, true);
            yield "
      </h4>
      ";
            // line 42
            $context["inventory_filename"] = (($this->extensions['Glpi\Application\View\Extension\PhpExtension']->isUsingTrait((isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 42, $this->source); })()), "Glpi\\Features\\Inventoriable")) ? (CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 42, $this->source); })()), "getInventoryFileName", [false], "method", false, false, false, 42)) : (null));
            // line 43
            yield "      ";
            if ( !(null === (isset($context["inventory_filename"]) || array_key_exists("inventory_filename", $context) ? $context["inventory_filename"] : (function () { throw new RuntimeError('Variable "inventory_filename" does not exist.', 43, $this->source); })()))) {
                // line 44
                yield "         <a href=\"";
                yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\RoutingExtension']->path(("front/document.send.php?file=_inventory/" . (isset($context["inventory_filename"]) || array_key_exists("inventory_filename", $context) ? $context["inventory_filename"] : (function () { throw new RuntimeError('Variable "inventory_filename" does not exist.', 44, $this->source); })()))), "html", null, true);
                yield "\"
            class=\"btn btn-sm btn-secondary ms-auto\" target=\"_blank\"
            data-bs-toggle=\"tooltip\" data-bs-placement=\"right\"
            title=\"";
                // line 47
                yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::sprintf(__("Download \"%1\$s\" inventory file"), $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemName((isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 47, $this->source); })()))), "html", null, true);
                yield "\">
            <i class=\"ti ti-download\"></i>
         </a>
      ";
            } else {
                // line 51
                yield "         <span class=\"ms-auto\" data-bs-toggle=\"tooltip\" data-bs-placement=\"right\" title=\"";
                yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Inventory file missing"), "html", null, true);
                yield "\">
            <i class=\"ti ti-ban\"></i>
            <span class=\"visually-hidden\">";
                // line 53
                yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Inventory file missing"), "html", null, true);
                yield "</span>
         </span>
      ";
            }
            // line 56
            yield "   </div>

   ";
            // line 58
            $context["agent"] = (($this->extensions['Glpi\Application\View\Extension\PhpExtension']->isUsingTrait((isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 58, $this->source); })()), "Glpi\\Features\\Inventoriable")) ? (CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 58, $this->source); })()), "getInventoryAgent", [], "method", false, false, false, 58)) : (null));
            // line 59
            yield "   ";
            if ( !(null === (isset($context["agent"]) || array_key_exists("agent", $context) ? $context["agent"] : (function () { throw new RuntimeError('Variable "agent" does not exist.', 59, $this->source); })()))) {
                // line 60
                yield "      <div class=\"card-body row\">
         <div class=\"mb-3 col-12 col-sm-4\">
            <label class=\"form-label\" >";
                // line 62
                yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["agent"]) || array_key_exists("agent", $context) ? $context["agent"] : (function () { throw new RuntimeError('Variable "agent" does not exist.', 62, $this->source); })()), "getTypeName", [], "method", false, false, false, 62), "html", null, true);
                yield "</label>
            <span>
               <i class=\"";
                // line 64
                yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["agent"]) || array_key_exists("agent", $context) ? $context["agent"] : (function () { throw new RuntimeError('Variable "agent" does not exist.', 64, $this->source); })()), "getIcon", [], "method", false, false, false, 64), "html", null, true);
                yield "\"></i>
               ";
                // line 65
                yield (string) $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemLink((isset($context["agent"]) || array_key_exists("agent", $context) ? $context["agent"] : (function () { throw new RuntimeError('Variable "agent" does not exist.', 65, $this->source); })()));
                yield "
            </span>
         </div>

         <div class=\"mb-3 col-12 col-sm-4\">
            <label class=\"form-label\" >";
                // line 70
                yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Useragent"), "html", null, true);
                yield "</label>
            <span>";
                // line 71
                yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["agent"]) || array_key_exists("agent", $context) ? $context["agent"] : (function () { throw new RuntimeError('Variable "agent" does not exist.', 71, $this->source); })()), "fields", [], "any", false, false, false, 71), "useragent", [], "array", false, false, false, 71), "html", null, true);
                yield "</span>
         </div>

         <div class=\"mb-3 col-12 col-sm-4\">
            <label class=\"form-label\" >";
                // line 75
                yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Inventory tag"), "html", null, true);
                yield "</label>
            <span>";
                // line 76
                yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["agent"]) || array_key_exists("agent", $context) ? $context["agent"] : (function () { throw new RuntimeError('Variable "agent" does not exist.', 76, $this->source); })()), "fields", [], "any", false, false, false, 76), "tag", [], "array", false, false, false, 76), "html", null, true);
                yield "</span>
         </div>

         <div class=\"mb-3 col-12 col-sm-4\">
            <label class=\"form-label\" >";
                // line 80
                yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Public contact address"), "html", null, true);
                yield "</label>
            <span>";
                // line 81
                yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["agent"]) || array_key_exists("agent", $context) ? $context["agent"] : (function () { throw new RuntimeError('Variable "agent" does not exist.', 81, $this->source); })()), "fields", [], "any", false, false, false, 81), "remote_addr", [], "array", false, false, false, 81), "html", null, true);
                yield "</span>
         </div>

         <div class=\"mb-3 col-12 col-sm-4\">
            <label class=\"form-label\" >";
                // line 85
                yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Last contact"), "html", null, true);
                yield "</label>
            <span>";
                // line 86
                yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\DataHelpersExtension']->getFormattedDatetime(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["agent"]) || array_key_exists("agent", $context) ? $context["agent"] : (function () { throw new RuntimeError('Variable "agent" does not exist.', 86, $this->source); })()), "fields", [], "any", false, false, false, 86), "last_contact", [], "array", false, false, false, 86)), "html", null, true);
                yield "</span>
         </div>

         ";
                // line 89
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 89, $this->source); })()), "isField", ["last_inventory_update"], "method", false, false, false, 89)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 90
                    yield "            <div class=\"mb-3 col-12 col-sm-4\">
               <label class=\"form-label\" >";
                    // line 91
                    yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Last inventory update"), "html", null, true);
                    yield "</label>
               <span>";
                    // line 92
                    yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\DataHelpersExtension']->getFormattedDatetime(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 92, $this->source); })()), "fields", [], "any", false, false, false, 92), "last_inventory_update", [], "array", false, false, false, 92)), "html", null, true);
                    yield "</span>
            </div>
         ";
                } else {
                    // line 95
                    yield "            <div class=\"mb-3 col-12 col-sm-4\">
            </div>
         ";
                }
                // line 98
                yield "
         <div class=\"mb-3 col-12 col-sm-4\">
            <label class=\"form-label\" >
               ";
                // line 101
                yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Agent status"), "html", null, true);
                yield "
               <i id=\"update-status\" class=\"ti ti-refresh d-inline-block\" role=\"button\" data-bs-toggle=\"tooltip\" title=\"";
                // line 102
                yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Ask agent about its current status"), "html", null, true);
                yield "\"></i>
            </label>
            <span id=\x27agent_status\x27>";
                // line 104
                yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Unknown"), "html", null, true);
                yield "</span>
         </div>

         <div class=\"mb-3 col-12 col-sm-4\">
            <label class=\"form-label\" >
               ";
                // line 109
                yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Request inventory"), "html", null, true);
                yield "
               <i id=\"update-inventory\" class=\"ti ti-refresh d-inline-block\" role=\"button\" data-bs-toggle=\"tooltip\" title=\"";
                // line 110
                yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Request agent to proceed an new inventory"), "html", null, true);
                yield "\"></i>
            </label>
            <span id=\x27inventory_status\x27>";
                // line 112
                yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Unknown"), "html", null, true);
                yield "</span>
         </div>
      </div>

      <script>
      \$(function () {
         \$(\x27#update-status\x27).on(\x27click\x27, function() {
            var icon = \$(this);
            icon.addClass(\x27icon-rotate\x27);
            \$.ajax({
               type: \x27POST\x27,
               url: `\${CFG_GLPI.root_doc}/ajax/agent.php`,
               timeout: 30000, // 30 seconds timeout
               dataType: \x27json\x27,
               data: {
                  action: \x27";
                // line 127
                yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::constant("Agent::ACTION_STATUS"), "js"), "html", null, true);
                yield "\x27,
                  id: ";
                // line 128
                yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["agent"]) || array_key_exists("agent", $context) ? $context["agent"] : (function () { throw new RuntimeError('Variable "agent" does not exist.', 128, $this->source); })()), "getID", [], "method", false, false, false, 128), "html", null, true);
                yield "
               },
               success: function(json) {
                  \$(\x27#agent_status\x27).text(json.answer);
               },
               complete: function() {
                  icon.removeClass(\x27icon-rotate\x27);
               }
            });
         });

         \$(\x27#update-inventory\x27).on(\x27click\x27, function() {
            var icon = \$(this);
            icon.addClass(\x27icon-rotate\x27);
            \$.ajax({
               type: \x27POST\x27,
               url: `\${CFG_GLPI.root_doc}/ajax/agent.php`,
               timeout: 30000, // 30 seconds timeout
               dataType: \x27json\x27,
               data: {
                  action: \x27";
                // line 148
                yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::constant("Agent::ACTION_INVENTORY"), "js"), "html", null, true);
                yield "\x27,
                  id: ";
                // line 149
                yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["agent"]) || array_key_exists("agent", $context) ? $context["agent"] : (function () { throw new RuntimeError('Variable "agent" does not exist.', 149, $this->source); })()), "getID", [], "method", false, false, false, 149), "html", null, true);
                yield "
               },
               success: function(json) {
                  \$(\x27#inventory_status\x27).text(json.answer);
               },
               complete: function() {
                  icon.removeClass(\x27icon-rotate\x27);
               }
            });
         });
      });
      </script>
   ";
            } else {
                // line 162
                yield "   <div class=\"card-body row\">
      <div class=\"mb-3 col-12 col-sm-6\">
         ";
                // line 164
                yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Agent information is not available."), "html", null, true);
                yield "
      </div>
   </div>
   ";
            }
            // line 168
            yield "
   ";
            // line 170
            yield "   ";
            // line 171
            yield "   ";
            if ((($this->extensions['Glpi\Application\View\Extension\PhpExtension']->isUsingTrait((isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 171, $this->source); })()), "Glpi\\Features\\Inventoriable") && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 171, $this->source); })()), "getInventoryAgent", [], "method", false, false, false, 171) == null)) && (($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 171, $this->source); })()), "isField", ["last_inventory_update"], "method", false, false, false, 171)) && $tmp instanceof Markup ? (string) $tmp : $tmp))) {
                // line 172
                yield "      <div class=\"card-body row\">
         <div class=\"mb-3 col-12 col-sm-6\">
            <label class=\"form-label\" >";
                // line 174
                yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Last inventory"), "html", null, true);
                yield "</label>
            <span>";
                // line 175
                yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\DataHelpersExtension']->getFormattedDatetime(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 175, $this->source); })()), "fields", [], "any", false, false, false, 175), "last_inventory_update", [], "array", false, false, false, 175)), "html", null, true);
                yield "</span>
         </div>
      </div>
   ";
            }
            // line 179
            yield "
   ";
            // line 180
            if (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 180, $this->source); })()), "fields", [], "any", false, false, false, 180), "id", [], "array", false, false, false, 180) > 0) && (($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 180, $this->source); })()), "isField", ["is_dynamic"], "method", false, false, false, 180)) && $tmp instanceof Markup ? (string) $tmp : $tmp))) {
                // line 181
                yield "      ";
                yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\PluginExtension']->callPluginHook(Twig\Extension\CoreExtension::constant("Glpi\\Plugin\\Hooks::AUTOINVENTORY_INFORMATION"), (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 181, $this->source); })())), "html", null, true);
                yield "
   ";
            }
            // line 183
            yield "</div>
";
        }
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "components/form/inventory_info.html.twig";
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
        return array (  326 => 183,  320 => 181,  318 => 180,  315 => 179,  308 => 175,  304 => 174,  300 => 172,  297 => 171,  295 => 170,  292 => 168,  285 => 164,  281 => 162,  265 => 149,  261 => 148,  238 => 128,  234 => 127,  216 => 112,  211 => 110,  207 => 109,  199 => 104,  194 => 102,  190 => 101,  185 => 98,  180 => 95,  174 => 92,  170 => 91,  167 => 90,  165 => 89,  159 => 86,  155 => 85,  148 => 81,  144 => 80,  137 => 76,  133 => 75,  126 => 71,  122 => 70,  114 => 65,  110 => 64,  105 => 62,  101 => 60,  98 => 59,  96 => 58,  92 => 56,  86 => 53,  80 => 51,  73 => 47,  66 => 44,  63 => 43,  61 => 42,  56 => 40,  48 => 34,  46 => 33,  43 => 32,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "components/form/inventory_info.html.twig", "/Users/alvarozuculajunior/BCX/glpi/templates/components/form/inventory_info.html.twig");
    }
}
