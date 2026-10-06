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

/* install/step7.html.twig */
class __TwigTemplate_b5a66e3db114caf374e31ebe0c6aa5c2 extends Template
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
<h2>";
        // line 35
        yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("One last thing before starting"), "html", null, true);
        yield "</h2>

<p>
   ";
        // line 38
        yield (string) ($context["glpinetwork"] ?? null);
        yield "
</p>

<hr>
<form action=\"install.php\" method=\"post\" data-submit-once>
   <p>
   <button type=\"submit\" name=\"submit\" class=\"btn btn-primary\">
      ";
        // line 45
        yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Continue"), "html", null, true);
        yield "
      <i class=\"ti ti-chevron-right ms-1\"></i>
   </button>
   </p>

   <input type=\x27hidden\x27 name=\x27install\x27 value=\x27Etape_6\x27>
   ";
        // line 51
        yield (string) $macros["fields"]->getTemplateForMacro("macro_csrfField", $context, 51, $this->getSourceContext())->macro_csrfField(...[]);
        yield "
</form>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "install/step7.html.twig";
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
        return array (  76 => 51,  67 => 45,  57 => 38,  51 => 35,  48 => 34,  46 => 33,  43 => 32,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "install/step7.html.twig", "/Users/alvarozuculajunior/BCX/glpi/templates/install/step7.html.twig");
    }
}
