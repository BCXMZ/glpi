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

/* components/helpdesk_forms/service_catalog_nested_item.html.twig */
class __TwigTemplate_49cd29125062cbc6de04e8a827f0def4 extends Template
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
        $context["unique_dom_id"] = ("service-catalog-tree-" . Twig\Extension\CoreExtension::random($this->env->getCharset()));
        // line 34
        yield "
<div class=\"col-12 col-sm-6 col-md-4 d-flex\">
    <a
        class=\"card mx-2 my-2 flex-grow-1 border-0 rounded-4 hover-no-shadow hover-bg\"
        ";
        // line 38
        if ($this->extensions['Glpi\Application\View\Extension\PhpExtension']->isInstanceOf((isset($context["child"]) || array_key_exists("child", $context) ? $context["child"] : (function () { throw new RuntimeError('Variable "child" does not exist.', 38, $this->source); })()), "Glpi\\Form\\ServiceCatalog\\ServiceCatalogLeafInterface")) {
            // line 39
            yield "            href=\"";
            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["child"]) || array_key_exists("child", $context) ? $context["child"] : (function () { throw new RuntimeError('Variable "child" does not exist.', 39, $this->source); })()), "getServiceCatalogLink", [], "method", false, false, false, 39), "html", null, true);
            yield "\"
        ";
        } elseif ($this->extensions['Glpi\Application\View\Extension\PhpExtension']->isInstanceOf(        // line 40
(isset($context["child"]) || array_key_exists("child", $context) ? $context["child"] : (function () { throw new RuntimeError('Variable "child" does not exist.', 40, $this->source); })()), "Glpi\\Form\\ServiceCatalog\\ServiceCatalogCompositeInterface")) {
            // line 41
            yield "            href=\"?";
            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["child"]) || array_key_exists("child", $context) ? $context["child"] : (function () { throw new RuntimeError('Variable "child" does not exist.', 41, $this->source); })()), "getChildrenUrlParameters", [], "method", false, false, false, 41), "html", null, true);
            yield "\"
            data-children-url-parameters=\"";
            // line 42
            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["child"]) || array_key_exists("child", $context) ? $context["child"] : (function () { throw new RuntimeError('Variable "child" does not exist.', 42, $this->source); })()), "getChildrenUrlParameters", [], "method", false, false, false, 42), "html", null, true);
            yield "\"
            data-composite-item
        ";
        }
        // line 45
        yield "    >
        <section
            class=\"card-body\"
            aria-labelledby=\"";
        // line 48
        yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["unique_dom_id"]) || array_key_exists("unique_dom_id", $context) ? $context["unique_dom_id"] : (function () { throw new RuntimeError('Variable "unique_dom_id" does not exist.', 48, $this->source); })()), "html", null, true);
        yield "\"
        >
            <div class=\"d-flex\">
                ";
        // line 51
        yield (string) $this->extensions['Glpi\Application\View\Extension\IllustrationExtension']->renderIllustration((((CoreExtension::getAttribute($this->env, $this->source,         // line 52
($context["child"] ?? null), "getServiceCatalogItemIllustration", [], "method", true, true, false, 52) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["child"]) || array_key_exists("child", $context) ? $context["child"] : (function () { throw new RuntimeError('Variable "child" does not exist.', 52, $this->source); })()), "getServiceCatalogItemIllustration", [], "method", false, false, false, 52)))) ? (CoreExtension::getAttribute($this->env, $this->source, (isset($context["child"]) || array_key_exists("child", $context) ? $context["child"] : (function () { throw new RuntimeError('Variable "child" does not exist.', 52, $this->source); })()), "getServiceCatalogItemIllustration", [], "method", false, false, false, 52)) : ("report-issue.svg")), 100);
        // line 54
        yield "
                <div class=\"ms-4\">
                    <h2
                        id=\"";
        // line 57
        yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["unique_dom_id"]) || array_key_exists("unique_dom_id", $context) ? $context["unique_dom_id"] : (function () { throw new RuntimeError('Variable "unique_dom_id" does not exist.', 57, $this->source); })()), "html", null, true);
        yield "\"
                        class=\"card-title mb-2 text-break\"
                    >
                        ";
        // line 60
        yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["child"]) || array_key_exists("child", $context) ? $context["child"] : (function () { throw new RuntimeError('Variable "child" does not exist.', 60, $this->source); })()), "getServiceCatalogItemTitle", [], "method", false, false, false, 60), "html", null, true);
        yield "
                    </h2>
                    <div class=\"text-secondary remove-last-tinymce-margin\">
                        ";
        // line 63
        yield (string) $this->extensions['Glpi\Application\View\Extension\DataHelpersExtension']->getSafeHtml(CoreExtension::getAttribute($this->env, $this->source, (isset($context["child"]) || array_key_exists("child", $context) ? $context["child"] : (function () { throw new RuntimeError('Variable "child" does not exist.', 63, $this->source); })()), "getServiceCatalogItemDescription", [], "method", false, false, false, 63));
        yield "
                    </div>
                </div>
            </div>
        </section>
    </a>
</div>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "components/helpdesk_forms/service_catalog_nested_item.html.twig";
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
        return array (  105 => 63,  99 => 60,  93 => 57,  88 => 54,  86 => 52,  85 => 51,  79 => 48,  74 => 45,  68 => 42,  63 => 41,  61 => 40,  56 => 39,  54 => 38,  48 => 34,  46 => 33,  43 => 32,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "components/helpdesk_forms/service_catalog_nested_item.html.twig", "/Users/alvarozuculajunior/BCX/glpi/templates/components/helpdesk_forms/service_catalog_nested_item.html.twig");
    }
}
