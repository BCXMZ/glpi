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

/* @manageentities/contract_pre_item_alert.html.twig */
class __TwigTemplate_3120e9094f7d5b75a887842aa7d9c207 extends Template
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
        // line 27
        yield "
";
        // line 30
        if ((($context["layout"] ?? null) == "grid")) {
            // line 31
            yield "<div class=\"col-12\">
    ";
            // line 32
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["alerts"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["alert"]) {
                yield (string) $context["alert"];
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['alert'], $context['_parent']);
            $context = array_intersect_key($context, $_parent);
            $context += $_parent;
            // line 33
            yield "</div>
";
        } else {
            // line 35
            yield "<tr>
    <th colspan=\"";
            // line 36
            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["colspan"] ?? null), "html", null, true);
            yield "\">
        ";
            // line 37
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["alerts"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["alert"]) {
                yield (string) $context["alert"];
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['alert'], $context['_parent']);
            $context = array_intersect_key($context, $_parent);
            $context += $_parent;
            // line 38
            yield "    </th>
</tr>
";
        }
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@manageentities/contract_pre_item_alert.html.twig";
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
        return array (  82 => 38,  72 => 37,  68 => 36,  65 => 35,  61 => 33,  51 => 32,  48 => 31,  46 => 30,  43 => 27,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@manageentities/contract_pre_item_alert.html.twig", "/Users/alvarozuculajunior/BCX/glpi/plugins/manageentities/templates/contract_pre_item_alert.html.twig");
    }
}
