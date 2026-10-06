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

/* install/step0.html.twig */
class __TwigTemplate_35f91a3489b57e905ebf8ac9baa6f81b extends Template
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
        $macros["alerts"] = $this->macros["alerts"] = $this->load("components/alerts_macros.html.twig", 34)->unwrap();
        // line 35
        yield "
<div class=\"container text-center\">
   <div class=\"text-start\">
      ";
        // line 38
        $context["alert_messages"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 39
            yield "         ";
            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Choose \x27Install\x27 for a completely new installation of GLPI."), "html", null, true);
            yield "<br>
         ";
            // line 40
            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Select \x27Upgrade\x27 to update your version of GLPI from an earlier version"), "html", null, true);
            yield "
      ";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 42
        yield "
      ";
        // line 43
        yield (string) $macros["alerts"]->getTemplateForMacro("macro_alert_info", $context, 43, $this->getSourceContext())->macro_alert_info(...[__("Installation or update of GLPI"),         // line 45
($context["alert_messages"] ?? null)]);
        // line 46
        yield "
   </div>

   <form action=\"install.php\" method=\"post\" class=\"d-inline\" data-submit-once>
      <button type=\"submit\" name=\"submit\" class=\"btn btn-primary\">
         ";
        // line 51
        yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(_x("button", "Install"), "html", null, true);
        yield "
         <i class=\"fas fa-download ms-1\"></i>
      </button>

      <input type=\"hidden\" name=\"update\" value=\"no\">
      <input type=\"hidden\" name=\"install\" value=\"Etape_0\">
      ";
        // line 57
        yield (string) $macros["fields"]->getTemplateForMacro("macro_csrfField", $context, 57, $this->getSourceContext())->macro_csrfField(...[]);
        yield "
   </form>

   <form action=\"install.php\" method=\"post\" class=\"d-inline\" data-submit-once>
      <button type=\"submit\" name=\"submit\" class=\"btn btn-primary\">
         ";
        // line 62
        yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(_x("button", "Upgrade"), "html", null, true);
        yield "
         <i class=\"fas fa-caret-square-up ms-1\"></i>
      </button>

      <input type=\"hidden\" name=\"update\" value=\"yes\">
      <input type=\"hidden\" name=\"install\" value=\"Etape_0\">
      ";
        // line 68
        yield (string) $macros["fields"]->getTemplateForMacro("macro_csrfField", $context, 68, $this->getSourceContext())->macro_csrfField(...[]);
        yield "
   </form>
</div>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "install/step0.html.twig";
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
        return array (  107 => 68,  98 => 62,  90 => 57,  81 => 51,  74 => 46,  72 => 45,  71 => 43,  68 => 42,  62 => 40,  57 => 39,  55 => 38,  50 => 35,  48 => 34,  46 => 33,  43 => 32,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "install/step0.html.twig", "/Users/alvarozuculajunior/BCX/glpi/templates/install/step0.html.twig");
    }
}
