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

/* themes/custom/usf/templates/navigation/pager.html.twig */
class __TwigTemplate_ca46445e920a287c4cab1ec108633bcc5e43004a6b10ab193221567e217ff18d extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["if" => 14, "include" => 15];
        $filters = ["t" => 17];
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
        // line 13
        echo "
";
        // line 14
        if (($context["items"] ?? null)) {
            // line 15
            echo "  ";
            $this->loadTemplate("@components/pagers/pager.twig", "themes/custom/usf/templates/navigation/pager.html.twig", 15)->display(twig_to_array(["modifier_classes" => "", "heading" => t("Pagination"), "items" =>             // line 18
($context["items"] ?? null), "current" =>             // line 19
($context["current"] ?? null)]));
        }
    }

    public function getTemplateName()
    {
        return "themes/custom/usf/templates/navigation/pager.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 19,  62 => 18,  60 => 15,  58 => 14,  55 => 13,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/usf/templates/navigation/pager.html.twig", "/app/web/themes/custom/usf/templates/navigation/pager.html.twig");
    }
}
