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

/* layout/parts/profile_selector_form.html.twig */
class __TwigTemplate_cd559afc2c75df1a80c593cdc54a1491 extends Template
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
<div class=\"d-flex align-items-center\">
    <button
        type=\"submit\"
        form=\"ch_ent_o_";
        // line 36
        yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["rand"]) || array_key_exists("rand", $context) ? $context["rand"] : (function () { throw new RuntimeError('Variable "rand" does not exist.', 36, $this->source); })()), "html", null, true);
        yield "\"
        name=\"id\"
        value=\"";
        // line 38
        yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 38, $this->source); })()), "html", null, true);
        yield "\"
        class=\"btn btn-link p-0 bg-transparent ";
        // line 39
        yield (string) (((($tmp = (isset($context["is_recursive"]) || array_key_exists("is_recursive", $context) ? $context["is_recursive"] : (function () { throw new RuntimeError('Variable "is_recursive" does not exist.', 39, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("fw-bold") : (""));
        yield "\">
        ";
        // line 40
        yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new RuntimeError('Variable "name" does not exist.', 40, $this->source); })()), "html", null, true);
        yield "
    </button>

    ";
        // line 43
        if ((($tmp = (isset($context["is_recursive"]) || array_key_exists("is_recursive", $context) ? $context["is_recursive"] : (function () { throw new RuntimeError('Variable "is_recursive" does not exist.', 43, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 44
            yield "        <button
            type=\"submit\"
            form=\"ch_ent_r_";
            // line 46
            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["rand"]) || array_key_exists("rand", $context) ? $context["rand"] : (function () { throw new RuntimeError('Variable "rand" does not exist.', 46, $this->source); })()), "html", null, true);
            yield "\"
            name=\"id\"
            value=\"";
            // line 48
            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 48, $this->source); })()), "html", null, true);
            yield "\"
            class=\"btn btn-outline-secondary p-0 ms-1\"
            aria-label=\"";
            // line 50
            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::sprintf(__("Select %1s entity with all its sub entities"), (isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new RuntimeError('Variable "name" does not exist.', 50, $this->source); })())), "html", null, true);
            yield "\"
        >
            <i
                class=\"ti ti-chevrons-down\"
                data-bs-toggle=\"tooltip\"
                data-bs-placement=\"right\"
                title=\"";
            // line 56
            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::sprintf(__("Select %1s entity with all its sub entities"), (isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new RuntimeError('Variable "name" does not exist.', 56, $this->source); })())), "html", null, true);
            yield "\"
            ></i>
        </button>
    ";
        }
        // line 60
        yield "</div>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "layout/parts/profile_selector_form.html.twig";
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
        return array (  100 => 60,  93 => 56,  84 => 50,  79 => 48,  74 => 46,  70 => 44,  68 => 43,  62 => 40,  58 => 39,  54 => 38,  49 => 36,  43 => 32,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "layout/parts/profile_selector_form.html.twig", "/Users/alvarozuculajunior/BCX/glpi/templates/layout/parts/profile_selector_form.html.twig");
    }
}
