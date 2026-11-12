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

/* pages/admin/user/change_other_password.html.twig */
class __TwigTemplate_a2dc25ea4bda4e35d3a62c9969b09949 extends Template
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
";
        // line 35
        $context["full_width"] = ((array_key_exists("full_width", $context)) ? (Twig\Extension\CoreExtension::default(($context["full_width"] ?? null), false)) : (false));
        // line 36
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "isNewItem", [], "method", false, false, false, 36)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 37
            yield "    ";
            yield (string) $macros["fields"]->getTemplateForMacro("macro_checkboxField", $context, 37, $this->getSourceContext())->macro_checkboxField(...["_init_password", 0, __("Send an email to the user to set their own new password."), ["full_width" =>             // line 38
($context["full_width"] ?? null)]]);
            // line 39
            yield "
";
        }
        // line 41
        yield (string) $macros["fields"]->getTemplateForMacro("macro_passwordField", $context, 41, $this->getSourceContext())->macro_passwordField(...["password", "", __("Password"), ["id" => "password", "clearable" => false, "additional_attributes" => ["autocomplete" => "off"], "full_width" =>         // line 47
($context["full_width"] ?? null)]]);
        // line 48
        yield "
";
        // line 49
        yield (string) $macros["fields"]->getTemplateForMacro("macro_passwordField", $context, 49, $this->getSourceContext())->macro_passwordField(...["password2", "", __("Confirm password"), ["clearable" => false, "additional_attributes" => ["autocomplete" => "off"], "full_width" =>         // line 54
($context["full_width"] ?? null)]]);
        // line 55
        yield "
";
        // line 56
        if ((($tmp = $this->extensions['Glpi\Application\View\Extension\ConfigExtension']->config("use_password_security")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 57
            yield "    ";
            yield (string) $macros["fields"]->getTemplateForMacro("macro_htmlField", $context, 57, $this->getSourceContext())->macro_htmlField(...["password_checks", Twig\Extension\CoreExtension::include($this->env, $context, "components/user/password_security_checks.html.twig", ["list_view" => true]), __("Password security policy"), ["full_width" =>             // line 58
($context["full_width"] ?? null)]]);
            // line 59
            yield "
";
        }
        // line 61
        yield "<script>
    \$(\x27input[name=_init_password]\x27).on(\x27change\x27, function() {
        \$(\x27input[name=password]\x27).closest(\x27.form-field\x27)
            .toggleClass(\x27d-none\x27, \$(this).is(\x27:checked\x27))
            .val(\x27\x27);
        \$(\x27input[name=password2]\x27).closest(\x27.form-field\x27)
            .toggleClass(\x27d-none\x27, \$(this).is(\x27:checked\x27))
            .val(\x27\x27);
        \$(\x27.password-security-checks\x27).closest(\x27.form-field\x27).toggleClass(\x27d-none\x27, \$(this).is(\x27:checked\x27));
    });
    ";
        // line 71
        if ((($tmp = $this->extensions['Glpi\Application\View\Extension\ConfigExtension']->config("use_password_security")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 72
            yield "        \$(\x27input[name=password]\x27).on(\x27input\x27, passwordCheck);
    ";
        }
        // line 74
        yield "</script>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "pages/admin/user/change_other_password.html.twig";
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
        return array (  103 => 74,  99 => 72,  97 => 71,  85 => 61,  81 => 59,  79 => 58,  77 => 57,  75 => 56,  72 => 55,  70 => 54,  69 => 49,  66 => 48,  64 => 47,  63 => 41,  59 => 39,  57 => 38,  55 => 37,  53 => 36,  51 => 35,  48 => 34,  46 => 33,  43 => 32,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "pages/admin/user/change_other_password.html.twig", "/Users/alvarozuculajunior/BCX/glpi/templates/pages/admin/user/change_other_password.html.twig");
    }
}
