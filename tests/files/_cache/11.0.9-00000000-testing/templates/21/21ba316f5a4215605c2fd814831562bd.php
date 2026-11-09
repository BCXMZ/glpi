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

/* layout/parts/context_links.html.twig */
class __TwigTemplate_656e7469ad24d1b8c05d3dd45358ebbf extends Template
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
        $context["links"] = (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["menu"] ?? null), (isset($context["sector"]) || array_key_exists("sector", $context) ? $context["sector"] : (function () { throw new RuntimeError('Variable "sector" does not exist.', 33, $this->source); })()), [], "array", false, true, false, 33), "content", [], "array", false, true, false, 33), (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 33, $this->source); })()), [], "array", false, true, false, 33), "options", [], "array", false, true, false, 33), (isset($context["option"]) || array_key_exists("option", $context) ? $context["option"] : (function () { throw new RuntimeError('Variable "option" does not exist.', 33, $this->source); })()), [], "array", false, true, false, 33), "links", [], "array", true, true, false, 33) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["menu"]) || array_key_exists("menu", $context) ? $context["menu"] : (function () { throw new RuntimeError('Variable "menu" does not exist.', 33, $this->source); })()), (isset($context["sector"]) || array_key_exists("sector", $context) ? $context["sector"] : (function () { throw new RuntimeError('Variable "sector" does not exist.', 33, $this->source); })()), [], "array", false, false, false, 33), "content", [], "array", false, false, false, 33), (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 33, $this->source); })()), [], "array", false, false, false, 33), "options", [], "array", false, false, false, 33), (isset($context["option"]) || array_key_exists("option", $context) ? $context["option"] : (function () { throw new RuntimeError('Variable "option" does not exist.', 33, $this->source); })()), [], "array", false, false, false, 33), "links", [], "array", false, false, false, 33)))) ? (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["menu"]) || array_key_exists("menu", $context) ? $context["menu"] : (function () { throw new RuntimeError('Variable "menu" does not exist.', 33, $this->source); })()), (isset($context["sector"]) || array_key_exists("sector", $context) ? $context["sector"] : (function () { throw new RuntimeError('Variable "sector" does not exist.', 33, $this->source); })()), [], "array", false, false, false, 33), "content", [], "array", false, false, false, 33), (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 33, $this->source); })()), [], "array", false, false, false, 33), "options", [], "array", false, false, false, 33), (isset($context["option"]) || array_key_exists("option", $context) ? $context["option"] : (function () { throw new RuntimeError('Variable "option" does not exist.', 33, $this->source); })()), [], "array", false, false, false, 33), "links", [], "array", false, false, false, 33)) : ((((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["menu"] ?? null), (isset($context["sector"]) || array_key_exists("sector", $context) ? $context["sector"] : (function () { throw new RuntimeError('Variable "sector" does not exist.', 33, $this->source); })()), [], "array", false, true, false, 33), "content", [], "array", false, true, false, 33), (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 33, $this->source); })()), [], "array", false, true, false, 33), "links", [], "array", true, true, false, 33) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["menu"]) || array_key_exists("menu", $context) ? $context["menu"] : (function () { throw new RuntimeError('Variable "menu" does not exist.', 33, $this->source); })()), (isset($context["sector"]) || array_key_exists("sector", $context) ? $context["sector"] : (function () { throw new RuntimeError('Variable "sector" does not exist.', 33, $this->source); })()), [], "array", false, false, false, 33), "content", [], "array", false, false, false, 33), (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 33, $this->source); })()), [], "array", false, false, false, 33), "links", [], "array", false, false, false, 33)))) ? (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["menu"]) || array_key_exists("menu", $context) ? $context["menu"] : (function () { throw new RuntimeError('Variable "menu" does not exist.', 33, $this->source); })()), (isset($context["sector"]) || array_key_exists("sector", $context) ? $context["sector"] : (function () { throw new RuntimeError('Variable "sector" does not exist.', 33, $this->source); })()), [], "array", false, false, false, 33), "content", [], "array", false, false, false, 33), (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 33, $this->source); })()), [], "array", false, false, false, 33), "links", [], "array", false, false, false, 33)) : (""))));
        // line 34
        $context["lists_itemtype"] = (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["menu"] ?? null), (isset($context["sector"]) || array_key_exists("sector", $context) ? $context["sector"] : (function () { throw new RuntimeError('Variable "sector" does not exist.', 34, $this->source); })()), [], "array", false, true, false, 34), "content", [], "array", false, true, false, 34), (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 34, $this->source); })()), [], "array", false, true, false, 34), "options", [], "array", false, true, false, 34), (isset($context["option"]) || array_key_exists("option", $context) ? $context["option"] : (function () { throw new RuntimeError('Variable "option" does not exist.', 34, $this->source); })()), [], "array", false, true, false, 34), "lists_itemtype", [], "array", true, true, false, 34) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["menu"]) || array_key_exists("menu", $context) ? $context["menu"] : (function () { throw new RuntimeError('Variable "menu" does not exist.', 34, $this->source); })()), (isset($context["sector"]) || array_key_exists("sector", $context) ? $context["sector"] : (function () { throw new RuntimeError('Variable "sector" does not exist.', 34, $this->source); })()), [], "array", false, false, false, 34), "content", [], "array", false, false, false, 34), (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 34, $this->source); })()), [], "array", false, false, false, 34), "options", [], "array", false, false, false, 34), (isset($context["option"]) || array_key_exists("option", $context) ? $context["option"] : (function () { throw new RuntimeError('Variable "option" does not exist.', 34, $this->source); })()), [], "array", false, false, false, 34), "lists_itemtype", [], "array", false, false, false, 34)))) ? (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["menu"]) || array_key_exists("menu", $context) ? $context["menu"] : (function () { throw new RuntimeError('Variable "menu" does not exist.', 34, $this->source); })()), (isset($context["sector"]) || array_key_exists("sector", $context) ? $context["sector"] : (function () { throw new RuntimeError('Variable "sector" does not exist.', 34, $this->source); })()), [], "array", false, false, false, 34), "content", [], "array", false, false, false, 34), (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 34, $this->source); })()), [], "array", false, false, false, 34), "options", [], "array", false, false, false, 34), (isset($context["option"]) || array_key_exists("option", $context) ? $context["option"] : (function () { throw new RuntimeError('Variable "option" does not exist.', 34, $this->source); })()), [], "array", false, false, false, 34), "lists_itemtype", [], "array", false, false, false, 34)) : ((((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["menu"] ?? null), (isset($context["sector"]) || array_key_exists("sector", $context) ? $context["sector"] : (function () { throw new RuntimeError('Variable "sector" does not exist.', 34, $this->source); })()), [], "array", false, true, false, 34), "content", [], "array", false, true, false, 34), (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 34, $this->source); })()), [], "array", false, true, false, 34), "lists_itemtype", [], "array", true, true, false, 34) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["menu"]) || array_key_exists("menu", $context) ? $context["menu"] : (function () { throw new RuntimeError('Variable "menu" does not exist.', 34, $this->source); })()), (isset($context["sector"]) || array_key_exists("sector", $context) ? $context["sector"] : (function () { throw new RuntimeError('Variable "sector" does not exist.', 34, $this->source); })()), [], "array", false, false, false, 34), "content", [], "array", false, false, false, 34), (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 34, $this->source); })()), [], "array", false, false, false, 34), "lists_itemtype", [], "array", false, false, false, 34)))) ? (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["menu"]) || array_key_exists("menu", $context) ? $context["menu"] : (function () { throw new RuntimeError('Variable "menu" does not exist.', 34, $this->source); })()), (isset($context["sector"]) || array_key_exists("sector", $context) ? $context["sector"] : (function () { throw new RuntimeError('Variable "sector" does not exist.', 34, $this->source); })()), [], "array", false, false, false, 34), "content", [], "array", false, false, false, 34), (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 34, $this->source); })()), [], "array", false, false, false, 34), "lists_itemtype", [], "array", false, false, false, 34)) : (""))));
        // line 35
        if (Twig\Extension\CoreExtension::testEmpty((isset($context["lists_itemtype"]) || array_key_exists("lists_itemtype", $context) ? $context["lists_itemtype"] : (function () { throw new RuntimeError('Variable "lists_itemtype" does not exist.', 35, $this->source); })()))) {
            // line 36
            yield "    ";
            $context["lists_itemtype"] = (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 36, $this->source); })());
        }
        // line 38
        yield "
";
        // line 39
        $context["display_divider"] = (CoreExtension::getAttribute($this->env, $this->source, ($context["links"] ?? null), "add", [], "array", true, true, false, 39) || (Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["links"]) || array_key_exists("links", $context) ? $context["links"] : (function () { throw new RuntimeError('Variable "links" does not exist.', 39, $this->source); })())) > 0));
        // line 40
        yield "
";
        // line 41
        if ((($tmp = (isset($context["display_divider"]) || array_key_exists("display_divider", $context) ? $context["display_divider"] : (function () { throw new RuntimeError('Variable "display_divider" does not exist.', 41, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 42
            yield "   ";
            // line 43
            yield "   <ul class=\"nav navbar-nav border-start border-left ps-1 ps-sm-2 flex-row\">
";
        }
        // line 45
        yield "
";
        // line 46
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["links"] ?? null), "add", [], "array", true, true, false, 46)) {
            // line 47
            yield "<li class=\"nav-item\">
   <a href=\"";
            // line 48
            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\RoutingExtension']->path(CoreExtension::getAttribute($this->env, $this->source, (isset($context["links"]) || array_key_exists("links", $context) ? $context["links"] : (function () { throw new RuntimeError('Variable "links" does not exist.', 48, $this->source); })()), "add", [], "array", false, false, false, 48)), "html", null, true);
            yield "\" class=\"btn btn-sm btn-primary me-1 pe-2\" data-bs-toggle=\"tooltip\" data-bs-placement=\"bottom\" title=\"";
            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Add"), "html", null, true);
            yield "\">
      <i class=\"ti ti-plus\"></i>
      <span class=\"d-none d-xxl-block\">";
            // line 50
            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Add"), "html", null, true);
            yield "</span>
   </a>
</li>
";
        }
        // line 54
        yield "
";
        // line 55
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["links"]) || array_key_exists("links", $context) ? $context["links"] : (function () { throw new RuntimeError('Variable "links" does not exist.', 55, $this->source); })()));
        foreach ($context['_seq'] as $context["type"] => $context["link"]) {
            // line 56
            yield "   ";
            if (((($context["type"] == "add") || ($context["type"] == "search")) || ($context["type"] == "lists"))) {
                // line 57
                yield "   ";
            } elseif (($context["type"] == "template")) {
                // line 58
                yield "      <li class=\"nav-item\">
         <a href=\"";
                // line 59
                yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\RoutingExtension']->path($context["link"]), "html", null, true);
                yield "\" class=\"btn btn-sm btn-ghost-secondary me-1 pe-2\" data-bs-toggle=\"tooltip\" data-bs-placement=\"bottom\" title=\"";
                yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Manage templates..."), "html", null, true);
                yield "\">
            <i class=\"ti ti-template\"></i>
            <span class=\"d-none d-xxl-block\">";
                // line 61
                yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Templates"), "html", null, true);
                yield "</span>
         </a>
      </li>
   ";
            } elseif ((            // line 64
$context["type"] == "showall")) {
                // line 65
                yield "      <li class=\"nav-item\">
         <a href=\"";
                // line 66
                yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\RoutingExtension']->path($context["link"]), "html", null, true);
                yield "\" class=\"btn btn-sm btn-ghost-secondary me-1 pe-2\" data-bs-toggle=\"tooltip\" data-bs-placement=\"bottom\" title=\"";
                yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Show all"), "html", null, true);
                yield "\">
            <i class=\"ti ti-eye-check\"></i>
            <span class=\"d-none d-xxl-block\">";
                // line 68
                yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Show all"), "html", null, true);
                yield "</span>
         </a>
      </li>
   ";
            } elseif ((            // line 71
$context["type"] == "summary")) {
                // line 72
                yield "      <li class=\"nav-item\">
         <a href=\"";
                // line 73
                yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\RoutingExtension']->path($context["link"]), "html", null, true);
                yield "\" class=\"btn btn-sm btn-ghost-secondary me-1 pe-2\" data-bs-toggle=\"tooltip\" data-bs-placement=\"bottom\" title=\"";
                yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Summary"), "html", null, true);
                yield "\">
            <i class=\"ti ti-notes\"></i>
            <span class=\"d-none d-xxl-block\">";
                // line 75
                yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Summary"), "html", null, true);
                yield "</span>
         </a>
      </li>
   ";
            } elseif ((            // line 78
$context["type"] == "summary_kanban")) {
                // line 79
                yield "      <li class=\"nav-item\">
         <a href=\"";
                // line 80
                yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\RoutingExtension']->path($context["link"]), "html", null, true);
                yield "\" class=\"btn btn-sm btn-ghost-secondary me-1 pe-2\" data-bs-toggle=\"tooltip\" data-bs-placement=\"bottom\" title=\"";
                yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Global Kanban"), "html", null, true);
                yield "\">
            <i class=\"ti ti-layout-columns\"></i>
            <span class=\"d-none d-xxl-block\">";
                // line 82
                yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Global Kanban"), "html", null, true);
                yield "</span>
         </a>
      </li>
   ";
            } elseif ((            // line 85
$context["type"] == "transfer_list")) {
                // line 86
                yield "      <li class=\"nav-item\">
         <a href=\"";
                // line 87
                yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\RoutingExtension']->path($context["link"]), "html", null, true);
                yield "\" class=\"btn btn-sm btn-ghost-secondary me-1 pe-2\" data-bs-toggle=\"tooltip\" data-bs-placement=\"bottom\" title=\"";
                yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Transfer list"), "html", null, true);
                yield "\">
            <i class=\"ti ti-list-check\"></i>
            <span class=\"d-none d-xxl-block\">";
                // line 89
                yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Transfer list"), "html", null, true);
                yield "</span>
         </a>
      </li>
   ";
            } elseif ((            // line 92
$context["type"] == "config")) {
                // line 93
                yield "      <li class=\"nav-item\">
         <a href=\"";
                // line 94
                yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\RoutingExtension']->path($context["link"]), "html", null, true);
                yield "\" class=\"btn btn-sm btn-ghost-secondary me-1 pe-2\" data-bs-toggle=\"tooltip\" data-bs-placement=\"bottom\" title=\"";
                yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Setup"), "html", null, true);
                yield "\">
            <i class=\"ti ti-tool\"></i>
            <span class=\"d-none d-xxl-block\">";
                // line 96
                yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Setup"), "html", null, true);
                yield "</span>
         </a>
      </li>
   ";
            } elseif ((            // line 99
$context["type"] == "view_form_categories")) {
                // line 100
                yield "      <li class=\"nav-item\">
         <a href=\"";
                // line 101
                yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\RoutingExtension']->path($context["link"]), "html", null, true);
                yield "\" role=\"button\" class=\"btn btn-sm btn-ghost-secondary me-1 pe-2\" data-bs-toggle=\"tooltip\" data-bs-placement=\"bottom\" title=\"";
                yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeName("Glpi\\Form\\Category", Session::getPluralNumber()), "html", null, true);
                yield "\">
            <i class=\"ti ti-folder\"></i>
            <span class=\"d-none d-xxl-block\">";
                // line 103
                yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeName("Glpi\\Form\\Category", Session::getPluralNumber()), "html", null, true);
                yield "</span>
         </a>
      </li>
   ";
            } elseif ((            // line 106
$context["type"] == "import_forms")) {
                // line 107
                yield "      <li class=\"nav-item\">
         <a href=\"";
                // line 108
                yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\RoutingExtension']->path($context["link"]), "html", null, true);
                yield "\" role=\"button\" class=\"btn btn-sm btn-ghost-secondary me-1 pe-2\" data-bs-toggle=\"tooltip\" data-bs-placement=\"bottom\" title=\"";
                yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Import forms"), "html", null, true);
                yield "\">
            <i class=\"ti ti-file-arrow-left\"></i>
            <span class=\"d-none d-xxl-block\">";
                // line 110
                yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Import forms"), "html", null, true);
                yield "</span>
         </a>
      </li>
   ";
            } elseif ((            // line 113
$context["type"] == "Glpi\\Dropdown\\DropdownDefinition")) {
                // line 114
                yield "      <li class=\"nav-item\">
         <a href=\"";
                // line 115
                yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\RoutingExtension']->path($context["link"]), "html", null, true);
                yield "\" role=\"button\" class=\"btn btn-sm btn-ghost-secondary me-1 pe-2\" data-bs-toggle=\"tooltip\" data-bs-placement=\"bottom\" title=\"";
                yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeName("Glpi\\Dropdown\\DropdownDefinition"), "html", null, true);
                yield "\">
            <i class=\"";
                // line 116
                yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeIcon("Glpi\\Dropdown\\DropdownDefinition"), "html", null, true);
                yield "\"></i>
            <span class=\"d-none d-xxl-block\">";
                // line 117
                yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeName("Glpi\\Dropdown\\DropdownDefinition"), "html", null, true);
                yield "</span>
         </a>
      </li>
   ";
            } else {
                // line 121
                yield "      <li class=\"nav-item\">
         <a href=\"";
                // line 122
                yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\RoutingExtension']->path($context["link"]), "html", null, true);
                yield "\" class=\"btn btn-sm btn-ghost-secondary me-1 pe-2\">
            ";
                // line 123
                yield (string) $context["type"];
                yield "
         </a>
      </li>
   ";
            }
            // line 127
            yield "
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['type'], $context['link'], $context['_parent']);
        $context = array_intersect_key($context, $_parent);
        $context += $_parent;
        // line 129
        yield "
";
        // line 130
        if ((($tmp = (isset($context["display_divider"]) || array_key_exists("display_divider", $context) ? $context["display_divider"] : (function () { throw new RuntimeError('Variable "display_divider" does not exist.', 130, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 131
            yield "   </ul>
";
        }
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "layout/parts/context_links.html.twig";
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
        return array (  298 => 131,  296 => 130,  293 => 129,  285 => 127,  278 => 123,  274 => 122,  271 => 121,  264 => 117,  260 => 116,  254 => 115,  251 => 114,  249 => 113,  243 => 110,  236 => 108,  233 => 107,  231 => 106,  225 => 103,  218 => 101,  215 => 100,  213 => 99,  207 => 96,  200 => 94,  197 => 93,  195 => 92,  189 => 89,  182 => 87,  179 => 86,  177 => 85,  171 => 82,  164 => 80,  161 => 79,  159 => 78,  153 => 75,  146 => 73,  143 => 72,  141 => 71,  135 => 68,  128 => 66,  125 => 65,  123 => 64,  117 => 61,  110 => 59,  107 => 58,  104 => 57,  101 => 56,  97 => 55,  94 => 54,  87 => 50,  80 => 48,  77 => 47,  75 => 46,  72 => 45,  68 => 43,  66 => 42,  64 => 41,  61 => 40,  59 => 39,  56 => 38,  52 => 36,  50 => 35,  48 => 34,  46 => 33,  43 => 32,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "layout/parts/context_links.html.twig", "/Users/alvarozuculajunior/BCX/glpi/templates/layout/parts/context_links.html.twig");
    }
}
