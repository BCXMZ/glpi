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

/* components/form/modals_macros.html.twig */
class __TwigTemplate_dcdcaac92efc57489400f9e8559e2f08 extends Template
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
        // line 50
        yield "
";
        yield from [];
    }

    // line 33
    public function macro_confirm($modal_title = "", $modal_body = "", $options = [], ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "modal_title" => $modal_title,
            "modal_body" => $modal_body,
            "options" => $options,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 34
            yield "   ";
            $context["options"] = Twig\Extension\CoreExtension::merge(["buttons" => ["cancel" => ["label" => ((CoreExtension::getAttribute($this->env, $this->source,             // line 37
($context["options"] ?? null), "cancel_label", [], "array", true, true, false, 37)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 37, $this->source); })()), "cancel_label", [], "array", false, false, false, 37), _x("button", "Cancel"))) : (_x("button", "Cancel"))), "event" => ((CoreExtension::getAttribute($this->env, $this->source,             // line 38
($context["options"] ?? null), "cancel_event", [], "array", true, true, false, 38)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 38, $this->source); })()), "cancel_event", [], "array", false, false, false, 38), "")) : (""))], "confirm" => ["label" => ((CoreExtension::getAttribute($this->env, $this->source,             // line 41
($context["options"] ?? null), "confirm_label", [], "array", true, true, false, 41)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 41, $this->source); })()), "confirm_label", [], "array", false, false, false, 41), _x("button", "Ok"))) : (_x("button", "Ok"))), "event" => ((CoreExtension::getAttribute($this->env, $this->source,             // line 42
($context["options"] ?? null), "confirm_event", [], "array", true, true, false, 42)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 42, $this->source); })()), "confirm_event", [], "array", false, false, false, 42), "")) : ("")), "class" => "ms-auto"]]],             // line 46
(isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 46, $this->source); })()));
            // line 47
            yield "
   ";
            // line 48
            yield (string) $this->getTemplateForMacro("macro_modal", $context, 48, $this->getSourceContext())->macro_modal(...[(isset($context["modal_title"]) || array_key_exists("modal_title", $context) ? $context["modal_title"] : (function () { throw new RuntimeError('Variable "modal_title" does not exist.', 48, $this->source); })()), (isset($context["modal_body"]) || array_key_exists("modal_body", $context) ? $context["modal_body"] : (function () { throw new RuntimeError('Variable "modal_body" does not exist.', 48, $this->source); })()), (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 48, $this->source); })())]);
            yield "
";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 51
    public function macro_modal($modal_title = null, $modal_body = null, $options = [], ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "modal_title" => $modal_title,
            "modal_body" => $modal_body,
            "options" => $options,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 52
            yield "   ";
            $context["rand"] = Twig\Extension\CoreExtension::random($this->env->getCharset());
            // line 53
            yield "   ";
            $context["options"] = Twig\Extension\CoreExtension::merge(["id" => ("modal" .             // line 54
(isset($context["rand"]) || array_key_exists("rand", $context) ? $context["rand"] : (function () { throw new RuntimeError('Variable "rand" does not exist.', 54, $this->source); })())), "rand" =>             // line 55
(isset($context["rand"]) || array_key_exists("rand", $context) ? $context["rand"] : (function () { throw new RuntimeError('Variable "rand" does not exist.', 55, $this->source); })()), "buttons" => [], "modal_classes" => ""],             // line 58
(isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 58, $this->source); })()));
            // line 59
            yield "
   <div class=\"modal fade ";
            // line 60
            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 60, $this->source); })()), "modal_classes", [], "any", false, false, false, 60), "html", null, true);
            yield "\" id=\"";
            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 60, $this->source); })()), "id", [], "any", false, false, false, 60), "html", null, true);
            yield "\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
      <div class=\"modal-dialog\" role=\"document\">
         <div class=\"modal-content\">
            <div class=\"modal-header\">
               <h5 class=\"modal-title\">";
            // line 64
            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["modal_title"]) || array_key_exists("modal_title", $context) ? $context["modal_title"] : (function () { throw new RuntimeError('Variable "modal_title" does not exist.', 64, $this->source); })()), "html", null, true);
            yield "</h5>
               <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"";
            // line 65
            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(_x("button", "Close"), "html", null, true);
            yield "\"></button>
            </div>
            <div class=\"modal-body overflow-auto\">
               ";
            // line 68
            yield (string) (isset($context["modal_body"]) || array_key_exists("modal_body", $context) ? $context["modal_body"] : (function () { throw new RuntimeError('Variable "modal_body" does not exist.', 68, $this->source); })());
            yield "
            </div>
            <div class=\"modal-footer\">
               ";
            // line 71
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 71, $this->source); })()), "buttons", [], "array", false, false, false, 71));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["button"]) {
                // line 72
                yield "                  <button type=\"button\" class=\"btn ";
                yield (string) (((($tmp = (((CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "primary", [], "array", true, true, false, 72) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 72, $this->source); })()), "primary", [], "array", false, false, false, 72)))) ? (CoreExtension::getAttribute($this->env, $this->source, (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 72, $this->source); })()), "primary", [], "array", false, false, false, 72)) : (true))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("btn-primary") : ("btn-outline-secondary"));
                yield " ";
                yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["button"], "class", [], "array", true, true, false, 72)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["button"], "class", [], "array", false, false, false, 72), "")) : ("")), "html", null, true);
                yield "\"
                          id=\"";
                // line 73
                yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["button"], "id", [], "array", true, true, false, 73)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["button"], "id", [], "array", false, false, false, 73), ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 73, $this->source); })()), "id", [], "any", false, false, false, 73) . "_btn_") . CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 73)))) : (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 73, $this->source); })()), "id", [], "any", false, false, false, 73) . "_btn_") . CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 73)))), "html", null, true);
                yield "\" data-bs-dismiss=\"modal\">
                     ";
                // line 74
                yield (string) ((CoreExtension::getAttribute($this->env, $this->source, $context["button"], "label", [], "array", true, true, false, 74)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["button"], "label", [], "array", false, false, false, 74), "")) : (""));
                yield "
                  </button>
               ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['button'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent);
            $context += $_parent;
            // line 77
            yield "            </div>
         </div>
      </div>
   </div>
   <script>
      \$(function () {
         ";
            // line 83
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 83, $this->source); })()), "buttons", [], "array", false, false, false, 83));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["button"]) {
                // line 84
                yield "         \$(\x27#";
                yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 84, $this->source); })()), "id", [], "any", false, false, false, 84), "html", null, true);
                yield "\x27).on(\x27click\x27, \x27#";
                yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["button"], "id", [], "array", true, true, false, 84)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["button"], "id", [], "array", false, false, false, 84), ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 84, $this->source); })()), "id", [], "any", false, false, false, 84) . "_btn_") . CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 84)))) : (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 84, $this->source); })()), "id", [], "any", false, false, false, 84) . "_btn_") . CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 84)))), "html", null, true);
                yield "\x27, function (event) {
            ";
                // line 85
                yield (string) ((CoreExtension::getAttribute($this->env, $this->source, $context["button"], "event", [], "array", true, true, false, 85)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["button"], "event", [], "array", false, false, false, 85), "return true;")) : ("return true;"));
                yield "
         });
         ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['button'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent);
            $context += $_parent;
            // line 88
            yield "      });
   </script>
";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "components/form/modals_macros.html.twig";
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
        return array (  232 => 88,  214 => 85,  207 => 84,  190 => 83,  182 => 77,  164 => 74,  160 => 73,  153 => 72,  136 => 71,  130 => 68,  124 => 65,  120 => 64,  111 => 60,  108 => 59,  106 => 58,  105 => 55,  104 => 54,  102 => 53,  99 => 52,  85 => 51,  77 => 48,  74 => 47,  72 => 46,  71 => 42,  70 => 41,  69 => 38,  68 => 37,  66 => 34,  52 => 33,  46 => 50,  43 => 32,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "components/form/modals_macros.html.twig", "/Users/alvarozuculajunior/BCX/glpi/templates/components/form/modals_macros.html.twig");
    }
}
