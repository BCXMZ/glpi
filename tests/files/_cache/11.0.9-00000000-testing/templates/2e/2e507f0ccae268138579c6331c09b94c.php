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

/* components/itilobject/answer.html.twig */
class __TwigTemplate_0f7a7fb2d23e6a8dd9b74fdfa08f0187 extends Template
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
<div id=\"new-itilobject-form\" class=\"d-flex\">
   ";
        // line 34
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["timeline_itemtypes"]) || array_key_exists("timeline_itemtypes", $context) ? $context["timeline_itemtypes"] : (function () { throw new RuntimeError('Variable "timeline_itemtypes" does not exist.', 34, $this->source); })()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["timeline_itemtype"]) {
            // line 35
            yield "      ";
            $context["is_private"] = (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["timeline_itemtype"], "item", [], "any", false, true, false, 35), "fields", [], "any", false, true, false, 35), "is_private", [], "array", true, true, false, 35) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["timeline_itemtype"], "item", [], "any", false, false, false, 35), "fields", [], "any", false, false, false, 35), "is_private", [], "array", false, false, false, 35)))) ? (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["timeline_itemtype"], "item", [], "any", false, false, false, 35), "fields", [], "any", false, false, false, 35), "is_private", [], "array", false, false, false, 35)) : (false));
            // line 36
            yield "      ";
            $context["is_private_class"] = (((($tmp = (isset($context["is_private"]) || array_key_exists("is_private", $context) ? $context["is_private"] : (function () { throw new RuntimeError('Variable "is_private" does not exist.', 36, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("private-item") : (""));
            // line 37
            yield "      <div class=\"timeline-item mb-1 ms-auto ";
            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["is_private_class"]) || array_key_exists("is_private_class", $context) ? $context["is_private_class"] : (function () { throw new RuntimeError('Variable "is_private_class" does not exist.', 37, $this->source); })()), "html", null, true);
            yield " ";
            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["timeline_itemtype"], "type", [], "any", false, false, false, 37), "html", null, true);
            yield " collapse\"
        id=\"new-";
            // line 38
            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["timeline_itemtype"], "class", [], "any", false, false, false, 38), "html", null, true);
            yield "-block\" aria-expanded=\"false\" data-bs-parent=\"#new-itilobject-form\"
        data-testid=\"new-";
            // line 39
            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["timeline_itemtype"], "class", [], "any", false, false, false, 39), "html", null, true);
            yield "-block\">
         <div class=\"row\">
            <div class=\"col-auto todo-list-state\"></div>
            <div class=\"col-auto d-flex flex-column user-part ms-0 order-sm-last\">
               ";
            // line 43
            yield (string) Twig\Extension\CoreExtension::include($this->env, $context, "components/user/picture.html.twig", ["users_id" => $this->extensions['Glpi\Application\View\Extension\SessionExtension']->session("glpiID")], false);
            yield "
            </div>
            <div class=\"col-12 col-sm d-flex flex-column content-part\">
               <div class=\"timeline-content t-right card mt-2\">
                  <div class=\"card-body px-1 px-xxl-3\">
                     <div class=\"clearfix\">
                        <button class=\"btn btn-sm btn-ghost-secondary float-end mb-1 close-itil-answer\"
                              data-bs-toggle=\"collapse\" data-bs-target=\"#new-";
            // line 50
            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["timeline_itemtype"], "class", [], "any", false, false, false, 50), "html", null, true);
            yield "-block\"
                              aria-label=\"";
            // line 51
            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Close"), "html", null, true);
            yield "\">
                           <i class=\"fs-2 ti ti-x\"></i>
                        </button>
                     </div>
                     <div>
                        ";
            // line 56
            if ((($tmp = ((CoreExtension::getAttribute($this->env, $this->source, $context["timeline_itemtype"], "lazy_load", [], "any", true, true, false, 56)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["timeline_itemtype"], "lazy_load", [], "any", false, false, false, 56), false)) : (false))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 57
                yield "                           ";
                // line 58
                yield "                           <div class=\"new-itil-answer-form\" data-subitem-type=\"";
                yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["timeline_itemtype"], "class", [], "any", false, false, false, 58), "html", null, true);
                yield "\" data-answer-loaded=\"false\"></div>
                        ";
            } elseif (CoreExtension::getAttribute($this->env, $this->source,             // line 59
$context["timeline_itemtype"], "template", [], "any", true, true, false, 59)) {
                // line 60
                yield "                           ";
                yield (string) Twig\Extension\CoreExtension::include($this->env, $context, CoreExtension::getAttribute($this->env, $this->source, $context["timeline_itemtype"], "template", [], "any", false, false, false, 60), ["item" =>                 // line 61
(isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 61, $this->source); })()), "subitem" => CoreExtension::getAttribute($this->env, $this->source,                 // line 62
$context["timeline_itemtype"], "item", [], "any", false, false, false, 62), "mention_options" =>                 // line 63
(isset($context["mention_options"]) || array_key_exists("mention_options", $context) ? $context["mention_options"] : (function () { throw new RuntimeError('Variable "mention_options" does not exist.', 63, $this->source); })())]);
                // line 64
                yield "
                        ";
            } else {
                // line 66
                yield "                           ";
                $context["sf_options"] = ["parent" => (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 66, $this->source); })())];
                // line 67
                yield "                           ";
                yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["timeline_itemtype"], "item", [], "any", false, false, false, 67), "showForm", [ -1, (isset($context["sf_options"]) || array_key_exists("sf_options", $context) ? $context["sf_options"] : (function () { throw new RuntimeError('Variable "sf_options" does not exist.', 67, $this->source); })())], "method", false, false, false, 67), "html", null, true);
                yield "
                        ";
            }
            // line 69
            yield "                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
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
        unset($context['_seq'], $context['_key'], $context['timeline_itemtype'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent);
        $context += $_parent;
        // line 76
        yield "</div>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "components/itilobject/answer.html.twig";
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
        return array (  161 => 76,  140 => 69,  134 => 67,  131 => 66,  127 => 64,  125 => 63,  124 => 62,  123 => 61,  121 => 60,  119 => 59,  114 => 58,  112 => 57,  110 => 56,  102 => 51,  98 => 50,  88 => 43,  81 => 39,  77 => 38,  70 => 37,  67 => 36,  64 => 35,  47 => 34,  43 => 32,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "components/itilobject/answer.html.twig", "/Users/alvarozuculajunior/BCX/glpi/templates/components/itilobject/answer.html.twig");
    }
}
