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

/* pages/admin/entity/custom_ui.html.twig */
class __TwigTemplate_8735f0c7e5d1760a457cb3e15e81d5aa extends Template
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

        $this->blocks = [
            'form_fields' => [$this, 'block_form_fields'],
            'more_fields' => [$this, 'block_more_fields'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 33
        return "generic_show_form.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 34
        $macros["fields"] = $this->macros["fields"] = $this->load("components/form/fields_macros.html.twig", 34)->unwrap();
        // line 35
        $context["params"] = (((array_key_exists("params", $context) &&  !(null === $context["params"]))) ? ($context["params"]) : ([]));
        // line 33
        $this->parent = $this->load("generic_show_form.html.twig", 33);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 37
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_form_fields(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 38
        yield "    ";
        yield from $this->unwrap()->yieldBlock('more_fields', $context, $blocks);
        yield from [];
    }

    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_more_fields(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 39
        yield "        ";
        yield (string) $macros["fields"]->getTemplateForMacro("macro_dropdownArrayField", $context, 39, $this->getSourceContext())->macro_dropdownArrayField(...["enable_custom_css", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 39, $this->source); })()), "fields", [], "any", false, false, false, 39), "enable_custom_css", [], "array", false, false, false, 39), (isset($context["enable_css_options"]) || array_key_exists("enable_css_options", $context) ? $context["enable_css_options"] : (function () { throw new RuntimeError('Variable "enable_css_options" does not exist.', 39, $this->source); })()), __("Enable CSS customization"), ["add_field_html" =>         // line 40
(isset($context["enable_css_inheritance_label"]) || array_key_exists("enable_css_inheritance_label", $context) ? $context["enable_css_inheritance_label"] : (function () { throw new RuntimeError('Variable "enable_css_inheritance_label" does not exist.', 40, $this->source); })())]]);
        // line 41
        yield "
        ";
        // line 42
        $context["inherited_value"] = (isset($context["enabled_css_inherited_value"]) || array_key_exists("enabled_css_inherited_value", $context) ? $context["enabled_css_inherited_value"] : (function () { throw new RuntimeError('Variable "enabled_css_inherited_value" does not exist.', 42, $this->source); })());
        // line 43
        yield "        ";
        $context["show_editor"] = ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 43, $this->source); })()), "fields", [], "any", false, false, false, 43), "enable_custom_css", [], "array", false, false, false, 43) == 1) || ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 43, $this->source); })()), "fields", [], "any", false, false, false, 43), "enable_custom_css", [], "array", false, false, false, 43) == Twig\Extension\CoreExtension::constant("Entity::CONFIG_PARENT")) && ((isset($context["inherited_value"]) || array_key_exists("inherited_value", $context) ? $context["inherited_value"] : (function () { throw new RuntimeError('Variable "inherited_value" does not exist.', 43, $this->source); })()) == 1)));
        // line 44
        yield "        <div id=\"custom_css_container\" class=\"custom_css_container ";
        yield (string) (((($tmp = (isset($context["show_editor"]) || array_key_exists("show_editor", $context) ? $context["show_editor"] : (function () { throw new RuntimeError('Variable "show_editor" does not exist.', 44, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("") : ("d-none"));
        yield "\" style=\"height: 400px\"></div>
        <div data-custom-css-disabled class=\"alert alert-info ";
        // line 45
        yield (string) (((($tmp = (isset($context["show_editor"]) || array_key_exists("show_editor", $context) ? $context["show_editor"] : (function () { throw new RuntimeError('Variable "show_editor" does not exist.', 45, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("d-none") : (""));
        yield "\">";
        yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Custom CSS is disabled"), "html", null, true);
        yield "</div>
        <script>
            \$(() => {
                import(\x27/js/modules/Entity/CustomCssEditor.js\x27).then(({initCustomCssEditor}) => {
                    initCustomCssEditor(document.getElementById(\x27custom_css_container\x27), {
                        customCss: \x27";
        // line 50
        yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 50, $this->source); })()), "fields", [], "any", false, false, false, 50), "custom_css_code", [], "array", false, false, false, 50), "js"), "html", null, true);
        yield "\x27,
                        inheritedCss: \x27";
        // line 51
        yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("inherited_css", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["inherited_css"]) || array_key_exists("inherited_css", $context) ? $context["inherited_css"] : (function () { throw new RuntimeError('Variable "inherited_css" does not exist.', 51, $this->source); })()), "")) : ("")), "js"), "html", null, true);
        yield "\x27,
                        inheritedEnabled: ";
        // line 52
        yield (string) ((((isset($context["inherited_value"]) || array_key_exists("inherited_value", $context) ? $context["inherited_value"] : (function () { throw new RuntimeError('Variable "inherited_value" does not exist.', 52, $this->source); })()) == 1)) ? ("true") : ("false"));
        yield ",
                        canEdit: ";
        // line 53
        yield (string) (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["params"]) || array_key_exists("params", $context) ? $context["params"] : (function () { throw new RuntimeError('Variable "params" does not exist.', 53, $this->source); })()), "canedit", [], "any", false, false, false, 53)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("true") : ("false"));
        yield ",
                    });
                });
            });
        </script>
    ";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "pages/admin/entity/custom_ui.html.twig";
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
        return array (  116 => 53,  112 => 52,  108 => 51,  104 => 50,  94 => 45,  89 => 44,  86 => 43,  84 => 42,  81 => 41,  79 => 40,  77 => 39,  65 => 38,  58 => 37,  53 => 33,  51 => 35,  49 => 34,  42 => 33,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "pages/admin/entity/custom_ui.html.twig", "/Users/alvarozuculajunior/BCX/glpi/templates/pages/admin/entity/custom_ui.html.twig");
    }
}
