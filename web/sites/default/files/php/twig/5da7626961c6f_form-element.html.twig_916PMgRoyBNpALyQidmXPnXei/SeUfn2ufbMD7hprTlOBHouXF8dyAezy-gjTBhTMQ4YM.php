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

/* themes/custom/usf/templates/form/form-element.html.twig */
class __TwigTemplate_a90cd9c123706c4556548a6f68f037e16494353dbaf92570d37207bf6abdb222 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["set" => 1, "if" => 19];
        $filters = ["clean_class" => 3, "escape" => 18];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
                ['clean_class', 'escape'],
                []
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
        $context["add_classes"] = [0 => "form-item", 1 => ("form-item--" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(        // line 3
($context["type"] ?? null)))), 2 => ("form-item--id-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(        // line 4
($context["name"] ?? null)))), 3 => "js-form-item", 4 => ("js-form-type-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(        // line 6
($context["type"] ?? null)))), 5 => ("js-form-item-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(        // line 7
($context["name"] ?? null)))), 6 => ((!twig_in_filter(        // line 8
($context["title_display"] ?? null), [0 => "after", 1 => "before"])) ? ("has-no-label") : ("")), 7 => (((        // line 9
($context["disabled"] ?? null) == "disabled")) ? ("is-disabled") : ("")), 8 => ((        // line 10
($context["errors"] ?? null)) ? ("has-error") : (""))];
        // line 12
        echo "
";
        // line 13
        $context["add_description_classes"] = [0 => "form-item__description", 1 => (((        // line 15
($context["description_display"] ?? null) == "invisible")) ? ("visually-hidden") : (""))];
        // line 17
        echo "
<div";
        // line 18
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["attributes"] ?? null), "addClass", [0 => ($context["add_classes"] ?? null)], "method")), "html", null, true);
        echo ">
  ";
        // line 19
        if (twig_in_filter(($context["label_display"] ?? null), [0 => "before", 1 => "invisible"])) {
            // line 20
            echo "    ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null)), "html", null, true);
            echo "
  ";
        }
        // line 22
        echo "  ";
        if ( !twig_test_empty(($context["prefix"] ?? null))) {
            // line 23
            echo "    <span class=\"form-item__prefix\">";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["prefix"] ?? null)), "html", null, true);
            echo "</span>
  ";
        }
        // line 25
        echo "  ";
        if (((($context["description_display"] ?? null) == "before") && $this->getAttribute(($context["description"] ?? null), "content", []))) {
            // line 26
            echo "    <div";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["description"] ?? null), "attributes", []), "addClass", [0 => ($context["add_description_classes"] ?? null)], "method")), "html", null, true);
            echo ">
      ";
            // line 27
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["description"] ?? null), "content", [])), "html", null, true);
            echo "
    </div>
  ";
        }
        // line 30
        echo "  ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["children"] ?? null)), "html", null, true);
        echo "
  ";
        // line 31
        if ( !twig_test_empty(($context["suffix"] ?? null))) {
            // line 32
            echo "    <span class=\"form-item__suffix\">";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["suffix"] ?? null)), "html", null, true);
            echo "</span>
  ";
        }
        // line 34
        echo "  ";
        if ((($context["label_display"] ?? null) == "after")) {
            // line 35
            echo "    ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null)), "html", null, true);
            echo "
  ";
        }
        // line 37
        echo "  ";
        if (($context["errors"] ?? null)) {
            // line 38
            echo "    <div class=\"form-item__error-message\">
      ";
            // line 39
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["errors"] ?? null)), "html", null, true);
            echo "
    </div>
  ";
        }
        // line 42
        echo "  ";
        if ((twig_in_filter(($context["description_display"] ?? null), [0 => "after", 1 => "invisible"]) && $this->getAttribute(($context["description"] ?? null), "content", []))) {
            // line 43
            echo "    <div";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["description"] ?? null), "attributes", []), "addClass", [0 => ($context["add_description_classes"] ?? null)], "method")), "html", null, true);
            echo ">
      ";
            // line 44
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["description"] ?? null), "content", [])), "html", null, true);
            echo "
    </div>
  ";
        }
        // line 47
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "themes/custom/usf/templates/form/form-element.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  156 => 47,  150 => 44,  145 => 43,  142 => 42,  136 => 39,  133 => 38,  130 => 37,  124 => 35,  121 => 34,  115 => 32,  113 => 31,  108 => 30,  102 => 27,  97 => 26,  94 => 25,  88 => 23,  85 => 22,  79 => 20,  77 => 19,  73 => 18,  70 => 17,  68 => 15,  67 => 13,  64 => 12,  62 => 10,  61 => 9,  60 => 8,  59 => 7,  58 => 6,  57 => 4,  56 => 3,  55 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/usf/templates/form/form-element.html.twig", "/app/web/themes/custom/usf/templates/form/form-element.html.twig");
    }
}
