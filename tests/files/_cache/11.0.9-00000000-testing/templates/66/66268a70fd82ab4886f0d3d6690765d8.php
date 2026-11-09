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

/* layout/page_skeleton.html.twig */
class __TwigTemplate_7e0f0b073f65b4666e7c04e96f968499 extends Template
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
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 32
        yield "
";
        // line 33
        $context["interface"] = $this->extensions['Glpi\Application\View\Extension\SessionExtension']->getCurrentInterface();
        // line 34
        $context["header_method"] = ((((isset($context["interface"]) || array_key_exists("interface", $context) ? $context["interface"] : (function () { throw new RuntimeError('Variable "interface" does not exist.', 34, $this->source); })()) == "central")) ? ("header") : ("helpHeader"));
        // line 35
        yield "
";
        // line 36
        $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call(["Html", (isset($context["header_method"]) || array_key_exists("header_method", $context) ? $context["header_method"] : (function () { throw new RuntimeError('Variable "header_method" does not exist.', 36, $this->source); })())], ["title" =>         // line 37
(isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 37, $this->source); })()), "sector" => (((CoreExtension::getAttribute($this->env, $this->source,         // line 38
($context["menu"] ?? null), 0, [], "array", true, true, false, 38) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["menu"]) || array_key_exists("menu", $context) ? $context["menu"] : (function () { throw new RuntimeError('Variable "menu" does not exist.', 38, $this->source); })()), 0, [], "array", false, false, false, 38)))) ? (CoreExtension::getAttribute($this->env, $this->source, (isset($context["menu"]) || array_key_exists("menu", $context) ? $context["menu"] : (function () { throw new RuntimeError('Variable "menu" does not exist.', 38, $this->source); })()), 0, [], "array", false, false, false, 38)) : ("none")), "item" => (((CoreExtension::getAttribute($this->env, $this->source,         // line 39
($context["menu"] ?? null), 1, [], "array", true, true, false, 39) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["menu"]) || array_key_exists("menu", $context) ? $context["menu"] : (function () { throw new RuntimeError('Variable "menu" does not exist.', 39, $this->source); })()), 1, [], "array", false, false, false, 39)))) ? (CoreExtension::getAttribute($this->env, $this->source, (isset($context["menu"]) || array_key_exists("menu", $context) ? $context["menu"] : (function () { throw new RuntimeError('Variable "menu" does not exist.', 39, $this->source); })()), 1, [], "array", false, false, false, 39)) : ("none")), "option" => (((CoreExtension::getAttribute($this->env, $this->source,         // line 40
($context["menu"] ?? null), 2, [], "array", true, true, false, 40) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["menu"]) || array_key_exists("menu", $context) ? $context["menu"] : (function () { throw new RuntimeError('Variable "menu" does not exist.', 40, $this->source); })()), 2, [], "array", false, false, false, 40)))) ? (CoreExtension::getAttribute($this->env, $this->source, (isset($context["menu"]) || array_key_exists("menu", $context) ? $context["menu"] : (function () { throw new RuntimeError('Variable "menu" does not exist.', 40, $this->source); })()), 2, [], "array", false, false, false, 40)) : (""))]);
        // line 42
        yield "
";
        // line 43
        yield from $this->unwrap()->yieldBlock('content', $context, $blocks);
        // line 45
        yield "
";
        // line 46
        $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call(["Html", "footer"]);
        yield from [];
    }

    // line 43
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "layout/page_skeleton.html.twig";
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
        return array (  73 => 43,  68 => 46,  65 => 45,  63 => 43,  60 => 42,  58 => 40,  57 => 39,  56 => 38,  55 => 37,  54 => 36,  51 => 35,  49 => 34,  47 => 33,  44 => 32,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "layout/page_skeleton.html.twig", "/Users/alvarozuculajunior/BCX/glpi/templates/layout/page_skeleton.html.twig");
    }
}
