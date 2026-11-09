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

/* components/form/single-action.html.twig */
class __TwigTemplate_54100aecc66fbd30f9ae120015842a8e extends Template
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
        if ( !array_key_exists("onlyicon", $context)) {
            // line 34
            yield "   ";
            $context["onlyicon"] = false;
        }
        // line 36
        yield "
";
        // line 37
        if (( !(($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 37, $this->source); })()), "isNewItem", [], "method", false, false, false, 37)) && $tmp instanceof Markup ? (string) $tmp : $tmp) && (($tmp = $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call((CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 37, $this->source); })()), "getType", [], "method", false, false, false, 37) . "::isMassiveActionAllowed"), [CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 37, $this->source); })()), "fields", [], "any", false, false, false, 37), "id", [], "array", false, false, false, 37)])) && $tmp instanceof Markup ? (string) $tmp : $tmp))) {
            // line 38
            yield "   ";
            $context["input"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 38, $this->source); })()), "getMassiveActionsForItem", [], "method", false, false, false, 38), "getInput", [], "method", false, false, false, 38);
            // line 39
            yield "   ";
            if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["input"]) || array_key_exists("input", $context) ? $context["input"] : (function () { throw new RuntimeError('Variable "input" does not exist.', 39, $this->source); })()), "actions", [], "array", false, false, false, 39)) > 0)) {
                // line 40
                yield "   ";
                $context["ms_auto"] = (((($tmp = (((array_key_exists("single_actions_ms_auto", $context) &&  !(null === $context["single_actions_ms_auto"]))) ? ($context["single_actions_ms_auto"]) : (false))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("ms-auto") : (""));
                // line 41
                yield "<div class=\"d-none d-sm-block btn-group ";
                yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["ms_auto"]) || array_key_exists("ms_auto", $context) ? $context["ms_auto"] : (function () { throw new RuntimeError('Variable "ms_auto" does not exist.', 41, $this->source); })()), "html", null, true);
                yield "\" aria-labelledby=\"single-action\"
     ";
                // line 42
                if ((($tmp = (isset($context["onlyicon"]) || array_key_exists("onlyicon", $context) ? $context["onlyicon"] : (function () { throw new RuntimeError('Variable "onlyicon" does not exist.', 42, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield "data-bs-toggle=\"tooltip\" data-bs-placement=\"top\"";
                }
                yield ">
   <button class=\"btn ";
                // line 43
                yield (string) (((($tmp = (isset($context["onlyicon"]) || array_key_exists("onlyicon", $context) ? $context["onlyicon"] : (function () { throw new RuntimeError('Variable "onlyicon" does not exist.', 43, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("btn-icon") : ("dropdown-toggle"));
                yield " btn-outline-secondary\" type=\"button\"
           id=\"single-action\" data-bs-toggle=\"dropdown\" aria-haspopup=\"true\"
           aria-expanded=\"false\">
      <i class=\"ti ti-dots-vertical\"></i>
      ";
                // line 47
                if ( !(($tmp = (isset($context["onlyicon"]) || array_key_exists("onlyicon", $context) ? $context["onlyicon"] : (function () { throw new RuntimeError('Variable "onlyicon" does not exist.', 47, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 48
                    yield "         <span>";
                    yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(_n("Action", "Actions", Session::getPluralNumber()), "html", null, true);
                    yield "</span>
      ";
                }
                // line 50
                yield "   </button>

   <div id=\"single-ma-action-menu\" class=\"dropdown-menu dropdown-menu-end dropdown-menu-arrow mt-2\">
      ";
                // line 53
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["input"]) || array_key_exists("input", $context) ? $context["input"] : (function () { throw new RuntimeError('Variable "input" does not exist.', 53, $this->source); })()), "actions", [], "array", false, false, false, 53));
                foreach ($context['_seq'] as $context["key"] => $context["action"]) {
                    // line 54
                    yield "         <a class=\"dropdown-item\" data-action=\"";
                    yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["key"], "html", null, true);
                    yield "\" role=\"button\" href=\"#\">";
                    yield (string) $context["action"];
                    yield "</a>
      ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['key'], $context['action'], $context['_parent']);
                $context = array_intersect_key($context, $_parent);
                $context += $_parent;
                // line 56
                yield "   </div>
</div>
<script>
\$(function () {
   var ma = ";
                // line 60
                yield (string) json_encode((isset($context["input"]) || array_key_exists("input", $context) ? $context["input"] : (function () { throw new RuntimeError('Variable "input" does not exist.', 60, $this->source); })()));
                yield ";

   \$(document).on(\x27click\x27, \x27#single-ma-action-menu .moreactions\x27, function () {
      \$(\x27.moreactions + .dropdown-menu\x27).toggle();
   });

   \$(document).on(\x27click\x27, function (event) {
      var target = \$(event.target);
      var parent = target.parent();

      if (!target.hasClass(\x27moreactions\x27)
         && !parent.hasClass(\x27moreactions\x27)) {
         \$(\x27.moreactions + .dropdown-menu\x27).hide();
      }
   });

   \$(document).on(\x27click\x27, \x27#single-ma-action-menu [data-action]\x27, function () {
      \$(\x27.moreactions + .dropdown-menu\x27).hide();

      var current_action = \$(this).data(\x27action\x27);

      glpi_ajax_dialog({
         url: `\${CFG_GLPI.root_doc}/ajax/dropdownMassiveAction.php`,
         title: ma.actions[current_action],
         params: Object.assign(
            { action: current_action },
            ma
         ),
         appendTo: \x27#massive_container_";
                // line 88
                yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["rand"]) || array_key_exists("rand", $context) ? $context["rand"] : (function () { throw new RuntimeError('Variable "rand" does not exist.', 88, $this->source); })()), "css"), "js"), "html", null, true);
                yield "\x27,
      });
   });
});
</script>
   ";
            }
        }
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "components/form/single-action.html.twig";
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
        return array (  150 => 88,  119 => 60,  113 => 56,  101 => 54,  97 => 53,  92 => 50,  86 => 48,  84 => 47,  77 => 43,  71 => 42,  66 => 41,  63 => 40,  60 => 39,  57 => 38,  55 => 37,  52 => 36,  48 => 34,  46 => 33,  43 => 32,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "components/form/single-action.html.twig", "/Users/alvarozuculajunior/BCX/glpi/templates/components/form/single-action.html.twig");
    }
}
