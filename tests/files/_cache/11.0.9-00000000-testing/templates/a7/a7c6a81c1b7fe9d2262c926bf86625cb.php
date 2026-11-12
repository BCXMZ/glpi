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

/* pages/helpdesk/index.html.twig */
class __TwigTemplate_6d3cd599a7b0ccc14fe54b90102378cd extends Template
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
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 33
        return "layout/page_skeleton.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 35
        $context["scene_left"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 35, $this->source); })()), "getHelpdeskSceneId", ["custom_helpdesk_home_scene_left"], "method", false, false, false, 35);
        // line 36
        $context["scene_right"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 36, $this->source); })()), "getHelpdeskSceneId", ["custom_helpdesk_home_scene_right"], "method", false, false, false, 36);
        // line 33
        $this->parent = $this->load("layout/page_skeleton.html.twig", 33);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 38
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 39
        yield "    ";
        // line 42
        yield "    <div class=\"d-flex flex-column helpdesk-home-container force-full-width\">
        <div class=\"search-banner d-flex\">
            <div class=\"scene scene-left\">
                ";
        // line 45
        yield (string) $this->extensions['Glpi\Application\View\Extension\IllustrationExtension']->renderScene((isset($context["scene_left"]) || array_key_exists("scene_left", $context) ? $context["scene_left"] : (function () { throw new RuntimeError('Variable "scene_left" does not exist.', 45, $this->source); })()));
        yield "
            </div>
            <div class=\"container-narrow search-banner-content\">
                <h1 class=\"text-center mb-0\" data-testid=\"home-title\">
                    ";
        // line 49
        yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 49, $this->source); })()), "getHelpdeskHomeTitle", [], "method", false, false, false, 49), "html", null, true);
        yield "
                </h1>

                ";
        // line 52
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 52, $this->source); })()), "isHelpdeskSearchBarEnabled", [], "method", false, false, false, 52)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 53
            yield "                    <div id=\"search-overlay\" class=\"search-overlay bg-dark\"></div>
                    <div class=\"input-icon search-bar-container\">
                        <span class=\"input-icon-addon\">
                            <i class=\"ti ti-search\"></i>
                        </span>
                        <input
                            id=\"search-input\"
                            type=\"text\"
                            value=\"\"
                            class=\"form-control home-search\"
                            placeholder=\"";
            // line 63
            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Search for knowledge base entries or forms"), "html", null, true);
            yield "\"
                            data-testid=\"home-search\"
                        >
                        <section
                            id=\"search-results\"
                            class=\"position-absolute search-result-container w-100 d-none\"
                            aria-label=\"";
            // line 69
            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Search results"), "html", null, true);
            yield "\"
                        >
                        </section>
                    </div>
                ";
        } else {
            // line 74
            yield "                    ";
            // line 75
            yield "                    <div class=\"search-bar-container-placeholder\"></div>
                ";
        }
        // line 77
        yield "            </div>
            <div class=\"scene scene-right\">
                ";
        // line 79
        yield (string) $this->extensions['Glpi\Application\View\Extension\IllustrationExtension']->renderScene((isset($context["scene_right"]) || array_key_exists("scene_right", $context) ? $context["scene_right"] : (function () { throw new RuntimeError('Variable "scene_right" does not exist.', 79, $this->source); })()));
        yield "
            </div>
        </div>
        <section class=\"tiles-banner\" aria-label=\"";
        // line 82
        yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Quick Access"), "html", null, true);
        yield "\" data-testid=\"quick-access\">
            <div class=\"container-xl\">
                ";
        // line 85
        yield "                ";
        if ((($tmp = Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["password_alert"]) || array_key_exists("password_alert", $context) ? $context["password_alert"] : (function () { throw new RuntimeError('Variable "password_alert" does not exist.', 85, $this->source); })()))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 86
            yield "                    <div class=\"alert alert-warning alert-dismissible bg-white\" role=\"alert\">
                        <div class=\"d-flex mb-2\">
                            <div>
                                <i class=\"ti ti-alert-triangle me-1\"></i>
                            </div>
                            <div>
                                ";
            // line 92
            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["password_alert"]) || array_key_exists("password_alert", $context) ? $context["password_alert"] : (function () { throw new RuntimeError('Variable "password_alert" does not exist.', 92, $this->source); })()), "html", null, true);
            yield "
                            </div>
                        </div>

                        <div class=\"btn-list\">
                            <a class=\"btn btn-outline-warning\" href=\"";
            // line 97
            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\RoutingExtension']->path("/front/updatepassword.php"), "html", null, true);
            yield " \">
                                ";
            // line 98
            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Update my password"), "html", null, true);
            yield "
                            </a>
                        </div>
                    </div>
                ";
        }
        // line 103
        yield "
                ";
        // line 105
        yield "                <table class=\"central\">
                    ";
        // line 106
        yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\PluginExtension']->callPluginHook(Twig\Extension\CoreExtension::constant("Glpi\\Plugin\\Hooks::DISPLAY_CENTRAL")), "html", null, true);
        yield "
                </table>

                <div class=\"row\">
                    ";
        // line 110
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["tiles"]) || array_key_exists("tiles", $context) ? $context["tiles"] : (function () { throw new RuntimeError('Variable "tiles" does not exist.', 110, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["tile"]) {
            // line 111
            yield "                        <div class=\"col-12 col-sm-6 col-md-4 d-flex\">
                            <a
                                class=\"card mx-1 my-2 flex-grow-1\"
                                href=\"";
            // line 114
            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["tile"], "getTileUrl", [], "method", false, false, false, 114), "html", null, true);
            yield "\"
                            >
                                <section class=\"card-body\">
                                    <div class=\"d-flex\">
                                        <div class=\"aspect-ratio-1\">
                                            ";
            // line 119
            yield (string) $this->extensions['Glpi\Application\View\Extension\IllustrationExtension']->renderIllustration(CoreExtension::getAttribute($this->env, $this->source, $context["tile"], "getIllustration", [], "method", false, false, false, 119), 70);
            yield "
                                        </div>
                                        <div class=\"ms-4\">
                                            <h2 class=\"card-title mb-2 text-break\">
                                                ";
            // line 123
            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["tile"], "getTitle", [], "method", false, false, false, 123), "html", null, true);
            yield "
                                            </h2>
                                            <div class=\"text-secondary remove-last-tinymce-margin\">
                                                ";
            // line 126
            yield (string) $this->extensions['Glpi\Application\View\Extension\DataHelpersExtension']->getSafeHtml(CoreExtension::getAttribute($this->env, $this->source, $context["tile"], "getDescription", [], "method", false, false, false, 126));
            yield "
                                            </div>
                                        </div>
                                    </div>
                                </section>
                            </a>
                        </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['tile'], $context['_parent']);
        $context = array_intersect_key($context, $_parent);
        $context += $_parent;
        // line 134
        yield "                </div>
            </div>
        </section>
        <div class=\"tickets-banner\">
            <div class=\"container-xl\">
                ";
        // line 139
        yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["tabs"]) || array_key_exists("tabs", $context) ? $context["tabs"] : (function () { throw new RuntimeError('Variable "tabs" does not exist.', 139, $this->source); })()), "showTabsContent", [], "method", false, false, false, 139), "html", null, true);
        yield "
            </div>
        </div>
    </div>

    <script>
        (async function() {
            const module = await import(
                \"/js/modules/Helpdesk/IndexController.js\"
            );
            new module.GlpiHelpdeskIndexController();
        })();
    </script>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "pages/helpdesk/index.html.twig";
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
        return array (  232 => 139,  225 => 134,  210 => 126,  204 => 123,  197 => 119,  189 => 114,  184 => 111,  180 => 110,  173 => 106,  170 => 105,  167 => 103,  159 => 98,  155 => 97,  147 => 92,  139 => 86,  136 => 85,  131 => 82,  125 => 79,  121 => 77,  117 => 75,  115 => 74,  107 => 69,  98 => 63,  86 => 53,  84 => 52,  78 => 49,  71 => 45,  66 => 42,  64 => 39,  57 => 38,  52 => 33,  50 => 36,  48 => 35,  41 => 33,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "pages/helpdesk/index.html.twig", "/Users/alvarozuculajunior/BCX/glpi/templates/pages/helpdesk/index.html.twig");
    }
}
