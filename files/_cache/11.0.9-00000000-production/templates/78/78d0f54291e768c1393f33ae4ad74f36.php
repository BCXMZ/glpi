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

/* layout/parts/page_header_empty.html.twig */
class __TwigTemplate_3d2ef1f1e124b26ec8436f3e58f6dab1 extends Template
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
<body class=\"horizontal-layout\">
   <div class=\"skip-links\">
      <a class=\"visually-hidden-focusable skip-link\" href=\"#page\">";
        // line 35
        yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Go to main content"), "html", null, true);
        yield "</a>
   </div>
   ";
        // line 37
        if ((((($tmp = $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("DBConnection::isDbAvailable")) && $tmp instanceof Markup ? (string) $tmp : $tmp) && (($tmp = Twig\Extension\CoreExtension::constant("GLPI_SKIP_UPDATES")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) &&  !(($tmp = $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Update::isDbUpToDate")) && $tmp instanceof Markup ? (string) $tmp : $tmp))) {
            // line 38
            yield "      <div class=\"banner-need-update\">
         ";
            // line 39
            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("You are bypassing a needed update"), "html", null, true);
            yield "
      </div>
   ";
        }
        // line 42
        yield "   <div class=\"page\">

      <header class=\"navbar d-print-none sticky-lg-top shadow-sm topbar\" role=\"banner\">
         <div class=\"container-fluid\">
            <a href=\"";
        // line 46
        yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\RoutingExtension']->indexPath(), "html", null, true);
        yield "\" title=\"";
        yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Home"), "html", null, true);
        yield "\" class=\"navbar-brand\">
               <span class=\"glpi-logo\"></span>
            </a>
         </div>
      </header>

      <div class=\"page-wrapper mb-0\">
         <div class=\"page-body container-fluid\">
            <main role=\"main\" id=\"page\" class=\"legacy\" tabindex=\"-1\">
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "layout/parts/page_header_empty.html.twig";
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
        return array (  70 => 46,  64 => 42,  58 => 39,  55 => 38,  53 => 37,  48 => 35,  43 => 32,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "layout/parts/page_header_empty.html.twig", "/Users/alvarozuculajunior/BCX/glpi/templates/layout/parts/page_header_empty.html.twig");
    }
}
