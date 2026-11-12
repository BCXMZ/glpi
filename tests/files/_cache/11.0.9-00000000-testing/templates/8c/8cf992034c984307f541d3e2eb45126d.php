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

/* components/user/link_with_tooltip.html.twig */
class __TwigTemplate_0b68c2764604cd2cdfcb4e6311cb3ffb extends Template
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
        $context["rand"] = Twig\Extension\CoreExtension::random($this->env->getCharset());
        // line 34
        yield "
<span id=\"user_";
        // line 35
        yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["rand"]) || array_key_exists("rand", $context) ? $context["rand"] : (function () { throw new RuntimeError('Variable "rand" does not exist.', 35, $this->source); })()), "html", null, true);
        yield "\" class=\"d-inline-flex align-items-center\">
    <i class=\"ti ti-user me-1\"></i>
    ";
        // line 37
        yield (string) $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemLink("User", (isset($context["users_id"]) || array_key_exists("users_id", $context) ? $context["users_id"] : (function () { throw new RuntimeError('Variable "users_id" does not exist.', 37, $this->source); })()), ["enable_anonymization" => (isset($context["enable_anonymization"]) || array_key_exists("enable_anonymization", $context) ? $context["enable_anonymization"] : (function () { throw new RuntimeError('Variable "enable_anonymization" does not exist.', 37, $this->source); })()), "tooltip" => false]);
        yield "
</span>

";
        // line 40
        if ( !(($tmp = (isset($context["enable_anonymization"]) || array_key_exists("enable_anonymization", $context) ? $context["enable_anonymization"] : (function () { throw new RuntimeError('Variable "enable_anonymization" does not exist.', 40, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 41
            yield "    ";
            $context["user"] = (((array_key_exists("user_object", $context) &&  !(null === $context["user_object"]))) ? ($context["user_object"]) : ($this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItem("User", (isset($context["users_id"]) || array_key_exists("users_id", $context) ? $context["users_id"] : (function () { throw new RuntimeError('Variable "users_id" does not exist.', 41, $this->source); })()))));
            // line 42
            yield "    ";
            if (( !(null === (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 42, $this->source); })())) && (($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 42, $this->source); })()), "canView", [], "method", false, false, false, 42)) && $tmp instanceof Markup ? (string) $tmp : $tmp))) {
                // line 43
                yield "        ";
                $context["user_fields"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 43, $this->source); })()), "fields", [], "any", false, false, false, 43);
                // line 44
                yield "        ";
                $context["user_fields"] = Twig\Extension\CoreExtension::merge((isset($context["user_fields"]) || array_key_exists("user_fields", $context) ? $context["user_fields"] : (function () { throw new RuntimeError('Variable "user_fields" does not exist.', 44, $this->source); })()), ["user_name" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 44, $this->source); })()), "getFriendlyName", [], "method", false, false, false, 44)]);
                // line 45
                yield "        ";
                $context["user_fields"] = Twig\Extension\CoreExtension::merge((isset($context["user_fields"]) || array_key_exists("user_fields", $context) ? $context["user_fields"] : (function () { throw new RuntimeError('Variable "user_fields" does not exist.', 45, $this->source); })()), ["email" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 45, $this->source); })()), "getDefaultEmail", [], "method", false, false, false, 45)]);
                // line 46
                yield "        ";
                if ((($tmp = Session::haveRight("user", Twig\Extension\CoreExtension::constant("READ"))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 47
                    yield "            ";
                    $context["user_fields"] = Twig\Extension\CoreExtension::merge((isset($context["user_fields"]) || array_key_exists("user_fields", $context) ? $context["user_fields"] : (function () { throw new RuntimeError('Variable "user_fields" does not exist.', 47, $this->source); })()), ["login" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 47, $this->source); })()), "fields", [], "any", false, false, false, 47), "name", [], "array", false, false, false, 47)]);
                    // line 48
                    yield "        ";
                }
                // line 49
                yield "        ";
                $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Html::showToolTip", [Twig\Extension\CoreExtension::include($this->env, $context, "components/user/info_card.html.twig", ["user" =>                 // line 55
(isset($context["user_fields"]) || array_key_exists("user_fields", $context) ? $context["user_fields"] : (function () { throw new RuntimeError('Variable "user_fields" does not exist.', 55, $this->source); })()), "user_object" =>                 // line 56
(isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 56, $this->source); })())], false), ["applyto" => ("user_" .                 // line 61
(isset($context["rand"]) || array_key_exists("rand", $context) ? $context["rand"] : (function () { throw new RuntimeError('Variable "rand" does not exist.', 61, $this->source); })()))]]);
                // line 65
                yield "    ";
            }
        }
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "components/user/link_with_tooltip.html.twig";
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
        return array (  94 => 65,  92 => 61,  91 => 56,  90 => 55,  88 => 49,  85 => 48,  82 => 47,  79 => 46,  76 => 45,  73 => 44,  70 => 43,  67 => 42,  64 => 41,  62 => 40,  56 => 37,  51 => 35,  48 => 34,  46 => 33,  43 => 32,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "components/user/link_with_tooltip.html.twig", "/Users/alvarozuculajunior/BCX/glpi/templates/components/user/link_with_tooltip.html.twig");
    }
}
