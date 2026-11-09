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

/* @manageentities/directhelpdesk_modal.html.twig */
class __TwigTemplate_beb56d1acb6a8e7f1612f59cb61e624a extends Template
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
        // line 28
        $macros["_inputs"] = $this->macros["_inputs"] = $this->load("components/form/basic_inputs_macros.html.twig", 28)->unwrap();
        // line 29
        yield "
<form action=\"";
        // line 30
        yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["form_url"] ?? null), "html", null, true);
        yield "\" method=\"post\">
    <input type=\"hidden\" name=\"_glpi_csrf_token\" value=\"";
        // line 31
        yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Session::getNewCSRFToken(), "html", null, true);
        yield "\">
    ";
        // line 33
        yield "    <div class=\"modal\" tabindex=\"-1\" id=\"directhelpdesk-modal\" data-me-entity-alert=\"";
        yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["alert_url"] ?? null), "html", null, true);
        yield "\">
        <div class=\"modal-dialog\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <h5 class=\"modal-title\">
                        <i class=\"ti ti-file-euro me-2\"></i>
                        ";
        // line 39
        yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Add an unbilled intervention", "manageentities"), "html", null, true);
        yield "
                    </h5>
                    <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\"
                            aria-label=\"";
        // line 42
        yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Close"), "html", null, true);
        yield "\"></button>
                </div>
                <div class=\"modal-body\">
                    <table class=\"tab_cadre\">
                        <tr class=\"tab_bg_1\">
                            <td>";
        // line 47
        yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeName("Entity"), "html", null, true);
        yield " <span class=\"red\">*</span></td>
                            <td>
                                ";
        // line 49
        yield (string) $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeDropdown("Entity", ["name" => "entities_id", "on_change" =>         // line 51
($context["change_event_js"] ?? null)]);
        // line 52
        yield "
                            </td>
                        </tr>
                        <span id=\"entity_alert\">
                            ";
        // line 56
        if ((($tmp = ($context["no_days_left"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 57
            yield "                                ";
            yield (string) Twig\Extension\CoreExtension::include($this->env, $context, "@manageentities/contract_no_days_alert.html.twig");
            yield "
                            ";
        }
        // line 59
        yield "                        </span>
                        <tr class=\"tab_bg_1\">
                            <td>";
        // line 61
        yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Title"), "html", null, true);
        yield " <span class=\"red\">*</span></td>
                            <td>
                                ";
        // line 63
        yield (string) $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeDropdown("ITILCategory", ["name" => "name", "condition" => ["OR" => ["is_incident" => 1, "is_request" => 1]]]);
        // line 71
        yield "
                            </td>
                        </tr>
                        <tr class=\"tab_bg_1\">
                            <td>";
        // line 75
        yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Description"), "html", null, true);
        yield " </td>
                            <td colspan=\"4\">";
        // line 76
        yield (string) $macros["_inputs"]->getTemplateForMacro("macro_textarea", $context, 76, $this->getSourceContext())->macro_textarea(...["comment", "", ["rows" => 10]]);
        yield "</td>
                        </tr>
                        <tr class=\"tab_bg_1\">
                            <td>";
        // line 79
        yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Date"), "html", null, true);
        yield " <span class=\"red\">*</span></td>
                            <td>";
        // line 80
        yield (string) $macros["_inputs"]->getTemplateForMacro("macro_date", $context, 80, $this->getSourceContext())->macro_date(...["date", ($context["date"] ?? null), ["maybeempty" => true]]);
        yield "</td>
                        </tr>
                        <tr class=\"tab_bg_1\">
                            <td>
                                <i class=\"ti ti-clock-stop me-1\" title=\"";
        // line 84
        yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Duration"), "html", null, true);
        yield "\"> </i>
                                <span class=\"red\">*</span>
                            </td>
                            <td>
                                ";
        // line 88
        $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Dropdown::showTimeStamp", ["actiontime", ["min" => 0, "max" =>         // line 90
($context["duration_max"] ?? null)]]);
        // line 92
        yield "                            </td>
                        </tr>
                        <tr class=\"tab_bg_1\">
                            <td><i class=\"ti ti-ticket me-1\" title=\"";
        // line 95
        yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Linked ticket"), "html", null, true);
        yield "\"></i></td>
                            <td>
                                ";
        // line 98
        yield "                                ";
        yield (string) $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeDropdown("Ticket", ["name" => "tickets_id", "displaywith" => ["id"]]);
        // line 101
        yield "
                            </td>
                        </tr>
                        <tr class=\"tab_bg_1 center\">
                            <td>
                                <input type=\"hidden\" name=\"users_id\" value=\"";
        // line 106
        yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["users_id"] ?? null), "html", null, true);
        yield "\">
                                <button type=\"submit\" name=\"add\" class=\"btn btn-primary\">
                                    ";
        // line 108
        yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(_x("button", "Post"), "html", null, true);
        yield "
                                </button>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
</form>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@manageentities/directhelpdesk_modal.html.twig";
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
        return array (  178 => 108,  173 => 106,  166 => 101,  163 => 98,  158 => 95,  153 => 92,  151 => 90,  150 => 88,  143 => 84,  136 => 80,  132 => 79,  126 => 76,  122 => 75,  116 => 71,  114 => 63,  109 => 61,  105 => 59,  99 => 57,  97 => 56,  91 => 52,  89 => 51,  88 => 49,  83 => 47,  75 => 42,  69 => 39,  59 => 33,  55 => 31,  51 => 30,  48 => 29,  46 => 28,  43 => 27,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@manageentities/directhelpdesk_modal.html.twig", "/Users/alvarozuculajunior/BCX/glpi/plugins/manageentities/templates/directhelpdesk_modal.html.twig");
    }
}
