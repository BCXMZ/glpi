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

/* layout/parts/menu.html.twig */
class __TwigTemplate_9eb3a4de8521c127428c7cc9288874bc extends Template
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
        $context["is_vertical"] = ($this->extensions['Glpi\Application\View\Extension\SessionExtension']->getPageLayout() == "vertical");
        // line 34
        $context["is_horizontal"] =  !(($tmp = (isset($context["is_vertical"]) || array_key_exists("is_vertical", $context) ? $context["is_vertical"] : (function () { throw new RuntimeError('Variable "is_vertical" does not exist.', 34, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp);
        // line 35
        $context["is_menu_folded"] = ($this->extensions['Glpi\Application\View\Extension\SessionExtension']->userPref("fold_menu") == "1");
        // line 36
        $context["rand"] = Twig\Extension\CoreExtension::random($this->env->getCharset());
        // line 37
        yield "
<ul class=\"navbar-nav\" id=\"menu_";
        // line 38
        yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["rand"]) || array_key_exists("rand", $context) ? $context["rand"] : (function () { throw new RuntimeError('Variable "rand" does not exist.', 38, $this->source); })()), "html", null, true);
        yield "\">
";
        // line 39
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["menu"]) || array_key_exists("menu", $context) ? $context["menu"] : (function () { throw new RuntimeError('Variable "menu" does not exist.', 39, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["firstlevel"]) {
            // line 40
            yield "   ";
            $context["firstlevel_active"] = ((array_key_exists("sector", $context) && CoreExtension::getAttribute($this->env, $this->source, ($context["menu"] ?? null), (isset($context["sector"]) || array_key_exists("sector", $context) ? $context["sector"] : (function () { throw new RuntimeError('Variable "sector" does not exist.', 40, $this->source); })()), [], "array", true, true, false, 40)) && (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["menu"] ?? null), (isset($context["sector"]) || array_key_exists("sector", $context) ? $context["sector"] : (function () { throw new RuntimeError('Variable "sector" does not exist.', 40, $this->source); })()), [], "array", false, true, false, 40), "title", [], "array", true, true, false, 40)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["menu"]) || array_key_exists("menu", $context) ? $context["menu"] : (function () { throw new RuntimeError('Variable "menu" does not exist.', 40, $this->source); })()), (isset($context["sector"]) || array_key_exists("sector", $context) ? $context["sector"] : (function () { throw new RuntimeError('Variable "sector" does not exist.', 40, $this->source); })()), [], "array", false, false, false, 40), "title", [], "array", false, false, false, 40), "")) : ("")) == CoreExtension::getAttribute($this->env, $this->source, $context["firstlevel"], "title", [], "array", false, false, false, 40)));
            // line 41
            yield "   ";
            $context["firstlevel_shown"] = (((($tmp = (isset($context["firstlevel_active"]) || array_key_exists("firstlevel_active", $context) ? $context["firstlevel_active"] : (function () { throw new RuntimeError('Variable "firstlevel_active" does not exist.', 41, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp) && (($tmp = (isset($context["is_vertical"]) || array_key_exists("is_vertical", $context) ? $context["is_vertical"] : (function () { throw new RuntimeError('Variable "is_vertical" does not exist.', 41, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) && ((isset($context["is_menu_folded"]) || array_key_exists("is_menu_folded", $context) ? $context["is_menu_folded"] : (function () { throw new RuntimeError('Variable "is_menu_folded" does not exist.', 41, $this->source); })()) == false));
            // line 42
            yield "   ";
            $context["has_subitems"] = false;
            // line 43
            yield "   ";
            if (CoreExtension::getAttribute($this->env, $this->source, $context["firstlevel"], "content", [], "array", true, true, false, 43)) {
                // line 44
                yield "      ";
                // line 45
                yield "      ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["firstlevel"], "content", [], "array", false, false, false, 45));
                foreach ($context['_seq'] as $context["_key"] => $context["secondlevel"]) {
                    // line 46
                    yield "         ";
                    if (CoreExtension::getAttribute($this->env, $this->source, $context["secondlevel"], "page", [], "array", true, true, false, 46)) {
                        // line 47
                        yield "            ";
                        $context["has_subitems"] = true;
                        // line 48
                        yield "         ";
                    }
                    // line 49
                    yield "      ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['secondlevel'], $context['_parent']);
                $context = array_intersect_key($context, $_parent);
                $context += $_parent;
                // line 50
                yield "   ";
            }
            // line 51
            yield "   ";
            if ((($tmp = (isset($context["has_subitems"]) || array_key_exists("has_subitems", $context) ? $context["has_subitems"] : (function () { throw new RuntimeError('Variable "has_subitems" does not exist.', 51, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 52
                yield "   <li class=\"nav-item dropdown ";
                yield (string) (((($tmp = (isset($context["firstlevel_active"]) || array_key_exists("firstlevel_active", $context) ? $context["firstlevel_active"] : (function () { throw new RuntimeError('Variable "firstlevel_active" does not exist.', 52, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("active") : (""));
                yield "\" aria-label=\"";
                yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["firstlevel"], "title", [], "array", false, false, false, 52), "html", null, true);
                yield "\">
      <button type=\"button\"
         class=\"nav-link dropdown-toggle ";
                // line 54
                yield (string) (((($tmp = (isset($context["firstlevel_active"]) || array_key_exists("firstlevel_active", $context) ? $context["firstlevel_active"] : (function () { throw new RuntimeError('Variable "firstlevel_active" does not exist.', 54, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("active") : (""));
                yield " ";
                yield (string) (((($tmp = (isset($context["firstlevel_shown"]) || array_key_exists("firstlevel_shown", $context) ? $context["firstlevel_shown"] : (function () { throw new RuntimeError('Variable "firstlevel_shown" does not exist.', 54, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("show") : (""));
                yield "\"
         data-bs-toggle=\"dropdown\"
         data-testid=\"sidebar-menu-toggle\"
         aria-expanded=\"";
                // line 57
                yield (string) (((($tmp = (isset($context["firstlevel_shown"]) || array_key_exists("firstlevel_shown", $context) ? $context["firstlevel_shown"] : (function () { throw new RuntimeError('Variable "firstlevel_shown" does not exist.', 57, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("true") : ("false"));
                yield "\">
         <i class=\"";
                // line 58
                yield (string) (((CoreExtension::getAttribute($this->env, $this->source, $context["firstlevel"], "icon", [], "array", true, true, false, 58) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["firstlevel"], "icon", [], "array", false, false, false, 58)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["firstlevel"], "icon", [], "array", false, false, false, 58), "html", null, true)) : (""));
                yield "\"></i>
         <span class=\"menu-label\">";
                // line 59
                yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["firstlevel"], "title", [], "array", false, false, false, 59), "html", null, true);
                yield "</span>
      </button>
      <div class=\"dropdown-menu ";
                // line 61
                yield (string) ((((($tmp = (isset($context["firstlevel_active"]) || array_key_exists("firstlevel_active", $context) ? $context["firstlevel_active"] : (function () { throw new RuntimeError('Variable "firstlevel_active" does not exist.', 61, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp) && ((isset($context["is_vertical"]) || array_key_exists("is_vertical", $context) ? $context["is_vertical"] : (function () { throw new RuntimeError('Variable "is_vertical" does not exist.', 61, $this->source); })()) != false))) ? ("") : ("animate__animated"));
                yield " ";
                yield (string) (((($tmp = (isset($context["is_vertical"]) || array_key_exists("is_vertical", $context) ? $context["is_vertical"] : (function () { throw new RuntimeError('Variable "is_vertical" does not exist.', 61, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("animate__fadeInLeft") : ("animate__zoomIn"));
                yield " ";
                yield (string) (((($tmp = (isset($context["firstlevel_shown"]) || array_key_exists("firstlevel_shown", $context) ? $context["firstlevel_shown"] : (function () { throw new RuntimeError('Variable "firstlevel_shown" does not exist.', 61, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("show") : (""));
                yield "\">
         <h6 class=\"dropdown-header\">";
                // line 62
                yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["firstlevel"], "title", [], "array", false, false, false, 62), "html", null, true);
                yield "</h6>
         <div class=\"dropdown-menu-columns\">
            <div class=\"dropdown-menu-column\">
            ";
                // line 65
                $context["has_dashboard"] = CoreExtension::getAttribute($this->env, $this->source, $context["firstlevel"], "default_dashboard", [], "array", true, true, false, 65);
                // line 66
                yield "            ";
                if ((($tmp = (isset($context["has_dashboard"]) || array_key_exists("has_dashboard", $context) ? $context["has_dashboard"] : (function () { throw new RuntimeError('Variable "has_dashboard" does not exist.', 66, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 67
                    yield "               <a class=\"dropdown-item\"
                  href=\"";
                    // line 68
                    yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\RoutingExtension']->path(CoreExtension::getAttribute($this->env, $this->source, $context["firstlevel"], "default_dashboard", [], "array", false, false, false, 68)), "html", null, true);
                    yield "\">
                  <i class=\"";
                    // line 69
                    yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Glpi\\Dashboard\\Dashboard::getIcon"), "html", null, true);
                    yield "\"></i>
                  ";
                    // line 70
                    yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Dashboard"), "html", null, true);
                    yield "
               </a>
            ";
                }
                // line 73
                yield "            ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["firstlevel"], "content", [], "array", false, false, false, 73));
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
                foreach ($context['_seq'] as $context["_key"] => $context["sublevel"]) {
                    // line 74
                    yield "               ";
                    if (CoreExtension::getAttribute($this->env, $this->source, $context["sublevel"], "page", [], "array", true, true, false, 74)) {
                        // line 75
                        yield "               <a class=\"dropdown-item ";
                        yield (string) ((((isset($context["menu_active"]) || array_key_exists("menu_active", $context) ? $context["menu_active"] : (function () { throw new RuntimeError('Variable "menu_active" does not exist.', 75, $this->source); })()) == CoreExtension::getAttribute($this->env, $this->source, $context["sublevel"], "title", [], "array", false, false, false, 75))) ? ("active") : (""));
                        yield "\"
                  href=\"";
                        // line 76
                        yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\RoutingExtension']->path(CoreExtension::getAttribute($this->env, $this->source, $context["sublevel"], "page", [], "array", false, false, false, 76)), "html", null, true);
                        yield "\"
                  aria-label=\"";
                        // line 77
                        yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["sublevel"], "title", [], "array", false, false, false, 77), "html", null, true);
                        yield "\"
                  accesskey=\"";
                        // line 78
                        yield (string) (((CoreExtension::getAttribute($this->env, $this->source, $context["sublevel"], "shortcut", [], "array", true, true, false, 78) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["sublevel"], "shortcut", [], "array", false, false, false, 78)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["sublevel"], "shortcut", [], "array", false, false, false, 78), "html", null, true)) : (""));
                        yield "\">
                  <i class=\"";
                        // line 79
                        yield (string) (((CoreExtension::getAttribute($this->env, $this->source, $context["sublevel"], "icon", [], "array", true, true, false, 79) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["sublevel"], "icon", [], "array", false, false, false, 79)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["sublevel"], "icon", [], "array", false, false, false, 79), "html", null, true)) : (""));
                        yield "\"></i>
                  <span class=\x27text-wrap\x27>
                     ";
                        // line 81
                        yield (string) $this->extensions['Glpi\Application\View\Extension\DataHelpersExtension']->underlineShortcutLetter(CoreExtension::getAttribute($this->env, $this->source, $context["sublevel"], "title", [], "array", false, false, false, 81), (((CoreExtension::getAttribute($this->env, $this->source, $context["sublevel"], "shortcut", [], "array", true, true, false, 81) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["sublevel"], "shortcut", [], "array", false, false, false, 81)))) ? (CoreExtension::getAttribute($this->env, $this->source, $context["sublevel"], "shortcut", [], "array", false, false, false, 81)) : ("")));
                        yield "
                  </span>
               </a>
               ";
                    }
                    // line 85
                    yield "
               ";
                    // line 86
                    $context["count_per_column"] = 6;
                    // line 87
                    yield "               ";
                    if ((((CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 87) % (isset($context["count_per_column"]) || array_key_exists("count_per_column", $context) ? $context["count_per_column"] : (function () { throw new RuntimeError('Variable "count_per_column" does not exist.', 87, $this->source); })())) == (((($tmp = (isset($context["has_dashboard"]) || array_key_exists("has_dashboard", $context) ? $context["has_dashboard"] : (function () { throw new RuntimeError('Variable "has_dashboard" does not exist.', 87, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (((isset($context["count_per_column"]) || array_key_exists("count_per_column", $context) ? $context["count_per_column"] : (function () { throw new RuntimeError('Variable "count_per_column" does not exist.', 87, $this->source); })()) - 1)) : (0))) &&  !(($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 87)) && $tmp instanceof Markup ? (string) $tmp : $tmp))) {
                        // line 88
                        yield "                  </div>
                  <div class=\"dropdown-menu-column\">
               ";
                    }
                    // line 91
                    yield "            ";
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
                unset($context['_seq'], $context['_key'], $context['sublevel'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent);
                $context += $_parent;
                // line 92
                yield "            </div>
         </div>
      </div>
   </li>
   ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 96
$context["firstlevel"], "default", [], "array", true, true, false, 96) && ((((CoreExtension::getAttribute($this->env, $this->source, $context["firstlevel"], "display", [], "array", true, true, false, 96) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["firstlevel"], "display", [], "array", false, false, false, 96)))) ? (CoreExtension::getAttribute($this->env, $this->source, $context["firstlevel"], "display", [], "array", false, false, false, 96)) : (true)) != false))) {
                // line 97
                yield "      <li class=\"nav-item dropdown ";
                yield (string) (((($tmp = (isset($context["firstlevel_active"]) || array_key_exists("firstlevel_active", $context) ? $context["firstlevel_active"] : (function () { throw new RuntimeError('Variable "firstlevel_active" does not exist.', 97, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("active") : (""));
                yield "\">
         <a class=\"nav-link\" href=\"";
                // line 98
                yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\RoutingExtension']->path(CoreExtension::getAttribute($this->env, $this->source, $context["firstlevel"], "default", [], "array", false, false, false, 98)), "html", null, true);
                yield "\">
            <i class=\"";
                // line 99
                yield (string) (((CoreExtension::getAttribute($this->env, $this->source, $context["firstlevel"], "icon", [], "array", true, true, false, 99) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["firstlevel"], "icon", [], "array", false, false, false, 99)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["firstlevel"], "icon", [], "array", false, false, false, 99), "html", null, true)) : (""));
                yield "\"></i>
            <span class=\"menu-label\">";
                // line 100
                yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["firstlevel"], "title", [], "array", false, false, false, 100), "html", null, true);
                yield "</span>
         </a>
      <li>
   ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['firstlevel'], $context['_parent']);
        $context = array_intersect_key($context, $_parent);
        $context += $_parent;
        // line 105
        yield "</ul>

";
        // line 107
        if ((($tmp = (isset($context["is_vertical"]) || array_key_exists("is_vertical", $context) ? $context["is_vertical"] : (function () { throw new RuntimeError('Variable "is_vertical" does not exist.', 107, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 108
            yield "<script type=\"text/javascript\">
\$(function() {
   // below, some modifications of dropdowns menu behavior
   document.querySelectorAll(\x27#menu_";
            // line 111
            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["rand"]) || array_key_exists("rand", $context) ? $context["rand"] : (function () { throw new RuntimeError('Variable "rand" does not exist.', 111, $this->source); })()), "html", null, true);
            yield " > .dropdown\x27).forEach(function(menuDropdown) {
      // prevent menu closes
      menuDropdown.addEventListener(\x27hide.bs.dropdown\x27, function (event) {
         var orig_event = event.clickEvent;
         if (typeof orig_event != \"undefined\"
             && typeof orig_event.target != \"undefined\") {
            // prevent body clicking to hide menu
            if (!document.getElementById(\x27menu_";
            // line 118
            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["rand"]) || array_key_exists("rand", $context) ? $context["rand"] : (function () { throw new RuntimeError('Variable "rand" does not exist.', 118, $this->source); })()), "html", null, true);
            yield "\x27).contains(orig_event.target)) {
               event.preventDefault();
               return;
            }

            // prevent menu links to close menu (waiting the page redirection)
            if (orig_event.target.className.indexOf(\x27dropdown-item\x27) !== false) {
               for (var item of document.querySelectorAll(\x27#menu_";
            // line 125
            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["rand"]) || array_key_exists("rand", $context) ? $context["rand"] : (function () { throw new RuntimeError('Variable "rand" does not exist.', 125, $this->source); })()), "html", null, true);
            yield " .dropdown-item\x27)) {
                  item.classList.remove(\x27active\x27);
               }
               orig_event.target.classList.add(\x27active\x27);
               event.preventDefault();
            }
         }
      });

      // opening a sub menu close others
      menuDropdown.addEventListener(\x27show.bs.dropdown\x27, function (event) {
          // The CSS-only \"flyout on hover\" replacement for Bootstrap\x27s dropdown only
          // exists at the `lg` breakpoint and up (see _global-menu.scss, min-width:992px).
          // Below that, the sidebar is an off-canvas mobile menu: dropdowns must stay
          // Bootstrap-driven or they can never be opened (glpi-project/glpi#23124).
          if (\$(\x27body\x27).hasClass(\x27navbar-collapsed\x27) && window.matchMedia(\x27(min-width: 992px)\x27).matches) {
              // Dropdown submenus will be shown with CSS, and shouldn\x27t be handled by Bootstrap
              event.preventDefault();
              event.stopPropagation();
          }
         \$(\x27#menu_";
            // line 145
            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["rand"]) || array_key_exists("rand", $context) ? $context["rand"] : (function () { throw new RuntimeError('Variable "rand" does not exist.', 145, $this->source); })()), "html", null, true);
            yield " .nav-link\x27).removeClass(\x27show active\x27);
         \$(\x27#menu_";
            // line 146
            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["rand"]) || array_key_exists("rand", $context) ? $context["rand"] : (function () { throw new RuntimeError('Variable "rand" does not exist.', 146, $this->source); })()), "html", null, true);
            yield " .nav-item\x27).removeClass(\x27active\x27);
         \$(\x27#menu_";
            // line 147
            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["rand"]) || array_key_exists("rand", $context) ? $context["rand"] : (function () { throw new RuntimeError('Variable "rand" does not exist.', 147, $this->source); })()), "html", null, true);
            yield " .dropdown-menu\x27).removeClass(\x27show\x27);
      })
   });
});
</script>
";
        }
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "layout/parts/menu.html.twig";
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
        return array (  344 => 147,  340 => 146,  336 => 145,  313 => 125,  303 => 118,  293 => 111,  288 => 108,  286 => 107,  282 => 105,  270 => 100,  266 => 99,  262 => 98,  257 => 97,  255 => 96,  249 => 92,  234 => 91,  229 => 88,  226 => 87,  224 => 86,  221 => 85,  214 => 81,  209 => 79,  205 => 78,  201 => 77,  197 => 76,  192 => 75,  189 => 74,  171 => 73,  165 => 70,  161 => 69,  157 => 68,  154 => 67,  151 => 66,  149 => 65,  143 => 62,  135 => 61,  130 => 59,  126 => 58,  122 => 57,  114 => 54,  106 => 52,  103 => 51,  100 => 50,  93 => 49,  90 => 48,  87 => 47,  84 => 46,  79 => 45,  77 => 44,  74 => 43,  71 => 42,  68 => 41,  65 => 40,  61 => 39,  57 => 38,  54 => 37,  52 => 36,  50 => 35,  48 => 34,  46 => 33,  43 => 32,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "layout/parts/menu.html.twig", "/Users/alvarozuculajunior/BCX/glpi/templates/layout/parts/menu.html.twig");
    }
}
