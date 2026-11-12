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

/* components/user/info_card.html.twig */
class __TwigTemplate_cb49ae5e4289a3a9f3c21a1bb5ecf818 extends Template
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
        $context["enable_anonymization"] = (((array_key_exists("enable_anonymization", $context) &&  !(null === $context["enable_anonymization"]))) ? ($context["enable_anonymization"]) : (false));
        // line 34
        yield "
<div class=\"p-0 user-info-card\">
   <div class=\"row\">
      <div class=\"col-auto pt-1\">
         ";
        // line 38
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 38, $this->source); })()), "id", [], "array", false, false, false, 38)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 39
            yield "            ";
            yield (string) Twig\Extension\CoreExtension::include($this->env, $context, "components/user/picture.html.twig", ["users_id" => CoreExtension::getAttribute($this->env, $this->source,             // line 40
(isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 40, $this->source); })()), "id", [], "array", false, false, false, 40), "user_object" => (((            // line 41
array_key_exists("user_object", $context) &&  !(null === $context["user_object"]))) ? ($context["user_object"]) : (null)), "enable_anonymization" =>             // line 42
(isset($context["enable_anonymization"]) || array_key_exists("enable_anonymization", $context) ? $context["enable_anonymization"] : (function () { throw new RuntimeError('Variable "enable_anonymization" does not exist.', 42, $this->source); })())]);
            // line 43
            yield "
         ";
        }
        // line 45
        yield "      </div>
      <div class=\"col ms-2\">
         <h4 class=\"card-title mb-1\">
            ";
        // line 48
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 48, $this->source); })()), "id", [], "array", false, false, false, 48)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 49
            yield "               <a href=\"";
            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeFormPath("User", CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 49, $this->source); })()), "id", [], "array", false, false, false, 49)), "html", null, true);
            yield "\">";
            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 49, $this->source); })()), "user_name", [], "array", false, false, false, 49), "html", null, true);
            yield "</a>
            ";
        } else {
            // line 51
            yield "               ";
            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 51, $this->source); })()), "user_name", [], "array", false, false, false, 51), "html", null, true);
            yield "
            ";
        }
        // line 53
        yield "         </h4>

         <div class=\"text-muted d-grid gap-y-1\" style=\"grid-template-columns: auto 1fr; column-gap: 0.25rem; align-items: center;\">
            ";
        // line 56
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "login", [], "any", true, true, false, 56) &&  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 56, $this->source); })()), "login", [], "array", false, false, false, 56)))) {
            // line 57
            yield "                <i class=\"ti ti-id-badge\"></i>
                <span>";
            // line 58
            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 58, $this->source); })()), "login", [], "array", false, false, false, 58), "html", null, true);
            yield "</span>
            ";
        }
        // line 60
        yield "            ";
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 60, $this->source); })()), "email", [], "array", false, false, false, 60)) > 0)) {
            // line 61
            yield "               <i class=\"ti ti-mail\"></i>
               <a href=\"mailto:";
            // line 62
            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 62, $this->source); })()), "email", [], "array", false, false, false, 62), "html", null, true);
            yield "\">";
            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 62, $this->source); })()), "email", [], "array", false, false, false, 62), "html", null, true);
            yield "</a>
            ";
        }
        // line 64
        yield "            ";
        if (( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 64, $this->source); })()), "phone", [], "array", false, false, false, 64)) ||  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 64, $this->source); })()), "phone2", [], "array", false, false, false, 64)))) {
            // line 65
            yield "               <i class=\"ti ti-phone\"></i>
               <span class=\"d-flex align-items-center flex-wrap gap-1\">
                  ";
            // line 67
            if ( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 67, $this->source); })()), "phone", [], "array", false, false, false, 67))) {
                // line 68
                yield "                     <a href=\"tel:";
                yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 68, $this->source); })()), "phone", [], "array", false, false, false, 68), "html", null, true);
                yield "\">";
                yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 68, $this->source); })()), "phone", [], "array", false, false, false, 68), "html", null, true);
                yield "</a>
                  ";
            }
            // line 70
            yield "                  ";
            if (( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 70, $this->source); })()), "phone", [], "array", false, false, false, 70)) &&  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 70, $this->source); })()), "phone2", [], "array", false, false, false, 70)))) {
                // line 71
                yield "                     <span> - </span>
                  ";
            }
            // line 73
            yield "                  ";
            if ( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 73, $this->source); })()), "phone2", [], "array", false, false, false, 73))) {
                // line 74
                yield "                     <a href=\"tel:";
                yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 74, $this->source); })()), "phone2", [], "array", false, false, false, 74), "html", null, true);
                yield "\">";
                yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 74, $this->source); })()), "phone2", [], "array", false, false, false, 74), "html", null, true);
                yield "</a>
                  ";
            }
            // line 76
            yield "               </span>
            ";
        }
        // line 78
        yield "            ";
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 78, $this->source); })()), "mobile", [], "array", false, false, false, 78)) > 0)) {
            // line 79
            yield "               <i class=\"ti ti-device-mobile\"></i>
               <a href=\"tel:";
            // line 80
            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 80, $this->source); })()), "mobile", [], "array", false, false, false, 80), "html", null, true);
            yield "\">";
            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 80, $this->source); })()), "mobile", [], "array", false, false, false, 80), "html", null, true);
            yield "</a>
            ";
        }
        // line 82
        yield "            ";
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 82, $this->source); })()), "registration_number", [], "array", false, false, false, 82)) > 0)) {
            // line 83
            yield "               <i class=\"ti ti-id-badge-2\"></i>
               <span>";
            // line 84
            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 84, $this->source); })()), "registration_number", [], "array", false, false, false, 84), "html", null, true);
            yield "</span>
            ";
        }
        // line 86
        yield "            ";
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 86, $this->source); })()), "locations_id", [], "array", false, false, false, 86) > 0)) {
            // line 87
            yield "               <i class=\"";
            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeIcon("Location"), "html", null, true);
            yield "\"></i>
               <span title=\"";
            // line 88
            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeName("Location"), "html", null, true);
            yield "\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\">";
            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemName("Location", CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 88, $this->source); })()), "locations_id", [], "array", false, false, false, 88)), "html", null, true);
            yield "</span>
            ";
        }
        // line 90
        yield "            ";
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 90, $this->source); })()), "usertitles_id", [], "array", false, false, false, 90) > 0)) {
            // line 91
            yield "               <i class=\"";
            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeIcon("UserTitle"), "html", null, true);
            yield "\"></i>
               <span title=\"";
            // line 92
            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(_x("person", "Title"), "html", null, true);
            yield "\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\">";
            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemName("UserTitle", CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 92, $this->source); })()), "usertitles_id", [], "array", false, false, false, 92)), "html", null, true);
            yield "</span>
            ";
        }
        // line 94
        yield "            ";
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 94, $this->source); })()), "usercategories_id", [], "array", false, false, false, 94) > 0)) {
            // line 95
            yield "               <i class=\"";
            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeIcon("UserCategory"), "html", null, true);
            yield "\"></i>
               <span title=\"";
            // line 96
            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(_n("Category", "Categories", 1), "html", null, true);
            yield "\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\">";
            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemName("UserCategory", CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 96, $this->source); })()), "usercategories_id", [], "array", false, false, false, 96)), "html", null, true);
            yield "</span>
            ";
        }
        // line 98
        yield "            ";
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 98, $this->source); })()), "groups_id", [], "array", false, false, false, 98) > 0)) {
            // line 99
            yield "               <i class=\"";
            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeIcon("Group"), "html", null, true);
            yield "\"></i>
               <span title=\"";
            // line 100
            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Default group"), "html", null, true);
            yield "\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\">";
            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemName("Group", CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 100, $this->source); })()), "groups_id", [], "array", false, false, false, 100)), "html", null, true);
            yield "</span>
            ";
        }
        // line 102
        yield "         </div>
      </div>

      ";
        // line 105
        if ((($tmp = (((array_key_exists("can_edit", $context) &&  !(null === $context["can_edit"]))) ? ($context["can_edit"]) : (false))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 106
            yield "         <div class=\"col\">
            <a class=\"btn btn-icon btn-sm btn-outline-secondary\" href=\"";
            // line 107
            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\RoutingExtension']->path("front/preference.php"), "html", null, true);
            yield "\"
               title=\"";
            // line 108
            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Edit"), "html", null, true);
            yield "\" data-bs-toggle=\"tooltip\" data-bs-placement=\"right\">
               <i class=\"ti ti-user-edit\"></i>
            </a>
         </div>
      ";
        }
        // line 113
        yield "   </div>
</div>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "components/user/info_card.html.twig";
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
        return array (  260 => 113,  252 => 108,  248 => 107,  245 => 106,  243 => 105,  238 => 102,  231 => 100,  226 => 99,  223 => 98,  216 => 96,  211 => 95,  208 => 94,  201 => 92,  196 => 91,  193 => 90,  186 => 88,  181 => 87,  178 => 86,  173 => 84,  170 => 83,  167 => 82,  160 => 80,  157 => 79,  154 => 78,  150 => 76,  142 => 74,  139 => 73,  135 => 71,  132 => 70,  124 => 68,  122 => 67,  118 => 65,  115 => 64,  108 => 62,  105 => 61,  102 => 60,  97 => 58,  94 => 57,  92 => 56,  87 => 53,  81 => 51,  73 => 49,  71 => 48,  66 => 45,  62 => 43,  60 => 42,  59 => 41,  58 => 40,  56 => 39,  54 => 38,  48 => 34,  46 => 33,  43 => 32,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "components/user/info_card.html.twig", "/Users/alvarozuculajunior/BCX/glpi/templates/components/user/info_card.html.twig");
    }
}
