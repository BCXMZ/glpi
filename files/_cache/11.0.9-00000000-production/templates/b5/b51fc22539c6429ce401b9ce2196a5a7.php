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

/* central/widget_tab.html.twig */
class __TwigTemplate_9bfb5f80ab07dcf27f5f6a828ed65e65 extends Template
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
        yield "<table class=\"tab_cadre_central\">
   ";
        // line 35
        yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\PluginExtension']->callPluginHook(Twig\Extension\CoreExtension::constant("Glpi\\Plugin\\Hooks::DISPLAY_CENTRAL")), "html", null, true);
        yield "
</table>

<div id=\"home-dashboard";
        // line 38
        yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rand"] ?? null), "html", null, true);
        yield "\" class=\"container-fluid\">
   ";
        // line 39
        $context["grid_items"] = [];
        // line 40
        yield "   ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["cards"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["card"]) {
            // line 41
            yield "      ";
            $context["card_html"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                // line 42
                yield "         <div class=\"card\">
            <div class=\"card-body p-0\">
              <div class=\"lazy-widget\" data-itemtype=\"";
                // line 44
                yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["card"], "itemtype", [], "any", false, false, false, 44), "html", null, true);
                yield "\" data-widget=\"";
                yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["card"], "widget", [], "any", false, false, false, 44), "html", null, true);
                yield "\"
                 data-params=\"";
                // line 45
                yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(json_encode(((CoreExtension::getAttribute($this->env, $this->source, $context["card"], "params", [], "any", true, true, false, 45)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["card"], "params", [], "any", false, false, false, 45), [])) : ([]))), "html", null, true);
                yield "\">
              </div>
            </div>
         </div>
      ";
                yield from [];
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 50
            yield "
      ";
            // line 51
            $context["grid_items"] = Twig\Extension\CoreExtension::merge(($context["grid_items"] ?? null), [            // line 52
($context["card_html"] ?? null)]);
            // line 54
            yield "   ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['card'], $context['_parent']);
        $context = array_intersect_key($context, $_parent);
        $context += $_parent;
        // line 55
        yield "
   ";
        // line 56
        yield (string) Twig\Extension\CoreExtension::include($this->env, $context, "components/masonry_grid.html.twig", ["grid_items" =>         // line 57
($context["grid_items"] ?? null)], false);
        // line 58
        yield "

   <script>
   \$(function () {
      \$(\x27#home-dashboard";
        // line 62
        yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rand"] ?? null), "html", null, true);
        yield " .lazy-widget\x27).each(function() {
         const this_obj = \$(this);
         const params = {
            \x27itemtype\x27: this_obj.data(\x27itemtype\x27),
            \x27widget\x27: this_obj.data(\x27widget\x27),
            \x27params\x27: this_obj.data(\x27params\x27)
         };
         this_obj.html(\x27<span class=\"spinner-border ms-auto\" role=\"status\" aria-hidden=\"true\"></span>\x27)
            .load(`\${CFG_GLPI.root_doc}/ajax/central.php`, params, function(response, status, xhr) {
               const parent = this_obj.closest(\x27.grid-item\x27).parent();

               if (status === \x27error\x27 || !response) {
                  window[\x27msnry_\x27 + parent.prop(\x27id\x27)].remove(this_obj.closest(\x27.grid-item\x27));
               }

               window[\x27msnry_\x27 + parent.prop(\x27id\x27)].layout();
            });
      });
   });
   </script>
</div>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "central/widget_tab.html.twig";
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
        return array (  115 => 62,  109 => 58,  107 => 57,  106 => 56,  103 => 55,  96 => 54,  94 => 52,  93 => 51,  90 => 50,  81 => 45,  75 => 44,  71 => 42,  68 => 41,  63 => 40,  61 => 39,  57 => 38,  51 => 35,  48 => 34,  46 => 33,  43 => 32,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "central/widget_tab.html.twig", "/Users/alvarozuculajunior/BCX/glpi/templates/central/widget_tab.html.twig");
    }
}
