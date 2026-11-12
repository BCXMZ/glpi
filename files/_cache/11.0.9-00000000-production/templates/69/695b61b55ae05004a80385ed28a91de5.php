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

/* pages/admin/user/user_picture_field.html.twig */
class __TwigTemplate_a0528d59141ab926aedb2cf3b34df193 extends Template
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
        $macros["inputs"] = $this->macros["inputs"] = $this->load("components/form/basic_inputs_macros.html.twig", 34)->unwrap();
        // line 35
        $macros["modals"] = $this->macros["modals"] = $this->load("components/form/modals_macros.html.twig", 35)->unwrap();
        // line 36
        yield "
";
        // line 37
        $context["can_update"] = (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "canUpdate", [], "method", false, false, false, 37)) && $tmp instanceof Markup ? (string) $tmp : $tmp) && (($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "canUpdateItem", [], "method", false, false, false, 37)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) || (($tmp = ((array_key_exists("is_preference_form", $context)) ? (Twig\Extension\CoreExtension::default(($context["is_preference_form"] ?? null), false)) : (false))) && $tmp instanceof Markup ? (string) $tmp : $tmp));
        // line 38
        $context["avatar"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 39
            yield "    ";
            yield (string) Twig\Extension\CoreExtension::include($this->env, $context, "components/user/picture.html.twig", ["user_object" =>             // line 40
($context["item"] ?? null), "with_link" => false, "avatar_size" => "avatar-xl"]);
            // line 43
            yield "
";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 45
        $context["avatar_initials"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 46
            yield "    ";
            yield (string) Twig\Extension\CoreExtension::include($this->env, $context, "components/user/picture.html.twig", ["user_object" =>             // line 47
($context["item"] ?? null), "with_link" => false, "avatar_size" => "avatar-xl", "force_initials" => true]);
            // line 51
            yield "
";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 53
        yield "
";
        // line 54
        $context["picture_field"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 55
            yield "    <div
        ";
            // line 56
            if ((($tmp = ($context["can_update"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 57
                yield "            class=\"cursor-pointer flex-shrink-1\" title=\"";
                yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Change picture"), "html", null, true);
                yield "\" role=\"button\" data-bs-toggle=\"modal\" data-bs-target=\"#modal_picture_";
                yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rand_field"] ?? null), "html", null, true);
                yield "\"
        ";
            }
            // line 58
            yield ">
        <div data-current-avatar data-testid=\"current-avatar-container\">";
            // line 59
            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["avatar"] ?? null), "html", null, true);
            yield "</div>
        <div data-default-avatar data-testid=\"default-avatar\" class=\"d-none\">";
            // line 60
            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["avatar_initials"] ?? null), "html", null, true);
            yield "</div>
        <div class=\"avatar avatar-xl rounded d-none\" data-preview-avatar data-testid=\"preview-avatar\">
            <img src=\"\" alt=\"";
            // line 62
            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Preview"), "html", null, true);
            yield "\" class=\"img-fluid\" />
        </div>
    </div>
    ";
            // line 65
            if ((($tmp = ($context["can_update"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 66
                yield "        ";
                $context["modal_content"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                    // line 67
                    yield "            <div class=\"text-center\">
                <div data-current-avatar data-testid=\"current-avatar\">";
                    // line 68
                    yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["avatar"] ?? null), "html", null, true);
                    yield "</div>
                <div data-default-avatar data-testid=\"default-avatar\" class=\"d-none\">";
                    // line 69
                    yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["avatar_initials"] ?? null), "html", null, true);
                    yield "</div>
                <div class=\"avatar avatar-xl rounded d-none\" data-preview-avatar data-testid=\"preview-avatar\">
                    <img src=\"\" alt=\"";
                    // line 71
                    yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Preview"), "html", null, true);
                    yield "\" class=\"img-fluid\" />
                </div>
                ";
                    // line 73
                    yield (string) $macros["inputs"]->getTemplateForMacro("macro_file", $context, 73, $this->getSourceContext())->macro_file(...["picture", null, ["onlyimages" => true, "multiple" => false]]);
                    // line 76
                    yield "
                ";
                    // line 77
                    if ( !Twig\Extension\CoreExtension::testEmpty((($_v0 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 77)) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0["picture"] ?? null) : null))) {
                        // line 78
                        yield "                    ";
                        yield (string) $macros["fields"]->getTemplateForMacro("macro_checkboxField", $context, 78, $this->getSourceContext())->macro_checkboxField(...["_blank_picture", 0, __("Clear"), ["additional_attributes" => ["onclick" => "\$(this).closest(\".modal\").find(\"[data-current-avatar], [data-default-avatar], .fileupload\").toggleClass(\"d-none\");"]]]);
                        // line 82
                        yield "
                ";
                    }
                    // line 84
                    yield "                <script type=\"module\">
                    function updateAvatarVisibilities() {
                        // Cannot rely on \x27fileuploadprocessstop\x27 event or files property as they flat out don\x27t work. fileupload_info content is not updated fast enough to be seen from change event.
                        const has_pending_file = \$(\x27#modal_picture_";
                    // line 87
                    yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rand_field"] ?? null), "html", null, true);
                    yield " [data-preview-avatar] img\x27).attr(\x27src\x27) !== \x27\x27;
                        const will_clear = \$(\x27#modal_picture_";
                    // line 88
                    yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rand_field"] ?? null), "html", null, true);
                    yield " input[name=_blank_picture]\x27).is(\x27:checked\x27);

                        \$(\x27[data-preview-avatar]\x27).toggleClass(\x27d-none\x27, !has_pending_file || will_clear);
                        \$(\x27[data-current-avatar]\x27).toggleClass(\x27d-none\x27, has_pending_file || will_clear);
                        \$(\x27[data-default-avatar]\x27).toggleClass(\x27d-none\x27, !will_clear);
                    }

                    \$(\x27#modal_picture_";
                    // line 95
                    yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rand_field"] ?? null), "html", null, true);
                    yield "\x27).on(\x27mouseup\x27, \x27.remove_file_upload\x27, (e) => {
                        // Click handler doesn\x27t work. Don\x27t know. So much wasted time. Some other handler probably blocks it.
                        \$(\x27#modal_picture_";
                    // line 97
                    yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rand_field"] ?? null), "html", null, true);
                    yield " [data-preview-avatar] img\x27).attr(\x27src\x27, \x27\x27);
                        updateAvatarVisibilities();
                    });
                    \$(\x27#modal_picture_";
                    // line 100
                    yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rand_field"] ?? null), "html", null, true);
                    yield " input[type=file]\x27).on(\x27change\x27, (e) => {
                        // fileuploadprocessstop event doesn\x27t work on the file input or .fileupload. Maybe doesn\x27t work at all.
                        const preview_img = URL.createObjectURL(e.target.files[0]);
                        \$(\x27[data-preview-avatar] img\x27).attr(\x27src\x27, preview_img);
                        updateAvatarVisibilities();
                    });
                    \$(\x27#modal_picture_";
                    // line 106
                    yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rand_field"] ?? null), "html", null, true);
                    yield " input[name=_blank_picture]\x27).on(\x27change\x27, (e) => {
                        updateAvatarVisibilities();
                    });
                </script>
            </div>
        ";
                    yield from [];
                })())) ? '' : new Markup($tmp, $this->env->getCharset());
                // line 112
                yield "        ";
                yield (string) $macros["modals"]->getTemplateForMacro("macro_modal", $context, 112, $this->getSourceContext())->macro_modal(...[__("Change picture"), ($context["modal_content"] ?? null), ["id" => ("modal_picture_" .                 // line 113
($context["rand_field"] ?? null))]]);
                // line 114
                yield "
    ";
            }
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 117
        yield (string) $macros["fields"]->getTemplateForMacro("macro_htmlField", $context, 117, $this->getSourceContext())->macro_htmlField(...["_picture", ($context["picture_field"] ?? null), _n("Picture", "Pictures", 1), ["wrapper_class" => "form-control-plaintext d-flex"]]);
        // line 119
        yield "
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "pages/admin/user/user_picture_field.html.twig";
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
        return array (  212 => 119,  210 => 117,  204 => 114,  202 => 113,  200 => 112,  190 => 106,  181 => 100,  175 => 97,  170 => 95,  160 => 88,  156 => 87,  151 => 84,  147 => 82,  144 => 78,  142 => 77,  139 => 76,  137 => 73,  132 => 71,  127 => 69,  123 => 68,  120 => 67,  117 => 66,  115 => 65,  109 => 62,  104 => 60,  100 => 59,  97 => 58,  89 => 57,  87 => 56,  84 => 55,  82 => 54,  79 => 53,  74 => 51,  72 => 47,  70 => 46,  68 => 45,  63 => 43,  61 => 40,  59 => 39,  57 => 38,  55 => 37,  52 => 36,  50 => 35,  48 => 34,  46 => 33,  43 => 32,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "pages/admin/user/user_picture_field.html.twig", "/Users/alvarozuculajunior/BCX/glpi/templates/pages/admin/user/user_picture_field.html.twig");
    }
}
