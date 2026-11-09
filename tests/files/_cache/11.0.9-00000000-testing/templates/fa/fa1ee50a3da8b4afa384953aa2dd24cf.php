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

/* layout/parts/page_footer.html.twig */
class __TwigTemplate_af44a81bac803f5c710231e9956610e2 extends Template
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
        // line 34
        $context["js_files"] = Twig\Extension\CoreExtension::merge((isset($context["js_files"]) || array_key_exists("js_files", $context) ? $context["js_files"] : (function () { throw new RuntimeError('Variable "js_files" does not exist.', 34, $this->source); })()), $this->extensions['Glpi\Application\View\Extension\PluginExtension']->getPluginsJsScriptsFiles(false));
        // line 35
        $context["js_modules"] = Twig\Extension\CoreExtension::merge((isset($context["js_modules"]) || array_key_exists("js_modules", $context) ? $context["js_modules"] : (function () { throw new RuntimeError('Variable "js_modules" does not exist.', 35, $this->source); })()), $this->extensions['Glpi\Application\View\Extension\PluginExtension']->getPluginsJsModulesFiles(false));
        // line 36
        yield "
            </main> ";
        // line 38
        yield "         </div> ";
        // line 39
        yield "      </div> ";
        // line 40
        yield "   </div> ";
        // line 41
        yield "
   ";
        // line 42
        if ((($tmp = $this->extensions['Glpi\Application\View\Extension\ConfigExtension']->config("maintenance_mode")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 43
            yield "      <div id=\"maintenance-float\">
         <a href=\"";
            // line 44
            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\RoutingExtension']->path("front/config.form.php?forcetab=Config\$5"), "html", null, true);
            yield "\">";
            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("MAINTENANCE MODE"), "html", null, true);
            yield "</a>
      </div>
   ";
        }
        // line 47
        yield "
   ";
        // line 48
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["js_files"]) || array_key_exists("js_files", $context) ? $context["js_files"] : (function () { throw new RuntimeError('Variable "js_files" does not exist.', 48, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["js_file"]) {
            // line 49
            yield "      <script type=\"text/javascript\" src=\"";
            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\FrontEndAssetsExtension']->jsPath(CoreExtension::getAttribute($this->env, $this->source, $context["js_file"], "path", [], "any", false, false, false, 49), (((CoreExtension::getAttribute($this->env, $this->source, $context["js_file"], "options", [], "any", true, true, false, 49) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["js_file"], "options", [], "any", false, false, false, 49)))) ? (CoreExtension::getAttribute($this->env, $this->source, $context["js_file"], "options", [], "any", false, false, false, 49)) : ([]))), "html", null, true);
            yield "\"></script>
   ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['js_file'], $context['_parent']);
        $context = array_intersect_key($context, $_parent);
        $context += $_parent;
        // line 51
        yield "
   ";
        // line 52
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["js_modules"]) || array_key_exists("js_modules", $context) ? $context["js_modules"] : (function () { throw new RuntimeError('Variable "js_modules" does not exist.', 52, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["js_file"]) {
            // line 53
            yield "      <script type=\"module\" src=\"";
            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\FrontEndAssetsExtension']->jsPath(CoreExtension::getAttribute($this->env, $this->source, $context["js_file"], "path", [], "any", false, false, false, 53), (((CoreExtension::getAttribute($this->env, $this->source, $context["js_file"], "options", [], "any", true, true, false, 53) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["js_file"], "options", [], "any", false, false, false, 53)))) ? (CoreExtension::getAttribute($this->env, $this->source, $context["js_file"], "options", [], "any", false, false, false, 53)) : ([]))), "html", null, true);
            yield "\"></script>
   ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['js_file'], $context['_parent']);
        $context = array_intersect_key($context, $_parent);
        $context += $_parent;
        // line 55
        yield "
    ";
        // line 56
        if ( !(null === (isset($context["debug_info"]) || array_key_exists("debug_info", $context) ? $context["debug_info"] : (function () { throw new RuntimeError('Variable "debug_info" does not exist.', 56, $this->source); })()))) {
            // line 57
            yield "        ";
            yield (string) Twig\Extension\CoreExtension::include($this->env, $context, "components/debug/debug_toolbar.html.twig", ["debug_info" =>             // line 58
(isset($context["debug_info"]) || array_key_exists("debug_info", $context) ? $context["debug_info"] : (function () { throw new RuntimeError('Variable "debug_info" does not exist.', 58, $this->source); })())], false);
            // line 59
            yield "
    ";
        }
        // line 61
        yield "</body>
</html>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "layout/parts/page_footer.html.twig";
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
        return array (  122 => 61,  118 => 59,  116 => 58,  114 => 57,  112 => 56,  109 => 55,  99 => 53,  95 => 52,  92 => 51,  82 => 49,  78 => 48,  75 => 47,  67 => 44,  64 => 43,  62 => 42,  59 => 41,  57 => 40,  55 => 39,  53 => 38,  50 => 36,  48 => 35,  46 => 34,  43 => 32,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "layout/parts/page_footer.html.twig", "/Users/alvarozuculajunior/BCX/glpi/templates/layout/parts/page_footer.html.twig");
    }
}
