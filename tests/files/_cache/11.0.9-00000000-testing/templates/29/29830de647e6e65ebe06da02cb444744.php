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

/* components/dropdown/comments.html.twig */
class __TwigTemplate_6476be28b09bb80b483fb73dcfc2648c extends Template
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
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["extra_rows"]) || array_key_exists("extra_rows", $context) ? $context["extra_rows"] : (function () { throw new RuntimeError('Variable "extra_rows" does not exist.', 33, $this->source); })())) > 0)) {
            // line 34
            yield "    ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["extra_rows"]) || array_key_exists("extra_rows", $context) ? $context["extra_rows"] : (function () { throw new RuntimeError('Variable "extra_rows" does not exist.', 34, $this->source); })()));
            foreach ($context['_seq'] as $context["label"] => $context["value"]) {
                // line 35
                yield "        <span class=\"b\">";
                yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::sprintf(__("%1\$s: %2\$s"), $context["label"], ""), "html", null, true);
                yield "</span>";
                yield (string) Twig\Extension\CoreExtension::nl2br($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["value"], "html", null, true));
                yield "<br />
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['label'], $context['value'], $context['_parent']);
            $context = array_intersect_key($context, $_parent);
            $context += $_parent;
            // line 37
            yield "    ";
            if ( !Twig\Extension\CoreExtension::testEmpty((isset($context["comment"]) || array_key_exists("comment", $context) ? $context["comment"] : (function () { throw new RuntimeError('Variable "comment" does not exist.', 37, $this->source); })()))) {
                // line 38
                yield "        <span class=\"b\">";
                yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::sprintf(__("%1\$s: %2\$s"), __("Comments"), ""), "html", null, true);
                yield "</span>
    ";
            }
        }
        // line 41
        yield "
";
        // line 42
        yield (string) Twig\Extension\CoreExtension::nl2br($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["comment"]) || array_key_exists("comment", $context) ? $context["comment"] : (function () { throw new RuntimeError('Variable "comment" does not exist.', 42, $this->source); })()), "html", null, true));
        yield "
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "components/dropdown/comments.html.twig";
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
        return array (  78 => 42,  75 => 41,  68 => 38,  65 => 37,  53 => 35,  48 => 34,  46 => 33,  43 => 32,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "components/dropdown/comments.html.twig", "/Users/alvarozuculajunior/BCX/glpi/templates/components/dropdown/comments.html.twig");
    }
}
