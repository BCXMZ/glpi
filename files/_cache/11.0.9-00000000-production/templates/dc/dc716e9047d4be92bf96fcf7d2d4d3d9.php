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

/* pages/admin/plugins/list_suspend_banner.html.twig */
class __TwigTemplate_138b581c1d7fdbc72321f7e236bee85f extends Template
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
        $macros["fields"] = $this->macros["fields"] = $this->load("components/form/fields_macros.html.twig", 33)->unwrap();
        // line 34
        yield "
";
        // line 35
        if ((($tmp = ($context["execution_suspended"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 36
            yield "    <div class=\"alert alert-warning\" role=\"alert\">
        ";
            // line 37
            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("The execution of the plugins is suspended."), "html", null, true);
            yield "
        <form class=\"d-inline\" action=\"";
            // line 38
            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeFormPath("Plugin"), "html", null, true);
            yield "\" method=\"POST\">
            ";
            // line 39
            yield (string) $macros["fields"]->getTemplateForMacro("macro_csrfField", $context, 39, $this->getSourceContext())->macro_csrfField(...[]);
            yield "
            <button type=\"submit\" name=\"action\" value=\"resume_all_execution\" class=\"btn btn-sm btn-primary me-1\">
                <i class=\"ti ti-player-play-filled\"></i>
                <span>";
            // line 42
            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Resume execution of all active plugins"), "html", null, true);
            yield "</span>
            </button>
        </form>
    </div>
";
        } else {
            // line 47
            yield "    <div class=\"text-end mb-3\">
        <form class=\"d-inline\" action=\"";
            // line 48
            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeFormPath("Plugin"), "html", null, true);
            yield "\" method=\"POST\">
            ";
            // line 49
            yield (string) $macros["fields"]->getTemplateForMacro("macro_csrfField", $context, 49, $this->getSourceContext())->macro_csrfField(...[]);
            yield "
            <button type=\"submit\" name=\"action\" value=\"suspend_all_execution\" class=\"btn btn-primary me-1\">
                <i class=\"ti ti-player-pause-filled\"></i>
                <span>";
            // line 52
            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Suspend execution of all plugins"), "html", null, true);
            yield "</span>
            </button>
        </form>
    </div>
";
        }
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "pages/admin/plugins/list_suspend_banner.html.twig";
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
        return array (  91 => 52,  85 => 49,  81 => 48,  78 => 47,  70 => 42,  64 => 39,  60 => 38,  56 => 37,  53 => 36,  51 => 35,  48 => 34,  46 => 33,  43 => 32,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "pages/admin/plugins/list_suspend_banner.html.twig", "/Users/alvarozuculajunior/BCX/glpi/templates/pages/admin/plugins/list_suspend_banner.html.twig");
    }
}
