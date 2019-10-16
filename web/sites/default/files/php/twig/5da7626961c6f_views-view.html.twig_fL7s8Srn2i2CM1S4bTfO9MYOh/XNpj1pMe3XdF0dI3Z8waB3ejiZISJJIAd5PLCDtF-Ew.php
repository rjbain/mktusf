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

/* themes/custom/usf/templates/views/views-view.html.twig */
class __TwigTemplate_2d2c330108a8cb8b43a1b85c471e0df6fbdb99b8c15be2cef46f102152806e72 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["set" => 29, "include" => 38];
        $filters = ["clean_class" => 31];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'include'],
                ['clean_class'],
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
        // line 28
        echo "
";
        // line 29
        $context["classes"] = [0 => "view", 1 => ("view--" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(        // line 31
($context["id"] ?? null)))), 2 => ("view--display-" . $this->sandbox->ensureToStringAllowed(        // line 32
($context["display_id"] ?? null))), 3 => ((        // line 33
($context["dom_id"] ?? null)) ? (("js-view-dom-id-" . $this->sandbox->ensureToStringAllowed(($context["dom_id"] ?? null)))) : (""))];
        // line 35
        echo "
";
        // line 36
        $context["attributes"] = $this->getAttribute(($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method");
        // line 37
        echo "
";
        // line 38
        $this->loadTemplate("@components/views/views-view/views-view.twig", "themes/custom/usf/templates/views/views-view.html.twig", 38)->display(twig_array_merge($context, ["element" => "div", "header" =>         // line 40
($context["header"] ?? null), "exposed" =>         // line 41
($context["exposed"] ?? null), "attachment_before" =>         // line 42
($context["attachment_before"] ?? null), "rows" =>         // line 43
($context["rows"] ?? null), "empty" =>         // line 44
($context["empty"] ?? null), "pager" =>         // line 45
($context["pager"] ?? null), "attachment_after" =>         // line 46
($context["attachment_after"] ?? null), "more" =>         // line 47
($context["more"] ?? null), "footer" =>         // line 48
($context["footer"] ?? null), "feed_icons" =>         // line 49
($context["feed_icons"] ?? null)]));
    }

    public function getTemplateName()
    {
        return "themes/custom/usf/templates/views/views-view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 49,  80 => 48,  79 => 47,  78 => 46,  77 => 45,  76 => 44,  75 => 43,  74 => 42,  73 => 41,  72 => 40,  71 => 38,  68 => 37,  66 => 36,  63 => 35,  61 => 33,  60 => 32,  59 => 31,  58 => 29,  55 => 28,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/usf/templates/views/views-view.html.twig", "/app/web/themes/custom/usf/templates/views/views-view.html.twig");
    }
}
