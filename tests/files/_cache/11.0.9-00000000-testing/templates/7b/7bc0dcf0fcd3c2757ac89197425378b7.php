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

/* error_page.html.twig */
class __TwigTemplate_4f073463a26643bba2ff87b6cfce9163 extends Template
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
        $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call(["Html", (isset($context["header_method"]) || array_key_exists("header_method", $context) ? $context["header_method"] : (function () { throw new RuntimeError('Variable "header_method" does not exist.', 33, $this->source); })())], [(isset($context["page_title"]) || array_key_exists("page_title", $context) ? $context["page_title"] : (function () { throw new RuntimeError('Variable "page_title" does not exist.', 33, $this->source); })())]);
        // line 34
        yield "
";
        // line 35
        yield (string) Twig\Extension\CoreExtension::include($this->env, $context, "error_block.html.twig", ["message" =>         // line 36
(isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 36, $this->source); })()), "trace" =>         // line 37
(isset($context["trace"]) || array_key_exists("trace", $context) ? $context["trace"] : (function () { throw new RuntimeError('Variable "trace" does not exist.', 37, $this->source); })()), "link_url" =>         // line 38
(isset($context["link_url"]) || array_key_exists("link_url", $context) ? $context["link_url"] : (function () { throw new RuntimeError('Variable "link_url" does not exist.', 38, $this->source); })()), "link_text" =>         // line 39
(isset($context["link_text"]) || array_key_exists("link_text", $context) ? $context["link_text"] : (function () { throw new RuntimeError('Variable "link_text" does not exist.', 39, $this->source); })())], false);
        // line 40
        yield "

";
        // line 42
        $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call(["Html", "footer"]);
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "error_page.html.twig";
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
        return array (  61 => 42,  57 => 40,  55 => 39,  54 => 38,  53 => 37,  52 => 36,  51 => 35,  48 => 34,  46 => 33,  43 => 32,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "error_page.html.twig", "/Users/alvarozuculajunior/BCX/glpi/templates/error_page.html.twig");
    }
}
