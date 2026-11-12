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

/* components/form/pictures.html.twig */
class __TwigTemplate_485ce77482fb627c88851b4a991d9672 extends Template
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
        $context["model_itemtype"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 35, $this->source); })()), "getModelClass", [], "method", false, false, false, 35);
        // line 36
        $context["gallery_type"] = ((array_key_exists("gallery_type", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["gallery_type"]) || array_key_exists("gallery_type", $context) ? $context["gallery_type"] : (function () { throw new RuntimeError('Variable "gallery_type" does not exist.', 36, $this->source); })()), "")) : (""));
        // line 37
        if (( !(null === (isset($context["model_itemtype"]) || array_key_exists("model_itemtype", $context) ? $context["model_itemtype"] : (function () { throw new RuntimeError('Variable "model_itemtype" does not exist.', 37, $this->source); })())) || $this->extensions['Glpi\Application\View\Extension\PhpExtension']->isUsingTrait((isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 37, $this->source); })()), "Glpi\\Features\\AssetImage"))) {
            // line 38
            yield "
    ";
            // line 39
            $context["picture_single"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 39, $this->source); })()), "getItemtypeOrModelPicture", ["picture"], "method", false, false, false, 39);
            // line 40
            yield "    ";
            $context["picture_front"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 40, $this->source); })()), "getItemtypeOrModelPicture", ["picture_front"], "method", false, false, false, 40);
            // line 41
            yield "    ";
            $context["picture_rear"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 41, $this->source); })()), "getItemtypeOrModelPicture", ["picture_rear"], "method", false, false, false, 41);
            // line 42
            yield "    ";
            $context["pictures_misc"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 42, $this->source); })()), "getItemtypeOrModelPicture", ["pictures"], "method", false, false, false, 42);
            // line 43
            yield "    ";
            $context["has_pictures"] = ((( !Twig\Extension\CoreExtension::testEmpty((isset($context["picture_single"]) || array_key_exists("picture_single", $context) ? $context["picture_single"] : (function () { throw new RuntimeError('Variable "picture_single" does not exist.', 43, $this->source); })())) ||  !Twig\Extension\CoreExtension::testEmpty((isset($context["picture_front"]) || array_key_exists("picture_front", $context) ? $context["picture_front"] : (function () { throw new RuntimeError('Variable "picture_front" does not exist.', 43, $this->source); })()))) ||  !Twig\Extension\CoreExtension::testEmpty((isset($context["picture_rear"]) || array_key_exists("picture_rear", $context) ? $context["picture_rear"] : (function () { throw new RuntimeError('Variable "picture_rear" does not exist.', 43, $this->source); })()))) ||  !Twig\Extension\CoreExtension::testEmpty((isset($context["pictures_misc"]) || array_key_exists("pictures_misc", $context) ? $context["pictures_misc"] : (function () { throw new RuntimeError('Variable "pictures_misc" does not exist.', 43, $this->source); })())));
            // line 44
            yield "    ";
            $context["has_qr"] = ( !(($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 44, $this->source); })()), "isNewItem", [], "method", false, false, false, 44)) && $tmp instanceof Markup ? (string) $tmp : $tmp) && CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 44, $this->source); })()), "getType", [], "method", false, false, false, 44), $this->extensions['Glpi\Application\View\Extension\ConfigExtension']->config("asset_types")));
            // line 45
            yield "
    ";
            // line 46
            if (((($tmp = (isset($context["has_pictures"]) || array_key_exists("has_pictures", $context) ? $context["has_pictures"] : (function () { throw new RuntimeError('Variable "has_pictures" does not exist.', 46, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp) || (($tmp = (isset($context["has_qr"]) || array_key_exists("has_qr", $context) ? $context["has_qr"] : (function () { throw new RuntimeError('Variable "has_qr" does not exist.', 46, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp))) {
                // line 47
                yield "        <div class=\"";
                yield (string) ((((isset($context["gallery_type"]) || array_key_exists("gallery_type", $context) ? $context["gallery_type"] : (function () { throw new RuntimeError('Variable "gallery_type" does not exist.', 47, $this->source); })()) == "horizontal")) ? ("col-12 me-n2") : (""));
                yield " d-flex flex-column card\">
            <div class=\"card-body\">
                ";
                // line 49
                if ((($tmp = (isset($context["has_pictures"]) || array_key_exists("has_pictures", $context) ? $context["has_pictures"] : (function () { throw new RuntimeError('Variable "has_pictures" does not exist.', 49, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 50
                    yield "                    <h3 class=\"mb-3\">
                        ";
                    // line 51
                    yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(_n("Picture", "Pictures", Session::getPluralNumber()), "html", null, true);
                    yield "
                    </h3>

                    <div class=\"d-flex\">
                        ";
                    // line 55
                    if ( !Twig\Extension\CoreExtension::testEmpty((isset($context["picture_single"]) || array_key_exists("picture_single", $context) ? $context["picture_single"] : (function () { throw new RuntimeError('Variable "picture_single" does not exist.', 55, $this->source); })()))) {
                        // line 56
                        yield "                            ";
                        $context["picture_single"] = Twig\Extension\CoreExtension::first($this->env->getCharset(), (isset($context["picture_single"]) || array_key_exists("picture_single", $context) ? $context["picture_single"] : (function () { throw new RuntimeError('Variable "picture_single" does not exist.', 56, $this->source); })()));
                        // line 57
                        yield "                            ";
                        $context["imgs"] = [Twig\Extension\CoreExtension::merge((isset($context["picture_single"]) || array_key_exists("picture_single", $context) ? $context["picture_single"] : (function () { throw new RuntimeError('Variable "picture_single" does not exist.', 57, $this->source); })()), ["title" => _n("Picture", "Pictures", 1)])];
                        // line 58
                        yield "                        ";
                    } else {
                        // line 59
                        yield "                            ";
                        if ((( !Twig\Extension\CoreExtension::testEmpty((isset($context["picture_front"]) || array_key_exists("picture_front", $context) ? $context["picture_front"] : (function () { throw new RuntimeError('Variable "picture_front" does not exist.', 59, $this->source); })())) ||  !Twig\Extension\CoreExtension::testEmpty((isset($context["picture_rear"]) || array_key_exists("picture_rear", $context) ? $context["picture_rear"] : (function () { throw new RuntimeError('Variable "picture_rear" does not exist.', 59, $this->source); })()))) ||  !Twig\Extension\CoreExtension::testEmpty((isset($context["pictures_misc"]) || array_key_exists("pictures_misc", $context) ? $context["pictures_misc"] : (function () { throw new RuntimeError('Variable "pictures_misc" does not exist.', 59, $this->source); })())))) {
                            // line 60
                            yield "                                ";
                            $context["imgs"] = [];
                            // line 61
                            yield "                                ";
                            if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["picture_front"]) || array_key_exists("picture_front", $context) ? $context["picture_front"] : (function () { throw new RuntimeError('Variable "picture_front" does not exist.', 61, $this->source); })())) >= 1)) {
                                // line 62
                                yield "                                    ";
                                $context["picture_front"] = Twig\Extension\CoreExtension::first($this->env->getCharset(), (isset($context["picture_front"]) || array_key_exists("picture_front", $context) ? $context["picture_front"] : (function () { throw new RuntimeError('Variable "picture_front" does not exist.', 62, $this->source); })()));
                                // line 63
                                yield "                                    ";
                                $context["imgs"] = Twig\Extension\CoreExtension::merge((isset($context["imgs"]) || array_key_exists("imgs", $context) ? $context["imgs"] : (function () { throw new RuntimeError('Variable "imgs" does not exist.', 63, $this->source); })()), [Twig\Extension\CoreExtension::merge((isset($context["picture_front"]) || array_key_exists("picture_front", $context) ? $context["picture_front"] : (function () { throw new RuntimeError('Variable "picture_front" does not exist.', 63, $this->source); })()), ["title" => __("Front picture")])]);
                                // line 64
                                yield "                                ";
                            }
                            // line 65
                            yield "                                ";
                            if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["picture_rear"]) || array_key_exists("picture_rear", $context) ? $context["picture_rear"] : (function () { throw new RuntimeError('Variable "picture_rear" does not exist.', 65, $this->source); })())) >= 1)) {
                                // line 66
                                yield "                                    ";
                                $context["picture_rear"] = Twig\Extension\CoreExtension::first($this->env->getCharset(), (isset($context["picture_rear"]) || array_key_exists("picture_rear", $context) ? $context["picture_rear"] : (function () { throw new RuntimeError('Variable "picture_rear" does not exist.', 66, $this->source); })()));
                                // line 67
                                yield "                                    ";
                                $context["imgs"] = Twig\Extension\CoreExtension::merge((isset($context["imgs"]) || array_key_exists("imgs", $context) ? $context["imgs"] : (function () { throw new RuntimeError('Variable "imgs" does not exist.', 67, $this->source); })()), [Twig\Extension\CoreExtension::merge((isset($context["picture_rear"]) || array_key_exists("picture_rear", $context) ? $context["picture_rear"] : (function () { throw new RuntimeError('Variable "picture_rear" does not exist.', 67, $this->source); })()), ["title" => __("Rear picture")])]);
                                // line 68
                                yield "                                ";
                            }
                            // line 69
                            yield "                                ";
                            if ( !Twig\Extension\CoreExtension::testEmpty((isset($context["pictures_misc"]) || array_key_exists("pictures_misc", $context) ? $context["pictures_misc"] : (function () { throw new RuntimeError('Variable "pictures_misc" does not exist.', 69, $this->source); })()))) {
                                // line 70
                                yield "                                    ";
                                $context["imgs"] = Twig\Extension\CoreExtension::merge((isset($context["imgs"]) || array_key_exists("imgs", $context) ? $context["imgs"] : (function () { throw new RuntimeError('Variable "imgs" does not exist.', 70, $this->source); })()), (isset($context["pictures_misc"]) || array_key_exists("pictures_misc", $context) ? $context["pictures_misc"] : (function () { throw new RuntimeError('Variable "pictures_misc" does not exist.', 70, $this->source); })()));
                                // line 71
                                yield "                                ";
                            }
                            // line 72
                            yield "                            ";
                        }
                        // line 73
                        yield "                        ";
                    }
                    // line 74
                    yield "                        ";
                    yield (string) Twig\Extension\CoreExtension::include($this->env, $context, "components/photoswipe.html.twig", ["imgs" => (isset($context["imgs"]) || array_key_exists("imgs", $context) ? $context["imgs"] : (function () { throw new RuntimeError('Variable "imgs" does not exist.', 74, $this->source); })()), "gallery_type" => (isset($context["gallery_type"]) || array_key_exists("gallery_type", $context) ? $context["gallery_type"] : (function () { throw new RuntimeError('Variable "gallery_type" does not exist.', 74, $this->source); })())]);
                    yield "
                    </div>
                ";
                }
                // line 77
                yield "                ";
                if ((($tmp = (isset($context["has_qr"]) || array_key_exists("has_qr", $context) ? $context["has_qr"] : (function () { throw new RuntimeError('Variable "has_qr" does not exist.', 77, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 78
                    yield "                    ";
                    yield (string) $macros["fields"]->getTemplateForMacro("macro_htmlField", $context, 78, $this->getSourceContext())->macro_htmlField(...["qrcode", $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("BarcodeManager::renderQRCode", [                    // line 80
(isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 80, $this->source); })())]), __("Asset URL"), ["is_horizontal" => false, "helper" => __("Scan this QRCode to be redirected to the asset page from your mobile device")]]);
                    // line 86
                    yield "
                ";
                }
                // line 88
                yield "            </div>
        </div>
    ";
            }
        }
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "components/form/pictures.html.twig";
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
        return array (  174 => 88,  170 => 86,  168 => 80,  166 => 78,  163 => 77,  156 => 74,  153 => 73,  150 => 72,  147 => 71,  144 => 70,  141 => 69,  138 => 68,  135 => 67,  132 => 66,  129 => 65,  126 => 64,  123 => 63,  120 => 62,  117 => 61,  114 => 60,  111 => 59,  108 => 58,  105 => 57,  102 => 56,  100 => 55,  93 => 51,  90 => 50,  88 => 49,  82 => 47,  80 => 46,  77 => 45,  74 => 44,  71 => 43,  68 => 42,  65 => 41,  62 => 40,  60 => 39,  57 => 38,  55 => 37,  53 => 36,  51 => 35,  48 => 34,  46 => 33,  43 => 32,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "components/form/pictures.html.twig", "/Users/alvarozuculajunior/BCX/glpi/templates/components/form/pictures.html.twig");
    }
}
