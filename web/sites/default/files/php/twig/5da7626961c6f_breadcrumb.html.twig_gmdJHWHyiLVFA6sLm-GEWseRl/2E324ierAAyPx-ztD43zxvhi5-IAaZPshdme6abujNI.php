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

/* themes/custom/usf/templates/navigation/breadcrumb.html.twig */
class __TwigTemplate_f51be4f99cae5315e4294963ccd3ed68d85387b3143320b56260b1be75d9b851 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["if" => 13, "include" => 14];
        $filters = ["t" => 16];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['if', 'include'],
                ['t'],
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
        // line 12
        echo "
";
        // line 13
        if (($context["breadcrumb"] ?? null)) {
            // line 14
            echo "  ";
            $this->loadTemplate("@components/breadcrumb/breadcrumb.twig", "themes/custom/usf/templates/navigation/breadcrumb.html.twig", 14)->display(twig_to_array(["modifier_classes" => "", "heading" => t("Breadcrumb"), "breadcrumb" =>             // line 17
($context["breadcrumb"] ?? null)]));
        }
    }

    public function getTemplateName()
    {
        return "themes/custom/usf/templates/navigation/breadcrumb.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 17,  60 => 14,  58 => 13,  55 => 12,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/usf/templates/navigation/breadcrumb.html.twig", "/app/web/themes/custom/usf/templates/navigation/breadcrumb.html.twig");
    }
}
