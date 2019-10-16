<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* @components/menus/menu.twig */
class __TwigTemplate_393e63032046ddd6ed753d5e25767e5fe0deface57f75f8b8274df1409babac9 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["import" => 1, "macro" => 5, "if" => 7, "set" => 10, "for" => 20];
        $filters = ["merge" => 26, "escape" => 54];
        $functions = ["add_attributes" => 16, "link" => 54];

        try {
            $this->sandbox->checkSecurity(
                ['import', 'macro', 'if', 'set', 'for'],
                ['merge', 'escape'],
                ['add_attributes', 'link']
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        $context["menus"] = $this;
        // line 2
        echo "
";
        // line 3
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($context["menus"]->getmenu_links(($context["items"] ?? null), ($context["attributes"] ?? null), 0, ($context["menu_name"] ?? null)));
        echo "

";
    }

    // line 5
    public function getmenu_links($__items__ = null, $__attributes__ = null, $__menu_level__ = null, $__menu_name__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals([
            "items" => $__items__,
            "attributes" => $__attributes__,
            "menu_level" => $__menu_level__,
            "menu_name" => $__menu_name__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            // line 6
            echo "  ";
            $context["menus"] = $this;
            // line 7
            echo "  ";
            if (($context["items"] ?? null)) {
                // line 8
                echo "    ";
                if ((($context["menu_level"] ?? null) == 0)) {
                    // line 9
                    echo "      ";
                    // line 10
                    echo "      ";
                    $context["additional_attributes"] = ["class" => [0 => "menu", 1 => ("menu--" . $this->sandbox->ensureToStringAllowed(                    // line 13
($context["menu_name"] ?? null)))]];
                    // line 16
                    echo "      <ul ";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(call_user_func_array($this->env->getFunction('add_attributes')->getCallable(), [$context, $this->sandbox->ensureToStringAllowed(($context["additional_attributes"] ?? null))]));
                    echo ">
    ";
                } else {
                    // line 18
                    echo "      <ul class=\"menu menu__subnav\">
    ";
                }
                // line 20
                echo "    ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 21
                    echo "
      ";
                    // line 22
                    $context["item_classes"] = [0 => "menu__item"];
                    // line 23
                    echo "      ";
                    $context["link_classes"] = [0 => "menu__link"];
                    // line 24
                    echo "
      ";
                    // line 25
                    if ($this->getAttribute($context["item"], "below", [])) {
                        // line 26
                        echo "        ";
                        $context["item_classes"] = twig_array_merge($this->sandbox->ensureToStringAllowed(($context["item_classes"] ?? null)), [0 => "has-subnav"]);
                        // line 27
                        echo "        ";
                        $context["link_classes"] = twig_array_merge($this->sandbox->ensureToStringAllowed(($context["link_classes"] ?? null)), [0 => "has-subnav"]);
                        // line 28
                        echo "      ";
                    }
                    // line 29
                    echo "      ";
                    if ($this->getAttribute($context["item"], "in_active_trail", [])) {
                        // line 30
                        echo "        ";
                        $context["item_classes"] = twig_array_merge($this->sandbox->ensureToStringAllowed(($context["item_classes"] ?? null)), [0 => "is-active-trail"]);
                        // line 31
                        echo "        ";
                        $context["link_classes"] = twig_array_merge($this->sandbox->ensureToStringAllowed(($context["link_classes"] ?? null)), [0 => "is-active-trail"]);
                        // line 32
                        echo "      ";
                    }
                    // line 33
                    echo "      ";
                    if ($this->getAttribute($context["item"], "is_collapsed", [])) {
                        // line 34
                        echo "        ";
                        $context["item_classes"] = twig_array_merge($this->sandbox->ensureToStringAllowed(($context["item_classes"] ?? null)), [0 => "is-collapsed"]);
                        // line 35
                        echo "        ";
                        $context["link_classes"] = twig_array_merge($this->sandbox->ensureToStringAllowed(($context["link_classes"] ?? null)), [0 => "is-collapsed"]);
                        // line 36
                        echo "      ";
                    }
                    // line 37
                    echo "      ";
                    if ($this->getAttribute($context["item"], "is_expanded", [])) {
                        // line 38
                        echo "        ";
                        $context["item_classes"] = twig_array_merge($this->sandbox->ensureToStringAllowed(($context["item_classes"] ?? null)), [0 => "is-expanded"]);
                        // line 39
                        echo "        ";
                        $context["link_classes"] = twig_array_merge($this->sandbox->ensureToStringAllowed(($context["link_classes"] ?? null)), [0 => "is-expanded"]);
                        // line 40
                        echo "      ";
                    }
                    // line 41
                    echo "      ";
                    if ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["item"], "original_link", [], "array"), "options", []), "attributes", []), "class", [])) {
                        // line 42
                        echo "        ";
                        $context["link_classes"] = twig_array_merge($this->sandbox->ensureToStringAllowed(($context["link_classes"] ?? null)), [0 => $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["item"], "original_link", [], "array"), "options", []), "attributes", []), "class", [])]);
                        // line 43
                        echo "      ";
                    }
                    // line 44
                    echo "
      ";
                    // line 45
                    $context["additional_item_attributes"] = ["class" =>                     // line 46
($context["item_classes"] ?? null)];
                    // line 48
                    echo "
      ";
                    // line 49
                    $context["link_attributes"] = ["class" =>                     // line 50
($context["link_classes"] ?? null)];
                    // line 52
                    echo "
      <li ";
                    // line 53
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(call_user_func_array($this->env->getFunction('add_attributes')->getCallable(), [$context, $this->sandbox->ensureToStringAllowed(($context["additional_item_attributes"] ?? null))]));
                    echo ">
        ";
                    // line 54
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->getLink($this->sandbox->ensureToStringAllowed($this->getAttribute($context["item"], "title", [])), $this->sandbox->ensureToStringAllowed($this->getAttribute($context["item"], "url", [])), $this->sandbox->ensureToStringAllowed(($context["link_attributes"] ?? null))), "html", null, true);
                    echo "
        ";
                    // line 55
                    if ($this->getAttribute($context["item"], "below", [])) {
                        // line 56
                        echo "          ";
                        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($context["menus"]->getmenu_links($this->getAttribute($context["item"], "below", []), ($context["attributes"] ?? null), (($context["menu_level"] ?? null) + 1)));
                        echo "
        ";
                    }
                    // line 58
                    echo "      </li>
    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 60
                echo "    </ul>
  ";
            }
        } catch (\Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (\Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "@components/menus/menu.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  217 => 60,  210 => 58,  204 => 56,  202 => 55,  198 => 54,  194 => 53,  191 => 52,  189 => 50,  188 => 49,  185 => 48,  183 => 46,  182 => 45,  179 => 44,  176 => 43,  173 => 42,  170 => 41,  167 => 40,  164 => 39,  161 => 38,  158 => 37,  155 => 36,  152 => 35,  149 => 34,  146 => 33,  143 => 32,  140 => 31,  137 => 30,  134 => 29,  131 => 28,  128 => 27,  125 => 26,  123 => 25,  120 => 24,  117 => 23,  115 => 22,  112 => 21,  107 => 20,  103 => 18,  97 => 16,  95 => 13,  93 => 10,  91 => 9,  88 => 8,  85 => 7,  82 => 6,  67 => 5,  60 => 3,  57 => 2,  55 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@components/menus/menu.twig", "/app/web/themes/contrib/gesso/source/_patterns/03-components/menus/menu.twig");
    }
}
