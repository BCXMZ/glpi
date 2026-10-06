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

/* install/step1.html.twig */
class __TwigTemplate_965b8c5a9ee8d92a5e5f65c3174912b3 extends Template
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
        if ((($tmp = ($context["config_write_denied"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 36
            yield "    <h3>";
            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Checking write access to configuration files"), "html", null, true);
            yield "</h3>
    <div class=\"alert alert-danger\" role=\"alert\">
        <div class=\"d-flex\">
            <div>
                <i class=\"ti ti-alert-circle me-2\"></i>
            </div>
            <div>
                <h4 class=\"alert-title\">";
            // line 43
            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Write access denied for configuration files"), "html", null, true);
            yield "</h4>
                <div class=\"text-secondary\">
                    ";
            // line 45
            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::sprintf(__("A temporary write access to the following files is required: %s."), (("`" . Twig\Extension\CoreExtension::join(($context["config_files_to_update"] ?? null), "`, `")) . "`")), "html", null, true);
            yield "
                    <br />
                    ";
            // line 47
            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Write access to these files can be removed once the operation is finished."), "html", null, true);
            yield "
                </div>
            </div>
        </div>
    </div>
";
        } else {
            // line 53
            yield "    <h3>";
            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Checking of the compatibility of your environment with the execution of GLPI"), "html", null, true);
            yield "</h3>
    ";
            // line 54
            yield (string) Twig\Extension\CoreExtension::include($this->env, $context, "install/blocks/requirements_table.html.twig", ["requirements" => ($context["requirements"] ?? null)], false);
            yield "
";
        }
        // line 56
        yield "
";
        // line 57
        $context["common_hiddens"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 58
            yield "   <input type=\"hidden\" name=\"language\" value=\"";
            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\SessionExtension']->session("glpilanguage"), "html", null, true);
            yield "\">
   <input type=\"hidden\" name=\"update\" value=\"";
            // line 59
            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["update"] ?? null), "html", null, true);
            yield "\">
   ";
            // line 60
            yield (string) $macros["fields"]->getTemplateForMacro("macro_csrfField", $context, 60, $this->getSourceContext())->macro_csrfField(...[]);
            yield "
";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 62
        yield "
";
        // line 63
        $context["continue_form"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 64
            yield "   <form action=\"install.php\" method=\"post\" class=\"d-inline\" data-submit-once>
      <button type=\"submit\" name=\"submit\" class=\"btn btn-primary\">
         ";
            // line 66
            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Continue"), "html", null, true);
            yield "
         <i class=\"ti ti-chevron-right ms-1\"></i>
      </button>

      <input type=\"hidden\" name=\"install\" value=\"Etape_1\">
      ";
            // line 71
            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["common_hiddens"] ?? null), "html", null, true);
            yield "
   </form>
";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 74
        yield "
";
        // line 75
        $context["retry_form"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 76
            yield "   <form action=\"install.php\" method=\"post\" class=\"d-inline\" data-submit-once>
      <button type=\"submit\" name=\"submit\" class=\"btn btn-warning\">
         ";
            // line 78
            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Try again"), "html", null, true);
            yield "
         <i class=\"ti ti-reload ms-1\"></i>
      </button>

      <input type=\"hidden\" name=\"install\" value=\"Etape_0\">
      ";
            // line 83
            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["common_hiddens"] ?? null), "html", null, true);
            yield "
   </form>
";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 86
        yield "
";
        // line 87
        if (((($tmp = ($context["config_write_denied"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp) || (($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["requirements"] ?? null), "hasMissingMandatoryRequirements", [], "method", false, false, false, 87)) && $tmp instanceof Markup ? (string) $tmp : $tmp))) {
            // line 88
            yield "   <h3>";
            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Do you want to continue?"), "html", null, true);
            yield "</h3>
   <div class=\"text-center\">
      ";
            // line 90
            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["retry_form"] ?? null), "html", null, true);
            yield "
   </div>
";
        } elseif ((($tmp = CoreExtension::getAttribute($this->env, $this->source,         // line 92
($context["requirements"] ?? null), "hasMissingOptionalRequirements", [], "method", false, false, false, 92)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 93
            yield "   <h3>";
            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Do you want to continue?"), "html", null, true);
            yield "</h3>
   <div class=\"text-center\">
      ";
            // line 95
            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["continue_form"] ?? null), "html", null, true);
            yield "
      ";
            // line 96
            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["retry_form"] ?? null), "html", null, true);
            yield "
   </div>
";
        } else {
            // line 99
            yield "   <div class=\"text-center\">
      ";
            // line 100
            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["continue_form"] ?? null), "html", null, true);
            yield "
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
        return "install/step1.html.twig";
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
        return array (  198 => 100,  195 => 99,  189 => 96,  185 => 95,  179 => 93,  177 => 92,  172 => 90,  166 => 88,  164 => 87,  161 => 86,  154 => 83,  146 => 78,  142 => 76,  140 => 75,  137 => 74,  130 => 71,  122 => 66,  118 => 64,  116 => 63,  113 => 62,  107 => 60,  103 => 59,  98 => 58,  96 => 57,  93 => 56,  88 => 54,  83 => 53,  74 => 47,  69 => 45,  64 => 43,  53 => 36,  51 => 35,  48 => 34,  46 => 33,  43 => 32,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "install/step1.html.twig", "/Users/alvarozuculajunior/BCX/glpi/templates/install/step1.html.twig");
    }
}
