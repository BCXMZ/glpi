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

/* @manageentities/entity/description.html.twig */
class __TwigTemplate_b794a75c95a545503be18e383efdbba8 extends Template
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
<div class=\"row g-3 mt-1\">

    ";
        // line 33
        yield "    <div class=\"col-12 col-xl-7\">

        ";
        // line 35
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["entities_data"] ?? null));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["ent"]) {
            // line 36
            yield "        <div class=\"card ";
            if ( !(($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 36)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "mt-3";
            }
            yield "\">
            <div class=\"card-header\">
                <h3 class=\"card-title\">
                    <i class=\"ti ti-building me-1\"></i>
                    ";
            // line 40
            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Data administrative", "manageentities"), "html", null, true);
            yield "
                    ";
            // line 41
            if ( !(($tmp = ($context["is_single"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 42
                yield "                        <span class=\"text-muted small ms-2\">— ";
                yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["ent"], "entity_name", [], "any", false, false, false, 42), "html", null, true);
                yield "</span>
                    ";
            }
            // line 44
            yield "                </h3>
            </div>
            <div class=\"card-body\">

                ";
            // line 49
            yield "                ";
            if (( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, $context["ent"], "logos", [], "any", false, false, false, 49)) || (($tmp = ($context["can_edit"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp))) {
                // line 50
                yield "                <div class=\"row mb-3 align-items-center\">
                    <dt class=\"col-sm-3 text-sm-end text-muted small fw-semibold mb-0\">";
                // line 51
                yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Logo"), "html", null, true);
                yield "</dt>
                    <dd class=\"col-sm-9 mb-0 d-flex align-items-center gap-2 flex-wrap\">
                        ";
                // line 53
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["ent"], "logos", [], "any", false, false, false, 53));
                foreach ($context['_seq'] as $context["_key"] => $context["logo_src"]) {
                    // line 54
                    yield "                            <img src=\"";
                    yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["logo_src"], "html", null, true);
                    yield "\" alt=\"";
                    yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Picture"), "html", null, true);
                    yield "\" style=\"max-height:50px;\">
                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['logo_src'], $context['_parent']);
                $context = array_intersect_key($context, $_parent);
                $context += $_parent;
                // line 56
                yield "                        ";
                if ((($tmp = ($context["can_edit"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 57
                    yield "                        <form method=\"post\" action=\"";
                    yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["entity_form_url"] ?? null), "html", null, true);
                    yield "\" enctype=\"multipart/form-data\" class=\"d-flex align-items-center gap-2 flex-wrap ms-2\">
                            <input type=\"hidden\" name=\"_glpi_csrf_token\" value=\"";
                    // line 58
                    yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Session::getNewCSRFToken(), "html", null, true);
                    yield "\">
                            <input type=\"hidden\" name=\"entities_id\" value=\"";
                    // line 59
                    yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["ent"], "entity_id", [], "any", false, false, false, 59), "html", null, true);
                    yield "\">
                            ";
                    // line 60
                    yield (string) $macros["_inputs"]->getTemplateForMacro("macro_file", $context, 60, $this->getSourceContext())->macro_file(...["filename", null]);
                    yield "
                            <small class=\"text-muted\">(";
                    // line 61
                    yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["ent"], "max_upload", [], "any", false, false, false, 61), "html", null, true);
                    yield ")</small>
                            <button type=\"submit\" name=\"add\" class=\"btn btn-sm btn-outline-primary\">
                                ";
                    // line 63
                    yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Update logo", "manageentities"), "html", null, true);
                    yield "
                            </button>
                        </form>
                        ";
                }
                // line 67
                yield "                    </dd>
                </div>
                <hr class=\"my-2\">
                ";
            }
            // line 71
            yield "
                ";
            // line 73
            yield "                <form method=\"post\" action=\"";
            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["entity_form_url"] ?? null), "html", null, true);
            yield "\">
                    <input type=\"hidden\" name=\"_glpi_csrf_token\" value=\"";
            // line 74
            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Session::getNewCSRFToken(), "html", null, true);
            yield "\">
                    <input type=\"hidden\" name=\"entities_id\" value=\"";
            // line 75
            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["ent"], "entity_id", [], "any", false, false, false, 75), "html", null, true);
            yield "\">

                    <dl class=\"row mb-0\">

                        <dt class=\"col-sm-3 text-sm-end text-muted small fw-semibold col-form-label py-1\">";
            // line 79
            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Name"), "html", null, true);
            yield "</dt>
                        <dd class=\"col-sm-9 col-form-label py-1\">
                            ";
            // line 81
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["ent"], "is_root_entity", [], "any", false, false, false, 81)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 82
                yield "                                ";
                yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Root entity"), "html", null, true);
                yield "
                            ";
            } else {
                // line 84
                yield "                                <strong>";
                yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["ent"], "entity_name", [], "any", false, false, false, 84), "html", null, true);
                yield "</strong>
                                <span class=\"text-muted small ms-1\">(";
                // line 85
                yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["ent"], "entity_completename", [], "any", false, false, false, 85), "html", null, true);
                yield ")</span>
                            ";
            }
            // line 87
            yield "                        </dd>

                        ";
            // line 89
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["ent"], "entity_comment", [], "any", false, false, false, 89)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 90
                yield "                        <dt class=\"col-sm-3 text-sm-end text-muted small fw-semibold col-form-label py-1\">";
                yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Comments"), "html", null, true);
                yield "</dt>
                        <dd class=\"col-sm-9 col-form-label py-1\">";
                // line 91
                yield (string) Twig\Extension\CoreExtension::nl2br($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["ent"], "entity_comment", [], "any", false, false, false, 91), "html", null, true));
                yield "</dd>
                        ";
            }
            // line 93
            yield "
                        ";
            // line 94
            if (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["ent"], "entity_phonenumber", [], "any", false, false, false, 94)) && $tmp instanceof Markup ? (string) $tmp : $tmp) || (($tmp = ($context["can_edit"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp))) {
                // line 95
                yield "                        <dt class=\"col-sm-3 text-sm-end text-muted small fw-semibold col-form-label py-1\">";
                yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Phone"), "html", null, true);
                yield "</dt>
                        <dd class=\"col-sm-9 col-form-label py-1\">";
                // line 96
                yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["ent"], "entity_phonenumber", [], "any", false, false, false, 96), "html", null, true);
                yield "</dd>
                        ";
            }
            // line 98
            yield "
                        ";
            // line 99
            if (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["ent"], "entity_fax", [], "any", false, false, false, 99)) && $tmp instanceof Markup ? (string) $tmp : $tmp) || (($tmp = ($context["can_edit"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp))) {
                // line 100
                yield "                        <dt class=\"col-sm-3 text-sm-end text-muted small fw-semibold col-form-label py-1\">";
                yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Fax"), "html", null, true);
                yield "</dt>
                        <dd class=\"col-sm-9 col-form-label py-1\">";
                // line 101
                yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["ent"], "entity_fax", [], "any", false, false, false, 101), "html", null, true);
                yield "</dd>
                        ";
            }
            // line 103
            yield "
                        ";
            // line 104
            if (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["ent"], "entity_website", [], "any", false, false, false, 104)) && $tmp instanceof Markup ? (string) $tmp : $tmp) || (($tmp = ($context["can_edit"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp))) {
                // line 105
                yield "                        <dt class=\"col-sm-3 text-sm-end text-muted small fw-semibold col-form-label py-1\">";
                yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Website"), "html", null, true);
                yield "</dt>
                        <dd class=\"col-sm-9 col-form-label py-1\">
                            ";
                // line 107
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["ent"], "entity_website_is_url", [], "any", false, false, false, 107)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 108
                    yield "                                <a href=\"";
                    yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["ent"], "entity_website", [], "any", false, false, false, 108), "html", null, true);
                    yield "\" target=\"_blank\" rel=\"noopener\">";
                    yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["ent"], "entity_website", [], "any", false, false, false, 108), "html", null, true);
                    yield "</a>
                            ";
                } elseif ((($tmp = CoreExtension::getAttribute($this->env, $this->source,                 // line 109
$context["ent"], "entity_website", [], "any", false, false, false, 109)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 110
                    yield "                                ";
                    yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["ent"], "entity_website", [], "any", false, false, false, 110), "html", null, true);
                    yield "
                            ";
                }
                // line 112
                yield "                        </dd>
                        ";
            }
            // line 114
            yield "
                        ";
            // line 115
            if (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["ent"], "entity_email", [], "any", false, false, false, 115)) && $tmp instanceof Markup ? (string) $tmp : $tmp) || (($tmp = ($context["can_edit"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp))) {
                // line 116
                yield "                        <dt class=\"col-sm-3 text-sm-end text-muted small fw-semibold col-form-label py-1\">";
                yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Email address"), "html", null, true);
                yield "</dt>
                        <dd class=\"col-sm-9 col-form-label py-1\">
                            ";
                // line 118
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["ent"], "entity_email", [], "any", false, false, false, 118)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 119
                    yield "                                <a href=\"mailto:";
                    yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["ent"], "entity_email", [], "any", false, false, false, 119), "html", null, true);
                    yield "\">";
                    yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["ent"], "entity_email", [], "any", false, false, false, 119), "html", null, true);
                    yield "</a>
                            ";
                }
                // line 121
                yield "                        </dd>
                        ";
            }
            // line 123
            yield "
                        ";
            // line 124
            if (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["ent"], "entity_address", [], "any", false, false, false, 124)) && $tmp instanceof Markup ? (string) $tmp : $tmp) || (($tmp = ($context["can_edit"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp))) {
                // line 125
                yield "                        <dt class=\"col-sm-3 text-sm-end text-muted small fw-semibold col-form-label py-1\">";
                yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Address"), "html", null, true);
                yield "</dt>
                        <dd class=\"col-sm-9 col-form-label py-1\">";
                // line 126
                yield (string) Twig\Extension\CoreExtension::nl2br($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["ent"], "entity_address", [], "any", false, false, false, 126), "html", null, true));
                yield "</dd>
                        ";
            }
            // line 128
            yield "
                        ";
            // line 129
            if (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["ent"], "entity_postcode", [], "any", false, false, false, 129)) && $tmp instanceof Markup ? (string) $tmp : $tmp) || (($tmp = ($context["can_edit"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp))) {
                // line 130
                yield "                        <dt class=\"col-sm-3 text-sm-end text-muted small fw-semibold col-form-label py-1\">";
                yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Postal code"), "html", null, true);
                yield "</dt>
                        <dd class=\"col-sm-9 col-form-label py-1\">";
                // line 131
                yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["ent"], "entity_postcode", [], "any", false, false, false, 131), "html", null, true);
                yield "</dd>
                        ";
            }
            // line 133
            yield "
                        ";
            // line 134
            if (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["ent"], "entity_town", [], "any", false, false, false, 134)) && $tmp instanceof Markup ? (string) $tmp : $tmp) || (($tmp = ($context["can_edit"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp))) {
                // line 135
                yield "                        <dt class=\"col-sm-3 text-sm-end text-muted small fw-semibold col-form-label py-1\">";
                yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("City"), "html", null, true);
                yield "</dt>
                        <dd class=\"col-sm-9 col-form-label py-1\">";
                // line 136
                yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["ent"], "entity_town", [], "any", false, false, false, 136), "html", null, true);
                yield "</dd>
                        ";
            }
            // line 138
            yield "
                        ";
            // line 139
            if (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["ent"], "entity_state", [], "any", false, false, false, 139)) && $tmp instanceof Markup ? (string) $tmp : $tmp) || (($tmp = ($context["can_edit"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp))) {
                // line 140
                yield "                        <dt class=\"col-sm-3 text-sm-end text-muted small fw-semibold col-form-label py-1\">";
                yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("State"), "html", null, true);
                yield "</dt>
                        <dd class=\"col-sm-9 col-form-label py-1\">";
                // line 141
                yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["ent"], "entity_state", [], "any", false, false, false, 141), "html", null, true);
                yield "</dd>
                        ";
            }
            // line 143
            yield "
                        ";
            // line 144
            if (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["ent"], "entity_country", [], "any", false, false, false, 144)) && $tmp instanceof Markup ? (string) $tmp : $tmp) || (($tmp = ($context["can_edit"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp))) {
                // line 145
                yield "                        <dt class=\"col-sm-3 text-sm-end text-muted small fw-semibold col-form-label py-1\">";
                yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Country"), "html", null, true);
                yield "</dt>
                        <dd class=\"col-sm-9 col-form-label py-1\">";
                // line 146
                yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["ent"], "entity_country", [], "any", false, false, false, 146), "html", null, true);
                yield "</dd>
                        ";
            }
            // line 148
            yield "
                    </dl>

                    ";
            // line 151
            if ((($tmp = ($context["can_edit"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 152
                yield "                    <div class=\"mt-3 text-center\">
                        <button type=\"submit\" name=\"update\" class=\"btn btn-primary\">
                            <i class=\"ti ti-device-floppy me-1\"></i>
                            ";
                // line 155
                yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Update administrative data", "manageentities"), "html", null, true);
                yield "
                        </button>
                    </div>
                    ";
            }
            // line 159
            yield "                </form>

            </div>";
            // line 162
            yield "        </div>";
            // line 163
            yield "        ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['ent'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent);
        $context += $_parent;
        // line 164
        yield "
    </div>";
        // line 166
        yield "
    ";
        // line 168
        yield "    <div class=\"col-12 col-xl-5 d-flex flex-column gap-3\">

        ";
        // line 171
        yield "        ";
        if (( !Twig\Extension\CoreExtension::testEmpty(($context["contacts"] ?? null)) || (($tmp = ($context["can_edit_contacts"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp))) {
            // line 172
            yield "        <div class=\"card\">
            <div class=\"card-header\">
                <h3 class=\"card-title\">
                    <i class=\"ti ti-users me-1\"></i>
                    ";
            // line 176
            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(_n("Associated contact", "Associated contacts", 2), "html", null, true);
            yield "
                </h3>
            </div>
            <div class=\"card-body p-0\">
                ";
            // line 180
            if ( !Twig\Extension\CoreExtension::testEmpty(($context["contacts"] ?? null))) {
                // line 181
                yield "                <div class=\"table-responsive\">
                    <table class=\"table table-sm table-hover mb-0\">
                        <thead>
                            <tr>
                                <th>";
                // line 185
                yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Name"), "html", null, true);
                yield "</th>
                                <th>";
                // line 186
                yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Phone"), "html", null, true);
                yield "</th>
                                <th>";
                // line 187
                yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Mobile phone"), "html", null, true);
                yield "</th>
                                <th>";
                // line 188
                yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Email address"), "html", null, true);
                yield "</th>
                                <th>";
                // line 189
                yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Type"), "html", null, true);
                yield "</th>
                                ";
                // line 190
                if (((($tmp = ($context["can_edit_contacts"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp) && (($tmp = ($context["is_single"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp))) {
                    yield "<th></th>";
                }
                // line 191
                yield "                            </tr>
                        </thead>
                        <tbody>
                        ";
                // line 194
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(($context["contacts"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["contact"]) {
                    // line 195
                    yield "                            <tr>
                                <td><a href=\"";
                    // line 196
                    yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["contact"], "url", [], "any", false, false, false, 196), "html", null, true);
                    yield "\">";
                    yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["contact"], "name", [], "any", false, false, false, 196), "html", null, true);
                    yield " ";
                    yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["contact"], "firstname", [], "any", false, false, false, 196), "html", null, true);
                    yield "</a></td>
                                <td>";
                    // line 197
                    yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["contact"], "phone", [], "any", false, false, false, 197), "html", null, true);
                    yield "</td>
                                <td>";
                    // line 198
                    yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["contact"], "mobile", [], "any", false, false, false, 198), "html", null, true);
                    yield "</td>
                                <td>
                                    ";
                    // line 200
                    if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["contact"], "email", [], "any", false, false, false, 200)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 201
                        yield "                                        <a href=\"mailto:";
                        yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["contact"], "email", [], "any", false, false, false, 201), "html", null, true);
                        yield "\">";
                        yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["contact"], "email", [], "any", false, false, false, 201), "html", null, true);
                        yield "</a>
                                    ";
                    }
                    // line 203
                    yield "                                </td>
                                <td>
                                    ";
                    // line 205
                    yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["contact"], "contact_type", [], "any", false, false, false, 205), "html", null, true);
                    yield "
                                    ";
                    // line 206
                    if (((($tmp = ($context["is_single"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp) && (($context["interface"] ?? null) != "helpdesk"))) {
                        // line 207
                        yield "                                        ";
                        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["contact"], "is_default", [], "any", false, false, false, 207)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                            // line 208
                            yield "                                            <span class=\"badge bg-green-lt\">";
                            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Manager"), "html", null, true);
                            yield "</span>
                                        ";
                        } elseif ((($tmp =                         // line 209
($context["can_edit_contacts"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                            // line 210
                            yield "                                            <form method=\"post\" action=\"";
                            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["entity_action_url"] ?? null), "html", null, true);
                            yield "\" class=\"d-inline\">
                                                <input type=\"hidden\" name=\"_glpi_csrf_token\" value=\"";
                            // line 211
                            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Session::getNewCSRFToken(), "html", null, true);
                            yield "\">
                                                <input type=\"hidden\" name=\"contacts_id\" value=\"";
                            // line 212
                            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["contact"], "link_id", [], "any", false, false, false, 212), "html", null, true);
                            yield "\">
                                                <input type=\"hidden\" name=\"entities_id\" value=\"";
                            // line 213
                            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["entity_id"] ?? null), "html", null, true);
                            yield "\">
                                                <button type=\"submit\" name=\"contactbydefault\" class=\"btn btn-link btn-sm p-0\">";
                            // line 214
                            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Manager"), "html", null, true);
                            yield "</button>
                                            </form>
                                        ";
                        }
                        // line 217
                        yield "                                    ";
                    } elseif ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["contact"], "is_default", [], "any", false, false, false, 217)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 218
                        yield "                                        <span class=\"badge bg-green-lt\">";
                        yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Manager"), "html", null, true);
                        yield "</span>
                                    ";
                    }
                    // line 220
                    yield "                                </td>
                                ";
                    // line 221
                    if (((($tmp = ($context["can_edit_contacts"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp) && (($tmp = ($context["is_single"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp))) {
                        // line 222
                        yield "                                <td class=\"text-center\">
                                    <form method=\"post\" action=\"";
                        // line 223
                        yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["entity_action_url"] ?? null), "html", null, true);
                        yield "\" class=\"d-inline\">
                                        <input type=\"hidden\" name=\"_glpi_csrf_token\" value=\"";
                        // line 224
                        yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Session::getNewCSRFToken(), "html", null, true);
                        yield "\">
                                        <input type=\"hidden\" name=\"id\" value=\"";
                        // line 225
                        yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["contact"], "link_id", [], "any", false, false, false, 225), "html", null, true);
                        yield "\">
                                        <button type=\"submit\" name=\"deletecontacts\" class=\"btn btn-link text-danger p-0\" title=\"";
                        // line 226
                        yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Delete permanently"), "html", null, true);
                        yield "\">
                                            <i class=\"ti ti-circle-x\"></i>
                                        </button>
                                    </form>
                                </td>
                                ";
                    }
                    // line 232
                    yield "                            </tr>
                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['contact'], $context['_parent']);
                $context = array_intersect_key($context, $_parent);
                $context += $_parent;
                // line 234
                yield "                        </tbody>
                    </table>
                </div>
                ";
            } else {
                // line 238
                yield "                    <p class=\"text-muted text-center py-3 mb-0\">";
                yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("No contact", "manageentities"), "html", null, true);
                yield "</p>
                ";
            }
            // line 240
            yield "
                ";
            // line 241
            if (((($tmp = ($context["can_edit_contacts"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp) && (($tmp = ($context["is_single"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp))) {
                // line 242
                yield "                <div class=\"card-footer\">
                    <form method=\"post\" action=\"";
                // line 243
                yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["entity_action_url"] ?? null), "html", null, true);
                yield "\" class=\"d-flex align-items-center gap-2 flex-wrap\">
                        <input type=\"hidden\" name=\"_glpi_csrf_token\" value=\"";
                // line 244
                yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Session::getNewCSRFToken(), "html", null, true);
                yield "\">
                        <input type=\"hidden\" name=\"entities_id\" value=\"";
                // line 245
                yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["entity_id"] ?? null), "html", null, true);
                yield "\">
                        <div class=\"flex-grow-1\">";
                // line 246
                yield (string) $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeDropdown("Contact", ["name" => "contacts_id"]);
                yield "</div>
                        <a href=\"";
                // line 247
                yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["contact_form_url"] ?? null), "html", null, true);
                yield "\" target=\"_blank\" title=\"";
                yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Add"), "html", null, true);
                yield "\">
                            <i class=\"ti ti-square-plus\"></i>
                        </a>
                        <button type=\"submit\" name=\"addcontacts\" class=\"btn btn-sm btn-primary\">";
                // line 250
                yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Add"), "html", null, true);
                yield "</button>
                    </form>
                </div>
                ";
            }
            // line 254
            yield "            </div>
        </div>
        ";
        }
        // line 257
        yield "
        ";
        // line 259
        yield "        ";
        if (( !Twig\Extension\CoreExtension::testEmpty(($context["business"] ?? null)) || (($tmp = ($context["can_edit_business"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp))) {
            // line 260
            yield "        <div class=\"card\">
            <div class=\"card-header\">
                <h3 class=\"card-title\">
                    <i class=\"ti ti-briefcase me-1\"></i>
                    ";
            // line 264
            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(_n("Associated commercial", "Associated business", 2, "manageentities"), "html", null, true);
            yield "
                </h3>
            </div>
            <div class=\"card-body p-0\">
                ";
            // line 268
            if ( !Twig\Extension\CoreExtension::testEmpty(($context["business"] ?? null))) {
                // line 269
                yield "                <div class=\"table-responsive\">
                    <table class=\"table table-sm table-hover mb-0\">
                        <thead>
                            <tr>
                                <th>";
                // line 273
                yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Name"), "html", null, true);
                yield "</th>
                                <th>";
                // line 274
                yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Phone"), "html", null, true);
                yield "</th>
                                <th>";
                // line 275
                yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Phone"), "html", null, true);
                yield " 2</th>
                                <th>";
                // line 276
                yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Mobile phone"), "html", null, true);
                yield "</th>
                                <th>";
                // line 277
                yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Email address"), "html", null, true);
                yield "</th>
                                ";
                // line 278
                if (((($tmp = ($context["can_edit_business"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp) && (($tmp = ($context["is_single"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp))) {
                    yield "<th></th>";
                }
                // line 279
                yield "                            </tr>
                        </thead>
                        <tbody>
                        ";
                // line 282
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(($context["business"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["bc"]) {
                    // line 283
                    yield "                            <tr>
                                <td><a href=\"";
                    // line 284
                    yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["bc"], "url", [], "any", false, false, false, 284), "html", null, true);
                    yield "\">";
                    yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["bc"], "realname", [], "any", false, false, false, 284), "html", null, true);
                    yield " ";
                    yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["bc"], "firstname", [], "any", false, false, false, 284), "html", null, true);
                    yield "</a></td>
                                <td>";
                    // line 285
                    yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["bc"], "phone", [], "any", false, false, false, 285), "html", null, true);
                    yield "</td>
                                <td>";
                    // line 286
                    yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["bc"], "phone2", [], "any", false, false, false, 286), "html", null, true);
                    yield "</td>
                                <td>";
                    // line 287
                    yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["bc"], "mobile", [], "any", false, false, false, 287), "html", null, true);
                    yield "</td>
                                <td>
                                    ";
                    // line 289
                    if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["bc"], "email", [], "any", false, false, false, 289)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 290
                        yield "                                        <a href=\"mailto:";
                        yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["bc"], "email", [], "any", false, false, false, 290), "html", null, true);
                        yield "\">";
                        yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["bc"], "email", [], "any", false, false, false, 290), "html", null, true);
                        yield "</a>
                                    ";
                    }
                    // line 292
                    yield "                                </td>
                                ";
                    // line 293
                    if (((($tmp = ($context["can_edit_business"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp) && (($tmp = ($context["is_single"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp))) {
                        // line 294
                        yield "                                <td class=\"text-center\">
                                    <form method=\"post\" action=\"";
                        // line 295
                        yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["entity_action_url"] ?? null), "html", null, true);
                        yield "\" class=\"d-inline\">
                                        <input type=\"hidden\" name=\"_glpi_csrf_token\" value=\"";
                        // line 296
                        yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Session::getNewCSRFToken(), "html", null, true);
                        yield "\">
                                        <input type=\"hidden\" name=\"id\" value=\"";
                        // line 297
                        yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["bc"], "link_id", [], "any", false, false, false, 297), "html", null, true);
                        yield "\">
                                        <button type=\"submit\" name=\"deletebusiness\" class=\"btn btn-link text-danger p-0\" title=\"";
                        // line 298
                        yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Delete permanently"), "html", null, true);
                        yield "\">
                                            <i class=\"ti ti-circle-x\"></i>
                                        </button>
                                    </form>
                                </td>
                                ";
                    }
                    // line 304
                    yield "                            </tr>
                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['bc'], $context['_parent']);
                $context = array_intersect_key($context, $_parent);
                $context += $_parent;
                // line 306
                yield "                        </tbody>
                    </table>
                </div>
                ";
            } else {
                // line 310
                yield "                    <p class=\"text-muted text-center py-3 mb-0\">";
                yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("No business contact", "manageentities"), "html", null, true);
                yield "</p>
                ";
            }
            // line 312
            yield "
                ";
            // line 313
            if (((($tmp = ($context["can_edit_business"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp) && (($tmp = ($context["is_single"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp))) {
                // line 314
                yield "                <div class=\"card-footer\">
                    <form method=\"post\" action=\"";
                // line 315
                yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["entity_action_url"] ?? null), "html", null, true);
                yield "\" class=\"d-flex align-items-center gap-2 flex-wrap\">
                        <input type=\"hidden\" name=\"_glpi_csrf_token\" value=\"";
                // line 316
                yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Session::getNewCSRFToken(), "html", null, true);
                yield "\">
                        <input type=\"hidden\" name=\"entities_id\" value=\"";
                // line 317
                yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["entity_id"] ?? null), "html", null, true);
                yield "\">
                        <div class=\"flex-grow-1\">";
                // line 318
                yield (string) $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeDropdown("User", ["name" => "users_id", "right" => "interface"]);
                yield "</div>
                        <a href=\"";
                // line 319
                yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["user_form_url"] ?? null), "html", null, true);
                yield "\" target=\"_blank\" title=\"";
                yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Add"), "html", null, true);
                yield "\">
                            <i class=\"ti ti-square-plus\"></i>
                        </a>
                        <button type=\"submit\" name=\"addbusiness\" class=\"btn btn-sm btn-primary\">";
                // line 322
                yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Add"), "html", null, true);
                yield "</button>
                    </form>
                </div>
                ";
            }
            // line 326
            yield "            </div>
        </div>
        ";
        }
        // line 329
        yield "
        ";
        // line 330
        yield (string) Twig\Extension\CoreExtension::include($this->env, $context, "@manageentities/entity/techleads_card.html.twig");
        yield "

    </div>";
        // line 333
        yield "</div>";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@manageentities/entity/description.html.twig";
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
        return array (  864 => 333,  859 => 330,  856 => 329,  851 => 326,  844 => 322,  836 => 319,  832 => 318,  828 => 317,  824 => 316,  820 => 315,  817 => 314,  815 => 313,  812 => 312,  806 => 310,  800 => 306,  792 => 304,  783 => 298,  779 => 297,  775 => 296,  771 => 295,  768 => 294,  766 => 293,  763 => 292,  755 => 290,  753 => 289,  748 => 287,  744 => 286,  740 => 285,  732 => 284,  729 => 283,  725 => 282,  720 => 279,  716 => 278,  712 => 277,  708 => 276,  704 => 275,  700 => 274,  696 => 273,  690 => 269,  688 => 268,  681 => 264,  675 => 260,  672 => 259,  669 => 257,  664 => 254,  657 => 250,  649 => 247,  645 => 246,  641 => 245,  637 => 244,  633 => 243,  630 => 242,  628 => 241,  625 => 240,  619 => 238,  613 => 234,  605 => 232,  596 => 226,  592 => 225,  588 => 224,  584 => 223,  581 => 222,  579 => 221,  576 => 220,  570 => 218,  567 => 217,  561 => 214,  557 => 213,  553 => 212,  549 => 211,  544 => 210,  542 => 209,  537 => 208,  534 => 207,  532 => 206,  528 => 205,  524 => 203,  516 => 201,  514 => 200,  509 => 198,  505 => 197,  497 => 196,  494 => 195,  490 => 194,  485 => 191,  481 => 190,  477 => 189,  473 => 188,  469 => 187,  465 => 186,  461 => 185,  455 => 181,  453 => 180,  446 => 176,  440 => 172,  437 => 171,  433 => 168,  430 => 166,  427 => 164,  412 => 163,  410 => 162,  406 => 159,  399 => 155,  394 => 152,  392 => 151,  387 => 148,  382 => 146,  377 => 145,  375 => 144,  372 => 143,  367 => 141,  362 => 140,  360 => 139,  357 => 138,  352 => 136,  347 => 135,  345 => 134,  342 => 133,  337 => 131,  332 => 130,  330 => 129,  327 => 128,  322 => 126,  317 => 125,  315 => 124,  312 => 123,  308 => 121,  300 => 119,  298 => 118,  292 => 116,  290 => 115,  287 => 114,  283 => 112,  277 => 110,  275 => 109,  268 => 108,  266 => 107,  260 => 105,  258 => 104,  255 => 103,  250 => 101,  245 => 100,  243 => 99,  240 => 98,  235 => 96,  230 => 95,  228 => 94,  225 => 93,  220 => 91,  215 => 90,  213 => 89,  209 => 87,  204 => 85,  199 => 84,  193 => 82,  191 => 81,  186 => 79,  179 => 75,  175 => 74,  170 => 73,  167 => 71,  161 => 67,  154 => 63,  149 => 61,  145 => 60,  141 => 59,  137 => 58,  132 => 57,  129 => 56,  117 => 54,  113 => 53,  108 => 51,  105 => 50,  102 => 49,  96 => 44,  90 => 42,  88 => 41,  84 => 40,  74 => 36,  57 => 35,  53 => 33,  48 => 29,  46 => 28,  43 => 27,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@manageentities/entity/description.html.twig", "/Users/alvarozuculajunior/BCX/glpi/plugins/manageentities/templates/entity/description.html.twig");
    }
}
