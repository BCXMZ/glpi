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

/* components/user/picture.html.twig */
class __TwigTemplate_eb8e132f385bad5a7fd26405a8250907 extends Template
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
        $context["avatar_size"] = (((array_key_exists("avatar_size", $context) &&  !(null === $context["avatar_size"]))) ? ($context["avatar_size"]) : ("avatar-md"));
        // line 35
        $context["anonymized"] = ((($tmp = (isset($context["enable_anonymization"]) || array_key_exists("enable_anonymization", $context) ? $context["enable_anonymization"] : (function () { throw new RuntimeError('Variable "enable_anonymization" does not exist.', 35, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp) && ($this->extensions['Glpi\Application\View\Extension\ConfigExtension']->getEntityConfig("anonymize_support_agents", $this->extensions['Glpi\Application\View\Extension\SessionExtension']->session("glpiactive_entity")) != Twig\Extension\CoreExtension::constant("Entity::ANONYMIZE_DISABLED")));
        // line 36
        $context["user"] = (((array_key_exists("user_object", $context) &&  !(null === $context["user_object"]))) ? ($context["user_object"]) : ($this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItem("User", (isset($context["users_id"]) || array_key_exists("users_id", $context) ? $context["users_id"] : (function () { throw new RuntimeError('Variable "users_id" does not exist.', 36, $this->source); })()))));
        // line 37
        $context["with_link"] = (((array_key_exists("with_link", $context) &&  !(null === $context["with_link"]))) ? ($context["with_link"]) : (true));
        // line 38
        $context["force_initials"] = (((array_key_exists("force_initials", $context) &&  !(null === $context["force_initials"]))) ? ($context["force_initials"]) : (false));
        // line 39
        if ( !(($tmp = (isset($context["force_initials"]) || array_key_exists("force_initials", $context) ? $context["force_initials"] : (function () { throw new RuntimeError('Variable "force_initials" does not exist.', 39, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 40
            yield "    ";
            $context["user_thumbnail"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 40, $this->source); })()), "getThumbnailPicturePath", [(isset($context["enable_anonymization"]) || array_key_exists("enable_anonymization", $context) ? $context["enable_anonymization"] : (function () { throw new RuntimeError('Variable "enable_anonymization" does not exist.', 40, $this->source); })())], "method", false, false, false, 40);
            // line 41
            yield "    ";
            if ((((isset($context["user_thumbnail"]) || array_key_exists("user_thumbnail", $context) ? $context["user_thumbnail"] : (function () { throw new RuntimeError('Variable "user_thumbnail" does not exist.', 41, $this->source); })()) == null) &&  !(($tmp = $this->extensions['Glpi\Application\View\Extension\ConfigExtension']->getEntityConfig("display_users_initials", $this->extensions['Glpi\Application\View\Extension\SessionExtension']->session("glpiactive_entity"))) && $tmp instanceof Markup ? (string) $tmp : $tmp))) {
                // line 42
                yield "        ";
                $context["user_thumbnail"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 42, $this->source); })()), "getPicturePath", [(isset($context["enable_anonymization"]) || array_key_exists("enable_anonymization", $context) ? $context["enable_anonymization"] : (function () { throw new RuntimeError('Variable "enable_anonymization" does not exist.', 42, $this->source); })())], "method", false, false, false, 42);
                // line 43
                yield "    ";
            }
        } else {
            // line 45
            yield "    ";
            $context["user_thumbnail"] = null;
        }
        // line 47
        yield "
";
        // line 48
        if (((($tmp = (isset($context["with_link"]) || array_key_exists("with_link", $context) ? $context["with_link"] : (function () { throw new RuntimeError('Variable "with_link" does not exist.', 48, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp) &&  !(($tmp = (isset($context["anonymized"]) || array_key_exists("anonymized", $context) ? $context["anonymized"] : (function () { throw new RuntimeError('Variable "anonymized" does not exist.', 48, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp))) {
            // line 49
            yield "   <a href=\"";
            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 49, $this->source); })()), "getLinkURL", [], "method", false, false, false, 49), "html", null, true);
            yield "\" class=\"d-flex align-items-center\">
";
        }
        // line 51
        yield "
";
        // line 52
        $context["bg_color"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 52, $this->source); })()), "getUserInitialsBgColor", [], "method", false, false, false, 52);
        // line 53
        $context["fg_color"] = $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Toolbox::getFgColor", [(isset($context["bg_color"]) || array_key_exists("bg_color", $context) ? $context["bg_color"] : (function () { throw new RuntimeError('Variable "bg_color" does not exist.', 53, $this->source); })()), 60]);
        // line 54
        yield "<span class=\"avatar ";
        yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["avatar_size"]) || array_key_exists("avatar_size", $context) ? $context["avatar_size"] : (function () { throw new RuntimeError('Variable "avatar_size" does not exist.', 54, $this->source); })()), "html", null, true);
        yield " rounded\"
      style=\"";
        // line 55
        if ( !(null === (isset($context["user_thumbnail"]) || array_key_exists("user_thumbnail", $context) ? $context["user_thumbnail"] : (function () { throw new RuntimeError('Variable "user_thumbnail" does not exist.', 55, $this->source); })()))) {
            yield "background-image: url(";
            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["user_thumbnail"]) || array_key_exists("user_thumbnail", $context) ? $context["user_thumbnail"] : (function () { throw new RuntimeError('Variable "user_thumbnail" does not exist.', 55, $this->source); })()), "html", null, true);
            yield "); background-color: inherit; ";
        } else {
            yield " background-color: ";
            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["bg_color"]) || array_key_exists("bg_color", $context) ? $context["bg_color"] : (function () { throw new RuntimeError('Variable "bg_color" does not exist.', 55, $this->source); })()), "html", null, true);
            yield ";";
        }
        yield " aspect-ratio: 1;\">
   ";
        // line 56
        if ((null === (isset($context["user_thumbnail"]) || array_key_exists("user_thumbnail", $context) ? $context["user_thumbnail"] : (function () { throw new RuntimeError('Variable "user_thumbnail" does not exist.', 56, $this->source); })()))) {
            // line 57
            yield "         ";
            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 57, $this->source); })()), "getUserInitials", [(isset($context["enable_anonymization"]) || array_key_exists("enable_anonymization", $context) ? $context["enable_anonymization"] : (function () { throw new RuntimeError('Variable "enable_anonymization" does not exist.', 57, $this->source); })())], "method", false, false, false, 57), "html", null, true);
            yield "
   ";
        }
        // line 59
        yield "</span>

";
        // line 61
        if (((($tmp = (isset($context["with_link"]) || array_key_exists("with_link", $context) ? $context["with_link"] : (function () { throw new RuntimeError('Variable "with_link" does not exist.', 61, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp) &&  !(($tmp = (isset($context["anonymized"]) || array_key_exists("anonymized", $context) ? $context["anonymized"] : (function () { throw new RuntimeError('Variable "anonymized" does not exist.', 61, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp))) {
            // line 62
            yield "   ";
            if ((($tmp = (((array_key_exists("display_login", $context) &&  !(null === $context["display_login"]))) ? ($context["display_login"]) : (false))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 63
                yield "      <span class=\"ms-2\">";
                yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 63, $this->source); })()), "fields", [], "any", false, false, false, 63), "name", [], "array", false, false, false, 63), "html", null, true);
                yield "</span>
   ";
            }
            // line 65
            yield "
   </a>
";
        }
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "components/user/picture.html.twig";
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
        return array (  135 => 65,  129 => 63,  126 => 62,  124 => 61,  120 => 59,  114 => 57,  112 => 56,  100 => 55,  95 => 54,  93 => 53,  91 => 52,  88 => 51,  82 => 49,  80 => 48,  77 => 47,  73 => 45,  69 => 43,  66 => 42,  63 => 41,  60 => 40,  58 => 39,  56 => 38,  54 => 37,  52 => 36,  50 => 35,  48 => 34,  46 => 33,  43 => 32,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "components/user/picture.html.twig", "/Users/alvarozuculajunior/BCX/glpi/templates/components/user/picture.html.twig");
    }
}
