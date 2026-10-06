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

/* components/masonry_grid.html.twig */
class __TwigTemplate_810b2ae2ad4a871541b8d810dcc1cd5e extends Template
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
        if ( !array_key_exists("grid_item_class", $context)) {
            // line 34
            yield "   ";
            $context["grid_item_class"] = "col-xl-6";
        }
        // line 36
        yield "
";
        // line 37
        $context["rand"] = Twig\Extension\CoreExtension::random($this->env->getCharset());
        // line 38
        yield "<div id=\"grid_";
        yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rand"] ?? null), "html", null, true);
        yield "\" class=\"masonry_grid row row-cards mb-5\">
   ";
        // line 39
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["grid_items"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 40
            yield "      ";
            if ( !Twig\Extension\CoreExtension::testEmpty($context["item"])) {
                // line 41
                yield "         <div class=\"grid-item ";
                yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["grid_item_class"] ?? null), "html", null, true);
                yield "\">
            ";
                // line 42
                yield (string) $context["item"];
                yield "
         </div>
      ";
            }
            // line 45
            yield "   ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['item'], $context['_parent']);
        $context = array_intersect_key($context, $_parent);
        $context += $_parent;
        // line 46
        yield "</div>

<script type=\"text/javascript\">
\$(function() {
   window.msnry_grid_";
        // line 50
        yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rand"] ?? null), "html", null, true);
        yield " = new Masonry(\x27#grid_";
        yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rand"] ?? null), "html", null, true);
        yield "\x27, {
      \"percentPosition\": true,
      \"horizontalOrder\": true,
   });

   \$(\x27#grid_";
        // line 55
        yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rand"] ?? null), "html", null, true);
        yield "\x27).on(\"layout:refresh\", function() {
       window.msnry_grid_";
        // line 56
        yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rand"] ?? null), "html", null, true);
        yield ".layout();
   });

   \$(document).on(\x27masonry_grid:layout\x27, function() {
       window.msnry_grid_";
        // line 60
        yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rand"] ?? null), "html", null, true);
        yield ".layout();
   });

   // Use MutationObserver with debouncing to detect content changes
   const observer = new MutationObserver(window._.debounce(function(mutations) {
       requestAnimationFrame(function() {
           window.msnry_grid_";
        // line 66
        yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rand"] ?? null), "html", null, true);
        yield ".layout();
       });
   }, 150));

   observer.observe(document.getElementById(\x27grid_";
        // line 70
        yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rand"] ?? null), "html", null, true);
        yield "\x27), {
       childList: true,
       subtree: true
   });

   // Also handle window resize with debouncing
   \$(window).on(\x27resize\x27, window._.debounce(function() {
       requestAnimationFrame(function() {
           window.msnry_grid_";
        // line 78
        yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rand"] ?? null), "html", null, true);
        yield ".layout();
       });
   }, 150));
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
        return "components/masonry_grid.html.twig";
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
        return array (  141 => 78,  130 => 70,  123 => 66,  114 => 60,  107 => 56,  103 => 55,  93 => 50,  87 => 46,  80 => 45,  74 => 42,  69 => 41,  66 => 40,  62 => 39,  57 => 38,  55 => 37,  52 => 36,  48 => 34,  46 => 33,  43 => 32,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "components/masonry_grid.html.twig", "/Users/alvarozuculajunior/BCX/glpi/templates/components/masonry_grid.html.twig");
    }
}
