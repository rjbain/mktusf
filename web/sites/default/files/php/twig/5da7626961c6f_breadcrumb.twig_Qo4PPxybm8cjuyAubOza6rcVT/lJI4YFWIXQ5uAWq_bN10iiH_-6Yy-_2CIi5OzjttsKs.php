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

/* @layouts/regions/breadcrumb/breadcrumb.twig */
class __TwigTemplate_dec3ed5210d93793b06b5b69c03adfcb4984d68ce33e3b0d4797ae0b5af72bf5 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["block" => 3, "include" => 4];
        $filters = [];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['block', 'include'],
                [],
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
        echo "<div class=\"l-breadcrumb\">
  <div class=\"l-constrain\">
    ";
        // line 3
        $this->displayBlock('content', $context, $blocks);
        // line 12
        echo "  </div>
</div>
";
    }

    // line 3
    public function block_content($context, array $blocks = [])
    {
        // line 4
        echo "      ";
        $this->loadTemplate("@components/breadcrumb/breadcrumb.twig", "@layouts/regions/breadcrumb/breadcrumb.twig", 4)->display(twig_array_merge($context, ["breadcrumb" => [0 => ["url" => "#", "text" => "Home"], 1 => ["url" => "#", "text" => "About"], 2 => ["text" => "Current Page"]]]));
        // line 11
        echo "    ";
    }

    public function getTemplateName()
    {
        return "@layouts/regions/breadcrumb/breadcrumb.twig";
    }

    public function getDebugInfo()
    {
        return array (  74 => 11,  71 => 4,  68 => 3,  62 => 12,  60 => 3,  56 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@layouts/regions/breadcrumb/breadcrumb.twig", "/app/web/themes/contrib/gesso/source/_patterns/02-layouts/regions/breadcrumb/breadcrumb.twig");
    }
}
