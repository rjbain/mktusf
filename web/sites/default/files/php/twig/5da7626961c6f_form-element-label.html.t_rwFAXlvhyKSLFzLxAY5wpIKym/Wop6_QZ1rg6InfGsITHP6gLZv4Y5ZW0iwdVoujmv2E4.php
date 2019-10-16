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

/* themes/custom/usf/templates/form/form-element-label.html.twig */
class __TwigTemplate_6409cecf000101168ff69cd35111ba7350e955eb2eaccfb2092dfb828968fc55 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["set" => 1, "if" => 9];
        $filters = ["escape" => 10, "t" => 13];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
                ['escape', 't'],
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
        $context["classes"] = [0 => "form-item__label", 1 => (((        // line 3
($context["title_display"] ?? null) == "after")) ? ("is-after") : ("")), 2 => (((        // line 4
($context["title_display"] ?? null) == "invisible")) ? ("visually-hidden") : ("")), 3 => ((        // line 5
($context["required"] ?? null)) ? ("is-required") : ("")), 4 => ((        // line 6
($context["required"] ?? null)) ? ("js-form-required") : (""))];
        // line 8
        echo "
";
        // line 9
        if (( !twig_test_empty(($context["title"] ?? null)) || ($context["required"] ?? null))) {
            // line 10
            echo "<label";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method")), "html", null, true);
            echo ">
    ";
            // line 11
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title"] ?? null)), "html", null, true);
            echo "
    ";
            // line 12
            if (($context["required"] ?? null)) {
                // line 13
                echo "      <span class=\"form-item__required-marker\"><span class=\"visually-hidden\">";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("This field is required."));
                echo "</span></span>
    ";
            }
            // line 15
            echo "  </label>";
        }
    }

    public function getTemplateName()
    {
        return "themes/custom/usf/templates/form/form-element-label.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 15,  77 => 13,  75 => 12,  71 => 11,  66 => 10,  64 => 9,  61 => 8,  59 => 6,  58 => 5,  57 => 4,  56 => 3,  55 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/usf/templates/form/form-element-label.html.twig", "/app/web/themes/custom/usf/templates/form/form-element-label.html.twig");
    }
}
