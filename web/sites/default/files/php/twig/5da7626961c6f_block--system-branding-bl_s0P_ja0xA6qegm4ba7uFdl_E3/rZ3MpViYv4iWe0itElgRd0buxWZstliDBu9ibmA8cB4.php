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

/* themes/custom/usf/templates/block/block--system-branding-block.html.twig */
class __TwigTemplate_b330bd8e5de8b33eb5dd7193cd1063f46f84185256e4890bec6403ba453f64aa extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["set" => 26, "embed" => 34];
        $filters = ["clean_class" => 28];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'embed'],
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
        // line 25
        echo "
";
        // line 26
        $context["classes"] = [0 => "block", 1 => ("block--provider-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed($this->getAttribute(        // line 28
($context["configuration"] ?? null), "provider", [])))), 2 => ("block--id-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(        // line 29
($context["plugin_id"] ?? null))))];
        // line 31
        echo "
";
        // line 32
        $context["attributes"] = $this->getAttribute(($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method");
        // line 33
        echo "
";
        // line 34
        $this->loadTemplate("themes/custom/usf/templates/block/block--system-branding-block.html.twig", "themes/custom/usf/templates/block/block--system-branding-block.html.twig", 34, "74298672")->display(twig_array_merge($context, ["hide_wrapper" => true, "has_constrain" => false, "hide_content_wrapper" => true, "label" => false]));
    }

    public function getTemplateName()
    {
        return "themes/custom/usf/templates/block/block--system-branding-block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 34,  67 => 33,  65 => 32,  62 => 31,  60 => 29,  59 => 28,  58 => 26,  55 => 25,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/usf/templates/block/block--system-branding-block.html.twig", "/app/web/themes/custom/usf/templates/block/block--system-branding-block.html.twig");
    }
}


/* themes/custom/usf/templates/block/block--system-branding-block.html.twig */
class __TwigTemplate_b330bd8e5de8b33eb5dd7193cd1063f46f84185256e4890bec6403ba453f64aa___74298672 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->loadTemplate("@components/block/block.twig", "themes/custom/usf/templates/block/block--system-branding-block.html.twig", 34);
        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["if" => 42, "include" => 43];
        $filters = [];
        $functions = ["path" => 44];

        try {
            $this->sandbox->checkSecurity(
                ['if', 'include'],
                [],
                ['path']
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

    protected function doGetParent(array $context)
    {
        return "@components/block/block.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 41
    public function block_content($context, array $blocks = [])
    {
        // line 42
        echo "    ";
        if (($context["site_logo"] ?? null)) {
            // line 43
            echo "      ";
            $this->loadTemplate("@components/site-logo/site-logo.twig", "themes/custom/usf/templates/block/block--system-branding-block.html.twig", 43)->display(twig_array_merge($context, ["url" => $this->env->getExtension('Drupal\Core\Template\TwigExtension')->getPath("<front>"), "site_logo" =>             // line 45
($context["site_logo"] ?? null)]));
            // line 47
            echo "    ";
        }
        // line 48
        echo "    ";
        if (($context["site_name"] ?? null)) {
            // line 49
            echo "      ";
            $this->loadTemplate("@components/site-name/site-name.twig", "themes/custom/usf/templates/block/block--system-branding-block.html.twig", 49)->display(twig_array_merge($context, ["url" => $this->env->getExtension('Drupal\Core\Template\TwigExtension')->getPath("<front>"), "site_name" =>             // line 51
($context["site_name"] ?? null)]));
            // line 53
            echo "    ";
        }
        // line 54
        echo "    ";
        if (($context["site_slogan"] ?? null)) {
            // line 55
            echo "      ";
            $this->loadTemplate("@components/site-slogan/site-slogan.twig", "themes/custom/usf/templates/block/block--system-branding-block.html.twig", 55)->display(twig_array_merge($context, ["site_slogan" =>             // line 56
($context["site_slogan"] ?? null)]));
            // line 58
            echo "    ";
        }
        // line 59
        echo "  ";
    }

    public function getTemplateName()
    {
        return "themes/custom/usf/templates/block/block--system-branding-block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  185 => 59,  182 => 58,  180 => 56,  178 => 55,  175 => 54,  172 => 53,  170 => 51,  168 => 49,  165 => 48,  162 => 47,  160 => 45,  158 => 43,  155 => 42,  152 => 41,  70 => 34,  67 => 33,  65 => 32,  62 => 31,  60 => 29,  59 => 28,  58 => 26,  55 => 25,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/usf/templates/block/block--system-branding-block.html.twig", "/app/web/themes/custom/usf/templates/block/block--system-branding-block.html.twig");
    }
}
