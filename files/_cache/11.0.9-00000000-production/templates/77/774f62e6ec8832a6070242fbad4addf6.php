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
class __TwigTemplate_65f35969b81dccd5fc6d811479f3bd93 extends Template
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
        $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call(["Html", ($context["header_method"] ?? null)], [($context["page_title"] ?? null)]);
        // line 34
        yield "
";
        // line 35
        yield (string) Twig\Extension\CoreExtension::include($this->env, $context, "error_block.html.twig", ["message" =>         // line 36
($context["message"] ?? null), "trace" =>         // line 37
($context["trace"] ?? null), "link_url" =>         // line 38
($context["link_url"] ?? null), "link_text" =>         // line 39
($context["link_text"] ?? null)], false);
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
