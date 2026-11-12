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

/* @manageentities/entity/techleads_card.html.twig */
class __TwigTemplate_a70bda12e90a61196b8ed65746596c3c extends Template
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
        // line 29
        if (( !Twig\Extension\CoreExtension::testEmpty(($context["techleads"] ?? null)) || (($tmp = ($context["can_edit_techleads"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp))) {
            // line 30
            yield "<div class=\"card\">
    <div class=\"card-header\">
        <h3 class=\"card-title\">
            <i class=\"ti ti-user-star me-1\"></i>
            ";
            // line 34
            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(_n("Tech lead", "Tech leads", 2, "manageentities"), "html", null, true);
            yield "
        </h3>
    </div>
    <div class=\"card-body p-0\">
        ";
            // line 38
            if ( !Twig\Extension\CoreExtension::testEmpty(($context["techleads"] ?? null))) {
                // line 39
                yield "        <div class=\"table-responsive\">
            <table class=\"table table-sm table-hover mb-0\">
                <thead>
                    <tr>
                        <th>";
                // line 43
                yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Name"), "html", null, true);
                yield "</th>
                        <th>";
                // line 44
                yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Phone"), "html", null, true);
                yield "</th>
                        <th>";
                // line 45
                yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Mobile phone"), "html", null, true);
                yield "</th>
                        <th>";
                // line 46
                yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Email address"), "html", null, true);
                yield "</th>
                        <th></th>
                        ";
                // line 48
                if (((($tmp = ($context["can_edit_techleads"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp) && (($tmp = ($context["is_single"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp))) {
                    yield "<th></th>";
                }
                // line 49
                yield "                    </tr>
                </thead>
                <tbody>
                ";
                // line 52
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(($context["techleads"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["tl"]) {
                    // line 53
                    yield "                    <tr>
                        <td><a href=\"";
                    // line 54
                    yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["tl"], "url", [], "any", false, false, false, 54), "html", null, true);
                    yield "\">";
                    yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["tl"], "name", [], "any", false, false, false, 54), "html", null, true);
                    yield "</a></td>
                        <td>";
                    // line 55
                    yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["tl"], "phone", [], "any", false, false, false, 55), "html", null, true);
                    yield "</td>
                        <td>";
                    // line 56
                    yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["tl"], "mobile", [], "any", false, false, false, 56), "html", null, true);
                    yield "</td>
                        <td>
                            ";
                    // line 58
                    if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["tl"], "email", [], "any", false, false, false, 58)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 59
                        yield "                                <a href=\"mailto:";
                        yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["tl"], "email", [], "any", false, false, false, 59), "html", null, true);
                        yield "\">";
                        yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["tl"], "email", [], "any", false, false, false, 59), "html", null, true);
                        yield "</a>
                            ";
                    }
                    // line 61
                    yield "                        </td>
                        <td>
                            ";
                    // line 63
                    if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["tl"], "is_default", [], "any", false, false, false, 63)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 64
                        yield "                                <span class=\"badge bg-green-lt\">";
                        yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Main tech lead", "manageentities"), "html", null, true);
                        yield "</span>
                            ";
                    } elseif (((($tmp =                     // line 65
($context["can_update_techleads"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp) && (($tmp = ($context["is_single"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp))) {
                        // line 66
                        yield "                                <form method=\"post\" action=\"";
                        yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["entity_action_url"] ?? null), "html", null, true);
                        yield "\" class=\"d-inline\">
                                    <input type=\"hidden\" name=\"_glpi_csrf_token\" value=\"";
                        // line 67
                        yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Session::getNewCSRFToken(), "html", null, true);
                        yield "\">
                                    <input type=\"hidden\" name=\"id\" value=\"";
                        // line 68
                        yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["tl"], "link_id", [], "any", false, false, false, 68), "html", null, true);
                        yield "\">
                                    <button type=\"submit\" name=\"techleadbydefault\" class=\"btn btn-link btn-sm p-0\">
                                        ";
                        // line 70
                        yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Set as main tech lead", "manageentities"), "html", null, true);
                        yield "
                                    </button>
                                </form>
                            ";
                    }
                    // line 74
                    yield "                        </td>
                        ";
                    // line 75
                    if (((($tmp = ($context["can_edit_techleads"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp) && (($tmp = ($context["is_single"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp))) {
                        // line 76
                        yield "                        <td class=\"text-center\">
                            <form method=\"post\" action=\"";
                        // line 77
                        yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["entity_action_url"] ?? null), "html", null, true);
                        yield "\" class=\"d-inline\">
                                <input type=\"hidden\" name=\"_glpi_csrf_token\" value=\"";
                        // line 78
                        yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Session::getNewCSRFToken(), "html", null, true);
                        yield "\">
                                <input type=\"hidden\" name=\"id\" value=\"";
                        // line 79
                        yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["tl"], "link_id", [], "any", false, false, false, 79), "html", null, true);
                        yield "\">
                                <button type=\"submit\" name=\"deletetechlead\" class=\"btn btn-link text-danger p-0\" title=\"";
                        // line 80
                        yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Delete permanently"), "html", null, true);
                        yield "\">
                                    <i class=\"ti ti-circle-x\"></i>
                                </button>
                            </form>
                        </td>
                        ";
                    }
                    // line 86
                    yield "                    </tr>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['tl'], $context['_parent']);
                $context = array_intersect_key($context, $_parent);
                $context += $_parent;
                // line 88
                yield "                </tbody>
            </table>
        </div>
        ";
            } else {
                // line 92
                yield "            <p class=\"text-muted text-center py-3 mb-0\">";
                yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("No tech lead", "manageentities"), "html", null, true);
                yield "</p>
        ";
            }
            // line 94
            yield "
        ";
            // line 95
            if (((($tmp = ($context["can_edit_techleads"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp) && (($tmp = ($context["is_single"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp))) {
                // line 96
                yield "        <div class=\"card-footer\">
            <form method=\"post\" action=\"";
                // line 97
                yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["entity_action_url"] ?? null), "html", null, true);
                yield "\" class=\"d-flex align-items-center gap-2 flex-wrap\">
                <input type=\"hidden\" name=\"_glpi_csrf_token\" value=\"";
                // line 98
                yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Session::getNewCSRFToken(), "html", null, true);
                yield "\">
                <input type=\"hidden\" name=\"entities_id\" value=\"";
                // line 99
                yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["entity_id"] ?? null), "html", null, true);
                yield "\">
                <div class=\"flex-grow-1\">";
                // line 100
                yield (string) $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeDropdown("User", ["name" => "users_id", "right" => "own_ticket", "entity" => ($context["techlead_entities"] ?? null), "used" => ($context["techlead_used"] ?? null)]);
                yield "</div>
                <button type=\"submit\" name=\"addtechlead\" class=\"btn btn-sm btn-primary\">";
                // line 101
                yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Add"), "html", null, true);
                yield "</button>
            </form>
        </div>
        ";
            }
            // line 105
            yield "    </div>
</div>
";
        }
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@manageentities/entity/techleads_card.html.twig";
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
        return array (  241 => 105,  234 => 101,  230 => 100,  226 => 99,  222 => 98,  218 => 97,  215 => 96,  213 => 95,  210 => 94,  204 => 92,  198 => 88,  190 => 86,  181 => 80,  177 => 79,  173 => 78,  169 => 77,  166 => 76,  164 => 75,  161 => 74,  154 => 70,  149 => 68,  145 => 67,  140 => 66,  138 => 65,  133 => 64,  131 => 63,  127 => 61,  119 => 59,  117 => 58,  112 => 56,  108 => 55,  102 => 54,  99 => 53,  95 => 52,  90 => 49,  86 => 48,  81 => 46,  77 => 45,  73 => 44,  69 => 43,  63 => 39,  61 => 38,  54 => 34,  48 => 30,  46 => 29,  43 => 27,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@manageentities/entity/techleads_card.html.twig", "/Users/alvarozuculajunior/BCX/glpi/plugins/manageentities/templates/entity/techleads_card.html.twig");
    }
}
